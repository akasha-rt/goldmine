/*eslint-disable*/
var mod_select_changed = function () {
    //choose between dashboards and filters
    if (this.value == "Filters") {
        $("#s_dashboards").select2("destroy");
        $("#s_filters").show();
        $("#s_dashboards").hide();
        $("#s_filters").select2();
        $("#s_filters")
            .val(null)
            .trigger("change");
    } else {
        $("#s_filters").select2("destroy");
        $("#s_filters").hide();
        $("#s_dashboards").show();
        $("#s_dashboards").select2();
        $("#s_dashboards")
            .val(null)
            .trigger("change");
    }
};

var populate_for_delete = function () {
    //set the active dropdown
    $("#s_filters").hide();

    //get the dashboards and the filters
    $.ajax({
        url: "index.php?module=Users&action=getDashboardsAndFilters&to_pdf=1",
        dataType: "json"
    }).done(function (data) {
        var dashboards = data["dashboards"];
        var filters = data["filters"];

        var dashboard_keys = Object.keys(dashboards).sort();
        var filter_keys = Object.keys(filters).sort();

        for (var it = 0; it < dashboard_keys.length; it++) {
            var module = dashboard_keys[it];
            var dashs = dashboards[module];

            var opt_group_child = document.createElement("optgroup");
            opt_group_child.setAttribute("label", module);
            for (var dashs_it = 0; dashs_it < dashs.length; dashs_it++) {
                var dashboard_name = dashs[dashs_it];
                var node = document.createElement("option");
                node.text = dashboard_name;
                opt_group_child.appendChild(node);
            }
            document.getElementById("s_dashboards").appendChild(opt_group_child);
        }

        for (var it = 0; it < filter_keys.length; it++) {
            var module = filter_keys[it];
            var fils = filters[module];

            var opt_group_child = document.createElement("optgroup");
            opt_group_child.setAttribute("label", module);
            for (var fils_it = 0; fils_it < fils.length; fils_it++) {
                var filter_name = fils[fils_it];
                var node = document.createElement("option");
                node.text = filter_name;
                opt_group_child.appendChild(node);
            }
            document.getElementById("s_filters").appendChild(opt_group_child);
        }

        $("#s_dashboards").select2();
    });
};
