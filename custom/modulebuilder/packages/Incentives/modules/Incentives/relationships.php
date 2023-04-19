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
  'in_incentives_cc_coupon_codes' => 
  array (
    'rhs_label' => 'Coupon Codes',
    'lhs_label' => 'Incentives',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'IN_Incentives',
    'rhs_module' => 'CC_Coupon_Codes',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'in_incentives_cc_coupon_codes',
  ),
  'in_incentives_producttemplates' => 
  array (
    'rhs_label' => 'Product Catalog',
    'lhs_label' => 'Incentives',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'IN_Incentives',
    'rhs_module' => 'ProductTemplates',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'in_incentives_producttemplates',
  ),
);