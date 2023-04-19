<?php
	if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 

class after_save extends SugarBean {
	
	function after_save($bean, $event, $arguments)
	{
		$code = $bean->coupon_code;
		if($code == '')
		{
			global $db,$current_user;
					
			$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	 
			function generate_string($input, $strength = 16) {
				$input_length = strlen($input);
				$random_string = '';
				for($i = 0; $i < $strength; $i++) {
					$random_character = $input[mt_rand(0, $input_length - 1)];
					$random_string .= $random_character;
				}
			 
				return $random_string;
			}
			 
			$randomCode = generate_string($permitted_chars, 8);
			
			$id = $bean->id;
			$db->query("UPDATE cc_coupon_codes SET coupon_code = '$randomCode' WHERE id = '$id'");
		}
		
       
    }
	
	 
}
?>