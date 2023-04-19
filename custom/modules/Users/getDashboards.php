<?php
global $db, $app_strings, $app_list_strings;
$user_id = $_REQUEST['user_id'];

require_once 'custom/modules/Administration/wUserUtilsQueryManager.php';
$qm = new wUserUtilsQueryManager();

$ret_d = $qm->getDashboards($user_id);
$ret_f = $qm->getFilters($user_id);

ksort($ret_d);
ksort($ret_f);

$return_result['dashboards'] = $ret_d;
$return_result['filters']    = $ret_f;
echo json_encode($return_result);
