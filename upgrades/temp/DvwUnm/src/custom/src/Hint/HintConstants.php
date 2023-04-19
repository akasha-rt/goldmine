<?php

namespace Sugarcrm\Sugarcrm\custom\Hint;

use Sugarcrm\Sugarcrm\custom\Hint\Queue\EventTypes;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\InstanceInitCompletedEvent;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\InstanceInitCloneCompletedEvent;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\InstanceResyncCompletedEvent;

class HintConstants {
    const HINT_CONFIG_GEO = 'HintConfigGeo';
    const HINT_CONFIG_NOTIFICATION = 'HintConfigNotification';
    const HINT_CONFIG_SEATS = 'HintConfigSeats';
    const HINT_CONFIG_HARD_UNINSTALL = 'HintConfigHardUninstall';

    const HINT_CONFIG_MAP = [
        self::HINT_CONFIG_GEO => [
            'name' => 'HintGeo',
            'platform' => 'base',
            'module' => 'HintGeoConfig'
        ],

        self::HINT_CONFIG_NOTIFICATION => [
            'name' => 'HintNotification',
            'platform' => 'base',
            'module' => 'HintNotificationConfig'
        ],

        self::HINT_CONFIG_SEATS => [
            'name' => 'HintSeatsJob',
            'platform' => 'base',
            'module' => 'HintSeatsJobConfig'
        ],

        self::HINT_CONFIG_HARD_UNINSTALL => [
            'name' => 'HintHardUninstall',
            'platform' => 'base',
            'module' => 'HintHardUninstallConfig'
        ],
    ];

    // Metadata for Hint field View defs
    const DEFAULT_HINT_ACCOUNTS_BASIC_PANEL = [
        'hint_account_size_c', 'hint_account_industry_c', 'hint_account_location_c', 'annual_revenue', 'description'
    ];

    const DEFAULT_HINT_ACCOUNTS_EXPANDED_PANEL = [
        'hint_account_naics_code_lbl_c', 'sic_code', 'hint_account_fiscal_year_end_c', 'hint_account_founded_year_c',
        'hint_account_facebook_handle_c', 'twitter', 'hint_account_industry_tags_c'
    ];

    const DEFAULT_HINT_CONTACTS_BASIC_PANEL = [
        'phone_work', 'phone_mobile', 'phone_other', 'email'
    ];

    const DEFAULT_HINT_CONTACTS_EXPANDED_PANEL = [
        'hint_education_c', 'hint_education_c', 'hint_job_2_c', 'hint_facebook_c', 'hint_twitter_c'
    ];

    const DEFAULT_HINT_LEADS_BASIC_PANEL = [
        'phone_work', 'phone_mobile', 'phone_other', 'email'
    ];

    const DEFAULT_HINT_LEADS_EXPANDED_PANEL = [
        'hint_education_c', 'hint_education_c', 'hint_job_2_c', 'hint_facebook_c', 'hint_twitter_c'
    ];

    const DEFAULT_HINT_ACCOUNTS_FIELD_CONFIG = [
        'basic' => HintConstants::DEFAULT_HINT_ACCOUNTS_BASIC_PANEL,
        'expanded' => HintConstants::DEFAULT_HINT_ACCOUNTS_EXPANDED_PANEL
    ];

    const DEFAULT_HINT_CONTACTS_FIELD_CONFIG = [
        'basic' => HintConstants::DEFAULT_HINT_CONTACTS_BASIC_PANEL,
        'expanded' => HintConstants::DEFAULT_HINT_CONTACTS_EXPANDED_PANEL
    ];

    const DEFAULT_HINT_LEADS_FIELD_CONFIG = [
        'basic' => HintConstants::DEFAULT_HINT_LEADS_BASIC_PANEL,
        'expanded' => HintConstants::DEFAULT_HINT_LEADS_EXPANDED_PANEL
    ];

    const DEFAULT_ACCOUNTS_FIELDS = [
        'twitter', 'sic_code', 'description', 'annual_revenue', 'hint_account_size_c',
        'hint_account_industry_c', 'hint_account_location_c', 'hint_account_founded_year_c', 'hint_account_industry_tags_c',
        'hint_account_naics_code_lbl_c', 'hint_account_sic_code_label_c', 'hint_account_facebook_handle_c', 'hint_account_fiscal_year_end_c',
        'hint_account_annual_revenue_c'
    ];

    const DEFAULT_CONTACTS_FIELDS = [
        'title', 'phone_work', 'phone_mobile', 'hint_photo_c', 'phone_other', 'hint_job_2_c', 'hint_twitter_c', 'hint_facebook_c', 'hint_education_c',
        'hint_account_size_c', 'hint_industry_tags_c', 'hint_account_website_c', 'hint_account_industry_c', 'hint_account_location_c',
        'hint_account_description_c', 'hint_account_founded_year_c', 'hint_account_annual_revenue_c',
        'hint_account_naics_code_lbl_c', 'hint_account_sic_code_label_c', 'hint_account_twitter_handle_c',
        'hint_account_facebook_handle_c', 'hint_account_fiscal_year_end_c', 'hint_education_2_c'
    ];

    const DEFAULT_LEADS_FIELDS = [
        'title', 'account_name', 'phone_work', 'hint_photo_c', 'phone_mobile', 'phone_other', 'hint_job_2_c', 'hint_twitter_c', 'hint_facebook_c', 'hint_education_c',
        'hint_account_size_c', 'hint_industry_tags_c', 'hint_account_website_c', 'hint_account_industry_c', 'hint_account_location_c',
        'hint_account_description_c', 'hint_account_founded_year_c', 'hint_account_annual_revenue_c',
        'hint_account_naics_code_lbl_c', 'hint_account_sic_code_label_c', 'hint_account_twitter_handle_c',
        'hint_account_facebook_handle_c', 'hint_account_fiscal_year_end_c', 'hint_education_2_c'
    ];

    public static function hintConfig()
    {
        return include 'custom/Stage2/Stage2ClientBuildConfig.php';
    }

    /**
     * Return corresponding completion event based on the eventType.
     */
    public static function getCompletionEvent($eventType)
    {
        switch ($eventType) {
        case EventTypes::INSTANCE_INIT_COMPLETED:
            return new InstanceInitCompletedEvent();
        case EventTypes::INSTANCE_INIT_CLONE_COMPLETED:
            return new InstanceInitCloneCompletedEvent();
        case EventTypes::INSTANCE_RESYNC_COMPLETED:
            return new InstanceResyncCompletedEvent();
        }
    }
}

