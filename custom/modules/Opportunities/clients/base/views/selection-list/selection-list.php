<?php
// created: 2022-12-12 04:12:11
$viewdefs['Opportunities']['base']['view']['selection-list'] = array (
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
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
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
          'label' => 'LBL_SALES_STAGE',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
        3 => 
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
          'readonly' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        4 => 
        array (
          'name' => 'tag',
          'label' => 'LBL_TAGS',
          'enabled' => true,
          'default' => true,
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
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'date_closed_timestamp',
          ),
          'readonly' => true,
        ),
        7 => 
        array (
          'name' => 'service_start_date',
          'label' => 'LBL_SERVICE_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'sales_status',
          'label' => 'LBL_SALES_STATUS',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
        9 => 
        array (
          'name' => 'accounts_opportunities_1_name',
          'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'id' => 'ACCOUNTS_OPPORTUNITIES_1ACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'contacts_opportunities_1_name',
          'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
          'enabled' => true,
          'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'opportunity_type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => false,
        ),
        12 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => false,
        ),
        13 => 
        array (
          'name' => 'next_step',
          'label' => 'LBL_NEXT_STEP',
          'enabled' => true,
          'default' => false,
        ),
        14 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'default' => false,
          'id' => 'CREATED_BY',
          'link' => true,
          'readonly' => true,
        ),
        15 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
          'type' => 'teamset',
        ),
        16 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => false,
          'related_fields' => 
          array (
            0 => 'assigned_user_id',
          ),
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
        ),
        17 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'default' => false,
          'id' => 'MODIFIED_USER_ID',
          'link' => true,
          'readonly' => true,
        ),
        18 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        19 => 
        array (
          'name' => 'commit_stage',
          'label' => 'LBL_COMMIT_STAGE_FORECAST',
          'enabled' => true,
          'default' => true,
          'type' => 'enum-cascade',
          'disable_field' => 'closed_won_revenue_line_items',
          'disable_positive' => true,
          'related_fields' => 
          array (
            0 => 'probability',
            1 => 'closed_won_revenue_line_items',
          ),
        ),
      ),
    ),
  ),
);