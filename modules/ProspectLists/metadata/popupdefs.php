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


global $mod_strings;

$popupMeta = array('moduleMain' => 'ProspectList',
						'varName' => 'PROSPECTLIST',
						'orderBy' => 'name',
						'whereClauses' => 
							array('name' => 'prospect_lists.name',
									'list_type' => 'prospect_lists.list_type'),
						'searchInputs' =>
							array('name', 'list_type'),
						'selectDoms' =>
							array('LIST_OPTIONS' => 
											array('dom' => 'prospect_list_type_dom', 'searchInput' => 'list_type'),
								  ),
						'create' =>
							array('formBase' => 'ProspectListFormBase.php',
									'formBaseClass' => 'ProspectListFormBase',
									'getFormBodyParams' => array('','','ProspectListSave'),
									'createButton' => 'LNK_NEW_PROSPECT_LIST'
								  ),
						'listviewdefs' => array(
							'NAME' => array(
								'width' => '25', 
								'label' => 'LBL_LIST_PROSPECT_LIST_NAME', 
								'link' => true,
								'default' => true),
							'LIST_TYPE' => array(
								'width' => '15', 
								'label' => 'LBL_LIST_TYPE_LIST_NAME', 
								'default' => true),
							'DESCRIPTION' => array(
								'width' => '50', 
								'label' => 'LBL_LIST_DESCRIPTION', 
								'default' => true),
							'ASSIGNED_USER_NAME' => array(
								'width' => '10', 
								'label' => 'LBL_LIST_ASSIGNED_USER',
								'module' => 'Employees',
								'default' => true),
							),

						);


?>
 
 