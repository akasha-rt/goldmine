/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Layouts.Base.ForecastsConfigDrawerLayout
 * @alias SUGAR.App.view.layouts.BaseForecastsConfigDrawerLayout
 * @extends View.Layouts.Base.ConfigDrawerLayout
 */
({
    extendsFrom: 'ConfigDrawerLayout',
    
    initialize: function(options) {
        this._super('initialize', [options]);
        this.model.clear({silent: true});
    },
    
    _checkConfigMetadata: function(){
        return true;
    },
    
    /**
     * @inheritdoc
     *
     * Checks Forecasts ACLs to see if the User is a system admin
     * or if the user has a developer role for the Forecasts module
     *
     * @override
     */
    _checkModuleAccess: function() {
        var acls = app.user.getAcls().ops_Backups,
            isSysAdmin = (app.user.get('type') == 'admin'),
            isDev = (!_.has(acls, 'developer'));
        
        return (isSysAdmin || isDev);
    },
    
    loadConfig: function(options) {
        var self = this;
        app.alert.show('config_loading', {
            level: 'process',
            title: app.lang.get('LBL_LOADING'),
            autoClose: false
        });
        app.api.call('read',app.api.buildURL('ops_Backups/config'),null,{
            success: function(resp){
                self.model.set(resp);
                self.render();
                app.alert.dismiss('config_loading');
            },
            error: function(resp){
                app.alert.dismiss('config_loading');
                app.alert.show('loading_error',{
                    level: 'error',
                    messages: "Error fetching SugarCloud settings.",
                    autoClose: false
                });
            }
        });
    },
    
})