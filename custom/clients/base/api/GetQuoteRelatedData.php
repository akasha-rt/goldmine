<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetQuoteRelatedData extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetQuoteRelatedData' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'path' => array('GetQuoteRelatedData'),
                'method' => 'MyGetQuoteRelatedData',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetQuoteRelatedData($api, $args){
        $this->requireArgs($args, array('quote_id'));
        $result = array();
        $quote_id = $args['quote_id'];

        $quote = BeanFactory::getBean('Quotes', $quote_id ,array('disable_row_level_security' => true));
        $result['quote'] = array(
            'id' => $quote->id,
            'name' => $quote->name,
            'saved_by_portal_user_id' => $quote->saved_by_portal_user_id,
            'mark_quote_c' => $quote->mark_quote_c,
            'product_category_id_c' => $quote->product_category_id_c,
            'date_quote_expected_closed' => $quote->date_quote_expected_closed,
            'date_entered' => $quote->date_entered,
            'date_modified' => $quote->date_modified
            
        );
        $quote->load_relationship('products');
        $related_products = $quote->products->getBeans();
        $products = array();
        foreach($related_products as $key=>$related_product){
            $products[$key] = array(
                'id' => $related_product->id,
                'name' => $related_product->name,
                'product_template_id' => $related_product->product_template_id,
                'quantity' => $related_product->quantity,
                'discount_price' => $related_product->discount_price,
                'list_price' => $related_product->list_price,
                'date_entered' => $related_product->date_entered,
                'date_modified' => $related_product->date_modified
            );
        }
        $result['related_products'] = $products;

        $quote->load_relationship('shipping_accounts');
        $related_shipping_accounts = $quote->shipping_accounts->getBeans();
        $shipping_accounts = array();
        foreach($related_shipping_accounts as $key=>$related_shipping_account){
            $shipping_accounts[$key] = array(
                'id' => $related_shipping_account->id,
                'name' => $related_shipping_account->name,
                'date_entered' => $related_shipping_account->date_entered,
                'date_modified' => $related_shipping_account->date_modified
            );
        }
        $result['related_shipping_accounts'] = $shipping_accounts;

        $quote->load_relationship('billing_accounts');
        $related_billing_accounts = $quote->billing_accounts->getBeans();
        $billing_accounts = array();
        foreach($related_billing_accounts as $key=>$related_billing_account){
            $billing_accounts[$key] = array(
                'id' => $related_billing_account->id,
                'name' => $related_billing_account->name,
                'date_entered' => $related_billing_account->date_entered,
                'date_modified' => $related_billing_account->date_modified
            );
        }
        $result['related_billing_accounts'] = $billing_accounts;


        $quote->load_relationship('shipping_contacts');
        $related_shipping_contacts = $quote->shipping_contacts->getBeans();
        $shipping_contacts = array();
        foreach($related_shipping_contacts as $key=>$related_shipping_contact){
            $shipping_contacts[$key] = array(
                'id' => $related_shipping_contact->id,
                'name' => $related_shipping_contact->name,
                'date_entered' => $related_shipping_contact->date_entered,
                'date_modified' => $related_shipping_contact->date_modified
            );
        }
        $result['related_shipping_contacts'] = $shipping_contacts;

        $quote->load_relationship('billing_contacts');
        $related_billing_contacts = $quote->billing_contacts->getBeans();
        $result['related_billing_contacts'] = $related_billing_contacts;



        $quote->load_relationship('billing_contacts');
        $related_billing_contacts = $quote->billing_contacts->getBeans();
        $billing_contacts = array();
        foreach($related_billing_contacts as $key=>$related_billing_contact){
            $billing_contacts[$key] = array(
                'id' => $related_billing_contact->id,
                'name' => $related_billing_contact->name,
                'date_entered' => $related_billing_contact->date_entered,
                'date_modified' => $related_billing_contact->date_modified
            );
        }
        $result['related_billing_contacts'] = $billing_contacts;



        
        $quote->load_relationship('opportunities');
        $related_opportunities = $quote->opportunities->getBeans();
        $opportunities = array();
        foreach($related_opportunities as $key=>$related_opportunity){
            $opportunities[$key] = array(
                'id' => $related_opportunity->id,
                'name' => $related_opportunity->name,
                'date_entered' => $related_opportunity->date_entered,
                'date_modified' => $related_opportunity->date_modified
            );
        }
        $result['related_opportunities'] = $opportunities;

        $quote->load_relationship('quotes_accounts_1');
        $related_accounts = $quote->quotes_accounts_1->getBeans();
        $accounts = array();
        foreach($related_accounts as $key=>$related_account){
            $accounts[$key] = array(
                'id' => $related_account->id,
                'name' => $related_account->name,
                'date_entered' => $related_account->date_entered,
                'date_modified' => $related_account->date_modified
            );
        }
        $result['accounts'] = $accounts;
        return $result;

    }

    public function get_bundle_id($quote_id){
        global $db;
        $sql = "SELECT bundle_id FROM product_bundle_quote WHERE quote_id='{$quote_id}' AND deleted=0 LIMIT 1;";
        $result = $db->query($sql);
        $row = $db->fetchByAssoc($result);
        return $row['bundle_id'];
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