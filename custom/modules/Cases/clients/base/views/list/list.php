<?php
$viewdefs['Cases'] = 
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
                'name' => 'case_number',
                'label' => 'LBL_LIST_NUMBER',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_SUBJECT',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'module' => 'Accounts',
                'id' => 'ACCOUNT_ID',
                'ACLTag' => 'ACCOUNT',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              3 => 
              array (
                'name' => 'priority',
                'label' => 'LBL_LIST_PRIORITY',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
                'default' => true,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              9 => 
              array (
                'name' => 'primary_contact_name',
                'label' => 'LBL_PRIMARY_CONTACT_NAME',
                'default' => false,
                'enabled' => true,
              ),
              10 => 
              array (
                'name' => 'request_close',
                'label' => 'LBL_REQUEST_CLOSE',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              11 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'source',
                'label' => 'LBL_SOURCE',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'phone_number_c',
                'label' => 'LBL_PHONE_NUMBER',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'productgroup_c',
                'label' => 'LBL_PRODUCTGROUP',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'request_close_date',
                'label' => 'LBL_REQUEST_CLOSE_DATE',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              17 => 
              array (
                'name' => 'resolved_datetime',
                'label' => 'LBL_RESOLVED_DATETIME',
                'enabled' => true,
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'reason_for_contact_c',
                'label' => 'LBL_REASON_FOR_CONTACT',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'contact_company_c',
                'label' => 'LBL_CONTACT_COMPANY_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'contact_address_street_c',
                'label' => 'LBL_CONTACT_ADDRESS_STREET',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'contact_address_postalcode_c',
                'label' => 'LBL_CONTACT_ADDRESS_POSTALCODE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'contact_address_country_c',
                'label' => 'LBL_CONTACT_ADDRESS_COUNTRY',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              23 => 
              array (
                'name' => 'contact_address_state_c',
                'label' => 'LBL_CONTACT_ADDRESS_STATE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              24 => 
              array (
                'name' => 'business_center_name',
                'label' => 'LBL_BUSINESS_CENTER_NAME',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              25 => 
              array (
                'name' => 'contact_address_city_c',
                'label' => 'LBL_CONTACT_ADDRESS_CITY',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'contact_phone_c',
                'label' => 'LBL_CONTACT_PHONE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              27 => 
              array (
                'name' => 'contact_email_address_c',
                'label' => 'LBL_CONTACT_EMAIL_ADDRESS',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              28 => 
              array (
                'name' => 'contact_title_c',
                'label' => 'LBL_CONTACT_TITLE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              29 => 
              array (
                'name' => 'product_group_rel',
                'label' => 'LBL_PRODUCT_GROUP_REL',
                'enabled' => true,
                'id' => 'PRODUCT_GROUP_ID',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              30 => 
              array (
                'name' => 'service_level',
                'label' => 'LBL_SERVICE_LEVEL',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              31 => 
              array (
                'name' => 'follow_up_datetime',
                'label' => 'LBL_FOLLOW_UP',
                'default' => false,
                'enabled' => true,
              ),
              32 => 
              array (
                'name' => 'tag',
                'label' => 'LBL_TAGS',
                'enabled' => true,
                'default' => false,
              ),
              33 => 
              array (
                'name' => 'first_response_sla_met',
                'label' => 'LBL_FIRST_RESPONSE_SLA_MET',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              34 => 
              array (
                'name' => 'is_escalated',
                'label' => 'LBL_ESCALATED',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'type' => 'badge',
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
