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
 * @class View.Views.Reports.SummationDetailsView
 * @alias SUGAR.App.view.views.ReportsSummationDetailsView
 * @extends View.Views.Base.View
 */
({
    extendsFrom: 'ReportsRowsColumnsView',

    pagination: false,

    summationGroups: [],
    groupBatchSize: 20,
    loadIndex: 0,
    lastScrollTop: 0,

    LIST_ACTION: {
        'APPEND': 'APPEND',
        'PREPEND': 'PREPEND',
    },

    events: {
        'click .sicon-arrow-left-double': 'toggleGroup',
        'click .sortable': 'sortGroup',
        'scroll .flex-list-view-content': 'loadMore',
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.plugins = _.filter(this.plugins, function(pluginName) {
            return pluginName !== 'ResizableColumns';
        });

        this._super('initialize', [options]);

        this.template = app.template.getView('summation-details', this.module);

        this.rightColumns = [];
        this.isFirstColumnFreezed = false;
    },

    /**
     * @inheritdoc
     */
    _render: function() {
        this._super('_render');
        this._registerDomEvents();
        this._placeGroups();
    },

    /**
     * Register events
     */
    _registerDomEvents: function() {
        const delay = 100;
        let list = this.$('.flex-list-view-content');
        list.on('scroll', _.bind(_.debounce(this.scrolling, delay), this));
    },

    /**
     * Toggle group
     *
     * @param {Event} evt
     */
    toggleGroup: function(evt) {
        const isUp = _.contains(evt.target.classList, 'up');

        if (isUp) {
            this.$(evt.target).removeClass('up');
            this.$(evt.target).addClass('down');
            this.$(evt.target).closest('table').find('.subgroup').hide();
            this.$(evt.target).closest('table').find('tbody').hide();
        } else {
            this.$(evt.target).removeClass('down');
            this.$(evt.target).addClass('up');
            this.$(evt.target).closest('table').find('.subgroup').show();
            this.$(evt.target).closest('table').find('tbody').show();
        }
    },

    /**
     * Rerender the header
     *
     * @param {Array} data
     */
    renderTableMeta: function(data) {
        if (data) {
            this.context.set('data', data);
        }
        this._setHeaderFields();
        this._initializeOrderBy(data);
        this.render();
    },

    /**
     * Initialize the orderBy object
     *
     * TODO: - try and get order_by from this.data.order_by
     */
    _initializeOrderBy: function() {
        //we get the last state
        if (this.useCustomReportDef) {
            this._initializeCustomOrderBy(true);

            return;
        }

        this.orderBy = app.user.lastState.get(this.orderByLastStateKey);
        const dataOrderBy = _.first(this.data.orderBy);

        if (dataOrderBy) {
            this.orderBy = dataOrderBy;
            this.orderBy.field = dataOrderBy.name;
            this.orderBy.direction = dataOrderBy.sort_dir === 'a' ? 'asc' : 'desc';

            app.user.lastState.set(this.orderByLastStateKey, this.orderBy);
        }
    },

    /**
     * Render table meta
     *
     * @param {Array} data
     */
    _rebuildData: function(data) {
        if (this.disposed) {
            return;
        }

        if (_.has(data, 'reportType') && data.reportType === 'summary') {
            this._showLoadingScreen(true);
            this.context.trigger('report:build:data:table', 'summary');

            return;
        }

        if (!this.layout || !app.utils.reports.hasAccessToAllReport(this.layout.model)) {
            this._toggleEmptyPanel(true);

            return;
        }

        this.data = data;
        this._initializeOrderBy(data);
        this.renderTableMeta(data);

        const emptyPanel = this._isEmptyPanel(data);
        this._toggleEmptyPanel(emptyPanel);

        this.context.trigger('report:data:table:loaded');
    },

    /**
     * Build collection
     *
     * @param {Array} data
     */
    buildCollection: function(data) {
        const header = data.header || this._fields.visible;

        let groups = [];
        for (const index in data.groups) {
            let group = data.groups[index];
            let groupBy = _.flatten(this._buildGroupHeader(group));
            let subgroups = this._buildSubgroups(group);
            let colspan;
            for (let subgroup of subgroups) {
                colspan = _.first(subgroup.records).length;
                subgroup.collection = this._buildCollection(subgroup.records, header);
            }
            groups.push({
                subgroups, groupBy, colspan
            });
        }

        data.groups = groups;
    },

    /**
     * Scrolling event
     *
     * @param {Event} evt
     */
    scrolling: function(evt) {
        const list = evt.currentTarget;
        const listOffsetBottom = 120;

        this._resetLoadingSpinners();
        this.$('.loadUp .sicon-is-spinning').stop();
        this.$('.loadBottom .sicon-is-spinning').stop();

        if (list.scrollTop === 0 && this.loadIndex > 0) {
            // scroll is up
            this._showLoadingSpinner('.loadUp', _.bind(this.loadMore, this, false));
        }

        if (list.scrollTop + list.clientHeight + listOffsetBottom >= list.scrollHeight) {
            // scroll has reached the bottom of the list
            this._showLoadingSpinner('.loadBottom', _.bind(this.loadMore, this, true));
        }

        this.lastScrollTop = list.scrollTop;
    },

    /**
     * Show loading
     *
     * @param {string} loadingSelector
     * @param {Function} callback
     */
    _showLoadingSpinner: function(loadingSelector, callback) {
        const bigFontSize = '14px';
        const animationDuration = 500;

        this.$(loadingSelector).removeClass('hide');
        this.$(`${loadingSelector} .sicon-is-spinning`).animate(
            {fontSize: bigFontSize}, animationDuration, callback);
    },

    /**
     * Reset loading bars
     */
    _resetLoadingSpinners: function() {
        this.$('.loadBottom').addClass('hide');
        this.$('.loadUp').addClass('hide');
    },

    /**
     * Load more summation groups
     *
     * @param {bool} down
     * @param {bool} initialLoad
     */
    loadMore: function(down, initialLoad) {
        let list = this.$('.flex-list-view-content');
        if (this.summationGroups.length - 1 <= this.loadIndex && down && !initialLoad) {
            this.loadIndex = this.summationGroups.length;
            this._resetLoadingSpinners();
            return;
        }
        if (this.loadIndex < 0 || (this.loadIndex === 1 && !down)) {
            this.loadIndex = 1;
            this._resetLoadingSpinners();
            return;
        }

        if (down) {
            if (!initialLoad) {
                this.loadIndex ++;
            }
            const groups = this.summationGroups[this.loadIndex];
            if (_.isArray(groups)) {
                this._addGroups(list, groups, this.LIST_ACTION.APPEND);
            }
        } else {
            if (this.loadIndex < 1) {
                this.loadIndex = 1;
                this._resetLoadingSpinners();
                return;
            }

            this.loadIndex --;
            const groups = this.summationGroups[this.loadIndex - 1];
            if (_.isArray(groups)) {
                // don't want to chang groups orders inside this.summationGroups
                // thus the cloning
                reversedGroups = _.clone(groups).reverse();
                this._addGroups(list, reversedGroups, this.LIST_ACTION.PREPEND);
            }
        }

        this.removeFromDom(down);
        this._resetLoadingSpinners();
    },

    /**
     * Removes elements from dom
     *
     * @param {bool} down
     */
    removeFromDom: function(down) {
        let list = this.$('.flex-list-view-content');
        let tables = list.find('table');

        if (this.loadIndex <= 1) {
            // move scroll to the middle of the list
            if (!down) {
                list.scrollTop(list.offset().top + list.height());
            }
            return;
        }

        if (down) {
            this.removeTables(0, this.groupBatchSize, tables);
        } else {
            const lastLoadedGroup = this.summationGroups[this.loadIndex + 1];
            const endIndex = tables.length - lastLoadedGroup.length;

            this.removeTables(endIndex, tables.length, tables);
            // move scroll to the middle of the list
            list.scrollTop(list.offset().top + list.height());
        }
    },

    /**
     * Remove a group of tables from dom
     *
     * @param {int} start
     * @param {int} length
     * @param {Array} tables
     */
    removeTables: function(start, length, tables) {
        for (let index = start; index < length; index ++) {
            this._removeTable(tables, index);
        }
    },

    /**
     * Remove one table from dom
     *
     * @param {Array} tables
     * @param {int} index
     */
    _removeTable: function(tables, index) {
        if (tables[index]) {
            tables[index].remove();
        }
    },

    /**
     * Adds groups to dom
     * Add them one by one because it is not blocking.
     * There is a posibilty to add them all at once, but the user will experience
     * some time when nothing happens.
     *
     * @param {Element} list
     * @param {Array} groups
     * @param {string} action
     */
    _addGroups: function(list, groups, action) {
        for (const group of groups) {
            _.defer(_.bind(function _append() {
                switch (action) {
                    case this.LIST_ACTION.APPEND:
                        list.append(group);
                        break;
                    case this.LIST_ACTION.PREPEND:
                        list.prepend(group);
                        break;
                }

                this._disableFocusDrawers();
            }, this));
        }
    },

    /**
     *
     * @param {Array} group
     */
    _buildGroupHeader: function(group) {
        let keys = Object.keys(group);

        if (keys.length === 1) {
            group = group[keys[0]];
        }

        let groupBy = [];

        if (!_.isUndefined(group.key) && !_.isUndefined(group.id)) {
            let groupValue = this._getGroupHeaderValue(group);
            const countLbl = app.lang.get('LBL_COUNT', 'Reports');

            if (_.isEmpty(groupValue)) {
                groupValue = app.lang.get('LBL_NONE_STRING', 'Reports');
            }

            groupBy.push(`${group.key} = ${groupValue}, ${countLbl} = ${group.count}`);
        }

        if (group.dataStructure) {
            groupBy.push(this._buildGroupHeader(group.dataStructure));
        }

        return groupBy;
    },


    /**
     * Get group header value
     *
     * @param {Object} group
     * @return {string}
     */
    _getGroupHeaderValue: function(group) {
        let groupValue = group.id;

        if (_.isEmpty(group.fieldMeta)) {
            return groupValue;
        }

        if (!_.isEmpty(group.fieldMeta.id) && !_.isEmpty(group.fieldMeta.module)) {
            groupValue = `<a href='#${group.fieldMeta.module}/${group.fieldMeta.id}'>${group.fieldMeta.value}</a>`;
            return groupValue;
        }

        if (group.fieldMeta.type) {
            let format;

            switch (group.fieldMeta.type) {
                case 'date':
                    if (!group.fieldMeta.showPlainText) {
                        format = app.user.getPreference('datepref');
                        format = app.date.convertFormat(format);

                        const dateValue = app.date(group.fieldMeta.value);
                        groupValue = dateValue.format(format);
                    }
                    break;
                case 'datetime':
                case 'datetimecombo':
                    if (!group.fieldMeta.showPlainText) {
                        format = app.user.getPreference('datepref') + ' ' + app.user.getPreference('timepref');
                        format = app.date.convertFormat(format);

                        const dateTimeValue = app.date(group.fieldMeta.value);
                        groupValue = dateTimeValue.format(format);
                    }
                    break;
                case 'enum':
                    if (_.isString(group.fieldMeta.module)) {
                        const moduleMeta = app.metadata.getModule(group.fieldMeta.module);
                        const fieldDef = moduleMeta.fields[group.fieldMeta.name];

                        if (_.isString(fieldDef.options)) {
                            const options = app.lang.getAppListStrings(fieldDef.options);
                            groupValue = options[groupValue];
                        } else if (_.isString(fieldDef.function) && !_.isUndefined(this.data.functionOptions) &&
                            !_.isUndefined(this.data.functionOptions[fieldDef.function]) &&
                            _.isString(group.fieldMeta.value)) {
                            groupValue = this.data.functionOptions[fieldDef.function][group.fieldMeta.value];
                        }
                    }
                    break;
            }
        }

        return groupValue;
    },

    /**
     * Build subgroups
     *
     * @param {Array} group
     */
    _buildSubgroups: function(group) {
        let keys = Object.keys(group);
        if (keys.length === 1) {
            group = group[keys[0]];
        }

        if (_.has(group, 'dataStructure')) {
            group = this._buildSubgroups(group.dataStructure);
        }

        let subgroups = [];

        if (_.has(group, 'records')) {
            subgroups.push(group);
            return subgroups;
        }

        for (let index in group) {
            let subgroup = group[index];

            let header = _.flatten(this._buildGroupHeader(subgroup));
            if (_.has(subgroup, 'header')) {
                header = [subgroup.header]
            }

            if(_.has(subgroup, 'dataStructure')) {
                subgroup = this._buildSubgroups(subgroup);
                if (_.isArray(subgroup)) {
                    for (let item of subgroup) {
                        if (_.has(item, 'header')) {
                            const _header = this._buildSubgroupHeader(item);
                            header.push(_header);
                        }
                        header = this._flattenHeader(header);

                        const records = item.records;
                        subgroups.push({header, records});
                        header = [];
                    }
                }
            }
            header = this._flattenHeader(header);

            if (_.has(subgroup, 'records')) {
                const records = subgroup.records;
                subgroups.push({header, records});
            }
        }

        return subgroups;
    },

    /**
     * Flattend an array
     *
     * @param {Array} header
     */
    _flattenHeader: function(header) {
        return _.chain(header)
        .flatten()
        .unique()
        .value();
    },

    /**
     * Return a header for a subgroup
     *
     * @param {Array|Object} subgroup
     */
    _buildSubgroupHeader: function(subgroup) {
        if (_.isArray(subgroup.header) && subgroup.header.length === 1 &&
            _.isEmpty(_.first(subgroup.header)) && _.has(subgroup, 'records')) {
            const countLbl = app.lang.get('LBL_COUNT', 'Reports');
            const groupSize = subgroup.records.length;

            const newHeader = [`${countLbl}: ${groupSize}`];

            return newHeader;
        } else {
            return subgroup.header;
        }
    },

    /**
     * Create a collection for a soubgroup
     *
     * @param {Array} records
     * @param {Array} header
     */
    _buildCollection: function(records, header) {
        let collection = app.data.createBeanCollection();
        for (let record of records) {
            let model = app.data.createBean();
            model.fields = header;
            for (let recordIndex in record) {
                const field = record[recordIndex];
                const fieldMeta = header[recordIndex];
                let modelField = this._buildModel(field, fieldMeta);
                model.set(fieldMeta.name, modelField);
            }
            collection.models.push(model);
        }

        return collection;
    },

    /**
     * Add groups in dom
     */
    _placeGroups: function() {
        if (!this.data) {
            return;
        }

        this.summationGroups = [];

        for (const group of this.data.groups) {
            let data = Handlebars.helpers.partial('group', this, group, {hash: {}});
            this.summationGroups.push($(data.string));
        }
        this.summationGroups = _.chunk(this.summationGroups, this.groupBatchSize);

        this.loadIndex = 0;

        _.debounce(this.loadMore(true, true), 500);
    },

    /**
     * Hide focus drawer icons
     * They will not work on this table,
     * because we are appending html which is not contextually connectected to any event
     */
    _disableFocusDrawers: function() {
        this.$('.sicon-focus-drawer').hide();
    },

    /**
     * Sort a group
     *
     * @param {Event} evt
     */
    sortGroup: function(evt) {
        const eventTarget = this.$(evt.currentTarget);
        let orderBy = eventTarget.data('orderby');
        const fieldName = eventTarget.data('realname');
        const fieldMeta = _.filter(this._fields.visible, function(item) {
            return item.name === fieldName;
        })[0];

        // if no alternate orderby, use the field name
        if (!orderBy) {
            orderBy = fieldName;
        }

        if (_.isUndefined(this.orderBy)) {
            this.orderBy = {
                field: '',
                direction: 'desc'
            }
        }

        let tableKey = evt.currentTarget.dataset.tablekey;

        this.orderBy.table_key = tableKey.substr(0, tableKey.lastIndexOf(':'));
        this.orderBy.type = fieldMeta.type;
        this.orderBy.sort_on = fieldMeta.sort_on;
        this.orderBy.sort_on2 = fieldMeta.sort_on2;
        this.orderBy.rname = fieldMeta.rname;

        // if same field just flip
        if (orderBy === this.orderBy.field) {
            this.orderBy.direction = this.orderBy.direction === 'desc' ? 'asc' : 'desc';
        } else {
            this.orderBy.field = orderBy;
            this.orderBy.direction = 'desc';
        }

        //we get the last state
        if (this.useCustomReportDef && !_.isUndefined(this.customOrderBy)) {
            this.customOrderBy.table_key = tableKey.substr(0, tableKey.lastIndexOf(':'));
            this.customOrderBy.type = fieldMeta.type;
            this.customOrderBy.sort_on = fieldMeta.sort_on;
            this.customOrderBy.sort_on2 = fieldMeta.sort_on2;
            this.customOrderBy.rname = fieldMeta.rname;

            this._setCustomOrderBy();
        } else if (this.orderByLastStateKey) {
            app.user.lastState.set(this.orderByLastStateKey, this.orderBy);
        }

        this._loadReportData();
    },

    /**
     * Is empty panel
     *
     * @param {Object} data
     * @return {boolean}
     */
    _isEmptyPanel: function(data) {
        return data.groups.length === 0;
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        this.$('.flex-list-view-content').off('scroll');

        this._super('_dispose');
    },
})
