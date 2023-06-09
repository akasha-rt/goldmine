<?php
// created: 2022-09-05 03:37:06
$listViewDefs['Contacts'] = array (
  'contact_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_TYPE',
    'width' => '10',
  ),
  'name' => 
  array (
    'type' => 'fullname',
    'link' => true,
    'label' => 'LBL_LIST_NAME',
    'width' => '20',
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'account_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '34',
    'module' => 'Accounts',
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
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
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
    'width' => '15',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'phone_work' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '15',
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
  'birthdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10',
    'default' => false,
  ),
  'campaign_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'width' => '10',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10',
    'default' => false,
  ),
  'decision_maker_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DECISION_MAKER',
    'width' => '10',
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
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
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
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
  'primary_address_state' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'width' => '10',
    'default' => false,
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LIST_TITLE',
    'width' => '15',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10',
    'module' => 'Employees',
    'default' => false,
  ),
  'EMAIL' => 
  array (
    'width' => '15',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
    'default' => false,
  ),
);