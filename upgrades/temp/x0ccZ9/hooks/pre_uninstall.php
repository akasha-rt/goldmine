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

use Sugarcrm\Sugarcrm\custom\Hint\Job\InitJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\NewsJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\UserInitJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\HintSeatsJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\registerConfigJob;
use Sugarcrm\Sugarcrm\custom\Hint\PackageInstaller;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Queue;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\ProcessorFactory;
use Sugarcrm\Sugarcrm\custom\Hint\Manager;
use Sugarcrm\Sugarcrm\custom\Hint\Iss\Manager as IssManager;
use Sugarcrm\Sugarcrm\custom\Hint\Iss\Commands;
use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use Sugarcrm\Sugarcrm\custom\Hint\HintConstants;

printf('Hint pre_uninstall hook: found sugar version %s<br>', $GLOBALS['sugar_version']);

const SCHEDULER_JOBS_TO_BE_REMOVED = [
    InitJob::NAME,
    NewsJob::NAME,
    UserInitJob::NAME,
    HintSeatsJob::NAME,
    registerConfigJob::NAME
];

$packageInstaller = (new class extends PackageInstaller
{
    /**
     * pre_uninstall hook runner
     * @param string $hook
     */
    public function run(string $hook): void
    {
        // By the time this hook is executed, hard uninstalls will already have fired the
        // deleteInstance command to the ISS. We only want to softDisableNotifications when
        // we are performing a soft uninstall.
        $hardUninstallFlag = ConfigurationManager::getHintConfigEntry(HintConstants::HINT_CONFIG_HARD_UNINSTALL);

        // Check if notifications are disabled EXPLICITLY. If they are, don't
        // nullify the local sugar config entry (keep it as explicitly disabled). If
        // an upgrade is done, we follow up the new instance creation commands with an
        // explicit disableNotifications command (the admin explicitly disabled them
        // in the hint configuration panel, so they would need to re-enable them for
        // notifications to start up again).
        $explicitlyDisabledNotifications = ConfigurationManager::getHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION);

        if (!$hardUninstallFlag['value'] && !$explicitlyDisabledNotifications['value']) {
            // When upgrading to a new package, there is a chance that the ISS may temporarily be
            // unavailable for whatever reason. If it's not accessible, $issManager->sendCommands
            // will throw an exception. We catch that exception here and log a red, all capital
            // letter warning message in the module loader AS WELL as logging to the sugar log.
            // The message explains that a successful resync will be required in order to get
            // the instance properly set up for notification related features.
            $issRetries = 4;
            for ($i = 1; $i <= $issRetries; $i++) {
                try {
                    $this->softDisableNotifications();
                    break;
                } catch (\Throwable $e) {
                    if ($i < $issRetries) {
                        sleep(5);
                        continue;
                    }
                    global $app_strings;
                    $errorString = $app_strings['LBL_HINT_SOFT_DISABLE_NOTIFICATIONS_FAILURE'];

                    // class "error" is defined in mango and gives the message a noticeable red color
                    $output = '<p class="error">' . $errorString .'</p>';
                    $GLOBALS['log']->info($errorString);
                    echo $output;
                }
            }
        }

        $this->deleteSchedulers($hook);
        $this->deleteLogger($hook);

        // Reset hardUninstall flag to null. If we don't do this, then
        // future soft uninstalls may get interpreted as hard uninstalls.
        ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_HARD_UNINSTALL, null);
    }

    /**
     * Deletes Hint schedulers and jobs
     *
     * @param string $hook: The name of the hook from which we are invoking this method from. Used to easily identify
     * within the module loader which hook code is being called from.
     */
    protected function deleteSchedulers(string $hook): void
    {
        $this->log($hook, 'deleting scheduler jobs ...');
        $schedulersTable = \BeanFactory::getBean('Schedulers')->getTableName();
        $jobQueueTable = \BeanFactory::getBean('SchedulersJobs')->getTableName();

        $connection = \DBManagerFactory::getConnection();
        foreach (SCHEDULER_JOBS_TO_BE_REMOVED as $name) {
            $this->log($hook, sprintf('deleting scheduler "%s"', $name));
            $deleted = $connection->delete($schedulersTable, ['name' => $name]);
            $this->log($hook, sprintf('%d rows deleted', $deleted));

            $this->log($hook, 'deleting scheduler jobs ...');
            $deleted = $connection->delete($jobQueueTable, ['name' => $name]);
            $this->log($hook, sprintf('%d rows deleted', $deleted));
        }
    }

    protected function softDisableNotifications(): void
    {
        $hintManager = Manager::instance();
        $issManager = new IssManager($hintManager->issServiceUrl);
        $processorFactory = new ProcessorFactory();

        // get disableNotifications command processor
        $processorData = ['explicitDisable' => null];
        $command = $processorFactory->getProcessor(Commands::ISS_DISABLE_NOTIFICATIONS)($processorData);

        // soft disable notifications on Sugar instance
        ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION, null);

        // send disableNotifications to ISS
        // NOTE: this is done synchronously so we can ensure that the ISS will receive the
        // soft disableNotifications command prior to deleting the MLP code
        $issManager->sendCommands([$command]);
    }
})->run('pre_uninstall');
