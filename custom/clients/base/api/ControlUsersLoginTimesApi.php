<?php

use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Traits\SugarConfigTrait;

class ControlUsersLoginTimesApi extends SugarApi
{
    use SugarConfigTrait;

    public function registerApiRest()
    {
        return [
            "SaveControlUsersLoginTimes" => [
                "reqType"         => "POST",
                "path"            => array("saveControlUsersLoginTimes"),
                "pathVars"        => array(""),
                "method"          => "saveControlUsersLogin",
                "shortHelp"       => "Saved configuration for control users login times",
                "longHelp"        => "",
                'noLoginRequired' => true,
            ],

            "GetControlUsersLoginTimes" => array(
                "reqType"         => "GET",
                "path"            => array("getControlUsersLoginTimes"),
                "pathVars"        => array(""),
                "method"          => "getControlUsersLogin",
                "shortHelp"       => "Get configuration for control users login times",
                "longHelp"        => "",
                "noLoginRequired" => true,
            ),

            "GetControlTimeUsers" => array(
                "reqType"         => "GET",
                "path"            => array("getControlTimeUsers"),
                "pathVars"        => array(""),
                "method"          => "getControlTimeUsersData",
                "shortHelp"       => "Get user data",
                "longHelp"        => "",
                "noLoginRequired" => true,
            ),
        ];
    }

    public function saveControlUsersLogin(ServiceBase $api, array $args): array
    {
        $userLoginTimesData = $args["data"];

        foreach ($userLoginTimesData as $key => $value) {
            $this->sugarConfigSet("ControlUsersLoginTimes" . $key, $value);
        }
        return [];
    }

    public function getControlUsersLogin(ServiceBase $api, array $args): array
    {
        global $db;

        $usersConfig = array();

        $getUsers = <<<SQL
SELECT
    id, first_name, last_name
FROM
    users
WHERE
    deleted = 0 AND status = "Active"
ORDER BY first_name ASC
SQL;

        $users_result = $db->query($getUsers);

        while ($row = $db->fetchByAssoc($users_result)) {
            $controlUserLogin  = "ControlUsersLoginTimes" . $row["id"];
            $getSavedUsersData = $this->sugarConfigGet($controlUserLogin);

            if (empty($getSavedUsersData) !== true && $getSavedUsersData["controlUserLoginDays"] === true) {
                $usersConfig[$row["id"]]["id"]                   = $row["id"];
                $usersConfig[$row["id"]]["first_name"]           = $row["first_name"];
                $usersConfig[$row["id"]]["last_name"]            = $row["last_name"];
                $usersConfig[$row["id"]]["controlUserLoginDays"] = $getSavedUsersData["controlUserLoginDays"];
                $usersConfig[$row["id"]]["startDate"]            = $getSavedUsersData["startDate"];
                $usersConfig[$row["id"]]["endDate"]              = $getSavedUsersData["endDate"];
            }
        }

        return $usersConfig;
    }

    public function getControlTimeUsersData(ServiceBase $api, array $args): bool
    {
        global $timezone, $current_user;

        $logOutFlag = false;

        $timezone           = \TimeDate::userTimezone($current_user);
        $getCurrentUserTime = (new \DateTime("now"))->setTimezone(new \DateTimeZone($timezone));

        foreach ($getCurrentUserTime as $timeKey => $timeValue) {
            if ($timeKey === "date") {
                $currentDate = $timeValue;
            }
        }

        $currentUserUtcDate = date_format(date_create($currentDate), "Y-m-d H:i:s");
        $currentUserTime    = date('h:i A', strtotime($currentUserUtcDate));
        $nameOfTheDay       = date("D", strtotime($currentUserTime));

        $currentUserId     = $current_user->id;
        $controlUserLogin  = "ControlUsersLoginTimes" . $currentUserId;
        $getUserLoginTimes = $this->sugarConfigGet($controlUserLogin);

        if (empty($getUserLoginTimes) === true) {
            return $logOutFlag;
        }

        if ($getUserLoginTimes["controlUserLoginDays"] === true) {
            $startUtcDate = date_format(date_create($getUserLoginTimes["startDate"]), "h:i A");
            $endUtcDate   = date_format(date_create($getUserLoginTimes["endDate"]), "h:i A");

            if (strtotime($startUtcDate) > strtotime($currentUserTime) || strtotime($endUtcDate) < strtotime($currentUserTime)) {
                $logOutFlag = true;
            }

            if ($nameOfTheDay === "Sun" || $nameOfTheDay === "Sat") {
                $logOutFlag = true;
            }
        }

        return $logOutFlag;
    }
}
