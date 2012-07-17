<?php
// created: 2012-07-17 11:09:57
$dictionary["THHL_PartyTeams"]["fields"]["games"] = array(
	'name' => 'games',
	'type' => 'link',
	'relationship' => 'games_teams',
	'source' => 'non-db',
	'vname' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_GAMES_TITLE',
	'id_name' => 'game_id',
);
$dictionary["THHL_PartyTeams"]["fields"]["game_name"] = array(
	'name' => 'game_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_GAMES_TITLE',
	'save' => true,
	'id_name' => 'game_id',
	'link' => 'games',
	'table' => 'thhl_games',
	'module' => 'THHL_Games',
	'rname' => 'name',
);
$dictionary["THHL_PartyTeams"]["fields"]["game_id"] = array(
	'name' => 'game_id',
	'type' => 'link',
	'relationship' => 'games_teams',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_PARTYTEAMS_TITLE',
);
