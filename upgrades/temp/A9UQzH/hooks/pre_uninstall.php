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
use Sugarcrm\Sugarcrm\custom\Hint\PackageInstaller;

printf('Hint pre_uninstall hook: found sugar version %s<br>', $GLOBALS['sugar_version']);

$packageInstaller = (new class extends PackageInstaller
{
    /**
     * pre_uninstall hook runner
     * @param string $hook
     */
    public function run(string $hook): void
    {
        $this->deleteSchedulers($hook);
        $this->deleteLogger($hook);
    }
})->run('pre_uninstall');
