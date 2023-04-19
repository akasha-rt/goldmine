<?php
// created: 2021-06-30 14:23:01
$dictionary["tasks_documents_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tasks_documents_1' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tasks_documents_1_c',
      'join_key_lhs' => 'tasks_documents_1tasks_ida',
      'join_key_rhs' => 'tasks_documents_1documents_idb',
    ),
  ),
  'table' => 'tasks_documents_1_c',
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
    'tasks_documents_1tasks_ida' => 
    array (
      'name' => 'tasks_documents_1tasks_ida',
      'type' => 'id',
    ),
    'tasks_documents_1documents_idb' => 
    array (
      'name' => 'tasks_documents_1documents_idb',
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
      'name' => 'idx_tasks_documents_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_tasks_documents_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tasks_documents_1tasks_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_tasks_documents_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tasks_documents_1documents_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'tasks_documents_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tasks_documents_1documents_idb',
      ),
    ),
  ),
);