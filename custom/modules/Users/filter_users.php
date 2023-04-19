<?php
$_REQUEST['action'] = 'index';
require_once 'include/SearchForm/SearchForm2.php';
$seedUser           = new User();
$searchForm         = new SearchForm($seedUser, "Users");
$searchForm->module = 'Users';
require_once SugarAutoLoader::existingCustom('modules/Users/metadata/searchdefs.php')[0];
require_once SugarAutoLoader::existingCustom('modules/Users/metadata/SearchFields.php')[0];

$searchForm->setup($searchdefs, $searchFields, '');
$searchForm->populateFromArray($_REQUEST);
$where = $searchForm->generateSearchWhere();

if (count($where) > 0) {
    foreach ($where as $index => $condition) {
        $where[$index] = "(" . $condition . ")";
    }
} else {
    $params                 = array();
    $params['custom_where'] = ' and users.status = "Active" ';
}

$where_string = implode(" AND ", $where);
if (strlen($where_string) > 0) {
    $where_string = $where_string . " AND (users.status !='Reserved' or users.status is null)";
}

require_once 'include/ListView/ListViewData.php';
$lvd       = new ListViewData();
$data      = $lvd->getListViewData($seedUser, $where_string, -1, 99999, array('name' => 1, 'first_name' => 1, 'last_name' => 1, 'reports_to_name' => 1, 'is_admin' => 1, 'status' => 1, 'phone_work' => 1, 'email' => 1, 'department' => 1), $params);
$users     = $data['data'];
$user_data = array();
foreach ($users as $user) {
    $user_id = $user['ID'];
    if ($user['FIRST_NAME'] == '') {
        $user['FIRST_NAME'] = '(Undefined First Name)';
    }
    $user_data[$user_id] = $user['FIRST_NAME'] . " " . $user['LAST_NAME'];
}

asort($user_data);

unset($_REQUEST['action']);

echo json_encode($user_data);
