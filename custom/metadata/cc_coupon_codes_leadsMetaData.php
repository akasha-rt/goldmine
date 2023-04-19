<?php
// created: 2021-03-26 18:52:00
$dictionary["cc_coupon_codes_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cc_coupon_codes_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'CC_Coupon_Codes',
      'rhs_table' => 'cc_coupon_codes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cc_coupon_codes_leads_c',
      'join_key_lhs' => 'cc_coupon_codes_leadsleads_ida',
      'join_key_rhs' => 'cc_coupon_codes_leadscc_coupon_codes_idb',
    ),
  ),
  'table' => 'cc_coupon_codes_leads_c',
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
    'cc_coupon_codes_leadsleads_ida' => 
    array (
      'name' => 'cc_coupon_codes_leadsleads_ida',
      'type' => 'id',
    ),
    'cc_coupon_codes_leadscc_coupon_codes_idb' => 
    array (
      'name' => 'cc_coupon_codes_leadscc_coupon_codes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cc_coupon_codes_leads_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cc_coupon_codes_leads_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cc_coupon_codes_leadsleads_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cc_coupon_codes_leads_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cc_coupon_codes_leadscc_coupon_codes_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cc_coupon_codes_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cc_coupon_codes_leadscc_coupon_codes_idb',
      ),
    ),
  ),
);