<?php
// created: 2023-03-21 17:36:06
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-footer'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_quote_data_grand_totals_footer',
      'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_FOOTER',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'new_sub',
          'type' => 'currency',
        ),
        1 => 
        array (
          'name' => 'shipping',
          'type' => 'quote-footer-currency',
          'css_class' => 'quote-footer-currency',
          'default' => '0.00',
        ),
        2 => 
        array (
          'name' => 'total',
          'type' => 'currency',
          'css_class' => 'grand-total',
        ),
      ),
    ),
  ),
);