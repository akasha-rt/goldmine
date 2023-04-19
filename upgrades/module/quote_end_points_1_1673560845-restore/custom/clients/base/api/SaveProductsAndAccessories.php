<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class SaveProductsAndAccessories extends SugarApi{
    public function registerApiRest(){
        return array(
            'SaveProductsAndAccessories' => array(
                'reqType' => 'POST',
                'noLoginRequired' => true,
                'path' => array('saveproductsandaccessories'),
                'method' => 'MySaveProductsAndAccessories',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MySaveProductsAndAccessories($api, $args){
        global $db; 
        $this->requireArgs($args, array('shipping_contact_id','billing_contact_id','shipping_account_id','billing_account_id','product_template_id','name','date_quote_expected_closed','accessories','product_category_id','saved_by_portal_user_id'));
        $product_template_id = $_POST['product_template_id']; 
        $billing_account_id = $_POST['billing_account_id'];
        $shipping_account_id = $_POST['shipping_account_id'];
        $billing_contact_id = $_POST['billing_contact_id'];
        $shipping_contact_id = $_POST['shipping_contact_id'];
        $product_category_id = $_POST['product_category_id'];
        $saved_by_portal_user_id = $_POST['saved_by_portal_user_id'];

        $name = $_POST['name'];
        $date_quote_expected_closed = $_POST['date_quote_expected_closed'];

        $product_ids = array();

        $new_quote = BeanFactory::newBean("Quotes",array('disable_row_level_security' => true));
        $new_quote->name = $name;
        $new_quote->saved_by_portal_user_id = $saved_by_portal_user_id;
        $new_quote->mark_quote_c = true; 
        $new_quote->product_category_id_c = $product_category_id;
        $new_quote->date_quote_expected_closed = $date_quote_expected_closed;
        

        $billTo = BeanFactory::getBean("Contacts",$billing_contact_id,array('disable_row_level_security' => true));

        $new_quote->billing_address_street = $billTo->primary_address_street;
        $new_quote->billing_address_city = $billTo->primary_address_city;
        $new_quote->billing_address_state = $billTo->primary_address_state;
        $new_quote->billing_address_postalcode = $billTo->primary_address_postalcode;
        
        $ShipTo = BeanFactory::getBean("Contacts",$shipping_contact_id,array('disable_row_level_security' => true));
        $new_quote->shipping_address_street = $ShipTo->primary_address_street;
        $new_quote->shipping_address_city = $ShipTo->primary_address_city;
        $new_quote->shipping_address_state = $ShipTo->primary_address_state;
        $new_quote->shipping_address_postalcode = $ShipTo->primary_address_postalcode;
        $new_quote->shipping_address_country = $ShipTo->primary_address_country;

        $new_qiote_id = $new_quote->save(); 

        $new_quote->load_relationship('billing_accounts');
        $new_quote->billing_accounts->add($billing_account_id);

        $new_quote->load_relationship('shipping_accounts');
        $new_quote->shipping_accounts->add($shipping_account_id);

        $new_quote->load_relationship('billing_contacts');
        $new_quote->billing_contacts->add($billing_contact_id);

        $new_quote->load_relationship('shipping_contacts');
        $new_quote->shipping_contacts->add($shipping_contact_id);
        
        $bundle = BeanFactory::newBean("ProductBundles",array('disable_row_level_security' => true));
        $bundle->save();
        $test = $bundle->load_relationship('quotes');
        $bundle->quotes->add($new_qiote_id);

        $quote_id = $new_qiote_id;
        $accessories = json_decode($_POST['accessories'],true);

       
        $quote = BeanFactory::retrieveBean('Quotes', $quote_id ,array('disable_row_level_security' => true));
        $total = (int) $quote->total;

        $bundle_id = $this->get_bundle_id($quote_id);
        $product_index = $this->get_bundle_latest_index($bundle_id['bundle_id']);
       

        $product_tempalte = BeanFactory::retrieveBean('ProductTemplates', $product_template_id,array('disable_row_level_security' => true));
        $product = BeanFactory::newBean("Products" ,array('disable_row_level_security' => true));
        $product->name = $product_tempalte->name;
        $product->quantity = 1;
        $product->cost_price = $product_tempalte->cost_price;
        $product->discount_price = $product_tempalte->discount_price;
        $product->list_price = $product_tempalte->list_price;
        $product->mft_part_num = $product_tempalte->mft_part_num;
        $product->product_template_id = $product_tempalte->id;
        $product_id = $product->save();
        $product_ids[] = $product_id;
        $total = $total + (int) $product_tempalte->discount_price;
        foreach($accessories as $accessory){
            $product = BeanFactory::newBean("Products" ,array('disable_row_level_security' => true));
            $product->name = $accessory['1'];
            $product->quantity = $accessory['0'];
            $product->discount_price = $accessory['2'];
            $product->mft_part_num = $accessory['1'];
            $product_id = $product->save();
            $product_ids[] = $product_id;
            $total = $total + ($accessory['0'] * (int) $accessory['2']);  
        }
       
        $this->link_products_to_quote($quote_id,$product_ids,$product_index,$bundle_id['bundle_id']);
        $db->query("UPDATE quotes SET new_sub='{$total}', new_sub_usdollar='{$total}', total='{$total}', total_usdollar='{$total}', quote_number_portal='{$this->get_quote_number($quote_id)}' WHERE id='{$quote_id}'");
        return  $quote_id;
        

    }

    public function get_quote_number($quote_id){
        global $db;
        $sql = "SELECT quote_num FROM quotes WHERE id='{$quote_id}' AND deleted=0 LIMIT 1;";
        $result = $db->query($sql);
        $row = $db->fetchByAssoc($result);
        return $row['quote_num'];
    }

    public function get_bundle_id($quote_id){
        global $db;
        $sql = "SELECT bundle_id FROM product_bundle_quote WHERE quote_id='{$quote_id}' AND deleted=0 LIMIT 1;";
        $result = $db->query($sql);
        $row = $db->fetchByAssoc($result);
        return $row;
    }

    public function get_bundle_latest_index($bundel_id){
        global $db;
        $sql = "SELECT * FROM product_bundle_product WHERE bundle_id='{$bundel_id}' ORDER BY product_index DESC LIMIT 1;";
        $result = $db->query($sql);
        $row = $db->fetchByAssoc($result);
        if(!empty($row['product_index'])){
            return (int)$row['product_index'];
        }
        return -1;
    }

    public function link_products_to_quote($quote_id,$product_ids,$product_index, $bundle_id){
        global $db;
        $quote = BeanFactory::retrieveBean('Quotes', $quote_id ,array('disable_row_level_security' => true));
        $quote->load_relationship('products');
        $temp_product_index = $product_index;
        $date_time = date("Y-m-d H:i:s");
        foreach($product_ids as $product_id){
            $id = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
            $quote->products->add($product_id);
            $quote->save();
            $temp_product_index = $temp_product_index + 1;
            $sql="INSERT INTO product_bundle_product (id,date_modified,deleted,bundle_id,product_id,product_index) VALUES ('{$product_id}', '{$date_time}', 0, '{$bundle_id}', '{$product_id}', '{$temp_product_index}');";
            $db->query($sql);
        }
    }
}

?>