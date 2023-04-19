<?php
$viewdefs['Contacts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'recorddashlet' => 
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
                'span' => 12,
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
                'span' => 12,
              ),
              10 => 
              array (
                'name' => 'birthdate',
                'comment' => 'The birthdate of the contact',
                'label' => 'LBL_BIRTHDATE',
              ),
              11 => 
              array (
                'name' => 'dnb_principal_id',
                'readonly' => true,
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
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              6 => 'report_to_name',
              7 => 'sync_contact',
              8 => 'lead_source',
              9 => 'assigned_user_name',
              10 => 
              array (
                'name' => 'campaign_name',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'team_name',
                'span' => 12,
              ),
              12 => 
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
                'name' => 'corporate_announcements_c',
                'label' => 'LBL_CORPORATE_ANNOUNCEMENTS',
              ),
              1 => 
              array (
                'name' => 'holiday_schedule_c',
                'label' => 'LBL_HOLIDAY_SCHEDULE',
              ),
              2 => 
              array (
                'name' => 'price_increase_c',
                'label' => 'LBL_PRICE_INCREASE',
              ),
              3 => 
              array (
                'name' => 'product_training_c',
                'label' => 'LBL_PRODUCT_TRAINING',
              ),
              4 => 
              array (
                'name' => 'product_information_c',
                'label' => 'LBL_PRODUCT_INFORMATION',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'mkto_lead_score',
                'comment' => NULL,
                'label' => 'LBL_MKTO_LEAD_SCORE',
              ),
              6 => 
              array (
              ),
            ),
          ),
          4 => 
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
              ),
            ),
          ),
          5 => 
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
          6 => 
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
          7 => 
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
          8 => 
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
          9 => 
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
              ),
            ),
          ),
          10 => 
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
          12 => 
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
                'span' => 12,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
