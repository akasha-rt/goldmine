<?php
 // created: 2023-01-12 19:58:49
$layout_defs["Accounts"]["subpanel_setup"]['pt_portalteams_accounts_1'] = array (
  'order' => 100,
  'module' => 'PT_PortalTeams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PT_PORTALTEAMS_ACCOUNTS_1_FROM_PT_PORTALTEAMS_TITLE',
  'get_subpanel_data' => 'pt_portalteams_accounts_1',
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
