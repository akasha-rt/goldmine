<?php
// created: 2022-09-30 06:07:30
$viewdefs['LSS01_GroupEmails']['base']['view']['subpanel-for-accounts-accounts_lss01_groupemails_1'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'group_email_type_c',
          'label' => 'LBL_GROUP_EMAIL_TYPE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'email_address_c',
          'label' => 'LBL_EMAIL_ADDRESS',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);