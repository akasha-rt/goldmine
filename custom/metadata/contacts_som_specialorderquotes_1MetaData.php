<?php
// created: 2019-07-29 16:24:19
$dictionary["contacts_som_specialorderquotes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_som_specialorderquotes_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'SOM_SpecialOrderQuotes',
      'rhs_table' => 'som_specialorderquotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_som_specialorderquotes_1_c',
      'join_key_lhs' => 'contacts_som_specialorderquotes_1contacts_ida',
      'join_key_rhs' => 'contacts_som_specialorderquotes_1som_specialorderquotes_idb',
    ),
  ),
  'table' => 'contacts_som_specialorderquotes_1_c',
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
    'contacts_som_specialorderquotes_1contacts_ida' => 
    array (
      'name' => 'contacts_som_specialorderquotes_1contacts_ida',
      'type' => 'id',
    ),
    'contacts_som_specialorderquotes_1som_specialorderquotes_idb' => 
    array (
      'name' => 'contacts_som_specialorderquotes_1som_specialorderquotes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_contacts_som_specialorderquotes_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_contacts_som_specialorderquotes_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_som_specialorderquotes_1contacts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_contacts_som_specialorderquotes_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_som_specialorderquotes_1som_specialorderquotes_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'contacts_som_specialorderquotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_som_specialorderquotes_1som_specialorderquotes_idb',
      ),
    ),
  ),
);