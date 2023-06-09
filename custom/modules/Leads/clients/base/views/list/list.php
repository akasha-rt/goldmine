<?php
// created: 2022-12-12 04:12:11
$viewdefs['Leads']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'agencyname__c',
          'label' => 'LBL_AGENCYNAME__C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'lead_quality_c',
          'default' => true,
          'enabled' => true,
          'studio' => 'visible',
          'label' => 'LBL_LEAD_QUALITY',
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
          'name' => 'contact_type_c',
          'label' => 'LBL_CONTACT_TYPE_C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'id' => 'ASSIGNED_USER_ID',
        ),
        5 => 
        array (
          'name' => 'ai_conv_score_classification',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
        ),
        7 => 
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
        8 => 
        array (
          'name' => 'title',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_TITLE',
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
          'name' => 'primary_address_state',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        11 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
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
          'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
        ),
        13 => 
        array (
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'lead_source',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_LEAD_SOURCE',
        ),
        15 => 
        array (
          'name' => 'lead_source_description',
          'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        16 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'studio' => 
          array (
            'portaleditview' => false,
          ),
        ),
        17 => 
        array (
          'name' => 'team_name',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'studio' => 
          array (
            'portallistview' => false,
            'portaldetailview' => false,
            'portaleditview' => false,
          ),
          'label' => 'LBL_LIST_TEAM',
          'id' => 'TEAM_ID',
        ),
        18 => 
        array (
          'name' => 'primary_address_postalcode',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
        19 => 
        array (
          'name' => 'accounts_leads_1_name',
          'label' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'id' => 'ACCOUNTS_LEADS_1ACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        20 => 
        array (
          'name' => 'contacts_leads_1_name',
          'label' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
          'enabled' => true,
          'id' => 'CONTACTS_LEADS_1CONTACTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        21 => 
        array (
          'name' => 'pmt_c',
          'label' => 'LABEL_PMT_C',
          'enabled' => true,
          'default' => true,
        ),
        22 => 
        array (
          'name' => 'metrology_equipment_c',
          'label' => 'LABEL_METROLOGY_EQUIPMENT_C',
          'enabled' => true,
          'default' => true,
        ),
        23 => 
        array (
          'name' => 'testing_equipment_c',
          'label' => 'LABEL_TESTING_EQUIPMENT_C',
          'enabled' => true,
          'default' => true,
        ),
        24 => 
        array (
          'name' => 'salesperson_c',
          'label' => 'LBL_SALESPERSON_C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        25 => 
        array (
          'name' => 'saws_c',
          'label' => 'LABEL_SAWS_C',
          'enabled' => true,
          'default' => true,
        ),
        26 => 
        array (
          'name' => 'jst_c',
          'label' => 'LABEL_JST_C',
          'enabled' => true,
          'default' => true,
        ),
        27 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
          'default' => false,
        ),
        28 => 
        array (
          'name' => 'lead_priority_c',
          'label' => 'LBL_LEAD_PRIORITY',
          'enabled' => true,
          'readonly' => false,
          'default' => false,
        ),
        29 => 
        array (
          'name' => 'refered_by',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_REFERED_BY',
        ),
        30 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_DO_NOT_CALL',
        ),
        31 => 
        array (
          'name' => 'department',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_DEPARTMENT',
        ),
        32 => 
        array (
          'name' => 'distributor_c',
          'label' => 'LBL_DISTRIBUTOR',
          'enabled' => true,
          'default' => false,
        ),
        33 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_HOME_PHONE',
        ),
        34 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_MOBILE_PHONE',
        ),
        35 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_OTHER_PHONE',
        ),
        36 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_FAX_PHONE',
        ),
        37 => 
        array (
          'name' => 'primary_address_country',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
        ),
        38 => 
        array (
          'name' => 'primary_address_street',
          'default' => false,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        39 => 
        array (
          'name' => 'alt_address_country',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_ALT_ADDRESS_COUNTRY',
        ),
        40 => 
        array (
          'name' => 'alt_address_street',
          'default' => false,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_ALT_ADDRESS_STREET',
        ),
        41 => 
        array (
          'name' => 'alt_address_city',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_ALT_ADDRESS_CITY',
        ),
        42 => 
        array (
          'name' => 'alt_address_state',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_ALT_ADDRESS_STATE',
        ),
        43 => 
        array (
          'name' => 'alt_address_postalcode',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
        ),
        44 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => false,
        ),
        45 => 
        array (
          'name' => 'created_by',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_CREATED',
        ),
        46 => 
        array (
          'name' => 'modified_by_name',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'label' => 'LBL_MODIFIED',
          'id' => 'MODIFIED_USER_ID',
        ),
        47 => 
        array (
          'name' => 'ds_c',
          'label' => 'LBL_DS_C',
          'enabled' => true,
          'readonly' => false,
          'default' => false,
        ),
      ),
    ),
  ),
);