<?php
// created: 2012-07-16 23:31:25
$dictionary["thhl_parties_thhl_games"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'thhl_parties_thhl_games' => 
    array (
      'lhs_module' => 'THHL_Parties',
      'lhs_table' => 'thhl_parties',
      'lhs_key' => 'id',
      'rhs_module' => 'THHL_Games',
      'rhs_table' => 'thhl_games',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thhl_parties_thhl_games_c',
      'join_key_lhs' => 'thhl_parties_thhl_gamesthhl_parties_ida',
      'join_key_rhs' => 'thhl_parties_thhl_gamesthhl_games_idb',
    ),
  ),
  'table' => 'thhl_parties_thhl_games_c',
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
      'name' => 'thhl_parties_thhl_gamesthhl_parties_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thhl_parties_thhl_gamesthhl_games_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thhl_parties_thhl_gamesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thhl_parties_thhl_games_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'thhl_parties_thhl_gamesthhl_parties_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'thhl_parties_thhl_games_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thhl_parties_thhl_gamesthhl_games_idb',
      ),
    ),
  ),
);