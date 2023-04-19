<?php

    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'Save Data to Cases from Contact',

        //The PHP file where your class is located.
        'custom/modules/Contacts/ContactFromToCase.php',

        //The class the method is in.
        'ContactFromToCase',

        //The method to call.
        'data_saving_to_cases'
    );