<?php
// created: 2022-12-12 04:08:56
$searchdefs['Contacts'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_TYPE',
        'width' => '10%',
        'name' => 'contact_type_c',
      ),
      1 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      7 => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      11 => 
      array (
        'name' => 'primary_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      12 => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
      13 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      14 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_DECISION_MAKER',
        'width' => '10%',
        'name' => 'decision_maker_c',
      ),
    ),
  ),
);