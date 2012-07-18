<?php
$module_name = 'THHL_PartyAnimals';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'useTabs' => true,
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
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
          1 => 'phone_mobile',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
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
