<?php
// created: 2022-12-12 04:12:10
$viewdefs['Accounts']['mobile']['view']['edit'] = array (
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
          'name' => 'account_number_c',
          'label' => 'LBL_ACCOUNT_NUMBER',
        ),
        4 => 
        array (
          'name' => 'oracle_account_name_c',
          'label' => 'LBL_ORACLE_ACCOUNT_NAME',
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
        8 => 'billing_address_city',
        9 => 'billing_address_state',
        10 => 'billing_address_postalcode',
        11 => 'billing_address_country',
        12 => 'assigned_user_name',
        13 => 'team_name',
        14 => 'email',
        15 => 'tag',
      ),
    ),
  ),
);