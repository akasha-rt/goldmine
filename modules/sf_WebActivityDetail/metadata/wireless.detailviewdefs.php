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
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'duration',
          'label' => 'LBL_DURATION',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'hostname',
          'label' => 'LBL_HOSTNAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'interactiondate',
          'label' => 'LBL_INTERACTIONDATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'path',
          'label' => 'LBL_PATH',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'label' => 'LBL_PARAMETERS',
        ),
      ),
      6 => 
      array (
        0 => '',
      ),
    ),
  ),
);
?>
