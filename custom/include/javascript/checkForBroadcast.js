/*eslint-disable*/
(function (app) {
    window.message_dissmised = false;

    $(document).ajaxComplete(function (event, xhr, settings) {
        try {
            var navbar_el = $(".navbar-fixed-top");
            var userUtilsBroadcastCookie = "";
         
            if(_.isUndefined($.cookie) === true){
                 userUtilsBroadcastCookie = getCookie("UserUtils-Broadcast");
            }else{
                 userUtilsBroadcastCookie = $.cookie('UserUtils-Broadcast');
            }

            var data = decodeURIComponent(userUtilsBroadcastCookie);
            data = JSON.parse(data);
   
            if (data) {
                if (typeof data === 'object' && !window.message_dissmised) {
                    addBroadcastMessage(navbar_el, data);
                } else {
                    removeBroadcastMessage(navbar_el);
                }
            } else {
                removeBroadcastMessage(navbar_el);
            }
        } catch (e) {

        }
    });

    $("head").append(
        '<link rel="stylesheet" href="custom/themes/broadcast.css" type="text/css" />'
    );

    getCookie = function(name, value, options) {
        if (typeof value != 'undefined') {
            options = options || {};
            if (value === null) {
                value = '';
                options.expires = -1;
            }
            var expires = '';
            if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
                var date;
                if (typeof options.expires == 'number') {
                    date = new Date();
                    date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
                } else {
                    date = options.expires;
                }
                expires = '; expires=' + date.toUTCString();
            }
            var path = options.path ? '; path=' + (options.path) : '';
            var domain = options.domain ? '; domain=' + (options.domain) : '';
            var secure = options.secure ? '; secure' : '';
            document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
        } else {
            var cookieValue = null;
            if (document.cookie && document.cookie != '') {
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = jQuery.trim(cookies[i]);
                    if (cookie.substring(0, name.length + 1) == (name + '=')) {
                        cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                        break;
                    }
                }
            }
            return cookieValue;
        }
    };

    removeBroadcastMessage = function (navbar_el) {
        if (navbar_el.find("#broadcast-message")) {
            var broadcast_message_el = navbar_el.find("#broadcast-message");
            broadcast_message_el.remove();
            $("body").removeClass("broadcast");
            localStorage.removeItem("broadcast_scheduled");
        }
    };

    addBroadcastMessage = function (navbar_el, options) {
        removeBroadcastMessage(navbar_el);
        window.message_dissmised = false;
        navbar_el.prepend(
            "<div id='broadcast-message' style='color:" +
            options.text_color +
            "; background-color:" +
            options.background_color +
            ";font-weight:bold;overflow-y: auto;min-height: 40px; max-height: 40px;padding-top: 5px; padding-left: 10px;'>" +
            options.description.replace(/\+/g, " ") +
            "<a class='btn' onclick='dismissBroadcastMessage()' style= 'float:right;margin-right: 10px;margin-top: 3px;'><i style='color:black' class='fa fa-times'></i></a></div>"
        );
        $("body").addClass("broadcast");
        localStorage.setItem("broadcast_scheduled", true);

    };

    dismissBroadcastMessage = function () {
        var navbar_el = $(".navbar-fixed-top");
        removeBroadcastMessage(navbar_el);
        window.message_dissmised = true;
    };

})(SUGAR.App);

