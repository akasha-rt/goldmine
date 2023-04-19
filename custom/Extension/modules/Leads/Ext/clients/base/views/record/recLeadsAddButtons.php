<?php

//module name
$GLOBALS['log']->info('Starting Extension code for Leads.... ');
$module = 'Leads';
$isPortal = false;

if(isset($_REQUEST['platform']) && $_REQUEST['platform'] == 'portal'){
	$isPortal = true;
}else{
	//buttons to append
	$addCustomButton = array(
		'type' => 'rowaction',
		'event' => 'button:custom_sf_iframebutton:click',
		'name' => 'custom_sf_iframebutton',
		'label' => 'Sugar Market',	    
		'css_class' => 'btn btn-inverse epi_salesfusion-right-button',
		'showOn' => 'view',
		);
}

$addHiddenButton = array(
	'name' => 'img-button',    
    'label' => '',
    'type' => 'img-button',
    'readonly' => true,
    'dismiss_label' => true,
);

//if the buttons are missing in our base modules metadata, include core buttons
if (!isset($viewdefs[$module]['base']['view']['record']['buttons']) && !$isPortal)
{
	$GLOBALS['log']->info('Install Marker 1');
    require_once('clients/base/views/record/record.php');
    $viewdefs[$module]['base']['view']['record']['buttons'] = $viewdefs['base']['view']['record']['buttons'];
    unset($viewdefs['base']);
}

if(!$isPortal){
	array_unshift($viewdefs[$module]['base']['view']['record']['buttons'],$addCustomButton);
}

if (!isset($viewdefs[$module]['base']['view']['record']['panels']))
{
	$GLOBALS['log']->info('Install Marker 2');
    require_once('clients/base/views/record/record.php');
    $viewdefs[$module]['base']['view']['record']['panels'] = $viewdefs['base']['view']['record']['panels'];
    unset($viewdefs['base']);
}

$foundPanelHeader = false;
$foundPanelHeaderIndex = false;
foreach($viewdefs[$module]['base']['view']['record']['panels'] as $k => $v)
{  
   	if ($viewdefs[$module]['base']['view']['record']['panels'][$k]['name'] == 'panel_header') {
		$GLOBALS['log']->info('Install Marker 3: '.$k);
   		$foundPanelHeader = true;
   		$foundPanelHeaderIndex = $k;
   		break;   //out of foreach
   	}
}

if(!$foundPanelHeader) {
	$GLOBALS['log']->info('Install Marker 4');
    require_once('clients/base/views/record/record.php');
	foreach($viewdefs['base']['view']['record']['panels'] as $k => $v) {
	   	if ($viewdefs['base']['view']['record']['panels'][$k]['name'] == 'panel_header') {
	   		array_push($viewdefs[$module]['base']['view']['record']['panels'], $viewdefs['base']['view']['record']['panels'][$k]);
	   		$foundPanelHeader = true;
	   		$foundPanelHeaderIndex = $k;
	   		break;
		}
	}
    unset($viewdefs['base']);
}
		
if ($foundPanelHeader) {
	$GLOBALS['log']->info('Install Marker 5');
	array_push($viewdefs[$module]['base']['view']['record']['panels'][$foundPanelHeaderIndex]['fields'], $addHiddenButton);
}


$GLOBALS['log']->info('After Sugar Market Install');


