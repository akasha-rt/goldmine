<?php
$viewdefs['Prospects'] = 
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
                'type' => 'rowaction',
                'event' => 'button:convert_button:click',
                'name' => 'convert_button',
                'label' => 'LBL_CONVERT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
              ),
              7 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'edit',
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
                'acl_module' => 'Prospects',
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
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
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
                'type' => 'fullname',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
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
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'title',
              1 => 'phone_work',
              2 => 
              array (
                'name' => 'company_c',
                'label' => 'LBL_COMPANY',
              ),
              3 => 
              array (
                'name' => 'email',
              ),
              4 => 'department',
              5 => 'phone_mobile',
              6 => 'account_name',
              7 => 
              array (
                'name' => 'phone_fax',
                'comment' => 'Contact fax number',
                'label' => 'LBL_FAX_PHONE',
              ),
              8 => 
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
              9 => 
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
              10 => 
              array (
                'name' => 'description',
                'related_fields' => 
                array (
                  0 => 'lead_id',
                ),
                'span' => 6,
              ),
              11 => 
              array (
                'name' => 'industry_c',
                'label' => 'LBL_INDUSTRY',
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'target_source_c',
                'label' => 'LBL_TARGET_SOURCE',
              ),
              13 => 
              array (
                'name' => 'target_source_desc_c',
                'studio' => 'visible',
                'label' => 'LBL_TARGET_SOURCE_DESC',
              ),
              14 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS_C',
                'span' => 12,
              ),
              15 => 
              array (
                'name' => 'primary_sic_c',
                'label' => 'LBL_PRIMARY_SIC_C',
              ),
              16 => 
              array (
                'name' => 'naics_c',
                'label' => 'LBL_NAICS',
              ),
              17 => 
              array (
                'name' => 'sic_description_c',
                'label' => 'LBL_SIC_DESCRIPTION',
              ),
              18 => 
              array (
                'name' => 'naics_description_c',
                'label' => 'LBL_NAICS_DESCRIPTION',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
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
                'name' => 'pmt_c',
                'label' => 'LABEL_PMT_C',
              ),
              1 => 
              array (
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
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
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
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
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
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
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
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
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
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
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
                'name' => 'laser_measurement_c',
                'label' => 'LABEL_LASER_MEASUREMENT_C',
              ),
              1 => 
              array (
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => false,
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
                'name' => 'testing_equipment_c',
                'label' => 'LABEL_TESTING_EQUIPMENT_C',
              ),
              1 => 
              array (
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
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
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
          10 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'hide' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'email_opt_out',
                'studio' => 'false',
                'label' => 'LBL_EMAIL_OPT_OUT',
              ),
              1 => 'do_not_call',
              2 => 'assigned_user_name',
              3 => 
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
              4 => 'team_name',
              5 => 
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
              6 => 
              array (
                'name' => 'geocode_status',
                'licenseFilter' => 
                array (
                  0 => 'MAPS',
                ),
              ),
              7 => 
              array (
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
