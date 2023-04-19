<?php

    $manifest = array(
        'acceptable_sugar_flavors' => array('ENT','ULT'),
        'acceptable_sugar_versions' => array(
            //'exact_matches' => array(),
            'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
        ),
        'author' => 'Patrick McQueen',
        'description' => 'Scheduler that deletes SugarBPM history.',
        'is_uninstallable' => true,
        'name' => 'Prune SugarBPM History',
        'published_date' => '2020-04-25',
        'type' => 'module',
        'version' => '1.0',
    );

    $installdefs = array(
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/pruneSugarBPMHistory.php',
                'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/pruneSugarBPMHistory.php',
            ),
            1 => array(
                'from' => '<basepath>/Files/en_us.pruneSugarBPMHistory.php',
                'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.pruneSugarBPMHistory.php',
            ),
        ),
    );