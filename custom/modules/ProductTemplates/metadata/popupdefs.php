<?php
$popupMeta = array (
    'moduleMain' => 'ProductTemplates',
    'varName' => 'ProductTemplate',
    'orderBy' => 'producttemplates.name',
    'whereClauses' => array (
  'name' => 'producttemplates.name',
  'category_name' => 'producttemplates.category_name',
  'type_name' => 'producttemplates.type_name',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'category_name',
  2 => 'type_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => 10,
  ),
  'category_name' => 
  array (
    'name' => 'category_name',
    'width' => 10,
  ),
  'type_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TYPE',
    'id' => 'TYPE_ID',
    'width' => 10,
    'name' => 'type_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'TYPE_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_TYPE',
    'sortable' => true,
    'default' => true,
    'name' => 'type_name',
  ),
  'CATEGORY_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_CATEGORY',
    'sortable' => true,
    'default' => true,
    'name' => 'category_name',
  ),
  'STATUS' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'LIST_PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_LIST_PRICE',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
    'name' => 'list_price',
  ),
  'DISCOUNT_PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_DISCOUNT_PRICE',
    'currency_format' => true,
    'width' => 10,
    'default' => true,
    'name' => 'discount_price',
  ),
),
);
