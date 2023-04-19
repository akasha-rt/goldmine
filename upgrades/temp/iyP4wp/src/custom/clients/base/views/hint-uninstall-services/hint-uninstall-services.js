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
({

    plugins: ['Stage2CssLoader'],

    css: ['hint-admin-uninstaller'],

    initialize: function(view) {
        this._super('initialize', arguments);

        this.services = [
            {
                title: app.lang.get('LBL_HINT_UNINSTALL_PARTIAL'),
                name: 'uninstall_hint_package_only',
                description: app.lang.get('LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'),
                showWarning: false
            },
            {
                title: app.lang.get('LBL_HINT_UNINSTALL_FULL'),
                name: 'uninstall_hint_completely',
                description: app.lang.get('LBL_HINT_UNINSTALL_FULL_DESCRIPTION'),
                showWarning: true,
                administrationGuideLink: 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint'
            },
        ];
    },

    events: {
        'click #uninstall_hint_package_only': 'fieldToggleHintPartialUninstall',
        'click #uninstall_hint_completely': 'fieldToggleHintFullUninstall',
        'click .uninstallHint': 'uninstall',
        'click .cancel': 'closeDrawer',
    },

    uninstall: function() {
        var self = this;
        var url = app.api.buildURL('hint/uninstall');
        var attributes = {};
        attributes['removeTables'] = $("input[name='uninstall_hint_completely']:checked").val() === 'true';
        var message = this.getWarningMessage();
        app.alert.show('message-id', {
            level: 'confirmation',
            messages: message,
            autoClose: false,
            onConfirm: function () {
                app.alert.show('message-id', {
                    level: 'process',
                    title: app.lang.get('LBL_HINT_UNINSTALL_PROCESSING')
                });
                app.api.call('create', url, attributes, {
                    success: function(data) {
                        self._refreshMetaDataAfterUninstall();
                    },
                    error: function (err) {
                        // This part of code will be updated when BR-8106 and its predecessors are merged.
                        // Sugar version less than 11 it throws error.
                        self._refreshMetaDataAfterUninstall();
                        app.logger.error('Failed to reach hint/uninstall' + JSON.stringify(err));
                    }
                });
            },
            onCancel: function () {}
        });
    },

    _refreshMetaDataAfterUninstall: function() {
        app.router.navigate('Administration', { trigger: true });
        app.sync();
        app.utils.hardRefresh();
    },

    getWarningMessage: function() {
        var isHintUninstallFullRadioBtnChecked =  $("input[name='uninstall_hint_completely']:checked").val() === 'true';
        if (isHintUninstallFullRadioBtnChecked) {
            return app.lang.get('LBL_HINT_UNINSTALL_WARNING_MESSAGE2') + '<br/>' +
                app.lang.get('LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT');
        }
        return app.lang.get('LBL_HINT_UNINSTALL_WARNING_MESSAGE1');
    },

    fieldToggleHintFullUninstall: function(event) {
        var isRadioButtonChecked =  $("input[name='uninstall_hint_completely']:checked").val() === 'true';
        if (isRadioButtonChecked) {
            $("input[name='uninstall_hint_package_only']").prop("checked",false);
        }
    },

    fieldToggleHintPartialUninstall: function(event) {
        var isRadioButtonChecked =  $("input[name='uninstall_hint_package_only']:checked").val() === 'true';
        if (isRadioButtonChecked) {
            $("input[name='uninstall_hint_completely']").prop("checked",false);
        }
    },

    closeDrawer: function() {
        app.drawer.close();
        app.router.navigate(this.module, { trigger: true });
    },

    _render: function() {
        this._super('_render');
        $("input[name='uninstall_hint_package_only']").prop("checked", true);
    }
});
