<?php
$module_name = 'sf_EventManagement';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LEAD_SOURCE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => true,
  ),
  'EVENT_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_EVENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'DURATION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => true,
  ),
  'ATTENDED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ATTENDED',
    'width' => '10%',
  ),
  'REGISTERED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_REGISTERED',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'EVENT_LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EVENT_LOCATION',
    'width' => '10%',
    'default' => false,
  ),
  'SF_EVENTMANAGEMENT_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SF_EVENTMANAGEMENT_LEADS_FROM_LEADS_TITLE',
    'id' => 'SF_EVENTMANAGEMENT_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'SF_EVENTMANAGEMENT_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SF_EVENTMANAGEMENT_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'SF_EVENTMANAGEMENT_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
);
?>
