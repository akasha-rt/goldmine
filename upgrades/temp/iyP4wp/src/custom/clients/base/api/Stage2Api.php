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

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Sugarcrm\Sugarcrm\custom\Hint\Config\ConfigTrait;
use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use Sugarcrm\Sugarcrm\custom\Hint\HintConstants;
use Sugarcrm\Sugarcrm\custom\Hint\Initializer;
use Sugarcrm\Sugarcrm\custom\Hint\Iss\Commands;
use Sugarcrm\Sugarcrm\custom\Hint\Iss\Manager as IssManager;
use Sugarcrm\Sugarcrm\custom\Hint\Logger\Logger;
use Sugarcrm\Sugarcrm\custom\Hint\Manager;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\InstanceDisableNotificationsEvent;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\InstanceEnableNotificationsEvent;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\UserUnlicensedEvent;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\ProcessorFactory;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\QueueProcessor;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\QueueTrait;

class Stage2Api extends \SugarApi implements LoggerAwareInterface
{
    use LoggerAwareTrait, ConfigTrait, QueueTrait;

    public $privilegeToken = null;

    /**
     * Stage2Api constructor.
     */
    public function __construct()
    {
        $this->config = $this->getConfig();
        $this->setLogger(new Logger());
        if (class_exists('HintEnrichFieldConfig')) {
            $this->enrichFieldConfig = new HintEnrichFieldConfig();
        }
        $hintManager = Manager::instance();
        $this->issManager = new IssManager($hintManager->issServiceUrl);
        $this->processorFactory = new ProcessorFactory();
        $this->eventQueue = $this->getEventQueue();
    }

    // This function is only called whenever the rest service cache file is deleted.
    // This should return an array of arrays that define how different paths map to different functions
    public function registerApiRest()
    {
        return [
            'readConfig' => [
                'reqType' => 'GET',
                'path' => ['hint', 'config'],
                'pathVars' => [''],
                'method' => 'readConfig',
                'shortHelp' => 'Reads Hint configuration',
                'longHelp' => '',
            ],

            'createConfig' => [
                'reqType' => 'POST',
                'path' => ['hint', 'config'],
                'pathVars' => [''],
                'method' => 'updateConfig',
                'shortHelp' => 'Updates Hint configuration',
                'longHelp' => '',
            ],

            'updateConfig' => [
                'reqType' => 'PUT',
                'path' => ['hint', 'config'],
                'pathVars' => [''],
                'method' => 'updateConfig',
                'shortHelp' => 'Updates Hint configuration',
                'longHelp' => '',
            ],

            'readEnrichFieldConfig' => [
                'reqType' => 'GET',
                'path' => ['hint', 'enrich', 'config'],
                'pathVars' => [''],
                'method' => 'readEnrichFieldConfig',
                'shortHelp' => 'Reads Hint configuration',
                'longHelp' => '',
            ],

            'createEnrichFieldConfig' => [
                'reqType' => 'POST',
                'path' => ['hint', 'enrich', 'config'],
                'pathVars' => [''],
                'method' => 'createEnrichFieldConfig',
                'shortHelp' => 'Posts Hint configuration',
                'longHelp' => '',
            ],

            'updateEnrichFieldConfig' => [
                'reqType' => 'PUT',
                'path' => ['hint','enrich', 'config'],
                'pathVars' => [''],
                'method' => 'updateEnrichFieldConfig',
                'shortHelp' => 'Updates Hint configuration',
                'longHelp' => '',
            ],

            'resync' => [
                'reqType' => 'POST',
                'path' => ['hint', 'insights', 'resync'],
                'pathVars' => [''],
                'method' => 'resync',
                'shortHelp' => 'Triggers instance synchronization',
                'longHelp' => '',
            ],

            'token' => [
                'reqType' => 'POST',
                'path' => ['stage2', 'token'],
                'pathVars' => [''],
                'method' => 'createToken',
                'shortHelp' => 'Generates a new Stage2 access token for the user',
                'longHelp' => '',
            ],

            'params' => [
                'reqType' => 'GET',
                'path' => ['stage2', 'params'],
                'pathVars' => [''],
                'method' => 'getParams',
                'shortHelp' => 'Returns different Stage2 information particular for the user',
                'longHelp' => '',
            ],

            'notificationsServiceToken' => [
                'reqType' => 'POST',
                'path' => ['stage2', 'notificationsServiceToken'],
                'pathVars' => [''],
                'method' => 'createNotificationsServiceToken',
                'shortHelp' => 'Generates a new notifications service access token for the user',
                'longHelp' => '',
            ],
            'uninstallHint' => [
                'reqType' => 'POST',
                'path' => ['hint', 'uninstall'],
                'pathVars' => [''],
                'method' => 'uninstallHint',
                'shortHelp' => 'Uninstalls Hint',
                'longHelp' => '',
            ],
            'updateConfigNotificationsHint' => [
                'reqType' => 'PUT',
                'path' => ['hint', 'config', 'notifications'],
                'pathVars' => [''],
                'method' => 'updateConfigNotificationsHint',
                'shortHelp' => 'Enables/Disables notifications in the Hint MLP',
                'longHelp' => '',
            ],
            'getConfigNotificationsHint' => [
                'reqType' => 'GET',
                'path' => ['get', 'hint', 'configNotificationObject'],
                'pathVars' => [''],
                'method' => 'getConfigNotificationsHint',
                'shortHelp' => 'Retrieves the current notifications enabled/disabled value to display in the Hint Configuration panel',
                'longHelp' => '',
            ],
            'getHintLicenseType' => [
                'reqType' => 'GET',
                'path' => ['hint', 'license', 'check'],
                'pathVars' => [''],
                'method' => 'getHintLicenseType',
                'shortHelp' => 'Checks if the user has Hint license enabled',
                'longHelp' => '',
            ],

            'updateDataEnrichConfigFields' => [
                'reqType' => 'POST',
                'path' => ['hint','data', 'enrich', 'fields'],
                'pathVars' => [''],
                'method' => 'updateDataEnrichmentFieldsConfig',
                'shortHelp' => 'Updates Data Enrichment Hint configuration',
                'longHelp' => '',
            ],
        ];
    }

    /**
     * @param \ServiceBase $api
     * @param array $args
     * @return array
     * @throws \SugarApiExceptionNotAuthorized
     * @throws \SugarApiExceptionError
     */
    public function readConfig(\ServiceBase $api, array $args): array
    {
        ConfigurationManager::ensureAdminUser();

        try {
            $loggerConfig = $this->config->getLoggerConfig();
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionError($e->getMessage());
        }

        return [
            'logger' => $loggerConfig,
        ];
    }

    /**
     * @param \ServiceBase $api
     * @param array $args
     * @return array
     * @throws \SugarApiExceptionError
     */
    public function getHintLicenseType(\ServiceBase $api, array $args): array
    {
        try {
            $hintLicenseCheck = ConfigurationManager::isHintUser();
            return [
                'isHintUser' => $hintLicenseCheck,
            ];
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionError($e->getMessage());
        }
    }

    /**
     * @param \ServiceBase $api
     * @param array $args
     * @return array
     * @throws \SugarApiExceptionInvalidParameter
     * @throws \SugarApiExceptionNotAuthorized
     */
    public function updateConfig(\ServiceBase $api, array $args): array
    {
        ConfigurationManager::ensureAdminUser();

        try {
            $loggerConfig = $this->config->setLoggerConfig($args['logger'] ?? []);
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionInvalidParameter($e->getMessage());
        }

        return [
            'logger' => $loggerConfig,
        ];
    }

    public function updateHintConfigEntriesOnUninstall() : void
    {
        // sets the geo config to null.
        ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_GEO, null);
        ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION, null);
        ConfigurationManager::updateHintFieldViewDefsConfigEntries(HintConstants::DEFAULT_HINT_ACCOUNTS_FIELD_CONFIG, 'Accounts');
        ConfigurationManager::updateHintFieldViewDefsConfigEntries(HintConstants::DEFAULT_HINT_CONTACTS_FIELD_CONFIG, 'Leads');
        ConfigurationManager::updateHintFieldViewDefsConfigEntries(HintConstants::DEFAULT_HINT_LEADS_FIELD_CONFIG, 'Contacts');
    }

    public function uninstallHint(\ServiceBase $api, array $args) : void
    {
        ConfigurationManager::ensureAdminUser();
        $removeTables = $args['removeTables'];

        // sets the notification config to null.
        ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION, null);

        // We are removing the tables in the hard uninstall which will remove the entry from config table as well.
        if ($removeTables) {
            // Mark the HintHardUninstallFlag as true to indicate to the downstream pre_uninstall
            // hook that we should execute hard uninstall related logic. Also mark the HintSeats flag
            // as null so that the job can run again on a fresh install.
            ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_HARD_UNINSTALL, true);

            // Queue unlicense events and flush the queue so that they are immediately processed
            // before the hint tables are removed from a hard uninstall.
            $manager = Manager::instance();
            if ($manager->perUserLicensing()) {
                $this->queueUnlicenseEvents(true);
            }

            $this->updateHintConfigEntriesOnUninstall();
            $deleteCommand = $this->processorFactory->getProcessor(Commands::ISS_DELETE_INSTANCE)([]);

            // In the event of a communication error with the ISS, sleep for 5 seconds and then
            // retry sending commands to the ISS. After a third unsuccessful attempt, log to
            // the Sugar log indicating that notification data could not be removed.
            $issRetries = 4;
            for ($i = 1; $i <= $issRetries; $i++) {
                try {
                    $this->issManager->sendCommands([$deleteCommand]);
                    break;
                } catch (\Throwable $e) {
                    if ($i < $issRetries) {
                        $GLOBALS['log']->info(sprintf("Failed to delete Hint notification data. Will retry %d more time(s)", $issRetries - $i));
                        sleep(5);
                        continue;
                    }
                    $GLOBALS['log']->fatal("Hint was unable to remove all relevant notification data due not being able to reach its backend services.");
                }
            }
        }

        $newPackageManagerExists = class_exists(\Sugarcrm\Sugarcrm\PackageManager\PackageManager::class);
        if ($newPackageManagerExists) {
            $pkgMgr = new \Sugarcrm\Sugarcrm\PackageManager\PackageManager();
            $hintInstalledUpgradeHistory = ConfigurationManager::getHintUpgradeHistory();
            if ($hintInstalledUpgradeHistory) {
                $upgradeHistory = BeanFactory::retrieveBean('UpgradeHistory', $hintInstalledUpgradeHistory['id']);
                $pkgMgr->uninstallPackage($upgradeHistory, $removeTables);
            } else {
                $logger = new Logger();
                $logger->error('Cannot find Hint installed upgrade history');
                throw new \Exception('Hint upgrade history not found');
            }
        } else {
            require_once 'ModuleInstall/PackageManager/PackageManager.php';
            $pkgMgr = new PackageManager();
            $GLOBALS['mi_remove_tables'] = $removeTables;
            $packageTempDir = $pkgMgr->upload_dir . DIRECTORY_SEPARATOR . 'upgrades' . DIRECTORY_SEPARATOR . 'temp';
            \SugarAutoloader::ensureDir($packageTempDir);
            $pkgMgr->performUninstall('hint-package');
        }
    }

    public function readEnrichFieldConfig(\ServiceBase $api, array $args): array
    {
        try {
            $logger = new Logger();
            if (class_exists('HintEnrichFieldConfig')) {
                $response = $this->enrichFieldConfig->getHintEnrichFieldConfigBean($args);
                return [
                    'response' => $response,
                ];
            } else {
                $logger->error('Class Not found Exception: HintEnrichFieldConfig');
                throw new \Exception('Cannot find Class: HintEnrichFieldConfig');
            }
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionInvalidParameter($e->getMessage());
        }
    }

    public function createEnrichFieldConfig(\ServiceBase $api, array $args): array
    {
        ConfigurationManager::ensureAdminUser();
        try {
            $logger = new Logger();
            if (class_exists('HintEnrichFieldConfig')) {
                $response = $this->enrichFieldConfig->createHintEnrichFieldConfig($args);
                return [
                    'response' => $response,
                ];
            } else {
                $logger->error('Class Not found Exception: HintEnrichFieldConfig');
                throw new \Exception('Cannot find Class: HintEnrichFieldConfig');
            }
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionInvalidParameter($e->getMessage());
        }
    }

    public function updateEnrichFieldConfig(\ServiceBase $api, array $args): array
    {
        ConfigurationManager::ensureAdminUser();
        try {
            $logger = new Logger();
            if (class_exists('HintEnrichFieldConfig')) {
                $response = $this->enrichFieldConfig->updateHintEnrichFieldConfigBeans($args);
                return [
                    'response' => $response,
                ];
            } else {
                $logger->error('Class Not found Exception: HintEnrichFieldConfig');
                throw new \Exception('Cannot find Class: HintEnrichFieldConfig');
            }
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionInvalidParameter($e->getMessage());
        }
    }

    /**
     * @param \ServiceBase $api
     * @param array $args
     * @return array
     * @throws \SugarApiExceptionNotAuthorized
     * @throws \SugarApiException
     */
    public function resync(\ServiceBase $api, array $args): array
    {
        ConfigurationManager::ensureAdminUser();

        try {
            $this->getInitializer()->resync();
        } catch (\Throwable $e) {
            $errorMessage = sprintf("Resync failed: %s", $e->getMessage());
            $GLOBALS['log']->fatal($errorMessage);
            throw new \SugarApiException($errorMessage);
        }

        return [
            'success' => true,
        ];
    }

    public function createToken($api, $args)
    {
        $tokenResponse = Manager::instance()->getNewAccessToken();
        $this->privilegeToken =  $tokenResponse['privilegeToken'];
        // Only the accessToken is sent to the client.
        $clientResponse = ['accessToken' => $tokenResponse['accessToken']];
        // older servers won't send the subscription type, so be check before using
        if (isset($tokenResponse['subscriptionType'])) {
            $clientResponse['subscriptionType'] = $tokenResponse['subscriptionType'];
        }
        return $clientResponse;
    }

    public function getParams($api, $args)
    {
        $manager = Manager::instance();
        return [
            'serviceUrl' => $manager->serviceUrl,
            'pushNotificationKey' => $manager->getVAPIDPublicKey(),
            'instanceId' => $manager->instanceId,
            'sugarVersion' => $manager->sugarVersion,
            'isps' => $manager->getISPs(),
            'analyticsUserId' => $manager->getCurrentUserAnalyticsId(),
            'enrichmentServiceUrl' => $manager->serviceUrl . '/hint/data-enrichment/v1',
            'enrichmentServiceUrlV2' => $manager->serviceUrl . '/hint/data-enrichment/v2',
            'notificationsServiceUrl' =>
                $manager->notificationsServiceUrl . '/hint/notifications-service/v1'
        ];
    }

    public function updateDataEnrichmentFieldsConfig(\ServiceBase $api, array $configToUpdate) : array
    {
        ConfigurationManager::ensureAdminUser();
        $manager = Manager::instance();
        return $manager->updateDataEnrichmentConfigBean($configToUpdate);
    }

    /*
     * Retrieve the notifications enabled/disabled status for the Hint config panel
     */
    public function getConfigNotificationsHint($api, $args)
    {
        $response = ConfigurationManager::getHintConfigEntry(HintConstants::HINT_CONFIG_NOTIFICATION);
        return $response['value'];
    }

    /*
     * Update the notifications enabled/disabled status from whatever was set in the 
     * UI (Hint config panel)
     */
    public function updateConfigNotificationsHint($api, $args): array
    {
        $disableNotifications = $args['disableNotifications'];
        $storedValue = $this->getConfigNotificationsHint(null, null);

        // initially, the notifications status is unset/null. Only continue enabling/disabling
        // when the user explicitly has chosen to explicitly disable notifications, or, is enabling
        // notifications after they were previously explicitly disabled.
        if (($storedValue == null && !$disableNotifications) || ($storedValue == $disableNotifications)) {
            return ['status' => '200'];
        }

        // TODO: notification problems we currently are experiencing may have POSSIBLY
        // been coming from here (more testing needs to be done with a new hint dev package):
        //
        // First of all, the above code that checks the passed disabledNotifications arg
        // against what is actually currently stored in the DB should avoid all unnecessary
        // resyncs that were occurring by simply visiting the hint config admin panel.
        //
        // Secondly, the code below here now simply handles explicit disabling/enabling of
        // notifications. Previously (before the unset/null check at the beginning of this method),
        // the null case was incorrectly being handled here as we were never even grabbing the actual
        // stored notifications status (thus never checking that initial unset/null case).
        if ($disableNotifications) {
            $event = new InstanceDisableNotificationsEvent(['explicitDisable' => $disableNotifications]);
            $this->eventQueue->recordEvent($event);
        } else {
            $event = new InstanceEnableNotificationsEvent();
            $this->eventQueue->recordEvent($event);
            try {
                $this->getInitializer()->resync();
            } catch (\Throwable $e) {
                throw new \SugarApiException($e->getMessage());
            }
        }

        ConfigurationManager::updateHintConfigEntry(
            HintConstants::HINT_CONFIG_NOTIFICATION,
            $disableNotifications
        );

        return ['status' => '200'];
    }

    /**
     * Creates a new authentication token for the notifications service.
     *
     * Returns an array (hashmap) of the form:
     * [
     *      accessToken => randomTokenString
     *      ttlMs => time to live of the token in millseconds (just # ms, not a date!)
     *      maxReqPerSec => max permitted requests per second
     * ]
     *
     * Can throw various exceptions if the notifications service cannot be contacted or if it
     * the license key is not present or is invalid
     */
    public function createNotificationsServiceToken($api, $args)
    {
        $manager = Manager::instance();
        return $manager->createNotificationsServiceAccessToken();
    }

    public function registerInstanceToCompanyIdentityEndpoint()
    {
        $manager = Manager::instance();
        return $manager->registerCompanyIDToDE();
    }

    public function registerConfigToEnrichBeanEndpoint($privilegeToken, $configDataBeanData)
    {
        $manager = Manager::instance();
        return $manager->registerToConfigBean($privilegeToken, $configDataBeanData);
    }

    /**
     * Queues UserUnlicensedEvents on 10.3+ Sugar instances to unlicensing users where
     * per-user licensing is supported.
     *
     * @param $immediateFlush: when true, immediately process the queue to send relevant accountset
     * and target data prior to removal of hint tables
     */
    public function queueUnlicenseEvents($immediateFlush = false)
    {
        // On uninstall for instances that support per-user licensing: send UserUnlicensedEvents for all users that have hint licenses.
        $users = \BeanFactory::retrieveBean('Users');
        $query = new \SugarQuery();
        $query->select(['*']);
        $query
            ->from($users)
            ->where()
            ->equals('status', 'Active');
        $rows = $query->execute();

        // Unlicense users who currently have a hint license. On soft uninstalls,
        // this will mark the 'previously_licensed_c' column for those who
        // previously had a license, allowing for easy revival of their respective
        // targets and accountsets. For hard uninstalls
        foreach ($rows as $row) {
            $isLicensed = strpos($row['license_type'], '"HINT"');
            if ($isLicensed) {
                // We only immediately flush the queue on hard uninstalls, so we can use its flag
                // to determine whether or not we should delete all notification data.
                // This is important because we ONLY delete notification metadata from
                // both the MLP and ISS on hard uninstalls.
                $this->eventQueue->recordEvent(new UserUnlicensedEvent([
                    'userId' => $row['id'],
                    'hadLicense' => true,
                    'deleteData' => $immediateFlush,
                ]));
            }
        }

        if ($immediateFlush) {
            $queueProcessor = $this->getQueueProcessor();
            for ($i = 0; $i < 5; $i++) {
                $queueProcessor->processQueue();
                // If no events are left, simply return. Otherwise, sleep for 10 seconds
                // and try again in a moment.
                if (!$this->eventQueue->getQueuedEvents()) {
                    return;
                }
                sleep(10);
            }
        }
    }

    /**
     * Get Initializer
     * @return Initializer
     */
    protected function getInitializer(): Initializer
    {
        return new Initializer();
    }

    /**
     * Get queue processor
     * @return QueueProcessor
     */
    protected function getQueueProcessor(): QueueProcessor
    {
        return new QueueProcessor();
    }
}
