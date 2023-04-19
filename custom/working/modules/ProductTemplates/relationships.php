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
  'producttemplates_accounts_1' => 
  array (
    'name' => 'producttemplates_accounts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'producttemplates_accounts_1' => 
      array (
        'lhs_module' => 'ProductTemplates',
        'lhs_table' => 'product_templates',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'producttemplates_accounts_1_c',
        'join_key_lhs' => 'producttemplates_accounts_1producttemplates_ida',
        'join_key_rhs' => 'producttemplates_accounts_1accounts_idb',
      ),
    ),
    'table' => 'producttemplates_accounts_1_c',
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
      'producttemplates_accounts_1producttemplates_ida' => 
      array (
        'name' => 'producttemplates_accounts_1producttemplates_ida',
        'type' => 'id',
      ),
      'producttemplates_accounts_1accounts_idb' => 
      array (
        'name' => 'producttemplates_accounts_1accounts_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_producttemplates_accounts_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_producttemplates_accounts_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'producttemplates_accounts_1producttemplates_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_producttemplates_accounts_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'producttemplates_accounts_1accounts_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'producttemplates_accounts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'producttemplates_accounts_1producttemplates_ida',
          1 => 'producttemplates_accounts_1accounts_idb',
        ),
      ),
    ),
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'producttemplates_accounts_1_c',
    'join_key_lhs' => 'producttemplates_accounts_1producttemplates_ida',
    'join_key_rhs' => 'producttemplates_accounts_1accounts_idb',
    'readonly' => true,
    'relationship_name' => 'producttemplates_accounts_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'producttemplates_modified_user' => 
  array (
    'name' => 'producttemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'producttemplates_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'producttemplates_created_by' => 
  array (
    'name' => 'producttemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'producttemplates_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'producttemplate_activities' => 
  array (
    'name' => 'producttemplate_activities',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
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
    'relationship_role_column_value' => 'ProductTemplates',
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
    'relationship_name' => 'producttemplate_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'product_templates_product_categories' => 
  array (
    'name' => 'product_templates_product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'product_templates_product_categories',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'producttemplates_following' => 
  array (
    'name' => 'producttemplates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductTemplates',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'producttemplates_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'producttemplates_favorite' => 
  array (
    'name' => 'producttemplates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProductTemplates',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'producttemplates_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'producttemplates_assigned_user' => 
  array (
    'name' => 'producttemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'producttemplates_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'product_templates' => 
  array (
    'name' => 'product_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'product_templates',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'purchases_producttemplates' => 
  array (
    'name' => 'purchases_producttemplates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Purchases',
    'rhs_table' => 'purchases',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'purchases_producttemplates',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'purhcasedlineitem_templates' => 
  array (
    'name' => 'purhcasedlineitem_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'PurchasedLineItems',
    'rhs_table' => 'purchased_line_items',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'purhcasedlineitem_templates',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'revenuelineitem_templates' => 
  array (
    'name' => 'revenuelineitem_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'revenuelineitem_templates',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'producttemplates_pt_portalteams_1' => 
  array (
    'rhs_label' => 'Portal Teams',
    'lhs_label' => 'Product Number',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ProductTemplates',
    'rhs_module' => 'PT_PortalTeams',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'producttemplates_pt_portalteams_1',
  ),
);