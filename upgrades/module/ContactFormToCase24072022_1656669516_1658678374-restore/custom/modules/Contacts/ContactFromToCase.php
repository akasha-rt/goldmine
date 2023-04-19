<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class ContactFromToCase
    {
        function data_saving_to_cases($bean, $event, $arguments)
        {
            global $db;
            if (!empty($bean->id) && (!empty($bean->case_comments_c)|| !empty($bean->reason_for_contact_c)) && $bean->modified_user_id == '38ee82fe-9446-4b97-9ed1-3ae0c10f3fd6') {
                $case_bean = BeanFactory::newBean('Cases');
                $case_bean->name = $bean->name . ' - ' . $bean->date_modified;
                $case_bean->description = $bean->case_comments_c;
                $case_bean->source = 'Web';
                $case->type = $bean->reason_for_contact_c;
                $case->reason_for_contact_c = $bean->reason_for_contact_c;
                $case_bean->save();
                if ($bean->load_relationship('cases')) {
                    $bean->cases->add($case_bean);
                }
                $sql = "UPDATE contacts_cstm SET case_comments_c = '' WHERE id_c='" . $bean->id . "'";
                $db->query($sql);
            }
        }
    }