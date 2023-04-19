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

use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use \Sugarcrm\Sugarcrm\custom\Hint\Helper\ViewdefsParser as ViewdefsParser;

$module = 'Contacts';

$allPanels = $viewdefs[$module]['base']['view']['record']['panels'] ?? [];
$shouldShowHintTab = ConfigurationManager::isHintUser();
if ($shouldShowHintTab) {
    foreach ($allPanels as $pkey => $currentPanel) {
        ViewdefsParser::parseViewContactsAndLeads($currentPanel, $allPanels, $pkey);
    }

    $hintPanel = [
        'name' => 'panel_hint',
        'label' => 'LBL_HINT_PANEL',
        'columns' => 2,
        'labels' => true,
        'labelsOnTop' => true,
        'placeholders' => true,
        'fields' => [
            [
                'name' => 'hint_account_website_c',
                'type' => 'stage2_url',
                'white_list' => true
            ],
            'hint_education_c',
            [
                'name' => 'hint_education_2_c',
                'parent_key' => 'hint_education_c'
            ],
            'hint_job_2_c',
            'hint_account_size_c',
            'hint_account_industry_c',
            'hint_account_location_c',
            [
                'name' => 'hint_account_description_c',
                'account_key' => 'description'
            ],
            'hint_account_founded_year_c',
            [
                'name' => 'hint_industry_tags_c',
                'account_key' => 'hint_account_industry_tags_c'
            ],
            'hint_account_naics_code_lbl_c',
            [
                'name' => 'hint_account_sic_code_label_c',
                'account_key' => 'sic_code'
            ],


            'hint_account_fiscal_year_end_c',
            [
                'name' => 'hint_account_annual_revenue_c',
                'account_key' => 'annual_revenue'
            ],
            [
                'name' => 'hint_facebook_c',
                'type' => 'stage2_url',
            ],
            [
                'name' => 'hint_twitter_c',
                'type' => 'stage2_url',
            ],
            [
                'name' => 'hint_account_facebook_handle_c',
                'type' => 'stage2_url',
            ],
            [
                'name' => 'hint_account_twitter_handle_c',
                'type' => 'stage2_url',
                'account_key' => 'twitter'
            ],
            [
                'name' => 'phone_other',
                'type' => 'phone'
            ],
            [
                'name' => 'hint_photo_c',
                'type' => 'stage2_image',
                'size' => 'large',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true
            ],
            [
                'name' => 'hint_account_logo_c',
                'type' => 'stage2_image',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true
            ]
        ]
    ];

    $hintPanel['fields'] = ViewdefsParser::filterRecordFields(
        $module, $hintPanel
    );
    $allPanels[] = $hintPanel;
}
$viewdefs[$module]['base']['view']['record']['panels'] = $allPanels;
