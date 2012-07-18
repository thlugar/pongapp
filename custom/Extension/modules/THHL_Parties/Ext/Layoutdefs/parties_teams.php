<?php
// created: 2012-07-16 23:31:25
$layout_defs["THHL_Parties"]["subpanel_setup"]['party_teams'] = array(
	'order' => 100,
	'module' => 'THHL_PartyTeams',
	'subpanel_name' => 'default',
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_PARTY_TEAMS',
	'get_subpanel_data' => 'party_teams',
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
