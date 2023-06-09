<?php
// created: 2022-12-12 04:12:10
$viewdefs['Calls']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'enabled' => true,
          'default' => true,
          'name' => 'direction',
          'label' => 'LBL_LIST_DIRECTION',
          'width' => '10%',
          'link' => false,
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'name' => 'name',
          'related_fields' => 
          array (
            0 => 'repeat_type',
          ),
          'width' => '40%',
        ),
        2 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_LIST_RELATED_TO',
          'dynamic_module' => 'PARENT_TYPE',
          'id' => 'PARENT_ID',
          'link' => true,
          'enabled' => true,
          'default' => true,
          'sortable' => false,
          'ACLTag' => 'PARENT',
          'related_fields' => 
          array (
            0 => 'parent_id',
            1 => 'parent_type',
          ),
          'studio' => true,
          'width' => '20%',
        ),
        3 => 
        array (
          'name' => 'date_start',
          'label' => 'LBL_LIST_DATE',
          'css_class' => 'overflow-visible',
          'completed_status_value' => 'Held',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'time_start',
          ),
          'width' => '15%',
          'link' => false,
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
          'link' => true,
          'id' => 'ASSIGNED_USER_ID',
          'width' => '2%',
        ),
        5 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'studio' => 
          array (
            'portaleditview' => false,
          ),
          'label' => 'LBL_DATE_ENTERED',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'studio' => 
          array (
            'portallistview' => false,
            'portaldetailview' => false,
            'portaleditview' => false,
          ),
          'label' => 'LBL_LIST_TEAM',
          'id' => 'TEAM_ID',
          'width' => '2%',
        ),
        7 => 
        array (
          'enabled' => true,
          'default' => false,
          'name' => 'status',
          'css_class' => 'full-width',
          'studio' => 
          array (
            'detailview' => false,
          ),
          'label' => 'LBL_STATUS',
          'width' => '10%',
          'link' => false,
        ),
        8 => 
        array (
          'name' => 'call_result_c',
          'default' => false,
          'enabled' => true,
          'studio' => 'visible',
          'label' => 'LBL_CALL_RESULT',
          'width' => '10%',
        ),
      ),
    ),
  ),
);