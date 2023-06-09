<?php
// created: 2022-12-12 04:08:56
$listViewDefs['Calls'] = array (
  'set_complete' => 
  array (
    'width' => '1',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'status',
    ),
  ),
  'direction' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LIST_DIRECTION',
    'width' => '10',
    'link' => false,
    'default' => true,
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_LIST_SUBJECT',
    'width' => '40',
    'link' => true,
    'default' => true,
  ),
  'contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'required' => false,
      'listview' => true,
      'visible' => false,
    ),
    'label' => 'LBL_LIST_CONTACT',
    'id' => 'CONTACT_ID',
    'width' => '20',
    'module' => 'Contacts',
    'default' => true,
    'ACLTag' => 'CONTACT',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'studio' => true,
    'label' => 'LBL_LIST_RELATED_TO',
    'link' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'width' => '20',
    'default' => true,
  ),
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LIST_DATE',
    'width' => '15',
    'link' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '2',
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
    'width' => '2',
    'default' => false,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 
    array (
      'detailview' => false,
    ),
    'label' => 'LBL_STATUS',
    'width' => '10',
    'link' => false,
  ),
  'call_result_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CALL_RESULT',
    'width' => '10',
  ),
);