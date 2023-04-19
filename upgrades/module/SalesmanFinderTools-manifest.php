<?php
$manifest = array
(
	'key' => 781962114567,
	'name' => 'SalesmanFinder Tools',
	'description' => 'Admin Tools and Logic hooks for the SalesmanFinder Module',
	'Author' => 'Whitecap Systems and Software consulting',
	'version' => '1.0',
	'is_uninstallable' => true,
	'published_date' => '2018-07-25 17:33:00',
	'type' => 'module',
	'acceptable_sugar_versions' =>
		array(
					'regex_matches' => array(
						'7\\.7\\.(.*?)\\.(.*?)', // Any 7.7 Release
						'7\\.8\\.(.*?)\\.(.*?)', // Any 7.8 Release
						'7\\.9\\.(.*?)\\.(.*?)', // Any 7.9 Release
						'7\\.10\\.(.*?)\\.(.*?)', // Any 7.10 Release
						'7\\.11\\.(.*?)\\.(.*?)', // Any 7.11 Release
						'7\\.12\\.(.*?)\\.(.*?)', // Any 7.12 Release
						'8\\.0\\.(.*?)', // Any 8.0 Release
						'8\\.1\\.(.*?)' // Any 8.1 Release
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
				'from' => '<basepath>/Files/a_salesmanFinderAdmin.php',
				'to' => 'custom/Extension/modules/Administration/Ext/Administration/a_salesmanFinderAdmin.php',
			),
	1 => array
			(
				'from' => '<basepath>/Files/exportsalesmanfinder.php',
				'to' => 'custom/modules/SF1_SalesmanFinder/exportsalesmanfinder.php',
			),
	2 => array
			(
				'from' => '<basepath>/Files/logic_hooks.php',
				'to' => 'custom/modules/SF1_SalesmanFinder/logic_hooks.php',
			),
	3 => array
			(
				'from' => '<basepath>/Files/truncate_salesmanfinder.php',
				'to' => 'custom/modules/SF1_SalesmanFinder/truncate_salesmanfinder.php',
			),
	4 => array
			(
				'from' => '<basepath>/Files/after_save_logic.php',
				'to' => 'custom/modules/SF1_SalesmanFinder/after_save_logic.php',
			),
	5 => array
			(
				'from' => '<basepath>/Files/en_us.a_salesmanFinderAdmin.php',
				'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.a_salesmanFinderAdmin.php',
			),
	6 => array
			(
				'from' => '<basepath>/Files/prep_truncate.php',
				'to' => 'custom/modules/SF1_SalesmanFinder/prep_truncate.php',
			),
		
);

					
					
	


?>
