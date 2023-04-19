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
$viewdefs['Reports']['base']['layout']['report-panel'] = [
    'defaultLayouts' => [
        'summary' => [
            'report_type' => 'summary',
            'contents' => [
                'defaultLayout' => true,
                'panels' => [
                    [
                        'layout' => [
                            'type' => 'report-chart',
                            'label' => 'LBL_REPORT_CHART',
                        ],
                        'width' => 10,
                        'height' => 6,
                        'x' => 0,
                        'y' => 0,
                        'id' => 'chart',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-table',
                            'label' => 'LBL_REPORT_TABLE',
                        ],
                        'width' => 10,
                        'height' => 6,
                        'x' => 0,
                        'y' => 6,
                        'id' => 'table',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-filters',
                            'label' => 'LBL_REPORT_FILTERS',
                        ],
                        'width' => 2,
                        'height' => 12,
                        'x' => 10,
                        'y' => 0,
                        'id' => 'filters',
                    ],
                ],
            ],
        ],
        'detailed_summary' => [
            'report_type' => 'detailed_summary',
            'contents' => [
                'defaultLayout' => true,
                'panels' => [
                    [
                        'layout' => [
                            'type' => 'report-chart',
                            'label' => 'LBL_REPORT_CHART',
                        ],
                        'width' => 10,
                        'height' => 6,
                        'x' => 0,
                        'y' => 0,
                        'id' => 'chart',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-table',
                            'label' => 'LBL_REPORT_TABLE',
                        ],
                        'width' => 10,
                        'height' => 6,
                        'x' => 0,
                        'y' => 6,
                        'id' => 'table',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-filters',
                            'label' => 'LBL_REPORT_FILTERS',
                        ],
                        'width' => 2,
                        'height' => 12,
                        'x' => 10,
                        'y' => 0,
                        'id' => 'filters',
                    ],
                ],
            ],
        ],
        'Matrix' => [
            'report_type' => 'Matrix',
            'contents' => [
                'defaultLayout' => true,
                'panels' => [
                    [
                        'layout' => [
                            'type' => 'report-chart',
                            'label' => 'LBL_REPORT_CHART',
                        ],
                        'width' => 10,
                        'height' => 6,
                        'x' => 0,
                        'y' => 0,
                        'id' => 'chart',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-table',
                            'label' => 'LBL_REPORT_TABLE',
                        ],
                        'width' => 10,
                        'height' => 6,
                        'x' => 0,
                        'y' => 6,
                        'id' => 'table',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-filters',
                            'label' => 'LBL_REPORT_FILTERS',
                        ],
                        'width' => 2,
                        'height' => 12,
                        'x' => 10,
                        'y' => 0,
                        'id' => 'filters',
                    ],
                ],
            ],
        ],
        'tabular' => [
            'report_type' => 'tabular',
            'contents' => [
                'defaultLayout' => true,
                'panels' => [
                    [
                        'layout' => [
                            'type' => 'report-table',
                            'label' => 'LBL_REPORT_TABLE',
                        ],
                        'width' => 10,
                        'height' => 12,
                        'x' => 0,
                        'y' => 0,
                        'id' => 'table',
                    ],
                    [
                        'layout' => [
                            'type' => 'report-filters',
                            'label' => 'LBL_REPORT_FILTERS',
                        ],
                        'width' => 2,
                        'height' => 12,
                        'x' => 10,
                        'y' => 0,
                        'id' => 'filters',
                    ],
                ],
            ],
        ],
    ],
];
