<?php
// created: 2012-07-16 23:31:25
$dictionary["THHL_Matches"]["fields"]["thhl_games_thhl_matches"] = array (
  'name' => 'thhl_games_thhl_matches',
  'type' => 'link',
  'relationship' => 'thhl_games_thhl_matches',
  'source' => 'non-db',
  'vname' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_GAMES_TITLE',
  'id_name' => 'thhl_games_thhl_matchesthhl_games_ida',
);
$dictionary["THHL_Matches"]["fields"]["thhl_games_thhl_matches_name"] = array (
  'name' => 'thhl_games_thhl_matches_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_GAMES_TITLE',
  'save' => true,
  'id_name' => 'thhl_games_thhl_matchesthhl_games_ida',
  'link' => 'thhl_games_thhl_matches',
  'table' => 'thhl_games',
  'module' => 'THHL_Games',
  'rname' => 'name',
);
$dictionary["THHL_Matches"]["fields"]["thhl_games_thhl_matchesthhl_games_ida"] = array (
  'name' => 'thhl_games_thhl_matchesthhl_games_ida',
  'type' => 'link',
  'relationship' => 'thhl_games_thhl_matches',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_MATCHES_TITLE',
);
