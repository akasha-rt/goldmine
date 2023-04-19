<?php

use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Helpers\LoggerHelper;

function wUserUtils($data)
{
    require_once "custom/modules/Administration/wUserUtils_utils.php";
    require_once "custom/modules/Administration/wUserUtilsQueryManager.php";
    require_once "custom/include/wsystems/SugarAutoLoaderCustom.php";
    require_once "modules/Configurator/Configurator.php";
    require_once "modules/Administration/QuickRepairAndRebuild.php";
    require_once "modules/Administration/Administration.php";
    require_once "modules/MySettings/TabController.php";

    $log = LoggerHelper::getLoggerInstance();

    $qm = new wUserUtilsQueryManager();

    $_ORIGINAL_REQUEST = unserialize(base64_decode($data));

    global $db, $current_user, $app_strings, $app_list_strings;

    $autoLoaderCustom = new SugarAutoLoaderCustom();
    $filePath         = "custom/Extension/application/Ext/Language/en_us.Maintenance_Exception.php";

    $sth_selected                 = 0;
    $target_users_selected        = 1;
    $original_maintenance_message = "SugarCRM is in maintenance mode. Only admins can login. Please contact your administrator for details.";

    if ($_ORIGINAL_REQUEST["ActivateMaintenance"] === "Activate Maintenance") {
        $configuratorObj = new Configurator();
        $configuratorObj->loadConfig();
        $configuratorObj->config["maintenanceMode"] = true;

        if ($_ORIGINAL_REQUEST["maintenance_message"] !== "" && $_ORIGINAL_REQUEST["maintenance_message"] !== null) {
            $message = $_ORIGINAL_REQUEST['maintenance_message'];

            $autoLoaderCustom->touch($filePath, true);
            $autoLoaderCustom->put($filePath, '<?php $app_strings[\'EXCEPTION_MAINTENANCE\'] = \'' . $message . '\'; ?>', true);
        } else {
            $autoLoaderCustom->touch($filePath, true);
            $autoLoaderCustom->put($filePath, '<?php $app_strings[\'EXCEPTION_MAINTENANCE\'] = \'' . $original_maintenance_message . '\'; ?>', true);
        }

        $configuratorObj->saveConfig();

        $RAC     = new RepairAndClear();
        $actions = array("clearAll");
        $RAC->repairAndClearAll($actions, array(translate("LBL_ALL_MODULES")), false, false);

        $log->info("#wUserUtils#-> Activate Maintenance Functionality <- #wUserUtils#: The system was put in maintenance mode by " . $current_user->user_name . " user with ID = " . $current_user->id);
    }

    if ($_ORIGINAL_REQUEST["DeactivateMaintenance"] === "Deactivate Maintenance") {
        $configuratorObj = new Configurator();
        $configuratorObj->loadConfig();

        $autoLoaderCustom->touch($filePath, true);
        $autoLoaderCustom->put($filePath, '<?php $app_strings[\'EXCEPTION_MAINTENANCE\'] = \'' . $original_maintenance_message . '\'; ?>', true);

        $configuratorObj->config["maintenanceMode"] = false;
        $configuratorObj->saveConfig();

        $RAC     = new RepairAndClear();
        $actions = array("clearAll");
        $RAC->repairAndClearAll($actions, array(translate("LBL_ALL_MODULES")), false, false);

        $log->info("#wUserUtils#-> Deactivate Maintenance Functionality <- #wUserUtils#: The system maintenance mode was deactivated by " . $current_user->user_name . " user with ID = " . $current_user->id);
    }

    //copy wColumns
    if ($_ORIGINAL_REQUEST["AddwColumns"] === "Add wColumns") {
        require_once "custom/clients/base/api/ColumnSetCustomizations.php";

        if (SugarAutoLoader::load("custom/clients/base/api/ColumnSetCustomizations.php") === true) {
            $columnSet = new ColumnSetCustomizations();

            $sth_selected   = 1;
            $source_user_id = $_ORIGINAL_REQUEST["source_user"];

            $target_user_ids = array();
            $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

            if (count($target_user_ids) === 0) {
                $target_users_selected = 0;
            }

            $wColumns = $_ORIGINAL_REQUEST["wColumns"];

            foreach ($wColumns as $columnId) {
                $args = array("config" => array("configId" => $columnId), "usersIds" => $target_user_ids);
                $columnSet->saveNewCustomization(null, $args);

                $log->info("#wUserUtils#-> Add wColumns Functionality <- #wUserUtils#: The columns with ID = " . $columnId . " was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id);
            }

            if (is_null($wColumns)) {
                $not_str = "Columns were not added because none was selected";
                $qm->insertNotification($not_str);
            }

            if ($target_users_selected === 1 && !is_null($wColumns)) {
                $not_str = "Added ColumnsSet... OK";
                $qm->insertNotification($not_str);
            }
        }
    }

    //Added Login As Auth
    if ($_ORIGINAL_REQUEST["AddPermissions"] === "Add Permissions") {
        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["LoginAsUserAuth"], $_ORIGINAL_REQUEST["LoginAsTeamsAuth"], $_ORIGINAL_REQUEST["LoginAsRolesAuthRoles"]);

        //if exist users/teams/roles selected do logic
        $administrationObj = new Administration();

        //save the roles, teams, users
        $sel_obj        = new stdClass();
        $sel_obj->users = $_ORIGINAL_REQUEST["LoginAsUserAuth"];
        $sel_obj->teams = $_ORIGINAL_REQUEST["LoginAsTeamsAuth"];
        $sel_obj->roles = $_ORIGINAL_REQUEST["LoginAsRolesAuthRoles"];

        $administrationObj->saveSetting("login_as_selected", "Settings", base64_encode(serialize($sel_obj)));

        if (count($target_user_ids) === 0) {
            $target_users_selected = 0;
        }

        $administrationObj->saveSetting("login_as_privilege", "Settings", base64_encode(serialize($target_user_ids)));

        $log->info("#wUserUtils#-> Add Permissions Functionality <- #wUserUtils#: The Login As Permission was added by " . $current_user->user_name . " user with ID = " . $current_user->id);

        if ($target_users_selected === 1) {
            $not_str = "Added Login As Authorization... OK";
            $qm->insertNotification($not_str);
        }
    }

    //Convert Group Users
    if ($_ORIGINAL_REQUEST["ConvertGroupUser"] === "Convert Group User") {
        $sel_obj        = new stdClass();
        $sel_obj->users = $_ORIGINAL_REQUEST["ConvertGroupUsers"];

        if (empty($sel_obj->users)) {
            $not_str = 'You have to select at least one group user if you want to use convert action.';
            $qm->insertNotification($not_str);
        } else {
            $qm->convertGroupToRegular($sel_obj->users);
        }
    }

    //Convert Regular Users
    if ($_ORIGINAL_REQUEST["ConvertRegularUser"] === "Convert Regular User") {
        $sel_obj        = new stdClass();
        $sel_obj->users = $_ORIGINAL_REQUEST["ConvertRegularUsers"];

        if (empty($sel_obj->users)) {
            $not_str = 'You have to select at least one regular user if you want to use convert action.';
            $qm->insertNotification($not_str);
        } else {
            $qm->convertRegularToGroup($sel_obj->users);
        }
    }

    //copy filters
    if ($_ORIGINAL_REQUEST["AddFilters"] === "Add Filters") {
        if ($_ORIGINAL_REQUEST["append_checkbox"] === "append_checkbox") {
            //set date format for target user
            $appendTextName = $_ORIGINAL_REQUEST["appendTextName"];
        }

        if ($_ORIGINAL_REQUEST["prepend_checkbox"] === "prepend_checkbox") {
            //set date format for target user
            $prependTextName = $_ORIGINAL_REQUEST["prependTextName"];
        }

        $sth_selected   = 1;
        $source_user_id = $_ORIGINAL_REQUEST['source_user'];

        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

        if (count($target_user_ids) == 0) {
            $target_users_selected = 0;
        }

        $filters = $_ORIGINAL_REQUEST['source_filters'];

        if (empty($filters)) {
            $not_str = "Filters were not added because none was selected";
            $qm->insertNotification($not_str);
        } else {
            if (($key = array_search($source_user_id, $target_user_ids)) !== false) {
                unset($target_user_ids[$key]);
            }

            foreach ($target_user_ids as $target_user_id) {
                //get all the filters of the target user
                $target_filters        = array();
                $filters_to_add        = array();
                $sql_filters_of_target = <<<SQL
SELECT
    name, filter_definition, module_name
FROM
    filters
WHERE
    created_by = '{$target_user_id}'
        AND deleted = '0'
SQL;
                $result_filters_of_target = $db->query($sql_filters_of_target);

                while ($row_filters_of_target = $db->fetchByAssoc($result_filters_of_target)) {
                    $filter_obj = (object) array(
                        "filter_name"       => $row_filters_of_target["name"],
                        "filter_definition" => $row_filters_of_target["filter_definition"],
                        "filter_module"     => $row_filters_of_target["module_name"],
                    );
                    $target_filters[] = $filter_obj;
                }

                foreach ($filters as $filter_id) {
                    //Check if the destination user already has this filter
                    $sql_filter_to_add = <<<SQL
SELECT
    name, filter_definition, module_name
FROM
    filters
WHERE
    id = '{$filter_id}'
SQL;
                    $result_filter_to_add = $db->query($sql_filter_to_add);
                    $row_filter_to_add    = $db->fetchByAssoc($result_filter_to_add);
                    $should_be_added      = 1;

                    $filter_name       = $row_filter_to_add["name"];
                    $filter_definition = $row_filter_to_add["filter_definition"];
                    $filter_module     = $row_filter_to_add["module_name"];
                    if (isset($target_filters) || !empty($target_filters)) {
                        foreach ($target_filters as $target_filter) {
                            if (
                                $target_filter->{"filter_name"} == $filter_name &&
                                $target_filter->{"filter_definition"} == $filter_definition &&
                                $target_filter->{"filter_module"} == $filter_module
                            ) {
                                $should_be_added = 0;
                            }
                        }
                    }

                    if ($should_be_added == 1) {
                        $filters_to_add[] = $filter_id;
                    }
                }

                foreach ($filters_to_add as $filter_id) {
                    $qm->copyFilter($filter_id, $target_user_id, $appendTextName, $prependTextName);

                    $log->info("#wUserUtils#-> Add Filters Functionality <- #wUserUtils#: The filter with ID = " . $filter_id . " was clone by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
                }
            }
            if ($target_users_selected == 1) {
                $not_str = "Added Filters... OK";
                $qm->insertNotification($not_str);
            }
        }
    }

    if ($_ORIGINAL_REQUEST["AddDashboards"] === "Add Dashboards") {
        if ($_ORIGINAL_REQUEST["append_checkbox_dash"] === "append_checkbox_dash") {
            //set date format for target user
            $appendTextName = $_ORIGINAL_REQUEST["appendTextNameDash"];
        }

        if ($_ORIGINAL_REQUEST["prepend_checkbox_dash"] === "prepend_checkbox_dash") {
            //set date format for target user
            $prependTextName = $_ORIGINAL_REQUEST["prependTextNameDash"];
        }

        if ($_ORIGINAL_REQUEST["create_unique_drilldown_filters_checkbox"] === "create_unique_drilldown_filters_checkbox") {
            $createUniqueDrilldownFilters = true;
        }

        if ($_ORIGINAL_REQUEST["copy_filters_templates_checkbox_dash"] === "copy_filters_templates_checkbox_dash") {
            $copyDrillDownFiltersTemplates = true;
        }

        $sth_selected   = 1;
        $source_user_id = $_ORIGINAL_REQUEST["source_user"];

        $target_user_ids = array();

        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

        if (count($target_user_ids) == 0) {
            $target_users_selected = 0;
        }

        if (($key = array_search($source_user_id, $target_user_ids)) !== false) {
            unset($target_user_ids[$key]);
        }

        $dashlets = $_ORIGINAL_REQUEST["source_dashlets"];

        foreach ($target_user_ids as $target_user_id) {
            foreach ($dashlets as $dashlet) {
                //delete the dashboards if they already exist on the target user
                $sql1 = <<<SQL
SELECT
    id, name, dashboard_module, metadata
FROM
    dashboards
WHERE
    assigned_user_id = '{$target_user_id}'
        AND deleted = '0'
SQL;

                $sql2 = <<<SQL
SELECT
    name, dashboard_module, metadata
FROM
    dashboards
WHERE
    id = '{$dashlet}' AND deleted = '0'
SQL;
                $result2 = $db->query($sql2);
                $row2    = $db->fetchByAssoc($result2);

                $result1 = $db->query($sql1);
                while ($row1 = $db->fetchByAssoc($result1)) {
                    if ($row1["dashboard_module"] == $row2["dashboard_module"] && $row1["name"] == $row2["name"]) {
                        $id_to_delete = $row1["id"];
                        $sql3         = <<<SQL
DELETE FROM dashboards
WHERE
    id = '{$id_to_delete}'
SQL;
                        $db->query($sql3);
                    }
                }

                //Get the metadata and the filter id of the dashboard(from the metadata)
                $filter_select = <<<SQL
SELECT
    metadata
FROM
    dashboards
WHERE
    id = '{$dashlet}' AND deleted = '0'
SQL;

                $result_filter = $db->query($filter_select);
                $row_filter    = $db->fetchByAssoc($result_filter);
                $metadata      = $row_filter['metadata'];
                $metadata      = json_decode(html_entity_decode($metadata));

                foreach ($metadata->dashlets as $component) {
                    if (isset($component->view->type)) {
                        //if the metadata has a filter_id
                        if (
                            isset($component->view->filter_id) &&
                            preg_match("/^(\{)?[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}(?(1)\})$/i", $component->view->filter_id)
                        ) {
                            $filter_id = $component->view->filter_id;

                            //Check if the target user has any filters created
                            $sql_filters_of_target_user = <<<SQL
SELECT
    id, name, filter_definition, filter_template, module_name
FROM
    filters
WHERE
    created_by = '{$target_user_id}'
        AND deleted = 0
SQL;
                            $result_filters_of_target_user = $db->query($sql_filters_of_target_user);

                            $sql_check_filters = <<<SQL
SELECT
    name, filter_definition, filter_template, module_name
FROM
    filters
WHERE
    id = '{$filter_id}' AND deleted = 0
SQL;

                            $result_check_filters = $db->query($sql_check_filters);
                            $row_check_filters    = $db->fetchByAssoc($result_check_filters);

                            while ($row_filters_of_target_user = $db->fetchByAssoc($result_filters_of_target_user)) {
                                /*if the target user has filters we first check if the filter we want to insert already exists for the current target user and set the metadata filter_id */
                                if (
                                    trim($row_filters_of_target_user["name"]) == trim($row_check_filters["name"]) && trim($row_filters_of_target_user["filter_definition"]) == trim($row_check_filters["filter_definition"]) && trim($row_filters_of_target_user["filter_template"]) == trim($row_check_filters["filter_template"]) &&
                                    trim($row_filters_of_target_user["module_name"]) == trim($row_check_filters["module_name"])
                                ) {
                                    $filter_id = $row_filters_of_target_user["id"];
                                    break;
                                }
                            }

                            if ($filter_id == $component->view->filter_id) {
                                $additional_sql = " and f.created_by='" . $source_user_id . "' ";

                                $f_id = $qm->createFilter($target_user_id, $filter_id, $appendTextName, $prependTextName, $additional_sql);

                                $component->view->filter_id = $f_id;
                            } else {
                                $component->view->filter_id = $filter_id;
                            }
                        }
                    }

                }

                //insert into dasboards with $metadata created when inserting the filters
                $qm->addDashboard($metadata, $source_user_id, $dashlet, $target_user_id, $prependTextName, $appendTextName, $createUniqueDrilldownFilters, $copyDrillDownFiltersTemplates);

                $log->info("#wUserUtils#-> Add Dashboards Functionality <- #wUserUtils#: The dashboard with ID = " . $dashlet . " was clone by " . $current_user->user_name . " user with ID = " . $current_user->id . " from source user with ID = " . $source_user_id . " to destination user with ID = " . $target_user_id);
            }
        }

        if (empty($dashlets)) {
            $not_str = "Dashboards were not added because none was selected";
            $qm->insertNotification($not_str);
        } else {
            if ($target_users_selected == 1) {
                $not_str = "Added Dashboards... OK";
                $qm->insertNotification($not_str);
            }
        }
    }

    if ($_ORIGINAL_REQUEST["DeleteDashboards"] === "Delete Dashboards") {
        $sth_selected   = 1;
        $dashboards_ids = $_ORIGINAL_REQUEST["source_dashlets"];

        foreach ($dashboards_ids as $dashboard_id) {
            $qm->deleteDashboard($dashboard_id);

            $log->info("#wUserUtils#-> Delete Dashboards Functionality <- #wUserUtils#: The dashboard with ID = " . $dashboard_id . " was deleted by " . $current_user->user_name . " user with ID = " . $current_user->id);
        }

        if ($target_users_selected === 1) {
            if (empty($dashboards_ids)) {
                $not_str = "Dashboards were not deleted because none was selected";
                $qm->insertNotification($not_str);
            } else {
                $not_str = "Dashboards Deleted... OK";
                $qm->insertNotification($not_str);
            }
        }
    }

    if ($_ORIGINAL_REQUEST["DeleteFilters"] === "Delete Filters") {
        $sth_selected = 1;
        $filters      = $_ORIGINAL_REQUEST["source_filters"];
        foreach ($filters as $filter_id) {
            $qm->deleteFilter($filter_id);

            $log->info("#wUserUtils#-> Delete Filters Functionality <- #wUserUtils#: The filter with ID = " . $filter_id . " was deleted by " . $current_user->user_name . " user with ID = " . $current_user->id);
        }

        if ($target_users_selected == 1) {
            if (empty($filters)) {
                $not_str = 'Filters were not deleted because none was selected';
                $qm->insertNotification($not_str);
            } else {
                $not_str = 'Filters Deleted... OK';
                $qm->insertNotification($not_str);
            }
        }
    }

    if ($_ORIGINAL_REQUEST["Delete"] === "Delete") {

        $mod_type        = $_ORIGINAL_REQUEST["mod_select"];
        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);
        if (count($target_user_ids) === 0) {
            $target_users_selected = 0;
        }

        if ($mod_type === "Dashboards") {
            //we're deleting dashboards
            $dashboards_names = $_ORIGINAL_REQUEST["s_dashboards"];

            $labels = array();
            ///the names are translated and in the database might be the label
            foreach ($dashboards_names as $dashboard_name) {
                foreach ($app_strings as $key => $app_string) {
                    if ($app_string == $dashboard_name) {
                        $labels[] = $key;
                    }
                }
            }
            $all_dashboard_names = array_merge($dashboards_names, $labels);

            foreach ($target_user_ids as $target_user_id) {
                foreach ($all_dashboard_names as $dashboard_name) {
                    $dashboards_update = <<<SQL
UPDATE dashboards
SET
    deleted = 1
WHERE
    name = '{$dashboard_name}'
        AND assigned_user_id = '{$target_user_id}'
        AND default_dashboard <> '1'
SQL;
                    $db->query($dashboards_update);

                    $log->info("#wUserUtils#-> Delete Functionality <- #wUserUtils#: The selected dashboard with name = " . $dashboard_name . " was deleted by " . $current_user->user_name . " user with ID = " . $current_user->id . " from destination user with ID = " . $target_user_id);
                }
            }

            if ($target_users_selected === 1) {
                if (empty($all_dashboard_names)) {
                    $not_str = "Dashboards were not deleted because none was selected";
                    $qm->insertNotification($not_str);
                } else {
                    $not_str = "Dashboards Deleted... OK";
                    $qm->insertNotification($not_str);
                }
            }
        } elseif ($mod_type === "Filters") {
            //we're deleting filters
            $filters_names = $_ORIGINAL_REQUEST["s_filters"];
            $labels        = array();

            ///the names are translated and in the database might be the label
            foreach ($filters_names as $filter_name) {
                foreach ($app_strings as $key => $app_string) {
                    if ($app_string == $filter_name) {
                        $labels[] = $key;
                    }
                }
            }
            $all_filter_names = array_merge($filters_names, $labels);

            foreach ($target_user_ids as $target_user_id) {
                foreach ($all_filter_names as $filter_name) {
                    $filters_update = <<<SQL
UPDATE filters
SET
    deleted = 1
WHERE
    name = '{$filter_name}'
        AND (assigned_user_id = '{$target_user_id}'
        OR created_by = '{$target_user_id}')
SQL;

                    $db->query($filters_update);

                    $log->info("#wUserUtils#-> Delete Functionality <- #wUserUtils#: The selected filter with name = " . $filter_name . " was deleted by " . $current_user->user_name . " user with ID = " . $current_user->id . " from destination user with ID = " . $target_user_id);
                }
            }

            if ($target_users_selected === 1) {
                if (empty($all_filter_names)) {
                    $not_str = "Filters were not deleted because none was selected";
                    $qm->insertNotification($not_str);
                } else {
                    $not_str = "Filters Deleted... OK";
                    $qm->insertNotification($not_str);
                }
            }
        }
    }

    if ($_ORIGINAL_REQUEST["CloneSubpanels"] === "CloneSubpanels") {
        $sth_selected    = 1;
        $source_user_id  = $_ORIGINAL_REQUEST["source_user"];
        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

        if (count($target_user_ids) == 0) {
            $target_users_selected = 0;
        }

        $selected_modules = $_ORIGINAL_REQUEST["subpanel_modules"];
        $keys             = array();

        if (($key = array_search($source_user_id, $target_user_ids)) !== false) {
            unset($target_user_ids[$key]);
        }

        $source_user = new User();
        $source_user->retrieve($source_user_id);
        $source_pref = $source_user->getPreference("subpanels_order");

        foreach ($selected_modules as $mod) {
            $keys[] = $mod . ':subpanels:order';
        }

        if (isset($selected_modules)) {
            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    $subpanels_order = $target_user->getPreference("subpanels_order");

                    if (isset($subpanels_order)) {
                        foreach ($keys as $key) {
                            $subpanels_order[$key] = $source_pref[$key];
                        }
                    } else {
                        $subpanels_order = array();
                        foreach ($keys as $key) {
                            $subpanels_order[$key] = $source_pref[$key];
                        }
                    }
                    $target_user->setPreference("subpanels_order", $subpanels_order);
                    $target_user->savePreferencesToDB();
                    $target_user->save();

                    $log->info("#wUserUtils#-> Clone Subpanels Functionality <- #wUserUtils#: The selected subpanel was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " from destination user with ID = " . $target_user_id);
                }
            }
        }

        if ($target_users_selected === 1) {
            $not_str = "Cloning Subpanels Order... OK";
            $qm->insertNotification($not_str);
        }
    }

    if ($_ORIGINAL_REQUEST["CloneLocale"] === "Clone Locale Settings") {
        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

        if (count($target_user_ids) == 0) {
            $target_users_selected = 0;
        }

        $should_send_notification = false;

        foreach ($target_user_ids as $target_user_id) {
            $target_user = new User();
            $target_user->retrieve($target_user_id);

            if ($_ORIGINAL_REQUEST["dateformat_check"] === "dateformat_check") {
                $should_send_notification = true;
                //set date format for target user
                $date_format = $_ORIGINAL_REQUEST["dateformat"];
                $target_user->setPreference("datef", $date_format, 0, "global");

                $log->info("#wUserUtils#-> Date Format Functionality <- #wUserUtils#: The date format was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["currency_check"] === "currency_check") {
                $should_send_notification = true;
                //set currency format for target user
                $currency = $_ORIGINAL_REQUEST["currency"];
                $target_user->setPreference("currency", $currency, 0, "global");

                $log->info("#wUserUtils#-> Preferred Currency Functionality <- #wUserUtils#: The preferred currency was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["timeformat_check"] === "timeformat_check") {
                $should_send_notification = true;
                //set time format for target user
                $time_format = $_ORIGINAL_REQUEST["timeformat"];
                $target_user->setPreference("timef", $time_format, 0, "global");

                $log->info("#wUserUtils#-> Time Format Functionality <- #wUserUtils#: The time format was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["default_currency_significant_digits_check"] === "default_currency_significant_digits_check") {
                $should_send_notification = true;
                //set significant digits for target user
                $default_currency_significant_digits = $_ORIGINAL_REQUEST["default_currency_significant_digits"];
                $target_user->setPreference("default_currency_significant_digits", $default_currency_significant_digits, 0, "global");

                $log->info("#wUserUtils#-> System Significant Digits Functionality <- #wUserUtils#: System Significant Digits was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["timezone_check"] === "timezone_check") {
                $should_send_notification = true;
                //set timezone format for target user
                $timezone = $_ORIGINAL_REQUEST["timezone"];
                $target_user->setPreference("timezone", $timezone, 0, "global");

                $log->info("#wUserUtils#-> Time Zone Functionality <- #wUserUtils#: Time Zone was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["prompt_check"] === "prompt_check") {
                $should_send_notification = true;
                //set Wizard Prompt for target user
                $ut = $_ORIGINAL_REQUEST["ut"];
                if (isset($ut)) {
                    $target_user->setPreference("ut", "0", 0, "global");
                } else {
                    $target_user->setPreference("ut", "1", 0, "global");
                }

                $log->info("#wUserUtils#-> User Wizard Prompt Functionality <- #wUserUtils#: User Wizard Prompt was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["num_grp_sep_check"] === "num_grp_sep_check") {
                $should_send_notification = true;
                //set 1000 separator for target user
                $num_grp_sep = $_ORIGINAL_REQUEST["num_grp_sep"];
                $target_user->setPreference("num_grp_sep", $num_grp_sep, 0, "global");

                $log->info("#wUserUtils#-> 1000s separator Functionality <- #wUserUtils#: 1000s separator was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["default_locale_name_format_check"] === "default_locale_name_format_check") {
                $should_send_notification = true;
                //set name display format for target user
                $default_locale_name_format = $_ORIGINAL_REQUEST["default_locale_name_format"];
                $target_user->setPreference("default_locale_name_format", $default_locale_name_format, 0, "global");

                $log->info("#wUserUtils#-> Name Display Format Functionality <- #wUserUtils#: Name Display Format was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }
            if ($_ORIGINAL_REQUEST["dec_sep_check"] === "dec_sep_check") {
                $should_send_notification = true;
                //set decimal separator for target user
                $dec_sep = $_ORIGINAL_REQUEST["dec_sep"];
                $target_user->setPreference("dec_sep", $dec_sep, 0, "global");

                $log->info("#wUserUtils#-> Decimal Symbol Functionality <- #wUserUtils#:  Decimal Symbol was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }

            $target_user->savePreferencesToDB();
        }

        if ($target_users_selected === 1) {
            if ($should_send_notification) {
                $not_str = "Cloning Locale Settings... OK";
                $qm->insertNotification($not_str);
            }
        }
    }

    if ($_ORIGINAL_REQUEST["Clone"] === "Clone") {
        $source_user_id = $_ORIGINAL_REQUEST["source_user"];
        $source_user    = new User();
        $source_user->retrieve($source_user_id);
        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

        if (count($target_user_ids) === 0) {
            $target_users_selected = 0;
        }

        if (($key = array_search($source_user_id, $target_user_ids)) !== false) {
            if ($_ORIGINAL_REQUEST["password"] === "password") {
            } else {
                unset($target_user_ids[$key]);
            }
        }

        if ($_ORIGINAL_REQUEST["dashlets"] === "dashlets") {
            $sth_selected = 1;

            $translated_modules = array();
            $selected_modules   = $_ORIGINAL_REQUEST["modules_selection"];

            foreach ($selected_modules as $module) {
                foreach ($app_list_strings["moduleList"] as $key => $val) {
                    if ($val == $module) {
                        $translated_modules[] = $key;
                    }
                }
            }

            foreach ($target_user_ids as $target_user_id) {
                if (count($translated_modules) > 0) {
                    foreach ($translated_modules as $smod) {
                        $arr[] = $smod;
                    }
                    $mod = "'" . implode("','", $arr) . "'";

                    $sql_delete = <<<SQL
DELETE FROM dashboards
WHERE
    assigned_user_id = '{$target_user_id}'
    AND dashboard_module in ({$mod})
SQL;

                    $db->query($sql_delete);
                    copy_filters_and_dashboards($mod, $target_user_id, $source_user_id);
                } else {
                    $sql_delete = <<<SQL
DELETE FROM dashboards
WHERE
    assigned_user_id = '{$target_user_id}'
SQL;

                    $db->query($sql_delete);
                    copy_filters_and_dashboards(null, $target_user_id, $source_user_id);
                }
            }

            if ($target_users_selected === 1) {
                if (empty($selected_modules)) {
                    $not_str = "Dashlets Cloning. Dashlets were cloned on all modules";
                    $qm->insertNotification($not_str);
                } else {
                    $not_str = "Cloning user dashlets... OK";
                    $qm->insertNotification($not_str);
                }
            }
        }

        if ($_ORIGINAL_REQUEST["filters"] === "filters") {
            $sth_selected       = 1;
            $translated_modules = array();

            $selected_modules = $_ORIGINAL_REQUEST["modules_filters_selection"];

            foreach ($selected_modules as $module) {
                foreach ($app_list_strings["moduleList"] as $key => $val) {
                    if ($val == $module) {
                        $translated_modules[] = $key;
                    }
                }
            }

            foreach ($target_user_ids as $target_user_id) {
                $qm->copyFilters($translated_modules, $source_user_id, $target_user_id);

                $log->info("#wUserUtils#-> Clone Filters Functionality <- #wUserUtils#: Clone Filters was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " from source user with ID = " . $source_user_id . " to destination user with ID = " . $target_user_id);
            }

            if ($target_users_selected === 1) {
                if (empty($selected_modules)) {
                    $not_str = "Filters Cloning. Filters were cloned on all modules";
                    $qm->insertNotification($not_str);
                } else {
                    $not_str = "Clone filters .... OK";
                    $qm->insertNotification($not_str);
                }
            }
        }

        if ($_ORIGINAL_REQUEST["navpane"] === "navpane") {
            $sth_selected = 1;

            $tc          = new TabController();
            $source_tabs = $tc->get_user_tabs($source_user);
            foreach ($target_user_ids as $target_user_id) {
                $target_user = new User();
                $target_user->retrieve($target_user_id);
                $tc->set_user_tabs($source_tabs, $target_user);

                $log->info("#wUserUtils#-> Clone Navigation Bar Module Selection <- #wUserUtils#: Navigation Bar Module Selection was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
            }

            if ($target_users_selected === 1) {
                $not_str = "Cloning user menu... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["favreports"] === "favreports") {
            $sth_selected = 1;

            foreach ($target_user_ids as $target_user_id) {
                $qm->insertSugarFavorite($target_user_id, $source_user_id);

                $log->info("#wUserUtils#-> Clone Favorite Reports <- #wUserUtils#: Clone Favorite Reports was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " from source user with ID = " . $source_user_id . " to destination user with ID = " . $target_user_id);
            }

            if ($target_users_selected === 1) {
                $not_str = "Cloning user favorites... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["scheduledreporting"] === "scheduledreporting") {
            $sth_selected = 1;

            $source_scheduled_reports = $qm->getSchedulesForUser($source_user_id);

            foreach ($target_user_ids as $target_user_id) {
                $target_scheduled_reports = $qm->getSchedulesForUser($target_user_id);

                foreach ($source_scheduled_reports as $source_scheduled_report_id => $source_scheduled_report) {
                    $id = "";
                    if (array_key_exists($source_scheduled_report_id, $target_scheduled_reports)) {
                        $id = $target_scheduled_reports[$source_scheduled_report_id]["id"];
                    }

                    $qm->saveReportSchedules($id, $target_user_id, $source_scheduled_report);

                    $log->info("#wUserUtils#-> Clone Scheduled Reporting <- #wUserUtils#: Clone Scheduled Reporting was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID = " . $target_user_id);
                }
            }

            if ($target_users_selected === 1) {
                $not_str = "Cloning user scheduled reports... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["password"] === "password") {
            $sth_selected = 1;
            $password     = $_ORIGINAL_REQUEST["password_field"];
            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    $target_user->user_hash = $target_user->getPasswordHash($password);
                    $target_user->save();

                    $log->info("#wUserUtils#-> Reset Initial Password Functionality <- #wUserUtils#: The password was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }

            if ($target_users_selected === 1) {
                $not_str = "Setting initial password... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["sugarEmailClient"] === "sugarEmailClient") {
            $sth_selected = 1;
            $value        = $source_user->getPreference("email_link_type");
            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    $target_user->setPreference("email_link_type", $value);
                    $target_user->savePreferencesToDB();

                    $log->info("#wUserUtils#-> Clone Sugar Email Client Functionality<- #wUserUtils#: Sugar Email Client was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }
            if ($target_users_selected === 1) {
                $not_str = "Cloning Sugar Email Client selection... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["notifyonassignment"] === "notifyonassignment") {
            $sth_selected = 1;
            $value        = $source_user->receive_notifications;
            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    $target_user->receive_notifications = $value;
                    $target_user->save();

                    $log->info("#wUserUtils#-> Clone Notify on Assignment Functionality <- #wUserUtils#: Default Teams was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }

            if ($target_users_selected === 1) {
                $not_str = "Cloning notify on assignment... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["remindersoptions"] === "remindersoptions") {
            $sth_selected                                 = 1;
            $source_preferences["reminder_checked"]       = $source_user->getPreference("reminder_checked");
            $source_preferences["reminder_time"]          = $source_user->getPreference("reminder_time");
            $source_preferences["email_reminder_checked"] = $source_user->getPreference("email_reminder_checked");
            $source_preferences["email_reminder_time"]    = $source_user->getPreference("email_reminder_time");

            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    foreach ($source_preferences as $preference => $value) {
                        $target_user->setPreference($preference, $value);
                    }
                    $target_user->savePreferencesToDB();

                    $log->info("#wUserUtils#-> Clone Reminder Options Functionality <- #wUserUtils#: Reminder Options was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }

            if ($target_users_selected === 1) {
                $not_str = "Cloning reminders options... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["defaultteams"] === "defaultteams") {
            $sth_selected = 1;
            $default_team = $source_user->team_id;
            $team_set_id  = $source_user->team_set_id;
            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    $target_user->team_id     = $default_team;
                    $target_user->team_set_id = $team_set_id;
                    $target_user->save();

                    $log->info("#wUserUtils#-> Clone Default Teams Functionality <- #wUserUtils#: Default Team was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }
            if ($target_users_selected === 1) {
                $not_str = "Cloning default teams... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($_ORIGINAL_REQUEST["navigationbarmoduleselection"] === "navigationbarmoduleselection") {
            $sth_selected                       = 1;
            $source_preferences["display_tabs"] = $source_user->getPreference("display_tabs");
            $source_preferences["hide_tabs"]    = $source_user->getPreference("hide_tabs");
            foreach ($target_user_ids as $target_user_id) {
                if (isset($target_user_id) || $target_user_id !== "" || $target_user_id !== null) {
                    $target_user = new User();
                    $target_user->retrieve($target_user_id);
                    foreach ($source_preferences as $preference => $value) {
                        $target_user->setPreference($preference, $value);
                    }

                    $target_user->savePreferencesToDB();

                    $log->info("#wUserUtils#-> Clone Navigation Bar Module Selection Functionality <- #wUserUtils#: Navigation Bar Module Selection was cloned by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }
            if ($target_users_selected === 1) {
                $not_str = "Cloning navigation bar module selection... OK";
                $qm->insertNotification($not_str);
            }
        }

        if ($sth_selected === 0) {
            $not_str = "Nothing was selected.";
            $qm->insertNotification($not_str);
        }
    }

    if ($_ORIGINAL_REQUEST["FieldNamePlacement"] === "Save") {
        $source_user_id = $_ORIGINAL_REQUEST["source_user"];

        $target_user_ids = array();
        $target_user_ids = $qm->getSelectedUsersAuth($_ORIGINAL_REQUEST["dest_users"], $_ORIGINAL_REQUEST["dest_teams"], $_ORIGINAL_REQUEST["LoginAsRolesAuth"]);

        $field_name_placement = $_ORIGINAL_REQUEST['field_name_placement_val'];
        if (count($target_user_ids) === 0) {
            //Apply to all users
            $target_user_ids = $qm->getUsers();
            foreach ($target_user_ids as $target_user_id => $target_user_name) {
                $target_user = new User();
                $target_user->retrieve($target_user_id);
                $target_user->setPreference("field_name_placement", $field_name_placement);
                $target_user->savePreferencesToDB();
            }
        } else {
            foreach ($target_user_ids as $target_user_id) {
                $target_user = new User();
                $target_user->retrieve($target_user_id);
                $target_user->setPreference("field_name_placement", $field_name_placement);
                $target_user->savePreferencesToDB();
            }
        }

    }
}
