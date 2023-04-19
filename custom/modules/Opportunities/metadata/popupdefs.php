<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'account_name' => 'accounts.name',
  'opportunity_type' => 'opportunities.opportunity_type',
  'sales_stage' => 'opportunities.sales_stage',
  'assigned_user_id' => 'opportunities.assigned_user_id',
  'tag' => 'opportunities.tag',
  'created_by_name' => 'opportunities.created_by_name',
  'date_closed' => 'opportunities.date_closed',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
  2 => 'opportunity_type',
  3 => 'sales_stage',
  4 => 'assigned_user_id',
  5 => 'tag',
  6 => 'created_by_name',
  7 => 'date_closed',
),
    'searchdefs' => array (
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10',
    'name' => 'created_by_name',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
    'width' => '10',
  ),
  'opportunity_type' => 
  array (
    'name' => 'opportunity_type',
    'width' => '10',
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'width' => '10',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10',
  ),
  'date_closed' => 
  array (
    'type' => 'date',
    'related_fields' => 
    array (
      0 => 'date_closed_timestamp',
    ),
    'label' => 'LBL_DATE_CLOSED',
    'width' => 10,
    'name' => 'date_closed',
  ),
  'tag' => 
  array (
    'type' => 'tag',
    'link' => 'tag_link',
    'studio' => 
    array (
      'portal' => false,
      'base' => 
      array (
        'popuplist' => false,
      ),
      'mobile' => 
      array (
        'wirelesseditview' => true,
        'wirelessdetailview' => true,
      ),
    ),
    'sortable' => false,
    'label' => 'LBL_TAGS',
    'width' => '10',
    'name' => 'tag',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'name' => 'account_name',
  ),
  'SALES_STAGE' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
    'name' => 'sales_stage',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_LIKELY',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
    'name' => 'amount',
  ),
  'STRAT_PROD_LINE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STRAT_PROD_LINE',
    'width' => 10,
    'name' => 'strat_prod_line_c',
  ),
  'DATE_CLOSED' => 
  array (
    'width' => 10,
    'label' => 'LBL_DATE_CLOSED',
    'default' => true,
    'name' => 'date_closed',
  ),
  'SERVICE_START_DATE' => 
  array (
    'type' => 'date',
    'related_fields' => 
    array (
    ),
    'studio' => 
    array (
      'calculated' => false,
    ),
    'label' => 'LBL_SERVICE_START_DATE',
    'width' => 10,
    'default' => true,
  ),
  'SALES_STATUS' => 
  array (
    'type' => 'enum',
    'readonly' => true,
    'studio' => true,
    'default' => true,
    'label' => 'LBL_SALES_STATUS',
    'width' => 10,
  ),
  'ACCOUNTS_OPPORTUNITIES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_OPPORTUNITIES_1ACCOUNTS_IDA',
    'width' => 10,
    'default' => true,
  ),
  'CONTACTS_OPPORTUNITIES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
    'width' => 10,
    'default' => true,
  ),
),
);
