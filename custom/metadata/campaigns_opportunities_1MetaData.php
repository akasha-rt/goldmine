<?php
// created: 2023-02-14 15:41:44
$dictionary["campaigns_opportunities_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'campaigns_opportunities_1' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'campaigns_opportunities_1_c',
      'join_key_lhs' => 'campaigns_opportunities_1campaigns_ida',
      'join_key_rhs' => 'campaigns_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'campaigns_opportunities_1_c',
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
    'campaigns_opportunities_1campaigns_ida' => 
    array (
      'name' => 'campaigns_opportunities_1campaigns_ida',
      'type' => 'id',
    ),
    'campaigns_opportunities_1opportunities_idb' => 
    array (
      'name' => 'campaigns_opportunities_1opportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_campaigns_opportunities_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_campaigns_opportunities_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaigns_opportunities_1campaigns_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_campaigns_opportunities_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaigns_opportunities_1opportunities_idb',
        1 => 'deleted',
      ),
    ),
  ),
);