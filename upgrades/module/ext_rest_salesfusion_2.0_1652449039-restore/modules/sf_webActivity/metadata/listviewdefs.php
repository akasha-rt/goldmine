<?php
$module_name = 'sf_webActivity';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'STARTDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'REFERRERKEYWORDS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_REFERRERKEYWORDS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'TOUCHPOINT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TOUCHPOINT',
    'width' => '10%',
    'default' => true,
  ),
  'CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'REGION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGION',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILADDRESS',
    'width' => '10%',
    'default' => false,
  ),
  'JAVAENABLED' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_JAVAENABLED',
    'width' => '10%',
  ),
  'CLIENTHOSTNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLIENTHOSTNAME',
    'width' => '10%',
    'default' => false,
  ),
);
?>
