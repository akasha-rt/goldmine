<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'link' => true,
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
                'width' => 'xlarge',
              ),
              1 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              3 => 
              array (
                'name' => 'accounts_opportunities_1_name',
                'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_OPPORTUNITIES_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'sales_stage',
                'type' => 'enum-cascade',
                'label' => 'LBL_LIST_SALES_STAGE',
                'enabled' => true,
                'default' => true,
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              5 => 
              array (
                'name' => 'contacts_opportunities_1_name',
                'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'pc_productcategoryclone_opportunities_1_name',
                'label' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_NAME_FIELD_TITLE',
                'enabled' => true,
                'id' => 'PC_PRODUCT9B3ERYCLONE_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              8 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
                'sortable' => true,
              ),
              9 => 
              array (
                'name' => 'strat_prod_line_c',
                'label' => 'LBL_STRAT_PROD_LINE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'prod_group_c',
                'label' => 'LBL_PROD_GROUP',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'next_step',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'specialist_c',
                'label' => 'LBL_SPECIALIST',
                'enabled' => true,
                'readonly' => false,
                'id' => 'USER_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'amount_usdollar',
                'label' => 'LBL_AMOUNT_USDOLLAR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => true,
                'currency_format' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'date_closed',
                'type' => 'date-cascade',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => false,
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              15 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'team_name',
                'type' => 'teamset',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'opportunity_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
