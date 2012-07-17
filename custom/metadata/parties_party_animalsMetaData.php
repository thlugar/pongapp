<?php
// created: 2012-07-16 23:31:25
$dictionary["parties_party_animals"] = array(
	'true_relationship_type' => 'many-to-many',
	'relationships' =>
	array(
		'parties_party_animals' =>
		array(
			'lhs_module' => 'THHL_Parties',
			'lhs_table' => 'thhl_parties',
			'lhs_key' => 'id',
			'rhs_module' => 'Contacts',
			'rhs_table' => 'contacts',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'parties_party_animals',
			'join_key_lhs' => 'party_id',
			'join_key_rhs' => 'party_animal_id',
		),
	),
	'table' => 'parties_party_animals',
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
			'name' => 'party_animal_id',
			'type' => 'varchar',
			'len' => 36,
		),
	),
	'indices' =>
	array(
		0 =>
		array(
			'name' => 'parties_party_animalsspk',
			'type' => 'primary',
			'fields' =>
			array(
				0 => 'id',
			),
		),
		1 =>
		array(
			'name' => 'parties_party_animals_alt',
			'type' => 'alternate_key',
			'fields' =>
			array(
				0 => 'party_id',
				1 => 'party_animal_id',
			),
		),
	),
);