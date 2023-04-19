<?php
// created: 2022-12-15 14:28:48
$viewdefs['Documents']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_DOCUMENT',
  'visible' => true,
  'order' => 8,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'documents',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'documents',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'documents',
    ),
    3 => 
    array (
      'module' => 'RevenueLineItems',
      'link' => 'documents',
    ),
  ),
);