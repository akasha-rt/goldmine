<?php

// 'account_name'
$dictionary['Contact']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Contact']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Contact']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Contact']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Contact']['fields']['denorm_account_name']['len'] = '150';
$dictionary['Contact']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Contact']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['required'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Contact']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['denorm_account_name']['massupdate'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_merge'] = 'enabled';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['Contact']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Contact']['fields']['denorm_account_name']['studio'] = false;
