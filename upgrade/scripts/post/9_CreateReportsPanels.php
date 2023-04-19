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

/**
 * Create default Reports Panels
 */
class SugarUpgradeCreateReportsPanels extends UpgradeScript
{
    public $order = 9252;
    public $type = self::UPGRADE_DB;

    /**
     * @inheritdoc
     */
    public function run()
    {
        global $current_user, $timedate;

        $this->log('Create default Reports Panels...');

        if (version_compare($this->from_version, '12.1.0', '<')) {
            $reportsPanelsData = [];
            $reportsPanelsData[] = [
                'report_type' => 'summary',
                'contents' => [
                    'defaultLayout' => true,
                    'panels' => [
                        [
                            'layout' => [
                                'type' => 'report-chart',
                                'label' => 'CHART',
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
                                'label' => 'TABLE',
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
                                'label' => 'FILTERS',
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
                                'label' => 'CHART',
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
                                'label' => 'TABLE',
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
                                'label' => 'FILTERS',
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
                                'label' => 'TABLE',
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
                                'label' => 'CHART',
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
                                'label' => 'FILTERS',
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
                                'label' => 'TABLE',
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
                                'label' => 'FILTERS',
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
                $now = $timedate->asDb($timedate->getNow());

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
        }
        $this->log('Done creating default Reports Panels');
    }
}
