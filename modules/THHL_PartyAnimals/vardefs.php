<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$dictionary['THHL_PartyAnimals'] = array(
	'table' => 'thhl_partyanimals',
	'audited' => true,
	'duplicate_merge' => true,
	'fields' => array(
		'nickname' =>
		array(
			'required' => false,
			'name' => 'nickname',
			'vname' => 'LBL_NICKNAME',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => '255',
			'size' => '20',
		),
		'twitter_name' =>
		array(
			'required' => false,
			'name' => 'twitter_name',
			'vname' => 'LBL_TWITTER_NAME',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => '255',
			'size' => '20',
		),
		'college' =>
		array(
			'required' => false,
			'name' => 'college',
			'vname' => 'LBL_COLLEGE',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => '255',
			'size' => '20',
		),
		'sex' =>
		array(
			'required' => false,
			'name' => 'sex',
			'vname' => 'LBL_SEX',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options' => 'sex_list',
			'default' => '',
			'calculated' => false,
		),
		'dob' =>
		array(
			'required' => false,
			'name' => 'dob',
			'vname' => 'LBL_DOB',
			'type' => 'date',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'size' => '20',
			'enable_range_search' => false,
		),
		'games_won' =>
		array(
			'required' => false,
			'name' => 'games_won',
			'vname' => 'LBL_GAMES_WON',
			'type' => 'int',
			'massupdate' => 0,
			'default' => '0',
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => '15',
			'size' => '20',
			'enable_range_search' => false,
			'disable_num_format' => '1',
		),
		'games_lost' =>
		array(
			'required' => false,
			'name' => 'games_lost',
			'vname' => 'LBL_GAMES_LOST',
			'type' => 'int',
			'massupdate' => 0,
			'default' => '0',
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => '15',
			'size' => '20',
			'enable_range_search' => false,
			'disable_num_format' => '1',
		),
		'fb_link' =>
		array(
			'required' => false,
			'name' => 'fb_link',
			'vname' => 'LBL_FB_LINK',
			'type' => 'url',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => '255',
			'size' => '20',
			'dbType' => 'varchar',
			'gen' => '0',
			'link_target' => '_blank',
		),
	),
	'relationships' => array(
	),
	'optimistic_locking' => true,
	'unified_search' => true,
);
if(!class_exists('VardefManager')){
	require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('THHL_PartyAnimals', 'THHL_PartyAnimals', array('basic', 'assignable', 'person'));