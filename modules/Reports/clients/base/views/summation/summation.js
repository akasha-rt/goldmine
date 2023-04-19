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
 * @class View.Views.Reports.SummationView
 * @alias SUGAR.App.view.views.ReportsSummationView
 * @extends View.Views.Base.ReportsRowsColumnsView
 */
 ({
    extendsFrom: 'ReportsRowsColumnsView',

    pagination: false,

    /**
     * @inheritdoc
     */
    _initProperties: function() {
        this._super('_initProperties');

        this.orderByKeys.push('summaryOrderBy');
    },

    /**
    * @inheritdoc
    */
    _loadTemplate: function() {
        this.tplName = 'rows-columns';
        this.template = app.template.getView(this.tplName);
    },
})
