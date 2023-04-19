<?php
// created: 2023-01-12 20:55:04
$dictionary["producttemplates_pt_portalteams_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'producttemplates_pt_portalteams_1' => 
    array (
      'lhs_module' => 'ProductTemplates',
      'lhs_table' => 'product_templates',
      'lhs_key' => 'id',
      'rhs_module' => 'PT_PortalTeams',
      'rhs_table' => 'pt_portalteams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'producttemplates_pt_portalteams_1_c',
      'join_key_lhs' => 'producttemplates_pt_portalteams_1producttemplates_ida',
      'join_key_rhs' => 'producttemplates_pt_portalteams_1pt_portalteams_idb',
    ),
  ),
  'table' => 'producttemplates_pt_portalteams_1_c',
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
    'producttemplates_pt_portalteams_1producttemplates_ida' => 
    array (
      'name' => 'producttemplates_pt_portalteams_1producttemplates_ida',
      'type' => 'id',
    ),
    'producttemplates_pt_portalteams_1pt_portalteams_idb' => 
    array (
      'name' => 'producttemplates_pt_portalteams_1pt_portalteams_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_producttemplates_pt_portalteams_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_producttemplates_pt_portalteams_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'producttemplates_pt_portalteams_1producttemplates_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_producttemplates_pt_portalteams_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'producttemplates_pt_portalteams_1pt_portalteams_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'producttemplates_pt_portalteams_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'producttemplates_pt_portalteams_1producttemplates_ida',
        1 => 'producttemplates_pt_portalteams_1pt_portalteams_idb',
      ),
    ),
  ),
);