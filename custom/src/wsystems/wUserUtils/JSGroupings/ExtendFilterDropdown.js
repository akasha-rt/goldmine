// eslint-disable-next-line
; (function wUserUtils(app) {
    var filterDropdownExtension = {
        getFilterList: function() {
            var filters = this._super("getFilterList", arguments);

            this.layout.filters.collection.each(function addDefaultFilters(model) {
                var creator = model.get("created_by");
                var defaultFilter = model.get("default_filter");

                if (creator && creator !== app.user.get("id") && defaultFilter === true) {
                    var opts = {
                        id   : model.id,
                        text : this.layout.filters.collection._getTranslatedFilterName(model)
                    };
                    filters.splice(1, 0, opts);
                }
            }, this);
            
            return filters;
        }
    };

    app.events.once("app:sync:complete", function SamplePackageExtension() {
        app.wsystems.wUserUtils.extendComponent("base", "", "view", "filter-filter-dropdown", filterDropdownExtension);
    });
})(SUGAR.App);
