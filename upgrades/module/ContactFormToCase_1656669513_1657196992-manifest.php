<?php

$manifest = array (
  'built_in_version' => '12.0.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '12.0.0',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'ContactFormToCase',
  'published_date' => '2022-07-01 09:58:20',
  'type' => 'module',
  'version' => 1656669513,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'ContactFormToCase',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/LogicHooks/data_saving_to_cases.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/data_saving_to_cases.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/custom/modules/Contacts/ContactFromToCase.php',
      'to' => 'custom/modules/Contacts/ContactFromToCase.php',
    ),
  )
);