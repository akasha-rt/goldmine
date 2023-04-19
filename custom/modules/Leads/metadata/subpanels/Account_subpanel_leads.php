<?php
// created: 2019-01-05 18:15:38
$subpanel_layout['list_fields'] = array (
  'account_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ACCOUNT_NAME',
    'width' => 10,
    'default' => true,
  ),
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
  'phone_work' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
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
  'refered_by' => 
  array (
    'vname' => 'LBL_LIST_REFERED_BY',
    'width' => 10,
    'default' => true,
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