<?php
// created: 2012-07-17 11:06:16
$dictionary["thhl_partyanimals_thhl_parties_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'thhl_partyanimals_thhl_parties_1' => 
    array (
      'lhs_module' => 'THHL_PartyAnimals',
      'lhs_table' => 'thhl_partyanimals',
      'lhs_key' => 'id',
      'rhs_module' => 'THHL_Parties',
      'rhs_table' => 'thhl_parties',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thhl_partyanimals_thhl_parties_1_c',
      'join_key_lhs' => 'thhl_partyanimals_thhl_parties_1thhl_partyanimals_ida',
      'join_key_rhs' => 'thhl_partyanimals_thhl_parties_1thhl_parties_idb',
    ),
  ),
  'table' => 'thhl_partyanimals_thhl_parties_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'thhl_partyanimals_thhl_parties_1thhl_partyanimals_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thhl_partyanimals_thhl_parties_1thhl_parties_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thhl_partyanimals_thhl_parties_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thhl_partyanimals_thhl_parties_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thhl_partyanimals_thhl_parties_1thhl_partyanimals_ida',
        1 => 'thhl_partyanimals_thhl_parties_1thhl_parties_idb',
      ),
    ),
  ),
);