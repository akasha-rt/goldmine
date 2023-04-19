<?php
// created: 2022-12-12 04:12:10
$viewdefs['Contacts']['base']['view']['dupecheck-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'e38_found_by_dedupit',
          'enabled' => true,
          'default' => true,
          'label' => 'DeDupit',
          'type' => 'e38-dedupit-found-dup-info',
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'title',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'account_name',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'phone_work',
          'enabled' => true,
          'default' => false,
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
        ),
        7 => 
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