<?php
// created: 2018-11-09 17:23:37
$viewdefs['Notes']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'filters' => 
  array (
    0 => 
    array (
      'id' => 'created_by_me',
      'name' => 'LBL_CREATED_BY_ME',
      'filter_definition' => 
      array (
        '$creator' => '',
        'email_id' => 
        array (
          '$empty' => '',
        ),
      ),
      'editable' => false,
    ),
  ),
  'fields' => 
  array (
    'assigned_user_name' => 
    array (
    ),
    'created_by_name' => 
    array (
    ),
    'name' => 
    array (
    ),
    'contact_name' => 
    array (
    ),
    'parent_name' => 
    array (
    ),
    'date_entered' => 
    array (
    ),
    'date_modified' => 
    array (
    ),
    'tag' => 
    array (
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
  ),
);