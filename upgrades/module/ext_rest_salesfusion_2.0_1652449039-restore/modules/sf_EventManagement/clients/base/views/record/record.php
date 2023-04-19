<?php
$module_name = 'sf_EventManagement';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 32,
                'height' => 32,
				'size' => 'small',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 
              array (
                'name' => 'event_date',
                'label' => 'LBL_EVENT_DATE',
              ),
              2 => 
              array (
                'name' => 'duration',
                'label' => 'LBL_DURATION',
              ),
              3 => 
              array (
                'name' => 'sf_eventmanagement_contacts_name',
              ),
              4 => 
              array (
                'name' => 'sf_eventmanagement_leads_name',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'registered',
                'label' => 'LBL_REGISTERED',
              ),
              6 => 
              array (
                'name' => 'attended',
                'label' => 'LBL_ATTENDED',
              ),
              7 => 
              array (
                'name' => 'event_location',
                'label' => 'LBL_EVENT_LOCATION',
                'span' => 12,
              ),
              8 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_RECORD_BODY' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
      ),
    ),
  ),
);
