<?php
// created: 2023-02-24 16:11:34
$subpanel_layout['list_fields'] = array (
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
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
  'part_number_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'varchar',
    'vname' => 'LBL_PART_NUMBER',
    'width' => 10,
    'default' => true,
  ),
  'quote_type' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_QUOTE_TYPE',
    'width' => 10,
    'default' => true,
  ),
  'opportunity_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_OPPORTUNITY_NAME',
    'id' => 'OPPORTUNITY_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'opportunity_id',
  ),
  'shipping_contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_SHIPPING_CONTACT_NAME',
    'id' => 'SHIPPING_CONTACT_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'shipping_contact_id',
  ),
  'shipping_account_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_SHIPPING_ACCOUNT_NAME',
    'id' => 'SHIPPING_ACCOUNT_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'shipping_account_id',
  ),
  'shipping_address_postalcode' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
    'width' => 10,
    'default' => true,
  ),
  'shipping_address_country' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'width' => 10,
    'default' => true,
  ),
  'shipping_address_street' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_SHIPPING_ADDRESS_STREET',
    'sortable' => false,
    'width' => 10,
    'default' => true,
  ),
  'shipping_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SHIPPING_ADDRESS_STATE',
    'width' => 10,
    'default' => true,
  ),
  'shipping_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SHIPPING_ADDRESS_CITY',
    'width' => 10,
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_QUOTE_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'total' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_TOTAL',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
  ),
  'tax_usdollar' => 
  array (
    'type' => 'currency',
    'studio' => 
    array (
      'wirelesseditview' => false,
      'wirelessdetailview' => false,
      'wirelesslistview' => false,
      'wireless_basic_search' => false,
      'wireless_advanced_search' => false,
      'mobile' => false,
    ),
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_TAX_USDOLLAR',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
  ),
  'account_name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Accounts',
    'width' => 10,
    'target_record_key' => 'account_id',
    'target_module' => 'Accounts',
    'sortable' => false,
    'default' => true,
  ),
  'total_usdollar' => 
  array (
    'vname' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'width' => 10,
    'sortable' => false,
    'default' => true,
  ),
  'date_quote_expected_closed' => 
  array (
    'name' => 'date_quote_expected_closed',
    'vname' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'width' => 10,
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => 10,
    'default' => true,
  ),
  'subtotal_usdollar' => 
  array (
    'type' => 'currency',
    'studio' => 
    array (
      'wirelesseditview' => false,
      'wirelessdetailview' => false,
      'wirelesslistview' => false,
      'wireless_basic_search' => false,
      'wireless_advanced_search' => false,
      'mobile' => false,
    ),
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_SUBTOTAL_USDOLLAR',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
  ),
  'discount' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_DISCOUNT_TOTAL',
    'currency_format' => true,
    'width' => 10,
  ),
  'subtotal' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_SUBTOTAL',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
  ),
  'quote_num' => 
  array (
    'type' => 'int',
    'readonly' => true,
    'vname' => 'LBL_QUOTE_NUM',
    'width' => 10,
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);