<?php
// created: 2022-12-12 04:12:11
$viewdefs['ProductTemplates']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'mft_part_num',
          'label' => 'LBL_MFT_PART_NUM',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'link' => true,
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'type_name',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'category_name',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'status',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'qty_in_stock',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
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
          'default' => true,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
        ),
        7 => 
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
          'convertToBase' => true,
          'showTransactionalAmount' => true,
        ),
        8 => 
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
          'convertToBase' => true,
          'showTransactionalAmount' => true,
        ),
        9 => 
        array (
          'name' => 'service',
          'default' => true,
          'enabled' => true,
        ),
        10 => 
        array (
          'name' => 'service_duration',
          'type' => 'fieldset',
          'css_class' => 'service-duration-field',
          'label' => 'LBL_SERVICE_DURATION',
          'inline' => true,
          'show_child_labels' => false,
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
          'default' => true,
          'enabled' => true,
        ),
        11 => 
        array (
          'name' => 'active_status',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAMS',
          'enabled' => true,
          'id' => 'TEAM_ID',
          'link' => true,
          'sortable' => false,
          'default' => false,
        ),
        13 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'assigned_user_id',
          ),
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'default' => false,
        ),
      ),
    ),
  ),
);