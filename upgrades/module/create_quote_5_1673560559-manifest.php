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
  'description' => 'create_quote',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'create_quote',
  'published_date' => '2023-01-05 13:22:44',
  'type' => 'module',
  'version' => 5,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'create_quote',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/modules/Quotes/clients/base/views/create/create.js',
      'to' => 'custom/modules/Quotes/clients/base/views/create/create.js',
    ),
  ),
);