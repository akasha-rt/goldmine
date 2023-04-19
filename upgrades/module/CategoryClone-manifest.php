<?php
$manifest = array
(
	'key' => 7819621111452,
	'name' => 'Product Category Clone scheduler',
	'description' => 'Product Category Clone scheduler',
	'Author' => 'Whitecap Systems and Software consulting',
	'version' => '1.2',
	'is_uninstallable' => true,
	'published_date' => '2021-08-03 14:01:00',
	'type' => 'module',
	'acceptable_sugar_versions' =>
		array(
					'exact_matches' => array(
						
						'11.0.0', // Any 11.x Release
						
					)
				),
	'acceptable_sugar_flavors' => 
		array(
					'PRO',
					'ENT',
					'ULT'
				),
	'readme' => '',
	'icon' => '',
	'remove_tables' => '',
);

$installdefs['copy'] = array
(
	
	0 => array
			(
				'from' => '<basepath>/Files/cloneProductCategories.php',
				'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/cloneProductCategories.php',
			),
	1 => array
			(
				'from' => '<basepath>/Files/en_us.cloneProductCategories.php',
				'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.cloneProductCategories.php',
			),
	
	
);

					
					
	


?>
