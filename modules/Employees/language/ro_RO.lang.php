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
  'LBL_USER_TYPE' => 'Tipul Utilizatorului',
  'LBL_EMAIL_LINK_TYPE' => 'Client Email',
  'LBL_EMAIL_LINK_TYPE_HELP' => 'Client Email Sugar: Expediaza email-uri utilizand clientul de email din cadrul aplicatiei Sugar.<br />Client Email Extern: Expediaza email-uri utilizand un client de email din afara aplicatie Sugar, precum Microsoft Outlook.',
  'LBL_SELECT' => 'Selecteaza',
  'LBL_FF_CLEAR' => 'Sterge',
  'LBL_AUTHENTICATE_ID' => 'Id-ul de autentificare',
  'LBL_EXT_AUTHENTICATE' => 'Autentificare Externa',
  'LBL_GROUP_USER' => 'Grup Utilizatori',
  'LBL_LIST_ACCEPT_STATUS' => 'Accept Statut',
  'LBL_MODIFIED_BY' => 'Modificata de',
  'LBL_MODIFIED_BY_ID' => 'Modificata de ID',
  'LBL_CREATED_BY_NAME' => 'Creat de',
  'LBL_PORTAL_ONLY_USER' => 'Portal API utilizator',
  'LBL_PSW_MODIFIED' => 'parola a fost schimbata',
  'LBL_USER_HASH' => 'Parola:',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Parola generata de sistem',
  'LBL_PICTURE_FILE' => 'Poza',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_STATUS' => 'Stare',
  'LBL_ADDRESS_CITY' => 'Orasul adresa',
  'LBL_ADDRESS_COUNTRY' => 'Tara adresa',
  'LBL_ADDRESS_POSTALCODE' => 'Adresa cod posta',
  'LBL_ADDRESS_STATE' => 'Statul adresa',
  'LBL_ADDRESS_STREET' => 'Strada adresa',
  'LBL_DATE_MODIFIED' => 'Data Modificarii',
  'LBL_DATE_ENTERED' => 'Data intrarii',
  'LBL_DELETED' => 'Stearsa',
  'LBL_LOGIN' => 'Login',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_ADMIN' => 'Administrator:',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_MODULE_NAME' => 'Angajati',
  'LBL_MODULE_TITLE' => 'Angajati: Acasa',
  'LBL_SEARCH_FORM_TITLE' => 'Cauta Angajat',
  'LBL_LIST_FORM_TITLE' => 'Angajati',
  'LBL_NEW_FORM_TITLE' => 'Angajat Nou',
  'LBL_EMPLOYEE' => 'Angajati',
  'LBL_RESET_PREFERENCES' => 'Revenire la setarile initiale',
  'LBL_TIME_FORMAT' => 'Formatul timpului',
  'LBL_DATE_FORMAT' => 'Formatul datei',
  'LBL_TIMEZONE' => 'Timpul curent',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_LIST_NAME' => 'Nume',
  'LBL_LIST_LAST_NAME' => 'Prenume',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nume angajat',
  'LBL_LIST_DEPARTMENT' => 'Departament',
  'LBL_LIST_REPORTS_TO_NAME' => 'Raporteaza lui',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefon Primar',
  'LBL_LIST_USER_NAME' => 'Nume Utilizator',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Angajat nou [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Angajat nou',
  'LBL_ERROR' => 'Eroare:',
  'LBL_PASSWORD' => 'Parola:',
  'LBL_EMPLOYEE_NAME' => 'Nume angajat:',
  'LBL_USER_NAME' => 'Nume utilizator:',
  'LBL_FIRST_NAME' => 'Nume:',
  'LBL_LAST_NAME' => 'Prenume:',
  'LBL_EMPLOYEE_SETTINGS' => 'Setarile angajatului',
  'LBL_THEME' => 'Tema',
  'LBL_LANGUAGE' => 'Limba',
  'LBL_EMPLOYEE_INFORMATION' => 'Informatii angajat',
  'LBL_OFFICE_PHONE' => 'Telefon Birou',
  'LBL_REPORTS_TO' => 'Raporteaza catre Id:',
  'LBL_REPORTS_TO_NAME' => 'Raporteaza catre',
  'LBL_OTHER_PHONE' => 'Altul',
  'LBL_OTHER_EMAIL' => 'Alt Email',
  'LBL_NOTES' => 'Note',
  'LBL_DEPARTMENT' => 'Departament',
  'LBL_TITLE' => 'Titlu:',
  'LBL_ANY_ADDRESS' => 'Oricare Adresa:',
  'LBL_ANY_PHONE' => 'Oricare Telefon:',
  'LBL_ANY_EMAIL' => 'Oricare Email:',
  'LBL_ADDRESS' => 'Adresa:',
  'LBL_CITY' => 'Oras',
  'LBL_STATE' => 'Stat:',
  'LBL_POSTAL_CODE' => 'Cod Postal:',
  'LBL_COUNTRY' => 'Tara:',
  'LBL_NAME' => 'Nume',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_OTHER' => 'Altul:',
  'LBL_FAX' => 'Fax:',
  'LBL_EMAIL' => 'Adresa Email:',
  'LBL_HOME_PHONE' => 'Telefon Acasa:',
  'LBL_WORK_PHONE' => 'Telefon Serviciu:',
  'LBL_ADDRESS_INFORMATION' => 'Informatii Adresa',
  'LBL_EMPLOYEE_STATUS' => 'Statut Angajat:',
  'LBL_PRIMARY_ADDRESS' => 'Adresa Primara:',
  'LBL_SAVED_SEARCH' => 'Setari Aspect',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Creeaza Utilizator [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Creeaza Utiliztor',
  'LBL_FAVORITE_COLOR' => 'Culoare Favorita',
  'LBL_MESSENGER_ID' => 'IM Nume:',
  'LBL_MESSENGER_TYPE' => 'IM Tip:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Numele angajatului',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'exista deja. Dublarea numelui angajatului nu este admisa. Schimba numele angajatului pentru a fi unic',
  'ERR_LAST_ADMIN_1' => 'Numele angajatului "',
  'ERR_LAST_ADMIN_2' => '" este ultimul angajat cu acces de administrator. Cel putin un angajat trebuie sa fie administrator',
  'LNK_NEW_EMPLOYEE' => 'Creeaza Angajat',
  'LNK_EMPLOYEE_LIST' => 'Vizualizeaza Angajati',
  'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge contul',
  'LBL_DEFAULT_TEAM' => 'Echipa implicita',
  'LBL_DEFAULT_TEAM_TEXT' => 'Selecteaza echipa implicita pentru noua inregistrare',
  'LBL_MY_TEAMS' => 'Echiplele mele',
  'LBL_LIST_DESCRIPTION' => 'Descriere',
  'LNK_EDIT_TABS' => 'Editeaza fila',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Esti sigura ca vrei sa stergi acest angajat \\ membru',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Statut Angajat',
  'LBL_SUGAR_LOGIN' => 'Este Utilizator Sugar',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notifica in Cesiune',
  'LBL_IS_ADMIN' => 'Este Administrator',
  'LBL_GROUP' => 'Grup Utilizatori',
  'LBL_PORTAL_ONLY' => 'Portal Utilizator',
  'LBL_PHOTO' => 'Fotografie',
  'LBL_DELETE_USER_CONFIRM' => 'Acest Angajat este deasemenea un Utilizator. Stergerea inregistrarii angajatului va sterge deasemenea si inregistrarile utilizatorului si utilizatorul nu va mai avea acces la aplicatie. Tu vrei sa procedezi la stergerea acestei inregistrari ?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Esti sigur ca doresti sa stergi acest angajat?',
);

