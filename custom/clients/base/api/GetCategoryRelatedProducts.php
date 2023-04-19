<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetCategoryRelatedProducts extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetCategoryRelatedProducts' => array(
                'reqType' => 'GET',
                'noLoginRequired' => true,
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'path' => array('GetCategoryRelatedProducts'),
                'method' => 'MyGetGetCategoryRelatedProducts',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetGetCategoryRelatedProducts($api, $args){
        $this->requireArgs($args, array('category_id','type','product_id'));
        global $db;
        $category_id = $args['category_id'];
        $method = $args['type'];
        $data = array();
        if($method=="get"){
            $sql = "SELECT * FROM product_templates WHERE category_id='{$category_id}' AND deleted=0";
            $result = $db->query($sql);
            while($row = $db->fetchByAssoc($result)){
                $data[] = $row;
            }
        }
        return json_encode($data);
    }
}

?>