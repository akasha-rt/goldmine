<?php

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
