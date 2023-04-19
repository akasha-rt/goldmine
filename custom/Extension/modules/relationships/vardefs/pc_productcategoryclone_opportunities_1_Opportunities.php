<?php
// created: 2021-03-30 16:23:09
$dictionary["Opportunity"]["fields"]["pc_productcategoryclone_opportunities_1"] = array (
  'name' => 'pc_productcategoryclone_opportunities_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_opportunities_1',
  'source' => 'non-db',
  'module' => 'PC_ProductCategoryClone',
  'bean_name' => 'PC_ProductCategoryClone',
  'side' => 'right',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'pc_product9b3eryclone_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["pc_productcategoryclone_opportunities_1_name"] = array (
  'name' => 'pc_productcategoryclone_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'save' => true,
  'id_name' => 'pc_product9b3eryclone_ida',
  'link' => 'pc_productcategoryclone_opportunities_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["pc_product9b3eryclone_ida"] = array (
  'name' => 'pc_product9b3eryclone_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'pc_product9b3eryclone_ida',
  'link' => 'pc_productcategoryclone_opportunities_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
