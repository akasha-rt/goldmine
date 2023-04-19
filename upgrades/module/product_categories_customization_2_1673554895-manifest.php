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
  'description' => 'Product Categories Customization',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'product_categories_customization',
  'published_date' => '2022-11-17 14:08:43',
  'type' => 'module',
  'version' => 2.0,
  'remove_tables' => 'prompt',
);
$installdefs = array (
  'id' => 'product_categories_customization',
  'copy' => array(
    0 => 
    array (
      'from' => '<basepath>/custom/modules/ProductCategories/metadata/studio.php',
      'to' => 'custom/modules/ProductCategories/metadata/studio.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/custom/modules/ProductCategories/metadata/subpanels/default.php',
      'to' => 'custom/modules/ProductCategories/metadata/subpanels/default.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/custom/modules/ProductCategories/clients/base/layouts/subpanels/subpanels.php',
      'to' => 'custom/modules/ProductCategories/clients/base/layouts/subpanels/subpanels.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/custom/modules/ProductCategories/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'custom/modules/ProductCategories/clients/base/views/subpanel-list/subpanel-list.php',
    ),

  ),
);