<?php

use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Helpers\LoggerHelper;
use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Utils\Utils as Utils;

function transformToSelectHtml($data)
{
    $str = "";

    foreach ($data as $module => $configurations) {
        $str .= "<optgroup label='{$module}'>";
        foreach ($configurations as $conf) {
            $conf_name = $conf['name'];
            $conf_id   = $conf['configId'];
            $str .= "<option value='{$conf_id}' > {$conf_name}</option>";
        }
        $str .= "</optgroup>";
    }

    return $str;
}

function copy_filters_and_dashboards($modules, $target_user_id, $source_user_id)
{
    global $db, $sugar_config, $current_user;

    $log = LoggerHelper::getLoggerInstance();

    $bean_target_user = BeanFactory::getBean('Users', $target_user_id);

    $versionCharCount        = 4;
    $sugar_version           = substr($sugar_config['sugar_version'], 0, $versionCharCount);
    $replaceSugarVersion     = str_replace(".", "", $sugar_version);
    $currentSugarVersionInt  = intval($replaceSugarVersion);
    $version79Int            = 79;
    $currentDrillDownVersion = intval(substr(Utils::checkDrillDownVersion(), 0, 4));

    if (isset($modules) && $modules != null && $modules != '') {
        $sql = "select id, metadata from dashboards where dashboard_module in ({$modules}) and assigned_user_id = '{$source_user_id}' and deleted ='0'";
    } else {
        if ($currentSugarVersionInt < $version79Int) {
            $sql = "select id, metadata from dashboards where assigned_user_id = '{$source_user_id}'  and dashboard_type <> 'help-dashboard'";
        } else {
            $sql = "select id, metadata from dashboards where assigned_user_id = '{$source_user_id}'";
        }
    }

    $dashboards_metadata = array();
    $result_dash_sql     = $db->query($sql);
    while ($row = $db->fetchByAssoc($result_dash_sql)) {
        $dashboards_metadata[$row['id']] = $row['metadata'];
    }

    $dashletIdsChanged = [];

    //Get the filter_id's from that metadata
    foreach ($dashboards_metadata as $id => $metadata) {
        $metadata = json_decode(html_entity_decode($metadata));

        foreach ($metadata->dashlets as $component) {
            if (isset($component->view->type)) {
                //check filters from wClusbarChart
                if ($component->view->type == "wcluster-bar-chart-dashlet") {
                    $wClusterBarChartArray = array();

                    $filterSeriesNameArray = array("filter_series_1", "filter_series_2", "filter_series_3", "filter_series_4", "filter_series_5");

                    foreach ($filterSeriesNameArray as $filter) {
                        $filter_series       = $component->view->$filter;
                        $decodedFilterSeries = json_decode($filter_series);
                        $filterSeriesId      = $decodedFilterSeries->filterId;

                        if (isset($filterSeriesId) && preg_match("/^(\{)?[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}(?(1)\})$/i", $filterSeriesId)) {
                            $wClusterBarChartArray[$filter] = $filterSeriesId;
                        }
                    }

                    foreach ($wClusterBarChartArray as $filterId) {
                        $sql_filters_of_target_user    = "select id, name, filter_definition, filter_template, module_name from filters where created_by = '{$target_user_id}' and deleted =0";
                        $result_filters_of_target_user = $db->query($sql_filters_of_target_user);

                        $sql_check_filters = "select name, filter_definition, filter_template, module_name from filters where id = '{$filterId}' and deleted=0";

                        $result_check_filters = $db->query($sql_check_filters);
                        $row_check_filters    = $db->fetchByAssoc($result_check_filters);

                        while ($row_filters_of_target_user = $db->fetchByAssoc($result_filters_of_target_user)) {
                            //if the target user has filters we first check if the filter we want to insert already exists for the current target user and set the metadata filter_id
                            if ($row_filters_of_target_user['name'] == $row_check_filters['name'] && $row_filters_of_target_user['filter_definition'] == $row_check_filters['filter_definition'] && $row_filters_of_target_user['filter_template'] == $row_check_filters['filter_template']) {
                                $filterId = $row_filters_of_target_user['id'];
                            }
                        }

                        foreach ($wClusterBarChartArray as $key => $filterId) {
                            //Get the team_set and default team from the target_user_id
                            $filtersWChart = json_decode($component->view->$key);

                            if ($filterId == $filtersWChart->filterId) {
                                $f_id = create_guid();
                                //name, date_entered, date_modified, description, deleted,
                                //assigned_user_id, filter_definition, filter_template, module_name
                                $filter_data = getFilterData($filterId, $source_user_id);

                                if ($filter_data) {
                                    $sql_insert_filter = "insert into filters
                                                (id, name, date_entered, date_modified,
                                                modified_user_id, created_by, description,
                                                deleted, team_id, team_set_id,
                                                assigned_user_id,filter_definition,
                                                filter_template, module_name)
                                                values('{$f_id}', '" . $filter_data['name'] . "', '" . $filter_data['date_entered'] . "', '" . $filter_data['date_modified'] . "',
                                                        '{$target_user_id}', '{$target_user_id}', '" . $filter_data['description'] . "',
                                                        '" . $filter_data['deleted'] . "', '{$bean_target_user->default_team}', '{$bean_target_user->team_set_id}',
                                                        '" . $filter_data['assigned_user_id'] . "', '" . $db->quote($filter_data['filter_definition']) . "',
                                                        '" . $db->quote($filter_data['filter_template']) . "', '" . $filter_data['module_name'] . "')";

                                    $db->query($sql_insert_filter);

                                    $filtersWChart->filterId = $f_id;
                                    $component->view->$key   = json_encode($filtersWChart);

                                }
                            } else {
                                $filtersWChart->filterId = $filtersWChart->filterId;
                                $component->view->key    = json_encode($filtersWChart);
                            }
                        }
                    }
                } //check filters from wDrillDown
                else if ($component->view->type == "w-saved-reports-chart"
                    && isset($component->view->dashletId)
                    && ($currentDrillDownVersion >= 9 || $currentDrillDownVersion >= 10)) {
                    $wDrillDashletId        = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                    $wDrillReportFilterId   = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                    $oldwDrillDahletId      = $component->view->dashletId;
                    $wDrillSelectedReportId = $component->view->saved_report_id;

                    $wDrillDownFilterDef = Utils::getwDrillDownFilterDef($oldwDrillDahletId);

                    if (empty($wDrillDownFilterDef) === false) {
                        Utils::insertwDrillCopyDashlet($wDrillDashletId, $wDrillReportFilterId, $wDrillSelectedReportId, $wDrillDownFilterDef, $target_user_id);
                    }

                    $component->view->dashletId            = $wDrillDashletId;
                    $dashletIdsChanged[$oldwDrillDahletId] = $wDrillDashletId;
                } else {
                    //if the metadata has a filter_id////////////////////////////////////////////////////////////////////
                    if (isset($component->view->filter_id) &&
                        preg_match("/^(\{)?[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}(?(1)\})$/i", $component->view->filter_id)) {
                        $filter_id = $component->view->filter_id;
                        //Check if the target user has any filters created////////////////////////////////////////////
                        $sql_filters_of_target_user    = "select id, name, filter_definition, filter_template, module_name from filters where created_by = '{$target_user_id}' and deleted =0";
                        $result_filters_of_target_user = $db->query($sql_filters_of_target_user);

                        $sql_check_filters = "select name, filter_definition, filter_template, module_name from filters where id = '{$filter_id}' and deleted=0";

                        $result_check_filters = $db->query($sql_check_filters);
                        $row_check_filters    = $db->fetchByAssoc($result_check_filters);

                        while ($row_filters_of_target_user = $db->fetchByAssoc($result_filters_of_target_user)) {
                            //if the target user has filters we first check if the filter we want to insert already exists for the current target user and set the metadata filter_id
                            if ($row_filters_of_target_user['name'] == $row_check_filters['name'] && $row_filters_of_target_user['filter_definition'] == $row_check_filters['filter_definition'] && $row_filters_of_target_user['filter_template'] == $row_check_filters['filter_template']) {
                                //$delete_filter = "delete from filters where id = '{$row_filters_of_target_user['id']}'";
                                //$db->query($delete_filter);
                                $filter_id = $row_filters_of_target_user['id'];
                            }
                        }

                        if ($filter_id == $component->view->filter_id) {
                            //Get the team_set and default team from the target_user_id

                            $f_id = create_guid();

                            //name, date_entered, date_modified, description, deleted,
                            //assigned_user_id, filter_definition, filter_template, module_name
                            $filter_data = getFilterData($filter_id, $source_user_id);

                            if ($filter_data) {
                                $sql_insert_filter = "insert into filters
                                      (id, name, date_entered, date_modified,
                                      modified_user_id, created_by, description,
                                      deleted, team_id, team_set_id,
                                      assigned_user_id,filter_definition,
                                      filter_template, module_name)
                                      values('{$f_id}', '" . $filter_data['name'] . "', '" . $filter_data['date_entered'] . "', '" . $filter_data['date_modified'] . "',
                                            '{$target_user_id}', '{$target_user_id}', '" . $filter_data['description'] . "',
                                            '" . $filter_data['deleted'] . "', '{$bean_target_user->default_team}', '{$bean_target_user->team_set_id}',
                                            '" . $filter_data['assigned_user_id'] . "', '" . $db->quote($filter_data['filter_definition']) . "',
                                            '" . $db->quote($filter_data['filter_template']) . "', '" . $filter_data['module_name'] . "')";

                                $db->query($sql_insert_filter);
                                $component->view->filter_id = $f_id;
                            }
                        } else {
                            $component->view->filter_id = $filter_id;
                        }
                    }
                }
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////
            }

        }

        $d_id = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();

        //copy wDrillDown Dashboard Filter Templates values
        if ($component->view->type == "w-saved-reports-chart"
            && ($currentDrillDownVersion >= 9 || $currentDrillDownVersion >= 10)) {
            //copy wDrillDown Dashboard Filters values
            $wDrillDashboardTemplateId       = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
            $wDrillDashboardTemplateFilterId = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
            $destinationUserId               = $target_user_id;
            $oldwDrillDashboardId            = $id;

            $wDrillDownTemplatesDef = Utils::getwDrillDownTemplatesDef($oldwDrillDashboardId);

            if ($wDrillDownTemplatesDef !== "") {
                $newTemplates = Utils::replaceDashletIds(json_encode($wDrillDownTemplatesDef), $dashletIdsChanged);

                $wDrillDownTemplatesDef       = json_decode($newTemplates, true);
                $wDrillDownFiltersTemplateDef = Utils::getwDrillDownFiltersTemplateDef($oldwDrillDashboardId);

                Utils::insertwDrillCopyTemplates($wDrillDashboardTemplateId, $d_id, $wDrillDownTemplatesDef);
                Utils::insertwDrillCopyTemplateFilters($wDrillDashboardTemplateFilterId, $d_id, $destinationUserId, $wDrillDownFiltersTemplateDef);
            }
        }

        //insert into dasboards with $metadata created when inserting the filters
        $metadata = $db->quote(json_encode($metadata));

        //These are used for sugar 7.10 and 7.11
        $default_dashboard_col = "";
        $default_dashboard_val = "";
        if ($currentSugarVersionInt > $version79Int) {
            $default_dashboard_col = ", team_id, team_set_id ,default_dashboard ";
            $default_dashboard_val = ",'{$bean_target_user->team_id}','{$bean_target_user->team_set_id}', 0 ";
            $check_for_dashboard   = " and default_dashboard != '1' ";
        }

        $dashboard_data = getDashboardData($id, $source_user_id, $check_for_dashboard);

        if ($dashboard_data) {
            $sql_insert = "insert into
                          dashboards(id, name, date_entered, date_modified,
                                      modified_user_id, created_by, description, deleted,
                                      assigned_user_id, dashboard_module, view_name,
                                      metadata " . $default_dashboard_col . ")
                          values('{$d_id}','" . $dashboard_data['name'] . "', '" . $dashboard_data['date_entered'] . "',
                                  '" . $dashboard_data['date_modified'] . "', '" . $dashboard_data['modified_user_id'] . "',
                                  '" . $dashboard_data['created_by'] . "', '" . $dashboard_data['description'] . "', '" . $dashboard_data['deleted'] . "',
                                  '{$target_user_id}', '" . $dashboard_data['dashboard_module'] . "',
                                  '" . $dashboard_data['view_name'] . "', '{$metadata}' " . $default_dashboard_val . ")";

            $db->query($sql_insert);

            $log->info("#wUserUtils#-> Clone Dashboards Functionality <- #wUserUtils#: The dashboard " . $dashboard_data['name'] . " with ID = " . $d_id . " was copied by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);

            if ($sugar_config['dbconfig']['db_type'] == "mssql") {
                $fav_insert = "insert into sugarfavorites (id, date_entered, date_modified, modified_user_id, created_by, deleted, module, record_id, assigned_user_id)
                                            values(newid(), getdate(), getdate(), '{$bean_target_user->id}', '{$bean_target_user->id}', 0, 'Dashboards', '{$d_id}', '{$bean_target_user->id}')";
            } else {
                $fav_insert = "insert into sugarfavorites (id, date_entered, date_modified, modified_user_id, created_by, deleted, module, record_id, assigned_user_id)
                                            values(uuid(), now(), now(), '{$bean_target_user->id}', '{$bean_target_user->id}', 0, 'Dashboards', '{$d_id}', '{$bean_target_user->id}')";
            }

            if ($currentSugarVersionInt > $version79Int) {
                $db->query($fav_insert);
            }
        }
    }
}

function getFilterData($filter_id, $source_user_id)
{
    global $db;

    $filterResult = array();

    $filter_data_sql = "select name, date_entered, date_modified, description, deleted,
    assigned_user_id, filter_definition, filter_template, module_name from filters where id = '{$filter_id}' and created_by = '{$source_user_id}'";

    $result = $db->query($filter_data_sql);

    while ($row = $db->fetchByAssoc($result)) {
        $filterResult = array('name' => trim(addslashes(html_entity_decode($row['name'], ENT_QUOTES))), 'date_entered' => $row['date_entered'],
            'date_modified'              => $row['date_modified'], 'description'                                           => $row['description'],
            'deleted'                    => $row['deleted'], 'assigned_user_id'                                            => $row['assigned_user_id'],
            'filter_definition'          => html_entity_decode($row['filter_definition']), 'filter_template'               => html_entity_decode($row['filter_template']),
            'module_name'                => $row['module_name']);
    }

    return $filterResult;
}

function getDashboardData($id, $source_user_id, $check_for_dashboard)
{
    global $db;

    $dashboardResult = array();

    $dashboard_data_sql = "select name, date_entered, date_modified, modified_user_id, created_by, description, deleted,
    assigned_user_id, dashboard_module, view_name from dashboards where id = '{$id}' and  assigned_user_id = '{$source_user_id}'" . $check_for_dashboard;

    $result = $db->query($dashboard_data_sql);

    while ($row = $db->fetchByAssoc($result)) {
        $dashboardResult = array('name' => trim(addslashes(html_entity_decode($row['name'], ENT_QUOTES))), 'date_entered' => $row['date_entered'],
            'date_modified'                 => $row['date_modified'], 'modified_user_id'                                      => $row['modified_user_id'],
            'created_by'                    => $row['created_by'], 'description'                                              => $row['description'],
            'deleted'                       => $row['deleted'], 'assigned_user_id'                                            => $row['assigned_user_id'],
            'dashboard_module'              => $row['dashboard_module'], 'view_name'                                          => $row['view_name']);
    }

    return $dashboardResult;
}

function get_selected_users($users_selection, $teams_selection)
{
    global $db;
    if (!empty($users_selection) || !empty($teams_selection)) {
        if (!empty($users_selection)) {
            $selected_users = $users_selection;
        }
        if (!empty($teams_selection)) {
            $selected_teams = $teams_selection;
            foreach ($selected_teams as $selected_team) {
                $get_users_from_team = "SELECT user_id FROM team_memberships tm
							    left join users u on u.id = tm.user_id
										    WHERE tm.team_id='$selected_team' AND tm.deleted = 0 and u.deleted = 0";
                $result_2 = $db->query($get_users_from_team);
                while ($row_2 = $db->fetchByAssoc($result_2)) {
                    $user_ids_from_selected_teams[] = $row_2['user_id'];
                }
            }
        }
        if (is_array($selected_users) && is_array($user_ids_from_selected_teams)) {
            $union_users = array_merge(array_intersect($selected_users, $user_ids_from_selected_teams), array_diff($selected_users, $user_ids_from_selected_teams), array_diff($user_ids_from_selected_teams, $selected_users));

            return $union_users;
        } elseif (!is_array($selected_users)) {
            return $user_ids_from_selected_teams;
        } elseif (!is_array($user_ids_from_selected_teams)) {
            return $selected_users;
        }
    } else {
        global $current_user, $db;
        $not_str          = 'You have to select at least one destination user/ team !';
        $notification_sql = "insert into notifications(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, assigned_user_id, severity, parent_type, parent_id)
				values(NEWID(), 'No destination user/team selected', getdate(), getdate(), '{$current_user->id}', '{$current_user->id}', '{$not_str}', 0, '{$current_user->id}', 'wUserUtils Warning', null, null)";
        $db->query($notification_sql);
    }
}
