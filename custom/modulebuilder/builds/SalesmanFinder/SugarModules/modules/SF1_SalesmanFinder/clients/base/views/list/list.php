<?php
$module_name = 'SF1_SalesmanFinder';
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
                'name' => 'state',
                'label' => 'LBL_STATE',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'country',
                'label' => 'LBL_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'regional_manager',
                'label' => 'LBL_REGIONAL_MANAGER',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              5 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => true,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'industrial_area',
                'label' => 'LBL_INDUSTRIAL_AREA',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'industrial_territory',
                'label' => 'LBL_INDUSTRIAL_TERRITORY',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
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
