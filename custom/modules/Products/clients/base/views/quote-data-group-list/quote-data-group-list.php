<?php
// created: 2023-03-21 17:36:05
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
          'type' => 'float',
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
          'type' => 'text',
        ),
        4 => 
        array (
          'name' => 'description',
          'type' => 'textarea',
          'label' => 'LBL_DESCRIPTION',
          'labelModule' => 'Products',
        ),
        5 => 
        array (
          'name' => 'discount_price',
          'label' => 'Unit Price',
          'labelModule' => 'Products',
          'type' => 'currency',
        ),
        6 => 
        array (
          'name' => 'discount_amount',
          'type' => 'discount-amount',
          'label' => 'Discount Amount Value',
          'labelModule' => 'Products',
        ),
        7 => 
        array (
          'name' => 'total_amount',
          'label' => 'Line Item Total',
          'labelModule' => 'Products',
          'type' => 'currency',
        ),
      ),
    ),
  ),
);