<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_quote_stage.php

 // created: 2016-10-16 03:16:23
$dictionary['Quote']['fields']['quote_stage']['default'] = 'Draft';
$dictionary['Quote']['fields']['quote_stage']['duplicate_merge'] = 'disabled';
$dictionary['Quote']['fields']['quote_stage']['duplicate_merge_dom_value'] = '0';
$dictionary['Quote']['fields']['quote_stage']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['quote_stage']['unified_search'] = false;
$dictionary['Quote']['fields']['quote_stage']['calculated'] = false;
$dictionary['Quote']['fields']['quote_stage']['dependency'] = false;
$dictionary['Quote']['fields']['quote_stage']['full_text_search']['enabled'] = true;
$dictionary['Quote']['fields']['quote_stage']['full_text_search']['searchable'] = true;
$dictionary['Quote']['fields']['quote_stage']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/rli_link_workflow.php

$dictionary['Quote']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Quote']['full_text_search']=false;

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_payment_terms.php

 // created: 2022-11-22 19:33:32
$dictionary['Quote']['fields']['payment_terms']['len']=100;
$dictionary['Quote']['fields']['payment_terms']['audited']=false;
$dictionary['Quote']['fields']['payment_terms']['massupdate']=true;
$dictionary['Quote']['fields']['payment_terms']['hidemassupdate']=false;
$dictionary['Quote']['fields']['payment_terms']['duplicate_merge']='enabled';
$dictionary['Quote']['fields']['payment_terms']['duplicate_merge_dom_value']='1';
$dictionary['Quote']['fields']['payment_terms']['merge_filter']='disabled';
$dictionary['Quote']['fields']['payment_terms']['unified_search']=false;
$dictionary['Quote']['fields']['payment_terms']['calculated']=false;
$dictionary['Quote']['fields']['payment_terms']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_quotename_c.php

 // created: 2022-11-22 20:35:38
$dictionary['Quote']['fields']['quotename_c']['labelValue']='Quote Name';
$dictionary['Quote']['fields']['quotename_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['quotename_c']['enforced']='';
$dictionary['Quote']['fields']['quotename_c']['dependency']='';
$dictionary['Quote']['fields']['quotename_c']['required_formula']='';
$dictionary['Quote']['fields']['quotename_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_part_number_c.php

 // created: 2022-11-30 21:25:16
$dictionary['Quote']['fields']['part_number_c']['labelValue']='Part Number';
$dictionary['Quote']['fields']['part_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['part_number_c']['enforced']='';
$dictionary['Quote']['fields']['part_number_c']['dependency']='';
$dictionary['Quote']['fields']['part_number_c']['required_formula']='';
$dictionary['Quote']['fields']['part_number_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_unit_price_c.php

 // created: 2022-11-30 21:26:16
$dictionary['Quote']['fields']['unit_price_c']['labelValue']='unit price';
$dictionary['Quote']['fields']['unit_price_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['unit_price_c']['enforced']='';
$dictionary['Quote']['fields']['unit_price_c']['dependency']='';
$dictionary['Quote']['fields']['unit_price_c']['required_formula']='';
$dictionary['Quote']['fields']['unit_price_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/denorm_billing_account_name.php


// 'billing_account_name'
$dictionary['Quote']['fields']['billing_account_name']['is_denormalized'] = true;
$dictionary['Quote']['fields']['billing_account_name']['denormalized_field_name'] = 'denorm_billing_account_name';

// 'denorm_billing_account_name'
$dictionary['Quote']['fields']['denorm_billing_account_name']['name'] = 'denorm_billing_account_name';
$dictionary['Quote']['fields']['denorm_billing_account_name']['type'] = 'varchar';
$dictionary['Quote']['fields']['denorm_billing_account_name']['dbType'] = 'varchar';
$dictionary['Quote']['fields']['denorm_billing_account_name']['vname'] = 'LBL_BILLING_ACCOUNT_NAME';
$dictionary['Quote']['fields']['denorm_billing_account_name']['len'] = '150';
$dictionary['Quote']['fields']['denorm_billing_account_name']['comment'] = 'Name of the Company';
$dictionary['Quote']['fields']['denorm_billing_account_name']['unified_search'] = true;
$dictionary['Quote']['fields']['denorm_billing_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Quote']['fields']['denorm_billing_account_name']['audited'] = true;
$dictionary['Quote']['fields']['denorm_billing_account_name']['required'] = false;
$dictionary['Quote']['fields']['denorm_billing_account_name']['importable'] = 'required';
$dictionary['Quote']['fields']['denorm_billing_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Quote']['fields']['denorm_billing_account_name']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['denorm_billing_account_name']['massupdate'] = false;
$dictionary['Quote']['fields']['denorm_billing_account_name']['comments'] = 'Name of the Company';
$dictionary['Quote']['fields']['denorm_billing_account_name']['duplicate_merge'] = 'enabled';
$dictionary['Quote']['fields']['denorm_billing_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['Quote']['fields']['denorm_billing_account_name']['calculated'] = false;
$dictionary['Quote']['fields']['denorm_billing_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Quote']['fields']['denorm_billing_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/quotes_accounts_1_Quotes.php

// created: 2023-01-12 19:38:14
$dictionary["Quote"]["fields"]["quotes_accounts_1"] = array (
  'name' => 'quotes_accounts_1',
  'type' => 'link',
  'relationship' => 'quotes_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_QUOTES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'quotes_accounts_1accounts_idb',
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_mark_quote_c.php

 // created: 2023-01-12 20:53:14
$dictionary['Quote']['fields']['mark_quote_c']['labelValue']='Mark Quote ';
$dictionary['Quote']['fields']['mark_quote_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['mark_quote_c']['enforced']='';
$dictionary['Quote']['fields']['mark_quote_c']['dependency']='';
$dictionary['Quote']['fields']['mark_quote_c']['required_formula']='';
$dictionary['Quote']['fields']['mark_quote_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_saved_by_portal_user.php

$dictionary['Quote']['fields']['saved_by_portal_user'] = array(
    'required'=> false,
    'source'=> 'non-db',
    'name' => 'saved_by_portal_user',
    'vname'=> 'LBL_SAVED_BY_PORTAL_USER',
    'type' => 'relate',
    'rname'=> 'name',
    'id_name'=> 'saved_by_portal_user_id',
    'isnull' => 'true',
    'table' => 'pu_portalusers',
    'module' => 'PU_PortalUsers',
);
$dictionary['Quote']['fields']['saved_by_portal_user_id'] = array(
    'name' => 'saved_by_portal_user_id',
    'rname'=> 'id',
    'vname'=> 'LBL_SAVED_BY_PORTAL_USER_ID',
    'type' => 'id',
    'isnull'=> 'true',
    'table' => 'pu_portalusers',
    'module' => 'PU_PortalUsers',
    'dbType'=> 'id',
    'reportable'=> false,
    'massupdate'=> false,
    'duplicate_merge'=> 'disabled',
);
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_quote_number_portal.php

 // created: 2023-01-12 21:53:31
$dictionary['Quote']['fields']['quote_number_portal']['name']='quote_number_portal';
$dictionary['Quote']['fields']['quote_number_portal']['label']='LBL_QUOTE_NUMBER_PORTAL';
$dictionary['Quote']['fields']['quote_number_portal']['type']='varchar';
$dictionary['Quote']['fields']['quote_number_portal']['len']='255';
$dictionary['Quote']['fields']['quote_number_portal']['audited']=false;
$dictionary['Quote']['fields']['quote_number_portal']['massupdate']=true;
$dictionary['Quote']['fields']['quote_number_portal']['hidemassupdate']=false;
$dictionary['Quote']['fields']['quote_number_portal']['duplicate_merge']='enabled';
$dictionary['Quote']['fields']['quote_number_portal']['duplicate_merge_dom_value']='1';
$dictionary['Quote']['fields']['quote_number_portal']['merge_filter']='disabled';
$dictionary['Quote']['fields']['quote_number_portal']['unified_search']=false;
$dictionary['Quote']['fields']['quote_number_portal']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['quote_number_portal']['calculated']=false;
$dictionary['Quote']['fields']['quote_number_portal']['vname']='LBL_QUOTE_NUMBER_PORTAL';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_product_category_id_c.php

 // created: 2023-01-16 13:37:03
$dictionary['Quote']['fields']['product_category_id_c']['labelValue']='Product Category ID';
$dictionary['Quote']['fields']['product_category_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['product_category_id_c']['enforced']='';
$dictionary['Quote']['fields']['product_category_id_c']['dependency']='';
$dictionary['Quote']['fields']['product_category_id_c']['required_formula']='';
$dictionary['Quote']['fields']['product_category_id_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_quote_submitted_by_c.php

 // created: 2023-01-16 13:37:52
$dictionary['Quote']['fields']['quote_submitted_by_c']['labelValue']='quote submitted by c';
$dictionary['Quote']['fields']['quote_submitted_by_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['quote_submitted_by_c']['enforced']='';
$dictionary['Quote']['fields']['quote_submitted_by_c']['dependency']='';
$dictionary['Quote']['fields']['quote_submitted_by_c']['required_formula']='';
$dictionary['Quote']['fields']['quote_submitted_by_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_comments_c.php

 // created: 2023-03-08 17:19:20
$dictionary['Quote']['fields']['comments_c']['labelValue']='Comments';
$dictionary['Quote']['fields']['comments_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Quote']['fields']['comments_c']['enforced']='';
$dictionary['Quote']['fields']['comments_c']['dependency']='';
$dictionary['Quote']['fields']['comments_c']['required_formula']='';
$dictionary['Quote']['fields']['comments_c']['readonly_formula']='';

 
?>
