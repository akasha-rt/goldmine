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
      'len' => '15',
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
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => '3',
      'audited' => false,
      'reportable' => true,
      'default' => '',
      'calculated' => false,
      'size' => '20',
    ),
    'state' => 
    array (
      'required' => false,
      'name' => 'state',
      'vname' => 'LBL_STATE',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
    ),
    'metrology_coverage' => 
    array (
      'required' => false,
      'name' => 'metrology_coverage',
      'vname' => 'LBL_METROLOGY_COVERAGE',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '60',
      'size' => '20',
    ),
    'metrology_email' => 
    array (
      'required' => false,
      'name' => 'metrology_email',
      'vname' => 'LBL_METROLOGY_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'precision_measuring_tools' => 
    array (
      'required' => false,
      'name' => 'precision_measuring_tools',
      'vname' => 'LBL_PRECISION_MEASURING_TOOLS',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'precision_measuring_phone' => 
    array (
      'required' => false,
      'name' => 'precision_measuring_phone',
      'vname' => 'LBL_PRECISION_MEASURING_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'metrology_coverage_phone' => 
    array (
      'required' => false,
      'name' => 'metrology_coverage_phone',
      'vname' => 'LBL_METROLOGY_COVERAGE_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'precision_measuring_email' => 
    array (
      'required' => false,
      'name' => 'precision_measuring_email',
      'vname' => 'LBL_PRECISION_MEASURING_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'granite' => 
    array (
      'required' => false,
      'name' => 'granite',
      'vname' => 'LBL_GRANITE',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'granite_phone' => 
    array (
      'required' => false,
      'name' => 'granite_phone',
      'vname' => 'LBL_GRANITE_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'granite_email' => 
    array (
      'required' => false,
      'name' => 'granite_email',
      'vname' => 'LBL_GRANITE_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'precision_ground_stock' => 
    array (
      'required' => false,
      'name' => 'precision_ground_stock',
      'vname' => 'LBL_PRECISION_GROUND_STOCK',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'precision_ground_phone' => 
    array (
      'required' => false,
      'name' => 'precision_ground_phone',
      'vname' => 'LBL_PRECISION_GROUND_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'precision_ground_email' => 
    array (
      'required' => false,
      'name' => 'precision_ground_email',
      'vname' => 'LBL_PRECISION_GROUND_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'force_measurement_systems' => 
    array (
      'required' => false,
      'name' => 'force_measurement_systems',
      'vname' => 'LBL_FORCE_MEASUREMENT_SYSTEMS',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'force_measurement_phone' => 
    array (
      'required' => false,
      'name' => 'force_measurement_phone',
      'vname' => 'LBL_FORCE_MEASUREMENT_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'force_measurement_email' => 
    array (
      'required' => false,
      'name' => 'force_measurement_email',
      'vname' => 'LBL_FORCE_MEASUREMENT_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'regional_manager' => 
    array (
      'required' => false,
      'name' => 'regional_manager',
      'vname' => 'LBL_REGIONAL_MANAGER',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '150',
      'size' => '20',
    ),
    'regional_manager_phone' => 
    array (
      'required' => false,
      'name' => 'regional_manager_phone',
      'vname' => 'LBL_REGIONAL_MANAGER_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '50',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'regional_manager_email' => 
    array (
      'required' => false,
      'name' => 'regional_manager_email',
      'vname' => 'LBL_REGIONAL_MANAGER_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'industrial_area' => 
    array (
      'required' => false,
      'name' => 'industrial_area',
      'vname' => 'LBL_INDUSTRIAL_AREA',
      'type' => 'varchar',
      'massupdate' => false,
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
    'industrial_territory' => 
    array (
      'required' => false,
      'name' => 'industrial_territory',
      'vname' => 'LBL_INDUSTRIAL_TERRITORY',
      'type' => 'varchar',
      'massupdate' => false,
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
    'country' => 
    array (
      'required' => false,
      'name' => 'country',
      'vname' => 'LBL_COUNTRY',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'power_tools' => 
    array (
      'required' => false,
      'name' => 'power_tools',
      'vname' => 'LBL_POWER_TOOLS',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'power_tools_phone' => 
    array (
      'required' => false,
      'name' => 'power_tools_phone',
      'vname' => 'LBL_POWER_TOOLS_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '15',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'power_tools_email' => 
    array (
      'required' => false,
      'name' => 'power_tools_email',
      'vname' => 'LBL_POWER_TOOLS_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'saws' => 
    array (
      'required' => false,
      'name' => 'saws',
      'vname' => 'LBL_SAWS',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'saws_phone' => 
    array (
      'required' => false,
      'name' => 'saws_phone',
      'vname' => 'LBL_SAWS_PHONE',
      'type' => 'phone',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '20',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'saws_email' => 
    array (
      'required' => false,
      'name' => 'saws_email',
      'vname' => 'LBL_SAWS_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'saws_email_check' => 
    array (
      'required' => false,
      'name' => 'saws_email_check',
      'vname' => 'LBL_SAWS_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'force_measurement_email_check' => 
    array (
      'required' => false,
      'name' => 'force_measurement_email_check',
      'vname' => 'LBL_FORCE_MEASUREMENT_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'power_tools_email_check' => 
    array (
      'required' => false,
      'name' => 'power_tools_email_check',
      'vname' => 'LBL_POWER_TOOLS_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'precision_ground_email_check' => 
    array (
      'required' => false,
      'name' => 'precision_ground_email_check',
      'vname' => 'LBL_PRECISION_GROUND_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'pmt_email_chec' => 
    array (
      'required' => false,
      'name' => 'pmt_email_chec',
      'vname' => 'LBL_PMT_EMAIL_CHEC',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'regional_manager_email_check' => 
    array (
      'required' => false,
      'name' => 'regional_manager_email_check',
      'vname' => 'LBL_REGIONAL_MANAGER_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'metrology_email_check' => 
    array (
      'required' => false,
      'name' => 'metrology_email_check',
      'vname' => 'LBL_METROLOGY_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'granite_email_check' => 
    array (
      'required' => false,
      'name' => 'granite_email_check',
      'vname' => 'LBL_GRANITE_EMAIL_CHECK',
      'type' => 'bool',
      'massupdate' => false,
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
      'default' => '1',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
  ),
  'relationships' => 
  array (
  ),
);