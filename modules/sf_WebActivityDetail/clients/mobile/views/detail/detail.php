<?php
$module_name = 'sf_WebActivityDetail';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
        'templateMeta' => 
        array (
          'form' => 
          array (
            'buttons' => 
            array (
              0 => 'EDIT',
              1 => 'DUPLICATE',
              2 => 'DELETE',
            ),
          ),
          'maxColumns' => '1',
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
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_PANEL_DEFAULT' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'title',
                'label' => 'LBL_TITLE',
              ),
              1 => 
              array (
                'name' => 'duration',
                'label' => 'LBL_DURATION',
              ),
              2 => 
              array (
                'name' => 'hostname',
                'label' => 'LBL_HOSTNAME',
              ),
              3 => 
              array (
                'name' => 'path',
                'label' => 'LBL_PATH',
              ),
              4 => 
              array (
                'name' => 'parameters',
                'label' => 'LBL_PARAMETERS',
              ),
              5 => 
              array (
                'name' => 'sf_web_activity_sf_web_activity_detail_name',
                'label' => 'LBL_SF_WEB_ACTIVITY_SF_WEB_ACTIVITY_DETAIL_FROM_SF_WEB_ACTIVITY_TITLE',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
