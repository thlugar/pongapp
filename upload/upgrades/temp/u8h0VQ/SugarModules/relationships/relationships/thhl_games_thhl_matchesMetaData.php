<?php
// created: 2012-07-16 23:31:25
$dictionary["thhl_games_thhl_matches"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'thhl_games_thhl_matches' => 
    array (
      'lhs_module' => 'THHL_Games',
      'lhs_table' => 'thhl_games',
      'lhs_key' => 'id',
      'rhs_module' => 'THHL_Matches',
      'rhs_table' => 'thhl_matches',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thhl_games_thhl_matches_c',
      'join_key_lhs' => 'thhl_games_thhl_matchesthhl_games_ida',
      'join_key_rhs' => 'thhl_games_thhl_matchesthhl_matches_idb',
    ),
  ),
  'table' => 'thhl_games_thhl_matches_c',
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
      'name' => 'thhl_games_thhl_matchesthhl_games_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thhl_games_thhl_matchesthhl_matches_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thhl_games_thhl_matchesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thhl_games_thhl_matches_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'thhl_games_thhl_matchesthhl_games_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'thhl_games_thhl_matches_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thhl_games_thhl_matchesthhl_matches_idb',
      ),
    ),
  ),
);