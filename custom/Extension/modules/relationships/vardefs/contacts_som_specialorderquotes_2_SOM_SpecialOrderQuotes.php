<?php
// created: 2019-07-29 16:25:14
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["contacts_som_specialorderquotes_2"] = array (
  'name' => 'contacts_som_specialorderquotes_2',
  'type' => 'link',
  'relationship' => 'contacts_som_specialorderquotes_2',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_2_FROM_SOM_SPECIALORDERQUOTES_TITLE',
  'id_name' => 'contacts_som_specialorderquotes_2contacts_ida',
  'link-type' => 'one',
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["contacts_som_specialorderquotes_2_name"] = array (
  'name' => 'contacts_som_specialorderquotes_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_2_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_som_specialorderquotes_2contacts_ida',
  'link' => 'contacts_som_specialorderquotes_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["contacts_som_specialorderquotes_2contacts_ida"] = array (
  'name' => 'contacts_som_specialorderquotes_2contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_2_FROM_SOM_SPECIALORDERQUOTES_TITLE_ID',
  'id_name' => 'contacts_som_specialorderquotes_2contacts_ida',
  'link' => 'contacts_som_specialorderquotes_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
