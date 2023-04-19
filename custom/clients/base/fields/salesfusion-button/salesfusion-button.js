
({
    extendsFrom: 'RowactionField',

    initialize: function (options) {
        this._super('initialize', [options]);
        this.type = 'rowaction';
    },

    /**
     * Event to trigger the convert lead process for the lead
     */
    rowActionSelect: function() {
        var beanModel = app.data.createBean(this.model.module);
        beanModel.set(app.utils.deepCopy(this.model.attributes));
        app.drawer.open({
            layout : "salesfusion-dashboard",
            context: {
                module: this.model.module,
                beanModel: beanModel
            }
        });
    }

})