<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * App Config
 */
$app_list_strings['moduleList']['HintAccountsets'] = 'HintAccountsets';
$app_list_strings['moduleList']['HintNotificationTargets'] = 'HintNotificationTargets';
$app_list_strings['moduleList']['HintNewsNotifications'] = 'HintNewsNotifications';
$app_list_strings['moduleList']['HintEnrichFieldConfigs'] = 'HintEnrichFieldConfigs';

/**
 * Select2 field values
 */
$app_list_strings['stage2_preferences_type'] = [
    'owner' => 'My Accounts',
    'favorites' => 'Favorite Accounts',
    'tags' => 'Accounts tagged'
];

$app_list_strings['stage2_preferences_category'] = [
    'All' => 'All News',
    'General' => 'General',
    'Finance' => 'Financial',
    'People' => 'Personnel',
    'Press Releases' => 'Press Releases',
    'Other' => 'Other'
];

/**
 * Standard Translations
 */
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Tamaño de la empresa';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Sector';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Etiquetas del sector';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Ubicación de la empresa';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Descripción de la empresa';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Año de fundación';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Facebook de la empresa';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Twitter de la empresa';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Enlace al logotipo de la empresa';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Logotipo de la empresa';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Foto de contacto';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Página web de la empresa';
$app_strings['LBL_HINT_PHOTO'] = 'Enlace a la foto';
$app_strings['LBL_HINT_JOB_2'] = 'Trabajos anteriores';
$app_strings['LBL_HINT_EDUCATION'] = 'Formación';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Formación adicional';
$app_strings['LBL_HINT_TWITTER'] = 'Enlace a Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Enlace a Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'Código NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'Código SIC';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Fin del año fiscal';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Ingresos anuales';
$app_strings['LBL_HINT_PHONE_1'] = 'Teléfono 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Teléfono 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Unir tabla';
$app_strings['LBL_HINT_FULL_NAME'] = 'Nombre completo';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Cargo';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Teléfono de la oficina';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Móvil';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Otro teléfono';
$app_strings['LBL_HINT_WEBSITE'] = 'Página web';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = '¿Desea sobreescribir todos los datos existentes de este registro con los nuevos datos encontrados en Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = '¿Desea sobreescribir los {{fieldName}} existentes de este registro con los nuevos {{fieldName}} encontrados en Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Se eliminarán todos los datos relacionados con la cuenta. ¿Seguro que desea continuar?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Foto';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Etiquetas del grupo de cuentas de Hint';

$app_strings['LBL_HINT_LOADING'] = 'Cargando...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Desinstalando Hint, espere';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Valor borrado ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Esta información se ha borrado por una solicitud de privacidad de datos';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Seleccione una de las opciones de desinstalación siguientes:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Desinstalar solo el paquete de Hint';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Desinstalar Hint completamente';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Esta opción realizará una desinstalación completa de Hint, incluida la eliminación del MLP y de toda la información de configuración y suscripción.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Desinstalar';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Desinstalar Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Cancelar';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Consulte ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'para conocer más detalles sobre el proceso de desinstalación.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = '¿Seguro que desea desinstalar solo el paquete de Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = '¿Seguro que desea desinstalar Hint completamente?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(NOTA: NO SE PUEDE DESHACER ESTA ACCIÓN)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Campos de Hint';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'No se han encontrado resultados.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Diseño del panel básico de Hint';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Cuentas';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Contactos';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Clientes potenciales';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Diseño del panel ampliado de Hint';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Reorganizar los campos arrastrando y soltando las secciones anteriores por el diseño del panel de Hint.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Para obtener instrucciones detalladas o una lista de los campos predeterminados, consulte ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' para restaurar los ajustes predeterminados del ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'módulo.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = '¿Seguro que quiere volver a los valores predeterminados del módulo {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Haga clic aquí';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Guía de administración de Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Campos';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Campos enriquecidos';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'En esta sección se enumeran todos los campos de Hint y de Sugar que se enriquecen con Hint. Los campos de Hint están marcados con un asterisco (*) y solo se pueden mostrar en el panel de Hint si están enriquecidos.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Nombre del campo';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Campo enriquecido';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Mostrar en Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Mostrar en el panel de Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Campos adicionales de Sugar';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'En esta sección se enumeran todos los campos de Sugar que no están enriquecidos con Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Advertencia';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Precaución: Va a sincronizar con el servicio de Hint Insights. Cualquier historia pendiente del resumen de correo electrónico se perderá, y las noticias existentes se borrarán del dashlet de Insights. Las notificaciones de todo tipo se reanudarán después de finalizar la sincronización.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Las empresas sugeridas relacionadas con su {{_moduleSingular}} se enumeran a continuación. Seleccione los datos de la empresa que desea mostrar.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Ninguna cuenta seleccionada';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Se han encontrado múltiples correos electrónicos, seleccione los que desea importar: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Basándose en los datos introducidos, Hint no pude encontrar una coincidencia en el sistema.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Los mejores resultados de Hint se encuentran con el nomre y la dirección de correo electrónico de una persona.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Los mejores resultados de Hint se encuentran con el url de la página web de una empresa.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'No hay datos disponibles en la vista histórica';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Historial de actividad';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Enriquecimiento de datos';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'La licencia de su servicio Hint de SugarCRM ha caducado. Contacte con su administrador de SugarCRM para renovar su licencia.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = '¿Quiere ver qué puede hacer SugarCRM Hint por usted y por su empresa? Contacte con su administrador de SugarCRM para añadir Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'No se ha encontrado información de la cuenta';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Datos enriquecidos encontrados - haga clic para guardar todos los datos enriquecidos en su registro.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Haga clic para guardar los datos enriquecidos en su registro.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Contactos relacionados';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'No hay contactos relacionados';

$app_strings['LBL_HINT_NEWS'] = 'Noticias';
$app_strings['LBL_HINT_GENERAL'] = 'General';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Todas las noticias';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtrar las noticias';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Financieras';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personal';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Notas de prensa';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Otras';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Buscar artículos de noticias';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'No hay noticias disponibles';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Notificaciones nuevas';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Para';
$app_strings['LBL_HINT_WITH'] = 'con';
$app_strings['LBL_HINT_SHOW_ME'] = 'Muéstrame: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Notifícame mediante: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Centro de preferencias de Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Clave de opción de preferencias';
$app_strings['LBL_HINT_PREFERENCES'] = 'Preferencias';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Suprimir los deshabilitados, se necesita como mínimo una declaración de preferencia';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Añadir deshabilitados, ha alcanzado el máximo de declaraciones de preferencia';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Incluir en el dashlet de Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Emerge como notificación de escritorio';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Las notificaciones deben estar habilitadas en todos los navegadores y ordenadores para recibir notificaciones de manera consistente.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Algunos navegadores, como Internet Explorer, no son compatibles con las notificaciones. No se pueden habilitar las notificaciones al utilizar un navegador que no es compatible con las notificaciones.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Enviar una alerta instantánea de correo electrónico para cada notificación';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Enviar un resumen diario por correo electrónico';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Enviar un resumen semanal por correo electrónico';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'No se han podido guardar las preferencias. Compruebe la conexión de su sistema e inténtelo de nuevo.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Falta un valor en algunos campos obligatorios. Compruebe sus preferencias y asegúrese de que todos los campos obligatorios están rellenados.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Va a habilitar las notificaciones de navegador para Hint Insights. Haga clic en confirmar para continuar. Su navegador le pedirá permiso para permitir la recepción de eventos de notificación.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Se ha registrado el complemento de notificaciones push para {{options.type}} sin sus dependencias. El complemento no funcionará según lo previsto, asegúrese de proporcionar una ruta al archivo del trabajador y un método para guardar ls suscripción en el servidor.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Activar las notificaciones de Hint para todos los usuarios';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Desactivar las notificaciones de Hint para todos los usuarios';
