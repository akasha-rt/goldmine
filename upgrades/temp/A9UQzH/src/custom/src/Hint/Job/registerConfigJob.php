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
namespace Sugarcrm\Sugarcrm\custom\Hint\Job;

use Sugarcrm\Sugarcrm\custom\Hint\Config\ConfigTrait;
use Sugarcrm\Sugarcrm\custom\Hint\Initializer;

class registerConfigJob implements \RunnableSchedulerJob
{
    use ConfigTrait;

    const NAME = 'Hint Register Config Job';
    //  Postpones the Job if bean not found by 60 secs.
    const JOB_POSTPONE_TIMEOUT_SECS = 1 * 60;

    const ACCOUNTS_FIELDS = [
        'twitter', 'sic_code', 'description', 'annual_revenue', 'hint_account_size_c',
        'hint_account_industry_c', 'hint_account_location_c', 'hint_account_founded_year_c', 'hint_account_industry_tags_c',
        'hint_account_naics_code_lbl_c', 'hint_account_sic_code_label_c', 'hint_account_facebook_handle_c', 'hint_account_fiscal_year_end_c',
        'hint_account_annual_revenue_c'
    ];

    const CONTACTS_FIELDS = [
        'title', 'phone_work', 'phone_mobile', 'phone_other', 'hint_job_2_c', 'hint_twitter_c', 'hint_facebook_c', 'hint_education_c',
        'hint_account_size_c', 'hint_industry_tags_c', 'hint_account_website_c', 'hint_account_industry_c', 'hint_account_location_c',
        'hint_account_description_c', 'hint_account_founded_year_c', 'hint_account_annual_revenue_c',
        'hint_account_naics_code_lbl_c', 'hint_account_sic_code_label_c', 'hint_account_twitter_handle_c',
        'hint_account_facebook_handle_c', 'hint_account_fiscal_year_end_c', 'hint_education_2_c'
    ];

    const LEADS_FIELDS = [
        'title', 'account_name', 'phone_work', 'phone_mobile', 'phone_other', 'hint_job_2_c', 'hint_twitter_c', 'hint_facebook_c', 'hint_education_c',
        'hint_account_size_c', 'hint_industry_tags_c', 'hint_account_website_c', 'hint_account_industry_c', 'hint_account_location_c',
        'hint_account_description_c', 'hint_account_founded_year_c', 'hint_account_annual_revenue_c',
        'hint_account_naics_code_lbl_c', 'hint_account_sic_code_label_c', 'hint_account_twitter_handle_c',
        'hint_account_facebook_handle_c', 'hint_account_fiscal_year_end_c', 'hint_education_2_c'
    ];

    protected $job;

    /**
     * {@inheritdoc}
     */
    public function setJob(\SchedulersJob $job)
    {
        $this->job = $job;
    }

    public function run($data)
    {
        // no scheduler means this job finished successfully some time ago
        if (empty($this->job->scheduler_id)) {
            return $this->job->succeedJob('registerConfigJob is initialized');
        }

        $hintApiCalls = new \Stage2Api();
        $scheduler = \BeanFactory::retrieveBean('Schedulers', $this->job->scheduler_id);

        if (!$scheduler || $scheduler->status !== 'Active') {
            return $this->job->succeedJob('No active scheduler');
        }

        $isAlreadySynced = \HintEnrichFieldConfig::getSyncHintConfigurationStatus();
        if ($isAlreadySynced) {
            $scheduler->status = 'Inactive';
            $scheduler->save();
            return $this->job->succeedJob('registerConfigJob is initialized');
        } else {
            // configMetaData to be sent to v2 endpoint
            $configDataBeanData = [
                'Leads' =>
                    [
                        'fields' => $this->createInitialModuleConfig(self::LEADS_FIELDS),
                    ],
                'Accounts' =>
                    [
                        'fields' => $this->createInitialModuleConfig(self::ACCOUNTS_FIELDS),
                    ],
                'Contacts' =>
                    [
                        'fields' => $this->createInitialModuleConfig(self::CONTACTS_FIELDS),
                    ],
            ];

            $configDataBean = \BeanFactory::retrieveBean('HintEnrichFieldConfigs');
            $alreadyPostedBean = \HintEnrichFieldConfig::getHintEnrichFieldConfigBean();
            $identitySuccessResponse = $hintApiCalls->registerInstanceToCompanyIdentityEndpoint();
            $accessToken = $hintApiCalls->createToken('', '');

            // the 1st run
            if (empty($configDataBean)) {
                return $this->postpone('Postponing, no subscription');
            }

            $configDataBeanDataConverted = json_encode($configDataBeanData, true);

            // prevents multiple run and runs only if configMetadata is not found in DB.
            if ($configDataBean && empty($alreadyPostedBean)){
                \HintEnrichFieldConfig:: createHintEnrichFieldConfig($configDataBeanDataConverted);
            }

            $configSuccessResponse = $hintApiCalls->registerConfigToEnrichBeanEndpoint($accessToken, $configDataBeanData);

//         On successful registration of config_data and created the Identity the scheduler is no longer needed.
//         Until then we have the scheduler 'Active'.
            if ($configSuccessResponse['status'] === 201 && $identitySuccessResponse['status'] === 200) {
                \HintEnrichFieldConfig::syncHintConfigEndpointStatus();
                $scheduler->status = 'Inactive';
                $scheduler->save();
            }

            // REMIND: To Add POST method once v2 and /config-enrich-bean endpoints are completely ready.
            return $this->job->succeedJob('registerConfigJob is initialized');
        }
    }

    /**
     * Postpones current job
     *
     * @param string $message
     * @param int $timeout
     * @return bool
     */
    private function postpone($message = '', $timeout = self::JOB_POSTPONE_TIMEOUT)
    {
        // to avoid infinite message concatenation
        $this->job->message = '';

        return $this->job->postponeJob($message, $timeout);
    }

    private function createInitialModuleConfig($configFieldsForModule) {
        $configArray = [];
        for ($x = 0; $x < count($configFieldsForModule); $x++) {
            $key = $configFieldsForModule[$x];
            $configArray[$key] = true;
        }
        return $configArray;
    }
}
