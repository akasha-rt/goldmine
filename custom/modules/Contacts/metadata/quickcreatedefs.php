<?php
// created: 2022-12-12 04:08:57
$viewdefs['Contacts']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
        1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
        2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
        3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
        4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
        5 => '{if !empty($smarty.request.contact_id)}<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">{/if}',
        6 => '{if !empty($smarty.request.contact_name)}<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">{/if}',
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_contact_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
        ),
        1 => 
        array (
          'name' => 'picture',
          'comment' => 'Picture file',
          'label' => 'LBL_PICTURE_FILE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'phone_work',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'title',
        ),
        1 => 
        array (
          'name' => 'phone_mobile',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'department',
          'comment' => 'The department of the contact',
          'label' => 'LBL_DEPARTMENT',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'account_name',
        ),
        1 => 
        array (
          'name' => 'contact_type_c',
          'studio' => 'visible',
          'label' => 'LBL_CONTACT_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'decision_maker_c',
          'label' => 'LBL_DECISION_MAKER',
        ),
        1 => 
        array (
          'name' => 'report_to_name',
          'label' => 'LBL_REPORTS_TO',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'primary_address_street',
          'comment' => 'Street address for primary address',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        1 => 
        array (
          'name' => 'alt_address_street',
          'comment' => 'Street address for alternate address',
          'label' => 'LBL_ALT_ADDRESS_STREET',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'birthdate',
          'comment' => 'The birthdate of the contact',
          'label' => 'LBL_BIRTHDATE',
        ),
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
        ),
        1 => 
        array (
          'name' => 'sync_contact',
          'comment' => 'Synch to outlook?  (Meta-Data only)',
          'studio' => 'true',
          'label' => 'LBL_SYNC_CONTACT',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
    'LBL_PANEL_ADVANCED' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'lead_source',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'campaign_name',
          'comment' => 'The first campaign name for Contact (Meta-data only)',
          'label' => 'LBL_CAMPAIGN',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'do_not_call',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'email1',
        ),
        1 => 
        array (
          'name' => 'email',
        ),
      ),
    ),
  ),
);