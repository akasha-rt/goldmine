<?php
// created: 2023-02-24 16:11:35
$viewdefs['Quotes']['base']['view']['subpanel-for-opportunities-quotes'] = array (
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
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'part_number_c',
          'label' => 'LBL_PART_NUMBER',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'quote_type',
          'label' => 'LBL_QUOTE_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'opportunity_name',
          'label' => 'LBL_OPPORTUNITY_NAME',
          'enabled' => true,
          'id' => 'OPPORTUNITY_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'shipping_contact_name',
          'label' => 'LBL_SHIPPING_CONTACT_NAME',
          'enabled' => true,
          'id' => 'SHIPPING_CONTACT_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'shipping_account_name',
          'label' => 'LBL_SHIPPING_ACCOUNT_NAME',
          'enabled' => true,
          'id' => 'SHIPPING_ACCOUNT_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'shipping_address_postalcode',
          'label' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'shipping_address_country',
          'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'shipping_address_street',
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'shipping_address_state',
          'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'shipping_address_city',
          'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        13 => 
        array (
          'name' => 'total',
          'label' => 'LBL_TOTAL',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'tax_usdollar',
          'label' => 'LBL_TAX_USDOLLAR',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        15 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'account_name',
          'sortable' => false,
          'readonly' => true,
        ),
        16 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'default' => true,
          'name' => 'total_usdollar',
          'readonly' => true,
        ),
        17 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        18 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        19 => 
        array (
          'name' => 'subtotal_usdollar',
          'label' => 'LBL_SUBTOTAL_USDOLLAR',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        20 => 
        array (
          'name' => 'discount',
          'label' => 'LBL_DISCOUNT_TOTAL',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        21 => 
        array (
          'name' => 'subtotal',
          'label' => 'LBL_SUBTOTAL',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        22 => 
        array (
          'name' => 'quote_num',
          'label' => 'LBL_QUOTE_NUM',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'sicon-preview',
        'acl_action' => 'view',
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'sicon-edit',
        'label' => 'LBL_EDIT_BUTTON',
        'acl_action' => 'edit',
        'event' => 'list:editrow:fire',
      ),
      2 => 
      array (
        'type' => 'pdfaction',
        'name' => 'download-pdf',
        'label' => 'LBL_PDF_VIEW',
        'action' => 'download',
        'acl_action' => 'view',
      ),
      3 => 
      array (
        'type' => 'unlink-action',
        'name' => 'unlink_button',
        'icon' => 'sicon-trash',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);