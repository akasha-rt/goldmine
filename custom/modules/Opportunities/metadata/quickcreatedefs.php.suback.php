<?php
// created: 2022-09-05 03:37:06
$viewdefs['Opportunities']['QuickCreate'] = array (
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
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'DEFAULT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'account_name',
        ),
      ),
      1 => 
      array (
        0 => 'amount',
        1 => 'date_closed',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'opportunity_type',
        ),
        1 => 
        array (
          'name' => 'strat_prod_line_c',
          'studio' => 'visible',
          'label' => 'LBL_STRAT_PROD_LINE',
        ),
      ),
      3 => 
      array (
        1 => 
        array (
          'name' => 'prod_group_c',
          'studio' => 'visible',
          'label' => 'LBL_PROD_GROUP',
        ),
      ),
      4 => 
      array (
        0 => 'next_step',
        1 => 'sales_stage',
      ),
      5 => 
      array (
        0 => 'lead_source',
        1 => 'probability',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'distributor_c',
          'studio' => 'visible',
          'label' => 'LBL_DISTRIBUTOR',
        ),
        1 => 
        array (
          'name' => 'specialist_c',
          'studio' => 'visible',
          'label' => 'LBL_SPECIALIST',
        ),
      ),
    ),
  ),
);