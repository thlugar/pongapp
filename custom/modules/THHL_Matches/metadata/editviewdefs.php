<?php
$module_name = 'THHL_Matches';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'match_number',
            'type' => 'readonly',
            'label' => 'LBL_MATCH_NUMBER',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'party_name',
            'label' => 'LBL_PARTY_NAME',
          ),
          1 => 
          array (
            'name' => 'game_name',
            'label' => 'LBL_THHL_GAMES_THHL_MATCHES_FROM_THHL_GAMES_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'home_team_name',
            'studio' => 'visible',
            'label' => 'LBL_HOME_TEAM_NAME',
          ),
          1 => 
          array (
            'name' => 'away_team_name',
            'studio' => 'visible',
            'label' => 'LBL_AWAY_TEAM_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'start_time',
            'label' => 'LBL_START_TIME',
          ),
          1 => 
          array (
            'name' => 'end_time',
            'label' => 'LBL_END_TIME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'outcome',
            'label' => 'LBL_OUTCOME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
