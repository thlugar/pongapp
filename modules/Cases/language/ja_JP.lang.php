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
  'ERR_DELETE_RECORD' => '取引先を削除するためにはレコード番号を指定する必要があります。',
  'LBL_ACCOUNT_ID' => '取引先ID',
  'LBL_ACCOUNT_NAME' => '取引先:',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
  'LBL_ATTACH_NOTE' => 'メモの添付',
  'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
  'LBL_CASE_NUMBER' => 'ケース番号:',
  'LBL_CASE_SUBJECT' => 'ケース件名:',
  'LBL_CASE' => 'ケース:',
  'LBL_CONTACT_CASE_TITLE' => 'ケース担当者:',
  'LBL_CONTACT_NAME' => '取引先担当者:',
  'LBL_CONTACT_ROLE' => '役割:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'ケース',
  'LBL_DESCRIPTION' => '詳細:',
  'LBL_FILENANE_ATTACHMENT' => '添付ファイル',
  'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
  'LBL_INVITEE' => '取引先担当者',
  'LBL_MEMBER_OF' => '取引先',
  'LBL_MODULE_NAME' => 'ケース',
  'LBL_MODULE_TITLE' => 'ケース: ホーム',
  'LBL_NEW_FORM_TITLE' => 'ケース作成',
  'LBL_NUMBER' => '番号:',
  'LBL_PRIORITY' => '優先度:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
  'LBL_RESOLUTION' => '解決:',
  'LBL_SEARCH_FORM_TITLE' => 'ケース検索',
  'LBL_STATUS' => 'ステータス:',
  'LBL_SUBJECT' => '件名:',
  'LBL_SYSTEM_ID' => 'システムID',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_LIST_ACCOUNT_NAME' => '取引先',
  'LBL_LIST_ASSIGNED' => 'アサイン先',
  'LBL_LIST_CLOSE' => '完了',
  'LBL_LIST_FORM_TITLE' => 'ケース一覧',
  'LBL_LIST_LAST_MODIFIED' => '最終更新日',
  'LBL_LIST_MY_CASES' => '私の未解決ケース',
  'LBL_LIST_NUMBER' => 'No.',
  'LBL_LIST_PRIORITY' => '優先度',
  'LBL_LIST_STATUS' => 'ステータス',
  'LBL_LIST_SUBJECT' => '件名',
  'LNK_CASE_LIST' => 'ケース一覧',
  'LNK_NEW_CASE' => 'ケース作成',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => '本当にこのケースを不具合からはずしてよいですか？',
  'NTC_REMOVE_INVITEE' => '本当にこの取引先担当者をケースからはずしてよいですか？',
  'LBL_LIST_DATE_CREATED' => '作成日',
  'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_TYPE' => 'タイプ',
  'LBL_WORK_LOG' => '作業記録',
  'LNK_IMPORT_CASES' => 'ケースのインポート',
  'LNK_CASE_REPORTS' => 'ケースレポート',
  'LBL_SHOW_IN_PORTAL' => 'ポータルで表示',
  'LBL_CREATE_KB_DOCUMENT' => '記事作成',
  'LBL_CREATED_USER' => '作成者',
  'LBL_MODIFIED_USER' => '更新者',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
  'LBL_CASE_INFORMATION' => 'ケースの概要',
  'LBL_MODIFIED_BY_NAME_OWNER' => '更新オーナー',
  'LBL_MODIFIED_BY_NAME_MOD' => '作成Mod',
  'LBL_CREATED_BY_NAME_OWNER' => '作成オーナー',
  'LBL_CREATED_BY_NAME_MOD' => '作成Mod',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'アサイン先オーナー',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'アサイン先Mod',
  'LBL_TEAM_COUNT_OWNER' => 'チームカウントオーナー',
  'LBL_TEAM_COUNT_MOD' => 'チームカウントMod',
  'LBL_TEAM_NAME_OWNER' => 'チーム名オーナー',
  'LBL_TEAM_NAME_MOD' => 'チーム名Mod',
  'LBL_ACCOUNT_NAME_OWNER' => '取引先名オーナー',
  'LBL_ACCOUNT_NAME_MOD' => '取引先名Mod',
  'LBL_MODIFIED_USER_NAME' => '更新者',
  'LBL_MODIFIED_USER_NAME_OWNER' => '更新者オーナー',
  'LBL_MODIFIED_USER_NAME_MOD' => '更新者Mod',
  'LBL_PORTAL_VIEWABLE' => 'ポータルで表示',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサイン先ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => '更新者ID',
  'LBL_EXPORT_CREATED_BY' => '作成者ID',
  'LBL_EXPORT_CREATED_BY_NAME' => '作成者',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'アサイン先',
  'LBL_EXPORT_TEAM_COUNT' => 'チーム数',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '関連取引先担当者の電子メール',
);

