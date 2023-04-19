<?php
$module_name = 'sf_Dialogs';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
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
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sf_dialogs_contacts_name',
          ),
          1 => 
          array (
            'name' => 'sf_dialogs_leads_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dialog_id',
            'label' => 'LBL_DIALOG_ID',
          ),
          1 => 
          array (
            'name' => 'start_form_id',
            'label' => 'LBL_START_FORM_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'completed_date',
            'label' => 'LBL_COMPLETED_DATE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'dialog_response',
            'studio' => 'visible',
            'label' => 'LBL_DIALOG_RESPONSE',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
