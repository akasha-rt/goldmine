<?php
 
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
  'studio' => 'visible',
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