<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/LogicHooks/denorm_field_hook.php

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
<?php
// Merged from modules/Contacts/Ext/LogicHooks/RelationshipHook.php

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

$hook_array['after_relationship_delete'][] = [
    1,
    'afterRelationshipDelete',
    'modules/Contacts/ContactsHooks.php',
    'ContactsHooks',
    'afterRelationshipDelete',
];

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/LogicHooks/data_saving_to_cases.php


    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'Save Data to Cases from Contact',

        //The PHP file where your class is located.
        'custom/modules/Contacts/ContactFromToCase.php',

        //The class the method is in.
        'ContactFromToCase',

        //The method to call.
        'data_saving_to_cases'
    );
?>
