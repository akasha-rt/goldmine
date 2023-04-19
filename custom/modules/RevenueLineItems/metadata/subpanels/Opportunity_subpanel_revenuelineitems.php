<?php
// created: 2023-02-28 19:46:38
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'sales_stage' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_SALES_STAGE',
    'width' => 10,
    'default' => true,
  ),
  'likely_case' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'default' => true,
    'vname' => 'LBL_LIKELY',
    'currency_format' => true,
    'width' => 10,
  ),
  'product_template_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'editview' => false,
      'detailview' => false,
      'quickcreate' => false,
    ),
    'vname' => 'LBL_PRODUCT',
    'id' => 'PRODUCT_TEMPLATE_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ProductTemplates',
    'target_record_key' => 'product_template_id',
  ),
  'category_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'editview' => false,
      'detailview' => false,
      'quickcreate' => false,
    ),
    'vname' => 'LBL_CATEGORY_NAME',
    'id' => 'CATEGORY_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ProductCategories',
    'target_record_key' => 'category_id',
  ),
  'date_closed' => 
  array (
    'type' => 'date',
    'related_fields' => 
    array (
      0 => 'date_closed_timestamp',
    ),
    'vname' => 'LBL_DATE_CLOSED',
    'width' => 10,
    'default' => true,
  ),
  'probability' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_PROBABILITY',
    'width' => 10,
    'default' => true,
  ),
  'discount_usdollar' => 
  array (
    'usage' => 'query_only',
    'sortable' => false,
  ),
  'currency_id' => 
  array (
    'name' => 'currency_id',
    'usage' => 'query_only',
  ),
);