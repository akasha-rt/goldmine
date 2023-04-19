<?php
// created: 2021-03-30 16:23:09
$dictionary["pc_productcategoryclone_opportunities_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'pc_productcategoryclone_opportunities_1' => 
    array (
      'lhs_module' => 'PC_ProductCategoryClone',
      'lhs_table' => 'pc_productcategoryclone',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pc_productcategoryclone_opportunities_1_c',
      'join_key_lhs' => 'pc_product9b3eryclone_ida',
      'join_key_rhs' => 'pc_productcategoryclone_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'pc_productcategoryclone_opportunities_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'pc_product9b3eryclone_ida' => 
    array (
      'name' => 'pc_product9b3eryclone_ida',
      'type' => 'id',
    ),
    'pc_productcategoryclone_opportunities_1opportunities_idb' => 
    array (
      'name' => 'pc_productcategoryclone_opportunities_1opportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_pc_productcategoryclone_opportunities_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_pc_productcategoryclone_opportunities_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pc_product9b3eryclone_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_pc_productcategoryclone_opportunities_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pc_productcategoryclone_opportunities_1opportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'pc_productcategoryclone_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pc_productcategoryclone_opportunities_1opportunities_idb',
      ),
    ),
  ),
);