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
$viewdefs['Reports']['base']['layout']['report-table'] = [
    'components' => [
        [
            'view' => [
                'name' => 'report-panel-toolbar',
                'label' => 'LBL_DATA_TABLE',
            ],
        ],
        [
            'view' => [
                'name' => 'report-table',
                'css_class' => 'h-full',
            ],
        ],
    ],
    'css_class' => 'h-full',
];
