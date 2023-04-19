<?php
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
