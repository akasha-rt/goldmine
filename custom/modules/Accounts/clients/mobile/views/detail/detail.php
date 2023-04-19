<?php
// created: 2022-12-12 04:12:10
$viewdefs['Accounts']['mobile']['view']['detail'] = array (
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
    'tabDefs' => 
    array (
      'LBL_PANEL_DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_PANEL_DEFAULT',
      'columns' => '1',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'account_type',
          'comment' => 'The Company is of this type',
          'label' => 'LBL_TYPE',
        ),
        2 => 
        array (
          'name' => 'account_status_c',
          'label' => 'LBL_ACCOUNT_STATUS',
        ),
        3 => 
        array (
          'name' => 'oracle_account_name_c',
          'label' => 'LBL_ORACLE_ACCOUNT_NAME',
        ),
        4 => 
        array (
          'name' => 'account_number_c',
          'label' => 'LBL_ACCOUNT_NUMBER',
        ),
        5 => 'phone_office',
        6 => 
        array (
          'name' => 'website',
          'displayParams' => 
          array (
            'type' => 'link',
          ),
        ),
        7 => 'billing_address_street',
        8 => 'billing_address_state',
        9 => 'billing_address_postalcode',
        10 => 'billing_address_country',
        11 => 'shipping_address_street',
        12 => 'shipping_address_city',
        13 => 'shipping_address_state',
        14 => 'shipping_address_postalcode',
        15 => 'shipping_address_country',
        16 => 'assigned_user_name',
        17 => 'team_name',
        18 => 'email',
        19 => 'tag',
      ),
    ),
  ),
);