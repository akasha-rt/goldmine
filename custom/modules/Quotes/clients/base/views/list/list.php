<?php
$viewdefs['Quotes'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'quote_number_portal',
                'label' => 'LBL_QUOTE_NUMBER_PORTAL',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'label' => 'LBL_LIST_QUOTE_NAME',
                'enabled' => true,
                'default' => true,
                'name' => 'name',
                'link' => true,
              ),
              4 => 
              array (
                'name' => 'shipping_account_name',
                'label' => 'LBL_SHIPPING_ACCOUNT_NAME',
                'enabled' => true,
                'id' => 'SHIPPING_ACCOUNT_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'base_rate',
                'label' => 'LBL_CURRENCY_RATE',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'subtotal_usdollar',
                'label' => 'LBL_SUBTOTAL_USDOLLAR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'shipping_address_country',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'shipping_contact_name',
                'label' => 'LBL_SHIPPING_CONTACT_NAME',
                'enabled' => true,
                'id' => 'SHIPPING_CONTACT_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'new_sub_usdollar',
                'label' => 'LBL_NEW_SUB_USDOLLAR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'new_sub',
                'label' => 'LBL_NEW_SUB',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'shipping_address_postalcode',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'shipping_address_state',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'shipping_address_city',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
                'enabled' => true,
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'shipping_address_street',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              15 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              16 => 
              array (
                'name' => 'billing_address_postalcode',
                'label' => 'LBL_BILLING_ADDRESS_POSTAL_CODE',
                'enabled' => true,
                'default' => true,
              ),
              17 => 
              array (
                'name' => 'billing_address_state',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
                'enabled' => true,
                'default' => true,
              ),
              18 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
                'enabled' => true,
                'default' => true,
              ),
              19 => 
              array (
                'name' => 'billing_address_street',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              20 => 
              array (
                'target_record_key' => 'billing_account_id',
                'target_module' => 'Accounts',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'name' => 'billing_account_name',
                'sortable' => true,
              ),
              21 => 
              array (
                'name' => 'quotename_c',
                'label' => 'LBL_QUOTENAME',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              22 => 
              array (
                'label' => 'LBL_QUOTE_STAGE',
                'enabled' => true,
                'default' => true,
                'name' => 'quote_stage',
              ),
              23 => 
              array (
                'label' => 'LBL_TOTAL',
                'enabled' => true,
                'default' => true,
                'name' => 'total',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                ),
              ),
              24 => 
              array (
                'name' => 'quote_submitted_by_c',
                'label' => 'LBL_QUOTE_SUBMITTED_BY',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              25 => 
              array (
                'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
                'enabled' => true,
                'default' => true,
                'name' => 'total_usdollar',
              ),
              26 => 
              array (
                'name' => 'date_quote_expected_closed',
                'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
                'enabled' => true,
                'default' => true,
              ),
              27 => 
              array (
                'name' => 'assigned_user_name',
                'target_record_key' => 'assigned_user_id',
                'target_module' => 'Employees',
                'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              28 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              29 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
