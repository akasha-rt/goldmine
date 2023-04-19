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
$relationships = array (
  'cc_coupon_codes_contacts' => 
  array (
    'rhs_label' => 'Contacts',
    'lhs_label' => 'Coupon Codes',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'CC_Coupon_Codes',
    'rhs_module' => 'Contacts',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'cc_coupon_codes_contacts',
  ),
  'cc_coupon_codes_leads' => 
  array (
    'rhs_label' => 'Leads',
    'lhs_label' => 'Coupon Codes',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'CC_Coupon_Codes',
    'rhs_module' => 'Leads',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'cc_coupon_codes_leads',
  ),
  'cc_coupon_codes_opportunities' => 
  array (
    'rhs_label' => 'Opportunities',
    'lhs_label' => 'Coupon Codes',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'CC_Coupon_Codes',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'cc_coupon_codes_opportunities',
  ),
);