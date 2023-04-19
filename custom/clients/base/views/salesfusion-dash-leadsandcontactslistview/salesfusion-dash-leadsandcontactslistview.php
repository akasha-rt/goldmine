<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$viewdefs['base']['view']['salesfusion-dash-leadsandcontactslistview'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_DASHLET_LEADSANDCONTACTS_NAME',
            'name'  => 'LBL_DASHLET_LEADSANDCONTACTS_NAME',
            'description' => 'LBL_DASHLET_LEADSANDCONTACTS_DESCRIPTION',
            'config' => array(
                'limit' => '3',
            ),
            'preview' => array(
                'limit' => '3',
            ),            
        ),
    ),
    'config' => array(
        'fields' => array(            
        ),
    ),
);
