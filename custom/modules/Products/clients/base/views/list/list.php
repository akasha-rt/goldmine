<?php
$viewdefs['Products'] = 
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
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'revenuelineitem_name',
                'label' => 'LBL_REVENUELINEITEM_NAME',
                'enabled' => true,
                'id' => 'REVENUELINEITEM_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'discount_amount',
                'label' => 'LBL_DISCOUNT_AMOUNT',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                  2 => 'discount_select',
                ),
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'quote_name',
                'link' => true,
                'label' => 'LBL_ASSOCIATED_QUOTE',
                'related_fields' => 
                array (
                  0 => 'quote_id',
                ),
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'quantity',
                'default' => true,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'discount_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'discount_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'cost_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'cost_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'default' => true,
                'enabled' => true,
              ),
              9 => 
              array (
                'name' => 'discount_field',
                'type' => 'fieldset',
                'css_class' => 'discount-field',
                'label' => 'LBL_DISCOUNT_AMOUNT',
                'show_child_labels' => false,
                'sortable' => false,
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'discount_amount',
                    'label' => 'LBL_DISCOUNT_AMOUNT',
                    'type' => 'discount-amount',
                    'discountFieldName' => 'discount_select',
                    'related_fields' => 
                    array (
                      0 => 'currency_id',
                    ),
                    'convertToBase' => true,
                    'base_rate_field' => 'base_rate',
                    'showTransactionalAmount' => true,
                  ),
                  1 => 
                  array (
                    'type' => 'discount-select',
                    'name' => 'discount_select',
                    'options' => 
                    array (
                    ),
                  ),
                ),
                'default' => true,
                'enabled' => true,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'default' => true,
                'enabled' => true,
              ),
              11 => 
              array (
                'name' => 'service',
                'default' => true,
                'enabled' => true,
              ),
              12 => 
              array (
                'name' => 'add_on_to_name',
                'type' => 'add_on_to',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
