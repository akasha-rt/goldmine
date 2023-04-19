<?php
// created: 2023-01-27 20:36:23
$dictionary["opportunities_campaigns_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_campaigns_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_campaigns_1_c',
      'join_key_lhs' => 'opportunities_campaigns_1opportunities_ida',
      'join_key_rhs' => 'opportunities_campaigns_1campaigns_idb',
    ),
  ),
  'table' => 'opportunities_campaigns_1_c',
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
    'opportunities_campaigns_1opportunities_ida' => 
    array (
      'name' => 'opportunities_campaigns_1opportunities_ida',
      'type' => 'id',
    ),
    'opportunities_campaigns_1campaigns_idb' => 
    array (
      'name' => 'opportunities_campaigns_1campaigns_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_opportunities_campaigns_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_opportunities_campaigns_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_campaigns_1opportunities_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_opportunities_campaigns_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_campaigns_1campaigns_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'opportunities_campaigns_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_campaigns_1campaigns_idb',
      ),
    ),
  ),
);