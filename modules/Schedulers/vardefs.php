<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$dictionary['Scheduler'] = array('table' => 'schedulers',
	'fields' => array (
		'id' => array (
			'name' => 'id',
			'vname' => 'LBL_NAME',
			'type' => 'id',
			'dbType' => 'varchar',
			'len' => 36,
			'required' => true,
			'reportable' => false,
		),
		'deleted' => array (
			'name' => 'deleted',
			'vname' => 'LBL_DELETED',
			'type' => 'bool',
			'len' => 1,
			'required' => false,
			'default' => '0',
			'reportable' => false,
		),
		'date_entered' => array (
			'name' => 'date_entered',
			'vname' => 'LBL_DATE_ENTERED',
			'type' => 'datetime',
			'required' => true,
		),
		'date_modified' => array (
			'name' => 'date_modified',
			'vname' => 'LBL_DATE_MODIFIED',
			'type' => 'datetime',
			'required' => true,
		),
		'created_by' => array (
			'name' => 'created_by',
			'rname' => 'user_name',
			'id_name' => 'created_by',
			'vname' => 'LBL_CREATED',
			'type' => 'assigned_user_name',
			'table' => 'created_by_users',
			'isnull' => false,
			'dbType' => 'id',
			'len' => 36,
		),
		'created_by_link' => array (
			'name' => 'created_by_link',
			'type' => 'link',
			'relationship' => 'schedulers_created_by_rel',
			'vname' => 'LBL_CREATED_BY_USER',
			'link_type' => 'one',
			'module' => 'Users',
			'bean_name' => 'User',
			'source' => 'non-db',
		),
	  	'created_by_name' =>
    	  array (
    	    'name' => 'created_by_name',
    		'vname' => 'LBL_CREATED',
    		'type' => 'relate',
    		'reportable'=>false,
    	    'link' => 'created_by_link',
    	    'rname' => 'user_name',
    		'source'=>'non-db',
    		'table' => 'users',
    		'id_name' => 'created_by',
    		'module'=>'Users',
    		'duplicate_merge'=>'disabled',
            'importable' => 'false',
            'massupdate' => false,
    	),
		'modified_user_id' => array (
			'name' => 'modified_user_id',
			'rname' => 'user_name',
			'id_name' => 'modified_user_id',
			'vname' => 'LBL_MODIFIED',
			'type' => 'assigned_user_name',
			'table' => 'modified_user_id_users',
			'isnull' => false,
			'dbType' => 'id',
			'len' => '36',
			'reportable' => true,
		),
		'modified_user_link' => array (
			'name' => 'modified_user_link',
			'type' => 'link',
			'relationship' => 'schedulers_modified_user_id_rel',
			'vname' => 'LBL_MODIFIED_BY_USER',
			'link_type' => 'one',
			'module' => 'Users',
			'bean_name' => 'User',
			'source' => 'non-db',
		),
		'modified_by_name' =>
    	  array (
    	    'name' => 'modified_by_name',
    	    'vname' => 'LBL_MODIFIED_NAME',
    	    'type' => 'relate',
    	    'reportable'=>false,
    	    'source'=>'non-db',
    	    'rname'=>'user_name',
    	    'table' => 'users',
    	    'id_name' => 'modified_user_id',
    	    'module'=>'Users',
    	    'link'=>'modified_user_link',
    	    'duplicate_merge'=>'disabled',
            'massupdate' => false,
    	),
		'name' => array (
			'name' => 'name',
			'vname' => 'LBL_NAME',
			'type' => 'varchar',
			'len' => '255',
			'required' => true,
			'reportable' => false,
			'importable' => 'required',
		),
		'job' => array (
			'name' => 'job',
			'vname' => 'LBL_JOB',
			'type' => 'varchar',
			'len' => '255',
			'required' => true,
			'reportable' => false,
		),
		'job_url' => array (
			'name' => 'job_url',
			'vname' => 'LBL_JOB_URL',
			'type' => 'varchar',
			'len' => '255',
			'required' => false,
			'reportable' => false,
			'source' => 'non-db',
			'dependency' => 'equal($job_function, "url::")'
		),
		'job_function' => array (
			'name' => 'job_function',
			'vname' => 'LBL_JOB',
			'type' => 'enum',
			'function' => array('name' => array('Scheduler', 'getJobsList'), 'params' => array()),
			'len' => '255',
			'required' => false,
			'reportable' => false,
			'source' => 'non-db',
		),
		'date_time_start' => array (
			'name' => 'date_time_start',
			'vname' => 'LBL_DATE_TIME_START',
			'type' => 'datetimecombo',
			'required' => true,
			'reportable' => false,
			//Previously Editview on scheduler assigned default value as $timedate->fromString('2005-01-01')
            //the bottom value follows previous default value.
            'display_default' => '2005/01/01'
		),
		'date_time_end' => array (
			'name' => 'date_time_end',
			'vname' => 'LBL_DATE_TIME_END',
			'type' => 'datetimecombo',
			'reportable' => false,
		),
		'job_interval' => array (
			'name' => 'job_interval',
			'vname' => 'LBL_INTERVAL',
			'type' => 'varchar',
			'len' => '100',
			'required' => true,
			'reportable' => false,
		),
		'adv_interval' => array (
			'name' => 'adv_interval',
			'vname' => 'LBL_ADV_OPTIONS',
			'type' => 'bool',
			'required' => false,
			'reportable' => false,
			'source' => 'non-db',
		),

		'time_from' => array (
			'name' => 'time_from',
			'vname' => 'LBL_TIME_FROM',
			'type' => 'time',
			'required' => false,
			'reportable' => false,
		),
		'time_to' => array (
			'name' => 'time_to',
			'vname' => 'LBL_TIME_TO',
			'type' => 'time',
			'required' => false,
			'reportable' => false,
		),
		'last_run' => array (
			'name' => 'last_run',
			'vname' => 'LBL_LAST_RUN',
			'type' => 'datetime',
			'required' => false,
			'reportable' => false,
		),
		'status' => array (
			'name' => 'status',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'options' => 'scheduler_status_dom',
			'len' => 100,
			'required' => false,
			'reportable' => false,
			'importable' => 'required',
		),
		'catch_up' => array (
			'name' => 'catch_up',
			'vname' => 'LBL_CATCH_UP',
			'type' => 'bool',
			'len' => 1,
			'required' => false,
			'default' => '1',
			'reportable' => false,
		),
		'schedulers_times' => array (
			'name'			=> 'schedulers_times',
			'vname'			=> 'LBL_SCHEDULER_TIMES',
			'type'			=> 'link',
			'relationship'	=> 'schedulers_jobs_rel',
			'module'		=> 'SchedulersJobs',
			'bean_name'		=> 'Scheduler',
			'source'		=> 'non-db',
		),
	),
	'indices' => array (
		array(
			'name' =>'schedulerspk',
			'type' =>'primary',
			'fields' => array(
				'id'
			)
		),
		array(
		'name' =>'idx_schedule',
		'type'=>'index',
		'fields' => array(
			'date_time_start',
			'deleted'
			)
		),
	),
	'relationships' => array (
		'schedulers_created_by_rel' => array (
			'lhs_module'		=> 'Users',
			'lhs_table'			=> 'users',
			'lhs_key'			=> 'id',
			'rhs_module'		=> 'Schedulers',
			'rhs_table'			=> 'schedulers',
			'rhs_key'			=> 'created_by',
			'relationship_type'	=> 'one-to-one'
		),
		'schedulers_modified_user_id_rel' => array (
			'lhs_module'		=> 'Users',
			'lhs_table'			=> 'users',
			'lhs_key'			=> 'id',
			'rhs_module'		=> 'Schedulers',
			'rhs_table'			=> 'schedulers',
			'rhs_key'			=> 'modified_user_id',
			'relationship_type'	=> 'one-to-many'
		),
		'schedulers_jobs_rel' => array(
			'lhs_module'					=> 'Schedulers',
			'lhs_table'						=> 'schedulers',
			'lhs_key' 						=> 'id',
			'rhs_module'					=> 'SchedulersJobs',
			'rhs_table'						=> 'job_queue',
			'rhs_key' 						=> 'scheduler_id',
			'relationship_type' 			=> 'one-to-many',
		),
	)
);

//VardefManager::createVardef('Schedulers','Scheduler', array('default'));
