<?php
// created: 2021-05-15 03:36:25
$listViewDefs['Leads'] = array (
  'lead_quality_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEAD_QUALITY',
    'width' => '10',
  ),
  'name' => 
  array (
    'type' => 'fullname',
    'link' => true,
    'label' => 'LBL_LIST_NAME',
    'width' => '10',
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'status' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LIST_STATUS',
    'width' => '7',
    'default' => true,
  ),
  'primary_address_state' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'width' => '10',
    'default' => true,
  ),
  'account_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'width' => '15',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'phone_work' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_LIST_PHONE',
    'width' => '15',
    'default' => true,
  ),
  'email1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'width' => '16',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '5',
    'module' => 'Employees',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10',
    'default' => true,
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10',
    'default' => false,
  ),
  'refered_by' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERED_BY',
    'width' => '10',
    'default' => false,
  ),
  'lead_source' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10',
    'default' => false,
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10',
    'default' => false,
  ),
  'do_not_call' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DO_NOT_CALL',
    'width' => '10',
  ),
  'phone_home' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_HOME_PHONE',
    'width' => '10',
    'default' => false,
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10',
    'default' => false,
  ),
  'phone_other' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OTHER_PHONE',
    'width' => '10',
    'default' => false,
  ),
  'phone_fax' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_FAX_PHONE',
    'width' => '10',
    'default' => false,
  ),
  'primary_address_country' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
    'width' => '10',
    'default' => false,
  ),
  'primary_address_street' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
    'width' => '10',
    'default' => false,
  ),
  'primary_address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'width' => '10',
    'default' => false,
  ),
  'primary_address_postalcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'width' => '10',
    'default' => false,
  ),
  'alt_address_country' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_COUNTRY',
    'width' => '10',
    'default' => false,
  ),
  'alt_address_street' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_STREET',
    'width' => '10',
    'default' => false,
  ),
  'alt_address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_CITY',
    'width' => '10',
    'default' => false,
  ),
  'alt_address_state' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_STATE',
    'width' => '10',
    'default' => false,
  ),
  'alt_address_postalcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
    'width' => '10',
    'default' => false,
  ),
  'created_by' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_CREATED',
    'width' => '10',
    'default' => false,
  ),
  'team_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'portallistview' => false,
      'portaldetailview' => false,
      'portaleditview' => false,
    ),
    'label' => 'LBL_LIST_TEAM',
    'id' => 'TEAM_ID',
    'width' => '5',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED',
    'id' => 'MODIFIED_USER_ID',
    'width' => '5',
    'default' => false,
  ),
  'EMAIL' => 
  array (
    'width' => '16',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
    'default' => false,
  ),
);