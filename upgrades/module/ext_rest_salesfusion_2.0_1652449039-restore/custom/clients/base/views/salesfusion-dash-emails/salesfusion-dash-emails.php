<?php
if(!defined('sugarEntry'))define('sugarEntry', true);


$viewdefs['base']['view']['salesfusion-dash-emails'] = array(
    'dashlets' => array(
        array(
            'name' => 'Salesfusion Email chart',
            'label' => 'Sugar Market Email chart',
            'description' => 'Sugar Market Email chart - Iframe',
            'config' => array(
            ),
            'filter' => array(
                'module' => array(
                    'Contacts',
                    'Leads',
                ),
                'view' => 'record'
            ),
        ),
    ),
    'view_panel' => array(
        array(
            'type' => 'iframe',
            'name' => 'url',
            'label' => 'URL',
        ),
    ),
);
