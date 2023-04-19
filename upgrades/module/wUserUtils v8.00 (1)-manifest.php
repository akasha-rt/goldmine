<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
$manifest = array (
  'acceptable_sugar_versions' =>  
  array (
    0 => '7.*',
    1 => '8.*',
    2 => '9.*',
    3 => '10.*',
    4 => '11.*'
  ),
  'acceptable_sugar_flavors' =>  
  array (

  ),
  'readme' =>  'README.txt',
  'key' =>  'WSYS',
  'author' =>  'Ionut Tonita & Cristinel Mitoi & Mirel Ivan',
  'description' =>  ' ',
  'icon' =>  '',
  'is_uninstallable' =>  true,
  'name' =>  'wUserUtils',
  'published_date' =>  '2021-04-21 16:05:46',
  'type' =>  'module',
  'version' =>  '8.00',
  'remove_tables' =>  'prompt'
);
$installdefs = array (
  'post_execute' =>  
  array (
    0 => '<basepath>/custom/src/wsystems/wUserUtils/PackageHooks/PostExecute.php'
  ),
  'pre_uninstall' =>  
  array (
    0 => '<basepath>/custom/src/wsystems/wUserUtils/PackageHooks/PreUninstall.php'
  ),
  'id' =>  'wUserUtils',
  'copy' =>  
  array (
    0 =>     array (
      'from' =>  '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/back_admin.php',
      'to' =>  'custom/Extension/application/Ext/EntryPointRegistry/back_admin.php'
    ),
    1 =>     array (
      'from' =>  '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/wUserUtilsEntryPoint.php',
      'to' =>  'custom/Extension/application/Ext/EntryPointRegistry/wUserUtilsEntryPoint.php'
    ),
    2 =>     array (
      'from' =>  '<basepath>/custom/Extension/application/Ext/JSGroupings/wUserUtils.php',
      'to' =>  'custom/Extension/application/Ext/JSGroupings/wUserUtils.php'
    ),
    3 =>     array (
      'from' =>  '<basepath>/custom/Extension/application/Ext/Language/en_us.wUserUtils.php',
      'to' =>  'custom/Extension/application/Ext/Language/en_us.wUserUtils.php'
    ),
    4 =>     array (
      'from' =>  '<basepath>/custom/Extension/application/Ext/LogicHooks/broadcastMessage.php',
      'to' =>  'custom/Extension/application/Ext/LogicHooks/broadcastMessage.php'
    ),
    5 =>     array (
      'from' =>  '<basepath>/custom/Extension/application/Language/en_us.Maintenance_Exception.php',
      'to' =>  'custom/Extension/application/Language/en_us.Maintenance_Exception.php'
    ),
    6 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Administration/Ext/Administration/wUserUtils.php',
      'to' =>  'custom/Extension/modules/Administration/Ext/Administration/wUserUtils.php'
    ),
    7 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.wUserUtils.php',
      'to' =>  'custom/Extension/modules/Administration/Ext/Language/en_us.wUserUtils.php'
    ),
    8 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Dashboards/Ext/LogicHooks/AddDefaultFilter.php',
      'to' =>  'custom/Extension/modules/Dashboards/Ext/LogicHooks/AddDefaultFilter.php'
    ),
    9 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Filters/Ext/Vardefs/default_filter.php',
      'to' =>  'custom/Extension/modules/Filters/Ext/Vardefs/default_filter.php'
    ),
    10 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Filters/Ext/clients/base/filters/default/AddDefaultFilterToFilterableFields.php',
      'to' =>  'custom/Extension/modules/Filters/Ext/clients/base/filters/default/AddDefaultFilterToFilterableFields.php'
    ),
    11 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Filters/Ext/clients/base/views/list/AddDefaultFilterFieldOnListView.php',
      'to' =>  'custom/Extension/modules/Filters/Ext/clients/base/views/list/AddDefaultFilterFieldOnListView.php'
    ),
    12 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Filters/Ext/clients/base/views/record/add_default_filter_on_recordview.php',
      'to' =>  'custom/Extension/modules/Filters/Ext/clients/base/views/record/add_default_filter_on_recordview.php'
    ),
    13 =>     array (
      'from' =>  '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/wUserUtilsJob.php',
      'to' =>  'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/wUserUtilsJob.php'
    ),
    14 =>     array (
      'from' =>  '<basepath>/custom/clients/base/api/ControlUsersLoginTimesApi.php',
      'to' =>  'custom/clients/base/api/ControlUsersLoginTimesApi.php'
    ),
    15 =>     array (
      'from' =>  '<basepath>/custom/clients/base/api/uUserUtilsFunctionsApi.php',
      'to' =>  'custom/clients/base/api/uUserUtilsFunctionsApi.php'
    ),
    16 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/broadcast-message/broadcast-message.php',
      'to' =>  'custom/clients/base/layouts/broadcast-message/broadcast-message.php'
    ),
    17 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/control-users-login-times/control-users-login-times.php',
      'to' =>  'custom/clients/base/layouts/control-users-login-times/control-users-login-times.php'
    ),
    18 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/copy-dashboard/copy-dashboard.hbs',
      'to' =>  'custom/clients/base/layouts/copy-dashboard/copy-dashboard.hbs'
    ),
    19 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/copy-dashboard/copy-dashboard.js',
      'to' =>  'custom/clients/base/layouts/copy-dashboard/copy-dashboard.js'
    ),
    20 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/copy-dashboard/copy-dashboard.php',
      'to' =>  'custom/clients/base/layouts/copy-dashboard/copy-dashboard.php'
    ),
    21 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/copy-filter/copy-filter.hbs',
      'to' =>  'custom/clients/base/layouts/copy-filter/copy-filter.hbs'
    ),
    22 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/copy-filter/copy-filter.js',
      'to' =>  'custom/clients/base/layouts/copy-filter/copy-filter.js'
    ),
    23 =>     array (
      'from' =>  '<basepath>/custom/clients/base/layouts/copy-filter/copy-filter.php',
      'to' =>  'custom/clients/base/layouts/copy-filter/copy-filter.php'
    ),
    24 =>     array (
      'from' =>  '<basepath>/custom/clients/base/views/broadcast-message-view/broadcast-message-view.hbs',
      'to' =>  'custom/clients/base/views/broadcast-message-view/broadcast-message-view.hbs'
    ),
    25 =>     array (
      'from' =>  '<basepath>/custom/clients/base/views/broadcast-message-view/broadcast-message-view.js',
      'to' =>  'custom/clients/base/views/broadcast-message-view/broadcast-message-view.js'
    ),
    26 =>     array (
      'from' =>  '<basepath>/custom/clients/base/views/control-users-login-times/control-users-login-times.hbs',
      'to' =>  'custom/clients/base/views/control-users-login-times/control-users-login-times.hbs'
    ),
    27 =>     array (
      'from' =>  '<basepath>/custom/clients/base/views/control-users-login-times/control-users-login-times.js',
      'to' =>  'custom/clients/base/views/control-users-login-times/control-users-login-times.js'
    ),
    28 =>     array (
      'from' =>  '<basepath>/custom/clients/base/views/filter-actions/filter-actions.hbs',
      'to' =>  'custom/clients/base/views/filter-actions/filter-actions.hbs'
    ),
    29 =>     array (
      'from' =>  '<basepath>/custom/entrypoints/BackAdmin.php',
      'to' =>  'custom/entrypoints/BackAdmin.php'
    ),
    30 =>     array (
      'from' =>  '<basepath>/custom/include/SugarOAuth2/SugarOAuth2Server.php',
      'to' =>  'custom/include/SugarOAuth2/SugarOAuth2Server.php'
    ),
    31 =>     array (
      'from' =>  '<basepath>/custom/include/SugarOAuth2/SugarOAuth2ServerOIDC.php',
      'to' =>  'custom/include/SugarOAuth2/SugarOAuth2ServerOIDC.php'
    ),
    32 =>     array (
      'from' =>  '<basepath>/custom/include/javascript/_addCopyDashboard.js',
      'to' =>  'custom/include/javascript/_addCopyDashboard.js'
    ),
    33 =>     array (
      'from' =>  '<basepath>/custom/include/javascript/afterLoginFunctionality.js',
      'to' =>  'custom/include/javascript/afterLoginFunctionality.js'
    ),
    34 =>     array (
      'from' =>  '<basepath>/custom/include/javascript/checkForBroadcast.js',
      'to' =>  'custom/include/javascript/checkForBroadcast.js'
    ),
    35 =>     array (
      'from' =>  '<basepath>/custom/include/javascript/extendCollectionFilter.js',
      'to' =>  'custom/include/javascript/extendCollectionFilter.js'
    ),
    36 =>     array (
      'from' =>  '<basepath>/custom/include/javascript/wuserutils.js',
      'to' =>  'custom/include/javascript/wuserutils.js'
    ),
    37 =>     array (
      'from' =>  '<basepath>/custom/include/wsystems/SugarAutoLoaderCustom.php',
      'to' =>  'custom/include/wsystems/SugarAutoLoaderCustom.php'
    ),
    38 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/LoginAs.php',
      'to' =>  'custom/modules/Administration/LoginAs.php'
    ),
    39 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/css/jquery.bsmselect.css',
      'to' =>  'custom/modules/Administration/css/jquery.bsmselect.css'
    ),
    40 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/css/optional_style.css',
      'to' =>  'custom/modules/Administration/css/optional_style.css'
    ),
    41 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/javascript/delete_script.js',
      'to' =>  'custom/modules/Administration/javascript/delete_script.js'
    ),
    42 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/javascript/yui/connection-min.js',
      'to' =>  'custom/modules/Administration/javascript/yui/connection-min.js'
    ),
    43 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/javascript/yui/element-min.js',
      'to' =>  'custom/modules/Administration/javascript/yui/element-min.js'
    ),
    44 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/javascript/yui/tabview-min.js',
      'to' =>  'custom/modules/Administration/javascript/yui/tabview-min.js'
    ),
    45 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/javascript/yui/yahoo-dom-event.js',
      'to' =>  'custom/modules/Administration/javascript/yui/yahoo-dom-event.js'
    ),
    46 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/wUserUtils.php',
      'to' =>  'custom/modules/Administration/wUserUtils.php'
    ),
    47 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/wUserUtils.tpl',
      'to' =>  'custom/modules/Administration/wUserUtils.tpl'
    ),
    48 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/wUserUtilsFunctionality.php',
      'to' =>  'custom/modules/Administration/wUserUtilsFunctionality.php'
    ),
    49 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/wUserUtilsQueryManager.php',
      'to' =>  'custom/modules/Administration/wUserUtilsQueryManager.php'
    ),
    50 =>     array (
      'from' =>  '<basepath>/custom/modules/Administration/wUserUtils_utils.php',
      'to' =>  'custom/modules/Administration/wUserUtils_utils.php'
    ),
    51 =>     array (
      'from' =>  '<basepath>/custom/modules/Dashboards/AfterSaveDashboard.php',
      'to' =>  'custom/modules/Dashboards/AfterSaveDashboard.php'
    ),
    52 =>     array (
      'from' =>  '<basepath>/custom/modules/Notifications/clients/base/fields/severity/detail.hbs',
      'to' =>  'custom/modules/Notifications/clients/base/fields/severity/detail.hbs'
    ),
    53 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/AfterLoginGetCookiesForSubpanelsState.php',
      'to' =>  'custom/modules/Users/AfterLoginGetCookiesForSubpanelsState.php'
    ),
    54 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/CreateListViewForLoginAs.php',
      'to' =>  'custom/modules/Users/CreateListViewForLoginAs.php'
    ),
    55 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/addPermissions.php',
      'to' =>  'custom/modules/Users/addPermissions.php'
    ),
    56 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/filter_users.php',
      'to' =>  'custom/modules/Users/filter_users.php'
    ),
    57 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/getColumns.php',
      'to' =>  'custom/modules/Users/getColumns.php'
    ),
    58 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/getDashboards.php',
      'to' =>  'custom/modules/Users/getDashboards.php'
    ),
    59 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/getDashboardsAndFilters.php',
      'to' =>  'custom/modules/Users/getDashboardsAndFilters.php'
    ),
    60 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/getPreferences.php',
      'to' =>  'custom/modules/Users/getPreferences.php'
    ),
    61 =>     array (
      'from' =>  '<basepath>/custom/modules/Users/views/view.loginas.php',
      'to' =>  'custom/modules/Users/views/view.loginas.php'
    ),
    62 =>     array (
      'from' =>  '<basepath>/custom/modules/checkBroadcast.php',
      'to' =>  'custom/modules/checkBroadcast.php'
    ),
    63 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/ConfiguratorManager.php',
      'to' =>  'custom/src/wsystems/wUserUtils/ConfiguratorManager.php'
    ),
    64 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/Helpers/LoggerHelper.php',
      'to' =>  'custom/src/wsystems/wUserUtils/Helpers/LoggerHelper.php'
    ),
    65 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/JSGroupings/ExtendFabDashboard.js',
      'to' =>  'custom/src/wsystems/wUserUtils/JSGroupings/ExtendFabDashboard.js'
    ),
    66 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/JSGroupings/ExtendFilterDropdown.js',
      'to' =>  'custom/src/wsystems/wUserUtils/JSGroupings/ExtendFilterDropdown.js'
    ),
    67 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/JSGroupings/plugins/component.extend.js',
      'to' =>  'custom/src/wsystems/wUserUtils/JSGroupings/plugins/component.extend.js'
    ),
    68 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/PackageHooks/PostExecute.php',
      'to' =>  'custom/src/wsystems/wUserUtils/PackageHooks/PostExecute.php'
    ),
    69 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/PackageHooks/PreUninstall.php',
      'to' =>  'custom/src/wsystems/wUserUtils/PackageHooks/PreUninstall.php'
    ),
    70 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/Traits/SugarConfigTrait.php',
      'to' =>  'custom/src/wsystems/wUserUtils/Traits/SugarConfigTrait.php'
    ),
    71 =>     array (
      'from' =>  '<basepath>/custom/src/wsystems/wUserUtils/Utils/Utils.php',
      'to' =>  'custom/src/wsystems/wUserUtils/Utils/Utils.php'
    ),
    72 =>     array (
      'from' =>  '<basepath>/custom/themes/broadcast.css',
      'to' =>  'custom/themes/broadcast.css'
    ),
    73 =>     array (
      'from' =>  '<basepath>/custom/wUserUtilsEntryPoint.php',
      'to' =>  'custom/wUserUtilsEntryPoint.php'
    )
  )
);