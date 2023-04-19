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
namespace Sugarcrm\Sugarcrm\custom\Hint;

use Sugarcrm\Sugarcrm\custom\Hint\Config\ConfigTrait;
use Sugarcrm\Sugarcrm\custom\Hint\Job\InitJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\NewsJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\UserInitJob;
use Sugarcrm\Sugarcrm\custom\Hint\Job\HintSeatsJob;

abstract class PackageInstaller
{
    use ConfigTrait;

    /**
     * PackageInstaller constructor.
     */
    public function __construct()
    {
        $this->config = $this->getConfig();
        $this->systemInfo = \SugarSystemInfo::getInstance();
    }

    /**
     * Hook runner
     *
     * This method should be used to pick the exact helpers we need
     * and if required override and add some custom ones. The class
     * itself is supposed to be used in installer hooks. This way
     * we bypass the issue when old package (on uninstall) loads
     * old version of this class and new code is not executed (on
     * upgrade).
     *
     * @param string $hook
     */
    public abstract function run(string $hook): void;

    /**
     * Adds default logger configuration
     * @param string $hook
     */
    protected function addLogger(string $hook): void
    {
        $sugarLogLevel = $this->config->getValue('logger.level', 'fatal');
        $loggerConfig = $this->config->getLoggerConfig();

        $this->log($hook, sprintf('setting Hint log level to "%s" ("%s")', $loggerConfig['level'], $sugarLogLevel));

        // config_override.php must be blacklisted in opcache config to make it work
        $this->config->setLoggerConfig();
    }

    /**
     * Deletes logger configuration
     * @param string $hook
     */
    protected function deleteLogger(string $hook): void
    {
        $this->log($hook, 'removing hint logger configuration ...');

        $this->config->unsetLoggerConfig();
    }

    /**
     * Creates scheduler
     * @param string $name
     * @param string $job
     * @param string $status
     * @return \Scheduler
     */
    protected function createScheduler(string $name, string $job, string $status = 'Active'): \Scheduler
    {
        $scheduler = \BeanFactory::newBean('Schedulers');
        $scheduler->name = $name;
        $scheduler->job = $job;
        $scheduler->date_time_start = create_date(2015, 1, 1) . ' ' . create_time(0, 0, 1);
        $scheduler->date_time_end = create_date(2030, 12, 31) . ' ' . create_time(23, 59, 59);
        $scheduler->job_interval = '*::*::*::*::*';
        $scheduler->status = $status;
        $scheduler->catch_up = false;
        $scheduler->save();

        return $scheduler;
    }

    /**
     * Logs installer messages
     * @param string $hook
     * @param string $message
     */
    protected function log(string $hook, string $message = ''): void
    {
        printf('Hint %s hook: %s<br>', $hook, $message);
    }

    /**
     * Repairs Hint metadata tables
     * @param string $hook
     */
    protected function repairMetadataTables(string $hook)
    {
        $this->log($hook, 'repairing hint metadata tables ...');

        if (\SugarAutoLoader::fileExists('custom/metadata/hint-packageMetaData.php')) {

            $db = \DBManagerFactory::getInstance();
            $indices = $db->get_schema_indices();

            // load the latest version of hint dictionary
            include 'custom/metadata/hint-packageMetaData.php';

            foreach ($dictionary as $meta) {
                $tableName = $meta['table'];
                $fielddefs = $meta['fields'];
                $definedIndices = $meta['indices'] ?? [];
                $deployedIndices = $indices[$tableName] ?? [];
                $engine = $meta['engine'] ?? null;

                // backup db manager option
                $skipIndexRebuild = $db->getOption('skip_index_rebuild');
                try {
                    $db->setOption('skip_index_rebuild', true);

                    // repair table
                    $this->log($hook, sprintf('repairing table "%s"', $tableName));
                    $statement = $db->repairTableParams($tableName, $fielddefs, $definedIndices, true, $engine);
                    if ($statement) {
                        $this->log($hook, $statement);
                    }

                    // repair (alter) indexes
                    if ($db->tableExists($tableName)) {
                        $statement = $db->alterTableIndices($tableName, $fielddefs, $definedIndices, $deployedIndices, true);
                        if ($statement) {
                            $this->log($hook, $statement);
                        }
                    }
                } catch (\Throwable $e) {
                    $this->log($hook, 'error: ' . $e->getMessage());
                } finally {
                    // restore db manager option
                    $db->setOption('skip_index_rebuild', $skipIndexRebuild);
                }
            }
        }
    }

    /**
     * Updates custom js version to force minified js reload
     * @param string $hook
     */
    protected function increaseJsVersion(string $hook)
    {
        $version = (int)$this->config->getValue('js_custom_version', 1);
        $newVersion = $version + 1;
        $this->config->setValue('js_custom_version', $newVersion);
        $this->log($hook, sprintf('updated "js_custom_version" from %d to %d', $version, $newVersion));
    }
}
