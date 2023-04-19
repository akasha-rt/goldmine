<?php
 // created: 2021-09-22 14:19:42
$layout_defs["Accounts"]["subpanel_setup"]['eac_companyemail_accounts'] = array (
  'order' => 100,
  'module' => 'EAC_CompanyEmail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EAC_COMPANYEMAIL_ACCOUNTS_FROM_EAC_COMPANYEMAIL_TITLE',
  'get_subpanel_data' => 'eac_companyemail_accounts',
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
