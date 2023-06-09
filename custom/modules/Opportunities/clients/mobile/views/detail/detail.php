<?php
$viewdefs['Opportunities'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
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
              1 => 'amount',
              2 => 'account_name',
              3 => 'date_closed',
              4 => 'sales_stage',
              5 => 
              array (
                'name' => 'accounts_opportunities_1_name',
                'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
              ),
              6 => 
              array (
                'name' => 'contacts_opportunities_1_name',
                'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
              ),
              7 => 
              array (
                'name' => 'renewal_parent_name',
                'label' => 'LBL_RENEWAL_PARENT',
              ),
              8 => 
              array (
                'name' => 'sales_status',
                'readonly' => true,
                'studio' => true,
                'label' => 'LBL_SALES_STATUS',
              ),
              9 => 
              array (
                'name' => 'service_start_date',
                'comment' => 'Service start date field.',
                'related_fields' => 
                array (
                ),
                'label' => 'LBL_SERVICE_START_DATE',
              ),
              10 => 'tag',
            ),
          ),
        ),
      ),
    ),
  ),
);
