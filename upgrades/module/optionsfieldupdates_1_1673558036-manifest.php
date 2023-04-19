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
  'name' => 'optionsfieldupdates',
  'published_date' => '2022-12-01 08:32:13',
  'version' => 1,
);
$installdefs = array (
    'id' => 'optionsfieldupdates',
    'copy' => array(
        0 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/option.js',
        'to' => 'custom/clients/base/fields/option/option.js',
        ),
    ),
);