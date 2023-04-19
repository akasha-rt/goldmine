<?php
// created: 2022-12-12 04:12:11
$viewdefs['Notes']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_SUBJECT',
          'link' => true,
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'contact_name',
          'label' => 'LBL_LIST_CONTACT',
          'link' => true,
          'id' => 'CONTACT_ID',
          'module' => 'Contacts',
          'enabled' => true,
          'default' => true,
          'ACLTag' => 'CONTACT',
          'related_fields' => 
          array (
            0 => 'contact_id',
          ),
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
        ),
        3 => 
        array (
          'name' => 'created_by_name',
          'type' => 'relate',
          'label' => 'LBL_CREATED_BY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'created_by',
          ),
        ),
        4 => 
        array (
          'name' => 'created_by_name',
          'type' => 'relate',
          'label' => 'LBL_CREATED_BY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'created_by',
          ),
        ),
        5 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);