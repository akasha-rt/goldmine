<?php
// created: 2022-09-05 03:37:06
$listViewDefs['Opportunities'] = array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'width' => '30',
    'link' => true,
    'default' => true,
  ),
  'account_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '20',
    'module' => 'Accounts',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'sales_stage' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LIST_SALES_STAGE',
    'width' => '10',
    'default' => true,
  ),
  'amount_usdollar' => 
  array (
    'type' => 'currency',
    'studio' => 
    array (
      'wirelesslistview' => false,
      'wirelesseditview' => false,
      'wirelessdetailview' => false,
      'editview' => false,
      'detailview' => false,
      'quickcreate' => false,
    ),
    'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'currency_format' => true,
    'width' => '10',
    'align' => 'right',
    'default' => true,
  ),
  'date_closed' => 
  array (
    'type' => 'date',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'width' => '10',
    'default' => true,
  ),
  'strat_prod_line_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STRAT_PROD_LINE',
    'width' => '10',
  ),
  'prod_group_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PROD_GROUP',
    'width' => '10',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '5',
    'module' => 'Employees',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10',
    'default' => false,
  ),
  'distributor_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'sortable' => false,
    'label' => 'LBL_DISTRIBUTOR',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10',
  ),
  'distributor_agent_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'sortable' => false,
    'label' => 'LBL_DISTRIBUTOR_AGENT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10',
  ),
  'lead_source' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '15',
    'default' => false,
  ),
  'next_step' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEXT_STEP',
    'width' => '10',
    'default' => false,
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_LIST_AMOUNT',
    'currency_format' => true,
    'width' => '10',
    'align' => 'right',
    'default' => false,
    'sortable' => false,
  ),
  'specialist_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'sortable' => false,
    'label' => 'LBL_SPECIALIST',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10',
  ),
  'team_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'portallistview' => false,
      'portaldetailview' => false,
      'portaleditview' => false,
    ),
    'label' => 'LBL_LIST_TEAM',
    'id' => 'TEAM_ID',
    'width' => '5',
    'default' => false,
  ),
  'opportunity_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '15',
    'default' => false,
  ),
);