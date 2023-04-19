<?php
$GLOBALS['studioDefs']['ProductCategories'] = array(
	'LBL_DETAILVIEW'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/ProductCategories/DetailView.html',
				'php_file'=>'modules/ProductCategories/DetailView.php',
				'type'=>'DetailView',
				),
	'LBL_EDITVIEW'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/ProductCategories/EditView.html',
				'php_file'=>'modules/ProductCategories/EditView.php',
				'type'=>'EditView',
				),
	'LBL_LISTVIEW'=>array(
				'template'=>'listview',
				'meta_file'=>'modules/ProductCategories/listviewdefs.php',
				'type'=>'ListView',
				),
	'LBL_SEARCHFORM'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/ProductCategories/SearchForm.html',
				'php_file'=>'modules/ProductCategories/ListView.php',
				'type'=>'SearchForm',
				),

);
