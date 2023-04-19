<?php
$manifest = array (
  'id' => 'FBSG_Dashboard_Deployer',
  'name' => 'FBSG | Dashboard Deployer',
  'description' => 'Lets Admin users deploy dashboards across entire teams with ease',
  'version' => '1.0.0',
  'author' => 'Faye Business Systems Group',
  'is_uninstallable' => 'true',
  'published_date' => '2020-11-10 19:25:22 PKT',
  'type' => 'module',
  'remove_tables' => 'prompt',
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
    ),
    'regex_matches' => 
    array (
      0 => '9\\.(.*?)\\.(.*?)',
      1 => '10\\.(.*?)\\.(.*?)',
      2 => '11\\.(.*?)\\.(.*?)',
      3 => '12\\.(.*?)\\.(.*?)',
    ),
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'ENT',
    2 => 'ULT',
  ),
  'dependencies' => 
  array (
    0 => 
    array (
      'id_name' => 'FAYEBSG-LICENSING',
      'version' => '1.0.0',
    ),
  ),
  'uninstall_before_upgrade' => true,
);
$installdefs = array (
  'id' => 'FBSG_Dashboard_Deployer',
  'administration' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Administration/intdashboards.php',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.INT_Dashboards.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/language/en_us.lang.php',
      'to' => 'modules/INTDB_Dashboards/language/en_us.lang.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/api/INTDasboardsApi.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/api/INTDasboardsApi.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/api/INTDBConfigApi.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/api/INTDBConfigApi.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/list/list.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/list/list.php',
    ),
    4 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/postfix-headerpane/postfix-headerpane.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/postfix-headerpane/postfix-headerpane.js',
    ),
    5 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/postfix-headerpane/postfix-headerpane.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/postfix-headerpane/postfix-headerpane.php',
    ),
    6 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/config-help-pane/config-help-pane.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/config-help-pane/config-help-pane.js',
    ),
    7 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/config-help-pane/config-help-pane.hbs',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/config-help-pane/config-help-pane.hbs',
    ),
    8 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/postfix-content/postfix-content.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/postfix-content/postfix-content.js',
    ),
    9 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/postfix-content/postfix-content.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/postfix-content/postfix-content.php',
    ),
    10 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/postfix-content/postfix-content.hbs',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/postfix-content/postfix-content.hbs',
    ),
    11 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/filter-filter-dropdown/filter-filter-dropdown.hbs',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/filter-filter-dropdown/filter-filter-dropdown.hbs',
    ),
    12 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/recordlist/row.hbs',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/recordlist/row.hbs',
    ),
    13 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/recordlist/row-dashboards.hbs',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/recordlist/row-dashboards.hbs',
    ),
    14 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/recordlist/row-header.hbs',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/recordlist/row-header.hbs',
    ),
    15 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/recordlist/recordlist.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/recordlist/recordlist.js',
    ),
    16 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/recordlist/recordlist.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/recordlist/recordlist.php',
    ),
    17 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/filter-quicksearch/filter-quicksearch.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/filter-quicksearch/filter-quicksearch.js',
    ),
    18 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/views/list-headerpane/list-headerpane.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/views/list-headerpane/list-headerpane.php',
    ),
    19 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/filters/basic/basic.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/filters/basic/basic.php',
    ),
    20 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/layouts/list/list.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/layouts/list/list.php',
    ),
    21 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/layouts/list/list.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/layouts/list/list.js',
    ),
    22 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/layouts/postfix/postfix.php',
      'to' => 'modules/INTDB_Dashboards/clients/base/layouts/postfix/postfix.php',
    ),
    23 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/fields/fullname/fullname.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/fields/fullname/fullname.js',
    ),
    24 => 
    array (
      'from' => '<basepath>/crm/modules/INTDB_Dashboards/clients/base/fields/actionmenu/actionmenu.js',
      'to' => 'modules/INTDB_Dashboards/clients/base/fields/actionmenu/actionmenu.js',
    ),
    25 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/fbsg_Licensing/Ext/Language/en_us.fbsg_Licensing_Dashboard_Deployer.php',
      'to' => 'custom/Extension/modules/fbsg_Licensing/Ext/Language/en_us.fbsg_Licensing_Dashboard_Deployer.php',
    ),
    26 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/fbsg_Licensing/Ext/clients/base/menus/header/fbsg_Licensing_Dashboard_Deployer.php',
      'to' => 'custom/Extension/modules/fbsg_Licensing/Ext/clients/base/menus/header/fbsg_Licensing_Dashboard_Deployer.php',
    ),
    27 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Language/en_us.INT_Dashboards.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.INT_Dashboards.php',
    ),
    28 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Language/en_us.fbsg_Licensing_Dashboard_Deployer.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.fbsg_Licensing_Dashboard_Deployer.php',
    ),
    29 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Administration/intdashboards.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Administration/intdashboards.php',
    ),
    30 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/modules/Administration/Ext/Administration/fbsg_Licensing_Dashboard_Deployer.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Administration/fbsg_Licensing_Dashboard_Deployer.php',
    ),
    31 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/application/Ext/Language/en_us.INT_Dashboards.php',
      'to' => 'custom/Extension/application/Ext/Language/en_us.INT_Dashboards.php',
    ),
    32 => 
    array (
      'from' => '<basepath>/crm/custom/Extension/application/Ext/Include/INTDB_Dashboard.php',
      'to' => 'custom/Extension/application/Ext/Include/INTDB_Dashboard.php',
    ),
    33 => 
    array (
      'from' => '<basepath>/crm/custom/themes/default/images/intdbd.png',
      'to' => 'custom/themes/default/images/intdbd.png',
    ),
    34 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/flex-list/flex-list.js',
      'to' => 'custom/clients/base/views/flex-list/flex-list.js',
    ),
    35 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-flex-list/row.hbs',
      'to' => 'custom/clients/base/views/intdb-flex-list/row.hbs',
    ),
    36 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-flex-list/row-header.hbs',
      'to' => 'custom/clients/base/views/intdb-flex-list/row-header.hbs',
    ),
    37 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-flex-list/intdb-flex-list.hbs',
      'to' => 'custom/clients/base/views/intdb-flex-list/intdb-flex-list.hbs',
    ),
    38 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-list-headerpane/intdb-list-headerpane.php',
      'to' => 'custom/clients/base/views/intdb-list-headerpane/intdb-list-headerpane.php',
    ),
    39 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-list-headerpane/intdb-list-headerpane.js',
      'to' => 'custom/clients/base/views/intdb-list-headerpane/intdb-list-headerpane.js',
    ),
    40 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-list-headerpane/intdb-list-headerpane.hbs',
      'to' => 'custom/clients/base/views/intdb-list-headerpane/intdb-list-headerpane.hbs',
    ),
    41 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-recordlist/row.hbs',
      'to' => 'custom/clients/base/views/intdb-recordlist/row.hbs',
    ),
    42 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-recordlist/row-header.hbs',
      'to' => 'custom/clients/base/views/intdb-recordlist/row-header.hbs',
    ),
    43 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-recordlist/intdb-recordlist.js',
      'to' => 'custom/clients/base/views/intdb-recordlist/intdb-recordlist.js',
    ),
    44 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/views/intdb-recordlist/intdb-recordlist.php',
      'to' => 'custom/clients/base/views/intdb-recordlist/intdb-recordlist.php',
    ),
    45 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/layouts/intdb-list/intdb-list.js',
      'to' => 'custom/clients/base/layouts/intdb-list/intdb-list.js',
    ),
    46 => 
    array (
      'from' => '<basepath>/crm/custom/clients/base/layouts/intdb-list/intdb-list.php',
      'to' => 'custom/clients/base/layouts/intdb-list/intdb-list.php',
    ),
  ),
);
