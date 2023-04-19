<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class SaveProductsAndAccessoriesAsRevision extends SugarApi{
    public function registerApiRest(){
        return array(
            'SaveProductsAndAccessoriesAsRevision' => array(
                'reqType' => 'POST',
                'noLoginRequired' => true,
                'path' => array('saveproductsandaccessoriesasrevision'),
                'method' => 'MySaveProductsAndAccessoriesAsRevision',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MySaveProductsAndAccessoriesAsRevision($api, $args){
        global $db; 
        $this->requireArgs($args, array('shipping_contact_id','billing_contact_id','shipping_account_id','billing_account_id','product_template_id','quote_id','name','date_quote_expected_closed','accessories','product_category_id','saved_by_portal_user_id','selectedProductQuantity'));

        $product_template_id = $_POST['product_template_id']; 
        $billing_account_id = $_POST['billing_account_id'];
        $shipping_account_id = $_POST['shipping_account_id'];
        $billing_contact_id = $_POST['billing_contact_id'];
        $shipping_contact_id = $_POST['shipping_contact_id'];
        $product_category_id = $_POST['product_category_id'];
        $saved_by_portal_user_id = $_POST['saved_by_portal_user_id'];
        $selectedProductQuantity = (int) $_POST['selectedProductQuantity'];
        $name = $_POST['name'];
        $quote_id = $_POST['quote_id'];
        $prev_quote_id = $_POST['quote_id'];
        $date_quote_expected_closed = $_POST['date_quote_expected_closed'];

        $prev_quote =  BeanFactory::getBean('Quotes', $quote_id ,array('disable_row_level_security' => true));
        $prev_quote_num = $prev_quote->quote_number_portal;
        $prev_quote_num_explode = explode("_",$prev_quote_num);
        $final_quote_number = $this->get_final_quote_number($prev_quote_num_explode[0],$quote_id);
        $prev_quote_num = $prev_quote_num_explode[0];
        $exploded_again = explode("_",$final_quote_number);
        $concat_number = 0;
        if(count($exploded_again)==2){
            $concat_number = (int) $exploded_again[1];
        }
        $concat_number++;
        $number = "000" . $concat_number;
        $number = substr($number, -3);



        

        $product_ids = array();

        $new_quote = BeanFactory::newBean("Quotes",array('disable_row_level_security' => true));
        $new_quote->name = $name;
        $new_quote->saved_by_portal_user_id = $saved_by_portal_user_id;
        $new_quote->mark_quote_c = true;
        $new_quote->product_category_id_c = $product_category_id;
        $new_quote->date_quote_expected_closed = $date_quote_expected_closed;
        $new_quote->quote_number_portal = $prev_quote_num.'_'.$number;

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
        $product->quantity = $selectedProductQuantity;
        $product->cost_price = $product_tempalte->cost_price;
        $product->discount_price = $product_tempalte->list_price;
        $product->list_price = $product_tempalte->list_price;
        $product->mft_part_num = $product_tempalte->mft_part_num;
        $product->product_template_id = $product_tempalte->id;
        $product_id = $product->save();
        $product_ids[] = $product_id;
        $total = $total + $selectedProductQuantity * $product_tempalte->list_price;
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
        $quote_for_number = BeanFactory::getBean('Quotes', $quote_id ,array('disable_row_level_security' => true));
        
        $db->query("UPDATE quotes SET new_sub='{$total}', new_sub_usdollar='{$total}', total='{$total}', total_usdollar='{$total}', subtotal_usdollar='{$total}', subtotal='{$total}' WHERE id='{$quote_id}'");
        $db->query("UPDATE product_bundles SET new_sub='{$total}', new_sub_usdollar='{$total}', total='{$total}', total_usdollar='{$total}', subtotal_usdollar='{$total}', subtotal='{$total}'  WHERE id='{$bundle_id['bundle_id']}'");
        $db->query("UPDATE quotes_cstm SET mark_quote_c=0  WHERE id_c='{$prev_quote_id}'"); 
        return  $quote_id;
        

    }

    public function get_final_quote_number($quote_num,$quote_id){
        global $db;
        $sql = "SELECT quote_number_portal FROM quotes WHERE quote_number_portal LIKE '{$quote_num}%' order by quote_number_portal DESC LIMIT 1";
        $result = $db->query($sql);
        $row = $db->fetchByAssoc($result);
        return $row['quote_number_portal'];
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