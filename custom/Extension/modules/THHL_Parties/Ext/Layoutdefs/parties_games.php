<?php
// created: 2012-07-16 23:31:25
$layout_defs["THHL_Parties"]["subpanel_setup"]['games'] = array(
	'order' => 100,
	'module' => 'THHL_Games',
	'subpanel_name' => 'default',
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_GAMES_TITLE',
	'get_subpanel_data' => 'games',
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
