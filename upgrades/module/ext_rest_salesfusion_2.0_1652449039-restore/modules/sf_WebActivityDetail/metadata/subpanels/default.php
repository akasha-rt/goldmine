<?php
$module_name='sf_WebActivityDetail';
$subpanel_layout = array (
  'top_buttons' => 
  array (

  ),
  'where' => '',
  'list_fields' => 
  array (
    'interactiondate' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_INTERACTIONDATE',
      'width' => '10%',
      'default' => true,
    ),
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
    'hostname' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_HOSTNAME',
      'width' => '10%',
      'default' => true,
    ),
    'path' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PATH',
      'width' => '10%',
      'default' => true,
    ),
    'parameters' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PARAMETERS',
      'width' => '10%',
      'default' => true,
    ),
    'duration' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_DURATION',
      'width' => '10%',
      'default' => true,
    ),
    'protocol' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROTOCOL',
      'width' => '10%',
      'default' => true,
    ),
  ),
);