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
  'built_in_version' => '10.3.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'PC',
  'author' => 'Ted Moriello',
  'description' => 'Cloned copy of the product category table',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'ProductCategoryClone',
  'published_date' => '2021-03-29 19:52:07',
  'type' => 'module',
  'version' => 1617047527,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'ProductCategoryClone',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'PC_ProductCategoryClone',
      'class' => 'PC_ProductCategoryClone',
      'path' => 'modules/PC_ProductCategoryClone/PC_ProductCategoryClone.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/PC_ProductCategoryClone',
      'to' => 'modules/PC_ProductCategoryClone',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'image_dir' => '<basepath>/icons',
);