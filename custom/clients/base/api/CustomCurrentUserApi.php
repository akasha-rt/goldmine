<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once("clients/base/api/CurrentUserApi.php");
class CustomCurrentUserApi extends CurrentUserApi
{
    public function registerApiRest()
    {
        return parent::registerApiRest();
    }
    public function retrieveCurrentUser($api, $args)
    {
        $result = parent::retrieveCurrentUser($api, $args);
        $result['current_user']['acl']['PU_PortalUsers']['create'] = 'no';
        $result['current_user']['acl']['PT_PortalTeams']['create'] = 'no';
        return $result;
    }
}