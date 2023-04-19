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

$dictionary['CC_Coupon_Codes'] = array(
    'table' => 'cc_coupon_codes',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'expiration' => 
  array (
    'required' => false,
    'readonly' => false,
    'name' => 'expiration',
    'vname' => 'LBL_EXPIRATION',
    'type' => 'date',
    'massupdate' => true,
    'hidemassupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'calculated' => false,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => true,
    'full_text_search' => 
    array (
      'enabled' => true,
      'boost' => '1.55',
      'searchable' => true,
    ),
    'required' => true,
    'importable' => 'required',
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'selected',
    'duplicate_on_record_copy' => 'always',
    'readonly' => false,
    'massupdate' => false,
    'hidemassupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '3',
    'audited' => false,
    'reportable' => true,
    'pii' => false,
    'default' => '',
    'calculated' => false,
    'size' => '20',
  ),
  'coupon_code' => 
  array (
    'required' => false,
    'readonly' => false,
    'name' => 'coupon_code',
    'vname' => 'LBL_COUPON_CODE',
    'type' => 'varchar',
    'massupdate' => false,
    'hidemassupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '10',
    'size' => '20',
  ),
  'status' => 
  array (
    'required' => false,
    'readonly' => false,
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'massupdate' => true,
    'hidemassupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => 'Active',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'coupon_status_list',
    'dependency' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('CC_Coupon_Codes','CC_Coupon_Codes', array('basic','team_security','assignable','taggable'));