<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
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
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'account_number_c',
                'label' => 'LBL_ACCOUNT_NUMBER',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_MEMBER_OF',
                'enabled' => true,
                'id' => 'PARENT_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'account_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'parent_account_c',
                'label' => 'LBL_PARENT_ACCOUNT',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'shipping_address_city',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'shipping_address_state',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'account_status_c',
                'label' => 'LBL_ACCOUNT_STATUS',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'billing_address_postalcode',
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'billing_address_street',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'billing_address_state',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
                'enabled' => true,
                'width' => '4',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'shipping_address_street',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'shipping_address_postalcode',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'shipping_address_country',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              19 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
