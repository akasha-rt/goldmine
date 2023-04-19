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
$mod_strings = array (
    // Dashboard Names
    'LBL_KBCONTENTS_LIST_DASHBOARD' => 'Painel da lista da base de conhecimento',
    'LBL_KBCONTENTS_RECORD_DASHBOARD' => 'Painel do registro da base de conhecimento',
    'LBL_KBCONTENTS_FOCUS_DRAWER_DASHBOARD' => 'Gaveta de foco na base de conhecimento',

    'LBL_MODULE_NAME' => 'Base de conhecimento',
    'LBL_MODULE_NAME_SINGULAR' => 'Artigo da Base de Conhecimento',
    'LBL_MODULE_TITLE' => 'Artigo da Base de Conhecimento',
    'LNK_NEW_ARTICLE' => 'Criar Artigo',
    'LNK_LIST_ARTICLES' => 'Exibir artigos',
    'LNK_KNOWLEDGE_BASE_ADMIN_MENU' => 'Configurações',
    'LBL_EDIT_LANGUAGES' => 'Editar idiomas',
    'LBL_ADMIN_LABEL_LANGUAGES' => 'Idiomas disponíveis',
    'LBL_CONFIG_LANGUAGES_TITLE' => 'Idiomas disponíveis',
    'LBL_CONFIG_LANGUAGES_TEXT' => 'Conﬁgurar idiomas que serão usados no módulo da Base de conhecimento.',
    'LBL_CONFIG_LANGUAGES_LABEL_KEY' => 'Código do idioma',
    'LBL_CONFIG_LANGUAGES_LABEL_NAME' => 'Rótulo do idioma',
    'ERR_CONFIG_LANGUAGES_DUPLICATE' => 'Não é permitido adicionar idiomas com uma chave que duplique uma existente.',
    'ERR_CONFIG_LANGUAGES_EMPTY_KEY' => 'The Language Code field is empty, please enter values before saving.',
    'ERR_CONFIG_LANGUAGES_EMPTY_VALUE' => 'The Language Label field is empty, please enter values before saving.',
    'LBL_SET_ITEM_PRIMARY' => 'Definir valor como Primário',
    'LBL_ITEM_REMOVE' => 'Remover item',
    'LBL_ITEM_ADD' => 'Adicionar item',
    'LBL_MODULE_ID'=> 'KBContents',
    'LBL_DOCUMENT_REVISION_ID' => 'ID da revisão',
    'LBL_DOCUMENT_REVISION' => 'Revisão',
    'LBL_NUMBER' => 'Número',
    'LBL_TEXT_BODY' => 'Corpo',
    'LBL_LANG' => 'Idioma',
    'LBL_PUBLISH_DATE' => 'Data de publicação',
    'LBL_EXP_DATE' => 'Data de vencimento',
    'LBL_DOC_ID' => 'ID do documento',
    'LBL_APPROVED' => 'Aprovado',
    'LBL_REVISION' => 'Revisão',
    'LBL_ACTIVE_REV' => 'Revisão ativa',
    'LBL_IS_EXTERNAL' => 'Artigo externo',
    'LBL_KBDOCUMENT_ID' => 'ID do KBDocument',
    'LBL_KBDOCUMENTS' => 'KBDocuments',
    'LBL_KBDOCUMENT' => 'KBDocument',
    'LBL_KBARTICLE' => 'Artigo',
    'LBL_KBARTICLES' => 'Artigos',
    'LBL_KBARTICLE_ID' => 'Id do artigo',
    'LBL_USEFUL' => 'Útil',
    'LBL_NOT_USEFUL' => 'Não é útil',
    'LBL_RATING' => 'Classificação',
    'LBL_VIEWED_COUNT' => 'Exibir contagem',
    'LBL_CATEGORIES' => 'Categorias da base de conhecimento',
    'LBL_CATEGORY_NAME' => 'Categoria',
    'LBL_USEFULNESS' => 'Utilidade',
    'LBL_CATEGORY_ID' => 'Id da Categoria',
    'LBL_KBSAPPROVERS' => 'Aprovadores',
    'LBL_KBSAPPROVER_ID' => 'Aprovado Por',
    'LBL_KBSAPPROVER' => 'Aprovado Por',
    'LBL_KBSCASES' => 'Ocorrências',
    'LBL_KBSCASE_ID' => 'Caso relacionado',
    'LBL_KBSCASE' => 'Caso relacionado',
    'LBL_MORE_MOST_USEFUL_ARTICLES' => 'Mais dos artigos mais úteis publicados da base de conhecimento...',
    'LBL_KBSLOCALIZATIONS' => 'Localizações',
    'LBL_LOCALIZATIONS_SUBPANEL_TITLE' => 'Localizações',
    'LBL_KBSREVISIONS' => 'Revisões',
    'LBL_REVISIONS_SUBPANEL_TITLE' => 'Revisões',
    'LBL_LISTVIEW_FILTER_ALL' => 'Todos os artigos',
    'LBL_LISTVIEW_FILTER_MY' => 'Meus artigos',
    'LBL_CREATE_LOCALIZATION_BUTTON_LABEL' => 'Criar localização',
    'LBL_CREATE_REVISION_BUTTON_LABEL' => 'Criar revisão',
    'LBL_CANNOT_CREATE_LOCALIZATION' =>
        'Não é possível criar uma nova localização, pois já existe uma versão de localização para todos os idiomas disponíveis.',
    'LBL_SPECIFY_PUBLISH_DATE' => 'Schedule this article to be published by specifying the Publish Date. Do you wish to continue without updating a Publish Date?',
    'LBL_MODIFY_EXP_DATE_LOW' => 'A data de vencimento ocorre em uma data antes da data de publicação. Deseja continuar sem modificar a data de vencimento?',
    'LBL_PANEL_INMORELESS' => 'Utilidade',
    'LBL_MORE_OTHER_LANGUAGES' => 'Mais outros idiomas...',
    'EXCEPTION_VOTE_USEFULNESS_NOT_AUTHORIZED' => 'Você não está autorizado a votar em {moduleName} como útil/não é útil. Entre em contato com o administrador se você precisar de acesso.',
    'LNK_NEW_KBCONTENT_TEMPLATE' => 'Criar modelo',
    'LNK_LIST_KBCONTENT_TEMPLATES' => 'Exibir modelos',
    'LNK_LIST_KBCATEGORIES' => 'Ver categorias',
    'LBL_TEMPLATES' => 'Modelos',
    'LBL_TEMPLATE' => 'Modelo',
    'LBL_TEMPATE_LOAD_MESSAGE' => 'O modelo substituirá todo o conteúdo.' .
        ' Tem certeza de que deseja usar esse modelo?',
    'LNK_IMPORT_KBCONTENTS' => 'Importar artigos',
    'LBL_DELETE_CONFIRMATION_LANGUAGE' => 'Todos os documentos com esse idioma serão excluídos! Tem certeza de que deseja excluir esse idioma?',
    'LBL_CREATE_CATEGORY_PLACEHOLDER' => 'Pressione Enter para criar ou Esc para cancelar',
    'LBL_KB_NOTIFICATION' => 'O documento foi publicado.',
    'LBL_KB_PUBLISHED_REQUEST' => 'atribuiu a você um documento para aprovação e publicação.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'O status do documento foi alterado novamente para rascunho.',
    'LBL_OPERATOR_CONTAINING_THESE_WORDS' => 'contendo essas palavras',
    'LBL_OPERATOR_EXCLUDING_THESE_WORDS' => 'excluindo essas palavras',
    'ERROR_EXP_DATE_LOW' => 'A data de validade não pode ser anterior à data de publicação.',
    'ERROR_ACTIVE_DATE_APPROVE_REQUIRED' => 'O status Aprovado exige uma data de publicação.',
    'ERROR_ACTIVE_DATE_LOW' => 'The Publish Date must occur on a later date than today&#39;s date.',
    'ERROR_ACTIVE_DATE_EMPTY' => 'A data de publicação está vazia.',
    'LBL_RECORD_SAVED_SUCCESS' => 'Você criou com êxito o {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a>.', // use when a model is available
    'ERROR_IS_BEFORE' => 'Erro. A data deste campo deve ser posterior à data do campo {{this}}.',
    'TPL_SHOW_MORE_MODULE' => 'Mais artigos do {{module}}...',
    'LBL_LIST_FORM_TITLE' => 'Lista da base de conhecimento',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisa da base de conhecimento',
);
