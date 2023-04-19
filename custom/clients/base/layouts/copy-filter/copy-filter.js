({
    /*eslint-disable*/
    events: {
        "click [name=cancel_button]": "cancelClicked",
        "click [name=ok_button]": "okClicked",
        "click [name=appendCheckbox]": "appendCurrentDateClicked",
        "click [name=prependCheckbox]": "prependCurrentDateClicked"
    },

    initialize: function (options) {
        var initResult = this._super("initialize", arguments);

        this.filterId = this.context.get("filter_id");

        var responseData = function (data) {
            var users = data.users;
            var teams = data.teams;
            var roles = data.roles;

            $.each(
                users,
                function (index, value) {
                    this.$el
                        .find(".users_select")
                        .append(
                            "<option value=" + index + ">" + value + "</option>"
                        );
                }.bind(this)
            );

            $.each(
                teams,
                function (index, value) {
                    if (index != "1") {
                        this.$el
                            .find(".teams_select")
                            .append(
                                "<option value=" +
                                index +
                                ">" +
                                value +
                                "</option>"
                            );
                    }
                }.bind(this)
            );

            $.each(
                roles,
                function (index, value) {
                    if (index != "1") {
                        this.$el
                            .find(".roles_select")
                            .append(
                                "<option value=" +
                                index +
                                ">" +
                                value +
                                "</option>"
                            );
                    }
                }.bind(this)
            );

            this.$el.find(".users_select").select2();
            this.$el.find(".teams_select").select2();
            this.$el.find(".roles_select").select2();

        }.bind(this);

        app.api.call("read", app.api.buildURL("GetUsersRolesAndTeams"), null, {
            success: responseData
        });

        return initResult;
    },

    render: function () {
        var renderResult = this._super("render");

        this.$el.find("[name=appendTextName]").hide();
        this.$el.find("[name=prependTextName]").hide();

        return renderResult;
    },

    cancelClicked: function () {
        app.drawer.close();
    },

    okClicked: function () {
        this.users = $(this.$el.find(".users_select")[1]).val();
        this.appendTextName = this.$el.find(".appendTextName").val();
        this.prependTextName = this.$el.find(".prependTextName").val();

        var teams = $(this.$el.find(".teams_select")[1]).val();
        var roles = $(this.$el.find(".roles_select")[1]).val();

        if (this.users == null) this.users = [];

        var callbackRolesAndTeams = function (data) {
            $.each(
                data,
                function (index, value) {
                    this.users.push(value);
                }.bind(this)
            );

            var callbackCopyFilter = function (data) {
                app.drawer.close();
                app.alert.show("info-message", {
                    level: "info",
                    messages: "Filter copied!",
                    autoClose: true
                });
            }.bind(this);

            if (this.users.length > 0) {
                app.api.call(
                    "update",
                    "rest/v10/CopyFilter/" + this.filterId, {
                        users: this.arrayUnique(this.users),
                        appendTextName: this.appendTextName,
                        prependTextName: this.prependTextName
                    }, {
                        success: callbackCopyFilter
                    }
                );
            } else if (this.users.length == 0) {
                app.alert.show("error-message", {
                    level: "error",
                    messages: "You should select at least one user, role or team.",
                    autoClose: true
                });
            }
        }.bind(this);

        app.api.call(
            "create",
            app.api.buildURL("GetUsersFromRolesAndTeamsSelection"), {
                data: [teams, roles]
            }, {
                success: callbackRolesAndTeams
            }
        );
    },

    appendCurrentDateClicked: function (event) {
        if (event.currentTarget.checked === true) {
            this.$el.find("[name=appendTextName]").show();
        } else {
            this.$el.find("[name=appendTextName]").hide();
        }
    },

    prependCurrentDateClicked: function (event) {
        if (event.currentTarget.checked === true) {
            this.$el.find("[name=prependTextName]").show();
        } else {
            this.$el.find("[name=prependTextName]").hide();
        }
    },

    arrayUnique: function (a) {
        return a.reduce(function (p, c) {
            if (p.indexOf(c) < 0) p.push(c);
            return p;
        }, []);
    }
});