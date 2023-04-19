<?php
 // created: 2022-06-11 03:11:02
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts']['name'] = 'sf_eventmanagement_contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts']['type'] = 'link';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts']['relationship'] = 'sf_eventmanagement_contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts']['source'] = 'non-db';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts']['vname'] = 'LBL_SF_EVENTMANAGEMENT_CONTACTS_FROM_CONTACTS_TITLE';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts']['id_name'] = 'sf_eventmanagement_contactscontacts_ida';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['name'] = 'sf_eventmanagement_contacts_name';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['type'] = 'relate';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['source'] = 'non-db';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['vname'] = 'LBL_SF_EVENTMANAGEMENT_CONTACTS_FROM_CONTACTS_TITLE';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['save'] = true;
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['id_name'] = 'sf_eventmanagement_contactscontacts_ida';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['link'] = 'sf_eventmanagement_contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['table'] = 'contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['module'] = 'Contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['rname'] = 'name';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['db_concat_fields'][0] = 'first_name';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contacts_name']['db_concat_fields'][1] = 'last_name';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['name'] = 'sf_eventmanagement_contactscontacts_ida';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['type'] = 'id';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['relationship'] = 'sf_eventmanagement_contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['source'] = 'non-db';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['reportable'] = false;
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['side'] = 'right';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['vname'] = 'LBL_SF_EVENTMANAGEMENT_CONTACTS_FROM_SF_EVENTMANAGEMENT_TITLE';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['link'] = 'sf_eventmanagement_contacts';
$dictionary['sf_EventManagement']['fields']['sf_eventmanagement_contactscontacts_ida']['rname'] = 'id';
