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
  'LBL_EDITLAYOUT' => 'Layout bearbeiten',
  'LBL_CURRENCIES' => 'Currencies',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Name',
  'LBL_TEAM_ID' => 'Team ID',
  'LBL_EXPORT_NAME' => 'Name',
  'LBL_MODULE_NAME' => 'Verkaufschancen',
  'LBL_MODULE_TITLE' => 'Verkaufschancen: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Verkaufschancen Suche',
  'LBL_VIEW_FORM_TITLE' => 'Verkaufschancen Ansicht',
  'LBL_LIST_FORM_TITLE' => 'Verkaufschancen Liste',
  'LBL_OPPORTUNITY_NAME' => 'Verkaufschance Name:',
  'LBL_OPPORTUNITY' => 'Verkaufschance:',
  'LBL_NAME' => 'Verkaufschance Name',
  'LBL_INVITEE' => 'Kontakte',
  'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
  'LBL_LIST_AMOUNT' => 'Betrag',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Betrag Standardwährung:',
  'LBL_LIST_DATE_CLOSED' => 'Schließen',
  'LBL_LIST_SALES_STAGE' => 'Verkaufsphase',
  'LBL_ACCOUNT_ID' => 'Firma ID',
  'LBL_CURRENCY_ID' => 'Währungs ID',
  'LBL_CURRENCY_NAME' => 'Währungsname',
  'LBL_CURRENCY_SYMBOL' => 'Währungssymbol',
  'UPDATE' => 'Währung aktualisieren',
  'UPDATE_DOLLARAMOUNTS' => 'Euro Beträge aktualisieren',
  'UPDATE_VERIFY' => 'Beträge überprüfen',
  'UPDATE_VERIFY_TXT' => 'Überprüft, ob alle angegebenen Werte gültige Dezimalwerte sind (bestehend aus den Zahlen 0 - 9 und dem Dezimaltrennzeichen)',
  'UPDATE_FIX' => 'Beträge reparieren',
  'UPDATE_FIX_TXT' => 'Versucht ungültige Beträge über das Setzen korrekter Dezimalzeichen zu korrigieren. Für jeden geänderten Betrag existiert eine Sicherungskopie im Datenbankfeld amount_backup. Falls Sie diese Funktion aufrufen und Fehler feststellen, müssen Sie vor einem erneuten Versuch erst die alten Beträge, die sich im Backup befinden, wieder herstellen, da ansonsten Ihre ursprünglichen Einträge in der Datenbank mit den fehlerhaften Beträgen überschrieben werden.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Hier werden die Beträge der Angebote basierend auf dem angegebenen Wechselkurs neu berechnet. Diese Werte werden für die Graphiken und die Währungstabellen genutzt.',
  'UPDATE_CREATE_CURRENCY' => 'Neue Währung:',
  'UPDATE_VERIFY_FAIL' => 'Datensatz konnte nicht verifiziert werden',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktueller Betrag:',
  'UPDATE_VERIFY_FIX' => 'Berichtigter Betrag:',
  'UPDATE_INCLUDE_CLOSE' => 'Auch abgeschlossenen Angebote überprüfen',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Neuer Betrag:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Neue Währung:',
  'UPDATE_DONE' => 'Fertig',
  'UPDATE_BUG_COUNT' => 'Gefundene Fehler, deren Behebung versucht wurde:',
  'UPDATE_BUGFOUND_COUNT' => 'Gefundene Fehler:',
  'UPDATE_COUNT' => 'Bearbeitete Einträge:',
  'UPDATE_RESTORE_COUNT' => 'Wiederhergestellte Beträge:',
  'UPDATE_RESTORE' => 'Betrag wiederherstellen',
  'UPDATE_RESTORE_TXT' => 'Stellt die Beträge wieder her, welche während der Reparatur gesichert wurden.',
  'UPDATE_FAIL' => 'Update konnte nicht durchgeführt werden -',
  'UPDATE_NULL_VALUE' => 'Betragsfeld ist leer und wird deshalb auf 0 gesetzt -',
  'UPDATE_MERGE' => 'Währungen zusammenführen',
  'UPDATE_MERGE_TXT' => 'Zusammenführen mehrerer Währungen in eine. Falls Sie feststellen, dass mehrere Einträge mit der gleichen Währung vorhanden sind, können Sie diese zusammenführen. Dies gilt analog für alle anderen Module.',
  'LBL_ACCOUNT_NAME' => 'Firmenname:',
  'LBL_AMOUNT' => 'Betrag:',
  'LBL_AMOUNT_USDOLLAR' => 'Betrag Standardwährung:',
  'LBL_CURRENCY' => 'Währung',
  'LBL_DATE_CLOSED' => 'Abschluss geplant:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_NEXT_STEP' => 'Nächster Schritt:',
  'LBL_LEAD_SOURCE' => 'Quelle:',
  'LBL_SALES_STAGE' => 'Verkaufsphase:',
  'LBL_PROBABILITY' => 'Wahrscheinlichkeit (%):',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DUPLICATE' => 'Eventuelles Verkaufschancen-Duplikat',
  'MSG_DUPLICATE' => 'Die Verkaufschance die Sie gerade erstellen, könnte eine Dublette einer bereits bestehenden Verkaufschance sein. Verkaufschancen mit ähnlichen Namen sind unten aufgeführt.<br>Drücken Sie auf Speichern um fortzusetzen oder auf Abbrechen um zum Modul zurückzukehren ohne die Verkaufschance zu speichern.',
  'LBL_NEW_FORM_TITLE' => 'Neue Verkaufschance',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_OPPORTUNITY_REPORTS' => 'Verkaufschancen Berichte',
  'LNK_OPPORTUNITY_LIST' => 'Verkaufschancen',
  'ERR_DELETE_RECORD' => 'Die Datensatznummer muss angegeben werden, sonst kann der Datensatz nicht gelöscht werden.',
  'LBL_TOP_OPPORTUNITIES' => 'Liste der Top-Verkaufschancen',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich aus dieser Verkaufschance entfernen?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Möchten Sie dieses Verkaufschance wirklich von diesem Projekt entfernen?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verkaufschancen',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
  'LBL_RAW_AMOUNT' => 'Ges. Summe',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Angebote',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumente',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
  'LBL_CONTRACTS' => 'Verträge',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Verträge',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Meine geschlossenen Verkaufschancen',
  'LBL_TOTAL_OPPORTUNITIES' => 'Summe Verkaufschancen',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnene Verkaufschancen',
  'LBL_ASSIGNED_TO_ID' => 'Bearbeiter',
  'LBL_CREATED_ID' => 'Ersteller',
  'LBL_MODIFIED_ID' => 'Geändert von ID',
  'LBL_MODIFIED_NAME' => 'Modifizierter Benutzer',
  'LBL_CREATED_USER' => 'Erstellter Benutzer',
  'LBL_MODIFIED_USER' => 'Veränderter Benutzer',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagnen',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
  'LABEL_PANEL_ASSIGNMENT' => 'Aufgabe',
  'LNK_IMPORT_OPPORTUNITIES' => 'Verkaufschancen importieren',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Kampagnen ID',
  'LBL_OPPORTUNITY_TYPE' => 'Verkaufschancentyp',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugewiesen Benutzer',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Bearbeiter:',
  'LBL_EXPORT_CREATED_BY' => 'Ersteller',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Verknüpfte Kontakt E-Mails',
);

