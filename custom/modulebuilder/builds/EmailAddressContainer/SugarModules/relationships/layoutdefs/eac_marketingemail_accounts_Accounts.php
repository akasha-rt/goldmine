<?php
 // created: 2021-09-22 14:37:31
$layout_defs["Accounts"]["subpanel_setup"]['eac_marketingemail_accounts'] = array (
  'order' => 100,
  'module' => 'EAC_MarketingEmail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EAC_MARKETINGEMAIL_ACCOUNTS_FROM_EAC_MARKETINGEMAIL_TITLE',
  'get_subpanel_data' => 'eac_marketingemail_accounts',
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
