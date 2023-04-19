<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetQuotePDF extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetQuotePDF' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'path' => array('getquotepdf'),
                'method' => 'MyGetQuotePDF',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetQuotePDF($api, $args){
        $this->requireArgs($args, array('record'));
        $record = $args['record'];
        $return_data = array();
        /** Getting  Records data for Parsing */
        $quote_id = $args['record'];
        $quote = BeanFactory::getBean('Quotes', $record ,array('disable_row_level_security' => true));
        
        $show_date = date("l, F jS  Y");

        $quote_data = array(
            'billing_address_street' => $quote->billing_address_street,
            'billing_address_city' => $quote->billing_address_city,
            'billing_address_state' => $quote->billing_address_state,
            'billing_address_postalcode' => $quote->billing_address_postalcode,
            'quote_number_portal' => $quote->quote_number_portal
        );
        $return_data['quote_data'] = $quote_data;
        $quote->load_relationship('billing_contacts');
        $related_billing_contacts = $quote->billing_contacts->getBeans();
        $contact = array();
        foreach($related_billing_contacts as $key=>$related_billing_contact){
            $contact = array(
                'first_name' => $related_billing_contact->first_name,
                'last_name' => $related_billing_contact->last_name,
                'phone_mobile' => $related_billing_contact->phone_mobile,
                'phone_work' => $related_billing_contact->phone_work,
                'email' => $related_billing_contact->email1,
            );
        }

        $return_data['contact'] = $contact;
        $quote->load_relationship('products');
        $related_products = $quote->products->getBeans();
        $accessories = array();
        $product = array();
        $product_tempalte_id = '';
        foreach($related_products as $key=>$related_product){
            if(!empty($related_product->product_template_id)){
                $product_tempalte_id = $related_product->product_template_id;
                $product_template = BeanFactory::getBean('ProductTemplates', $related_product->product_template_id ,array('disable_row_level_security' => true));
                $product = array(
                    'name' => $related_product->name,
                    'website' => $product_template->website,
                    'mft_part_num' => $related_product->mft_part_num,
                    'quantity' => $related_product->quantity,
                    'discount_price' => $related_product->discount_price,
                    'description' => $related_product->description,
                );
                $return_data['product'] = $product;
            }else{
                $accessories[$key] = array(
                    'name' => $related_product->name,
                    'mft_part_num' => $related_product->mft_part_num,
                    'quantity' => $related_product->quantity,
                    'discount_price' => $related_product->discount_price,
                    'description' => $this->getProductAccesoryDescription($related_product->mft_part_num, $product_tempalte_id),
                );
            }
        }
        $return_data['accessories'] = $accessories;   
        return $return_data;
    }

    public function getProductAccesoryDescription($mft_part_num, $product_tempalte_id){
        global $db;
        $description = '';
        $sql = "SELECT producttemplates_pa_productaccessories_1_c.productteme68cssories_idb as 'accessory_id' FROM producttemplates_pa_productaccessories_1_c WHERE  producttemplates_pa_productaccessories_1_c.producttemplates_pa_productaccessories_1producttemplates_ida='{$product_tempalte_id}' AND producttemplates_pa_productaccessories_1_c.deleted=0";
        $result = $db->query($sql);
        while($row = $db->fetchByAssoc($result)){
            $accessory_id = $row['accessory_id'];
            $sql_a = "SELECT product_options_c FROM pa_productaccessories WHERE id='{$accessory_id}' AND deleted=0;";
            $result_a = $db->query($sql_a);
            while($row_a = $db->fetchByAssoc($result_a)){
                $options = $row_a['product_options_c'];
                $decoded_options = json_decode($options,true);
                foreach($decoded_options as $decoded_option){
                    if($decoded_option[0]==$mft_part_num){
                        return $decoded_option[2];
                    }
                }
            }
        }
        return $description;
    }
}

?>