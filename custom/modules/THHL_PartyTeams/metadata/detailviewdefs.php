<?php
$module_name = 'THHL_PartyTeams';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 'name',
          1 => 
          array (
            'name' => 'slogan',
            'label' => 'LBL_SLOGAN',
          ),
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
            'label' => 'LBL_THHL_GAMES_THHL_PARTYTEAMS_1_FROM_THHL_GAMES_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'team_logo',
            'studio' => 'visible',
            'label' => 'LBL_TEAM_LOGO',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
