<?php
 // created: 2021-03-26 19:33:35
$layout_defs["IN_Incentives"]["subpanel_setup"]['in_incentives_cc_coupon_codes'] = array (
  'order' => 100,
  'module' => 'CC_Coupon_Codes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IN_INCENTIVES_CC_COUPON_CODES_FROM_CC_COUPON_CODES_TITLE',
  'get_subpanel_data' => 'in_incentives_cc_coupon_codes',
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
