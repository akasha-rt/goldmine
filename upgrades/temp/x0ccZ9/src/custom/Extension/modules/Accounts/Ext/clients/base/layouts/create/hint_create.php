<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
use \Sugarcrm\Sugarcrm\custom\Hint\Helper\ViewdefsParser as ViewdefsParser;

$module = 'Accounts';
$components = $viewdefs[$module]['base']['layout']['create']['components'] ?? [];
$components = ViewdefsParser::injectAfterSidebarMainpane(
    $components,
    [
        'layout' => [
            'type' => 'base',
            'name' => 'dashboard-pane',
            'css_class' => 'dashboard-pane',
            'components' => [
                [
                    'view' => 'stage2-help',
                ],
            ],
        ],
    ]
);
$viewdefs[$module]['base']['layout']['create']['components'] = $components;
