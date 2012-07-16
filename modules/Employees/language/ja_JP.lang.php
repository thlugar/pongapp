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
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_MODULE_NAME' => '従業員',
  'LBL_MODULE_TITLE' => '従業員: ホーム',
  'LBL_SEARCH_FORM_TITLE' => '従業員検索',
  'LBL_LIST_FORM_TITLE' => '従業員',
  'LBL_NEW_FORM_TITLE' => '従業員作成',
  'LBL_EMPLOYEE' => '従業員:',
  'LBL_LOGIN' => 'ログイン',
  'LBL_RESET_PREFERENCES' => 'デフォルトに戻す',
  'LBL_TIME_FORMAT' => '時間フォーマット:',
  'LBL_DATE_FORMAT' => '日付フォーマット:',
  'LBL_TIMEZONE' => '現在時刻:',
  'LBL_CURRENCY' => '通貨:',
  'LBL_LIST_NAME' => '名前',
  'LBL_LIST_LAST_NAME' => '姓',
  'LBL_LIST_EMPLOYEE_NAME' => '従業員氏名',
  'LBL_LIST_DEPARTMENT' => '部署',
  'LBL_LIST_REPORTS_TO_NAME' => '上司',
  'LBL_LIST_EMAIL' => '電子メール',
  'LBL_LIST_PRIMARY_PHONE' => '電話',
  'LBL_LIST_USER_NAME' => 'ユーザ名',
  'LBL_LIST_ADMIN' => '管理',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => '従業員作成 [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => '従業員作成',
  'LBL_ERROR' => 'エラー:',
  'LBL_PASSWORD' => 'パスワード:',
  'LBL_EMPLOYEE_NAME' => '従業員氏名:',
  'LBL_USER_NAME' => 'ユーザ名:',
  'LBL_USER_TYPE' => 'ユーザタイプ',
  'LBL_FIRST_NAME' => '名:',
  'LBL_LAST_NAME' => '姓:',
  'LBL_EMPLOYEE_SETTINGS' => '従業員設定',
  'LBL_THEME' => 'テーマ:',
  'LBL_LANGUAGE' => '言語:',
  'LBL_ADMIN' => '管理者:',
  'LBL_EMPLOYEE_INFORMATION' => '従業員情報',
  'LBL_OFFICE_PHONE' => '会社電話:',
  'LBL_REPORTS_TO' => '上司:',
  'LBL_REPORTS_TO_NAME' => '上司の名前',
  'LBL_OTHER_PHONE' => 'その他:',
  'LBL_OTHER_EMAIL' => 'その他の電子メール:',
  'LBL_NOTES' => '備考:',
  'LBL_DEPARTMENT' => '部署:',
  'LBL_TITLE' => '職位:',
  'LBL_ANY_ADDRESS' => '住所:',
  'LBL_ANY_PHONE' => '電話:',
  'LBL_ANY_EMAIL' => '電子メール:',
  'LBL_ADDRESS' => '住所:',
  'LBL_CITY' => '市区町村:',
  'LBL_STATE' => '都道府県:',
  'LBL_POSTAL_CODE' => '郵便番号:',
  'LBL_COUNTRY' => '国:',
  'LBL_NAME' => '名前:',
  'LBL_MOBILE_PHONE' => '携帯電話:',
  'LBL_OTHER' => 'その他の電話:',
  'LBL_FAX' => 'ファックス:',
  'LBL_EMAIL' => '電子メール:',
  'LBL_EMAIL_LINK_TYPE' => '電子メールクライアント',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugarメールクライアント: </b>SugarCRMのメールクライアントからメールを送信<br><b>外部メールクライアント: </b>Microsoft Outlookなど、SugarCRMの外部の電子メールクライアントよりメールを送信',
  'LBL_HOME_PHONE' => '自宅電話:',
  'LBL_WORK_PHONE' => '会社電話:',
  'LBL_ADDRESS_INFORMATION' => '住所情報',
  'LBL_EMPLOYEE_STATUS' => '従業員ステータス:',
  'LBL_PRIMARY_ADDRESS' => '主となる住所:',
  'LBL_SAVED_SEARCH' => '保存済みビュー',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'ユーザ作成 [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'ユーザ作成',
  'LBL_FAVORITE_COLOR' => 'お気に入りの色:',
  'LBL_MESSENGER_ID' => 'IM名:',
  'LBL_MESSENGER_TYPE' => 'IMタイプ:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => '従業員名「',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => '」は既に存在します。従業員名の重複は許可されません。一意の従業員名に変更してください。',
  'ERR_LAST_ADMIN_1' => '従業員名「',
  'ERR_LAST_ADMIN_2' => '」は管理者権限を持つ最後の従業員です。少なくとも１名の管理者が必要です。',
  'LNK_NEW_EMPLOYEE' => '従業員作成',
  'LNK_EMPLOYEE_LIST' => '従業員一覧',
  'ERR_DELETE_RECORD' => '取引先を削除するためにはレコード番号を指定する必要があります。',
  'LBL_DEFAULT_TEAM' => 'デフォルトチーム:',
  'LBL_DEFAULT_TEAM_TEXT' => '新規レコード用にデフォルトチームを選択',
  'LBL_MY_TEAMS' => '私のチーム',
  'LBL_LIST_DESCRIPTION' => '詳細',
  'LNK_EDIT_TABS' => 'タブの編集',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => '本当にこの従業員をメンバーからはずしてよいですか？',
  'LBL_LIST_EMPLOYEE_STATUS' => 'ステータス',
  'LBL_SUGAR_LOGIN' => 'Sugarユーザ',
  'LBL_RECEIVE_NOTIFICATIONS' => 'アサインの通知',
  'LBL_IS_ADMIN' => '管理者',
  'LBL_GROUP' => 'グループユーザ',
  'LBL_PORTAL_ONLY' => 'ポータルのみのユーザ',
  'LBL_PHOTO' => '写真',
  'LBL_DELETE_USER_CONFIRM' => 'この従業員はユーザでもあります。従業員レコードを削除するとユーザレコードも削除され、そのユーザはアプリケーションにアクセスできなくなります。本当にこのレコードを削除してよいですか？',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => '本当にこの従業員を削除してよいですか？',
  'LBL_ONLY_ACTIVE' => 'アクティブな従業員',
  'LBL_SELECT' => '選択',
  'LBL_FF_CLEAR' => 'クリア',
  'LBL_AUTHENTICATE_ID' => '認証ID',
  'LBL_EXT_AUTHENTICATE' => '外部認証',
  'LBL_GROUP_USER' => 'グループユーザ',
  'LBL_LIST_ACCEPT_STATUS' => '受け入れステータス',
  'LBL_MODIFIED_BY' => '更新者',
  'LBL_MODIFIED_BY_ID' => '更新者ID',
  'LBL_CREATED_BY_NAME' => '作成者',
  'LBL_PORTAL_ONLY_USER' => 'ポータルAPIユーザ',
  'LBL_PSW_MODIFIED' => 'パスワードの最終変更日時',
  'LBL_SHOW_ON_EMPLOYEES' => '従業員レコードを表示',
  'LBL_USER_HASH' => 'パスワード',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'システムが生成したパスワード',
  'LBL_PICTURE_FILE' => '写真',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_FAX_PHONE' => 'ファックス',
  'LBL_STATUS' => 'ステータス',
  'LBL_ADDRESS_CITY' => '住所 市区町村',
  'LBL_ADDRESS_COUNTRY' => '住所 国',
  'LBL_ADDRESS_POSTALCODE' => '住所 郵便番号',
  'LBL_ADDRESS_STATE' => '住所 都道府県',
  'LBL_ADDRESS_STREET' => '住所 番地',
  'LBL_DATE_MODIFIED' => '更新日',
  'LBL_DATE_ENTERED' => '入力日',
  'LBL_DELETED' => '削除済み',
);

