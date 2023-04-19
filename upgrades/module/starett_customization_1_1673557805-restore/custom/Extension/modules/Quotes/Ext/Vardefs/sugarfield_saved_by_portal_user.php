<?php
$dictionary['Quote']['fields']['saved_by_portal_user'] = array(
    'required'=> false,
    'source'=> 'non-db',
    'name' => 'saved_by_portal_user',
    'vname'=> 'LBL_SAVED_BY_PORTAL_USER',
    'type' => 'relate',
    'rname'=> 'name',
    'id_name'=> 'saved_by_portal_user_id',
    'isnull' => 'true',
    'table' => 'pu_portalusers',
    'module' => 'PU_PortalUsers',
);
$dictionary['Quote']['fields']['saved_by_portal_user_id'] = array(
    'name' => 'saved_by_portal_user_id',
    'rname'=> 'id',
    'vname'=> 'LBL_SAVED_BY_PORTAL_USER_ID',
    'type' => 'id',
    'isnull'=> 'true',
    'table' => 'pu_portalusers',
    'module' => 'PU_PortalUsers',
    'dbType'=> 'id',
    'reportable'=> false,
    'massupdate'=> false,
    'duplicate_merge'=> 'disabled',
);