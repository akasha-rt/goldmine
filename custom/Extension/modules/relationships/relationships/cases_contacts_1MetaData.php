<?php
// created: 2022-10-27 18:41:32
$dictionary["cases_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cases_contacts_1' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_contacts_1_c',
      'join_key_lhs' => 'cases_contacts_1cases_ida',
      'join_key_rhs' => 'cases_contacts_1contacts_idb',
    ),
  ),
  'table' => 'cases_contacts_1_c',
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
    'cases_contacts_1cases_ida' => 
    array (
      'name' => 'cases_contacts_1cases_ida',
      'type' => 'id',
    ),
    'cases_contacts_1contacts_idb' => 
    array (
      'name' => 'cases_contacts_1contacts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cases_contacts_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cases_contacts_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_contacts_1cases_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cases_contacts_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_contacts_1contacts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cases_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cases_contacts_1cases_ida',
        1 => 'cases_contacts_1contacts_idb',
      ),
    ),
  ),
);