<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_bytewise_source_c.php

 // created: 2016-10-16 03:16:22
$dictionary['Contact']['fields']['bytewise_source_c']['labelValue'] = 'Bytewise Source';
$dictionary['Contact']['fields']['bytewise_source_c']['full_text_search']['boost'] = 1;
$dictionary['Contact']['fields']['bytewise_source_c']['enforced'] = '';
$dictionary['Contact']['fields']['bytewise_source_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_product_interest_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['product_interest_c']['labelValue'] = 'Product Interest';
$dictionary['Contact']['fields']['product_interest_c']['full_text_search']['boost'] = 1;
$dictionary['Contact']['fields']['product_interest_c']['enforced'] = '';
$dictionary['Contact']['fields']['product_interest_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_goldmine_id_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['goldmine_id_c']['labelValue'] = 'Goldmine ID';
$dictionary['Contact']['fields']['goldmine_id_c']['full_text_search']['boost'] = 1;
$dictionary['Contact']['fields']['goldmine_id_c']['enforced'] = '';
$dictionary['Contact']['fields']['goldmine_id_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_first_name.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['first_name']['required'] = true;
$dictionary['Contact']['fields']['first_name']['comments'] = 'First name of the contact';
$dictionary['Contact']['fields']['first_name']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['first_name']['calculated'] = false;
$dictionary['Contact']['fields']['first_name']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['first_name']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['first_name']['full_text_search']['boost'] = 1.9899999999999999911182158029987476766109466552734375;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_phone_work.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['phone_work']['required'] = false;
$dictionary['Contact']['fields']['phone_work']['comments'] = 'Work phone number of the contact';
$dictionary['Contact']['fields']['phone_work']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['phone_work']['calculated'] = false;
$dictionary['Contact']['fields']['phone_work']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['phone_work']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['phone_work']['full_text_search']['boost'] = 1.0800000000000000710542735760100185871124267578125;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_email1.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['email1']['required'] = false;
$dictionary['Contact']['fields']['email1']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['email1']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['email1']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['email1']['full_text_search']['boost'] = 1;
$dictionary['Contact']['fields']['email1']['calculated'] = false;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_decision_maker_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['decision_maker_c']['enforced'] = '';
$dictionary['Contact']['fields']['decision_maker_c']['dependency'] = 'equal($contact_type_c,"dist")';


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sugar_id_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Contact']['fields']['sugar_id_c']['labelValue'] = 'Sugar ID';
$dictionary['Contact']['fields']['sugar_id_c']['full_text_search']['boost'] = 1;
$dictionary['Contact']['fields']['sugar_id_c']['enforced'] = '';
$dictionary['Contact']['fields']['sugar_id_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_contactsmap_c.php

 // created: 2018-03-14 16:11:56
$dictionary['Contact']['fields']['contactsmap_c']['labelValue']='Location';
$dictionary['Contact']['fields']['contactsmap_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_services_c.php

 // created: 2018-12-31 16:31:59
$dictionary['Contact']['fields']['services_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['services_c']['dependency']='equal($metrology_equipment_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_raw_material_c.php

 // created: 2018-12-31 16:32:00
$dictionary['Contact']['fields']['raw_material_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['raw_material_c']['dependency']='equal($saws_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_m1_oil_c.php

 // created: 2018-12-31 16:32:01
$dictionary['Contact']['fields']['m1_oil_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['m1_oil_c']['dependency']='equal($jst_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_material_testing_c.php

 // created: 2018-12-31 16:32:02
$dictionary['Contact']['fields']['material_testing_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['material_testing_c']['dependency']='equal($testing_equipment_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_optical_systems_c.php

 // created: 2018-12-31 16:32:03
$dictionary['Contact']['fields']['optical_systems_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['optical_systems_c']['dependency']='equal($metrology_equipment_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_welding_center_c.php

 // created: 2018-12-31 16:32:04
$dictionary['Contact']['fields']['welding_center_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['welding_center_c']['dependency']='equal($saws_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pmt_c.php

 // created: 2018-12-31 16:32:05
$dictionary['Contact']['fields']['pmt_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_granite_c.php

 // created: 2018-12-31 16:32:07
$dictionary['Contact']['fields']['granite_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_vision_systems_c.php

 // created: 2018-12-31 16:32:08
$dictionary['Contact']['fields']['vision_systems_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['vision_systems_c']['dependency']='equal($metrology_equipment_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_special_gage_c.php

 // created: 2018-12-31 16:32:09
$dictionary['Contact']['fields']['special_gage_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['special_gage_c']['dependency']='equal($pmt_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_gage_blocks_c.php

 // created: 2018-12-31 16:32:10
$dictionary['Contact']['fields']['gage_blocks_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['gage_blocks_c']['dependency']='equal($pmt_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_saws_c.php

 // created: 2018-12-31 16:32:11
$dictionary['Contact']['fields']['saws_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pta_and_hand_saw_blades_c.php

 // created: 2018-12-31 16:32:15
$dictionary['Contact']['fields']['pta_and_hand_saw_blades_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['pta_and_hand_saw_blades_c']['dependency']='equal($saws_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_flat_stock_c.php

 // created: 2018-12-31 16:32:16
$dictionary['Contact']['fields']['flat_stock_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['flat_stock_c']['dependency']='equal($pgs_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_drill_rod_c.php

 // created: 2018-12-31 16:32:17
$dictionary['Contact']['fields']['drill_rod_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['drill_rod_c']['dependency']='equal($pgs_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hand_held_force_gages_c.php

 // created: 2018-12-31 16:32:18
$dictionary['Contact']['fields']['hand_held_force_gages_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['hand_held_force_gages_c']['dependency']='equal($testing_equipment_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pgs_c.php

 // created: 2018-12-31 16:32:20
$dictionary['Contact']['fields']['pgs_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_band_saws_c.php

 // created: 2018-12-31 16:32:21
$dictionary['Contact']['fields']['band_saws_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['band_saws_c']['dependency']='equal($saws_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hand_tools_c.php

 // created: 2018-12-31 16:32:22
$dictionary['Contact']['fields']['hand_tools_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['hand_tools_c']['dependency']='equal($jst_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_band_saw_machines_c.php

 // created: 2018-12-31 16:32:25
$dictionary['Contact']['fields']['band_saw_machines_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['band_saw_machines_c']['dependency']='equal($saws_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pht_c.php

 // created: 2018-12-31 16:32:26
$dictionary['Contact']['fields']['pht_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['pht_c']['dependency']='equal($pmt_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_jst_c.php

 // created: 2018-12-31 16:32:27
$dictionary['Contact']['fields']['jst_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_force_measurement_c.php

 // created: 2018-12-31 16:32:28
$dictionary['Contact']['fields']['force_measurement_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['force_measurement_c']['dependency']='equal($testing_equipment_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_custom_granite_solutions_c.php

 // created: 2018-12-31 16:32:29
$dictionary['Contact']['fields']['custom_granite_solutions_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['custom_granite_solutions_c']['dependency']='equal($granite_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_leads_1_Contacts.php

// created: 2019-01-03 16:10:23
$dictionary["Contact"]["fields"]["contacts_leads_1"] = array (
  'name' => 'contacts_leads_1',
  'type' => 'link',
  'relationship' => 'contacts_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_leads_1contacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_opportunities_1_Contacts.php

// created: 2019-01-03 16:18:19
$dictionary["Contact"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_meat_cutter_c.php

 // created: 2019-02-20 17:33:51
$dictionary['Contact']['fields']['meat_cutter_c']['labelValue']='MeatKutter';
$dictionary['Contact']['fields']['meat_cutter_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Contact']['fields']['meat_cutter_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_som_specialorderquotes_1_Contacts.php

// created: 2019-07-29 16:24:19
$dictionary["Contact"]["fields"]["contacts_som_specialorderquotes_1"] = array (
  'name' => 'contacts_som_specialorderquotes_1',
  'type' => 'link',
  'relationship' => 'contacts_som_specialorderquotes_1',
  'source' => 'non-db',
  'module' => 'SOM_SpecialOrderQuotes',
  'bean_name' => 'SOM_SpecialOrderQuotes',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_som_specialorderquotes_1contacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_som_specialorderquotes_2_Contacts.php

// created: 2019-07-29 16:25:14
$dictionary["Contact"]["fields"]["contacts_som_specialorderquotes_2"] = array (
  'name' => 'contacts_som_specialorderquotes_2',
  'type' => 'link',
  'relationship' => 'contacts_som_specialorderquotes_2',
  'source' => 'non-db',
  'module' => 'SOM_SpecialOrderQuotes',
  'bean_name' => 'SOM_SpecialOrderQuotes',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_2_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_som_specialorderquotes_2contacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_laser_measurement_c.php

 // created: 2019-09-13 16:22:00
$dictionary['Contact']['fields']['laser_measurement_c']['labelValue']='Laser Measurement';
$dictionary['Contact']['fields']['laser_measurement_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_testing_equipment_c.php

 // created: 2019-09-13 16:23:44
$dictionary['Contact']['fields']['testing_equipment_c']['labelValue']='Testing Equipment (Group)';
$dictionary['Contact']['fields']['testing_equipment_c']['dependency']='';
$dictionary['Contact']['fields']['testing_equipment_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_surface_plates_c.php

 // created: 2019-09-13 16:24:17
$dictionary['Contact']['fields']['surface_plates_c']['labelValue']='Surface Plates';
$dictionary['Contact']['fields']['surface_plates_c']['dependency']='equal($granite_c,"Yes")';
$dictionary['Contact']['fields']['surface_plates_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_mkto_lead_score.php

 // created: 2020-01-07 16:20:46
$dictionary['Contact']['fields']['mkto_lead_score']['len']='11';
$dictionary['Contact']['fields']['mkto_lead_score']['massupdate']=false;
$dictionary['Contact']['fields']['mkto_lead_score']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['mkto_lead_score']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['mkto_lead_score']['merge_filter']='disabled';
$dictionary['Contact']['fields']['mkto_lead_score']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['mkto_lead_score']['calculated']=false;
$dictionary['Contact']['fields']['mkto_lead_score']['enable_range_search']=false;
$dictionary['Contact']['fields']['mkto_lead_score']['min']=0;
$dictionary['Contact']['fields']['mkto_lead_score']['max']=false;
$dictionary['Contact']['fields']['mkto_lead_score']['disable_num_format']='';
$dictionary['Contact']['fields']['mkto_lead_score']['default']='0';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_made_in_america_c.php

 // created: 2020-06-17 15:49:10
$dictionary['Contact']['fields']['made_in_america_c']['labelValue']='Made In America';
$dictionary['Contact']['fields']['made_in_america_c']['dependency']='';
$dictionary['Contact']['fields']['made_in_america_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_product_information_c.php

 // created: 2021-02-15 20:23:08
$dictionary['Contact']['fields']['product_information_c']['labelValue']='Product Information';
$dictionary['Contact']['fields']['product_information_c']['enforced']='';
$dictionary['Contact']['fields']['product_information_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_product_training_c.php

 // created: 2021-02-15 20:23:54
$dictionary['Contact']['fields']['product_training_c']['labelValue']='Product Training';
$dictionary['Contact']['fields']['product_training_c']['enforced']='';
$dictionary['Contact']['fields']['product_training_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_holiday_schedule_c.php

 // created: 2021-02-15 20:24:30
$dictionary['Contact']['fields']['holiday_schedule_c']['labelValue']='Holiday Schedule';
$dictionary['Contact']['fields']['holiday_schedule_c']['enforced']='';
$dictionary['Contact']['fields']['holiday_schedule_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_corporate_announcements_c.php

 // created: 2021-02-15 20:25:02
$dictionary['Contact']['fields']['corporate_announcements_c']['labelValue']='Corporate Announcements';
$dictionary['Contact']['fields']['corporate_announcements_c']['enforced']='';
$dictionary['Contact']['fields']['corporate_announcements_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_gm_accountno_c.php

 // created: 2021-03-21 21:42:53
$dictionary['Contact']['fields']['gm_accountno_c']['labelValue']='GM Accountno';
$dictionary['Contact']['fields']['gm_accountno_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['gm_accountno_c']['enforced']='';
$dictionary['Contact']['fields']['gm_accountno_c']['dependency']='';
$dictionary['Contact']['fields']['gm_accountno_c']['required_formula']='';
$dictionary['Contact']['fields']['gm_accountno_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_gm_source_c.php

 // created: 2021-03-21 21:43:16
$dictionary['Contact']['fields']['gm_source_c']['labelValue']='GM Source';
$dictionary['Contact']['fields']['gm_source_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['gm_source_c']['enforced']='';
$dictionary['Contact']['fields']['gm_source_c']['dependency']='';
$dictionary['Contact']['fields']['gm_source_c']['required_formula']='';
$dictionary['Contact']['fields']['gm_source_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_interest_c.php

 // created: 2021-03-21 21:43:57
$dictionary['Contact']['fields']['interest_c']['labelValue']='Interest';
$dictionary['Contact']['fields']['interest_c']['dependency']='';
$dictionary['Contact']['fields']['interest_c']['required_formula']='';
$dictionary['Contact']['fields']['interest_c']['readonly_formula']='';
$dictionary['Contact']['fields']['interest_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_account_manager_c.php

 // created: 2021-03-21 21:44:23
$dictionary['Contact']['fields']['account_manager_c']['labelValue']='Account Manager';
$dictionary['Contact']['fields']['account_manager_c']['dependency']='';
$dictionary['Contact']['fields']['account_manager_c']['required_formula']='';
$dictionary['Contact']['fields']['account_manager_c']['readonly_formula']='';
$dictionary['Contact']['fields']['account_manager_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_bytewise_rep_c.php

 // created: 2021-03-21 21:45:16
$dictionary['Contact']['fields']['bytewise_rep_c']['labelValue']='Bytewise Rep';
$dictionary['Contact']['fields']['bytewise_rep_c']['dependency']='';
$dictionary['Contact']['fields']['bytewise_rep_c']['required_formula']='';
$dictionary['Contact']['fields']['bytewise_rep_c']['readonly_formula']='';
$dictionary['Contact']['fields']['bytewise_rep_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_record_type_c.php

 // created: 2021-03-21 21:46:41
$dictionary['Contact']['fields']['record_type_c']['labelValue']='Record Type';
$dictionary['Contact']['fields']['record_type_c']['dependency']='';
$dictionary['Contact']['fields']['record_type_c']['required_formula']='';
$dictionary['Contact']['fields']['record_type_c']['readonly_formula']='';
$dictionary['Contact']['fields']['record_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_industry_c.php

 // created: 2021-03-21 22:20:00
$dictionary['Contact']['fields']['industry_c']['labelValue']='Industry';
$dictionary['Contact']['fields']['industry_c']['dependency']='';
$dictionary['Contact']['fields']['industry_c']['required_formula']='';
$dictionary['Contact']['fields']['industry_c']['readonly_formula']='';
$dictionary['Contact']['fields']['industry_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_ds_c.php

 // created: 2021-03-26 13:30:50
$dictionary['Contact']['fields']['ds_c']['labelValue']='DataSure';
$dictionary['Contact']['fields']['ds_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Contact']['fields']['ds_c']['required_formula']='';
$dictionary['Contact']['fields']['ds_c']['readonly_formula']='';
$dictionary['Contact']['fields']['ds_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_tire_c.php

 // created: 2021-03-26 14:24:57
$dictionary['Contact']['fields']['tire_c']['labelValue']='Tire Industry';
$dictionary['Contact']['fields']['tire_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Contact']['fields']['tire_c']['required_formula']='';
$dictionary['Contact']['fields']['tire_c']['readonly_formula']='';
$dictionary['Contact']['fields']['tire_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_profile_c.php

 // created: 2021-03-26 14:27:42
$dictionary['Contact']['fields']['profile_c']['labelValue']='Profile Measurement';
$dictionary['Contact']['fields']['profile_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Contact']['fields']['profile_c']['required_formula']='';
$dictionary['Contact']['fields']['profile_c']['readonly_formula']='';
$dictionary['Contact']['fields']['profile_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/cc_coupon_codes_contacts_Contacts.php

// created: 2021-03-26 18:52:01
$dictionary["Contact"]["fields"]["cc_coupon_codes_contacts"] = array (
  'name' => 'cc_coupon_codes_contacts',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_contacts',
  'source' => 'non-db',
  'module' => 'CC_Coupon_Codes',
  'bean_name' => false,
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_name.php

 // created: 2021-06-25 15:35:52
$dictionary['Contact']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Contact']['fields']['last_name']['merge_filter']='disabled';
$dictionary['Contact']['fields']['last_name']['calculated']=false;
$dictionary['Contact']['fields']['last_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.97',
  'searchable' => true,
);
$dictionary['Contact']['fields']['last_name']['required']=true;
$dictionary['Contact']['fields']['last_name']['massupdate']=true;
$dictionary['Contact']['fields']['last_name']['hidemassupdate']=false;
$dictionary['Contact']['fields']['last_name']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['last_name']['duplicate_merge_dom_value']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_compliance_c.php

 // created: 2021-06-30 14:34:24
$dictionary['Contact']['fields']['compliance_c']['labelValue']='Compliance';
$dictionary['Contact']['fields']['compliance_c']['enforced']='';
$dictionary['Contact']['fields']['compliance_c']['dependency']='';
$dictionary['Contact']['fields']['compliance_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_contact_type_c.php

 // created: 2021-08-13 17:29:10
$dictionary['Contact']['fields']['contact_type_c']['labelValue']='Contact Type';
$dictionary['Contact']['fields']['contact_type_c']['dependency']='';
$dictionary['Contact']['fields']['contact_type_c']['required_formula']='';
$dictionary['Contact']['fields']['contact_type_c']['readonly_formula']='';
$dictionary['Contact']['fields']['contact_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_price_increase_c.php

 // created: 2021-11-11 18:46:49
$dictionary['Contact']['fields']['price_increase_c']['labelValue']='Price Adjustment';
$dictionary['Contact']['fields']['price_increase_c']['enforced']='';
$dictionary['Contact']['fields']['price_increase_c']['dependency']='';
$dictionary['Contact']['fields']['price_increase_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Contact']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Contact']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Contact']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Contact']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Contact']['fields']['denorm_account_name']['len'] = '150';
$dictionary['Contact']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Contact']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['required'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Contact']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['denorm_account_name']['massupdate'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_merge'] = 'enabled';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['Contact']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Contact']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_job_2_c.php

 // created: 2021-12-14 04:51:53
$dictionary['Contact']['fields']['hint_job_2_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_location_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_description_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_education_c.php

 // created: 2021-12-14 04:51:53
$dictionary['Contact']['fields']['hint_education_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_industry_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_size_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_education_2_c.php

 // created: 2021-12-14 04:51:53
$dictionary['Contact']['fields']['hint_education_2_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_logo_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_twitter_c.php

 // created: 2021-12-14 04:51:54
$dictionary['Contact']['fields']['hint_twitter_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_facebook_c.php

 // created: 2021-12-14 04:51:54
$dictionary['Contact']['fields']['hint_facebook_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_founded_year_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_facebook_handle_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_twitter_handle_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_industry_tags_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_website_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_phone_2_c.php

 // created: 2021-12-14 04:51:54
$dictionary['Contact']['fields']['hint_phone_2_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_phone_1_c.php

 // created: 2021-12-14 04:51:54
$dictionary['Contact']['fields']['hint_phone_1_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_photo_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_contact_pic_c.php

 // created: 2021-12-14 04:51:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_naics_code_lbl_c.php

 // created: 2021-12-14 04:51:55

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_sic_code_label_c.php

 // created: 2021-12-14 04:51:55

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_fiscal_year_end_c.php

 // created: 2021-12-14 04:51:55

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hint_account_annual_revenue_c.php

 // created: 2021-12-14 04:51:55

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_contact_company_c.php

 // created: 2022-03-18 05:33:49
$dictionary['Contact']['fields']['contact_company_c']['labelValue']='Contact Company';
$dictionary['Contact']['fields']['contact_company_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['contact_company_c']['enforced']='';
$dictionary['Contact']['fields']['contact_company_c']['dependency']='';
$dictionary['Contact']['fields']['contact_company_c']['required_formula']='';
$dictionary['Contact']['fields']['contact_company_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sf_eventmanagement_contacts_Contacts.php

// created: 2012-12-12 16:37:26
$dictionary["Contact"]["fields"]["sf_eventmanagement_contacts"] = array (
  'name' => 'sf_eventmanagement_contacts',
  'type' => 'link',
  'relationship' => 'sf_eventmanagement_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_EVENTMANAGEMENT_CONTACTS_FROM_SF_EVENTMANAGEMENT_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sf_webactivity_contacts_Contacts.php

// created: 2012-08-28 20:35:14
$dictionary["Contact"]["fields"]["sf_webactivity_contacts"] = array (
  'name' => 'sf_webactivity_contacts',
  'type' => 'link',
  'relationship' => 'sf_webactivity_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_WEBACTIVITY_CONTACTS_FROM_SF_WEBACTIVITY_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sf_dialogs_contacts_Contacts.php

// created: 2012-12-12 16:37:20
$dictionary["Contact"]["fields"]["sf_dialogs_contacts"] = array (
  'name' => 'sf_dialogs_contacts',
  'type' => 'link',
  'relationship' => 'sf_dialogs_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_DIALOGS_CONTACTS_FROM_SF_DIALOGS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sf_lastactivity_default_c.php

 // created: 2022-05-13 13:48:05
$dictionary['Contact']['fields']['sf_lastactivity_default_c']['labelValue']='Salesfusion Last Activity';
$dictionary['Contact']['fields']['sf_lastactivity_default_c']['enforced']='';
$dictionary['Contact']['fields']['sf_lastactivity_default_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Contact']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_reason_for_contact_c.php

 // created: 2022-05-29 07:27:06
$dictionary['Contact']['fields']['reason_for_contact_c']['labelValue']='Reason for Contact';
$dictionary['Contact']['fields']['reason_for_contact_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['reason_for_contact_c']['enforced']='';
$dictionary['Contact']['fields']['reason_for_contact_c']['dependency']='';
$dictionary['Contact']['fields']['reason_for_contact_c']['required_formula']='';
$dictionary['Contact']['fields']['reason_for_contact_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_catalog_number_c.php

 // created: 2022-05-29 07:27:54
$dictionary['Contact']['fields']['catalog_number_c']['labelValue']='Catalog Number';
$dictionary['Contact']['fields']['catalog_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['catalog_number_c']['enforced']='';
$dictionary['Contact']['fields']['catalog_number_c']['dependency']='';
$dictionary['Contact']['fields']['catalog_number_c']['required_formula']='';
$dictionary['Contact']['fields']['catalog_number_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_product_group_c.php

 // created: 2022-05-29 07:28:48
$dictionary['Contact']['fields']['product_group_c']['labelValue']='Product Group';
$dictionary['Contact']['fields']['product_group_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['product_group_c']['enforced']='';
$dictionary['Contact']['fields']['product_group_c']['dependency']='';
$dictionary['Contact']['fields']['product_group_c']['required_formula']='';
$dictionary['Contact']['fields']['product_group_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_three_d_access_request_c.php

 // created: 2022-05-29 08:31:21
$dictionary['Contact']['fields']['three_d_access_request_c']['labelValue']='3D Access Request';
$dictionary['Contact']['fields']['three_d_access_request_c']['dependency']='';
$dictionary['Contact']['fields']['three_d_access_request_c']['required_formula']='';
$dictionary['Contact']['fields']['three_d_access_request_c']['readonly_formula']='';
$dictionary['Contact']['fields']['three_d_access_request_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_request_date_c.php

 // created: 2022-05-29 08:31:59
$dictionary['Contact']['fields']['request_date_c']['labelValue']='Request Date';
$dictionary['Contact']['fields']['request_date_c']['enforced']='';
$dictionary['Contact']['fields']['request_date_c']['dependency']='';
$dictionary['Contact']['fields']['request_date_c']['required_formula']='';
$dictionary['Contact']['fields']['request_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_privacy_policy_agreement_c.php

 // created: 2022-05-29 08:35:20
$dictionary['Contact']['fields']['privacy_policy_agreement_c']['labelValue']='Privacy Policy Agreement';
$dictionary['Contact']['fields']['privacy_policy_agreement_c']['enforced']='';
$dictionary['Contact']['fields']['privacy_policy_agreement_c']['dependency']='';
$dictionary['Contact']['fields']['privacy_policy_agreement_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pmt_score_c.php

 // created: 2022-07-27 17:12:23
$dictionary['Contact']['fields']['pmt_score_c']['labelValue']='PMT Group Score';
$dictionary['Contact']['fields']['pmt_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['pmt_score_c']['enforced']='false';
$dictionary['Contact']['fields']['pmt_score_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Contact']['fields']['pmt_score_c']['required_formula']='';
$dictionary['Contact']['fields']['pmt_score_c']['readonly']='1';
$dictionary['Contact']['fields']['pmt_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_saws_score_c.php

 // created: 2022-07-27 17:14:28
$dictionary['Contact']['fields']['saws_score_c']['labelValue']='SAWS Group Score';
$dictionary['Contact']['fields']['saws_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['saws_score_c']['enforced']='false';
$dictionary['Contact']['fields']['saws_score_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Contact']['fields']['saws_score_c']['required_formula']='';
$dictionary['Contact']['fields']['saws_score_c']['readonly']='1';
$dictionary['Contact']['fields']['saws_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_jst_c_c.php

 // created: 2022-07-27 17:18:15
$dictionary['Contact']['fields']['jst_c_c']['labelValue']='Jobsite Group Score';
$dictionary['Contact']['fields']['jst_c_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['jst_c_c']['enforced']='false';
$dictionary['Contact']['fields']['jst_c_c']['dependency']='equal($jst_c,"Yes")';
$dictionary['Contact']['fields']['jst_c_c']['required_formula']='';
$dictionary['Contact']['fields']['jst_c_c']['readonly']='1';
$dictionary['Contact']['fields']['jst_c_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pgs_score_c.php

 // created: 2022-07-27 17:19:56
$dictionary['Contact']['fields']['pgs_score_c']['labelValue']='Precision Stock Score';
$dictionary['Contact']['fields']['pgs_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['pgs_score_c']['enforced']='false';
$dictionary['Contact']['fields']['pgs_score_c']['dependency']='equal($pgs_c,"Yes")';
$dictionary['Contact']['fields']['pgs_score_c']['required_formula']='';
$dictionary['Contact']['fields']['pgs_score_c']['readonly']='1';
$dictionary['Contact']['fields']['pgs_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_laser_measurement_score_c.php

 // created: 2022-07-27 17:29:48
$dictionary['Contact']['fields']['laser_measurement_score_c']['labelValue']='Laser Measurement Score';
$dictionary['Contact']['fields']['laser_measurement_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['laser_measurement_score_c']['enforced']='false';
$dictionary['Contact']['fields']['laser_measurement_score_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Contact']['fields']['laser_measurement_score_c']['required_formula']='';
$dictionary['Contact']['fields']['laser_measurement_score_c']['readonly']='1';
$dictionary['Contact']['fields']['laser_measurement_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_testing_equipment_score_c.php

 // created: 2022-07-27 17:33:01
$dictionary['Contact']['fields']['testing_equipment_score_c']['labelValue']='Testing Equipment Score';
$dictionary['Contact']['fields']['testing_equipment_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['testing_equipment_score_c']['enforced']='false';
$dictionary['Contact']['fields']['testing_equipment_score_c']['dependency']='equal($testing_equipment_c,"Yes")';
$dictionary['Contact']['fields']['testing_equipment_score_c']['required_formula']='';
$dictionary['Contact']['fields']['testing_equipment_score_c']['readonly']='1';
$dictionary['Contact']['fields']['testing_equipment_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_granite_score_c.php

 // created: 2022-07-27 17:34:33
$dictionary['Contact']['fields']['granite_score_c']['labelValue']='Granite Score';
$dictionary['Contact']['fields']['granite_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['granite_score_c']['enforced']='false';
$dictionary['Contact']['fields']['granite_score_c']['dependency']='equal($granite_c,"Yes")';
$dictionary['Contact']['fields']['granite_score_c']['required_formula']='';
$dictionary['Contact']['fields']['granite_score_c']['readonly']='1';
$dictionary['Contact']['fields']['granite_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/cases_contacts_1_Contacts.php

// created: 2022-10-27 18:41:33
$dictionary["Contact"]["fields"]["cases_contacts_1"] = array (
  'name' => 'cases_contacts_1',
  'type' => 'link',
  'relationship' => 'cases_contacts_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CASES_TITLE',
  'id_name' => 'cases_contacts_1cases_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_prod_c.php

 // created: 2022-11-14 21:29:07
$dictionary['Contact']['fields']['prod_c']['labelValue']='prod';
$dictionary['Contact']['fields']['prod_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['prod_c']['enforced']='';
$dictionary['Contact']['fields']['prod_c']['dependency']='';
$dictionary['Contact']['fields']['prod_c']['required_formula']='';
$dictionary['Contact']['fields']['prod_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_salesperson_c.php

 // created: 2022-12-05 17:39:29
$dictionary['Contact']['fields']['salesperson_c']['labelValue']='Sales Person';
$dictionary['Contact']['fields']['salesperson_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['salesperson_c']['enforced']='';
$dictionary['Contact']['fields']['salesperson_c']['dependency']='';
$dictionary['Contact']['fields']['salesperson_c']['required_formula']='';
$dictionary['Contact']['fields']['salesperson_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_leadtype_c.php

 // created: 2022-12-05 17:41:54
$dictionary['Contact']['fields']['leadtype_c']['labelValue']='Lead Type';
$dictionary['Contact']['fields']['leadtype_c']['dependency']='';
$dictionary['Contact']['fields']['leadtype_c']['required_formula']='';
$dictionary['Contact']['fields']['leadtype_c']['readonly_formula']='';
$dictionary['Contact']['fields']['leadtype_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_agencyname_c.php

 // created: 2022-12-06 18:34:36
$dictionary['Contact']['fields']['agencyname_c']['labelValue']='Agency Name';
$dictionary['Contact']['fields']['agencyname_c']['dependency']='';
$dictionary['Contact']['fields']['agencyname_c']['required_formula']='';
$dictionary['Contact']['fields']['agencyname_c']['readonly_formula']='';
$dictionary['Contact']['fields']['agencyname_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_agencyname__c.php

 // created: 2022-12-06 18:35:53
$dictionary['Contact']['fields']['agencyname__c']['labelValue']='Agency name';
$dictionary['Contact']['fields']['agencyname__c']['dependency']='';
$dictionary['Contact']['fields']['agencyname__c']['required_formula']='';
$dictionary['Contact']['fields']['agencyname__c']['readonly_formula']='';
$dictionary['Contact']['fields']['agencyname__c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_country_c.php

 // created: 2023-01-13 16:30:52
$dictionary['Contact']['fields']['country_c']['labelValue']='Country';
$dictionary['Contact']['fields']['country_c']['dependency']='isInList($contact_type_c,createList("Starrett Employee","Starrett Agent"))';
$dictionary['Contact']['fields']['country_c']['required_formula']='';
$dictionary['Contact']['fields']['country_c']['readonly_formula']='';
$dictionary['Contact']['fields']['country_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_specificdepartment_c.php

 // created: 2023-01-13 16:32:00
$dictionary['Contact']['fields']['specificdepartment_c']['labelValue']='Specific Department';
$dictionary['Contact']['fields']['specificdepartment_c']['dependency']='isInList($contact_type_c,createList("Starrett Employee","Starrett Agent"))';
$dictionary['Contact']['fields']['specificdepartment_c']['required_formula']='';
$dictionary['Contact']['fields']['specificdepartment_c']['readonly_formula']='';
$dictionary['Contact']['fields']['specificdepartment_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sugaruser_c.php

 // created: 2023-01-13 16:35:30
$dictionary['Contact']['fields']['sugaruser_c']['labelValue']=' Sugar User?';
$dictionary['Contact']['fields']['sugaruser_c']['dependency']='isInList($contact_type_c,createList("Starrett Employee","Starrett Agent"))';
$dictionary['Contact']['fields']['sugaruser_c']['required_formula']='';
$dictionary['Contact']['fields']['sugaruser_c']['readonly_formula']='';
$dictionary['Contact']['fields']['sugaruser_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_profileeditdate_c.php

 // created: 2023-01-13 16:36:36
$dictionary['Contact']['fields']['profileeditdate_c']['labelValue']='Profile Edit Date';
$dictionary['Contact']['fields']['profileeditdate_c']['enforced']='';
$dictionary['Contact']['fields']['profileeditdate_c']['dependency']='isInList($contact_type_c,createList("Starrett Employee","Starrett Agent"))';
$dictionary['Contact']['fields']['profileeditdate_c']['required_formula']='';
$dictionary['Contact']['fields']['profileeditdate_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_division_c.php

 // created: 2023-01-13 16:37:59
$dictionary['Contact']['fields']['division_c']['labelValue']='Division';
$dictionary['Contact']['fields']['division_c']['dependency']='isInList($contact_type_c,createList("Starrett Employee","Starrett Agent"))';
$dictionary['Contact']['fields']['division_c']['required_formula']='';
$dictionary['Contact']['fields']['division_c']['readonly_formula']='';
$dictionary['Contact']['fields']['division_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_metrology_equipment_c.php

 // created: 2023-01-16 13:56:50
$dictionary['Contact']['fields']['metrology_equipment_c']['labelValue']='Optical/Vision (Group)';
$dictionary['Contact']['fields']['metrology_equipment_c']['dependency']='';
$dictionary['Contact']['fields']['metrology_equipment_c']['required_formula']='';
$dictionary['Contact']['fields']['metrology_equipment_c']['readonly_formula']='';
$dictionary['Contact']['fields']['metrology_equipment_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_metrology_equipment_score_c.php

 // created: 2023-01-16 13:57:59
$dictionary['Contact']['fields']['metrology_equipment_score_c']['labelValue']='Optical/Vision Score ';
$dictionary['Contact']['fields']['metrology_equipment_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['metrology_equipment_score_c']['enforced']='false';
$dictionary['Contact']['fields']['metrology_equipment_score_c']['dependency']='equal($metrology_equipment_c,"Yes")';
$dictionary['Contact']['fields']['metrology_equipment_score_c']['required_formula']='';
$dictionary['Contact']['fields']['metrology_equipment_score_c']['readonly']='1';
$dictionary['Contact']['fields']['metrology_equipment_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_primary_address_street.php

 // created: 2023-01-17 14:50:08
$dictionary['Contact']['fields']['primary_address_street']['massupdate']=false;
$dictionary['Contact']['fields']['primary_address_street']['hidemassupdate']=false;
$dictionary['Contact']['fields']['primary_address_street']['comments']='The street address used for primary address';
$dictionary['Contact']['fields']['primary_address_street']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['primary_address_street']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['primary_address_street']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_street']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.33',
  'searchable' => true,
);
$dictionary['Contact']['fields']['primary_address_street']['calculated']=false;
$dictionary['Contact']['fields']['primary_address_street']['rows']='2';
$dictionary['Contact']['fields']['primary_address_street']['cols']='20';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_primary_address_city.php

 // created: 2023-01-17 14:55:21
$dictionary['Contact']['fields']['primary_address_city']['required']=true;
$dictionary['Contact']['fields']['primary_address_city']['massupdate']=true;
$dictionary['Contact']['fields']['primary_address_city']['hidemassupdate']=false;
$dictionary['Contact']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Contact']['fields']['primary_address_city']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['primary_address_city']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['primary_address_city']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_city']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['primary_address_city']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_comments_c.php

 // created: 2023-01-17 16:46:14
$dictionary['Contact']['fields']['comments_c']['labelValue']='Comments';
$dictionary['Contact']['fields']['comments_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['comments_c']['enforced']='';
$dictionary['Contact']['fields']['comments_c']['dependency']='';
$dictionary['Contact']['fields']['comments_c']['required_formula']='';
$dictionary['Contact']['fields']['comments_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_employment_status_c.php

 // created: 2023-01-23 18:29:56
$dictionary['Contact']['fields']['employment_status_c']['labelValue']='Employment Status';
$dictionary['Contact']['fields']['employment_status_c']['dependency']='';
$dictionary['Contact']['fields']['employment_status_c']['required_formula']='';
$dictionary['Contact']['fields']['employment_status_c']['readonly_formula']='';
$dictionary['Contact']['fields']['employment_status_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_case_comments_c.php

 // created: 2023-02-01 14:47:40
$dictionary['Contact']['fields']['case_comments_c']['labelValue']='Case Comments';
$dictionary['Contact']['fields']['case_comments_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['case_comments_c']['enforced']='';
$dictionary['Contact']['fields']['case_comments_c']['dependency']='';
$dictionary['Contact']['fields']['case_comments_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_alt_address_street.php

 // created: 2023-02-08 16:51:05
$dictionary['Contact']['fields']['alt_address_street']['massupdate']=false;
$dictionary['Contact']['fields']['alt_address_street']['hidemassupdate']=false;
$dictionary['Contact']['fields']['alt_address_street']['comments']='Street address for alternate address';
$dictionary['Contact']['fields']['alt_address_street']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['alt_address_street']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['alt_address_street']['merge_filter']='disabled';
$dictionary['Contact']['fields']['alt_address_street']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.32',
  'searchable' => true,
);
$dictionary['Contact']['fields']['alt_address_street']['calculated']=false;
$dictionary['Contact']['fields']['alt_address_street']['rows']='2';
$dictionary['Contact']['fields']['alt_address_street']['cols']='20';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_job_role_c.php

 // created: 2023-03-09 16:16:41
$dictionary['Contact']['fields']['job_role_c']['labelValue']='Job Role';
$dictionary['Contact']['fields']['job_role_c']['dependency']='';
$dictionary['Contact']['fields']['job_role_c']['required_formula']='';
$dictionary['Contact']['fields']['job_role_c']['readonly_formula']='';
$dictionary['Contact']['fields']['job_role_c']['visibility_grid']=array (
  'trigger' => 'contact_type_c',
  'values' => 
  array (
    '' => 
    array (
      0 => 'Not Applicable',
    ),
    'Competitor' => 
    array (
      0 => 'Not Applicable',
    ),
    'Distributor' => 
    array (
      0 => 'Not Applicable',
    ),
    'Customer' => 
    array (
      0 => '',
      1 => 'Owner',
      2 => 'President',
      3 => 'Purchasing',
      4 => 'Customer Service',
      5 => 'Operations Manager',
      6 => 'User',
    ),
    'Export' => 
    array (
    ),
    'GSA' => 
    array (
    ),
    'Inactive Starrett Distributor' => 
    array (
    ),
    'School' => 
    array (
      0 => 'Not Applicable',
    ),
    'OEM' => 
    array (
    ),
    'Starrett Agent' => 
    array (
    ),
    'Starrett Branch' => 
    array (
    ),
    'Starrett Distributor' => 
    array (
      0 => '',
      1 => 'Owner',
      2 => 'President',
      3 => 'Purchasing',
      4 => 'Sales Manager',
      5 => 'Sales Person',
      6 => 'Customer Service',
      7 => 'Operations Manager',
    ),
    'Starrett Employee' => 
    array (
      0 => 'Not Applicable',
    ),
    'Starrett Wholesaler' => 
    array (
    ),
    'Strategic' => 
    array (
      0 => '',
      1 => 'Owner',
      2 => 'President',
      3 => 'Purchasing',
      4 => 'Sales Manager',
      5 => 'Sales Person',
      6 => 'Customer Service',
      7 => 'Operations Manager',
    ),
    'Student' => 
    array (
      0 => 'Not Applicable',
    ),
    'Supplier' => 
    array (
      0 => 'Not Applicable',
    ),
    'Target' => 
    array (
      0 => 'Not Applicable',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_title.php

 // created: 2023-03-09 16:17:28
$dictionary['Contact']['fields']['title']['required']=false;
$dictionary['Contact']['fields']['title']['massupdate']=true;
$dictionary['Contact']['fields']['title']['hidemassupdate']=false;
$dictionary['Contact']['fields']['title']['comments']='The title of the contact';
$dictionary['Contact']['fields']['title']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['title']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['title']['merge_filter']='disabled';
$dictionary['Contact']['fields']['title']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['title']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_alt_address_city.php

 // created: 2023-03-20 14:33:37
$dictionary['Contact']['fields']['alt_address_city']['len']='30';
$dictionary['Contact']['fields']['alt_address_city']['required']=false;
$dictionary['Contact']['fields']['alt_address_city']['massupdate']=true;
$dictionary['Contact']['fields']['alt_address_city']['hidemassupdate']=false;
$dictionary['Contact']['fields']['alt_address_city']['comments']='City for alternate address';
$dictionary['Contact']['fields']['alt_address_city']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['alt_address_city']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['alt_address_city']['merge_filter']='disabled';
$dictionary['Contact']['fields']['alt_address_city']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['alt_address_city']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_end_user_company_c.php

 // created: 2023-03-24 07:07:02
$dictionary['Contact']['fields']['end_user_company_c']['labelValue']='End User Company';
$dictionary['Contact']['fields']['end_user_company_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['end_user_company_c']['enforced']='';
$dictionary['Contact']['fields']['end_user_company_c']['dependency']='';
$dictionary['Contact']['fields']['end_user_company_c']['required_formula']='';
$dictionary['Contact']['fields']['end_user_company_c']['readonly_formula']='';

 
?>
