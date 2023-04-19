<?php
$module_name = 'LSS01_GroupEmails';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
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
              3 => 
              array (
                'name' => 'accounts_lss01_groupemails_1_name',
                'label' => 'LBL_ACCOUNTS_LSS01_GROUPEMAILS_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_LSS01_GROUPEMAILS_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              5 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              7 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
