<?php
// created: 2020-05-08 12:07:19
$viewdefs['Accounts']['base']['view']['subpanel-for-accounts-members'] = array (
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
          'default' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
          'name' => 'billing_address_city',
        ),
        2 => 
        array (
          'name' => 'shipping_address_street',
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'shipping_address_city',
          'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'shipping_address_state',
          'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'shipping_address_country',
          'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'name' => 'phone_office',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);