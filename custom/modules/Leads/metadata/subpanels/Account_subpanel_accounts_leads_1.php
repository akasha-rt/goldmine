<?php
// created: 2019-12-04 15:54:45
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'sort_order' => 'asc',
    'sort_by' => 'last_name',
    'module' => 'Leads',
    'width' => 10,
    'default' => true,
  ),
  'account_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ACCOUNT_NAME',
    'width' => 10,
    'default' => true,
  ),
  'primary_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
    'width' => 10,
    'default' => true,
  ),
  'primary_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
    'width' => 10,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => 10,
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'default' => true,
  ),
  'email' => 
  array (
    'vname' => 'LBL_LIST_EMAIL_ADDRESS',
    'width' => 10,
    'widget_class' => 'SubPanelEmailLink',
    'sortable' => false,
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_STATUS',
    'width' => 10,
  ),
  'lead_source' => 
  array (
    'vname' => 'LBL_LIST_LEAD_SOURCE',
    'width' => 10,
    'default' => true,
  ),
  'lead_source_description' => 
  array (
    'name' => 'lead_source_description',
    'vname' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
    'width' => 10,
    'sortable' => false,
    'default' => true,
  ),
  'contacts_leads_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_LEADS_1CONTACTS_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contacts_leads_1contacts_ida',
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);