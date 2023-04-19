({
    plugins: ['Dashlet'],

    _render: function() {
        if (!this.meta.config) {
            this.dashletConfig.view_panel[0].height = '320px';
        }

        // store Salesfusion global object and iframeUrl at top level so multiple
        // dashlets can access it
        window.Salesfusion = window.Salesfusion || {};
        var _this = this;
        if (window.Salesfusion.iframeUrl) {
            var model = this.context.get("model");
            var this_url = window.Salesfusion.iframeUrl.replace('{recordId}', model.id).replace('{crmType}', model.get("_module")) + '&showGraphs=webhits';

            this.settings.set("url", this_url);
            app.view.View.prototype._render.call(this);
        }
        else {
            // if iframeUrl is not yet defined, retrieve it from API call and re-render this view
            app.api.call('read', app.api.buildURL('connector/salesfusion'), null, {
                success: function(data) {
                    window.Salesfusion.iframeUrl = data.iframeUrl;
                    _this._render();
                }
            });
        }

    },

    initDashlet: function(view) {
        this.viewName = view;
        this.model.on('change:name',this.render,this);
        this.model.on('change:full_name',this.render,this);
    },
})