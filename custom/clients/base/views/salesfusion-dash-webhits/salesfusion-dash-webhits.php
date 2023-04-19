<?php
if(!defined('sugarEntry'))define('sugarEntry', true);


$viewdefs['base']['view']['salesfusion-dash-webhits'] = array(
    'dashlets' => array(
        array(
            'name' => 'Salesfusion Web Hits chart',
            'label' => 'Sugar Market Web Hits chart',
            'description' => 'Sugar Market Web Hits chart - Iframe',
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
