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
$relationships = array (
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'bug_id' => 
      array (
        'name' => 'bug_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
    'readonly' => true,
    'relationship_name' => 'accounts_bugs',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'primary_account' => 
      array (
        'name' => 'primary_account',
        'type' => 'bool',
        'default' => '0',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
        'primary_flag_column' => 'primary_account',
        'primary_flag_side' => 'rhs',
        'primary_flag_default' => true,
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
    'primary_flag_column' => 'primary_account',
    'primary_flag_side' => 'rhs',
    'primary_flag_default' => true,
    'readonly' => true,
    'relationship_name' => 'accounts_contacts',
    'rhs_subpanel' => 'ForAccountsContacts',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
    'true_relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'accounts_opportunities',
    'rhs_subpanel' => 'ForAccountsOpportunities',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'projects_accounts' => 
  array (
    'name' => 'projects_accounts',
    'table' => 'projects_accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_acct_acct',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'projects_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_accounts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_accounts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_accounts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'account_id',
    'readonly' => true,
    'relationship_name' => 'projects_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'quotes_billto_accounts' => 
  array (
    'name' => 'quotes_billto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'account_role' => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'quotes_billto_accounts',
    'rhs_subpanel' => 'ForAccounts',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'quotes_shipto_accounts' => 
  array (
    'name' => 'quotes_shipto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'account_role' => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'quotes_shipto_accounts',
    'rhs_subpanel' => 'ForAccounts',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_dataprivacy' => 
  array (
    'name' => 'accounts_dataprivacy',
    'table' => 'accounts_dataprivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'dataprivacy_id' => 
      array (
        'name' => 'dataprivacy_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_dataprivacypk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_dataprivacy_dataprivacy',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dataprivacy_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_dataprivacy',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'dataprivacy_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_dataprivacy' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'DataPrivacy',
        'rhs_table' => 'data_privacy',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_dataprivacy',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'dataprivacy_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_dataprivacy',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'dataprivacy_id',
    'readonly' => true,
    'relationship_name' => 'accounts_dataprivacy',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
    'readonly' => true,
    'relationship_name' => 'documents_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_escalations' => 
  array (
    'name' => 'accounts_escalations',
    'true_relationship_type' => 'many-to-many',
    'table' => 'accounts_escalations',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'escalation_id' => 
      array (
        'name' => 'escalation_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_escalationspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_escalations' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Escalations',
        'rhs_table' => 'escalations',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_escalations',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'escalation_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Escalations',
    'rhs_table' => 'escalations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_escalations',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'escalation_id',
    'readonly' => true,
    'relationship_name' => 'accounts_escalations',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'external_users_accounts' => 
  array (
    'name' => 'external_users_accounts',
    'table' => 'external_users_accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'external_user_id' => 
      array (
        'name' => 'external_user_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'external_users_accountspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ext_user_acc_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'external_user_id',
          1 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ext_user_acc_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'external_users_accounts' => 
      array (
        'lhs_module' => 'ExternalUsers',
        'lhs_table' => 'external_users',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'external_users_accounts',
        'join_key_lhs' => 'external_user_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'ExternalUsers',
    'lhs_table' => 'external_users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'external_users_accounts',
    'join_key_lhs' => 'external_user_id',
    'join_key_rhs' => 'account_id',
    'readonly' => true,
    'relationship_name' => 'external_users_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_leads_1' => 
  array (
    'name' => 'accounts_leads_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_leads_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_leads_1_c',
        'join_key_lhs' => 'accounts_leads_1accounts_ida',
        'join_key_rhs' => 'accounts_leads_1leads_idb',
      ),
    ),
    'table' => 'accounts_leads_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'accounts_leads_1accounts_ida' => 
      array (
        'name' => 'accounts_leads_1accounts_ida',
        'type' => 'id',
      ),
      'accounts_leads_1leads_idb' => 
      array (
        'name' => 'accounts_leads_1leads_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_accounts_leads_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_accounts_leads_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_leads_1accounts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_leads_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_leads_1leads_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'accounts_leads_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_leads_1leads_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_leads_1_c',
    'join_key_lhs' => 'accounts_leads_1accounts_ida',
    'join_key_rhs' => 'accounts_leads_1leads_idb',
    'readonly' => true,
    'relationship_name' => 'accounts_leads_1',
    'rhs_subpanel' => 'ForAccountsLeads',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_opportunities_1' => 
  array (
    'name' => 'accounts_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_opportunities_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_opportunities_1_c',
        'join_key_lhs' => 'accounts_opportunities_1accounts_ida',
        'join_key_rhs' => 'accounts_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'accounts_opportunities_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'accounts_opportunities_1accounts_ida' => 
      array (
        'name' => 'accounts_opportunities_1accounts_ida',
        'type' => 'id',
      ),
      'accounts_opportunities_1opportunities_idb' => 
      array (
        'name' => 'accounts_opportunities_1opportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_accounts_opportunities_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_accounts_opportunities_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_opportunities_1accounts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_opportunities_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_opportunities_1opportunities_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'accounts_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_opportunities_1_c',
    'join_key_lhs' => 'accounts_opportunities_1accounts_ida',
    'join_key_rhs' => 'accounts_opportunities_1opportunities_idb',
    'readonly' => true,
    'relationship_name' => 'accounts_opportunities_1',
    'rhs_subpanel' => 'ForAccountsOpportunities',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_som_specialorderquotes_1' => 
  array (
    'name' => 'accounts_som_specialorderquotes_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_som_specialorderquotes_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'SOM_SpecialOrderQuotes',
        'rhs_table' => 'som_specialorderquotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_som_specialorderquotes_1_c',
        'join_key_lhs' => 'accounts_som_specialorderquotes_1accounts_ida',
        'join_key_rhs' => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
      ),
    ),
    'table' => 'accounts_som_specialorderquotes_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'accounts_som_specialorderquotes_1accounts_ida' => 
      array (
        'name' => 'accounts_som_specialorderquotes_1accounts_ida',
        'type' => 'id',
      ),
      'accounts_som_specialorderquotes_1som_specialorderquotes_idb' => 
      array (
        'name' => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_accounts_som_specialorderquotes_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_accounts_som_specialorderquotes_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_som_specialorderquotes_1accounts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_som_specialorderquotes_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'accounts_som_specialorderquotes_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'SOM_SpecialOrderQuotes',
    'rhs_table' => 'som_specialorderquotes',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_som_specialorderquotes_1_c',
    'join_key_lhs' => 'accounts_som_specialorderquotes_1accounts_ida',
    'join_key_rhs' => 'accounts_som_specialorderquotes_1som_specialorderquotes_idb',
    'readonly' => true,
    'relationship_name' => 'accounts_som_specialorderquotes_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_som_specialorderquotes_2' => 
  array (
    'name' => 'accounts_som_specialorderquotes_2',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_som_specialorderquotes_2' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'SOM_SpecialOrderQuotes',
        'rhs_table' => 'som_specialorderquotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_som_specialorderquotes_2_c',
        'join_key_lhs' => 'accounts_som_specialorderquotes_2accounts_ida',
        'join_key_rhs' => 'accounts_som_specialorderquotes_2som_specialorderquotes_idb',
      ),
    ),
    'table' => 'accounts_som_specialorderquotes_2_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'accounts_som_specialorderquotes_2accounts_ida' => 
      array (
        'name' => 'accounts_som_specialorderquotes_2accounts_ida',
        'type' => 'id',
      ),
      'accounts_som_specialorderquotes_2som_specialorderquotes_idb' => 
      array (
        'name' => 'accounts_som_specialorderquotes_2som_specialorderquotes_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_accounts_som_specialorderquotes_2_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_accounts_som_specialorderquotes_2_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_som_specialorderquotes_2accounts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_som_specialorderquotes_2_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_som_specialorderquotes_2som_specialorderquotes_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'accounts_som_specialorderquotes_2_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_som_specialorderquotes_2som_specialorderquotes_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'SOM_SpecialOrderQuotes',
    'rhs_table' => 'som_specialorderquotes',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_som_specialorderquotes_2_c',
    'join_key_lhs' => 'accounts_som_specialorderquotes_2accounts_ida',
    'join_key_rhs' => 'accounts_som_specialorderquotes_2som_specialorderquotes_idb',
    'readonly' => true,
    'relationship_name' => 'accounts_som_specialorderquotes_2',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sf_webactivity_accounts' => 
  array (
    'name' => 'sf_webactivity_accounts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'sf_webactivity_accounts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'sf_webActivity',
        'rhs_table' => 'sf_webactivity',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'sf_webactivity_accounts_c',
        'join_key_lhs' => 'sf_webactivity_accountsaccounts_ida',
        'join_key_rhs' => 'sf_webactivity_accountssf_webactivity_idb',
      ),
    ),
    'table' => 'sf_webactivity_accounts_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'sf_webactivity_accountsaccounts_ida' => 
      array (
        'name' => 'sf_webactivity_accountsaccounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      'sf_webactivity_accountssf_webactivity_idb' => 
      array (
        'name' => 'sf_webactivity_accountssf_webactivity_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'sf_webactivity_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'sf_webactivity_accounts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'sf_webactivity_accountsaccounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'sf_webactivity_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'sf_webactivity_accountssf_webactivity_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'sf_webActivity',
    'rhs_table' => 'sf_webactivity',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'sf_webactivity_accounts_c',
    'join_key_lhs' => 'sf_webactivity_accountsaccounts_ida',
    'join_key_rhs' => 'sf_webactivity_accountssf_webactivity_idb',
    'readonly' => true,
    'relationship_name' => 'sf_webactivity_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'accounts_lss01_groupemails_1' => 
  array (
    'name' => 'accounts_lss01_groupemails_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_lss01_groupemails_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'LSS01_GroupEmails',
        'rhs_table' => 'lss01_groupemails',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_lss01_groupemails_1_c',
        'join_key_lhs' => 'accounts_lss01_groupemails_1accounts_ida',
        'join_key_rhs' => 'accounts_lss01_groupemails_1lss01_groupemails_idb',
      ),
    ),
    'table' => 'accounts_lss01_groupemails_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'accounts_lss01_groupemails_1accounts_ida' => 
      array (
        'name' => 'accounts_lss01_groupemails_1accounts_ida',
        'type' => 'id',
      ),
      'accounts_lss01_groupemails_1lss01_groupemails_idb' => 
      array (
        'name' => 'accounts_lss01_groupemails_1lss01_groupemails_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_accounts_lss01_groupemails_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_accounts_lss01_groupemails_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_lss01_groupemails_1accounts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_lss01_groupemails_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_lss01_groupemails_1lss01_groupemails_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'accounts_lss01_groupemails_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_lss01_groupemails_1lss01_groupemails_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'LSS01_GroupEmails',
    'rhs_table' => 'lss01_groupemails',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_lss01_groupemails_1_c',
    'join_key_lhs' => 'accounts_lss01_groupemails_1accounts_ida',
    'join_key_rhs' => 'accounts_lss01_groupemails_1lss01_groupemails_idb',
    'readonly' => true,
    'relationship_name' => 'accounts_lss01_groupemails_1',
    'rhs_subpanel' => 'ForAccountsAccounts_lss01_groupemails_1',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'quotes_accounts_1' => 
  array (
    'name' => 'quotes_accounts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'quotes_accounts_1' => 
      array (
        'lhs_module' => 'Quotes',
        'lhs_table' => 'quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'quotes_accounts_1_c',
        'join_key_lhs' => 'quotes_accounts_1quotes_ida',
        'join_key_rhs' => 'quotes_accounts_1accounts_idb',
      ),
    ),
    'table' => 'quotes_accounts_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'quotes_accounts_1quotes_ida' => 
      array (
        'name' => 'quotes_accounts_1quotes_ida',
        'type' => 'id',
      ),
      'quotes_accounts_1accounts_idb' => 
      array (
        'name' => 'quotes_accounts_1accounts_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_quotes_accounts_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_quotes_accounts_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quotes_accounts_1quotes_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_quotes_accounts_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quotes_accounts_1accounts_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'quotes_accounts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quotes_accounts_1quotes_ida',
          1 => 'quotes_accounts_1accounts_idb',
        ),
      ),
    ),
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'quotes_accounts_1_c',
    'join_key_lhs' => 'quotes_accounts_1quotes_ida',
    'join_key_rhs' => 'quotes_accounts_1accounts_idb',
    'readonly' => true,
    'relationship_name' => 'quotes_accounts_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'ForAccounts',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'pt_portalteams_accounts_1' => 
  array (
    'name' => 'pt_portalteams_accounts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'pt_portalteams_accounts_1' => 
      array (
        'lhs_module' => 'PT_PortalTeams',
        'lhs_table' => 'pt_portalteams',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'pt_portalteams_accounts_1_c',
        'join_key_lhs' => 'pt_portalteams_accounts_1pt_portalteams_ida',
        'join_key_rhs' => 'pt_portalteams_accounts_1accounts_idb',
      ),
    ),
    'table' => 'pt_portalteams_accounts_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'pt_portalteams_accounts_1pt_portalteams_ida' => 
      array (
        'name' => 'pt_portalteams_accounts_1pt_portalteams_ida',
        'type' => 'id',
      ),
      'pt_portalteams_accounts_1accounts_idb' => 
      array (
        'name' => 'pt_portalteams_accounts_1accounts_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_pt_portalteams_accounts_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pt_portalteams_accounts_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'pt_portalteams_accounts_1pt_portalteams_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pt_portalteams_accounts_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'pt_portalteams_accounts_1accounts_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'pt_portalteams_accounts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'pt_portalteams_accounts_1pt_portalteams_ida',
          1 => 'pt_portalteams_accounts_1accounts_idb',
        ),
      ),
    ),
    'lhs_module' => 'PT_PortalTeams',
    'lhs_table' => 'pt_portalteams',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'pt_portalteams_accounts_1_c',
    'join_key_lhs' => 'pt_portalteams_accounts_1pt_portalteams_ida',
    'join_key_rhs' => 'pt_portalteams_accounts_1accounts_idb',
    'readonly' => true,
    'relationship_name' => 'pt_portalteams_accounts_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'accounts_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'accounts_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_activities' => 
  array (
    'name' => 'account_activities',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'account_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'member_accounts',
    'rhs_subpanel' => 'ForAccountsMembers',
    'lhs_subpanel' => 'ForAccountsMembers',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'account_cases',
    'rhs_subpanel' => 'ForAccounts',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'readonly' => true,
    'relationship_name' => 'account_tasks',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'readonly' => true,
    'relationship_name' => 'account_notes',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'readonly' => true,
    'relationship_name' => 'account_meetings',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'readonly' => true,
    'relationship_name' => 'account_calls',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'account_leads',
    'rhs_subpanel' => 'ForAccountsLeads',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'accounts_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_messages' => 
  array (
    'name' => 'account_messages',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Messages',
    'rhs_table' => 'messages',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'readonly' => true,
    'relationship_name' => 'account_messages',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_purchases' => 
  array (
    'name' => 'account_purchases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Purchases',
    'rhs_table' => 'purchases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'account_purchases',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_escalations' => 
  array (
    'name' => 'account_escalations',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Escalations',
    'rhs_table' => 'escalations',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'readonly' => true,
    'relationship_name' => 'account_escalations',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_following' => 
  array (
    'name' => 'accounts_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'accounts_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_favorite' => 
  array (
    'name' => 'accounts_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Accounts',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'accounts_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'campaign_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'products_accounts' => 
  array (
    'name' => 'products_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'products_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'account_contracts' => 
  array (
    'name' => 'account_contracts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'account_contracts',
    'rhs_subpanel' => 'ForAccounts',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'purchasedlineitems_accounts' => 
  array (
    'name' => 'purchasedlineitems_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'PurchasedLineItems',
    'rhs_table' => 'purchased_line_items',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'purchasedlineitems_accounts',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'revenuelineitems_accounts' => 
  array (
    'name' => 'revenuelineitems_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'revenuelineitems_accounts',
    'rhs_subpanel' => 'ForAccounts',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'accounts_productcategories_1' => 
  array (
    'name' => 'accounts_productcategories_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_productcategories_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'ProductCategories',
        'rhs_table' => 'product_categories',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_productcategories_1_c',
        'join_key_lhs' => 'accounts_productcategories_1accounts_ida',
        'join_key_rhs' => 'accounts_productcategories_1productcategories_idb',
      ),
    ),
    'table' => 'accounts_productcategories_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'accounts_productcategories_1accounts_ida' => 
      array (
        'name' => 'accounts_productcategories_1accounts_ida',
        'type' => 'id',
      ),
      'accounts_productcategories_1productcategories_idb' => 
      array (
        'name' => 'accounts_productcategories_1productcategories_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_accounts_productcategories_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_accounts_productcategories_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_productcategories_1accounts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_accounts_productcategories_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_productcategories_1productcategories_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'accounts_productcategories_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_productcategories_1accounts_ida',
          1 => 'accounts_productcategories_1productcategories_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_productcategories_1_c',
    'join_key_lhs' => 'accounts_productcategories_1accounts_ida',
    'join_key_rhs' => 'accounts_productcategories_1productcategories_idb',
    'readonly' => true,
    'relationship_name' => 'accounts_productcategories_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_productcategories_2' => 
  array (
    'rhs_label' => 'Product Categories',
    'lhs_label' => 'Accounts',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Accounts',
    'rhs_module' => 'ProductCategories',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'accounts_productcategories_2',
  ),
);