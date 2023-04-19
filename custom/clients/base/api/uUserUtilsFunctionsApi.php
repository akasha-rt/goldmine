<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Helpers\LoggerHelper;
use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Utils\Utils as Utils;

class uUserUtilsFunctionsApi extends SugarApi
{

    public function registerApiRest()
    {
        return array(
            'retrieve'                           => array(
                'reqType'                 => 'GET',
                'path'                    => array('getUserData', '?', '?'),
                'pathVars'                => array('getUserData', 'user_id', 'type'),
                'method'                  => 'retrieveUser',
                'shortHelp'               => 'Returns user data',
                'longHelp'                => '',
                'ignoreMetaHash'          => true,
                'ignoreSystemStatusError' => true,
                'noEtag'                  => true,
            ),
            'getUsersFromRolesAndTeamsSelection' => array(
                'reqType'   => 'POST',
                'path'      => array('GetUsersFromRolesAndTeamsSelection'),
                'pathVars'  => array('GetUsersFromRolesAndTeamsSelection'),
                'method'    => 'getUsersFromRolesAndTeamSelection',
                'shortHelp' => 'Get users from roles and teams.',
                'longHelp'  => '',
            ),
            'getUsersRolesAndTeams'              => array(
                'reqType'   => 'GET',
                'path'      => array('GetUsersRolesAndTeams'),
                'pathVars'  => array('GetUsersRolesAndTeams'),
                'method'    => 'getUsersRolesAndTeams',
                'shortHelp' => 'Returns all the users, roles and teams from the system.',
                'longHelp'  => '',
            ),
            'getFilters'                         => array(
                'reqType'   => 'GET',
                'path'      => array('GetFilters', '?'),
                'pathVars'  => array('GetFilters', 'user_id'),
                'method'    => 'get_filters',
                'shortHelp' => 'Get the filters of a user',
                'longHelp'  => '',
            ),
            'getDashboards'                      => array(
                'reqType'   => 'GET',
                'path'      => array('GetDashboards', '?'),
                'pathVars'  => array('GetDashboards', 'user_id'),
                'method'    => 'get_dashboards',
                'shortHelp' => 'Get the dashboards of a user',
                'longHelp'  => '',
            ),
            'copyFilter'                         => array(
                'reqType'   => 'PUT',
                'path'      => array('CopyFilter', '?'),
                'pathVars'  => array('CopyFilter', 'filter_id'),
                'method'    => 'copy_filter',
                'shortHelp' => 'Copy the filter to other users',
                'longHelp'  => '',
            ),
            'copyDashboard'                      => array(
                'reqType'   => 'PUT',
                'path'      => array('CopyDashboard', '?'),
                'pathVars'  => array('CopyDashboard', 'dash_id'),
                'method'    => 'copy_dashboard',
                'shortHelp' => 'Copy the dashboard to other users',
                'longHelp'  => '',
            ),
            'cloneFilters'                       => array(
                'reqType'   => 'PUT',
                'path'      => array('CloneFilters'),
                'pathVars'  => array('CloneFilters'),
                'method'    => 'clone_filters',
                'shortHelp' => 'Clone the filters from a user to other users',
                'longHelp'  => '',
            ),
            'cloneDashboards'                    => array(
                'reqType'   => 'PUT',
                'path'      => array('CloneDashboards'),
                'pathVars'  => array('CloneDashboards'),
                'method'    => 'clone_dashboards',
                'shortHelp' => 'Clone the dashboards from a user to other users',
                'longHelp'  => '',
            ),
            'changePassword'                     => array(
                'reqType'   => 'PUT',
                'path'      => array('ChangePassword'),
                'pathVars'  => array('ChangePassword'),
                'method'    => 'change_password',
                'shortHelp' => 'Change the password',
                'longHelp'  => '',
            ),
            'saveMessage'                        => array(
                'reqType'   => 'POST',
                'path'      => array('BroadcastMessage'),
                'pathVars'  => array('BroadcastMessage'),
                'method'    => 'saveMessage',
                'shortHelp' => '',
                'longHelp'  => '',
            ),
            'retrieveLoginAsAuth'                => array(
                'reqType'         => 'GET',
                'path'            => array('GetLoginAsAuth'),
                'pathVars'        => array('GetLoginAsAuth'),
                'method'          => 'getLoginAsAuth',
                'shortHelp'       => 'Returns users, teams, roles from config',
                'longHelp'        => '',
                'noLoginRequired' => true,
            ),
            "CheckDrillDownVersion"              => array(
                "reqType"         => "GET",
                "path"            => array("getDrillDownVersionInstalled"),
                "pathVars"        => array(""),
                "method"          => "getDrillDownVersion",
                "shortHelp"       => "",
                "longHelp"        => "",
                "noLoginRequired" => true,
            ),
        );
    }

    //get user token
    public function retrieveUser(ServiceBase $api, array $args)
    {
        require_once "clients/base/api/CurrentUserApi.php";

        global $current_user;

        if ($args['type'] == 'goback') {
            $this->setCurrentUser($_COOKIE['admin_id'], null);
            unset($_COOKIE['admin_id']);
            $original_download_token_base = $_COOKIE['original_download_token_base'];
            setcookie("download_token_base", $original_download_token_base, time() + 3600, '/');
            unset($_COOKIE['original_download_token_base']);

            return;
        } else {
            $original_download_token_base = $_COOKIE['download_token_base'];
            setcookie("original_download_token_base", $original_download_token_base, time() + 3600, '/');

            setcookie("admin_id", $current_user->id, time() + 3600, '/');
        }

        $user_id = $args['user_id'];
        $user    = BeanFactory::retrieveBean('Users', $user_id);

        if ($user) {
            $oauthServer = SugarOAuth2Server::getOAuth2Server();
            $sudo_token  = $oauthServer->getSudoRefreshToken($user->user_name, 'sugar', 'base');

            $refresTokenBean = BeanFactory::retrieveBean('OAuthTokens', $sudo_token["refresh_token"]);
            if ($refresTokenBean) {
                $download_token = $refresTokenBean->download_token;
            }
            //             $_SESSION['user_id'] = null;
            //             SugarAutoLoader::requireWithCustom('include/SugarOAuth2/SugarOAuth2Storage.php');
            //             $oauthStorageName = SugarAutoLoader::customClass('SugarOAuth2Storage');
            //             $oauthStorage = new $oauthStorageName("base");
            //             $oauthStorage->setPlatform("base");
            //             $oauthStorage->setAccessToken($sudo_token['access_token'], "sugar", $user_id, time() + 60*60*18);

            $tokens = array(
                "access_token"   => $sudo_token['access_token'],
                "refresh_token"  => $sudo_token['refresh_token'],
                "download_token" => $download_token,
            );
            $this->setCurrentUser($user_id, $download_token);

            return $tokens;
        }

        return;
    }

    public function getDrillDownVersion()
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

    protected function setCurrentUser($user_id, $token)
    {
        $user = BeanFactory::retrieveBean('Users', $user_id);
        if ($user) {
            $GLOBALS['current_user'] = $user;
        }
        if ($token) {
            setcookie("download_token_base", $token, time() + 3600, '/');
        }
    }

    //Get users from roles and teams
    public function getUsersFromRolesAndTeamSelection(ServiceBase $api, array $args)
    {
        global $db;

        $userIds = array();

        if (isset($args['data']) && !empty($args['data'])) {
            $teams = $args['data']["0"];
            $roles = $args['data']["1"];
        }

        if (!empty($teams)) {
            $selectedTeams = $teams;

            foreach ($selectedTeams as $selectedTeam) {
                $getUsersFromTeam = "SELECT user_id FROM team_memberships
                WHERE team_id ='" . $selectedTeam . "' AND deleted = 0 ";

                $usersFromTeams = $db->query($getUsersFromTeam);

                while ($row1 = $db->fetchByAssoc($usersFromTeams)) {
                    $userIds[] = $row1['user_id'];
                }
            }
        }

        if (!empty($roles)) {
            $selectedRoles = $roles;

            foreach ($selectedRoles as $selectedRole) {
                $getUsersFromRoles = <<<SQL
SELECT
    user_id
FROM
    acl_roles_users
WHERE
    role_id = '{$selectedRole}' AND deleted = 0
SQL;
                $usersFromRoles = $db->query($getUsersFromRoles);

                while ($row = $db->fetchByAssoc($usersFromRoles)) {
                    $userIds[] = $row['user_id'];
                }
            }
        }

        return $userIds;
    }

    //Returns all the users and teams from a the system
    public function getUsersRolesAndTeams(ServiceBase $api, array $args)
    {
        global $db;

        $getTeams = <<<SQL
SELECT
    id, name, name_2
FROM
    teams
WHERE
    private = 0 AND deleted = 0
ORDER BY name
SQL;
        $result = $db->query($getTeams);
        while ($row = $db->fetchByAssoc($result)) {
            $teams[$row['id']] = $row['name'] . ' ' . $row['name_2'];
        }

        $getUsers = <<<SQL
SELECT
    id, first_name, last_name
FROM
    users
WHERE
    deleted = 0 AND status = 'Active'
ORDER BY first_name ASC
SQL;

        $users_result = $db->query($getUsers);

        while ($row = $db->fetchByAssoc($users_result)) {
            $users[$row['id']] = $row['first_name'] . ' ' . $row['last_name'];
        }

        $selectRoleId = <<<SQL
SELECT
    id, name
FROM
    acl_roles
WHERE
    deleted = 0
SQL;
        $result = $db->query($selectRoleId);

        while ($row = $db->fetchByAssoc($result)) {
            $roles[$row['id']] = $row['name'];
        }

        $res['roles'] = $roles;
        $res['teams'] = $teams;
        $res['users'] = $users;

        return $res;
    }

    //Get the filters of a user
    public function get_filters(ServiceBase $api, array $args)
    {
        global $db, $app_strings, $app_list_strings;

        if (isset($args['user_id']) && !empty($args['user_id'])) {
            $user_id = $args['user_id'];
        }

        $filters_sql = "select id, name, filter_definition, module_name from filters where created_by = '{$user_id}' and deleted='0'";
        $result_sql  = $db->query($filters_sql);

        while ($row = $db->fetchByAssoc($result_sql)) {
            if (isset($app_strings[$row['name']])) {
                if (isset($app_list_strings['moduleList'][$row['dashboard_module']])) {
                    $ret_f[$app_list_strings['moduleList'][$row['module_name']]][$app_strings[$row['name']]] = $row["id"];
                } else {
                    $ret_f[$row['module_name']][$app_strings[$row['name']]] = $row["id"];
                }
            } else {
                $ret_f[$row['module_name']][$row['name']] = $row["id"];
            }
        }
        ksort($ret_f);

        return $ret_f;
    }

    //Get the dashboards of a user
    public function get_dashboards(ServiceBase $api, array $args)
    {
        if (isset($args['user_id']) && !empty($args['user_id'])) {
            $user_id = $args['user_id'];
        }

        require_once 'custom/modules/Administration/wUserUtilsQueryManager.php';
        $qm    = new wUserUtilsQueryManager();
        $ret_d = $qm->getDashboards($user_id);

        ksort($ret_d);

        return $ret_d;
    }

    //Copy the filter to other users
    public function copy_filter(ServiceBase $api, array $args)
    {
        global $db, $current_user;

        $log = LoggerHelper::getLoggerInstance();

        if (isset($args['filter_id']) && !empty($args['filter_id'])) {
            $filter_id = $args['filter_id'];
        }

        $source_user_id = $current_user->id;
        if (isset($args['users']) && !empty($args['users'])) {
            $target_user_ids = $args['users'];
        }

        //appendTextName
        if (isset($args['appendTextName']) && !empty($args['appendTextName'])) {
            $appendTextName = $args['appendTextName'];
            $appendTextName = trim($appendTextName);
        }

        //prependTextName
        if (isset($args['prependTextName']) && !empty($args['prependTextName'])) {
            $prependTextName = $args['prependTextName'];
            $prependTextName = trim($prependTextName);
        }

        foreach ($target_user_ids as $target_user_id) {
            //get all the filters of the target user
            $target_filters        = array();
            $filters_to_add        = array();
            $sql_filters_of_target = "select name, filter_definition, module_name from filters where created_by = '{$target_user_id}' and deleted='0'";

            $result_filters_of_target = $db->query($sql_filters_of_target);
            while ($row_filters_of_target = $db->fetchByAssoc($result_filters_of_target)) {
                $target_filters[] = $row_filters_of_target;
            }
            //Check if the destination user already has this filter
            $sql_filter_to_add = "select name, filter_definition, module_name, deleted from filters where id = '{$filter_id}' and deleted = '0'";

            $result_filter_to_add = $db->query($sql_filter_to_add);
            $row_filter_to_add    = $db->fetchByAssoc($result_filter_to_add);
            $should_be_added      = 1;

            $bean_target_user = BeanFactory::getBean('Users', $target_user_id);

            $defaultTeam = $bean_target_user->default_team;
            $teamSetId   = $bean_target_user->team_set_id;

            $filter_data = $this->getFilterDataForFilters($filter_id, $appendTextName, $prependTextName, $target_user_id, $defaultTeam, $teamSetId);

            if (isset($target_filters) || !empty($target_filters)) {
                foreach ($target_filters as $key => $target_filter) {
                    if ($target_filter['name'] === $filter_data['name'] && $target_filter['filter_definition'] === $filter_data['filter_definition'] && $target_filter['module_name'] === $filter_data['module_name']) {
                        $should_be_added = 0;
                    }
                }
            }

            if ($should_be_added == 1) {
                if ($filter_data) {
                    $sql_insert = "insert into filters
                    (id, name, date_entered, date_modified,
                    modified_user_id, created_by, description,
                    deleted, team_id, team_set_id,
                    assigned_user_id,filter_definition,
                    filter_template, module_name)
                    values( '" . $filter_data['id'] . "', '" . $filter_data['name'] . "', '" . $filter_data['date_entered'] . "', '" . $filter_data['date_modified'] . "',
                          '{$target_user_id}', '{$target_user_id}', '" . $filter_data['description'] . "',
                          '" . $filter_data['deleted'] . "', '{$bean_target_user->default_team}', '{$bean_target_user->team_set_id}',
                          '" . $filter_data['assigned_user_id'] . "', '" . $db->quote($filter_data['filter_definition']) . "',
                          '" . $db->quote($filter_data['filter_template']) . "', '" . $filter_data['module_name'] . "')";

                    $db->query($sql_insert);

                    $log->info("#wUserUtils#-> Copy Filters Functionality <- #wUserUtils#: The filter " . $filter_data['name'] . " with ID = " . $filter_data['id'] . " was copied by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
                }
            }
        }
    }

    protected function getFilterDataForFilters($filter_id, $appendTextName, $prependTextName, $target_user_id, $defaultTeam, $teamSetId)
    {
        global $db, $sugar_config;
        $filterResult = array();

        if ($sugar_config['dbconfig']['db_type'] == "mssql") {
            $filter_data_sql = "select newid() as id, f.name, f.date_entered, f.date_modified,
            '{$target_user_id}', '{$target_user_id}', f.description,
            f.deleted, '{$defaultTeam}', '{$teamSetId}',
            f.assigned_user_id, f.filter_definition,
            f.filter_template, f.module_name
     from filters f
     where f.id = '{$filter_id}'";
        } else {
            $filter_data_sql = "select uuid() as id, f.name, f.date_entered, f.date_modified,
            '{$target_user_id}', '{$target_user_id}', f.description,
            f.deleted, '{$defaultTeam}', '{$teamSetId}',
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

    //Copy the dashboard to other users
    public function copy_dashboard(ServiceBase $api, array $args)
    {
        global $db, $current_user, $log, $sugar_config;

        $log = LoggerHelper::getLoggerInstance();

        $versionCharCount        = 4;
        $sugar_version           = substr($sugar_config['sugar_version'], 0, $versionCharCount);
        $replaceSugarVersion     = str_replace(".", "", $sugar_version);
        $currentSugarVersionInt  = intval($replaceSugarVersion);
        $currentDrillDownVersion = intval(substr(Utils::checkDrillDownVersion(), 0, 4));

        if (isset($args['dash_id']) && !empty($args['dash_id'])) {
            $dashlet = $args['dash_id'];
        }

        //$source_user_id = $current_user->id;
        if (isset($args['users']) && !empty($args['users'])) {
            $target_user_ids = $args['users'];
        }

        //appendTextName
        if (isset($args['appendTextName']) && !empty($args['appendTextName'])) {
            $appendTextName = $args['appendTextName'];
            $appendTextName = trim($appendTextName);
        }

        //prependTextName
        if (isset($args['prependTextName']) && !empty($args['prependTextName'])) {
            $prependTextName = $args['prependTextName'];
            $prependTextName = trim($prependTextName);
        }

        //createUniqueDrillDownFilters
        if (isset($args['createUniqueDrillDownFilters']) && !empty($args['createUniqueDrillDownFilters'])) {
            $createUniqueDrillDownFilters = $args['createUniqueDrillDownFilters'];
        }

        //createDrillDownFilterTemplates
        if (isset($args['createDrillDownFilterTemplates']) && !empty($args['createDrillDownFilterTemplates'])) {
            $createDrillDownFilterTemplates = $args['createDrillDownFilterTemplates'];
        }

        if (isset($target_user_ids) && isset($dashlet)) {
            foreach ($target_user_ids as $target_user_id) {
                $bean_target_user = BeanFactory::getBean('Users', $target_user_id);

                //delete the dashboards if they already exist on the target user
                $sql1 = <<<SQL
SELECT
    id,
    name,
    dashboard_module,
    metadata
FROM
    dashboards
WHERE
    assigned_user_id = '{$target_user_id}'
    AND
    deleted = '0'
SQL;

                $sql2 = <<<SQL
SELECT
    name,
    dashboard_module,
    metadata
FROM
    dashboards
WHERE
    id = '{$dashlet}'
    AND
    deleted = '0'
SQL;
                $result2 = $db->query($sql2);
                $row2    = $db->fetchByAssoc($result2);

                $result1 = $db->query($sql1);

                while ($row1 = $db->fetchByAssoc($result1)) {
                    if ($row1['dashboard_module'] === $row2['dashboard_module'] && $row1['name'] === $row2['name']) {
                        $id_to_delete = $row1['id'];
                        $sql3         = <<<SQL
DELETE FROM
    dashboards
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
    id = '{$dashlet}'
    AND
    deleted = '0'
SQL;

                $result_filter = $db->query($filter_select);
                $row_filter    = $db->fetchByAssoc($result_filter);
                $metadata      = $row_filter['metadata'];
                $metadata      = json_decode($metadata);
                $d_id          = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();

                $dashletIdsChanged = [];

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
                                $sql_filters_of_target_user = <<<SQL
SELECT
    id,
    name,
    filter_definition,
    filter_template,
    module_name
FROM
    filters
WHERE
    created_by = '{$target_user_id}'
    AND
    deleted = 0
SQL;
                                $result_filters_of_target_user = $db->query($sql_filters_of_target_user);

                                $sql_check_filters = <<<SQL
SELECT
    name,
    filter_definition,
    filter_template,
    module_name
FROM
    filters
WHERE
    id = '{$filterId}'
    AND
    deleted = 0
SQL;

                                $result_check_filters = $db->query($sql_check_filters);
                                $row_check_filters    = $db->fetchByAssoc($result_check_filters);

                                while ($row_filters_of_target_user = $db->fetchByAssoc($result_filters_of_target_user)) {
                                    //if the target user has filters we first check if the filter we want to insert already exists for the current target user and set the metadata filter_id
                                    if ($row_filters_of_target_user['name'] == $row_check_filters['name']
                                        && $row_filters_of_target_user['filter_definition'] == $row_check_filters['filter_definition']
                                        && $row_filters_of_target_user['filter_template'] == $row_check_filters['filter_template']
                                        && $row_filters_of_target_user['module_name'] == $row_check_filters['module_name']) {
                                        $filterId = $row_filters_of_target_user['id'];
                                    }
                                }

                                foreach ($wClusterBarChartArray as $key => $filterId) {
                                    //Get the team_set and default team from the target_user_id
                                    $filtersWChart = json_decode($component->view->$key);
                                    if ($filterId == $filtersWChart->filterId) {
                                        $f_id = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();

                                        //name, date_entered, date_modified, description, deleted,
                                        //assigned_user_id, filter_definition, filter_template, module_name
                                        $filter_data = $this->getFilterData($filterId, $appendTextName, $prependTextName);

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
                            //check filters from wDrillDown
                        } else if ($component->view->type == "w-saved-reports-chart"
                            && $createUniqueDrillDownFilters === true && isset($component->view->dashletId)
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
                            //if the metadata has a filter_id
                            if (isset($component->view->filter_id) && preg_match("/^(\{)?[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}(?(1)\})$/i", $component->view->filter_id)) {
                                $filter_id = $component->view->filter_id;

                                //Check if the target user has any filters created
                                $sql_filters_of_target_user = <<<SQL
SELECT
    id,
    name,
    filter_definition,
    filter_template,
    module_name
FROM
    filters
WHERE
    created_by = '{$target_user_id}'
    AND
    deleted = 0
SQL;
                                $result_filters_of_target_user = $db->query($sql_filters_of_target_user);

                                $sql_check_filters = <<<SQL
SELECT
    name,
    filter_definition,
    filter_template,
    module_name
FROM
    filters
WHERE
    id = '{$filter_id}'
    AND
    deleted = 0
SQL;

                                $result_check_filters = $db->query($sql_check_filters);
                                $row_check_filters    = $db->fetchByAssoc($result_check_filters);

                                while ($row_filters_of_target_user = $db->fetchByAssoc($result_filters_of_target_user)) {
                                    //if the target user has filters we first check if the filter we want to insert already exists for the current target user and set the metadata filter_id
                                    if ($row_filters_of_target_user['name'] == $row_check_filters['name']
                                        && $row_filters_of_target_user['filter_definition'] == $row_check_filters['filter_definition']
                                        && $row_filters_of_target_user['filter_template'] == $row_check_filters['filter_template']
                                        && $row_filters_of_target_user['module_name'] == $row_check_filters['module_name']) {
                                        //$delete_filter = "delete from filters where id = '{$row_filters_of_target_user['id']}'";
                                        //$db->query($delete_filter);
                                        $filter_id = $row_filters_of_target_user['id'];
                                    }
                                }

                                if ($filter_id == $component->view->filter_id) {
                                    //Get the team_set and default team from the target_user_id
                                    $f_id = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();

                                    //name, date_entered, date_modified, description, deleted,
                                    //assigned_user_id, filter_definition, filter_template, module_name
                                    $filter_data = $this->getFilterData($filter_id, $appendTextName, $prependTextName);

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
                    }

                }

                if ($currentDrillDownVersion >= 9 || $currentDrillDownVersion >= 10) {
                    //copy wDrillDown Dashboard Filters Templates values
                    $wDrillDashboardTemplateId = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                    $oldwDrillDashboardId      = $dashlet;
                    $wDrillDownTemplatesDef    = Utils::getwDrillDownTemplatesDef($oldwDrillDashboardId);

                    if ($createDrillDownFilterTemplates === true && $wDrillDownTemplatesDef !== "") {
                        $wDrillDashboardTemplateFilterId = Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
                        $destinationUserId               = $target_user_id;

                        $newTemplates = Utils::replaceDashletIds(json_encode($wDrillDownTemplatesDef), $dashletIdsChanged);

                        $wDrillDownTemplatesDef       = json_decode($newTemplates, true);
                        $wDrillDownFiltersTemplateDef = Utils::getwDrillDownFiltersTemplateDef($oldwDrillDashboardId);

                        Utils::insertwDrillCopyTemplates($wDrillDashboardTemplateId, $d_id, $wDrillDownTemplatesDef);
                        Utils::insertwDrillCopyTemplateFilters($wDrillDashboardTemplateFilterId, $d_id, $destinationUserId, $wDrillDownFiltersTemplateDef);
                    } else {
                        if ($wDrillDownTemplatesDef !== "") {
                            if ($createUniqueDrillDownFilters === true) {
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

                //insert into dasboards with $metadata created when inserting the filters
                $metadata = $db->quote(json_encode($metadata));

                //These are used for sugar 7.10 and 7.11
                $default_dashboard_col = "";
                $default_dashboard_val = "";
                $version79Int          = 79;

                if ($currentSugarVersionInt > $version79Int) {
                    $default_dashboard_col = ", team_id, team_set_id ,default_dashboard ";
                    $default_dashboard_val = ",'{$bean_target_user->team_id}','{$bean_target_user->team_set_id}', 0 ";
                    $check_for_dashboard   = " and default_dashboard != '1' ";
                }

                $dashboard_data = $this->getDashboardData($dashlet, $check_for_dashboard, $appendTextName, $prependTextName);

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

                    $log->info("#wUserUtils#-> Copy Dashboards Functionality<- #wUserUtils#: The dashboard " . $dashboard_data['name'] . " with ID = " . $d_id . " was copied by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);

                    if ($sugar_config['dbconfig']['db_type'] == "mssql") {
                        $fav_insert = "insert into sugarfavorites (id, date_entered, date_modified, modified_user_id, created_by, deleted, module, record_id, assigned_user_id)
                                              values(newid(), getdate(), getdate(), '{$bean_target_user->id}', '{$bean_target_user->id}', 0, 'Dashboards', '{$d_id}', '{$bean_target_user->id}')";
                    } else {
                        $fav_insert = "insert into sugarfavorites (id, date_entered, date_modified, modified_user_id, created_by, deleted, module, record_id, assigned_user_id)
                                              values(uuid(), now(), now(), '{$bean_target_user->id}', '{$bean_target_user->id}', 0, 'Dashboards', '{$d_id}', '{$bean_target_user->id}')";
                    }
                }
                if ($currentSugarVersionInt > $version79Int) {
                    $db->query($fav_insert);
                }
            }
        }

        return $sql_insert;
    }

    protected function getFilterData($filter_id, $appendTextName, $prependTextName)
    {
        global $db;

        $filterResult = array();

        $filter_data_sql = "select name, date_entered, date_modified, description, deleted,
        assigned_user_id, filter_definition, filter_template, module_name from filters where id = '{$filter_id}'";
        $result = $db->query($filter_data_sql);

        while ($row = $db->fetchByAssoc($result)) {
            $name    = "";
            $prepend = $prependTextName ? $prependTextName : "";
            $append  = $appendTextName ? $appendTextName : "";

            $name = $prepend . " " . $row['name'] . " " . $append;

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

    protected function getDashboardData($dashlet, $check_for_dashboard, $appendTextName, $prependTextName)
    {
        global $db;

        $dashboardResult = array();

        $dashboard_data_sql = "select name, date_entered, date_modified, modified_user_id, created_by, description, deleted,
        assigned_user_id, dashboard_module, view_name from dashboards where id = '{$dashlet}'" . $check_for_dashboard;

        $result = $db->query($dashboard_data_sql);
        while ($row = $db->fetchByAssoc($result)) {
            $name    = "";
            $prepend = $prependTextName ? $prependTextName : "";
            $append  = $appendTextName ? $appendTextName : "";

            $name = $prepend . " " . $row['name'] . " " . $append;

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

    //Clone the filters from a user to other users
    public function clone_filters(ServiceBase $api, array $args)
    {
        global $db, $current_user, $sugar_config;

        require_once 'custom/modules/Administration/wUserUtils_utils.php';

        $log = LoggerHelper::getLoggerInstance();

        $data = $args['data'];

        $selected_modules = $data['modules'];
        $source_user_id   = $data['source_user'];
        $target_user_ids  = $data['target_users'];

        foreach ($target_user_ids as $target_user_id) {
            if (isset($selected_modules)) {
                foreach ($selected_modules as $smod) {
                    $arr[] = $smod;
                }
                $mod = "'" . implode("','", $arr) . "'";

                $sql_delete = "delete from filters where created_by = '{$target_user_id}' and module_name in ({$mod})";
                $db->query($sql_delete);

                if ($sugar_config['dbconfig']['db_type'] == "mssql") {
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

                if ($sugar_config['dbconfig']['db_type'] == "mssql") {
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
                                    where f.created_by = '{$source_user_id}'";
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
                                    where f.created_by = '{$source_user_id}'";
                };
            }

            $db->query($sql_insert);

            $log->info("#wUserUtils#-> Clone Filters Functionality <- #wUserUtils#: The filters was clone by " . $current_user->user_name . " user with ID = " . $current_user->id . " to destination user with ID " . $target_user_id);
        }
    }

    //Clone the dashboards from a user to other users
    public function clone_dashboards(ServiceBase $api, array $args)
    {
        global $db;

        require_once 'custom/modules/Administration/wUserUtils_utils.php';

        $data = $args['data'];

        $selected_modules = $data['modules'];
        $source_user_id   = $data['source_user'];
        $target_user_ids  = $data['target_users'];

        foreach ($target_user_ids as $target_user_id) {
            if (isset($selected_modules)) {
                foreach ($selected_modules as $smod) {
                    $arr[] = $smod;
                }
                $mod = "'" . implode("','", $arr) . "'";

                $sql_delete = "delete from dashboards where assigned_user_id = '{$target_user_id}' and dashboard_module in ({$mod})";
                $db->query($sql_delete);
                copy_filters_and_dashboards($mod, $target_user_id, $source_user_id);
            } else {
                $sql_delete = "delete from dashboards where assigned_user_id = '{$target_user_id}'";
                $db->query($sql_delete);
                copy_filters_and_dashboards(null, $target_user_id, $source_user_id);
            }
        }
    }

    //Change the password
    public function change_password(ServiceBase $api, array $args)
    {
        require_once 'custom/modules/Administration/wUserUtils_utils.php';

        $data = $args['data'];

        $password        = $data['password'];
        $target_user_ids = $data['target_users'];

        foreach ($target_user_ids as $target_user_id) {
            if (isset($target_user_id) || $target_user_id != '' || $target_user_id != null) {
                $target_user = new User();
                $target_user->retrieve($target_user_id);
                $target_user->user_hash = $target_user->getPasswordHash($password);
                $target_user->save();
            }
        }
    }

    public function saveMessage(ServiceBase $api, array $args)
    {
        global $db, $current_user;

        $log = LoggerHelper::getLoggerInstance();

        $options         = $args['data'];
        $encoded_options = base64_encode(serialize($options));

        $delete_existing_sql = <<<SQL
DELETE FROM config
WHERE
    category = "broadcast_message"
SQL;
        $db->query($delete_existing_sql);

        $insert_new_sql = <<<SQL
INSERT INTO config(category, name, value, platform)
    VALUES('broadcast_message', 'BroadcastMessage', '{$encoded_options}', '')
SQL;
        $db->query($insert_new_sql);

        $log->info("#wUserUtils#-> Broadcast Message Functionality <- #wUserUtils#: The configurations are scheduled with success by " . $current_user->user_name . " user with ID = " . $current_user->id);

        return true;
    }

    public function getLoginAsAuth($api, $args)
    {
        require_once 'modules/Administration/Administration.php';
        $administrationObj = new Administration();

        $administrationObj->retrieveSettings('login_as_privilege');
        $settings = unserialize(base64_decode($administrationObj->settings['login_as_privilege_Settings']));

        return $settings;
    }
}
