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
  'LBL_USER_TYPE' => 'Typ uživatele',
  'LBL_EMAIL_LINK_TYPE' => 'Emailový klient',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b> Sugar poštovní klient: </ b> Odeslat e-mail pomocí e-mailového klienta v aplikaci Sugar! <b> Externí poštovní klient:. </ b> Odeslat e-mail pomocí e-mailového klienta mimo aplikaci Sugar, jako je např. Microsoft Outlook.',
  'LBL_ONLY_ACTIVE' => 'Aktivní zaměstnanci',
  'LBL_SELECT' => 'Zvolit',
  'LBL_FF_CLEAR' => 'Vyčistit',
  'LBL_AUTHENTICATE_ID' => 'ID ověření',
  'LBL_EXT_AUTHENTICATE' => 'Externí ověření',
  'LBL_GROUP_USER' => 'Skupinový uživatel',
  'LBL_LIST_ACCEPT_STATUS' => 'Přijmout stav',
  'LBL_MODIFIED_BY' => 'Upraveno kým',
  'LBL_MODIFIED_BY_ID' => 'Změněno uživatelem ID',
  'LBL_CREATED_BY_NAME' => 'Vytvořeno uživatelem',
  'LBL_PORTAL_ONLY_USER' => 'Portál API užívatel',
  'LBL_PSW_MODIFIED' => 'heslo naposledy změněno',
  'LBL_SHOW_ON_EMPLOYEES' => 'Zobrazit záznam zaměstnance',
  'LBL_USER_HASH' => 'Heslo',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systémem generované heslo',
  'LBL_PICTURE_FILE' => 'Obrázek',
  'LBL_DESCRIPTION' => 'Popis',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_STATUS' => 'Stav',
  'LBL_ADDRESS_CITY' => 'Město',
  'LBL_ADDRESS_COUNTRY' => 'Země',
  'LBL_ADDRESS_POSTALCODE' => 'PSČ',
  'LBL_ADDRESS_STATE' => 'Stát',
  'LBL_ADDRESS_STREET' => 'Ulice',
  'LBL_DATE_MODIFIED' => 'Datum poslední úpravy',
  'LBL_DATE_ENTERED' => 'Datum vložení',
  'LBL_DELETED' => 'Odstranit',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_MODULE_NAME' => 'Zaměstnanci',
  'LBL_MODULE_TITLE' => 'Zaměstnanci',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat zaměstnance',
  'LBL_LIST_FORM_TITLE' => 'Zaměstnanci',
  'LBL_NEW_FORM_TITLE' => 'Nový zaměstnanec',
  'LBL_EMPLOYEE' => 'Zaměstnanci:',
  'LBL_LOGIN' => 'Přihlásit',
  'LBL_RESET_PREFERENCES' => 'Obnovit původní nastavení',
  'LBL_TIME_FORMAT' => 'Formát času:',
  'LBL_DATE_FORMAT' => 'Formát datumu:',
  'LBL_TIMEZONE' => 'Časové pásmo:',
  'LBL_CURRENCY' => 'Měna:',
  'LBL_LIST_NAME' => 'Název',
  'LBL_LIST_LAST_NAME' => 'Příjmení',
  'LBL_LIST_EMPLOYEE_NAME' => 'Jméno zaměstnance',
  'LBL_LIST_DEPARTMENT' => 'Oddělení',
  'LBL_LIST_REPORTS_TO_NAME' => 'Podřízen(komu)',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefon',
  'LBL_LIST_USER_NAME' => 'Uživatelské jméno',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nový zaměstnanec [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nový zaměstnanec',
  'LBL_ERROR' => 'Chyba:',
  'LBL_PASSWORD' => 'Heslo:',
  'LBL_EMPLOYEE_NAME' => 'Jméno zaměstnance:',
  'LBL_USER_NAME' => 'Uživatelské jméno:',
  'LBL_FIRST_NAME' => 'Křestní jméno:',
  'LBL_LAST_NAME' => 'Příjmení:',
  'LBL_EMPLOYEE_SETTINGS' => 'Nastavení zaměstnance',
  'LBL_THEME' => 'Téma:',
  'LBL_LANGUAGE' => 'Jazyk:',
  'LBL_ADMIN' => 'Administrátor:',
  'LBL_EMPLOYEE_INFORMATION' => 'Informace o zaměstnanci',
  'LBL_OFFICE_PHONE' => 'Telefon do práce:',
  'LBL_REPORTS_TO' => 'Podřízen(komu):',
  'LBL_REPORTS_TO_NAME' => 'Nadřízený/Reports to',
  'LBL_OTHER_PHONE' => 'Další telefon:',
  'LBL_OTHER_EMAIL' => 'Další email:',
  'LBL_NOTES' => 'Poznámky:',
  'LBL_DEPARTMENT' => 'Oddělení:',
  'LBL_TITLE' => 'Titul:',
  'LBL_ANY_ADDRESS' => 'Jakákoli adresa:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_ANY_EMAIL' => 'Email:',
  'LBL_ADDRESS' => 'Adresa:',
  'LBL_CITY' => 'Město:',
  'LBL_STATE' => 'Stát:',
  'LBL_POSTAL_CODE' => 'PSČ:',
  'LBL_COUNTRY' => 'Země:',
  'LBL_NAME' => 'Název:',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_OTHER' => 'Další telefon:',
  'LBL_FAX' => 'Fax:',
  'LBL_EMAIL' => 'Email:',
  'LBL_HOME_PHONE' => 'Telefon domů:',
  'LBL_WORK_PHONE' => 'Telefon do zaměstnání:',
  'LBL_ADDRESS_INFORMATION' => 'Adresní informace',
  'LBL_EMPLOYEE_STATUS' => 'Status zaměstnance:',
  'LBL_PRIMARY_ADDRESS' => 'Hlavní adresa:',
  'LBL_SAVED_SEARCH' => 'Volby rozvržení',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Přidat uživatele [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Vytvořit uživatele',
  'LBL_FAVORITE_COLOR' => 'Oblíbená barva:',
  'LBL_MESSENGER_ID' => 'IM ID:',
  'LBL_MESSENGER_TYPE' => 'Typ IM:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Zaměstnanec',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'již existuje. Duplicitní jméno zaměstnance není dovoleno.  Změnte prosím jméno zaměstnance aby bylo unikátní.',
  'ERR_LAST_ADMIN_1' => 'Zaměstnanec',
  'ERR_LAST_ADMIN_2' => '" je poslední zaměstnanec s profilem administrátora. Minimálně jeden zaměstnanec musí mít profil administrátora.',
  'LNK_NEW_EMPLOYEE' => 'Přidat zaměstnance',
  'LNK_EMPLOYEE_LIST' => 'Zaměstnanci',
  'ERR_DELETE_RECORD' => 'Pro vymazání zaměstnance musíte specifikovat číslo záznamu.',
  'LBL_DEFAULT_TEAM' => 'Základní tým:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Přiřazuje základní tým k novým záznamům',
  'LBL_MY_TEAMS' => 'Moje týmy',
  'LBL_LIST_DESCRIPTION' => 'Popis',
  'LNK_EDIT_TABS' => 'Upravit záložky',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Jste si jisti, že chcete odstranit tohoto zaměstnance z týmu?',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Stav',
  'LBL_SUGAR_LOGIN' => 'Je uživatel SugarCRM',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Oznámení při přidělení',
  'LBL_IS_ADMIN' => 'Je administrator',
  'LBL_GROUP' => 'Skupinový uživatel',
  'LBL_PORTAL_ONLY' => 'Přístup pouze k portálu',
  'LBL_PHOTO' => 'Fotografie',
  'LBL_DELETE_USER_CONFIRM' => 'Tento zaměstnanec je zároveň i uživatel. Odstraněním tohoto zaměstnance dojde k odstranění i uživatele a uživatel se již nebude moci přihlásit od aplikace. Chcete pokračovat v odstranění totoho záznamu?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Jste si jist(a), že chcete odstranit tohoto zaměstnance?',
);

