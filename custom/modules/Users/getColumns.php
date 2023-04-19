<?php
require_once 'custom/modules/Administration/wUserUtils_utils.php';
require_once 'custom/modules/Administration/wUserUtilsQueryManager.php';
$user_id = $_REQUEST['user_id'];

$qm = new wUserUtilsQueryManager();

$columns              = $qm->getwColumns($user_id);
$wColumns_options_str = transformToSelectHtml($columns);
echo $wColumns_options_str;
