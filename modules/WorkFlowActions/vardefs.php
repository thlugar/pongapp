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


$dictionary['WorkFlowAction'] = array('table' => 'workflow_actions'
                               ,'fields' => array (
  'id' => 
  array (
    'name' => 'id',
    'vname' => 'LBL_NAME',
    'type' => 'id',
    'required' => true,
    'reportable'=>false,
  ),
   'deleted' => 
  array (
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'required' => false,
    'default' => '0',
    'reportable'=>false,
  ),
   'date_entered' => 
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
    'required' => true,
  ),
  'date_modified' => 
  array (
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
    'required' => true,
  ),
    'modified_user_id' => 
  array (
    'name' => 'modified_user_id',
    'rname' => 'user_name',
    'id_name' => 'modified_user_id',
    'vname' => 'LBL_ASSIGNED_TO',
    'type' => 'assigned_user_name',
    'table' => 'users',
    'isnull' => 'false',
    'dbType' => 'id',
    'reportable'=>true,
  ),
  'created_by' => 
  array (
    'name' => 'created_by',
    'rname' => 'user_name',
    'id_name' => 'modified_user_id',
    'vname' => 'LBL_ASSIGNED_TO',
    'type' => 'assigned_user_name',
    'table' => 'users',
    'isnull' => 'false',
    'dbType' => 'id'
  ),
  'field' => 
  array (
    'name' => 'field',
    'vname' => 'LBL_FIELD',
    'type' => 'varchar',
    'len' => '50',
  ),
    'value' => 
  array (
    'name' => 'value',
    'vname' => 'LBL_VALUE',
    'type' => 'text',
  ),
  'set_type' => 
  array (
    'name' => 'set_type',
    'vname' => 'LBL_SET_TYPE',
    'type' => 'enum',
    'required' => true,
    'options' => 'wflow_set_type_dom',
    'len'=>10,
  ),
    'adv_type' => 
  array (
    'name' => 'adv_type',
    'vname' => 'LBL_ADV_TYPE',
    'type' => 'enum',
    'options' => 'wflow_adv_type_dom',
    'len'=>10,
  ),
    'parent_id' => 
  array (
    'name' => 'parent_id',
    'type' => 'id',
    'required' => true,
    'reportable'=>false,
  ),
    'ext1' => 
  array (
    'name' => 'ext1',
    'vname' => 'LBL_OPTION',
    'type' => 'varchar',
    'len' => '50',
  ),
    'ext2' => 
  array (
    'name' => 'ext2',
    'vname' => 'LBL_OPTION',
    'type' => 'varchar',
    'len' => '50',
  ),
    'ext3' => 
  array (
    'name' => 'ext3',
    'vname' => 'LBL_OPTION',
    'type' => 'varchar',
    'len' => '50',
  ),    
)
                                                      , 'indices' => array (
       array('name' =>'action_k', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_action', 'type'=>'index', 'fields'=>array('deleted')),
                                                      )
 );
?>
