<?php
// created: 2014-11-28 02:40:36
$viewdefs = array (
  'Opportunities' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
          ),
        ),
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
        'useTabs' => false,
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
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
        'syncDetailEditViews' => true,
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 'account_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'amount',
              'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
            ),
            1 => 
            array (
              'name' => 'customercontact_c',
              'studio' => 'visible',
              'label' => 'LBL_CUSTOMERCONTACT',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'strat_prod_line_c',
              'studio' => 'visible',
              'label' => 'LBL_STRAT_PROD_LINE',
            ),
            1 => 
            array (
              'name' => 'togglereminder_c',
              'label' => 'LBL_TOGGLEREMINDER',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'prod_group_c',
              'studio' => 'visible',
              'label' => 'LBL_PROD_GROUP',
            ),
            1 => 
            array (
              'name' => 'remindertime_c',
              'studio' => 'visible',
              'label' => 'LBL_REMINDERTIME',
            ),
          ),
          4 => 
          array (
            0 => 'sales_stage',
            1 => 'date_closed',
          ),
          5 => 
          array (
            0 => 'opportunity_type',
            1 => 'probability',
          ),
          6 => 
          array (
            0 => 'next_step',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'nl2br' => true,
            ),
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'distributor_c',
              'studio' => 'visible',
              'label' => 'LBL_DISTRIBUTOR',
            ),
            1 => 'team_name',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'distributor_agent_c',
              'studio' => 'visible',
              'label' => 'LBL_DISTRIBUTOR_AGENT',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'created_by_name',
              'label' => 'LBL_CREATED',
            ),
          ),
        ),
        'lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 'lead_source',
            1 => 'campaign_name',
          ),
        ),
      ),
    ),
  ),
);