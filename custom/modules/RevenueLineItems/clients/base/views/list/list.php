<?php
$viewdefs['RevenueLineItems'] = 
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
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'opportunity_name',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'readonly' => true,
                'enabled' => true,
                'default' => true,
                'sortable' => true,
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
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                  2 => 'total_amount',
                  3 => 'quantity',
                  4 => 'discount_amount',
                  5 => 'discount_price',
                ),
                'convertToBase' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
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
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'category_name',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'standarddiscount_c',
                'label' => 'LBL_STANDARDDISCOUNT',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'assigned_user_name',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'pricelistdate_c',
                'label' => 'LBL_PRICELISTDATE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              15 => 
              array (
                'name' => 'netpriceusd_c',
                'label' => 'LBL_NETPRICEUSD',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => false,
                'currency_format' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
