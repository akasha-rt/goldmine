<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_product_focus_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Lead']['fields']['product_focus_c']['labelValue'] = 'Product Focus';
$dictionary['Lead']['fields']['product_focus_c']['full_text_search']['boost'] = 1;
$dictionary['Lead']['fields']['product_focus_c']['enforced'] = '';
$dictionary['Lead']['fields']['product_focus_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_product_interest_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Lead']['fields']['product_interest_c']['labelValue'] = 'Product Interest';
$dictionary['Lead']['fields']['product_interest_c']['full_text_search']['boost'] = 1;
$dictionary['Lead']['fields']['product_interest_c']['enforced'] = '';
$dictionary['Lead']['fields']['product_interest_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_sic_c.php

 // created: 2016-10-16 03:16:23
$dictionary['Lead']['fields']['primary_sic_c']['labelValue'] = 'Primary SIC';
$dictionary['Lead']['fields']['primary_sic_c']['full_text_search']['enabled'] = true;
$dictionary['Lead']['fields']['primary_sic_c']['full_text_search']['searchable'] = false;
$dictionary['Lead']['fields']['primary_sic_c']['full_text_search']['boost'] = 1;
$dictionary['Lead']['fields']['primary_sic_c']['enforced'] = '';
$dictionary['Lead']['fields']['primary_sic_c']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_prod_group_c.php

 // created: 2017-03-03 15:53:45
$dictionary['Lead']['fields']['prod_group_c']['labelValue']='Product Group';
$dictionary['Lead']['fields']['prod_group_c']['dependency']='';
$dictionary['Lead']['fields']['prod_group_c']['visibility_grid']=array (
  'trigger' => 'strat_prod_line_c',
  'values' => 
  array (
    'jst' => 
    array (
      0 => 'hand_tool',
      1 => 'm1',
    ),
    'met_equip' => 
    array (
      0 => 'laser_measure',
      1 => 'optical_equip',
      2 => 'vision_equip',
    ),
    'pgs' => 
    array (
      0 => 'drill_rod',
      1 => 'flat_stock',
    ),
    'pmt' => 
    array (
      0 => 'bore_gages',
      1 => 'data_col',
      2 => 'gage_block',
      3 => 'gsf',
      4 => 'prec_tool',
    ),
    'saws' => 
    array (
      0 => 'bs_mach',
      1 => 'bs',
      2 => 'pta_handsaw',
    ),
    'test_equip' => 
    array (
      0 => 'force',
      1 => 'grips_fix',
      2 => 'mat_test',
      3 => 'round_measure',
    ),
    '' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_strat_prod_line_c.php

 // created: 2017-03-27 15:51:48
$dictionary['Lead']['fields']['strat_prod_line_c']['labelValue']='Strategic Product Line';
$dictionary['Lead']['fields']['strat_prod_line_c']['dependency']='';
$dictionary['Lead']['fields']['strat_prod_line_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_decision_maker_c.php

 // created: 2018-06-06 14:24:08
$dictionary['Lead']['fields']['decision_maker_c']['labelValue']='Decision Maker';
$dictionary['Lead']['fields']['decision_maker_c']['enforced']='';
$dictionary['Lead']['fields']['decision_maker_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_distributor_c.php

 // created: 2018-07-02 15:07:06
$dictionary['Lead']['fields']['distributor_c']['labelValue']='Distributor';
$dictionary['Lead']['fields']['distributor_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['distributor_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_comparison_field_c.php

 // created: 2018-09-14 16:06:19
$dictionary['Lead']['fields']['comparison_field_c']['labelValue']='Comparison Field';
$dictionary['Lead']['fields']['comparison_field_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['comparison_field_c']['enforced']='';
$dictionary['Lead']['fields']['comparison_field_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_search_string_c.php

 // created: 2018-09-17 14:58:20
$dictionary['Lead']['fields']['search_string_c']['labelValue']='Search String';
$dictionary['Lead']['fields']['search_string_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '.75',
  'searchable' => true,
);
$dictionary['Lead']['fields']['search_string_c']['enforced']='';
$dictionary['Lead']['fields']['search_string_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_education_c.php

 // created: 2018-09-20 15:40:38
$dictionary['Lead']['fields']['education_c']['labelValue']='Education';
$dictionary['Lead']['fields']['education_c']['enforced']='';
$dictionary['Lead']['fields']['education_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_account_name.php

 // created: 2018-11-14 16:44:03
$dictionary['Lead']['fields']['account_name']['audited']=false;
$dictionary['Lead']['fields']['account_name']['massupdate']=false;
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['account_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['account_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_raw_material_c.php

 // created: 2018-12-31 15:04:14
$dictionary['Lead']['fields']['raw_material_c']['duplicate_merge_dom_value']=0;
$dictionary['Lead']['fields']['raw_material_c']['dependency']='equal($saws_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/accounts_leads_1_Leads.php

// created: 2019-01-03 16:09:05
$dictionary["Lead"]["fields"]["accounts_leads_1"] = array (
  'name' => 'accounts_leads_1',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
  'id_name' => 'accounts_leads_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Lead"]["fields"]["accounts_leads_1_name"] = array (
  'name' => 'accounts_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_leads_1accounts_ida',
  'link' => 'accounts_leads_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["accounts_leads_1accounts_ida"] = array (
  'name' => 'accounts_leads_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE_ID',
  'id_name' => 'accounts_leads_1accounts_ida',
  'link' => 'accounts_leads_1',
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/contacts_leads_1_Leads.php

// created: 2019-01-03 16:10:23
$dictionary["Lead"]["fields"]["contacts_leads_1"] = array (
  'name' => 'contacts_leads_1',
  'type' => 'link',
  'relationship' => 'contacts_leads_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE',
  'id_name' => 'contacts_leads_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Lead"]["fields"]["contacts_leads_1_name"] = array (
  'name' => 'contacts_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Lead"]["fields"]["contacts_leads_1contacts_ida"] = array (
  'name' => 'contacts_leads_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE_ID',
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_notify_dist_c.php

 // created: 2019-01-07 14:11:26
$dictionary['Lead']['fields']['notify_dist_c']['labelValue']='Notify Distributor?';
$dictionary['Lead']['fields']['notify_dist_c']['dependency']='';
$dictionary['Lead']['fields']['notify_dist_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_dist_email_sent_c.php

 // created: 2019-01-08 01:05:07
$dictionary['Lead']['fields']['dist_email_sent_c']['labelValue']='Distributor email sent?';
$dictionary['Lead']['fields']['dist_email_sent_c']['enforced']='';
$dictionary['Lead']['fields']['dist_email_sent_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_meat_cutter_c.php

 // created: 2019-02-20 17:32:10
$dictionary['Lead']['fields']['meat_cutter_c']['labelValue']='MeatKutter';
$dictionary['Lead']['fields']['meat_cutter_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Lead']['fields']['meat_cutter_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_demo_request_c.php

 // created: 2019-08-01 16:14:19
$dictionary['Lead']['fields']['demo_request_c']['labelValue']='Requested Demo';
$dictionary['Lead']['fields']['demo_request_c']['enforced']='';
$dictionary['Lead']['fields']['demo_request_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_mkto_lead_score.php

 // created: 2020-01-14 04:17:57
$dictionary['Lead']['fields']['mkto_lead_score']['len']='11';
$dictionary['Lead']['fields']['mkto_lead_score']['massupdate']=false;
$dictionary['Lead']['fields']['mkto_lead_score']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['mkto_lead_score']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['mkto_lead_score']['merge_filter']='disabled';
$dictionary['Lead']['fields']['mkto_lead_score']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['mkto_lead_score']['calculated']=false;
$dictionary['Lead']['fields']['mkto_lead_score']['enable_range_search']=false;
$dictionary['Lead']['fields']['mkto_lead_score']['min']=0;
$dictionary['Lead']['fields']['mkto_lead_score']['max']=false;
$dictionary['Lead']['fields']['mkto_lead_score']['disable_num_format']='';
$dictionary['Lead']['fields']['mkto_lead_score']['default']='0';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_tire_c.php

 // created: 2021-03-26 14:20:53
$dictionary['Lead']['fields']['tire_c']['labelValue']='Tire Industry';
$dictionary['Lead']['fields']['tire_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Lead']['fields']['tire_c']['required_formula']='';
$dictionary['Lead']['fields']['tire_c']['readonly_formula']='';
$dictionary['Lead']['fields']['tire_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/cc_coupon_codes_leads_Leads.php

// created: 2021-03-26 18:52:01
$dictionary["Lead"]["fields"]["cc_coupon_codes_leads"] = array (
  'name' => 'cc_coupon_codes_leads',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_leads',
  'source' => 'non-db',
  'module' => 'CC_Coupon_Codes',
  'bean_name' => false,
  'vname' => 'LBL_CC_COUPON_CODES_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'cc_coupon_codes_leadsleads_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_profile_c.php

 // created: 2021-04-05 19:04:04
$dictionary['Lead']['fields']['profile_c']['labelValue']='Profile Measurement';
$dictionary['Lead']['fields']['profile_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Lead']['fields']['profile_c']['required_formula']='';
$dictionary['Lead']['fields']['profile_c']['readonly_formula']='';
$dictionary['Lead']['fields']['profile_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_ai_conv_score_classification_c.php

 // created: 2021-05-15 08:40:49
$dictionary['Lead']['fields']['ai_conv_score_classification_c']['labelValue']='Prediction';
$dictionary['Lead']['fields']['ai_conv_score_classification_c']['dependency']='';
$dictionary['Lead']['fields']['ai_conv_score_classification_c']['required_formula']='';
$dictionary['Lead']['fields']['ai_conv_score_classification_c']['readonly']='1';
$dictionary['Lead']['fields']['ai_conv_score_classification_c']['readonly_formula']='true';
$dictionary['Lead']['fields']['ai_conv_score_classification_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_location_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_description_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_job_2_c.php

 // created: 2021-12-14 04:51:51
$dictionary['Lead']['fields']['hint_job_2_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_education_c.php

 // created: 2021-12-14 04:51:51
$dictionary['Lead']['fields']['hint_education_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_size_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_industry_c.php

 // created: 2021-12-14 04:51:51

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_facebook_c.php

 // created: 2021-12-14 04:51:51
$dictionary['Lead']['fields']['hint_facebook_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_twitter_c.php

 // created: 2021-12-14 04:51:51
$dictionary['Lead']['fields']['hint_twitter_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_education_2_c.php

 // created: 2021-12-14 04:51:51
$dictionary['Lead']['fields']['hint_education_2_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_logo_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_twitter_handle_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_founded_year_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_industry_tags_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_naics_code_lbl_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_phone_1_c.php

 // created: 2021-12-14 04:51:52
$dictionary['Lead']['fields']['hint_phone_1_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_phone_2_c.php

 // created: 2021-12-14 04:51:52
$dictionary['Lead']['fields']['hint_phone_2_c']['pii']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_photo_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_contact_pic_c.php

 // created: 2021-12-14 04:51:52

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_sic_code_label_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_fiscal_year_end_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_annual_revenue_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_website_c.php

 // created: 2021-12-14 04:51:53

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sf_webactivity_leads_Leads.php

// created: 2012-08-28 20:35:13
$dictionary["Lead"]["fields"]["sf_webactivity_leads"] = array (
  'name' => 'sf_webactivity_leads',
  'type' => 'link',
  'relationship' => 'sf_webactivity_leads',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_WEBACTIVITY_LEADS_FROM_SF_WEBACTIVITY_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sf_eventmanagement_leads_Leads.php

// created: 2012-12-12 16:37:27
$dictionary["Lead"]["fields"]["sf_eventmanagement_leads"] = array (
  'name' => 'sf_eventmanagement_leads',
  'type' => 'link',
  'relationship' => 'sf_eventmanagement_leads',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_EVENTMANAGEMENT_LEADS_FROM_SF_EVENTMANAGEMENT_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sf_dialogs_leads_Leads.php

// created: 2012-12-12 16:37:21
$dictionary["Lead"]["fields"]["sf_dialogs_leads"] = array (
  'name' => 'sf_dialogs_leads',
  'type' => 'link',
  'relationship' => 'sf_dialogs_leads',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_DIALOGS_LEADS_FROM_SF_DIALOGS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_sf_lastactivity_default_c.php

 // created: 2022-05-13 13:48:05
$dictionary['Lead']['fields']['sf_lastactivity_default_c']['labelValue']='Salesfusion Last Activity';
$dictionary['Lead']['fields']['sf_lastactivity_default_c']['enforced']='';
$dictionary['Lead']['fields']['sf_lastactivity_default_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Lead']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pmt_score_c.php

 // created: 2022-07-20 18:39:06
$dictionary['Lead']['fields']['pmt_score_c']['labelValue']='PMT Group  Score';
$dictionary['Lead']['fields']['pmt_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['pmt_score_c']['enforced']='';
$dictionary['Lead']['fields']['pmt_score_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Lead']['fields']['pmt_score_c']['required_formula']='';
$dictionary['Lead']['fields']['pmt_score_c']['readonly']='1';
$dictionary['Lead']['fields']['pmt_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_saws_score_c.php

 // created: 2022-07-20 18:40:35
$dictionary['Lead']['fields']['saws_score_c']['labelValue']='SAWS Group Score';
$dictionary['Lead']['fields']['saws_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['saws_score_c']['enforced']='';
$dictionary['Lead']['fields']['saws_score_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Lead']['fields']['saws_score_c']['required_formula']='';
$dictionary['Lead']['fields']['saws_score_c']['readonly']='1';
$dictionary['Lead']['fields']['saws_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_jst_score_c.php

 // created: 2022-07-20 18:42:25
$dictionary['Lead']['fields']['jst_score_c']['labelValue']='Jobsite Group Score';
$dictionary['Lead']['fields']['jst_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['jst_score_c']['enforced']='';
$dictionary['Lead']['fields']['jst_score_c']['dependency']='equal($jst_c,"Yes")';
$dictionary['Lead']['fields']['jst_score_c']['required_formula']='';
$dictionary['Lead']['fields']['jst_score_c']['readonly']='1';
$dictionary['Lead']['fields']['jst_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pgs_score_c.php

 // created: 2022-07-20 18:44:05
$dictionary['Lead']['fields']['pgs_score_c']['labelValue']='Precision Stock Score';
$dictionary['Lead']['fields']['pgs_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['pgs_score_c']['enforced']='';
$dictionary['Lead']['fields']['pgs_score_c']['dependency']='equal($pgs_c,"Yes")';
$dictionary['Lead']['fields']['pgs_score_c']['required_formula']='';
$dictionary['Lead']['fields']['pgs_score_c']['readonly']='1';
$dictionary['Lead']['fields']['pgs_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_laser_measurement_score_c.php

 // created: 2022-07-20 18:47:25
$dictionary['Lead']['fields']['laser_measurement_score_c']['labelValue']='Laser Measurement Score';
$dictionary['Lead']['fields']['laser_measurement_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['laser_measurement_score_c']['enforced']='';
$dictionary['Lead']['fields']['laser_measurement_score_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Lead']['fields']['laser_measurement_score_c']['required_formula']='';
$dictionary['Lead']['fields']['laser_measurement_score_c']['readonly']='1';
$dictionary['Lead']['fields']['laser_measurement_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_testing_equipment_score_c.php

 // created: 2022-07-20 18:48:54
$dictionary['Lead']['fields']['testing_equipment_score_c']['labelValue']='Testing Equipment Score';
$dictionary['Lead']['fields']['testing_equipment_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['testing_equipment_score_c']['enforced']='';
$dictionary['Lead']['fields']['testing_equipment_score_c']['dependency']='equal($testing_equipment_c,"Yes")';
$dictionary['Lead']['fields']['testing_equipment_score_c']['required_formula']='';
$dictionary['Lead']['fields']['testing_equipment_score_c']['readonly']='1';
$dictionary['Lead']['fields']['testing_equipment_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_granite_score_c.php

 // created: 2022-07-20 18:50:09
$dictionary['Lead']['fields']['granite_score_c']['labelValue']='Granite Score';
$dictionary['Lead']['fields']['granite_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['granite_score_c']['enforced']='';
$dictionary['Lead']['fields']['granite_score_c']['dependency']='equal($granite_c,"Yes")';
$dictionary['Lead']['fields']['granite_score_c']['required_formula']='';
$dictionary['Lead']['fields']['granite_score_c']['readonly']='1';
$dictionary['Lead']['fields']['granite_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pmt_c.php

 // created: 2022-07-25 13:04:01
$dictionary['Lead']['fields']['pmt_c']['labelValue']='PMT Interest?';
$dictionary['Lead']['fields']['pmt_c']['dependency']='';
$dictionary['Lead']['fields']['pmt_c']['required_formula']='';
$dictionary['Lead']['fields']['pmt_c']['readonly_formula']='';
$dictionary['Lead']['fields']['pmt_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_jst_c.php

 // created: 2022-07-25 13:06:07
$dictionary['Lead']['fields']['jst_c']['labelValue']='Jobsite Interest?';
$dictionary['Lead']['fields']['jst_c']['dependency']='';
$dictionary['Lead']['fields']['jst_c']['required_formula']='';
$dictionary['Lead']['fields']['jst_c']['readonly_formula']='';
$dictionary['Lead']['fields']['jst_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_testing_equipment_c.php

 // created: 2022-07-25 13:10:03
$dictionary['Lead']['fields']['testing_equipment_c']['labelValue']='Testing Equipment Interest?';
$dictionary['Lead']['fields']['testing_equipment_c']['dependency']='';
$dictionary['Lead']['fields']['testing_equipment_c']['required_formula']='';
$dictionary['Lead']['fields']['testing_equipment_c']['readonly_formula']='';
$dictionary['Lead']['fields']['testing_equipment_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_np_score_c.php

 // created: 2022-07-27 17:38:17
$dictionary['Lead']['fields']['np_score_c']['labelValue']='NP Lead Score';
$dictionary['Lead']['fields']['np_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['np_score_c']['enforced']='';
$dictionary['Lead']['fields']['np_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_tot_score_c.php

 // created: 2022-07-27 17:39:36
$dictionary['Lead']['fields']['tot_score_c']['labelValue']='Total Lead Score';
$dictionary['Lead']['fields']['tot_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['tot_score_c']['enforced']='';
$dictionary['Lead']['fields']['tot_score_c']['dependency']='';
$dictionary['Lead']['fields']['tot_score_c']['required_formula']='';
$dictionary['Lead']['fields']['tot_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_surfaceplates_c.php

 // created: 2022-09-28 18:06:22
$dictionary['Lead']['fields']['surfaceplates_c']['labelValue']='Surface Plates';
$dictionary['Lead']['fields']['surfaceplates_c']['dependency']='equal($granite_c,"Yes")';
$dictionary['Lead']['fields']['surfaceplates_c']['required_formula']='';
$dictionary['Lead']['fields']['surfaceplates_c']['readonly_formula']='';
$dictionary['Lead']['fields']['surfaceplates_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_metrolgoy_equipment_score_c.php

 // created: 2022-09-28 18:09:25
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['labelValue']='Vision/Optical Score';
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['enforced']='';
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['dependency']='equal($metrology_equipment_c,"Yes")';
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['required_formula']='';
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['readonly']='1';
$dictionary['Lead']['fields']['metrolgoy_equipment_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_specialgageleadscore_c.php

 // created: 2022-09-28 18:24:42
$dictionary['Lead']['fields']['specialgageleadscore_c']['labelValue']='Special Gage Lead Score';
$dictionary['Lead']['fields']['specialgageleadscore_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['specialgageleadscore_c']['enforced']='';
$dictionary['Lead']['fields']['specialgageleadscore_c']['dependency']='';
$dictionary['Lead']['fields']['specialgageleadscore_c']['required_formula']='';
$dictionary['Lead']['fields']['specialgageleadscore_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_contact_type_c.php

 // created: 2022-12-05 17:56:01
$dictionary['Lead']['fields']['contact_type_c']['labelValue']='Lead Type';
$dictionary['Lead']['fields']['contact_type_c']['dependency']='';
$dictionary['Lead']['fields']['contact_type_c']['required_formula']='';
$dictionary['Lead']['fields']['contact_type_c']['readonly_formula']='';
$dictionary['Lead']['fields']['contact_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_agencyname__c.php

 // created: 2022-12-05 18:23:33
$dictionary['Lead']['fields']['agencyname__c']['labelValue']='Agency Name';
$dictionary['Lead']['fields']['agencyname__c']['dependency']='';
$dictionary['Lead']['fields']['agencyname__c']['required_formula']='';
$dictionary['Lead']['fields']['agencyname__c']['readonly_formula']='';
$dictionary['Lead']['fields']['agencyname__c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_salesperson_c.php

 // created: 2022-12-05 18:30:20
$dictionary['Lead']['fields']['salesperson_c']['labelValue']='Sales Person';
$dictionary['Lead']['fields']['salesperson_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['salesperson_c']['enforced']='';
$dictionary['Lead']['fields']['salesperson_c']['dependency']='';
$dictionary['Lead']['fields']['salesperson_c']['required_formula']='';
$dictionary['Lead']['fields']['salesperson_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_sales_person_c.php

 // created: 2022-12-05 18:31:28
$dictionary['Lead']['fields']['sales_person_c']['labelValue']='Sales person';
$dictionary['Lead']['fields']['sales_person_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['sales_person_c']['enforced']='';
$dictionary['Lead']['fields']['sales_person_c']['dependency']='';
$dictionary['Lead']['fields']['sales_person_c']['required_formula']='';
$dictionary['Lead']['fields']['sales_person_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_status.php

 // created: 2023-03-03 16:29:15
$dictionary['Lead']['fields']['status']['default']='';
$dictionary['Lead']['fields']['status']['massupdate']=true;
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['status']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;
$dictionary['Lead']['fields']['status']['required']=true;
$dictionary['Lead']['fields']['status']['len']=100;
$dictionary['Lead']['fields']['status']['hidemassupdate']=false;
$dictionary['Lead']['fields']['status']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_city.php

 // created: 2023-04-04 17:35:35
$dictionary['Lead']['fields']['alt_address_city']['massupdate']=false;
$dictionary['Lead']['fields']['alt_address_city']['hidemassupdate']=false;
$dictionary['Lead']['fields']['alt_address_city']['comments']='City for alternate address';
$dictionary['Lead']['fields']['alt_address_city']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['alt_address_city']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['alt_address_city']['merge_filter']='disabled';
$dictionary['Lead']['fields']['alt_address_city']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['alt_address_city']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_country.php

 // created: 2023-04-04 17:36:04
$dictionary['Lead']['fields']['alt_address_country']['len']='255';
$dictionary['Lead']['fields']['alt_address_country']['massupdate']=false;
$dictionary['Lead']['fields']['alt_address_country']['hidemassupdate']=false;
$dictionary['Lead']['fields']['alt_address_country']['comments']='Country for alternate address';
$dictionary['Lead']['fields']['alt_address_country']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['alt_address_country']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['alt_address_country']['merge_filter']='disabled';
$dictionary['Lead']['fields']['alt_address_country']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['alt_address_country']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_postalcode.php

 // created: 2023-04-04 17:36:48
$dictionary['Lead']['fields']['alt_address_postalcode']['massupdate']=false;
$dictionary['Lead']['fields']['alt_address_postalcode']['hidemassupdate']=false;
$dictionary['Lead']['fields']['alt_address_postalcode']['comments']='Postal code for alternate address';
$dictionary['Lead']['fields']['alt_address_postalcode']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['alt_address_postalcode']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['alt_address_postalcode']['merge_filter']='disabled';
$dictionary['Lead']['fields']['alt_address_postalcode']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['alt_address_postalcode']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_state.php

 // created: 2023-04-04 17:38:48
$dictionary['Lead']['fields']['alt_address_state']['massupdate']=false;
$dictionary['Lead']['fields']['alt_address_state']['hidemassupdate']=false;
$dictionary['Lead']['fields']['alt_address_state']['comments']='State for alternate address';
$dictionary['Lead']['fields']['alt_address_state']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['alt_address_state']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['alt_address_state']['merge_filter']='disabled';
$dictionary['Lead']['fields']['alt_address_state']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['alt_address_state']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_assistant.php

 // created: 2023-04-04 17:40:35
$dictionary['Lead']['fields']['assistant']['massupdate']=false;
$dictionary['Lead']['fields']['assistant']['hidemassupdate']=false;
$dictionary['Lead']['fields']['assistant']['comments']='Name of the assistant of the contact';
$dictionary['Lead']['fields']['assistant']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['assistant']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['assistant']['merge_filter']='disabled';
$dictionary['Lead']['fields']['assistant']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['assistant']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_assistant_phone.php

 // created: 2023-04-04 17:41:43
$dictionary['Lead']['fields']['assistant_phone']['len']='100';
$dictionary['Lead']['fields']['assistant_phone']['massupdate']=false;
$dictionary['Lead']['fields']['assistant_phone']['hidemassupdate']=false;
$dictionary['Lead']['fields']['assistant_phone']['comments']='Phone number of the assistant of the contact';
$dictionary['Lead']['fields']['assistant_phone']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['assistant_phone']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['assistant_phone']['merge_filter']='disabled';
$dictionary['Lead']['fields']['assistant_phone']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['assistant_phone']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_band_saw_machines_c.php

 // created: 2023-04-04 17:42:41
$dictionary['Lead']['fields']['band_saw_machines_c']['labelValue']='Band Saw Machines';
$dictionary['Lead']['fields']['band_saw_machines_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Lead']['fields']['band_saw_machines_c']['required_formula']='';
$dictionary['Lead']['fields']['band_saw_machines_c']['readonly_formula']='';
$dictionary['Lead']['fields']['band_saw_machines_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_band_saws_c.php

 // created: 2023-04-07 17:58:36
$dictionary['Lead']['fields']['band_saws_c']['labelValue']='Band Saws Blades';
$dictionary['Lead']['fields']['band_saws_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Lead']['fields']['band_saws_c']['required_formula']='';
$dictionary['Lead']['fields']['band_saws_c']['readonly_formula']='';
$dictionary['Lead']['fields']['band_saws_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_business_center_id.php

 // created: 2023-04-07 17:59:24
$dictionary['Lead']['fields']['business_center_id']['name']='business_center_id';
$dictionary['Lead']['fields']['business_center_id']['type']='relate';
$dictionary['Lead']['fields']['business_center_id']['dbType']='id';
$dictionary['Lead']['fields']['business_center_id']['rname']='id';
$dictionary['Lead']['fields']['business_center_id']['module']='BusinessCenters';
$dictionary['Lead']['fields']['business_center_id']['id_name']='business_center_id';
$dictionary['Lead']['fields']['business_center_id']['reportable']=false;
$dictionary['Lead']['fields']['business_center_id']['vname']='LBL_BUSINESS_CENTER_ID';
$dictionary['Lead']['fields']['business_center_id']['audited']=false;
$dictionary['Lead']['fields']['business_center_id']['massupdate']=false;
$dictionary['Lead']['fields']['business_center_id']['comment']='The business center to which the case is associated';
$dictionary['Lead']['fields']['business_center_id']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_business_center_name.php

 // created: 2023-04-07 17:59:24
$dictionary['Lead']['fields']['business_center_name']['audited']=true;
$dictionary['Lead']['fields']['business_center_name']['massupdate']=false;
$dictionary['Lead']['fields']['business_center_name']['hidemassupdate']=false;
$dictionary['Lead']['fields']['business_center_name']['comments']='The name of the business center represented by the business_center_id field';
$dictionary['Lead']['fields']['business_center_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['business_center_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['business_center_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['business_center_name']['reportable']=false;
$dictionary['Lead']['fields']['business_center_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_birthdate.php

 // created: 2023-04-07 18:00:10
$dictionary['Lead']['fields']['birthdate']['hidemassupdate']=false;
$dictionary['Lead']['fields']['birthdate']['comments']='The birthdate of the contact';
$dictionary['Lead']['fields']['birthdate']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['birthdate']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['birthdate']['merge_filter']='disabled';
$dictionary['Lead']['fields']['birthdate']['calculated']=false;
$dictionary['Lead']['fields']['birthdate']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_dp_business_purpose.php

 // created: 2023-04-07 18:00:45
$dictionary['Lead']['fields']['dp_business_purpose']['len']=NULL;
$dictionary['Lead']['fields']['dp_business_purpose']['massupdate']=false;
$dictionary['Lead']['fields']['dp_business_purpose']['hidemassupdate']=false;
$dictionary['Lead']['fields']['dp_business_purpose']['comments']='Business purposes consented for';
$dictionary['Lead']['fields']['dp_business_purpose']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['dp_business_purpose']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['dp_business_purpose']['merge_filter']='disabled';
$dictionary['Lead']['fields']['dp_business_purpose']['calculated']=false;
$dictionary['Lead']['fields']['dp_business_purpose']['dependency']='';
$dictionary['Lead']['fields']['dp_business_purpose']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_bytewise_qualification_c.php

 // created: 2023-04-07 18:02:50
$dictionary['Lead']['fields']['bytewise_qualification_c']['labelValue']='Bytewise Qualification';
$dictionary['Lead']['fields']['bytewise_qualification_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['bytewise_qualification_c']['enforced']='';
$dictionary['Lead']['fields']['bytewise_qualification_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Lead']['fields']['bytewise_qualification_c']['required_formula']='';
$dictionary['Lead']['fields']['bytewise_qualification_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_bytewise_record_type_c.php

 // created: 2023-04-07 18:03:51
$dictionary['Lead']['fields']['bytewise_record_type_c']['labelValue']='Bytewise Record Type';
$dictionary['Lead']['fields']['bytewise_record_type_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['bytewise_record_type_c']['enforced']='';
$dictionary['Lead']['fields']['bytewise_record_type_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Lead']['fields']['bytewise_record_type_c']['required_formula']='';
$dictionary['Lead']['fields']['bytewise_record_type_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_bytewise_status_c.php

 // created: 2023-04-07 18:04:37
$dictionary['Lead']['fields']['bytewise_status_c']['labelValue']='Bytewise Status';
$dictionary['Lead']['fields']['bytewise_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['bytewise_status_c']['enforced']='';
$dictionary['Lead']['fields']['bytewise_status_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Lead']['fields']['bytewise_status_c']['required_formula']='';
$dictionary['Lead']['fields']['bytewise_status_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_city.php

 // created: 2023-04-07 18:05:50
$dictionary['Lead']['fields']['primary_address_city']['massupdate']=false;
$dictionary['Lead']['fields']['primary_address_city']['hidemassupdate']=false;
$dictionary['Lead']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Lead']['fields']['primary_address_city']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['primary_address_city']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['primary_address_city']['merge_filter']='disabled';
$dictionary['Lead']['fields']['primary_address_city']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['primary_address_city']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_description.php

 // created: 2023-04-07 18:06:58
$dictionary['Lead']['fields']['hint_account_description']['len']='255';
$dictionary['Lead']['fields']['hint_account_description']['audited']=false;
$dictionary['Lead']['fields']['hint_account_description']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_description']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_description']['comments']='Company Description';
$dictionary['Lead']['fields']['hint_account_description']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_description']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_description']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_description']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_facebook_handle.php

 // created: 2023-04-07 18:07:55
$dictionary['Lead']['fields']['hint_account_facebook_handle']['len']='120';
$dictionary['Lead']['fields']['hint_account_facebook_handle']['audited']=false;
$dictionary['Lead']['fields']['hint_account_facebook_handle']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_facebook_handle']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_facebook_handle']['comments']='company facebook';
$dictionary['Lead']['fields']['hint_account_facebook_handle']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_facebook_handle']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_facebook_handle']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_facebook_handle']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_facebook_handle']['calculated']=false;
$dictionary['Lead']['fields']['hint_account_facebook_handle']['gen']='';
$dictionary['Lead']['fields']['hint_account_facebook_handle']['link_target']='_self';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_facebook_handle_c.php

 // created: 2023-04-07 18:09:18
$dictionary['Lead']['fields']['hint_account_facebook_handle_c']['labelValue']='Company Facebook';
$dictionary['Lead']['fields']['hint_account_facebook_handle_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_facebook_handle_c']['dependency']='';
$dictionary['Lead']['fields']['hint_account_facebook_handle_c']['required_formula']='';
$dictionary['Lead']['fields']['hint_account_facebook_handle_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_size.php

 // created: 2023-04-07 18:10:06
$dictionary['Lead']['fields']['hint_account_size']['len']='20';
$dictionary['Lead']['fields']['hint_account_size']['audited']=false;
$dictionary['Lead']['fields']['hint_account_size']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_size']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_size']['comments']='Company Size';
$dictionary['Lead']['fields']['hint_account_size']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_size']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_size']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_size']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_size']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_twitter_handle.php

 // created: 2023-04-07 18:14:14
$dictionary['Lead']['fields']['hint_account_twitter_handle']['len']='120';
$dictionary['Lead']['fields']['hint_account_twitter_handle']['audited']=false;
$dictionary['Lead']['fields']['hint_account_twitter_handle']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_twitter_handle']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_twitter_handle']['comments']='company twitter';
$dictionary['Lead']['fields']['hint_account_twitter_handle']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_twitter_handle']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_twitter_handle']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_twitter_handle']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_twitter_handle']['calculated']=false;
$dictionary['Lead']['fields']['hint_account_twitter_handle']['gen']='';
$dictionary['Lead']['fields']['hint_account_twitter_handle']['link_target']='_self';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_dp_consent_last_updated.php

 // created: 2023-04-07 18:15:21
$dictionary['Lead']['fields']['dp_consent_last_updated']['massupdate']=false;
$dictionary['Lead']['fields']['dp_consent_last_updated']['hidemassupdate']=false;
$dictionary['Lead']['fields']['dp_consent_last_updated']['comments']='Date consent last updated';
$dictionary['Lead']['fields']['dp_consent_last_updated']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['dp_consent_last_updated']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['dp_consent_last_updated']['merge_filter']='disabled';
$dictionary['Lead']['fields']['dp_consent_last_updated']['calculated']=false;
$dictionary['Lead']['fields']['dp_consent_last_updated']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_opportunity_id.php

 // created: 2023-04-07 18:16:27
$dictionary['Lead']['fields']['opportunity_id']['name']='opportunity_id';
$dictionary['Lead']['fields']['opportunity_id']['type']='id';
$dictionary['Lead']['fields']['opportunity_id']['reportable']=false;
$dictionary['Lead']['fields']['opportunity_id']['vname']='LBL_OPPORTUNITY_ID';
$dictionary['Lead']['fields']['opportunity_id']['comment']='If converted, Opportunity ID resulting from the conversion';
$dictionary['Lead']['fields']['opportunity_id']['audited']=false;
$dictionary['Lead']['fields']['opportunity_id']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_converted_opp_name.php

 // created: 2023-04-07 18:16:27
$dictionary['Lead']['fields']['converted_opp_name']['audited']=false;
$dictionary['Lead']['fields']['converted_opp_name']['massupdate']=false;
$dictionary['Lead']['fields']['converted_opp_name']['hidemassupdate']=false;
$dictionary['Lead']['fields']['converted_opp_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['converted_opp_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['converted_opp_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['converted_opp_name']['reportable']=false;
$dictionary['Lead']['fields']['converted_opp_name']['calculated']=false;
$dictionary['Lead']['fields']['converted_opp_name']['related_fields']=array (
  0 => 'opportunity_id',
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_custom_granite_solutions_c.php

 // created: 2023-04-07 18:17:00
$dictionary['Lead']['fields']['custom_granite_solutions_c']['labelValue']='Custom Granite Solutions';
$dictionary['Lead']['fields']['custom_granite_solutions_c']['dependency']='equal($granite_c,"Yes")';
$dictionary['Lead']['fields']['custom_granite_solutions_c']['required_formula']='';
$dictionary['Lead']['fields']['custom_granite_solutions_c']['readonly_formula']='';
$dictionary['Lead']['fields']['custom_granite_solutions_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_dnb_principal_id.php

 // created: 2023-04-07 18:18:09
$dictionary['Lead']['fields']['dnb_principal_id']['len']='30';
$dictionary['Lead']['fields']['dnb_principal_id']['audited']=false;
$dictionary['Lead']['fields']['dnb_principal_id']['massupdate']=false;
$dictionary['Lead']['fields']['dnb_principal_id']['hidemassupdate']=false;
$dictionary['Lead']['fields']['dnb_principal_id']['comments']='Unique Id For D&B Contact';
$dictionary['Lead']['fields']['dnb_principal_id']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['dnb_principal_id']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['dnb_principal_id']['merge_filter']='disabled';
$dictionary['Lead']['fields']['dnb_principal_id']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['dnb_principal_id']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_ds_c.php

 // created: 2023-04-07 18:24:52
$dictionary['Lead']['fields']['ds_c']['labelValue']='DataSure';
$dictionary['Lead']['fields']['ds_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Lead']['fields']['ds_c']['required_formula']='';
$dictionary['Lead']['fields']['ds_c']['readonly_formula']='';
$dictionary['Lead']['fields']['ds_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_department.php

 // created: 2023-04-07 18:26:28
$dictionary['Lead']['fields']['department']['audited']=false;
$dictionary['Lead']['fields']['department']['massupdate']=false;
$dictionary['Lead']['fields']['department']['hidemassupdate']=false;
$dictionary['Lead']['fields']['department']['comments']='Department the lead belongs to';
$dictionary['Lead']['fields']['department']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['department']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['department']['merge_filter']='disabled';
$dictionary['Lead']['fields']['department']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['department']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_accounts_leads_1accounts_ida.php

 // created: 2023-04-10 13:46:06
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['name']='accounts_leads_1accounts_ida';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['type']='id';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['source']='non-db';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['vname']='LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE_ID';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['id_name']='accounts_leads_1accounts_ida';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['link']='accounts_leads_1';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['table']='accounts';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['module']='Accounts';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['rname']='id';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['reportable']=false;
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['side']='right';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['massupdate']=false;
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['duplicate_merge']='disabled';
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['hideacl']=true;
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['audited']=false;
$dictionary['Lead']['fields']['accounts_leads_1accounts_ida']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_accounts_leads_1_name.php

 // created: 2023-04-10 13:46:08
$dictionary['Lead']['fields']['accounts_leads_1_name']['audited']=false;
$dictionary['Lead']['fields']['accounts_leads_1_name']['massupdate']=false;
$dictionary['Lead']['fields']['accounts_leads_1_name']['hidemassupdate']=false;
$dictionary['Lead']['fields']['accounts_leads_1_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['accounts_leads_1_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['accounts_leads_1_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['accounts_leads_1_name']['reportable']=false;
$dictionary['Lead']['fields']['accounts_leads_1_name']['calculated']=false;
$dictionary['Lead']['fields']['accounts_leads_1_name']['vname']='LBL_ACCOUNTS_LEADS_1_NAME_FIELD_TITLE';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_do_not_call.php

 // created: 2023-04-10 13:47:47
$dictionary['Lead']['fields']['do_not_call']['default']=false;
$dictionary['Lead']['fields']['do_not_call']['massupdate']=false;
$dictionary['Lead']['fields']['do_not_call']['hidemassupdate']=false;
$dictionary['Lead']['fields']['do_not_call']['comments']='An indicator of whether contact can be called';
$dictionary['Lead']['fields']['do_not_call']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['do_not_call']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['do_not_call']['merge_filter']='disabled';
$dictionary['Lead']['fields']['do_not_call']['unified_search']=false;
$dictionary['Lead']['fields']['do_not_call']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_drill_rod_c.php

 // created: 2023-04-10 13:50:29
$dictionary['Lead']['fields']['drill_rod_c']['labelValue']='Drill Rod';
$dictionary['Lead']['fields']['drill_rod_c']['dependency']='equal($pgs_c,"Yes")';
$dictionary['Lead']['fields']['drill_rod_c']['required_formula']='';
$dictionary['Lead']['fields']['drill_rod_c']['readonly_formula']='';
$dictionary['Lead']['fields']['drill_rod_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_education.php

 // created: 2023-04-10 14:14:02
$dictionary['Lead']['fields']['hint_education']['len']='225';
$dictionary['Lead']['fields']['hint_education']['massupdate']=false;
$dictionary['Lead']['fields']['hint_education']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_education']['comments']='Education';
$dictionary['Lead']['fields']['hint_education']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_education']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_education']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_education']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_education']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_education_2.php

 // created: 2023-04-10 14:15:18
$dictionary['Lead']['fields']['hint_education_2']['len']='225';
$dictionary['Lead']['fields']['hint_education_2']['massupdate']=false;
$dictionary['Lead']['fields']['hint_education_2']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_education_2']['comments']='Education 2';
$dictionary['Lead']['fields']['hint_education_2']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_education_2']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_education_2']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_education_2']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_education_2']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_facebook.php

 // created: 2023-04-10 14:18:19
$dictionary['Lead']['fields']['facebook']['massupdate']=false;
$dictionary['Lead']['fields']['facebook']['hidemassupdate']=false;
$dictionary['Lead']['fields']['facebook']['comments']='The facebook name of the user';
$dictionary['Lead']['fields']['facebook']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['facebook']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['facebook']['merge_filter']='disabled';
$dictionary['Lead']['fields']['facebook']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['facebook']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_facebook.php

 // created: 2023-04-10 14:19:23
$dictionary['Lead']['fields']['hint_facebook']['len']='120';
$dictionary['Lead']['fields']['hint_facebook']['massupdate']=false;
$dictionary['Lead']['fields']['hint_facebook']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_facebook']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_facebook']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_facebook']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_facebook']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_facebook']['calculated']=false;
$dictionary['Lead']['fields']['hint_facebook']['gen']='';
$dictionary['Lead']['fields']['hint_facebook']['link_target']='_self';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_phone_fax.php

 // created: 2023-04-10 14:40:30
$dictionary['Lead']['fields']['phone_fax']['len']='100';
$dictionary['Lead']['fields']['phone_fax']['massupdate']=false;
$dictionary['Lead']['fields']['phone_fax']['hidemassupdate']=false;
$dictionary['Lead']['fields']['phone_fax']['comments']='Contact fax number';
$dictionary['Lead']['fields']['phone_fax']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['phone_fax']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['phone_fax']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_fax']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.98',
  'searchable' => true,
);
$dictionary['Lead']['fields']['phone_fax']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_first_name.php

 // created: 2023-04-10 14:42:17
$dictionary['Lead']['fields']['first_name']['massupdate']=false;
$dictionary['Lead']['fields']['first_name']['hidemassupdate']=false;
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['first_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['first_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.87',
  'searchable' => true,
);
$dictionary['Lead']['fields']['first_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_flat_stock_c.php

 // created: 2023-04-10 14:43:42
$dictionary['Lead']['fields']['flat_stock_c']['labelValue']='Flat Stock';
$dictionary['Lead']['fields']['flat_stock_c']['dependency']='equal($pgs_c,"Yes")';
$dictionary['Lead']['fields']['flat_stock_c']['required_formula']='';
$dictionary['Lead']['fields']['flat_stock_c']['readonly_formula']='';
$dictionary['Lead']['fields']['flat_stock_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pgs_c.php

 // created: 2023-04-10 14:44:33
$dictionary['Lead']['fields']['pgs_c']['labelValue']='Flat Stock Interest?';
$dictionary['Lead']['fields']['pgs_c']['dependency']='';
$dictionary['Lead']['fields']['pgs_c']['required_formula']='';
$dictionary['Lead']['fields']['pgs_c']['readonly_formula']='';
$dictionary['Lead']['fields']['pgs_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_force_measurement_c.php

 // created: 2023-04-10 14:49:38
$dictionary['Lead']['fields']['force_measurement_c']['labelValue']='Force Measurement';
$dictionary['Lead']['fields']['force_measurement_c']['dependency']='equal($testing_equipment_c,"Yes")';
$dictionary['Lead']['fields']['force_measurement_c']['required_formula']='';
$dictionary['Lead']['fields']['force_measurement_c']['readonly_formula']='';
$dictionary['Lead']['fields']['force_measurement_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_fiscal_year_end.php

 // created: 2023-04-10 14:50:49
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['len']='5';
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['audited']=false;
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['comments']='FY End';
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_fiscal_year_end']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_gage_blocks_c.php

 // created: 2023-04-10 14:52:11
$dictionary['Lead']['fields']['gage_blocks_c']['labelValue']='Gage Blocks';
$dictionary['Lead']['fields']['gage_blocks_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Lead']['fields']['gage_blocks_c']['required_formula']='';
$dictionary['Lead']['fields']['gage_blocks_c']['readonly_formula']='';
$dictionary['Lead']['fields']['gage_blocks_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_googleplus.php

 // created: 2023-04-10 14:54:01
$dictionary['Lead']['fields']['googleplus']['massupdate']=false;
$dictionary['Lead']['fields']['googleplus']['hidemassupdate']=false;
$dictionary['Lead']['fields']['googleplus']['comments']='The google plus id of the user';
$dictionary['Lead']['fields']['googleplus']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['googleplus']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['googleplus']['merge_filter']='disabled';
$dictionary['Lead']['fields']['googleplus']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['googleplus']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_granite_c.php

 // created: 2023-04-10 14:58:30
$dictionary['Lead']['fields']['granite_c']['labelValue']='Granite Interest?';
$dictionary['Lead']['fields']['granite_c']['dependency']='';
$dictionary['Lead']['fields']['granite_c']['required_formula']='';
$dictionary['Lead']['fields']['granite_c']['readonly_formula']='';
$dictionary['Lead']['fields']['granite_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hand_held_force_gages_c.php

 // created: 2023-04-10 15:00:05
$dictionary['Lead']['fields']['hand_held_force_gages_c']['labelValue']='Hand Held Force Gages';
$dictionary['Lead']['fields']['hand_held_force_gages_c']['dependency']='equal($testing_equipment_c,"Yes")';
$dictionary['Lead']['fields']['hand_held_force_gages_c']['required_formula']='';
$dictionary['Lead']['fields']['hand_held_force_gages_c']['readonly_formula']='';
$dictionary['Lead']['fields']['hand_held_force_gages_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_phone_home.php

 // created: 2023-04-10 15:18:07
$dictionary['Lead']['fields']['phone_home']['len']='100';
$dictionary['Lead']['fields']['phone_home']['massupdate']=false;
$dictionary['Lead']['fields']['phone_home']['hidemassupdate']=false;
$dictionary['Lead']['fields']['phone_home']['comments']='Home phone number of the contact';
$dictionary['Lead']['fields']['phone_home']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['phone_home']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['phone_home']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_home']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.02',
  'searchable' => true,
);
$dictionary['Lead']['fields']['phone_home']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_preferred_language.php

 // created: 2023-04-10 15:19:47
$dictionary['Lead']['fields']['preferred_language']['audited']=false;
$dictionary['Lead']['fields']['preferred_language']['massupdate']=false;
$dictionary['Lead']['fields']['preferred_language']['hidemassupdate']=false;
$dictionary['Lead']['fields']['preferred_language']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['preferred_language']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['preferred_language']['merge_filter']='disabled';
$dictionary['Lead']['fields']['preferred_language']['calculated']=false;
$dictionary['Lead']['fields']['preferred_language']['dependency']=false;
$dictionary['Lead']['fields']['preferred_language']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_laser_measurement_c.php

 // created: 2023-04-10 15:21:39
$dictionary['Lead']['fields']['laser_measurement_c']['labelValue']='Laser Measurement Interest?';
$dictionary['Lead']['fields']['laser_measurement_c']['dependency']='';
$dictionary['Lead']['fields']['laser_measurement_c']['required_formula']='';
$dictionary['Lead']['fields']['laser_measurement_c']['readonly_formula']='';
$dictionary['Lead']['fields']['laser_measurement_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hand_tools_c.php

 // created: 2023-04-10 15:23:55
$dictionary['Lead']['fields']['hand_tools_c']['labelValue']='Hand Tools';
$dictionary['Lead']['fields']['hand_tools_c']['dependency']='equal($jst_c,"Yes")';
$dictionary['Lead']['fields']['hand_tools_c']['required_formula']='';
$dictionary['Lead']['fields']['hand_tools_c']['readonly_formula']='';
$dictionary['Lead']['fields']['hand_tools_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_name.php

 // created: 2023-04-10 15:24:57
$dictionary['Lead']['fields']['last_name']['required']=false;
$dictionary['Lead']['fields']['last_name']['audited']=true;
$dictionary['Lead']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Lead']['fields']['last_name']['duplicate_merge']='disabled';
$dictionary['Lead']['fields']['last_name']['duplicate_merge_dom_value']='0';
$dictionary['Lead']['fields']['last_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['last_name']['calculated']=false;
$dictionary['Lead']['fields']['last_name']['importable']='true';
$dictionary['Lead']['fields']['last_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.85',
  'searchable' => true,
);
$dictionary['Lead']['fields']['last_name']['massupdate']=false;
$dictionary['Lead']['fields']['last_name']['hidemassupdate']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_priority_c.php

 // created: 2023-04-10 15:28:09
$dictionary['Lead']['fields']['lead_priority_c']['labelValue']='Lead Priority';
$dictionary['Lead']['fields']['lead_priority_c']['dependency']='';
$dictionary['Lead']['fields']['lead_priority_c']['required_formula']='';
$dictionary['Lead']['fields']['lead_priority_c']['readonly_formula']='';
$dictionary['Lead']['fields']['lead_priority_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_source.php

 // created: 2023-04-10 15:30:54
$dictionary['Lead']['fields']['lead_source']['required']=true;
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source']['calculated']=false;
$dictionary['Lead']['fields']['lead_source']['dependency']=false;
$dictionary['Lead']['fields']['lead_source']['len']=100;
$dictionary['Lead']['fields']['lead_source']['massupdate']=false;
$dictionary['Lead']['fields']['lead_source']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['lead_source']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['lead_source']['hidemassupdate']=false;
$dictionary['Lead']['fields']['lead_source']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_title.php

 // created: 2023-04-11 13:36:24
$dictionary['Lead']['fields']['title']['massupdate']=false;
$dictionary['Lead']['fields']['title']['hidemassupdate']=false;
$dictionary['Lead']['fields']['title']['comments']='The title of the contact';
$dictionary['Lead']['fields']['title']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['title']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['title']['merge_filter']='disabled';
$dictionary['Lead']['fields']['title']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['title']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_twitter.php

 // created: 2023-04-11 13:37:35
$dictionary['Lead']['fields']['twitter']['massupdate']=false;
$dictionary['Lead']['fields']['twitter']['hidemassupdate']=false;
$dictionary['Lead']['fields']['twitter']['comments']='The twitter name of the user';
$dictionary['Lead']['fields']['twitter']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['twitter']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['twitter']['merge_filter']='disabled';
$dictionary['Lead']['fields']['twitter']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['twitter']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_phone_mobile.php

 // created: 2023-04-11 13:40:27
$dictionary['Lead']['fields']['phone_mobile']['len']='100';
$dictionary['Lead']['fields']['phone_mobile']['massupdate']=false;
$dictionary['Lead']['fields']['phone_mobile']['hidemassupdate']=false;
$dictionary['Lead']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Lead']['fields']['phone_mobile']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['phone_mobile']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['phone_mobile']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_mobile']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.01',
  'searchable' => true,
);
$dictionary['Lead']['fields']['phone_mobile']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_phone_work.php

 // created: 2023-04-11 13:41:20
$dictionary['Lead']['fields']['phone_work']['len']='100';
$dictionary['Lead']['fields']['phone_work']['massupdate']=false;
$dictionary['Lead']['fields']['phone_work']['hidemassupdate']=false;
$dictionary['Lead']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Lead']['fields']['phone_work']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['phone_work']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['phone_work']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_work']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['phone_work']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_phone_other.php

 // created: 2023-04-11 13:45:05
$dictionary['Lead']['fields']['phone_other']['len']='100';
$dictionary['Lead']['fields']['phone_other']['massupdate']=false;
$dictionary['Lead']['fields']['phone_other']['hidemassupdate']=false;
$dictionary['Lead']['fields']['phone_other']['comments']='Other phone number for the contact';
$dictionary['Lead']['fields']['phone_other']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['phone_other']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['phone_other']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_other']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.99',
  'searchable' => true,
);
$dictionary['Lead']['fields']['phone_other']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_state.php

 // created: 2023-04-11 13:49:02
$dictionary['Lead']['fields']['primary_address_state']['audited']=true;
$dictionary['Lead']['fields']['primary_address_state']['comments']='State for primary address';
$dictionary['Lead']['fields']['primary_address_state']['merge_filter']='disabled';
$dictionary['Lead']['fields']['primary_address_state']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['primary_address_state']['calculated']=false;
$dictionary['Lead']['fields']['primary_address_state']['massupdate']=false;
$dictionary['Lead']['fields']['primary_address_state']['hidemassupdate']=false;
$dictionary['Lead']['fields']['primary_address_state']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['primary_address_state']['duplicate_merge_dom_value']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_postalcode.php

 // created: 2023-04-11 13:50:21
$dictionary['Lead']['fields']['primary_address_postalcode']['massupdate']=false;
$dictionary['Lead']['fields']['primary_address_postalcode']['hidemassupdate']=false;
$dictionary['Lead']['fields']['primary_address_postalcode']['comments']='Postal code for primary address';
$dictionary['Lead']['fields']['primary_address_postalcode']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['primary_address_postalcode']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['primary_address_postalcode']['merge_filter']='disabled';
$dictionary['Lead']['fields']['primary_address_postalcode']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['primary_address_postalcode']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_country.php

 // created: 2023-04-11 13:59:44
$dictionary['Lead']['fields']['primary_address_country']['len']='255';
$dictionary['Lead']['fields']['primary_address_country']['massupdate']=false;
$dictionary['Lead']['fields']['primary_address_country']['hidemassupdate']=false;
$dictionary['Lead']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Lead']['fields']['primary_address_country']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['primary_address_country']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['primary_address_country']['merge_filter']='disabled';
$dictionary['Lead']['fields']['primary_address_country']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['primary_address_country']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_refered_by.php

 // created: 2023-04-11 14:03:29
$dictionary['Lead']['fields']['refered_by']['audited']=false;
$dictionary['Lead']['fields']['refered_by']['massupdate']=false;
$dictionary['Lead']['fields']['refered_by']['hidemassupdate']=false;
$dictionary['Lead']['fields']['refered_by']['comments']='Identifies who refered the lead';
$dictionary['Lead']['fields']['refered_by']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['refered_by']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['refered_by']['merge_filter']='disabled';
$dictionary['Lead']['fields']['refered_by']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['refered_by']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_opportunity_amount.php

 // created: 2023-04-11 14:04:41
$dictionary['Lead']['fields']['opportunity_amount']['audited']=false;
$dictionary['Lead']['fields']['opportunity_amount']['massupdate']=false;
$dictionary['Lead']['fields']['opportunity_amount']['hidemassupdate']=false;
$dictionary['Lead']['fields']['opportunity_amount']['comments']='Amount of the opportunity';
$dictionary['Lead']['fields']['opportunity_amount']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['opportunity_amount']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['opportunity_amount']['merge_filter']='disabled';
$dictionary['Lead']['fields']['opportunity_amount']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['opportunity_amount']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_portal_name.php

 // created: 2023-04-11 14:06:04
$dictionary['Lead']['fields']['portal_name']['audited']=false;
$dictionary['Lead']['fields']['portal_name']['massupdate']=false;
$dictionary['Lead']['fields']['portal_name']['hidemassupdate']=false;
$dictionary['Lead']['fields']['portal_name']['comments']='Portal user name when lead created via lead portal';
$dictionary['Lead']['fields']['portal_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['portal_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['portal_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['portal_name']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['portal_name']['group_label']='';
$dictionary['Lead']['fields']['portal_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_portal_app.php

 // created: 2023-04-11 14:07:04
$dictionary['Lead']['fields']['portal_app']['audited']=false;
$dictionary['Lead']['fields']['portal_app']['massupdate']=false;
$dictionary['Lead']['fields']['portal_app']['hidemassupdate']=false;
$dictionary['Lead']['fields']['portal_app']['comments']='Portal application that resulted in created of lead';
$dictionary['Lead']['fields']['portal_app']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['portal_app']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['portal_app']['merge_filter']='disabled';
$dictionary['Lead']['fields']['portal_app']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['portal_app']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_website.php

 // created: 2023-04-11 14:08:25
$dictionary['Lead']['fields']['website']['len']='255';
$dictionary['Lead']['fields']['website']['audited']=false;
$dictionary['Lead']['fields']['website']['massupdate']=false;
$dictionary['Lead']['fields']['website']['hidemassupdate']=false;
$dictionary['Lead']['fields']['website']['comments']='URL of website for the company';
$dictionary['Lead']['fields']['website']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['website']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['website']['merge_filter']='disabled';
$dictionary['Lead']['fields']['website']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['website']['calculated']=false;
$dictionary['Lead']['fields']['website']['gen']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_job_2.php

 // created: 2023-04-11 14:14:14
$dictionary['Lead']['fields']['hint_job_2']['len']='255';
$dictionary['Lead']['fields']['hint_job_2']['massupdate']=false;
$dictionary['Lead']['fields']['hint_job_2']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_job_2']['comments']='Job 2';
$dictionary['Lead']['fields']['hint_job_2']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_job_2']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_job_2']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_job_2']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_job_2']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_opportunity_name.php

 // created: 2023-04-11 14:16:17
$dictionary['Lead']['fields']['opportunity_name']['audited']=false;
$dictionary['Lead']['fields']['opportunity_name']['massupdate']=false;
$dictionary['Lead']['fields']['opportunity_name']['hidemassupdate']=false;
$dictionary['Lead']['fields']['opportunity_name']['comments']='Opportunity name associated with lead';
$dictionary['Lead']['fields']['opportunity_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['opportunity_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['opportunity_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['opportunity_name']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['opportunity_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_industry.php

 // created: 2023-04-11 14:18:42
$dictionary['Lead']['fields']['hint_account_industry']['len']='120';
$dictionary['Lead']['fields']['hint_account_industry']['audited']=false;
$dictionary['Lead']['fields']['hint_account_industry']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_industry']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_industry']['comments']='Company Industry';
$dictionary['Lead']['fields']['hint_account_industry']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_industry']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_industry']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_industry']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_industry']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_twitter.php

 // created: 2023-04-11 14:22:31
$dictionary['Lead']['fields']['hint_twitter']['len']='120';
$dictionary['Lead']['fields']['hint_twitter']['massupdate']=false;
$dictionary['Lead']['fields']['hint_twitter']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_twitter']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_twitter']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_twitter']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_twitter']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_twitter']['calculated']=false;
$dictionary['Lead']['fields']['hint_twitter']['gen']='';
$dictionary['Lead']['fields']['hint_twitter']['link_target']='_self';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_industry_tags.php

 // created: 2023-04-11 14:27:39
$dictionary['Lead']['fields']['hint_industry_tags']['len']='225';
$dictionary['Lead']['fields']['hint_industry_tags']['audited']=false;
$dictionary['Lead']['fields']['hint_industry_tags']['massupdate']=false;
$dictionary['Lead']['fields']['hint_industry_tags']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_industry_tags']['comments']='industry tags';
$dictionary['Lead']['fields']['hint_industry_tags']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_industry_tags']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_industry_tags']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_industry_tags']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_industry_tags']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_founded_year.php

 // created: 2023-04-11 14:28:44
$dictionary['Lead']['fields']['hint_account_founded_year']['len']='5';
$dictionary['Lead']['fields']['hint_account_founded_year']['audited']=false;
$dictionary['Lead']['fields']['hint_account_founded_year']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_founded_year']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_founded_year']['comments']='company founded year';
$dictionary['Lead']['fields']['hint_account_founded_year']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_founded_year']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_founded_year']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_founded_year']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_founded_year']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_phone_1.php

 // created: 2023-04-11 14:37:10
$dictionary['Lead']['fields']['hint_phone_1']['len']='15';
$dictionary['Lead']['fields']['hint_phone_1']['massupdate']=false;
$dictionary['Lead']['fields']['hint_phone_1']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_phone_1']['comments']='extra phone field';
$dictionary['Lead']['fields']['hint_phone_1']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_phone_1']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_phone_1']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_phone_1']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_phone_1']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_phone_2.php

 // created: 2023-04-11 14:40:09
$dictionary['Lead']['fields']['hint_phone_2']['len']='15';
$dictionary['Lead']['fields']['hint_phone_2']['massupdate']=false;
$dictionary['Lead']['fields']['hint_phone_2']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_phone_2']['comments']='extra phone field';
$dictionary['Lead']['fields']['hint_phone_2']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_phone_2']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_phone_2']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_phone_2']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_phone_2']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_naics_code_lbl.php

 // created: 2023-04-11 14:42:30
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['len']='170';
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['audited']=false;
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['comments']='NAICS Code';
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_naics_code_lbl']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_sic_code_label.php

 // created: 2023-04-11 14:55:17
$dictionary['Lead']['fields']['hint_account_sic_code_label']['len']='120';
$dictionary['Lead']['fields']['hint_account_sic_code_label']['audited']=false;
$dictionary['Lead']['fields']['hint_account_sic_code_label']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_sic_code_label']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_sic_code_label']['comments']='SIC Code';
$dictionary['Lead']['fields']['hint_account_sic_code_label']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_sic_code_label']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_sic_code_label']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_sic_code_label']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_sic_code_label']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_annual_revenue.php

 // created: 2023-04-11 14:58:56
$dictionary['Lead']['fields']['hint_account_annual_revenue']['len']='25';
$dictionary['Lead']['fields']['hint_account_annual_revenue']['audited']=false;
$dictionary['Lead']['fields']['hint_account_annual_revenue']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_annual_revenue']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_annual_revenue']['comments']='Annual Rev';
$dictionary['Lead']['fields']['hint_account_annual_revenue']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_annual_revenue']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_annual_revenue']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_annual_revenue']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_annual_revenue']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_specialorder_c.php

 // created: 2023-04-11 15:04:40
$dictionary['Lead']['fields']['specialorder_c']['labelValue']='Special Order';
$dictionary['Lead']['fields']['specialorder_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['specialorder_c']['enforced']='';
$dictionary['Lead']['fields']['specialorder_c']['dependency']='';
$dictionary['Lead']['fields']['specialorder_c']['required_formula']='';
$dictionary['Lead']['fields']['specialorder_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_specialgageinterest_c.php

 // created: 2023-04-11 15:06:36
$dictionary['Lead']['fields']['specialgageinterest_c']['labelValue']='Special Gage Interest';
$dictionary['Lead']['fields']['specialgageinterest_c']['dependency']='';
$dictionary['Lead']['fields']['specialgageinterest_c']['required_formula']='';
$dictionary['Lead']['fields']['specialgageinterest_c']['readonly_formula']='';
$dictionary['Lead']['fields']['specialgageinterest_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hint_account_location.php

 // created: 2023-04-11 15:09:38
$dictionary['Lead']['fields']['hint_account_location']['len']='255';
$dictionary['Lead']['fields']['hint_account_location']['audited']=false;
$dictionary['Lead']['fields']['hint_account_location']['massupdate']=false;
$dictionary['Lead']['fields']['hint_account_location']['hidemassupdate']=false;
$dictionary['Lead']['fields']['hint_account_location']['comments']='Company Location';
$dictionary['Lead']['fields']['hint_account_location']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['hint_account_location']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['hint_account_location']['merge_filter']='disabled';
$dictionary['Lead']['fields']['hint_account_location']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hint_account_location']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_quality_c.php

 // created: 2023-04-11 15:18:00
$dictionary['Lead']['fields']['lead_quality_c']['labelValue']='Qualification';
$dictionary['Lead']['fields']['lead_quality_c']['dependency']='';
$dictionary['Lead']['fields']['lead_quality_c']['required_formula']='';
$dictionary['Lead']['fields']['lead_quality_c']['readonly_formula']='';
$dictionary['Lead']['fields']['lead_quality_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_services_c.php

 // created: 2023-04-11 15:21:45
$dictionary['Lead']['fields']['services_c']['labelValue']='Services';
$dictionary['Lead']['fields']['services_c']['dependency']='equal($metrology_equipment_c,"Yes")';
$dictionary['Lead']['fields']['services_c']['required_formula']='';
$dictionary['Lead']['fields']['services_c']['readonly_formula']='';
$dictionary['Lead']['fields']['services_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_saws_c.php

 // created: 2023-04-11 15:25:56
$dictionary['Lead']['fields']['saws_c']['labelValue']='Saws Interest?';
$dictionary['Lead']['fields']['saws_c']['dependency']='';
$dictionary['Lead']['fields']['saws_c']['required_formula']='';
$dictionary['Lead']['fields']['saws_c']['readonly_formula']='';
$dictionary['Lead']['fields']['saws_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_m1_oil_c.php

 // created: 2023-04-11 15:27:35
$dictionary['Lead']['fields']['m1_oil_c']['labelValue']='M1 Oil';
$dictionary['Lead']['fields']['m1_oil_c']['dependency']='equal($jst_c,"Yes")';
$dictionary['Lead']['fields']['m1_oil_c']['required_formula']='';
$dictionary['Lead']['fields']['m1_oil_c']['readonly_formula']='';
$dictionary['Lead']['fields']['m1_oil_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_material_testing_c.php

 // created: 2023-04-11 15:29:47
$dictionary['Lead']['fields']['material_testing_c']['labelValue']='Material Testing';
$dictionary['Lead']['fields']['material_testing_c']['dependency']='equal($testing_equipment_c,"Yes")';
$dictionary['Lead']['fields']['material_testing_c']['required_formula']='';
$dictionary['Lead']['fields']['material_testing_c']['readonly_formula']='';
$dictionary['Lead']['fields']['material_testing_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_optical_systems_c.php

 // created: 2023-04-11 15:33:14
$dictionary['Lead']['fields']['optical_systems_c']['labelValue']='Optical Systems';
$dictionary['Lead']['fields']['optical_systems_c']['dependency']='equal($metrology_equipment_c,"Yes")';
$dictionary['Lead']['fields']['optical_systems_c']['required_formula']='';
$dictionary['Lead']['fields']['optical_systems_c']['readonly_formula']='';
$dictionary['Lead']['fields']['optical_systems_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_welding_center_c.php

 // created: 2023-04-11 15:34:50
$dictionary['Lead']['fields']['welding_center_c']['labelValue']='Welding Center';
$dictionary['Lead']['fields']['welding_center_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Lead']['fields']['welding_center_c']['required_formula']='';
$dictionary['Lead']['fields']['welding_center_c']['readonly_formula']='';
$dictionary['Lead']['fields']['welding_center_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_metrology_equipment_c.php

 // created: 2023-04-11 15:37:23
$dictionary['Lead']['fields']['metrology_equipment_c']['labelValue']='Vision/Optical Interest?';
$dictionary['Lead']['fields']['metrology_equipment_c']['dependency']='';
$dictionary['Lead']['fields']['metrology_equipment_c']['required_formula']='';
$dictionary['Lead']['fields']['metrology_equipment_c']['readonly_formula']='';
$dictionary['Lead']['fields']['metrology_equipment_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_vision_systems_c.php

 // created: 2023-04-11 15:40:07
$dictionary['Lead']['fields']['vision_systems_c']['labelValue']='Vision Systems';
$dictionary['Lead']['fields']['vision_systems_c']['dependency']='equal($metrology_equipment_c,"Yes")';
$dictionary['Lead']['fields']['vision_systems_c']['required_formula']='';
$dictionary['Lead']['fields']['vision_systems_c']['readonly_formula']='';
$dictionary['Lead']['fields']['vision_systems_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_special_gage_c.php

 // created: 2023-04-11 15:41:43
$dictionary['Lead']['fields']['special_gage_c']['labelValue']='Special Gage';
$dictionary['Lead']['fields']['special_gage_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Lead']['fields']['special_gage_c']['required_formula']='';
$dictionary['Lead']['fields']['special_gage_c']['readonly_formula']='';
$dictionary['Lead']['fields']['special_gage_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pta_and_hand_saw_blades_c.php

 // created: 2023-04-11 15:42:41
$dictionary['Lead']['fields']['pta_and_hand_saw_blades_c']['labelValue']='PTA and Hand Saw Blades';
$dictionary['Lead']['fields']['pta_and_hand_saw_blades_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Lead']['fields']['pta_and_hand_saw_blades_c']['required_formula']='';
$dictionary['Lead']['fields']['pta_and_hand_saw_blades_c']['readonly_formula']='';
$dictionary['Lead']['fields']['pta_and_hand_saw_blades_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_surface_plates_c.php

 // created: 2023-04-11 15:44:36
$dictionary['Lead']['fields']['surface_plates_c']['labelValue']='Surface Plates';
$dictionary['Lead']['fields']['surface_plates_c']['dependency']='equal($granite_c,"Yes")';
$dictionary['Lead']['fields']['surface_plates_c']['required_formula']='';
$dictionary['Lead']['fields']['surface_plates_c']['readonly_formula']='';
$dictionary['Lead']['fields']['surface_plates_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pht_c.php

 // created: 2023-04-11 15:46:49
$dictionary['Lead']['fields']['pht_c']['labelValue']='Precision Hand Tools';
$dictionary['Lead']['fields']['pht_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Lead']['fields']['pht_c']['required_formula']='';
$dictionary['Lead']['fields']['pht_c']['readonly_formula']='';
$dictionary['Lead']['fields']['pht_c']['visibility_grid']=array (
);

 
?>
