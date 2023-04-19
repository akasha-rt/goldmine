<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetProductOptions extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetProductOptions' => array(
                'reqType' => 'GET',
                'noLoginRequired' => true,
                'path' => array('getproductoptions'),
                'method' => 'MyGetProductOptions',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetProductOptions($api, $args){
        global $db;
        $sql = "SELECT product_options_c FROM pa_productaccessories WHERE id='{$args['id']}' LIMIT 1;";
        $result  = $db->query($sql);
        $row = $db->fetchByAssoc($result);
        return $row['product_options_c'];

    }
}

?>