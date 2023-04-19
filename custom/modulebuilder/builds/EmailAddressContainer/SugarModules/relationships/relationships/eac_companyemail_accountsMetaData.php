<?php
// created: 2021-09-22 14:19:42
$dictionary["eac_companyemail_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'eac_companyemail_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'EAC_CompanyEmail',
      'rhs_table' => 'eac_companyemail',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eac_companyemail_accounts_c',
      'join_key_lhs' => 'eac_companyemail_accountsaccounts_ida',
      'join_key_rhs' => 'eac_companyemail_accountseac_companyemail_idb',
    ),
  ),
  'table' => 'eac_companyemail_accounts_c',
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
    'eac_companyemail_accountsaccounts_ida' => 
    array (
      'name' => 'eac_companyemail_accountsaccounts_ida',
      'type' => 'id',
    ),
    'eac_companyemail_accountseac_companyemail_idb' => 
    array (
      'name' => 'eac_companyemail_accountseac_companyemail_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_eac_companyemail_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_eac_companyemail_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'eac_companyemail_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_eac_companyemail_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'eac_companyemail_accountseac_companyemail_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'eac_companyemail_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eac_companyemail_accountseac_companyemail_idb',
      ),
    ),
  ),
);