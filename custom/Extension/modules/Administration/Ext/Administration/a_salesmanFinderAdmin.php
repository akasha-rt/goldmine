<?php

//custom/Extension/modules/Administration/Ext/Administration/salesmanFinderAdmin.php



$admin_option_defs = array();
$admin_option_defs['Administration']['ExportSalesmanFinder'] = array(
    'ExportSalesmanFinder',
    'LBL_SALESMANFINDER_EXPORT',
    'LBL_SALESMANFINDER_EXPORT_DESCRIPTION',
    //'javascript:parent.SUGAR.App.router.navigate("SF1_SalesmanFinder/export_salesman_finder.php", {trigger: true})'
	'javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?action=ReportCriteriaResults&module=Reports&page=report&id=3082c762-95da-11e8-9028-027c7caa4167", {trigger: true})'
    );

$admin_option_defs['Administration']['TruncateSalesmanFinder'] = array(
    'TruncateSalesmanFinder',
    'LBL_SALESMANFINDER_TRUNCATE',
    'LBL_SALESMANFINDER_TRUNCATE_DESCRIPTION',
	//'javascript:parent.SUGAR.App.router.navigate("SF1_SalesmanFinder/truncate_salesmanfinder.php", {trigger: true})'
    'javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=SF1_SalesmanFinder&action=prep_truncate", {trigger: true})'
	
    );
	
$admin_group_header[] = array(
    'LBL_SALESMANFINDER_GROUP',
    '',
    false,
    $admin_option_defs,
    'LBL_SALESMANFINDER_GROUP_DESCRIPTION');



	
	
	


?>