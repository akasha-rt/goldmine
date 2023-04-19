<?php
// created: 2019-06-18 16:23:52
$dictionary["accounts_som_specialorderquotes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_som_specialorderquotes_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'SOM_SpecialOrderQuotes',
      'rhs_table' => 'som_specialorderquotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_som_specialorderquotes_1_c',
      'join_key_lhs' => 'accounts_som_specialorderquotes_1accounts_ida',
      'join_key_rhs' => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
    ),
  ),
  'table' => 'accounts_som_specialorderquotes_1_c',
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
    'accounts_som_specialorderquotes_1accounts_ida' => 
    array (
      'name' => 'accounts_som_specialorderquotes_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_som_specialorderquotes_1som_specialorderquotes_idb' => 
    array (
      'name' => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_som_specialorderquotes_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_som_specialorderquotes_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_som_specialorderquotes_1accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_som_specialorderquotes_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'accounts_som_specialorderquotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
      ),
    ),
  ),
);