<?php
// created: 2012-07-17 11:09:57
$dictionary["games_teams"] = array(
	'true_relationship_type' => 'one-to-many',
	'relationships' =>
	array(
		'games_teams' =>
		array(
			'lhs_module' => 'THHL_Games',
			'lhs_table' => 'thhl_games',
			'lhs_key' => 'id',
			'rhs_module' => 'THHL_PartyTeams',
			'rhs_table' => 'thhl_partyteams',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'games_teams',
			'join_key_lhs' => 'game_id',
			'join_key_rhs' => 'team_id',
		),
	),
	'table' => 'games_teams',
	'fields' =>
	array(
		0 =>
		array(
			'name' => 'id',
			'type' => 'varchar',
			'len' => 36,
		),
		1 =>
		array(
			'name' => 'date_modified',
			'type' => 'datetime',
		),
		2 =>
		array(
			'name' => 'deleted',
			'type' => 'bool',
			'len' => '1',
			'default' => '0',
			'required' => true,
		),
		3 =>
		array(
			'name' => 'game_id',
			'type' => 'varchar',
			'len' => 36,
		),
		4 =>
		array(
			'name' => 'team_id',
			'type' => 'varchar',
			'len' => 36,
		),
	),
	'indices' =>
	array(
		0 =>
		array(
			'name' => 'games_teamsspk',
			'type' => 'primary',
			'fields' =>
			array(
				0 => 'id',
			),
		),
		1 =>
		array(
			'name' => 'games_teams_ida1',
			'type' => 'index',
			'fields' =>
			array(
				0 => 'game_id',
			),
		),
		2 =>
		array(
			'name' => 'games_teams_alt',
			'type' => 'alternate_key',
			'fields' =>
			array(
				0 => 'team_id',
			),
		),
	),
);