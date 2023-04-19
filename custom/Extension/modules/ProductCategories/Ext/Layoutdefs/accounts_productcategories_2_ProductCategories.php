<?php
 // created: 2023-01-12 20:29:57
$layout_defs["ProductCategories"]["subpanel_setup"]['accounts_productcategories_2'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_PRODUCTCATEGORIES_2_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'accounts_productcategories_2',
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
