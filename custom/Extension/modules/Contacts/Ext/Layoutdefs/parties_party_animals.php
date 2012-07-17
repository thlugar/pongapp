<?php
// created: 2012-07-16 23:31:25
$layout_defs["Contacts"]["subpanel_setup"]['parties'] = array(
	'order' => 100,
	'module' => 'THHL_Parties',
	'subpanel_name' => 'default',
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_THHL_PARTIES_CONTACTS_FROM_THHL_PARTIES_TITLE',
	'get_subpanel_data' => 'parties',
	'top_buttons' =>
	array(
		0 =>
		array(
			'widget_class' => 'SubPanelTopButtonQuickCreate',
		),
		1 =>
		array(
			'widget_class' => 'SubPanelTopSelectButton',
			'mode' => 'MultiSelect',
		),
	),
);
?>