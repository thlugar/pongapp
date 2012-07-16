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
  'LBL_BCC' => 'Bcc:',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
  'LBL_FW' => 'Továbbít:',
  'LBL_RE' => 'Válasz:',
  'LBL_BUTTON_CREATE' => 'Létrehozás',
  'LBL_BUTTON_EDIT' => 'Szerkesztés',
  'LBL_QS_DISABLED' => '(A gyorskeresés nem használható ebben a modulban. Használja a Kiválaszt gombot.)',
  'LBL_SIGNATURE_PREPEND' => 'Aláírás a válasz felett?',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Itt van a kért árajánlat (Szerkeszteni tudja ezt a szöveget)',
  'LBL_EMAIL_QUOTE_FOR' => 'Árajánlat (címzett):',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'Árajánlat elrendezési fájl nem található: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'az árajánlat elrendezés nincs regisztrálva a modules/Quotes/Layouts.php fájlban',
  'LBL_CONFIRM_DELETE' => 'Biztos benne, hogy törli ezt a mappát?',
  'LBL_ENTER_FOLDER_NAME' => 'Kérjük, adja meg a mappa nevét',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Árajánlatok',
  'LBL_EMAILS_QUOTES_REL' => 'Emailek: Árajánlatok',
  'LBL_ERROR_SELECT_REPORT' => 'Válasszon ki egy jelentést',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Válasszon egy nevet, kattintson a Kiválaszt gomb melletti kapcsolódó címzett mezőbe',
  'LBL_ERROR_SELECT_MODULE' => 'Válasszon modult a mezőhöz kapcsolódóan',
  'ERR_ARCHIVE_EMAIL' => 'Hiba: választott emailek archívumban.',
  'ERR_DATE_START' => 'Kezdés dátuma',
  'ERR_DELETE_RECORD' => 'Hiba: Adjon meg egy azonosítót a kliens törléséhez!',
  'ERR_NOT_ADDRESSED' => 'Hiba: Az emailhez kell To, CC, vagy BCC cím',
  'ERR_TIME_START' => 'Kezdés időpontja',
  'ERR_TIME_SENT' => 'Küldés ideje',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kliensek',
  'LBL_ADD_ANOTHER_FILE' => 'További fájl hozzáadása',
  'LBL_ADD_DASHLETS' => 'Sugar Dashlet hozzáadása',
  'LBL_ADD_DOCUMENT' => 'Dokumentumok hozzáadása',
  'LBL_ADD_ENTRIES' => 'Bejegyzés hozzáadása',
  'LBL_ADD_FILE' => 'Fájlok hozzáadása',
  'LBL_ARCHIVED_EMAIL' => 'Archivált Email',
  'LBL_ARCHIVED_MODULE_NAME' => 'Archivált Emailek létrehozása',
  'LBL_ATTACHMENTS' => 'Mellékletek:',
  'LBL_HAS_ATTACHMENT' => 'Van Melléklet?:',
  'LBL_BODY' => 'Szövegtörzs:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Hibák',
  'LBL_COMPOSE_MODULE_NAME' => 'Email írása',
  'LBL_CONTACT_FIRST_NAME' => 'Kapcsolat keresztneve',
  'LBL_CONTACT_LAST_NAME' => 'Kapcsolat vezetékneve',
  'LBL_CONTACT_NAME' => 'Kapcsolat:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
  'LBL_CREATED_BY' => 'Létrehozta',
  'LBL_DATE_AND_TIME' => 'Küldve (dátum és idő):',
  'LBL_DATE_SENT' => 'Küldés dátuma:',
  'LBL_DATE' => 'Küldés dátuma:',
  'LBL_DELETE_FROM_SERVER' => 'Üzenet törlése a szerverről',
  'LBL_DESCRIPTION' => 'Leírás',
  'LBL_EDIT_ALT_TEXT' => 'Egyszerű szöveg szerkesztése',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Küldés egyszerű szövegként',
  'LBL_EDIT_MY_SETTINGS' => 'Beállításaim szerkesztése',
  'LBL_EMAIL_ATTACHMENT' => 'Email csatolmány',
  'LBL_EMAIL_EDITOR_OPTION' => 'Küldés HTML formátumban',
  'LBL_EMAIL_SELECTOR' => 'Válassza ki a',
  'LBL_EMAIL' => 'Email cím:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'Emailek: Kliensek',
  'LBL_EMAILS_BUGS_REL' => 'Emailek: Hibák',
  'LBL_EMAILS_CASES_REL' => 'Email: Esetek',
  'LBL_EMAILS_CONTACTS_REL' => 'Email: Kapcsolatok',
  'LBL_EMAILS_LEADS_REL' => 'Emailek: Ajánlások',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'Emailek: Lehetőségek',
  'LBL_EMAILS_NOTES_REL' => 'Emailek: Jegyzetek',
  'LBL_EMAILS_PROJECT_REL' => 'Emailek: Projekt',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'Emailek: Projektfeladat',
  'LBL_EMAILS_PROSPECT_REL' => 'Emailek: Lehetséges vevő',
  'LBL_EMAILS_TASKS_REL' => 'Emailek: Feladatok',
  'LBL_EMAILS_USERS_REL' => 'Emailek: Felhasználók',
  'LBL_EMPTY_FOLDER' => 'Nincs megjeleníthető Email',
  'LBL_ERROR_SENDING_EMAIL' => 'Email küldési hiba',
  'LBL_ERROR_SAVING_DRAFT' => 'Piszkozatokba mentési hiba',
  'LBL_FORWARD_HEADER' => 'Üzenet továbbítás indítása:',
  'LBL_FROM_NAME' => 'Feladó neve',
  'LBL_FROM' => 'Feladó:',
  'LBL_REPLY_TO' => 'Válasz:',
  'LBL_HTML_BODY' => 'HTML szövegtörzs',
  'LBL_INVITEE' => 'Címzettek',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Ajánlások',
  'LBL_MESSAGE_SENT' => 'Üzenet elküldve',
  'LBL_MODIFIED_BY' => 'Módosította',
  'LBL_MODULE_NAME_NEW' => 'Email archiválása',
  'LBL_MODULE_NAME' => 'Összes email',
  'LBL_MODULE_TITLE' => 'Emailek:',
  'LBL_MY_EMAILS' => 'Emailjeim',
  'LBL_NEW_FORM_TITLE' => 'Email archiválása',
  'LBL_NONE' => 'Egyik sem',
  'LBL_NOT_SENT' => 'Hibaüzenet küldés',
  'LBL_NOTE_SEMICOLON' => 'Megjegyzés: Használjon vesszőt vagy pontosvesszőt a címzettek elválasztásához.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Mellékletek',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Lehetőségek',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektfeladatok',
  'LBL_RAW' => 'Feldolgozatlan Email',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Piszkozat mentése',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Piszkozat mentése [Alt + R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Keresés a piszkozatokban',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Keresés az elküldött levelekben',
  'LBL_SEARCH_FORM_TITLE' => 'Email keresése',
  'LBL_SEND_ANYWAYS' => 'Ennek az emailnek nincs tárgya. Elküldjük/mentsük így is?',
  'LBL_SEND_BUTTON_LABEL' => 'Küldés',
  'LBL_SEND_BUTTON_TITLE' => 'Küldés [Alt + I]',
  'LBL_SEND' => 'KÜLD',
  'LBL_SENT_MODULE_NAME' => 'Elküldött Emailek',
  'LBL_SHOW_ALT_TEXT' => 'Egyszerű szöveg megjelenítés',
  'LBL_SIGNATURE' => 'Aláírás',
  'LBL_SUBJECT' => 'Tárgy:',
  'LBL_TEXT_BODY' => 'Szövegtörzs',
  'LBL_TIME' => 'Küldés ideje:',
  'LBL_TO_ADDRS' => 'Címzett',
  'LBL_USE_TEMPLATE' => 'Sablon használata:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Felhasználók',
  'LBL_USERS' => 'Felhasználók',
  'LNK_ALL_EMAIL_LIST' => 'Összes Email',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Archivált Email',
  'LNK_CALL_LIST' => 'Hívások',
  'LNK_DRAFTS_EMAIL_LIST' => 'Minden piszkozat',
  'LNK_EMAIL_LIST' => 'Emailek',
  'LBL_EMAIL_RELATE' => 'Társítva',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Email sablonok megtekintése',
  'LNK_MEETING_LIST' => 'Találkozók',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Email archiválása',
  'LNK_NEW_CALL' => 'Hívás naplózása',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Email sablon létrehozása',
  'LNK_NEW_EMAIL' => 'Email küldése',
  'LNK_NEW_MEETING' => 'Találkozó ütemezése',
  'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány létrehozása',
  'LNK_NEW_SEND_EMAIL' => 'Email írása',
  'LNK_NEW_TASK' => 'Feladat létrehozása',
  'LNK_NOTE_LIST' => 'Feljegyzés',
  'LNK_SENT_EMAIL_LIST' => 'Elküldött Emailek',
  'LNK_TASK_LIST' => 'Feladatok',
  'LNK_VIEW_CALENDAR' => 'Ma',
  'LBL_LIST_ASSIGNED' => 'Hozzárendelve',
  'LBL_LIST_CONTACT_NAME' => 'Kapcsolat neve:',
  'LBL_LIST_CREATED' => 'Létrehozva',
  'LBL_LIST_DATE_SENT' => 'Küldés dátum',
  'LBL_LIST_DATE' => 'Küldés dátuma',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Tervezet',
  'LBL_LIST_FORM_SENT_TITLE' => 'Elküldött emailek',
  'LBL_LIST_FORM_TITLE' => 'Email lista',
  'LBL_LIST_FROM_ADDR' => 'Feladó',
  'LBL_LIST_RELATED_TO' => 'Címzett típusa',
  'LBL_LIST_SUBJECT' => 'Tárgy',
  'LBL_LIST_TIME' => 'Küldés ideje',
  'LBL_LIST_TO_ADDR' => 'Címzett',
  'LBL_LIST_TYPE' => 'Típus',
  'NTC_REMOVE_INVITEE' => 'Biztosan el akarja távolítani ezt a címzettet az Emailből?',
  'WARNING_SETTINGS_NOT_CONF' => 'Figyelem: Az Ön email beállításaiban nincs konfigurálva a küldés.',
  'WARNING_NO_UPLOAD_DIR' => 'Csatolmány hiba: Nincs érték rendelve az "upload_tmp_dir" bejegyzéshez. Kérjük állítsa be a php.ini fájlban.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Csatolmány hiba: Az "upload_tmp_dir" bejegyzéshez megadott érték nem használható vagy hibás. Kérjük állítsa be helyesen a php.ini fájlban.',
  'LBL_BUTTON_RAW_TITLE' => 'Mutassa a feldolgozatlan üzeneteket [Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Mutassa a feldolgozatlan Emaileket',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Rejti a feldolgozatlan Emaileket',
  'LBL_BUTTON_CHECK' => 'Email ellenőrzése',
  'LBL_BUTTON_CHECK_TITLE' => 'Új Email ellenőrzése [Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Továbbítás',
  'LBL_BUTTON_FORWARD_TITLE' => 'Email továbbítása [Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Válasz [Alt + R]',
  'LBL_BUTTON_REPLY' => 'Válasz',
  'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
  'LBL_INBOUND_TITLE' => 'Bejövő Email',
  'LBL_INTENT' => 'Cél',
  'LBL_MESSAGE_ID' => 'Üzenet azonosító',
  'LBL_REPLY_HEADER_1' => 'a',
  'LBL_REPLY_HEADER_2' => 'írta:',
  'LBL_REPLY_TO_ADDRESS' => 'Válaszcím',
  'LBL_REPLY_TO_NAME' => 'Válaszcím neve',
  'LBL_LIST_BUG' => 'Hibák',
  'LBL_LIST_CASE' => 'Esetek',
  'LBL_LIST_CONTACT' => 'Kapcsolatok',
  'LBL_LIST_LEAD' => 'Ajánlások',
  'LBL_LIST_TASK' => 'Feladatok',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Hozzárendelt felhasználó',
  'LBL_ALL' => 'Mind',
  'LBL_ASSIGN_WARN' => 'Győződjön meg róla, hogy mind a két opció ki van választva.',
  'LBL_BACK_TO_GROUP' => 'Vissza az Inbox-hoz',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Hozzárendelés [Alt + A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Hozzárendelés',
  'LBL_BUTTON_GRAB_TITLE' => 'Elvétel a csoportból [Alt+T]',
  'LBL_BUTTON_GRAB' => 'Elvétel a csoportból',
  'LBL_CREATE_BUG' => 'Hiba létrehozása',
  'LBL_CREATE_CASE' => 'Eset létrehozása',
  'LBL_CREATE_CONTACT' => 'Kapcsolat létrehozása',
  'LBL_CREATE_LEAD' => 'Ajánlás létrehozása',
  'LBL_CREATE_TASK' => 'Feladat létrehozása',
  'LBL_DIST_TITLE' => 'Átruházás',
  'LBL_LOCK_FAIL_DESC' => 'A kiválasztott elem nem érhető el jelenleg.',
  'LBL_LOCK_FAIL_USER' => 'átvette.',
  'LBL_MASS_DELETE_ERROR' => 'Nem ellenőrzött tétel is törlésre került.',
  'LBL_NEW' => 'Új',
  'LBL_NEXT_EMAIL' => 'Következő szabad tétel',
  'LBL_NO_GRAB_DESC' => 'Nem áll rendelkezésre tétel. Próbálja meg később.',
  'LBL_QUICK_REPLY' => 'Válasz',
  'LBL_REPLIED' => 'Megválaszolva',
  'LBL_SELECT_TEAM' => 'Csoportok kiválasztása',
  'LBL_TAKE_ONE_TITLE' => 'Képviselő',
  'LBL_TITLE_SEARCH_RESULTS' => 'A keresés eredménye',
  'LBL_TO' => 'Címzett:',
  'LBL_TOGGLE_ALL' => 'Összes váltása',
  'LBL_UNKNOWN' => 'Ismeretlen',
  'LBL_UNREAD_HOME' => 'Olvasatlan e-mailek',
  'LBL_UNREAD' => 'Olvasatlan',
  'LBL_USE_ALL' => 'Összes keresés eredménye',
  'LBL_USE_CHECKED' => 'Csak az ellenőrzöttek',
  'LBL_USE_MAILBOX_INFO' => 'Feladóhoz használja: Cím',
  'LBL_USE' => 'Megjelöl:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Kiválasztottak hozzáadása a címzetthez:',
  'LBL_USER_SELECT' => 'Kiválasztott felhasználók',
  'LBL_USING_RULES' => 'Szabályok használata:',
  'LBL_WARN_NO_DIST' => 'Nincs kiválasztott terítési módszer',
  'LBL_WARN_NO_USERS' => 'Nincsenek kiválasztott felhasználók',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Válasszon felhasználót vagy csoportot a kijelöléshez',
  'LBL_IMPORT_STATUS_TITLE' => 'Állapot',
  'LBL_LIST_STATUS' => 'Állapot',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Csoport bejövő levelei',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Piszkozataim',
  'LBL_LIST_TITLE_MY_INBOX' => 'Bejövő leveleim',
  'LBL_LIST_TITLE_MY_SENT' => 'Elküldött Emailjeim',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archivált leveleim',
  'LBL_ACTIVITIES_REPORTS' => 'Tevékenységek jelentése',
  'LNK_CHECK_MY_INBOX' => 'Leveleim ellenőrzése',
  'LNK_DATE_SENT' => 'Küldés dátuma',
  'LNK_GROUP_INBOX' => 'Csoport bejövő levelei',
  'LNK_MY_DRAFTS' => 'Piszkozataim',
  'LNK_MY_INBOX' => 'Emailem',
  'LNK_VIEW_MY_INBOX' => 'Emailjeim megtekintése',
  'LNK_QUICK_REPLY' => 'Válasz',
  'LNK_MY_ARCHIVED_LIST' => 'Archiv leveleim',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nincs elsődleges csoport meghatározva',
  'LBL_ASSIGNED_TO' => 'Felelős:',
  'LBL_MEMBER_OF' => 'Szülő',
  'LBL_QUICK_CREATE' => 'Gyors létrehozás',
  'LBL_STATUS' => 'Email állapota:',
  'LBL_EMAIL_FLAGGED' => 'Megjelölt:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Válasz állapot:',
  'LBL_TYPE' => 'Típus:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Kérjük, ellenőrizze!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'A kiválasztott sablon felülír mindent a levéltörzsben. Szeretné folytatni?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Ez a kiválasztás kitöröl mindent a levéltörzsben. Szeretné folytatni?',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Figyelem:',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Email sablon használata során, beleértve az kliens változókat (kliens neve), ha egyszerre több címzettnek szeretné elküldeni, nagy valószínűséggel nem fog eljutni mindenkihez. Javasoljuk, használjon egy email kampányt egyszerre több email kiküldéséhez.',
  'LBL_CHECK_ATTACHMENTS' => 'Kérjük, ellenőrizze mellékletek!',
  'LBL_HAS_ATTACHMENTS' => 'Ez az email tartalmaz csatomány(oka)t. Szeretné megtartani az(oka)t?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Kötelező mezők hiányoznak',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Érvénytelen kötelező mező',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Csak a címzettekhez kapcsolódó',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'A címzettek hozzáadva.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Hozzáadás',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Hozzáadás',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Mail fiók tulajdonságai',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Kimenő SMTP levelező szerver',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Kimenő SMTP levelező szerver',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Mail fiókok',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Bejövő e-mail',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Kimenő e-mail',
  'LBL_ADD_CC' => 'Új Cc',
  'LBL_ADD_BCC' => 'Új Bcc',
  'LBL_ADD_TO_ADDR' => 'Hozzáad',
  'LBL_SELECTED_ADDR' => 'Kiválasztott',
  'LBL_ADD_CC_BCC_SEP' => 'I',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Hiba a levélküldésben',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'mutat',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'további',
  'LBL_MORE_OPTIONS' => 'További',
  'LBL_LESS_OPTIONS' => 'Kisebb',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Személyes',
  'LBL_MAILBOX_TYPE_GROUP' => 'Csoport',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Csoport - automatikus import',
  'LBL_SEARCH_FOR' => 'Keresés',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => 'Személy: Az email fiók elérhető. Csak Ön tudja használni és leveleket importálni belőle.<br>Csoport: Az email fiók elérhető a csoport tagjai számára. Csak ők tudják használni és leveleket importálni belőle.<br>Csoport - automatikus importálás: Az email fiók elérhető a csoport tagjai számára. A levelek automatikusan importálásra kerülnek.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Adja meg email címet, keresztnevet, vezetéknevet vagy a felhasználói nevet a címzettekben való megtaláláshoz.',
  'LBL_TEST_SETTINGS' => 'Teszt beállítások',
  'LBL_EMPTY_EMAIL_BODY' => 'Az üzenetnek nincs tartalma',
  'LBL_TEST_EMAIL_SUBJECT' => 'Teszt Email a Sugarból',
  'LBL_NO_SUBJECT' => '(nincs tárgy)',
  'LBL_CHECKING_ACCOUNT' => 'Fiók ellenőrzés',
  'LBL_OF' => 'a(z)',
  'LBL_TEST_EMAIL_BODY' => 'Ez a levél azért lett elküldve, hogy teszteljék a Sugar alkalmazás Mail Server beállításait. A sikeres megérkezés azt jelenti, hogy a beállítások helyesek és érvényesek.',
  'LBL_MAIL_SMTPUSER' => 'SMTP felhasználónév',
  'LBL_MAIL_SMTPPASS' => 'SMTP jelszó:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Mail szerver:',
  'LBL_SMTP_SERVER_HELP' => 'Ez az SMTP levelező szerver a kimenő levelekért felelős. Adjon meg egy felhasználó nevet és jelszót a Mail Server eléréséhez..',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'A administator még nem állította be az alapértelmezett kimenő fiókot. Nem sikerült elküldeni a teszt e-mailt.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP hitelesítés?',
  'LBL_MAIL_SMTPTYPE' => 'SMTP szerver típusa:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP szerver specifikációja',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válassza ki az e-mail szolgáltató:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail azonosító:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail Email cím:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
);
