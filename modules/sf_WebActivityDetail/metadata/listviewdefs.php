<?php
$module_name = 'sf_WebActivityDetail';
$listViewDefs [$module_name] = 
array (
  'INTERACTIONDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INTERACTIONDATE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'HOSTNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HOSTNAME',
    'width' => '10%',
    'default' => true,
  ),
  'PATH' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PATH',
    'width' => '10%',
    'default' => true,
  ),
  'PARAMETERS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARAMETERS',
    'width' => '10%',
    'default' => true,
  ),
  'DURATION' => 
  array (
    'type' => 'float',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => true,
  ),
  'PROTOCOL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROTOCOL',
    'width' => '10%',
    'default' => true,
  ),
);
?>
