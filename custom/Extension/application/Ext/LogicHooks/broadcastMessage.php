<?php

$hook_array["before_respond"][] = array(
    -1,
    "Check if a broadcast message is available and set it on the request header",
    "custom/modules/checkBroadcast.php",
    "CheckBroadcast",
    "addBroadcastCookie",
);
