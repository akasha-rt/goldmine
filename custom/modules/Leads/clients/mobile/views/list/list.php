<?php
// created: 2022-12-12 04:12:11
$viewdefs['Leads']['mobile']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'related_fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
          ),
        ),
        2 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_OFFICE_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'phone_mobile',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'primary_address_street',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'primary_address_city',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'primary_address_state',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'primary_address_postalcode',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'lead_source_description',
          'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'contacts_leads_1_name',
          'label' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
          'enabled' => true,
          'id' => 'CONTACTS_LEADS_1CONTACTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        15 => 
        array (
          'name' => 'accounts_leads_1_name',
          'label' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'id' => 'ACCOUNTS_LEADS_1ACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        16 => 
        array (
          'name' => 'alt_address_street',
          'enabled' => true,
          'default' => false,
        ),
        17 => 
        array (
          'name' => 'alt_address_city',
          'enabled' => true,
          'default' => false,
        ),
        18 => 
        array (
          'name' => 'alt_address_state',
          'enabled' => true,
          'default' => false,
        ),
        19 => 
        array (
          'name' => 'alt_address_postalcode',
          'enabled' => true,
          'default' => false,
        ),
        20 => 
        array (
          'name' => 'alt_address_country',
          'enabled' => true,
          'default' => false,
        ),
        21 => 
        array (
          'name' => 'primary_address_country',
          'enabled' => true,
          'default' => false,
        ),
        22 => 
        array (
          'name' => 'phone_home',
          'enabled' => true,
          'default' => false,
        ),
      ),
    ),
  ),
);