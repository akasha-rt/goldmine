<?php
$manifest = array (
    'id' => 'act-on-custom-platform',
    'name' => 'Act-On Custom Platform Registration',
    'description' => 'Act-On Custom Platform Registration',
    'version' => '1.0',
    'author' => 'SugarCRM, Inc.',
    'is_uninstallable' => 'true',
    'published_date' => '2018-06-14 16:59:08',
    'type' => 'module',
    'acceptable_sugar_versions' =>
        array (
            'exact_matches' =>
                array (
                ),
            'regex_matches' =>
                array (
                    0 => '^7\\.(9|10|11)\\.[\\d]+.*|8\\.[\\d]+\\.[\\d]+.*',
                ),
        ),
);
$installdefs = array (
    'copy' =>
        array (
            0 =>
                array (
                    'from' => '<basepath>/src/custom/Extension/application/Ext/Platforms/platform_list.php',
                    'to' => 'custom/Extension/application/Ext/Platforms/platform_list.php',
                ),
        ),
);