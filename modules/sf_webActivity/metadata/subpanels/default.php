<?php
$module_name='sf_webActivity';
$subpanel_layout = array (
  'top_buttons' => 
  array (

  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'type' => 'name',
      'link' => true,
      'vname' => 'LBL_NAME',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => NULL,
      'target_record_key' => NULL,
    ),
    'startdate' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_STARTDATE',
      'width' => '10%',
      'default' => true,
    ),
    'referrerkeywords' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_REFERRERKEYWORDS',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'touchpoint' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TOUCHPOINT',
      'width' => '10%',
      'default' => true,
    ),
    'city' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CITY',
      'width' => '10%',
      'default' => true,
    ),
    'region' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_REGION',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sf_webActivity',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sf_webActivity',
      'width' => '5%',
      'default' => true,
    ),
  ),
);