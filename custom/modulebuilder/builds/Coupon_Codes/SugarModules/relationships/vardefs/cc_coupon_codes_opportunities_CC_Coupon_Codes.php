<?php
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
