<?php
$viewdefs['Leads'] = 
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
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
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
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'convertbutton',
                'name' => 'lead_convert_button',
                'label' => 'LBL_CONVERT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                'acl_action' => 'view',
              ),
              7 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Leads',
                'acl_action' => 'create',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              12 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              13 => 
              array (
                'type' => 'divider',
              ),
              14 => 
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
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'hint-contacts-photo',
                'size' => 'large',
                'dismiss_label' => true,
                'white_list' => true,
                'related_fields' => 
                array (
                  0 => 'hint_contact_pic',
                ),
              ),
              1 => 
              array (
                'type' => 'favorite',
              ),
              2 => 
              array (
                'type' => 'follow',
                'readonly' => true,
              ),
              3 => 
              array (
                'name' => 'converted',
                'type' => 'badge',
                'dismiss_label' => true,
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                  1 => 'account_name',
                  2 => 'contact_id',
                  3 => 'contact_name',
                  4 => 'opportunity_id',
                  5 => 'opportunity_name',
                  6 => 'converted_opp_name',
                ),
              ),
              4 => 
              array (
                'name' => 'name',
                'type' => 'fullname',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'salutation',
                    'type' => 'enum',
                    'enum_width' => 'auto',
                    'searchBarThreshold' => 7,
                  ),
                  1 => 'first_name',
                  2 => 'last_name',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'title',
              ),
              1 => 
              array (
              ),
              2 => 'account_name',
              3 => 
              array (
                'readonly' => false,
                'name' => 'contact_type_c',
                'label' => 'LBL_CONTACT_TYPE_C',
              ),
              4 => 
              array (
                'name' => 'department',
              ),
              5 => 
              array (
                'name' => 'primary_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_PRIMARY_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'primary_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'primary_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'primary_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'primary_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'primary_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              6 => 
              array (
                'name' => 'phone_work',
              ),
              7 => 
              array (
                'name' => 'phone_mobile',
              ),
              8 => 
              array (
                'name' => 'email',
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'type' => 'hint-email',
                  ),
                ),
              ),
              9 => 
              array (
                'name' => 'website',
              ),
              10 => 
              array (
                'name' => 'status',
                'type' => 'status',
              ),
              11 => 
              array (
                'name' => 'status_description',
              ),
              12 => 
              array (
              ),
              13 => 
              array (
                'name' => 'description',
              ),
              14 => 
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
                'span' => 12,
              ),
              15 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL13',
            'label' => 'LBL_RECORDVIEW_PANEL13',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 
              array (
                'name' => 'do_not_call',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'agencyname__c',
                'label' => 'LBL_AGENCYNAME__C',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'lead_priority_c',
                'label' => 'LBL_LEAD_PRIORITY',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'salesperson_c',
                'label' => 'LBL_SALESPERSON_C',
              ),
              5 => 
              array (
                'name' => 'lead_source',
              ),
              6 => 
              array (
                'name' => 'team_name',
              ),
              7 => 
              array (
                'name' => 'lead_source_description',
              ),
              8 => 
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
              9 => 
              array (
                'name' => 'demo_request_c',
                'label' => 'LBL_DEMO_REQUEST',
              ),
              10 => 
              array (
                'name' => 'education_c',
                'label' => 'LBL_EDUCATION',
              ),
              11 => 
              array (
                'readonly' => false,
                'name' => 'lead_quality_c',
                'studio' => 'visible',
                'label' => 'LBL_LEAD_QUALITY',
              ),
              12 => 
              array (
                'name' => 'market_score',
                'span' => 12,
              ),
              13 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'notify_dist_c',
                'label' => 'LBL_NOTIFY_DIST_C',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'accounts_leads_1_name',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'contacts_leads_1_name',
                'span' => 12,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL14',
            'label' => 'LBL_RECORDVIEW_PANEL14',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'pmt_c',
                'label' => 'LABEL_PMT_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'pmt_score_c',
                'label' => 'LBL_PMT_SCORE_C',
              ),
              2 => 
              array (
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ds_c',
                'label' => 'LBL_DS_C',
              ),
              4 => 
              array (
                'name' => 'pht_c',
                'label' => 'LABEL_PHT_C',
              ),
              5 => 
              array (
                'name' => 'gage_blocks_c',
                'label' => 'LABEL_GAGE_BLOCKS_C',
              ),
              6 => 
              array (
                'name' => 'special_gage_c',
                'label' => 'LABEL_SPECIAL_GAGE_C',
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'saws_c',
                'label' => 'LABEL_SAWS_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'saws_score_c',
                'label' => 'LBL_SAWS_SCORE_C',
              ),
              2 => 
              array (
                'name' => 'band_saws_c',
                'label' => 'LABEL_BAND_SAWS_C',
              ),
              3 => 
              array (
                'name' => 'meat_cutter_c',
                'label' => 'LBL_MEAT_CUTTER',
              ),
              4 => 
              array (
                'name' => 'welding_center_c',
                'label' => 'LABEL_WELDING_CENTER_C',
              ),
              5 => 
              array (
                'name' => 'raw_material_c',
                'label' => 'LABEL_RAW_MATERIAL_C',
                'span' => 12,
              ),
              6 => 
              array (
                'name' => 'band_saw_machines_c',
                'label' => 'LABEL_BAND_SAW_MACHINES_C',
              ),
              7 => 
              array (
                'name' => 'pta_and_hand_saw_blades_c',
                'label' => 'LABEL_PTA_AND_HAND_SAW_BLADES_C',
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'jst_c',
                'label' => 'LABEL_JST_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'jst_score_c',
                'label' => 'LBL_JST_SCORE_C',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'hand_tools_c',
                'label' => 'LABEL_HAND_TOOLS_C',
              ),
              3 => 
              array (
                'name' => 'm1_oil_c',
                'label' => 'LABEL_M1_OIL_C',
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'pgs_c',
                'label' => 'LABEL_PGS_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'pgs_score_c',
                'label' => 'LBL_PGS_SCORE_C',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'flat_stock_c',
                'label' => 'LABEL_FLAT_STOCK_C',
                'span' => 12,
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => true,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL12',
            'label' => 'LBL_RECORDVIEW_PANEL12',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          10 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'metrology_equipment_c',
                'label' => 'LABEL_METROLOGY_EQUIPMENT_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'metrolgoy_equipment_score_c',
                'label' => 'LBL_METROLGOY_EQUIPMENT_SCORE_C',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'vision_systems_c',
                'label' => 'LABEL_VISION_SYSTEMS_C',
              ),
              3 => 
              array (
                'name' => 'optical_systems_c',
                'label' => 'LABEL_OPTICAL_SYSTEMS_C',
              ),
              4 => 
              array (
                'name' => 'services_c',
                'label' => 'LABEL_SERVICES_C',
                'span' => 12,
              ),
            ),
          ),
          11 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'laser_measurement_c',
                'label' => 'LABEL_LASER_MEASUREMENT_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'laser_measurement_score_c',
                'label' => 'LBL_LASER_MEASUREMENT_SCORE_C',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'profile_c',
                'label' => 'LBL_PROFILE',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'tire_c',
                'label' => 'LBL_TIRE',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'bytewise_qualification_c',
                'label' => 'LBL_BYTEWISE_QUALIFICATION',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'bytewise_status_c',
                'label' => 'LBL_BYTEWISE_STATUS',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'bytewise_record_type_c',
                'label' => 'LBL_BYTEWISE_RECORD_TYPE',
                'span' => 12,
              ),
            ),
          ),
          12 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'testing_equipment_c',
                'label' => 'LABEL_TESTING_EQUIPMENT_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'testing_equipment_score_c',
                'label' => 'LBL_TESTING_EQUIPMENT_SCORE_C',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'force_measurement_c',
                'label' => 'LABEL_FORCE_MEASUREMENT_C',
              ),
              3 => 
              array (
                'name' => 'hand_held_force_gages_c',
                'label' => 'LABEL_HAND_HELD_FORCE_GAGES_C',
              ),
              4 => 
              array (
                'name' => 'material_testing_c',
                'label' => 'LABEL_MATERIAL_TESTING_C',
                'span' => 12,
              ),
            ),
          ),
          13 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'granite_c',
                'label' => 'LABEL_GRANITE_C',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => '1',
                'name' => 'granite_score_c',
                'label' => 'LBL_GRANITE_SCORE_C',
                'span' => 12,
              ),
              2 => 'hint_education',
              3 => 
              array (
                'name' => 'surface_plates_c',
                'label' => 'LABEL_SURFACE_PLATES_C',
              ),
            ),
          ),
          14 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL10',
            'label' => 'LBL_RECORDVIEW_PANEL10',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'specialgageinterest_c',
                'label' => 'LBL_SPECIALGAGEINTEREST',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'specialgageleadscore_c',
                'label' => 'LBL_SPECIALGAGELEADSCORE',
              ),
            ),
          ),
          15 => 
          array (
            'name' => 'panel_hint',
            'label' => 'LBL_HINT_PANEL',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'licenseFilter' => 
            array (
              0 => 'HINT',
            ),
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'custom_granite_solutions_c',
                'label' => 'LABEL_CUSTOM_GRANITE_SOLUTIONS_C',
              ),
              1 => 
              array (
                'name' => 'hint_education_2',
                'parent_key' => 'hint_education',
              ),
              2 => 'hint_account_naics_code_lbl',
              3 => 
              array (
                'name' => 'hint_account_sic_code_label',
                'account_key' => 'sic_code',
              ),
              4 => 
              array (
                'name' => 'hint_account_annual_revenue',
                'account_key' => 'annual_revenue',
              ),
              5 => 
              array (
                'name' => 'hint_account_website',
                'type' => 'stage2_url',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true,
              ),
              6 => 
              array (
                'name' => 'phone_other',
                'type' => 'phone',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
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
