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

$dictionary['THHL_Matches'] = array(
	'table' => 'thhl_matches',
	'audited' => true,
	'duplicate_merge' => true,
	'indices' => array(
		array(
			'name' => 'match_number',
			'type' => 'unique',
			'fields' => array('match_number')
		),
	),
	'fields' => array(
		'home_team_id' =>
		array(
			'required' => false,
			'name' => 'home_team_id',
			'vname' => '',
			'type' => 'id',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => 36,
			'size' => '20',
		),
		'home_team_name' =>
		array(
			'required' => true,
			'source' => 'non-db',
			'name' => 'home_team_name',
			'vname' => 'LBL_HOME_TEAM_NAME',
			'type' => 'relate',
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
			'id_name' => 'home_team_id',
			'ext2' => 'THHL_PartyTeams',
			'module' => 'THHL_PartyTeams',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
		),
		'away_team_id' =>
		array(
			'required' => false,
			'name' => 'away_team_id',
			'vname' => '',
			'type' => 'id',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'len' => 36,
			'size' => '20',
		),
		'away_team_name' =>
		array(
			'required' => true,
			'source' => 'non-db',
			'name' => 'away_team_name',
			'vname' => 'LBL_AWAY_TEAM_NAME',
			'type' => 'relate',
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
			'id_name' => 'away_team_id',
			'ext2' => 'THHL_PartyTeams',
			'module' => 'THHL_PartyTeams',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
		),
		'start_time' =>
		array(
			'required' => true,
			'name' => 'start_time',
			'vname' => 'LBL_START_TIME',
			'type' => 'datetimecombo',
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
			'dbType' => 'datetime',
		),
		'end_time' =>
		array(
			'required' => false,
			'name' => 'end_time',
			'vname' => 'LBL_END_TIME',
			'type' => 'datetimecombo',
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
			'dbType' => 'datetime',
		),
		'match_number' =>
		array(
			'dependency' => '',
			'required' => true,
			'name' => 'match_number',
			'vname' => 'LBL_MATCH_NUMBER',
			'type' => 'int',
			'readonly' => true,
			'massupdate' => '0',
			'comments' => '',
			'help' => '',
			'importable' => 'false',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
			'auto_increment' => true,
			'disable_num_format' => true,
			'dbType' => 'bigint',
		),
		'status' =>
		array(
			'dependency' => '',
			'name' => 'status',
			'default' => 'Queued',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'options' => 'match_status_list',
			'massupdate' => '0',
			'comments' => '',
			'help' => '',
			'importable' => 'false',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
		),
		'outcome' =>
		array(
			'dependency' => 'equal($status, "Complete")',
			'name' => 'outcome',
			'vname' => 'LBL_OUTCOME',
			'type' => 'varchar',
			'len' => 255,
			'massupdate' => '0',
			'comments' => '',
			'help' => '',
			'importable' => 'false',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'calculated' => false,
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
VardefManager::createVardef('THHL_Matches', 'THHL_Matches', array('basic', 'assignable'));