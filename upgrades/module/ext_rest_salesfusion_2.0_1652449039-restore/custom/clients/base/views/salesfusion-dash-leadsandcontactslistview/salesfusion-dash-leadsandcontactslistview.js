/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
({
    plugins: ['Dashlet'],

    limit: 20,
    offset: 0,
    order_by: 'date',
    order_dir: 'desc',
    module: '',
    typefilter: '',
    loaded: false,

    span_contact: '<span class="table-cell-wrapper" style="width: 42px;" title="Contact"><span class="label label-module label-module-sm label-Contacts" rel="tooltip" title="" data-placement="right" data-original-title="Contact" tabindex="-1">Co</span></span> ',
    span_lead: '<span class="table-cell-wrapper" style="width: 42px;" title="Lead"><span class="label label-module label-module-sm label-Leads" rel="tooltip" title="" data-placement="right" data-original-title="Lead" tabindex="-1">Le</span></span> ',

    events: {
        'click [class*="sorting"]': 'reOrder',
        'click #leadsandcontacts_showmore': 'showMore',
        'change #leadsandcontacts_modulefilter': 'changeFilter',
        'change #leadsandcontacts_typefilter': 'changeFilter'
    },

    initDashlet: function() {

    },

    loadData: function(options) {
        if (_.isUndefined(this.model)) {
            return;
        }

        // show the "Loading" row
        $('#leadsandcontacts_loading').show();
        $('#leadsandcontacts_showmore').hide();

        var _this = this;
        querystring = '?limit=' + this.limit + '&offset=' + this.offset + '&order_by=' + this.order_by + '&order_dir=' + this.order_dir + '&activity_filter=' + this.module + '&type_filter=' + this.typefilter;
        app.api.call('read', app.api.buildURL('SalesFusion/leadsandcontacts') + querystring, postdata = null, {
            success: function(data) {
                $('#leadsandcontacts_loading').hide();
                if (_this.disposed) {
                    return;
                }

                for (var i in data.records) {
                    var record = data.records[i];
                    if (data.records[i]['type'] == 'Email') {
                        data.records[i]['status'] = app.lang.getAppListStrings('dom_email_status')[data.records[i]['status']] || data.records[i]['status'];
                    }

                    // change home page (slash) to full url
                    if (data.records[i]['status'] == '/') {
                        data.records[i]['status'] = data.records[i]['link'];
                    }
                }

                _this.record_data = data;
                _this.render();
                $('#leadsandcontacts_loading').hide();
                $('#leadsandcontacts_showmore').hide();
                _this.offset = data.next_offset;

                _this.loaded = true;

                if (data.next_offset > 0) {
                    // enable the "show more" link
                    $('#leadsandcontacts_showmore').show();
                }
            }
        });
    },

    showMore: function() {
        $('#leadsandcontacts_showmore').hide();

        if (this.offset < 0) {
            return;
        }

        // show the "Loading" row
        $('#leadsandcontacts_loading').show();

        var _this = this;
        var datepref = app.user.get('preferences').datepref;
        _this.old_records = _this.record_data.records || [];

        querystring = '?limit=' + this.limit + '&offset=' + this.offset + '&order_by=' + this.order_by + '&order_dir=' + this.order_dir + '&activity_filter=' + this.module + '&type_filter=' + this.typefilter;
        app.api.call('read', app.api.buildURL('SalesFusion/leadsandcontacts') + querystring, postdata = null, {
            success: function(data) {
                $('#leadsandcontacts_loading').hide();
                if (_this.disposed) {
                    return;
                }

                _this.record_data = data;

                for (var i in data.records) {
                    var record = data.records[i];
                    if (data.records[i]['type'] == 'Email') {
                        data.records[i]['status'] = app.lang.getAppListStrings('dom_email_status')[data.records[i]['status']] || data.records[i]['status'];
                    }

                    // change home page (slash) to full url
                    if (data.records[i]['status'] == '/') {
                        data.records[i]['status'] = data.records[i]['link'];
                    }

                    // convert date to user preference datestamp


                    _this.old_records.push(data.records[i]);
                    
                    $tr = $('<tr>');
                    var name;
                    if (record.module_name == "Leads") {
                        name = _this.span_lead;
                    }
                    else if (record.module_name == "Contacts") {
                        name = _this.span_contact;
                    }
                    $tr.append('<td><div class="ellipsis_inline" title="" data-placement="bottom" data-original-title="'+record.first_name+' '+record.last_name+'">' + name + '<a href="#'+record.module_name+'/'+record.id+'" class="highlight_'+record.module_name+'">'+record.first_name+' '+record.last_name+'</a></div></td>');
                    $tr.append('<td><div class="ellipsis_inline" title="" data-placement="bottom" data-original-title="'+record.type+'">'+record.type+'</div></td>');
                    if (record.link) {
                        $tr.append('<td><div class="ellipsis_inline" title="" data-placement="bottom" data-original-title="'+record.status+'"><a href="'+record.status+'">'+record.status+'</a></div></td>');
                    }
                    else {
                        $tr.append('<td><div class="ellipsis_inline" title="" data-placement="bottom" data-original-title="'+record.status+'">'+record.status+'</div></td>');
                    }
                    $tr.append('<td><div class="ellipsis_inline" title="" data-placement="bottom" data-original-title="'+record.user_date+'">'+record.user_date+'</div></td>');
                    $('#leadsandcontactslistview_table tbody').append($tr);
                }
                
                _this.loaded = true;

                if (_this.offset > _this.limit) {
                    // scroll the div slightly down
                    var $div = $('#leadsandcontactslistview_div');
                    $div.scrollTop($div.scrollTop() + 35);
                }

                _this.record_data.records = _this.old_records;
                _this.offset = data.next_offset;

                if (data.next_offset > 0) {
                    // enable the "show more" link
                    $('#leadsandcontacts_showmore').show();
                }
            }
        });
    },

    changeFilter: function(ev) {
        if (!this.loaded) {
            return;
        }
        this.loaded = false;

        if ($('#leadsandcontacts_modulefilter').val() != this.module || $('#leadsandcontacts_typefilter').val() != this.typefilter) {
            this.module = $('#leadsandcontacts_modulefilter').val();
            this.typefilter = $('#leadsandcontacts_typefilter').val();
            this.record_data = {};
            $('#leadsandcontactslistview_table tbody').html("");
            this.offset = 0;
            this.showMore();
        }
    },

    reOrder: function(ev) {
        if (!this.loaded) {
            return;
        }
        this.loaded = false;

        // if column was clicked, set the values based on the column clicked
        if (ev.target) {
            this.order_by = $(ev.target).data("orderby") || this.order_by;

            if ($(ev.target).data("orderdir")) {
                this.order_dir = $(ev.target).data("orderdir");
            }

            // reverse the order dir
            if (this.order_dir == 'asc') {
                this.order_dir = 'desc';
            }
            else {
                this.order_dir = 'asc';
            }

            // update the column headers order_by and order_dir            
            $('#leadsandcontactslistview_table thead th').attr('class', 'sorting');
            $('#leadsandcontactslistview_table thead th[data-orderby="' + this.order_by + '"]').addClass('sorting_' + this.order_dir);
        }

        // clear out the data
        this.record_data = {};
        $('#leadsandcontactslistview_table tbody').html("");

        // reset the offset
        this.offset = 0;

        // show data
        this.showMore();
    }
})