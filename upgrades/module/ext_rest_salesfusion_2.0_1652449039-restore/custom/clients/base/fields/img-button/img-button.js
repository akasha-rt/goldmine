({
    showNoData: false,
    events: {
        'click [data-event="list:follow:fire"]': 'activateDrawer',
    },
    extendsFrom: 'RowactionField',
    initialize: function(options) {
        this._super("initialize", [options]);
    },
    unbindDom: function() {
        this.$("[data-hover=true]").off();
        this._super("unbindDom");
    },
    _render: function() {
        var module, mouseoverText, mouseoverClass, self = this;
        module = app.metadata.getModule(this.model.module);
        this._super("_render");
        if (this.tplName !== "detail") {
			console.log("not in detail");
            return;
        }       
    },
    activateDrawer: function(event) {
	    var _this = this;
	    
	    app.drawer.open({
            layout: 'sf_drawer',
            context: {
                model: _this.model,
            },
        });
    }
})