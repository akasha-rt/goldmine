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
  'in_incentives_cc_coupon_codes' => 
  array (
    'name' => 'in_incentives_cc_coupon_codes',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'in_incentives_cc_coupon_codes' => 
      array (
        'lhs_module' => 'IN_Incentives',
        'lhs_table' => 'in_incentives',
        'lhs_key' => 'id',
        'rhs_module' => 'CC_Coupon_Codes',
        'rhs_table' => 'cc_coupon_codes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'in_incentives_cc_coupon_codes_c',
        'join_key_lhs' => 'in_incentives_cc_coupon_codesin_incentives_ida',
        'join_key_rhs' => 'in_incentives_cc_coupon_codescc_coupon_codes_idb',
      ),
    ),
    'table' => 'in_incentives_cc_coupon_codes_c',
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
      'in_incentives_cc_coupon_codesin_incentives_ida' => 
      array (
        'name' => 'in_incentives_cc_coupon_codesin_incentives_ida',
        'type' => 'id',
      ),
      'in_incentives_cc_coupon_codescc_coupon_codes_idb' => 
      array (
        'name' => 'in_incentives_cc_coupon_codescc_coupon_codes_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_in_incentives_cc_coupon_codes_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_in_incentives_cc_coupon_codes_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'in_incentives_cc_coupon_codesin_incentives_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_in_incentives_cc_coupon_codes_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'in_incentives_cc_coupon_codescc_coupon_codes_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'in_incentives_cc_coupon_codes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'in_incentives_cc_coupon_codescc_coupon_codes_idb',
        ),
      ),
    ),
    'lhs_module' => 'IN_Incentives',
    'lhs_table' => 'in_incentives',
    'lhs_key' => 'id',
    'rhs_module' => 'CC_Coupon_Codes',
    'rhs_table' => 'cc_coupon_codes',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'in_incentives_cc_coupon_codes_c',
    'join_key_lhs' => 'in_incentives_cc_coupon_codesin_incentives_ida',
    'join_key_rhs' => 'in_incentives_cc_coupon_codescc_coupon_codes_idb',
    'readonly' => true,
    'relationship_name' => 'in_incentives_cc_coupon_codes',
    'rhs_subpanel' => 'ForIn_incentivesIn_incentives_cc_coupon_codes',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'in_incentives_producttemplates' => 
  array (
    'name' => 'in_incentives_producttemplates',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'in_incentives_producttemplates' => 
      array (
        'lhs_module' => 'ProductTemplates',
        'lhs_table' => 'product_templates',
        'lhs_key' => 'id',
        'rhs_module' => 'IN_Incentives',
        'rhs_table' => 'in_incentives',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'in_incentives_producttemplates_c',
        'join_key_lhs' => 'in_incentives_producttemplatesproducttemplates_ida',
        'join_key_rhs' => 'in_incentives_producttemplatesin_incentives_idb',
      ),
    ),
    'table' => 'in_incentives_producttemplates_c',
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
      'in_incentives_producttemplatesproducttemplates_ida' => 
      array (
        'name' => 'in_incentives_producttemplatesproducttemplates_ida',
        'type' => 'id',
      ),
      'in_incentives_producttemplatesin_incentives_idb' => 
      array (
        'name' => 'in_incentives_producttemplatesin_incentives_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_in_incentives_producttemplates_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_in_incentives_producttemplates_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'in_incentives_producttemplatesproducttemplates_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_in_incentives_producttemplates_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'in_incentives_producttemplatesin_incentives_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'in_incentives_producttemplates_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'in_incentives_producttemplatesin_incentives_idb',
        ),
      ),
    ),
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'in_incentives_producttemplates_c',
    'join_key_lhs' => 'in_incentives_producttemplatesproducttemplates_ida',
    'join_key_rhs' => 'in_incentives_producttemplatesin_incentives_idb',
    'readonly' => true,
    'relationship_name' => 'in_incentives_producttemplates',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
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
  'in_incentives_modified_user' => 
  array (
    'name' => 'in_incentives_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'in_incentives_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'in_incentives_created_by' => 
  array (
    'name' => 'in_incentives_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'in_incentives_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'in_incentives_activities' => 
  array (
    'name' => 'in_incentives_activities',
    'lhs_module' => 'IN_Incentives',
    'lhs_table' => 'in_incentives',
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
    'relationship_role_column_value' => 'IN_Incentives',
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
    'relationship_name' => 'in_incentives_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'in_incentives_following' => 
  array (
    'name' => 'in_incentives_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'IN_Incentives',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'in_incentives_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'in_incentives_favorite' => 
  array (
    'name' => 'in_incentives_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'IN_Incentives',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'in_incentives_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'in_incentives_assigned_user' => 
  array (
    'name' => 'in_incentives_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IN_Incentives',
    'rhs_table' => 'in_incentives',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'in_incentives_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'in_incentives_opportunities_1' => 
  array (
    'name' => 'in_incentives_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'in_incentives_opportunities_1' => 
      array (
        'lhs_module' => 'IN_Incentives',
        'lhs_table' => 'in_incentives',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'in_incentives_opportunities_1_c',
        'join_key_lhs' => 'in_incentives_opportunities_1in_incentives_ida',
        'join_key_rhs' => 'in_incentives_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'in_incentives_opportunities_1_c',
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
      'in_incentives_opportunities_1in_incentives_ida' => 
      array (
        'name' => 'in_incentives_opportunities_1in_incentives_ida',
        'type' => 'id',
      ),
      'in_incentives_opportunities_1opportunities_idb' => 
      array (
        'name' => 'in_incentives_opportunities_1opportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_in_incentives_opportunities_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_in_incentives_opportunities_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'in_incentives_opportunities_1in_incentives_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_in_incentives_opportunities_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'in_incentives_opportunities_1opportunities_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'in_incentives_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'in_incentives_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'IN_Incentives',
    'lhs_table' => 'in_incentives',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'in_incentives_opportunities_1_c',
    'join_key_lhs' => 'in_incentives_opportunities_1in_incentives_ida',
    'join_key_rhs' => 'in_incentives_opportunities_1opportunities_idb',
    'readonly' => true,
    'relationship_name' => 'in_incentives_opportunities_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'in_incentives_meetings_1' => 
  array (
    'rhs_label' => 'Meetings',
    'lhs_label' => 'Incentives',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'IN_Incentives',
    'rhs_module' => 'Meetings',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'in_incentives_meetings_1',
  ),
);