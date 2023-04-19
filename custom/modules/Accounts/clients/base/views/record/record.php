<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'escalate-action',
                'event' => 'button:escalate_button:click',
                'name' => 'escalate_button',
                'label' => 'LBL_ESCALATE_BUTTON_LABEL',
                'acl_action' => 'create',
              ),
              2 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              5 => 
              array (
                'type' => 'divider',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Accounts',
                'acl_action' => 'create',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              10 => 
              array (
                'type' => 'divider',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hint_account_pic',
                'type' => 'hint-accounts-logo',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
                'white_list' => true,
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'name' => 'hint_account_pic',
                    'type' => 'hint-accounts-logo',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'name',
                'type' => 'hint-accounts-search-dropdown',
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'type' => 'hint-accounts-search-dropdown',
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              4 => 
              array (
                'name' => 'is_escalated',
                'type' => 'badge',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'account_type',
              1 => 
              array (
                'name' => 'account_status_c',
                'label' => 'LBL_ACCOUNT_STATUS',
              ),
              2 => 
              array (
                'name' => 'strategic_account_c',
                'label' => 'LBL_STRATEGIC_ACCOUNT',
              ),
              3 => 
              array (
                'name' => 'parent_account_c',
                'label' => 'LBL_PARENT_ACCOUNT',
              ),
              4 => 
              array (
                'name' => 'parent_name',
              ),
              5 => 'website',
              6 => 
              array (
                'name' => 'description',
                'span' => 6,
              ),
              7 => 
              array (
                'name' => 'industry',
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'primary_naics_c',
                'label' => 'LBL_PRIMARY_NAICS',
              ),
              9 => 
              array (
                'name' => 'commentlog',
                'displayParams' => 
                array (
                  'type' => 'commentlog',
                  'fields' => 
                  array (
                    0 => 'entry',
                    1 => 'date_entered',
                    2 => 'created_by_name',
                  ),
                  'max_num' => 100,
                ),
                'studio' => 
                array (
                  'listview' => false,
                  'recordview' => true,
                  'wirelesseditview' => false,
                  'wirelessdetailview' => true,
                  'wirelesslistview' => false,
                  'wireless_basic_search' => false,
                  'wireless_advanced_search' => false,
                ),
                'label' => 'LBL_COMMENTLOG',
              ),
              10 => 'assigned_user_name',
              11 => 
              array (
                'name' => 'team_name',
              ),
              12 => 
              array (
                'readonly' => false,
                'name' => 'agency_name_c',
                'label' => 'LBL_AGENCY_NAME_C',
              ),
              13 => 
              array (
                'readonly' => false,
                'name' => 'portal_activated_distributor_c',
                'label' => 'LBL_PORTAL_ACTIVATED_DISTRIBUTOR',
              ),
              14 => 
              array (
                'readonly' => false,
                'name' => 'salesperson_c',
                'label' => 'LBL_SALESPERSON_C',
                'span' => 12,
              ),
              15 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              16 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              17 => 
              array (
                'name' => 'business_center_name',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'billing_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_BILLING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'billing_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'billing_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'billing_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'billing_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'billing_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'shipping_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_SHIPPING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'shipping_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'shipping_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'shipping_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'shipping_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'shipping_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_BILLING_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'billing_address_street' => 'shipping_address_street',
                      'billing_address_city' => 'shipping_address_city',
                      'billing_address_state' => 'shipping_address_state',
                      'billing_address_postalcode' => 'shipping_address_postalcode',
                      'billing_address_country' => 'shipping_address_country',
                    ),
                  ),
                ),
              ),
              2 => 'phone_office',
              3 => 
              array (
                'name' => 'phone_alternate',
                'label' => 'LBL_PHONE_ALT',
              ),
              4 => 
              array (
                'name' => 'email',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'phone_fax',
                'span' => 12,
              ),
              6 => 'hint_account_size',
              7 => 'hint_account_industry',
              8 => 'hint_account_location',
              9 => 'hint_account_founded_year',
              10 => 'hint_account_industry_tags',
              11 => 'hint_account_naics_code_lbl',
              12 => 'hint_account_fiscal_year_end',
              13 => 
              array (
                'name' => 'hint_account_facebook_handle',
                'type' => 'stage2_url',
              ),
              14 => 
              array (
                'name' => 'hint_account_logo',
                'type' => 'stage2_image',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_account_pic',
                ),
              ),
              15 => 
              array (
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'account_number_c',
                'label' => 'LBL_ACCOUNT_NUMBER',
              ),
              1 => 
              array (
                'name' => 'site_id_c',
                'label' => 'LBL_SITE_ID',
              ),
              2 => 
              array (
                'name' => 'oracle_account_name_c',
                'label' => 'LBL_ORACLE_ACCOUNT_NAME',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'buying_group_c',
                'label' => 'LBL_BUYING_GROUP',
              ),
              4 => 
              array (
                'name' => 'sales_channel_c',
                'label' => 'LBL_SALES_CHANNEL',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'oracle_customer_class_c',
                'label' => 'LBL_ORACLE_CUSTOMER_CLASS',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'oracle_customer_category_c',
                'label' => 'LBL_ORACLE_CUSTOMER_CATEGORY',
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'sales_region_c',
                'label' => 'LBL_SALES_REGION_C',
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'sales_territory_c',
                'label' => 'LBL_SALES_TERRITORY_C',
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'pmt_dist_c',
                'label' => 'LBL_PMT_DIST',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'saws_dist_c',
                'label' => 'LBL_SAWS_DIST',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'jst_dist_c',
                'label' => 'LBL_JST_DIST',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'pgs_dist_c',
                'label' => 'LBL_PGS_DIST',
                'span' => 12,
              ),
              4 => 
              array (
                'name' => 'metrology_dist_c',
                'label' => 'LBL_METROLOGY_DIST',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'laser_dist_c',
                'label' => 'LBL_LASER_DIST',
                'span' => 12,
              ),
              6 => 
              array (
                'name' => 'testing_dist_c',
                'label' => 'LBL_TESTING_DIST',
                'span' => 12,
              ),
              7 => 
              array (
                'name' => 'granite_dist_c',
                'label' => 'LBL_GRANITE_DIST',
                'span' => 12,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => '2',
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
