<?php
$module_name = 'sf_WebActivityDetail';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
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
                'width' => 32,
                'height' => 32,
				'size' => 'small',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
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
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
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
                'name' => 'interactiondate',
                'label' => 'LBL_INTERACTIONDATE',
              ),
              4 => 
              array (
                'name' => 'path',
                'label' => 'LBL_PATH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'parameters',
                'label' => 'LBL_PARAMETERS',
              ),
              7 => 
              array (
                'name' => 'sf_webactivitydetail_sf_webactivity_name',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_RECORD_BODY' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
      ),
    ),
  ),
);
