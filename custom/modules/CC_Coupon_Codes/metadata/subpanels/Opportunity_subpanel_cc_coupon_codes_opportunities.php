<?php
// created: 2021-03-26 19:05:51
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'coupon_code' => 
  array (
    'readonly' => false,
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_COUPON_CODE',
    'width' => 10,
  ),
  'status' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_STATUS',
    'width' => 10,
  ),
  'expiration' => 
  array (
    'readonly' => false,
    'type' => 'date',
    'vname' => 'LBL_EXPIRATION',
    'width' => 10,
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'default' => true,
  ),
);