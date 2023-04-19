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
  'description' => 'quote_end_points',
  'icon' => '',
  'type' => 'module',
  'is_uninstallable' => true,
  'name' => 'quote_end_points',
  'published_date' => '2022-01-09 08:32:13',
  'version' => 1,
);
$installdefs = array (
    'id' => 'quote_end_points',
    'copy' => array(
        0 => 
        array (
            'from' => '<basepath>/custom/clients/base/api/SaveProductsAndAccessories.php',
            'to' => 'custom/clients/base/api/SaveProductsAndAccessories.php',
        ),
        1 => 
        array (
            'from' => '<basepath>/custom/clients/base/api/SaveProductsAndAccessoriesAsRevision.php',
            'to' => 'custom/clients/base/api/SaveProductsAndAccessoriesAsRevision.php',
        ),
    ),
);