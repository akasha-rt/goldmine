<?php

$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
    'regex_matches' => array(
        '7.9*','7.10*','7.11*','8.*'
    ),
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (

        'PRO',
        'ENT',
        'CORP',
        'ULT',
    ),
  ),
  'readme' => 'Jackal Software Dashboard Copy Manager For SugarCRM 7 and SugarCRM 8
Dashboard Manager
================
This is a module loadable plugin for use with SugarCRM 7.

Icon made by MadeByOliver on www.flaticon.com',
  'key' => 'jckl_dashboard001070',
  'author' => 'Jackal Software',
  'description' => 'Copy Dashboard to Roles, Users, or Teams in SugarCRM',
  'is_uninstallable' => true,
  'name' => 'DashboardCopyManagerSugar7',
  'published_date' => '2018-06-05 12:37:17',
  'type' => 'module',
  'version' => '1.80',
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'DashboardCopyManager',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'jckl_DashboardDeployments',
      'class' => 'jckl_DashboardDeployments',
      'path' => 'modules/jckl_DashboardDeployments/jckl_DashboardDeployments.php',
      'tab' => false,
    ),
    1 => 
    array (
      'module' => 'jckl_DashboardTemplates',
      'class' => 'jckl_DashboardTemplates',
      'path' => 'modules/jckl_DashboardTemplates/jckl_DashboardTemplates.php',
      'tab' => false,
    ),
  ),

  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/jckl_dashboarddeployments_jckl_dashboardtemplates_jckl_DashboardTemplates.php',
      'to_module' => 'jckl_DashboardTemplates',
    ),
  ),
  'relationships' =>
  array (
    0 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/jckl_dashboarddeployments_jckl_dashboardtemplatesMetaData.php',
    ),
  ),

  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jckl_DashboardDeployments',
      'to' => 'modules/jckl_DashboardDeployments',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jckl_DashboardTemplates',
      'to' => 'modules/jckl_DashboardTemplates',
    ),
    2 =>
    array(

        'from' => '<basepath>/license',
        'to' => 'modules/jckl_DashboardTemplates',

    ),
    3 =>
    array(
        'from' => '<basepath>/SugarModules/custom/modules/jckl_DashboardDeployments/clients/base/views/subpanel-for-jckl_dashboardtemplates-jckl_dashboarddeployments_jckl_dashboardtemplates/subpanel-for-jckl_dashboardtemplates-jckl_dashboarddeployments_jckl_dashboardtemplates.php',
        'to' => 'custom/modules/jckl_DashboardDeployments/clients/base/views/subpanel-for-jckl_dashboardtemplates-jckl_dashboarddeployments_jckl_dashboardtemplates/subpanel-for-jckl_dashboardtemplates-jckl_dashboarddeployments_jckl_dashboardtemplates.php',
    ),
    4 =>
        array(
            'from' => '<basepath>/SugarModules/custom/modules/jckl_DashboardDeployments/clients/base/views/panel-top',
            'to' => 'custom/modules/jckl_DashboardDeployments/clients/base/views/panel-top',
        ),
  ),
  'administration' =>
      array(
          array(
              'from'=>'<basepath>/license_admin/menu/DashboardCopyLicenseAdmin.php',
              'to' => 'modules/Administration/DashboardCopyLicenseAdmin.php',
          ),
      ),
  'action_view_map' =>
      array (
          array(
              'from'=> '<basepath>/license_admin/actionviewmap/DashboardCopy_actionviewmap.php',
              'to_module'=> 'jckl_DashboardTemplates',
          ),
      ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/jckl_DashboardDeployments.php',
      'to_module' => 'jckl_DashboardDeployments',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/jckl_DashboardTemplates.php',
      'to_module' => 'jckl_DashboardTemplates',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    3 =>
    array(
        'from'=> '<basepath>/license_admin/language/en_us.DashboardCopyLicense.php',
        'to_module'=> 'Administration',
        'language'=>'en_us'
    ),

  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/jckl_dashboarddeployments_jckl_dashboardtemplates_jckl_DashboardDeployments.php',
      'to_module' => 'jckl_DashboardDeployments',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/jckl_dashboarddeployments_jckl_dashboardtemplates_jckl_DashboardTemplates.php',
      'to_module' => 'jckl_DashboardTemplates',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
  'sidecar' =>
      array (
          0 =>
              array (
                  'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/jckl_dashboarddeployments_jckl_dashboardtemplates_jckl_DashboardTemplates.php',
                  'to_module' => 'jckl_DashboardTemplates',
              ),
          1 =>
              array (
                  'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/jckl_dashboarddeployments_jckl_dashboardtemplates_jckl_DashboardTemplates.php',
                  'to_module' => 'jckl_DashboardTemplates',
              ),
      ),
);