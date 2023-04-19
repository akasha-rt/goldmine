<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 

class after_save_logic extends SugarBean {
	
	function after_save_logic($bean, $event, $arguments)
	{
        global $sugar_config, $db ,$current_user;
		
		//$GLOBALS['log']->fatal("SalesmanFinder Logic fired off");
		$id = $bean->id;
		
		if($bean->country == 'United States' || $bean->country == 'Puerto Rico')
		{
			if(strlen($bean->name) < 5)
			{
				$bean->name = str_pad($bean->name, 5, "0", STR_PAD_LEFT);
			}
		}
		$name = $bean->name;
		
		if(strlen($bean->industrial_area) < 2)
		{
			$bean->industrial_area = str_pad($bean->industrial_area, 2, "0", STR_PAD_LEFT);
			
		}
		$industrial_area = $bean->industrial_area;
		
		if(strlen($bean->industrial_territory) < 2)
		{
			$bean->industrial_territory = str_pad($bean->industrial_territory, 2, "0", STR_PAD_LEFT);
			
		}
		$industrial_territory = $bean->industrial_territory;
		
		$bean->territory_c = "Territory " . $bean->industrial_area . "-" . $bean->industrial_territory;
		$territory_c = $bean->territory_c;
			
		if($_REQUEST['module'] == 'Import')
		{
			$db->query("UPDATE sf1_salesmanfinder SET name = '$name' WHERE id = '$id'");
			$db->query("UPDATE sf1_salesmanfinder SET industrial_area = '$industrial_area' WHERE id = '$id'");
			$db->query("UPDATE sf1_salesmanfinder SET industrial_territory = '$industrial_territory' WHERE id = '$id'");
			$db->query("UPDATE sf1_salesmanfinder_cstm SET territory_c = '$territory_c' WHERE id_c = '$id'");
		}
		else{$bean->save();}
    }
}
?>