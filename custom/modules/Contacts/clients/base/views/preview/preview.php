<?php
$viewdefs['Contacts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'preview' => 
      array (
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
              3 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
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
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'employment_status_c',
                'label' => 'LBL_EMPLOYMENT_STATUS',
              ),
              1 => 'account_name',
              2 => 
              array (
                'name' => 'contact_type_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACT_TYPE',
              ),
              3 => 'title',
              4 => 
              array (
                'name' => 'job_role_c',
                'label' => 'LBL_JOB_ROLE',
              ),
              5 => 'department',
              6 => 
              array (
                'name' => 'decision_maker_c',
                'label' => 'LBL_DECISION_MAKER',
              ),
              7 => 'phone_mobile',
              8 => 'phone_work',
              9 => 
              array (
                'name' => 'email',
              ),
              10 => 
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
              11 => 
              array (
                'name' => 'birthdate',
                'comment' => 'The birthdate of the contact',
                'label' => 'LBL_BIRTHDATE',
              ),
              12 => 
              array (
                'name' => 'dnb_principal_id',
                'readonly' => true,
              ),
              13 => 
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
              14 => 
              array (
                'span' => 12,
              ),
              15 => 
              array (
                'readonly' => false,
                'name' => 'three_d_access_request_c',
                'label' => 'LBL_THREE_D_ACCESS_REQUEST',
              ),
              16 => 
              array (
                'readonly' => false,
                'name' => 'request_date_c',
                'label' => 'LBL_REQUEST_DATE',
              ),
              17 => 
              array (
                'span' => 12,
              ),
              18 => 
              array (
                'readonly' => false,
                'name' => 'privacy_policy_agreement_c',
                'label' => 'LBL_PRIVACY_POLICY_AGREEMENT',
              ),
              19 => 
              array (
                'readonly' => false,
                'name' => 'comments_c',
                'studio' => 'visible',
                'label' => 'LBL_COMMENTS',
              ),
              20 => 
              array (
                'span' => 12,
              ),
              21 => 
              array (
                'name' => 'market_score',
              ),
              22 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
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
              1 => 
              array (
                'name' => 'alt_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_ALT_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'alt_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_ALT_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'alt_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_ALT_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'alt_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_ALT_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'alt_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'alt_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_PRIMARY_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'primary_address_street' => 'alt_address_street',
                      'primary_address_city' => 'alt_address_city',
                      'primary_address_state' => 'alt_address_state',
                      'primary_address_postalcode' => 'alt_address_postalcode',
                      'primary_address_country' => 'alt_address_country',
                    ),
                  ),
                ),
              ),
              2 => 'phone_fax',
              3 => 'do_not_call',
              4 => 
              array (
                'name' => 'twitter',
              ),
              5 => 
              array (
                'name' => 'description',
              ),
              6 => 'report_to_name',
              7 => 'sync_contact',
              8 => 'lead_source',
              9 => 'assigned_user_name',
              10 => 
              array (
                'readonly' => false,
                'name' => 'salesperson_c',
                'label' => 'LBL_SALESPERSON_C',
              ),
              11 => 
              array (
                'name' => 'campaign_name',
              ),
              12 => 
              array (
                'name' => 'team_name',
              ),
              13 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
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
              14 => 
              array (
                'readonly' => false,
                'name' => 'contact_company_c',
                'label' => 'LBL_CONTACT_COMPANY',
              ),
            ),
          ),
          3 => 
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
                'name' => 'compliance_c',
                'label' => 'LBL_COMPLIANCE',
              ),
              1 => 
              array (
                'name' => 'corporate_announcements_c',
                'label' => 'LBL_CORPORATE_ANNOUNCEMENTS',
              ),
              2 => 
              array (
                'name' => 'holiday_schedule_c',
                'label' => 'LBL_HOLIDAY_SCHEDULE',
              ),
              3 => 
              array (
                'name' => 'price_increase_c',
                'label' => 'LBL_PRICE_INCREASE',
              ),
              4 => 
              array (
                'name' => 'product_training_c',
                'label' => 'LBL_PRODUCT_TRAINING',
              ),
              5 => 
              array (
                'name' => 'product_information_c',
                'label' => 'LBL_PRODUCT_INFORMATION',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'case_comments_c',
                'studio' => 'visible',
                'label' => 'LBL_CASE_COMMENTS',
              ),
              7 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          4 => 
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hint_account_website',
                'type' => 'stage2_url',
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_photo',
                  1 => 'hint_account_logo',
                ),
              ),
              1 => 'hint_education',
              2 => 
              array (
                'name' => 'hint_education_2',
                'parent_key' => 'hint_education',
              ),
              3 => 'hint_job_2',
              4 => 'hint_account_size',
              5 => 'hint_account_industry',
              6 => 'hint_account_location',
              7 => 
              array (
                'name' => 'hint_account_description',
                'account_key' => 'description',
              ),
              8 => 'hint_account_founded_year',
              9 => 
              array (
                'name' => 'hint_industry_tags',
                'account_key' => 'hint_account_industry_tags',
              ),
              10 => 'hint_account_naics_code_lbl',
              11 => 
              array (
                'name' => 'hint_account_sic_code_label',
                'account_key' => 'sic_code',
              ),
              12 => 'hint_account_fiscal_year_end',
              13 => 
              array (
                'name' => 'hint_account_annual_revenue',
                'account_key' => 'annual_revenue',
              ),
              14 => 
              array (
                'name' => 'hint_facebook',
                'type' => 'stage2_url',
              ),
              15 => 
              array (
                'name' => 'hint_twitter',
                'type' => 'stage2_url',
              ),
              16 => 
              array (
                'name' => 'hint_account_facebook_handle',
                'type' => 'stage2_url',
              ),
              17 => 
              array (
                'name' => 'hint_account_twitter_handle',
                'type' => 'stage2_url',
                'account_key' => 'twitter',
              ),
              18 => 
              array (
                'name' => 'phone_other',
                'type' => 'phone',
              ),
              19 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          5 => 
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
                'name' => 'pmt_c',
                'label' => 'LABEL_PMT_C',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ds_c',
                'label' => 'LBL_DS_C',
              ),
              2 => 
              array (
                'name' => 'pht_c',
                'label' => 'LABEL_PHT_C',
              ),
              3 => 
              array (
                'name' => 'gage_blocks_c',
                'label' => 'LABEL_GAGE_BLOCKS_C',
              ),
              4 => 
              array (
                'name' => 'special_gage_c',
                'label' => 'LABEL_SPECIAL_GAGE_C',
              ),
              5 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          6 => 
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
                'name' => 'saws_c',
                'label' => 'LABEL_SAWS_C',
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'band_saws_c',
                'label' => 'LABEL_BAND_SAWS_C',
              ),
              3 => 
              array (
                'name' => 'band_saw_machines_c',
                'label' => 'LABEL_BAND_SAW_MACHINES_C',
              ),
              4 => 
              array (
                'name' => 'meat_cutter_c',
                'label' => 'LBL_MEAT_CUTTER',
              ),
              5 => 
              array (
                'name' => 'pta_and_hand_saw_blades_c',
                'label' => 'LABEL_PTA_AND_HAND_SAW_BLADES_C',
              ),
              6 => 
              array (
                'name' => 'raw_material_c',
                'label' => 'LABEL_RAW_MATERIAL_C',
              ),
              7 => 
              array (
                'name' => 'welding_center_c',
                'label' => 'LABEL_WELDING_CENTER_C',
              ),
            ),
          ),
          7 => 
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
                'name' => 'jst_c',
                'label' => 'LABEL_JST_C',
              ),
              1 => 
              array (
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
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'pgs_c',
                'label' => 'LABEL_PGS_C',
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'flat_stock_c',
                'label' => 'LABEL_FLAT_STOCK_C',
              ),
              3 => 
              array (
                'name' => 'drill_rod_c',
                'label' => 'LABEL_DRILL_ROD_C',
              ),
            ),
          ),
          9 => 
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
                'name' => 'metrology_equipment_c',
                'label' => 'LABEL_METROLOGY_EQUIPMENT_C',
              ),
              1 => 
              array (
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
              ),
              5 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          10 => 
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
                'name' => 'laser_measurement_c',
                'label' => 'LABEL_LASER_MEASUREMENT_C',
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'profile_c',
                'label' => 'LBL_PROFILE_C',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'tire_c',
                'label' => 'LBL_TIRE_C',
              ),
            ),
          ),
          11 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'testing_equipment_c',
                'label' => 'LABEL_TESTING_EQUIPMENT_C',
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'force_measurement_c',
                'label' => 'LABEL_FORCE_MEASUREMENT_C',
              ),
              3 => 
              array (
                'name' => 'material_testing_c',
                'label' => 'LABEL_MATERIAL_TESTING_C',
              ),
              4 => 
              array (
                'name' => 'hand_held_force_gages_c',
                'label' => 'LABEL_HAND_HELD_FORCE_GAGES_C',
              ),
              5 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          12 => 
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
                'name' => 'granite_c',
                'label' => 'LABEL_GRANITE_C',
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'custom_granite_solutions_c',
                'label' => 'LABEL_CUSTOM_GRANITE_SOLUTIONS_C',
              ),
              3 => 
              array (
                'name' => 'surface_plates_c',
                'label' => 'LABEL_SURFACE_PLATES_C',
              ),
            ),
          ),
          13 => 
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
                'name' => 'contactsmap_c',
                'label' => 'LBL_CONTACTSMAP',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
        ),
      ),
    ),
  ),
);
