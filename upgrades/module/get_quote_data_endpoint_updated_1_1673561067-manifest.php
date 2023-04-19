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
  'description' => 'get_quote_data_endpoint_updated',
  'icon' => '',
  'type' => 'module',
  'is_uninstallable' => true,
  'name' => 'get_quote_data_endpoint_updated',
  'published_date' => '2023-01-10 08:32:13',
  'version' => 1,
);
$installdefs = array (
    'id' => 'get_quote_data_endpoint_updated',
    'copy' => array(
        0 => 
        array (
            'from' => '<basepath>/custom/clients/base/api/GetQuoteRelatedData.php',
            'to' => 'custom/clients/base/api/GetQuoteRelatedData.php',
        ),
    ),
);