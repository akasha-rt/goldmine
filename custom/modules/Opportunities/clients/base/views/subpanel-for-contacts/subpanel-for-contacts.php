<?php
// created: 2022-12-12 04:12:11
$viewdefs['Opportunities']['base']['view']['subpanel-for-contacts'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'default' => true,
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'default' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'name' => 'account_name',
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_STRAT_PROD_LINE',
          'enabled' => true,
          'name' => 'strat_prod_line_c',
        ),
        3 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_PROD_GROUP',
          'enabled' => true,
          'name' => 'prod_group_c',
        ),
        4 => 
        array (
          'name' => 'sales_stage',
          'default' => true,
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'type' => 'enum',
        ),
        5 => 
        array (
          'name' => 'date_closed',
          'default' => true,
          'label' => 'LBL_LIST_DATE_CLOSED',
          'enabled' => true,
          'type' => 'date',
        ),
        6 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'name' => 'amount_usdollar',
          'type' => 'currency',
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'default' => true,
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
        8 => 
        array (
          'type' => 'relate',
          'default' => true,
          'link' => true,
          'target_module' => 'Users',
          'target_record_key' => 'user_id_c',
          'label' => 'LBL_SPECIALIST',
          'enabled' => true,
          'name' => 'specialist_c',
        ),
        9 => 
        array (
          'type' => 'relate',
          'default' => true,
          'link' => true,
          'target_module' => 'Accounts',
          'target_record_key' => 'account_id_c',
          'label' => 'LBL_DISTRIBUTOR',
          'enabled' => true,
          'name' => 'distributor_c',
        ),
        10 => 
        array (
          'name' => 'sales_status',
          'readonly' => true,
        ),
        11 => 
        array (
          'name' => 'service_start_date',
          'type' => 'date-cascade',
          'label' => 'LBL_SERVICE_START_DATE',
          'disable_field' => 'service_open_revenue_line_items',
          'related_fields' => 
          array (
            0 => 'service_open_revenue_line_items',
          ),
        ),
        12 => 
        array (
          'name' => 'service_duration',
          'type' => 'fieldset-cascade',
          'label' => 'LBL_SERVICE_DURATION',
          'inline' => true,
          'show_child_labels' => false,
          'css_class' => 'service-duration-field',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'service_duration_value',
              'label' => 'LBL_SERVICE_DURATION_VALUE',
            ),
            1 => 
            array (
              'name' => 'service_duration_unit',
              'label' => 'LBL_SERVICE_DURATION_UNIT',
            ),
          ),
          'orderBy' => 'service_duration_unit',
          'related_fields' => 
          array (
            0 => 'service_duration_value',
            1 => 'service_duration_unit',
            2 => 'service_open_flex_duration_rlis',
          ),
          'disable_field' => 'service_open_flex_duration_rlis',
          'default' => false,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);