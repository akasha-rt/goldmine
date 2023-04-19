<?php
$hook_array['before_save'][] = Array(
    99, 
    'Save product name as part name if its name is empty', 
    'custom/modules/Products/customLogicHook.php', 
    'customLogicHook', 
    'save_name_as_part_number'
);
