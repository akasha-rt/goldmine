<?php
$manifest = array (
  'built_in_version' => '11.2.0',
  'acceptable_sugar_flavors' => array('PRO','ENT','ULT'),
  'acceptable_sugar_versions' => array(
      'exact_matches' => array(),
      'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
  ),
  'readme' => '',
  'key' => '',
  'author' => 'TI',
  'description' => '',
  'icon' => '',
  'type' => 'module',
  'is_uninstallable' => true,
  'name' => 'importforproductaccessories',
  'published_date' => '2022-11-21 08:32:13',
  'version' => 1,
);

$installdefs = array (
    'id' => 'importforproductaccessories',
    'copy' => array(
        0 => 
        array (
        'from' => '<basepath>/custom/modules/PA_ProductAccessories/clients/base/menus/header/header.php',
        'to' => 'custom/modules/PA_ProductAccessories/clients/base/menus/header/header.php',
        ),
        1 => 
        array (
        'from' => '<basepath>/modules/PA_ProductAccessories/PA_ProductAccessories_sugar.php',
        'to' => 'modules/PA_ProductAccessories/PA_ProductAccessories_sugar.php',
        ),

    ),

);