<?php
// created: 2019-12-04 15:55:17
$viewdefs['Leads']['base']['view']['subpanel-for-contacts-contacts_leads_1'] = array (
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
          'name' => 'name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'primary_address_city',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'primary_address_state',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
          'name' => 'lead_source',
        ),
        5 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'name' => 'phone_work',
        ),
        6 => 
        array (
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => true,
          'name' => 'email',
        ),
        7 => 
        array (
          'name' => 'lead_source_description',
          'label' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        8 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'fa-eye',
        'acl_action' => 'view',
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'fa-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
      ),
      2 => 
      array (
        'type' => 'convertbutton',
        'name' => 'lead_convert_button',
        'label' => 'LBL_CONVERT_BUTTON_LABEL',
        'acl_action' => 'edit',
      ),
      3 => 
      array (
        'type' => 'unlink-action',
        'icon' => 'fa-chain-broken',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);