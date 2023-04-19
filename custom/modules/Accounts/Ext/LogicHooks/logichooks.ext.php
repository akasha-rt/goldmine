<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/Accounts/Ext/LogicHooks/hint_hook.php

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
$hook_array['after_delete'][] = [
    1,
    'Hook description',
    null,
    'Sugarcrm\\Sugarcrm\\modules\\Accounts\\HintAccountsHook',
    'afterDelete',
];

$hook_array['after_save'][] = [
    1,
    'Hook description',
    null,
    'Sugarcrm\\Sugarcrm\\modules\\Accounts\\HintAccountsHook',
    'afterSave',
];

$hook_array['after_relationship_add'][] = [
    1,
    'Hook description',
    null,
    'Sugarcrm\\Sugarcrm\\modules\\Accounts\\HintAccountsHook',
    'afterRelationshipAdd',
];

$hook_array['after_relationship_delete'][] = [
    1,
    'Hook description',
    null,
    'Sugarcrm\\Sugarcrm\\modules\\Accounts\\HintAccountsHook',
    'afterRelationshipDelete',
];

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/LogicHooks/denorm_field_hook.php

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

// Relate Field Denormalization hook

$hook_array['before_save'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleBeforeUpdate',
];

$hook_array['after_save'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleAfterUpdate',
];

$hook_array['before_relationship_delete'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleDeleteRelationship',
];

$hook_array['after_relationship_add'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleAddRelationship',
];

?>