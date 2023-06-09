(function afterLoginFunctionality(app) {
    app.events.on("router:init", function loginFilterOpps() {
        if (!window.messageDissmised) {
            var method = "read";
            var apiUrl = app.api.buildURL("getControlTimeUsers");
            var options = {
                skipMetadataHash: true
            };

            var responseData = {
                success: function appendData(data) {
                    if (data === true) {
                        SUGAR.App.logout({
                            complete: function () {
                                SUGAR.App.router.navigate("#");

                                SUGAR.App.controller.loadView({
                                    module    : "Login",
                                    layout    : "logout",
                                    skipFetch : true,
                                    create    : true
                                });
                            },
                            success: function (data) {
                                App.events.trigger("app:logout:success", data);
                            },
                        }, 1);

                        var preventAlertMessage = App.lang.get("LBL_ALERT_PREVENT_USERS_LOGIN_MESSAGE");

                        app.alert.show("message-id", {
                            level     : "error",
                            messages  : preventAlertMessage,
                            autoClose : false,
                        });
                    }
                }.bind(this)
            };

            app.api.call(method, apiUrl, null, responseData, options);
        }
    });
})(SUGAR.App);
