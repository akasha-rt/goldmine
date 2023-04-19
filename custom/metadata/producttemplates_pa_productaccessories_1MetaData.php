<?php
// created: 2022-09-07 12:34:47
$dictionary["producttemplates_pa_productaccessories_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'producttemplates_pa_productaccessories_1' => 
    array (
      'lhs_module' => 'ProductTemplates',
      'lhs_table' => 'product_templates',
      'lhs_key' => 'id',
      'rhs_module' => 'PA_ProductAccessories',
      'rhs_table' => 'pa_productaccessories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'producttemplates_pa_productaccessories_1_c',
      'join_key_lhs' => 'producttemplates_pa_productaccessories_1producttemplates_ida',
      'join_key_rhs' => 'productteme68cssories_idb',
    ),
  ),
  'table' => 'producttemplates_pa_productaccessories_1_c',
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
    'producttemplates_pa_productaccessories_1producttemplates_ida' => 
    array (
      'name' => 'producttemplates_pa_productaccessories_1producttemplates_ida',
      'type' => 'id',
    ),
    'productteme68cssories_idb' => 
    array (
      'name' => 'productteme68cssories_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_producttemplates_pa_productaccessories_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_producttemplates_pa_productaccessories_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'producttemplates_pa_productaccessories_1producttemplates_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_producttemplates_pa_productaccessories_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'productteme68cssories_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'producttemplates_pa_productaccessories_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'producttemplates_pa_productaccessories_1producttemplates_ida',
        1 => 'productteme68cssories_idb',
      ),
    ),
  ),
);