// eslint-disable-next-line
; (function extendFabDashboard(app) {
    var fabDashboardExtension = {
  
        initialize: function (options) {
            var initResult = this._super("initialize", arguments);

            this.events = this.events || {};

            var copyButtonExists = false;
            _.each(this.meta.buttons, function checkExistingButtons(button) {
                if (!_.isUndefined(button.type) && button.type == "rowaction") {
                    if (!_.isUndefined(button.name) && button.name == "copy_to_user") {
                        copyButtonExists = true;
                        return;
                    }
                    return;
                }
            });

            if (copyButtonExists === false) {
                this.meta.buttons.push({
                    name       : "copy_to_user",
                    type       : "rowaction",
                    icon       : "duplicate-dashboard-icon",
                    label      : "Copy Dashboard",
                    // eslint-disable-next-line camelcase
                    acl_action : "create",
                    // eslint-disable-next-line camelcase
                    acl_module : "Dashboards",
                    showOn     : "view",
                          
                });
                this.events["click [name=copy_to_user]"] = "copyToUserClicked";
            }

            return initResult;
        },

        copyToUserClicked: function () {
            var dashboardId = this.model.get("id");

            app.drawer.open({
                layout  : "copy-dashboard",
                context : {
                    // eslint-disable-next-line camelcase
                    dashboard_id: dashboardId
                }
            });
        }
    };

    app.events.once("app:sync:complete", function wUserUtilsExtendFabButton() {
        app.wsystems.wUserUtils.extendComponent("base", "", "view", "dashboard-fab", fabDashboardExtension);
    });
})(SUGAR.App);
