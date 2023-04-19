
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
 * @class View.Views.Base.Reports.ReportFiltersLayout
 * @alias SUGAR.App.view.views.BaseReportsReportFiltersLayout
 * @extends View.Views.Base.Layout
 */
 ({
    className: 'h-full',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this._registerEvents();
    },

    /**
     * Register events
     */
    _registerEvents: function() {
        this.listenTo(this.context, 'toggle:advanced:filters', this.toggleAdvancedFilters, this);
    },

    /**
     * Show Advanced Filters View
     */
    toggleAdvancedFilters: function() {
        this.context.disableRecordSwitching = true;
        this.context.hideRecordSwitching = true;

        this.context.set({
            runtimeFilters: this.getComponent('report-filters').getRuntimeFilters(),
            reportData: this.getComponent('report-filters').getReportData(),

        });

        app.sideDrawer.open({
            layout: 'report-advanced-filters',
            context: this.context,
        });

        this.updateCloseButtonLabel();
    },

    /**
     * Update close button label
     */
    updateCloseButtonLabel: function() {
        const closeTitle = app.lang.get('LBL_ADVANCED_CLOSE', 'Reports');
        app.sideDrawer.$('button[data-action="drawerClose"]').attr({
            'data-original-title': closeTitle,
            'title': closeTitle
        });
    }
})
