<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetCompanyRelatedData extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetQuoteRelatedData' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'path' => array('GetCompanyRelatedData'),
                'method' => 'MyGetCompanyRelatedData',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetCompanyRelatedData($api, $args){
        $this->requireArgs($args, array('company_id'));
        $result = array();
        $company_id = $args['company_id'];

        $company = BeanFactory::getBean('Accounts', $company_id ,array('disable_row_level_security' => true));
        $result['company'] = array(
            'id' => $company->id,
            'name' => $company->name,
            'account_type' => $company->account_type,
            'phone_office' => $company->phone_office,
            'website' => $company->website,
            'description' => $company->description,
            'date_entered' => $company->date_entered,
            'date_modified' => $company->date_modified
            
        );
        $company->load_relationship('accounts_productcategories_2');
        $related_categotries = $company->accounts_productcategories_2->getBeans();
        $company->load_relationship('producttemplates_accounts_1');
        $related_products = $company->producttemplates_accounts_1->getBeans();
        $categotries = array();
        foreach($related_categotries as $key=>$related_categotry){
            $category_id = $related_categotry->id;
            
            $categotries[$category_id] = array(
                'id' => $related_categotry->id,
                'name' => $related_categotry->name,
                'date_entered' => $related_categotry->date_entered,
                'date_modified' => $related_categotry->date_modified,
            );
            
            $products = array();
            foreach($related_products as $key_product=>$related_product){
                $product_id = $related_product->id;
                //check if product is in category
                $is_product_related_to_category = $this->is_product_related_to_category($category_id,$product_id);
                if($is_product_related_to_category){
                    $products[$key_product] = array(
                        'id' => $related_product->id,
                        'name' => $related_product->name,
                        'date_entered' => $related_product->date_entered,
                        'date_modified' => $related_product->date_modified
                    );
                }
            } 
            $categotries[$category_id]['products'] = $products;
        }
        $result['categotries'] = $categotries;
        return $result;
    }

    public function is_product_related_to_category($category_id,$product_id){
        global $db;
        $sql = "SELECT * FROM product_templates WHERE product_templates.id ='{$product_id}' AND product_templates.category_id='{$category_id}'";
        $result = $db->query($sql);
        if($result->num_rows > 0){
            return true;
        }
        return false;
    }
}

?>