<?php
// created: 2019-08-06 22:25:33
$viewdefs['Leads']['base']['view']['subpanel-for-contacts-leads'] = array (
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
          'label' => 'LBL_LIST_REFERED_BY',
          'enabled' => true,
          'default' => true,
          'name' => 'refered_by',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
          'name' => 'lead_source',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'name' => 'phone_work',
        ),
        5 => 
        array (
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => true,
          'name' => 'email',
        ),
        6 => 
        array (
          'name' => 'lead_source_description',
          'label' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
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
        'name' => 'unlink_button',
        'icon' => 'fa-chain-broken',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);