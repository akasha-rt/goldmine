<?php
// created: 2021-03-30 18:46:14
$dictionary["meetings_cc_coupon_codes_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'meetings_cc_coupon_codes_1' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'CC_Coupon_Codes',
      'rhs_table' => 'cc_coupon_codes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'meetings_cc_coupon_codes_1_c',
      'join_key_lhs' => 'meetings_cc_coupon_codes_1meetings_ida',
      'join_key_rhs' => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
    ),
  ),
  'table' => 'meetings_cc_coupon_codes_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'meetings_cc_coupon_codes_1meetings_ida' => 
    array (
      'name' => 'meetings_cc_coupon_codes_1meetings_ida',
      'type' => 'id',
    ),
    'meetings_cc_coupon_codes_1cc_coupon_codes_idb' => 
    array (
      'name' => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_meetings_cc_coupon_codes_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_meetings_cc_coupon_codes_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'meetings_cc_coupon_codes_1meetings_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_meetings_cc_coupon_codes_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'meetings_cc_coupon_codes_1cc_coupon_codes_idb',
        1 => 'deleted',
      ),
    ),
  ),
);