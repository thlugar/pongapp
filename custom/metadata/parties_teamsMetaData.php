<?php
// created: 2012-07-16 23:31:25
$dictionary["parties_teams"] = array(
	'true_relationship_type' => 'one-to-many',
	'relationships' =>
	array(
		'parties_teams' =>
		array(
			'lhs_module' => 'THHL_Parties',
			'lhs_table' => 'thhl_parties',
			'lhs_key' => 'id',
			'rhs_module' => 'THHL_PartyTeams',
			'rhs_table' => 'thhl_partyteams',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'parties_teams',
			'join_key_lhs' => 'party_id',
			'join_key_rhs' => 'party_team_id',
		),
	),
	'table' => 'parties_teams',
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
			'name' => 'party_id',
			'type' => 'varchar',
			'len' => 36,
		),
		4 =>
		array(
			'name' => 'party_team_id',
			'type' => 'varchar',
			'len' => 36,
		),
	),
	'indices' =>
	array(
		0 =>
		array(
			'name' => 'parties_teamsspk',
			'type' => 'primary',
			'fields' =>
			array(
				0 => 'id',
			),
		),
		1 =>
		array(
			'name' => 'parties_teams_ida1',
			'type' => 'index',
			'fields' =>
			array(
				0 => 'party_id',
			),
		),
		2 =>
		array(
			'name' => 'parties_teams_alt',
			'type' => 'alternate_key',
			'fields' =>
			array(
				0 => 'party_team_id',
			),
		),
	),
);