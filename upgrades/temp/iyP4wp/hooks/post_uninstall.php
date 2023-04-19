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

use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use Sugarcrm\Sugarcrm\custom\Hint\HintConstants;

printf('Hint post_uninstall hook: found sugar version %s<br>', $GLOBALS['sugar_version']);
ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_HARD_UNINSTALL, null);
