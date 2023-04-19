<?php
 // created: 2021-03-26 19:33:35
$layout_defs["ProductTemplates"]["subpanel_setup"]['in_incentives_producttemplates'] = array (
  'order' => 100,
  'module' => 'IN_Incentives',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_IN_INCENTIVES_TITLE',
  'get_subpanel_data' => 'in_incentives_producttemplates',
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
