<?php
// created: 2023-02-15 17:26:33
$viewdefs['RevenueLineItems']['base']['view']['subpanel-for-revenuelineitems-parent_rlis_link'] = array (
  'favorite' => true,
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
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'opportunity_name',
          'sortable' => false,
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'account_name',
          'readonly' => true,
          'sortable' => false,
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'sales_stage',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'likely_case',
          'label' => 'LBL_LIKELY',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'probability',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'date_closed',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'commit_stage',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'product_template_name',
          'sortable' => false,
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'category_name',
          'sortable' => false,
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'quantity',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'quote_name',
          'label' => 'LBL_ASSOCIATED_QUOTE',
          'related_fields' => 
          array (
            0 => 'quote_id',
          ),
          'readonly' => true,
          'bwcLink' => true,
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'assigned_user_name',
          'sortable' => false,
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);