<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
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
  'author' => 'tnv',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'ProductFieldsForCases',
  'published_date' => '2022-07-21 20:52:31',
  'type' => 'module',
  'version' => 1658436753,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'ProductFieldsForCases',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/product_fields.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/product_fields.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.product_fields.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.product_fields.php',
    ),
  ),
 
);