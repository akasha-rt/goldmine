({
    events: {
        "click #saveUsersLoginTimes" : "saveUsersLoginTimes",
        "click button[name=cancel]"  : "redirectToHomePage",
    },

    initialize: function (options) {
        var initResult = this._super("initialize", arguments);

        this.getUsersData();
        this.getSavedUsersData();

        return initResult;
    },

    render: function () {
        var renderResult = this._super("render");

        this.initializeDatePickers();

        return renderResult;
    },

    getUsersData: function(){
        var method = "read";
        var apiUrl = app.api.buildURL("GetUsersRolesAndTeams");
        var options = {
            skipMetadataHash: true
        };

        var responseData = {
            success: function appendData(data) {
                $.each(
                    data.users,
                    function appendData(index, value) {
                        this.$el.find(".users_select").append("<option value=" + index + ">" + value + "</option>");
                    }.bind(this)
                );
    
                this.$el.find(".users_select").select2();
            }.bind(this)
        };

        app.api.call(method, apiUrl, null, responseData, options);
    },

    getSavedUsersData: function(){
        var method = "read";
        var apiUrl = app.api.buildURL("getControlUsersLoginTimes");
        var options = {
            skipMetadataHash: true
        };

        var responseData = {
            success: function appendData(data) {
                this.displaySavedConfiguration(data);
            }.bind(this)
        };

        app.api.call(method, apiUrl, null, responseData, options);
    },

    displaySavedConfiguration: function (data) {
        var container = this.$el.find("#presetInfoContainer");
 
        var fieldsContainer = this.$el.find("#panelCollapserBody");
        fieldsContainer.empty();

        if (_.isEmpty(data) === true){
            container.hide();
        } else {
            container.show();
            _.each(data, function addField(userData) {
                var userFirstName = userData["first_name"] ? userData["first_name"] : "";
                var userLastName = userData["last_name"] ? userData["last_name"] : "";
                var userName = userFirstName + userLastName;
                var userStartDate = userData["startDate"];
                var userEndDate = userData["endDate"];
                var userId = userData["id"];
                var removeFieldButton = userData["id"];
    
                var baseFieldHtml =
                                "\
                                    <tr id=\"#" +
                                    userId +
                                "\">\
                                      <td  style=\"text-align:center;width:365px;\">\
                                        <span>" +
                                        userName +
                                "</span>\
                                      </td>\
                                      <td  style=\"text-align:center;width:365px;\">\
                                        <span>" +
                                        userStartDate +
                                "</span>\
                                      </td>\
                                      </td>\
                                      <td  style=\"text-align:center;width:365px;\">\
                                        <span>" +
                                        userEndDate +
                                "</span>\
                                      </td>\
                                      <td style=\"text-align:center;width:365px;\">\
                                      <a class=\"btn removeFieldInfo\" name=\"" +
                                         removeFieldButton + "\"   id =\"removeFieldInfo\" >\
                                        <i class=\"fa fa-times\"></i>\
                                      </a>\
                                    </td>\
                                    </tr>";
        
                fieldsContainer.append(baseFieldHtml);    
            });
        }

        this.$el.find(".removeFieldInfo").click(this.removeFieldInfo.bind(this));
    },

    removeFieldInfo: function (event, id) {
        var removeUser = true;
        var userId = event === false ? id : event.currentTarget.getAttribute("name");
      
        this.$el.find("[id=#" + userId + "]").remove();
        var controlUsersTimesData = {};

        controlUsersTimesData[userId] = {
            controlUserLoginDays : false,
            startDate            : "",
            endDate              : "",
        };
      
        this.saveConfigurations(controlUsersTimesData, removeUser);
    },

    initializeDatePickers: function () {
        this.$el.find("#tp1").timepicker();
        this.$el.find("#tp2").timepicker();
    },

    saveUsersLoginTimes: function () {
        var controlUsersTimesData = {};

        var users = $(this.$el.find(".users_select")[1]).val();
        var startDateTimeValue = this.$el.find("#tp1").val();
        var endDateTimeValue = this.$el.find("#tp2").val();
        var controlUserLoginDays = "";

        if (this.$el.find("[name=controlUserLoginDays]").prop("checked") === true){
            controlUserLoginDays = true;
        } else {
            controlUserLoginDays = false;
        }

        if (users.length > 0 && controlUserLoginDays === true){
            _.each(users, function pushUsersSavedData(userId){
                controlUsersTimesData[userId] = {
                    controlUserLoginDays : controlUserLoginDays,
                    startDate            : startDateTimeValue,
                    endDate              : endDateTimeValue,
                };
            });

            if (_.isEmpty(startDateTimeValue) === true
            || _.isEmpty(endDateTimeValue) === true 
            ) {
                this.$el.find("#tp1").addClass("error");
                this.$el.find("#tp2").addClass("error");

                this.errorMessage();
            } else {
                this.$el.find("#tp1").removeClass("error");
                this.$el.find("#tp2").removeClass("error");

                this.saveConfigurations(controlUsersTimesData, false);
            }
        } else {
            var preventAlertMessage = App.lang.get("LBL_ALERT_PREVENT_MESSAGE");

            app.alert.show("message-id", {
                level     : "error",
                messages  : preventAlertMessage,
                autoClose : true
            });
        }
    },

    saveConfigurations: function (controlUsersTimesData, removeUser) {
        var method = "create";
        var apiURL = App.api.buildURL("saveControlUsersLoginTimes");
    
        var data = {
            data: controlUsersTimesData
        };

        var options = {
            skipMetadataHash: true
        };

        var alertSuccessMessage = App.lang.get("LBL_ALERT_SUCCESS_MESSAGE");
        var removeUserConfMessage = App.lang.get("LBL_ALERT_REMOVE_USER_MESSAGE");
        
        var callbacks = {
            success: function saveDataSyncConfiguration() {
                if (removeUser === true){
                    app.alert.show("message-id", {
                        level     : "success",
                        messages  : removeUserConfMessage,
                        autoClose : true
                    });
                } else {
                    this.getSavedUsersData();

                    app.alert.show("message-id", {
                        level     : "success",
                        messages  : alertSuccessMessage,
                        autoClose : true
                    });
                }
            }.bind(this)
        };

        App.api.call(method, apiURL, data, callbacks, options);
    },

    errorMessage: function () {
        var alertErrorMessage = App.lang.get("LBL_ALERT_ERROR_MESSAGE");

        app.alert.show("message-id", {
            level     : "error",
            messages  : alertErrorMessage,
            autoClose : true
        });
    },

    redirectToHomePage: function() {
        window.location = "#bwc/index.php?module=Administration&action=index";
    }
});