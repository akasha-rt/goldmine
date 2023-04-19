<?php
$viewdefs['Meetings'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_SUBJECT',
                'link' => true,
                'default' => true,
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'repeat_type',
                ),
              ),
              1 => 
              array (
                'name' => 'type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_LIST_RELATED_TO',
                'id' => 'PARENT_ID',
                'link' => true,
                'default' => true,
                'enabled' => true,
                'sortable' => false,
                'studio' => true,
                'ACLTag' => 'PARENT',
                'dynamic_module' => 'PARENT_TYPE',
                'related_fields' => 
                array (
                  0 => 'parent_id',
                  1 => 'parent_type',
                ),
              ),
              3 => 
              array (
                'name' => 'reminder_time',
                'label' => 'LBL_POPUP_REMINDER_TIME',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'email_reminder_time',
                'label' => 'LBL_EMAIL_REMINDER_TIME',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'date_start',
                'label' => 'LBL_LIST_DATE',
                'css_class' => 'overflow-visible',
                'completed_status_value' => 'Held',
                'link' => false,
                'default' => true,
                'enabled' => true,
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'time_start',
                ),
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
              ),
              8 => 
              array (
                'name' => 'meet_type_c',
                'default' => true,
                'enabled' => true,
                'studio' => 'visible',
                'label' => 'LBL_MEET_TYPE',
              ),
              9 => 
              array (
                'name' => 'meet_result_c',
                'default' => true,
                'enabled' => true,
                'studio' => 'visible',
                'label' => 'LBL_MEET_RESULT',
              ),
              10 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
                'default' => false,
                'enabled' => true,
                'link' => true,
                'studio' => 
                array (
                  'portallistview' => false,
                  'portaldetailview' => false,
                  'portaleditview' => false,
                ),
                'id' => 'TEAM_ID',
              ),
              11 => 
              array (
                'name' => 'status',
                'label' => 'LBL_LIST_STATUS',
                'link' => false,
                'default' => false,
                'enabled' => true,
                'css_class' => 'full-width',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
