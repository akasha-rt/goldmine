<?php
$dashletData['MeetingsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'date_start' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
  'meet_type_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['MeetingsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'parent_name' => 
  array (
    'width' => '29%',
    'label' => 'LBL_LIST_RELATED_TO',
    'sortable' => false,
    'dynamic_module' => 'PARENT_TYPE',
    'link' => true,
    'id' => 'PARENT_ID',
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'default' => true,
    'name' => 'parent_name',
  ),
  'date_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
    'name' => 'date_start',
  ),
  'meet_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEET_TYPE',
    'width' => '10%',
  ),
  'duration' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DURATION',
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'duration_hours',
      1 => 'duration_minutes',
    ),
    'name' => 'duration',
    'default' => false,
  ),
  'status' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'name' => 'status',
    'default' => false,
  ),
  'type' => 
  array (
    'width' => '8%',
    'label' => 'LBL_TYPE',
    'name' => 'type',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'meet_result_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MEET_RESULT',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
