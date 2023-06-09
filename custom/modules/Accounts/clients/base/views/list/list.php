<?php
$viewdefs['Accounts'] = 
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
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'width' => 'xlarge',
              ),
              1 => 
              array (
                'name' => 'parent_account_c',
                'label' => 'LBL_PARENT_ACCOUNT',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_number_c',
                'label' => 'LBL_ACCOUNT_NUMBER',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'shipping_address_city',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'shipping_address_state',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'site_id_c',
                'label' => 'LBL_SITE_ID',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_MEMBER_OF',
                'enabled' => true,
                'id' => 'PARENT_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'account_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAMS',
                'enabled' => true,
                'id' => 'TEAM_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'account_status_c',
                'label' => 'LBL_ACCOUNT_STATUS',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'strategic_account_c',
                'label' => 'LBL_STRATEGIC_ACCOUNT',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'shipping_address_street',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
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
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'website',
                'label' => 'LBL_WEBSITE',
                'enabled' => true,
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'industry',
                'label' => 'LBL_INDUSTRY',
                'enabled' => true,
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'sic_code',
                'label' => 'LBL_SIC_CODE',
                'enabled' => true,
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'primary_naics_c',
                'label' => 'LBL_PRIMARY_NAICS',
                'enabled' => true,
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              23 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'default' => false,
              ),
              24 => 
              array (
                'name' => 'salesperson_c',
                'label' => 'LBL_SALESPERSON_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              25 => 
              array (
                'name' => 'agency_name_c',
                'label' => 'LBL_AGENCY_NAME_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'sales_channel_c',
                'label' => 'LBL_SALES_CHANNEL',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
