<?php
// created: 2021-03-26 19:33:35
$dictionary["in_incentives_producttemplates"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'in_incentives_producttemplates' => 
    array (
      'lhs_module' => 'ProductTemplates',
      'lhs_table' => 'product_templates',
      'lhs_key' => 'id',
      'rhs_module' => 'IN_Incentives',
      'rhs_table' => 'in_incentives',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'in_incentives_producttemplates_c',
      'join_key_lhs' => 'in_incentives_producttemplatesproducttemplates_ida',
      'join_key_rhs' => 'in_incentives_producttemplatesin_incentives_idb',
    ),
  ),
  'table' => 'in_incentives_producttemplates_c',
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
    'in_incentives_producttemplatesproducttemplates_ida' => 
    array (
      'name' => 'in_incentives_producttemplatesproducttemplates_ida',
      'type' => 'id',
    ),
    'in_incentives_producttemplatesin_incentives_idb' => 
    array (
      'name' => 'in_incentives_producttemplatesin_incentives_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_in_incentives_producttemplates_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_in_incentives_producttemplates_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'in_incentives_producttemplatesproducttemplates_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_in_incentives_producttemplates_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'in_incentives_producttemplatesin_incentives_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'in_incentives_producttemplates_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'in_incentives_producttemplatesin_incentives_idb',
      ),
    ),
  ),
);