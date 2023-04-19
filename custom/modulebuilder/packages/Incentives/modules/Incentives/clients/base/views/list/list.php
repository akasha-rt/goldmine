<?php
$module_name = 'IN_Incentives';
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
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'start_date',
                'label' => 'LBL_START_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'coupon',
                'label' => 'LBL_COUPON',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'in_incentives_producttemplates_name',
                'label' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
                'enabled' => true,
                'id' => 'IN_INCENTIVES_PRODUCTTEMPLATESPRODUCTTEMPLATES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
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
