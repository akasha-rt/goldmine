<?php
// created: 2022-12-12 04:08:56
$listViewDefs['Meetings'] = array (
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
  'meet_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEET_TYPE',
    'width' => '10',
  ),
  'meet_result_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEET_RESULT',
    'width' => '10',
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
  'direction' => 
  array (
    'type' => 'enum',
    'studio' => 'false',
    'label' => 'LBL_LIST_DIRECTION',
    'width' => '10',
    'default' => false,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LIST_STATUS',
    'width' => '10',
    'link' => false,
  ),
);