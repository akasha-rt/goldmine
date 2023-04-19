<?php
// created: 2023-01-12 20:29:57
$dictionary["accounts_productcategories_2"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_productcategories_2' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ProductCategories',
      'rhs_table' => 'product_categories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_productcategories_2_c',
      'join_key_lhs' => 'accounts_productcategories_2accounts_ida',
      'join_key_rhs' => 'accounts_productcategories_2productcategories_idb',
    ),
  ),
  'table' => 'accounts_productcategories_2_c',
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
    'accounts_productcategories_2accounts_ida' => 
    array (
      'name' => 'accounts_productcategories_2accounts_ida',
      'type' => 'id',
    ),
    'accounts_productcategories_2productcategories_idb' => 
    array (
      'name' => 'accounts_productcategories_2productcategories_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_productcategories_2_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_productcategories_2_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_productcategories_2accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_productcategories_2_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_productcategories_2productcategories_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'accounts_productcategories_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_productcategories_2accounts_ida',
        1 => 'accounts_productcategories_2productcategories_idb',
      ),
    ),
  ),
);