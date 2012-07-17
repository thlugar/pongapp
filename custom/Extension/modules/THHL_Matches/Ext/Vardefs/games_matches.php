<?php
// created: 2012-07-16 23:31:25
$dictionary["THHL_Matches"]["fields"]["games"] = array(
	'name' => 'games',
	'type' => 'link',
	'relationship' => 'games_matches',
	'source' => 'non-db',
	'vname' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_GAMES_TITLE',
	'id_name' => 'game_id',
);
$dictionary["THHL_Matches"]["fields"]["game_name"] = array(
	'name' => 'game_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_GAMES_TITLE',
	'save' => true,
	'id_name' => 'game_id',
	'link' => 'games',
	'table' => 'thhl_games',
	'module' => 'THHL_Games',
	'rname' => 'name',
);
$dictionary["THHL_Matches"]["fields"]["game_id"] = array(
	'name' => 'game_id',
	'type' => 'link',
	'relationship' => 'games_matches',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_MATCHES_TITLE',
);
