<?php
// created: 2012-07-16 23:31:25
$dictionary["THHL_Games"]["fields"]["parties"] = array(
	'name' => 'parties',
	'type' => 'link',
	'relationship' => 'parties_games',
	'source' => 'non-db',
	'vname' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_PARTIES_TITLE',
	'id_name' => 'party_id',
);
$dictionary["THHL_Games"]["fields"]["party_name"] = array(
	'name' => 'party_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_PARTIES_TITLE',
	'save' => true,
	'id_name' => 'party_id',
	'link' => 'parties',
	'table' => 'thhl_parties',
	'module' => 'THHL_Parties',
	'rname' => 'name',
);
$dictionary["THHL_Games"]["fields"]["party_id"] = array(
	'name' => 'party_id',
	'type' => 'link',
	'relationship' => 'parties_games',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_GAMES_TITLE',
);
