<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_user_id_c.php

 // created: 2013-06-27 06:29:17

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_contact_id1_c.php

 // created: 2013-07-26 06:34:29

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_specialist_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Opportunity']['fields']['specialist_c']['labelValue'] = 'Product Specialist';
$dictionary['Opportunity']['fields']['specialist_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_togglereminder_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Opportunity']['fields']['togglereminder_c']['labelValue'] = 'Remind Me';
$dictionary['Opportunity']['fields']['togglereminder_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['togglereminder_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_strat_prod_line_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Opportunity']['fields']['strat_prod_line_c']['dependency'] = '';
$dictionary['Opportunity']['fields']['strat_prod_line_c']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['strat_prod_line_c']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_lead_source.php

 // created: 2016-10-16 03:16:23
$dictionary['Opportunity']['fields']['lead_source']['len'] = 100;
$dictionary['Opportunity']['fields']['lead_source']['required'] = true;
$dictionary['Opportunity']['fields']['lead_source']['comments'] = 'Source of the opportunity';
$dictionary['Opportunity']['fields']['lead_source']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['lead_source']['calculated'] = false;
$dictionary['Opportunity']['fields']['lead_source']['dependency'] = false;
$dictionary['Opportunity']['fields']['lead_source']['audited'] = true;
$dictionary['Opportunity']['fields']['lead_source']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_remindertime_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Opportunity']['fields']['remindertime_c']['labelValue'] = 'Remind In';
$dictionary['Opportunity']['fields']['remindertime_c']['dependency'] = 'equal($togglereminder_c,true)';
$dictionary['Opportunity']['fields']['remindertime_c']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['remindertime_c']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/accounts_opportunities_1_Opportunities.php

// created: 2019-01-03 16:17:08
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1"] = array (
  'name' => 'accounts_opportunities_1',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'accounts_opportunities_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1_name"] = array (
  'name' => 'accounts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_opportunities_1accounts_ida',
  'link' => 'accounts_opportunities_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1accounts_ida"] = array (
  'name' => 'accounts_opportunities_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'accounts_opportunities_1accounts_ida',
  'link' => 'accounts_opportunities_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/contacts_opportunities_1_Opportunities.php

// created: 2019-01-03 16:18:19
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1_name"] = array (
  'name' => 'contacts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link' => 'contacts_opportunities_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1contacts_ida"] = array (
  'name' => 'contacts_opportunities_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link' => 'contacts_opportunities_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_customercontact_c.php

 // created: 2020-08-26 21:48:12
$dictionary['Opportunity']['fields']['customercontact_c']['labelValue']='End User Contact';
$dictionary['Opportunity']['fields']['customercontact_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_competitor_c.php

 // created: 2020-08-27 15:10:41
$dictionary['Opportunity']['fields']['competitor_c']['labelValue']='Competitor(s)';
$dictionary['Opportunity']['fields']['competitor_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['competitor_c']['enforced']='';
$dictionary['Opportunity']['fields']['competitor_c']['dependency']='equal($opportunity_type,"Conversion")';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/no_account_required.php


$dictionary['Opportunity']['fields']['account_name']['required'] = false;
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_date_closed.php

 // created: 2020-10-21 02:45:10
$dictionary['Opportunity']['fields']['date_closed']['required']=false;
$dictionary['Opportunity']['fields']['date_closed']['audited']=false;
$dictionary['Opportunity']['fields']['date_closed']['massupdate']=false;
$dictionary['Opportunity']['fields']['date_closed']['hidemassupdate']=true;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['importable']='false';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=false;
$dictionary['Opportunity']['fields']['date_closed']['related_fields']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_service_start_date.php

 // created: 2020-10-21 02:45:10
$dictionary['Opportunity']['fields']['service_start_date']['audited']=false;
$dictionary['Opportunity']['fields']['service_start_date']['massupdate']=false;
$dictionary['Opportunity']['fields']['service_start_date']['hidemassupdate']=true;
$dictionary['Opportunity']['fields']['service_start_date']['comments']='Service start date field.';
$dictionary['Opportunity']['fields']['service_start_date']['importable']='false';
$dictionary['Opportunity']['fields']['service_start_date']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['service_start_date']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['service_start_date']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['service_start_date']['calculated']=false;
$dictionary['Opportunity']['fields']['service_start_date']['related_fields']=array (
);
$dictionary['Opportunity']['fields']['service_start_date']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_probability.php

 // created: 2020-10-21 02:45:10
$dictionary['Opportunity']['fields']['probability']['audited']=false;
$dictionary['Opportunity']['fields']['probability']['massupdate']=false;
$dictionary['Opportunity']['fields']['probability']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['probability']['comments']='The probability of closure';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['probability']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['probability']['reportable']=false;
$dictionary['Opportunity']['fields']['probability']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['probability']['min']=false;
$dictionary['Opportunity']['fields']['probability']['max']=false;
$dictionary['Opportunity']['fields']['probability']['disable_num_format']='';
$dictionary['Opportunity']['fields']['probability']['studio']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/rli_link_workflow.php

$dictionary['Opportunity']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/dupe_check.ext.php

$dictionary['Opportunity']['fields']['revenuelineitems']['workflow'] = true;
$dictionary['Opportunity']['duplicate_check']['FilterDuplicateCheck']['filter_template'][0]['$and'][1] = array('sales_status' => array('$not_equals' => 'Closed Lost'));
$dictionary['Opportunity']['duplicate_check']['FilterDuplicateCheck']['filter_template'][0]['$and'][2] = array('sales_status' => array('$not_equals' => 'Closed Won'));
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/cc_coupon_codes_opportunities_Opportunities.php

// created: 2021-03-26 18:52:01
$dictionary["Opportunity"]["fields"]["cc_coupon_codes_opportunities"] = array (
  'name' => 'cc_coupon_codes_opportunities',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_opportunities',
  'source' => 'non-db',
  'module' => 'CC_Coupon_Codes',
  'bean_name' => false,
  'vname' => 'LBL_CC_COUPON_CODES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'cc_coupon_codes_opportunitiesopportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/pc_productcategoryclone_opportunities_1_Opportunities.php

// created: 2021-03-30 16:23:09
$dictionary["Opportunity"]["fields"]["pc_productcategoryclone_opportunities_1"] = array (
  'name' => 'pc_productcategoryclone_opportunities_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_opportunities_1',
  'source' => 'non-db',
  'module' => 'PC_ProductCategoryClone',
  'bean_name' => 'PC_ProductCategoryClone',
  'side' => 'right',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'pc_product9b3eryclone_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["pc_productcategoryclone_opportunities_1_name"] = array (
  'name' => 'pc_productcategoryclone_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'save' => true,
  'id_name' => 'pc_product9b3eryclone_ida',
  'link' => 'pc_productcategoryclone_opportunities_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["pc_product9b3eryclone_ida"] = array (
  'name' => 'pc_product9b3eryclone_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'pc_product9b3eryclone_ida',
  'link' => 'pc_productcategoryclone_opportunities_1',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_pc_productcategoryclone_opportunities_1_name.php

 // created: 2021-03-30 16:27:30
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['audited']=false;
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['calculated']=false;
$dictionary['Opportunity']['fields']['pc_productcategoryclone_opportunities_1_name']['vname']='LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_NAME_FIELD_TITLE';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_pc_product9b3eryclone_ida.php

 // created: 2021-03-30 16:27:30
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['name']='pc_product9b3eryclone_ida';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['type']='id';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['source']='non-db';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['vname']='LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['id_name']='pc_product9b3eryclone_ida';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['link']='pc_productcategoryclone_opportunities_1';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['table']='pc_productcategoryclone';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['module']='PC_ProductCategoryClone';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['rname']='id';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['reportable']=false;
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['side']='right';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['massupdate']=false;
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['hideacl']=true;
$dictionary['Opportunity']['fields']['pc_product9b3eryclone_ida']['audited']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/in_incentives_opportunities_1_Opportunities.php

// created: 2021-03-30 18:32:40
$dictionary["Opportunity"]["fields"]["in_incentives_opportunities_1"] = array (
  'name' => 'in_incentives_opportunities_1',
  'type' => 'link',
  'relationship' => 'in_incentives_opportunities_1',
  'source' => 'non-db',
  'module' => 'IN_Incentives',
  'bean_name' => 'IN_Incentives',
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["in_incentives_opportunities_1_name"] = array (
  'name' => 'in_incentives_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_IN_INCENTIVES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link' => 'in_incentives_opportunities_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["in_incentives_opportunities_1in_incentives_ida"] = array (
  'name' => 'in_incentives_opportunities_1in_incentives_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link' => 'in_incentives_opportunities_1',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_day_since_create_c.php

 // created: 2021-05-28 14:53:43
$dictionary['Opportunity']['fields']['day_since_create_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['day_since_create_c']['labelValue']='Days Since Created';
$dictionary['Opportunity']['fields']['day_since_create_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['day_since_create_c']['calculated']='true';
$dictionary['Opportunity']['fields']['day_since_create_c']['formula']='abs(subtract(daysUntil($date_entered),daysUntil(today())))';
$dictionary['Opportunity']['fields']['day_since_create_c']['enforced']='true';
$dictionary['Opportunity']['fields']['day_since_create_c']['dependency']='';
$dictionary['Opportunity']['fields']['day_since_create_c']['required_formula']='';
$dictionary['Opportunity']['fields']['day_since_create_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Opportunity']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Opportunity']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Opportunity']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Opportunity']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Opportunity']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Opportunity']['fields']['denorm_account_name']['len'] = '150';
$dictionary['Opportunity']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Opportunity']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['required'] = false;
$dictionary['Opportunity']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Opportunity']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Opportunity']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['denorm_account_name']['massupdate'] = false;
$dictionary['Opportunity']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Opportunity']['fields']['denorm_account_name']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['denorm_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['Opportunity']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Opportunity']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Opportunity']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_status.php

 // created: 2022-03-15 04:19:57
$dictionary['Opportunity']['fields']['sales_status']['audited']=false;
$dictionary['Opportunity']['fields']['sales_status']['massupdate']=true;
$dictionary['Opportunity']['fields']['sales_status']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['sales_status']['importable']=true;
$dictionary['Opportunity']['fields']['sales_status']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_status']['reportable']=true;
$dictionary['Opportunity']['fields']['sales_status']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_status']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_status']['studio']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_amount.php

 // created: 2022-03-15 04:19:57
$dictionary['Opportunity']['fields']['amount']['required']=false;
$dictionary['Opportunity']['fields']['amount']['audited']=false;
$dictionary['Opportunity']['fields']['amount']['massupdate']=false;
$dictionary['Opportunity']['fields']['amount']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['calculated']=true;
$dictionary['Opportunity']['fields']['amount']['formula']='rollupConditionalSum($revenuelineitems, "likely_case", "sales_stage", forecastSalesStages(true, false))';
$dictionary['Opportunity']['fields']['amount']['enforced']=true;
$dictionary['Opportunity']['fields']['amount']['readonly']=true;
$dictionary['Opportunity']['fields']['amount']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_worst_case.php

 // created: 2022-03-15 04:19:57
$dictionary['Opportunity']['fields']['worst_case']['audited']=false;
$dictionary['Opportunity']['fields']['worst_case']['massupdate']=false;
$dictionary['Opportunity']['fields']['worst_case']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['worst_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['worst_case']['calculated']=true;
$dictionary['Opportunity']['fields']['worst_case']['formula']='rollupConditionalSum($revenuelineitems, "worst_case", "sales_stage", forecastSalesStages(true, false))';
$dictionary['Opportunity']['fields']['worst_case']['enforced']=true;
$dictionary['Opportunity']['fields']['worst_case']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['worst_case']['readonly']=true;
$dictionary['Opportunity']['fields']['worst_case']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_best_case.php

 // created: 2022-03-15 04:19:57
$dictionary['Opportunity']['fields']['best_case']['audited']=false;
$dictionary['Opportunity']['fields']['best_case']['massupdate']=false;
$dictionary['Opportunity']['fields']['best_case']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['best_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['best_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['best_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['best_case']['calculated']=true;
$dictionary['Opportunity']['fields']['best_case']['formula']='rollupConditionalSum($revenuelineitems, "best_case", "sales_stage", forecastSalesStages(true, false))';
$dictionary['Opportunity']['fields']['best_case']['enforced']=true;
$dictionary['Opportunity']['fields']['best_case']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['best_case']['readonly']=true;
$dictionary['Opportunity']['fields']['best_case']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commit_stage.php

 // created: 2022-03-15 04:19:57
$dictionary['Opportunity']['fields']['commit_stage']['audited']=false;
$dictionary['Opportunity']['fields']['commit_stage']['massupdate']=false;
$dictionary['Opportunity']['fields']['commit_stage']['hidemassupdate']=true;
$dictionary['Opportunity']['fields']['commit_stage']['options']='';
$dictionary['Opportunity']['fields']['commit_stage']['comments']='Forecast commit ranges: Include, Likely, Omit etc.';
$dictionary['Opportunity']['fields']['commit_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['commit_stage']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['commit_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['commit_stage']['reportable']=true;
$dictionary['Opportunity']['fields']['commit_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['commit_stage']['studio']=true;
$dictionary['Opportunity']['fields']['commit_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['commit_stage']['formula']='';
$dictionary['Opportunity']['fields']['commit_stage']['related_fields']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Opportunity']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_total_revenue_line_items.php

 // created: 2022-09-05 03:40:49
$dictionary['Opportunity']['fields']['total_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['total_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['total_revenue_line_items']['reportable']=true;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_closed_revenue_line_items.php

 // created: 2022-09-05 03:40:49
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['reportable']=true;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_closed_won_revenue_line_items.php

 // created: 2022-09-05 03:40:49
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['reportable']=true;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['closed_won_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_remindme_c.php

 // created: 2022-11-04 18:46:28
$dictionary['Opportunity']['fields']['remindme_c']['labelValue']='Remind Me Date';
$dictionary['Opportunity']['fields']['remindme_c']['enforced']='';
$dictionary['Opportunity']['fields']['remindme_c']['dependency']='equal($togglereminder_c,true)';
$dictionary['Opportunity']['fields']['remindme_c']['required_formula']='';
$dictionary['Opportunity']['fields']['remindme_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_opportunity_type.php

 // created: 2023-01-20 15:26:58
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['required']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['massupdate']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ai_opp_conv_score_enum.php

 // created: 2023-01-20 15:31:44
$dictionary['Opportunity']['fields']['ai_opp_conv_score_enum']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['ai_opp_conv_score_enum']['importable']='true';
$dictionary['Opportunity']['fields']['ai_opp_conv_score_enum']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['ai_opp_conv_score_enum']['calculated']=false;
$dictionary['Opportunity']['fields']['ai_opp_conv_score_enum']['dependency']=false;
$dictionary['Opportunity']['fields']['ai_opp_conv_score_enum']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_prod_group_c.php

 // created: 2023-01-20 16:02:49
$dictionary['Opportunity']['fields']['prod_group_c']['labelValue']='Product Group';
$dictionary['Opportunity']['fields']['prod_group_c']['dependency']='';
$dictionary['Opportunity']['fields']['prod_group_c']['required_formula']='';
$dictionary['Opportunity']['fields']['prod_group_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['prod_group_c']['visibility_grid']=array (
  'trigger' => 'strat_prod_line_c',
  'values' => 
  array (
    'jst' => 
    array (
      0 => 'Blank',
      1 => 'hand_tool',
    ),
    'met_equip' => 
    array (
      0 => 'Blank',
      1 => 'optical_equip',
      2 => 'vision_equip',
      3 => 'laser_measure',
    ),
    'pgs' => 
    array (
      0 => 'Blank',
      1 => 'flat_stock',
      2 => 'drill_rod',
    ),
    'pmt' => 
    array (
      0 => 'Blank',
      1 => 'data_col',
      2 => 'gage_block',
      3 => 'gsf',
      4 => 'prec_tool',
    ),
    'saws' => 
    array (
      0 => 'Blank',
      1 => 'bs_mach',
      2 => 'bs',
      3 => 'pta_handsaw',
    ),
    'test_equip' => 
    array (
      0 => 'Blank',
      1 => 'force',
      2 => 'grips_fix',
      3 => 'mat_test',
      4 => 'round_measure',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_unitprice_c.php

 // created: 2023-01-20 16:13:14
$dictionary['Opportunity']['fields']['unitprice_c']['labelValue']='Unit Price';
$dictionary['Opportunity']['fields']['unitprice_c']['enforced']='';
$dictionary['Opportunity']['fields']['unitprice_c']['dependency']='';
$dictionary['Opportunity']['fields']['unitprice_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['unitprice_c']['required_formula']='';
$dictionary['Opportunity']['fields']['unitprice_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_probabilitypercentage_c.php

 // created: 2023-01-20 16:17:06
$dictionary['Opportunity']['fields']['probabilitypercentage_c']['labelValue']='Probability %';
$dictionary['Opportunity']['fields']['probabilitypercentage_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['probabilitypercentage_c']['enforced']='';
$dictionary['Opportunity']['fields']['probabilitypercentage_c']['dependency']='';
$dictionary['Opportunity']['fields']['probabilitypercentage_c']['required_formula']='';
$dictionary['Opportunity']['fields']['probabilitypercentage_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_campaigns_1_Opportunities.php

// created: 2023-01-27 20:36:23
$dictionary["Opportunity"]["fields"]["opportunities_campaigns_1"] = array (
  'name' => 'opportunities_campaigns_1',
  'type' => 'link',
  'relationship' => 'opportunities_campaigns_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_stage.php

 // created: 2023-01-31 16:58:36
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']=false;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['required']=false;
$dictionary['Opportunity']['fields']['sales_stage']['audited']=false;
$dictionary['Opportunity']['fields']['sales_stage']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['sales_stage']['importable']='true';
$dictionary['Opportunity']['fields']['sales_stage']['reportable']=true;
$dictionary['Opportunity']['fields']['sales_stage']['options']='sales_stage_dom';
$dictionary['Opportunity']['fields']['sales_stage']['default']='';
$dictionary['Opportunity']['fields']['sales_stage']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/campaigns_opportunities_1_Opportunities.php

// created: 2023-02-14 15:41:44
$dictionary["Opportunity"]["fields"]["campaigns_opportunities_1"] = array (
  'name' => 'campaigns_opportunities_1',
  'type' => 'link',
  'relationship' => 'campaigns_opportunities_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'campaigns_opportunities_1campaigns_ida',
);
$dictionary["Opportunity"]["fields"]["campaigns_opportunities_1_name"] = array (
  'name' => 'campaigns_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'campaigns_opportunities_1campaigns_ida',
  'link' => 'campaigns_opportunities_1',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["campaigns_opportunities_1campaigns_ida"] = array (
  'name' => 'campaigns_opportunities_1campaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_CAMPAIGNS_TITLE_ID',
  'id_name' => 'campaigns_opportunities_1campaigns_ida',
  'link' => 'campaigns_opportunities_1',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_name.php

 // created: 2023-04-03 17:58:30
$dictionary['Opportunity']['fields']['name']['default']='';
$dictionary['Opportunity']['fields']['name']['audited']=false;
$dictionary['Opportunity']['fields']['name']['massupdate']=false;
$dictionary['Opportunity']['fields']['name']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['name']['help']='Format: Account Name or End User - Product Category (MIX) or Product ID';
$dictionary['Opportunity']['fields']['name']['comments']='';
$dictionary['Opportunity']['fields']['name']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['name']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.65',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['name']['calculated']=false;

 
?>
