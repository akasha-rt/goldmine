<?php
 // created: 2021-03-26 18:52:00
$layout_defs["Opportunities"]["subpanel_setup"]['cc_coupon_codes_opportunities'] = array (
  'order' => 100,
  'module' => 'CC_Coupon_Codes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CC_COUPON_CODES_OPPORTUNITIES_FROM_CC_COUPON_CODES_TITLE',
  'get_subpanel_data' => 'cc_coupon_codes_opportunities',
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
