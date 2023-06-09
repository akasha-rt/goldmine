<?php
// created: 2022-12-12 04:08:56
$searchdefs['Users'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'user_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'is_admin',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'name' => 'is_group',
        'default' => true,
        'width' => '10%',
      ),
      7 => 
      array (
        'name' => 'department',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      11 => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      12 => 
      array (
        'type' => 'datetime',
        'readonly' => true,
        'label' => 'LBL_LAST_LOGIN',
        'width' => '10%',
        'default' => true,
        'name' => 'last_login',
      ),
      13 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_REPORTS_TO_NAME',
        'id' => 'REPORTS_TO_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
      ),
    ),
  ),
);