<?php
$dashletData['OpportunitiesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'opportunity_type' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
    'label' => 'LBL_TEAMS',
  ),
  'sales_stage' => 
  array (
    'default' => 
    array (
      0 => 'Prospecting',
      1 => 'Qualification',
      2 => 'Needs Analysis',
      3 => 'Value Proposition',
      4 => 'Id. Decision Makers',
      5 => 'Perception Analysis',
      6 => 'Proposal/Price Quote',
      7 => 'Negotiation/Review',
    ),
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_ASSIGNED_TO',
    'default' => 'Fleck, Timothy',
  ),
);
$dashletData['OpportunitiesDashlet']['columns'] = array (
  'strat_prod_line_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STRAT_PROD_LINE',
    'width' => '10%',
    'name' => 'strat_prod_line_c',
  ),
  'name' => 
  array (
    'width' => '35%',
    'label' => 'LBL_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'account_name' => 
  array (
    'width' => '35%',
    'label' => 'LBL_ACCOUNT_NAME',
    'default' => true,
    'link' => false,
    'id' => 'account_id',
    'ACLTag' => 'ACCOUNT',
    'name' => 'account_name',
  ),
  'sales_stage' => 
  array (
    'width' => '15%',
    'label' => 'LBL_SALES_STAGE',
    'name' => 'sales_stage',
    'default' => true,
  ),
  'amount_usdollar' => 
  array (
    'width' => '15%',
    'label' => 'LBL_AMOUNT_USDOLLAR',
    'default' => true,
    'currency_format' => true,
    'name' => 'amount_usdollar',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'prod_group_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROD_GROUP',
    'width' => '10%',
    'name' => 'prod_group_c',
  ),
  'opportunity_type' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'name' => 'opportunity_type',
    'default' => false,
  ),
  'lead_source' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'name' => 'lead_source',
    'default' => false,
  ),
  'probability' => 
  array (
    'width' => '15%',
    'label' => 'LBL_PROBABILITY',
    'name' => 'probability',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_closed' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_CLOSED',
    'default' => false,
    'defaultOrderColumn' => 
    array (
      'sortOrder' => 'ASC',
    ),
    'name' => 'date_closed',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'next_step' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'name' => 'next_step',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'distributor_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DISTRIBUTOR',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'distributor_agent_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DISTRIBUTOR_AGENT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'specialist_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SPECIALIST',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
);
