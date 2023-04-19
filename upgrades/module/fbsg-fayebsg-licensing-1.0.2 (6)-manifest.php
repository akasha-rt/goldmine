<?php
$manifest = array (
  'id' => 'FAYEBSG-LICENSING',
  'name' => 'FBSG | Licensing',
  'description' => 'FBSG Licensing manages the licenses of your FBSG Software Products; it must be installed to other products to function correctly ',
  'version' => '1.0.2',
  'author' => 'Faye Business Systems Group, Inc.',
  'is_uninstallable' => 'true',
  'uninstall_before_upgrade' => true,
  'remove_tables' => 'false',
  'icon' => '',
  'readme' => '',
  'published_date' => '2020-11-10 09:05:35',
  'type' => 'module',
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
    ),
    'regex_matches' => 
    array (
      0 => '^9\\.([0-9]+)\\.([0-9]+)',
      1 => '^10\\.([0-9]+)\\.([0-9]+)',
      2 => '^11\\.([0-9]+)\\.([0-9]+)',
      3 => '^12\\.([0-9]+)\\.([0-9]+)',
      4 => '^13\\.([0-9]+)\\.([0-9]+)',
    ),
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'ENT',
    2 => 'ULT',
  ),
);
$installdefs = array (
  'id' => 'FAYEBSG-LICENSING',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/filters/basic/basic.php',
      'to' => 'modules/fbsg_Licensing/clients/base/filters/basic/basic.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/filters/default/default.php',
      'to' => 'modules/fbsg_Licensing/clients/base/filters/default/default.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/layouts/license/license.php',
      'to' => 'modules/fbsg_Licensing/clients/base/layouts/license/license.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/layouts/default/default.js',
      'to' => 'modules/fbsg_Licensing/clients/base/layouts/default/default.js',
    ),
    4 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/menus/header/header.php',
      'to' => 'modules/fbsg_Licensing/clients/base/menus/header/header.php',
    ),
    5 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/api/LicenseAPI.php',
      'to' => 'modules/fbsg_Licensing/clients/base/api/LicenseAPI.php',
    ),
    6 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/search-list/search-list.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/search-list/search-list.php',
    ),
    7 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/record/record.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/record/record.php',
    ),
    8 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/dupecheck-list/dupecheck-list.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/dupecheck-list/dupecheck-list.php',
    ),
    9 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/license-content/license-content.hbs',
      'to' => 'modules/fbsg_Licensing/clients/base/views/license-content/license-content.hbs',
    ),
    10 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/license-content/license-content.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/license-content/license-content.php',
    ),
    11 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/license-content/license-content.js',
      'to' => 'modules/fbsg_Licensing/clients/base/views/license-content/license-content.js',
    ),
    12 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/subpanel-list/subpanel-list.php',
    ),
    13 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/massupdate/massupdate.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/massupdate/massupdate.php',
    ),
    14 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/selection-list/selection-list.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/selection-list/selection-list.php',
    ),
    15 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/list/list.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/list/list.php',
    ),
    16 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/license-headerpane/license-headerpane.php',
      'to' => 'modules/fbsg_Licensing/clients/base/views/license-headerpane/license-headerpane.php',
    ),
    17 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/clients/base/views/license-headerpane/license-headerpane.js',
      'to' => 'modules/fbsg_Licensing/clients/base/views/license-headerpane/license-headerpane.js',
    ),
    18 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/fbsg_Licensing.php',
      'to' => 'modules/fbsg_Licensing/fbsg_Licensing.php',
    ),
    19 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/language/en_us.lang.php',
      'to' => 'modules/fbsg_Licensing/language/en_us.lang.php',
    ),
    20 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/vardefs.php',
      'to' => 'modules/fbsg_Licensing/vardefs.php',
    ),
    21 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/SearchFields.php',
      'to' => 'modules/fbsg_Licensing/metadata/SearchFields.php',
    ),
    22 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/subpanels/default.php',
      'to' => 'modules/fbsg_Licensing/metadata/subpanels/default.php',
    ),
    23 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/popupdefs.php',
      'to' => 'modules/fbsg_Licensing/metadata/popupdefs.php',
    ),
    24 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/editviewdefs.php',
      'to' => 'modules/fbsg_Licensing/metadata/editviewdefs.php',
    ),
    25 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/metafiles.php',
      'to' => 'modules/fbsg_Licensing/metadata/metafiles.php',
    ),
    26 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/listviewdefs.php',
      'to' => 'modules/fbsg_Licensing/metadata/listviewdefs.php',
    ),
    27 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/searchdefs.php',
      'to' => 'modules/fbsg_Licensing/metadata/searchdefs.php',
    ),
    28 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/quickcreatedefs.php',
      'to' => 'modules/fbsg_Licensing/metadata/quickcreatedefs.php',
    ),
    29 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/metadata/detailviewdefs.php',
      'to' => 'modules/fbsg_Licensing/metadata/detailviewdefs.php',
    ),
    30 => 
    array (
      'from' => '<basepath>/crm/modules/fbsg_Licensing/fbsg_Licensing_sugar.php',
      'to' => 'modules/fbsg_Licensing/fbsg_Licensing_sugar.php',
    ),
    31 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/application/Ext/Include/fbsg_Licensing.php',
      'to' => 'custom/Extension/application/Ext/Include/fbsg_Licensing.php',
    ),
    32 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/application/Ext/Language/en_us.fbsg_Licensing.php',
      'to' => 'custom/Extension/application/Ext/Language/en_us.fbsg_Licensing.php',
    ),
    33 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Language/en_us.fbsg_Licensing.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.fbsg_Licensing.php',
    ),
    34 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Administration/fbsg_Licensing_Example.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Administration/fbsg_Licensing_Example.php',
    ),
    35 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Administration/_fbsg_Licensing.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Administration/_fbsg_Licensing.php',
    ),
    36 => 
    array (
      'from' => '<basepath>/crm/custom/themes/default/images/icon_Fbsg_Licensing_32.png',
      'to' => 'custom/themes/default/images/icon_Fbsg_Licensing_32.png',
    ),
    37 => 
    array (
      'from' => '<basepath>/crm/custom/themes/default/images/Createfbsg_Licensing.gif',
      'to' => 'custom/themes/default/images/Createfbsg_Licensing.gif',
    ),
    38 => 
    array (
      'from' => '<basepath>/crm/custom/themes/default/images/icon_fbsg_Licensing_bar_32.png',
      'to' => 'custom/themes/default/images/icon_fbsg_Licensing_bar_32.png',
    ),
    39 => 
    array (
      'from' => '<basepath>/crm/custom/themes/default/images/fbsg_Licensing.gif',
      'to' => 'custom/themes/default/images/fbsg_Licensing.gif',
    ),
    40 => 
    array (
      'from' => '<basepath>/crm/custom/src/fbsg/licensing/LicenseFactory.php',
      'to' => 'custom/src/fbsg/licensing/LicenseFactory.php',
    ),
    41 => 
    array (
      'from' => '<basepath>/crm/custom/src/fbsg/licensing/LicenseException.php',
      'to' => 'custom/src/fbsg/licensing/LicenseException.php',
    ),
    42 => 
    array (
      'from' => '<basepath>/crm/custom/src/fbsg/licensing/License.php',
      'to' => 'custom/src/fbsg/licensing/License.php',
    ),
    43 => 
    array (
      'from' => '<basepath>/crm/custom/src/fbsg/licensing/LicenseInterface.php',
      'to' => 'custom/src/fbsg/licensing/LicenseInterface.php',
    ),
  ),
);
