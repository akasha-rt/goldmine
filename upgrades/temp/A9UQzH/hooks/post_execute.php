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

use Sugarcrm\Sugarcrm\custom\Hint\Job\registerConfigJob;
use Sugarcrm\Sugarcrm\custom\Hint\PackageInstaller;

printf('Hint post_execute hook: found sugar version %s<br>', $GLOBALS['sugar_version']);

$packageInstaller = (new class extends PackageInstaller
{
    /**
     * post_execute hook runner
     * @param string $hook
     */
    public function run(string $hook): void
    {
        // to avoid duplicated schedulers if "pre_uninstall" is not called
        $this->deleteSchedulers($hook);

        $this->addSchedulers($hook);
        $this->addLogger($hook);

        $this->repairMetadataTables($hook);

        $this->increaseJsVersion($hook);
    }
    // Note: On Upgrade the PHP code has the old version of addSchedulers hence we extend it and add it in here.
    protected function addSchedulers(string $hook): void
    {
        parent::addSchedulers($hook);

        // 4. RegisterHintConfig initializer
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

    protected function deleteSchedulers(string $hook): void
    {
        parent::deleteSchedulers($hook);
        $this->log($hook, 'deleting scheduler jobs ...');

        $schedulersTable = \BeanFactory::getBean('Schedulers')->getTableName();
        $jobQueueTable = \BeanFactory::getBean('SchedulersJobs')->getTableName();

        $connection = \DBManagerFactory::getConnection();
        foreach ([registerConfigJob::NAME] as $name) {
            $this->log($hook, sprintf('deleting scheduler "%s"', $name));
            $deleted = $connection->delete($schedulersTable, ['name' => $name]);
            $this->log($hook, sprintf('%d rows deleted', $deleted));

            $this->log($hook, 'deleting scheduler jobs ...');
            $deleted = $connection->delete($jobQueueTable, ['name' => $name]);
            $this->log($hook, sprintf('%d rows deleted', $deleted));
        }
    }

})->run('post_execute');
