<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_business_focus_c.php

 // created: 2016-10-16 03:16:22
$dictionary['Account']['fields']['business_focus_c']['labelValue'] = 'Business Focus';
$dictionary['Account']['fields']['business_focus_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['business_focus_c']['enforced'] = '';
$dictionary['Account']['fields']['business_focus_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_primary_product_interest_c.php

 // created: 2016-10-16 03:16:22
$dictionary['Account']['fields']['primary_product_interest_c']['labelValue'] = 'Product Interest';
$dictionary['Account']['fields']['primary_product_interest_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['primary_product_interest_c']['enforced'] = '';
$dictionary['Account']['fields']['primary_product_interest_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sugar_id_c.php

 // created: 2016-10-16 03:16:22
$dictionary['Account']['fields']['sugar_id_c']['labelValue'] = 'Sugar ID';
$dictionary['Account']['fields']['sugar_id_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['sugar_id_c']['enforced'] = '';
$dictionary['Account']['fields']['sugar_id_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_email1.php

 // created: 2016-10-16 03:16:22
$dictionary['Account']['fields']['email1']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['email1']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['email1']['full_text_search']['searchable'] = true;
$dictionary['Account']['fields']['email1']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['email1']['calculated'] = false;


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_industry.php

 // created: 2018-11-12 22:04:15
$dictionary['Account']['fields']['industry']['len']=100;
$dictionary['Account']['fields']['industry']['audited']=false;
$dictionary['Account']['fields']['industry']['massupdate']=true;
$dictionary['Account']['fields']['industry']['comments']='The company belongs in this industry';
$dictionary['Account']['fields']['industry']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['industry']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['industry']['merge_filter']='disabled';
$dictionary['Account']['fields']['industry']['calculated']=false;
$dictionary['Account']['fields']['industry']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_leads_1_Accounts.php

// created: 2019-01-03 16:09:05
$dictionary["Account"]["fields"]["accounts_leads_1"] = array (
  'name' => 'accounts_leads_1',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_leads_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_opportunities_1_Accounts.php

// created: 2019-01-03 16:17:08
$dictionary["Account"]["fields"]["accounts_opportunities_1"] = array (
  'name' => 'accounts_opportunities_1',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_opportunities_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_som_specialorderquotes_1_Accounts.php

// created: 2019-06-18 16:23:52
$dictionary["Account"]["fields"]["accounts_som_specialorderquotes_1"] = array (
  'name' => 'accounts_som_specialorderquotes_1',
  'type' => 'link',
  'relationship' => 'accounts_som_specialorderquotes_1',
  'source' => 'non-db',
  'module' => 'SOM_SpecialOrderQuotes',
  'bean_name' => 'SOM_SpecialOrderQuotes',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_som_specialorderquotes_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_som_specialorderquotes_2_Accounts.php

// created: 2019-07-18 15:36:15
$dictionary["Account"]["fields"]["accounts_som_specialorderquotes_2"] = array (
  'name' => 'accounts_som_specialorderquotes_2',
  'type' => 'link',
  'relationship' => 'accounts_som_specialorderquotes_2',
  'source' => 'non-db',
  'module' => 'SOM_SpecialOrderQuotes',
  'bean_name' => 'SOM_SpecialOrderQuotes',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_2_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_som_specialorderquotes_2accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_saws_c.php

 // created: 2019-07-24 15:40:52
$dictionary['Account']['fields']['saws_c']['labelValue']='Saws (Group)';
$dictionary['Account']['fields']['saws_c']['dependency']='';
$dictionary['Account']['fields']['saws_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_band_saw_machines_c.php

 // created: 2019-07-24 15:44:31
$dictionary['Account']['fields']['band_saw_machines_c']['labelValue']='Band Saw Machines';
$dictionary['Account']['fields']['band_saw_machines_c']['dependency']='not(equal($saws_c,"Unknown"))';
$dictionary['Account']['fields']['band_saw_machines_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pmt_c.php

 // created: 2019-07-24 17:04:21
$dictionary['Account']['fields']['pmt_c']['labelValue']='Precision Measuring Tools (Group)';
$dictionary['Account']['fields']['pmt_c']['dependency']='';
$dictionary['Account']['fields']['pmt_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_granite_c.php

 // created: 2019-07-24 17:05:32
$dictionary['Account']['fields']['granite_c']['labelValue']='Granite (Group)';
$dictionary['Account']['fields']['granite_c']['dependency']='';
$dictionary['Account']['fields']['granite_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_laser_measurement_c.php

 // created: 2019-07-24 18:03:51
$dictionary['Account']['fields']['laser_measurement_c']['labelValue']='Laser Measurement';
$dictionary['Account']['fields']['laser_measurement_c']['dependency']='';
$dictionary['Account']['fields']['laser_measurement_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pgs_c.php

 // created: 2019-07-25 12:55:28
$dictionary['Account']['fields']['pgs_c']['labelValue']='Precision Ground Stock (Group)';
$dictionary['Account']['fields']['pgs_c']['dependency']='';
$dictionary['Account']['fields']['pgs_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pgs__c.php

 // created: 2019-07-25 12:57:12
$dictionary['Account']['fields']['pgs__c']['labelValue']='pgs';
$dictionary['Account']['fields']['pgs__c']['dependency']='';
$dictionary['Account']['fields']['pgs__c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hand_tools_c.php

 // created: 2019-07-25 13:17:18
$dictionary['Account']['fields']['hand_tools_c']['labelValue']='Hand Tools';
$dictionary['Account']['fields']['hand_tools_c']['dependency']='';
$dictionary['Account']['fields']['hand_tools_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_metrology_equipment_c.php

 // created: 2019-07-25 15:21:40
$dictionary['Account']['fields']['metrology_equipment_c']['labelValue']='Metrology Equipment';
$dictionary['Account']['fields']['metrology_equipment_c']['dependency']='';
$dictionary['Account']['fields']['metrology_equipment_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pht_c.php

 // created: 2019-07-25 15:26:10
$dictionary['Account']['fields']['pht_c']['labelValue']='Precision Hand Tools';
$dictionary['Account']['fields']['pht_c']['dependency']='';
$dictionary['Account']['fields']['pht_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_jst_c.php

 // created: 2019-07-25 15:33:46
$dictionary['Account']['fields']['jst_c']['labelValue']='Jobsite and Shop Tools (Group)';
$dictionary['Account']['fields']['jst_c']['dependency']='';
$dictionary['Account']['fields']['jst_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_testing_equipment_c.php

 // created: 2019-07-25 16:48:20
$dictionary['Account']['fields']['testing_equipment_c']['labelValue']='Testing Equipment (Group)';
$dictionary['Account']['fields']['testing_equipment_c']['dependency']='';
$dictionary['Account']['fields']['testing_equipment_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hand_held_force_gages_c.php

 // created: 2019-07-25 16:58:25
$dictionary['Account']['fields']['hand_held_force_gages_c']['labelValue']='Hand Held Force Gages';
$dictionary['Account']['fields']['hand_held_force_gages_c']['dependency']='not(equal($testing_equipment_c,"Unknown"))';
$dictionary['Account']['fields']['hand_held_force_gages_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_vision_systems_c.php

 // created: 2019-07-25 18:17:15
$dictionary['Account']['fields']['vision_systems_c']['labelValue']='Vision Systems ';
$dictionary['Account']['fields']['vision_systems_c']['dependency']='';
$dictionary['Account']['fields']['vision_systems_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_optical_systems_c.php

 // created: 2019-07-26 11:46:06
$dictionary['Account']['fields']['optical_systems_c']['labelValue']='Optical Systems';
$dictionary['Account']['fields']['optical_systems_c']['dependency']='equal($metrology_equipment_c,"Yes")';
$dictionary['Account']['fields']['optical_systems_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_special_gage_c.php

 // created: 2019-07-26 16:00:11
$dictionary['Account']['fields']['special_gage_c']['labelValue']='Special Gage';
$dictionary['Account']['fields']['special_gage_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Account']['fields']['special_gage_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_meat_kutter_c.php

 // created: 2019-07-26 16:58:47
$dictionary['Account']['fields']['meat_kutter_c']['labelValue']='MeatKutter';
$dictionary['Account']['fields']['meat_kutter_c']['dependency']='not(equal($saws_c,"Unknown"))';
$dictionary['Account']['fields']['meat_kutter_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pta_and_hand_saw_blades_c.php

 // created: 2019-07-26 17:00:35
$dictionary['Account']['fields']['pta_and_hand_saw_blades_c']['labelValue']='PTA and Hand Saw Blades';
$dictionary['Account']['fields']['pta_and_hand_saw_blades_c']['dependency']='not(equal($saws_c,"Unknown"))';
$dictionary['Account']['fields']['pta_and_hand_saw_blades_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_custom_granite_solutions_c.php

 // created: 2019-07-26 17:07:53
$dictionary['Account']['fields']['custom_granite_solutions_c']['labelValue']='Custom Granite Solutions';
$dictionary['Account']['fields']['custom_granite_solutions_c']['dependency']='not(equal($granite_c,"Unknown"))';
$dictionary['Account']['fields']['custom_granite_solutions_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_surface_plates_c.php

 // created: 2019-07-26 17:11:43
$dictionary['Account']['fields']['surface_plates_c']['labelValue']='Surface Plates';
$dictionary['Account']['fields']['surface_plates_c']['dependency']='not(equal($granite_c,"Unknown"))';
$dictionary['Account']['fields']['surface_plates_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_drill_rod_c.php

 // created: 2019-07-26 17:15:15
$dictionary['Account']['fields']['drill_rod_c']['labelValue']='Drill Rod';
$dictionary['Account']['fields']['drill_rod_c']['dependency']='not(equal($pgs_c,"Unknown"))';
$dictionary['Account']['fields']['drill_rod_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_flat_stock_c.php

 // created: 2019-07-26 17:17:52
$dictionary['Account']['fields']['flat_stock_c']['labelValue']='Flat Stock';
$dictionary['Account']['fields']['flat_stock_c']['dependency']='not(equal($pgs_c,"Unknown"))';
$dictionary['Account']['fields']['flat_stock_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pmt_dist_c.php

 // created: 2019-09-24 13:56:29
$dictionary['Account']['fields']['pmt_dist_c']['labelValue']='Precision Measuring Tools Distributor';
$dictionary['Account']['fields']['pmt_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['pmt_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_saws_dist_c.php

 // created: 2019-09-24 13:57:10
$dictionary['Account']['fields']['saws_dist_c']['labelValue']='Saws Distributor';
$dictionary['Account']['fields']['saws_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['saws_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_jst_dist_c.php

 // created: 2019-09-24 13:58:07
$dictionary['Account']['fields']['jst_dist_c']['labelValue']='Jobsite and Shop Tools Distributor';
$dictionary['Account']['fields']['jst_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['jst_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_metrology_dist_c.php

 // created: 2019-09-24 14:04:10
$dictionary['Account']['fields']['metrology_dist_c']['labelValue']='Metrology Equipment Distributor';
$dictionary['Account']['fields']['metrology_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['metrology_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_laser_dist_c.php

 // created: 2019-09-24 14:05:17
$dictionary['Account']['fields']['laser_dist_c']['labelValue']='Laser Measurement Distributor';
$dictionary['Account']['fields']['laser_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['laser_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_testing_dist_c.php

 // created: 2019-09-24 14:06:17
$dictionary['Account']['fields']['testing_dist_c']['labelValue']='Testing Equipment Distributor';
$dictionary['Account']['fields']['testing_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['testing_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_granite_dist_c.php

 // created: 2019-09-24 14:15:22
$dictionary['Account']['fields']['granite_dist_c']['labelValue']='Granite Distributor';
$dictionary['Account']['fields']['granite_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['granite_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_pgs_dist_c.php

 // created: 2019-09-24 14:16:20
$dictionary['Account']['fields']['pgs_dist_c']['labelValue']='Precision Ground Stock Distributor';
$dictionary['Account']['fields']['pgs_dist_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['pgs_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_primary_naics_c.php

 // created: 2019-09-24 15:25:20
$dictionary['Account']['fields']['primary_naics_c']['labelValue']='Primary NAICS';
$dictionary['Account']['fields']['primary_naics_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['primary_naics_c']['enforced']='';
$dictionary['Account']['fields']['primary_naics_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sic_code.php

 // created: 2019-09-24 16:03:47
$dictionary['Account']['fields']['sic_code']['len']='10';
$dictionary['Account']['fields']['sic_code']['audited']=false;
$dictionary['Account']['fields']['sic_code']['massupdate']=false;
$dictionary['Account']['fields']['sic_code']['comments']='SIC code of the account';
$dictionary['Account']['fields']['sic_code']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['sic_code']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['sic_code']['merge_filter']='disabled';
$dictionary['Account']['fields']['sic_code']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.21',
  'searchable' => true,
);
$dictionary['Account']['fields']['sic_code']['calculated']=false;
$dictionary['Account']['fields']['sic_code']['help']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_oracle_account_name_c.php

 // created: 2020-05-21 14:54:35
$dictionary['Account']['fields']['oracle_account_name_c']['labelValue']='Oracle Account Name';
$dictionary['Account']['fields']['oracle_account_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['oracle_account_name_c']['enforced']='';
$dictionary['Account']['fields']['oracle_account_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_name.php

 // created: 2020-05-21 15:37:00
$dictionary['Account']['fields']['name']['len']='150';
$dictionary['Account']['fields']['name']['massupdate']=false;
$dictionary['Account']['fields']['name']['comments']='Name of the Company';
$dictionary['Account']['fields']['name']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['name']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['name']['merge_filter']='disabled';
$dictionary['Account']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Account']['fields']['name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_oracle_creation_date_c.php

 // created: 2020-06-16 16:10:36
$dictionary['Account']['fields']['oracle_creation_date_c']['labelValue']='Oracle Creation Date';
$dictionary['Account']['fields']['oracle_creation_date_c']['enforced']='';
$dictionary['Account']['fields']['oracle_creation_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sales_channel_c.php

 // created: 2020-06-16 16:16:32
$dictionary['Account']['fields']['sales_channel_c']['labelValue']='Sales Channel';
$dictionary['Account']['fields']['sales_channel_c']['dependency']='';
$dictionary['Account']['fields']['sales_channel_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_parent_account_c.php

 // created: 2020-06-18 16:16:22
$dictionary['Account']['fields']['parent_account_c']['labelValue']='Headquarters';
$dictionary['Account']['fields']['parent_account_c']['enforced']='';
$dictionary['Account']['fields']['parent_account_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_site_id_c.php

 // created: 2020-07-10 19:06:13
$dictionary['Account']['fields']['site_id_c']['labelValue']='Oracle Site ID';
$dictionary['Account']['fields']['site_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['site_id_c']['enforced']='';
$dictionary['Account']['fields']['site_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/rli_link_workflow.php

$dictionary['Account']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_manager_c.php

 // created: 2021-03-21 21:27:59
$dictionary['Account']['fields']['account_manager_c']['labelValue']='Account Manager';
$dictionary['Account']['fields']['account_manager_c']['dependency']='';
$dictionary['Account']['fields']['account_manager_c']['required_formula']='';
$dictionary['Account']['fields']['account_manager_c']['readonly_formula']='';
$dictionary['Account']['fields']['account_manager_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_gm_accountno_c.php

 // created: 2021-03-21 21:29:06
$dictionary['Account']['fields']['gm_accountno_c']['labelValue']='GM Accountno';
$dictionary['Account']['fields']['gm_accountno_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['gm_accountno_c']['enforced']='';
$dictionary['Account']['fields']['gm_accountno_c']['dependency']='';
$dictionary['Account']['fields']['gm_accountno_c']['required_formula']='';
$dictionary['Account']['fields']['gm_accountno_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_bytewise_rep_c.php

 // created: 2021-03-21 21:30:58
$dictionary['Account']['fields']['bytewise_rep_c']['labelValue']='Bytewise Rep';
$dictionary['Account']['fields']['bytewise_rep_c']['dependency']='';
$dictionary['Account']['fields']['bytewise_rep_c']['required_formula']='';
$dictionary['Account']['fields']['bytewise_rep_c']['readonly_formula']='';
$dictionary['Account']['fields']['bytewise_rep_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_gm_source_c.php

 // created: 2021-03-21 21:31:43
$dictionary['Account']['fields']['gm_source_c']['labelValue']='GM Source';
$dictionary['Account']['fields']['gm_source_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['gm_source_c']['enforced']='';
$dictionary['Account']['fields']['gm_source_c']['dependency']='';
$dictionary['Account']['fields']['gm_source_c']['required_formula']='';
$dictionary['Account']['fields']['gm_source_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_interest_c.php

 // created: 2021-03-21 21:33:04
$dictionary['Account']['fields']['interest_c']['labelValue']='Interest';
$dictionary['Account']['fields']['interest_c']['dependency']='';
$dictionary['Account']['fields']['interest_c']['required_formula']='';
$dictionary['Account']['fields']['interest_c']['readonly_formula']='';
$dictionary['Account']['fields']['interest_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_record_type_c.php

 // created: 2021-03-21 21:39:40
$dictionary['Account']['fields']['record_type_c']['labelValue']='Record Type';
$dictionary['Account']['fields']['record_type_c']['dependency']='';
$dictionary['Account']['fields']['record_type_c']['required_formula']='';
$dictionary['Account']['fields']['record_type_c']['readonly_formula']='';
$dictionary['Account']['fields']['record_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_gm_industry_c.php

 // created: 2021-03-21 22:19:04
$dictionary['Account']['fields']['gm_industry_c']['labelValue']='GM Industry';
$dictionary['Account']['fields']['gm_industry_c']['dependency']='';
$dictionary['Account']['fields']['gm_industry_c']['required_formula']='';
$dictionary['Account']['fields']['gm_industry_c']['readonly_formula']='';
$dictionary['Account']['fields']['gm_industry_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_oracle_customer_class_c.php

 // created: 2021-07-13 15:32:27
$dictionary['Account']['fields']['oracle_customer_class_c']['labelValue']='Customer Class';
$dictionary['Account']['fields']['oracle_customer_class_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['oracle_customer_class_c']['enforced']='';
$dictionary['Account']['fields']['oracle_customer_class_c']['dependency']='';
$dictionary['Account']['fields']['oracle_customer_class_c']['required_formula']='';
$dictionary['Account']['fields']['oracle_customer_class_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_oracle_customer_category_c.php

 // created: 2021-07-13 15:35:42
$dictionary['Account']['fields']['oracle_customer_category_c']['labelValue']='Customer Category';
$dictionary['Account']['fields']['oracle_customer_category_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['oracle_customer_category_c']['enforced']='';
$dictionary['Account']['fields']['oracle_customer_category_c']['dependency']='';
$dictionary['Account']['fields']['oracle_customer_category_c']['required_formula']='';
$dictionary['Account']['fields']['oracle_customer_category_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_industry_tags_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_size_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_location_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_industry_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_logo_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_facebook_handle_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_founded_year_c.php

 // created: 2021-12-14 04:51:50

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_fiscal_year_end_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_naics_code_lbl_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hint_account_pic_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sf_webactivity_accounts_Accounts.php

// created: 2012-08-28 20:35:13
$dictionary["Account"]["fields"]["sf_webactivity_accounts"] = array (
  'name' => 'sf_webactivity_accounts',
  'type' => 'link',
  'relationship' => 'sf_webactivity_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_WEBACTIVITY_ACCOUNTS_FROM_SF_WEBACTIVITY_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:15
$dictionary['Account']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_lss01_groupemails_1_Accounts.php

// created: 2022-09-30 05:59:31
$dictionary["Account"]["fields"]["accounts_lss01_groupemails_1"] = array (
  'name' => 'accounts_lss01_groupemails_1',
  'type' => 'link',
  'relationship' => 'accounts_lss01_groupemails_1',
  'source' => 'non-db',
  'module' => 'LSS01_GroupEmails',
  'bean_name' => 'LSS01_GroupEmails',
  'vname' => 'LBL_ACCOUNTS_LSS01_GROUPEMAILS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_lss01_groupemails_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_timdelete_c.php

 // created: 2022-11-04 15:34:23
$dictionary['Account']['fields']['timdelete_c']['labelValue']='Time Delete';
$dictionary['Account']['fields']['timdelete_c']['dependency']='';
$dictionary['Account']['fields']['timdelete_c']['required_formula']='';
$dictionary['Account']['fields']['timdelete_c']['readonly_formula']='';
$dictionary['Account']['fields']['timdelete_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_number_c.php

 // created: 2022-11-19 00:31:59
$dictionary['Account']['fields']['account_number_c']['labelValue']='Oracle Account Number';
$dictionary['Account']['fields']['account_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['account_number_c']['enforced']='';
$dictionary['Account']['fields']['account_number_c']['dependency']='';
$dictionary['Account']['fields']['account_number_c']['required_formula']='';
$dictionary['Account']['fields']['account_number_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sales_region_c.php

 // created: 2022-11-19 18:47:48
$dictionary['Account']['fields']['sales_region_c']['labelValue']='Sales Region';
$dictionary['Account']['fields']['sales_region_c']['dependency']='';
$dictionary['Account']['fields']['sales_region_c']['required_formula']='';
$dictionary['Account']['fields']['sales_region_c']['readonly_formula']='';
$dictionary['Account']['fields']['sales_region_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sales_territory_c.php

 // created: 2022-11-19 19:00:36
$dictionary['Account']['fields']['sales_territory_c']['labelValue']='Sales Territory';
$dictionary['Account']['fields']['sales_territory_c']['dependency']='';
$dictionary['Account']['fields']['sales_territory_c']['required_formula']='';
$dictionary['Account']['fields']['sales_territory_c']['readonly_formula']='';
$dictionary['Account']['fields']['sales_territory_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_buying_group_c.php

 // created: 2022-11-21 22:24:49
$dictionary['Account']['fields']['buying_group_c']['labelValue']='Buying Group';
$dictionary['Account']['fields']['buying_group_c']['dependency']='';
$dictionary['Account']['fields']['buying_group_c']['required_formula']='';
$dictionary['Account']['fields']['buying_group_c']['readonly_formula']='';
$dictionary['Account']['fields']['buying_group_c']['visibility_grid']=array (
  'trigger' => 'account_type',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Customer' => 
    array (
    ),
    'Starrett Distributor' => 
    array (
      0 => '',
      1 => 'AD',
      2 => 'AD FICODIS',
      3 => 'AD PRO',
      4 => 'BERKSHIRE',
      5 => 'IBC',
      6 => 'IBC NETPLUS',
      7 => 'IDI',
      8 => 'IDI INDICA',
      9 => 'INDICA',
      10 => 'NETPLUS',
      11 => 'PRO',
      12 => 'PRO NETPLUS',
      13 => 'REL',
      14 => 'VAL',
      15 => 'VAL NETPLUS',
    ),
    'Distributor' => 
    array (
    ),
    'Strategic' => 
    array (
    ),
    'Target' => 
    array (
    ),
    'School' => 
    array (
    ),
    'Student' => 
    array (
    ),
    'Supplier' => 
    array (
    ),
    'Competitor' => 
    array (
    ),
    'Employee' => 
    array (
    ),
    'Starrett Employee' => 
    array (
    ),
    'Inactive Starrett Distributor' => 
    array (
    ),
    'Starrett Branch' => 
    array (
    ),
    'Starrett Agent' => 
    array (
    ),
    'Starrett Wholesaler' => 
    array (
    ),
    'GSA' => 
    array (
    ),
    'Export' => 
    array (
    ),
    'OEM' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_strategic_account_c.php

 // created: 2022-12-07 15:15:18
$dictionary['Account']['fields']['strategic_account_c']['labelValue']='Strategic Account';
$dictionary['Account']['fields']['strategic_account_c']['enforced']='';
$dictionary['Account']['fields']['strategic_account_c']['dependency']='or(equal($account_type,"Distributor"),equal($account_type,"Starrett Distributor"))';
$dictionary['Account']['fields']['strategic_account_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_group_emails_c.php

 // created: 2022-12-16 16:29:53
$dictionary['Account']['fields']['group_emails_c']['labelValue']='Group Emails';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_bytewise_source_c.php

 // created: 2023-01-03 14:28:51
$dictionary['Account']['fields']['bytewise_source_c']['labelValue']='Bytewise Source';
$dictionary['Account']['fields']['bytewise_source_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['bytewise_source_c']['enforced']='';
$dictionary['Account']['fields']['bytewise_source_c']['dependency']='';
$dictionary['Account']['fields']['bytewise_source_c']['required_formula']='';
$dictionary['Account']['fields']['bytewise_source_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/quotes_accounts_1_Accounts.php

// created: 2023-01-12 19:38:13
$dictionary["Account"]["fields"]["quotes_accounts_1"] = array (
  'name' => 'quotes_accounts_1',
  'type' => 'link',
  'relationship' => 'quotes_accounts_1',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'vname' => 'LBL_QUOTES_ACCOUNTS_1_FROM_QUOTES_TITLE',
  'id_name' => 'quotes_accounts_1quotes_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/pt_portalteams_accounts_1_Accounts.php

// created: 2023-01-12 19:58:49
$dictionary["Account"]["fields"]["pt_portalteams_accounts_1"] = array (
  'name' => 'pt_portalteams_accounts_1',
  'type' => 'link',
  'relationship' => 'pt_portalteams_accounts_1',
  'source' => 'non-db',
  'module' => 'PT_PortalTeams',
  'bean_name' => 'PT_PortalTeams',
  'vname' => 'LBL_PT_PORTALTEAMS_ACCOUNTS_1_FROM_PT_PORTALTEAMS_TITLE',
  'id_name' => 'pt_portalteams_accounts_1pt_portalteams_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_productcategories_1_Accounts.php

// created: 2023-01-12 20:27:32
$dictionary["Account"]["fields"]["accounts_productcategories_1"] = array (
  'name' => 'accounts_productcategories_1',
  'type' => 'link',
  'relationship' => 'accounts_productcategories_1',
  'source' => 'non-db',
  'module' => 'ProductCategories',
  'bean_name' => 'ProductCategory',
  'vname' => 'LBL_ACCOUNTS_PRODUCTCATEGORIES_1_FROM_PRODUCTCATEGORIES_TITLE',
  'id_name' => 'accounts_productcategories_1productcategories_idb',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_productcategories_2_Accounts.php

// created: 2023-01-12 20:29:57
$dictionary["Account"]["fields"]["accounts_productcategories_2"] = array (
  'name' => 'accounts_productcategories_2',
  'type' => 'link',
  'relationship' => 'accounts_productcategories_2',
  'source' => 'non-db',
  'module' => 'ProductCategories',
  'bean_name' => 'ProductCategory',
  'vname' => 'LBL_ACCOUNTS_PRODUCTCATEGORIES_2_FROM_PRODUCTCATEGORIES_TITLE',
  'id_name' => 'accounts_productcategories_2productcategories_idb',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/producttemplates_accounts_1_Accounts.php

// created: 2023-01-12 20:33:38
$dictionary["Account"]["fields"]["producttemplates_accounts_1"] = array (
  'name' => 'producttemplates_accounts_1',
  'type' => 'link',
  'relationship' => 'producttemplates_accounts_1',
  'source' => 'non-db',
  'module' => 'ProductTemplates',
  'bean_name' => 'ProductTemplate',
  'vname' => 'LBL_PRODUCTTEMPLATES_ACCOUNTS_1_FROM_PRODUCTTEMPLATES_TITLE',
  'id_name' => 'producttemplates_accounts_1producttemplates_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/pu_portalusers_accounts_1_Accounts.php

// created: 2023-01-13 14:55:41
$dictionary["Account"]["fields"]["pu_portalusers_accounts_1"] = array (
  'name' => 'pu_portalusers_accounts_1',
  'type' => 'link',
  'relationship' => 'pu_portalusers_accounts_1',
  'source' => 'non-db',
  'module' => 'PU_PortalUsers',
  'bean_name' => 'PU_PortalUsers',
  'vname' => 'LBL_PU_PORTALUSERS_ACCOUNTS_1_FROM_PU_PORTALUSERS_TITLE',
  'id_name' => 'pu_portalusers_accounts_1pu_portalusers_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_type.php

 // created: 2023-01-23 18:14:18
$dictionary['Account']['fields']['account_type']['len']=100;
$dictionary['Account']['fields']['account_type']['required']=true;
$dictionary['Account']['fields']['account_type']['comments']='The Company is of this type';
$dictionary['Account']['fields']['account_type']['merge_filter']='disabled';
$dictionary['Account']['fields']['account_type']['calculated']=false;
$dictionary['Account']['fields']['account_type']['dependency']=false;
$dictionary['Account']['fields']['account_type']['audited']=false;
$dictionary['Account']['fields']['account_type']['massupdate']=true;
$dictionary['Account']['fields']['account_type']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['account_type']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['account_type']['hidemassupdate']=false;
$dictionary['Account']['fields']['account_type']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_shipping_address_street.php

 // created: 2023-02-06 20:20:21
$dictionary['Account']['fields']['shipping_address_street']['len']='150';
$dictionary['Account']['fields']['shipping_address_street']['audited']=false;
$dictionary['Account']['fields']['shipping_address_street']['massupdate']=true;
$dictionary['Account']['fields']['shipping_address_street']['hidemassupdate']=false;
$dictionary['Account']['fields']['shipping_address_street']['comments']='The street address used for for shipping purposes';
$dictionary['Account']['fields']['shipping_address_street']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['shipping_address_street']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['shipping_address_street']['merge_filter']='disabled';
$dictionary['Account']['fields']['shipping_address_street']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.34',
  'searchable' => true,
);
$dictionary['Account']['fields']['shipping_address_street']['calculated']=false;
$dictionary['Account']['fields']['shipping_address_street']['rows']='2';
$dictionary['Account']['fields']['shipping_address_street']['cols']='20';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_shipping_address_city.php

 // created: 2023-02-07 20:23:24
$dictionary['Account']['fields']['shipping_address_city']['len']='100';
$dictionary['Account']['fields']['shipping_address_city']['audited']=false;
$dictionary['Account']['fields']['shipping_address_city']['massupdate']=true;
$dictionary['Account']['fields']['shipping_address_city']['hidemassupdate']=false;
$dictionary['Account']['fields']['shipping_address_city']['comments']='The city used for the shipping address';
$dictionary['Account']['fields']['shipping_address_city']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['shipping_address_city']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['shipping_address_city']['merge_filter']='disabled';
$dictionary['Account']['fields']['shipping_address_city']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Account']['fields']['shipping_address_city']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_shipping_address_state.php

 // created: 2023-02-07 20:23:50
$dictionary['Account']['fields']['shipping_address_state']['len']='100';
$dictionary['Account']['fields']['shipping_address_state']['audited']=false;
$dictionary['Account']['fields']['shipping_address_state']['massupdate']=true;
$dictionary['Account']['fields']['shipping_address_state']['hidemassupdate']=false;
$dictionary['Account']['fields']['shipping_address_state']['comments']='The state used for the shipping address';
$dictionary['Account']['fields']['shipping_address_state']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['shipping_address_state']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['shipping_address_state']['merge_filter']='disabled';
$dictionary['Account']['fields']['shipping_address_state']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Account']['fields']['shipping_address_state']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_salesperson_c.php

 // created: 2023-02-07 21:40:34
$dictionary['Account']['fields']['salesperson_c']['labelValue']='Sales Agent';
$dictionary['Account']['fields']['salesperson_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Account']['fields']['salesperson_c']['enforced']='';
$dictionary['Account']['fields']['salesperson_c']['dependency']='';
$dictionary['Account']['fields']['salesperson_c']['required_formula']='';
$dictionary['Account']['fields']['salesperson_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_parent_id.php

 // created: 2023-02-08 21:37:02
$dictionary['Account']['fields']['parent_id']['name']='parent_id';
$dictionary['Account']['fields']['parent_id']['vname']='LBL_PARENT_ACCOUNT_ID';
$dictionary['Account']['fields']['parent_id']['type']='id';
$dictionary['Account']['fields']['parent_id']['required']=false;
$dictionary['Account']['fields']['parent_id']['reportable']=false;
$dictionary['Account']['fields']['parent_id']['audited']=false;
$dictionary['Account']['fields']['parent_id']['comment']='Account ID of the parent of this account';
$dictionary['Account']['fields']['parent_id']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_parent_name.php

 // created: 2023-02-08 21:37:02
$dictionary['Account']['fields']['parent_name']['audited']=true;
$dictionary['Account']['fields']['parent_name']['massupdate']=true;
$dictionary['Account']['fields']['parent_name']['hidemassupdate']=false;
$dictionary['Account']['fields']['parent_name']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['parent_name']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['parent_name']['merge_filter']='disabled';
$dictionary['Account']['fields']['parent_name']['reportable']=false;
$dictionary['Account']['fields']['parent_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_status_c.php

 // created: 2023-02-20 17:35:06
$dictionary['Account']['fields']['account_status_c']['labelValue']='Account Status';
$dictionary['Account']['fields']['account_status_c']['dependency']='';
$dictionary['Account']['fields']['account_status_c']['required_formula']='';
$dictionary['Account']['fields']['account_status_c']['readonly_formula']='';
$dictionary['Account']['fields']['account_status_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_portal_activated_distributor_c.php

 // created: 2023-02-24 11:37:10
$dictionary['Account']['fields']['portal_activated_distributor_c']['labelValue']='Portal Activated Distributor';
$dictionary['Account']['fields']['portal_activated_distributor_c']['enforced']='';
$dictionary['Account']['fields']['portal_activated_distributor_c']['dependency']='';
$dictionary['Account']['fields']['portal_activated_distributor_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_agency_name_c.php

 // created: 2023-03-01 19:08:56
$dictionary['Account']['fields']['agency_name_c']['labelValue']='Agency Name ';
$dictionary['Account']['fields']['agency_name_c']['dependency']='';
$dictionary['Account']['fields']['agency_name_c']['required_formula']='';
$dictionary['Account']['fields']['agency_name_c']['readonly_formula']='';
$dictionary['Account']['fields']['agency_name_c']['visibility_grid']=array (
);

 
?>
