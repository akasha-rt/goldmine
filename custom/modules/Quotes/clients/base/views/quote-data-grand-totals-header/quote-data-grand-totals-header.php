<?php
// created: 2023-03-21 17:36:06
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-header'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'quote-data-actiondropdown',
      'name' => 'panel_dropdown',
      'no_default_action' => true,
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'icon' => 'sicon-plus',
          'name' => 'create_qli_button',
          'label' => 'LBL_CREATE_QLI_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_QLI_BUTTON_TOOLTIP',
        ),
        1 => 
        array (
          'type' => 'button',
          'icon' => 'sicon-plus',
          'name' => 'create_comment_button',
          'label' => 'LBL_CREATE_COMMENT_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_COMMENT_BUTTON_TOOLTIP',
        ),
        2 => 
        array (
          'type' => 'button',
          'icon' => 'sicon-plus',
          'name' => 'create_group_button',
          'label' => 'LBL_CREATE_GROUP_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_GROUP_BUTTON_TOOLTIP',
        ),
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_quote_data_grand_totals_header',
      'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_HEADER',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'description',
          'type' => 'text',
          'label' => 'LBL_DESCRIPTION',
          'labelModule' => 'Quotes',
          'css_class' => 'quote-totals-row-item',
        ),
        1 => 
        array (
          'name' => 'deal_tot_usdollar',
          'type' => 'currency',
          'label' => 'LBL_DEAL_TOT_USDOLLAR',
          'labelModule' => 'Quotes',
          'css_class' => 'quote-totals-row-item',
        ),
        2 => 
        array (
          'name' => 'new_sub_usdollar',
          'type' => 'currency',
          'label' => 'LBL_NEW_SUB_USDOLLAR',
          'labelModule' => 'Quotes',
          'css_class' => 'quote-totals-row-item',
        ),
        3 => 
        array (
          'name' => 'shipping_usdollar',
          'type' => 'currency',
          'label' => 'LBL_SHIPPING_USDOLLAR',
          'labelModule' => 'Quotes',
          'css_class' => 'quote-totals-row-item',
        ),
        4 => 
        array (
          'name' => 'total',
          'type' => 'currency',
          'label' => 'LBL_TOTAL',
          'labelModule' => 'Quotes',
          'css_class' => 'quote-totals-row-item',
        ),
        5 => 
        array (
          'name' => 'comments_c',
          'label' => 'LBL_COMMENTS',
          'labelModule' => 'Quotes',
          'css_class' => 'quote-totals-row-item',
        ),
      ),
    ),
  ),
);