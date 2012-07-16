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
  'LBL_REMOVE' => 'Treure',
  'LBL_EDIT_INLINE' => 'Editar',
  'LBL_ID' => 'ID',
  'LBL_NUMBER' => 'LBL_NUMBER',
  'LBL_TEXT_BODY' => 'LBL_TEXT_BODY',
  'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
  'LBL_TAG_ID' => 'LBL_TAG_ID',
  'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
  'LBL_LIST_DOCUMENT' => 'Document',
  'LBL_ARTICLE_IN_TREE_HOVER' => 'Article',
  'LBL_ARTICLES_IN_TREE_HOVER' => 'Articles',
  'LBL_TREE_TITLE' => 'Documents',
  'LBL_MODULE_NAME' => 'KBDocuments',
  'LBL_MODULE_TITLE' => 'Article de Base de Coneixement',
  'LNK_NEW_ARTICLE' => 'Crear Article',
  'LNK_KBDOCUMENT_LIST' => 'Llista de Documents',
  'LBL_DOC_REV_HEADER' => 'Versions de Document',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Documents',
  'LBL_KBDOC_TAGS' => 'Etiquetes:',
  'LBL_KBDOC_BODY' => 'Cos:',
  'LBL_KBDOC_APPROVED_BY' => 'Aprovat Per:',
  'LBL_KBDOC_ATTACHMENT' => 'Document Adjunt',
  'LBL_KBDOC_ATTS_TITLE' => 'Descargar Adjunts:',
  'LBL_SEND_EMAIL' => 'Enviar Correu',
  'LBL_SELECT_TAG_BUTTON_TITLE' => 'Seleccionar',
  'LBL_ATTACHMENTS' => 'Adjunts:',
  'LBL_EMBEDED_IMAGES' => 'Imátges Incrustades:',
  'LBL_SHOW_ARTICLE_DETAILS' => 'Mostrar Més Detalls',
  'LBL_HIDE_ARTICLE_DETAILS' => 'Amagar Detalls',
  'LBL_TAGS' => 'Etiquetes:',
  'LBL_NOT_AN_ADMIN_USER' => 'No es un usuario administrador',
  'LBL_NOT_A_VALID_FILE' => 'No es un arxiu vàlid',
  'LBL_SELECT_A_NODE_FROM_TREE' => 'Crear Nova Etiqueta',
  'LBL_SEARCH' => 'Buscar',
  'LBL_NEW_TAG_NAME' => 'Nou Nom d´Etiqueta:',
  'LBL_KBDOCUMENT_ID' => 'Id de Document',
  'LBL_ARTICLE_TITLE' => 'Títol:',
  'LBL_ARTICLE_AUTHOR' => 'Autor:',
  'LBL_ARTICLE_APPROVED_BY' => 'Aprobador:',
  'LBL_ARTICLE_BODY' => 'Cos d´Article:',
  'LBL_NAME' => 'Nom de Document:',
  'LBL_DESCRIPTION' => 'Descripció',
  'LBL_CATEGORY' => 'Categoria',
  'LBL_SUBCATEGORY' => 'Subcategoría',
  'LBL_STATUS' => 'Estat',
  'LBL_CREATED_BY' => 'Creat per',
  'LBL_DATE_ENTERED' => 'Data de Creació',
  'LBL_DATE_MODIFIED' => 'Última Modificació',
  'LBL_DELETED' => 'Eliminat',
  'LBL_MODIFIED' => 'Modificat per id',
  'LBL_MODIFIED_USER' => 'Modificat per',
  'LBL_CREATED' => 'Creat per',
  'LBL_RELATED_DOCUMENT_ID' => 'Id Document Relacionat',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Id Versió Document Relacionat',
  'LBL_IS_TEMPLATE' => 'Es una Plantilla',
  'LBL_TEMPLATE_TYPE' => 'Tipus de Document',
  'LBL_PARENT_TYPE' => 'Tipus de Padre',
  'LBL_REVISION_NAME' => 'Número de Versió',
  'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Número de Versió KBDocument',
  'LBL_MIME' => 'Tipus MIME',
  'LBL_REVISION' => 'Versió',
  'LBL_DOCUMENT' => 'Document Relacionat',
  'LBL_LATEST_REVISION' => 'Id Última Versió',
  'LBL_LATEST_REVISION_NAME' => 'Nom de l´Última Versió',
  'LBL_SELECTED_REVISION_NAME' => 'Nom de la Versió Seleccionada',
  'LBL_CHANGE_LOG' => 'Registre de Canvis',
  'LBL_ACTIVE_DATE' => 'Data de Publicació',
  'LBL_EXPIRATION_DATE' => 'Data de Caducitat',
  'LBL_FILE_EXTENSION' => 'Extensió d´Arxiu',
  'LBL_KNOWLEDGE_BASE_SEARCH' => 'BASE DE CONEIXEMENT',
  'LBL_KNOWLEDGE_BASE_ADMIN' => 'ADMIN DE BASE DE CONEIXEMENT',
  'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Admin de Base de Coneixement',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Sense Especificar',
  'LBL_DOC_NAME' => 'Nom de Document:',
  'LBL_FILENAME' => 'Nom d´Arxiu:',
  'LBL_DOC_VERSION' => 'Versió:',
  'LBL_CATEGORY_VALUE' => 'Categoria:',
  'LBL_SUBCATEGORY_VALUE' => 'Subcategoría:',
  'LBL_DOC_STATUS' => 'Estat:',
  'LBL_LAST_REV_CREATOR' => 'Versió Creada Per:',
  'LBL_LAST_REV_DATE' => 'Data de Versió:',
  'LBL_DOWNNLOAD_FILE' => 'Adjunts:',
  'LBL_DET_RELATED_DOCUMENT' => 'Document Relacionat:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Versió del Document Relacionat:',
  'LBL_DET_IS_TEMPLATE' => 'Plantilla? :',
  'LBL_DET_TEMPLATE_TYPE' => 'Tipus de Document:',
  'LBL_IS_EXTERNAL_ARTICLE' => 'Article Extern? :',
  'LBL_SHOW_TAGS' => 'Mostrar Més Etiquetes',
  'LBL_HIDE_TAGS' => 'Amagar Etiquetes',
  'LBL_TEAM' => 'Equip:',
  'LBL_DOC_DESCRIPTION' => 'Descripció:',
  'LBL_KBDOC_SUBJECT' => 'Assumpte:',
  'LBL_DOC_ACTIVE_DATE' => 'Data de Publicació:',
  'LBL_DOC_EXP_DATE' => 'Data de Caducitat:',
  'LBL_LIST_ARTICLES' => 'Articles',
  'LBL_LIST_FORM_TITLE' => 'Llista de Documents',
  'LBL_LIST_CATEGORY' => 'Categoria',
  'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
  'LBL_LIST_REVISION' => 'Versió',
  'LBL_LIST_LAST_REV_CREATOR' => 'Publicat Per',
  'LBL_LIST_LAST_REV_DATE' => 'Data de Revisión',
  'LBL_LIST_VIEW_DOCUMENT' => 'Veure',
  'LBL_LIST_DOWNLOAD' => 'Descarregar',
  'LBL_LIST_ACTIVE_DATE' => 'Data de Publicació',
  'LBL_LIST_EXP_DATE' => 'Data de Caducitat',
  'LBL_LIST_STATUS' => 'Estat',
  'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
  'LBL_LIST_MOST_VIEWED' => 'Artícules Més Visitats',
  'LBL_LIST_MOST_RECENT' => 'Artícules Més Recents',
  'LBL_SF_DOCUMENT' => 'Nom del Document:',
  'LBL_SF_CATEGORY' => 'Categoria:',
  'LBL_SF_SUBCATEGORY' => 'Subcategoría:',
  'LBL_SF_ACTIVE_DATE' => 'Data de Publicació:',
  'LBL_SF_EXP_DATE' => 'Data de Caducitat:',
  'DEF_CREATE_LOG' => 'Document Creat',
  'LBL_TAB_SEARCH' => 'Recerca',
  'LBL_TAB_BROWSE' => 'Explorar',
  'LBL_TAB_ADVANCED' => 'Avançat',
  'LBL_MENU_FTS' => 'Recerca de Text Complert',
  'LBL_FTS_EMPTY_STRING' => 'No és possible realitzar una recerca de text complet en una cadena buida',
  'LBL_SEARCH_WITHIN' => 'Buscar en:',
  'LBL_CONTAINING_THESE_WORDS' => 'Que continguin aquestes paraules:',
  'LBL_EXCLUDING_THESE_WORDS' => 'Excloent aquestes paraules:',
  'LBL_UNDER_THIS_TAG' => 'Usant aquesta etiqueta:',
  'LBL_PUBLISHED' => 'Publicat:',
  'LBL_EXPIRES' => 'Caduca:',
  'LBL_TIMES_VIEWED' => 'Frecuència de Visualització:',
  'LBL_SAVE_SEARCH_AS' => 'Guardar aquesta recerca com a:',
  'LBL_SAVE_SEARCH_AS_HELP' => 'Guarda les entrades especificades com un filtre de Recerca Guardada per a la Base de Coneixement.',
  'LBL_PREVIOUS_SAVED_SEARCH' => 'Recercas Guardades Anteriors:',
  'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Editar o Esborrar una Recerca Guardada existent.',
  'LBL_UPDATE' => 'Actualitzar',
  'LBL_DELETE' => 'Esborrar',
  'LBL_SHOW_OPTIONS' => 'Més Opcions',
  'LBL_AND' => 'i',
  'LBL_CLEAR' => 'Netejar',
  'LBL_LIST_KBDOC_APPROVER_NAME' => 'Nom del Aprobador',
  'LBL_LIST_VIEWING_FREQUENCY' => 'Frecuència',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'La vista preliminar no està disponible, no s´ha trobat el registre del Document.',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'La vista preliminar no està disponible, el Document existeix, però encara no s´ha creat cap contingut.',
  'LBL_UNTAGGED_ARTICLES_NODE' => 'Articles sense Etiquetar',
  'LBL_TOP_TEN_LIST_TITLE' => '10 Articles Més Vistos',
  'LBL_SHOW_SYNTAX_HELP' => 'Ajuda sobre la Sintaxis',
  'LBL_MISMATCH_QUOTES_ERR' => 'La seva consulta no funcionarà tal qual l´ha introduït.	Hi ha d´haver una cometa doble de tancament per cada doble cometa d´obertura, de manera que estiguin aparellades.	Si desitja buscar una cadena que inclou una cometa doble, usi la barra invertida ( ") com a caràcter d´escapada al costat de les cometes dobles',
  'LBL_SYNTAX_CHEAT_SHEET' => '<B>Ajut sobre la Sintaxi de les Consultes:</b><P>         <ol> <li>El signe més (+) indica que els resultats "han de tenir" aquest terme.</li> <li>El signe menys (-) indica que els resultats no haurien de tenir" el terme.	El signe menys (-) no és necessari si està omplint el camp de text per a paraules que han de ser excloses.</li> <li>Les paraules múltiples entre cometes dobles ("ejemplo1 ejemplo2") es tracten com un únic terme de recerca.	Hi ha d´haver un conjunt d´obertura de cometes dobles i un altre de tancament o la recerca no funcionará.<br>Para buscar les pròpies cometes dobles, usi la barra invertida ( ") com a caràcter d´escapada al costat de les cometes dobles.</li> <li>Una cometa simple (&#39;) serà buscada com a tal, i no com una agrupació.</li></ol>          </p>          <p><b>Exemple: </b><br><br>         Per buscar tots els articles amb les paraules "Sugar" o "el CRM" que hagin de tenir les paraules "Base de Coneixement" i "genial, " però que no han de tenir les paraules "demo" o "temps passat", introdueixi la següent cadena:<br>&nbsp;&nbsp;&nbsp;&nbsp;Sugar CRM +"Base de Coneixement" +genial -demo - "temps passat"</p><br>          <p><b>Notes: </b><br> <ol><li>La capitalització de les lletres no es tindrà en compte.</li> <li>Els espais i les comes són ambdós delimitadors acceptats.</li> <li>No posi un espai entre els signes més (+) o menys (-) i les paraules que afecten.</li></ol> </p>',
  'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Etiqueta Hija',
  'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Etiquetes Hijas',
  'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Aquesta etiqueta conté',
  'ERR_DOC_NAME' => 'Nom del Document',
  'ERR_DOC_ACTIVE_DATE' => 'Data de Publicació',
  'ERR_DOC_EXP_DATE' => 'Data de Caducitat',
  'ERR_FILENAME' => 'Nom d´Arxiu',
  'ERR_DOC_VERSION' => 'Versió del Document',
  'ERR_DELETE_CONFIRM' => 'Desitja eliminar aquesta versió del document?',
  'ERR_DELETE_LATEST_VERSION' => 'No se li permet suprimir l´última revisió d´un document.',
  'LNK_NEW_MAIL_MERGE' => 'Combinar Correspondència',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Plantilla per Combinar Correspondència:',
  'LBL_LIST_DOCUMENT_NAME' => 'Nom de Document',
  'LBL_CONTRACT_NAME' => 'Nom de Contracte:',
  'LBL_LIST_IS_TEMPLATE' => 'Plantilla?',
  'LBL_LIST_TEMPLATE_TYPE' => 'Tipus de Document',
  'LBL_LIST_SELECTED_REVISION' => 'Versió Seleccionada',
  'LBL_LIST_LATEST_REVISION' => 'Última Versió',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos Relacionats',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Correus Relacionats',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contractes Relacionats',
  'LBL_LAST_REV_CREATE_DATE' => 'Data de Creació de l´Última Versió',
  'LBL_KEYWORDS' => 'Paraules clau:',
  'LBL_CASES' => 'Casos',
  'LBL_EMAILS' => 'Correus',
  'LBL_DEFAULT_ADMIN_MESSAGE' => 'Seleccioni una acció de la llista desplegable',
  'LBL_SELECT_PARENT_TAG_MESSAGE' => 'Seleccioni l´etiqueta padre del arbre',
  'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Seleccioni les etiquetes a eliminar del arbre',
  'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' => 'Seleccioni l´etiqueta a renombrar del arbre',
  'LBL_TAG_ALREADY_EXISTS' => 'L´etiqueta ja existeix',
  'LBL_TYPE_THE_NEW_TAG_NAME' => 'Introdueixi el nou nom d´etiqueta',
  'LBL_SAVING_THE_TAG' => 'Guardant l´Etiqueta...',
  'LBL_CREATING_NEW_TAG' => 'Creant Nova Etiqueta...',
  'LBL_TAGS_ROOT_LABEL' => 'Etiquetes',
  'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Les Etiquetes de FAQ no poden ser rebatejades',
  'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Seleccioni Articles Primer',
  'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Seleccioni Articles als que Aplicar Etiquetes',
  'LBL_SELECT_ARTICLES_TO_DELETE' => 'Seleccioni Articles Primer',
  'LBL_SELECT_TAGS_TO_DELETE' => 'Seleccioni les Etiquetes a eliminar',
  'LBL_SELECT_A_TAG_FROM_TREE' => 'Seleccioni una Etiqueta del Arbre',
  'LBL_SELECT_TAGS_FROM_TREE' => 'Seleccioni Etiquetes del Arbre',
  'LBL_MOVING_ARTICLES_TO_TAG' => 'Movent articles a etiqueta ...',
  'LBL_APPLYING_TAGS_TO_ARTICLES' => 'Aplicant etiquetes a articles ...',
  'LBL_ROOT_TAG_MESSAGE' => 'L´etiqueta arrel no pugues ésser seleccionada/enllaçada a un article',
  'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'L´etiqueta arrel no pot ser rebatejada',
  'LBL_TYPE_NEW_NODE_NAME' => 'Si us plau, escriu un nom d´etiqueta',
  'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Les etiquetes Origen i Destí són la mateixa',
  'LBL_DELETE_TAG' => 'Esborrar Etiqueta',
  'LBL_SELECT_TAG' => 'Seleccionar Etiqueta',
  'LBL_APPLY_TAG' => 'Aplicar Etiqueta',
  'LBL_MOVE' => 'Moure',
  'LBL_LAUNCHING_TAG_BROWSING' => 'Llançant Explorador d´Etiquetes ...',
  'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Ha ocorregut un error en gestionar aquesta petició d´etiquetes.',
  'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' => 'Error: No és un element d´entrada d´arxiu',
  'LBL_CREATE_NEW_TAG' => 'Crear Nova Etiqueta',
  'LBL_SEARCH_TAG' => 'Recerca',
  'LBL_TAG_NAME' => 'Nom d´Etiqueta:',
  'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Introdueixi el nom d´etiqueta a buscar',
  'LBL_KB_NOTIFICATION' => 'El Document ha estat publicada',
  'LBL_KB_PUBLISHED_REQUEST' => 'li ha assignat un Document per a la seva aprovació i publicació.',
  'LBL_KB_STATUS_BACK_TO_DRAFT' => 'L´estat del document ha canviat de nou a esborrany',
  'LBL_CONTRACTS' => 'Contractes',
  'LBL_SELECT_PARENT_TREE_NOTICE' => 'Seleccioni la etiqueta pare, del arbre',
  'LBL_CLICK_APPLY_TAG' => 'Faci clic en Aplicar Etiqueta',
  'LBL_HEAD_TAGS' => 'Etiquetes',
);

