<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'assigned_user_id' => 'accounts.assigned_user_id',
  'account_type' => 'accounts.account_type',
  'account_number_c' => 'accounts_cstm.account_number_c',
  'parent_name' => 'accounts.parent_name',
  'shipping_address_city' => 'accounts.shipping_address_city',
  'shipping_address_state' => 'accounts.shipping_address_state',
  'shipping_address_postalcode' => 'accounts.shipping_address_postalcode',
),
    'searchInputs' => array (
  0 => 'name',
  7 => 'assigned_user_id',
  8 => 'account_type',
  10 => 'account_number_c',
  15 => 'parent_name',
  19 => 'shipping_address_city',
  20 => 'shipping_address_state',
  21 => 'shipping_address_postalcode',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10',
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10',
    'name' => 'account_type',
  ),
  'account_number_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10',
    'name' => 'account_number_c',
  ),
  'parent_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10',
    'name' => 'parent_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10',
  ),
  'shipping_address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'width' => 10,
    'name' => 'shipping_address_city',
  ),
  'shipping_address_state' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'width' => 10,
    'name' => 'shipping_address_state',
  ),
  'shipping_address_postalcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'width' => 10,
    'name' => 'shipping_address_postalcode',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => 10,
    'name' => 'account_number_c',
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => 10,
    'default' => true,
    'name' => 'parent_name',
  ),
  'ACCOUNT_TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => 10,
    'default' => true,
    'name' => 'account_type',
  ),
  'PARENT_ACCOUNT_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_PARENT_ACCOUNT',
    'width' => 10,
    'name' => 'parent_account_c',
  ),
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'shipping_address_city',
  ),
  'SHIPPING_ADDRESS_STATE' => 
  array (
    'width' => 10,
    'label' => 'LBL_STATE',
    'default' => true,
    'name' => 'shipping_address_state',
  ),
),
);
