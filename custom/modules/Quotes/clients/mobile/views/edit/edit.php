<?php
// created: 2023-03-21 17:36:05
$viewdefs['Quotes']['mobile']['view']['edit'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 'quote_num',
        1 => 
        array (
          'name' => 'name',
          'events' => 
          array (
            'keyup' => 'update:quote',
          ),
          'related_fields' => 
          array (
            0 => 
            array (
              'name' => 'bundles',
              'fields' => 
              array (
                0 => 'id',
                1 => 'bundle_stage',
                2 => 'currency_id',
                3 => 'base_rate',
                4 => 'currencies',
                5 => 'name',
                6 => 'deal_tot',
                7 => 'deal_tot_usdollar',
                8 => 'deal_tot_discount_percentage',
                9 => 'new_sub',
                10 => 'new_sub_usdollar',
                11 => 'position',
                12 => 'related_records',
                13 => 'shipping',
                14 => 'shipping_usdollar',
                15 => 'subtotal',
                16 => 'subtotal_usdollar',
                17 => 'tax',
                18 => 'tax_usdollar',
                19 => 'taxrate_id',
                20 => 'team_count',
                21 => 'team_count_link',
                22 => 'team_name',
                23 => 'taxable_subtotal',
                24 => 'total',
                25 => 'total_usdollar',
                26 => 'default_group',
                27 => 
                array (
                  'name' => 'product_bundle_items',
                  'fields' => 
                  array (
                    0 => 'quantity',
                    1 => 'product_template_name',
                    2 => 'mft_part_num',
                    3 => 'description',
                    4 => 'discount_price',
                    5 => 'discount_amount',
                    6 => 'total_amount',
                    7 => 'base_rate',
                    8 => 'deal_calc',
                    9 => 'discount_amount',
                    10 => 'discount_price',
                    11 => 'discount_select',
                    12 => 'quantity',
                    13 => 'subtotal',
                    14 => 'tax_class',
                    15 => 'total_amount',
                    16 => 'service_duration_value',
                    17 => 'service_duration_unit',
                    18 => 'catalog_service_duration_value',
                    19 => 'catalog_service_duration_unit',
                    20 => 'description',
                    21 => 'currency_id',
                    22 => 'account_id',
                    23 => 'quote_id',
                    24 => 'name',
                    25 => 'position',
                    26 => 'product_template_id',
                    27 => 'product_template_name',
                  ),
                  'max_num' => -1,
                ),
              ),
              'max_num' => -1,
              'order_by' => 'position:asc',
            ),
          ),
        ),
        2 => 'billing_account_name',
        3 => 'shipping_account_name',
        4 => 'quote_stage',
        5 => 'total',
        6 => 'date_quote_expected_closed',
        7 => 'quote_type',
        8 => 'description',
        9 => 'tag',
        10 => 'assigned_user_name',
        11 => 'team_name',
      ),
    ),
  ),
);