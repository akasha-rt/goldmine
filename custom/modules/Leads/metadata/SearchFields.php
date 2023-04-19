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
$searchFields['Leads'] = array (
  'first_name' => 
  array (
    'query_type' => 'default',
  ),
  'last_name' => 
  array (
    'query_type' => 'default',
  ),
  'search_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
    ),
    'force_unifiedsearch' => true,
  ),
  'account_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'leads.account_name',
    ),
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'do_not_call' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'input_type' => 'checkbox',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_mobile',
      1 => 'phone_work',
      2 => 'phone_other',
      3 => 'phone_fax',
      4 => 'phone_home',
    ),
  ),
  'email' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'assistant' => 
  array (
    'query_type' => 'default',
  ),
  'website' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_street',
      1 => 'alt_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_city',
      1 => 'alt_address_city',
    ),
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_state',
      1 => 'alt_address_state',
    ),
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_postalcode',
      1 => 'alt_address_postalcode',
    ),
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_country',
      1 => 'alt_address_country',
    ),
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'status' => 
  array (
    'query_type' => 'default',
    'options' => 'lead_status_dom',
    'template_var' => 'STATUS_OPTIONS',
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'Leads\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'open_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'status',
    ),
    'operator' => 'not in',
    'closed_values' => 
    array (
      0 => 'Dead',
      1 => 'Recycled',
      2 => 'Converted',
    ),
    'type' => 'bool',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'primary_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'range_dp_consent_last_updated' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_dp_consent_last_updated' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_dp_consent_last_updated' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'mkto_lead_score' => 
  array (
    'query_type' => 'default',
  ),
  'range_market_score' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_market_score' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_market_score' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'primary_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'phone_work' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'assistant_phone' => 
  array (
    'query_type' => 'default',
  ),
  'business_center_name' => 
  array (
    'query_type' => 'default',
  ),
  'birthdate' => 
  array (
    'query_type' => 'default',
  ),
  'dp_business_purpose' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_description' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_facebook_handle' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_size' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_twitter_handle' => 
  array (
    'query_type' => 'default',
  ),
  'dp_consent_last_updated' => 
  array (
    'query_type' => 'default',
  ),
  'converted_opp_name' => 
  array (
    'query_type' => 'default',
  ),
  'dnb_principal_id' => 
  array (
    'query_type' => 'default',
  ),
  'department' => 
  array (
    'query_type' => 'default',
  ),
  'accounts_leads_1_name' => 
  array (
    'query_type' => 'default',
  ),
  'hint_education' => 
  array (
    'query_type' => 'default',
  ),
  'hint_education_2' => 
  array (
    'query_type' => 'default',
  ),
  'facebook' => 
  array (
    'query_type' => 'default',
  ),
  'hint_facebook' => 
  array (
    'query_type' => 'default',
  ),
  'phone_fax' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_fiscal_year_end' => 
  array (
    'query_type' => 'default',
  ),
  'googleplus' => 
  array (
    'query_type' => 'default',
  ),
  'phone_home' => 
  array (
    'query_type' => 'default',
  ),
  'preferred_language' => 
  array (
    'query_type' => 'default',
  ),
  'title' => 
  array (
    'query_type' => 'default',
  ),
  'twitter' => 
  array (
    'query_type' => 'default',
  ),
  'phone_mobile' => 
  array (
    'query_type' => 'default',
  ),
  'phone_other' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'refered_by' => 
  array (
    'query_type' => 'default',
  ),
  'opportunity_amount' => 
  array (
    'query_type' => 'default',
  ),
  'portal_name' => 
  array (
    'query_type' => 'default',
  ),
  'portal_app' => 
  array (
    'query_type' => 'default',
  ),
  'hint_job_2' => 
  array (
    'query_type' => 'default',
  ),
  'opportunity_name' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_industry' => 
  array (
    'query_type' => 'default',
  ),
  'hint_twitter' => 
  array (
    'query_type' => 'default',
  ),
  'hint_industry_tags' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_founded_year' => 
  array (
    'query_type' => 'default',
  ),
  'hint_phone_1' => 
  array (
    'query_type' => 'default',
  ),
  'hint_phone_2' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_naics_code_lbl' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_sic_code_label' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_annual_revenue' => 
  array (
    'query_type' => 'default',
  ),
  'hint_account_location' => 
  array (
    'query_type' => 'default',
  ),
);