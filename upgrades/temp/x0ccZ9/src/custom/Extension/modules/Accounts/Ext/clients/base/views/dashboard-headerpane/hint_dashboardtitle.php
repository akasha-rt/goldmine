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
use \Sugarcrm\Sugarcrm\custom\Hint\Helper\ViewdefsParser as ViewdefsParser;

$module = 'Accounts';
$panels = $viewdefs[$module]['base']['view']['dashboard-headerpane']['panels'] ?? [];
$shouldShowHintTab = ConfigurationManager::isHintUser();
if ($shouldShowHintTab) {
    $panels = ViewdefsParser::updateHeaderPanelNameType(
        $panels,
        'hint-dashboardtitle'
    );
}
$viewdefs[$module]['base']['view']['dashboard-headerpane']['panels'] = $panels;
