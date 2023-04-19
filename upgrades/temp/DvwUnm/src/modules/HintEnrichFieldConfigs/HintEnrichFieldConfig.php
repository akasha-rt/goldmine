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

use Sugarcrm\Sugarcrm\custom\Hint\Helper\ViewdefsParser;
use Sugarcrm\Sugarcrm\custom\Hint\Logger\Logger as HintLogger;
use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

class HintEnrichFieldConfig extends \Basic implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    const MODULE_NAME = 'HintEnrichFieldConfigs';

    public $id;
    public $config_data;
    public $created;
    public $synced;
    public $name;
    public $description;
    public $date_entered;
    public $date_modified;
    public $deleted;
    public $assigned_user_id;

    public $module_dir = self::MODULE_NAME;
    public $module_name = self::MODULE_NAME;
    public $table_name = 'hint_enrich_field_config';
    public $object_name = 'HintEnrichFieldConfig';

    /**
     * HintEnrichFieldConfig constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setLogger(new HintLogger());
    }

    static function createHintEnrichFieldConfig($argument)
    {
        ConfigurationManager::ensureAdminUser();
        $bean = BeanFactory::newBean(self::MODULE_NAME);
        $hintEnrichConfigFieldsTableExists = self::isEnrichConfigFieldTablesReady();
        $logger = new HintLogger();

        if ($hintEnrichConfigFieldsTableExists) {
            $bean->created = TimeDate::getInstance()->nowDb();
            $bean->config_data = $argument;
            $bean->synced = true;
            return $bean->save();
        } else {
            $logger->info('hint_enrich_field_config table not found');
            return null;
        }
    }

    static function getHintEnrichFieldConfigBean()
    {
        $hintEnrichConfigFieldsBean = BeanFactory::newBean(self::MODULE_NAME);
        $hintEnrichConfigFieldsTableExists = self::isEnrichConfigFieldTablesReady();
        $logger = new HintLogger();

        if ($hintEnrichConfigFieldsTableExists) {
            $hintEnrichConfigFieldsQuery = new SugarQuery();
            $hintEnrichConfigFieldsQuery->select(['*']);
            $hintEnrichConfigFieldsQuery->from($hintEnrichConfigFieldsBean);
            $response = $hintEnrichConfigFieldsQuery->execute();
            // A check to get the one and only entry from the table provided the entry exists.
            $enrichConfigEntries = count($response) >= 1 ? $response[0] : null;
            return $enrichConfigEntries;
        } else {
            $logger->alert('hint_enrich_field_config table not found');
            return null;
        }
    }

    static function syncHintConfigEndpointStatus() {
        $logger = new HintLogger();
        $hintConfigBean = self::getHintEnrichFieldConfigBean();
        $bean = BeanFactory::retrieveBean(self::MODULE_NAME, $hintConfigBean['id']);
        if ($bean) {
            $bean->synced = true;
            return $bean->save();
        } else {
            $logger->alert('Hint: Cannot find record with the given ID.');
            return null;
        }
    }

    static function getSyncHintConfigurationStatus() {
        $hintConfigBean = self::getHintEnrichFieldConfigBean();
        $syncedStatus = ViewdefsParser::hasProp($hintConfigBean, 'synced') ?
            $hintConfigBean['synced'] : $hintConfigBean;
        return $syncedStatus;
    }

    static function isEnrichConfigFieldTablesReady()
    {
        return BeanFactory::getBean(self::MODULE_NAME)->getTableName() !== null;
    }

    static function updateHintEnrichFieldConfigBeans($arguments)
    {
        ConfigurationManager::ensureAdminUser();
        $retrieveBeanId = $arguments['id'];
        $hintEnrichConfigFieldsBean = BeanFactory::retrieveBean(self::MODULE_NAME, $retrieveBeanId);
        $hintEnrichConfigFieldsTableExists = self::isEnrichConfigFieldTablesReady();
        $logger = new HintLogger();

        if ($hintEnrichConfigFieldsTableExists) {
            $hintEnrichConfigFieldsBean->created = TimeDate::getInstance()->nowDb();
            $hintEnrichConfigFieldsBean->config_data = json_encode($arguments['config_data'], true);
            return $hintEnrichConfigFieldsBean->save();
        } else {
            $logger->alert('hint_enrich_field_config table not found');
            return null;
        }
    }
}
