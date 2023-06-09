<?php
$viewdefs['Contacts'] = 
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
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                'showOn' => 'view',
                'value' => 'edit',
              ),
              6 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'divider',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Contacts',
                'acl_action' => 'create',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              12 => 
              array (
                'type' => 'divider',
              ),
              13 => 
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
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              2 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
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
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'employment_status_c',
                'label' => 'LBL_EMPLOYMENT_STATUS',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'end_user_company_c',
                'label' => 'LBL_END_USER_COMPANY',
              ),
              2 => 
              array (
                'name' => 'account_name',
              ),
              3 => 
              array (
                'name' => 'contact_type_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACT_TYPE',
              ),
              4 => 
              array (
                'name' => 'job_role_c',
                'label' => 'LBL_JOB_ROLE',
              ),
              5 => 
              array (
                'name' => 'title',
              ),
              6 => 'department',
              7 => 
              array (
                'name' => 'decision_maker_c',
                'label' => 'LBL_DECISION_MAKER',
              ),
              8 => 
              array (
              ),
              9 => 'phone_mobile',
              10 => 'phone_work',
              11 => 
              array (
                'name' => 'email',
              ),
              12 => 
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
              13 => 
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
              14 => 
              array (
                'readonly' => false,
                'name' => 'three_d_access_request_c',
                'label' => 'LBL_THREE_D_ACCESS_REQUEST',
              ),
              15 => 
              array (
                'readonly' => false,
                'name' => 'request_date_c',
                'label' => 'LBL_REQUEST_DATE',
              ),
              16 => 
              array (
                'readonly' => false,
                'name' => 'privacy_policy_agreement_c',
                'label' => 'LBL_PRIVACY_POLICY_AGREEMENT',
                'span' => 12,
              ),
              17 => 
              array (
                'name' => 'market_score',
              ),
              18 => 
              array (
                'readonly' => false,
                'name' => 'comments_c',
                'studio' => 'visible',
                'label' => 'LBL_COMMENTS',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL21',
            'label' => 'LBL_RECORDVIEW_PANEL21',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'country_c',
                'label' => 'LBL_COUNTRY',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'division_c',
                'label' => 'LBL_DIVISION',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'sugaruser_c',
                'label' => 'LBL_SUGARUSER',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'specificdepartment_c',
                'label' => 'LBL_SPECIFICDEPARTMENT',
                'span' => 12,
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'profileeditdate_c',
                'label' => 'LBL_PROFILEEDITDATE',
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
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
              3 => 
              array (
                'name' => 'do_not_call',
              ),
              4 => 
              array (
                'name' => 'description',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'lead_source',
                'span' => 6,
              ),
              6 => 'assigned_user_name',
              7 => 
              array (
                'name' => 'team_name',
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'salesperson_c',
                'label' => 'LBL_SALESPERSON_C',
              ),
              9 => 
              array (
                'readonly' => false,
                'name' => 'agencyname_c',
                'label' => 'LBL_AGENCYNAME_C',
              ),
              10 => 
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
                'span' => 12,
              ),
              11 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL19',
            'label' => 'LBL_RECORDVIEW_PANEL19',
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
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL11',
            'label' => 'LBL_RECORDVIEW_PANEL11',
            'columns' => '2',
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
              ),
              2 => 
              array (
                'readonly' => '1',
                'name' => 'pmt_score_c',
                'label' => 'LBL_PMT_SCORE_C',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ds_c',
                'label' => 'LBL_DS_C',
                'span' => 12,
              ),
              4 => 
              array (
                'name' => 'pht_c',
                'label' => 'LABEL_PHT_C',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'gage_blocks_c',
                'label' => 'LABEL_GAGE_BLOCKS_C',
                'span' => 12,
              ),
            ),
          ),
          6 => 
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
                'readonly' => false,
                'name' => 'saws_c',
                'label' => 'LABEL_SAWS_C',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'readonly' => '1',
                'name' => 'saws_score_c',
                'label' => 'LBL_SAWS_SCORE_C',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'band_saws_c',
                'label' => 'LABEL_BAND_SAWS_C',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'band_saw_machines_c',
                'label' => 'LABEL_BAND_SAW_MACHINES_C',
                'span' => 12,
              ),
              6 => 
              array (
                'name' => 'meat_cutter_c',
                'label' => 'LBL_MEAT_CUTTER',
              ),
              7 => 
              array (
                'name' => 'pta_and_hand_saw_blades_c',
                'label' => 'LABEL_PTA_AND_HAND_SAW_BLADES_C',
              ),
              8 => 
              array (
                'name' => 'raw_material_c',
                'label' => 'LABEL_RAW_MATERIAL_C',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'welding_center_c',
                'label' => 'LABEL_WELDING_CENTER_C',
              ),
              10 => 
              array (
              ),
              11 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL12',
            'label' => 'LBL_RECORDVIEW_PANEL12',
            'columns' => '2',
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
                'readonly' => '1',
                'name' => 'jst_c_c',
                'label' => 'LBL_JST_C_C',
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
            'name' => 'LBL_RECORDVIEW_PANEL13',
            'label' => 'LBL_RECORDVIEW_PANEL13',
            'columns' => '2',
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
              ),
              2 => 
              array (
              ),
              3 => 
              array (
                'name' => 'flat_stock_c',
                'label' => 'LABEL_FLAT_STOCK_C',
              ),
              4 => 
              array (
              ),
              5 => 
              array (
                'name' => 'drill_rod_c',
                'label' => 'LABEL_DRILL_ROD_C',
              ),
              6 => 
              array (
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL20',
            'label' => 'LBL_RECORDVIEW_PANEL20',
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
            'name' => 'LBL_RECORDVIEW_PANEL14',
            'label' => 'LBL_RECORDVIEW_PANEL14',
            'columns' => '2',
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
                'name' => 'metrology_equipment_score_c',
                'label' => 'LBL_METROLOGY_EQUIPMENT_SCORE_C',
              ),
              2 => 
              array (
              ),
              3 => 
              array (
                'name' => 'vision_systems_c',
                'label' => 'LABEL_VISION_SYSTEMS_C',
                'span' => 12,
              ),
              4 => 
              array (
                'name' => 'optical_systems_c',
                'label' => 'LABEL_OPTICAL_SYSTEMS_C',
              ),
              5 => 
              array (
                'name' => 'services_c',
                'label' => 'LABEL_SERVICES_C',
              ),
            ),
          ),
          11 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL15',
            'label' => 'LBL_RECORDVIEW_PANEL15',
            'columns' => '2',
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
                'readonly' => '1',
                'name' => 'laser_measurement_score_c',
                'label' => 'LBL_LASER_MEASUREMENT_SCORE_C',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'tire_c',
                'label' => 'LBL_TIRE_C',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'profile_c',
                'label' => 'LBL_PROFILE_C',
              ),
              4 => 
              array (
              ),
            ),
          ),
          12 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL16',
            'label' => 'LBL_RECORDVIEW_PANEL16',
            'columns' => '2',
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
              ),
              2 => 
              array (
              ),
              3 => 
              array (
                'name' => 'force_measurement_c',
                'label' => 'LABEL_FORCE_MEASUREMENT_C',
              ),
              4 => 
              array (
                'name' => 'material_testing_c',
                'label' => 'LABEL_MATERIAL_TESTING_C',
              ),
              5 => 
              array (
                'name' => 'hand_held_force_gages_c',
                'label' => 'LABEL_HAND_HELD_FORCE_GAGES_C',
                'span' => 12,
              ),
              6 => 
              array (
                'name' => 'special_gage_c',
                'label' => 'LABEL_SPECIAL_GAGE_C',
                'span' => 12,
              ),
            ),
          ),
          13 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL17',
            'label' => 'LBL_RECORDVIEW_PANEL17',
            'columns' => '2',
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
                'readonly' => '1',
                'name' => 'granite_score_c',
                'label' => 'LBL_GRANITE_SCORE_C',
              ),
              2 => 
              array (
              ),
              3 => 
              array (
                'name' => 'custom_granite_solutions_c',
                'label' => 'LABEL_CUSTOM_GRANITE_SOLUTIONS_C',
              ),
              4 => 
              array (
                'name' => 'surface_plates_c',
                'label' => 'LABEL_SURFACE_PLATES_C',
              ),
              5 => 
              array (
              ),
            ),
          ),
          14 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL18',
            'label' => 'LBL_RECORDVIEW_PANEL18',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'contactsmap_c',
                'label' => 'LBL_CONTACTSMAP',
              ),
              1 => 
              array (
              ),
            ),
          ),
          15 => 
          array (
            'newTab' => true,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL10',
            'label' => 'LBL_RECORDVIEW_PANEL10',
            'columns' => '2',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'corporate_announcements_c',
                'label' => 'LBL_CORPORATE_ANNOUNCEMENTS',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'compliance_c',
                'label' => 'LBL_COMPLIANCE',
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
                'name' => 'product_group_c',
                'label' => 'LBL_PRODUCT_GROUP_C',
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'case_comments_c',
                'studio' => 'visible',
                'label' => 'LBL_CASE_COMMENTS',
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'reason_for_contact_c',
                'label' => 'LBL_REASON_FOR_CONTACT_C',
              ),
              9 => 
              array (
              ),
            ),
          ),
          16 => 
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
                'name' => 'hint_account_website',
                'label' => 'LBL_HINT_COMPANY_WEBSITE',
                'type' => 'stage2_url',
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_photo',
                  1 => 'hint_account_logo',
                ),
              ),
              1 => 'hint_account_size',
              2 => 'hint_account_location',
              3 => 
              array (
                'name' => 'hint_account_description',
                'account_key' => 'description',
              ),
              4 => 'hint_education',
              5 => 
              array (
                'name' => 'hint_education_2',
                'parent_key' => 'hint_education',
              ),
              6 => 'hint_account_industry',
              7 => 
              array (
                'name' => 'hint_industry_tags',
                'account_key' => 'hint_account_industry_tags',
              ),
              8 => 'hint_account_naics_code_lbl',
              9 => 
              array (
                'name' => 'hint_account_sic_code_label',
                'account_key' => 'sic_code',
              ),
              10 => 'hint_account_fiscal_year_end',
              11 => 
              array (
                'name' => 'hint_account_annual_revenue',
                'account_key' => 'annual_revenue',
              ),
              12 => 
              array (
                'name' => 'phone_other',
                'type' => 'phone',
              ),
              13 => 
              array (
              ),
              14 => 
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
