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

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/





require_once('modules/Forecasts/Common.php');


global $mod_strings;
global $app_strings;
global $app_list_strings;
global $current_user;

//exit if the logged in user does not have admin rights.
if (!is_admin($current_user) && !is_admin_for_module($current_user,'ForecastSchedule')&& !is_admin_for_module($current_user,'Forecasts')) sugar_die("Unauthorized access to administration.");


$focus = new ForecastSchedule();

$GLOBALS['log']->info("in detail view");

if (!empty($_REQUEST['record'])) {

	$GLOBALS['log']->info("record to be fetched".$_REQUEST['record']);
	
    $result = $focus->retrieve($_REQUEST['record']);  
    if($result == null)
    {
    	sugar_die($app_strings['ERROR_NO_RECORD']);
    }
}
else {
	header("Location: index.php?module=TimePeriods&action=DetailView&return_id=".$_REQUEST['return_id']);
}

echo getClassicModuleTitle($mod_strings['LBL_FS_MODULE_NAME'], array($mod_strings['LBL_FS_MODULE_NAME'],$focus->get_summary_text()), true);



$GLOBALS['log']->info("Forecast Schedule Detail View");

$xtpl=new XTemplate ('modules/ForecastSchedule/DetailView.html');
$focus->format_all_fields();
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);
$xtpl->assign("GRIDLINE", $gridline);
$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
$xtpl->assign("ID", $focus->id);
if (isset($_REQUEST['return_module'])) {
	$xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
} else {
	$xtpl->assign("RETURN_MODULE", "TimePeriods");
}
if (isset($_REQUEST['return_action'])) {
	$xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
} else {
	$xtpl->assign("RETURN_ACTION", "DetailView");
}
$xtpl->assign("RETURN_ID", $focus->timeperiod_id);  //return_id is the timeperiod_id

$comm = new Common();
$comm->set_current_user($focus->user_id);
$comm->get_timeperiod_start_end_date($focus->timeperiod_id);

$xtpl->assign("TIMEPERIOD_NAME", $comm->timeperiod_name);
$xtpl->assign("START_DATE", $comm->start_date);
$xtpl->assign("END_DATE", $comm->end_date);

$xtpl->assign("FORECAST_START_DATE", $focus->forecast_start_date);
$xtpl->assign("STATUS", $focus->status);
$xtpl->assign("USER_NAME",$comm->get_user_name($focus->user_id));

if ($focus->cascade_hierarchy  == '1') {
	$xtpl->assign("CASCADE_HIERARCHY","Checked");
}

global $current_user;
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){	
	$xtpl->assign("ADMIN_EDIT","<a href='index.php?action=index&module=DynamicLayout&from_action=".$_REQUEST['action'] ."&from_module=".$_REQUEST['module'] ."&record=".$_REQUEST['record']. "&mod_lang=Teams'>".SugarThemeRegistry::current()->getImage("EditLayout","border='0' align='bottom'", null,null,'.gif',$mod_strings['LBL_EDIT_LAYOUT'])."</a>");
}
$xtpl->parse("main");
$xtpl->out("main");
?>