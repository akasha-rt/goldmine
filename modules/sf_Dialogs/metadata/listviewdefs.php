<?php
$module_name = 'sf_Dialogs';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DIALOG_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DIALOG_ID',
    'width' => '10%',
    'default' => true,
  ),
  'START_FORM_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_START_FORM_ID',
    'width' => '10%',
    'default' => true,
  ),
  'COMPLETED_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_COMPLETED_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
