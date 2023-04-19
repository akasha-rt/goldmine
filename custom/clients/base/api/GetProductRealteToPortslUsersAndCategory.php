<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetProductRealteToPortslUsersAndCategory extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetProductRealteToPortslUsersAndCategory' => array(
                'reqType' => 'GET',
                'noLoginRequired' => true,
                'path' => array('getproductrealtetoportslusersandcategory'),
                'method' => 'MyGetProductRealteToPortslUsersAndCategory',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetProductRealteToPortslUsersAndCategory($api, $args){
        global $db,$log;
        $data =array();
        $portsl_user_id = $args['portal_user_id'];
        $category_id = $args['category_id'];
        // $sql = "SELECT product_templates.id, product_templates.name, product_templates.date_entered, product_templates.date_modified, product_templates.website, product_categories.name as 'category_name', product_templates.mft_part_num, product_templates.discount_price, product_templates.shipping_cost FROM product_templates INNER JOIN producttemplates_pu_portalusers_1_c ON producttemplates_pu_portalusers_1_c.producttemplates_pu_portalusers_1producttemplates_ida = product_templates.id LEFT JOIN product_categories ON  product_categories.id=product_templates.category_id  WHERE producttemplates_pu_portalusers_1_c.producttemplates_pu_portalusers_1pu_portalusers_idb = '{$portsl_user_id}' AND product_templates.category_id = '{$category_id}'";
        $sql = "SELECT
        product_templates.id,
        product_templates.name,
        product_categories.name AS 'category_name',
        product_templates.date_entered,
        product_templates.date_modified,
        product_templates.website,
        product_templates.mft_part_num,
        product_templates.discount_price,
        product_templates.shipping_cost,
        product_templates.list_price
    FROM
        product_templates
        LEFT JOIN product_categories ON product_categories.id = product_templates.category_id 
        AND product_categories.deleted = 0
        INNER JOIN producttemplates_accounts_1_c ON producttemplates_accounts_1_c.producttemplates_accounts_1producttemplates_ida = product_templates.id 
        AND producttemplates_accounts_1_c.deleted = 0
        WHERE
        product_templates.category_id = '{$category_id}' 
        AND product_templates.deleted = 0 
        AND producttemplates_accounts_1_c.producttemplates_accounts_1accounts_idb = '{$portsl_user_id}'";
        $result  = $db->query($sql);
        while($row = $db->fetchByAssoc($result)){
            $data[] = $row;
        }
        return $data;
    }
}
?>