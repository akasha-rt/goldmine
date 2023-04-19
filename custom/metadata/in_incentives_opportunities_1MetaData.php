<?php
// created: 2021-03-30 18:32:40
$dictionary["in_incentives_opportunities_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'in_incentives_opportunities_1' => 
    array (
      'lhs_module' => 'IN_Incentives',
      'lhs_table' => 'in_incentives',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'in_incentives_opportunities_1_c',
      'join_key_lhs' => 'in_incentives_opportunities_1in_incentives_ida',
      'join_key_rhs' => 'in_incentives_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'in_incentives_opportunities_1_c',
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
    'in_incentives_opportunities_1in_incentives_ida' => 
    array (
      'name' => 'in_incentives_opportunities_1in_incentives_ida',
      'type' => 'id',
    ),
    'in_incentives_opportunities_1opportunities_idb' => 
    array (
      'name' => 'in_incentives_opportunities_1opportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_in_incentives_opportunities_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_in_incentives_opportunities_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'in_incentives_opportunities_1in_incentives_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_in_incentives_opportunities_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'in_incentives_opportunities_1opportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'in_incentives_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'in_incentives_opportunities_1opportunities_idb',
      ),
    ),
  ),
);