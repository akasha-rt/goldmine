<?php
// created: 2023-01-12 20:33:37
$dictionary["producttemplates_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'producttemplates_accounts_1' => 
    array (
      'lhs_module' => 'ProductTemplates',
      'lhs_table' => 'product_templates',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'producttemplates_accounts_1_c',
      'join_key_lhs' => 'producttemplates_accounts_1producttemplates_ida',
      'join_key_rhs' => 'producttemplates_accounts_1accounts_idb',
    ),
  ),
  'table' => 'producttemplates_accounts_1_c',
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
    'producttemplates_accounts_1producttemplates_ida' => 
    array (
      'name' => 'producttemplates_accounts_1producttemplates_ida',
      'type' => 'id',
    ),
    'producttemplates_accounts_1accounts_idb' => 
    array (
      'name' => 'producttemplates_accounts_1accounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_producttemplates_accounts_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_producttemplates_accounts_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'producttemplates_accounts_1producttemplates_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_producttemplates_accounts_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'producttemplates_accounts_1accounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'producttemplates_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'producttemplates_accounts_1producttemplates_ida',
        1 => 'producttemplates_accounts_1accounts_idb',
      ),
    ),
  ),
);