<?php
// created: 2022-12-12 04:12:11
$viewdefs['Leads']['mobile']['view']['edit'] = array (
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
        0 => 
        array (
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'strat_prod_line_c',
          'studio' => 'visible',
          'label' => 'LBL_STRAT_PROD_LINE',
        ),
        3 => 
        array (
          'name' => 'lead_quality_c',
          'studio' => 'visible',
          'label' => 'LBL_LEAD_QUALITY',
        ),
        4 => 
        array (
          'name' => 'lead_source',
          'comment' => 'Lead source (ex: Web, print)',
          'label' => 'LBL_LEAD_SOURCE',
        ),
        5 => 
        array (
          'name' => 'lead_source_description',
          'comment' => 'Description of the lead source',
          'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
        ),
        6 => 
        array (
          'name' => 'date_modified',
          'comment' => 'Date record last modified',
          'studio' => 
          array (
            'portaleditview' => false,
          ),
          'label' => 'LBL_DATE_MODIFIED',
        ),
        7 => 'title',
        8 => 'phone_mobile',
        9 => 'account_name',
        10 => 'primary_address_street',
        11 => 'primary_address_city',
        12 => 'primary_address_state',
        13 => 'primary_address_postalcode',
        14 => 'email',
        15 => 'status',
        16 => 
        array (
          'name' => 'accounts_leads_1_name',
          'label' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
        ),
        17 => 
        array (
          'name' => 'contacts_leads_1_name',
          'label' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
        ),
        18 => 'team_name',
        19 => 'tag',
      ),
    ),
  ),
);