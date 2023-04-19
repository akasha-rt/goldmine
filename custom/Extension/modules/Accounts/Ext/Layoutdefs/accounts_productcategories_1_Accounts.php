<?php
 // created: 2023-01-12 20:27:32
$layout_defs["Accounts"]["subpanel_setup"]['accounts_productcategories_1'] = array (
  'order' => 100,
  'module' => 'ProductCategories',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_PRODUCTCATEGORIES_1_FROM_PRODUCTCATEGORIES_TITLE',
  'get_subpanel_data' => 'accounts_productcategories_1',
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
