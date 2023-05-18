<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * processRecord Api Call
 */

class processRecordApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'process_record' => array(
                'reqType' => 'POST',
                'noLoginRequired' => TRUE,
                'path' => array('processRecordApi', 'processRecord'),
                'pathVars' => array(''),
                'method' => 'processRecord',
                'shortHelp' => 'Get data from SugarCRM',
            ),
        );
    }

    /**
     * processRecord Api Call
     * @param ServiceBase $api
     * @param array $args
     * @return array
     */
    public function processRecord(ServiceBase $api, array $args)
    {
        global $db;
        $table = $args['table'];

        if(!empty($table) && !empty($args['data'])){
            $column_names = array();
            $column_values = array();

            foreach($args['data'] as $record){
                foreach($record as $key => $val){
                    $column_names[] = $key;
                    $column_values[] = $val;
                }
                $column_names = implode(", ", $column_names);
                $column_values = implode('", "', $column_values);
                $column_values = '"' . $column_values . '"';
                $query = "INSERT INTO $table ($column_names) VALUES ($column_values)";


                $GLOBALS['log']->fatal($query);
                $db->query($query);
                $column_names = array();
                $column_values = array();
            }
        }
    }
}
