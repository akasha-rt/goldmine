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
  'name' => 'updatequoteandgetquotedataupdatedendpoint',
  'published_date' => '2022-12-14 08:32:13',
  'version' => 1,
);
$installdefs = array (
    'id' => 'updatequoteandgetquotedataupdatedendpoint',
    'copy' => array(
        0 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetQuoteRelatedData.php',
        'to' => 'custom/clients/base/api/GetQuoteRelatedData.php',
        ),
        1 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/UpdateQuoteData.php',
        'to' => 'custom/clients/base/api/UpdateQuoteData.php',
        ),
        2 => 
        array (
        'from' => '<basepath>/custom/Extension/modules/PA_ProductAccessories/Ext/Vardefs/sugarfield_options_custom.php',
        'to' => 'custom/Extension/modules/PA_ProductAccessories/Ext/Vardefs/sugarfield_options_custom.php',
        ),
    ),
);