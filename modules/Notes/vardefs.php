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
$dictionary['Note'] = [
    'studio_enabled' => [
        'portal' => false,
    ],
    'audited' => true,
    'favorites' => true,
    'table' => 'notes',
    'activity_enabled' => true,
    'unified_search' => true,
    'full_text_search' => true,
    'unified_search_default_enabled' => true,
    'comment' => 'Notes & Attachments',
    //This enables optimistic locking for Saves From EditView
    'optimistic_locking' => true,
    'duplicate_check' => [
        'enabled' => false,
    ],
    'fields' => [
        'name' => [
            'name' => 'name',
            'vname' => 'LBL_NOTE_SUBJECT',
            'dbType' => 'varchar',
            'type' => 'name',
            'len' => '255',
            'unified_search' => true,
            'full_text_search' => [
                'enabled' => true,
                'searchable' => true,
                'boost' => 0.83,
            ],
            'comment' => 'Name of the note',
            'importable' => 'required',
            'required' => true,
        ],
        'file_mime_type' => [
            'name' => 'file_mime_type',
            'vname' => 'LBL_FILE_MIME_TYPE',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Attachment MIME type',
            'importable' => false,
            'duplicate_on_record_copy' => 'always',
        ],
        'file_ext' => [
            'name' => 'file_ext',
            'vname' => 'LBL_FILE_EXTENSION',
            'type' => 'varchar',
            'len' => 100,
            'duplicate_on_record_copy' => 'always',
            'massupdate' => false,
        ],
        'file_source' => [
            'name' => 'file_source',
            'vname' => 'LBL_FILE_SOURCE',
            'type' => 'varchar',
            'len' => '32',
            'comment' => 'The name of the module where the attachment originated',
            'importable' => false,
            'duplicate_on_record_copy' => 'always',
            'massupdate' => false,
        ],
        'file_size' => [
            'name' => 'file_size',
            'vname' => 'LBL_FILE_SIZE',
            'type' => 'int',
            'comment' => 'Attachment File Size',
            'importable' => false,
            'default' => 0,
            'duplicate_on_record_copy' => 'always',
            'massupdate' => false,
        ],
        'file_url' => [
            'name' => 'file_url',
            'vname' => 'LBL_FILE_URL',
            'type' => 'varchar',
            'source' => 'non-db',
            'reportable' => false,
            'comment' => 'Path to file (can be URL)',
            'importable' => false,
        ],
        'filename' => [
            'name' => 'filename',
            'vname' => 'LBL_FILENAME',
            'type' => 'file',
            'dbType' => 'varchar',
            'len' => '255',
            'reportable' => true,
            'comment' => 'File name associated with the note (attachment)',
            'importable' => false,
            'duplicate_on_record_copy' => 'always',
            'studio' => false,
        ],
        'upload_id' => [
            'name' => 'upload_id',
            'type' => 'id',
            'required' => false,
            'reportable' => false,
            'comment' => 'File id under uploads/ dir. Set only for email attachments',
            'duplicate_on_record_copy' => 'always',
        ],
        'email_type' => [
            'comment' => "The module of the record to which this note's file is attached (Emails or EmailTemplates)",
            'name' => 'email_type',
            'reportable' => false,
            'required' => false,
            'studio' => false,
            'massupdate' => false,
            'duplicate_on_record_copy' => 'always',
            'type' => 'varchar',
            'vname' => 'LBL_EMAIL_TYPE',
        ],
        'email_id' => [
            'comment' => 'Email or EmailTemplate ID to which this note is attached',
            'name' => 'email_id',
            'reportable' => false,
            'required' => false,
            'studio' => false,
            'massupdate' => false,
            'duplicate_on_record_copy' => 'always',
            'type' => 'id',
            'vname' => 'LBL_EMAIL_ID',
        ],
        'note_parent_id' => [
            'name' => 'note_parent_id',
            'vname' => 'LBL_NOTE_PARENT_ID',
            'type' => 'id',
            'required' => false,
            'reportable' => true,
            'comment' => 'The parent Note ID',
        ],
        'parent_type' => [
            'name' => 'parent_type',
            'vname' => 'LBL_PARENT_TYPE',
            'type' => 'parent_type',
            'dbType' => 'varchar',
            'group' => 'parent_name',
            'options' => 'parent_type_display',
            'len' => '255',
            'studio' => [
                'wirelesslistview' => false,
            ],
            'comment' => 'Sugar module the Note is associated with',
        ],
        'parent_id' => [
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_ID',
            'type' => 'id',
            'required' => false,
            'reportable' => true,
            'comment' => 'The ID of the Sugar item specified in parent_type',
        ],
        'contact_id' => [
            'name' => 'contact_id',
            'vname' => 'LBL_CONTACT_ID',
            'type' => 'id',
            'required' => false,
            'reportable' => false,
            'comment' => 'Contact ID note is associated with',
        ],
        'portal_flag' => [
            'name' => 'portal_flag',
            'vname' => 'LBL_PORTAL_FLAG',
            'type' => 'bool',
            'default' => '1',
            'comment' => 'Portal flag indicator determines if note created via portal',
        ],
        'embed_flag' => [
            'name' => 'embed_flag',
            'vname' => 'LBL_EMBED_FLAG',
            'type' => 'bool',
            'default' => 0,
            'comment' => 'Embed flag indicator determines if note embedded in email',
        ],
        'description' => [
            'name' => 'description',
            'vname' => 'LBL_DESCRIPTION',
            'type' => 'text',
            'comment' => 'Full text of the note',
            'rows' => 30,
            'cols' => 90,
            'full_text_search' => [
                'enabled' => true,
                'searchable' => true,
                'boost' => 0.44,
            ],
        ],
        'parent_name' => [
            'name' => 'parent_name',
            'parent_type' => 'record_type_display' ,
            'type_name' => 'parent_type',
            'id_name' => 'parent_id', 'vname'=>'LBL_RELATED_TO',
            'type' => 'parent',
            'source' => 'non-db',
            'options' => 'record_type_display_notes',
            'studio' => true,
        ],
        'contact_name' => [
            'name' => 'contact_name',
            'rname' => 'name',
            'id_name' => 'contact_id',
            'vname' => 'LBL_CONTACT_NAME',
            'table' => 'contacts',
            'type' => 'relate',
            'link' => 'contact',
            'join_name' => 'contacts',
            'db_concat_fields' => [
                'first_name',
                'last_name',
            ],
            'isnull' => 'true',
            'module' => 'Contacts',
            'source' => 'non-db',
        ],
        'contact_phone' => [
            'name' =>'contact_phone',
            'vname' => 'LBL_PHONE',
            'type' => 'relate',
            'source' =>'non-db',
            'link' => 'contact',
            'module' => 'Contacts',
            'table' => 'contacts',
            'id_name' => 'contact_id',
            'rname' => 'phone_work',
        ],
        'contact_email' => [
            'name' => 'contact_email',
            'type' =>'varchar',
            'vname' => 'LBL_EMAIL_ADDRESS',
            'source' => 'non-db',
            'studio' => false,
        ],
        'account_id' => [
            'name' => 'account_id',
            'vname' => 'LBL_ACCOUNT_ID',
            'type' => 'id',
            'reportable' => false,
            'source' => 'non-db',
        ],
        'opportunity_id' => [
            'name' => 'opportunity_id',
            'vname' => 'LBL_OPPORTUNITY_ID',
            'type' => 'id',
            'reportable' => false,
            'source' => 'non-db',
        ],
        'acase_id' => [
            'name' => 'acase_id',
            'vname' => 'LBL_CASE_ID',
            'type' => 'id',
            'reportable' => false,
            'source' => 'non-db',
        ],
        'lead_id' => [
            'name' => 'lead_id',
            'vname' => 'LBL_LEAD_ID',
            'type' => 'id',
            'reportable' => false,
            'source' => 'non-db',
        ],
        'product_id' => [
            'name' => 'product_id',
            'vname' => 'LBL_PRODUCT_ID',
            'type' => 'id',
            'reportable' => false,
            'source' => 'non-db',
        ],
        'quote_id' => [
            'name' => 'quote_id',
            'vname' => 'LBL_QUOTE_ID',
            'type' => 'id',
            'reportable' => false,
            'source' => 'non-db',
        ],
        'contact' => [
            'name' => 'contact',
            'type' => 'link',
            'relationship' => 'contact_notes',
            'vname' => 'LBL_LIST_CONTACT_NAME',
            'source' => 'non-db',
        ],
        'cases' => [
            'name' => 'cases',
            'type' => 'link',
            'relationship' => 'case_notes',
            'vname' => 'LBL_CASES',
            'source' => 'non-db',
        ],
        'accounts' => [
            'name' => 'accounts',
            'type' => 'link',
            'relationship' => 'account_notes',
            'source' => 'non-db',
            'vname' => 'LBL_ACCOUNTS',
        ],
        'opportunities' => [
            'name' => 'opportunities',
            'type' => 'link',
            'relationship' => 'opportunity_notes',
            'source' => 'non-db',
            'vname' => 'LBL_OPPORTUNITIES',
        ],
        'leads' => [
            'name' => 'leads',
            'type' => 'link',
            'relationship' => 'lead_notes',
            'source' => 'non-db',
            'vname' => 'LBL_LEADS',
        ],
        'products' => [
            'name' => 'products',
            'type' => 'link',
            'relationship' => 'product_notes',
            'source' => 'non-db',
            'vname' => 'LBL_PRODUCTS',
        ],
        'revenuelineitems' => [
            'name' => 'revenuelineitems',
            'type' => 'link',
            'relationship' => 'revenuelineitem_notes',
            'source' => 'non-db',
            'vname' => 'LBL_REVENUELINEITEMS',
            'workflow' => false,
        ],
        'quotes' => [
            'name' => 'quotes',
            'type' => 'link',
            'relationship' => 'quote_notes',
            'vname' => 'LBL_QUOTES',
            'source' => 'non-db',
        ],
        'contracts' => [
            'name' => 'contracts',
            'type' => 'link',
            'relationship' => 'contract_notes',
            'source' => 'non-db',
            'vname' => 'LBL_CONTRACTS',
        ],
        'prospects' => [
            'name' => 'prospects',
            'type' => 'link',
            'relationship' => 'prospect_notes',
            'source' => 'non-db',
            'vname' => 'LBL_PROSPECTS',
        ],
        'bugs' => [
            'name' => 'bugs',
            'type' => 'link',
            'relationship' => 'bug_notes',
            'source' => 'non-db',
            'vname' => 'LBL_BUGS',
        ],
        'kbcontents' => [
            'name' => 'kbcontents',
            'type' => 'link',
            'relationship' => 'kbcontent_notes',
            'source' => 'non-db',
            'vname' => 'LBL_KBDOCUMENTS',
        ],
        'emails' => [
            'name' => 'emails',
            'vname' => 'LBL_EMAILS',
            'type' => 'link',
            'relationship' => 'emails_notes_rel',
            'source' => 'non-db',
        ],
        'email_attachment_for' => [
            'bean_name' => 'Email',
            'module' => 'Emails',
            'name' => 'email_attachment_for',
            'relationship' => 'emails_attachments',
            'source' => 'non-db',
            'type' => 'link',
            'vname' => 'LBL_EMAIL_ATTACHMENT_FOR',
        ],
        'emailtemplates_attachment_for' => [
            'bean_name' => 'EmailTemplate',
            'module' => 'EmailTemplates',
            'name' => 'emailtemplates_attachment_for',
            'relationship' => 'emailtemplates_attachments',
            'source' => 'non-db',
            'type' => 'link',
            'vname' => 'LBL_EMAILTEMPLATES_ATTACHMENT_FOR',
        ],
        'projects' => [
            'name' => 'projects',
            'type' => 'link',
            'relationship' => 'projects_notes',
            'source' => 'non-db',
            'vname' => 'LBL_PROJECTS',
        ],
        'project_tasks' => [
            'name' => 'project_tasks',
            'type' => 'link',
            'relationship' => 'project_tasks_notes',
            'source' => 'non-db',
            'vname' => 'LBL_PROJECT_TASKS',
        ],
        'meetings' => [
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'meetings_notes',
            'source' => 'non-db',
            'vname' => 'LBL_MEETINGS',
        ],
        'calls' => [
            'name' => 'calls',
            'type' => 'link',
            'relationship' => 'calls_notes',
            'source' => 'non-db',
            'vname' => 'LBL_CALLS',
        ],
        'tasks' => [
            'name' => 'tasks',
            'type' => 'link',
            'relationship' => 'tasks_notes',
            'source' => 'non-db',
            'vname' => 'LBL_TASKS',
        ],
        'escalations' => [
            'name' => 'escalations',
            'type' => 'link',
            'relationship' => 'escalation_notes',
            'source' => 'non-db',
            'vname' => 'LBL_ESCALATIONS',
        ],
        'external_user' => [
            'name' => 'external_user',
            'type' => 'link',
            'relationship' => 'external_user_notes',
            'vname' => 'LBL_EXTERNAL_USER',
            'source' => 'non-db',
        ],
        'user_name' => [
            'name' => 'user_name',
            'rname' => 'name',
            'id_name' => 'external_id',
            'vname' => 'LBL_EXTERNAL_USER_NAME',
            'table' => 'external_users',
            'type' => 'relate',
            'link' => 'external_user',
            'join_name' => 'external_users',
            'isnull' => 'true',
            'module' => 'ExternalUsers',
            'source' => 'non-db',
            'readonly' => true,
        ],
        'external_id' => [
            'name' => 'external_id',
            'type' => 'id',
            'vname' => 'LBL_EXTERNAL_ID',
            'comment' => 'External id of the external user',
        ],
        'schedulersjobs' => [
            'name' => 'schedulersjobs',
            'type' => 'link',
            'relationship' => 'schedulersjob_notes',
            'source' => 'non-db',
            'vname' => 'LBL_SCHEDULERS_JOBS',
        ],
        'contact_parent' => [
            'name' => 'contact_parent',
            'type' => 'link',
            'relationship' => 'contact_notes_parent',
            'source' => 'non-db',
            'reportable' => false,
        ],
        'entry_source' => [
            'name' => 'entry_source',
            'vname' => 'LBL_ENTRY_SOURCE',
            'type' => 'enum',
            'function' => 'getSourceTypes',
            'function_bean' => 'Notes',
            'len' => '255',
            'default' => 'internal',
            'comment' => 'Determines if a record was created internal to the system or external to the system',
            'readonly' => true,
            'studio' => false,
            'processes' => true,
        ],
        'attachment_flag' => [
            'name' => 'attachment_flag',
            'vname' => 'LBL_ATTACHMENT_FLAG',
            'type' => 'bool',
            'comment' => 'Identify this note as an attachment to another record',
            'default' => false,
            'readonly' => true,
            'processes' => true,
            'studio' => false,
        ],
        'attachment_list' => [
            'name' => 'attachment_list',
            'links' => [
                'attachments',
            ],
            'order_by' => 'name:asc',
            'source' => 'non-db',
            'type' => 'collection',
            'vname' => 'LBL_ATTACHMENTS',
            'reportable' => false,
            'hideacl' => true,
            'displayParams' => [
                'type' => 'multi-attachments',
                'fields' => [
                    'name',
                    'filename',
                    'file_mime_type',
                ],
                'related_fields' => [
                    'filename',
                    'file_mime_type',
                ],
                'link' => 'attachments',
                'module' => 'Notes',
                'modulefield' => 'filename',
            ],
        ],
        'attachments' => [
            'name' => 'attachments',
            'vname' => 'LBL_ATTACHMENTS',
            'type' => 'link',
            'relationship' => 'notes_attachments',
            'module' => 'Notes',
            'bean_name' => 'Note',
            'source' => 'non-db',
        ],
        // rhs link for note attachments
        'note_attachment' => [
            'name' => 'note_attachment',
            'type' => 'link',
            'relationship' => 'notes_attachments',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_NOTE_ATTACHMENT',
        ],
        // rhs link for KB attachments
        'kb_attachment' => [
            'name' => 'kb_attachment',
            'type' => 'link',
            'relationship' => 'kbcontent_attachments',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_KB_ATTACHMENT',
        ],
        // rhs link for case attachments
        'case_attachment' => [
            'name' => 'case_attachment',
            'type' => 'link',
            'relationship' => 'case_attachments',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_CASE_ATTACHMENT',
        ],
    ],
    'relationships' => [
        'notes_attachments' => [
            'lhs_module' => 'Notes',
            'lhs_table' => 'notes',
            'lhs_key' => 'id',
            'rhs_module' => 'Notes',
            'rhs_table' => 'notes',
            'rhs_key' => 'note_parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_class' => 'AttachmentRelationship',
            'relationship_file' => 'data/Relationships/AttachmentRelationship.php',
        ],
    ],
    'indices' => [
        [
            'name' => 'idx_note_name',
            'type' => 'index',
            'fields' => [
                'deleted',
                'name',
                'date_modified',
            ],
        ],
        [
            'name' => 'idx_note_parent_id',
            'type' => 'index',
            'fields' => [
                'note_parent_id',
            ],
        ],
        [
            'name' => 'idx_notes_parent',
            'type' => 'index',
            'fields' => [
                'parent_id',
                'parent_type',
            ],
        ],
        [
            'name' => 'idx_note_contact',
            'type' => 'index',
            'fields' => [
                'contact_id',
            ],
        ],
        [
            'name' => 'idx_note_email_type',
            'type' => 'index',
            'fields' => [
                'email_type',
            ],
        ],
        [
            'name' => 'idx_note_email',
            'type' => 'index',
            'fields' => [
                'email_id',
                'email_type',
            ],
        ],
        [
            'name' => 'idx_note_upload_id',
            'type' => 'index',
            'fields' => [
                'upload_id',
            ],
        ],
        [
            'name' => 'idx_note_external_user',
            'type' => 'index',
            'fields' => [
                'external_id',
            ],
        ],
    ],
    'uses' => [
        'default',
        'assignable',
        'team_security',
        'external_source',
    ],
    'portal_visibility' => [
        'class' => 'Notes',
    ],
];

VardefManager::createVardef('Notes', 'Note');
