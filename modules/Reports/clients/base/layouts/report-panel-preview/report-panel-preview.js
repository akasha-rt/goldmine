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
 * @class View.Views.Base.Reports.ReportPanelPreviewLayout
 * @alias SUGAR.App.view.views.BaseReportsReportPanelPreviewLayout
 * @extends View.Views.Base.Reports.ReportPanelLayout
 */
({
    extendsFrom: 'ReportsReportPanelLayout',
    className: 'grid-stack dashboard-grid relative mx-2',

    /**
     * Init properties
     */
    _initProperties: function() {
        const previewData = this.layout ? this.layout.options.def.previewData : {};

        this._filtersData = previewData.filtersData;
        this._chartData = previewData.chartData;
        this._tableData = previewData.tableData;
        this._reportId = previewData.reportId;
        this._reportType = previewData.reportType;

        this.context.set({
            previewData: previewData,
            previewMode: true,
        });

        const contextModel = this.context.get('model');

        contextModel.set({
            report_type: this._reportType,
            chart_type: this._filtersData.chart_type,
            id: this._reportId,
        });

        this._super('_initProperties');

        this._defaultGridOptions = {
            handleClass: 'not-handle',
            animate: 'true',
            maxRow: 0,
            minRow: 1,
            verticalMargin: 15,
            cellHeight: 35,
            gridstackRatioConstant: 60,
            disableOneColumnMode: true,
            draggable: {
                handle: 'not-draggable',
                scroll: false,
                appendTo: 'body',
                containment: null,
                cancel: 'input,textarea,button,select,option,[role="button"]',
            },
            resizable: {
                handles: 'not-resizable',
            }
        };

        const reportPanelMeta = app.metadata.getLayout('Reports', 'report-panel');
        this.defaultLayouts = reportPanelMeta ? reportPanelMeta.defaultLayouts : {};
    },

    /**
     * Set this._panels when component is initialized.
     */
    _initPanels: function() {
        if (this._reportId) {
            this.model.set('id', this._reportId);
        } else {
            this.model.set('id', this._reportType);
        }

        this.model.dataFetched = true;

        this._super('_initPanels');
    },

    /**
     * Go through each of the panels and create them
     */
    _tryBuildPanels: function() {
        this._super('_tryBuildPanels');

        this._refreshReorderableColumns();
    },

    /**
     * Refreshes the `ReorderableColumns` when the table width/height changes.
     *
     * The `ReorderableColumns` plugin listens to the window `resize` event to
     * update and position the handlers correctly.
     *
     * @private
     */
    _refreshReorderableColumns: function() {
        $(window).resize();
    },
})
