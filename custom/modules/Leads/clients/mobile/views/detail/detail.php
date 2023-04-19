<?php
// created: 2022-12-12 04:12:11
$viewdefs['Leads']['mobile']['view']['detail'] = array (
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
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_PANEL_DEFAULT',
      'columns' => '1',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 'full_name',
        1 => 'title',
        2 => 'account_name',
        3 => 'phone_work',
        4 => 'phone_mobile',
        5 => 'phone_home',
        6 => 'primary_address_street',
        7 => 'primary_address_city',
        8 => 'primary_address_state',
        9 => 'primary_address_postalcode',
        10 => 'email',
        11 => 
        array (
          'name' => 'lead_source',
          'comment' => 'Lead source (ex: Web, print)',
          'label' => 'LBL_LEAD_SOURCE',
        ),
        12 => 
        array (
          'name' => 'lead_source_description',
          'comment' => 'Description of the lead source',
          'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
        ),
        13 => 'status',
        14 => 
        array (
          'name' => 'accounts_leads_1_name',
          'label' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
        ),
        15 => 
        array (
          'name' => 'contacts_leads_1_name',
          'label' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
        ),
        16 => 'team_name',
        17 => 'tag',
      ),
    ),
  ),
);