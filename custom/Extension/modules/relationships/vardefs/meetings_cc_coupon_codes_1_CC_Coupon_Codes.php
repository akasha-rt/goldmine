<?php
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
