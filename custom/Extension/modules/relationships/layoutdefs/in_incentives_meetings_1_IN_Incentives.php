<?php
 // created: 2021-03-30 18:34:29
$layout_defs["IN_Incentives"]["subpanel_setup"]['in_incentives_meetings_1'] = array (
  'order' => 100,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'in_incentives_meetings_1',
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
