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
 * @class View.Views.Base.Reports.ReportPanelToolbarView
 * @alias SUGAR.App.view.views.BaseReportsReportPanelToolbarView
 * @extends View.View
 */
 ({
    className: 'dashlet-header flex flex-row items-center m-0.75',
    events: {
        'click [data-panelaction="toggleCollapse"]': 'toggleCollapse',
        'click [data-panelaction="minimize"]': 'minimize',
        'click .report-panel-title': 'expand',
        'click .toggleGrooups': 'toggleGroups',
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this._isDetail = !this.context.get('previewMode');
        this._initProperties();
        this._registerEvents();
    },

    /**
     * Initialize helper data
     */
    _initProperties: function() {
        this.collectionCount = null;

        if (_.isFunction(this.layout.getTitle)) {
            this.meta.label = this.layout.getTitle();
        }
    },

    /**
     * Register events
     */
    _registerEvents: function() {
        this.listenTo(this.context, 'report:data:table:loaded', this.buildCollectionCount, this);

        if (_.has(this, 'layout') && _.has(this.layout, 'layout')) {
            const parentLayout = this.layout.layout;

            this.listenTo(parentLayout, 'panel:collapse', this.panelCollapsed, this);
            this.listenTo(parentLayout, 'panel:minimize', this.panelMinimized, this);
            this.listenTo(parentLayout, 'toggle:minimize:button', this.toggleMinimizeButton, this);
        }
    },

    /**
     * Change Icon
     *
     * @param {boolean} collapsed
     */
    panelCollapsed: function(collapsed) {
        const $el = this.$('.panel-toggle > i');

        $el.toggleClass('sicon-chevron-down', collapsed);
        $el.toggleClass('sicon-chevron-up', !collapsed);
    },

    /**
     * Change Icons and titles
     *
     * @param {boolean} minimized
     */
    panelMinimized: function(minimized) {
        const $el = this.$('.panel-minimize > i');
        $el.toggleClass('sicon-minus', !minimized);

        let titleLabel;
        if (minimized) {
            this.$('.panel-minimize').hide();
            titleLabel = app.lang.get('LBL_REPORT_EXPAND', 'Reports');

            this.$('.panel-minimize').attr({
                'rel': '',
                'aria-label': '',
                'data-original-title': ''
            });
            this.$el.attr({
                'rel': 'tooltip',
                'aria-label': titleLabel,
                'data-original-title': titleLabel
            });

            this.$('.reports-collection-count').hide();
            this.$('.btn-toolbar').hide();
            this.$('.toggleGrooups').hide();
        } else {
            this.$('.panel-minimize').show();
            titleLabel = app.lang.get('LBL_REPORT_MINIMIZE', 'Reports');

            this.$('.panel-minimize').attr({
                'rel': 'tooltip',
                'aria-label': titleLabel,
                'data-original-title': titleLabel
            });
            this.$el.attr({
                'rel': '',
                'aria-label': '',
                'data-original-title': ''
            });

            this.$('.reports-collection-count').show();
            this.$('.btn-toolbar').show();
            this.$('.toggleGrooups').show();
        }

        let minimizedPanels = _.filter(this.layout.layout.layout._panels, function(panel) {
            return panel.isMinimized();
        });
        if (minimized || minimizedPanels.length > 1) {
            this.$('[data-panelaction="toggleCollapse"]').hide();
        } else {
            this.$('[data-panelaction="toggleCollapse"]').show();
        }
    },

    /**
     * Collapse
     */
    toggleCollapse: function() {
        const $el = this.$('.panel-toggle > i');
        const collapsed = $el.is('.sicon-chevron-up');

        if (_.has(this, 'layout') && _.has(this.layout, 'layout')) {
            this.layout.layout.collapse(collapsed);
        }
    },

    /**
     * Minimize
     */
    minimize: function() {
        const $el = this.$('.panel-minimize > i');
        const minimized = this.closestComponent('report-panel-wrapper').isMinimized();

        if (minimized) {
            return;
        }
        if (_.has(this, 'layout') && _.has(this.layout, 'layout')) {
            this.layout.layout.minimize(true);
        }
    },

    /**
     * Expand
     */
    expand:  function() {
        const minimized = this.closestComponent('report-panel-wrapper').isMinimized();
        if (!minimized) {
            return;
        }
        if (_.has(this, 'layout') && _.has(this.layout, 'layout')) {
            this.layout.layout.minimize(false);
        }
    },

    /**
     * Used in summary tables to collapse/expand groups
     *
     * @param {Event} evt
     */
    toggleGroups: function(evt) {
        const shouldCollapse = _.contains(evt.target.classList, 'groups-collapse');
        const collapseLabel = app.lang.get('LBL_COLLAPSE_ALL', 'Reports');
        const expandLabel = app.lang.get('LBL_EXPAND_ALL', 'Reports');

        if (shouldCollapse) {
            this.$(evt.target).removeClass('groups-collapse');
            this.$(evt.currentTarget).text(expandLabel);
            this._showTables(false);
        } else {
            this.$(evt.target).addClass('groups-collapse');
            this.$(evt.currentTarget).text(collapseLabel);
            this._showTables(true);
        }
    },

    /**
     * Show/Hide the tables in a summation with details report
     *
     * @param {bool} shouldShow
     */
    _showTables: function(shouldShow) {
        let tables = this.layout.getComponent('report-table').$el.find('table');

        for (const table of tables) {
            if (shouldShow) {
                $(table).find('.subgroup').show();
                $(table).find('tbody').show();
                $(table).find('.sicon-arrow-left-double').switchClass('down', 'up');
            } else {
                $(table).find('.subgroup').hide();
                $(table).find('tbody').hide();
                $(table).find('.sicon-arrow-left-double').switchClass('up', 'down');
            }
        }
    },

    /**
     * Build collection count field
     *
     * @param {Object} collection
     */
     buildCollectionCount: function(collection) {
        if (this.disposed || _.isUndefined(collection)) {
            return;
        }

        this._disposeCollectionCount();

        this.collectionCount = app.view.createField({
            def: {
                type: 'collection-count',
                name: 'CollectionCount',
            },
            view: this,
            viewName: 'detail',
            model: this.model,
            collection
        });

        this.collectionCount.cachedCount = collection.total;
        this.collectionCount.updateCount();

        this.$('[data-container="collection-count-widget-container"]').append(this.collectionCount.$el);
        const isMinimized = this.closestComponent('report-panel-wrapper').isMinimized();
        if (isMinimized) {
            this.$('.reports-collection-count').hide();
        }
    },

    /**
     * Dispose subcomponent
     */
    _disposeCollectionCount: function() {
        if (this.collectionCount) {
            this.collectionCount.dispose();
            this.collectionCount = null;
        }
    },

    /*
     * Toggle minimize button
     *
     * @param {boolean} show
     */
    toggleMinimizeButton: function(show) {
        let minimizeIcon = this.$('[data-panelaction="minimize"]');

        if (show) {
            if (minimizeIcon.is(':hidden')) {
                minimizeIcon.show();
            }
        } else {
            minimizeIcon.hide();
        }
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        this._disposeCollectionCount();

        this._super('_dispose');
    },
})
