<?php
// created: 2021-03-30 15:29:52
$dictionary["IN_Incentives"]["fields"]["pc_productcategoryclone_in_incentives_1"] = array (
  'name' => 'pc_productcategoryclone_in_incentives_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_in_incentives_1',
  'source' => 'non-db',
  'module' => 'PC_ProductCategoryClone',
  'bean_name' => 'PC_ProductCategoryClone',
  'side' => 'right',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'pc_productcd98ryclone_ida',
  'link-type' => 'one',
);
$dictionary["IN_Incentives"]["fields"]["pc_productcategoryclone_in_incentives_1_name"] = array (
  'name' => 'pc_productcategoryclone_in_incentives_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'save' => true,
  'id_name' => 'pc_productcd98ryclone_ida',
  'link' => 'pc_productcategoryclone_in_incentives_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'name',
);
$dictionary["IN_Incentives"]["fields"]["pc_productcd98ryclone_ida"] = array (
  'name' => 'pc_productcd98ryclone_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_IN_INCENTIVES_TITLE_ID',
  'id_name' => 'pc_productcd98ryclone_ida',
  'link' => 'pc_productcategoryclone_in_incentives_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
