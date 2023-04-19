<?php
// created: 2023-01-03 13:58:23
$viewdefs['Products']['base']['view']['quote-data-group-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'products_quote_data_group_list',
      'label' => 'LBL_PRODUCTS_QUOTE_DATA_LIST',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'line_num',
          'label' => NULL,
          'widthClass' => 'cell-xsmall',
          'css_class' => 'line_num tcenter',
          'type' => 'line-num',
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'quantity',
          'label' => 'Quantity',
          'labelModule' => 'Products',
        ),
        2 => 
        array (
          'name' => 'product_template_name',
          'type' => 'quote-data-relate',
          'label' => 'Product',
          'labelModule' => 'Products',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'mft_part_num',
          'label' => 'Part Number',
          'labelModule' => 'Products',
        ),
        4 => 
        array (
          'name' => 'description',
          'type' => 'text',
          'label' => 'LBL_DESCRIPTION',
          'labelModule' => 'Products',
        ),
        5 => 
        array (
          'name' => 'discount_usdollar',
          'type' => 'currency',
          'label' => 'LBL_DISCOUNT_USDOLLAR',
          'labelModule' => 'Products',
        ),
        6 => 
        array (
          'name' => 'discount_field',
          'type' => 'fieldset',
          'label' => 'Discount Amount',
          'labelModule' => 'Products',
          'css_class' => 'undefined discount-field quote-discount-percent',
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
              'name' => 'discount_select',
              'type' => 'discount-select',
              'options' => 
              array (
              ),
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'total_amount',
          'label' => 'Line Item Total',
          'labelModule' => 'Products',
        ),
        8 => 
        array (
          'name' => 'assigned_user_name',
          'type' => 'relate',
          'label' => 'LBL_ASSIGNED_TO',
          'id_name' => 'assigned_user_id',
          'labelModule' => 'Products',
        ),
        9 => 
        array (
          'name' => 'created_by_name',
          'type' => 'relate',
          'label' => 'LBL_CREATED',
          'id_name' => 'created_by',
          'labelModule' => 'Products',
        ),
        10 => 
        array (
          'name' => 'cost_price',
          'type' => 'currency',
          'label' => 'LBL_COST_PRICE',
          'labelModule' => 'Products',
        ),
      ),
    ),
  ),
);