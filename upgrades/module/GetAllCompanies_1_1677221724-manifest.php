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
  'name' => 'GetAllCompanies',
  'published_date' => '2023-02-24 12:00:00',
  'version' => 1,
);
$installdefs = array (
    'id' => 'GetAllCompanies',
    'copy' => array(
        0 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetAllCompanies.php',
        'to' => 'custom/clients/base/api/GetAllCompanies.php',
        ),
    ),
);