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
  'description' => 'Category URL field',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Category_url_field',
  'published_date' => '2022-11-22 13:22:44',
  'type' => 'module',
  'version' => 1669123367,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Category_url_field',
  'fields' => 
  array (
    'category_url' => 
    array (
      'name' => 'category_url',
      'type' => 'url',
      'dbType' => 'varchar',
      'vname' => 'LBL_CATEGORY_URL',
      'module' => 'ProductCategories',
      'table' => 'product_categories',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/Extension/modules/ProductCategories/Ext/Vardefs/sugarfield_category_url.php',
      'to' => 'custom/Extension/modules/ProductCategories/Ext/Vardefs/sugarfield_category_url.php',
    ),

  ),
);