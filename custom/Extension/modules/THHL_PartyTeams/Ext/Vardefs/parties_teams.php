<?php
// created: 2012-07-16 23:31:25
$dictionary["THHL_PartyTeams"]["fields"]["parties"] = array(
	'name' => 'parties',
	'type' => 'link',
	'relationship' => 'parties_teams',
	'source' => 'non-db',
	'vname' => 'LBL_PARTIES_TITLE',
	'id_name' => 'party_id',
);
$dictionary["THHL_PartyTeams"]["fields"]["party_name"] = array(
	'name' => 'party_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PARTY_NAME',
	'save' => true,
	'id_name' => 'party_id',
	'link' => 'parties',
	'table' => 'thhl_parties',
	'module' => 'THHL_Parties',
	'rname' => 'name',
);
$dictionary["THHL_PartyTeams"]["fields"]["party_id"] = array(
	'name' => 'party_id',
	'type' => 'link',
	'relationship' => 'parties_teams',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_PARTY_ID',
);
