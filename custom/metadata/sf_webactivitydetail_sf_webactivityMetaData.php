<?php
// created: 2012-08-28 20:35:15
$dictionary["sf_webactivitydetail_sf_webactivity"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sf_webactivitydetail_sf_webactivity' => 
    array (
      'lhs_module' => 'sf_webActivity',
      'lhs_table' => 'sf_webactivity',
      'lhs_key' => 'id',
      'rhs_module' => 'sf_WebActivityDetail',
      'rhs_table' => 'sf_webactivitydetail',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sf_webactivitydetail_sf_webactivity_c',
      'join_key_lhs' => 'sf_webactivitydetail_sf_webactivitysf_webactivity_ida',
      'join_key_rhs' => 'sf_webactivitydetail_sf_webactivitysf_webactivitydetail_idb',
    ),
  ),
  'table' => 'sf_webactivitydetail_sf_webactivity_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
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
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'sf_webactivitydetail_sf_webactivitysf_webactivity_ida' => 
    array (
      'name' => 'sf_webactivitydetail_sf_webactivitysf_webactivity_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'sf_webactivitydetail_sf_webactivitysf_webactivitydetail_idb' => 
    array (
      'name' => 'sf_webactivitydetail_sf_webactivitysf_webactivitydetail_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sf_webactivitydetail_sf_webactivityspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sf_webactivitydetail_sf_webactivity_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sf_webactivitydetail_sf_webactivitysf_webactivity_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sf_webactivitydetail_sf_webactivity_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sf_webactivitydetail_sf_webactivitysf_webactivitydetail_idb',
      ),
    ),
  ),
);