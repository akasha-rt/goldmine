<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'pt_portalteams_modified_user' => 
  array (
    'name' => 'pt_portalteams_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PT_PortalTeams',
    'rhs_table' => 'pt_portalteams',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_created_by' => 
  array (
    'name' => 'pt_portalteams_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PT_PortalTeams',
    'rhs_table' => 'pt_portalteams',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_activities' => 
  array (
    'name' => 'pt_portalteams_activities',
    'lhs_module' => 'PT_PortalTeams',
    'lhs_table' => 'pt_portalteams',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'PT_PortalTeams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_following' => 
  array (
    'name' => 'pt_portalteams_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PT_PortalTeams',
    'rhs_table' => 'pt_portalteams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'PT_PortalTeams',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_favorite' => 
  array (
    'name' => 'pt_portalteams_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PT_PortalTeams',
    'rhs_table' => 'pt_portalteams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'PT_PortalTeams',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_assigned_user' => 
  array (
    'name' => 'pt_portalteams_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PT_PortalTeams',
    'rhs_table' => 'pt_portalteams',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_pu_portalusers' => 
  array (
    'name' => 'pt_portalteams_pu_portalusers',
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
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_pu_portalusers',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'pt_portalteams_accounts_1' => 
  array (
    'rhs_label' => 'Accounts',
    'lhs_label' => 'Portal Teams',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'PT_PortalTeams',
    'rhs_module' => 'Accounts',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'pt_portalteams_accounts_1',
  ),
);