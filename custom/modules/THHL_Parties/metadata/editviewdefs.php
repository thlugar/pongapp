<?php
$module_name = 'THHL_Parties';
$viewdefs [$module_name] =
	array(
		'EditView' =>
		array(
			'templateMeta' =>
			array(
				'maxColumns' => '2',
				'widths' =>
				array(
					0 =>
					array(
						'label' => '10',
						'field' => '30',
					),
					1 =>
					array(
						'label' => '10',
						'field' => '30',
					),
				),
				'useTabs' => false,
				'syncDetailEditViews' => true,
			),
			'panels' =>
			array(
				'default' =>
				array(
					0 =>
					array(
						0 => 'name',
						1 =>
						array(
							'name' => 'party_id_number',
							'label' => 'LBL_PARTY_ID_NUMBER',
							'type'=>'readonly',
						),
					),
					1 =>
					array(
						0 =>
						array(
							'name' => 'party_host',
							'studio' => 'visible',
							'label' => 'LBL_PARTY_HOST',
						),
						1 =>
						array(
							'name' => 'fb_link',
							'label' => 'LBL_FB_LINK',
						),
					),
					2 =>
					array(
						0 =>
						array(
							'name' => 'party_type',
							'label' => 'LBL_PARTY_TYPE',
						),
						1 =>
						array(
							'name' => 'party_password',
							'label' => 'LBL_PARTY_PASSWORD',
						),
					),
					3 =>
					array(
						0 =>
						array(
							'name' => 'start_time',
							'label' => 'LBL_START_TIME',
						),
						1 =>
						array(
							'name' => 'end_time',
							'label' => 'LBL_END_TIME',
						),
					),
					4 =>
					array(
						0 =>
						array(
							'name' => 'party_address_street',
							'label' => 'LBL_PARTY_ADDRESS',
							'type'=>'address',
							'displayParams'=>array('key'=>'party'),
						),
						1 => 'description',
					),
					5 =>
					array(
						0 =>
						array(
							'name' => 'date_entered',
							'comment' => 'Date record created',
							'label' => 'LBL_DATE_ENTERED',
						),
						1 =>
						array(
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
