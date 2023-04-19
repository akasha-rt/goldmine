<?php
// created: 2022-12-12 04:12:11
$viewdefs['Contacts']['mobile']['view']['detail'] = array (
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
      'fields' => 
      array (
        0 => 'full_name',
        1 => 'title',
        2 => 
        array (
          'name' => 'contact_type_c',
          'studio' => 'visible',
          'label' => 'LBL_CONTACT_TYPE',
        ),
        3 => 'account_name',
        4 => 'phone_work',
        5 => 'phone_mobile',
        6 => 'phone_home',
        7 => 'primary_address_street',
        8 => 'primary_address_city',
        9 => 'primary_address_state',
        10 => 'primary_address_postalcode',
        11 => 'primary_address_country',
        12 => 'alt_address_street',
        13 => 'alt_address_city',
        14 => 'alt_address_state',
        15 => 'alt_address_postalcode',
        16 => 'alt_address_country',
        17 => 'assigned_user_name',
        18 => 'picture',
        19 => 'team_name',
        20 => 'email',
        21 => 'tag',
      ),
    ),
  ),
);