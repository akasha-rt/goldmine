<?php
$viewdefs['ProductTemplates'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'product-catalog-dashlet-drawer-record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'view',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'button',
            'event' => 'button:add_to_quote_button:click',
            'name' => 'add_to_quote_button',
            'label' => 'LBL_ADD_TO_QUOTE_BUTTON',
            'css_class' => 'btn btn-primary',
            'showOn' => 'view',
            'showOnModules' => 
            array (
              'Quotes' => 
              array (
                0 => 'create',
                1 => 'record',
              ),
              'Opportunities' => 
              array (
                0 => 'create',
                1 => 'record',
              ),
            ),
            'events' => 
            array (
              'click' => 'button:add_to_quote_button:click',
            ),
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'status',
              1 => 
              array (
                'name' => 'website',
                'type' => 'url',
              ),
              2 => 'active_status',
              3 => 'date_available',
              4 => 'tax_class',
              5 => 'qty_in_stock',
              6 => 'category_name',
              7 => 'manufacturer_name',
              8 => 'mft_part_num',
              9 => 'service',
              10 => 'renewable',
              11 => 
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
              ),
              12 => 
              array (
                'name' => 'lock_duration',
              ),
              13 => 
              array (
              ),
              14 => 
              array (
                'name' => 'vendor_part_num',
                'span' => 12,
              ),
              15 => 'weight',
              16 => 'type_name',
              17 => 
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
              18 => 'cost_usdollar',
              19 => 'date_cost_price',
              20 => 
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
              21 => 'discount_usdollar',
              22 => 
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
              23 => 'list_usdollar',
              24 => 
              array (
                'name' => 'pricing_formula',
                'related_fields' => 
                array (
                  0 => 'pricing_factor',
                ),
              ),
              25 => 
              array (
                'name' => 'freight_insurance',
                'label' => 'LBL_FREIGHT_INSURANCE',
              ),
              26 => 
              array (
                'name' => 'shipping_cost',
                'label' => 'LBL_SHIPPING_COST',
              ),
              27 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              28 => 
              array (
                'readonly' => false,
                'name' => 'model_description_c',
                'studio' => 'visible',
                'label' => 'LBL_MODEL_DESCRIPTION',
              ),
              29 => 
              array (
              ),
              30 => 'support_name',
              31 => 'support_description',
              32 => 'support_contact',
              33 => 'support_term',
              34 => 
              array (
                'name' => 'team_name',
              ),
              35 => 
              array (
              ),
              36 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
