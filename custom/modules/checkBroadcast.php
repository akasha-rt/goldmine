<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class CheckBroadcast
{
    public function addBroadcastCookie($event, $response)
    {
        global $timezone;

        $query = <<<SQL
SELECT value
FROM config
WHERE category = ?
SQL;
        $conn = $GLOBALS['db']->getConnection();
        $stmt = $conn->executeQuery($query, array("broadcast_message"));
        foreach ($stmt->fetchAll() as $row) {
            $result = $row['value'];
        }

        $request_uri = $_SERVER['REQUEST_URI'];
        $restVPos    = strrpos($request_uri, 'rest/v');
        if ($restVPos == false) {
            //$path = "/";
        } else {
            $path = substr($request_uri, 0, $restVPos - 1);
        }

        if ($path == "") {
            $path = "/";
        }

        if (!empty($result) && strlen($result) > 0) {
            $data = unserialize(base64_decode($result));

            $date_start_date = $data['date_start_date'];
            $date_start_time = $data['date_start_time'];
            $date_end_date   = $data['date_end_date'];
            $date_end_time   = $data['date_end_time'];

            $shouldDisplayBroadcast = false;
            //convert dates to utc
            $timezone    = TimeDate::userTimezone($user);
            $date_start  = new DateTime($date_start_date . " " . $date_start_time);
            $date_end    = new DateTime($date_end_date . " " . $date_end_time);
            $currentDate = (new DateTime("now"))->setTimezone(new DateTimeZone($timezone));

            foreach ($date_start as $key => $value) {
                if ($key == 'date') {
                    $startDate = $value;
                }
            }

            foreach ($date_end as $key => $value) {
                if ($key == 'date') {
                    $endDate = $value;
                }
            }

            foreach ($currentDate as $key => $value) {
                if ($key == 'date') {
                    $currentD = $value;
                }
            }

            if ($startDate < $currentD && $endDate > $currentD) {
                $shouldDisplayBroadcast = true;
            }

            if ($shouldDisplayBroadcast) {
                $this->addCookie($response, 'UserUtils-Broadcast', json_encode($data), $path);
            } else {
                $this->addCookie($response, 'UserUtils-Broadcast', json_encode(false), $path);
            }
        } else {
            $this->addCookie($response, 'UserUtils-Broadcast', json_encode(false), $path);
        }
    }

    public function addCookie($response, $cookie_name, $cookie, $path)
    {
        if (isset($_COOKIE[$cookie_name]) === false || $_COOKIE[$cookie_name] !== $cookie) {
            setcookie($cookie_name, $cookie, 0, $path);
        }
    }
}
