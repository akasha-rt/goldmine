<?php
/*************************************
Project: Phone Formatting
Original Dev: Angel Magaña, June 2008
@2008-2010 Angel Magaña
cheleguanaco[at]cheleguanaco.com

Desc: Manifest file for SugarCRM module installer
 
The contents of this file are governed by the GNU General Public License (GPL).
A copy of said license is available here: http://www.gnu.org/copyleft/gpl.html
This code is provided AS IS and WITHOUT WARRANTY OF ANY KIND.
*************************************/

global $sugar_config;

$upload_dir = $sugar_config['uploads_dir'];
$manifest = array(
	'name'				=> 'Phone Formatting Module',
	'description'		=> 'Automatically Format Phone Numbers',
	'is_uninstallable'	=> true,
	'author'			=> 'Angel Magaña',
	'published_date'	=> 'July 17, 2010',
	'version'			=> '1.0.1',
	'type'				=> 'module',
	);
	
$installdefs = array(
	'id' 	=> 'Phone_Formatting',
	'mkdir' => array(
					array('path' => "custom/include/javascript"),
					array('path' => "custom/modules/Accounts/metadata"),
					array('path' => "custom/modules/Contacts/metadata"),
					array('path' => "custom/modules/Leads/metadata"),
				),
	'copy'	=> array(
					array(
						'from' 	=> '<basepath>/NewFiles/phone_format.js',
						'to'	=> 'custom/include/javascript/phone_format.js'
					),
					array(
						'from' 	=> '<basepath>/ModFiles/contacts_editviewdefs.php',
						'to'	=> 'custom/modules/Contacts/metadata/editviewdefs.php'
					),
					array(
						'from' 	=> '<basepath>/ModFiles/contacts_sidecreateviewdefs.php',
						'to'	=> 'modules/Contacts/metadata/sidecreateviewdefs.php'
					),
					array(
						'from' 	=> '<basepath>/ModFiles/accounts_editviewdefs.php',
						'to'	=> 'custom/modules/Accounts/metadata/editviewdefs.php'
					),
					array(
						'from' 	=> '<basepath>/ModFiles/accounts_sidecreateviewdefs.php',
						'to'	=> 'modules/Accounts/metadata/sidecreateviewdefs.php'
					),
					array(
						'from' 	=> '<basepath>/ModFiles/leads_editviewdefs.php',
						'to'	=> 'custom/modules/Leads/metadata/editviewdefs.php'
					),
					array(
						'from' 	=> '<basepath>/ModFiles/leads_sidecreateviewdefs.php',
						'to'	=> 'modules/Leads/metadata/sidecreateviewdefs.php'
					),					
				)
						
	);
			
?>