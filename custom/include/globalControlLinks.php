<?php

global $app_strings, $current_user, $sugar_config;

$global_control_links['developer'] = array(
	'linkinfo' => array(
		'Repair' => 'index.php?module=Administration&action=repair'
	),
	'submenu' => ''
);

$global_control_links['studio'] = array(
	'linkinfo' => array(
		'Studio' => 'index.php?module=ModuleBuilder&action=index&type=studio#mbContent=module%3DModuleBuilder%26action%3Dwizard'
	),
	'submenu' => ''
);

?>
