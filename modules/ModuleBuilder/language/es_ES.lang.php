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
  'LBL_ROLLUP' => 'Rollup',
  'LBL_RELATED_FIELD' => 'Campo relacionado',
  'LBL_DASHLET' => 'Sugar Dashlet',
  'LBL_SUBPANEL' => 'Subpanel',
  'LBL_FORMULA' => 'Formula',
  'LBL_SECTION_PORTAL' => 'Portal',
  'LBL_PORTAL' => 'Portal',
  'LBL_ASSIGNABLE' => 'Assignable',
  'LBL_VE_VISIBLE' => 'visible',
  'fieldTypes' => 
  array (
    'html' => 'HTML',
    'url' => 'URL',
    'iframe' => 'IFrame',
    'decimal' => 'Decimal',
    'varchar' => 'Campo de Texto',
    'int' => 'Entero',
    'float' => 'Coma flotante',
    'bool' => 'Casilla de Verificación',
    'enum' => 'Desplegable',
    'multienum' => 'Selección Múltiple',
    'date' => 'Fecha',
    'phone' => 'Teléfono',
    'currency' => 'Moneda',
    'radioenum' => 'Opción',
    'relate' => 'Relacionado',
    'address' => 'Dirección',
    'text' => 'Área de Texto',
    'image' => 'Imagen',
    'encrypt' => 'Encriptado',
    'datetimecombo' => 'Fecha y hora',
  ),
  'LBL_LOADING' => 'Cargando ...',
  'LBL_HIDEOPTIONS' => 'Ocultar Opciones',
  'LBL_DELETE' => 'Eliminar',
  'LBL_POWERED_BY_SUGAR' => 'Desarrollado por SugarCRM',
  'LBL_HOME_EDIT_DROPDOWNS' => 'Editor de Listas Desplegables',
  'LBL_AS_SHOW' => 'Mostrar al Asistente en el futuro.',
  'LBL_AS_IGNORE' => 'Ignorar al Asistente en el futuro.',
  'LBL_AS_SAYS' => 'El Asistente Sugiere:',
  'LBL_MODULEBUILDER' => 'Constructor de Módulos',
  'LBL_STUDIO' => 'Estudio',
  'LBL_DROPDOWNEDITOR' => 'Editor de Listas Desplegables',
  'LBL_EDIT_DROPDOWN' => 'Editar Lista Desplegable',
  'LBL_DEVELOPER_TOOLS' => 'Herramientas de Desarrollo',
  'LBL_SUGARPORTAL' => 'Editor del Portal Sugar',
  'LBL_SYNCPORTAL' => 'Sincronizar Portal',
  'LBL_PACKAGE_LIST' => 'Lista de Paquetes',
  'LBL_HOME' => 'Inicio',
  'LBL_NONE' => '-Ninguno-',
  'LBL_DEPLOYE_COMPLETE' => 'Despliegue completado',
  'LBL_DEPLOY_FAILED' => 'Ha ocurrido un error durante el proceso de despliegue. Es posible que su paquete no haya sido instalado correctamente',
  'LBL_ADD_FIELDS' => 'Agregar Campos Personalizados',
  'LBL_AVAILABLE_SUBPANELS' => 'Subpaneles Disponibles',
  'LBL_ADVANCED' => 'Avanzada',
  'LBL_ADVANCED_SEARCH' => 'Búsqueda Avanzada',
  'LBL_BASIC' => 'Básica',
  'LBL_BASIC_SEARCH' => 'Búsqueda Básica',
  'LBL_CURRENT_LAYOUT' => 'Diseño',
  'LBL_CURRENCY' => 'Moneda',
  'LBL_CUSTOM' => 'Personalizado',
  'LBL_DASHLETLISTVIEW' => 'Vista de Lista de Sugar Dashlet',
  'LBL_DASHLETSEARCH' => 'Búsqueda de Sugar Dashlet',
  'LBL_POPUP' => 'Vista Emergente',
  'LBL_POPUPLIST' => 'Vista de Lista Emergente',
  'LBL_POPUPLISTVIEW' => 'Vista de Lista Emergente',
  'LBL_POPUPSEARCH' => 'Búsqueda Emergente',
  'LBL_DASHLETSEARCHVIEW' => 'Búsqueda de Sugar Dashlet',
  'LBL_DISPLAY_HTML' => 'Mostrar Código HTML',
  'LBL_DETAILVIEW' => 'Vista Detallada',
  'LBL_DROP_HERE' => '[Soltar Aquí]',
  'LBL_EDIT' => 'Editar',
  'LBL_EDIT_LAYOUT' => 'Editar Diseño',
  'LBL_EDIT_ROWS' => 'Editar Filas',
  'LBL_EDIT_COLUMNS' => 'Editar Columnas',
  'LBL_EDIT_LABELS' => 'Editar Etiquetas',
  'LBL_EDIT_FIELDS' => 'Editar Campos',
  'LBL_EDIT_PORTAL' => 'Editar Portal para',
  'LBL_EDITVIEW' => 'Vista de Edición',
  'LBL_FILLER' => '(relleno)',
  'LBL_FIELDS' => 'Campos',
  'LBL_FAILED_TO_SAVE' => 'Fallo Al Guardar',
  'LBL_FAILED_PUBLISHED' => 'Fallo Al Publicar',
  'LBL_HOMEPAGE_PREFIX' => 'Mi',
  'LBL_LAYOUT_PREVIEW' => 'Vista Preliminar del Diseño',
  'LBL_LAYOUTS' => 'Diseños',
  'LBL_LISTVIEW' => 'Vista de Lista',
  'LBL_MODULES' => 'Módulos:',
  'LBL_MODULE_TITLE' => 'Estudio',
  'LBL_NEW_PACKAGE' => 'Nuevo Paquete',
  'LBL_NEW_PANEL' => 'Nuevo Panel',
  'LBL_NEW_ROW' => 'Nueva Fila',
  'LBL_PACKAGE_DELETED' => 'Paquete Eliminado',
  'LBL_PUBLISHING' => 'Publicando ...',
  'LBL_PUBLISHED' => 'Publicado',
  'LBL_SELECT_FILE' => 'Seleccionar Archivo',
  'LBL_SAVE_LAYOUT' => 'Guardar Diseño',
  'LBL_SELECT_A_SUBPANEL' => 'Seleccione un Subpanel',
  'LBL_SELECT_SUBPANEL' => 'Seleccione Subpanel',
  'LBL_SUBPANELS' => 'Subpaneles',
  'LBL_SUBPANEL_TITLE' => 'Título:',
  'LBL_SEARCH_FORMS' => 'Búsqueda',
  'LBL_SEARCH' => 'Buscar',
  'LBL_STAGING_AREA' => 'Área de Diseño (arrastre y suelte elementos aquí)',
  'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (haga clic en los elementos para agregarlos al área de diseño)',
  'LBL_SUGAR_BIN_STAGE' => 'Papelera Sugar (haga clic en los elementos para agregarlos al área de diseño)',
  'LBL_TOOLBOX' => 'Caja de Herramientas',
  'LBL_VIEW_SUGAR_FIELDS' => 'Ver Campos Sugar',
  'LBL_VIEW_SUGAR_BIN' => 'Ver Papelera Sugar',
  'LBL_QUICKCREATE' => 'Creación Rápida',
  'LBL_EDIT_DROPDOWNS' => 'Editar una Lista Desplegable Global',
  'LBL_ADD_DROPDOWN' => 'Agregar una nueva Lista Desplegable Global',
  'LBL_BLANK' => '-vacío-',
  'LBL_TAB_ORDER' => 'Órden de Tabulación',
  'LBL_TAB_PANELS' => 'Mostrar paneles como pestañas',
  'LBL_TAB_PANELS_HELP' => 'Mostrar cada panel como su propia pestaña en lugar de hacer que aparezcan todos en una pantalla',
  'LBL_DROPDOWN_TITLE_NAME' => 'Nombre',
  'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
  'LBL_DROPDOWN_ITEMS' => 'Elementos de Lista',
  'LBL_DROPDOWN_ITEM_NAME' => 'Nombre del Elemento',
  'LBL_DROPDOWN_ITEM_LABEL' => 'Etiqueta de Visualización',
  'LBL_SYNC_TO_DETAILVIEW' => 'Sincroniza con Vista de Detalle',
  'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccione esta opción para sincronizar el diseño de la Vista de Edición con el correspondiente diseño de la Vista de Detalle. Los campos y su colocación en la Vista de Detalle serán sincronizados y guardados automáticamente en la Vista de Detalle al pulsar en Guardar or Guardar y Desplegar en la Vista de Edición. No se podrán realizar cambios en el diseño de la Vista de Detalle.',
  'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Este DetailView es sincronizado con el EditView correspondiente. <br> Campos y colocación sobre el terreno en este DetailView reflejan los campos y colocación sobre el terreno en el EditView. <br> Cambios en DetailView no puede ser salvado o desplegados desde esta pagina. Realizar los cambios o quitar sincronización en la vista de EditView.',
  'LBL_COPY_FROM_EDITVIEW' => 'Copiar de la Vista de Edición',
  'LBL_DROPDOWN_BLANK_WARNING' => 'Los valores son necesarios tanto para el nombre del elemento y la etiqueta de visualización. Para agregar un elemento en blanco, haga clic en Agregar, sin entrar en ningún valor para el nombre del elemento y la etiqueta de visualización.',
  'LBL_WIRELESSLAYOUTS' => 'Diseños para Móviles',
  'LBL_WIRELESSEDITVIEW' => 'Vista de Edición para Móviles',
  'LBL_WIRELESSDETAILVIEW' => 'Vista de Detalle para Móviles',
  'LBL_WIRELESSLISTVIEW' => 'Vista de Lista para Móviles',
  'LBL_WIRELESSSEARCH' => 'Búsqueda para Móviles',
  'LBL_BTN_ADD_DEPENDENCY' => 'Agregar Dependencia',
  'LBL_BTN_EDIT_FORMULA' => 'Editar Fórmula',
  'LBL_DEPENDENCY' => 'Dependencia',
  'LBL_DEPENDANT' => 'Dependiente',
  'LBL_CALCULATED' => 'Valor Calculado',
  'LBL_READ_ONLY' => 'Sólo Lectura',
  'LBL_FORMULA_BUILDER' => 'Constructor de Fórmulas',
  'LBL_FORMULA_INVALID' => 'Fórmula No Válida',
  'LBL_FORMULA_TYPE' => 'La fórmula debe ser del tipo',
  'LBL_NO_FIELDS' => 'No se han encontrado Campos',
  'LBL_NO_FUNCS' => 'No se han encontrado Funciones',
  'LBL_SEARCH_FUNCS' => 'Buscar Funciones...',
  'LBL_SEARCH_FIELDS' => 'Buscar Campos...',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependiente',
  'LBL_DEPENDENT_DROPDOWN_HELP' => 'Arrastre los elementos de la lista de opciones disponibles a la izquierda para una de las listas de la derecha para hacer que la opción está disponible cuando la opción del padre dada se seleccione.',
  'LBL_AVAILABLE_OPTIONS' => 'Opciones',
  'LBL_PARENT_DROPDOWN' => 'Padre desplegable',
  'LBL_VISIBILITY_EDITOR' => 'Visibilidad editor',
  'LBL_MODULE' => 'Módulo',
  'LBL_LHS_MODULE' => 'Módulo Principal',
  'LBL_CUSTOM_RELATIONSHIPS' => '* relación creada en el Estudio',
  'LBL_RELATIONSHIPS' => 'Relaciones',
  'LBL_RELATIONSHIP_EDIT' => 'Editar Relación',
  'LBL_REL_NAME' => 'Nombre',
  'LBL_REL_LABEL' => 'Etiqueta',
  'LBL_REL_TYPE' => 'Tipo',
  'LBL_RHS_MODULE' => 'Módulo Relacionado',
  'LBL_NO_RELS' => 'Sin Relaciones',
  'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condición Opcional',
  'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Columna',
  'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valor',
  'LBL_SUBPANEL_FROM' => 'Subpanel de',
  'LBL_RELATIONSHIP_ONLY' => 'No se creará ningún elemento visible para esta relación ya que existía anteriormente una relación visible entre estos dos módulos.',
  'LBL_ONETOONE' => 'Uno a Uno',
  'LBL_ONETOMANY' => 'Uno a Muchos',
  'LBL_MANYTOONE' => 'Muchos a Uno',
  'LBL_MANYTOMANY' => 'Muchos a Muchos',
  'LBL_QUESTION_FUNCTION' => 'Seleccione una función o componente.',
  'LBL_QUESTION_MODULE1' => 'Seleccione un módulo.',
  'LBL_QUESTION_EDIT' => 'Seleccione un módulo a editar.',
  'LBL_QUESTION_LAYOUT' => 'Seleccione un diseño a editar.',
  'LBL_QUESTION_SUBPANEL' => 'Seleccione un subpanel a editar.',
  'LBL_QUESTION_SEARCH' => 'Seleccione un diseño de búsqueda a editar.',
  'LBL_QUESTION_MODULE' => 'Seleccione un componente de módulo a editar.',
  'LBL_QUESTION_PACKAGE' => 'Seleccione un paquete a editar, o cree un nuevo paquete.',
  'LBL_QUESTION_EDITOR' => 'Seleccione una herramienta.',
  'LBL_QUESTION_DROPDOWN' => 'Seleccione una lista desplegable a editar, o cree una nueva lista desplegable.',
  'LBL_QUESTION_DASHLET' => 'Seleccione un diseño de dashlet a editar.',
  'LBL_QUESTION_POPUP' => 'Seleccione un diseño emergente a editar.',
  'LBL_RELATE_TO' => 'Relacionado Con',
  'LBL_NAME' => 'Nombre',
  'LBL_LABELS' => 'Etiquetas',
  'LBL_MASS_UPDATE' => 'Actualización Masiva',
  'LBL_AUDITED' => 'Auditado',
  'LBL_CUSTOM_MODULE' => 'Módulo',
  'LBL_DEFAULT_VALUE' => 'Valor Por Defecto',
  'LBL_REQUIRED' => 'Requerido',
  'LBL_DATA_TYPE' => 'Tipo',
  'LBL_HCUSTOM' => 'PERSONALIZADO',
  'LBL_HDEFAULT' => 'POR DEFECTO',
  'LBL_LANGUAGE' => 'Idioma:',
  'LBL_CUSTOM_FIELDS' => 'campo creado en Estudio',
  'LBL_SECTION_EDLABELS' => 'Editar Etiquetas',
  'LBL_SECTION_PACKAGES' => 'Paquetes',
  'LBL_SECTION_PACKAGE' => 'Paquete',
  'LBL_SECTION_MODULES' => 'Módulos',
  'LBL_SECTION_DROPDOWNS' => 'Listas Desplegables',
  'LBL_SECTION_PROPERTIES' => 'Propiedades',
  'LBL_SECTION_DROPDOWNED' => 'Editar Lista Desplegable',
  'LBL_SECTION_HELP' => 'Ayuda',
  'LBL_SECTION_ACTION' => 'Acción',
  'LBL_SECTION_MAIN' => 'Principal',
  'LBL_SECTION_EDPANELLABEL' => 'Editar Etiqueta de Panel',
  'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
  'LBL_SECTION_DEPLOY' => 'Desplegar',
  'LBL_SECTION_MODULE' => 'Módulo',
  'LBL_SECTION_VISIBILITY_EDITOR' => 'Editar Visibilidad',
  'LBL_DEFAULT' => 'Por Defecto',
  'LBL_HIDDEN' => 'Oculto',
  'LBL_AVAILABLE' => 'Disponible',
  'LBL_LISTVIEW_DESCRIPTION' => 'A continuación se muestran tres columnas. La columna <b>Por Defecto</b> contiene los campos que se muestran en una lista por defecto. La columna <b>Adicional</b> contiene campos que un usuario puede elegir a la hora de crear una vista personalizada. La columna <b>Disponible</b> muestra columnas disponibles para usted como administrador para, o bien añadirlas a las columnas Por Defecto, o a las Adicionales para que sean usadas por usuarios.',
  'LBL_LISTVIEW_EDIT' => 'Editor de Listas',
  'LBL_MB_PREVIEW' => 'Vista Preliminar',
  'LBL_MB_RESTORE' => 'Restaurar',
  'LBL_MB_DELETE' => 'Eliminar',
  'LBL_MB_COMPARE' => 'Comparar',
  'LBL_MB_DEFAULT_LAYOUT' => 'Diseño por Defecto',
  'LBL_BTN_ADD' => 'Agregar',
  'LBL_BTN_SAVE' => 'Guardar',
  'LBL_BTN_SAVE_CHANGES' => 'Guardar Cambios',
  'LBL_BTN_DONT_SAVE' => 'Descartar Cambios',
  'LBL_BTN_CANCEL' => 'Cancelar',
  'LBL_BTN_CLOSE' => 'Cerrar',
  'LBL_BTN_SAVEPUBLISH' => 'Guardar y Desplegar',
  'LBL_BTN_NEXT' => 'Siguiente',
  'LBL_BTN_BACK' => 'Anterior',
  'LBL_BTN_CLONE' => 'Clonar',
  'LBL_BTN_ADDCOLS' => 'Agregar Columnas',
  'LBL_BTN_ADDROWS' => 'Agregar Filas',
  'LBL_BTN_ADDFIELD' => 'Agregar Campo',
  'LBL_BTN_ADDDROPDOWN' => 'Agregar Lista Desplegable',
  'LBL_BTN_SORT_ASCENDING' => 'Ordenar Ascendete',
  'LBL_BTN_SORT_DESCENDING' => 'Ordenar Descendente',
  'LBL_BTN_EDLABELS' => 'Editar Etiquetas',
  'LBL_BTN_UNDO' => 'Deshacer',
  'LBL_BTN_REDO' => 'Repetir',
  'LBL_BTN_ADDCUSTOMFIELD' => 'Agregar Campo Personalizado',
  'LBL_BTN_EXPORT' => 'Exportar Personalizaciones',
  'LBL_BTN_DUPLICATE' => 'Duplicar',
  'LBL_BTN_PUBLISH' => 'Publicar',
  'LBL_BTN_DEPLOY' => 'Desplegar',
  'LBL_BTN_EXP' => 'Exportar',
  'LBL_BTN_DELETE' => 'Eliminar',
  'LBL_BTN_VIEW_LAYOUTS' => 'Ver Diseños',
  'LBL_BTN_VIEW_FIELDS' => 'Ver Campos',
  'LBL_BTN_VIEW_RELATIONSHIPS' => 'Ver Relaciones',
  'LBL_BTN_ADD_RELATIONSHIP' => 'Agregar Relación',
  'LBL_BTN_RENAME_MODULE' => 'Cambiar el Nombre del Módulo',
  'LBL_BTN_INSERT' => 'Insertar',
  'ERROR_ALREADY_EXISTS' => 'Error: El Campo Ya Existe',
  'ERROR_INVALID_KEY_VALUE' => 'Error: Valor de Clave No Válido: [&#39;]',
  'ERROR_NO_HISTORY' => 'No se han encontrado archivos en el historial',
  'ERROR_MINIMUM_FIELDS' => 'El diseño debe contener al menos un campo',
  'ERROR_GENERIC_TITLE' => 'Ha ocurrido un error',
  'ERROR_REQUIRED_FIELDS' => '¿Está seguro de que desea continuar? Los siguientes campos requeridos no se encuentran en el diseño:',
  'ERROR_ARE_YOU_SURE' => '¿Está seguro de que desea continuar?',
  'ERROR_CALCULATED_MOBILE_FIELDS' => 'Los siguientes campos contienen valores calculados que no serán recalculados en tiempo real en la Vista de Edición de SugarCRM Mobile:',
  'ERROR_CALCULATED_PORTAL_FIELDS' => 'Los siguientes campos contienen valores calculados que no serán recalculados en tiempo real en la Vista de Edición del Portal de SugarCRM:',
  'LBL_PORTAL_LAYOUTS' => 'Diseños de Portal',
  'LBL_SYNCP_WELCOME' => 'Por favor, introduzca el URL de la instancia de portal que desea actualizar.',
  'LBL_SP_UPLOADSTYLE' => 'Seleccione la hoja de estilos a subir desde su equipo.<br> La hoja de estilos será utilizada en el Portal de Sugar la próxima vez que realice una sincronización.',
  'LBL_SP_UPLOADED' => 'Subido',
  'ERROR_SP_UPLOADED' => 'Por favor, asegúrese de que está subiendo una hoja de estilos CSS.',
  'LBL_SP_PREVIEW' => 'Aquí tiene una vista preliminar de la apariencia que tendrá el Portal de Sugar usando la hoja de estilos.',
  'LBL_PORTALSITE' => 'URL de Portal de Sugar:',
  'LBL_PORTAL_GO' => 'Adelante',
  'LBL_UP_STYLE_SHEET' => 'Subir Hoja de Estilos',
  'LBL_QUESTION_SUGAR_PORTAL' => 'Seleccione el diseño de Portal de Sugar a editar.',
  'LBL_QUESTION_PORTAL' => 'Seleccione el diseño de portal a editar.',
  'LBL_SUGAR_PORTAL' => 'Editor del Portal de Sugar',
  'LBL_CASES' => 'Casos',
  'LBL_NEWSLETTERS' => 'Boletines de Noticias',
  'LBL_BUG_TRACKER' => 'Seguimiento de Incidencias',
  'LBL_MY_ACCOUNT' => 'Mi Cuenta',
  'LBL_LOGOUT' => 'Salir',
  'LBL_CREATE_NEW' => 'Crear Nuevo',
  'LBL_LIST' => 'Lista',
  'LBL_LOW' => 'Baja',
  'LBL_MEDIUM' => 'Media',
  'LBL_HIGH' => 'Alta',
  'LBL_NUMBER' => 'Número:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_SUBJECT' => 'Asunto',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_PACKAGE_NAME' => 'Nombre del Paquete:',
  'LBL_MODULE_NAME' => 'Nombre del Módulo:',
  'LBL_AUTHOR' => 'Autor:',
  'LBL_KEY' => 'Clave:',
  'LBL_ADD_README' => 'Léame',
  'LBL_LAST_MODIFIED' => 'Última Modificación:',
  'LBL_NEW_MODULE' => 'Nuevo Módulo',
  'LBL_LABEL' => 'Etiqueta:',
  'LBL_LABEL_TITLE' => 'Etiqueta',
  'LBL_WIDTH' => 'Anchura',
  'LBL_PACKAGE' => 'Paquete:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_TEAM_SECURITY' => 'Seguridad de Equipos',
  'LBL_PERSON' => 'Persona',
  'LBL_COMPANY' => 'Compañía',
  'LBL_ISSUE' => 'Incidencia',
  'LBL_SALE' => 'Venta',
  'LBL_FILE' => 'Archivo',
  'LBL_NAV_TAB' => 'Pestaña de Navegación',
  'LBL_CREATE' => 'Crear',
  'LBL_VIEW' => 'Vista',
  'LBL_LIST_VIEW' => 'Vista de Lista',
  'LBL_HISTORY' => 'Ver Historial',
  'LBL_RESTORE_DEFAULT' => 'Restaurar Vista Por Defecto',
  'LBL_ACTIVITIES' => 'Actividades',
  'LBL_NEW' => 'Nuevo',
  'LBL_TYPE_BASIC' => 'básica',
  'LBL_TYPE_COMPANY' => 'compañía',
  'LBL_TYPE_PERSON' => 'persona',
  'LBL_TYPE_ISSUE' => 'incidencia',
  'LBL_TYPE_SALE' => 'venta',
  'LBL_TYPE_FILE' => 'archivo',
  'LBL_RSUB' => 'Este es el subpanel que se mostrará en su módulo',
  'LBL_MSUB' => 'Este es el subpanel que su módulo proporciona para que sea mostrado por el módulo relacionado',
  'LBL_MB_IMPORTABLE' => 'Importable',
  'LBL_VE_HIDDEN' => 'oculto',
  'LBL_PACKAGE_WAS_DELETED' => '[[package]] ha sido eliminado',
  'LBL_EC_TITLE' => 'Exportar Personalizaciones',
  'LBL_EC_NAME' => 'Nombre del Paquete:',
  'LBL_EC_AUTHOR' => 'Autor:',
  'LBL_EC_DESCRIPTION' => 'Descripción:',
  'LBL_EC_KEY' => 'Clave:',
  'LBL_EC_CHECKERROR' => 'Por favor, seleccione un módulo.',
  'LBL_EC_CUSTOMFIELD' => 'campos personalizados',
  'LBL_EC_CUSTOMLAYOUT' => 'diseño personalizados',
  'LBL_EC_NOCUSTOM' => 'No se ha personalizado ningún módulo.',
  'LBL_EC_EMPTYCUSTOM' => 'tiene vacías las personalizaciones.',
  'LBL_EC_EXPORTBTN' => 'Exportar',
  'LBL_MODULE_DEPLOYED' => 'El módulo ha sido desplegado.',
  'LBL_UNDEFINED' => 'no definido',
  'LBL_AJAX_FAILED_DATA' => 'Error al recuperar datos',
  'LBL_AJAX_TIME_DEPENDENT' => 'Hay en progreso una acción dependiente del tiempo. Por favor, espere e inténtelo de nuevo en unos instantes.',
  'LBL_AJAX_LOADING' => 'Cargando...',
  'LBL_AJAX_DELETING' => 'Eliminando...',
  'LBL_AJAX_BUILDPROGRESS' => 'Construcción En Progreso...',
  'LBL_AJAX_DEPLOYPROGRESS' => 'Despliegue En Progreso...',
  'LBL_AJAX_FIELD_EXISTS' => 'El nombre del campo que ha introducido ya existe. Por favor, introduzca un nuevo nombre para el campo.',
  'LBL_JS_REMOVE_PACKAGE' => '¿Está seguro de que desea quitar este paquete? Esto eliminará permanentemente todos los archivos asociados con este paquete.',
  'LBL_JS_REMOVE_MODULE' => '¿Está seguro de que desea quitar este módulo? Esto eliminará permanentemente todos los archivos asociados con este módulo.',
  'LBL_JS_DEPLOY_PACKAGE' => 'Cualquier personalización que haya realizado en el Estudio será sobrescrita cuando este módulo sea desplegado de nuevo. ¿Está seguro de que desea proceder?',
  'LBL_DEPLOY_IN_PROGRESS' => 'Desplegando Paquete',
  'LBL_JS_VALIDATE_NAME' => 'Nombre - Debe ser alfanumérico, sin espacios y comenzando por letra',
  'LBL_JS_VALIDATE_PACKAGE_NAME' => 'El Nombre del Paquete ya existe',
  'LBL_JS_VALIDATE_KEY' => 'Clave - Debe ser alfanumérica',
  'LBL_JS_VALIDATE_LABEL' => 'Por favor, introduzca la etiqueta que se utilizará como Nombre Visible de este módulo',
  'LBL_JS_VALIDATE_TYPE' => 'Por favor, seleccione el tipo de módulo que quiere construir de la lista anterior',
  'LBL_JS_VALIDATE_REL_NAME' => 'Nombre - Debe ser alfanumérico y sin espacios',
  'LBL_JS_VALIDATE_REL_LABEL' => 'Etiqueta - por favor, agregue la etiqueta que será mostrada sobre el subpanel',
  'LBL_CONFIRM_FIELD_DELETE' => 'Al eliminar este campo personalizado, eliminará tanto el campo personalizado como todos los datos de la base de datos relacionados con el campo personalizado. El campo ya no aparecerá en ninguno de los diseños de módulos. ¿Desea continuar?<br /><br />Al eliminar este campo personalizado, eliminará tanto el campo personalizado como todos los datos en la base de datos relacionados con el campo personalizado. El campo ya no aparecerá en ninguno de los diseños de módulos, y no estará disponible en los Informes.\\n\\nEl cambio en los Informes será visto tras cerrar la sesión y abrir una nueva, y todos los informes que contengan el campo tendrán que ser actualizados para poder ser ejecutados.\\n\\n¿Desea continuar?',
  'LBL_CONFIRM_RELATIONSHIP_DELETE' => '¿Está seguro de que desea eliminar esta relación?',
  'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Esto hará la relación permantente. ¿Está seguro de que desea desplegar esta relación?',
  'LBL_CONFIRM_DONT_SAVE' => 'Hay cambios pendientes de ser guardados, ¿desea guardarlos ahora?',
  'LBL_CONFIRM_DONT_SAVE_TITLE' => '¿Guardar Cambios?',
  'LBL_CONFIRM_LOWER_LENGTH' => 'Los datos pueden ser truncados y ésto no podrá deshacerse, ¿está seguro de que desea continuar?',
  'LBL_POPHELP_FIELD_DATA_TYPE' => 'Seleccione el tipo de datos apropiado acorde con el tipo de datos que será introducido en el campo.',
  'LBL_POPHELP_SEARCHABLE' => 'Usted tiene que realizar un índice de todo el sistema después de cambiar el nivel de elevación.',
  'LBL_POPHELP_IMPORTABLE' => '<b>Sí</b>: El campo será incluido en una operación de importación.<br><b>No</b>: El campo no será incluido en una importación.<br><b>Requerido</b>: Debe de suministrarse un valor para el campo en toda importación.',
  'LBL_POPHELP_IMAGE_WIDTH' => 'Introduzca un número para la Anchura, como medida en píxeles.<br> La imagen subida será escalada a esta Anchura.',
  'LBL_POPHELP_IMAGE_HEIGHT' => 'Introduzca un número para la Altura, como medida en píxeles.<br> La imagen subida será escalada a esta Altura.',
  'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Habilitado</b>: El campo aparecerá en la característica de Combinar Duplicados, pero no estará disponible para ser utilizado en las condiciones de filtrado de la característica Búsqueda de Duplicados.<br><b>Deshabilitado</b>: El campo no aparecerá en la característica Combinar Duplicados, y tampoco estará disponible para ser utilizado como condición de filtrado en la característica de Búsqueda de Duplicados.<br><b>En Filtro</b>: El campo aparecerá en la característica de Combinar Duplicados, y también estará disponible en la característica de Búsqueda de Duplicados.<br><b>Sólo en Filtro</b>: El campo no aparecerá en la característica Combinar Duplicados, pero estará disponible en la característica de Búsqueda de Duplicados.<br><b>Filtro Seleccionado por Defecto</b>: El campo será utilizado en la condición de filtrado por defecto de la página de Búsqueda de Duplicados, y también aparecerá en la característica de Combinar Duplicados.',
  'LBL_POPHELP_CALCULATED' => 'Cree una fórmula para determinar el valor de este campo.<br /><br />Los campos que contienen fórmulas no se podrán ser calculados en tiempo real ni en el Portal Self-Service de Sugar ni en los diseños de Vistas de Edición de Sugar Mobile.',
  'LBL_POPHELP_DEPENDENT' => 'Crear una fórmula para determinar si este campo es visible en los diseños. <br/> Campos dependientes se siga la fórmula de dependencia en la vista móvil basado en el navegador, <br/> pero no siguen la fórmula de las aplicaciones nativas, como el Sugar Mobile para el iPhone. <br/> Pero no seguirán la fórmula en el Sugar Self-Service Portal.',
  'LBL_POPHELP_GLOBAL_SEARCH' => 'Seleccione esta opción para utilizar este campo en la búsqueda de registros desde la Búsqueda Global en este módulo.',
  'LBL_RESET' => 'Restablecer',
  'LBL_RESET_MODULE' => 'Restablecer Módulo',
  'LBL_REMOVE_CUSTOM' => 'Quitar Personalizaciones',
  'LBL_CLEAR_RELATIONSHIPS' => 'Limpiar Relaciones',
  'LBL_RESET_LABELS' => 'Restablecer Eqiquetas',
  'LBL_RESET_LAYOUTS' => 'Restablecer Diseños"',
  'LBL_REMOVE_FIELDS' => 'Quitar Campos Personalizados',
  'LBL_CLEAR_EXTENSIONS' => 'Limpiar Extensiones',
  'LBL_HISTORY_TIMESTAMP' => 'Registro de Tiempo',
  'LBL_HISTORY_TITLE' => 'historial',
  'parent' => 'Posiblemente Relacionado con',
  'LBL_ILLEGAL_FIELD_VALUE' => 'Las claves de un desplegable no pueden contener comillas.',
  'LBL_CONFIRM_SAVE_DROPDOWN' => 'Está seleccionando este elemento para su eliminación de la lista desplegable. Cualquier campo desplegable que use esta lista con este elemento como valor ya no mostrará dicho valor, y el valor ya no podrá ser seleccionado en los campos desplegables. ¿Está seguro de que desea continuar?',
  'LBL_POPHELP_VALIDATE_US_PHONE' => 'Seleccione para validar este campo para el ingreso de un número de teléfono de 10 dígitos <br>, con la concesión para el código de país 1, y <br> para aplicar un formato de EE.UU. para el número de teléfono cuando el <br> registro se guarda. El formato se aplicarán los siguientes: (xxx) xxx-xxxx.',
  'LBL_ALL_MODULES' => 'Todos los Módulos',
  'help' => 
  array (
    'package' => 
    array (
      'create' => 'Proporcionar un <b> nombre </ b> para el paquete. El nombre que introduzca debe ser alfanumérico y sin espacios. (Ejemplo: HR_Management) <br/><br/> Puedes proporcionar <b> Autor </ b> y <b> Descripción </ b> como información para el paquete. <br/><br/> Haga clic en <b>Guardar</ b> para crear el paquete.',
      'modify' => 'Las propiedades y posibles acciones para el <b>paquete</ b> aparecerá aquí. <br/><br/> Puede modificar el <b>nombre</ b>, <b>Autor</ b> y <b>Descripción</ b> del paquete, así como ver y personalizar todos los módulos contenidos en el paquete. <br/><br/> Haga clic en  <b>nuevo módulo</ b> para crear un módulo para el paquete.<br/><br/> Si el paquete contiene al menos un módulo, usted puede <b>publicar</ b> y <b>desplegar</ b> el paquete, así como <b>exportar</ b> las personalizaciones realizadas en el paquete.',
      'name' => 'Este es el <b>nombre</ b> del paquete actual. <br/><br/> El nombre que introduzca debe ser alfanuméricos, comenzar con una letra y sin espacios. (Ejemplo: HR_Management)',
      'author' => 'Este es el <b> Autor </ b> que se muestra durante la instalación como el nombre de la entidad que creó el paquete. <br/><br/> El autor podría ser un individuo o una empresa.',
      'description' => 'Esta es la  <b>Descripción</b> que se muestra durante la instalación.',
      'publishbtn' => 'Haga clic en <b>Publicar</ b> para guardar todos los datos introducidos y crear un archivo .zip que es una versión instalable del paquete.<br/><br/> Use el <b>Cargador de Módulos</ b> para cargar el archivo .zip e instalar el paquete.',
      'deploybtn' => 'Haga clic en <b> desplegar </ b> para guardar todos los datos introducidos y para instalar el paquete, incluyendo todos los módulos, en la instancia actual.',
      'duplicatebtn' => 'Haga clic en <b> duplicar </ b> para copiar el contenido del paquete en un paquete nuevo y para mostrar el nuevo paquete. <br/> <br/> Para el nuevo paquete, un nuevo nombre es generado automáticamente añadiendo un número al final del nombre del paquete utilizado para duplicarlo. Puede cambiar el nombre del nuevo paquete mediante la introducción de un <b>nombre</b> nuevo y después haciendo clic en <b>Guardar</ b>.',
      'exportbtn' => 'Haga clic en <b>Exportar</ b> para crear un archivo .zip que contiene las personalizaciones realizadas en el paquete. <br/><br/> El archivo generado no es una versión instalable del paquete. <br/><br/> Use el <b >Cargador de módulos</ b> para importar el archivo .zip y tener el paquete, incluidas las personalizaciones, aparecen en el Generador de módulos.',
      'deletebtn' => 'Haga clic en <b> Eliminar </ b> para eliminar este paquete y todos los archivos relacionados con este paquete.',
      'savebtn' => 'Haga clic en <b>Guardar</ b> para guardar todos los datos relacionados con el paquete.',
      'existing_module' => 'Haga clic en el icono del <b>módulo</ b> para editar las propiedades y personalizar los campos, las relaciones y diseños asociados con el módulo.',
      'new_module' => 'Haga clic en <b> nuevo módulo </ b> para crear un nuevo módulo para este paquete.',
      'key' => 'Estas 5 letras, <b> clave </ b> alfanuméricas se usa como prefijo para todos los directorios, los nombres de clases y las tablas de base de datos para todos los módulos en el paquete actual. <br><br> La clave se utiliza en un esfuerzo para lograr la singularidad de los nombres de las tablas.',
      'readme' => 'Haga clic para añadir <b> Léame </ b> de texto para este paquete. <br><br> El léame estará disponible en el momento de la instalación.',
    ),
    'module' => 
    array (
      'create' => 'Proporcionar un <b>nombre</ b> para el módulo. La <b>etiqueta</ b> que le proporcione aparecerá en la pestaña de navegación. <br/><br/> Elija si desea ver una pestaña de navegación para el módulo para eso seleccione la casilla de <b> Pestaña de navegación </ b>. <br/><br/> Revise la casilla de <b>equipo de seguridad</b> para tener un campo de selección del equipo dentro de los registros del módulo. <br/><br/> A continuación, seleccione el tipo de módulo que desea crear. <br/><br/> Seleccione un tipo de plantilla. Cada plantilla contiene un conjunto específico de los campos, así como los diseños pre-definidos, para usar como base de su módulo. <br/><br/> Haga clic en <b>Guardar </ b> para crear el módulo.',
      'modify' => 'Puedes modificar las propiedades del módulo y adaptar los <b>Campos</b>, <b>Relaciones</b> y <b>Vistas</b> relacionadas con el módulo.',
      'importable' => 'Compruebe la casilla de <b> Importables </ b> la cual permitirá la importación de datos sobre este módulo. <br><br> Un enlace de Asistente de importación aparecerá en el panel de accesos directos en el módulo. El Asistente de importación facilita la importación de datos de fuentes externas en el módulo personalizado.',
      'team_security' => 'Compruebe la casilla de <b> equipo de seguridad </ b> que permitirá la seguridad por equipo para este módulo. <br/><br/> Si el equipo de seguridad está activado, el campo de selección del equipo aparecerá dentro de los registros en el módulo',
      'reportable' => 'Al marcar esta casilla permitirá que ha este módulo se le puedan realizar reportes.',
      'assignable' => 'Al marcar esta casilla permitirá asignar a un usuario seleccionado un registro del módulo.',
      'has_tab' => 'Comprobación de <b> Pestaña de Navegación </ b> proporcionará una pestaña de navegación para el módulo.',
      'acl' => 'Al marcar esta casilla permitirá a los controles de acceso en este módulo, incluyendo la seguridad sobre el terreno.',
      'studio' => 'Al marcar esta casilla permitirá a los administradores personalizar este módulo dentro de Studio.',
      'audit' => 'Marcando esta casilla Habilitar la auditoría de este módulo. Los cambios en ciertos campos se registrarán de modo que los administradores pueden revisar el historial de cambios.',
      'viewfieldsbtn' => 'Haga clic en <b> Ver Campos </ b> para ver los campos asociados con el módulo y para crear y editar los campos personalizados.',
      'viewrelsbtn' => 'Haga clic en <b> Ver Relaciones </ b> para ver las relaciones asociadas con este módulo y crear nuevas relaciones.',
      'viewlayoutsbtn' => 'Haga clic en <b> Ver Diseños </ b> para ver los diseños para el módulo y para personalizar la organización de campo dentro de los diseños.',
      'duplicatebtn' => 'Haga clic en <b> duplicados </ b> para copiar las propiedades del módulo en un nuevo módulo y para mostrar el nuevo módulo. <br/><br/> Para el nuevo módulo, un nuevo nombre se genera automáticamente añadiendo un número al final del nombre del módulo utilizado para crearlo.',
      'deletebtn' => 'Haga clic en <b> Eliminar </ b> para eliminar este módulo.',
      'name' => 'Este es el <b> nombre </ b> del módulo actual. <br/><br/> El nombre debe ser alfanumérica y debe comenzar con una letra y sin espacios. (Ejemplo: HR_Management)',
      'label' => 'Esta es la <b> etiqueta </ b> que aparecerá en la pestaña de navegación para el módulo.',
      'savebtn' => 'Haga clic en <b> Guardar </ b> para guardar todos los datos introducidos en relación con el módulo.',
      'type_basic' => 'La plantilla <b> básica </ b> cuenta con campos básicos, como el nombre, Asignado a, Equipo, Fecha de creación y los campos de Descripción.',
    ),
  ),
  'assistantHelp' => 
  array (
    'studioWizard' => 
    array (
      'mbBtn' => 'Use el <b> Contructor de módulos </b> para crear nuevos módulos',
      'appBtn' => 'Utilice el modo de aplicación para personalizar las propiedades incluidas en el programa, por ejemplo, cómo muchos de los informes TPS que se muestran en la página de inicio',
      'backBtn' => 'Volver a la etapa anterior.',
      'studioHelp' => 'Use el <b>Studio</b> para personalizar los módulos instalados.',
      'moduleBtn' => 'Haga clic para editar este módulo.',
      'moduleHelp' => 'Seleccione el componente del módulo que desea editar',
      'fieldsBtn' => 'Editar información que se almacena en el módulo mediante el control de los <b> campos </b> del módulo. <br/><br/> Puede editar y crear campos personalizados aquí.',
      'labelsBtn' => 'Editar las <b> etiquetas </ b> para mostrar los valores de este módulo.',
      'layoutsBtn' => 'Personalizar las <b> vistas </b> del diseños de la edición, el detalle, el listado y la búsqueda.',
      'subpanelBtn' => 'Editar la información que se muestra en los subpaneles de los módulos.',
      'exportBtn' => 'Haga clic en <b> Exportar personalizaciones </ b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de los módulos específicos.',
    ),
  ),
  'labelTypes' => 
  array (
    '' => 'Etiquetas de uso frecuente',
    'all' => 'Todas las etiquetas',
  ),
);
