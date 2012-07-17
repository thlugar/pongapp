<?php
// created: 2012-07-17 11:09:57
$dictionary["THHL_PartyTeams"]["fields"]["thhl_games_thhl_partyteams_1"] = array (
  'name' => 'thhl_games_thhl_partyteams_1',
  'type' => 'link',
  'relationship' => 'thhl_games_thhl_partyteams_1',
  'source' => 'non-db',
  'vname' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_GAMES_TITLE',
  'id_name' => 'thhl_games_thhl_partyteams_1thhl_games_ida',
);
$dictionary["THHL_PartyTeams"]["fields"]["thhl_games_thhl_partyteams_1_name"] = array (
  'name' => 'thhl_games_thhl_partyteams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_GAMES_TITLE',
  'save' => true,
  'id_name' => 'thhl_games_thhl_partyteams_1thhl_games_ida',
  'link' => 'thhl_games_thhl_partyteams_1',
  'table' => 'thhl_games',
  'module' => 'THHL_Games',
  'rname' => 'name',
);
$dictionary["THHL_PartyTeams"]["fields"]["thhl_games_thhl_partyteams_1thhl_games_ida"] = array (
  'name' => 'thhl_games_thhl_partyteams_1thhl_games_ida',
  'type' => 'link',
  'relationship' => 'thhl_games_thhl_partyteams_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_PARTYTEAMS_TITLE',
);
