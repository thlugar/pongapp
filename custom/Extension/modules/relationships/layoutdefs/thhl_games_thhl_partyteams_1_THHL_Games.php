<?php
 // created: 2012-07-17 11:09:57
$layout_defs["THHL_Games"]["subpanel_setup"]['thhl_games_thhl_partyteams_1'] = array (
  'order' => 100,
  'module' => 'THHL_PartyTeams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_PARTYTEAMS_TITLE',
  'get_subpanel_data' => 'thhl_games_thhl_partyteams_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
