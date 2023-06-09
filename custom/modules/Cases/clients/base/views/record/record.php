<?php
$viewdefs['Cases'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'primary' => true,
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'escalate-action',
                'event' => 'button:escalate_button:click',
                'name' => 'escalate_button',
                'label' => 'LBL_ESCALATE_BUTTON_LABEL',
                'acl_action' => 'create',
              ),
              2 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              5 => 
              array (
                'type' => 'divider',
              ),
              6 => 
              array (
                'name' => 'create_button',
                'type' => 'rowaction',
                'event' => 'button:create_article_button:click',
                'label' => 'LBL_CREATE_KB_DOCUMENT',
                'acl_module' => 'KBContents',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'divider',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Cases',
                'acl_action' => 'create',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              12 => 
              array (
                'type' => 'divider',
              ),
              13 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              4 => 
              array (
                'name' => 'is_escalated',
                'type' => 'badge',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'case_number',
                'readonly' => true,
              ),
              1 => 'priority',
              2 => 'type',
              3 => 
              array (
                'name' => 'team_name',
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'span' => 12,
              ),
              5 => 'status',
              6 => 'source',
              7 => 
              array (
                'name' => 'primary_contact_name',
              ),
              8 => 
              array (
                'name' => 'account_name',
              ),
              9 => 
              array (
                'name' => 'catalog_number_rel',
                'studio' => 'visible',
                'label' => 'LBL_CATALOG_NUMBER_REL',
              ),
              10 => 
              array (
                'readonly' => false,
                'name' => 'productgroup_c',
                'label' => 'LBL_PRODUCTGROUP',
              ),
              11 => 
              array (
                'readonly' => false,
                'name' => 'reason_for_contact_c',
                'label' => 'LBL_REASON_FOR_CONTACT',
                'span' => 12,
              ),
              12 => 
              array (
                'readonly' => false,
                'name' => 'casetogglereminder_c',
                'label' => 'LBL_CASETOGGLEREMINDER',
              ),
              13 => 
              array (
                'name' => 'follow_up_datetime',
              ),
              14 => 
              array (
                'name' => 'description',
                'nl2br' => true,
                'span' => 12,
              ),
              15 => 
              array (
                'name' => 'resolved_datetime',
              ),
              16 => 
              array (
              ),
              17 => 
              array (
                'name' => 'resolution',
                'nl2br' => true,
                'span' => 12,
              ),
              18 => 
              array (
                'name' => 'commentlog',
                'label' => 'LBL_COMMENTLOG',
                'span' => 12,
              ),
              19 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
              20 => 
              array (
                'name' => 'attachment_list',
                'label' => 'LBL_ATTACHMENTS',
                'type' => 'multi-attachments',
                'link' => 'attachments',
                'module' => 'Notes',
                'modulefield' => 'filename',
                'bLabel' => 'LBL_ADD_ATTACHMENT',
                'max_num' => -1,
                'related_fields' => 
                array (
                  0 => 'filename',
                  1 => 'file_mime_type',
                ),
                'fields' => 
                array (
                  0 => 'name',
                  1 => 'filename',
                  2 => 'file_size',
                  3 => 'file_source',
                  4 => 'file_mime_type',
                  5 => 'file_ext',
                  6 => 'upload_id',
                ),
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'contact_title_c',
                'label' => 'LBL_CONTACT_TITLE',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'phone_number_c',
                'label' => 'LBL_PHONE_NUMBER',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'contact_email_address_c',
                'label' => 'LBL_CONTACT_EMAIL_ADDRESS',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'contact_company_c',
                'label' => 'LBL_CONTACT_COMPANY_C',
                'span' => 12,
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'contact_address_street_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACT_ADDRESS_STREET',
                'span' => 12,
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'contact_address_city_c',
                'label' => 'LBL_CONTACT_ADDRESS_CITY',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'contact_address_state_c',
                'label' => 'LBL_CONTACT_ADDRESS_STATE',
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'contact_address_postalcode_c',
                'label' => 'LBL_CONTACT_ADDRESS_POSTALCODE',
                'span' => 12,
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'contact_address_country_c',
                'label' => 'LBL_CONTACT_ADDRESS_COUNTRY',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'business_hrs_to_first_response',
                'readonly' => true,
                'label' => 'LBL_BUSINESS_HOURS_TO_FIRST_RESPONSE',
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'request_close',
                'readonly' => true,
                'label' => 'LBL_REQUEST_CLOSE',
              ),
              3 => 
              array (
                'name' => 'request_close_date',
                'readonly' => true,
                'label' => 'LBL_REQUEST_CLOSE_DATE',
              ),
              4 => 'portal_viewable',
              5 => 'business_center_name',
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
