<?php
global $db, $app_strings, $app_list_strings;

require_once 'custom/modules/Administration/wUserUtilsQueryManager.php';
$qm = new wUserUtilsQueryManager();

$ret_d = $qm->getDashboards();
$ret_f = $qm->getFilters();

arsort($ret_d);
arsort($ret_f);

$return_result['dashboards'] = $ret_d;
$return_result['filters']    = $ret_f;
echo json_encode($return_result);
