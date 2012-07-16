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
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Zestawienie zatwierdzonych wartości:',
  'LBL_DV_FORECAST_ROLLUP' => 'Prognozowane zestawienie',
  'LBL_QC_ROLL_BEST_VALUE' => 'Zestawienie zatwierdzonych wartości (najlepszy przypadek):',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Zestawienie zatwierdzonych wartości (prawdopodobny przypadek):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Zestawienie zatwierdzonych wartości (najgorszy przypadek):',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_SVFS_STATUS' => 'Status',
  'LB_FS_KEY' => 'ID',
  'LBL_FS_STATUS' => 'Status',
  'LBL_MODULE_NAME' => 'Prognozy',
  'LNK_NEW_OPPORTUNITY' => 'Utrzórz okazję',
  'LBL_MODULE_TITLE' => 'Prognozy',
  'LBL_LIST_FORM_TITLE' => 'Zatwierdzone prognozy',
  'LNK_UPD_FORECAST' => 'Arkusz roboczy prognozy',
  'LNK_QUOTA' => 'Kalkulacje',
  'LNK_FORECAST_LIST' => 'Zobacz historię prognozy',
  'LBL_FORECAST_HISTORY' => 'Prognozy: Historia',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognozy: Historia',
  'LBL_TIMEPERIOD_NAME' => 'Okres czasu',
  'LBL_USER_NAME' => 'Nazwa użytkownika',
  'LBL_REPORTS_TO_USER_NAME' => 'Raportuje do',
  'LBL_FORECAST_TIME_ID' => 'ID okresu czasu',
  'LBL_FORECAST_TYPE' => 'Typ prognozy',
  'LBL_FORECAST_OPP_COUNT' => 'Okazje',
  'LBL_FORECAST_OPP_WEIGH' => 'Wartość ważona',
  'LBL_FORECAST_OPP_COMMIT' => 'Prawdopodobny przypadek',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Najlepszy przypadek',
  'LBL_FORECAST_OPP_WORST' => 'Najgorszy przypadek',
  'LBL_FORECAST_USER' => 'Użytkownik',
  'LBL_DATE_COMMITTED' => 'Data zatwierdzenia',
  'LBL_DATE_ENTERED' => 'Data wprowadzenia',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_DELETED' => 'Usunięte',
  'LBL_QC_TIME_PERIOD' => 'Okres czasu:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Liczba okazji:',
  'LBL_QC_WEIGHT_VALUE' => 'Wartość ważona:',
  'LBL_QC_COMMIT_VALUE' => 'Zatwierdzenie wartości:',
  'LBL_QC_COMMIT_BUTTON' => 'Zatwierdzenie',
  'LBL_QC_WORKSHEET_BUTTON' => 'Arkusz roboczy',
  'LBL_QC_DIRECT_FORECAST' => 'Moja bezpośrednia prognoza:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moja grupowa prognoza:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje prognozy',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Ostatnia data zatwierdzenia:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Ostatnia zatwierdzona wartość:',
  'LBL_QC_HEADER_DELIM' => 'Do',
  'LBL_OW_OPPORTUNITIES' => 'Okazja',
  'LBL_OW_ACCOUNTNAME' => 'Klient',
  'LBL_OW_REVENUE' => 'Kwota',
  'LBL_OW_WEIGHTED' => 'Wartość ważona',
  'LBL_OW_MODULE_TITLE' => 'Arkusz roboczy okazji',
  'LBL_OW_PROBABILITY' => 'Prawdopodobieństwo',
  'LBL_OW_NEXT_STEP' => 'Następny krok',
  'LBL_OW_DESCRIPTION' => 'Opis',
  'LBL_OW_TYPE' => 'Typ',
  'LNK_NEW_TIMEPERIOD' => 'Utwórz okres czasu',
  'LNK_TIMEPERIOD_LIST' => 'Zobacz okresy czasu',
  'LBL_SVFS_FORECASTDATE' => 'Ustal datę ropoczęcia',
  'LBL_SVFS_USER' => 'Dla',
  'LBL_SVFS_CASCADE' => 'Kaskada do raportujących?',
  'LBL_SVFS_HEADER' => 'Harmonogram prognozy:',
  'LBL_FS_TIMEPERIOD_ID' => 'ID okresu czasu',
  'LBL_FS_USER_ID' => 'ID użytkownika',
  'LBL_FS_TIMEPERIOD' => 'Okres czasu',
  'LBL_FS_START_DATE' => 'Data rozpoczęcia',
  'LBL_FS_END_DATE' => 'Data zakończenia',
  'LBL_FS_FORECAST_START_DATE' => 'Data rozpoczęcia prognozy',
  'LBL_FS_FORECAST_FOR' => 'Prognoza dla:',
  'LBL_FS_CASCADE' => 'Kaskada?',
  'LBL_FS_MODULE_NAME' => 'Harmonogram prognozy',
  'LBL_FS_CREATED_BY' => 'Utworzone przez',
  'LBL_FS_DATE_ENTERED' => 'Data wprowadzenia',
  'LBL_FS_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_FS_DELETED' => 'Usunięte',
  'LBL_FDR_USER_NAME' => 'Bezpośrednie raportowanie',
  'LBL_FDR_OPPORTUNITIES' => 'Okazje w prognozie:',
  'LBL_FDR_WEIGH' => 'Ważona ilość okazji:',
  'LBL_FDR_COMMIT' => 'Zatwierdzona wartość',
  'LBL_FDR_DATE_COMMIT' => 'Data zatwierdzenia',
  'LBL_DV_HEADER' => 'Prognozy: Arkusz roboczy',
  'LBL_DV_MY_FORECASTS' => 'Moje prognozy',
  'LBL_DV_MY_TEAM' => 'Prognozy mojego zespołu',
  'LBL_DV_TIMEPERIODS' => 'Okresy czasu:',
  'LBL_DV_FORECAST_PERIOD' => 'Okres czasu prognozy',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Okazje prognozy',
  'LBL_SEARCH' => 'Wybierz',
  'LBL_SEARCH_LABEL' => 'Wybierz',
  'LBL_COMMIT_HEADER' => 'Zatwierdzenie prognozy',
  'LBL_DV_LAST_COMMIT_DATE' => 'Ostatnia data zatwierdzenia:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Ostatnio zatwierdzone wartości:',
  'LBL_DV_TIMEPERIOD' => 'Okres czasu:',
  'LBL_DV_TIMPERIOD_DATES' => 'Zakres dat:',
  'LBL_LV_TIMPERIOD' => 'Okres czasu',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Data rozpoczęcia',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Data zakończenia',
  'LBL_LV_TYPE' => 'Typ prognozy',
  'LBL_LV_COMMIT_DATE' => 'Data zatwierdzenia',
  'LBL_LV_OPPORTUNITIES' => 'Okazje',
  'LBL_LV_WEIGH' => 'Wartość ważona',
  'LBL_LV_COMMIT' => 'Zatwierdzona wartość',
  'LBL_COMMIT_NOTE' => 'Wprowadź wartości, które chciałbyś zatwierdzić dla wybranego okresu czasu:',
  'LBL_COMMIT_MESSAGE' => 'Czy chcesz zatwierdzić te wartości?',
  'ERR_FORECAST_AMOUNT' => 'Zatwierdzenie wartości jest wymagane i musi być w liczą.',
  'LBL_FC_START_DATE' => 'Data rozpoczęcia',
  'LBL_FC_USER' => 'Harmonogram dla',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Brak aktywnych okresów czasu dla prognozowania.',
  'LBL_FDR_ADJ_AMOUNT' => 'Skorygowana wartość',
  'LBL_SAVE_WOKSHEET' => 'Zapisz arkusz roboczy',
  'LBL_RESET_WOKSHEET' => 'Resetuj arkusz roboczy',
  'LBL_RESET_CHECK' => 'Wszystkie dane arkusza roboczego dla wybranego okresu czasu i zalogowanego użytkownika zostaną usunięte. Kontynuować?',
  'LB_FS_LIKELY_CASE' => 'Prawdopodobny przypadek',
  'LB_FS_WORST_CASE' => 'Najgorszy przypadek',
  'LB_FS_BEST_CASE' => 'Najlepszy przypadek',
  'LBL_FDR_WK_LIKELY_CASE' => 'Szacowany prawdopodobny przypadek',
  'LBL_FDR_WK_BEST_CASE' => 'Szacowany najlepszy przypadek',
  'LBL_FDR_WK_WORST_CASE' => 'Szacowany najgorszy przypadek',
  'LBL_BEST_CASE' => 'Najlepszy przypadek:',
  'LBL_LIKELY_CASE' => 'Prawdopodobny przypadek:',
  'LBL_WORST_CASE' => 'Najgorszy przypadek:',
  'LBL_FDR_C_BEST_CASE' => 'Najlepszy przypadek',
  'LBL_FDR_C_WORST_CASE' => 'Najgorszy przypadek',
  'LBL_FDR_C_LIKELY_CASE' => 'Prawdopodobny przypadek',
  'LBL_QC_LAST_BEST_CASE' => 'Ostatnio zatwierdzona wartość (najlepszy przypadek):',
  'LBL_QC_LAST_LIKELY_CASE' => 'Ostatnio zatwierdzona wartość (prawdopodobny przypadek):',
  'LBL_QC_LAST_WORST_CASE' => 'Ostatnio zatwierdzona wartość (najgorszy przypadek):',
  'LBL_QC_COMMIT_BEST_CASE' => 'Zatwierdzona wartość (najlepszy przypadek):',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Zatwierdzona wartość (prawdopodobny przypadek):',
  'LBL_QC_COMMIT_WORST_CASE' => 'Zatwierdzona wartość (najgorszy przypadek):',
);

