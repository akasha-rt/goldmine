<?php

global $db, $current_user, $app_list_strings, $mod_strings, $sugar_config, $app_strings;

require_once 'custom/modules/Administration/wUserUtils_utils.php';
require_once 'custom/modules/Administration/wUserUtilsQueryManager.php';
require_once "modules/MySettings/TabController.php";

$maintenance = $sugar_config['maintenanceMode'];

if ($maintenance) {
    $maintenance_info = "Maintenance Mode Activated!";
} else {
    $maintenance_info = "";
}

$maintenance_message = $app_strings['EXCEPTION_MAINTENANCE'];

$qm = new wUserUtilsQueryManager();

$teams        = $qm->getTeams();
$users        = $qm->getUsers();
$roles        = $qm->getRoles();
$authRoles    = $qm->getRoles();
$columns      = $qm->getwColumns($current_user->id);
$groupUsers   = $qm->getGroupUsers();
$regularUsers = $qm->getRegularUsers();

$getPackage                 = $qm->getwColumnsPackage();
$getDrillDownPackageVersion = $qm->getDrillDownPackageVersion();

if ($getDrillDownPackageVersion < 9) {
    $getDrillDownPackageVersion = false;
} else {
    $getDrillDownPackageVersion = true;
}

$wColumns_options_str = transformToSelectHtml($columns);

$modules_selection = array();

$controller = new TabController();
$tabs       = $controller->get_tabs_system();

$active_modules   = $tabs[0];
$inactive_modules = $tabs[1];

$translated_active_modules   = array();
$translated_inactive_modules = array();

//translate the modules
foreach ($active_modules as $tab) {
    $translated_active_modules[] = $app_list_strings['moduleList'][$tab];
}

foreach ($inactive_modules as $tab) {
    $translated_inactive_modules[] = $app_list_strings['moduleList'][$tab];
}
asort($translated_inactive_modules);
asort($translated_active_modules);

asort($users);
asort($teams);
asort($roles);

foreach ($translated_active_modules as $tab) {
    $modules_selection['Active'][$tab] = $tab;
}
foreach ($translated_inactive_modules as $tab) {
    $modules_selection['Inactive'][$tab] = $tab;
}

$smarty = new Sugar_Smarty();
$smarty->assign('MOD', $mod_strings);
$smarty->assign('TEAM_LIST', $teams);
$smarty->assign('ROLES_LIST', $roles);
$smarty->assign('ROLES_LIST_DESTINATION', $authRoles);
$smarty->assign('wColumns', $getPackage);
$smarty->assign('wDrillDownCorrectVersion', $getDrillDownPackageVersion);
$smarty->assign('MODULES_LIST', $modules_selection);
$smarty->assign('USER_LIST', $users);
$smarty->assign('GROUP_USER_LIST', $groupUsers);
$smarty->assign('REGULAR_USER_LIST', $regularUsers);
$smarty->assign('CURRENT_USER', $current_user->id);
$smarty->assign('wColumns_options_str', $wColumns_options_str);
$smarty->assign('maintenance_message', $maintenance_message);
$smarty->assign('maintenance_info', $maintenance_info);

require_once 'modules/Administration/Administration.php';
$administrationObj = new Administration();

$administrationObj->retrieveSettings('login_as_selected');
$settings = unserialize(base64_decode($administrationObj->settings['login_as_selected_Settings']));

$selectedUsersForAuth = $settings->users;
$selectedTeamsForAuth = $settings->teams;
$selectedRolesForAuth = $settings->roles;

$smarty->assign('SELECTED_USERS_LIST', $selectedUsersForAuth);
$smarty->assign('SELECTED_TEAMS_LIST', $selectedTeamsForAuth);
//$smarty->assign('SELECTED_ROLES_LIST', $selectedRolesForAuth);
$smarty->assign('SELECTED_ROLES_LIST_DESTINATION', $selectedRolesForAuth);

require_once SugarAutoLoader::existingCustom('modules/Users/views/view.list.php')[0];
$usersListView             = new UsersViewList();
$usersListView->lv         = new ListViewSmarty();
$usersListView->lv->delete = false;
$usersListView->lv->email  = false;
$userSeed                  = new User();
$usersListView->seed       = $userSeed;
$usersListView->prepareSearchForm();
$usersListView->lv->searchColumns = $usersListView->searchForm->searchColumns;

$usersListView->lv->ss->assign("SEARCH", true);
if (!empty($usersListView->where)) {
    $usersListView->where .= " AND";
}
$usersListView->where .= " (users.status !='Reserved' or users.status is null) ";
if (!$usersListView->params) {
    $params                  = array();
    $params['overrideOrder'] = true;
    $params['orderBy']       = "null";
} else {
    $params                  = $usersListView->params;
    $params['overrideOrder'] = true;
    $params['orderBy']       = "null";
}
$params['include_custom_fields'] = false;
$params['massupdate']            = false;
$params['handleMassupdate']      = false;
$params['joined_tables']         = false;

$usersListView->lv->setup($usersListView->seed, 'include/ListView/ListViewGeneric.tpl', $usersListView->where, $params, 0, -1, array('id', 'first_name', 'last_name'), 'id');

$usersListView->process();

include SugarAutoLoader::existingCustomOne('modules/Users/metadata/searchdefs.php');
include SugarAutoLoader::existingCustomOne('modules/Users/metadata/SearchFields.php');

$usersListView->searchForm->module = "Users";

$usersListView->searchForm->setup($searchdefs, $searchFields, 'SearchFormGeneric.tpl', 'basic_search');
$text = $usersListView->searchForm->display(true);

$smarty->assign('DATA_SEARCH', $text);

$smarty = setupAdvancedTabLocaleSettings($smarty);
$smarty->display('custom/modules/Administration/wUserUtils.tpl');

function setupAdvancedTabLocaleSettings($smarty)
{
    global $locale, $sugar_config, $app_list_strings, $current_user;

    ///////////////////////////////////////////////////////////////////////////////
    ////    LOCALE SETTINGS
    ////    Date/time format
    $dformat = $locale->getPrecedentPreference($current_user->id ? 'datef' : 'default_date_format', $current_user);
    $tformat = $locale->getPrecedentPreference($current_user->id ? 'timef' : 'default_time_format', $current_user);
    $nformat = $locale->getPrecedentPreference('default_locale_name_format', $current_user);
    if (!array_key_exists($nformat, $sugar_config['name_formats'])) {
        $nformat = $sugar_config['default_locale_name_format'];
    }
    $timeOptions = get_select_options_with_id($sugar_config['time_formats'], $tformat);
    $dateOptions = get_select_options_with_id($sugar_config['date_formats'], $dformat);
    $nameOptions = get_select_options_with_id($locale->getUsableLocaleNameOptions($sugar_config['name_formats']), $nformat);
    $smarty->assign('TIMEOPTIONS', $timeOptions);
    $smarty->assign('DATEOPTIONS', $dateOptions);
    $smarty->assign('NAMEOPTIONS', $nameOptions);
    $smarty->assign('DATEFORMAT', $sugar_config['date_formats'][$dformat]);
    $smarty->assign('TIMEFORMAT', $sugar_config['time_formats'][$tformat]);
    $smarty->assign('NAMEFORMAT', $sugar_config['name_formats'][$nformat]);

    //// Timezone
    if (empty($current_user->id)) {
        // remove default timezone for new users(set later)
        $current_user->user_preferences['timezone'] = '';
    }

    $userTZ = $current_user->getPreference('timezone');

    if (empty($userTZ) && !$current_user->is_group && !$current_user->portal_only) {
        $userTZ = TimeDate::guessTimezone();
        $current_user->setPreference('timezone', $userTZ);
    }

    if (!$current_user->getPreference('ut')) {
        $smarty->assign('PROMPTTZ', ' checked');
    }
    $smarty->assign('TIMEZONE_CURRENT', $userTZ);
    $smarty->assign('TIMEZONEOPTIONS', TimeDate::getTimezoneList());
    $smarty->assign("TIMEZONE", TimeDate::tzName($userTZ));

    // FG - Bug 4236 - Managed First Day of Week
    $fdowDays = array();
    foreach ($app_list_strings['dom_cal_day_long'] as $d) {
        if ($d != "") {
            $fdowDays[] = $d;
        }
    }
    $smarty->assign("FDOWOPTIONS", $fdowDays);
    $currentFDOW = $current_user->get_first_day_of_week();

    if (!isset($currentFDOW)) {
        $currentFDOW = 0;
    }
    $smarty->assign("FDOWCURRENT", $currentFDOW);
    $smarty->assign("FDOWDISPLAY", $fdowDays[$currentFDOW]);

    //// Numbers and Currency display
    require_once 'modules/Currencies/ListCurrency.php';
    $currency = new ListCurrency();

    // 10/13/2006 Collin - Changed to use Localization.getConfigPreference
    // This was the problem- Previously, the "-99" currency id always assumed
    // to be defaulted to US Dollars.  However, if someone set their install to use
    // Euro or other type of currency then this setting would not apply as the
    // default because it was being overridden by US Dollars.
    $cur_id = $locale->getPrecedentPreference('currency', $current_user);
    if ($cur_id) {
        $selectCurrency = $currency->getSelectOptions($cur_id);
        $smarty->assign("CURRENCY", $selectCurrency);
    } else {
        $selectCurrency = $currency->getSelectOptions();
        $smarty->assign("CURRENCY", $selectCurrency);
    }

    // convert base currency values to user preferred
    $smarty->assign("currency_show_preferred", $locale->getPrecedentPreference('currency_show_preferred', $current_user));

    $currencyList = array();
    foreach ($locale->getCurrencies() as $id => $val) {
        $currencyList[$id] = $val['symbol'];
    }
    $currencySymbolJSON = json_encode($currencyList);
    $smarty->assign('currencySymbolJSON', $currencySymbolJSON);

    $currencyDisplay = BeanFactory::getBean('Currencies');
    if (isset($cur_id)) {
        $currencyDisplay->retrieve($cur_id);
        $smarty->assign('CURRENCY_DISPLAY', $currencyDisplay->iso4217 . ' ' . $currencyDisplay->symbol);
    } else {
        $smarty->assign("CURRENCY_DISPLAY", $currencyDisplay->getDefaultISO4217() . ' ' . $currencyDisplay->getDefaultCurrencySymbol());
    }

    // fill significant digits dropdown
    $significantDigits = $locale->getPrecedentPreference('default_currency_significant_digits', $current_user);
    $sigDigits         = '';
    for ($i = 0; $i <= 6; $i++) {
        if ($significantDigits == $i) {
            $sigDigits .= "<option value=\"$i\" selected=\"true\">$i</option>";
        } else {
            $sigDigits .= "<option value=\"$i\">{$i}</option>";
        }
    }

    $smarty->assign('sigDigits', $sigDigits);
    $smarty->assign('CURRENCY_SIG_DIGITS', $significantDigits);

    $num_grp_sep = $current_user->getPreference('num_grp_sep');
    $dec_sep     = $current_user->getPreference('dec_sep');
    $smarty->assign("NUM_GRP_SEP", (empty($num_grp_sep) ? $GLOBALS['sugar_config']['default_number_grouping_seperator'] : $num_grp_sep));
    $smarty->assign("DEC_SEP", (empty($dec_sep) ? $GLOBALS['sugar_config']['default_decimal_seperator'] : $dec_sep));
    $smarty->assign('getNumberJs', $locale->getNumberJs());

    //// Name display format
    $smarty->assign('default_locale_name_format', $locale->getLocaleFormatMacro($current_user));
    $smarty->assign('getNameJs', $locale->getNameJs());
    $smarty->assign('NAME_FORMAT', $current_user->getLocaleFormatDesc());

    return $smarty;
    ////    END LOCALE SETTINGS
}

require_once 'include/SugarQueue/SugarJobQueue.php';
if (($_REQUEST['ActivateMaintenance'] == 'Activate Maintenance'
    || $_REQUEST['DeactivateMaintenance'] == 'Deactivate Maintenance'
    || $_REQUEST['AddPermissions'] == 'Add Permissions'
    || $_REQUEST['ConvertRegularUser'] == 'Convert Regular User'
    || $_REQUEST['ConvertGroupUser'] == 'Convert Group User'
    || $_REQUEST['AddwColumns'] == 'Add wColumns'
    || $_REQUEST['CloneLocale'] == 'Clone Locale Settings'
    || $_REQUEST['Delete'] == 'Delete'
    || $_REQUEST['DeleteFilters'] == 'Delete Filters'
    || $_REQUEST['DeleteDashboards'] == 'Delete Dashboards'
    || $_REQUEST['AddFilters'] == 'Add Filters'
    || $_REQUEST['AddDashboards'] == 'Add Dashboards'
    || $_REQUEST['CloneSubpanels'] == 'CloneSubpanels'
    || $_REQUEST['Clone'] == 'Clone'
    || $_REQUEST['FieldNamePlacement'] == 'Save')
    && $_REQUEST['clone_type'] == 'scheduled_job'
) {

    // First, let's create the new job
    $job       = new SchedulersJob();
    $job->name = "wUserUtilsJob " . create_guid();
    $job->data = base64_encode(serialize($_REQUEST));
    // key piece, this is data we are passing to the job that it can use to run it.
    $job->target = "function::wUserUtilsJob";
    //function to call global
    $current_user;
    //user the job runs as
    $job->assigned_user_id = $current_user->id;
    // Now push into the queue to run
    $jq    = new SugarJobQueue();
    $jobid = $jq->submitJob($job);
    echo 'A job has been scheduled, you will be notified when it is complete...';
} elseif (($_REQUEST['ActivateMaintenance'] == 'Activate Maintenance'
    || $_REQUEST['DeactivateMaintenance'] == 'Deactivate Maintenance'
    || $_REQUEST['AddPermissions'] == 'Add Permissions'
    || $_REQUEST['ConvertRegularUser'] == 'Convert Regular User'
    || $_REQUEST['ConvertGroupUser'] == 'Convert Group User'
    || $_REQUEST['AddwColumns'] == 'Add wColumns'
    || $_REQUEST['CloneLocale'] == 'Clone Locale Settings'
    || $_REQUEST['Delete'] == 'Delete'
    || $_REQUEST['DeleteFilters'] == 'Delete Filters'
    || $_REQUEST['DeleteDashboards'] == 'Delete Dashboards'
    || $_REQUEST['AddFilters'] == 'Add Filters'
    || $_REQUEST['AddDashboards'] == 'Add Dashboards'
    || $_REQUEST['CloneSubpanels'] == 'CloneSubpanels'
    || $_REQUEST['Clone'] == 'Clone'
    || $_REQUEST['FieldNamePlacement'] == 'Save')
    && $_REQUEST['clone_type'] == 'no_scheduled_job'
) {
    require_once 'custom/modules/Administration/wUserUtilsFunctionality.php';

    wUserUtils(base64_encode(serialize($_REQUEST)));

    echo 'done.......';
}
