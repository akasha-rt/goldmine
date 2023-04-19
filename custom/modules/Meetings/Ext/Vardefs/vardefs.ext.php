<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_meet_result_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Meeting']['fields']['meet_result_c']['labelValue'] = 'Meeting Result';
$dictionary['Meeting']['fields']['meet_result_c']['dependency'] = '';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['trigger'] = 'status';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Held'][0] = 'Sale';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Held'][1] = 'Quote';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Held'][2] = 'Demo';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Held'][3] = 'None';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Not Held'][0] = 'Reschedule';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Not Held'][1] = 'bad_cancel';
$dictionary['Meeting']['fields']['meet_result_c']['visibility_grid']['values']['Not Held'][2] = 'ok_cancel';
$dictionary['Meeting']['fields']['meet_result_c']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_status.php

 // created: 2016-10-16 03:16:23
$dictionary['Meeting']['fields']['status']['required'] = true;
$dictionary['Meeting']['fields']['status']['comments'] = 'Meeting status (ex: Planned, Held, Not held)';
$dictionary['Meeting']['fields']['status']['merge_filter'] = 'disabled';
$dictionary['Meeting']['fields']['status']['calculated'] = false;
$dictionary['Meeting']['fields']['status']['dependency'] = false;
$dictionary['Meeting']['fields']['status']['full_text_search']['enabled'] = true;
$dictionary['Meeting']['fields']['status']['full_text_search']['searchable'] = true;
$dictionary['Meeting']['fields']['status']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/rli_link_workflow.php

$dictionary['Meeting']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_meet_type_c.php

 // created: 2021-02-23 18:22:36
$dictionary['Meeting']['fields']['meet_type_c']['labelValue']='Meeting Type';
$dictionary['Meeting']['fields']['meet_type_c']['dependency']='';
$dictionary['Meeting']['fields']['meet_type_c']['required_formula']='';
$dictionary['Meeting']['fields']['meet_type_c']['readonly_formula']='';
$dictionary['Meeting']['fields']['meet_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_gm_accountno_c.php

 // created: 2021-03-21 21:48:29
$dictionary['Meeting']['fields']['gm_accountno_c']['labelValue']='GM Accountno';
$dictionary['Meeting']['fields']['gm_accountno_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Meeting']['fields']['gm_accountno_c']['enforced']='';
$dictionary['Meeting']['fields']['gm_accountno_c']['dependency']='';
$dictionary['Meeting']['fields']['gm_accountno_c']['required_formula']='';
$dictionary['Meeting']['fields']['gm_accountno_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_gmrecid_c.php

 // created: 2021-03-21 21:49:16
$dictionary['Meeting']['fields']['gmrecid_c']['labelValue']='GM RecID';
$dictionary['Meeting']['fields']['gmrecid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Meeting']['fields']['gmrecid_c']['enforced']='';
$dictionary['Meeting']['fields']['gmrecid_c']['dependency']='';
$dictionary['Meeting']['fields']['gmrecid_c']['required_formula']='';
$dictionary['Meeting']['fields']['gmrecid_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_producttemplate_id_c.php

 // created: 2021-03-26 15:48:22

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_revenue_line_items_c.php

 // created: 2021-03-26 15:55:08
$dictionary['Meeting']['fields']['revenue_line_items_c']['labelValue']='Revenue Line Items';
$dictionary['Meeting']['fields']['revenue_line_items_c']['dependency']='';
$dictionary['Meeting']['fields']['revenue_line_items_c']['required_formula']='';
$dictionary['Meeting']['fields']['revenue_line_items_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_revenuelineitem_id_c.php

 // created: 2021-03-26 15:55:08

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/pc_productcategoryclone_meetings_1_Meetings.php

// created: 2021-03-30 16:00:24
$dictionary["Meeting"]["fields"]["pc_productcategoryclone_meetings_1"] = array (
  'name' => 'pc_productcategoryclone_meetings_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_meetings_1',
  'source' => 'non-db',
  'module' => 'PC_ProductCategoryClone',
  'bean_name' => 'PC_ProductCategoryClone',
  'side' => 'right',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link-type' => 'one',
);
$dictionary["Meeting"]["fields"]["pc_productcategoryclone_meetings_1_name"] = array (
  'name' => 'pc_productcategoryclone_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'save' => true,
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link' => 'pc_productcategoryclone_meetings_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["pc_productcategoryclone_meetings_1pc_productcategoryclone_ida"] = array (
  'name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link' => 'pc_productcategoryclone_meetings_1',
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/in_incentives_meetings_1_Meetings.php

// created: 2021-03-30 18:34:29
$dictionary["Meeting"]["fields"]["in_incentives_meetings_1"] = array (
  'name' => 'in_incentives_meetings_1',
  'type' => 'link',
  'relationship' => 'in_incentives_meetings_1',
  'source' => 'non-db',
  'module' => 'IN_Incentives',
  'bean_name' => 'IN_Incentives',
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link-type' => 'one',
);
$dictionary["Meeting"]["fields"]["in_incentives_meetings_1_name"] = array (
  'name' => 'in_incentives_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_IN_INCENTIVES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link' => 'in_incentives_meetings_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["in_incentives_meetings_1in_incentives_ida"] = array (
  'name' => 'in_incentives_meetings_1in_incentives_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link' => 'in_incentives_meetings_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/meetings_cc_coupon_codes_1_Meetings.php

// created: 2021-03-30 18:46:14
$dictionary["Meeting"]["fields"]["meetings_cc_coupon_codes_1"] = array (
  'name' => 'meetings_cc_coupon_codes_1',
  'type' => 'link',
  'relationship' => 'meetings_cc_coupon_codes_1',
  'source' => 'non-db',
  'module' => 'CC_Coupon_Codes',
  'bean_name' => 'CC_Coupon_Codes',
  'vname' => 'LBL_MEETINGS_CC_COUPON_CODES_1_FROM_CC_COUPON_CODES_TITLE',
  'id_name' => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
);
$dictionary["Meeting"]["fields"]["meetings_cc_coupon_codes_1_name"] = array (
  'name' => 'meetings_cc_coupon_codes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_CC_COUPON_CODES_1_FROM_CC_COUPON_CODES_TITLE',
  'save' => true,
  'id_name' => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
  'link' => 'meetings_cc_coupon_codes_1',
  'table' => 'cc_coupon_codes',
  'module' => 'CC_Coupon_Codes',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["meetings_cc_coupon_codes_1cc_coupon_codes_idb"] = array (
  'name' => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_CC_COUPON_CODES_1_FROM_CC_COUPON_CODES_TITLE_ID',
  'id_name' => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
  'link' => 'meetings_cc_coupon_codes_1',
  'table' => 'cc_coupon_codes',
  'module' => 'CC_Coupon_Codes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_pc_productcategoryclone_meetings_1pc_productcategoryclone_ida.php

 // created: 2021-04-05 15:31:49
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['name']='pc_productcategoryclone_meetings_1pc_productcategoryclone_ida';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['type']='id';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['source']='non-db';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['vname']='LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_MEETINGS_TITLE_ID';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['id_name']='pc_productcategoryclone_meetings_1pc_productcategoryclone_ida';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['link']='pc_productcategoryclone_meetings_1';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['table']='pc_productcategoryclone';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['module']='PC_ProductCategoryClone';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['rname']='id';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['reportable']=false;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['side']='right';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['massupdate']=false;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['duplicate_merge']='disabled';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['hideacl']=true;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1pc_productcategoryclone_ida']['audited']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_pc_productcategoryclone_meetings_1_name.php

 // created: 2021-04-05 15:31:49
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['audited']=false;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['hidemassupdate']=false;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['duplicate_merge']='disabled';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['duplicate_merge_dom_value']=0;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['merge_filter']='disabled';
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['calculated']=false;
$dictionary['Meeting']['fields']['pc_productcategoryclone_meetings_1_name']['vname']='LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_NAME_FIELD_TITLE';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_product_catalog_c.php

 // created: 2021-04-05 15:35:50
$dictionary['Meeting']['fields']['product_catalog_c']['labelValue']='Product';
$dictionary['Meeting']['fields']['product_catalog_c']['dependency']='';
$dictionary['Meeting']['fields']['product_catalog_c']['required_formula']='';
$dictionary['Meeting']['fields']['product_catalog_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_meet_product_c.php

 // created: 2021-04-05 15:36:55
$dictionary['Meeting']['fields']['meet_product_c']['labelValue']='Product Legacy';
$dictionary['Meeting']['fields']['meet_product_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Meeting']['fields']['meet_product_c']['enforced']='';
$dictionary['Meeting']['fields']['meet_product_c']['dependency']='';
$dictionary['Meeting']['fields']['meet_product_c']['required_formula']='';
$dictionary['Meeting']['fields']['meet_product_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Meeting']['full_text_search']=true;

?>
