<?php
$viewdefs['ProductTemplates'] = 
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
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'list_usdollar',
                'label' => 'LBL_LIST_USDOLLAR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => true,
                'currency_format' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'status',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'netpricecan_c',
                'label' => 'LBL_NETPRICECAN',
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
              8 => 
              array (
                'name' => 'listpricemex_c',
                'label' => 'LBL_LISTPRICEMEX',
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
              9 => 
              array (
                'name' => 'netpricemex_c',
                'label' => 'LBL_NETPRICEMEX',
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
              10 => 
              array (
                'name' => 'qty_in_stock',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
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
              12 => 
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
              13 => 
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
              14 => 
              array (
                'name' => 'service',
                'default' => true,
                'enabled' => true,
              ),
              15 => 
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
              16 => 
              array (
                'name' => 'active_status',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
