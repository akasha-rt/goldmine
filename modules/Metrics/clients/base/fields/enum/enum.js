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
 * @class View.Fields.Base.Metrics.EnumField
 * @alias SUGAR.App.view.fields.BaseMetricsEnumField
 * @extends View.Fields.Base.EnumField
 */
({
    extendsFrom: 'EnumField',

    orderByFieldNames: ['order_by_primary', 'order_by_secondary'],

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        // If this is an enum for fields to order console multi-line lists by,
        // populate those field options
        if (this.orderByFieldNames.indexOf(options.def.name) > -1) {
            this.populateOrderByValues();

            if (this.model) {
                this.model.on('change:tabContent', function() {
                    this.populateOrderByValues();
                }, this);
            }
        }
    },

    /**
     * @inheritdoc
     */
    loadEnumOptions: function(fetch, callback, error) {
        if (this.orderByFieldNames.indexOf(this.def.name) > -1) {
            this.populateOrderByValues();
            callback.call(this);
        } else {
            this._super('loadEnumOptions', [fetch, callback, error]);
        }
    },

    /**
     * Populates an "Order By" enum with the proper order by field options
     */
    populateOrderByValues: function() {
        // Allow a blank field option
        this.items = {
            '': ''
        };
        // Get the fields to populate the order-by list with
        var tabContent = this.model.get('tabContent');
        if (!_.isEmpty(tabContent)) {
            this.items = _.extend(this.items, tabContent.sortFields);
        }
    },
});
