<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/in_incentives_cc_coupon_codes_IN_Incentives.php

// created: 2021-03-26 19:33:36
$dictionary["IN_Incentives"]["fields"]["in_incentives_cc_coupon_codes"] = array (
  'name' => 'in_incentives_cc_coupon_codes',
  'type' => 'link',
  'relationship' => 'in_incentives_cc_coupon_codes',
  'source' => 'non-db',
  'module' => 'CC_Coupon_Codes',
  'bean_name' => 'CC_Coupon_Codes',
  'vname' => 'LBL_IN_INCENTIVES_CC_COUPON_CODES_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'in_incentives_cc_coupon_codesin_incentives_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/in_incentives_producttemplates_IN_Incentives.php

// created: 2021-03-26 19:33:36
$dictionary["IN_Incentives"]["fields"]["in_incentives_producttemplates"] = array (
  'name' => 'in_incentives_producttemplates',
  'type' => 'link',
  'relationship' => 'in_incentives_producttemplates',
  'source' => 'non-db',
  'module' => 'ProductTemplates',
  'bean_name' => 'ProductTemplate',
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'link-type' => 'one',
);
$dictionary["IN_Incentives"]["fields"]["in_incentives_producttemplates_name"] = array (
  'name' => 'in_incentives_producttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'link' => 'in_incentives_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'name',
);
$dictionary["IN_Incentives"]["fields"]["in_incentives_producttemplatesproducttemplates_ida"] = array (
  'name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_IN_INCENTIVES_TITLE_ID',
  'id_name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'link' => 'in_incentives_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/pc_productcategoryclone_in_incentives_1_IN_Incentives.php

// created: 2021-03-30 15:29:52
$dictionary["IN_Incentives"]["fields"]["pc_productcategoryclone_in_incentives_1"] = array (
  'name' => 'pc_productcategoryclone_in_incentives_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_in_incentives_1',
  'source' => 'non-db',
  'module' => 'PC_ProductCategoryClone',
  'bean_name' => 'PC_ProductCategoryClone',
  'side' => 'right',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'pc_productcd98ryclone_ida',
  'link-type' => 'one',
);
$dictionary["IN_Incentives"]["fields"]["pc_productcategoryclone_in_incentives_1_name"] = array (
  'name' => 'pc_productcategoryclone_in_incentives_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'save' => true,
  'id_name' => 'pc_productcd98ryclone_ida',
  'link' => 'pc_productcategoryclone_in_incentives_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'name',
);
$dictionary["IN_Incentives"]["fields"]["pc_productcd98ryclone_ida"] = array (
  'name' => 'pc_productcd98ryclone_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_IN_INCENTIVES_TITLE_ID',
  'id_name' => 'pc_productcd98ryclone_ida',
  'link' => 'pc_productcategoryclone_in_incentives_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/sugarfield_pc_productcd98ryclone_ida.php

 // created: 2021-03-30 15:43:30
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['name']='pc_productcd98ryclone_ida';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['type']='id';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['source']='non-db';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['vname']='LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_IN_INCENTIVES_TITLE_ID';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['id_name']='pc_productcd98ryclone_ida';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['link']='pc_productcategoryclone_in_incentives_1';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['table']='pc_productcategoryclone';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['module']='PC_ProductCategoryClone';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['rname']='id';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['reportable']=false;
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['side']='right';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['massupdate']=false;
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['duplicate_merge']='disabled';
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['hideacl']=true;
$dictionary['IN_Incentives']['fields']['pc_productcd98ryclone_ida']['audited']=false;

 
?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/sugarfield_pc_productcategoryclone_in_incentives_1_name.php

 // created: 2021-03-30 15:43:31
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['audited']=false;
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['hidemassupdate']=false;
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['duplicate_merge']='disabled';
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['duplicate_merge_dom_value']=0;
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['merge_filter']='disabled';
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['calculated']=false;
$dictionary['IN_Incentives']['fields']['pc_productcategoryclone_in_incentives_1_name']['vname']='LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_NAME_FIELD_TITLE';

 
?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/in_incentives_opportunities_1_IN_Incentives.php

// created: 2021-03-30 18:32:40
$dictionary["IN_Incentives"]["fields"]["in_incentives_opportunities_1"] = array (
  'name' => 'in_incentives_opportunities_1',
  'type' => 'link',
  'relationship' => 'in_incentives_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/in_incentives_meetings_1_IN_Incentives.php

// created: 2021-03-30 18:34:29
$dictionary["IN_Incentives"]["fields"]["in_incentives_meetings_1"] = array (
  'name' => 'in_incentives_meetings_1',
  'type' => 'link',
  'relationship' => 'in_incentives_meetings_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/IN_Incentives/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['IN_Incentives']['full_text_search']=true;

?>
