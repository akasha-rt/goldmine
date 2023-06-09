<?php
// created: 2019-01-03 16:10:23
$dictionary["contacts_leads_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_leads_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_leads_1_c',
      'join_key_lhs' => 'contacts_leads_1contacts_ida',
      'join_key_rhs' => 'contacts_leads_1leads_idb',
    ),
  ),
  'table' => 'contacts_leads_1_c',
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
    'contacts_leads_1contacts_ida' => 
    array (
      'name' => 'contacts_leads_1contacts_ida',
      'type' => 'id',
    ),
    'contacts_leads_1leads_idb' => 
    array (
      'name' => 'contacts_leads_1leads_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_contacts_leads_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_contacts_leads_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_leads_1contacts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_contacts_leads_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_leads_1leads_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'contacts_leads_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_leads_1leads_idb',
      ),
    ),
  ),
);