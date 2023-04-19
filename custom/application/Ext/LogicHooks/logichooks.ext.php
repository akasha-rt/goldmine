<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/LogicHooks/SugarMetricHooks.php

/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/



if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_entry_point']) || !is_array($hook_array['after_entry_point'])) {
    $hook_array['after_entry_point'] = array();
}

if (!isset($hook_array['server_round_trip']) || !is_array($hook_array['server_round_trip'])) {
    $hook_array['server_round_trip'] = array();
}

$hook_array['after_entry_point'][] = array(2, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'afterEntryPoint');
$hook_array['server_round_trip'][] = array(3, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'serverRoundTrip');

?>
<?php
// Merged from Ext/LogicHooks/SugarMetricHooks.php

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

$hook_array['after_entry_point'][] = array(1, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'afterEntryPoint');
$hook_array['server_round_trip'][] = array(1, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'serverRoundTrip');

?>
<?php
// Merged from Ext/LogicHooks/activitystream.php

 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

// Activity stream.
$activitystream = array(
    1,
    'activitystream',
    'modules/ActivityStream/Activities/ActivityQueueManager.php',
    'ActivityQueueManager',
    'eventDispatcher',
);
$hook_array['after_save'][] = $activitystream;
$hook_array['after_delete'][] = $activitystream;
$hook_array['after_undelete'][] = $activitystream;
$hook_array['after_relationship_add'][] = $activitystream;
$hook_array['after_relationship_delete'][] = $activitystream;
unset($activitystream);

?>
<?php
// Merged from Ext/LogicHooks/fts.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

// Full text search after_save hook to update/index a bean

$hook_array['after_save'][] = array(
    1,
    'fts',
    null,
    '\\Sugarcrm\\Sugarcrm\\SearchEngine\\HookHandler',
    'indexBean',
);

$hook_array['after_delete'][] = array(
    1,
    'fts',
    null,
    '\\Sugarcrm\\Sugarcrm\\SearchEngine\\HookHandler',
    'indexBean',
);

$hook_array['after_restore'][] = array(
    1,
    'fts',
    null,
    '\\Sugarcrm\\Sugarcrm\\SearchEngine\\HookHandler',
    'indexBean',
);

?>
<?php
// Merged from Ext/LogicHooks/sugarconnect.php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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

// Logic hooks to publish a bean to the Sugar Connect webhook.

$hook_array['after_save'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_delete'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_restore'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_relationship_add'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_relationship_delete'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_relationship_update'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

?>
<?php
// Merged from custom/Extension/application/Ext/LogicHooks/e38_DeDupit_global.php


/**
 * @author 38 Elements DOO
 *
 * 38 Elements DOO ("COMPANY") CONFIDENTIAL
 *
 * Copyright (c) 2020 38 Elements DOO, Belgrade, Serbia - All Rights Reserved
 *
 * NOTICE:  All information contained herein is, and remains the property
 * of COMPANY. The intellectual and technical concepts contained herein are
 * proprietary to COMPANY and may be covered by Serbia and Foreign Patents,
 * patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material is strictly
 * forbidden unless prior written permission is obtained from COMPANY.
 * Access to the source code contained herein is hereby forbidden to anyone except
 * current COMPANY employees, managers or contractors who have executed
 * Confidentiality and Non-disclosure agreements explicitly covering such access.
 *
 * The copyright notice above does not evidence any actual or intended publication
 * or disclosure  of  this source code, which includes information that is
 * confidential and/or proprietary, and is a trade secret, of  COMPANY.
 * ANY REPRODUCTION, MODIFICATION, DISTRIBUTION, PUBLIC  PERFORMANCE,OR PUBLIC
 * DISPLAY OF OR THROUGH USE  OF THIS  SOURCE CODE  WITHOUT  THE EXPRESS WRITTEN
 * CONSENT OF COMPANY IS STRICTLY PROHIBITED, AND IN VIOLATION OF APPLICABLE LAWS
 * AND INTERNATIONAL TREATIES. THE RECEIPT OR POSSESSION OF  THIS SOURCE CODE
 * AND/OR RELATED INFORMATION DOES NOT CONVEY OR IMPLY ANY RIGHTS TO REPRODUCE,
 * DISCLOSE OR DISTRIBUTE ITS CONTENTS, OR TO MANUFACTURE, USE, OR SELL ANYTHING
 * THAT IT  MAY DESCRIBE, IN WHOLE OR IN PART.
 *
 * Please contact 38 Elements DOO for further details at office@38elements.com
 */
 
  $hook_array["\x61\146\164\145\x72\137\144\145\x6c\145\164\x65"][] = array(22, "\x44\x65\154\x65\164\145\x73\x20\x65\x76\145\162\171\164\x68\x69\x6e\147\40\x72\x65\154\141\x74\145\x64\x20\164\x6f\40\104\145\x44\x75\x70\x69\164\54\40\151\x66\40\144\x65\x6c\145\164\145\x64\x20\142\x65\141\x6e\x20\x77\x61\163\40\151\x6e\x20\x44\145\x44\165\160\151\164\x20\x73\x79\163\x74\x65\x6d", "\x6d\157\x64\165\154\x65\x73\57\x45\x33\x38\137\104\x75\160\x6c\151\x63\141\164\x65\x46\151\x6e\x64\x65\x72\120\162\x6f\x63\x65\163\x73\57\x44\145\104\165\x70\151\x74\101\146\x74\x65\x72\x44\145\x6c\x65\x74\145\x2e\160\150\x70", "\x44\x65\x44\165\x70\x69\x74\x41\x66\x74\145\162\x44\x65\x6c\145\x74\145", "\x64\145\154\x65\x74\x65\x52\145\x6c\x61\164\x65\144\104\x65\104\165\160\151\x74\x52\145\x63\x6f\x72\144\x73"); $hook_array["\x61\x66\164\145\x72\x5f\x73\x61\x76\145"][] = array(23, "\104\145\x74\145\x63\164\163\x20\144\x75\160\x6c\151\x63\141\x74\x65\163\40\146\x6f\162\40\x73\141\x76\145\144\x20\142\x65\141\x6e", "\155\157\144\x75\154\145\x73\57\105\63\70\x5f\104\x75\160\154\151\143\x61\164\145\x46\x69\x6e\144\x65\x72\120\x72\x6f\143\145\163\163\x2f\x44\145\104\165\x70\x69\164\x41\146\x74\x65\162\x53\141\166\x65\56\160\150\x70", "\x44\145\104\165\x70\151\164\101\x66\164\145\x72\123\141\x76\145", "\x63\x68\x65\x63\153\x46\157\x72\104\165\160\154\151\x63\x61\164\x65\x73");

?>
<?php
// Merged from custom/Extension/application/Ext/LogicHooks/broadcastMessage.php


$hook_array["before_respond"][] = array(
    -1,
    "Check if a broadcast message is available and set it on the request header",
    "custom/modules/checkBroadcast.php",
    "CheckBroadcast",
    "addBroadcastCookie",
);

?>
<?php
// Merged from Ext/LogicHooks/pmse.php

 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

// Full text search.

$pmseHookClassPath = SugarAutoLoader::requireWithCustom('modules/pmse_Inbox/engine/PMSELogicHook.php');
$pmseHookClassName = SugarAutoLoader::customClass('PMSELogicHook');
$hook_array['after_save'][] = array(
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_save'
);
$hook_array['after_delete'][] = array(
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_delete'
);
$hook_array['after_relationship_add'][] = [
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_relationship',
];
$hook_array['after_relationship_delete'][] = [
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_relationship',
];
//remove unnecessary globals
unset($pmseHookClassPath);
unset($pmseHookClassName);

?>
<?php
// Merged from Ext/LogicHooks/maps.php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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

$hook_array['after_save'][] = [
    1,
    'geocode',
    null,
    '\\Sugarcrm\\Sugarcrm\\Maps\\HookHandler',
    'geocode',
];

?>
