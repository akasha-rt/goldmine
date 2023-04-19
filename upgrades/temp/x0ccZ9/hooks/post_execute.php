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

use Sugarcrm\Sugarcrm\custom\Hint\Manager;
use Sugarcrm\Sugarcrm\custom\Hint\Job\InitJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\NewsJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\UserInitJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\HintSeatsJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\registerConfigJob;
use Sugarcrm\Sugarcrm\custom\Hint\PackageInstaller;
use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use Sugarcrm\Sugarcrm\custom\Hint\HintConstants;
use Sugarcrm\Sugarcrm\custom\Hint\Http\Client;

printf('Hint post_execute hook: found sugar version %s<br>', $GLOBALS['sugar_version']);

$packageInstaller = (new class extends PackageInstaller
{
    /**
     * post_execute hook runner
     * @param string $hook
     */
    public function run(string $hook): void
    {
        // If we get a geo (US/EU) to work with, then we can continue the installation.
        $manager = Manager::instance();
        if ($manager->getHintHostGeoInfo()) {
            // Check to see if the prior instance to this reinstallation/upgrade had
            // an admin explicitly disable notifications. If they did, carry over this
            // explicit disabling of notifications to the new instance by simply not
            // nullifying the notification config entry. The Initializer initUsers()
            // method will then appropriately handle the sending of the explicit
            // disable to the ISS (based on this config value being set as true).
            $explicitlyDisabledNotifications = ConfigurationManager::getHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION);
            if (!$explicitlyDisabledNotifications['value']) {
                ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION, null);
            }

            $this->deleteSchedulers($hook);
            $this->addSchedulers($hook);
            $this->addLogger($hook);
            $this->repairMetadataTables($hook);
            $this->increaseJsVersion($hook);
            $manager->cspRegisterHint();
        } else {
            printf('Hint installation stopped<br>');
            return;
        }
    }

    /**
     * Creates required schedulers and jobs
     * @param string $hook: The name of the hook from which we are invoking this method from. Used to easily identify
     * within the module loader which hook code is being called from.
     *
     * Note: On Upgrade the PHP code has the old version of addSchedulers, hence we extend it and add it in here.
     */
    protected function addSchedulers(string $hook): void
    {
        $this->log($hook, 'creating schedulers ...');

        // 1. Queue processor runner
        $this->log($hook, sprintf('creating scheduler "%s"', NewsJob::NAME));
        $this->createScheduler(NewsJob::NAME, 'class::' . NewsJob::class);

        // 2. Hint initializer
        $this->log($hook, sprintf('creating scheduler "%s"', InitJob::NAME));
        $scheduler = $this->createScheduler(InitJob::NAME, 'class::' . InitJob::class);

        $this->log($hook, sprintf('creating scheduler job "%s"', InitJob::NAME));
        $job = $scheduler->createJob();
        $job->status = \SchedulersJob::JOB_STATUS_QUEUED;
        $job->resolution = \SchedulersJob::JOB_PENDING;
        $systemInfo = \SugarSystemInfo::getInstance();
        $job->data = json_encode([
            'license_key' => $systemInfo->getLicenseKey(),
            'unique_key' => $this->config->getValue('unique_key', ''),
            'site_url' => $this->config->getValue('site_url', ''),
        ]);
        $job->save();

        // 3. Hint user initializer
        // NOTE: Set the UserInitJob scheduler status to initially be Inactive. This is done
        // later in our Hint Initialization process (initUsers() in Initializer.php), we must
        // propagate all user ids that do NOT have corresponding accountsets. Only then can we
        // set the scheduler job status to be ready to process. Without doing this, the
        // initialization would fail as the scheduler job would attempt to run with no ids
        // to initialize.
        $this->log($hook, sprintf('creating scheduler "%s"', UserInitJob::NAME));
        $this->createScheduler(UserInitJob::NAME, 'class::' . UserInitJob::class, 'Inactive');

        // 4. Hint seats
        $this->log($hook, sprintf('creating scheduler job "%s"', HintSeatsJob::NAME));
        $this->createScheduler(HintSeatsJob::NAME, 'class::' . HintSeatsJob::class);

        // 5. RegisterHintConfig initializer
        $this->log($hook, sprintf('creating scheduler "%s"', registerConfigJob::NAME));
        $scheduler = $this->createScheduler(registerConfigJob::NAME, 'class::' . registerConfigJob::class);

        $this->log($hook, sprintf('creating scheduler job "%s"', registerConfigJob::NAME));
        $job = $scheduler->createJob();
        $job->status = \SchedulersJob::JOB_STATUS_QUEUED;
        $job->resolution = \SchedulersJob::JOB_PENDING;
        $job->data = json_encode([
            'unique_key' => $this->config->getValue('unique_key', ''),
            'site_url' => $this->config->getValue('site_url', ''),
        ]);
        $job->save();
    }

    /**
     * Deletes Hint schedulers and jobs
     * @param string $hook: The name of the hook from which we are invoking this method from. Used to easily identify
     * within the module loader which hook code is being called from.
     */
    protected function deleteSchedulers(string $hook): void
    {
        $this->log($hook, 'deleting scheduler jobs ...');

        $schedulersTable = \BeanFactory::getBean('Schedulers')->getTableName();
        $jobQueueTable = \BeanFactory::getBean('SchedulersJobs')->getTableName();

        $connection = \DBManagerFactory::getConnection();
        foreach ([NewsJob::NAME, InitJob::NAME, UserInitJob::NAME, registerConfigJob::NAME, HintSeatsJob::NAME] as $name) {
            $this->log($hook, sprintf('deleting scheduler "%s"', $name));
            $deleted = $connection->delete($schedulersTable, ['name' => $name]);
            $this->log($hook, sprintf('%d rows deleted', $deleted));

            $this->log($hook, 'deleting scheduler jobs ...');
            $deleted = $connection->delete($jobQueueTable, ['name' => $name]);
            $this->log($hook, sprintf('%d rows deleted', $deleted));
        }
    }
})->run('post_execute');
