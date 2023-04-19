<?php
$viewdefs['Opportunities'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_SALES_STAGE',
                'enabled' => true,
                'default' => true,
                'width' => '10',
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'id' => 'ACCOUNT_ID',
                'link' => true,
                'sortable' => false,
              ),
              3 => 
              array (
                'name' => 'accounts_opportunities_1_name',
                'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'default' => true,
                'id' => 'ACCOUNTS_OPPORTUNITIES_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
              ),
              4 => 
              array (
                'name' => 'contacts_opportunities_1_name',
                'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'default' => true,
                'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
                'link' => true,
                'sortable' => false,
              ),
              5 => 
              array (
                'name' => 'strat_prod_line_c',
                'label' => 'LBL_STRAT_PROD_LINE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'customercontact_c',
                'label' => 'LBL_CUSTOMERCONTACT',
                'enabled' => true,
                'default' => true,
                'id' => 'CONTACT_ID1_C',
                'link' => true,
                'sortable' => false,
              ),
              7 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'next_step',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'specialist_c',
                'label' => 'LBL_SPECIALIST',
                'enabled' => true,
                'default' => false,
                'id' => 'USER_ID_C',
                'link' => true,
                'sortable' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
