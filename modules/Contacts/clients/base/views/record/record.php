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

$viewdefs['Contacts']['base']['view']['record'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => array(
                'click' => 'button:cancel_button:click',
            ),
        ),
        array(
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
        ),
        array(
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => array(
                array(
                    'type' => 'rowaction',
                    'event' => 'button:edit_button:click',
                    'name' => 'edit_button',
                    'label' => 'LBL_EDIT_BUTTON_LABEL',
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'shareaction',
                    'name' => 'share',
                    'label' => 'LBL_RECORD_SHARE_BUTTON',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'pdfaction',
                    'name' => 'download-pdf',
                    'label' => 'LBL_PDF_VIEW',
                    'action' => 'download',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'pdfaction',
                    'name' => 'email-pdf',
                    'label' => 'LBL_PDF_EMAIL',
                    'action' => 'email',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'manage-subscription',
                    'name' => 'manage_subscription_button',
                    'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                    'showOn' => 'view',
                    'value' => 'edit',
                ),
                array(
                    'type'       => 'vcard',
                    'name'       => 'vcard_button',
                    'label'      => 'LBL_VCARD_DOWNLOAD',
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:find_duplicates_button:click',
                    'name' => 'find_duplicates',
                    'label' => 'LBL_DUP_MERGE',
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:duplicate_button:click',
                    'name' => 'duplicate_button',
                    'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                    'acl_module' => 'Contacts',
                    'acl_action' => 'create',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:historical_summary_button:click',
                    'name' => 'historical_summary_button',
                    'label' => 'LBL_HISTORICAL_SUMMARY',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:audit_button:click',
                    'name' => 'audit_button',
                    'label' => 'LNK_VIEW_CHANGE_LOG',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:delete_button:click',
                    'name' => 'delete_button',
                    'label' => 'LBL_DELETE_BUTTON_LABEL',
                    'acl_action' => 'delete',
                ),
            ),
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
    'panels' => array(
        array(
            'name' => 'panel_header',
            'header' => true,
            'fields' => array(
                array(
                    'name' => 'picture',
                    'type' => 'hint-contacts-photo',
                    'size' => 'large',
                    'dismiss_label' => true,
                    'white_list' => true,
                    'related_fields' => array('hint_contact_pic'),
                ),
                array(
                    'name' => 'name',
                    'label' => 'LBL_NAME',
                    'dismiss_label' => true,
                    'type' => 'fullname',
                    'fields' => array('salutation', 'first_name', 'last_name'),
                ),
                array(
                    'name' => 'favorite',
                    'label' => 'LBL_FAVORITE',
                    'type' => 'favorite',
                    'dismiss_label' => true,
                ),
                array(
                    'name' => 'follow',
                    'label'=> 'LBL_FOLLOW',
                    'type' => 'follow',
                    'readonly' => true,
                    'dismiss_label' => true,
                ),
            ),
        ),
        array(
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'fields' => array(
                'title',
                'phone_mobile',
                'department',
                'do_not_call',
                'account_name',
                'business_center_name',
                'market_score',
                array(
                    'name' => 'email',
                    'licenseDependency' => [
                        'HINT' => [
                            'type' => 'hint-email',
                        ],
                    ],
                ),
                array(
                    'name' => 'tag',
                    'span' => 12,
                ),
            ),
        ),
        array(
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'placeholders' => true,
            'fields' => array(
                array(
                    'name' => 'primary_address',
                    'type' => 'fieldset',
                    'css_class' => 'address',
                    'label' => 'LBL_PRIMARY_ADDRESS',
                    'fields' => array(
                        array(
                            'name' => 'primary_address_street',
                            'css_class' => 'address_street',
                            'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                        ),
                        array(
                            'name' => 'primary_address_city',
                            'css_class' => 'address_city',
                            'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                        ),
                        array(
                            'name' => 'primary_address_state',
                            'css_class' => 'address_state',
                            'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                        ),
                        array(
                            'name' => 'primary_address_postalcode',
                            'css_class' => 'address_zip',
                            'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                        ),
                        array(
                            'name' => 'primary_address_country',
                            'css_class' => 'address_country',
                            'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                        ),
                    ),
                ),
                array(
                    'name' => 'alt_address',
                    'type' => 'fieldset',
                    'css_class' => 'address',
                    'label' => 'LBL_ALT_ADDRESS',
                    'fields' => array(
                        array(
                            'name' => 'alt_address_street',
                            'css_class' => 'address_street',
                            'placeholder' => 'LBL_ALT_ADDRESS_STREET',
                        ),
                        array(
                            'name' => 'alt_address_city',
                            'css_class' => 'address_city',
                            'placeholder' => 'LBL_ALT_ADDRESS_CITY',
                        ),
                        array(
                            'name' => 'alt_address_state',
                            'css_class' => 'address_state',
                            'placeholder' => 'LBL_ALT_ADDRESS_STATE',
                        ),
                        array(
                            'name' => 'alt_address_postalcode',
                            'css_class' => 'address_zip',
                            'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
                        ),
                        array(
                            'name' => 'alt_address_country',
                            'css_class' => 'address_country',
                            'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
                        ),
                        array(
                            'name' => 'copy',
                            'label' => 'NTC_COPY_PRIMARY_ADDRESS',
                            'type' => 'copy',
                            'mapping' => array(
                                'primary_address_street' => 'alt_address_street',
                                'primary_address_city' => 'alt_address_city',
                                'primary_address_state' => 'alt_address_state',
                                'primary_address_postalcode' => 'alt_address_postalcode',
                                'primary_address_country' => 'alt_address_country',
                            ),
                        ),
                    ),
                ),
                [
                    'name' => 'geocode_status',
                    'licenseFilter' => ['MAPS'],
                ],
                'phone_fax',
                'phone_work',
                'twitter',
	            array(
                    'name' => 'dnb_principal_id',
                    'readonly' => true,
                ),
                array(
                    'name' => 'description',
                    'span' => 12,
                ),
                'report_to_name',
                'sync_contact',
                'lead_source',
                'assigned_user_name',
                array(
                    'name' => 'campaign_name',
                    'span' => 12,
                ),
                array(
                    'name' => 'preferred_language',
                    'type' => 'language',
                ),
                'portal_user_company_name',
                'portal_name',
                'portal_active',
                array(
                    'name' => 'portal_password',
                    'type' => 'change-password'
                ),
                array(
                    'name' => 'date_modified_by',
                    'readonly' => true,
                    'inline' => true,
                    'type' => 'fieldset',
                    'label' => 'LBL_DATE_MODIFIED',
                    'fields' => array(
                        array(
                            'name' => 'date_modified',
                        ),
                        array(
                            'type' => 'label',
                            'default_value' => 'LBL_BY',
                        ),
                        array(
                            'name' => 'modified_by_name',
                        ),
                    ),
                ),
                'team_name',
                array(
                    'name' => 'date_entered_by',
                    'readonly' => true,
                    'inline' => true,
                    'type' => 'fieldset',
                    'label' => 'LBL_DATE_ENTERED',
                    'fields' => array(
                        array(
                            'name' => 'date_entered',
                        ),
                        array(
                            'type' => 'label',
                            'default_value' => 'LBL_BY',
                        ),
                        array(
                            'name' => 'created_by_name',
                        ),
                    ),
                ),
            ),
        ),
        [
            'name' => 'panel_hint',
            'label' => 'LBL_HINT_PANEL',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => [
                [
                    'name' => 'hint_account_website',
                    'label' => 'LBL_HINT_COMPANY_WEBSITE',
                    'type' => 'stage2_url',
                    'white_list' => true,
                    'fields' => ['hint_photo', 'hint_account_logo'],
                ],
                'hint_education',
                [
                    'name' => 'hint_education_2',
                    'parent_key' => 'hint_education',
                ],
                'hint_job_2',
                'hint_account_size',
                'hint_account_industry',
                'hint_account_location',
                [
                    'name' => 'hint_account_description',
                    'account_key' => 'description',
                ],
                'hint_account_founded_year',
                [
                    'name' => 'hint_industry_tags',
                    'account_key' => 'hint_account_industry_tags',
                ],
                'hint_account_naics_code_lbl',
                [
                    'name' => 'hint_account_sic_code_label',
                    'account_key' => 'sic_code',
                ],
                'hint_account_fiscal_year_end',
                [
                    'name' => 'hint_account_annual_revenue',
                    'account_key' => 'annual_revenue',
                ],
                [
                    'name' => 'hint_facebook',
                    'type' => 'stage2_url',
                ],
                [
                    'name' => 'hint_twitter',
                    'type' => 'stage2_url',
                ],
                [
                    'name' => 'hint_account_facebook_handle',
                    'type' => 'stage2_url',
                ],
                [
                    'name' => 'hint_account_twitter_handle',
                    'type' => 'stage2_url',
                    'account_key' => 'twitter',
                ],
                [
                    'name' => 'phone_other',
                    'type' => 'phone',
                ],
            ],
            'licenseFilter' => ['HINT'],
        ],
    ),
);
