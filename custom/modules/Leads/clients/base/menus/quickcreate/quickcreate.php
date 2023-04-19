<?php
// created: 2022-12-15 14:28:48
$viewdefs['Leads']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_LEAD',
  'visible' => true,
  'order' => 0,
  'icon' => 'sicon-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'leads',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'leads',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'leads',
    ),
  ),
);