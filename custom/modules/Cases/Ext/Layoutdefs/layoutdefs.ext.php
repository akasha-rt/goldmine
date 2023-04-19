<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/cases_contacts_1_Cases.php

 // created: 2022-10-27 18:41:32
$layout_defs["Cases"]["subpanel_setup"]['cases_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'cases_contacts_1',
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

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/_overrideCase_subpanel_contacts.php

//auto-generated file DO NOT EDIT
$layout_defs['Cases']['subpanel_setup']['contacts']['override_subpanel_name'] = 'Case_subpanel_contacts';

?>
