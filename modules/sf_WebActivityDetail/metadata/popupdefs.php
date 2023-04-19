<?php
$popupMeta = array (
    'moduleMain' => 'sf_WebActivityDetail',
    'varName' => 'sf_WebActivityDetail',
    'orderBy' => 'sf_webactivitydetail.name',
    'whereClauses' => array (
  'name' => 'sf_webactivitydetail.name',
),
    'searchInputs' => array (
  0 => 'sf_webactivitydetail_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'INTERACTIONDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INTERACTIONDATE',
    'width' => '10%',
    'default' => true,
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
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
),
);
