/* global _, SUGAR, App */
/*eslint-disable */
(function (app) {
    var deleteCookie = function (name) {
        document.cookie = name + "=; path = /; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    };
    var addPromisesScript = function () {
        window.promisesScriptAppended = $("script#wsuserutils-promises").length > 0;

        if (window.promisesScriptAppended !== true) {
            $("<script>")
                .appendTo("head")
                .attr({
                    id: "wsuserutils-promises",
                    type: "text/javascript",
                    src: "https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js",
                    async: true
                });

            window.promisesScriptAppended = true;
        }
    };

    addPromisesScript();

    app.events.on("app:start", function () {
        retrieveLoginAsAuth = function () {
            return new Promise(
                function (resolve, reject) {
                    var apiURL = App.api.buildURL("GetLoginAsAuth");
                    var method = "read";
                    var data = {};
                    var options = {
                        skipMetadataHash: true
                    };

                    var callbacks = {
                        success: function retrieveLoginAsAuth(result) {
                            resolve(result);
                        }.bind(this),
                        error: function (err) {
                            reject(err);
                        }
                    };

                    App.api.call(method, apiURL, data, callbacks, options);
                }.bind(this)
            );
        };
        retrieveLoginAsAuth().then(
            function (users) {
                window.allowedUsers = users;
            }.bind(this)
        );
    });

    app.events.on("app:init", function wUUOverwriteProfileActionsView() {
        if (!app.view.views.BaseProfileactionsView) {
            app.view.declareComponent("view", "profileactions", "", undefined, false, "base");
        }

        app.view.views.BaseNotificationsView.prototype._defaultOptions.limit = 10000;

        var profileActionsView = "BaseProfileactionsView";
        if (app.view.views.BaseCustomProfileactionsView) {
            profileActionsView = "BaseCustomProfileactionsView";
        }

        if (app.view.views[profileActionsView].wOverwritten_by_wUserUtils === true) {
            return true;
        }

        app.view.views[profileActionsView] = app.view.views[profileActionsView].extend({
            wOverwritten_by_wUserUtils: true,

            filterAvailableMenu: function (moduleMeta) {
                var result = this._super("filterAvailableMenu", arguments);

                if (window.allowedUsers) {
                    var objValues = Object.keys(window.allowedUsers).map(function (e) {
                        return window.allowedUsers[e];
                    });
                }

                if (
                    app.user.attributes.type === "admin" ||
                    (window.allowedUsers && objValues.indexOf(app.user.id) !== -1)
                ) {
                    var item = {};
                    item["acl_action"] = "view";
                    item["css_class"] = "loginas";
                    item["icon"] = "fa fa-sign-in";
                    item["route"] = "javascript:;";
                    item["submenu"] = "";
                    item["label"] = "Login As";
                    item["event"] = "loginas:click";

                    
                     result.splice(this.getLogOutButtonIndex(result), 0, item);
                }

                if (typeof this.wGetCookie("admin_id") !== "undefined" && this.wGetCookie("admin_id") != App.user.id) {
                    var login_button_index = result.lastIndexOf(
                        $.grep(result, function (button) {
                            return button.label == "Login As";
                        })[0]
                    );

                    if (login_button_index != -1) {
                        result.splice(login_button_index, 1);
                        login_button_index = -1;
                    }
                }

                if (typeof this.wGetCookie("admin_id") !== "undefined" && this.wGetCookie("admin_id") != App.user.id) {
                    var item = {};

                    item["acl_action"] = "view";
                    item["css_class"] = "loginback";
                    item["icon"] = "fa fa-sign-in";
                    item["route"] = "javascript:;";
                    item["submenu"] = "";
                    item["label"] = "Return to admin";

                    result.push(item);
                }

                return result;
            },

            getLogOutButtonIndex: function (result) {
                var logOutIndex = -1;
                
                for (var i = 0; i < result.length; i++) {
                   if(result[i].label === "LBL_LOGOUT"){
                    logOutIndex = i;
                   }
                }
                return logOutIndex;

            },

            loginas: function () {
                app.drawer.open(
                    {
                        layout: "selection-list",
                        context: {
                            module: "Users"
                        }
                    },
                    this.sudoUser.bind(this)
                );
            },

            sudoUser: function (user) {
                var original_access_token = localStorage.getItem("prod:SugarCRM:AuthAccessToken");
                var original_download_token = localStorage.getItem("prod:SugarCRM:DownloadToken");
                var original_refresh_token = localStorage.getItem("prod:SugarCRM:AuthRefreshToken");

                localStorage.setItem("original_access_token", original_access_token);
                localStorage.setItem("original_download_token", original_download_token);
                localStorage.setItem("original_refresh_token", original_refresh_token);

                user_id = user.id;
                this._sudo(user_id, "goto");
            },

            _sudo: function (user_id, type) {
                app.api.call("read", "rest/v10/getUserData/" + user_id + "/" + type, null, {
                    success: function (data) {
                        var takeSugarVersion = app.metadata.getServerInfo().version.slice(0, 3);
                        var keepAccesToken = "";
                        var refresAccessToken = ""
                        var downloadToken = ""

                        if (takeSugarVersion == "7.8") {
                            keepAccesToken = "'" + data.access_token + "'";
                            refresAccessToken = "'" + data.refresh_token + "'";
                            downloadToken = "'" + data.download_token + "'";
                        } else {
                            keepAccesToken = data.access_token;
                            refresAccessToken = data.refresh_token;
                            downloadToken = data.download_token;
                        }

                        localStorage.setItem("prod:SugarCRM:AuthAccessToken", keepAccesToken);
                        localStorage.setItem("prod:SugarCRM:AuthRefreshToken", refresAccessToken);

                        if (downloadToken) {
                            localStorage.setItem("prod:SugarCRM:DownloadToken", refresAccessToken);
                        }

                        app.router.navigate("#Home", { trigger: true });
                        App.bwc.login(null, function reloadSession() {
                            location.reload();
                        });
                    }
                });
            },

            returnToAdmin: function () {
                if (this.wGetCookie("admin_id") !== undefined && this.wGetCookie("admin_id") != App.user.id) {
                    this._sudo(this.wGetCookie("admin_id"), "goback");
                    localStorage.setItem(
                        "prod:SugarCRM:AuthAccessToken",
                        localStorage.getItem("original_access_token")
                    );
                    localStorage.setItem(
                        "prod:SugarCRM:DownloadToken",
                        localStorage.getItem("original_download_token")
                    );
                    localStorage.setItem(
                        "prod:SugarCRM:AuthRefreshToken",
                        localStorage.getItem("original_refresh_token")
                    );
                }
                app.router.navigate("#Home", { trigger: true });
                App.bwc.login(null, function reloadSession() {
                    location.reload();
                });

            },

            wGetCookie: function (name) {
                var value = "; " + document.cookie;
                var parts = value.split("; " + name + "=");
                if (parts.length == 2) {
                    return parts
                        .pop()
                        .split(";")
                        .shift();
                }
            },

            render: function () {
                this._super("render", arguments);

                this.$el.find(".loginas a").click(this.loginas.bind(this));
                this.$el.find(".loginback a").click(this.returnToAdmin.bind(this));
            },

            initialize: function (options) {
                this._super("initialize", [options]);
            },

            _renderHtml: function () {
                // FIXME check why the router is not loaded before all the other components are rendered
                if (!app.router || !app.api.isAuthenticated() || app.config.appStatus === "offline") {
                    return;
                }

                if (!_.isEmpty(this.meta)) {
                    this.menulist = this.filterAvailableMenu(app.utils.deepCopy(this.meta));
                }

                return this._super("_renderHtml", arguments);
            }
        });
    });

    app.events.on("app:logout", function () {
        deleteCookie("admin_id");
    });
})(SUGAR.App);