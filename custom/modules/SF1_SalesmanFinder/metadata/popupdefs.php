<?php
$popupMeta = array (
    'moduleMain' => 'SF1_SalesmanFinder',
    'varName' => 'SF1_SalesmanFinder',
    'orderBy' => 'sf1_salesmanfinder.name',
    'whereClauses' => array (
  'name' => 'sf1_salesmanfinder.name',
  'industrial_area' => 'sf1_salesmanfinder.industrial_area',
  'industrial_territory' => 'sf1_salesmanfinder.industrial_territory',
  'laser_measurement_check_c' => 'sf1_salesmanfinder_cstm.laser_measurement_check_c',
  'territory_c' => 'sf1_salesmanfinder_cstm.territory_c',
  'country' => 'sf1_salesmanfinder.country',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'industrial_area',
  5 => 'industrial_territory',
  6 => 'laser_measurement_check_c',
  7 => 'territory_c',
  8 => 'country',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => 10,
  ),
  'industrial_area' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INDUSTRIAL_AREA',
    'width' => 10,
    'name' => 'industrial_area',
  ),
  'industrial_territory' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INDUSTRIAL_TERRITORY',
    'width' => 10,
    'name' => 'industrial_territory',
  ),
  'laser_measurement_check_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_LASER_MEASUREMENT_CHECK_C',
    'width' => 10,
    'name' => 'laser_measurement_check_c',
  ),
  'territory_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TERRITORY_C',
    'width' => 10,
    'name' => 'territory_c',
  ),
  'country' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COUNTRY',
    'width' => 10,
    'name' => 'country',
  ),
),
);
