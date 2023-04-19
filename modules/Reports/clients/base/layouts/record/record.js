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
 * @class View.Layouts.Base.Reports.RecordLayout
 * @alias SUGAR.App.view.layouts.BaseReportsRecordLayout
 * @extends View.Views.Base.Layout
 */
({
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this._initSavedReportsMeta();
    },

    /**
     * Initialize Saved Reports Meta
     */
    _initSavedReportsMeta: function() {
        if (!this.model.get('id')) {
            return;
        }

        const reportId = this.model.get('id');
        const params = {
            track: true,
            trackAction: 'detailview',
        };
        const url = app.api.buildURL('Reports/activeSavedReport', reportId, {}, params);

        app.api.call('read', url, null, {
            success: _.bind(this._storeSavedReportsMeta, this),
        });
    },

    /**
     * Store Saved Reports
     *
     * @param {Array} savedReports
     */
    _storeSavedReportsMeta: function(savedReports) {
        if (this.disposed) {
            return;
        }

        this.context.set('savedReportsMeta', savedReports);
        this.context.trigger('report:savedReportsMeta:sync:complete');
    },
})
