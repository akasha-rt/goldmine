<?php
// created: 2023-01-13 14:55:41
$dictionary["pu_portalusers_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'pu_portalusers_accounts_1' => 
    array (
      'lhs_module' => 'PU_PortalUsers',
      'lhs_table' => 'pu_portalusers',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pu_portalusers_accounts_1_c',
      'join_key_lhs' => 'pu_portalusers_accounts_1pu_portalusers_ida',
      'join_key_rhs' => 'pu_portalusers_accounts_1accounts_idb',
    ),
  ),
  'table' => 'pu_portalusers_accounts_1_c',
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
    'pu_portalusers_accounts_1pu_portalusers_ida' => 
    array (
      'name' => 'pu_portalusers_accounts_1pu_portalusers_ida',
      'type' => 'id',
    ),
    'pu_portalusers_accounts_1accounts_idb' => 
    array (
      'name' => 'pu_portalusers_accounts_1accounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_pu_portalusers_accounts_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_pu_portalusers_accounts_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pu_portalusers_accounts_1pu_portalusers_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_pu_portalusers_accounts_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pu_portalusers_accounts_1accounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'pu_portalusers_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pu_portalusers_accounts_1pu_portalusers_ida',
        1 => 'pu_portalusers_accounts_1accounts_idb',
      ),
    ),
  ),
);