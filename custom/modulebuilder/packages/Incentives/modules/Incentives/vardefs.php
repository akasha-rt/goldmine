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
$vardefs = array (
  'fields' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '200',
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
    'start_date' => 
    array (
      'required' => true,
      'readonly' => false,
      'name' => 'start_date',
      'vname' => 'LBL_START_DATE',
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
    'end_date' => 
    array (
      'required' => true,
      'readonly' => false,
      'name' => 'end_date',
      'vname' => 'LBL_END_DATE',
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
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'full_text_search' => 
      array (
        'enabled' => true,
        'boost' => '0.5',
        'searchable' => true,
      ),
      'rows' => '6',
      'cols' => '80',
      'duplicate_on_record_copy' => 'always',
      'required' => false,
      'readonly' => false,
      'massupdate' => false,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => 'Incentive Overview',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => true,
      'merge_filter' => 'disabled',
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'size' => '20',
      'studio' => 'visible',
    ),
    'notes' => 
    array (
      'required' => false,
      'readonly' => false,
      'name' => 'notes',
      'vname' => 'LBL_NOTES',
      'type' => 'text',
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
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
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
    'coupon' => 
    array (
      'required' => false,
      'readonly' => false,
      'name' => 'coupon',
      'vname' => 'LBL_COUPON',
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
      'default' => 'Yes',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'yes_no_c_list',
      'dependency' => false,
    ),
  ),
  'relationships' => 
  array (
  ),
);