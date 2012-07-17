<?php
// created: 2012-07-17 11:06:16
$dictionary["animals_parties"] = array(
	'true_relationship_type' => 'many-to-many',
	'relationships' =>
	array(
		'animals_parties' =>
		array(
			'lhs_module' => 'THHL_PartyAnimals',
			'lhs_table' => 'thhl_partyanimals',
			'lhs_key' => 'id',
			'rhs_module' => 'THHL_Parties',
			'rhs_table' => 'thhl_parties',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'animals_parties',
			'join_key_lhs' => 'animal_id',
			'join_key_rhs' => 'party_id',
		),
	),
	'table' => 'animals_parties',
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
			'name' => 'party_id',
			'type' => 'varchar',
			'len' => 36,
		),
	),
	'indices' =>
	array(
		0 =>
		array(
			'name' => 'animals_partiesspk',
			'type' => 'primary',
			'fields' =>
			array(
				0 => 'id',
			),
		),
		1 =>
		array(
			'name' => 'animals_parties_alt',
			'type' => 'alternate_key',
			'fields' =>
			array(
				0 => 'animal_id',
				1 => 'party_id',
			),
		),
	),
);