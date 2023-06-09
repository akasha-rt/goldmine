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
  'built_in_version' => '11.2.0',
  'acceptable_sugar_flavors' => array('PRO','ENT','ULT'),
  'acceptable_sugar_versions' => array(
      'exact_matches' => array(),
      'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
  ),
  'readme' => '',
  'key' => 'PU',
  'author' => 'TI',
  'description' => 'Save portal users into CRM',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'PortalUsers',
  'published_date' => '2022-07-20 12:36:21',
  'type' => 'module',
  'version' => 1658320581,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'PortalUsers',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'PU_PortalUsers',
      'class' => 'PU_PortalUsers',
      'path' => 'modules/PU_PortalUsers/PU_PortalUsers.php',
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
      'from' => '<basepath>/SugarModules/modules/PU_PortalUsers',
      'to' => 'modules/PU_PortalUsers',
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