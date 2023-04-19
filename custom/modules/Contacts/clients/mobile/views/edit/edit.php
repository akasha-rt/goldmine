<?php
// created: 2022-12-12 04:12:11
$viewdefs['Contacts']['mobile']['view']['edit'] = array (
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
        0 => 
        array (
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="15" maxlength="25" type="text" value="{$fields.first_name.value}">',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
        2 => 'title',
        3 => 
        array (
          'name' => 'contact_type_c',
          'studio' => 'visible',
          'label' => 'LBL_CONTACT_TYPE',
        ),
        4 => 'phone_work',
        5 => 'phone_mobile',
        6 => 'phone_home',
        7 => 'primary_address_street',
        8 => 'primary_address_city',
        9 => 'primary_address_state',
        10 => 'primary_address_postalcode',
        11 => 'primary_address_country',
        12 => 'account_name',
        13 => 'assigned_user_name',
        14 => 'team_name',
        15 => 'email',
        16 => 'tag',
      ),
    ),
  ),
);