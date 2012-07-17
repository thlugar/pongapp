<?php
// created: 2012-07-17 11:05:44
$layout_defs["THHL_PartyTeams"]["subpanel_setup"]['animals'] = array(
	'order' => 100,
	'module' => 'THHL_PartyAnimals',
	'subpanel_name' => 'default',
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_THHL_PARTYANIMALS_THHL_PARTYTEAMS_1_FROM_THHL_PARTYANIMALS_TITLE',
	'get_subpanel_data' => 'animals',
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
