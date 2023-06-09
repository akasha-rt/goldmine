<?php
$viewdefs['Contacts'] = 
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
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'id' => 'ACCOUNT_ID',
                'contextMenu' => 
                array (
                  'objectType' => 'sugarAccount',
                  'metaData' => 
                  array (
                    'return_module' => 'Contacts',
                    'return_action' => 'ListView',
                    'module' => 'Accounts',
                    'parent_id' => '{$ACCOUNT_ID}',
                    'parent_name' => '{$ACCOUNT_NAME}',
                    'account_id' => '{$ACCOUNT_ID}',
                    'account_name' => '{$ACCOUNT_NAME}',
                  ),
                ),
                'sortable' => true,
                'ACLTag' => 'ACCOUNT',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              1 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'agencyname_c',
                'label' => 'LBL_AGENCYNAME_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              3 => 
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
              4 => 
              array (
                'name' => 'title',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_LIST_TITLE',
              ),
              5 => 
              array (
                'name' => 'primary_address_street',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'reason_for_contact_c',
                'label' => 'LBL_REASON_FOR_CONTACT_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'product_group_c',
                'label' => 'LBL_PRODUCT_GROUP_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'primary_address_city',
                'default' => true,
                'enabled' => true,
                'label' => 'LBL_PRIMARY_ADDRESS_CITY',
              ),
              10 => 
              array (
                'name' => 'case_comments_c',
                'label' => 'LBL_CASE_COMMENTS',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'primary_address_state',
                'default' => true,
                'enabled' => true,
                'label' => 'LBL_PRIMARY_ADDRESS_STATE',
              ),
              12 => 
              array (
                'name' => 'email1',
                'default' => true,
                'enabled' => true,
                'studio' => 
                array (
                  'editview' => true,
                  'editField' => true,
                  'searchview' => false,
                  'popupsearch' => false,
                ),
                'label' => 'LBL_LIST_EMAIL_ADDRESS',
                'sortable' => false,
                'link' => true,
                'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
              ),
              13 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_OFFICE_PHONE',
              ),
              14 => 
              array (
                'name' => 'phone_mobile',
                'default' => true,
                'enabled' => true,
                'label' => 'LBL_MOBILE_PHONE',
              ),
              15 => 
              array (
                'name' => 'contact_type_c',
                'default' => true,
                'enabled' => true,
                'studio' => 'visible',
                'label' => 'LBL_CONTACT_TYPE',
              ),
              16 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'label' => 'LBL_DATE_ENTERED',
              ),
              17 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              18 => 
              array (
                'name' => 'phone_other',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              19 => 
              array (
                'name' => 'assistant_phone',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              20 => 
              array (
                'name' => 'campaign_name',
                'default' => false,
                'enabled' => true,
                'link' => true,
                'label' => 'LBL_CAMPAIGN',
                'id' => 'CAMPAIGN_ID',
              ),
              21 => 
              array (
                'name' => 'created_by_name',
                'default' => false,
                'enabled' => true,
                'link' => true,
                'label' => 'LBL_CREATED',
                'id' => 'CREATED_BY',
              ),
              22 => 
              array (
                'name' => 'decision_maker_c',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_DECISION_MAKER',
              ),
              23 => 
              array (
                'name' => 'department',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_DEPARTMENT',
              ),
              24 => 
              array (
                'name' => 'lead_source',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_LEAD_SOURCE',
              ),
              25 => 
              array (
                'name' => 'alt_address_city',
                'label' => 'LBL_ALT_ADDRESS_CITY',
                'enabled' => true,
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'alt_address_state',
                'label' => 'LBL_ALT_ADDRESS_STATE',
                'enabled' => true,
                'default' => false,
              ),
              27 => 
              array (
                'name' => 'primary_address_postalcode',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
              ),
              28 => 
              array (
                'name' => 'primary_address_country',
                'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              29 => 
              array (
                'name' => 'employment_status_c',
                'label' => 'LBL_EMPLOYMENT_STATUS',
                'enabled' => true,
                'default' => false,
              ),
              30 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => false,
                'link' => true,
              ),
              31 => 
              array (
                'name' => 'price_increase_c',
                'label' => 'LBL_PRICE_INCREASE',
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
