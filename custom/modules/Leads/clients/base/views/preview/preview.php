<?php
$viewdefs['Leads'] = 
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
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
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
              0 => 'title',
              1 => 'phone_mobile',
              2 => 'website',
              3 => 'do_not_call',
              4 => 'account_name',
              5 => 'email',
              6 => 
              array (
                'name' => 'description',
              ),
              7 => 
              array (
                'name' => 'demo_request_c',
                'label' => 'LBL_DEMO_REQUEST',
              ),
              8 => 
              array (
                'name' => 'decision_maker_c',
                'label' => 'LBL_DECISION_MAKER',
              ),
              9 => 'lead_source',
              10 => 'lead_source_description',
              11 => 
              array (
                'name' => 'lead_quality_c',
                'studio' => 'visible',
                'label' => 'LBL_LEAD_QUALITY',
              ),
            ),
          ),
          2 => 
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
                'name' => 'accounts_leads_1_name',
              ),
              1 => 
              array (
                'name' => 'contacts_leads_1_name',
              ),
              2 => 
              array (
                'name' => 'notify_dist_c',
                'label' => 'LBL_NOTIFY_DIST_C',
              ),
              3 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          3 => 
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
                'name' => 'pmt_c',
                'label' => 'LABEL_PMT_C',
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'pht_c',
                'label' => 'LABEL_PHT_C',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ds_c',
                'label' => 'LBL_DS_C',
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
          4 => 
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
          5 => 
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
          6 => 
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
          7 => 
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
          8 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
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
              ),
              1 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          9 => 
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
          10 => 
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
          11 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'labels' => true,
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
              2 => 'department',
              3 => 'phone_work',
              4 => 'campaign_name',
              5 => 'phone_fax',
              6 => 
              array (
                'name' => 'status',
                'type' => 'status',
              ),
              7 => 'status_description',
              8 => 
              array (
                'name' => 'distributor_c',
                'label' => 'LBL_DISTRIBUTOR',
              ),
              9 => 
              array (
                'name' => 'refered_by',
                'comment' => 'Identifies who refered the lead',
                'label' => 'LBL_REFERED_BY',
              ),
              10 => 
              array (
                'name' => 'education_c',
                'label' => 'LBL_EDUCATION',
              ),
              11 => 
              array (
                'span' => 12,
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
              14 => 'assigned_user_name',
              15 => 'opportunity_amount',
              16 => 
              array (
                'name' => 'team_name',
              ),
              17 => 
              array (
                'name' => 'primary_sic_c',
                'label' => 'LBL_PRIMARY_SIC',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
