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
  'LBL_FORECAST_ID' => 'ID',
  'LBL_QC_HEADER_DELIM' => 'To',
  'LB_FS_KEY' => 'ID',
  'LBL_MODULE_NAME' => '予算',
  'LNK_NEW_OPPORTUNITY' => '商談作成',
  'LBL_MODULE_TITLE' => '予算',
  'LBL_LIST_FORM_TITLE' => '確定予算',
  'LNK_UPD_FORECAST' => '予算ワークシート',
  'LNK_QUOTA' => 'ノルマ',
  'LNK_FORECAST_LIST' => '予算履歴',
  'LBL_FORECAST_HISTORY' => '予算: 履歴',
  'LBL_FORECAST_HISTORY_TITLE' => '予算: 履歴',
  'LBL_TIMEPERIOD_NAME' => '期間',
  'LBL_USER_NAME' => 'ユーザ名',
  'LBL_REPORTS_TO_USER_NAME' => '上司',
  'LBL_FORECAST_TIME_ID' => '期間ID',
  'LBL_FORECAST_TYPE' => '予算タイプ',
  'LBL_FORECAST_OPP_COUNT' => '商談',
  'LBL_FORECAST_OPP_WEIGH' => '加重金額',
  'LBL_FORECAST_OPP_COMMIT' => '達成可能ケース',
  'LBL_FORECAST_OPP_BEST_CASE' => 'ベストケース',
  'LBL_FORECAST_OPP_WORST' => 'ワーストケース',
  'LBL_FORECAST_USER' => 'ユーザ',
  'LBL_DATE_COMMITTED' => '確定日',
  'LBL_DATE_ENTERED' => '入力日',
  'LBL_DATE_MODIFIED' => '更新日',
  'LBL_CREATED_BY' => '作成者',
  'LBL_DELETED' => '削除済み',
  'LBL_QC_TIME_PERIOD' => '期間:',
  'LBL_QC_OPPORTUNITY_COUNT' => '商談数:',
  'LBL_QC_WEIGHT_VALUE' => '加重金額:',
  'LBL_QC_COMMIT_VALUE' => '確定金額:',
  'LBL_QC_COMMIT_BUTTON' => '確定',
  'LBL_QC_WORKSHEET_BUTTON' => 'ワークシート',
  'LBL_QC_ROLL_COMMIT_VALUE' => '総確定金額:',
  'LBL_QC_DIRECT_FORECAST' => '私個人の予算:',
  'LBL_QC_ROLLUP_FORECAST' => '私のグループの予算:',
  'LBL_QC_UPCOMING_FORECASTS' => '私の予算',
  'LBL_QC_LAST_DATE_COMMITTED' => '前回の確定日:',
  'LBL_QC_LAST_COMMIT_VALUE' => '前回の確定金額:',
  'LBL_OW_OPPORTUNITIES' => '商談',
  'LBL_OW_ACCOUNTNAME' => '取引先',
  'LBL_OW_REVENUE' => '金額',
  'LBL_OW_WEIGHTED' => '加重金額',
  'LBL_OW_MODULE_TITLE' => '商談ワークシート',
  'LBL_OW_PROBABILITY' => '確度',
  'LBL_OW_NEXT_STEP' => '次ステップ',
  'LBL_OW_DESCRIPTION' => '詳細',
  'LBL_OW_TYPE' => 'タイプ',
  'LNK_NEW_TIMEPERIOD' => '期間作成',
  'LNK_TIMEPERIOD_LIST' => '期間',
  'LBL_SVFS_FORECASTDATE' => '開始予定日',
  'LBL_SVFS_STATUS' => 'ステータス',
  'LBL_SVFS_USER' => 'ユーザ',
  'LBL_SVFS_CASCADE' => 'レポートに転記？',
  'LBL_SVFS_HEADER' => '予算スケジュール:',
  'LBL_FS_TIMEPERIOD_ID' => '期間ID',
  'LBL_FS_USER_ID' => 'ユーザID',
  'LBL_FS_TIMEPERIOD' => '期間',
  'LBL_FS_START_DATE' => '実施日',
  'LBL_FS_END_DATE' => '終了日',
  'LBL_FS_FORECAST_START_DATE' => '予算の開始日',
  'LBL_FS_STATUS' => 'ステータス',
  'LBL_FS_FORECAST_FOR' => 'スケジュール:',
  'LBL_FS_CASCADE' => 'カスケード？',
  'LBL_FS_MODULE_NAME' => '予算スケジュール',
  'LBL_FS_CREATED_BY' => '作成者',
  'LBL_FS_DATE_ENTERED' => '入力日',
  'LBL_FS_DATE_MODIFIED' => '更新日',
  'LBL_FS_DELETED' => '削除済み',
  'LBL_FDR_USER_NAME' => '個人レポート',
  'LBL_FDR_OPPORTUNITIES' => '予算中の商談:',
  'LBL_FDR_WEIGH' => '商談の加重金額:',
  'LBL_FDR_COMMIT' => '確定金額',
  'LBL_FDR_DATE_COMMIT' => '確定日',
  'LBL_DV_HEADER' => '予算: ワークシート',
  'LBL_DV_MY_FORECASTS' => '私の予算',
  'LBL_DV_MY_TEAM' => '私のチームの予算',
  'LBL_DV_TIMEPERIODS' => '期間:',
  'LBL_DV_FORECAST_PERIOD' => '予算期間',
  'LBL_DV_FORECAST_OPPORTUNITY' => '商談予測',
  'LBL_SEARCH' => '選択',
  'LBL_SEARCH_LABEL' => '選択',
  'LBL_COMMIT_HEADER' => '予算確定',
  'LBL_DV_LAST_COMMIT_DATE' => '前回の確定日:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => '最終確定値:',
  'LBL_DV_FORECAST_ROLLUP' => '総予算',
  'LBL_DV_TIMEPERIOD' => '期間:',
  'LBL_DV_TIMPERIOD_DATES' => '期間:',
  'LBL_LV_TIMPERIOD' => '期間',
  'LBL_LV_TIMPERIOD_START_DATE' => '実施日',
  'LBL_LV_TIMPERIOD_END_DATE' => '終了日',
  'LBL_LV_TYPE' => '予算タイプ',
  'LBL_LV_COMMIT_DATE' => '確定日',
  'LBL_LV_OPPORTUNITIES' => '商談',
  'LBL_LV_WEIGH' => '加重金額',
  'LBL_LV_COMMIT' => '確定金額',
  'LBL_COMMIT_NOTE' => '選択した期間で確定する金額を入力してください。:',
  'LBL_COMMIT_MESSAGE' => 'この金額を確定しますか？',
  'ERR_FORECAST_AMOUNT' => '確定金額は必須であり、数値である必要があります。',
  'LBL_FC_START_DATE' => '実施日',
  'LBL_FC_USER' => 'スケジュール',
  'LBL_NO_ACTIVE_TIMEPERIOD' => '予算のためのアクティブな期間がありません。',
  'LBL_FDR_ADJ_AMOUNT' => '調整済み値',
  'LBL_SAVE_WOKSHEET' => 'ワークシート保存',
  'LBL_RESET_WOKSHEET' => 'ワークシートリセット',
  'LBL_RESET_CHECK' => 'ログインユーザの指定された期間のワークシートが削除されます。継続しますか？',
  'LB_FS_LIKELY_CASE' => '達成可能ケース',
  'LB_FS_WORST_CASE' => 'ワーストケース',
  'LB_FS_BEST_CASE' => 'ベストケース',
  'LBL_FDR_WK_LIKELY_CASE' => '達成可能見込み',
  'LBL_FDR_WK_BEST_CASE' => 'ベスト見込み',
  'LBL_FDR_WK_WORST_CASE' => 'ワースト見込み',
  'LBL_BEST_CASE' => 'ベストケース:',
  'LBL_LIKELY_CASE' => '達成可能ケース:',
  'LBL_WORST_CASE' => 'ワーストケース:',
  'LBL_FDR_C_BEST_CASE' => 'ベストケース',
  'LBL_FDR_C_WORST_CASE' => 'ワーストケース',
  'LBL_FDR_C_LIKELY_CASE' => '達成可能ケース',
  'LBL_QC_LAST_BEST_CASE' => '最終確定値（ベストケース）:',
  'LBL_QC_LAST_LIKELY_CASE' => '最終確定値（達成可能）:',
  'LBL_QC_LAST_WORST_CASE' => '最終確定値（ワースト値）:',
  'LBL_QC_ROLL_BEST_VALUE' => '確定値の積上げ（ベストケース）:',
  'LBL_QC_ROLL_LIKELY_VALUE' => '確定値の積上げ（達成可能）:',
  'LBL_QC_ROLL_WORST_VALUE' => '確定値の積上げ（ワーストケース）:',
  'LBL_QC_COMMIT_BEST_CASE' => '確定値（ベストケース）:',
  'LBL_QC_COMMIT_LIKELY_CASE' => '確定値（達成可能ケース）:',
  'LBL_QC_COMMIT_WORST_CASE' => '確定値（ワーストケース）:',
  'LBL_EDIT_LAYOUT' => 'レイアウト編集',
);

