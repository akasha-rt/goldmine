<?php
$viewdefs['base']['view']['activity-card-content'] = [
    'panels' => [
        [
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'css_class' => 'panel-header',
            'fields' => [				
				[
                    'name' => 'registered',
                ],
				[
                    'name' => 'attended',
                ],
			],
        ],
        [
            'name' => 'panel_body',
            'label' => 'LBL_PANEL_2',
            'css_class' => 'panel-body',
            'fields' => [
				[
                    'name' => 'dialog_response',
                    'settings' => [
                        'max_display_chars' => 10000,
                        'collapsed' => false,
                    ],
                ],
				[
                    'name' => 'duration',
                ],
                [
                    'name' => 'description',
                    'settings' => [
                        'max_display_chars' => 10000,
                        'collapsed' => false,
                    ],
                ],
            ],
        ],
    ],
];