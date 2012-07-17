<?php
// created: 2012-07-16 23:31:25
$layout_defs["THHL_Games"]["subpanel_setup"]['matches'] = array(
	'order' => 100,
	'module' => 'THHL_Matches',
	'subpanel_name' => 'default',
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_MATCHES_TITLE',
	'get_subpanel_data' => 'matches',
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
