<?php
// created: 2012-08-28 20:35:13
$dictionary["sf_webactivity_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sf_webactivity_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'sf_webActivity',
      'rhs_table' => 'sf_webactivity',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sf_webactivity_accounts_c',
      'join_key_lhs' => 'sf_webactivity_accountsaccounts_ida',
      'join_key_rhs' => 'sf_webactivity_accountssf_webactivity_idb',
    ),
  ),
  'table' => 'sf_webactivity_accounts_c',
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
    'sf_webactivity_accountsaccounts_ida' => 
    array (
      'name' => 'sf_webactivity_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'sf_webactivity_accountssf_webactivity_idb' => 
    array (
      'name' => 'sf_webactivity_accountssf_webactivity_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sf_webactivity_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sf_webactivity_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sf_webactivity_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sf_webactivity_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sf_webactivity_accountssf_webactivity_idb',
      ),
    ),
  ),
);