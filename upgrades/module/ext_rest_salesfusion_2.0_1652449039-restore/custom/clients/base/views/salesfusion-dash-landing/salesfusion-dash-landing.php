<?php
if(!defined('sugarEntry'))define('sugarEntry', true);


$viewdefs['base']['view']['salesfusion-dash-landing'] = array(
    'dashlets' => array(
        array(
            'name' => 'Salesfusion Journey chart',
            'label' => 'Sugar Market Journey chart',
            'description' => 'Sugar Market Journey (landing pages) chart - Iframe',
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
