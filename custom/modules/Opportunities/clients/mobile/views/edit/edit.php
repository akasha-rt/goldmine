<?php
$viewdefs['Opportunities'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
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
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 'account_name',
              2 => 
              array (
                'name' => 'date_closed',
              ),
              3 => 
              array (
                'name' => 'accounts_opportunities_1_name',
                'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
              ),
              4 => 
              array (
                'name' => 'sales_stage',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'specialist_c',
                'studio' => 'visible',
                'label' => 'LBL_SPECIALIST',
              ),
              6 => 'team_name',
              7 => 
              array (
                'readonly' => false,
                'name' => 'strat_prod_line_c',
                'label' => 'LBL_STRAT_PROD_LINE',
              ),
              8 => 
              array (
                'name' => 'opportunity_type',
                'comment' => 'Type of opportunity (ex: Existing, New)',
                'label' => 'LBL_TYPE',
              ),
              9 => 
              array (
                'name' => 'lead_source',
                'comment' => 'Source of the opportunity',
                'label' => 'LBL_LEAD_SOURCE',
              ),
              10 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
