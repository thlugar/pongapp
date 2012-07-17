<?php
// created: 2012-07-17 11:05:44
$layout_defs["THHL_PartyAnimals"]["subpanel_setup"]['party_teams'] = array(
	'order' => 100,
	'module' => 'THHL_PartyTeams',
	'subpanel_name' => 'default',
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_THHL_PARTYANIMALS_THHL_PARTYTEAMS_1_FROM_THHL_PARTYTEAMS_TITLE',
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
