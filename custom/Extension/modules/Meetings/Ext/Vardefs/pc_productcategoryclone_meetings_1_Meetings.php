<?php
// created: 2021-03-30 16:00:24
$dictionary["Meeting"]["fields"]["pc_productcategoryclone_meetings_1"] = array (
  'name' => 'pc_productcategoryclone_meetings_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_meetings_1',
  'source' => 'non-db',
  'module' => 'PC_ProductCategoryClone',
  'bean_name' => 'PC_ProductCategoryClone',
  'side' => 'right',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link-type' => 'one',
);
$dictionary["Meeting"]["fields"]["pc_productcategoryclone_meetings_1_name"] = array (
  'name' => 'pc_productcategoryclone_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'save' => true,
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link' => 'pc_productcategoryclone_meetings_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["pc_productcategoryclone_meetings_1pc_productcategoryclone_ida"] = array (
  'name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link' => 'pc_productcategoryclone_meetings_1',
  'table' => 'pc_productcategoryclone',
  'module' => 'PC_ProductCategoryClone',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
