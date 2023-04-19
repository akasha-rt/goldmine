<?php 
 class customLogicHook{
     function save_name_as_part_number($bean, $event, $arguments){
        if(empty($bean->name)){
            $bean->name = $bean->mft_part_num;
        }
     }
 }