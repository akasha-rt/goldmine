<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Case']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Case']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Case']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Case']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Case']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Case']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Case']['fields']['denorm_account_name']['len'] = '150';
$dictionary['Case']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Case']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Case']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Case']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Case']['fields']['denorm_account_name']['required'] = false;
$dictionary['Case']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Case']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Case']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Case']['fields']['denorm_account_name']['massupdate'] = false;
$dictionary['Case']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Case']['fields']['denorm_account_name']['duplicate_merge'] = 'enabled';
$dictionary['Case']['fields']['denorm_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['Case']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Case']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Case']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Case']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_catalog_number_c.php

 // created: 2022-07-21 20:53:34
$dictionary['Case']['fields']['catalog_number_c']['labelValue']='Catalog Number_old';
$dictionary['Case']['fields']['catalog_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['catalog_number_c']['enforced']='';
$dictionary['Case']['fields']['catalog_number_c']['dependency']='';
$dictionary['Case']['fields']['catalog_number_c']['required_formula']='';
$dictionary['Case']['fields']['catalog_number_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_primary_contact_id.php

 // created: 2022-08-05 17:51:24
$dictionary['Case']['fields']['primary_contact_id']['name']='primary_contact_id';
$dictionary['Case']['fields']['primary_contact_id']['type']='id';
$dictionary['Case']['fields']['primary_contact_id']['group']='primary_contact_name';
$dictionary['Case']['fields']['primary_contact_id']['reportable']=true;
$dictionary['Case']['fields']['primary_contact_id']['vname']='LBL_PRIMARY_CONTACT_ID';
$dictionary['Case']['fields']['primary_contact_id']['audited']=false;
$dictionary['Case']['fields']['primary_contact_id']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_primary_contact_name.php

 // created: 2022-08-05 17:51:24
$dictionary['Case']['fields']['primary_contact_name']['len']=255;
$dictionary['Case']['fields']['primary_contact_name']['massupdate']=true;
$dictionary['Case']['fields']['primary_contact_name']['hidemassupdate']=false;
$dictionary['Case']['fields']['primary_contact_name']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['primary_contact_name']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['primary_contact_name']['merge_filter']='disabled';
$dictionary['Case']['fields']['primary_contact_name']['reportable']=false;
$dictionary['Case']['fields']['primary_contact_name']['calculated']=false;
$dictionary['Case']['fields']['primary_contact_name']['related_fields']=array (
  0 => 'primary_contact_id',
);

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_case_number.php

 // created: 2022-08-05 17:52:02
$dictionary['Case']['fields']['case_number']['len']='11';
$dictionary['Case']['fields']['case_number']['audited']=false;
$dictionary['Case']['fields']['case_number']['massupdate']=true;
$dictionary['Case']['fields']['case_number']['hidemassupdate']=false;
$dictionary['Case']['fields']['case_number']['comments']='Visual unique identifier';
$dictionary['Case']['fields']['case_number']['merge_filter']='disabled';
$dictionary['Case']['fields']['case_number']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.29',
  'searchable' => true,
);
$dictionary['Case']['fields']['case_number']['calculated']=false;
$dictionary['Case']['fields']['case_number']['enable_range_search']=false;
$dictionary['Case']['fields']['case_number']['autoinc_next']='2650';
$dictionary['Case']['fields']['case_number']['min']=false;
$dictionary['Case']['fields']['case_number']['max']=false;
$dictionary['Case']['fields']['case_number']['disable_num_format']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_account_id.php

 // created: 2022-08-11 20:55:29
$dictionary['Case']['fields']['account_id']['name']='account_id';
$dictionary['Case']['fields']['account_id']['type']='relate';
$dictionary['Case']['fields']['account_id']['dbType']='id';
$dictionary['Case']['fields']['account_id']['rname']='id';
$dictionary['Case']['fields']['account_id']['module']='Accounts';
$dictionary['Case']['fields']['account_id']['id_name']='account_id';
$dictionary['Case']['fields']['account_id']['reportable']=false;
$dictionary['Case']['fields']['account_id']['vname']='LBL_ACCOUNT_ID';
$dictionary['Case']['fields']['account_id']['audited']=false;
$dictionary['Case']['fields']['account_id']['massupdate']=false;
$dictionary['Case']['fields']['account_id']['comment']='The account to which the case is associated';
$dictionary['Case']['fields']['account_id']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_account_name.php

 // created: 2022-08-11 20:55:29
$dictionary['Case']['fields']['account_name']['len']=255;
$dictionary['Case']['fields']['account_name']['required']=false;
$dictionary['Case']['fields']['account_name']['audited']=true;
$dictionary['Case']['fields']['account_name']['massupdate']=true;
$dictionary['Case']['fields']['account_name']['hidemassupdate']=false;
$dictionary['Case']['fields']['account_name']['comments']='The name of the account represented by the account_id field';
$dictionary['Case']['fields']['account_name']['importable']='true';
$dictionary['Case']['fields']['account_name']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['account_name']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Case']['fields']['account_name']['reportable']=false;
$dictionary['Case']['fields']['account_name']['calculated']=false;
$dictionary['Case']['fields']['account_name']['related_fields']=array (
  0 => 'account_id',
);

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/product_fields.php

 
$dictionary['Case']['fields']['product_group_rel'] =
array (
  'required' => false,
  'source' => 'non-db',
  'name' => 'product_group_rel',
  'vname' => 'LBL_PRODUCT_GROUP_REL',
  'type' => 'relate',
  'massupdate' => 0,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => 1,
  'reportable' => true,
  'len' => '255',
  'id_name' => 'product_group_id',
  'ext2' => 'ProductCategories',
  'module' => 'ProductCategories',
  'quicksearch' => 'enabled',
  'studio' => 'visible',
);
$dictionary['Case']['fields']['product_group_id'] = 
array (
  'required' => false,
  'name' => 'product_group_id',
  'vname' => '',
  'type' => 'id',
  'massupdate' => 0,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => 0,
  'audited' => 0,
  'reportable' => 0,
  'len' => 36,
);



 
$dictionary['Case']['fields']['catalog_number_rel'] =
array (
  'required' => false,
  'source' => 'non-db',
  'name' => 'catalog_number_rel',
  'vname' => 'LBL_CATALOG_NUMBER_REL',
  'type' => 'relate',
  'massupdate' => 0,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => 1,
  'reportable' => true,
  'len' => '255',
  'id_name' => 'catalog_number_id',
  'ext2' => 'ProductTemplates',
  'module' => 'ProductTemplates',
  'quicksearch' => 'enabled',
  'studio' => array('editview' => false, 'detailview' => false, 'quickcreate' => false),
  'auto_populate' => true,
  'populate_list' => array(
      // 'name' => 'name',
      'category_id' => 'product_group_id',
      'category_name' => 'product_group_rel',
      // 'mft_part_num' => 'mft_part_num',
      // 'list_price' => 'list_price',
      // 'cost_price' => 'cost_price',
      // 'discount_price' => 'discount_price',
      // 'list_usdollar' => 'list_usdollar',
      // 'cost_usdollar' => 'cost_usdollar',
      // 'discount_usdollar' => 'discount_usdollar',
      // 'currency_id' => 'currency_id',
      // 'base_rate' => 'base_rate',
      // 'tax_class' => 'tax_class',
      // 'weight' => 'weight',
      // 'manufacturer_id' => 'manufacturer_id',
      // 'manufacturer_name' => 'manufacturer_name',
      // 'type_id' => 'type_id',
      // 'type_name' => 'type_name',
      // 'service_duration_value' => ['service_duration_value', 'catalog_service_duration_value'],
      // 'service_duration_unit' => ['service_duration_unit', 'catalog_service_duration_unit'],
      // 'renewable' => 'renewable',
      // 'service' => 'service',
      // 'lock_duration' => 'lock_duration',
  )
);
$dictionary['Case']['fields']['catalog_number_id'] = 
array (
  'required' => false,
  'name' => 'catalog_number_id',
  'vname' => '',
  'type' => 'id',
  'massupdate' => 0,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => 0,
  'audited' => 0,
  'reportable' => 0,
  'len' => 36,
);
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_type.php

 // created: 2022-10-25 16:33:55
$dictionary['Case']['fields']['type']['len']=100;
$dictionary['Case']['fields']['type']['audited']=false;
$dictionary['Case']['fields']['type']['massupdate']=true;
$dictionary['Case']['fields']['type']['hidemassupdate']=false;
$dictionary['Case']['fields']['type']['comments']='The type of issue (ex: issue, feature)';
$dictionary['Case']['fields']['type']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['type']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['type']['merge_filter']='disabled';
$dictionary['Case']['fields']['type']['calculated']=false;
$dictionary['Case']['fields']['type']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/cases_contacts_1_Cases.php

// created: 2022-10-27 18:41:33
$dictionary["Case"]["fields"]["cases_contacts_1"] = array (
  'name' => 'cases_contacts_1',
  'type' => 'link',
  'relationship' => 'cases_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'cases_contacts_1contacts_idb',
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_phone_number_c.php

 // created: 2022-10-27 19:27:28
$dictionary['Case']['fields']['phone_number_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['phone_number_c']['labelValue']='Contact Phone';
$dictionary['Case']['fields']['phone_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['phone_number_c']['calculated']='true';
$dictionary['Case']['fields']['phone_number_c']['formula']='related($case_contact,"phone_work")';
$dictionary['Case']['fields']['phone_number_c']['enforced']='true';
$dictionary['Case']['fields']['phone_number_c']['required_formula']='';
$dictionary['Case']['fields']['phone_number_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_description__c.php

 // created: 2022-11-01 19:24:54
$dictionary['Case']['fields']['description__c']['labelValue']='Description (Custom)';
$dictionary['Case']['fields']['description__c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Case']['fields']['description__c']['enforced']='';
$dictionary['Case']['fields']['description__c']['dependency']='';
$dictionary['Case']['fields']['description__c']['required_formula']='';
$dictionary['Case']['fields']['description__c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_reasonforcontact_c.php

 // created: 2022-11-02 14:57:54
$dictionary['Case']['fields']['reasonforcontact_c']['labelValue']='Reason ForContact';
$dictionary['Case']['fields']['reasonforcontact_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Case']['fields']['reasonforcontact_c']['enforced']='';
$dictionary['Case']['fields']['reasonforcontact_c']['dependency']='';
$dictionary['Case']['fields']['reasonforcontact_c']['required_formula']='';
$dictionary['Case']['fields']['reasonforcontact_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_address_street_c.php

 // created: 2022-11-08 14:33:57
$dictionary['Case']['fields']['contact_address_street_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_street_c']['labelValue']='Contact Address Street';
$dictionary['Case']['fields']['contact_address_street_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_street_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_street_c']['calculated']='true';
$dictionary['Case']['fields']['contact_address_street_c']['formula']='related($contacts,"primary_address_street")';
$dictionary['Case']['fields']['contact_address_street_c']['enforced']='true';
$dictionary['Case']['fields']['contact_address_street_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_street_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_street_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_phone_c.php

 // created: 2022-11-08 14:38:14
$dictionary['Case']['fields']['contact_phone_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_phone_c']['labelValue']='Contact Phone';
$dictionary['Case']['fields']['contact_phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_phone_c']['calculated']='true';
$dictionary['Case']['fields']['contact_phone_c']['formula']='related($contacts,"phone_work")';
$dictionary['Case']['fields']['contact_phone_c']['enforced']='true';
$dictionary['Case']['fields']['contact_phone_c']['dependency']='';
$dictionary['Case']['fields']['contact_phone_c']['required_formula']='';
$dictionary['Case']['fields']['contact_phone_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_title_c.php

 // created: 2022-11-08 14:39:28
$dictionary['Case']['fields']['contact_title_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_title_c']['labelValue']='Contact Title';
$dictionary['Case']['fields']['contact_title_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_title_c']['calculated']='true';
$dictionary['Case']['fields']['contact_title_c']['formula']='related($contacts,"title")';
$dictionary['Case']['fields']['contact_title_c']['enforced']='true';
$dictionary['Case']['fields']['contact_title_c']['dependency']='';
$dictionary['Case']['fields']['contact_title_c']['required_formula']='';
$dictionary['Case']['fields']['contact_title_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_address_postalcode_c.php

 // created: 2022-11-08 14:59:15
$dictionary['Case']['fields']['contact_address_postalcode_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_postalcode_c']['labelValue']='Contact Address PostalCode';
$dictionary['Case']['fields']['contact_address_postalcode_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_postalcode_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_postalcode_c']['calculated']='true';
$dictionary['Case']['fields']['contact_address_postalcode_c']['formula']='related($case_contact,"primary_address_postalcode")';
$dictionary['Case']['fields']['contact_address_postalcode_c']['enforced']='true';
$dictionary['Case']['fields']['contact_address_postalcode_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_postalcode_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_postalcode_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_status.php

 // created: 2022-11-10 20:50:51
$dictionary['Case']['fields']['status']['default']='';
$dictionary['Case']['fields']['status']['massupdate']=true;
$dictionary['Case']['fields']['status']['hidemassupdate']=false;
$dictionary['Case']['fields']['status']['comments']='The status of the case';
$dictionary['Case']['fields']['status']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['status']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['status']['merge_filter']='disabled';
$dictionary['Case']['fields']['status']['calculated']=false;
$dictionary['Case']['fields']['status']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_productgroup_c.php

 // created: 2022-11-14 21:31:04
$dictionary['Case']['fields']['productgroup_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['productgroup_c']['labelValue']='Product Group';
$dictionary['Case']['fields']['productgroup_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Case']['fields']['productgroup_c']['calculated']='true';
$dictionary['Case']['fields']['productgroup_c']['formula']='related($case_contact,"product_group_c")';
$dictionary['Case']['fields']['productgroup_c']['enforced']='true';
$dictionary['Case']['fields']['productgroup_c']['dependency']='';
$dictionary['Case']['fields']['productgroup_c']['required_formula']='';
$dictionary['Case']['fields']['productgroup_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_name_c.php

 // created: 2022-12-05 18:00:33
$dictionary['Case']['fields']['contact_name_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_name_c']['labelValue']='contact name';
$dictionary['Case']['fields']['contact_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_name_c']['calculated']='true';
$dictionary['Case']['fields']['contact_name_c']['formula']='related($case_contact,"name")';
$dictionary['Case']['fields']['contact_name_c']['enforced']='true';
$dictionary['Case']['fields']['contact_name_c']['dependency']='';
$dictionary['Case']['fields']['contact_name_c']['required_formula']='';
$dictionary['Case']['fields']['contact_name_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_address_city_c.php

 // created: 2022-12-16 19:33:17
$dictionary['Case']['fields']['contact_address_city_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_city_c']['labelValue']='Contact Address City';
$dictionary['Case']['fields']['contact_address_city_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_city_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_city_c']['calculated']='1';
$dictionary['Case']['fields']['contact_address_city_c']['formula']='related($contacts,"primary_address_city")';
$dictionary['Case']['fields']['contact_address_city_c']['enforced']='1';
$dictionary['Case']['fields']['contact_address_city_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_city_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_city_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_address_state_c.php

 // created: 2022-12-16 19:35:07
$dictionary['Case']['fields']['contact_address_state_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_state_c']['labelValue']='Contact Address State';
$dictionary['Case']['fields']['contact_address_state_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_state_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_state_c']['calculated']='1';
$dictionary['Case']['fields']['contact_address_state_c']['formula']='related($contacts,"primary_address_state")';
$dictionary['Case']['fields']['contact_address_state_c']['enforced']='1';
$dictionary['Case']['fields']['contact_address_state_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_state_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_state_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_email_address_c.php

 // created: 2022-12-16 20:50:25
$dictionary['Case']['fields']['contact_email_address_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_email_address_c']['labelValue']='Contact Email Address';
$dictionary['Case']['fields']['contact_email_address_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_email_address_c']['calculated']='1';
$dictionary['Case']['fields']['contact_email_address_c']['formula']='related($contacts,"email1")';
$dictionary['Case']['fields']['contact_email_address_c']['enforced']='1';
$dictionary['Case']['fields']['contact_email_address_c']['dependency']='';
$dictionary['Case']['fields']['contact_email_address_c']['required_formula']='';
$dictionary['Case']['fields']['contact_email_address_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_address_country_c.php

 // created: 2022-12-16 20:55:45
$dictionary['Case']['fields']['contact_address_country_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_country_c']['labelValue']='Contact Address Country';
$dictionary['Case']['fields']['contact_address_country_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_country_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_country_c']['calculated']='true';
$dictionary['Case']['fields']['contact_address_country_c']['formula']='related($contacts,"primary_address_country")';
$dictionary['Case']['fields']['contact_address_country_c']['enforced']='true';
$dictionary['Case']['fields']['contact_address_country_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_country_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_country_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_company_c.php

 // created: 2022-12-16 20:57:53
$dictionary['Case']['fields']['contact_company_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_company_c']['labelValue']='Contact Company';
$dictionary['Case']['fields']['contact_company_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_company_c']['calculated']='true';
$dictionary['Case']['fields']['contact_company_c']['formula']='related($contacts,"contact_company_c")';
$dictionary['Case']['fields']['contact_company_c']['enforced']='true';
$dictionary['Case']['fields']['contact_company_c']['dependency']='';
$dictionary['Case']['fields']['contact_company_c']['required_formula']='';
$dictionary['Case']['fields']['contact_company_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_casetogglereminder_c.php

 // created: 2023-01-10 19:31:29
$dictionary['Case']['fields']['casetogglereminder_c']['labelValue']='Follow UP';
$dictionary['Case']['fields']['casetogglereminder_c']['enforced']='';
$dictionary['Case']['fields']['casetogglereminder_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_follow_up_datetime.php

 // created: 2023-01-10 19:34:25
$dictionary['Case']['fields']['follow_up_datetime']['massupdate']=true;
$dictionary['Case']['fields']['follow_up_datetime']['hidemassupdate']=false;
$dictionary['Case']['fields']['follow_up_datetime']['comments']='Deadline for following up on an issue';
$dictionary['Case']['fields']['follow_up_datetime']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['follow_up_datetime']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['follow_up_datetime']['merge_filter']='disabled';
$dictionary['Case']['fields']['follow_up_datetime']['calculated']=false;
$dictionary['Case']['fields']['follow_up_datetime']['enable_range_search']=false;
$dictionary['Case']['fields']['follow_up_datetime']['dependency']='equal($casetogglereminder_c,true)';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_name.php

 // created: 2023-01-17 14:48:08
$dictionary['Case']['fields']['name']['len']='255';
$dictionary['Case']['fields']['name']['massupdate']=false;
$dictionary['Case']['fields']['name']['hidemassupdate']=false;
$dictionary['Case']['fields']['name']['comments']='The short description of the bug';
$dictionary['Case']['fields']['name']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['name']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['name']['merge_filter']='disabled';
$dictionary['Case']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.53',
  'searchable' => true,
);
$dictionary['Case']['fields']['name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_description.php

 // created: 2023-02-06 17:57:15
$dictionary['Case']['fields']['description']['audited']=false;
$dictionary['Case']['fields']['description']['massupdate']=false;
$dictionary['Case']['fields']['description']['hidemassupdate']=false;
$dictionary['Case']['fields']['description']['comments']='Full text of the note';
$dictionary['Case']['fields']['description']['duplicate_merge']='disabled';
$dictionary['Case']['fields']['description']['duplicate_merge_dom_value']='0';
$dictionary['Case']['fields']['description']['merge_filter']='disabled';
$dictionary['Case']['fields']['description']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.66',
  'searchable' => true,
);
$dictionary['Case']['fields']['description']['calculated']=false;
$dictionary['Case']['fields']['description']['rows']='10';
$dictionary['Case']['fields']['description']['cols']='10';
$dictionary['Case']['fields']['description']['importable']='false';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_reason_for_contact_c.php

 // created: 2023-02-08 13:45:55
$dictionary['Case']['fields']['reason_for_contact_c']['labelValue']='Reason for Contact ';
$dictionary['Case']['fields']['reason_for_contact_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['reason_for_contact_c']['enforced']='';
$dictionary['Case']['fields']['reason_for_contact_c']['dependency']='';
$dictionary['Case']['fields']['reason_for_contact_c']['required_formula']='';
$dictionary['Case']['fields']['reason_for_contact_c']['readonly_formula']='';

 
?>
