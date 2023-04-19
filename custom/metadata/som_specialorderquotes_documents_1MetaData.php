<?php
// created: 2019-06-18 16:22:02
$dictionary["som_specialorderquotes_documents_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'som_specialorderquotes_documents_1' => 
    array (
      'lhs_module' => 'SOM_SpecialOrderQuotes',
      'lhs_table' => 'som_specialorderquotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'som_specialorderquotes_documents_1_c',
      'join_key_lhs' => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
      'join_key_rhs' => 'som_specialorderquotes_documents_1documents_idb',
    ),
  ),
  'table' => 'som_specialorderquotes_documents_1_c',
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
    'som_specialorderquotes_documents_1som_specialorderquotes_ida' => 
    array (
      'name' => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
      'type' => 'id',
    ),
    'som_specialorderquotes_documents_1documents_idb' => 
    array (
      'name' => 'som_specialorderquotes_documents_1documents_idb',
      'type' => 'id',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_som_specialorderquotes_documents_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_som_specialorderquotes_documents_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_som_specialorderquotes_documents_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'som_specialorderquotes_documents_1documents_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'som_specialorderquotes_documents_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'som_specialorderquotes_documents_1documents_idb',
      ),
    ),
  ),
);