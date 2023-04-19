<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
global $db, $timedate;

$broadcastMessage = 'broadcast_message';
$query            = 'SELECT value FROM config WHERE category = ?';
$conn             = $GLOBALS['db']->getConnection();
$stmt             = $conn->executeQuery($query, array($broadcastMessage));
foreach ($stmt->fetchAll() as $row) {
    $result = $row['value'];
}

$timezone = TimeDate::userTimezone($user);

if (!empty($result) && strlen($result) > 0) {
    $data = unserialize(base64_decode($result));

    $date_start_date = $data['date_start_date'];
    $date_start_time = $data['date_start_time'];
    $date_end_date   = $data['date_end_date'];
    $date_end_time   = $data['date_end_time'];

    $shouldDisplayBroadcast = false;
    //convert dates to utc
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

    $response = array(
        "value"                  => json_encode($data),
        "shouldDisplayBroadcast" => $shouldDisplayBroadcast,
        "success"                => true,
    );
    echo json_encode($response);
} else {
    $response = array(
        "success" => false,
    );
    echo json_encode($response);
}
