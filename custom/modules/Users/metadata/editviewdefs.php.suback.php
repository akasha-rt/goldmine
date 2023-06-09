<?php
// created: 2022-09-05 03:37:06
$viewdefs['Users']['EditView'] = array (
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
      'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
      'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
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
    'LBL_USER_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'user_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'first_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'last_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'UserType',
          'customCode' => '{if $IS_ADMIN && !$IDM_MODE_ENABLED}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
        ),
      ),
      3 => 
      array (
        0 => 'picture',
      ),
    ),
    'LBL_EMPLOYEE_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 'employee_status',
        1 => 'show_on_employees',
      ),
      1 => 
      array (
        0 => 'title',
        1 => 'phone_work',
      ),
      2 => 
      array (
        0 => 'department',
        1 => 'phone_mobile',
      ),
      3 => 
      array (
        0 => 'reports_to_name',
        1 => 'phone_other',
      ),
      4 => 
      array (
        0 => '',
        1 => 'phone_fax',
      ),
      5 => 
      array (
        0 => '',
        1 => 'phone_home',
      ),
      6 => 
      array (
        0 => 'messenger_type',
        1 => 'messenger_id',
      ),
      7 => 
      array (
        0 => 'address_street',
        1 => 'address_city',
      ),
      8 => 
      array (
        0 => 'address_state',
        1 => 'address_postalcode',
      ),
      9 => 
      array (
        0 => 'address_country',
      ),
      10 => 
      array (
        0 => 'description',
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'user_hash',
          'studio' => 
          array (
            'no_duplicate' => true,
            'listview' => false,
            'searchview' => false,
            'related' => false,
            'formula' => false,
            'rollup' => false,
          ),
          'label' => 'LBL_USER_HASH',
        ),
        1 => 
        array (
          'name' => 'pwd_last_changed',
          'studio' => 
          array (
            'formula' => false,
          ),
          'label' => 'LBL_PSW_MODIFIED',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'created_by_name',
          'studio' => 
          array (
            'related' => false,
            'formula' => false,
            'rollup' => false,
          ),
          'label' => 'LBL_CREATED_BY_NAME',
        ),
        1 => 
        array (
          'name' => 'is_admin',
          'studio' => 
          array (
            'listview' => false,
            'searchview' => false,
            'related' => false,
          ),
          'label' => 'LBL_IS_ADMIN',
        ),
      ),
      2 => 
      array (
        0 => 
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
        1 => 
        array (
          'name' => 'sugar_login',
          'studio' => 
          array (
            'listview' => false,
            'searchview' => false,
            'formula' => false,
          ),
          'label' => 'LBL_SUGAR_LOGIN',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'license_type',
          'displayParams' => 
          array (
            'required' => true,
          ),
          'customCode' => '{if $IS_ADMIN && !$IDM_MODE_LC_LOCK}{$LICENSE_TYPE_DROPDOWN}{else}{$LICENSE_TYPE_READONLY}{/if}',
        ),
        1 => 'business_center_name',
      ),
      4 => 
      array (
        0 => '',
      ),
    ),
  ),
);