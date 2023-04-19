<?php
$manifest = array
(
	'key' => 7819,
	'name' => 'SalesmanFinder Logic Hooks',
	'description' => 'Logic hooks for Leads and Targets working with the SalesmanFinder and Global routing modules.',
	'Author' => 'Whitecap Systems and Software consulting',
	'version' => '2.7',
	'is_uninstallable' => true,
	'published_date' => '2021-01-12 20:33:00',
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
						'8\\.1\\.(.*?)', // Any 8.1 Release
						'8\\.2\\.(.*?)', // Any 8.2 Release
						'9\\.(.*?)\\.(.*?)', // Any 9.0 Release
						'10\\.(.*?)\\.(.*?)', // Any 10.0 Release
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
				'from' => '<basepath>/Leads/logic_hooks.php',
				'to' => 'custom/Extension/modules/Leads/Ext/LogicHooks/logic_hooks.php',
			),
	1 => array
			(
				'from' => '<basepath>/Leads/after_save_logic.php',
				'to' => 'custom/modules/Leads/after_save_logic.php',
			),
	2 => array
			(
				'from' => '<basepath>/Leads/logic_hooks.php',
				'to' => 'custom/Extension/modules/Prospects/Ext/LogicHooks/logic_hooks.php',
			),
	3 => array
			(
				'from' => '<basepath>/Targets/after_save_logic.php',
				'to' => 'custom/modules/Prospects/after_save_logic.php',
			),
		
);

					
					
	


?>
