<?php
$module_name = 'sf_Dialogs';
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
                'name' => NULL,
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'sf_dialogs_contacts_name',
              ),
              5 => 
              array (
                'name' => 'sf_dialogs_leads_name',
              ),
              6 => 
              array (
                'name' => 'dialog_id',
                'label' => 'LBL_DIALOG_ID',
              ),
              7 => 
              array (
                'name' => 'start_form_id',
                'label' => 'LBL_START_FORM_ID',
              ),
              8 => 
              array (
                'name' => 'completed_date',
                'label' => 'LBL_COMPLETED_DATE',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'dialog_response',
                'studio' => 'visible',
                'label' => 'LBL_DIALOG_RESPONSE',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
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
