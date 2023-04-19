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
  'pc_productcategoryclone_modified_user' => 
  array (
    'name' => 'pc_productcategoryclone_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PC_ProductCategoryClone',
    'rhs_table' => 'pc_productcategoryclone',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pc_productcategoryclone_created_by' => 
  array (
    'name' => 'pc_productcategoryclone_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PC_ProductCategoryClone',
    'rhs_table' => 'pc_productcategoryclone',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pc_productcategoryclone_activities' => 
  array (
    'name' => 'pc_productcategoryclone_activities',
    'lhs_module' => 'PC_ProductCategoryClone',
    'lhs_table' => 'pc_productcategoryclone',
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
    'relationship_role_column_value' => 'PC_ProductCategoryClone',
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
    'relationship_name' => 'pc_productcategoryclone_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pc_productcategoryclone_following' => 
  array (
    'name' => 'pc_productcategoryclone_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PC_ProductCategoryClone',
    'rhs_table' => 'pc_productcategoryclone',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'PC_ProductCategoryClone',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pc_productcategoryclone_favorite' => 
  array (
    'name' => 'pc_productcategoryclone_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PC_ProductCategoryClone',
    'rhs_table' => 'pc_productcategoryclone',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'PC_ProductCategoryClone',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pc_productcategoryclone_assigned_user' => 
  array (
    'name' => 'pc_productcategoryclone_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PC_ProductCategoryClone',
    'rhs_table' => 'pc_productcategoryclone',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'pc_productcategoryclone_in_incentives_1' => 
  array (
    'name' => 'pc_productcategoryclone_in_incentives_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'pc_productcategoryclone_in_incentives_1' => 
      array (
        'lhs_module' => 'PC_ProductCategoryClone',
        'lhs_table' => 'pc_productcategoryclone',
        'lhs_key' => 'id',
        'rhs_module' => 'IN_Incentives',
        'rhs_table' => 'in_incentives',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'pc_productcategoryclone_in_incentives_1_c',
        'join_key_lhs' => 'pc_productcd98ryclone_ida',
        'join_key_rhs' => 'pc_productcategoryclone_in_incentives_1in_incentives_idb',
      ),
    ),
    'table' => 'pc_productcategoryclone_in_incentives_1_c',
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
      'pc_productcd98ryclone_ida' => 
      array (
        'name' => 'pc_productcd98ryclone_ida',
        'type' => 'id',
      ),
      'pc_productcategoryclone_in_incentives_1in_incentives_idb' => 
      array (
        'name' => 'pc_productcategoryclone_in_incentives_1in_incentives_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_pc_productcategoryclone_in_incentives_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pc_productcategoryclone_in_incentives_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'pc_productcd98ryclone_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pc_productcategoryclone_in_incentives_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'pc_productcategoryclone_in_incentives_1in_incentives_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'pc_productcategoryclone_in_incentives_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'pc_productcategoryclone_in_incentives_1in_incentives_idb',
        ),
      ),
    ),
    'lhs_module' => 'PC_ProductCategoryClone',
    'lhs_table' => 'pc_productcategoryclone',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'pc_productcategoryclone_in_incentives_1_c',
    'join_key_lhs' => 'pc_productcd98ryclone_ida',
    'join_key_rhs' => 'pc_productcategoryclone_in_incentives_1in_incentives_idb',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_in_incentives_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'pc_productcategoryclone_meetings_1' => 
  array (
    'name' => 'pc_productcategoryclone_meetings_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'pc_productcategoryclone_meetings_1' => 
      array (
        'lhs_module' => 'PC_ProductCategoryClone',
        'lhs_table' => 'pc_productcategoryclone',
        'lhs_key' => 'id',
        'rhs_module' => 'Meetings',
        'rhs_table' => 'meetings',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'pc_productcategoryclone_meetings_1_c',
        'join_key_lhs' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
        'join_key_rhs' => 'pc_productcategoryclone_meetings_1meetings_idb',
      ),
    ),
    'table' => 'pc_productcategoryclone_meetings_1_c',
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
      'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida' => 
      array (
        'name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
        'type' => 'id',
      ),
      'pc_productcategoryclone_meetings_1meetings_idb' => 
      array (
        'name' => 'pc_productcategoryclone_meetings_1meetings_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_pc_productcategoryclone_meetings_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pc_productcategoryclone_meetings_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pc_productcategoryclone_meetings_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'pc_productcategoryclone_meetings_1meetings_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'pc_productcategoryclone_meetings_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'pc_productcategoryclone_meetings_1meetings_idb',
        ),
      ),
    ),
    'lhs_module' => 'PC_ProductCategoryClone',
    'lhs_table' => 'pc_productcategoryclone',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'pc_productcategoryclone_meetings_1_c',
    'join_key_lhs' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
    'join_key_rhs' => 'pc_productcategoryclone_meetings_1meetings_idb',
    'readonly' => true,
    'relationship_name' => 'pc_productcategoryclone_meetings_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'pc_productcategoryclone_opportunities_1' => 
  array (
    'rhs_label' => 'Opportunities',
    'lhs_label' => 'Product Category Clone',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'PC_ProductCategoryClone',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'pc_productcategoryclone_opportunities_1',
  ),
);