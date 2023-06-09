<?php
// created: 2020-10-21 02:45:53
$viewdefs['Opportunities']['base']['view']['subpanel-for-accounts-opportunities'] = array (
  'type' => 'subpanel-list',
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
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
          'id' => 'ACCOUNT_ID',
          'link' => true,
          'sortable' => false,
        ),
        2 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
        ),
        3 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
        ),
        4 => 
        array (
          'name' => 'amount',
          'label' => 'LBL_LIKELY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_format' => true,
          'type' => 'currency',
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        5 => 
        array (
          'name' => 'strat_prod_line_c',
          'label' => 'LBL_STRAT_PROD_LINE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'accounts_opportunities_1_name',
          'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'default' => true,
          'id' => 'ACCOUNTS_OPPORTUNITIES_1ACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
        ),
        7 => 
        array (
          'name' => 'contacts_opportunities_1_name',
          'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
          'enabled' => true,
          'default' => true,
          'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
          'link' => true,
          'sortable' => false,
        ),
        8 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'assigned_user_id',
          ),
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
        ),
        9 => 
        array (
          'name' => 'service_start_date',
          'label' => 'LBL_SERVICE_START_DATE',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'service_open_revenue_line_items',
          ),
          'type' => 'date-cascade',
          'disable_field' => 'service_open_revenue_line_items',
        ),
        10 => 
        array (
          'name' => 'sales_status',
          'label' => 'LBL_SALES_STATUS',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
      ),
    ),
  ),
);