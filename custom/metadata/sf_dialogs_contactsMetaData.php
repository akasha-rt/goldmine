<?php
// created: 2012-12-12 16:37:20
$dictionary["sf_dialogs_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sf_dialogs_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'sf_Dialogs',
      'rhs_table' => 'sf_dialogs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sf_dialogs_contacts_c',
      'join_key_lhs' => 'sf_dialogs_contactscontacts_ida',
      'join_key_rhs' => 'sf_dialogs_contactssf_dialogs_idb',
    ),
  ),
  'table' => 'sf_dialogs_contacts_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
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
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'sf_dialogs_contactscontacts_ida' => 
    array (
      'name' => 'sf_dialogs_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'sf_dialogs_contactssf_dialogs_idb' => 
    array (
      'name' => 'sf_dialogs_contactssf_dialogs_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sf_dialogs_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sf_dialogs_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sf_dialogs_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sf_dialogs_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sf_dialogs_contactssf_dialogs_idb',
      ),
    ),
  ),
);