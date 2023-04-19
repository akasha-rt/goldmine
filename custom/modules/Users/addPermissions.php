<?php

require_once 'custom/modules/Administration/wUserUtilsQueryManager.php';
$qm = new wUserUtilsQueryManager();

$users = $_REQUEST['users'];
$teams = $_REQUEST['teams'];
$roles = $_REQUEST['roles'];

$target_user_ids = array();
$target_user_ids = $qm->getSelectedUsersAuth($users, $teams, $roles);

require_once 'modules/Administration/Administration.php';
$administrationObj = new Administration();

$sel_obj        = new stdClass();
$sel_obj->users = $users;
$sel_obj->teams = $teams;
$sel_obj->roles = $roles;

$administrationObj->saveSetting('login_as_selected', 'Settings', base64_encode(serialize($sel_obj)));

if (count($target_user_ids) == 0) {
    $target_users_selected = 0;
}

$administrationObj->saveSetting('login_as_privilege', 'Settings', base64_encode(serialize($target_user_ids)));

if (count($target_user_ids) != 0) {
    $not_str = 'Added Login As Authorization... OK';
    $qm->insertNotification($not_str);
}

echo 'done';
