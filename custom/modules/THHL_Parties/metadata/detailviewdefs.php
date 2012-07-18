<?php
$module_name = 'THHL_Parties';
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
            'name' => 'party_id_number',
            'label' => 'LBL_PARTY_ID_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'party_host',
            'studio' => 'visible',
            'label' => 'LBL_PARTY_HOST',
          ),
          1 => 
          array (
            'name' => 'fb_link',
            'label' => 'LBL_FB_LINK',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'party_type',
            'label' => 'LBL_PARTY_TYPE',
          ),
          1 => 
          array (
            'name' => 'party_password',
            'label' => 'LBL_PARTY_PASSWORD',
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
            'name' => 'party_address',
            'label' => 'LBL_PARTY_ADDRESS',
          ),
          1 => 'description',
        ),
        5 => 
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
