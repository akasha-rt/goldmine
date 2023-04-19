<?php
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
