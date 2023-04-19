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

use Sugarcrm\Sugarcrm\Util\Uuid;

$reportsPanelsData = [];
$reportsPanelsData[] = [
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
];
$reportsPanelsData[] = [
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
];
$reportsPanelsData[] = [
    'report_type' => 'Matrix',
    'contents' => [
        'defaultLayout' => true,
        'panels' => [
            [
                'layout' => [
                    'type' => 'report-table',
                    'label' => 'LBL_REPORT_TABLE',
                ],
                'width' => 10,
                'height' => 6,
                'x' => 0,
                'y' => 0,
                'id' => 'table',
            ],
            [
                'layout' => [
                    'type' => 'report-chart',
                    'label' => 'LBL_REPORT_CHART',
                ],
                'width' => 10,
                'height' => 6,
                'x' => 0,
                'y' => 6,
                'id' => 'chart',
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
];
$reportsPanelsData[] = [
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
];


foreach ($reportsPanelsData as $i => $seedRP) {
    $reportPanelId = Uuid::uuid4();
    $now = $timedate->asDb($GLOBALS['timedate']->getNow());

    $qb = DBManagerFactory::getConnection()->createQueryBuilder();
    $qb->insert('reports_panels');

    $values = [
        'id' => $qb->createPositionalParameter($reportPanelId),
        'contents' => $qb->createPositionalParameter(json_encode($seedRP['contents'])),
        'date_entered' => $qb->createPositionalParameter($now),
        'date_modified' => $qb->createPositionalParameter($now),
        'default_panel' => $qb->createPositionalParameter(1),
        'report_type' => $qb->createPositionalParameter($seedRP['report_type']),
    ];
    $qb->values($values);
    $qb->execute();
}
