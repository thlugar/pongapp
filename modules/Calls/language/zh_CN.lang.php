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

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => '必须指定一个记录编号才能删除客户.',
  'LBL_ACCEPT_LINK' => '接受链接',
  'LBL_ACCEPT_STATUS' => '接受状态',
  'LBL_ACTIVITIES_REPORTS' => '活动报表',
  'LBL_ADD_BUTTON' => '增加',
  'LBL_ADD_INVITEE' => '新增被邀请人',
  'LBL_ASSIGNED_TO_ID' => '被指派用户',
  'LBL_ASSIGNED_TO_NAME' => '被指派给',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => '电话:',
  'LBL_CALL_INFORMATION' => '电话概述',
  'LBL_CANCEL_CREATE_INVITEE' => '取消',
  'LBL_COLON' => ':',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_NAME' => '联系人:',
  'LBL_CREATE_AND_ADD' => '创建 & 新增',
  'LBL_CREATE_CONTACT' => '作为联系人',
  'LBL_CREATE_INVITEE' => '创建一个受邀人',
  'LBL_CREATE_LEAD' => '作为线索',
  'LBL_DATE' => '开始日期:',
  'LBL_DATE_END' => '结束日期',
  'LBL_DATE_TIME' => '开始日期 & 时间:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '电话',
  'LBL_DEL' => '删除',
  'LBL_DESCRIPTION' => '说明:',
  'LBL_DESCRIPTION_INFORMATION' => '说明信息',
  'LBL_DIRECTION' => '指导:',
  'LBL_DURATION' => '期限:',
  'LBL_DURATION_HOURS' => '持续时间（小时）:',
  'LBL_DURATION_MINUTES' => '持续时间（分钟）:',
  'LBL_EMAIL' => '电子邮件',
  'LBL_EMAIL_REMINDER' => '邮件提醒',
  'LBL_EMAIL_REMINDER_SENT' => '已发送的邮件提醒',
  'LBL_EMAIL_REMINDER_TIME' => '邮件提醒时间',
  'LBL_EMPTY_SEARCH_RESULT' => '很抱歉，没有查找结果. 请创建以下一个受邀人.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '被分配者 ID',
  'LBL_EXPORT_CREATED_BY' => '以ID创建',
  'LBL_EXPORT_DATE_START' => '开始时间',
  'LBL_EXPORT_MODIFIED_USER_ID' => '以ID修改',
  'LBL_EXPORT_PARENT_TYPE' => '与模块关联',
  'LBL_EXPORT_REMINDER_TIME' => '提醒时间 (以分钟计)',
  'LBL_FIRST_NAME' => '名',
  'LBL_HISTORY_SUBPANEL_TITLE' => '备忘录',
  'LBL_HOURS_ABBREV' => '小时',
  'LBL_HOURS_MINUTES' => '(时/分)',
  'LBL_INVITEE' => '被邀请人',
  'LBL_LAST_NAME' => '姓',
  'LBL_LEADS_SUBPANEL_TITLE' => '潜在销售线索',
  'LBL_LIST_ASSIGNED_TO_NAME' => '被指派给',
  'LBL_LIST_CLOSE' => '关闭',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_DATE' => '开始日期',
  'LBL_LIST_DIRECTION' => '指导',
  'LBL_LIST_DURATION' => '期限',
  'LBL_LIST_FORM_TITLE' => '电话列表',
  'LBL_LIST_MY_CALLS' => '我的电话',
  'LBL_LIST_RELATED_TO' => '关联到',
  'LBL_LIST_RELATED_TO_ID' => '关联到编号',
  'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_TIME' => '开始时间',
  'LBL_LOG_CALL' => '预约电话',
  'LBL_MEMBER_OF' => '归属组织',
  'LBL_MINSS_ABBREV' => '分钟',
  'LBL_MODULE_NAME' => '电话',
  'LBL_MODULE_TITLE' => '电话: 首页',
  'LBL_NAME' => '名称',
  'LBL_NEW_FORM_TITLE' => '创建电话安排',
  'LBL_NO_ACCESS' => '您没有权限创建 $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => '母公司 ID',
  'LBL_PHONE' => '电话',
  'LBL_RECURRING_SOURCE' => '重复资源',
  'LBL_RELATED_TO' => '关联到:',
  'LBL_REMINDER' => '提醒:',
  'LBL_REMINDER_EMAIL' => '邮件',
  'LBL_REMINDER_POPUP' => '弹出',
  'LBL_REMINDER_TIME' => '提醒时间',
  'LBL_REMOVE' => '删除',
  'LBL_REPEAT_COUNT' => '重复总数',
  'LBL_REPEAT_DOW' => '重复Dow',
  'LBL_REPEAT_INTERVAL' => '重复间段',
  'LBL_REPEAT_PARENT_ID' => '重复源ID',
  'LBL_REPEAT_TYPE' => '重复类型',
  'LBL_REPEAT_UNTIL' => '重复直到',
  'LBL_SCHEDULING_FORM_TITLE' => '日程安排',
  'LBL_SEARCH_BUTTON' => '查找',
  'LBL_SEARCH_FORM_TITLE' => '电话搜索',
  'LBL_SELECT_FROM_DROPDOWN' => '请先从下拉列表中选取一个相关的记录.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => '保存 & 发送邀请函',
  'LBL_SEND_BUTTON_TITLE' => '保存 & 发送邀请函 [Alt+I]',
  'LBL_STATUS' => '状态',
  'LBL_SUBJECT' => '主题:',
  'LBL_SYNCED_RECURRING_MSG' => '这个电话起始起始于另外一个系统并没有同步到Sugar，一旦这个电话被编辑，它不会被同步回另外一个系统。',
  'LBL_TIME' => '开始时间:',
  'LBL_TIME_END' => '结束时间',
  'LBL_USERS_SUBPANEL_TITLE' => '用户',
  'LNK_CALL_LIST' => '查看电话',
  'LNK_IMPORT_CALLS' => '导入电话',
  'LNK_NEW_ACCOUNT' => '新增客户',
  'LNK_NEW_APPOINTMENT' => '创建约会',
  'LNK_NEW_CALL' => '纪录电话',
  'LNK_NEW_MEETING' => '安排会议',
  'LNK_NEW_OPPORTUNITY' => '新增商业机会',
  'LNK_SELECT_ACCOUNT' => '选择客户',
  'NOTICE_DURATION_TIME' => '持续时间必须大于0',
  'NTC_REMOVE_INVITEE' => '您确定要从电话里删除这个被邀请人吗?',
);

