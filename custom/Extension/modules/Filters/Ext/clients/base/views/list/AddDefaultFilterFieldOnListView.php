<?php

$module = "Filters";

$default_filter = array(
    "name"    => "default_filter",
    "enabled" => true,
    "default" => "0",
);

$viewdefs[$module]["base"]["view"]["list"]["panels"][0]["fields"][] = $default_filter;
