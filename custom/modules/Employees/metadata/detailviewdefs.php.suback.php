<?php
// created: 2022-09-05 03:37:05
$viewdefs['Employees']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'customCode' => '{if $DISPLAY_EDIT}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_EDIT_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_EDIT_BUTTON_TITLE}',
              'accessKey' => '{$APP.LBL_EDIT_BUTTON_KEY}',
              'class' => 'button',
              'onclick' => 'this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\';',
              'id' => 'edit_button',
              'name' => 'Edit',
            ),
            'template' => '{if $DISPLAY_EDIT}[CONTENT]{/if}',
          ),
        ),
        1 => 
        array (
          'customCode' => '{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'     ; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_DUPLICATE_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_DUPLICATE_BUTTON_TITLE}',
              'accessKey' => '{$APP.LBL_DUPLICATE_BUTTON_KEY}',
              'class' => 'button',
              'onclick' => 'this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\';',
              'name' => 'Duplicate',
              'id' => 'duplicate_button',
            ),
            'template' => '{if $DISPLAY_DUPLICATE}[CONTENT]{/if}',
          ),
        ),
        2 => 
        array (
          'customCode' => '{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="if( confirm(\'{$DELETE_WARNING}\') ) {ldelim} this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'index\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'delete\'; this.form.submit();{rdelim}" type="button" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}',
          'sugar_html' => 
          array (
            'type' => 'button',
            'value' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'accessKey' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'class' => 'button',
              'onclick' => 'if( confirm(\'{$DELETE_WARNING}\') ) {ldelim} this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'index\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'delete\'; this.form.submit();{rdelim}',
              'name' => 'Delete',
              'id' => 'delete_button',
            ),
            'template' => '{if $DISPLAY_DELETE}[CONTENT]{/if}',
          ),
        ),
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
        'panelDefault' => 'collapsed',
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
          'name' => 'user_name',
          'studio' => 
          array (
            'no_duplicate' => true,
            'editview' => false,
            'detailview' => true,
            'quickcreate' => false,
            'basic_search' => false,
            'advanced_search' => false,
            'wirelesseditview' => false,
            'wirelessdetailview' => true,
            'wirelesslistview' => false,
            'wireless_basic_search' => false,
            'wireless_advanced_search' => false,
            'rollup' => false,
          ),
          'label' => 'LBL_USER_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'first_name',
          'customCode' => '{$fields.full_name.value}',
          'label' => 'LBL_NAME',
        ),
        1 => 
        array (
          'name' => 'last_name',
          'label' => 'LBL_LAST_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'department',
          'label' => 'LBL_DEPARTMENT',
        ),
        1 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'reports_to_name',
          'customCode' => '<a href="index.php?module=Employees&action=DetailView&record={$fields.reports_to_id.value}">{$fields.reports_to_name.value}</a>',
          'label' => 'LBL_REPORTS_TO_NAME',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'label' => 'LBL_PICTURE_FILE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'external_auth_only',
          'studio' => 
          array (
            'listview' => false,
            'searchview' => false,
            'related' => false,
          ),
          'label' => 'LBL_EXT_AUTHENTICATE',
        ),
        1 => 
        array (
          'name' => 'authenticate_id',
          'studio' => 
          array (
            'listview' => false,
            'searchview' => false,
            'related' => false,
          ),
          'label' => 'LBL_AUTHENTICATE_ID',
        ),
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
        1 => 
        array (
          'name' => 'phone_mobile',
          'label' => 'LBL_MOBILE_PHONE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'address_street',
          'label' => 'LBL_PRIMARY_ADDRESS',
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
          'customCode' => '{$fields.address_street.value}<br>{$fields.address_city.value} {$fields.address_state.value}&nbsp;&nbsp;{$fields.address_postalcode.value}<br>{$fields.address_country.value}',
          'label' => 'LBL_ADDRESS',
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