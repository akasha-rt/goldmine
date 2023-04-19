<?php
$manifest = array (
  'built_in_version' => '12.0.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '12.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => 'STAR',
  'description' => 'Sales Stage Lost Status Update',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Sales Stage Lost Status',
  'published_date' => date('Y-m-d'),
  'type' => 'module',
  'version' => 16111543122242,
  'remove_tables' => 'prompt',
);
$installdefs = array (
  'id' => 'sales_stage_lost_status',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/change_sales_stage_lost.php',
      'to' => 'custom/include/change_sales_stage_lost.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/registery/change_sales_stage_lost.php',
      'to' => 'custom/Extension/application/Ext/EntryPointRegistry/change_sales_stage_lost.php',
    ),
  ),
);