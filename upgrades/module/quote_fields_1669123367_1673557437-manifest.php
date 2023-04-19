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
  'description' => 'quote fields',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'quote_fields',
  'published_date' => '2023-01-05 13:22:44',
  'type' => 'module',
  'version' => 1669123367,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'quote_fields',
  'fields' => 
  array (
    'quote_number_portal' => 
    array (
      'name' => 'quote_number_portal',
      'type' => 'varchar',
      'vname' => 'LBL_QUOTE_NUMBER_PORTAL',
      'module' => 'Quotes',
      'table' => 'quotes',
    ),
    'saved_by_portal_user'=> array(
      'required'=> false,
      'source'=> 'non-db',
      'name' => 'saved_by_portal_user',
      'vname'=> 'LBL_SAVED_BY_PORTAL_USER',
      'type' => 'relate',
      'rname'=> 'name',
      'id_name'=> 'saved_by_portal_user_id',
      'isnull' => 'true',
      'table' => 'pu_portalusers',
      'module' => 'PU_PortalUsers',
    ),
    'saved_by_portal_user_id'=> array(
      'name' => 'saved_by_portal_user_id',
      'rname'=> 'id',
      'vname'=> 'LBL_SAVED_BY_PORTAL_USER_ID',
      'type' => 'id',
      'isnull'=> 'true',
      'table' => 'pu_portalusers',
      'module' => 'PU_PortalUsers',
      'dbType'=> 'id',
      'reportable'=> false,
      'massupdate'=> false,
      'duplicate_merge'=> 'disabled',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/Extension/modules/Quotes/Ext/Vardefs/sugarfield_quote_number_portal.php',
      'to' => 'custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_quote_number_portal.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/Extension/modules/Quotes/Ext/Vardefs/sugarfield_saved_by_portal_user.php',
      'to' => 'custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_saved_by_portal_user.php',
    ),

  ),
);