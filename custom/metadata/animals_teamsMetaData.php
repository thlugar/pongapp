<?php
// created: 2012-07-17 11:05:44
$dictionary["animals_teams"] = array(
	'true_relationship_type' => 'many-to-many',
	'relationships' =>
	array(
		'animals_teams' =>
		array(
			'lhs_module' => 'THHL_PartyAnimals',
			'lhs_table' => 'thhl_partyanimals',
			'lhs_key' => 'id',
			'rhs_module' => 'THHL_PartyTeams',
			'rhs_table' => 'thhl_partyteams',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'animals_teams',
			'join_key_lhs' => 'animal_id',
			'join_key_rhs' => 'team_id',
		),
	),
	'table' => 'animals_teams',
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
			'name' => 'animal_id',
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
			'name' => 'animals_teamsspk',
			'type' => 'primary',
			'fields' =>
			array(
				0 => 'id',
			),
		),
		1 =>
		array(
			'name' => 'animals_teams_alt',
			'type' => 'alternate_key',
			'fields' =>
			array(
				0 => 'animal_id',
				1 => 'team_id',
			),
		),
	),
);