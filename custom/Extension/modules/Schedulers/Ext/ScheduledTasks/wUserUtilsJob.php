<?php

function wUserUtilsJob($job)
{
    require_once "custom/modules/Administration/wUserUtilsFunctionality.php";

    wUserUtils($job->data);

    return true;
}
