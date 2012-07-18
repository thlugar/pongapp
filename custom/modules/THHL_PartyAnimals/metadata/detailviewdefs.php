<?php
$module_name = 'THHL_PartyAnimals';
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
      'useTabs' => true,
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nickname',
            'label' => 'LBL_NICKNAME',
          ),
          1 => 
          array (
            'name' => 'sex',
            'label' => 'LBL_SEX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dob',
            'label' => 'LBL_DOB',
          ),
          1 => 
          array (
            'name' => 'college',
            'label' => 'LBL_COLLEGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fb_link',
            'label' => 'LBL_FB_LINK',
          ),
          1 => 
          array (
            'name' => 'twitter_name',
            'label' => 'LBL_TWITTER_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'games_won',
            'label' => 'LBL_GAMES_WON',
          ),
          1 => 
          array (
            'name' => 'games_lost',
            'label' => 'LBL_GAMES_LOST',
          ),
        ),
        5 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'phone_mobile',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'picture',
            'comment' => 'Picture file',
            'label' => 'LBL_PICTURE_FILE',
          ),
        ),
        7 => 
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
