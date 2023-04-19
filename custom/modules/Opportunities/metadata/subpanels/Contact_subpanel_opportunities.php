<?php
// created: 2020-08-20 15:38:13
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'account_name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Accounts',
    'width' => 10,
    'target_record_key' => 'account_id',
    'target_module' => 'Accounts',
    'default' => true,
  ),
  'date_closed' => 
  array (
    'name' => 'date_closed',
    'vname' => 'LBL_DATE_CLOSED',
    'width' => 10,
    'default' => true,
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'vname' => 'LBL_LIST_SALES_STAGE',
    'width' => 10,
    'default' => true,
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_LIKELY',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => 10,
    'default' => true,
  ),
  'accounts_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_OPPORTUNITIES_1ACCOUNTS_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_opportunities_1accounts_ida',
  ),
  'contacts_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contacts_opportunities_1contacts_ida',
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);