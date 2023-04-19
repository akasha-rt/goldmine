<?php
 // created: 2023-01-13 14:55:41
$layout_defs["Accounts"]["subpanel_setup"]['pu_portalusers_accounts_1'] = array (
  'order' => 100,
  'module' => 'PU_PortalUsers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PU_PORTALUSERS_ACCOUNTS_1_FROM_PU_PORTALUSERS_TITLE',
  'get_subpanel_data' => 'pu_portalusers_accounts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
