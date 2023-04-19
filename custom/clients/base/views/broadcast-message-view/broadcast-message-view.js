({
    /*eslint-disable*/
    events: {
        "click #preview_button": "previewMessage",
        "click #schedule_button": "scheduleMessage",
        "click #stop_broadcast": "stopBroadcast",
        "click button[name=cancel]":    "redirectToHomePage",
    },

    intialize: function (options) {
        this._super("initialize", arguments);
    },

    stopBroadcast: function () {
        localStorage.removeItem("broadcast_scheduled");
        App.bwc.login();
        $.ajax("index.php?entryPoint=wUserUtilsEntryPoint").done(
            function (res) {
                var ajaxCallResponse = JSON.parse(res);
                if (ajaxCallResponse.value && typeof ajaxCallResponse.value === "string") {
                    var options = JSON.parse(ajaxCallResponse.value);
                    options.date_start_date = "";
                    options.date_start_time = "";
                    options.date_end_date = "";
                    options.date_end_time = "";

                    this.saveMessage(options);

                    this.$el.find("#stop_broadcast").attr("disabled", "disabled");
                    $("#dp1").val("");
                    $("#dp2").val("");
                    $("#tp1").val("");
                    $("#tp2").val("");
                }
            }.bind(this)
        );
    },

    /**
     * Function to load the broadcast message view with saved data
     * @message (Object) - The broadcast message properties
     */
    loadMessage: function (message) {
        if (message.success) {
            var encodedData = message.value;
            var values = JSON.parse(encodedData);

            this.$el.find("#background_color").val(values.background_color);
            this.$el.find("#description").val(values.description);
            this.$el.find("#text_color").val(values.text_color);

            this.$el.find("#dp1").val(values.date_start_date);
            this.$el.find("#tp1").val(values.date_start_time);
            this.$el.find("#dp2").val(values.date_end_date);
            this.$el.find("#tp2").val(values.date_end_time);
        }
    },

    initializeDatePickers: function () {
        this.$el.find("#dp1").datepicker();
        this.$el.find("#tp1").timepicker();
        this.$el.find("#dp2").datepicker();
        this.$el.find("#tp2").timepicker();

        if (this.$el.find("#background_color").val() !== "") {
            var background_color = this.$el.find("#background_color").val();
        } else {
            this.$el.find("#background_color")[0].value = "#000000";
        }

        if (this.$el.find("#text_color").val() !== "") {
            var text_color = this.$el.find("#text_color").val();
        } else {
            this.$el.find("#text_color")[0].value = "#ff0000";
        }

        var bgColor = localStorage.getItem("BackgroundColor") || "#00000";
        var txtColor = localStorage.getItem("TextColor") || "#ff0000";

        if (bgColor !== "") {
            this.$el.find("#background-color").data("color", bgColor);
            this.$el.find("#background-color").colorpicker();
            this.$el.find("#background-color_icon").css("background", bgColor);
        }

        if (txtColor !== "") {
            this.$el.find("#text-color").data("color", txtColor);
            this.$el.find("#text-color").colorpicker();
            this.$el.find("#text-color_icon").css("background", txtColor);
        }
    },

    previewMessage: function () {
        if (this.$el.find("#background_color").val() !== "") {
            var background_color = this.$el.find("#background_color").val();
        } else {
            var background_color = "#000000";
        }

        var description = this.$el.find("#description").val();

        if (this.$el.find("#text_color").val() !== "") {
            var text_color = this.$el.find("#text_color").val();
        } else {
            var text_color = "#ff0000";
        }

        var navbar_el = $(".navbar-fixed-top");
        if (navbar_el.find("#broadcast-message")) {
            var broadcast_message = navbar_el.find("#broadcast-message");
            broadcast_message.remove();
        }
        navbar_el.prepend(
            "<div id='broadcast-message' style='color:" +
            text_color +
            "; background-color:" +
            background_color +
            ";font-weight:bold;overflow-y: auto;min-height: 40px; max-height: 40px;padding-top: 5px; padding-left: 10px;'>" +
            description +
            "<a class='btn' onclick='dismissBroadcastMessage()' style= 'float:right;margin-right: 10px;margin-top: 3px;'><i style='color:black' class='fa fa-times'></i></a></div>"
        );
        $("body").addClass("broadcast");
    },

    scheduleMessage: function () {
        localStorage.setItem("broadcast_scheduled", true);
        if (this.$el.find("#background_color").val() !== "") {
            var background_color = this.$el.find("#background_color").val();
        } else {
            var background_color = "#000000";
        }

        var description = this.$el.find("#description").val();
        if (this.$el.find("#text_color").val() !== "") {
            var text_color = this.$el.find("#text_color").val();
        } else {
            var text_color = "#ff0000";
        }

        localStorage.setItem("BackgroundColor", background_color);
        localStorage.setItem("TextColor", text_color);

        var date_start_date = this.$el.find("#dp1").val();
        var date_start_time = this.$el.find("#tp1").val();
        var date_end_date = this.$el.find("#dp2").val();
        var date_end_time = this.$el.find("#tp2").val();
        var convertStartDate = Date.parse(date_start_date);
        var convertEndDate = Date.parse(date_end_date);

        var broadcast_options = {
            background_color: background_color,
            description: description,
            text_color: text_color,
            date_start_date: date_start_date,
            date_start_time: date_start_time,
            date_end_date: date_end_date,
            date_end_time: date_end_time
        };

        if (
            date_start_date === "" ||
            date_end_date === "" ||
            date_start_time === "" ||
            date_end_time === "" ||
            convertStartDate > convertEndDate
        ) {
            this.$el.find("#dp1").addClass("error");
            this.$el.find("#tp1").addClass("error");
            this.$el.find("#tp2").addClass("error");
            this.$el.find("#dp2").addClass("error");
            this.errorMessage();
        } else {
            this.$el.find("#dp1").removeClass("error");
            this.$el.find("#tp1").removeClass("error");
            this.$el.find("#tp2").removeClass("error");
            this.$el.find("#dp2").removeClass("error");
            this.$el.find("#stop_broadcast").removeAttr("disabled");
            this.saveMessage(broadcast_options);
            message_dissmised = false;
        }
    },

    saveMessage: function (options) {
        app.api.call(
            "create",
            "rest/v10/BroadcastMessage",
            { data: options },
            { success: this.messageSaved.bind(this) }
        );
    },

    getBroadcastData: function () {
        $.ajax("index.php?entryPoint=wUserUtilsEntryPoint").done(
            function (res) {
                this.loadMessage(JSON.parse(res));
            }.bind(this)
        );
    },

    triggerBroadcastMessage: function () {
        App.bwc.login();
        $.ajax("index.php?entryPoint=wUserUtilsEntryPoint").done(function (res) {
            if (res) {
                var ajaxCallResponse;
                try {
                    ajaxCallResponse = JSON.parse(res);

                    if (!ajaxCallResponse.shouldDisplayBroadcast) {
                        var navbar_el = $(".navbar-fixed-top");
                        removeBroadcastMessage(navbar_el);
                        removeBroadcastMessageFromCache();
                        return;
                    }
                    if (ajaxCallResponse.value && typeof ajaxCallResponse.value === "string") {
                        var data = JSON.parse(ajaxCallResponse.value);
                        var navbar_el = $(".navbar-fixed-top");
                        if (!message_dissmised) {
                            addBroadcastMessage(navbar_el, data);
                        }
                    }
                } catch (e) {
                    console.log("JSON Parse error...");
                }
            }
        });
    },

    messageSaved: function () {
        app.alert.show("message-id", {
            level: "success",
            messages: "Broadcast message saved!",
            autoClose: true
        });

        this.triggerBroadcastMessage();
    },

    errorMessage: function () {
        app.alert.show("message-id", {
            level: "error",
            messages: "Error! Please resolve any errors before proceeding.",
            autoClose: true
        });
    },

    /**
     *Show the Stop button only when a message was scheduled
     */
    showStopButton: function () {
        if (_.isNull(localStorage.getItem("broadcast_scheduled")) === false) {
            this.$el.find("#stop_broadcast").removeAttr("disabled");
        }
    },

    render: function () {
        this._super("render");
        this.showStopButton();
        this.initializeDatePickers();
        this.getBroadcastData();
    },

    redirectToHomePage: function() {
        window.location = "#bwc/index.php?module=Administration&action=index";
    }
});

