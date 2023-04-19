<?php

use Sugarcrm\Sugarcrm\custom\wsystems\wClusterBarChart\DashletFilterManager;
use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Helpers\LoggerHelper;
use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Utils\Utils as Utils;

class wUserUtilsQueryManager
{
    private $mssql = false;

    public function __construct()
    {
        global $sugar_config;
        if ($sugar_config['dbconfig']['db_type'] == "mssql") {
            $this->mssql = true;
        }
    }

    public function getUsers()
    {
        global $db;
        $users = array();

        if ($this->mssql) {
            $get_users = "select id, concat(first_name,' ',last_name) as name from users
		    				where  status = 'Active' AND deleted = 0
		    				order by last_name, first_name desc;";
        } else {
            $get_users = "select id, concat(IF(first_name IS NULL, '(Undefined First Name)', first_name), ' ', IF(last_name IS NULL, '(Undefined Last Name)',last_name)) as name from users
		                where status = 'Active' AND deleted = 0
		                order by last_name, first_name desc;";
        }
        $result2 = $db->query($get_users);
        while ($user_row = $db->fetchByAssoc($result2)) {
            $users[$user_row['id']] = $user_row['name'];
        }

        return $users;
    }

    public function getGroupUsers()
    {
        global $db;
        $users = array();

        if ($this->mssql) {
            $get_users = <<<SQL
SELECT
    id, user_name AS name
FROM
    users
WHERE
    status = 'Active' AND is_group = '1'
        AND deleted = 0
ORDER BY user_name ASC
SQL;
        } else {
            $get_users = <<<SQL
SELECT
    id,
    CONCAT(user_name,' - User Group') AS name
FROM
    users
WHERE
    status = 'Active' AND is_group = '1'
        AND deleted = 0
ORDER BY user_name ASC
SQL;
        }
        $result2 = $db->query($get_users);
        while ($user_row = $db->fetchByAssoc($result2)) {
            $users[$user_row['id']] = $user_row['name'];
        }

        return $users;
    }

    public function getRegularUsers()
    {
        global $db;
        $users = array();

        if ($this->mssql) {
            $get_users = <<<SQL
SELECT
    id, user_name AS name
FROM
    users
WHERE
    status = 'Active' AND is_admin = '0'
        AND is_group = '0'
        AND deleted = '0'
ORDER BY user_name ASC
SQL;
        } else {
            $get_users = <<<SQL
SELECT
    id,  CONCAT(user_name,' - Regular User') AS name
FROM
    users
WHERE
    status = 'Active' AND is_admin = '0'
        AND is_group = '0'
        AND deleted = '0'
ORDER BY user_name ASC
SQL;
        }
        $result2 = $db->query($get_users);
        while ($user_row = $db->fetchByAssoc($result2)) {
            $users[$user_row['id']] = $user_row['name'];
        }

        return $users;
    }

    public function convertGroupToRegular($convertUsers)
    {
        global $db;

        $log = LoggerHelper::getLoggerInstance();

        foreach ($convertUsers as $convertUserId) {
            $convertUsers = <<<SQL
UPDATE users
SET
    is_group = '0'
WHERE
    status = 'Active' AND is_group = '1'
        AND deleted = 0
        AND id = '{$convertUserId}'
SQL;

            $db->query($convertUsers);
            $log->info("#wUserUtils#-> Convert User Functionality <- #wUserUtils#: The selected group user with id = " . $convertUserId . "was converted in regular user.");
        }

        $not_str = "Selected Group Users was successfully converted.";
        $this->insertNotification($not_str);
    }

    public function convertRegularToGroup($convertUsers)
    {
        global $db;

        $log = LoggerHelper::getLoggerInstance();

        foreach ($convertUsers as $convertUserId) {
            $convertUsers = <<<SQL
UPDATE users
SET
    is_group = '1'
WHERE
    status = 'Active' AND is_group = '0'
    AND is_admin = '0'
    AND deleted = 0
    AND id = '{$convertUserId}'
SQL;

            $db->query($convertUsers);
            $log->info("#wUserUtils#-> Convert User Functionality <- #wUserUtils#: The selected regular user with id = " . $convertUserId . "was converted in group user.");
        }

        $not_str = "Selected Regular Users was successfully converted.";
        $this->insertNotification($not_str);
    }

    public function getTeams()
    {
        global $db;

        $teams = array();

        $get_teams = <<<SQL
SELECT
    id, name, name_2
FROM
    teams
WHERE
    private = 0 AND deleted = 0
SQL;
        $result = $db->query($get_teams);
        while ($row = $db->fetchByAssoc($result)) {
            if ($row['id'] != '1') {
                $teams[$row['id']] = $row['name'] . ' ' . $row['name_2'];
            }
        }

        return $teams;
    }

    public function getRoles()
    {
        global $db;

        $roles = array();

        $get_roles = <<<SQL
SELECT
    id, name
FROM
    acl_roles
WHERE
    deleted = 0
SQL;

        $result = $db->query($get_roles);
        while ($row = $db->fetchByAssoc($result)) {
            if ($row['id'] != '1') {
                $roles[$row['id']] = $row['name'];
            }
        }

        return $roles;
    }

    public function getDashboards($userId = "")
    {
        if (!empty($userId)) {
            return $this->getDashboardsForOne($userId);
        } else {
            return $this->getAllDashboards();
        }
    }

    public function getFilters($userId = "")
    {
        if (!empty($userId)) {
            return $this->getFiltersForOne($userId);
        } else {
            return $this->getAllFilters();
        }
    }

    public function getwColumns($userId = "")
    {
        if (!empty($userId)) {
            return $this->getColumnsForOne($userId);
        }
    }

    public function insertNotification($notStr)
    {
        global $db, $current_user;
        if ($this->mssql == true) {
            $notification_sql = "insert into notifications(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, assigned_user_id, severity, parent_type, parent_id, is_read)
				    values(NEWID(), '{$notStr}', getdate(), getdate(), '{$current_user->id}', '{$current_user->id}', '{$notStr}', 0, '{$current_user->id}', 'wUserUtils Info', null, null, 0)";
        } else {
            $notification_sql = "insert into notifications(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, assigned_user_id, severity, parent_type, parent_id, is_read)
					    values(uuid(), '{$notStr}', now(), now(), '{$current_user->id}', '{$current_user->id}', '{$notStr}', 0, '{$current_user->id}', 'wUserUtils Info', null, null, 0)";
        }

        $db->query($notification_sql);
    }

    public function getSelectedUsers($users_selection, $teams_selection)
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

                return array_unique($union_users);
            } elseif (!is_array($selected_users)) {
                return array_unique($user_ids_from_selected_teams);
            } elseif (!is_array($user_ids_from_selected_teams)) {
                return array_unique($selected_users);
            }
        } else {
            $not_str = 'You have to select at least one destination user/team';
            $this->insertNotification($not_str);
        }
    }

    public function getSelectedUsersAuth($users_selection, $teams_selection, $roles_selection)
    {
        global $db;

        if (!empty($users_selection) || !empty($teams_selection)) {
            $usersAndTeams = $this->getSelectedUsers($users_selection, $teams_selection);
        }

        $allRoleUsers = array();
        if (!empty($roles_selection)) {
            foreach ($roles_selection as $key => $role) {
                $selectUserId = "SELECT user_id from acl_roles_users where role_id = '{$role}' and deleted = 0";
                $result       = $db->query($selectUserId);

                while ($row = $db->fetchByAssoc($result)) {
                    $allRoleUsers[] = $row['user_id'];
                }
            }
            if ($usersAndTeams == null) {
                $union_users = array_unique($allRoleUsers);
            } else {
                $union_users = array_unique(array_merge($usersAndTeams, array_unique($allRoleUsers)));
            }

            return $union_users;
        } else {
            if (empty($usersAndTeams) && empty($roles_selection)) {
                $not_str = 'You have to select at least one destination role.';
                $this->insertNotification($not_str);
                $not_str = 'You have to select at least one destination user/team.';
                $this->insertNotification($not_str);

                $usersAndTeams = null;
            }

            return $usersAndTeams;
        }
    }

    public function createFilter($target_user_id, $filter_id, $appendTextName, $prependTextName, $additional_sql = "")
    {
        global $db;

        $bean_target_user = BeanFactory::getBean('Users', $target_user_id);
        $fid              = create_guid();

        $defaultTeam = $bean_target_user->default_team;
        $teamSetId   = $bean_target_user->team_set_id;

        $filter_data = $this->getFilterDataF($filter_id, $appendTextName, $prependTextName);

        if ($filter_data) {
            $sql_insert = "insert into filters
            (id, name, date_entered, date_modified,
            modified_user_id, created_by, description,
            deleted, team_id, team_set_id,
            assigned_user_id,filter_definition,
            filter_template, module_name)
            values( '{$fid}', '" . $filter_data['name'] . "', '" . $filter_data['date_entered'] . "', '" . $filter_data['date_modified'] . "',
                  '{$target_user_id}', '{$target_user_id}', '" . $filter_data['description'] . "',
                  '" . $filter_data['deleted'] . "', '{$defaultTeam}', '{$teamSetId}',
                  '" . $filter_data['assigned_user_id'] . "', '" . $db->quote($filter_data['filter_definition']) . "',
                  '" . $db->quote($filter_data['filter_template']) . "', '" . $filter_data['module_name'] . "')";

            $db->query($sql_insert);
        }

        return $fid;
    }

    protected function getFilterDataF($filter_id, $appendTextName, $prependTextName)
    {
        global $db;
        $filterResult    = array();
        $filter_data_sql = "select name, date_entered, date_modified, description, deleted,
        assigned_user_id, filter_definition, filter_template, module_name from filters where id = '{$filter_id}' ";
        $result = $db->query($filter_data_sql);

        while ($row = $db->fetchByAssoc($result)) {
            $name    = "";
            $prepend = $prependTextName ? $prependTextName : "";
            $append  = $appendTextName ? $appendTextName : "";

            $name         = $prepend . " " . $row['name'] . " " . $append;
            $filterResult = array(
                'name'              => trim(addslashes(html_entity_decode($name, ENT_QUOTES))), 'date_entered' => $row['date_entered'],
                'date_modified'     => $row['date_modified'], 'description'                                    => $row['description'],
                'deleted'           => $row['deleted'], 'assigned_user_id'                                     => $row['assigned_user_id'],
                'filter_definition' => html_entity_decode($row['filter_definition']), 'filter_template'        => html_entity_decode($row['filter_template']),
                'module_name'       => $row['module_name'],
            );
        }

        return $filterResult;
    }

    public function copyFilter($filter_id, $target_user_id, $appendTextName, $prependTextName)
    {
        global $db;
        $bean_target_user = BeanFactory::getBean('Users', $target_user_id);

        $defaultTeam = $bean_target_user->default_team;
        $teamSetId   = $bean_target_user->team_set_id;

        $filter_data = $this->getFilterDataForFilters($filter_id, $appendTextName, $prependTextName, $target_user_id, $defaultTeam, $teamSetId);

        if ($filter_data) {
            $sql_insert = "insert into filters
            (id, name, date_entered, date_modified,
            modified_user_id, created_by, description,
            deleted, team_id, team_set_id,
            assigned_user_id,filter_definition,
            filter_template, module_name)
            values( '" . $filter_data['id'] . "', '" . $filter_data['name'] . "', '" . $filter_data['date_entered'] . "', '" . $filter_data['date_modified'] . "',
                  '{$target_user_id}', '{$target_user_id}', '" . $filter_data['description'] . "',
                  '" . $filter_data['deleted'] . "', '{$defaultTeam}', '{$teamSetId}',
                  '" . $filter_data['assigned_user_id'] . "', '" . $db->quote($filter_data['filter_definition']) . "',
                  '" . $db->quote($filter_data['filter_template']) . "', '" . $filter_data['module_name'] . "')";

            $db->query($sql_insert);
        }

        return $id;
    }

    public function getFilterDataForFilters($filter_id, $appendTextName, $prependTextName, $target_user_id, $defaultTeam, $teamSetId)
    {
        global $db, $sugar_config;

        $filterResult = array();

        if ($sugar_config['dbconfig']['db_type'] == "mssql") {
            $filter_data_sql = "select newid() as id, f.name, f.date_entered, f.date_modified,
            '{$target_user_id}' as modified_user_id, '{$target_user_id}' as created_by, f.description,
            f.deleted, '{$defaultTeam}' as team_id, '{$teamSetId}' as team_set_id,
            f.assigned_user_id, f.filter_definition,
            f.filter_template, f.module_name
     from filters f
     where f.id = '{$filter_id}'";
        } else {
            $filter_data_sql = "select uuid() as id, f.name, f.date_entered, f.date_modified,
            '{$target_user_id}' as modified_user_id, '{$target_user_id}' as created_by, f.description,
            f.deleted, '{$defaultTeam}' as team_id, '{$teamSetId}' as team_set_id,
            f.assigned_user_id, f.filter_definition,
            f.filter_template, f.module_name
     from filters f
     where f.id = '{$filter_id}'";
        }

        $result = $db->query($filter_data_sql);

        while ($row = $db->fetchByAssoc($result)) {
            $name    = "";
            $prepend = $prependTextName ? $prependTextName : "";
            $append  = $appendTextName ? $appendTextName : "";

            $name = $prepend . " " . $row['name'] . " " . $append;

            $filterResult = array(
                'id'                => $row['id'], 'name'                                               => trim(addslashes(html_entity_decode($name, ENT_QUOTES))), 'date_entered' => $row['date_entered'],
                'date_modified'     => $row['date_modified'], 'description'                             => $row['description'],
                'deleted'           => $row['deleted'], 'assigned_user_id'                              => $row['assigned_user_id'],
                'filter_definition' => html_entity_decode($row['filter_definition']), 'filter_template' => html_entity_decode($row['filter_template']),
                'module_name'       => $row['module_name'],
            );
        }

        return $filterResult;
    }

    public function addDashboard($metadata, $source_user_id, $copy_dashlet_id, $target_user_id, $prependTextName, $appendTextName, $createUniqueDrilldownFilters, $copyDrillDownFiltersTemplates)
    {
        global $db, $sugar_config;
        $bean_target_user = BeanFactory::getBean('Users', $target_user_id);

        $versionCharCount        = 4;
        $sugar_version           = substr($sugar_config['sugar_version'], 0, $versionCharCount);
        $replaceSugarVersion     = str_replace(".", "", $sugar_version);
        $currentSugarVersionInt  = intval($replaceSugarVersion);
        $version79Int            = 79;
        $currentDrillDownVersion = intval(substr(Utils::checkDrillDownVersion(), 0, 4));

        $d_id              = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
        $dashletIdsChanged = [];

        foreach ($metadata->dashlets as $component) {
            if (isset($component->view->type)) {

                //check filters from wClusbarChart
                if ($component->view->type == "wcluster-bar-chart-dashlet") {
                    $wClusterBarChartArray = array();

                    $filterSeriesNameArray = array("filter_series_1", "filter_series_2", "filter_series_3", "filter_series_4", "filter_series_5");

                    foreach ($filterSeriesNameArray as $filter) {
                        $filter_series = $component->view->$filter;

                        $decodedFilterSeries = json_decode($filter_series);

                        $filterSeriesId = $decodedFilterSeries->filterId;

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

                                $filter_data = $this->getFilterData($filterId, $prependTextName, $appendTextName);

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
                }

                if ($component->view->type == "w-saved-reports-chart"
                    && $createUniqueDrilldownFilters === true
                    && isset($component->view->dashletId)
                    && ($currentDrillDownVersion >= 9 || $currentDrillDownVersion >= 10)) {
                    $wDrillDashletId        = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                    $oldwDrillDahletId      = $component->view->dashletId;
                    $wDrillReportFilterId   = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                    $wDrillSelectedReportId = $component->view->saved_report_id;

                    $wDrillDownFilterDef = Utils::getwDrillDownFilterDef($oldwDrillDahletId);

                    Utils::insertwDrillCopyDashlet($wDrillDashletId, $wDrillReportFilterId, $wDrillSelectedReportId, $wDrillDownFilterDef, $target_user_id);

                    $component->view->dashletId            = $wDrillDashletId;
                    $dashletIdsChanged[$oldwDrillDahletId] = $wDrillDashletId;
                }
            }

        }

        if ($currentDrillDownVersion >= 9 || $currentDrillDownVersion >= 10) {
            //copy wDrillDown Dashboard Filter Templates values
            $wDrillDashboardTemplateId = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
            $oldwDrillDashboardId      = $copy_dashlet_id;
            $wDrillDownTemplatesDef    = Utils::getwDrillDownTemplatesDef($oldwDrillDashboardId);

            if ($copyDrillDownFiltersTemplates === true && $wDrillDownTemplatesDef !== "") {
                $wDrillDashboardTemplateFilterId = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                $destinationUserId               = $target_user_id;

                $newTemplates = Utils::replaceDashletIds(json_encode($wDrillDownTemplatesDef), $dashletIdsChanged);

                $wDrillDownTemplatesDef       = json_decode($newTemplates, true);
                $wDrillDownFiltersTemplateDef = Utils::getwDrillDownFiltersTemplateDef($oldwDrillDashboardId);

                Utils::insertwDrillCopyTemplates($wDrillDashboardTemplateId, $d_id, $wDrillDownTemplatesDef);
                Utils::insertwDrillCopyTemplateFilters($wDrillDashboardTemplateFilterId, $d_id, $destinationUserId, $wDrillDownFiltersTemplateDef);
            } else {
                if ($wDrillDownTemplatesDef !== "") {
                    if ($createUniqueDrilldownFilters === true) {
                        $newTemplates = Utils::replaceDashletIds(json_encode($wDrillDownTemplatesDef), $dashletIdsChanged);

                        $wDrillDownTemplatesDef       = json_decode($newTemplates, true);
                        $wDrillDownFiltersTemplateDef = Utils::getwDrillDownFiltersTemplateDef($oldwDrillDashboardId);

                        Utils::insertwDrillCopyTemplates($wDrillDashboardTemplateId, $d_id, $wDrillDownTemplatesDef);
                    } else {
                        Utils::insertwDrillCopyTemplates($wDrillDashboardTemplateId, $d_id, $wDrillDownTemplatesDef);
                    }
                }
            }
        }

        $metadata = $db->quote(json_encode($metadata));

        //These are used for sugar 7.10 and 7.11
        $default_dashboard_col = "";
        $default_dashboard_val = "";

        if ($currentSugarVersionInt > $version79Int) {
            $default_dashboard_col = ", team_id, team_set_id ,default_dashboard ";
            $default_dashboard_val = ",'{$bean_target_user->team_id}','{$bean_target_user->team_set_id}', 0";
            $check_for_dashboard   = " and default_dashboard != '1' ";
        }

        $dashboard_data = $this->getDashboardData($copy_dashlet_id, $source_user_id, $check_for_dashboard, $prependTextName, $appendTextName);

        if ($dashboard_data) {
            $sql_insert = "insert into dashboards(id, name, date_entered, date_modified,
                                                  modified_user_id, created_by, description, deleted,
                                                  assigned_user_id, dashboard_module, view_name,
                                                  metadata " . $default_dashboard_col . ")
                                      values('{$d_id}','" . $dashboard_data['name'] . "', '" . $dashboard_data['date_entered'] . "',
                                              '" . $dashboard_data['date_modified'] . "', '" . $dashboard_data['modified_user_id'] . "',
                                              '" . $dashboard_data['created_by'] . "', '" . $dashboard_data['description'] . "', '" . $dashboard_data['deleted'] . "',
                                              '{$target_user_id}', '" . $dashboard_data['dashboard_module'] . "',
                                              '" . $dashboard_data['view_name'] . "', '{$metadata}' " . $default_dashboard_val . ")";

            $db->query($sql_insert);

            if ($currentSugarVersionInt > $version79Int) {
                if ($sugar_config['dbconfig']['db_type'] == "mssql") {
                    $fav_insert = "insert into sugarfavorites (id, date_entered, date_modified, modified_user_id, created_by, deleted, module, record_id, assigned_user_id)
                                            values(newid(), getdate(), getdate(), '{$bean_target_user->id}', '{$bean_target_user->id}', 0, 'Dashboards', '{$d_id}', '{$bean_target_user->id}')";
                } else {
                    $fav_insert = "insert into sugarfavorites (id, date_entered, date_modified, modified_user_id, created_by, deleted, module, record_id, assigned_user_id)
                                                values(uuid(), now(), now(), '{$bean_target_user->id}', '{$bean_target_user->id}', 0, 'Dashboards', '{$d_id}', '{$bean_target_user->id}')";
                }
                $db->query($fav_insert);
            }
        }
    }

    protected function getFilterData($filterId, $prependTextName, $appendTextName)
    {
        global $db;

        $filterResult = array();

        $filter_data_sql = <<<SQL
SELECT
    name,
    date_entered,
    date_modified,
    description,
    deleted,
    assigned_user_id,
    filter_definition,
    filter_template,
    module_name
FROM
    filters
WHERE
    id = '{$filterId}'
SQL;
        $result = $db->query($filter_data_sql);

        while ($row = $db->fetchByAssoc($result)) {
            $name    = "";
            $prepend = $prependTextName ? $prependTextName : "";
            $append  = $appendTextName ? $appendTextName : "";

            $name         = $prepend . " " . $row['name'] . " " . $append;
            $filterResult = array(
                'name'              => trim(addslashes(html_entity_decode($name, ENT_QUOTES))), 'date_entered' => $row['date_entered'],
                'date_modified'     => $row['date_modified'], 'description'                                    => $row['description'],
                'deleted'           => $row['deleted'], 'assigned_user_id'                                     => $row['assigned_user_id'],
                'filter_definition' => html_entity_decode($row['filter_definition']), 'filter_template'        => html_entity_decode($row['filter_template']),
                'module_name'       => $row['module_name'],
            );
        }

        return $filterResult;
    }

    public function getSchedulesForUser($userId)
    {
        global $db;

        /**
         * On versions previous to 9 there is no assigned_user_id on the report_schedules table
         */
        $assigned_user_id_exists    = false;
        $check_for_assigned_user_id = <<<SQL
SELECT
    COUNT(*) as count
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'report_schedules'
        AND COLUMN_NAME = 'assigned_user_id';
SQL;
        $res = $db->query($check_for_assigned_user_id);
        while ($row = $db->fetchByAssoc($res)) {
            if ($row["count"] > 0) {
                $assigned_user_id_exists = true;
            }
        }

        $return_array = array();
        if ($assigned_user_id_exists) {
            $query = <<<SQL
SELECT
    *
FROM
    report_schedules
WHERE
    assigned_user_id = '$userId'
        AND deleted = 0
SQL;
        } else {
            $query = <<<SQL
SELECT
    *
FROM
    report_schedules
WHERE
    user_id = '$userId' AND deleted = 0
SQL;
        }

        $results = $db->query($query);

        while ($row = $db->fetchByAssoc($results)) {
            $return_array[$row['id']] = $row;
        }

        return $return_array;
    }

    public function saveReportSchedules($id, $user_id, $report_data)
    {
        $report_id        = $report_data["report_id"];
        $name             = $report_data["name"];
        $description      = $report_data["description"];
        $date_entered     = $report_data["date_entered"];
        $date_start       = $report_data["date_start"];
        $modified_user_id = $report_data["modified_user_id"];
        $created_by       = $report_data["created_by"];
        $interval         = $report_data["time_interval"];
        $active           = $report_data["active"];
        $assigned_user_id = $user_id;
        $team_id          = $report_data["team_id"];
        $team_set_id      = $report_data["team_set_id"];
        $schedule_type    = $report_data["schedule_type"];

        $export_report_to_csv   = $report_data["export_report_to_csv"];
        $export_report_to_pdf   = $report_data["export_report_to_pdf"];
        $show_report_in_body    = $report_data["show_report_in_body"];
        $additional_email       = $report_data["additional_email"];
        $bcc_email              = $report_data["bcc_additional_email"];
        $add_instructions       = $report_data["add_instructions"];
        $include_link_to_report = $report_data["include_link_to_report"];

        global $timedate, $db;

        $origDateStart = $date_start;
        $date_modified = $timedate->nowDb();

        if (strlen(trim($origDateStart)) == 0) {
            $date_start_str = 'NULL';
        } else {
            $date_start_str = $db->quoted($origDateStart);
        }

        if (empty($id)) {
            $id = create_guid();

            if (empty($date_start)) {
                $date_start = $timedate->nowDb();
            }

            $next_run_date = $date_start;

            /**
             * check if the column export_report_to_csv exists
             * If it exists it means that wEnhancedReports is installed
             */
            $wEnhancedExists = $this->isWEnhancedReportsInstalled();

            $wEnhancedFields = "";
            if ($wEnhancedExists) {
                $wEnhancedFields = " ,export_report_to_csv,
                export_report_to_pdf,
                show_report_in_body,
                additional_email,
                bcc_additional_email,
                add_instructions,
                include_link_to_report";

                $wEnhancedFieldsData = "," . $db->quoted(intval($export_report_to_csv)) . "," .
                $db->quoted(intval($export_report_to_pdf)) . "," .
                $db->quoted(intval($show_report_in_body)) . "," .
                $db->quoted($additional_email) . "," .
                $db->quoted($bcc_email) . "," .
                $db->quoted($add_instructions) . "," .
                $db->quoted(intval($include_link_to_report));
            }

            /**
             * On versions previous to 9 there is no assigned_user_id on the report_schedules table
             */
            $assigned_user_id_exists = $this->assignedUserExists();

            if ($assigned_user_id_exists) {
                $this->deletePreviousReportSchedules($user_id, $report_id, $name);
                $query = <<<SQL
INSERT INTO report_schedules (
    id,
    user_id,
    report_id,
    name,
    description,
    date_entered,
    date_start,
    modified_user_id,
    created_by,
    next_run,
    time_interval,
    active,
    assigned_user_id,
    team_id,
    team_set_id,
    date_modified,
    schedule_type
    {$wEnhancedFields}
)
VALUES (
    {$db->quoted($id)},
    {$db->quoted($user_id)},
    {$db->quoted($report_id)},
    {$db->quoted($name)},
    {$db->quoted($description)},
    {$db->quoted($date_entered)},
    {$date_start_str},
    {$db->quoted($modified_user_id)},
    {$db->quoted($created_by)},
    {$db->quoted($next_run_date)},
    {$db->quoted($interval)},
    {$db->quoted($active)},
    {$db->quoted($assigned_user_id)},
    {$db->quoted($team_id)},
    {$db->quoted($team_set_id)},
    {$db->quoted($date_modified)},
    {$db->quoted($schedule_type)}
    {$wEnhancedFieldsData}
)
SQL;
            } else {
                $this->deletePreviousReportSchedules($user_id, $report_id, $name);
                $query = <<<SQL
INSERT INTO report_schedules (
    id,
    user_id,
    report_id,
    date_start,
    next_run,
    time_interval,
    active,
    date_modified,
    schedule_type
    {$wEnhancedFields}
)
VALUES (
    {$db->quoted($id)},
    {$db->quoted($user_id)},
    {$db->quoted($report_id)},
    {$date_start_str},
    {$db->quoted($next_run_date)},
    {$db->quoted($interval)},
    {$db->quoted($active)},
    {$db->quoted($date_modified)},
    {$db->quoted($schedule_type)}
    {$wEnhancedFieldsData}
)
SQL;
            }
        } else {
            $query = <<<SQL
UPDATE
report_schedules
SET
    time_interval = {$db->quoted($interval)},
    date_start = $date_start_str,
    active = {$db->quoted($active)},
    date_modified = {$db->quoted($date_modified)},
    schedule_type = {$db->quoted($schedule_type)}
SQL;
            if (!empty($date_start) && $active) {
                $next_run_date = $date_start;
                $query .= ", next_run = " . $db->quoted($next_run_date);
            }
            $query .= " WHERE id = " . $db->quoted($id);
        }

        $db->query($query, true, "error saving schedule");

        $newId = create_guid();

        $insertReportsUsersRelationship = <<<SQL
INSERT INTO reportschedules_users (
    id,
    reportschedule_id,
    user_id,
    date_modified,
    deleted
)
VALUES (
    {$db->quoted($newId)},
    {$db->quoted($id)},
    {$db->quoted($user_id)},
    {$db->quoted($date_modified)},
    0
)
SQL;
        $db->query($insertReportsUsersRelationship);

        return $id;
    }

    public function deletePreviousReportSchedules($user_id, $report_id, $name)
    {
        global $db;
        $query = "update report_schedules set deleted = 1 where user_id = '$user_id' and report_id = '$report_id' and name = '$name' ";
        $db->query($query);
    }

    protected function assignedUserExists()
    {
        global $db;
        $assigned_user_id_exists    = false;
        $check_for_assigned_user_id = <<<SQL
SELECT
    COUNT(*) as count
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'report_schedules'
        AND COLUMN_NAME = 'assigned_user_id';
SQL;
        $res = $db->query($check_for_assigned_user_id);
        while ($row = $db->fetchByAssoc($res)) {
            if ($row["count"] > 0) {
                $assigned_user_id_exists = true;
            }
        }

        return $assigned_user_id_exists;
    }

    protected function isWEnhancedReportsInstalled()
    {
        global $db;
        $wEnhancedExists   = false;
        $checkForwEnhanced = <<<SQL
SELECT
    COUNT(*) as count
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'report_schedules'
        AND COLUMN_NAME = 'export_report_to_csv';
SQL;
        $result = $db->query($checkForwEnhanced);

        while ($row = $db->fetchByAssoc($result)) {
            if ($row["count"] > 0) {
                $wEnhancedExists = true;
            }
        }

        return $wEnhancedExists;
    }

    public function getDashboardData($copy_dashlet_id, $source_user_id, $check_for_dashboard, $prependTextName, $appendTextName)
    {
        global $db;

        $dashboardResult    = array();
        $dashboard_data_sql = "select name, date_entered, date_modified, modified_user_id, created_by, description, deleted,
        assigned_user_id, dashboard_module, view_name from dashboards where id = '{$copy_dashlet_id}' and  assigned_user_id = '{$source_user_id}'" . $check_for_dashboard;

        $result = $db->query($dashboard_data_sql);

        while ($row = $db->fetchByAssoc($result)) {
            $name    = "";
            $prepend = $prependTextName ? $prependTextName : "";
            $append  = $appendTextName ? $appendTextName : "";
            $name    = $prepend . " " . $row['name'] . " " . $append;

            $dashboardResult = array(
                'name'             => trim(addslashes(html_entity_decode($name, ENT_QUOTES))), 'date_entered' => $row['date_entered'],
                'date_modified'    => $row['date_modified'], 'modified_user_id'                               => $row['modified_user_id'],
                'created_by'       => $row['created_by'], 'description'                                       => $row['description'],
                'deleted'          => $row['deleted'], 'assigned_user_id'                                     => $row['assigned_user_id'],
                'dashboard_module' => $row['dashboard_module'], 'view_name'                                   => $row['view_name'],
            );
        }

        return $dashboardResult;
    }

    public function deleteDashboard($dashboard_id)
    {
        global $db;

        if ($this->isWClusterBarChartInstalled()) {
            $dashboard_metadata = $this->getDashboardMeta($dashboard_id);
            $clusterBarCharts   = $this->findClusterBarChartDashlets($dashboard_metadata);

            $filter_manager = new DashletFilterManager();

            foreach ($clusterBarCharts as $dashletConfig) {
                $filter_manager->removeCustomFilters(json_decode(json_encode($dashletConfig->view), true));
            }
        }

        $delete_sql = "update dashboards set deleted=1 where id='{$dashboard_id}'";
        $db->query($delete_sql);
    }

    protected function getDashboardMeta($dashboard_id)
    {
        global $db;

        $query  = "select metadata from dashboards where id = '{$dashboard_id}'";
        $result = $db->query($query);
        $row    = $db->fetchByAssoc($result);
        $meta   = $row['metadata'];
        $meta   = json_decode(html_entity_decode($meta));

        return $meta;
    }

    protected function isWClusterBarChartInstalled()
    {
        global $db;

        $query = <<<SQL
SELECT
    id
FROM
    upgrade_history
WHERE
    name = 'wClusterBarChart'
        AND status = 'installed'
SQL;

        $result = $db->query($query);
        $row    = $db->fetchByAssoc($result);
        if ($row['id']) {
            return true;
        }

        return false;
    }

    protected function findClusterBarChartDashlets($meta)
    {
        $dashlets   = array();
        $components = $meta->components;
        foreach ($components as $component) {
            foreach ($component as $row) {
                foreach ($row as $rowData) {
                    foreach ($rowData as $dashlet) {
                        $dashlet_view = $dashlet->view;
                        if ($dashlet_view->type && $dashlet_view->type == "wcluster-bar-chart-dashlet") {
                            $dashlets[] = $dashlet;
                        }
                    }
                }
            }
        }

        return $dashlets;
    }

    public function deleteFilter($filter_id)
    {
        global $db;

        $delete_sql = <<<SQL
UPDATE filters
SET
    deleted = 1
WHERE
    id = '{$filter_id}'
SQL;

        $db->query($delete_sql);
    }

    public function insertSugarFavorite($target_user_id, $source_user_id)
    {
        global $db;

        //first delete favorites from reports
        $delete_sql = "delete from sugarfavorites where module='Reports' and assigned_user_id='{$target_user_id}'";
        $db->query($delete_sql);

        if ($this->mssql) {
            $sql = "insert into sugarfavorites(id, name, date_entered, date_modified, modified_user_id, created_by, description,
				deleted, module, record_id, assigned_user_id)
				select NEWID() as id, sf.name, getdate(), getdate(), '{$target_user_id}', '{$target_user_id}', sf.description, '0', sf.module, sf.record_id, '{$target_user_id}'
				from sugarfavorites sf where sf.deleted = 0 and sf.assigned_user_id = '{$source_user_id}' and sf.module = 'Reports' ";
        } else {
            $sql = "insert into sugarfavorites(id, name, date_entered, date_modified, modified_user_id, created_by, description,
				deleted, module, record_id, assigned_user_id)
				select uuid() as id, sf.name, now(), now(), '{$target_user_id}', '{$target_user_id}', sf.description, '0', sf.module, sf.record_id, '{$target_user_id}'
				from sugarfavorites sf where sf.deleted = 0 and sf.assigned_user_id = '{$source_user_id}' and sf.module = 'Reports' ";
        }
        $db->query($sql);
    }

    public function copyFilters($modules, $source_user_id, $target_user_id)
    {
        global $db;
        if (count($modules) > 0) {
            foreach ($modules as $smod) {
                $arr[] = $smod;
            }
            $mod = "'" . implode("','", $arr) . "'";

            $sql_delete = "delete from filters where created_by = '{$target_user_id}' and module_name in ({$mod})";
            $db->query($sql_delete);

            if ($this->mssql) {
                $sql_insert = "insert into filters
                    (id, name, date_entered, date_modified,
                    modified_user_id, created_by, description,
                    deleted, team_id, team_set_id,
                    assigned_user_id,filter_definition,
                    filter_template, module_name)
                    select newid(), f.name, f.date_entered, f.date_modified,
                    '{$target_user_id}', '{$target_user_id}', f.description,
                    f.deleted, f.team_id, f.team_set_id,
                    f.assigned_user_id, f.filter_definition,
                    f.filter_template, f.module_name
                    from filters f
                    where f.created_by = '{$source_user_id}' and f.module_name in ({$mod})";
            } else {
                $sql_insert = "insert into filters
                    (id, name, date_entered, date_modified,
                    modified_user_id, created_by, description,
                    deleted, team_id, team_set_id,
                    assigned_user_id,filter_definition,
                    filter_template, module_name)
                    select uuid(), f.name, f.date_entered, f.date_modified,
                    '{$target_user_id}', '{$target_user_id}', f.description,
                    f.deleted, f.team_id, f.team_set_id,
                    f.assigned_user_id, f.filter_definition,
                    f.filter_template, f.module_name
                    from filters f
                    where f.created_by = '{$source_user_id}' and f.module_name in ({$mod})";
            }
        } else {
            $sql_delete = "delete from filters where created_by = '{$target_user_id}'";
            $db->query($sql_delete);

            if ($this->mssql) {
                $sql_insert = "insert into filters
                    (id, name, date_entered, date_modified,
                    modified_user_id, created_by, description,
                    deleted, team_id, team_set_id,
                    assigned_user_id, filter_definition,
                    filter_template, module_name)
                    select newid(), f.name, f.date_entered, f.date_modified,
                    '{$target_user_id}', '{$target_user_id}', f.description,
                    f.deleted, f.team_id, f.team_set_id,
                    f.assigned_user_id, f.filter_definition,
                    f.filter_template, f.module_name
                    from filters f
                    where f.created_by = '{$source_user_id}'";
            } else {
                $sql_insert = "insert into filters
                    (id, name, date_entered, date_modified,
                    modified_user_id, created_by, description,
                    deleted, team_id, team_set_id,
                    assigned_user_id, filter_definition,
                    filter_template, module_name)
                    select  uuid(), f.name, f.date_entered, f.date_modified,
                    '{$target_user_id}', '{$target_user_id}', f.description,
                    f.deleted, f.team_id, f.team_set_id,
                    f.assigned_user_id, f.filter_definition,
                    f.filter_template, f.module_name
                    from filters f
                    where f.created_by = '{$source_user_id}'";
            }
        }

        $db->query($sql_insert);
    }

    protected function getAllDashboards()
    {
        require_once 'include/utils.php';
        global $db, $app_list_strings, $app_strings, $sugar_config, $current_language;
        $ret_d = array();

        $versionCharCount       = 4;
        $sugar_version          = substr($sugar_config['sugar_version'], 0, $versionCharCount);
        $replaceSugarVersion    = str_replace(".", "", $sugar_version);
        $currentSugarVersionInt = intval($replaceSugarVersion);
        $version90Int           = 93;

        if ($currentSugarVersionInt <= $version90Int) {
            $sql_dashboards = <<<SQL
SELECT
    name, dashboard_module
FROM
    dashboards
WHERE
    deleted <> 1
        AND name <> 'LBL_DEFAULT_HELP_DASHBOARD_TITLE'
        AND name <> 'LBL_DEFAULT_DASHBOARD_TITLE'
        AND default_dashboard <> '1'
        GROUP BY name , dashboard_module
SQL;
        } else {
            $sql_dashboards = <<<SQL
SELECT
    name, dashboard_module
FROM
    dashboards
WHERE
    deleted <> 1
        AND name <> 'LBL_DEFAULT_HELP_DASHBOARD_TITLE'
        AND name <> 'LBL_DEFAULT_DASHBOARD_TITLE'
GROUP BY name , dashboard_module
SQL;
        }

        $result_dashboards = $db->query($sql_dashboards);
        while ($row = $db->fetchByassoc($result_dashboards)) {
            $module = $row['dashboard_module'];
            $lang   = LanguageManager::loadModuleLanguage($module, $current_language, true);

            if (isset($app_strings[$row['name']])) {
                $dashboard_name = $app_strings[$row['name']];
            } else {
                $dashboard_name = !empty($lang[$row['name']]) ? $lang[$row['name']] : $row['name'];
            }

            if (isset($app_list_strings['moduleList'][$row['dashboard_module']])) {
                $dashboard_module = $app_list_strings['moduleList'][$row['dashboard_module']];
            } else {
                $dashboard_module = $row['dashboard_module'];
            }

            $ret_d[$dashboard_module][] = $dashboard_name;
        }

        return $ret_d;
    }

    protected function getAllFilters()
    {
        global $db, $app_strings, $app_list_strings;

        $ret_f = array();

        $sql_filters = <<<SQL
SELECT
    name, module_name
FROM
    filters
WHERE
    deleted <> 1
GROUP BY name , module_name
SQL;

        $result_filters = $db->query($sql_filters);
        while ($row = $db->fetchByassoc($result_filters)) {
            if (isset($app_strings[$row['name']])) {
                $filter_name = $app_strings[$row['name']];
            } else {
                $filter_name = $row['name'];
            }

            if (isset($app_list_strings['moduleList'][$row['module_name']])) {
                $filter_module = $app_list_strings['moduleList'][$row['module_name']];
            } else {
                $filter_module = $row['module_name'];
            }
            $ret_f[$filter_module][] = $filter_name;
        }

        return $ret_f;
    }

    protected function getDashboardsForOne($user_id)
    {
        require_once 'include/utils.php';

        global $db, $app_list_strings, $sugar_config, $current_language;

        $ret_d      = array();
        $moduleList = $app_list_strings['moduleList'];

        $versionCharCount       = 4;
        $sugar_version          = substr($sugar_config['sugar_version'], 0, $versionCharCount);
        $replaceSugarVersion    = str_replace(".", "", $sugar_version);
        $currentSugarVersionInt = intval($replaceSugarVersion);
        $version79Int           = 79;

        if ($currentSugarVersionInt <= $version79Int) {
            $sql = <<<SQL
SELECT
    id, name, metadata, dashboard_module
FROM
    dashboards
WHERE
    assigned_user_id = '{$user_id}'
        AND deleted <> 1
        AND dashboard_type <> 'help-dashboard'
        AND default_dashboard <> '1'
SQL;
        } else {
            $sql = <<<SQL
SELECT
    id, name, metadata, dashboard_module
FROM
    dashboards
WHERE
    assigned_user_id = '{$user_id}'
        AND deleted <> 1
SQL;
        }

        $result = $db->query($sql);

        while ($row = $db->fetchByAssoc($result)) {
            $id     = $row['id'];
            $module = $row['dashboard_module'];

            $dashboard_module = !empty($moduleList[$module]) ? $moduleList[$module] : $module;

            $lang = LanguageManager::loadModuleLanguage($module, $current_language, true);

            $name = !empty($lang[$row['name']]) ? $lang[$row['name']] : $row['name'];
            if ($name == $row['name']) {
                $name = !empty(translate($row['name'])) ? translate($row['name']) : $row['name'];
            }

            $ret_d[$dashboard_module][$id] = $name;
        }

        return $ret_d;
    }

    protected function getFiltersForOne($user_id)
    {
        global $db, $app_strings, $app_list_strings;

        $ret_f = array();

        $filters_sql = <<<SQL
SELECT
    id, name, filter_definition, module_name
FROM
    filters
WHERE
    created_by = '{$user_id}'
        AND deleted <> 1
SQL;

        $result_sql = $db->query($filters_sql);

        while ($row = $db->fetchByAssoc($result_sql)) {
            if (isset($app_strings[$row['name']])) {
                if (isset($app_list_strings['moduleList'][$row['module_name']])) {
                    $ret_f[$app_list_strings['moduleList'][$row['module_name']]][$row["id"]] = $app_strings[$row['name']];
                } else {
                    $ret_f[$row['module_name']][$row["id"]] = $app_strings[$row['name']];
                }
            } else {
                if (isset($app_list_strings['moduleList'][$row['module_name']])) {
                    $ret_f[$app_list_strings['moduleList'][$row['module_name']]][$row["id"]] = $row['name'];
                } else {
                    $ret_f[$row['module_name']][$row["id"]] = $row['name'];
                }
            }
        }

        return $ret_f;
    }

    public function getColumnsForOne($userId)
    {
        global $db, $sugar_config;
        $conn = $db->getConnection();

        $checkIfwColumnSetTableExist = <<<SQL
SHOW TABLES LIKE 'ucs_columnset_configurations';
SQL;
        if ($sugar_config['dbconfig']['db_type'] == "mssql") {
            $checkIfwColumnSetTableExist = <<<SQL
sp_tables '%ucs_columnset_configurations%'
SQL;
        }
        $wColumnSetResult = $conn->executeQuery($checkIfwColumnSetTableExist);
        $row              = $wColumnSetResult->fetch();

        if ($row) {
            $query = <<<SQL
SELECT *
FROM ucs_columnset_configurations
WHERE deleted = 0
AND assigned_user_id = ?
ORDER BY date_entered
SQL;
            $conn = $db->getConnection();
            $stmt = $conn->executeQuery($query, array($userId));

            $data = array();
            foreach ($stmt->fetchAll() as $value) {
                if (!empty($value["config_module_c"])) {
                    $config_obj = [
                        "name"           => $value["name"],
                        "fields"         => json_decode($value["config_fields_c"]),
                        "orderBy"        => json_decode($value["order_by_c"]),
                        "stickyToFilter" => $value["sticky_to_filter_c"],
                        "visibleFields"  => $value["fields_visible_c"],
                        "widthFields"    => $value["fields_width_c"],
                        "configModule"   => $value["config_module_c"],
                        "configId"       => $value["id"],
                    ];
                    if ($value["selected_c"] == 1) {
                        $config_obj["selected"] = true;
                    } else {
                        $config_obj["selected"] = false;
                    }

                    $data[$value["config_module_c"]][] = $config_obj;
                }
            }

            return $data;
        }
    }

    public function getwColumnsPackage()
    {
        global $db;

        $getResult = array();

        $getwColumnsPackage = <<<SQL
SELECT
    *
FROM
    upgrade_history
WHERE
    name = 'wColumnSet'
SQL;

        $result = $db->query($getwColumnsPackage);

        while ($row = $db->fetchByAssoc($result)) {
            if ($row['name']) {
                $getResult[$row['name']] = $row['name'];
            }
        }

        return $getResult;
    }

    public function getDrillDownPackageVersion()
    {
        global $db;

        $getVersionResult = "";

        $query = <<<SQL
SELECT
    version as wDrillDownVersion
FROM
    upgrade_history
WHERE
    name = "wDrillDownReportsCharts"
    AND
    status = "installed"
SQL;

        $result = $db->query($query);
        $row    = $db->fetchByAssoc($result);

        if ($row["wDrillDownVersion"]) {
            $getVersionResult = intval(substr($row["wDrillDownVersion"], 0, 4));
            return $getVersionResult;
        }

        return $getVersionResult;
    }
}
