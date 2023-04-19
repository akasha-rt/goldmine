<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AfterLoginGetCookiesForSubpanelsState
{
    public function handle($bean, $event, $arguments)
    {
        $bean->setPreference('admin_id', '');
        $bean->savePreferencesToDB();
        if ($bean->getPreference('cookies') != '') {
            $cookies       = $bean->getPreference('cookies');
            $cookies_array = json_decode($cookies);
            foreach ($cookies_array as $cookie => $value) {
                setcookie($cookie, $value);
            }
            $bean->setPreference('cookies', '');
            $bean->savePreferencesToDB();
        }
    }
}
