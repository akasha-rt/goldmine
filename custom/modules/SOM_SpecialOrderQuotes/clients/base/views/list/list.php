<?php
$module_name = 'SOM_SpecialOrderQuotes';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'accounts_som_specialorderquotes_2_name',
                'label' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_2_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_SOM_SPECIALORDERQUOTES_2ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'accounts_som_specialorderquotes_1_name',
                'label' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_SOM_SPECIALORDERQUOTES_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'special_order_stage_c',
                'label' => 'LBL_SPECIAL_ORDER_STAGE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'contacts_som_specialorderquotes_2_name',
                'label' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_2_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'id' => 'CONTACTS_SOM_SPECIALORDERQUOTES_2CONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'contacts_som_specialorderquotes_1_name',
                'label' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_1_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'id' => 'CONTACTS_SOM_SPECIALORDERQUOTES_1CONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'oracle_number_c',
                'label' => 'LBL_ORACLE_NUMBER',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'customer_number_c',
                'label' => 'LBL_CUSTOMER_NUMBER',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'enter_date_c',
                'label' => 'LBL_ENTER_DATE',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              12 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
