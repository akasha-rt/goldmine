/* global SUGAR, App */
/*eslint-disable*/
(function (app) {
    app.events.on("app:sync:complete", function wUserUtilsAddCopyDashboard() {
        if (!app.view.views.BaseFilterActionsView) {
            app.view.declareComponent("view", "filter-actions", "", undefined, false, "base");
        }

        var filterActionsView = "BaseFilterActionsView";
        if (app.view.views.BaseCustomFilterActionsView) {
            filterActionsView = "BaseCustomFilterActionsView";
        }

        if (app.view.views[filterActionsView].wOverwritten_by_wUserUtils === true) {
            return true;
        }

        app.view.views[filterActionsView] = app.view.views[filterActionsView].extend({
            wOverwritten_by_wUserUtils: true,

            initialize: function (options) {
                this.events = this.events || {};
                this.events["click a.copy_filter"] = "copy_filter";

                return this._super("initialize", arguments);
            },

            copy_filter: function () {
                var filter_id = this.context.editingFilter.id;
                app.drawer.open({
                    layout: "copy-filter",
                    context: {
                        filter_id: filter_id
                    }
                });
            }
        });

        if (!app.view.views.BaseFilterFilterDropdownView) {
            app.view.declareComponent("view", "filter-filter-dropdown", "", undefined, false, "base");
        }

        var filterfilterDropDownView = "BaseFilterFilterDropdownView";
        if (app.view.views.BaseCustomFilterFilterDropdownView) {
            filterfilterDropDownView = "BaseCustomFilterFilterDropdownView";
        }

        if (app.view.views[filterfilterDropDownView].wOverwritten_by_wUserUtils === true) {
            return true;
        }

        app.view.views[filterfilterDropDownView] = app.view.views[filterfilterDropDownView].extend({
            wOverwritten_by_wUserUtils: true,
            handleSelect: function (id) {
                this.wToggleEnableOnCopyFilterButton();
                this.filterNode.select2("val", id, true);
            },

            formatSelection: function (item) {
                this.wToggleEnableOnCopyFilterButton();

                var extendFormatSelection = this._super("formatSelection", arguments);

                return extendFormatSelection;
            },

            wToggleEnableOnCopyFilterButton: function () {
                if (this.filterNode.val() != "create") {
                    this.$el
                        .parents()
                        .find('[class="search-filter"]')
                        .find("a.dropdown-toggle")
                        .removeClass("disabled");
                } else {
                    this.$el
                        .parents()
                        .find('[class="search-filter"]')
                        .find("a.dropdown-toggle")
                        .addClass("disabled");
                }
            }
        });

        var versionCharCount = 4;
        var version79Int = 79;

        if(App.metadata.getServerInfo().version){
            var currentSugarVersion = App.metadata.getServerInfo().version.slice(0, versionCharCount);
            var currentSugarVersionInt = parseInt(currentSugarVersion.replace(".", ""));
        }
   

        var dashboardHeaderPaneComponent = "DashboardHeaderpaneView";

        if (currentSugarVersionInt >= version79Int) {
            dashboardHeaderPaneComponent = "DashboardsDashboardHeaderpaneView";
        }

        if (!app.view.views["Base" + dashboardHeaderPaneComponent]) {
            app.view.declareComponent("view", "dashboard-headerpane", "", undefined, false, "base");
        }

        var dashboardHeaderPaneView = "Base" + dashboardHeaderPaneComponent;
        if (app.view.views["BaseDashboardsCustomDashboardHeaderpaneView"]) {
            dashboardHeaderPaneView = "BaseDashboardsCustomDashboardHeaderpaneView";
        }

        if (app.view.views[dashboardHeaderPaneView].wOverwritten_by_wUserUtils === true) {
            return true;
        }

        app.view.views[dashboardHeaderPaneView] = app.view.views[dashboardHeaderPaneView].extend({
            wOverwritten_by_wUserUtils: true,
            initialize: function (options) {
                this.events = this.events || {};

                var superResult = this._super("initialize", arguments);
                var copyButtonExists = false;
                _.each(this.meta.buttons, function checkExistingButtons(button) {
                    if (!_.isUndefined(button.type) && button.type == 'actiondropdown') {
                        _.each(button.buttons, function checkActionDropdownButtons(actionButton) {
                            if (!_.isUndefined(actionButton.name) && actionButton.name == 'copy_to_user') {
                                copyButtonExists = true;
                                return;
                            }
                        });
                        return;
                    }
                });
                for (var i = 0; i < this.meta.buttons.length; i++) {
                    if (
                        this.meta.buttons[i].type == "actiondropdown" &&
                        this.meta.buttons[i].showOn == "view" &&
                        copyButtonExists == false
                    ) {
                        this.meta.buttons[i].buttons.push({
                            label: "Copy Dashboard",
                            name: "copy_to_user",
                            type: "rowaction"
                        });
                        this.events["click [name=copy_to_user]"] = "copyToUserClicked";
                    }
                }

                return superResult;
            },

            copyToUserClicked: function () {
                var dashboard_id = this.model.get("id");
                app.drawer.open({
                    layout: "copy-dashboard",
                    context: {
                        dashboard_id: dashboard_id
                    }
                });
            }
        });
    });
})(SUGAR.App);