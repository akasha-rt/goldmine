<?php
// created: 2023-04-07 14:53:52
$searchFields['Opportunities'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'account_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'accounts.name',
    ),
  ),
  'amount' => 
  array (
    'query_type' => 'default',
  ),
  'next_step' => 
  array (
    'query_type' => 'default',
  ),
  'probability' => 
  array (
    'query_type' => 'default',
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'opportunity_type' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'opportunity_type_dom',
    'template_var' => 'TYPE_OPTIONS',
  ),
  'sales_stage' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'sales_stage_dom',
    'template_var' => 'SALES_STAGE_OPTIONS',
    'options_add_blank' => true,
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
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'Opportunities\'
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
      0 => 'sales_stage',
    ),
    'operator' => 'not in',
    'closed_values' => 
    array (
      0 => 'Closed Won',
      1 => 'Closed Lost',
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
  'range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_best_case' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_best_case' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_best_case' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_worst_case' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_worst_case' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_worst_case' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'best_case' => 
  array (
    'query_type' => 'default',
  ),
  'worst_case' => 
  array (
    'query_type' => 'default',
  ),
  'date_closed' => 
  array (
    'query_type' => 'default',
  ),
  'commit_stage' => 
  array (
    'query_type' => 'default',
  ),
  'sales_status' => 
  array (
    'query_type' => 'default',
  ),
  'service_start_date' => 
  array (
    'query_type' => 'default',
  ),
  'total_revenue_line_items' => 
  array (
    'query_type' => 'default',
  ),
  'closed_revenue_line_items' => 
  array (
    'query_type' => 'default',
  ),
  'pc_productcategoryclone_opportunities_1_name' => 
  array (
    'query_type' => 'default',
  ),
  'closed_won_revenue_line_items' => 
  array (
    'query_type' => 'default',
  ),
  'ai_opp_conv_score_enum' => 
  array (
    'query_type' => 'default',
  ),
  'range_forecasted_likely' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_forecasted_likely' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_forecasted_likely' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_lost' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_lost' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_lost' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
);