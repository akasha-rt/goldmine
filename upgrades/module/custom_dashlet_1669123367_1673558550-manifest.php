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
  'description' => 'custom_dashlet',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'custom_dashlet',
  'published_date' => '2023-01-05 13:22:44',
  'type' => 'module',
  'version' => 1669123367,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'custom_dashlet',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/modules/Quotes/clients/base/layouts/create-preview/create-preview.php',
      'to' => 'custom/modules/Quotes/clients/base/layouts/create-preview/create-preview.php',
    ),
  ),
);