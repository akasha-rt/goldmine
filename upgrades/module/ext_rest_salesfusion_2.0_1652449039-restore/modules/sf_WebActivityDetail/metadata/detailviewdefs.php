<?php
$module_name = 'sf_WebActivityDetail';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
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
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hostname',
            'label' => 'LBL_HOSTNAME',
          ),
          1 => 
          array (
            'name' => 'interactiondate',
            'label' => 'LBL_INTERACTIONDATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'path',
            'label' => 'LBL_PATH',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'label' => 'LBL_PARAMETERS',
          ),
          1 => 
          array (
            'name' => 'sf_webactivitydetail_sf_webactivity_name',
          ),
        ),
      ),
    ),
  ),
);
?>
