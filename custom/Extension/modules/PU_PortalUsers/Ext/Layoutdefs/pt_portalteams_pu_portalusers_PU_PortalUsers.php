<?php
 // created: 2022-07-27 11:58:31
$layout_defs["PU_PortalUsers"]["subpanel_setup"]['pt_portalteams_pu_portalusers'] = array (
  'order' => 100,
  'module' => 'PT_PortalTeams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PT_PORTALTEAMS_PU_PORTALUSERS_FROM_PT_PORTALTEAMS_TITLE',
  'get_subpanel_data' => 'pt_portalteams_pu_portalusers',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
