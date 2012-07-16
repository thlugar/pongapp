<?php

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














if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$mod_strings = array (
   'ERR_DELETE_RECORD' => 'Pro vymazání zaměstnance musíte specifikovat číslo záznamu.',
   'ERR_EMAIL_NO_OPTS' => 'nepodařilo se njít optimální nastavení pro příchozí email.',
   'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Zadejete prosím pro potvrzení Vaše nové heslo.',
   'ERR_ENTER_NEW_PASSWORD' => 'Zadejete prosím Vaše nové heslo.',
   'ERR_ENTER_OLD_PASSWORD' => 'Zadejete prosím Vaše původní heslo.',
   'ERR_IE_FAILURE1' => 'Klikněte zde pro návrat',
   'ERR_IE_FAILURE2' => 'Nastal problém při připojování k emailovému účtu. Zkontrolujte Vaše nastavení a zkuste to znovu.',
   'ERR_IE_MISSING_REQUIRED' => 'V nastavení příchozí pošty chybí informace. Zkontrolujte prosím nastavení a zkuste to ještě jednou. Pokud nenastavujete příchozí poštu, nechte všechny položky v sekci prázdné.',
   'ERR_INVALID_PASSWORD' => 'Musíte zadat platné uživatelské jméno a heslo.',
   'ERR_LAST_ADMIN_1' => 'Uživatel \"',
   'ERR_LAST_ADMIN_2' => '\" je poslední uživatel s administrátorskmi právy. Nejméně jeden uživatel musí být administrátor.',
   'ERR_PASSWORD_CHANGE_FAILED_1' => 'Změna hesla pro uživatele ',
   'ERR_PASSWORD_CHANGE_FAILED_2' => ' selhalo. Nové heslo musí být zadáno.',
   'ERR_PASSWORD_INCORRECT_OLD_1' => 'Nesprávné staré heslo pro uživatele ',
   'ERR_PASSWORD_INCORRECT_OLD_2' => '. Napište heslo znovu.',
   'ERR_PASSWORD_MISMATCH' => 'Hesla se neschodují.',
   'ERR_REENTER_PASSWORDS' => 'Prosím napište znovu hesla. \"Nové heslo\" a \"Potvrzení hesla\" se neshodují.',
   'ERR_REPORT_LOOP' => 'System detekoval smyčku. Uživatel se nemůže zodpovídat sám sobě, nebo žádný jejich manažer se nemůže zodpovídat jemu.',
   'ERR_USER_NAME_EXISTS_1' => 'Uživatel ',
   'ERR_USER_NAME_EXISTS_2' => ' již existuje. Duplicitní názvy nejsou povoleny. Změňte uživatelovo jméno tak, aby bylo unikátní.',
   'LBL_ADDRESS_CITY' => 'Město:',
   'LBL_ADDRESS_COUNTRY' => 'Země:',
   'LBL_ADDRESS_INFORMATION' => 'Adresa',
   'LBL_ADDRESS_POSTALCODE' => 'PSČ:',
   'LBL_ADDRESS_STATE' => 'Kraj:',
   'LBL_ADDRESS_STREET' => 'Ulice:',
   'LBL_ADDRESS' => 'Adresa:',
   'LBL_ADMIN_TEXT' => 'Přidělení práv administrátora tomuto uživateli',
   'LBL_ADMIN' => 'Administrátor:',
   'LBL_ANY_EMAIL' => 'Email:',
   'LBL_ANY_PHONE' => 'Telefon:',
   'LBL_BUTTON_CREATE' => 'Přidat',
   'LBL_BUTTON_EDIT' => 'Editace',
   'LBL_CALENDAR_OPTIONS' => 'Nastavení kalendáře',
   'LBL_CHANGE_PASSWORD_BUTTON_KEY' => 'P',
   'LBL_CHANGE_PASSWORD_BUTTON_LABEL' => 'Změnit heslo',
   'LBL_CHANGE_PASSWORD_BUTTON_TITLE' => 'Změnit heslo [Alt+P]',
   'LBL_CHANGE_PASSWORD' => 'Změnit heslo',
   'LBL_CHOOSE_A_KEY' => 'Vyberte si klíč, kterým si chcete chránit svůj kalendář.',
   'LBL_CHOOSE_WHICH' => 'Zvolte které záložky zobrazit',
   'LBL_CITY' => 'Město',
   'LBL_CLEAR_BUTTON_TITLE' => 'Smazat',
   'LBL_CONFIRM_PASSWORD' => 'Potvrdit heslo:',
   'LBL_COUNTRY' => 'Země:',
   'LBL_CURRENCY_TEXT' => 'Zvolte výchozí měnu',
   'LBL_CURRENCY' => 'Měna',
   'LBL_CURRENCY_EXAMPLE' => 'Příklad zobrazení měny',
   'LBL_CURRENCY_SIG_DIGITS' => 'Příklad významným čísel',
   'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Počet destinných míst zobrazených pro měnu',
   'LBL_NUMBER_GROUPING_SEP' => 'Oddělovač tisíců',
   'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Znak oddělovače tisíců',
   'LBL_DECIMAL_SEP' => 'Desetinný oddělovač',
   'LBL_DECIMAL_SEP_TEXT' => 'Znak desetinného oddělovače',
   'LBL_DATE_FORMAT_TEXT' => 'Nastavit formát zobrazení datumu',
   'LBL_DATE_FORMAT' => 'Formát data:',
   'LBL_DEFAULT_SUBPANEL_TITLE' => 'Uživatelé',
   'LBL_DEPARTMENT' => 'Oddělení',
   'LBL_DESCRIPTION' => 'Popis',
   'LBL_DISPLAY_TABS' => 'Zobrazit záložky',
   'LBL_DST_INSTRUCTIONS' => '(+DST) ukazuje, že používáte letní čas',
   'LBL_EDIT_TABS' => 'Upravit záložky',
   'LBL_EDIT' => 'Editace',
   'LBL_EMAIL_OTHER' => 'Email 2:',
   'LBL_EMAIL' => 'Emailová adresa:',
   'LBL_EMAIL_CHARSET' => 'Znaková sada pro odchozí poštu',
   'LBL_EMAIL_EDITOR_OPTION' => 'Formát vytváření',
   'LBL_EMAIL_LINK_TYPE' => 'Emailový klient',
   'LBL_EMAIL_SHOW_COUNTS' => 'Zobrazovat počet emailů?',
   'LBL_EMAIL_SIGNATURE_ERROR1' => 'Tento podpis vyžaduje jméno.',
   'LBL_EMPLOYEE_STATUS' => 'Status zaměstnance:',
   'LBL_ERROR' => 'Chyba:',
   'LBL_EXPORT_CHARSET' => 'Znaková sada pro import/export',
   'LBL_EXPORT_CHARSET_DESC' => 'Vyberte znakovou sadu používanou ve vašem regionu. Bude použita pro import dat, odchozí emaily, .csv exporty, generování PDF and pro vytváření vCard.',
   'LBL_EXPORT_DELIMITER' => 'Oddělovat při exportu',
   'LBL_EXPORT_DELIMITER_DESC' => 'Zadejte znak/y, kterou budou použity k oddělení dat při exportu.',
   'LBL_FAX_PHONE' => 'Fax:',
   'LBL_FAX' => 'Fax:',
   'LBL_FIRST_NAME' => 'Jméno',
   'LBL_GRIDLINE_TEXT' => 'Řídí zobrazování vodících linek na podrobných náhledech',
   'LBL_GRIDLINE' => 'Zobrazovat dělící čáry?',
   'LBL_GROUP_DESC' => 'Chová se jako skupinový uživatel. Tento uživatel se nesmí přihlašovat přes webový interface. Tento užiatel je použit pro zapisování položek skupině přes příchozí email.',
   'LBL_GROUP_USER_STATUS' => 'Skupinový uživatel',
   'LBL_GROUP' => 'Skupinový uživatel',
   'LBL_HIDE_TABS' => 'Skrýt záložky',
   'LBL_HOME_PHONE' => 'Telefon domů:',
   'LBL_INBOUND_TITLE' => 'Informace o společnosti',
   'LBL_IS_ADMIN' => 'Je administrator',
   'LBL_LANGUAGE' => 'Jazyk:',
   'LBL_LAST_NAME' => 'Příjmení',
   'LBL_LAYOUT_OPTIONS' => 'Možnosti zobrazení',
   'LBL_LIST_ACCEPT_STATUS' => 'Přijato ?',
   'LBL_LIST_ADMIN' => 'Admin',
   'LBL_LIST_DEPARTMENT' => 'Oddělení',
   'LBL_LIST_EMAIL' => 'Email',
   'LBL_LIST_FORM_TITLE' => 'Uživatelé',
   'LBL_LIST_GROUP' => 'Skupina',
   'LBL_LIST_LAST_NAME' => 'Příjmení',
   'LBL_LIST_MEMBERSHIP' => 'Členství',
   'LBL_LIST_NAME' => 'Název',
   'LBL_LIST_PRIMARY_PHONE' => 'Telefon',
   'LBL_LIST_STATUS' => 'Stav',
   'LBL_LIST_TITLE' => 'Titul',
   'LBL_LIST_USER_NAME' => 'Uživatelské jméno',
   'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formát zobrazení jména',
   'LBL_LOCALE_DESC_FIRST' => 'První',
   'LBL_LOCALE_DESC_LAST' => '[Poslední]',
   'LBL_LOCALE_DESC_SALUTATION' => 'Oslovení',
   'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Příklad',
   'LBL_LOCALE_NAME_FORMAT_DESC' => 'Nastavte jak se budou zobrazovat jména',
   'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>\"s\" Oslovení <br>\"f\" Křestní jméno <br> \"l\" Příjmení</i>',
   'LBL_SAVED_SEARCH' => 'Uložená hledání a rozvržení',
   'LBL_LOGIN_BUTTON_KEY' => 'L',
   'LBL_LOGIN_BUTTON_LABEL' => 'Přihlásit',
   'LBL_LOGIN_BUTTON_TITLE' => 'Přihlášení [Alt+L]',
   'LBL_LOGIN_WELCOME_TO' => 'Vítejte v',
   'LBL_LOGIN_OPTIONS' => 'Volby',
   'LBL_MAIL_FROMADDRESS' => 'Odpovědní adresa:',
   'LBL_MAIL_FROMNAME' => 'Odpovědní jméno:',
   'LBL_MAIL_OPTIONS_TITLE' => 'Nastavení emailu',
   'LBL_MAIL_SENDTYPE' => 'Mail transfer agent:',
   'LBL_MAIL_SMTPAUTH_REQ' => 'Použít SMTP autentifikaci?',
   'LBL_MAIL_SMTPPASS' => 'SMTP heslo',
   'LBL_MAIL_SMTPPORT' => 'SMTP port',
   'LBL_MAIL_SMTPSERVER' => 'SMTP server',
   'LBL_MAIL_SMTPUSER' => 'SMTP uživatelské jméno',
   'LBL_MAILMERGE_TEXT' => 'Aktivovat spojování pošty (Tato funkce musí být povolena systémovým administrátorem)',
   'LBL_MAILMERGE' => 'Spojování mailů',
   'LBL_MAX_TAB' => 'Počet záložek k zobrazení:',
   'LBL_MAX_TAB_DESCRIPTION' => 'Počet záložek, které se zobrazí nahoře na stráce, než bude použit prvek přetečení menu',
   'LBL_MAX_SUBTAB' => 'Počet podzáložek',
   'LBL_MAX_SUBTAB_DESCRIPTION' => 'Počet podzáložek, které se zobrazí, než bude použit prvek přetečení menu',
   'LBL_MESSENGER_ID' => 'IM ID:',
   'LBL_MESSENGER_TYPE' => 'Typ IM:',
   'LBL_MOBILE_PHONE' => 'Mobil:',
   'LBL_MODULE_NAME' => 'Uživatelé',
   'LBL_MODULE_TITLE' => 'Uživatelé',
   'LBL_NAME' => 'Jméno:',
   'LBL_NAVIGATION_PARADIGM' => 'Navigační schéma',
   'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Použít seskupené záložky místo záložek modulů.',
   'LBL_NEW_FORM_TITLE' => 'Nový uživatel',
   'LBL_NEW_PASSWORD' => 'Nové heslo:',
   'LBL_NEW_PASSWORD1' => 'Heslo',
   'LBL_NEW_PASSWORD2' => 'Potvrdit heslo:',
   'LBL_NEW_USER_BUTTON_KEY' => 'N',
   'LBL_NEW_USER_BUTTON_LABEL' => 'Nový uživatel',
   'LBL_NEW_USER_BUTTON_TITLE' => 'Přidat uživatele [Alt+N]',
   'LBL_NOTES' => 'Poznámky',
   'LBL_OFFICE_PHONE' => 'Telefon do práce:',
   'LBL_OLD_PASSWORD' => 'Původní heslo:',
   'LBL_OTHER_EMAIL' => 'Další emailová adresa:',
   'LBL_OTHER_PHONE' => 'Další telefon:',
   'LBL_OTHER' => 'Jiné',
   'LBL_PASSWORD' => 'Heslo',
   'LBL_PHONE' => 'Telefon',
   'LBL_PICK_TZ_WELCOME' => 'Vítejte v Sugar Suite.',
   'LBL_PICK_TZ_DESCRIPTION' => 'Před pokračováním prosím potvrďte Vaši časovou zónu z výběrového listu. Později si můžete časovou zónu změnit v \"Můj účet\".',
   'LBL_PORTAL_ONLY_TEXT' => 'Chová se jako portálový uživatel. Tento uživatel se nesmí přihlašovat přes webový interface. Je použit jenom pro portálové služby. Normální uživatel nemůže být použit pro portálové služby.',
   'LBL_PORTAL_ONLY' => 'Přístup pouze k portálu:',
   'LBL_POSTAL_CODE' => 'PSČ:',
   'LBL_PRIMARY_ADDRESS' => 'Hlavní adresa:',
   'LBL_PROMPT_TIMEZONE_TEXT' => 'Zobrazit dotaz na potvrzení časové zóny při přihlášení uživatele?',
   'LBL_PROMPT_TIMEZONE' => 'Dotaz časové zóny:',
   'LBL_PUBLISH_KEY' => 'Uveřejňovací klíč:',
   'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Přímat emailové oznámení, když je Vám zadán úkol.',
   'LBL_RECEIVE_NOTIFICATIONS' => 'Oznámení při přidělení:',
   'LBL_REMINDER_TEXT' => 'Přidá upomínání před následujícím hovorem nebo schůzkou',
   'LBL_REMINDER' => 'Zobrazovat připomínání?',
   'LBL_REMOVED_TABS' => 'Záložky odstraněné administrátorem',
   'LBL_REPORTS_TO_NAME' => 'Podřízen(komu):',
   'LBL_REPORTS_TO' => 'Podřízen(komu):',
   'LBL_RESET_PREFERENCES' => 'Obnovit původní nastavení',
   'LBL_RESET_PREFERENCES_WARNING' => 'Jste si jistí, že se chcete vrátit d původnímu nastavení ?',
   'LBL_RESET_HOMEPAGE' => 'Nastavit původní titulní stránku [Homepage]',
   'LBL_RESET_DASHBOARD' => 'Reporty',
   'LBL_RESET_HOMEPAGE_WARNING' => 'Určitě obnovit nastavení titulní stránky ?',
   'LBL_ROLES_SUBPANEL_TITLE' => 'Role',
   'LBL_SEARCH_FORM_TITLE' => 'Vyhledat uživatele',
   'LBL_SEARCH_URL' => 'Adresa na prohlédávání:',
   'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Users',
   'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Users',
   'LBL_SETTINGS_URL_DESC' => 'Použijte tuto URL při nastavování Sugar Plug-in for Microsoft® Outlook® a Sugar Plug-in for Microsoft® Word®.',
   'LBL_SETTINGS_URL' => 'URL',
   'LBL_SIGNATURE' => 'Podpis',
   'LBL_SIGNATURE_HTML' => 'HTML podpis',
   'LBL_SIGNATURE_DEFAULT' => 'Použít podpis?',
   'LBL_SIGNATURE_PREPEND' => 'Podpis nad odpovědí?',
   'LBL_SIGNATURES' => 'Podpisy:',
   'LBL_STATE' => 'Stát',
   'LBL_STATUS' => 'Stav',
   'LBL_SUBPANEL_LINKS' => 'Odkazy na [panelu].',
   'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'V detailním pohledu zobrazit řádek [rychlých odkazů.]',
   'LBL_SUBPANEL_TABS' => 'Záložky [panelu]',
   'LBL_SUBPANEL_TABS_DESCRIPTION' => 'V detailním pohledu seskupit panely do záložek a zobrazit vždy pouze jednu záložku.',
   'LBL_SUGAR_LOGIN' => 'Je uživatel SugarCRM',
   'LBL_SUPPORTED_THEME_ONLY' => 'Projeví se pouze u témat, které tuto možnost podporují.',
   'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Pokud zaškrtnete tuto volbu, budou zobrazeny naposled použité položky na straně. Jinak budou normálně nahoře.',
   'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Zobrazit [rychlé odkazy] nahoře. Jinak budou normálně vlevo.',
   'LBL_SWAP_LAST_VIEWED_POSITION' => 'Naposledy prohlížené na straně.',
   'LBL_SWAP_SHORTCUT_POSITION' => 'Rychlé odkazy nahoře',
   'LBL_TAB_TITLE_EMAIL' => 'Emailové nastavení',
   'LBL_TAB_TITLE_USER' => 'Nastavení uživatele',
   'LBL_THEME' => 'Téma:',
   'LBL_TIME_FORMAT_TEXT' => 'Nastavit formát zobrazení času',
   'LBL_TIME_FORMAT' => 'Formát času:',
   'LBL_TIMEZONE_DST_TEXT' => 'Sledovat změnu letního času',
   'LBL_TIMEZONE_DST' => 'Letní čas:',
   'LBL_TIMEZONE_TEXT' => 'Nastavit aktuální časovou zónu',
   'LBL_TIMEZONE' => 'Časová zóna:',
   'LBL_TITLE' => 'Titul',
   'LBL_USE_REAL_NAMES' => 'Ukázat celé jméno',
   'LBL_USE_REAL_NAMES_DESC' => 'Ukázat celé jméno uživatele, místo standardně zobrazovaného uživatelského jména.',
   'LBL_USER_INFORMATION' => 'Informatice o uživateli',
   'LBL_USER_LOCALE' => 'Regionální nastavení',
   'LBL_USER_NAME' => 'Uživatelské jméno',
   'LBL_USER_SETTINGS' => 'Nastavení uživatele',
   'LBL_USER' => 'Uživatelé',
   'LBL_WORK_PHONE' => 'Telefon do práce:',
   'LBL_YOUR_PUBLISH_URL' => 'Umístění zobrazení:',
   'LBL_YOUR_QUERY_URL' => 'Vaše Query URL:',
   'LNK_NEW_USER' => 'Vytvořit uživatele',
   'LNK_USER_LIST' => 'Uživatelé',
   'LBL_APPLY_OPTIMUMS' => 'Aplikovat optimální',
   'LBL_ASSIGN_TO_USER' => 'Přiřadit uživateli',
   'LBL_BASIC' => 'Příchozí nastavení',
   'LBL_CERT_DESC' => 'Vynutit ověření platnosti bezpečtnostního  certifikátu  mail serveru - nepoužívejte tuto volbu pokud se sami přihlašujete.',
   'LBL_CERT' => 'Schválit platnost certifikátu',
   'LBL_FIND_OPTIMUM_KEY' => 'f',
   'LBL_FIND_OPTIMUM_MSG' => 'Nalezení optimálních proměných připojení.',
   'LBL_FIND_OPTIMUM_TITLE' => 'Nalézt optimální konfiguraci',
   'LBL_FORCE' => 'Nutit negativní',
   'LBL_FORCE_DESC' => 'Některé IMAP/POP3 servery potřebují speciální přepínače. Check to force a negative switch when connecting (i.e., /notls)',
   'LBL_FOUND_OPTIMUM_MSG' => 'Nalezeno optimální nastavení. Stiskněte tlačítko níže pro uložení.',
   'LBL_EMAIL_INBOUND_TITLE' => 'Nastavení přícozího emailu',
   'LBL_EMAIL_OUTBOUND_TITLE' => 'Nastavení odchozího emailu',
   'LBL_LOGIN' => 'Uživatelské jméno',
   'LBL_MAILBOX_DEFAULT' => 'INBOX',
   'LBL_MAILBOX_SSL_DESC' => 'se SSL when connecting. If this does not work, check that your PHP installation included \"--with-imap-ssl\" in the configuration.',
   'LBL_MAILBOX' => 'Monitorovaná složka',
   'LBL_MAILBOX_TYPE' => 'Možné akce',
   'LBL_MARK_READ_NO' => 'Po importu emaily smazat',
   'LBL_MARK_READ_YES' => 'Po importu ponechat zprávy na serveru',
   'LBL_MARK_READ_DESC' => 'Importuj a označ zprávy na serveru jako přečtené; nemazat.',
   'LBL_MARK_READ' => 'Zanechat zprávy na serveru',
   'LBL_ONLY_SINCE_NO' => 'Ne. Zkontrovat všchny zprávy na serveru.',
   'LBL_ONLY_SINCE_YES' => 'Ano',
   'LBL_ONLY_SINCE_DESC' => 'PHP cannot discern New from Unread messages when using POP3. Check this flag to scan for messages SINCE the last time the mailbox was polled. This will significantly improve performance if your mail server cannot support IMAP.',
   'LBL_ONLY_SINCE' => 'Importovat pouze od poslední kontroly',
   'LBL_PORT' => 'Port mailserveru',
   'LBL_SERVER_OPTIONS' => 'Pokročilé nastavení',
   'LBL_SERVER_TYPE' => 'Protokol mailserveru',
   'LBL_SERVER_URL' => 'Adresa mail serveru',
   'LBL_SSL' => 'Použít SSL',
   'LBL_SSL_DESC' => 'Použít Secure Socket Layer při připojování na Váš mail server',
   'LBL_TEST_BUTTON_KEY' => 't',
   'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
   'LBL_TEST_SETTINGS' => 'Otestovat nastavení',
   'LBL_TEST_SUCCESSFUL' => 'Připojení bylo ukončno úspěšně.',
   'LBL_TLS_DESC' => 'Use Transport Layer Security when connecting to the mail server - only use this if your mail server supports this protocol.',
   'LBL_TLS' => 'Použít TLS',
   'LBL_TOGGLE_ADV' => 'Zobrazit rozšířené',
   'LBL_OWN_OPPS' => 'Nemá obchody',
   'LBL_OWN_OPPS_DESC' => 'Zaškrtnout v případě, že uživatel nebude spravovat žádné obchody. Měli byste toto políčko ignorovat pro uživatele, kteří nejsou manažery a nejsou zapojeni do obchodních aktivit. Používá se pro modul předpovědi',
   'LBL_LDAP_ERROR' => 'LDAP chyba: Prosím kontaktujte správce systému.',
   'LBL_LDAP_EXTENSION_ERROR' => 'LDAP chyba: Rozšíření nejsou nahrána.',
   'LBL_RESOURCE_NAME' => 'Název',
   'LBL_RESOURCE_TYPE' => 'Typ',
   'LBL_ASSIGN_PRIVATE_TEAM' => '(private team on save)',
   'LBL_ASSIGN_TEAM' => 'Přiděl týmu',
   'LBL_DEFAULT_TEAM_TEXT' => 'Teams available to appear by default in records are those of which you are a member.',
   'LBL_DEFAULT_TEAM' => 'Defaultní Tým',
   'LBL_LIST_DESCRIPTION' => 'Popis',
   'LBL_MY_TEAMS' => 'Můj tým',
   'LBL_PRIVATE_TEAM_FOR' => 'Soukromý tým pro',
   'LNK_EDIT_TABS' => 'Edituj záložky',
   'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Jsi si jist, že chceš odebrat toto členství?',
   'LBL_TEAMS' => 'Týmy',
   'LBL_TEAM_UPLINE' => 'Člen reportuje komu',
   'LBL_TEAM_UPLINE_EXPLICIT' => 'člen',
   'LNK_IMPORT_USERS' => 'Import uživatelů',
   'ERR_EMAIL_INCORRECT' => 'Zadej správný email pokud chceš zaslat uživateli informaci o heslu.',
   'ERR_NO_LOGIN_MOBILE' => 'Tvůj první login do aplikace nesmí být proveden přes mobilní telefon, ale přes normální prohlížec z důvodů nastavení systému',
   'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Musíte zadat správnou adresu a heslo',
   'ERR_PASSWORD_LINK_EXPIRED' => 'Váš odkaz vypršel, generujte prosím nový',
   'ERR_RULES_NOT_MET' => 'Heslo, které jste vložili neodpovídá pořadavkům na heslo. Prosím vložte nové.',
   'ERR_USER_INFO_NOT_FOUND' => 'Info o uživateli nenalezeno',
   'ERR_USER_IS_LOCKED_OUT' => 'Tento uživatel je zamknut a tímto heslem se nepřihlásí .',
   'LBL_PASSWORD_SENT' => 'Heslo aktualizováno',
   'LBL_CANNOT_SEND_PASSWORD' => 'Nelze poslat heslo',
   'ERR_EMAIL_NOT_SENT_ADMIN' => 'Systém nemůže provést Váš požadavek. Prosím zkontrolujte:',
   'ERR_SMTP_URL_SMTP_PORT' => 'SMTP Server URL a Port',
   'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP Username a  SMTP Password',
   'ERR_RECIPIENT_EMAIL' => 'Email Adresu příjemce',
   'ERR_SERVER_STATUS' => 'Status Vašeho serveru',
   'ERR_SERVER_SMTP_EMPTY' => 'System není schopen odeslat email. Prosím ověřte nastavení odesílání pošty na <a href="index.php?module=EmailMan&action=config">Email Settings</a>.',
   'LBL_ADMIN_USER' => 'System Administrator User',
   'LBL_ADMIN_DESC' => 'Uživatel může vstupovat do všech administrativních modulů bez vztahu na členství v týmech.',
   'LBL_REGULAR_DESC' => 'Uživatel může vstupovat do modulů na základě nastavení rolí a týmů.',
   'LBL_ADVANCED' => 'Pokročilé',
   'LBL_ANY_ADDRESS' => 'Any adresa:',
   'LBL_CHANGE_SYSTEM_PASSWORD' => 'Prosím vytvoře nové heslo',
   'LBL_CHANGE_PASSWORD_TITLE' => 'Heslo',
   'LBL_CONFIRM_REGULAR_USER' => 'You have changed the user type from System Administrator User to Regular User.  After saving this change, the user will no longer have system administrator privileges.\n\nClick “OK�? to proceed.\nClick “Cancel�? to return to the record.',
   'LBL_DOWNLOADS' => 'Downloads',
   'LBL_USER_HASH' => 'Password',
   'LBL_AUTHENTICATE_ID' => 'Authentication Id',
   'LBL_ACCOUNT_NAME' => 'Account Name',
   'LBL_USER_PREFERENCES' => 'User Preferences',
   'LBL_EXT_AUTHENTICATE' => 'External Authentication',
   'LBL_EMAIL_GMAIL_DEFAULTS' => 'Prefill Gmail&#153; Defaults',
   'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar Mail Client:</b> Send emails using the email client in the Sugar application.<br><b>External Mail Client:</b> Send email using an email client outside of the Sugar application, such as Microsoft Outlook.',
   'LBL_EMAIL_NOT_SENT' => 'System is unable to process your request. Please contact the system administrator.',
   'LBL_EMAIL_PROVIDER' => 'Email Provider',
   'LBL_EMAIL_SMTP_SSL' => 'Enable SMTP over SSL',
   'LBL_EMAIL_TEMPLATE_MISSING' => 'No email template is selected for the email containing the password that will be sent to the user.  Please select an email template in the Password Management page.',
   'LBL_EMPLOYEE_INFORMATION' => 'Employee Information',
   'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
   'LBL_SYSTEM_GENERATED_PASSWORD' => 'System Generated Password',
   'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Reset Password',
   'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Reset Password [Alt+G]',
   'LBL_GENERATE_PASSWORD' => 'Reset Password',
   'LBL_GROUP_USER' => 'Skupina uživatelů',
   'LBL_LAST_NAME_SLASH_NAME' => 'Příjmení/Jméno',
   'LBL_LDAP' => 'LDAP',
   'LBL_LDAP_AUTHENTICATION' => 'LDAP Authentication',
   'LBL_LIST_PASSWORD' => 'Heslo',
   'LBL_LOCALE_DESC_TITLE' => '[Název]',
   'LBL_PICTURE_FILE' => 'Obrázek',
   'LBL_LOGIN_FORGOT_PASSWORD' => 'Zapomněl heslo?',
   'LBL_LOGIN_SUBMIT' => 'Submit',
   'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Mnoho marných pokusů o login.',
   'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Můžete to zkusit znovu ',
   'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dny.',
   'LBL_LOGIN_LOGIN_TIME_HOURS' => 'h.',
   'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
   'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sec.',
   'LBL_LOGIN_ADMIN_CALL' => 'Prosím kontaktujte system administrator.',
   'LBL_MODIFIED_BY' => 'Modifikováno kym',
   'LBL_MODIFIED_BY_ID' => 'ID modifikátora',
   'LBL_SIGNATURE_NAME' => 'Jméno',
   'LBL_NEW_USER_PASSWORD_1' => 'Heslo bylo vyměněno.',
   'LBL_NEW_USER_PASSWORD_2' => 'Bylo odesláno vygenerované heslo na uživatele.',
   'LBL_NEW_USER_PASSWORD_3' => 'Helso bylo vytvořeno úspěšně.',
   'LBL_NORMAL_LOGIN' => 'Přepnout do normálního modu',
   'LBL_PASSWORD_GENERATED' => 'Nové heslo vygenerováno',
   'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Vaše heslo vypršelo. Nastavte si nové.',
   'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Vaše heslo je generované systémem',
   'LBL_PASSWORD_EXPIRATION_TIME' => 'Vaše heslo vypršelo. Nastavte si nové.',
   'LBL_PSW_MODIFIED' => 'heslo naposledy změněno',
   'LBL_PORTAL_ONLY_DESC' => 'Use for the Portal API. This type cannot login through the Sugar web interface.',
   'LBL_PORTAL_ONLY_USER' => 'Portal API User',
   'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Zadejte User Name a Email Adresu.',
   'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Vygeneruj další unikát',
   'LBL_RECAPTCHA_SOUND' => 'Přepnout na hlas',
   'LBL_RECAPTCHA_IMAGE' => 'Přepnout na obrázek',
   'LBL_RECAPTCHA_INSTRUCTION' => 'Zadej dvě uvedené slova',
   'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Zadej dvě slova napravo',
   'LBL_RECAPTCHA_FILL_FIELD' => 'Napiš text z obrázku.',
   'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Špatně opsaný unikát',
   'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'The challenge parameter of the verify Recaptcha script was incorrect.',
   'LBL_RECAPTCHA_UNKNOWN' => 'Neznámý error v unikátu',
   'LBL_REGISTER' => 'Nový uživatel. Registrujte se prosím ',
   'LBL_REGULAR_USER' => 'Regulérní uživatel',
   'LBL_REPORTS_TO_ID' => 'Nadřízený ID:',
   'LBL_REQUEST_SUBMIT' => 'Váš požadavek byl schválen.',
   'LBL_RESET_TO_DEFAULT' => 'Reset to Default',
   'LBL_RESET_PREFERENCES_WARNING_USER' => 'Jste si jist, že chcete smazat všechny nastavení pro tohoto uživatele?',
   'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Jste si jist, že chcete smazat všechny nastavení homepage pro tohoto uživatele??',
   'LBL_SALUTATION' => 'Oslovení',
   'LBL_THEME_COLOR' => 'Barva',
   'LBL_THEME_FONT' => 'Font',
   'LBL_USER_TYPE' => 'User Typ',
   'LBL_USER_ACCESS' => 'Přístup',
   'LNK_NEW_PORTAL_USER' => 'Vytvoř Portal API User',
   'LNK_NEW_GROUP_USER' => 'Vytvoř Group User',
   'LNK_REASSIGN_RECORDS' => 'Předej záznam',
   'LBL_PROSPECT_LIST' => 'Prospect List',
   'LBL_PROCESSING' => 'Procesuji',
   'LBL_UPDATE_FINISH' => 'Update completní',
   'LBL_AFFECTED' => 'postižené',
   'LBL_USER_NAME_FOR_ROLE' => 'Uživatelé/Týmy/Role',
   'LBL_TOO_MANY_CONCURRENT' => 'This session has ended because another session has been started under the same username.',
   'LBL_REASS_SCRIPT_TITLE' => 'Přeřazení záznamu',
   'LBL_REASS_DESC_PART1' => 'Najdi všechny záznamy v modulu přiřazené tomuto uživateli a přehod je na jiného uživatele.',
   'LBL_REASS_STEP2_TITLE' => 'Přeřazení týmu',
   'LBL_REASS_STEP2_DESC' => 'The teams listed below were available in the from user\'s team, but not in the to user\'s team. All records in the From User\'s team will not be visible in the To User team unless the team values are mapped. ',
   'LBL_REASS_USER_FROM_TEAM' => 'Od týmu uživatelů:',
   'LBL_REASS_USER_TO_TEAM' => 'Pro tým uživatelů:',
   'LBL_REASS_USER_FROM' => 'Od uživatele:',
   'LBL_REASS_USER_TO' => 'Pro uživatele:',
   'LBL_REASS_TEAM_TO' => 'Nastav týmy na:',
   'LBL_REASS_TEAMS_GOOD_MSG' => 'The To user has access to all of the From user\'s teams. No mapping necessary. Redirecting to the next page in 5 seconds.',
   'LBL_REASS_TEAM_NO_CHANGE' => '-- Beze změny --',
   'LBL_REASS_NOT_PROCESSED' => 'Nebude zprocesováno:',
   'LBL_REASS_MOD_REASSIGN' => 'Moduly, které budou reasociovány:',
   'LBL_REASS_FILTERS' => 'Filtry',
   'LBL_REASS_NOTES_TITLE' => 'Poznámky:',
   'LBL_REASS_NOTES_ONE' => 'Assigning records to yourself will not trigger assignment notifications.',
   'LBL_REASS_NOTES_TWO' => 'Including Workflow, Notifications, and Audit tracking in the reassignment is significantly slower.',
   'LBL_REASS_NOTES_THREE' => 'Even if you don\'t include Auditing, the Date Modified and Modified By are still updated accordingly.',
   'LBL_REASS_VERBOSE_OUTPUT' => 'Verbose output (applies only to reassignment tasks that include workflows)',
   'LBL_REASS_ASSESSING' => 'Assessing',
   'LBL_REASS_RECORDS_FROM' => 'Záznam od',
   'LBL_REASS_WILL_BE_UPDATED' => 'bude aktualizován.',
   'LBL_REASS_WORK_NOTIF_AUDIT' => 'Zahrnuje Workflow/Upozornění/Audit (significantly slower)',
   'LBL_REASS_SUCCESS_ASSIGN' => 'Successfully assigned',
   'LBL_REASS_FROM' => 'from',
   'LBL_REASS_TO' => 'to',
   'LBL_REASS_TEAM_SET_TO' => 'and teams were set to',
   'LBL_REASS_FAILED_SAVE' => 'Failure to save for record',
   'LBL_REASS_THE_FOLLOWING' => 'The following',
   'LBL_REASS_HAVE_BEEN_UPDATED' => 'have been updated:',
   'LBL_REASS_CANNOT_PROCESS' => 'could not be processed:',
   'LBL_REASS_NONE' => 'žádný',
   'LBL_REASS_UPDATE_COMPLETE' => 'Update hotov',
   'LBL_REASS_SUCCESSFUL' => 'Úspěšné',
   'LBL_REASS_FAILED' => 'Selhalo',
   'LBL_REASS_BUTTON_SUBMIT' => 'Potvrď',
   'LBL_REASS_BUTTON_CLEAR' => 'Vymaž',
   'LBL_REASS_BUTTON_CONTINUE' => 'Continue',
   'LBL_REASS_BUTTON_GO_BACK' => 'Jdi zpět',
   'LBL_REASS_BUTTON_RESTART' => 'Restart',
   'LBL_REASS_BUTTON_RETURN' => 'Zpátky',
   'LBL_REASS_CONFIRM_REASSIGN' => 'Would you like to reassign all of this user\'s records?',
   'ERR_REASS_SELECT_MODULE' => 'Please go back and select at least one module.',
   'ERR_REASS_DIFF_USERS' => 'Please select an assign to user that is different from the assign from user.',
   'LBL_EXTERNAL_AUTH_ONLY' => 'Ověřuj tohoto uživatele pouze přes',
   'LBL_ONLY' => 'Pouze',
   'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Uživatelské volno',
   'LBL_PDF_SETTINGS' => 'PDF nastavení',
   'LBL_PDF_PAGE_FORMAT' => 'Formát strany',
   'LBL_PDF_PAGE_FORMAT_TEXT' => 'Format použit na stránky',
   'LBL_PDF_PAGE_ORIENTATION' => 'Orientace stánky',
   'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
   'LBL_PDF_PAGE_ORIENTATION_P' => 'na výšku',
   'LBL_PDF_PAGE_ORIENTATION_L' => 'na šířku',
   'LBL_PDF_MARGIN_HEADER' => 'Okraj hlavičky',
   'LBL_PDF_MARGIN_HEADER_TEXT' => '',
   'LBL_PDF_MARGIN_FOOTER' => 'Okraj patičky',
   'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
   'LBL_PDF_MARGIN_TOP' => 'Horní okraj',
   'LBL_PDF_MARGIN_TOP_TEXT' => '',
   'LBL_PDF_MARGIN_BOTTOM' => 'Spodní okraj',
   'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
   'LBL_PDF_MARGIN_LEFT' => 'Levý okraj',
   'LBL_PDF_MARGIN_LEFT_TEXT' => '',
   'LBL_PDF_MARGIN_RIGHT' => 'Pravý okraj',
   'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
   'LBL_PDF_FONT_NAME_MAIN' => 'Font pro hlavičku a tělo',
   'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Vybraný font bude použit na hlavičku tělo PDF dokumentu',
   'LBL_PDF_FONT_SIZE_MAIN' => 'Hlavní Font velikost',
   'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
   'LBL_PDF_FONT_NAME_DATA' => 'Font na patičku',
   'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Vybraný fotn bude použit na patičku PDF dokumentu',
   'LBL_PDF_FONT_SIZE_DATA' => 'Data Font velikost',
   'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
   'LBL_LAST_ADMIN_NOTICE' => 'Vybrali jste sami sebe. Nemužete změnit parametry u sebe.',
   'LBL_SMTP_SERVER_HELP' => 'Tento SMTP server může být použit na odesílání emailu. Prosím vložte Vaše uži.jméno a heslo.',
   'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrator jeste nenastavil odesílání emalů. Email nemuze byt odeslan .',
   'LBL_MAIL_SMTPTYPE' => 'SMTP Server Type:',
   'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
   'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyber Email providera:',
   'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail heslo:',
   'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
   'LBL_GMAIL_SMTPPASS' => 'Gmail heslo:',
   'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
   'LBL_EXCHANGE_SMTPPASS' => 'Exchange heslo:',
   'LBL_EXCHANGE_SMTPUSER' => 'Exchange uživatel:',
   'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
   'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
   'LBL_WIZARD_TITLE' => 'User Wizard',
   'LBL_WIZARD_WELCOME_TAB' => 'Vítejte',
   'LBL_WIZARD_WELCOME_TITLE' => 'Vítej v Cukru!',
   'LBL_WIZARD_WELCOME' => 'Klini <b>další</b> pro konfiguraci některých základních parametrů v Sugar.',
   'LBL_WIZARD_WELCOME_NOSMTP' => 'Klini <b>další</b> pro konfiguraci některých základních parametrů v Sugar.',
   'LBL_WIZARD_NEXT_BUTTON' => 'Další >',
   'LBL_WIZARD_BACK_BUTTON' => '< Zpět',
   'LBL_WIZARD_SKIP_BUTTON' => 'Přeskočit',
   'LBL_WIZARD_FINISH_BUTTON' => 'Dokončit',
   'LBL_WIZARD_FINISH_TAB' => 'Dokončit',
   'LBL_WIZARD_FINISH_TITLE' => 'Nyní můžeš používat SUGAR!Jupí!',
   'LBL_WIZARD_FINISH' => 'Klikni <b>Dokončit</b> pro nastavení úprav sugaru. Pro více info:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>Get a head start with training and resources for end-users, power-users and system administrators at Sugar University.</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product documentation to get you started with all flavors of Sugar and official Sugar Plug-Ins and extensions.</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>A collection of articles on accomplishing common tasks and answers to frequently asked questions.</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><img src=include/images/wiki.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/wiki" target="_blank"><b>Wiki</b></a><br>A collection of articles on accomplishing common tasks and answers to frequently asked questions.</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Community and Sugar team members hang out here dicussing all things Sugar.</td></tr>
</table>',
   'LBL_WIZARD_PERSONALINFO' => 'Your Information',
   'LBL_WIZARD_LOCALE' => 'Your Locale',
   'LBL_WIZARD_SMTP' => 'Your Email Account',
   'LBL_WIZARD_PERSONALINFO_DESC' => 'Provide information about yourself. The information you provide about yourself will be visible to other Sugar users.<br />Fields marked with <span class="required">*</span> are required.',
   'LBL_WIZARD_LOCALE_DESC' => 'Specify your time zone and how you would like dates, currencies and names to appear in Sugar.',
   'LBL_WIZARD_SMTP_DESC' => 'Provide your email account username and password for the default outbound email server.',
);
?>