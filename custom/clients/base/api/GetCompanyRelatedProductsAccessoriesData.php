<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetCompanyRelatedProductsAccessoriesData extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetCompanyRelatedProductsAccessoriesData' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'path' => array('GetCompanyRelatedProductsAccessoriesData'),
                'method' => 'MyGetCompanyRelatedProductsAccessoriesData',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetCompanyRelatedProductsAccessoriesData($api, $args){
        $this->requireArgs($args, array('company_id'));
        $result = array();
        $company_id = $args['company_id'];
        global $db;
        $sql = "SELECT
        pa_productaccessories.id,
        pa_productaccessories.name,
        pa_productaccessories.product_options_c,
        pa_productaccessories.date_entered 
    FROM
        pa_productaccessories 
    WHERE
        pa_productaccessories.deleted = 0 
        AND pa_productaccessories.id IN (
        SELECT
            producttemplates_pa_productaccessories_1_c.productteme68cssories_idb 
        FROM
            producttemplates_pa_productaccessories_1_c 
        WHERE
            producttemplates_pa_productaccessories_1_c.producttemplates_pa_productaccessories_1producttemplates_ida IN ( SELECT producttemplates_accounts_1_c.producttemplates_accounts_1producttemplates_ida FROM producttemplates_accounts_1_c WHERE producttemplates_accounts_1_c.producttemplates_accounts_1accounts_idb = '{$company_id}' AND producttemplates_accounts_1_c.deleted = 0 ) 
        AND producttemplates_pa_productaccessories_1_c.deleted = 0 
        )";
        $results = $db->query($sql);
        while($row = $db->fetchByAssoc($results)){
            $result[$row['id']] = $row;
        }
        return array('records'=>$result); 
    }
}

?>