<?php
$module_name = 'SF1_SalesmanFinder';
$viewdefs[$module_name] = 
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
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
            ),
          ),
          1 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'assigned_user_name',
              2 => 'team_name',
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
              4 => 
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
              5 => 
              array (
                'name' => 'state',
                'label' => 'LBL_STATE',
              ),
              6 => 
              array (
                'name' => 'country',
                'label' => 'LBL_COUNTRY',
              ),
              7 => 
              array (
                'name' => 'industrial_area',
                'label' => 'LBL_INDUSTRIAL_AREA',
              ),
              8 => 
              array (
                'name' => 'industrial_territory',
                'label' => 'LBL_INDUSTRIAL_TERRITORY',
              ),
              9 => 
              array (
                'name' => 'territory_c',
                'label' => 'LBL_TERRITORY_C',
              ),
              10 => 
              array (
                'name' => 'tag',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'regional_manager',
                'label' => 'LBL_REGIONAL_MANAGER',
              ),
              1 => 
              array (
                'name' => 'regional_manager_phone',
                'label' => 'LBL_REGIONAL_MANAGER_PHONE',
              ),
              2 => 
              array (
                'name' => 'regional_manager_email',
                'label' => 'LBL_REGIONAL_MANAGER_EMAIL',
              ),
              3 => 
              array (
                'name' => 'regional_manager_email_check',
                'label' => 'LBL_REGIONAL_MANAGER_EMAIL_CHECK',
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'metrology_coverage',
                'label' => 'LBL_METROLOGY_COVERAGE',
              ),
              1 => 
              array (
                'name' => 'metrology_coverage_phone',
                'label' => 'LBL_METROLOGY_COVERAGE_PHONE',
              ),
              2 => 
              array (
                'name' => 'metrology_email',
                'label' => 'LBL_METROLOGY_EMAIL',
              ),
              3 => 
              array (
                'name' => 'metrology_email_check',
                'label' => 'LBL_METROLOGY_EMAIL_CHECK',
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL10',
            'label' => 'LBL_RECORDVIEW_PANEL10',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'laser_measurement_c',
                'label' => 'LBL_LASER_MEASUREMENT_C',
              ),
              1 => 
              array (
                'name' => 'laser_measurement_phone_c',
                'label' => 'LBL_LASER_MEASUREMENT_PHONE_C',
              ),
              2 => 
              array (
                'name' => 'laser_measurement_email_c',
                'label' => 'LBL_LASER_MEASUREMENT_EMAIL_C',
              ),
              3 => 
              array (
                'name' => 'laser_measurement_check_c',
                'label' => 'LBL_LASER_MEASUREMENT_CHECK_C',
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'saws',
                'label' => 'LBL_SAWS',
              ),
              1 => 
              array (
                'name' => 'saws_phone',
                'label' => 'LBL_SAWS_PHONE',
              ),
              2 => 
              array (
                'name' => 'saws_email',
                'label' => 'LBL_SAWS_EMAIL',
              ),
              3 => 
              array (
                'name' => 'saws_email_check',
                'label' => 'LBL_SAWS_EMAIL_CHECK',
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'power_tools',
                'label' => 'LBL_POWER_TOOLS',
              ),
              1 => 
              array (
                'name' => 'power_tools_phone',
                'label' => 'LBL_POWER_TOOLS_PHONE',
              ),
              2 => 
              array (
                'name' => 'power_tools_email',
                'label' => 'LBL_POWER_TOOLS_EMAIL',
              ),
              3 => 
              array (
                'name' => 'power_tools_email_check',
                'label' => 'LBL_POWER_TOOLS_EMAIL_CHECK',
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'precision_measuring_tools',
                'label' => 'LBL_PRECISION_MEASURING_TOOLS',
              ),
              1 => 
              array (
                'name' => 'precision_measuring_phone',
                'label' => 'LBL_PRECISION_MEASURING_PHONE',
              ),
              2 => 
              array (
                'name' => 'precision_measuring_email',
                'label' => 'LBL_PRECISION_MEASURING_EMAIL',
              ),
              3 => 
              array (
                'name' => 'pmt_email_chec',
                'label' => 'LBL_PMT_EMAIL_CHEC',
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'granite',
                'label' => 'LBL_GRANITE',
              ),
              1 => 
              array (
                'name' => 'granite_phone',
                'label' => 'LBL_GRANITE_PHONE',
              ),
              2 => 
              array (
                'name' => 'granite_email',
                'label' => 'LBL_GRANITE_EMAIL',
              ),
              3 => 
              array (
                'name' => 'granite_email_check',
                'label' => 'LBL_GRANITE_EMAIL_CHECK',
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'precision_ground_stock',
                'label' => 'LBL_PRECISION_GROUND_STOCK',
              ),
              1 => 
              array (
                'name' => 'precision_ground_phone',
                'label' => 'LBL_PRECISION_GROUND_PHONE',
              ),
              2 => 
              array (
                'name' => 'precision_ground_email',
                'label' => 'LBL_PRECISION_GROUND_EMAIL',
              ),
              3 => 
              array (
                'name' => 'precision_ground_email_check',
                'label' => 'LBL_PRECISION_GROUND_EMAIL_CHECK',
              ),
            ),
          ),
          10 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'force_measurement_systems',
                'label' => 'LBL_FORCE_MEASUREMENT_SYSTEMS',
              ),
              1 => 
              array (
                'name' => 'force_measurement_phone',
                'label' => 'LBL_FORCE_MEASUREMENT_PHONE',
              ),
              2 => 
              array (
                'name' => 'force_measurement_email',
                'label' => 'LBL_FORCE_MEASUREMENT_EMAIL',
              ),
              3 => 
              array (
                'name' => 'force_measurement_email_check',
                'label' => 'LBL_FORCE_MEASUREMENT_EMAIL_CHECK',
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
