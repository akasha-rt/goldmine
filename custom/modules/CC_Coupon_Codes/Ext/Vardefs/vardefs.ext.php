<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/CC_Coupon_Codes/Ext/Vardefs/cc_coupon_codes_leads_CC_Coupon_Codes.php

// created: 2021-03-26 18:52:01
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_leads"] = array (
  'name' => 'cc_coupon_codes_leads',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_CC_COUPON_CODES_LEADS_FROM_CC_COUPON_CODES_TITLE',
  'id_name' => 'cc_coupon_codes_leadsleads_ida',
  'link-type' => 'one',
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_leads_name"] = array (
  'name' => 'cc_coupon_codes_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'cc_coupon_codes_leadsleads_ida',
  'link' => 'cc_coupon_codes_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_leadsleads_ida"] = array (
  'name' => 'cc_coupon_codes_leadsleads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_LEADS_FROM_CC_COUPON_CODES_TITLE_ID',
  'id_name' => 'cc_coupon_codes_leadsleads_ida',
  'link' => 'cc_coupon_codes_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/CC_Coupon_Codes/Ext/Vardefs/cc_coupon_codes_contacts_CC_Coupon_Codes.php

// created: 2021-03-26 18:52:01
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_contacts"] = array (
  'name' => 'cc_coupon_codes_contacts',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CC_COUPON_CODES_TITLE',
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link-type' => 'one',
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_contacts_name"] = array (
  'name' => 'cc_coupon_codes_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link' => 'cc_coupon_codes_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_contactscontacts_ida"] = array (
  'name' => 'cc_coupon_codes_contactscontacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CC_COUPON_CODES_TITLE_ID',
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link' => 'cc_coupon_codes_contacts',
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
// Merged from custom/Extension/modules/CC_Coupon_Codes/Ext/Vardefs/cc_coupon_codes_opportunities_CC_Coupon_Codes.php

// created: 2021-03-26 18:52:01
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_opportunities"] = array (
  'name' => 'cc_coupon_codes_opportunities',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_CC_COUPON_CODES_OPPORTUNITIES_FROM_CC_COUPON_CODES_TITLE',
  'id_name' => 'cc_coupon_codes_opportunitiesopportunities_ida',
  'link-type' => 'one',
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_opportunities_name"] = array (
  'name' => 'cc_coupon_codes_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'cc_coupon_codes_opportunitiesopportunities_ida',
  'link' => 'cc_coupon_codes_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_opportunitiesopportunities_ida"] = array (
  'name' => 'cc_coupon_codes_opportunitiesopportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_OPPORTUNITIES_FROM_CC_COUPON_CODES_TITLE_ID',
  'id_name' => 'cc_coupon_codes_opportunitiesopportunities_ida',
  'link' => 'cc_coupon_codes_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/CC_Coupon_Codes/Ext/Vardefs/in_incentives_cc_coupon_codes_CC_Coupon_Codes.php

// created: 2021-03-26 19:33:36
$dictionary["CC_Coupon_Codes"]["fields"]["in_incentives_cc_coupon_codes"] = array (
  'name' => 'in_incentives_cc_coupon_codes',
  'type' => 'link',
  'relationship' => 'in_incentives_cc_coupon_codes',
  'source' => 'non-db',
  'module' => 'IN_Incentives',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_CC_COUPON_CODES_FROM_CC_COUPON_CODES_TITLE',
  'id_name' => 'in_incentives_cc_coupon_codesin_incentives_ida',
  'link-type' => 'one',
);
$dictionary["CC_Coupon_Codes"]["fields"]["in_incentives_cc_coupon_codes_name"] = array (
  'name' => 'in_incentives_cc_coupon_codes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_CC_COUPON_CODES_FROM_IN_INCENTIVES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_cc_coupon_codesin_incentives_ida',
  'link' => 'in_incentives_cc_coupon_codes',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'name',
);
$dictionary["CC_Coupon_Codes"]["fields"]["in_incentives_cc_coupon_codesin_incentives_ida"] = array (
  'name' => 'in_incentives_cc_coupon_codesin_incentives_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_CC_COUPON_CODES_FROM_CC_COUPON_CODES_TITLE_ID',
  'id_name' => 'in_incentives_cc_coupon_codesin_incentives_ida',
  'link' => 'in_incentives_cc_coupon_codes',
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
// Merged from custom/Extension/modules/CC_Coupon_Codes/Ext/Vardefs/meetings_cc_coupon_codes_1_CC_Coupon_Codes.php

// created: 2021-03-30 18:46:14
$dictionary["CC_Coupon_Codes"]["fields"]["meetings_cc_coupon_codes_1"] = array (
  'name' => 'meetings_cc_coupon_codes_1',
  'type' => 'link',
  'relationship' => 'meetings_cc_coupon_codes_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_MEETINGS_CC_COUPON_CODES_1_FROM_MEETINGS_TITLE',
  'id_name' => 'meetings_cc_coupon_codes_1meetings_ida',
);
$dictionary["CC_Coupon_Codes"]["fields"]["meetings_cc_coupon_codes_1_name"] = array (
  'name' => 'meetings_cc_coupon_codes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_CC_COUPON_CODES_1_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'meetings_cc_coupon_codes_1meetings_ida',
  'link' => 'meetings_cc_coupon_codes_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["CC_Coupon_Codes"]["fields"]["meetings_cc_coupon_codes_1meetings_ida"] = array (
  'name' => 'meetings_cc_coupon_codes_1meetings_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_CC_COUPON_CODES_1_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'meetings_cc_coupon_codes_1meetings_ida',
  'link' => 'meetings_cc_coupon_codes_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/CC_Coupon_Codes/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:15
$dictionary['CC_Coupon_Codes']['full_text_search']=true;

?>
