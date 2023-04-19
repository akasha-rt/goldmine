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
 * @class View.Layouts.Base.Reports.ReportPanelLayout
 * @alias SUGAR.App.view.layouts.BaseReportsReportPanelLayout
 * @extends View.Views.Base.Layout
 */
({
    className: 'dashboard-grid relative mx-2 grid-stack mt-15 h-full',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._beforeInit(options);

        this._super('initialize', [options]);

        this._initProperties();
        this._initContextFields();
        this._initPanels();
        this._initGridStack();
        this._registerEvents();
    },

    /**
     * Before init properties
     */
    _beforeInit: function(options) {
        this._minimizedPanels = 0;

        this._panels = [];
        this._panelsDef = [];
        this._panelsBuilt = false;

        this._gridWidgets = [];
        this._enlargedGridWidgets = [];

        this._defaultElementOptions = {
            autoPosition: false,
            x: 0,
            y: 0,
            width: 12,
            minWidth: 2,
            minHeight: 5,
            height: 6,
        };
    },

    /**
     * Init Properties
     */
    _initProperties: function() {
        this._endpoint = 'panel';

        this._defaultGridOptions = {
            handleClass: 'dashlet-header',
            animate: 'true',
            maxRow: 0,
            minRow: 1,
            verticalMargin: 15,
            cellHeight: 35,
            gridstackRatioConstant: 60,
            disableOneColumnMode: true,
            draggable: {
                handle: '.dashlet-header',
                scroll: false,
                appendTo: 'body',
                containment: null,
                cancel: 'input,textarea,button,select,option,[role="button"]',
            },
            resizable: {
                handles: 'sw,se',
            }
        };

        this.defaultLayouts = this.meta ? this.meta.defaultLayouts : {};
    },

    /**
     * Initialize model persistent options
     */
    _initContextFields: function() {
        let fields = this.context.get('fields');

        const requiredFields = [
            'chart_type',
            'content',
            'report_type',
            'teams',
            'team_name',
            'assigned_user_name'
        ];

        fields = _.union(fields, requiredFields);

        this.context.set('fields', fields);
    },

    /**
     * Set this._panels when component is initialized.
     */
    _initPanels: function() {
        let url = app.api.buildURL('Reports/' + this._endpoint, this.model.get('id'));

        app.api.call('read', url, {}, {
            success:  _.bind(function(data) {
                if (this.disposed) {
                    return;
                }

                if (_.isEmpty(data)) {
                    const reportType = this.context.get('previewMode') ?
                                        this.context.get('previewData').reportType :
                                        this.model.get('report_type');

                    data = reportType ? app.utils.deepCopy(this.defaultLayouts[reportType].contents) : {};
                } else {
                    data = JSON.parse(data);
                }

                this._setupPanels(data);
            }, this),
            error: function(error) {
                app.alert.show('error_while_retrieve', {
                    level: 'error',
                    messages: ['ERR_HTTP_500_TEXT_LINE2']
                });
                app.logger.error(error);
            }
        });
    },

    /**
     * Initialize Grid Stack Library
     */
    _initGridStack: function() {
        try {
            this._grid = GridStack.init(this._defaultGridOptions, this.el);
        } catch (e) {
            console.warn('failed to load gridstack');
        }
    },

    /**
     * Create the main panel wrapper
     *
     * @param {Object|boolean} panelDef
     * @param {number} orderNumber
     */
    _tryInitializePanel: function(panelDef, orderNumber) {
        const panelWrapper = app.view.createLayout({
            name: 'report-panel-wrapper',
            layout: this,
            context: this.context,
            orderNumber,
        });

        const isValid = panelWrapper.tryAddWidget(panelDef);

        if (!isValid) {
            return false;
        }

        this._components.push(panelWrapper);
        this._panels.push(panelWrapper);

        this.listenTo(panelWrapper, 'panel:minimize', this._managePanelMinimized, this);
        this.listenTo(panelWrapper, 'panel:collapse', this._managePanelCollapsed, this);

        return panelWrapper;
    },

    /**
     * Register panel related events
     */
    _registerEvents: function() {
        this.listenTo(this.model, 'sync', this._initPanels, this);
        this.listenTo(this.context, 'panel:wrapper:finished:loading', this.addPanelToGrid, this);
    },

    /**
     * Setup panels data
     *
     * @param {Object} data
     */
    _setupPanels: function(data) {
        this._panelsDef = data.panels;
        this._usingDefaultLayout = data.defaultLayout;

        this._adjustContainersDefaultHeight();

        this.model.set('metadata', data);

        this._tryBuildPanels();
    },

    /**
     * Expand containers on Y depending on screen size
     */
    _adjustContainersDefaultHeight: function() {
        if (this._usingDefaultLayout) {
            // we need to normalize the screen space so that gridstack ocupies the full height
            const gridstackRatioConstant = this._defaultGridOptions.gridstackRatioConstant;
            const gridHeight = window.innerHeight / gridstackRatioConstant;

            const screenHeight = 12; // spans
            const halfScreen = 6; // spans
            let floor = true;

            const chartType = this.model.get('chart_type');
            const hasChart = chartType && chartType !== 'none';

            _.each(this._panelsDef, function adjustHeight(panelDef) {
                let pid = panelDef.id;
                let pHeight = (pid === 'filters' || (pid === 'table' && !hasChart)) ? screenHeight : halfScreen;

                const panelYRatio = pHeight / screenHeight;

                panelDef.height = (panelYRatio) * Math.floor(gridHeight);

                if (panelYRatio < 1) {
                    panelDef.height = floor ? Math.floor(panelDef.height) : Math.ceil(panelDef.height);
                    floor = false;
                }
            }, this);
        }
    },

    /**
     * Saves current model metadata
     *
     * @param {boolean} keepDefaultLayout
     */
    handleSave: function(keepDefaultLayout) {
        if (!app.acl.hasAccessToModel('edit', this.model)) {
            this.model.unset('updated');
            return;
        }

        let url = app.api.buildURL('Reports/panel', this.model.get('id'));
        let data = this.model.get('metadata');

        if (_.isUndefined(data)) {
            return;
        }

        data.defaultLayout = keepDefaultLayout || false;

        app.api.call('update', url, data, {
            success:  _.bind(function(data) {
                if (!this.disposed) {
                    this.model.unset('updated');
                }
            }, this),
            error: function(error) {
                app.alert.show('error_while_save', {
                    level: 'error',
                    title: app.lang.get('ERR_INTERNAL_ERR_MSG'),
                    messages: ['ERR_HTTP_500_TEXT_LINE1', 'ERR_HTTP_500_TEXT_LINE2']
                });
                app.logger.error(error);
            }
        });
    },

    /**
     * Return main grid component
     *
     * @return {Object}
     */
    getGrid: function() {
        return this._grid;
    },

    /**
     * Returns number of minimized panels
     *
     * @return {number}
     */
    getNumberOfMinimizedPanels: function() {
        return this._minimizedPanels;
    },

    /**
     * Go through each of the panels and create them
     */
    _tryBuildPanels: function() {
        // do not create the panels unless we have all the data needed
        if (this.disposed || !this.model.dataFetched || _.isEmpty(this._panelsDef) || this._panelsBuilt) {
            return;
        }

        this._adjustContainersDefaultHeight();

        this._panelsBuilt = true;
        this._grid.$el.toggleClass('grid-stack-empty', this._grid.isAreaEmpty());

        // add chart to grid last so that it always has priority
        const chartIndex = _.findIndex(this._panelsDef, function getChartPanelIndex(panelDef) {
            return panelDef.id === 'chart';
        }, this);

        if (chartIndex > -1) {
            const chartPanelDef = this._panelsDef.splice(chartIndex, 1);
            this._panelsDef.push(_.first(chartPanelDef));
        }

        _.each(this._panelsDef, function(panelMeta, orderNumber) {
            const panelWrapper = this._tryAddPanel(panelMeta, orderNumber);

            if (panelWrapper) {
                // remove this line if we decide we should only add to grid after loading is done
                // see @report-panel-wrapper's addPanelToGrid method
                this.addPanelToGrid(panelWrapper, panelMeta, orderNumber);
            }
        }, this);

        let numberOfPanelsVisible = 0;
        _.each(this._panels, function getPanel(panel) {
            if (panel.isMinimized()) {
                const widget = this._getGridWidgetById(panel.getContainerMeta().id);

                this._grid.move(widget, null, 999);
            } else {
                numberOfPanelsVisible++;
            }
        }, this);

        if (numberOfPanelsVisible === 1) {
            this._checkMinimizeIconVisibility();
        }

        this._bindGridEvents();
    },

    /**
     *  Create a panel with the given meta
     *
     * @param {Object} panelMeta
     * @param {number} orderNumber
     *
     * @return {Object|boolean}
     */
    _tryAddPanel: function(panelMeta, orderNumber) {
        return this._tryInitializePanel(panelMeta, orderNumber);
    },

    /**
     * Add the panel wrapper to gridstack
     *
     * @param {Object} panelGridWrapper
     * @param {Object} panelMeta
     * @param {number} orderNumber
     */
    addPanelToGrid: function(panelGridWrapper, panelMeta, orderNumber) {
        const defaultOptions = app.utils.deepCopy(this._defaultElementOptions);
        let options = _.extendOwn(defaultOptions, panelMeta);

        options.minHeight = panelMeta.collapsed ? 1 : options.minHeight;
        options.previousHeight = (panelMeta.collapsed && panelMeta.initialHeight) ?
                                    panelMeta.initialHeight : options.previousHeight;

        const widget = this._grid.addWidget(panelGridWrapper.el, options);
        this._gridWidgets.push(widget);

        panelMeta = _.extend(panelMeta, this._getWidgetAttributes(widget));

        if (panelMeta.collapsed) {
            panelGridWrapper.collapse(true, options.previousHeight);
        }

        if (panelMeta.minimized) {
            panelGridWrapper.minimize(true, true);
        }

        if (panelMeta.enlarged) {
            this._enlargedGridWidgets.push(widget);
        }

        _.extend(this._panelsDef[orderNumber], panelMeta);
    },

    /**
     * Convert "widget" attributes to an object that matches our metadata
     * properties
     *
     * @param {jQuery} widget Gridstack Grid item
     * @return {Object} updated metadata
     */
    _getWidgetAttributes: function(widget) {
        return {
            x: parseInt(widget.getAttribute('data-gs-x')),
            y: parseInt(widget.getAttribute('data-gs-y')),
            width: parseInt(widget.getAttribute('data-gs-width')),
            height: parseInt(widget.getAttribute('data-gs-height')),
            id: widget.getAttribute('data-gs-id') || ''
        };
    },

    /**
     * Bind GridStack events
     */
    _bindGridEvents: function() {
        let debouncedSave = _.debounce(_.bind(this.handleSave, this), 100);

        this._grid.on('change', _.bind(function(event, items) {
            if (_.isUndefined(items)) {
                return;
            }

            this._handleGridChange(event, items);
            debouncedSave();
        }, this));

        this._grid.on('resizestop', _.bind(function(event, el) {
            const panelId = _.first(el.element).getAttribute('data-gs-id');
            const panel = this._getPanelById(panelId);

            if (_.isUndefined(panel)) {
                return;
            }

            panel.manageSizeUpdated();
        }, this));
    },

    /**
     * Ensure our panel metadata has the current height/width/position for
     * each element
     *
     * @param {Event} event ignored
     * @param {Array} items Panel grid containers
     */
    _handleGridChange: function(event, items) {
        _.each(items, function(item) {
            const panelDef = this._getPanelDefById(item.id);
            const currentAttributes = this._getItemAttributes(item);

            if (this._isWidgetResized(panelDef, currentAttributes) &&
                _.isUndefined(item.ignoreChangeEvent) && (item.height === panelDef.initialHeight)) {
                this._removeWidgetFromEnlarged(panelDef.id);
            }

            _.extend(panelDef, currentAttributes);
        }, this);
    },

    /**
     * Is widget resized
     *
     * Test if widget dimensions were changed
     *
     * @param {Object} previousDimensions
     * @param {Object} currentDimensions
     * @return {boolean}
     */
    _isWidgetResized: function(previousDimensions, currentDimensions) {
        return previousDimensions.x !== currentDimensions.x ||
            previousDimensions.y !== currentDimensions.y ||
            previousDimensions.width !== currentDimensions.width ||
            previousDimensions.height !== currentDimensions.height;
    },

    /**
     * Convert "item" attributes to an object that matches our metadata
     *
     * @param {Object} item
     *
     * @return {Object} updated widget metadata
     */
    _getItemAttributes: function(item) {
        const targetPanel = this._getPanelDefById(item.id);

        return {
            x: parseInt(item.x),
            y: parseInt(item.y),
            width: parseInt(item.width),
            height: parseInt(item.height),
            id: item.id,
            collapsed: parseInt(item.height) <= 1,
            previousHeight: targetPanel.height > 1 ? targetPanel.height : targetPanel.previousHeight,
        };
    },

    /**
     * Notify all panels when another is being collapsed or maximized
     *
     * @param {boolean} collapsed
     */
    _managePanelCollapsed: function(collapsed) {
        // recalculate elements width/height/x/y based on available space
        this._grid._triggerEvent('change', this._panelsDef);
    },

    /**
     * Notify all panels when another is being minimized or maximized
     *
     * @param {boolean} minimized
     * @param {number} panelPos
     * @param {string} panelId
     * @param {boolean} instant
     */
    _managePanelMinimized: function(minimized, panelPos, panelId, instant) {
        if (minimized) {
            this._minimizedPanels = this._minimizedPanels + 1;
        } else {
            this._minimizedPanels = this._minimizedPanels - 1;

            _.each(this._panels, function reArange(panel) {
                if (panel.isMinimized()) {
                    panel.recalculateLeftPos(panelPos);
                }
            }, this);
        }

        if (!instant) {
            this._resizeWidgets(minimized, panelId);
        }

        this._checkMinimizeIconVisibility();
    },

    /**
     * Remove widget from list of enlarged items
     *
     * @param {string} id
     */
    _removeWidgetFromEnlarged: function(id) {
        this._enlargedGridWidgets = _.filter(this._enlargedGridWidgets, function(enlargedWidget) {
            const isCurrentWidget = enlargedWidget.getAttribute('data-gs-id') === id;

            if (isCurrentWidget) {
                const enlargedWidgetAttrs = this._getWidgetAttributes(enlargedWidget);
                const panelToBeEnlarged = this._getPanelById(enlargedWidgetAttrs.id);

                panelToBeEnlarged.enlargePanel(false);
            }

            return !isCurrentWidget;
        }, this);
    },

    /**
     * Enlarge widgets
     *
     * @param {string} widgetId
     * @param {number} previousHeight
     */
    _enlargeWidgets: function(widgetId, previousHeight) {
        // get all the widgets on the Y axis as we go up
        let widgetsToBeResized = this._getYAxisWidgetsToBeResized(widgetId, false);

        // if we couldn't find any
        // do the same but go down
        if (_.isEmpty(widgetsToBeResized)) {
            widgetsToBeResized = this._getYAxisWidgetsToBeResized(widgetId, true);
        }

        // if still there's no widget to be resized, it might be because it's collapsed
        const minimizedWidget = this._getGridWidgetById(widgetId);
        const minimizedWidgetAttrs = this._getWidgetAttributes(minimizedWidget);
        const leftoverWidget = _.find(this._gridWidgets, function(w) {
            return this._getWidgetAttributes(w).id !== widgetId;
        }, this);
        const leftoverWidgetAttrs = this._getWidgetAttributes(leftoverWidget);
        if (leftoverWidgetAttrs.y > minimizedWidgetAttrs.y) {
            this._grid.move(minimizedWidget, null, 999);
        }

        const minimizedPanel = this._getPanelById(minimizedWidgetAttrs.id);
        const minimizedPanelMeta = minimizedPanel.getContainerMeta();

        if (minimizedPanelMeta.initialHeight < minimizedWidgetAttrs.height) {
            this._grid.resize(minimizedWidget, null, minimizedPanelMeta.initialHeight);
        }

        const panelToBeResized = this._getPanelById(widgetId);

        panelToBeResized.enlargePanel(false);

        // remove the current widget from the enlarged widgets list
        this._removeWidgetFromEnlarged(widgetId);

        _.each(widgetsToBeResized, function _resizeWidget(widgetToBeResized) {
            // make sure we don't have the widget in the enlarged widgets already
            const widgetToBeResizedAttrs = this._getWidgetAttributes(widgetToBeResized);
            const widgetAdded = this._getEnlargedGridWidgetById(widgetToBeResizedAttrs.id);

            // if we don't keep it
            if (_.isUndefined(widgetAdded)) {
                const panelToBeResized = this._getPanelById(widgetToBeResizedAttrs.id);

                panelToBeResized.enlargePanel(true);
                this._enlargedGridWidgets.push(widgetToBeResized);
            }

            this._enlargeWidget(
                widgetToBeResized,
                widgetId,
                previousHeight
            );
        }, this);

        if (_.isEmpty(widgetsToBeResized)) {
            this.handleSave(true);
        }
    },

    /**
     * Shrink widgets
     *
     * @param {Object} targetWidget
     * @param {number} previousHeight
     */
    _shrinkWidgets: function(targetWidget, previousHeight) {
        // get the widget which is minimized and need repositioning at the bottom
        // we need to do this as we do not completely remove elements from gridstack
        // by doing this we avoid all kind of conflicts on OX and OY axis
        const targetWidgetAttrs = this._getWidgetAttributes(targetWidget);
        let saveState = true;
        let widgetsIds = [targetWidget.getAttribute('data-gs-id')];

        _.each(this._enlargedGridWidgets, function downsizeWidget(widget) {
            const widgetAttrs = this._getWidgetAttributes(widget);

            if ((targetWidgetAttrs.x + targetWidgetAttrs.width <= widgetAttrs.x) ||
                (targetWidgetAttrs.x >= widgetAttrs.x + widgetAttrs.width)) {
                return;
            }

            const enlargedPanel = this._getPanelById(widgetAttrs.id);
            const newHeight = widgetAttrs.height - previousHeight;

            widgetsIds.push(widgetAttrs.id);
            this._grid.resize(widget, null, newHeight);

            saveState = false;

            if (enlargedPanel.getInitialHeight() === newHeight || _.isUndefined(enlargedPanel.getInitialHeight())) {
                this._removeWidgetFromEnlarged(widgetAttrs.id);

                enlargedPanel.setInitialHeight(undefined);
            }
        }, this);

        const widgetToBeMoved = this._getGridWidgetById(widgetsIds, true);

        if (!_.isUndefined(widgetToBeMoved)) {
            const panelToBeMoved = this._getPanelById(widgetToBeMoved.getAttribute('data-gs-id'));

            if (panelToBeMoved.isMinimized()) {
                this._grid.move(widgetToBeMoved, null, 999);
                saveState = false;
            }
        }

        const attrs = app.utils.deepCopy(this._getWidgetAttributes(targetWidget));

        if (targetWidget.previousWidgetY) {
            attrs.y = targetWidget.previousWidgetY;
        }

        const widgetsInArea = this._getWidgetsInArea(attrs);

        if (_.isEmpty(widgetsInArea)) {
            this._grid.move(targetWidget, null, attrs.y);
        }

        // make sure the panel that gets expanded is not floating
        // we do this by moving the only left minimized panel to the bottom
        const minimizedPanel = _.find(this._panels, function getMinimizedPanel(panel) {
            return panel.isMinimized();
        }, this);

        if (!_.isUndefined(minimizedPanel)) {
            const ids = [minimizedPanel.getContainerMeta().id, attrs.id];
            const leftoverWidget = this._getGridWidgetById(ids, true);
            const leftoverAttrs = this._getWidgetAttributes(leftoverWidget);

            if (attrs.y > leftoverAttrs.y + leftoverAttrs.height) {
                const minimizedWidget = this._getGridWidgetById(minimizedPanel.getContainerMeta().id);

                this._grid.move(minimizedWidget, null, 999);
            }
        }

        if (saveState) {
            this.handleSave(true);
        }
    },

    /**
     * Resize widgets
     *
     * @param {boolean} minimized
     * @param {string} widgetId
     */
    _resizeWidgets: function(minimized, widgetId) {
        const targetWidget = this._getGridWidgetById(widgetId);
        const targetWidgetAttrs = this._getWidgetAttributes(targetWidget);
        const previousHeight = targetWidgetAttrs.height;

        if (minimized) {
            this._enlargeWidgets(widgetId, previousHeight);
        } else {
            this._shrinkWidgets(targetWidget, previousHeight);
        }
    },

    /**
     * Check if rectangles intersect
     *
     * @param {Object} a
     * @param {Object} b
     * @return {boolean}
     */
    _rectanglesIntersect: function(a, b) {
        const aLeftOfB = a.x + a.width <= b.x;
        const aRightOfB = a.x >= b.x + b.width;
        const aAboveB = a.y >= b.y + b.height;
        const aBelowB = a.y + a.height <= b.y;

        return !(aLeftOfB || aRightOfB || aAboveB || aBelowB);
    },

    /**
     * Get widgets in area
     *
     * @param {Object}
     * @return {Array}
     */
    _getWidgetsInArea: function(attrs) {
        let widgetsInArea = [];

        _.each(this._gridWidgets, function getWidget(widget) {
            const widgetAttrs = this._getWidgetAttributes(widget);

            if (widgetAttrs.id === attrs.id) {
                return;
            }

            if (this._rectanglesIntersect(widgetAttrs, attrs)) {
                widgetsInArea.push(widget);
            }
        }, this);

        return widgetsInArea;
    },

    /**
     * Get panel def by id
     *
     * @param {string} id
     * @return {Object}
     */
    _getPanelDefById: function(id) {
        return _.find(this._panelsDef, function getPanelDef(panelDef) {
            return panelDef.id === id;
        }, this);
    },

    /**
     * Get enlarged grid widget by id
     *
     * @param {string} id
     * @return {Object}
     */
    _getEnlargedGridWidgetById: function(id) {
        return _.find(this._enlargedGridWidgets, function(widget) {
            return widget.getAttribute('data-gs-id') === id;
        }, this);
    },

    /**
     * Get engine node by id
     *
     * @param {string} id
     * @return {Object}
     */
    _getEngineNodeById: function(id) {
        return _.find(this._grid.engine.nodes, function getNode(node) {
            return node.id === id;
        });
    },

    /**
     * Get panel by id
     *
     * @param {string} id
     * @return {Object}
     */
    _getPanelById: function(id) {
        return _.find(this._panels, function getPanel(panel) {
            return panel.getContainerMeta().id === id;
        }, this);
    },

    /**
     * Get grid widget by id
     *
     * @param {string|Array} id
     * @param {boolean} exclude Exclude given id
     * @return {Object}
     */
    _getGridWidgetById: function(id, exclude) {
        if (_.isString(id)) {
            id = [id];
        }

        return _.find(this._gridWidgets, function getNode(widget) {
            const widgetAttrs = this._getWidgetAttributes(widget);

            return (exclude && !_.contains(id, widgetAttrs.id)) ||
                    (!exclude && _.contains(id, widgetAttrs.id));
        }, this);
    },

    /**
     * Enlarge widget
     *
     * @param {string} widgetToBeResized
     * @param {string} minimizedWidgetId
     * @param {number} previousHeight
     */
    _enlargeWidget: function(widgetToBeResized, minimizedWidgetId, previousHeight) {
        const widgetAttrs = this._getWidgetAttributes(widgetToBeResized);
        const nodeToBeResized = this._getEngineNodeById(widgetAttrs.id);
        const minimizedNode = this._getEngineNodeById(minimizedWidgetId);
        const minimizedWidget = this._getGridWidgetById(minimizedWidgetId);
        const minimizedPanel = this._getPanelById(minimizedWidgetId);

        if (_.isUndefined(minimizedPanel.getInitialHeight())) {
            minimizedPanel.setInitialHeight(minimizedNode.height);
        }

        const panelToBeResized = this._getPanelById(widgetAttrs.id);

        if (_.isUndefined(panelToBeResized.getInitialHeight())) {
            panelToBeResized.setInitialHeight(widgetAttrs.height);
        }

        minimizedWidget.previousWidgetY = minimizedNode.y;

        nodeToBeResized.ignoreChangeEvent = true;

        if (widgetAttrs.y > parseInt(minimizedNode.y)) {
            this._grid.move(widgetToBeResized, null, minimizedNode.y);
        }

        this._grid.resize(widgetToBeResized, null, previousHeight + widgetAttrs.height);

        nodeToBeResized.ignoreChangeEvent = undefined;

        _.each(this._panels, function movePanelBottom(panel) {
            if (!panel.isMinimized()) {
                return;
            }

            const panelWidget = this._getGridWidgetById(panel.getContainerMeta().id);

            this._grid.move(panelWidget, null, 999);
        }, this);
    },

    /**
     * Get y axis widgets to be resized
     *
     * @param {string} minimizedPanelId
     * @param {boolean} goDown
     * @return {Array}
     */
    _getYAxisWidgetsToBeResized: function(minimizedPanelId, goDown) {
        let panelsToBeResized = [];
        const sign = goDown ? 1 : 0;

        const minimizedPanel = this._getGridWidgetById(minimizedPanelId);
        const minimziedPanelAttrs = this._getWidgetAttributes(minimizedPanel);

        _.each(this._gridWidgets, function getWidget(gridWidget) {
            const gridWidgetAttrs = this._getWidgetAttributes(gridWidget);
            const gridPanel = this._getPanelById(gridWidgetAttrs.id);

            // ingore minimized node
            if (gridWidgetAttrs.id === minimizedPanelId || gridPanel.isMinimized()) {
                return;
            }

            let targetY = minimziedPanelAttrs.y + minimziedPanelAttrs.height * sign;

            // ingore element if Y is not in range
            if ((goDown && gridWidgetAttrs.y < targetY) ||
                (!goDown && gridWidgetAttrs.y >= targetY)) {
                return;
            }

            // check any conflicts with the remaining wigdet
            const remainingWidget = this._getGridWidgetById([minimizedPanelId, gridWidgetAttrs.id], true);

            if (!remainingWidget) {
                return;
            }

            const remainingWidgetAttrs = this._getWidgetAttributes(remainingWidget);
            const remainingPanel = this._getPanelById(remainingWidgetAttrs.id);
            let gridWidgetProjection = app.utils.deepCopy(gridWidgetAttrs);

            if (gridWidgetProjection.y > minimziedPanelAttrs.y) {
                gridWidgetProjection.y = minimziedPanelAttrs.y;
            }

            gridWidgetProjection.height = minimziedPanelAttrs.height + gridWidgetProjection.height;

            if (this._rectanglesIntersect(remainingWidgetAttrs, gridWidgetProjection) &&
                !remainingPanel.isMinimized()) {
                return;
            }

            // check wether we have a conflict on X axis, which would make the element invalid
            const conflictingWidget = _.find(panelsToBeResized, function getValid(resizablePanel) {
                const resizablePanelAttrs = this._getWidgetAttributes(resizablePanel);
                const targetX = gridWidgetAttrs.x + gridWidgetAttrs.width;
                const maxX = resizablePanelAttrs.x + resizablePanelAttrs.width;

                return gridWidgetAttrs.x < maxX && targetX > resizablePanelAttrs.x;
            }, this);

            const panelWidget = this._getPanelById(gridWidgetAttrs.id);

            if (panelWidget.isCollapsed()) {
                const gridWidgetProjectionAttrs = app.utils.deepCopy(gridWidgetAttrs);

                if (gridWidgetProjectionAttrs.y > minimziedPanelAttrs.y) {
                    gridWidgetProjectionAttrs.y = minimziedPanelAttrs.y;

                    if (this._rectanglesIntersect(remainingWidgetAttrs, gridWidgetProjectionAttrs)) {
                        return;
                    }

                    const panelWidget = this._getGridWidgetById(minimziedPanelAttrs.id);

                    this._grid.move(panelWidget, null, 999);
                }

                return;
            }

            if (conflictingWidget) {
                const conflictingWidgetAttrs = this._getWidgetAttributes(conflictingWidget);
                // if we already have a conflicting element which is further away,
                // we replace it with the current element
                if ((goDown && conflictingWidgetAttrs.y > gridWidgetAttrs.y) ||
                    (!goDown && conflictingWidgetAttrs.y < gridWidgetAttrs.y)) {
                    panelsToBeResized.pop();
                    panelsToBeResized.push(gridWidget);
                }
                return;
            }

            if ((minimziedPanelAttrs.x + minimziedPanelAttrs.width <= gridWidgetAttrs.x) ||
                (minimziedPanelAttrs.x >= gridWidgetAttrs.x + gridWidgetAttrs.width)) {
                return;
            }

            panelsToBeResized.push(gridWidget);
        }, this);

        return panelsToBeResized;
    },

    /**
     * Check minimize icon
     *
     * If it's the only panel shown, hide the minimize button
     */
    _checkMinimizeIconVisibility: function() {
        let visiblePanels = _.filter(this._panels, function(panel) {
            return _.isUndefined(panel._minimized) || panel._minimized === false;
        });

        if (visiblePanels.length === 1) {
            _.first(visiblePanels).toggleMinimizeButton(false);
        } else {
            _.each(this._panels, function(panel) {
                panel.toggleMinimizeButton(true);
            });
        }
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        this._grid.off('change');

        this._super('_dispose');
    },
})
