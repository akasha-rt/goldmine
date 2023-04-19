<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/PurchasedLineItems/Ext/Vardefs/rli_link_workflow.php

$dictionary['PurchasedLineItem']['fields']['revenuelineitem']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/PurchasedLineItems/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['PurchasedLineItem']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/PurchasedLineItems/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['PurchasedLineItem']['fields']['account_name']['is_denormalized'] = true;
$dictionary['PurchasedLineItem']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['len'] = '150';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['audited'] = true;
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['required'] = false;
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['massupdate'] = false;
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['duplicate_merge'] = 'enabled';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['PurchasedLineItem']['fields']['denorm_account_name']['studio'] = false;

?>
