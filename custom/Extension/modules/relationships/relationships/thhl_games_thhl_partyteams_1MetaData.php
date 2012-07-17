<?php
// created: 2012-07-17 11:09:57
$dictionary["thhl_games_thhl_partyteams_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'thhl_games_thhl_partyteams_1' => 
    array (
      'lhs_module' => 'THHL_Games',
      'lhs_table' => 'thhl_games',
      'lhs_key' => 'id',
      'rhs_module' => 'THHL_PartyTeams',
      'rhs_table' => 'thhl_partyteams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thhl_games_thhl_partyteams_1_c',
      'join_key_lhs' => 'thhl_games_thhl_partyteams_1thhl_games_ida',
      'join_key_rhs' => 'thhl_games_thhl_partyteams_1thhl_partyteams_idb',
    ),
  ),
  'table' => 'thhl_games_thhl_partyteams_1_c',
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
      'name' => 'thhl_games_thhl_partyteams_1thhl_games_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thhl_games_thhl_partyteams_1thhl_partyteams_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thhl_games_thhl_partyteams_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thhl_games_thhl_partyteams_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'thhl_games_thhl_partyteams_1thhl_games_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'thhl_games_thhl_partyteams_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thhl_games_thhl_partyteams_1thhl_partyteams_idb',
      ),
    ),
  ),
);