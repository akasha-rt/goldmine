<?php
// created: 2022-12-12 04:12:11
$viewdefs['Employees']['mobile']['view']['detail'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
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
        0 => 'full_name',
        1 => 
        array (
          'name' => 'title',
          'customCode' => '{if $EDIT_TITLE_DEPT}<input type="text" name="{$fields.title.name}" id="{$fields.title.name}" size="30" maxlength="50" value="{$fields.title.value}" title="" tabindex="t" >{else}{$fields.title.value}<input type="hidden" name="{$fields.title.name}" id="{$fields.title.name}" value="{$fields.title.value}">{/if}',
        ),
        2 => 
        array (
          'name' => 'department',
          'customCode' => '{if $EDIT_TITLE_DEPT}<input type="text" name="{$fields.department.name}" id="{$fields.department.name}" size="30" maxlength="50" value="{$fields.department.value}" title="" tabindex="t" >{else}{$fields.department.value}<input type="hidden" name="{$fields.department.name}" id="{$fields.department.name}" value="{$fields.department.value}">{/if}',
        ),
        3 => 'phone_work',
        4 => 'phone_mobile',
        5 => 'phone_home',
        6 => 'phone_other',
        7 => 'address_street',
        8 => 'address_city',
        9 => 'address_state',
        10 => 'address_postalcode',
        11 => 'address_country',
        12 => 'picture',
        13 => 'email',
      ),
    ),
  ),
);