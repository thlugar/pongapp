<?php
// created: 2012-07-16 23:31:25
$dictionary["THHL_Games"]["fields"]["thhl_parties_thhl_games"] = array (
  'name' => 'thhl_parties_thhl_games',
  'type' => 'link',
  'relationship' => 'thhl_parties_thhl_games',
  'source' => 'non-db',
  'vname' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_PARTIES_TITLE',
  'id_name' => 'thhl_parties_thhl_gamesthhl_parties_ida',
);
$dictionary["THHL_Games"]["fields"]["thhl_parties_thhl_games_name"] = array (
  'name' => 'thhl_parties_thhl_games_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_PARTIES_TITLE',
  'save' => true,
  'id_name' => 'thhl_parties_thhl_gamesthhl_parties_ida',
  'link' => 'thhl_parties_thhl_games',
  'table' => 'thhl_parties',
  'module' => 'THHL_Parties',
  'rname' => 'name',
);
$dictionary["THHL_Games"]["fields"]["thhl_parties_thhl_gamesthhl_parties_ida"] = array (
  'name' => 'thhl_parties_thhl_gamesthhl_parties_ida',
  'type' => 'link',
  'relationship' => 'thhl_parties_thhl_games',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THHL_PARTIES_THHL_GAMES_FROM_THHL_GAMES_TITLE',
);
