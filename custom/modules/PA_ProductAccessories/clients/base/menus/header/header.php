<?php
$module_name = 'PA_ProductAccessories';
    $viewdefs[$module_name]['base']['menu']['header'] = array(
    array(
        'route' => "#$moduleName/create",
        'label' => 'LNK_NEW_RECORD',
        'acl_action' => 'create',
        'acl_module' => $moduleName,
        'icon' => 'sicon-plus',
    ),
    array(
        'route' => "#$moduleName",
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => $moduleName,
        'icon' => 'sicon-list-view',
    ),
    array(
        'route'=>'#bwc/index.php?module=Import&action=Step1&import_module=PA_ProductAccessories&return_module=PA_ProductAccessories&return_action=index',
        'label' =>'Import Product Accessories',
        'acl_action' => 'create',
        'acl_module' => $module_name,
        'icon' => 'sicon-upload',
    ),
);
