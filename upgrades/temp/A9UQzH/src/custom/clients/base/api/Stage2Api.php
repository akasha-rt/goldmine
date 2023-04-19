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

use Sugarcrm\Sugarcrm\custom\Hint\Config\ConfigTrait;
use Sugarcrm\Sugarcrm\custom\Hint\Initializer;
use Sugarcrm\Sugarcrm\custom\Hint\Logger\Logger;
use Sugarcrm\Sugarcrm\custom\Hint\Manager;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\QueueProcessor;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

class Stage2Api extends \SugarApi implements LoggerAwareInterface
{
    use LoggerAwareTrait, ConfigTrait;


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
        $this->ensureAdminUser();

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
     * @throws \SugarApiExceptionInvalidParameter
     * @throws \SugarApiExceptionNotAuthorized
     */
    public function updateConfig(\ServiceBase $api, array $args): array
    {
        $this->ensureAdminUser();

        try {
            $loggerConfig = $this->config->setLoggerConfig($args['logger'] ?? []);
        } catch (\Throwable $e) {
            throw new \SugarApiExceptionInvalidParameter($e->getMessage());
        }

        return [
            'logger' => $loggerConfig,
        ];
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
        $this->ensureAdminUser();
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
        $this->ensureAdminUser();
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
        $this->ensureAdminUser();

        try {
            $this->getInitializer()->resync();
        } catch (\Throwable $e) {
            throw new \SugarApiException($e->getMessage());
        }

        return [
            'success' => true,
        ];
    }

    public function createToken($api, $args)
    {
        $tokenResponse = Manager::instance()->getNewAccessToken();

        $clientResponse = array('accessToken' => $tokenResponse['accessToken']);
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
        return $manager->registerToCompanyID();
    }

    public function registerConfigToEnrichBeanEndpoint($accessToken, $configDataBeanData)
    {
        $manager = Manager::instance();
        return $manager->registerToConfigBean($accessToken, $configDataBeanData);
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

    /**
     * Ensure current user has admin permissions
     * @throws \SugarApiExceptionNotAuthorized
     */
    private function ensureAdminUser(): void
    {
        global $current_user, $app_strings;

        if (!$current_user->isAdmin()) {
            throw new \SugarApiExceptionNotAuthorized($app_strings['EXCEPTION_NOT_AUTHORIZED']);
        }
    }
}
