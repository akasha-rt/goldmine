<?php
// created: 2022-12-12 04:12:11
$viewdefs['ForecastWorksheets']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'commit_stage',
          'label' => 'LBL_FORECAST',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'probability',
          ),
          'click_to_edit' => true,
          'sortable' => true,
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_REVENUELINEITEM_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'parent_id',
            1 => 'parent_type',
            2 => 'parent_deleted',
            3 => 'name',
          ),
          'id' => 'PARENT_ID',
          'link' => true,
          'sortable' => true,
        ),
        2 => 
        array (
          'name' => 'opportunity_name',
          'label' => 'LBL_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'opportunity_id',
          ),
          'id' => 'OPPORTUNITY_ID',
          'link' => true,
          'sortable' => true,
        ),
        3 => 
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
          'sortable' => true,
        ),
        4 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'date_closed_timestamp',
          ),
          'click_to_edit' => true,
          'sortable' => true,
        ),
        5 => 
        array (
          'name' => 'product_template_name',
          'label' => 'LBL_PRODUCT',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'product_template_id',
          ),
          'id' => 'PRODUCT_TEMPLATE_ID',
          'link' => true,
          'sortable' => true,
        ),
        6 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_SALES_STAGE',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'probability',
          ),
          'click_to_edit' => true,
          'sortable' => true,
        ),
        7 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_OW_PROBABILITY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'sales_stage',
          ),
          'align' => 'right',
          'sortable' => true,
        ),
        8 => 
        array (
          'name' => 'worst_case',
          'label' => 'LBL_WORST',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'base_rate',
            1 => 'currency_id',
          ),
          'align' => 'right',
          'currency_format' => true,
          'click_to_edit' => true,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'sortable' => true,
        ),
        9 => 
        array (
          'name' => 'likely_case',
          'label' => 'LBL_LIKELY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'base_rate',
            1 => 'currency_id',
            2 => 'best_case',
            3 => 'worst_case',
          ),
          'align' => 'right',
          'currency_format' => true,
          'click_to_edit' => true,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'sortable' => true,
        ),
        10 => 
        array (
          'name' => 'best_case',
          'label' => 'LBL_BEST',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'base_rate',
            1 => 'currency_id',
          ),
          'align' => 'right',
          'currency_format' => true,
          'click_to_edit' => true,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'sortable' => true,
        ),
      ),
    ),
  ),
);