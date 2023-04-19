({
    /*eslint-disable*/
    events: {
        "click [name=cancel_button]": "cancelClicked",
        "click [name=ok_button]": "okClicked",
        "click [name=appendCheckbox]": "appendCurrentDateClicked",
        "click [name=prependCheckbox]": "prependCurrentDateClicked",
        "click [name=createUniqueDrillDownFiltersCheckbox]": "createUniqueDrillDownFiltersClicked",
        "click [name=createDrillDownFilterTemplatesCheckbox]": "createDrillDownFilterTemplatesCheckboxClicked",
    },

    initialize: function (options) {
        var initResult = this._super("initialize", arguments);

        this.dashboardId = this.context.get("dashboard_id");

        var responseData = function (data) {
            var users = data.users;
            var teams = data.teams;
            var roles = data.roles;

            $.each(
                users,
                function (index, value) {
                    this.$el.find(".users_select").append("<option value=" + index + ">" + value + "</option>");
                }.bind(this)
            );
            $.each(
                teams,
                function (index, value) {
                    if (index != "1") {
                        this.$el.find(".teams_select").append("<option value=" + index + ">" + value + "</option>");
                    }
                }.bind(this)
            );
            $.each(
                roles,
                function (index, value) {
                    if (index != "1") {
                        this.$el.find(".roles_select").append("<option value=" + index + ">" + value + "</option>");
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
        this.checkDrillDownVersionInstalled();

        return renderResult;
    },

    checkDrillDownVersionInstalled: function () {
        var method = "read";
        var apiUrl = app.api.buildURL("getDrillDownVersionInstalled");
        var options = {
            skipMetadataHash: true
        };

        var responseData = {
            success: function appendData(data) {
                this.removeCopyDrillDownOptions(data);
            }.bind(this)
        };

        app.api.call(method, apiUrl, null, responseData, options);
    },

    removeCopyDrillDownOptions: function (data) {
        if (data < 9) {
            if (this.$el.find("[data-type='createUniqueDrillDownFilters']")) {
                this.$el.find("[data-type='createUniqueDrillDownFilters']").remove(); 
            }
    
            if (this.$el.find("[data-type='createDrillDownFilterTemplatesCheckbox']")) {
                this.$el.find("[data-type='createDrillDownFilterTemplatesCheckbox']").remove();
            }
        }
    },

    cancelClicked: function () {
        app.drawer.close();
    },

    okClicked: function () {
        this.users = $(this.$el.find(".users_select")[1]).val();
        this.appendTextName = this.$el.find(".appendTextName").val();
        this.prependTextName = this.$el.find(".prependTextName").val();
        
        if (_.isUndefined(this.model.get("createUniqueDrillDownFiltersCheckbox")) === false
            || this.$el.find("[name='createUniqueDrillDownFiltersCheckbox']").val() === "on"
            ) {
            this.createUniqueDrillDownFilters = true;
        } else{
            this.createUniqueDrillDownFilters = false;
        }

        if (this.model.get("createUniqueDrillDownFiltersCheckbox") === false) {
            this.createUniqueDrillDownFilters = false;
        }
        
        if (_.isUndefined(this.model.get("createDrillDownFilterTemplatesCheckbox")) === false
            || this.$el.find("[name='createDrillDownFilterTemplatesCheckbox']").val() === "on"
          ) {
            this.createDrillDownFilterTemplates =   true;
        } else {
            this.createDrillDownFilterTemplates = false;
        }

        if (this.model.get("createDrillDownFilterTemplatesCheckbox")  === false) {
            this.createDrillDownFilterTemplates = false;
        }

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

            var callbackCopyDashboard = function (data) {
                app.drawer.close();
                app.alert.show("info-message", {
                    level: "info",
                    messages: "Dashboard copied!",
                    autoClose: true
                });
            }.bind(this);

            Array.prototype.remove = function () {
                var what,
                    a = arguments,
                    L = a.length,
                    ax;
                while (L && this.length) {
                    what = a[--L];
                    while ((ax = this.indexOf(what)) !== -1) {
                        this.splice(ax, 1);
                    }
                }
                return this;
            };

            if (this.users.length > 0) {
                this.users = this.users.remove(app.user.id);
                app.api.call(
                    "update",
                    "rest/v10/CopyDashboard/" + this.dashboardId, {
                        users: this.arrayUnique(this.users),
                        appendTextName:  this.appendTextName,
                        prependTextName: this.prependTextName,
                        createUniqueDrillDownFilters: this.createUniqueDrillDownFilters,
                        createDrillDownFilterTemplates: this.createDrillDownFilterTemplates
                    }, {
                        success: callbackCopyDashboard
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


        app.api.call("create", app.api.buildURL("GetUsersFromRolesAndTeamsSelection"), {
            data: [teams, roles]
        }, {
            success: callbackRolesAndTeams
        });
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

    createDrillDownFilterTemplatesCheckboxClicked: function (event) {
        var eventName = event.currentTarget.name;
        var eventValue = event.currentTarget.checked;

        if (this.model instanceof app.data.beanModel === true) {
            this.model.set(eventName, eventValue);
        }
    },

    createUniqueDrillDownFiltersClicked: function (event) {
        var eventName = event.currentTarget.name;
        var eventValue = event.currentTarget.checked;

        if (this.model instanceof app.data.beanModel === true) {
            this.model.set(eventName, eventValue);
        }
    },

    arrayUnique: function (a) {
        return a.reduce(function (p, c) {
            if (p.indexOf(c) < 0) p.push(c);
            return p;
        }, []);
    }
});