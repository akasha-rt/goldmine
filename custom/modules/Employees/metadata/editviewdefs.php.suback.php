<?php
// created: 2022-09-05 03:37:05
$viewdefs['Employees']['EditView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'form' => 
    array (
      'headerTpl' => 'modules/Employees/tpls/EditViewHeader.tpl',
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL2' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'employee_status',
        1 => 
        array (
          'name' => 'picture',
          'label' => 'LBL_PICTURE_FILE',
        ),
      ),
      1 => 
      array (
        0 => 'first_name',
        1 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      2 => 
      array (
        0 => 'department',
        1 => 'title',
      ),
      3 => 
      array (
        0 => 'reports_to_name',
      ),
      4 => 
      array (
        0 => '',
      ),
    ),
    'lbl_editview_panel2' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_OFFICE_PHONE',
        ),
        1 => 'phone_mobile',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'address_street',
          'type' => 'text',
          'label' => 'LBL_PRIMARY_ADDRESS',
          'displayParams' => 
          array (
            'rows' => 2,
            'cols' => 30,
          ),
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'address_city',
          'label' => 'LBL_CITY',
        ),
        1 => 
        array (
          'name' => 'address_state',
          'label' => 'LBL_STATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'address_postalcode',
          'label' => 'LBL_POSTAL_CODE',
        ),
        1 => 
        array (
          'name' => 'address_country',
          'label' => 'LBL_COUNTRY',
        ),
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'dial_indicators_c',
          'label' => 'LBL_DIAL_INDICATORS',
        ),
        1 => 
        array (
          'name' => 'electronic_tools_c',
          'label' => 'LBL_ELECTRONIC_TOOLS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'force_measurement_c',
          'label' => 'LBL_FORCE_MEASUREMENT',
        ),
        1 => 
        array (
          'name' => 'gage_blocks_c',
          'label' => 'LBL_GAGE_BLOCKS',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'granite_c',
          'label' => 'LBL_GRANITE',
        ),
        1 => 
        array (
          'name' => 'hardness_testers_c',
          'label' => 'LBL_HARDNESS_TESTERS',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'mechanical_tools_c',
          'label' => 'LBL_MECHANICAL_TOOLS',
        ),
        1 => 
        array (
          'name' => 'optical_c',
          'label' => 'LBL_OPTICAL',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'roundness_c',
          'label' => 'LBL_ROUNDNESS',
        ),
        1 => 
        array (
          'name' => 'surface_finish_c',
          'label' => 'LBL_SURFACE_FINISH',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'tapes_levels_c',
          'label' => 'LBL_TAPES_LEVELS',
        ),
        1 => 
        array (
          'name' => 'vision_c',
          'label' => 'LBL_VISION',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'email',
          'label' => 'LBL_EMAIL',
        ),
      ),
    ),
  ),
);