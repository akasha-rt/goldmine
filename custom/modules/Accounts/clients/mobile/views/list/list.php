<?php
// created: 2022-12-12 04:12:10
$viewdefs['Accounts']['mobile']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'account_type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_MEMBER_OF',
          'enabled' => true,
          'id' => 'PARENT_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'account_number_c',
          'label' => 'LBL_ACCOUNT_NUMBER',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'phone_office',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'shipping_address_street',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'shipping_address_city',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'shipping_address_state',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'shipping_address_postalcode',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'shipping_address_country',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'team_name',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'billing_address_street',
          'enabled' => true,
          'default' => false,
        ),
        12 => 
        array (
          'name' => 'billing_address_city',
          'enabled' => true,
          'default' => false,
        ),
        13 => 
        array (
          'name' => 'billing_address_state',
          'enabled' => true,
          'default' => false,
        ),
        14 => 
        array (
          'name' => 'billing_address_postalcode',
          'enabled' => true,
          'default' => false,
        ),
        15 => 
        array (
          'name' => 'billing_address_country',
          'enabled' => true,
          'default' => false,
        ),
        16 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => false,
        ),
      ),
    ),
  ),
);