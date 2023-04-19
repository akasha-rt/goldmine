<?php
// created: 2021-03-26 19:40:34
$viewdefs['CC_Coupon_Codes']['base']['view']['subpanel-for-in_incentives-in_incentives_cc_coupon_codes'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'coupon_code',
          'label' => 'LBL_COUPON_CODE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'expiration',
          'label' => 'LBL_EXPIRATION',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);