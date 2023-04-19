<?php
// created: 2022-12-12 04:12:12
$viewdefs['RevenueLineItems']['mobile']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'default' => true,
          'enabled' => true,
        ),
        1 => 
        array (
          'name' => 'product_template_name',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'date_closed_timestamp',
          ),
          'default' => true,
        ),
      ),
    ),
  ),
);