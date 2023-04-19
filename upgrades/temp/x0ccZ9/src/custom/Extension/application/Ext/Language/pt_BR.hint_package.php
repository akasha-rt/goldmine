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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Tamanho da empresa';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Indústria';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Marcas de indústria';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Local da empresa';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Descrição da empresa';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Ano de criação';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Facebook da empresa';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Twitter da empresa';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Link do logotipo da empresa';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Logotipo da empresa';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Foto do contato';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Site da empresa';
$app_strings['LBL_HINT_PHOTO'] = 'Link da foto';
$app_strings['LBL_HINT_JOB_2'] = 'Trabalhos anteriores';
$app_strings['LBL_HINT_EDUCATION'] = 'Educação';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Educação adicional';
$app_strings['LBL_HINT_TWITTER'] = 'Link do Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Link do Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'Código NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'Código SIC';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Fim do ano fiscal';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Receita anual';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefone 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefone 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Juntar tabela';
$app_strings['LBL_HINT_FULL_NAME'] = 'Nome completo';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Título do trabalho';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Telefone do escritório';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Celular';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Outro telefone';
$app_strings['LBL_HINT_WEBSITE'] = 'Site';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Deseja sobrescrever todos os dados existentes para este registro com os novos dados encontrados no Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Deseja sobrescrever o {{fieldName}} existente por este registro com o novo {{fieldName}} encontrado no Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Todos os dados de conta relacionados serão removidos. Tem certeza de que deseja continuar?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Foto';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Marcas de conjuntos de conta do Hint';

$app_strings['LBL_HINT_LOADING'] = 'Carregando...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Desinstalando o Hint, aguarde';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Valor apagado ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Estas informações foram apagadas por meio de uma solicitação de privacidade de dados';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Selecione uma das opções de desinstalação abaixo:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Desinstalar apenas o pacote do Hint';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Desinstalar o Hint completamente';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Esta opção realizará uma desinstalação completa do Hint, incluindo a remoção do MLP e a exclusão de todas as informações de configuração e assinatura.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Desinstalar';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Desinstalar o Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Cancelar';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Confira o ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'para ver mais detalhes sobre o processo de desinstalação.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Tem certeza de que deseja desinstalar apenas o pacote do Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Tem certeza de que deseja desinstalar o Hint completamente?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(NOTA: NÃO É POSSÍVEL DESFAZER ESTA AÇÃO)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Campos do Hint';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Nenhum resultado encontrado.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Layout do painel básico do Hint';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Contas';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Contatos';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Protenciais';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Layout do painel expandido do Hint';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Reorganize os campos arrastando e largado dentro das seções de Layout de painel do Hint acima.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Para obter instruções detalhadas e uma lista de campos padrão, consulte o ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' para restaurar as configurações padrão para o módulo ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = '.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Tem certeza de que deseja restaurar o módulo {{module}} para os padrões?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Clique aqui';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Guia de administração do Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Campos';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Campos enriquecidos';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Esta seção lista todos os campos do Hint e do Sugar que são enriquecidos pelo Hint. Os campos do Hint estão marcados com um asterisco (*) e só podem ser mostrados no painel do Hint se estiverem enriquecidos.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Nome do campo';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Enriquecer campo';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Mostrar no Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Mostrar em um painel do Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Campos adicionais do Sugar';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Esta seção lista todos os campos do Sugar que não são enriquecidos pelo Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Aviso';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Cuidado: você está prestes a sincronizar com o serviço do Hint Insights. Quaisquer histórias de resumo de e-mail pendentes serão perdidas, e as notícias existentes serão limpas do dashlet do Insights. As notificações de todos os tipos continuaram depois que a sincronização terminar.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'As empresas sugeridas relacionadas ao seu {{_moduleSingular}} estão listadas abaixo. Selecione os dados da empresa a exibir.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Nenhuma conta está selecionada';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Vários e-mails encontrados, selecione os e-mails a importar: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Com base nos dados inseridos, o Hint não conseguiu encontrar uma correspondência no sistema.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Os melhores resultados no Hint podem ser encontrados com o nome e endereço de e-mail de uma pessoa.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Os melhores resultados do Hint podem ser encontrados com a URL do site da empresa.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Não há dados disponíveis para vista histórica';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Histórico de atividades';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Enriquecimento de dados';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'A licença do seu serviço SugarCRM Hint expirou. Entre em contato com o seu administrador do SugarCRM para renovar a sua licença.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Deseja ver o que o SugarCRM Hint pode fazer por você e pela sua empresa? Entre em contato com o seu administrador do SugarCRM para adicionar o Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Informações da conta não encontradas';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Dados enriquecidos encontrados - clique para salvar todos os dados enriquecidos no seu registro.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Clique para salvar os dados enriquecidos no seu registro.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Contatos relacionados';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Nenhum contato relacionado';

$app_strings['LBL_HINT_NEWS'] = 'Notícias';
$app_strings['LBL_HINT_GENERAL'] = 'Gerais';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Todas as notícias';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtrar notícias';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Financeiras';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Pessoal';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Comunicados de imprensa';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Outros';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Pesquisar notícias';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Nenhuma notícia disponível';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Novas notificações';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Para';
$app_strings['LBL_HINT_WITH'] = 'com';
$app_strings['LBL_HINT_SHOW_ME'] = 'Mostrar-me: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Notificar-me por: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Centro de preferência de insights do Hint';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Tecla de opção de preferência';
$app_strings['LBL_HINT_PREFERENCES'] = 'Preferências';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Exclusão desativada, mínimo de uma declaração de preferência necessária';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Adição desativada, você alcançou o máximo de declarações de preferência';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Incluir no dashlet do Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Destacar como notificação de área de trabalho';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'As notificações devem estar ativadas em todos os navegadores e em todos os computadores desktop para serem recebidas constantemente.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Alguns navegadores, como o Internet Explorer, não suportam notificações. As notificações não podem ser ativadas ao usar um navegador que não suporta notificações.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Enviar um alerta de e-mail instantâneo para cada notificação';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Enviar um resumo de e-mails diário';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Enviar um resumo de e-mails semanal';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Não foi possível salvar as preferências. Confira a sua conexão com o sistema e tente novamente.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Alguns campos necessários estão com um valor em falta. Confira as suas preferências e garanta que todos os campos necessários estão preenchidos.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Você está prestes a ativar notificações de navegador para o Hint Insights. Clique em Confirmar para prosseguir. O seu navegador solicitará permissão para receber eventos de notificação.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'O plugin de notificações por push foi registrado para {{options.type}} sem suas dependências. O plugin não funcionará como pretendido. Certifique-se de fornecer um caminho para o arquivo trabalhador e um método para salvar a assinatura no servidor.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Ativar as notificações do Hint para todos os usuários';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Desativar as notificações do Hint para todos os usuários';
