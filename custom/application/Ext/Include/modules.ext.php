<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/Include/upgrade_bwc.php
 
/* This file was generated by Sugar Upgrade */
$bwcModules[] = 'la_LoginAudit';

?>
<?php
// Merged from custom/Extension/application/Ext/Include/SalesmanFinder.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['SF1_SalesmanFinder'] = 'SF1_SalesmanFinder';
$beanFiles['SF1_SalesmanFinder'] = 'modules/SF1_SalesmanFinder/SF1_SalesmanFinder.php';
$moduleList[] = 'SF1_SalesmanFinder';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/ForeignLeadsRouting.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['FL_ForeignLeadsRouting'] = 'FL_ForeignLeadsRouting';
$beanFiles['FL_ForeignLeadsRouting'] = 'modules/FL_ForeignLeadsRouting/FL_ForeignLeadsRouting.php';
$moduleList[] = 'FL_ForeignLeadsRouting';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/ActOn.php
 
 //WARNING: The contents of this file are auto-generated


?>
<?php
// Merged from custom/Extension/application/Ext/Include/SpecialOrder.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['SOM_SpecialOrderQuotes'] = 'SOM_SpecialOrderQuotes';
$beanFiles['SOM_SpecialOrderQuotes'] = 'modules/SOM_SpecialOrderQuotes/SOM_SpecialOrderQuotes.php';
$moduleList[] = 'SOM_SpecialOrderQuotes';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/rli_unhide.ext.php

$moduleList[] = 'RevenueLineItems';
if (isset($modInvisList) && is_array($modInvisList)) {
    foreach ($modInvisList as $key => $mod) {
        if ($mod === 'RevenueLineItems') {
            unset($modInvisList[$key]);
        }
    }
}
?>
<?php
// Merged from custom/Extension/application/Ext/Include/Coupon_Codes.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['CC_Coupon_Codes'] = 'CC_Coupon_Codes';
$beanFiles['CC_Coupon_Codes'] = 'modules/CC_Coupon_Codes/CC_Coupon_Codes.php';
$moduleList[] = 'CC_Coupon_Codes';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/Incentives.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['IN_Incentives'] = 'IN_Incentives';
$beanFiles['IN_Incentives'] = 'modules/IN_Incentives/IN_Incentives.php';
$moduleList[] = 'IN_Incentives';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/ProductCategoryClone.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['PC_ProductCategoryClone'] = 'PC_ProductCategoryClone';
$beanFiles['PC_ProductCategoryClone'] = 'modules/PC_ProductCategoryClone/PC_ProductCategoryClone.php';
$moduleList[] = 'PC_ProductCategoryClone';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/E38_DeDupit.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['E38_DuplicateCheck'] = 'E38_DuplicateCheck';
$beanFiles['E38_DuplicateCheck'] = 'modules/E38_DuplicateCheck/E38_DuplicateCheck.php';
$modules_exempt_from_availability_check['E38_DuplicateCheck'] = 'E38_DuplicateCheck';
$report_include_modules['E38_DuplicateCheck'] = 'E38_DuplicateCheck';
$modInvisList[] = 'E38_DuplicateCheck';
$beanList['E38_DuplicateFinderProcess'] = 'E38_DuplicateFinderProcess';
$beanFiles['E38_DuplicateFinderProcess'] = 'modules/E38_DuplicateFinderProcess/E38_DuplicateFinderProcess.php';
$moduleList[] = 'E38_DuplicateFinderProcess';
$beanList['E38_FoundDuplicates'] = 'E38_FoundDuplicates';
$beanFiles['E38_FoundDuplicates'] = 'modules/E38_FoundDuplicates/E38_FoundDuplicates.php';
$moduleList[] = 'E38_FoundDuplicates';
$beanList['E38_MergedDuplicates'] = 'E38_MergedDuplicates';
$beanFiles['E38_MergedDuplicates'] = 'modules/E38_MergedDuplicates/E38_MergedDuplicates.php';
$modules_exempt_from_availability_check['E38_MergedDuplicates'] = 'E38_MergedDuplicates';
$report_include_modules['E38_MergedDuplicates'] = 'E38_MergedDuplicates';
$modInvisList[] = 'E38_MergedDuplicates';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/ext_rest_salesfusion.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['sf_webActivity'] = 'sf_webActivity';
$beanFiles['sf_webActivity'] = 'modules/sf_webActivity/sf_webActivity.php';
$moduleList[] = 'sf_webActivity';
$beanList['sf_WebActivityDetail'] = 'sf_WebActivityDetail';
$beanFiles['sf_WebActivityDetail'] = 'modules/sf_WebActivityDetail/sf_WebActivityDetail.php';
$modules_exempt_from_availability_check['sf_WebActivityDetail'] = 'sf_WebActivityDetail';
$report_include_modules['sf_WebActivityDetail'] = 'sf_WebActivityDetail';
$modInvisList[] = 'sf_WebActivityDetail';
$beanList['sf_Dialogs'] = 'sf_Dialogs';
$beanFiles['sf_Dialogs'] = 'modules/sf_Dialogs/sf_Dialogs.php';
$modules_exempt_from_availability_check['sf_Dialogs'] = 'sf_Dialogs';
$report_include_modules['sf_Dialogs'] = 'sf_Dialogs';
$modInvisList[] = 'sf_Dialogs';
$beanList['sf_EventManagement'] = 'sf_EventManagement';
$beanFiles['sf_EventManagement'] = 'modules/sf_EventManagement/sf_EventManagement.php';
$modules_exempt_from_availability_check['sf_EventManagement'] = 'sf_EventManagement';
$report_include_modules['sf_EventManagement'] = 'sf_EventManagement';
$modInvisList[] = 'sf_EventManagement';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/GroupEmails.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['LSS01_GroupEmails'] = 'LSS01_GroupEmails';
$beanFiles['LSS01_GroupEmails'] = 'modules/LSS01_GroupEmails/LSS01_GroupEmails.php';
$moduleList[] = 'LSS01_GroupEmails';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/PortalUsers.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['PU_PortalUsers'] = 'PU_PortalUsers';
$beanFiles['PU_PortalUsers'] = 'modules/PU_PortalUsers/PU_PortalUsers.php';
$moduleList[] = 'PU_PortalUsers';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/PortalTeams.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['PT_PortalTeams'] = 'PT_PortalTeams';
$beanFiles['PT_PortalTeams'] = 'modules/PT_PortalTeams/PT_PortalTeams.php';
$moduleList[] = 'PT_PortalTeams';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/ProductAccessories.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['PA_ProductAccessories'] = 'PA_ProductAccessories';
$beanFiles['PA_ProductAccessories'] = 'modules/PA_ProductAccessories/PA_ProductAccessories.php';
$moduleList[] = 'PA_ProductAccessories';


?>