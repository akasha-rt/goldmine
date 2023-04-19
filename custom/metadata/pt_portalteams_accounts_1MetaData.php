<?php
// created: 2023-01-12 19:58:49
$dictionary["pt_portalteams_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'pt_portalteams_accounts_1' => 
    array (
      'lhs_module' => 'PT_PortalTeams',
      'lhs_table' => 'pt_portalteams',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pt_portalteams_accounts_1_c',
      'join_key_lhs' => 'pt_portalteams_accounts_1pt_portalteams_ida',
      'join_key_rhs' => 'pt_portalteams_accounts_1accounts_idb',
    ),
  ),
  'table' => 'pt_portalteams_accounts_1_c',
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
    'pt_portalteams_accounts_1pt_portalteams_ida' => 
    array (
      'name' => 'pt_portalteams_accounts_1pt_portalteams_ida',
      'type' => 'id',
    ),
    'pt_portalteams_accounts_1accounts_idb' => 
    array (
      'name' => 'pt_portalteams_accounts_1accounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_pt_portalteams_accounts_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_pt_portalteams_accounts_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pt_portalteams_accounts_1pt_portalteams_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_pt_portalteams_accounts_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pt_portalteams_accounts_1accounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'pt_portalteams_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pt_portalteams_accounts_1pt_portalteams_ida',
        1 => 'pt_portalteams_accounts_1accounts_idb',
      ),
    ),
  ),
);