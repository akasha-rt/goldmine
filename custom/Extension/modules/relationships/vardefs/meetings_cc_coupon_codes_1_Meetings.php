<?php
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
