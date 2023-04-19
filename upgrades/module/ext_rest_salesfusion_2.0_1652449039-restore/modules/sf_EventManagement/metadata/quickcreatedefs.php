<?php
$module_name = 'sf_EventManagement';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'event_date',
            'label' => 'LBL_EVENT_DATE',
          ),
          1 => 
          array (
            'name' => 'duration',
            'label' => 'LBL_DURATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sf_eventmanagement_contacts_name',
            'label' => 'LBL_SF_EVENTMANAGEMENT_CONTACTS_FROM_CONTACTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'sf_eventmanagement_leads_name',
            'label' => 'LBL_SF_EVENTMANAGEMENT_LEADS_FROM_LEADS_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'registered',
            'label' => 'LBL_REGISTERED',
          ),
          1 => 
          array (
            'name' => 'attended',
            'label' => 'LBL_ATTENDED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'event_location',
            'label' => 'LBL_EVENT_LOCATION',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
