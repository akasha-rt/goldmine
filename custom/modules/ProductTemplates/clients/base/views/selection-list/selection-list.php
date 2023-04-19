<?php
// created: 2021-12-01 04:15:31
$viewdefs['ProductTemplates']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'link' => true,
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'type_name',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'category_name',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'status',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'list_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'list_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'discount_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'discount_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'qty_in_stock',
          'enabled' => true,
          'default' => false,
        ),
        7 => 
        array (
          'name' => 'cost_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'cost_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => false,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
        ),
        8 => 
        array (
          'name' => 'active_status',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);