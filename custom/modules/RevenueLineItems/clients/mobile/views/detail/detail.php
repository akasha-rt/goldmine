<?php
// created: 2022-12-12 04:12:12
$viewdefs['RevenueLineItems']['mobile']['view']['detail'] = array (
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
    ),
    'useTabs' => false,
  ),
  'panels' => 
  array (
    0 => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => '0',
      'label' => '0',
      'columns' => '1',
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 'name',
        1 => 'opportunity_name',
        2 => 'account_name',
        3 => 'product_template_name',
        4 => 'likely_case',
        5 => 'date_closed',
        6 => 
        array (
          'name' => 'status',
          'comment' => 'Product status (ex: Quoted, Ordered, Shipped)',
          'label' => 'LBL_STATUS',
        ),
        7 => 'tag',
        8 => 'assigned_user_name',
        9 => 'team_name',
      ),
    ),
  ),
);