<?php
// created: 2014-11-28 02:40:36
$viewdefs = array (
  'Leads' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 
            array (
              'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
              'sugar_html' => 
              array (
                'type' => 'button',
                'value' => '{$MOD.LBL_CONVERTLEAD}',
                'htmlOptions' => 
                array (
                  'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                  'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                  'class' => 'button',
                  'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                  'name' => 'convert',
                  'id' => 'convert_lead_button',
                ),
                'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
              ),
            ),
            4 => 'FIND_DUPLICATES',
            5 => 
            array (
              'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
              'sugar_html' => 
              array (
                'type' => 'submit',
                'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'htmlOptions' => 
                array (
                  'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                  'class' => 'button',
                  'id' => 'manage_subscriptions_button',
                  'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                  'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                ),
              ),
            ),
          ),
          'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
        ),
        'maxColumns' => '2',
        'useTabs' => false,
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
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Leads/Lead.js',
          ),
        ),
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
        'syncDetailEditViews' => true,
      ),
      'panels' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'comment' => 'First name of the contact',
              'label' => 'LBL_FIRST_NAME',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'last_name',
              'comment' => 'Last name of the contact',
              'label' => 'LBL_LAST_NAME',
            ),
            1 => 'phone_work',
          ),
          2 => 
          array (
            0 => 'title',
            1 => 'phone_mobile',
          ),
          3 => 
          array (
            0 => 'department',
            1 => 'phone_fax',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'account_name',
              'displayParams' => 
              array (
                'enableConnectors' => true,
                'module' => 'Leads',
                'connectors' => 
                array (
                  0 => 'ext_rest_twitter',
                ),
              ),
            ),
            1 => 'website',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
              ),
            ),
            1 => 
            array (
              'name' => 'alt_address_street',
              'label' => 'LBL_ALTERNATE_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'alt',
              ),
            ),
          ),
          6 => 
          array (
            0 => 'email1',
          ),
          7 => 
          array (
            0 => 'description',
          ),
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'lead_quality_c',
              'studio' => 'visible',
              'label' => 'LBL_LEAD_QUALITY',
            ),
            1 => 
            array (
              'name' => 'strat_prod_line_c',
              'studio' => 'visible',
              'label' => 'LBL_STRAT_PROD_LINE',
            ),
          ),
          1 => 
          array (
            0 => '',
            1 => 
            array (
              'name' => 'prod_group_c',
              'studio' => 'visible',
              'label' => 'LBL_PROD_GROUP',
            ),
          ),
          2 => 
          array (
            0 => 'status',
            1 => 'lead_source',
          ),
          3 => 
          array (
            0 => 'status_description',
            1 => 'lead_source_description',
          ),
          4 => 
          array (
            0 => 'opportunity_amount',
            1 => 'refered_by',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'campaign_name',
              'label' => 'LBL_CAMPAIGN',
            ),
            1 => 'do_not_call',
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 'team_name',
          ),
        ),
      ),
    ),
  ),
);