{literal}
<style>
.yui-navset .yui-content, .yui-navset .yui-navset-top .yui-content {
	overflow:hidden;
}
</style>
<link rel="stylesheet" type="text/css" href="include/javascript/select2/select2.css">
<link href="custom/modules/Administration/css/optional_style.css" rel="stylesheet" type="text/css" />
<!-- JavaScript Dependencies for Tabview: -->
<script src="custom/modules/Administration/javascript/yui/yahoo-dom-event.js"></script>
<script src="custom/modules/Administration/javascript/yui/element-min.js"></script>

<!-- OPTIONAL: Connection (required for dynamic loading of data) -->
<script src="custom/modules/Administration/javascript/yui/connection-min.js"></script>

<!-- Source file for TabView -->
<script src="custom/modules/Administration/javascript/yui/tabview-min.js"></script>
<script src="include/javascript/select2/select2.js"></script>
<script src="custom/modules/Administration/javascript/delete_script.js"></script>

<script type="text/javascript">
var exampleDigits = "123456789.000000";

// round parameter can be negative for decimal, precision has to be postive
function formatNumber(n, sep, dec, precision) {
    var majorDigits;
    var minorDigits;
    var formattedMajor = "";
    var formattedMinor = "";

    var nArray = n.split(".");
    majorDigits = nArray[0];
    if (nArray.length < 2) {
        minorDigits = 0;
    } else {
        minorDigits = nArray[1];
    }

    // handle grouping
    if (sep.length > 0) {
        var strlength = majorDigits.length;

        if (strlength > 3) {
            var offset = strlength % 3; // find how many to lead off by

            for (j = 0; j < offset; j++) {
                formattedMajor += majorDigits[j];
            }

            tic = 0;
            for (i = offset; i < strlength; i++) {
                if (tic % 3 == 0 && i != 0) formattedMajor += sep;

                formattedMajor += majorDigits.substr(i, 1);
                tic++;
            }
        }
    } else {
        formattedMajor = majorDigits; // no grouping marker
    }

    // handle decimal precision
    if (precision > 0) {
        for (i = 0; i < precision; i++) {
            if (minorDigits[i] != undefined) formattedMinor += minorDigits[i];
            else formattedMinor += "0";
        }
    } else {
        // we're just returning the major digits, no decimal marker
        dec = ""; // just in case
    }

    return formattedMajor + dec + formattedMinor;
}

function setSigDigits() {
    var sym = document.getElementById("symbol").value;
    var thou = document.getElementById("default_number_grouping_seperator").value;
    var dec = document.getElementById("default_decimal_seperator").value;
    var precision = document.getElementById("sigDigits").value;
    //umber(n, num_grp_sep, dec_sep, round, precision)
    var newNumber = sym + formatNumber(exampleDigits, thou, dec, precision, precision);
    document.getElementById("sigDigitsExample").value = newNumber;
}

var myTabs = new YAHOO.widget.TabView("wUserUtilsTabs");

jQuery(function($) {
    $("#wColumns").select2({placeholder: "Select columns"});
});

jQuery(function($) {
    $("#subpanel_modules").select2({placeholder: "Select subpanel modules"});
});

jQuery(function($) {
    $("#source_dashlets").select2({placeholder: "Select dashboards"});
});

jQuery(function($) {
    $("#modules_selection").select2({placeholder: "Select the modules you want to clone the dashlets on"});
});

jQuery(function($) {
    $("#modules_filters_selection").select2({placeholder:"Select the modules you want to clone the filters on"});
});

jQuery(function($) {
    $("#field_name_placement_val").select2();
});

jQuery(function($) {
    $("#source_filters").select2({placeholder: "Select  filters"});
});

jQuery(function($) {
    $("#show_password").on("click", function(e) {
        if (e.currentTarget.checked) {
            $("#password_field")[0].type = "text";
        } else {
            $("#password_field")[0].type = "password";
        }
    });
});

jQuery(function($) {
    $('[name="LoginAsUserAuth[]"]').select2();
});

jQuery(function($) {
    $('[name="ConvertGroupUsers[]"]').select2();
});

jQuery(function($) {
    $('[name="ConvertRegularUsers[]"]').select2();
});

jQuery(function($) {
    $('[name="LoginAsTeamsAuth[]"]').select2();
});

jQuery(function($) {
    $('[name="LoginAsRolesAuth[]"]').select2();
});

jQuery(function($) {
    $('[name="LoginAsRolesAuthRoles[]"]').select2();
});

</script>

<script>
window.onload = function() {
    $("[name='AddPermissions']").on("click", function() {
        var users = $('[name="LoginAsUserAuth[]"]').val();
        var teams = $('[name="LoginAsTeamsAuth[]"]').val();
        var roles = $('[name="LoginAsRolesAuthRoles[]"]').val();
        dataObj = { users: users, teams: teams, roles: roles };

        $.ajax({
            url: "index.php?module=Users&action=addPermissions&to_pdf=1",
            data: dataObj,
            type: "GET"
            //dataType: "json"
        }).done(function(data) {
            alert("Settings saved!");
        });
    });

    $(".error").remove();
    document.search_form.removeAttribute("action");
    document.search_form.setAttribute("onkeydown", "");
    var c = $(document.search_form)
        .find("#advanced_search_link")
        .attr("onclick");
    $(document.search_form)
        .find("#advanced_search_link")
        .attr(
            "onclick",
            c +
                "; var timer = window.setInterval(function(){if((($(document.search_form).find('[name=saved_search_name]')).length) > 0) {$(document.search_form).find('[name=saved_search_name]').closest('tr').remove(); $(document.search_form).find('.white-space').remove();clearInterval(timer)}}, 15)"
        );
    document.search_form.onsubmit = function(event) {
        var dataArray = $(this).serializeArray();
        dataArray = _.filter(dataArray, function(object) {
            return object.name != "action";
        });
        $.ajax({
            url: "index.php?module=Users&action=filter_users&to_pdf=1",
            data: dataArray,
            dataType: "json"
        }).done(function(data) {
            var options = "";
            _.each(data, function(obj, index) {
                options += "<option label='" + obj + "' value='" + index + "'>" + obj + "</option>";
            });
            $('[name="dest_users[]"]')
                .find("option")
                .remove()
                .end()
                .append(options);
        });
        event.preventDefault();
    };

    on_user_change($("[name=source_user]").val());
    $("#mod_select").on("change", mod_select_changed);
    populate_for_delete();
};
function on_user_change(s_user) {
    setSigDigits();

    $.ajax({
        url: "index.php?module=Users&action=getPreferences&user_id=" + s_user + "&to_pdf=1",
        dataType: "json"
    }).done(function(data) {
        $('[name="dateformat"]').val(data["datef"]);
        $('[name="timeformat"]').val(data["timef"]);
        $('[name="currency"]').val(data["currency"]);
        $('[name="timezone"]').val(data["timezone"]);

        if (typeof data["ut"] == "boolean") {
            $('[name="ut"]').prop("checked", !data["ut"]);
        } else {
            $('[name="ut"]').prop("checked", !parseInt(data["ut"]));
        }
        $('[name="default_currency_significant_digits"]').val(data["default_currency_significant_digits"]);
        $('[name="default_locale_name_format"]').val(data["default_locale_name_format"]);
        $('[name="dec_sep"]').val(data["dec_sep"]);
        $('[name="num_grp_sep"]').val(data["num_grp_sep"]);
        setSigDigits();
    });

    $.ajax({
        url: "index.php?module=Users&action=getColumns&user_id=" + s_user + "&to_pdf=1"
    }).done(function(data) {
        $("#wColumns")
            .empty()
            .append(data)
            .change();
    });

    $.ajax({
        url: "index.php?module=Users&action=getDashboards&user_id=" + s_user + "&to_pdf=1",
        dataType: "json"
    }).done(function(data) {
        var dashboards = data["dashboards"];
        var filters = data["filters"];
        var str = "";
        $("#source_dashlets")
            .empty()
            .change();
        $("#source_filters")
            .empty()
            .change();
        $.each(dashboards, function(i, item) {
            str = '<optgroup label="' + i + '">';

            $.map(item, function(val, index) {
                return val + "@@" + index;
            })
                .sort()
                .forEach(function(item) {
                    var item_description = item.split("@@");
                    var id = item_description[1];
                    var name = item_description[0];
                    str += "<option value=" + id + ">" + name + "</option>";
                });

            str += "</optgroup>";
            $("#source_dashlets")
                .append(str)
                .change();
        });

        $.each(filters, function(i, item) {
            str = '<optgroup label="' + i + '">';
            $.map(item, function(val, index) {
                return val + "@@" + index;
            })
                .sort()
                .forEach(function(item) {
                    var item_description = item.split("@@");
                    var id = item_description[1];
                    var name = item_description[0];
                    str += "<option value=" + id + ">" + name + "</option>";
                });
            str += "</optgroup>";
            $("#source_filters")
                .append(str)
                .change();
        });
    });
}
</script>
{/literal}

<h2>User Preference Management and Cloning</h2>
<br/><br/>
{$DATA_SEARCH}
<br/>
<form action="index.php" method="post">
	{sugar_csrf_form_token}
	<input type="hidden" name="module" value="Administration"/>
	<input type="hidden" name="action" value="wUserUtils"/>

	<select name="clone_type" style="margin-bottom:10px">
	    <option value="no_scheduled_job">Run without Scheduled Job</option>
	    <option value="scheduled_job">Run with Scheduled Job</option>
	</select>

	<table class="edit view" style="width:100%;">
		<tr>
			<td scope="row" style="width: 100px;">
				Source User
			</td>
			<td>
				{html_options name="source_user" options="$USER_LIST" selected="$CURRENT_USER" onchange="on_user_change(this.value)" style="width:200px;" }
			</td>

			<td scope="row" style="width: 100px;">
				Destination Teams
			</td>

			<td>
				{html_options name="dest_teams[]" options="$TEAM_LIST" multiple="multiple" style="width:250px; height:160px" }
			</td>
			<td scope="row" style="width: 100px;">
				Destination Users
			</td>
			<td>
				{html_options name="dest_users[]" options="$USER_LIST" multiple="multiple" style="width:250px; height:160px;" }
			</td>
             <td scope = "row" style="width: 100px;">
             Destination Roles
             </td>
            <td>
				{html_options name="LoginAsRolesAuth[]" multiple="multiple" options="$ROLES_LIST" selected="$SELECTED_ROLES_LIST" style="width:250px;" placeholder="Select roles" }
			</td> 
		</tr>
	</table>


<div class="yui-skin-sam">
	<div id="wUserUtilsTabs" class="yui-navset">
    <ul class="yui-nav">
        <li class="selected"><a href="#tab1"><em>General</em></a></li>
        <li><a href="#tab2"><em>Dashboards</em></a></li>
	<li><a href="#tab3"><em>Filters</em></a></li>
	<li><a href="#tab4"><em>Delete</em></a></li>
	<li><a href="#tab5"><em>Locale Settings</em></a></li>
	{if $wColumns}
	<li><a href="#tab6"><em>wColumns</em></a></li>
	{/if}
	<li><a href="#tab7"><em>LoginAs Authorization</em></a></li>
	<li><a href="#tab8"><em>Maintenance Mode</em></a></li>
    <li><a href="#tab9"><em>User Convert</em></a></li>
    <li><a href="#tab10"><em>Field Name Placement</em></a></li>
    </ul>
    <div class="yui-content">
        <div>
        	<table style=" border-collapse: separate;  border-spacing: 10px 30px;">
        		<tr>
                    <td scope="row" style="font-weight: bold">
                        Sugar Options
                    </td>
                    <td >
                        <label style="display: block;"><input type="checkbox" name="dashlets" value="dashlets"> Clone Dashlets</label>
                        <div id="modulesdiv" title="If you don't select anything it will clone all dashlets on all modules" style="margin-bottom: 10px;">
                        {html_options id="modules_selection" name="modules_selection[]" options="$MODULES_LIST" multiple="multiple" style="width:300px;" }
                        </div>
                        <label style="display: block;"><input type="checkbox" name="favreports" value="favreports"> Clone Favorite Reports</label>
                        <label style="display: block;"><input type="checkbox" name="sugarEmailClient" value="sugarEmailClient"> Clone Sugar Email Client</label>
                        <label style="display: block;"><input type="checkbox" name="scheduledreporting" value="scheduledreporting"> Clone Scheduled Reporting</label>
                    </td>
                    </tr>
                    <tr>
                    <td scope="row" style="font-weight: bold">
                        Common Profile Settings
                    </td>
                    <td>
                        <p style="margin-bottom: 10px; border-style:solid;border-color:#287EC7;">
                        <label style="display: block; margin-bottom: 2px"><input type="checkbox" onchange="if(this.checked == true)$('#show_password').parent().css('display', 'inline-block');else $('#show_password').parent().css('display', 'none'); if($('#password_field').attr('type')=='hidden')$('#password_field').replaceWith($('#password_field').clone().attr('type', 'password'));else $('#password_field').replaceWith($('#password_field').clone().attr('type', 'hidden'));" name="password" value="password"> Reset Initial Password</label>
                        <label><input style="margin-bottom: 5px;" type='hidden' id='password_field' name='password_field' size="30"/>
                            <label style="display:none;">
                            <input id="show_password" type="checkbox"/>Show Password
                            </label>
                        </label>
                        </p>

                        <label style="display: block;"><input type="checkbox" name="notifyonassignment" value="notifyonassignment"> Clone Notify on Assignment</label>
                        <label style="display: block;"><input type="checkbox" name="remindersoptions" value="remindersoptions"> Clone Reminders Options</label>
                        <label style="display: block;"><input type="checkbox" name="defaultteams" value="defaultteams"> Clone Default Teams</label>
                        <label style="display: block;"><input type="checkbox" name="navigationbarmoduleselection" value="navigationbarmoduleselection"> Clone Navigation Bar Module Selection</label>
                        <label style="display: block;"><input type="checkbox" name="filters" value="filters"> Clone Filters</label>
                        <div id="modules_for_filters" title="If you don't select anything it will clone all filters on all modules" style="margin-bottom: 10px;">
                        {html_options id="modules_filters_selection" name="modules_filters_selection[]" options="$MODULES_LIST" multiple="multiple" style="width:300px;" }
                        </div>

                    </td>
                    
				</tr>
			</table>
			<input type="submit" name="Clone" value="Clone"/>
		</div>

            <div id="dashboards_div"  title="Here you can select the dashboards you want to add to the destination teams and/or users and/or roles, or delete from the source user.">
            <div style="float: left; width:700px;">
                <select id="source_dashlets" multiple="multiple" name="source_dashlets[]" style = "width:300px">
                </select>
                <div class="record-label" style="margin-bottom:10px; margin-top:10px; font-weight:bold;">
                    Append Text
                    <input type="checkbox" id="182" name="append_checkbox_dash"  value="append_checkbox_dash" aria-label="Boolean">
                </div>
                <input type="text" name="appendTextNameDash" class="appendTextName" value="" maxlength="255"
                    class="input-large" aria-label="appendTextName" placeholder="Insert text">
                <div class="record-label" style="margin-bottom:10px; margin-top:10px; font-weight:bold">
                    Prepend Text
                    <input type="checkbox" id="182" name="prepend_checkbox_dash" value="prepend_checkbox_dash" aria-label="Boolean" >
                </div>
                <input type="text" name="prependTextNameDash" class="prependTextName" value="" maxlength="255"
                    class="input-large" aria-label="prependTextName" placeholder="Insert text">
                {if $wDrillDownCorrectVersion}
                <div class="record-label" style="margin-bottom:10px; margin-top:10px; font-weight:bold">
                    Create Unique wDrillDown Filters
                    <input type="checkbox" id="182" name="create_unique_drilldown_filters_checkbox" value="create_unique_drilldown_filters_checkbox" aria-label="Boolean" checked="true">
                 </div>
                <div class="record-label" style="margin-top:10px; font-weight:bold">
                    Copy wDrillDown Dashboard Filters values
                    <input type="checkbox" id="182" name="copy_filters_templates_checkbox_dash" value="copy_filters_templates_checkbox_dash" aria-label="Boolean" checked="true">
                 </div>
                {/if}
            	</br> </br>
                <input type="submit" name="AddDashboards" value="Add Dashboards"/>
                <input type="submit" name="DeleteDashboards" value="Delete Dashboards"/>
            </div>
            <div style="float: right; width:800px;">
            <span>Here you can add dahboards from the source user to the destination teams and/or users and/or roles. After this, if you want to use wUserUtils 'Login As' functionality it may be necessary a browser refresh</span>
            </div>
		</div>

		<div id="filters_div" title="Here you can select the filters you want to add to the destination teams and/or users and/or roles, or delete from the source user.">
		    <div style="float: left; width:700px;">
			<select id="source_filters" multiple="multiple" name="source_filters[]" style = "width:300px">
			</select>
              <div class="record-label" style="margin-bottom:15px; margin-top:10px; font-weight:bold">
                    Append Text
                    <input type="checkbox" id="182" name="append_checkbox"  value="append_checkbox" aria-label="Boolean">
                </div>
                <input type="text" name="appendTextName" class="appendTextName" value="" maxlength="255"
                    class="input-large" aria-label="appendTextName" placeholder="Insert text">
                <div class="record-label" style="margin-bottom:15px; margin-top:10px; font-weight:bold">
                    Prepend Text
                    <input type="checkbox" id="182" name="prepend_checkbox" value="prepend_checkbox" aria-label="Boolean">
                </div>
                <input type="text" name="prependTextName" class="prependTextName" value="" maxlength="255"
                    class="input-large" aria-label="prependTextName" placeholder="Insert text">
                <br/>   <br/>
			<input type="submit" name="AddFilters" value="Add Filters"/>
			<input type="submit" name="DeleteFilters" value="Delete Filters"/>
		    </div>
		    <div style="float: right; width:400px;">
			    <span>Here you can add filters from the source user to the destination teams and/or users and/or roles. After this, if you want to use wUserUtils 'Login As' functionality it may be necessary a browser refresh</span>
		    </div>
		</div>
		<div id="delete_multiple" title="Here you can delete dashboards and filters from destination users/teams/roles.">
		    <div style="float: left; width:400px">
			<select id="mod_select" name="mod_select" style="margin-bottom: 20px; width:300px">
			  <option>Dashboards</option> 
			  <option>Filters</option>
			<select>
			</br>
			<select id="s_filters" multiple="multiple" name="s_filters[]" style="width:400px" placeholder ="Select filters">
			</select>
			<select id="s_dashboards" multiple="multiple" name="s_dashboards[]" style="width:400px" placeholder ="Select dashboards">
			</select>
			</br>
			</br>
			<input type="submit" name="Delete" value="Delete"/>
		    </div>
		</div>


		<div id="locale" title="Clone locale settings from source user to destination users/teams/roles.">
			<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
				<tr>
				    <th width="100%" align="left" scope="row" colspan="4">
					<h4><slot>{sugar_translate label="LBL_USER_LOCALE" module="Users" }</slot></h4></th>
				</tr>
				<tr>
				    <td width="17%" scope="row"><input type="checkbox" name="dateformat_check" value="dateformat_check"><slot>{sugar_translate label="LBL_DATE_FORMAT" module="Users" }:</slot>&nbsp;{sugar_help text='Set the display format for date stamps' }</td>
				    <td width="33%"><slot><select tabindex='14' name='dateformat'>{$DATEOPTIONS}</select></slot></td>
				    <!-- END: prompttz -->
				    <!-- BEGIN: currency -->
				    <td width="17%" scope="row"><input type="checkbox" name="currency_check" value="currency_check"><slot>{sugar_translate label="LBL_CURRENCY" module="Users" }:</slot>&nbsp;{sugar_help text='This is the currency used in list and record views if Show Preferred Currency is enabled. This is also your default currency for new records.' }</td>
					<td ><slot>
					    <select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'>{$CURRENCY}</select>
					    <input type="hidden" id="symbol" value="">
					</slot></td>
				    <!-- END: currency -->
				</tr>
				<tr>
				    <td scope="row"><input type="checkbox" name="timeformat_check" value="timeformat_check"><slot>{sugar_translate label="LBL_TIME_FORMAT" module="Users" }:</slot>&nbsp;{sugar_help text='Set the display format for time stamps' }</td>
				    <td ><slot><select tabindex='14' name='timeformat'>{$TIMEOPTIONS}</select></slot></td>
				    <!-- BEGIN: currency -->
				    <td width="17%" scope="row"><input type="checkbox" name="default_currency_significant_digits_check" value="default_currency_significant_digits_check"><slot>
					{sugar_translate label="LBL_SYSTEM_SIG_DIGITS" module="Users" }: &nbsp;{sugar_help text='Set the System Significant Digits number.' } </slot></td>
				    <td ><slot>
					<select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'>{$sigDigits}</select>
				    </slot></td>
				    <!-- END: currency -->
				</tr>
				<tr>
				    <td scope="row"><input type="checkbox" name="timezone_check" value="timezone_check"><slot>{sugar_translate label="LBL_TIMEZONE" module="Users" }:</slot>&nbsp;{sugar_help text='Set the current time zone' }</td>
				    <td ><slot><select tabindex='14' name='timezone'>{html_options options="$TIMEZONEOPTIONS" selected="$TIMEZONE_CURRENT" }</select></slot></td>
				    <!-- BEGIN: currency -->
				    <td width="17%" scope="row"><slot>
					<i>{sugar_translate label="LBL_LOCALE_EXAMPLE_NAME_FORMAT" module="Users" }</i>:
				    </slot></td>
				    <td ><slot>
					<input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
				    </slot></td>
				    <!-- END: currency -->
				</tr>
				<tr>

				    <td scope="row"><input type="checkbox" name="prompt_check" value="prompt_check"><slot>{sugar_translate label="LBL_PROMPT_TIMEZONE" module="Users" }:</slot>&nbsp;{sugar_help text='Select to have new users go through the New User Wizard upon first login.' }</td>
				    <td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" {$PROMPTTZ}></slot></td>

				    <td width="17%" scope="row"><input type="checkbox" name="num_grp_sep_check" value="num_grp_sep_check"><slot>{sugar_translate label="LBL_NUMBER_GROUPING_SEP" module="Users" }:</slot>&nbsp;{sugar_help text='Character used to separate thousands' }</td>
				    <td ><slot>
					<input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
					    type='text' maxlength='1' size='1' value='{$NUM_GRP_SEP}'
					    onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
				    </slot></td></tr>
				{capture name="SMARTY_LOCALE_NAME_FORMAT_DESC" }&nbsp;{sugar_translate label="LBL_LOCALE_NAME_FORMAT_DESC" module="Users" }{/capture}
				<tr>
				    <td  scope="row" valign="top"><input type="checkbox" name="default_locale_name_format_check" value="default_locale_name_format_check"> {sugar_translate label="LBL_LOCALE_DEFAULT_NAME_FORMAT" module="Users" }:&nbsp;{sugar_help text=' Set how names will be displayed.' }</td>
				    <td  valign="top"><slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format" selected="{$default_locale_name_format}">{$NAMEOPTIONS}</select></slot></td>
				    <td width="17%" scope="row"><input type="checkbox" name="dec_sep_check" value="dec_sep_check"><slot>{sugar_translate label="LBL_DECIMAL_SEP" module="Users" }:</slot>&nbsp;{sugar_help text='Character used to separate decimal portion' }</td>
				    <td ><slot>
					<input tabindex='14' name='dec_sep' id='default_decimal_seperator'
					    type='text' maxlength='1' size='1' value='{$DEC_SEP}'
					    onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
				    </slot></td>
				</tr>
			    </table>
			    <input type="submit" name="CloneLocale" value="Clone Locale Settings"/>
		</div>

		{if $wColumns}
		<div id="cloneWColumns_multiple" title="Here you can select the wColumn configuration you want to add to the destination teams and/or users and/or roles.">
			<div style="float: left; width:700px">
			<select id="wColumns" multiple="multiple" name="wColumns[]" style = "width:350px;">

			</select>
			<input type="submit" name="AddwColumns" value="Add wColumns"/>
			</div>
			<div style="float: right; width:400px;">
				<span>Here you can select the wColumn configuration you want to add to the destination teams and/or users and/or roles. After this, if you want to use wUserUtils 'Login As' functionality it may be necessary a browser refresh</span>
			</div>
		</div>
		{/if}

		<div id="LoginAsAuthorization" title="LoginAsAuthorization">
			<div style="width:1100px;display: inline-flex;float: left;">
				<div style="width:350px;">
					<p style="margin-bottom:10px;">Users</p>
					{html_options name="LoginAsUserAuth[]" multiple="multiple" options="$USER_LIST" selected="$SELECTED_USERS_LIST" style="width:300px;" placeholder="Select users" }
				</div>
				<div style="width:350px;">
					<p style="margin-bottom:10px;">Teams</p>
					{html_options name="LoginAsTeamsAuth[]" multiple="multiple" options="$TEAM_LIST" selected="$SELECTED_TEAMS_LIST" style="width:300px;" placeholder="Select teams" }
				</div>
				<div style="width:350px;">
					<p style="margin-bottom:10px;">Roles</p>
					{html_options name="LoginAsRolesAuthRoles[]" multiple="multiple" options="$ROLES_LIST_DESTINATION" selected="$SELECTED_ROLES_LIST_DESTINATION" style="width:300px;" placeholder="Select roles" }
				</div>
			</div>

			<div style="float: right; width:200px; margin-top: 2%;">
				<span>Authorize users for Login As</span>
			</div>

			<br /><br />
			<div >
				<input type="button" name="AddPermissions" value="Add Permissions" />
			</div>
		</div>

		<div id="maintenanceMode" title="Maintenance Mode">
            <div id="maintenance_text">
                <label>Maintenance Message</label><br>
                <textarea rows="4" cols="50" name="maintenance_message">{$maintenance_message}</textarea>
                <div>{$maintenance_info}</div>
            </div>
			<div>
				<input type="submit" name="ActivateMaintenance" value="Activate Maintenance" style="margin-top:50px"/>
				<input type="submit" name="DeactivateMaintenance" value="Deactivate Maintenance" style="margin-top:50px"/>
			</div>

			<div style="width:400px; margin-top:10px;">
				<span>A Languages Rebuild will be performed in the background. Please wait until it finishes. Changes will take effect immediately and it will show up in wUserUtils next time you access it.</span>
			</div>
		</div>

        <div  id="convertUsers" title="User Convert">
            <table class="edit view" style="width:100%;">
                <tr>
                    <td scope="row" style="width: 100px;">
                        <div id="convertGroupUsers" title="Group User Convert">
                            <div style="max-width:350px;">
                                <p style="margin-bottom:15px;font-size: 15px;">Convert users from group to regular users.</p>
                                {html_options name="ConvertGroupUsers[]" multiple="multiple" options="$GROUP_USER_LIST" selected="$SELECTED_GROUP_USERS_LIST" style="width:300px;" placeholder="Select group users" }
                            </div>
                            <br />
                            <div >
                                <input type="submit" name="ConvertGroupUser" value="Convert Group User" />
                            </div>
                        </div>
                    </td>
                    <td scope="row" style="width: 100px;">
                        <div id="convertRegularUsers" title="Regular User Convert">
                            <div style="max-width:350px;">
                                <p style="margin-bottom:15px;font-size: 15px;">Convert users from regular to group users.</p>
                                {html_options name="ConvertRegularUsers[]" multiple="multiple" options="$REGULAR_USER_LIST" selected="$SELECTED_REGULAR_USERS_LIST" style="width:300px;" placeholder="Select regular users" }
                            </div>
                            <br />
                            <div >
                                <input type="submit" name="ConvertRegularUser" value="Convert Regular User" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div id="fieldNamePlacement" title="Field Name Placement">
            <table>
                <tr class="view" style="width:100%;">
                    <td scope="row" style="font-weight: bold">
                        Field Name Placement
                    </td>
                    <td>
                        <select id="field_name_placement_val" name="field_name_placement_val">
                            <option value="field_on_side">Beside Field Value</option>
                            <option value="field_on_top">Above Field Value</option>
                        </select>
                    </td>
                    <td>
                        <div style="margin-left:50px">
                        If no user/team/role is selected, the setting will be applied for all users in the system.
                        </div>
                    </td>
                </tr>
            </table>
            <div>
                <input type="submit" name="FieldNamePlacement" value="Save" />
            </div>
        </div>
    </div>
</div>


</form>
