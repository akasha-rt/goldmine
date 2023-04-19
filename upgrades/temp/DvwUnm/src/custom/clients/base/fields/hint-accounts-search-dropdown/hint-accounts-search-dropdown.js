/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Fields.Base.hint-accounts-search-dropdownField
 * @alias SUGAR.App.view.fields.Base.hint-accounts-search-dropdownField
 * @extends View.Fields.Base.BaseField
 */
({
    plugins: ['MetadataEventDriven', 'Stage2CssLoader'],

    css: ['hint-accounts-search-dropdown'],

    events: {
        'click': 'showList',
        'keyup': 'handleKeyUpActions',
        'keydown': 'handleKeyDownActions',
    },

    accounts: [],

    listSelector: '.search-dropdown-list',

    activeClass: 'search-dropdown-list__item--active',

    activeSelector: '.search-dropdown-list__item--active',

    hintMetricsToken: undefined,

    populateList: function(accounts) {
        this.accounts = accounts;
        var list = this.$el.find(this.listSelector);
        list.html('');
        _.each(accounts, function(account) {
            list.append("<li data-key=\"" + account.name + "\">" +
                "<img rel=\"noopener\" src=" + account.logo + "/>" +
                "<span>" + account.name + "</span>" +
                "<span><a>" + account.domain + "</a></span>"
            );
        });
        if (SUGAR.App.controller.layout.type !== 'record') {
            list.show();
        }
    },

    search: function(searchTerm) {
        var self = this;
        var dataEnrichmentAccessTokenExpiration = SUGAR.App.user.get('dataEnrichmentAccessTokenExpiration');
        // It checks if the token is valid and is not expired.
        // If expired, it re-assigns it new token to dataEnrichmentAccessToken.
        if (self.isTokenExpired(dataEnrichmentAccessTokenExpiration)) {
            self._callStage2API('create', 'stage2/token', {
                success: function(data) {
                    SUGAR.App.user.set('dataEnrichmentAccessToken', data.accessToken);
                    SUGAR.App.user.set('dataEnrichmentAccessTokenExpiration', Date.now() + 3600 * 1000); // indicates an hour
                    self.callToSearchEndpoint(searchTerm, SUGAR.App.user.get('dataEnrichmentAccessToken'));
                },
                error: function(err) {
                    app.logger.error('Cannot create Hint Token: ' + JSON.stringify(err));
                }
            });
        } else {
            self.callToSearchEndpoint(searchTerm, SUGAR.App.user.get('dataEnrichmentAccessToken'));
        }
    },

    callToSearchEndpoint: function(searchTerm, dataEnrichmentAccessToken) {
        var self = this;
        self.hintMetricsToken = SUGAR.App.user.get('hintMetricsToken');
        $.ajax({
            type: 'GET',
            url: SUGAR.App.user.get('dataEnrichmentUrl') + '/autocomplete-for-companies',
            data: {
                'search': {
                    'name' : searchTerm,
                },
                'metricsToken' : self.hintMetricsToken,
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('authToken', dataEnrichmentAccessToken);
            },
            success: _.bind(this.populateList, this)
        });
    },

    _callStage2API: function(method, api, options) {
        app.api.call(method, app.api.buildURL(api), null, {
            success: function (data) {
                if (api === 'stage2/params') {
                    SUGAR.App.user.set('dataEnrichmentUrl', data.enrichmentServiceUrl);
                }
                options && options.success && options.success(data);
            },
            error: function (err) {
                app.logger.error('Failed to get Hint param: ' + JSON.stringify(err));
            }
        });
    },

    selectAccountFromList: function(event) {
        var self = this;
        var list = self.$el.find(this.listSelector);
        var accountsHintFields = [
            'website',
            'description',
            'sic_code',
            'annual_revenue',
            'twitter',
            'hint_account_size_c',
            'hint_account_location_c',
            'hint_account_industry_c',
            'hint_account_founded_year_c',
            'hint_account_facebook_handle_c',
            'hint_account_industry_tags_c',
            'hint_account_naics_code_lbl_c',
            'hint_account_fiscal_year_end_c',
        ];

        // It checks if in the create record view other hint fields are populated and
        // then sets the populatedAccountRecord based on it.
        _.each(accountsHintFields, function(field) {
            if (self.model.get(field)) {
                self.model.populatedAccountRecord = true;
            }
        });

        if (list.is(':visible')) {
            list.hide();
            var activeItem = event ? $(event.currentTarget) : self.$el.find(self.activeSelector);
            var nameFieldValue = activeItem.attr('data-key') || self.model.get('name');
            self.model.set('name', nameFieldValue);
        }
    },

    navigateAccountsList: function(dir) {
        var boxItems = this.$el.find('li');
        this.activeIndex = (this.activeIndex + boxItems.length + dir) % boxItems.length;
        boxItems.removeClass(this.activeClass)
            .eq(this.activeIndex).addClass(this.activeClass);
    },

    handleKeyUpActions: function(e) {
        switch (e.keyCode) {
            // ArrowLeft.
            case this.keyCodes.ARROW_LEFT:
            // ArrowRight.
            case this.keyCodes.ARROW_RIGHT:
                break;
            // ArrowDown.
            case this.keyCodes.ARROW_DOWN:
                this.navigateAccountsList(1);
                break;
            // ArrowUp.
            case this.keyCodes.ARROW_UP:
                if (this.activeIndex === -1) {
                    this.navigateAccountsList(0);
                } else {
                    this.navigateAccountsList(-1);
                }
                break;
            // Enter.
            case this.keyCodes.ENTER:
                this.context.get('model').exitDropdownNoEnrich = false;
                this.activeIndex = -1;
                this.selectAccountFromList();
                break;
            default:
                this.context.get('model').exitDropdownNoEnrich = false;
                this.accounts = [];
                this.activeIndex = -1;
                this.throttledSearch(e.target.value);
                break;
        }
    },

    handleKeyDownActions: function(e) {
        // if the user tabs out of the dropdown without selecting a company, we
        // do not want to auto enrich.
        if (e.keyCode === this.keyCodes.TAB) {
            if (this.context) {
                this.context.get('model').exitDropdownNoEnrich = true;
            }
            this.$el.find(this.listSelector).hide();
        }
    },

    showList: function(event) {
        if (this.accounts.length && event.target.value) {
            this.$el.find(this.listSelector).show();
            this.context.get('model').exitDropdownNoEnrich = false;
        }
    },

    bindSelectEvent: function() {
        $(this.$el).on(
            'click', this.listSelector + ' li',
            _.bind(this.selectAccountFromList, this)
        );
    },

    isTokenExpired: function(dataEnrichmentAccessTokenExpiration) {
        return (!dataEnrichmentAccessTokenExpiration || dataEnrichmentAccessTokenExpiration < Date.now());
    },

    initialize: function(options) {
        var self = this;
        this._super('initialize', [options]);
        this.activeIndex = -1;
        this.throttledSearch = _.debounce(this.search, 200);
        this.keyCodes = {
            TAB: 9,
            ENTER: 13,
            ARROW_LEFT: 37,
            ARROW_UP: 38,
            ARROW_RIGHT: 39,
            ARROW_DOWN: 40
        };
        // This piece of code handles the case when the user clicks outside the dropdown
        // in which case the dropdown should be closed. Also, the initialize function is called only once
        // hence it will be added only once.
        window.document.addEventListener('mousedown', function (event) {
            if (!($(event.target).closest('.search-dropdown-list').length)) {
                $('.search-dropdown-list').hide();
                // we set this to true as we don't want to auto enrich when the user
                // has clicked somewhere outside of the dropdown
                if (self.context) {
                    self.context.get('model').exitDropdownNoEnrich = true;
                }
            }
        }, false);

        if (self.isTokenExpired(SUGAR.App.user.get('dataEnrichmentAccessTokenExpiration'))) {
            self._callStage2API('create', 'stage2/token', {
                success: function(data) {
                    SUGAR.App.user.set('dataEnrichmentAccessToken', data.accessToken);
                    SUGAR.App.user.set('dataEnrichmentAccessTokenExpiration', Date.now() + 3600 * 1000); // indicates an hour
                },
                error: function(err) { }
            });
        }

        if (!SUGAR.App.user.get('dataEnrichmentUrl')) {
            self._callStage2API('GET', 'stage2/params', {
                success: function(data) {
                }
            });
        }
    },

    render: function() {
        this._super('render');
        if (!this.hasBoundEvent) {
            this.bindSelectEvent();
            this.hasBoundEvent = true;
        }
    }
})

