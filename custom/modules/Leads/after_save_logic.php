<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 

class after_save_logic extends SugarBean {
	
	function after_save_logic($bean, $event, $arguments)
	{
        global $sugar_config, $db ,$current_user;
		
		$GLOBALS['log']->fatal("Lead Status is: ". $bean->status);
		
		// Class Variables
			$id = $bean->id;
			$useSFinder = "No";
			$canada = "No";
			$email_array = array();
			$pmt_found = "No"; // Tracking to see if Precision Measuring tools is selected.  If not, assign record to regional manager. 
			$products = '';
			$lead_info = '';
			$qualification = $bean->lead_quality_c;
			
			$send_email = "Yes";
			if($qualification == "Unqualified" || $qualification == "Uninterested")
			{
				$send_email = "No";
			}
			
			// Lead Address info
			$lead_name = $bean->first_name . " " . $bean->last_name;
			$lead_company = "Company: " .$bean->account_name;
			$lead_email = $bean->email1;
			
			$lead_street = $bean->primary_address_street;
			$lead_city = $bean->primary_address_city;
			$lead_state = $bean->primary_address_state;
			$lead_country = $bean->primary_address_country;
			$lead_postalcode = $bean->primary_address_postalcode;
			$lead_phone = $bean->phone_work;
			$lead_country_lower = strtolower($lead_country);
			
			$lead_description = "Description: " . $bean->description;
			
			$lead_details = $lead_name . "\n" . $lead_company . "\n" . $lead_email . "\n" . "\n" . $lead_street . "\n" . $lead_city . ", " . $lead_state  . " " . $lead_postalcode . "\n" . $lead_country . "\n\nPhone: " . $lead_phone . "\n" . $lead_description;
			
			
			//Grab Lead Checkbox info
			$pmt_c = $bean->pmt_c; // Precision measuring tools
			$pgs_c = $bean->pgs_c;  // precision ground stock
			$metrology_equipment_c = $bean->metrology_equipment_c;
			$jst_c = $bean->jst_c;  // Job site and hand tools
			$saws_c = $bean->saws_c;
			$granite_c = $bean->granite_c;
			$testing_equipment_c = $bean->testing_equipment_c;  // Force measurement systems
			$laser_measurement_c = $bean->laser_measurement_c;
		
		if($bean->status == "New")
		{
			
			
			// Determine need for using SalesmanFinder Module for lookups.  
			if($lead_country_lower == "united states" || $lead_country_lower == "usa" || $lead_country_lower == "us" || $lead_country_lower == "u.s.a." || $lead_country_lower == "canada" || $lead_country_lower == "puerto rico")
			{
				$useSFinder = "Yes";
				if($lead_country_lower == "canada")
				{
					$canada = "Yes";
				}
				$GLOBALS['log']->fatal("Its in the US or Canada");
			}
			
			
			
			
			//Trim zip code if in the US to pull just the first 5 digits
			if($lead_country_lower == "united states" || $lead_country_lower == "usa" || $lead_country_lower == "u.s.a" || $lead_country_lower == "puerto rico")
			{
				$lead_postalcode = substr($lead_postalcode, 0, 5);
			}
			
			//$GLOBALS['log']->fatal("Lead Logic fired off - State: $lead_state Country: $lead_country Zip: $lead_postalcode");
			
			if ($useSFinder == "Yes")
			{
				if($canada == "No")
				{
					$query = $db->query("SELECT id FROM sf1_salesmanfinder WHERE name = '$lead_postalcode' and country = '$lead_country'");
					$GLOBALS['log']->fatal("Attempting to look in USA");
				}
				elseif($canada == "Yes")  // Modify the query for Canada
				{
					$query = $db->query("SELECT id FROM sf1_salesmanfinder WHERE name = '$lead_state' and country = '$lead_country'");
					$GLOBALS['log']->fatal("Attempting to look in Canada");
				}
				$queryRes = $db->fetchByAssoc($query);
				$SFinderID = $queryRes['id'];
				//$GLOBALS['log']->fatal("The SalesmanFinder ID is:  $SFinderID");
				
				if($SFinderID != '')
				{
						$SFinder = BeanFactory::getBean('SF1_SalesmanFinder', $SFinderID);
						$name = $SFinder->name;
						$team = $SFinder->territory_c;
						
						// Email checkboxes to see if an email needs to be sent
						$force_measurement_email_check = $SFinder->force_measurement_email_check;
						$granite_email_check = $SFinder->granite_email_check;
						$pmt_email_chec = $SFinder->pmt_email_chec;  // Precision Measuring Tools
						$power_tools_email_check = $SFinder->power_tools_email_check;
						$precision_ground_email_check = $SFinder->precision_ground_email_check;
						$regional_manager_email_check = $SFinder->regional_manager_email_check;
						$saws_email_check = $SFinder->saws_email_check;
						$metrology_email_check = $SFinder->metrology_email_check;
						$laser_measurement_check_c = $SFinder->laser_measurement_check_c;
						
						$teamQuery = $db->query("SELECT id FROM teams WHERE name = '$team' AND deleted = '0'");
						$teamQueryRes = $db->fetchByAssoc($teamQuery);
						$teamID = $teamQueryRes['id'];
						
						if($teamID != '')
						{
							
							$bean->load_relationship('teams');
							$bean->team_id = $teamID;
							$bean->teams->replace(array($teamID));
							
						}
						
						$GLOBALS['log']->fatal("The SalesmanFinder name is:  $name");
						
				
					
				
					//  Start logic to pull information if a product line is selected.  
					if($pmt_c == 'Yes' ) // Precision measuring tools
					{
						$products = "\n*Precision Measuring Tools";
						//$GLOBALS['log']->fatal("Precision measuring tools is checked off");
						$pmt_email = $SFinder->precision_measuring_email;
						if(!in_array($pmt_email, $email_array) && $pmt_email_chec == '1')
						{
							array_push($email_array,$pmt_email);
						}
						
						$query = $db->query("SELECT id FROM email_addresses WHERE email_address = '$pmt_email'");
						$queryRes = $db->fetchByAssoc($query);
						$pmt_emailID = $queryRes['id'];
						
						$query2 = $db->query("SELECT bean_id FROM email_addr_bean_rel WHERE email_address_id = '$pmt_emailID' AND bean_module = 'Users'");
						$queryRes2 = $db->fetchByAssoc($query2);
						$pmtUser = $queryRes2['bean_id'];
						
						if($pmtUser != '')
						{
							$pmt_found = "Yes";
							$bean->assigned_user_id = $pmtUser;
							
						}
						//$GLOBALS['log']->fatal("Email is: $pmt_email");
						
					}
					
					if($pgs_c == 'Yes') // precision ground stock
					{
						$products = $products . "\n*Precision Ground Stock";
						//$GLOBALS['log']->fatal("Precision ground stock is checked off");
						if($useSFinder =="Yes")
						{
							
							$pgs_email = $SFinder->precision_ground_email;
							if(!in_array($pgs_email, $email_array) && $precision_ground_email_check == '1')
							{
								array_push($email_array,$pgs_email);
							}
							//$GLOBALS['log']->fatal("Email is: $pgs_email");
						}
					}
					
					if($laser_measurement_c == 'Yes') // Laser Measurement
					{
						$products = $products . "\n*Laser Measurement";
						//$GLOBALS['log']->fatal("Precision ground stock is checked off");
						if($useSFinder =="Yes")
						{
							
							$laser_measurement_email_c = $SFinder->laser_measurement_email_c;
							if(!in_array($laser_measurement_email_c, $email_array) && $laser_measurement_email_check == '1')
							{
								array_push($email_array,$laser_measurement_email_c);
							}
							//$GLOBALS['log']->fatal("Email is: $pgs_email");
						}
					}
					
					if($metrology_equipment_c == 'Yes')
					{
						$products = $products . "\n*Metrology/Vision and Optical Systems";
						//$GLOBALS['log']->fatal("Lead Logic Metrology is checked off");
						$metrology_email = $SFinder->metrology_email;
						if(!in_array($metrology_email, $email_array) && $metrology_email_check == '1')
						{
							array_push($email_array,$metrology_email);
						}
						//$GLOBALS['log']->fatal("Email is: $metrology_email");
					}
					
					if($jst_c == 'Yes') // Job site and hand tools
					{
						$products = $products . "\n*Job Site and Hand Tools";
						//$GLOBALS['log']->fatal("Lead Logic Job site and hand tools is checked off");
						$jst_email = $SFinder->power_tools_email;
						if(!in_array($jst_email, $email_array) && $power_tools_email_check == '1')
						{
							array_push($email_array,$jst_email);
						}
						//$GLOBALS['log']->fatal("Email is: $jst_email");
					}
					
					if($saws_c == 'Yes')
					{
						$products = $products . "\n*Saws";
						//$GLOBALS['log']->fatal("Lead Logic saws is checked off");
						$saws_email = $SFinder->saws_email;
						if(!in_array($saws_email, $email_array) && $saws_email_check == '1')
						{
							array_push($email_array,$saws_email);
						}
						//$GLOBALS['log']->fatal("Email is: $saws_email");
					}
					
					if($granite_c == 'Yes')
					{
						$products = $products . "\n*Granite Stock";
						//$GLOBALS['log']->fatal("Lead Logic Granite is checked off");
						$granite_email = $SFinder->granite_email;
						if(!in_array($granite_email, $email_array) && $granite_email_check == '1')
						{
							array_push($email_array,$granite_email);
						}
						//$GLOBALS['log']->fatal("Email is: $granite_email");
					}
					
					if($testing_equipment_c == 'Yes') // Force measurement systems
					{
						$products = $products . "\n*Force Measurement Systems";
						//$GLOBALS['log']->fatal("Lead Logic Force measurement systems/Testing Equipment is checked off");
						$testing_email = $SFinder->force_measurement_email;
						if(!in_array($testing_email, $email_array) && $force_measurement_email_check == '1')
						{
							array_push($email_array,$testing_email);
						}
						//$GLOBALS['log']->fatal("Email is: $testing_email");
					}
					
					$regional_manager_email = $SFinder->regional_manager_email;
					
					
					if(!in_array($regional_manager_email, $email_array) && $regional_manager_email_check == '1')
					{
						array_push($email_array,$regional_manager_email);
					}
					
					if($pmt_found == 'No')
					{
						$query = $db->query("SELECT id FROM email_addresses WHERE email_address = '$regional_manager_email'");
						$queryRes = $db->fetchByAssoc($query);
						$manager_emailID = $queryRes['id'];
						
						$query2 = $db->query("SELECT bean_id FROM email_addr_bean_rel WHERE email_address_id = '$manager_emailID' AND bean_module = 'Users'");
						$queryRes2 = $db->fetchByAssoc($query2);
						$manager_ID = $queryRes2['bean_id'];
						if($manager_ID != '')
						{
							$bean->assigned_user_id = $manager_ID;
						}
						
						
						
					}
					
					//array_push($email_array, $pmt_found);
					//$GLOBALS['log']->fatal("PMT Found: $pmt_found");
					
					// Use this array to populate the TO: in Sugar PHP mailer.  
					foreach($email_array as $item)
					{
						$GLOBALS['log']->fatal("Email is: ". $item);
					}
					
					//*Start emailing users
					require_once('include/SugarPHPMailer.php');  
					$emailObj = new Email();  
					$defaults = $emailObj->getSystemDefaultEmail();  
					$mail = new SugarPHPMailer();  
					$mail->setMailerForSystem();  
					$mail->From = $defaults['email'];
					$mail->FromName = $defaults['name'];  
					//$mail->IsHTML(true);
					$mail->Subject = "A New Lead has been entered into the system for L.S. Starrett";  
					
					$mail->Body = "A new Lead has been entered into the L.S. Starrett system.
									\n". $lead_details .
									"\n\nIf you have access To Starrett's SugarCRM instance, you can view this Lead at the following link:
									\nhttps://starrettco.sugarondemand.com/#Leads/$bean->id
									\nThey are interested in the following product lines:" . $products;
					$mail->prepForOutbound();
					foreach($email_array as $item)
					{
						$mail->AddAddress($item);
					}
					  
					if($send_email == "Yes")
					{				
						$mail->Send();
					}
				
				}
				else
				{
					$GLOBALS['log']->fatal("Could not find a SalesmanFinder Record for $id.  Moving on");
					$GLOBALS['log']->fatal("  useSFinder value is $useSFinder");
					$GLOBALS['log']->fatal("         Postal code is $lead_postalcode");
					$GLOBALS['log']->fatal("                 Country is $lead_country_lower");
					
					
					
				}
				
			}  // End of "Use SalesmanFinder Logic
			
			// Start Logic for Global routing here.
			
			if ($useSFinder == "No")
			{
				// Start Building products string
				if($pmt_c == 'Yes' ) // Precision measuring tools
				{
					$products = "\n*Precision Measuring Tools";
				}
				
				if($pgs_c == 'Yes') // precision ground stock
				{
					$products = $products . "\n*Precision Ground Stock";
				}
				
				if($metrology_equipment_c == 'Yes')
				{
					$products = $products . "\n*Metrology/Vision and Optical Systems";
				}
				
				if($jst_c == 'Yes') // Job site and hand tools
				{
					$products = $products . "\n*Job Site and Hand Tools";
				}
				
				if($saws_c == 'Yes')
				{
					$products = $products . "\n*Saws";
				}
				
				if($granite_c == 'Yes')
				{
					$products = $products . "\n*Granite Stock";
				}
				
				if($testing_equipment_c == 'Yes') // Force measurement systems
				{
					$products = $products . "\n*Force Measurement Systems";
				}
				
				if($laser_measurement_c == 'Yes') 
				{
					$products = $products . "\n*Laser Measurement";
				}
				
				// End Products String
				
				
				
				$query = $db->query("SELECT * FROM fl_foreignleadsrouting WHERE name = '$lead_country'");
				$queryRes = $db->fetchByAssoc($query);
				$foreignID = $queryRes['id'];
				$foreignEmail = $queryRes['email_address'];
				if($foreignID !='' && strpos($foreignEmail, '@') !==FALSE)
				{
					$foreignCountry = $queryRes['name'];
					$foreignUser = $queryRes['assigned_user_id'];
					
					//$GLOBALS['log']->fatal("Foreign Lead Detected: $foreignCountry - ID - $foreignID - User ID = $foreignUser - Email Address = $foreignEmail");
					
					//assign user of Foreign Lead to the actual Lead.  
					$bean->assigned_user_id = $foreignUser;
					
					// Assign international Team
					$teamQuery = $db->query("SELECT id FROM teams WHERE name = 'International' AND deleted = '0'");
					$teamQueryRes = $db->fetchByAssoc($teamQuery);
					$teamID = $teamQueryRes['id'];
						
					if($teamID != '')
					{
							
						$bean->load_relationship('teams');
						$bean->team_id = $teamID;
						$bean->teams->replace(array($teamID));
							
					}
					
					require_once('include/SugarPHPMailer.php');  
					$emailObj = new Email();  
					$defaults = $emailObj->getSystemDefaultEmail();  
					$mail = new SugarPHPMailer();  
					$mail->setMailerForSystem();  
					$mail->From = $defaults['email'];
					$mail->FromName = $defaults['name'];  
					//$mail->IsHTML(true);
					$mail->Subject = "A New Lead has been entered into the system for L.S. Starrett";  
					
					$mail->Body = "A new Lead has been entered into the L.S. Starrett system.
									\n". $lead_details .
									"\n\nIf you have access To Starrett's SugarCRM instance, you can view this Lead at the following link:
									\nhttps://starrettco.sugarondemand.com/#Leads/$bean->id
									\nThey are interested in the following product lines:" . $products;
					$mail->prepForOutbound();
					
					$mail->AddAddress($foreignEmail);
					
					  
					if($send_email == "Yes")
					{				
						$mail->Send();
					}
				}
				
				if($foreignID == '' || strpos($foreignEmail, '@') ===FALSE)
				{
					require_once('include/SugarPHPMailer.php');  
					$emailObj = new Email();  
					$defaults = $emailObj->getSystemDefaultEmail();  
					$mail = new SugarPHPMailer();  
					$mail->setMailerForSystem();  
					$mail->From = $defaults['email'];
					$mail->FromName = $defaults['name'];  
					//$mail->IsHTML(true);
					$mail->Subject = "A New Lead has been entered into the system for L.S. Starrett";  
					
					$mail->Body = "A new Lead has been entered into the L.S. Starrett system but routing info was not found in the SalesmanFinder or Global Routing.
									\n". $lead_details .
									"\n\nYou can view this Lead at the following link:
									\nhttps://starrettco.sugarondemand.com/#Leads/$bean->id";
					$mail->prepForOutbound();
					
					$mail->AddAddress("tfleck@starrett.com");
					
					  
					if($send_email == "Yes")
					{				
						$mail->Send();
					}
				}
				
			}
			
			
			
			// This may not be the best place for this.  Revisit for international.  
				$bean->status = "assigned";
				$bean->save();
		}
		// need to add check for converted status here
		if($bean->status == "convert" && $bean->dist_email_sent_c == '0')
		{
			$notify_dist_c = $bean->notify_dist_c;
			if($notify_dist_c == "Yes")
			{
				$lead_id = $bean->id;
				$GLOBALS['log']->fatal("The Lead ID is $lead_id");
				$distQuery = $db->query("SELECT contacts_leads_1contacts_ida from contacts_leads_1_c WHERE contacts_leads_1leads_idb = '$lead_id' AND deleted = '0'");
				$distRes = $db->fetchByAssoc($distQuery);
				$distContact = $distRes['contacts_leads_1contacts_ida'];
				$db->query("UPDATE leads_cstm SET dist_email_sent_c = '1' WHERE id_c = '$lead_id'");
				
				
				$GLOBALS['log']->fatal("The Distributor contact ID is $distContact");
				if($distContact != '')
				{
					$contact = new Contact();
					$contact->retrieve($distContact);
					$contact_email = $contact->email1;
					$GLOBALS['log']->fatal("The email address for the distributor contact is $contact_email");
					if($contact_email !='')
					{
						// Start Building products string
						if($pmt_c == 'Yes' ) // Precision measuring tools
						{
							$products = "\n*Precision Measuring Tools";
						}
						
						if($pgs_c == 'Yes') // precision ground stock
						{
							$products = $products . "\n*Precision Ground Stock";
						}
						
						if($metrology_equipment_c == 'Yes')
						{
							$products = $products . "\n*Metrology/Vision and Optical Systems";
						}
						
						if($jst_c == 'Yes') // Job site and hand tools
						{
							$products = $products . "\n*Job Site and Hand Tools";
						}
						
						if($saws_c == 'Yes')
						{
							$products = $products . "\n*Saws";
						}
						
						if($granite_c == 'Yes')
						{
							$products = $products . "\n*Granite Stock";
						}
						
						if($testing_equipment_c == 'Yes') // Force measurement systems
						{
							$products = $products . "\n*Force Measurement Systems";
						}
						
						if($laser_measurement_c == 'Yes') 
						{
							$products = $products . "\n*Laser Measurement";
						}
						
						// End Products String
						
						require_once('include/SugarPHPMailer.php');  
						$emailObj = new Email();  
						$defaults = $emailObj->getSystemDefaultEmail();  
						$mail = new SugarPHPMailer();  
						$mail->setMailerForSystem();  
						$mail->From = $defaults['email'];
						$mail->FromName = $defaults['name'];  
						//$mail->IsHTML(true);
						$mail->Subject = "A New Lead has been entered into the system for L.S. Starrett";  
						$email_body = "A new Lead has been entered into the L.S. Starrett system.
										\n". $lead_details .
										"\n\nIf you have access To Starrett's SugarCRM instance, you can view this Lead at the following link:
										\nhttps://starrettco.sugarondemand.com/#Leads/$bean->id
										\nThey are interested in the following product lines:" . $products;
						$mail->Body = "A new Lead has been entered into the L.S. Starrett system.
										\n". $lead_details .
										"\n\nIf you have access To Starrett's SugarCRM instance, you can view this Lead at the following link:
										\nhttps://starrettco.sugarondemand.com/#Leads/$bean->id
										\nThey are interested in the following product lines:" . $products;
						$GLOBALS['log']->fatal("$email_body");
						$mail->prepForOutbound();
						$mail->AddAddress($contact_email);
						
						if($send_email == "Yes")
						{				
							$mail->Send();
						}
						
						
					
						
					}
				}
			}
		}
    }
}
?>