<?php
// created: 2012-07-17 11:05:44
$dictionary["thhl_partyanimals_thhl_partyteams_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'thhl_partyanimals_thhl_partyteams_1' => 
    array (
      'lhs_module' => 'THHL_PartyAnimals',
      'lhs_table' => 'thhl_partyanimals',
      'lhs_key' => 'id',
      'rhs_module' => 'THHL_PartyTeams',
      'rhs_table' => 'thhl_partyteams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thhl_partyanimals_thhl_partyteams_1_c',
      'join_key_lhs' => 'thhl_partyanimals_thhl_partyteams_1thhl_partyanimals_ida',
      'join_key_rhs' => 'thhl_partyanimals_thhl_partyteams_1thhl_partyteams_idb',
    ),
  ),
  'table' => 'thhl_partyanimals_thhl_partyteams_1_c',
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
      'name' => 'thhl_partyanimals_thhl_partyteams_1thhl_partyanimals_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thhl_partyanimals_thhl_partyteams_1thhl_partyteams_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thhl_partyanimals_thhl_partyteams_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thhl_partyanimals_thhl_partyteams_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thhl_partyanimals_thhl_partyteams_1thhl_partyanimals_ida',
        1 => 'thhl_partyanimals_thhl_partyteams_1thhl_partyteams_idb',
      ),
    ),
  ),
);