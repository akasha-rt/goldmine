<?php
$manifest = array
(
	'key' => 7819621111452,
	'name' => 'Coupon Code Logic Hook',
	'description' => 'Coupon Code Logic Hook',
	'Author' => 'Whitecap Systems and Software consulting',
	'version' => '1.0',
	'is_uninstallable' => true,
	'published_date' => '2021-03-30 14:01:00',
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
						'9\\.(.*?)\\.(.*?)', // Any 9.0 Release
						'10\\.(.*?)\\.(.*?)' // Any 10.0 Release
						
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
				'from' => '<basepath>/Files/logic_hooks.php',
				'to' => 'custom/Extension/modules/CC_Coupon_Codes/Ext/LogicHooks/logic_hooks.php',
			),
	1 => array
			(
				'from' => '<basepath>/Files/after_save.php',
				'to' => 'custom/modules/CC_Coupon_Codes/after_save.php',
			),
	
	
);

					
					
	


?>