<?php
// created: 2022-07-27 11:58:31
$dictionary["pt_portalteams_pu_portalusers"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'pt_portalteams_pu_portalusers' => 
    array (
      'lhs_module' => 'PT_PortalTeams',
      'lhs_table' => 'pt_portalteams',
      'lhs_key' => 'id',
      'rhs_module' => 'PU_PortalUsers',
      'rhs_table' => 'pu_portalusers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pt_portalteams_pu_portalusers_c',
      'join_key_lhs' => 'pt_portalteams_pu_portaluserspt_portalteams_ida',
      'join_key_rhs' => 'pt_portalteams_pu_portaluserspu_portalusers_idb',
    ),
  ),
  'table' => 'pt_portalteams_pu_portalusers_c',
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
    'pt_portalteams_pu_portaluserspt_portalteams_ida' => 
    array (
      'name' => 'pt_portalteams_pu_portaluserspt_portalteams_ida',
      'type' => 'id',
    ),
    'pt_portalteams_pu_portaluserspu_portalusers_idb' => 
    array (
      'name' => 'pt_portalteams_pu_portaluserspu_portalusers_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_pt_portalteams_pu_portalusers_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_pt_portalteams_pu_portalusers_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pt_portalteams_pu_portaluserspt_portalteams_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_pt_portalteams_pu_portalusers_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pt_portalteams_pu_portaluserspu_portalusers_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'pt_portalteams_pu_portalusers_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pt_portalteams_pu_portaluserspt_portalteams_ida',
        1 => 'pt_portalteams_pu_portaluserspu_portalusers_idb',
      ),
    ),
  ),
);