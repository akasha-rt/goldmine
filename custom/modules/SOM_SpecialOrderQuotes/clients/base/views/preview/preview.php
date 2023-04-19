<?php
$module_name = 'SOM_SpecialOrderQuotes';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'preview' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'accounts_som_specialorderquotes_2_name',
              ),
              1 => 
              array (
                'name' => 'accounts_som_specialorderquotes_1_name',
              ),
              2 => 
              array (
                'name' => 'contacts_som_specialorderquotes_2_name',
              ),
              3 => 
              array (
                'name' => 'contacts_som_specialorderquotes_1_name',
              ),
              4 => 
              array (
                'name' => 'special_order_stage_c',
                'label' => 'LBL_SPECIAL_ORDER_STAGE',
              ),
              5 => 
              array (
                'name' => 'probability_c',
                'label' => 'LBL_PROBABILITY',
              ),
              6 => 
              array (
                'name' => 'reason_c',
                'label' => 'LBL_REASON',
                'span' => 12,
              ),
              7 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              8 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'best_case_c',
                'label' => 'LBL_BEST_CASE',
              ),
              9 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'worst_case_c',
                'label' => 'LBL_WORST_CASE',
              ),
              10 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'actual_case_c',
                'label' => 'LBL_ACTUAL_CASE',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'dwg_nolss_c',
                'label' => 'LBL_DWG_NOLSS',
              ),
              12 => 
              array (
                'name' => 'dwg_nocust_c',
                'label' => 'LBL_DWG_NOCUST',
              ),
              13 => 
              array (
                'name' => 'oracle_number_c',
                'label' => 'LBL_ORACLE_NUMBER',
                'span' => 12,
              ),
              14 => 
              array (
                'name' => 'enter_date_c',
                'label' => 'LBL_ENTER_DATE',
                'span' => 12,
              ),
              15 => 
              array (
                'name' => 'customer_number_c',
                'label' => 'LBL_CUSTOMER_NUMBER',
                'span' => 12,
              ),
              16 => 
              array (
                'name' => 'comment1_c',
                'label' => 'LBL_COMMENT1',
                'span' => 12,
              ),
              17 => 
              array (
                'name' => 'comment2_c',
                'label' => 'LBL_COMMENT2',
                'span' => 12,
              ),
              18 => 
              array (
                'name' => 'order_date_c',
                'label' => 'LBL_ORDER_DATE',
              ),
              19 => 
              array (
                'name' => 'delivery_c',
                'label' => 'LBL_DELIVERY',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'team_name',
              1 => 'assigned_user_name',
              2 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              3 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'distributor_legacy_c',
                'label' => 'LBL_DISTRIBUTOR_LEGACY',
              ),
              1 => 
              array (
                'name' => 'customer_legacy_c',
                'label' => 'LBL_CUSTOMER_LEGACY',
              ),
              2 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'unit_cost_c',
                'label' => 'LBL_UNIT_COST',
                'span' => 12,
              ),
              3 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'sell_price_c',
                'label' => 'LBL_SELL_PRICE',
              ),
              4 => 
              array (
                'name' => 'distributor_discount_c',
                'label' => 'LBL_DISTRIBUTOR_DISCOUNT',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
        ),
      ),
    ),
  ),
);
