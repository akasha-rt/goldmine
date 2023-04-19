<?php
$manifest = array
(
	'key' => 78196212,
	'name' => 'Prospects Product Grouping fields',
	'description' => 'Product grouping fields for Prospects.  Removing this package will cause loss of data.',
	'Author' => 'Whitecap Systems and Software consulting',
	'version' => '1.0',
	'is_uninstallable' => true,
	'published_date' => '2018-11-25 12:33:00',
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
						'8\\.2\\.(.*?)' // Any 8.1 Release
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

$installdefs = array(
    'id' => 'package_1341607504',
    'language' => array(
        array(
            'from' => '<basepath>/Files/en_us.lang.php',
            'to_module' => 'Prospects',
            'language' => 'en_us'
        ),
    ),
    'custom_fields' => array(
        //DropDown
        array(
            'name' => 'services_c',
            'label' => 'LABEL_SERVICES_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($metrology_equipment_c,"Yes")'
        ),
		array(
            'name' => 'raw_material_c',
            'label' => 'LABEL_RAW_MATERIAL_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($saws_c,"Yes")'
        ),
		array(
            'name' => 'm1_oil_c',
            'label' => 'LABEL_M1_OIL_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($jst_c,"Yes")'
        ),
		array(
            'name' => 'material_testing_c',
            'label' => 'LABEL_MATERIAL_TESTING_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($testing_equipment_c,"Yes")'
        ),
		array(
            'name' => 'optical_systems_c',
            'label' => 'LABEL_OPTICAL_SYSTEMS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($metrology_equipment_c,"Yes")'
        ),
		array(
            'name' => 'welding_center_c',
            'label' => 'LABEL_WELDING_CENTER_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($saws_c,"Yes")'
        ),
		array(
            'name' => 'pmt_c',
            'label' => 'LABEL_PMT_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'granite_c',
            'label' => 'LABEL_GRANITE_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'vision_systems_c',
            'label' => 'LABEL_VISION_SYSTEMS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($metrology_equipment_c,"Yes")'
        ),
		array(
            'name' => 'special_gage_c',
            'label' => 'LABEL_SPECIAL_GAGE_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($pmt_c,"Yes")'
        ),
		array(
            'name' => 'gage_blocks_c',
            'label' => 'LABEL_GAGE_BLOCKS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($pmt_c,"Yes")'
        ),
		array(
            'name' => 'saws_c',
            'label' => 'LABEL_SAWS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'testing_equipment_c',
            'label' => 'LABEL_TESTING_EQUIPMENT_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'laser_measurement_c',
            'label' => 'LABEL_LASER_MEASUREMENT_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($metrology_equipment_c,"Yes")'
        ),
		array(
            'name' => 'pta_and_hand_saw_blades_c',
            'label' => 'LABEL_PTA_AND_HAND_SAW_BLADES_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($saws_c,"Yes")'
        ),
		array(
            'name' => 'flat_stock_c',
            'label' => 'LABEL_FLAT_STOCK_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($pgs_c,"Yes")'
        ),
		array(
            'name' => 'drill_rod_c',
            'label' => 'LABEL_DRILL_ROD_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($pgs_c,"Yes")'
        ),
		array(
            'name' => 'hand_held_force_gages_c',
            'label' => 'LABEL_HAND_HELD_FORCE_GAGES_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($testing_equipment_c,"Yes")'
        ),
		array(
            'name' => 'pgs_c',
            'label' => 'LABEL_PGS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'band_saws_c',
            'label' => 'LABEL_BAND_SAWS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($saws_c,"Yes")'
        ),
		array(
            'name' => 'hand_tools_c',
            'label' => 'LABEL_HAND_TOOLS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($jst_c,"Yes")'
        ),
		array(
            'name' => 'surface_plates_c',
            'label' => 'LABEL_SURFACE_PLATES_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($granite_c,"Yes")'
        ),
		array(
            'name' => 'metrology_equipment_c',
            'label' => 'LABEL_METROLOGY_EQUIPMENT_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'band_saw_machines_c',
            'label' => 'LABEL_BAND_SAW_MACHINES_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($saws_c,"Yes")'
        ),
		array(
            'name' => 'pht_c',
            'label' => 'LABEL_PHT_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($pmt_c,"Yes")'
        ),
		array(
            'name' => 'jst_c',
            'label' => 'LABEL_JST_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			
        ),
		array(
            'name' => 'force_measurement_c',
            'label' => 'LABEL_FORCE_MEASUREMENT_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($testing_equipment_c,"Yes")'
        ),
		array(
            'name' => 'custom_granite_solutions_c',
            'label' => 'LABEL_CUSTOM_GRANITE_SOLUTIONS_C',
            'type' => 'enum',
            'module' => 'Prospects',
            'help' => '',
            'comment' => '',
            'ext1' => 'a_ProductGroup_list', //maps to options - specify list name
            'default_value' => 'Unknown', //key of entry in specified list
            'mass_update' => true, // true or false
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            'duplicate_merge' => false, // true or false
			'dependency' => 'equal($granite_c,"Yes")'
        ),
        
    ),
);


					
					
	


?>
