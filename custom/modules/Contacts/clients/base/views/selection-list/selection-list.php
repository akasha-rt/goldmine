<?php
// created: 2022-12-12 04:12:11
$viewdefs['Contacts']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'type' => 'fullname',
          'link' => true,
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
        ),
        2 => 
        array (
          'type' => 'enum',
          'default' => true,
          'studio' => 'visible',
          'label' => 'LBL_CONTACT_TYPE',
          'enabled' => true,
          'name' => 'contact_type_c',
        ),
        3 => 
        array (
          'type' => 'varchar',
          'link' => 'email_addresses_primary',
          'studio' => 
          array (
            'editview' => true,
            'editField' => true,
            'searchview' => false,
            'popupsearch' => false,
          ),
          'label' => 'LBL_EMAIL_ADDRESS',
          'default' => true,
          'enabled' => true,
          'name' => 'email1',
        ),
        4 => 
        array (
          'name' => 'title',
          'enabled' => true,
          'default' => false,
        ),
        5 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => false,
        ),
        6 => 
        array (
          'name' => 'employment_status_c',
          'label' => 'LBL_EMPLOYMENT_STATUS',
          'enabled' => true,
          'default' => false,
        ),
        7 => 
        array (
          'name' => 'acton_lead_score_c',
          'label' => 'LBL_ACTON_LEAD_SCORE',
          'enabled' => true,
          'default' => false,
        ),
        8 => 
        array (
          'name' => 'phone_work',
          'enabled' => true,
          'default' => false,
        ),
        9 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
        ),
        10 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
      ),
    ),
  ),
);