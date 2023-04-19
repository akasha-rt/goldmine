<?php
	$job_strings[]= 'cloneProductCategories';
	
	function cloneProductCategories (){
		
        global $sugar_config , $db;
		$GLOBALS['log']->fatal('----->Job: cloneProductCategories - Scheduler fired');
		
		$sqlUpdate = "TRUNCATE TABLE pc_productcategoryclone";
		$result = $db->query($sqlUpdate);
		$sqlUpdate = "INSERT INTO pc_productcategoryclone (id, name, description, deleted, date_entered, date_modified, modified_user_id, created_by, list_order, assigned_user_id)  SELECT id, name, description, deleted, date_entered, date_modified, modified_user_id, created_by, list_order, assigned_user_id FROM product_categories";
		$result = $db->query($sqlUpdate);
		$db->query("UPDATE pc_productcategoryclone SET team_id = '1'");
		$db->query("UPDATE pc_productcategoryclone SET team_set_id = '1'");
		
		return true;
         
	}