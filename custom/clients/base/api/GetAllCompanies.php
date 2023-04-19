<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class GetAllCompanies extends SugarApi{
    public function registerApiRest(){
        return array(
            'GetAllCompanies' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'path' => array('GetAllCompanies'),
                'method' => 'MyGetAllCompanies',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    public function MyGetAllCompanies($api, $args){
        global $db;
        $sql = "SELECT id,name FROM accounts WHERE deleted=0";
        $result = $db->query($sql);
        $response = array();
        while($row = $db->fetchByAssoc($result)){
            $response[] = $row;
        }
        return $response;
    }

}

?>