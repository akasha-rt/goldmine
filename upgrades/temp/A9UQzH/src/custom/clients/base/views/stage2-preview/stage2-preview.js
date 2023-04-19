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
 * @class View.Views.Base.RecordView
 * @alias SUGAR.App.view.views.RecordView
 */
({
    extendsFrom: 'RecordView',

    plugins: ['ToggleMoreLess', 'Stage2CssLoader'],

    css: ['hint-preview'],

    events: {
        'click [data-action="copy"]': 'copy',

        'click [data-action="recordLinkClick"]': '_socialLinkClicked',
        // Have to define these events and related functions for sugar7 tooltip implementation.
        'mouseenter [rel="tooltip"]': 'showTooltip',
        'mouseleave [rel="tooltip"]': 'hideTooltip'
    },

    showTooltip: function(e) {
        this.$(e.currentTarget).tooltip("show");
    },

    hideTooltip: function(e) {
        this.$(e.currentTarget).tooltip("hide");
    },

    enrichFieldsOptions: [],
    containsPreAccountFields: false,
    shouldShowHintCloudLogo: false,
    previousAccountQueue: [],
    switching: false,
    isHintRequestLoading: true,
    SUGAR_INTERNAL_FIELD_SUFFIX: '_c',
    SUGAR_INTERNAL_FIELD_PREFIX: 'hint_',
    oldHintPreview: '',
    isListView: '',
    fieldTypeTranslations: {
        'title' : 'LBL_DASHLET_CONFIGURE_TITLE',
        'phone_work' : 'LBL_HINT_OFFICE_PHONE',
        'phone_mobile' : 'LBL_HINT_MOBILE_PHONE',
        'phone_other' : 'LBL_HINT_OTHER_PHONE',
        'website' : 'LBL_HINT_WEBSITE',
        'hint_education_c' : 'LBL_HINT_EDUCATION',
        'hint_education_2_c' : 'LBL_HINT_EDUCATION_2',
        'hint_job_2_c' : 'LBL_HINT_JOB_2',
        'hint_facebook_c' : 'LBL_HINT_FACEBOOK',
        'hint_twitter_c' : 'LBL_HINT_TWITTER',
        'account_name' : 'LBL_LIST_ACCOUNT_NAME',
        'description' : 'LBL_HINT_COMPANY_DESCRIPTION',
        'sic_code' : 'LBL_HINT_COMPANY_SIC_CODE_LABEL',
        'twitter' : 'LBL_HINT_COMPANY_TWITTER',
        'hint_account_industry_tags_c' : 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
        'annual_revenue' : 'LBL_HINT_COMPANY_ANNUAL_REVENUE',
        'hint_account_website_c' : 'LBL_HINT_COMPANY_WEBSITE',
        'hint_account_size_c' : 'LBL_HINT_COMPANY_SIZE',
        'hint_account_industry_c' : 'LBL_HINT_COMPANY_INDUSTRY',
        'hint_account_location_c' : 'LBL_HINT_COMPANY_LOCATION',
        'hint_account_annual_revenue_c' : 'LBL_HINT_COMPANY_ANNUAL_REVENUE',
        'hint_account_description_c' : 'LBL_HINT_COMPANY_DESCRIPTION',
        'hint_account_naics_code_lbl_c' : 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
        'hint_account_sic_code_label_c' : 'LBL_HINT_COMPANY_SIC_CODE_LABEL',
        'hint_account_fiscal_year_end_c' : 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
        'hint_account_founded_year_c' : 'LBL_HINT_COMPANY_FOUNDED_YEAR',
        'hint_account_facebook_handle_c' : 'LBL_HINT_COMPANY_FACEBOOK',
        'hint_account_twitter_handle_c' : 'LBL_HINT_COMPANY_TWITTER',
        'hint_industry_tags_c' : 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
    },
    uniqueEmail: '',
    /**
     * hintPanelFields array needs to be updated when we update the fields in the hint panel view.
     */
    hintPanelFields: [
        'title',
        'phone_work',
        'phone_mobile',
        'phone_other',
        'website',
        'hint_education_c',
        'hint_education_2_c',
        'hint_job_2_c',
        'hint_facebook_c',
        'hint_twitter_c',
        'account_name',
        'hint_account_website_c',
        'hint_account_size_c',
        'hint_account_industry_c',
        'hint_account_location_c',
        'hint_account_annual_revenue_c',
        'hint_account_description_c',
        'hint_account_naics_code_lbl_c',
        'hint_account_sic_code_label_c',
        'hint_account_fiscal_year_end_c',
        'hint_account_founded_year_c',
        'hint_account_facebook_handle_c',
        'hint_account_twitter_handle_c',
        'hint_industry_tags_c'
    ],
    preFilledDataFields: [],
    modelDiffFlag: true,
    previousAccountsName : '',
    previousAccountsWebsite : '',
    cancelName : false,
    previousBeanAccountsFields: '',
    /**
     * Use this field names to send to person enrichment.
     * Why? Data exposure, we only send fields to our endpoint that it really needs
     * We don't need all the data anyway for enriching people.
     * Enriched attribute list is also extract from this list. So the item order in this list matters.
     * @return {[type]} [description]
     */
    getFieldNamesForSending: function() {
        if (this.moduleName === 'Accounts') {
            return [
                'annual_revenue',
                'description',
                'email1',
                'hint_account_facebook_handle_c',
                'hint_account_fiscal_year_end_c',
                'hint_account_founded_year_c',
                'hint_account_industry_c',
                'hint_account_industry_tags_c',
                'hint_account_location_c',
                'hint_account_logo_c',
                'hint_account_naics_code_lbl_c',
                'hint_account_size_c',
                'name',
                'sic_code',
                'tag',
                'website'
            ];
        } else {
            return [
                'title',
                'phone_work',
                'email',
                'account_name',
                'hint_education_c',
                'hint_education_2_c',
                'hint_job_2_c',
                'hint_facebook_c',
                'hint_twitter_c',
                'hint_account_website_c',
                'hint_account_size_c',
                'hint_account_industry_c',
                'hint_account_location_c',
                'hint_account_description_c',
                'hint_account_founded_year_c',
                'hint_account_facebook_handle_c',
                'hint_account_twitter_handle_c',
                'hint_industry_tags_c',
                'hint_account_naics_code_lbl_c',
                'hint_account_sic_code_label_c',
                'hint_account_fiscal_year_end_c',
                'hint_account_annual_revenue_c',
                'hint_photo_c',
                'phone_other',
                'phone_home',
                'full_name',
                'phone_mobile',
                'hint_account_logo_c',
                'lead_source',
                'first_name',
                'last_name',
                'salutation',
                'alt_address_city',
                'alt_address_country',
                'alt_address_postalcode',
                'alt_address_state',
                'alt_address_street',
                'primary_address_city',
                'primary_address_country',
                'primary_address_postalcode',
                'primary_address_state',
                'primary_address_street',
                'twitter',
                'website',
            ];
        }
    },

    enrichLeadsAttributeList: [
        'title',
        'phone_work',
        'hint_phone_1_c',
        'hint_phone_2_c',
        'email',
        'account_name',
        'hint_education_c',
        'hint_education_2_c',
        'hint_job_2_c',
        'hint_facebook_c',
        'hint_twitter_c',
        'hint_account_website_c',
        'hint_account_size_c',
        'phone_mobile',
        'phone_other',
        'hint_account_industry_c',
        'hint_account_location_c',
        'hint_account_description_c',
        'hint_account_founded_year_c',
        'hint_account_facebook_handle_c',
        'hint_account_twitter_handle_c',
        'hint_industry_tags_c',
        'hint_account_naics_code_lbl_c',
        'hint_account_sic_code_label_c',
        'hint_account_fiscal_year_end_c',
        'hint_account_annual_revenue_c',
    ],

    enrichAccountsAttributeList: [
        'name',
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
    ],

    saveLeadsDisableAttrList: [
        'hint_account_logo_c',
        'hint_photo_c',
        'account_name'
    ],

    saveAccountsDisableAttrList: [
        'hint_account_logo_c',
        'name'
    ],

    endsWith: function(string, searchTerm) {
        var position = string.length - searchTerm.length,
            lastIndex = string.lastIndexOf(searchTerm, position);
        return lastIndex === position;
    },

    startsWith: function(string, searchTerm) {
        return string.substr(0, searchTerm.length) === searchTerm;
    },

// Converts the given SugarInternal bean into Stage2 bean. This is needed before invoking
// data enrichment on Stage2.
    convertSugarBeanToHintPayload: function(siBean) {
        var stage2bean = {};
        _.each(siBean, function(value, key) {
            if (key.length > this.SUGAR_INTERNAL_FIELD_SUFFIX.length + this.SUGAR_INTERNAL_FIELD_PREFIX.length &&
                this.endsWith(key, this.SUGAR_INTERNAL_FIELD_SUFFIX) &&
                this.startsWith(key, this.SUGAR_INTERNAL_FIELD_PREFIX)) {
                // remove suffix and prefix
                var newKey = key.substr(0, key.length - this.SUGAR_INTERNAL_FIELD_SUFFIX.length);
                newKey = newKey.replace(this.SUGAR_INTERNAL_FIELD_PREFIX, '');
                stage2bean[newKey] = value;
            } else {
                stage2bean[key] = value;
            }
        }, this);

        if (this.moduleName === 'Accounts') {
            if (!_.isEmpty(siBean.email) && _.isArray(siBean.email)) {
                stage2bean['email1'] = siBean.email[0].email_address;
                if (siBean.email[1] && !_.isEmpty(siBean.email[1])) {
                    stage2bean['email2'] = siBean.email[1].email_address;
                }
            }
        }
        return stage2bean;
    },

    _convertToAccountBean: function(stage2bean, siBean) {
        var self = this;
        // We are not enrich these fields, but they come from the returned bean.
        // To avoid inconsistence when save enrichment result, omit these fields.
        stage2bean = _.omit(stage2bean, 'billing_address_city', 'billing_address_state',
            'billing_address_postalcode', 'billing_address_country', 'billing_address_street', 'ownership', 'ticker_symbol');

        _.each(stage2bean, function(value, key) {
            if (this.startsWith(key, 'account_')) {
                if (key === 'account_twitter_handle') {
                    siBean['twitter'] = 'http://www.twitter.com/' + value;
                } else {
                    //re-map the naic code
                    if (key === 'account_naics_code_label') {
                        key = 'account_naics_code_lbl';
                    } else if (key === 'account_facebook_handle') {
                        value = (value.indexOf('www.facebook.com/') > -1) ? value : 'www.facebook.com/' + value;
                    }
                    siBean[self.SUGAR_INTERNAL_FIELD_PREFIX + key + self.SUGAR_INTERNAL_FIELD_SUFFIX] = value;
                }
            } else {
                if (key === 'annual_revenue') {
                    // Since from data provider we get value in USD app.user.getPreference('currency_symbol') should always be $.
                    // Annual Revenue field value being string by default check has been applied.
                    value = (typeof value !== 'string') ? '$' + value.toLocaleString() : value;
                }
                siBean[key] = value;
            }
        }, this);
        return siBean;
    },

    _convertToLeadBean: function(stage2bean, siBean) {
        _.each(stage2bean, function(value, key) {
            switch (key) {
                case 'phone_work':
                case 'phone_mobile':
                case 'phone_other':
                    siBean = this._distributePhones(siBean, key, value);
                    break;
                case 'account_name':
                case 'title':
                    siBean[key] = value;
                    break;
                case 'account_domain':
                    if (_.isEmpty(siBean['hint_account_website_c']) && !_.isEmpty(value)) {
                        siBean['hint_account_website_c'] = 'http://' + value;
                    }
                    break;
                case 'account_naics_code_label':
                    siBean[this.SUGAR_INTERNAL_FIELD_PREFIX + 'account_naics_code_lbl' + this.SUGAR_INTERNAL_FIELD_SUFFIX] = value;
                    break;

                case 'account_annual_revenue':
                    // Since from data provider we get value in USD app.user.getPreference('currency_symbol') should always be $.
                    // Annual Revenue field value being string by default check has been applied.
                    value = (typeof value !== 'string') ? '$' + value.toLocaleString() : value;
                // fall through deliberately
                default:
                    if (key === 'account_twitter_handle') {
                        value = 'www.twitter.com/' + value;
                    } else if (key === 'account_facebook_handle') {
                        value = (value.indexOf('www.facebook.com/') > -1) ? value : 'www.facebook.com/' + value;
                    }
                    siBean[this.SUGAR_INTERNAL_FIELD_PREFIX + key + this.SUGAR_INTERNAL_FIELD_SUFFIX] = value;
            }
        }, this);

        // For erase field feature.
        if (this._erasedFields && _.contains(this._erasedFields, 'phone_work')) {
            if (siBean['hint_phone_1_c'] && siBean['hint_phone_1_c'] !== '' && !_.contains(this._erasedFields, 'hint_phone_1_c')) {
                this._erasedFields.push('hint_phone_1_c');
                siBean['hint_phone_1_c'] = '';
            }
            if (siBean['hint_phone_2_c'] && siBean['hint_phone_2_c'] !== '' && !_.contains(this._erasedFields, 'hint_phone_2_c')) {
                this._erasedFields.push('hint_phone_2_c');
                siBean['hint_phone_2_c'] = '';
            }
        }
        if (this.moduleName === 'Leads' && this._erasedFields && _.contains(this._erasedFields, 'website')) {
            siBean['hint_account_website_c'] = '';
            this.$('[data-name="hint_account_website_c"]').children('#hint_website_erased').removeClass('hidden');
        }
        if (this.moduleName === 'Contacts' && this._erasedFields && _.contains(this._erasedFields, 'account_name')) {
            siBean['account_name'] = '';
            siBean['hint_account_logo_c'] = '';
        }

        return siBean;
    },

    convertHintPayloadToSugarBean: function(stage2bean) {
        if (this.moduleName !== 'Accounts') {
            if (!stage2bean.account_name && !this._originalModel.get('account_name')) {
                if (!_.contains(this._erasedFields, 'account_name')) {
                    this.$('[data-type="text"][data-name="account_name"]')
                        .append('<div class="ellipsis_inline not_found">'.concat(app.lang.get('LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'), '</div>'));
                }
            }
        }
        siBean = (this.moduleName === 'Accounts') ?
            this._convertToAccountBean(stage2bean, {}) : this._convertToLeadBean(stage2bean, {});
        // Skip empty (non-enriched) values.
        siBean = _.omit(siBean, function(value, key) {
            return this._isEmpty(value);
        }, this);

        if (this.moduleName === 'Accounts') {
            // Remove email1, email2 from attrs
            siBean = _.omit(siBean, function(value, key) {
                return key === 'email1' || key === 'email2' || key === 'email3' || key === 'email4';
            }, this);
        }
        return siBean;
    },

// Delete the enriched phone numbers also in original model and fill the rest into siBean in order.
    _distributePhones: function(siBean, key, value) {
        siBean[key] = value ? value : '';
        return siBean;
    },

    _trackEvent: function(category, action) {
        if (!this.instanceId) {
            return;
        }
        var eventObject = {
            category: this.moduleName + category,
            action: action,
            label: this.instanceId
        };
        if (app.analytics && app.analytics.connector) {
            app.analytics.connector.trackEvent(eventObject);
        }
    },

    _setStage2ErrorCode: function(err) {
        if (_.isUndefined(this._stage2ErrorCode)) {
            this._stage2ErrorCode = err.status;
            this.isValidVersion = (SUGAR.App.hint.versionCompare()>=0);
            this.oldHintPreview = SUGAR.App.hint.shouldUseOldHintPreview(this.moduleName);
            this.isListView = SUGAR.App.hint.isListView();
            this.trigger("changed:_stage2ErrorCode");
        }
    },

    _setFieldViewModel: function() {

        var that = this;

        _.each(this.metadata, function(panel) {
            _.each(panel.fields, function(field) {

                //For account fields we need set the true parent model.  This should be derived from metadata in the near future but trying to minimize
                //the chance of regression for the v4.0 fix.
                if (that.moduleName !== 'Accounts' && (panel.name == 'company_info' || panel.name == 'company_extended') && ! /^hint_[\w]*_c/i.test(field.name)) {

                    //Hint prefixed fields belong to the parent module
                    field.model = that.account_model;
                }
                else {
                    field.model = that.model;
                }

            });
        });

    },
    initialize: function(options) {
        this.options = options;
        var self = this;
        this._super('initialize', [options]);
        var isAccountCreateDrawerOpen = (SUGAR.App.router._currentFragment === 'Accounts/create');
        this.isValidVersion = (app.hint.versionCompare()>=0);
        this.metadata = options.meta.panels = app.hint.getPanelMetadata(options.module);
        this.configedFields = [];
        this.preFilledDataFields = [],
        self.modelDiffFlag = true;
        _.each(options.meta.panels, function(panel) {
            _.each(panel.fields, function(field) {
                self.configedFields.push(field.name);
            });
        });

        this.dataView = 'stage2-preview';
        this._activeRequest = null;
        this._parentDataView = this.context.parent.get('dataView');
        this._delegateEvents();
        this.moduleName = this.context.get('module');
        this.isModuleAdmin = _.isUndefined(app.user.getAcls()[this.moduleName].admin);
        this.stage2CreateMode = this.context.parent.get('create');
        this.enrichAttributeList = (this.moduleName === 'Accounts') ? this.enrichAccountsAttributeList : this.enrichLeadsAttributeList;
        this.saveDisableAttrList = (this.moduleName === 'Accounts') ? this.saveAccountsDisableAttrList : this.saveLeadsDisableAttrList;
        this._originalModel = this.model;
        // empties the queue which stores the previous Account Name.
        if (isAccountCreateDrawerOpen) {
            self.previousAccountQueue = [];
        }
        // The updateModel() is called to render the Accounts Module, when the saved record is about to render
        // to get the updated data from the record view.
        if (self.context.get('module') === 'Accounts' && !isAccountCreateDrawerOpen) {
            self._updateModel();
        }

        this.model = this.model.clone();
        this.account_model = app.data.createBean('Accounts', {});

        var leadsAttrs = self.getFieldNamesForSending();

        self.fetchNewData = this._originalModel.clone();
        self.fetchNewDataAccounts = this._originalModel.clone();

        _.each(leadsAttrs, function(field) {
            if (field !== 'email' && field !== 'first_name' && field !== 'last_name') {
                self.fetchNewData.attributes[field] = '';
            }
        });

        _.each(leadsAttrs, function(field) {
            if (field !== 'name' && field !== 'website' && !self.context.get('model').exitDropdownNoEnrich) {
                self.fetchNewDataAccounts.attributes[field] = '';
            }
        });

        this._setFieldViewModel();

        this._callRetryCounter = 0;

        if (this.moduleName === 'Leads') {
            this.saveDisableAttrList = _.without(this.saveDisableAttrList, 'account_name');
        }

        this._callStage2API('GET', 'stage2/params', {
            success: function(data) {
                self.instanceId = data.instanceId;
                if (app.analytics && app.analytics.connector) {
                    app.analytics.connector.set('&uid', data.analyticsUserId);
                    app.analytics.connector.set('dimension1', data.instanceId);
                }
            },
            error: function(err) {
                return;
            }
        });

        this.on("changed:_stage2ErrorCode", this.render, this);
        this.on("changed:_hintRequestCompleted", this.render, this);

        if (this.stage2CreateMode) {
            // Make sure the orginal model has all hint attributes.
            this._resetModel();

            app.events.on('hint:user-input', function(_keyAttrChanged) {
                if (_keyAttrChanged) {
                    self._updateModel();
                } else {
                    this.model.set(_.omit(self._originalModel.changedAttributes(), 'phone_work'));
                }
            }, this);

            this.on('hint:user-save', function() {
                this.model.set(_.omit(self._originalModel.changedAttributes(), 'phone_work'));
            }, this);
        } else {
            // On list view, if the model changed before preview called, sync already happened during change
            // So listento sync won't trigger '_updateModel', we have to call '_updateModel' directly.
            if (this._parentDataView === 'list' && !_.isEmpty(this._originalModel.changed)) {
                this._updateModel();
            } else {
                this.listenToOnce(this._originalModel, 'sync', this._updateModel);
            }
        }
    },

    _resetModel: function() {
        var _resetParams = {};
        _.each(this.enrichAttributeList.concat(this.saveDisableAttrList), function(item) {
            if (!this._originalModel.has(item)) {
                _resetParams[item] = '';
            }
        }, this);
        this._originalModel.set(_resetParams, {
            silent: true
        });
    },

    _handlePhones: function(phoneStr) {
        if (this.moduleName === 'Leads') {
            this.model.set('hint_account_website_c', this._originalModel.get('website') || '');
        }
    },

    _updateModel: function() {

        var self = this;
        self._setFieldViewModel();

        if (this.model) {
            this.model.set(this._originalModel.attributes);
            if (this.moduleName !== 'Accounts') {
                this._handlePhones(this._originalModel.get('phone_work'));
            }
            this.$('[data-name="saveAll"]').tooltip({
                title: 'Data enrichment is processing.',
                placement: 'left'
            });
            self._erasedFields = self.model.get('_erased_fields');

            // Get account ID first.
            var account = this.model.get('accounts');
            if (this.moduleName === 'Contacts' && account && account.id && !_.isEmpty(account.id)) {
                var accountBean = app.data.createBean('Accounts', {
                    id: account.id
                });
                accountBean.fetch({
                    success: function(accountBean) {
                        if (_.contains(accountBean.get('_erased_fields'), 'name')) {
                            self._erasedFields.push('account_name');
                        }
                        self.account_model = accountBean;
                        self._setFieldViewModel();
                        self._enrichModel();
                    },
                    error: function(err) {
                        app.logger.error('Failed to fetch accountBean: ' + JSON.stringify(err));
                        self._enrichModel();
                    }
                });
            } else {
                this._enrichModel();
            }
        }
    },

    _delegateEvents: function() {
        app.events.on('preview:collection:change', this.showPreviousNextBtnGroup, this);
        app.events.on('preview:module:update', this.updatePreviewModule, this);
        if (this.layout) {
            this.layout.on('preview:pagination:fire', this.switchPreview, this);
        }
    },

    updatePreviewModule: function(module) {
        this.previewModule = module;
    },

    filterCollection: function() {
        this.collection.remove(_.filter(this.collection.models, function(model) {
            return !app.acl.hasAccessToModel('view', model);
        }, this), {
            silent: true
        });
    },

    setEditableFields: function() {
        this.editableFields = [];
    },

    _renderHtml: function() {
        this.showPreviousNextBtnGroup();
        app.view.View.prototype._renderHtml.call(this);
    },

    /**
     * Show previous and next buttons groups on the view.
     * This gets called everytime the collection gets updated. It also depends
     * if we have a current model or layout.
     */
    showPreviousNextBtnGroup: function() {
        if (!this.model || !this.layout) {
            return;
        }

        var collection = this.collection;
        if (!collection || !collection.size()) {
            this.layout.hideNextPrevious = true;
            // Need to rerender the preview header
            this.layout.trigger('preview:pagination:update');
            return;
        }

        var recordIndex = collection.indexOf(collection.get(this.model.id));
        this.layout.previous = collection.models[recordIndex - 1] ? collection.models[recordIndex - 1] : undefined;
        this.layout.next = collection.models[recordIndex + 1] ? collection.models[recordIndex + 1] : undefined;
        this.layout.hideNextPrevious = _.isUndefined(this.layout.previous) && _.isUndefined(this.layout.next);

        // Need to rerender the preview header
        this.layout.trigger('preview:pagination:update');
    },

    switchModel: function(model) {
        this.stopListening(this._originalModel);
        this._originalModel = model;
        model = model.clone();
        this.model = model;

        // Close preview when model destroyed by deleting the record
        this.listenTo(this.model, 'destroy', function() {
            // Remove the decoration of the highlighted row
            app.events.trigger('list:preview:decorate', false);
            // Close the preview panel
            app.events.trigger('preview:close');
        });

        if (this._parentDataView === 'list' && !_.isEmpty(this._originalModel.changed)) {
            this._updateModel();
        } else {
            this.listenToOnce(this._originalModel, 'sync', this._updateModel);
        }
    },

    /**
     * Switches preview to left/right model in collection.
     * @param {Object} data
     * @param {String} data.direction Direction that we are switching to, either 'left' or 'right'.
     * @param index Optional current index in list
     * @param id Optional
     * @param module Optional
     */
    switchPreview: function(data, index, id, module) {
        var currID = id || this.model.get('id'),
            currIndex = index || _.indexOf(this.collection.models, this.collection.get(currID));

        if (this.switching || this.collection.models.length < 2) {
            // We're currently switching previews or we don't have enough models, so ignore any pagination click events.
            return;
        }
        this.switching = true;

        if (data.direction === 'left' && (currID === _.first(this.collection.models).get('id')) ||
            data.direction === 'right' && (currID === _.last(this.collection.models).get('id'))) {
            this.switching = false;
            return;
        } else {
            // We can increment/decrement
            data.direction === 'left' ? currIndex -= 1 : currIndex += 1;
            //Reset the preview
            app.events.trigger('preview:render', this.collection.models[currIndex], this.collection, true);
            this.switching = false;
        }
    },

    bindDataChange: function() {
        var self = this;
        if (this.collection) {
            this.collection.on('reset', this.filterCollection, this);
            // when remove active model from collection then close preview
            this.collection.on('remove', function(model) {
                if (model && this.model && (this.model.get('id') == model.get('id'))) {
                    // Remove the decoration of the highlighted row
                    app.events.trigger('list:preview:decorate', false);
                    // Close the preview panel
                    app.events.trigger('preview:close');
                }
            }, this);
        }

        // Update model in list view.
        this.context.on('change:model', function(ctx, model) {
            this.switchModel(model);
            self.isHintRequestLoading = true;
            this.render();
        }, this);

        // Update model in record view.
        if (this.moduleName === 'Leads' || this.moduleName === 'Contacts' || this.moduleName === 'Accounts') {
            if (this._parentDataView === 'record') {
                self._updateModel();
            }
        }
    },

    _isEmpty: function(value) {
        if (_.isUndefined(value) || _.isNull(value) || _.isNaN(value)) {
            return true;
        }
        if (_.isNumber(value)) {
            return false;
        }
        if (_.isString(value)) {
            return value.trim() === '';
        }
        // Object and array.
        return _.isEmpty(value);
    },

    issueDataEnrichmentRequest: function(type, url, data, options) {
        var self = this;
        if (self._activeRequest) {
            self._activeRequest.abort();
        }
        self.isHintRequestLoading = true;
        self.isValidVersion = (SUGAR.App.hint.versionCompare()>=0);
        self.oldHintPreview = SUGAR.App.hint.shouldUseOldHintPreview(this.moduleName);
        self.isListView = SUGAR.App.hint.isListView();
        self.trigger("changed:_hintRequestCompleted");

        // it is time to apply the data enrichment
        self._activeRequest = $.ajax({
            type: type,
            url: url,
            data: data,
            headers: {
                authToken: self._stage2accessToken
            },
            success: function(data) {
                options && options.success && options.success(data);
            },
            error: function(err) {
                options && options.error && options.error(err);
            }
        });
    },

    _issueRequest: function(type, url, data, options) {
        var self = this;
        return $.ajax({
            type: type,
            url: url,
            data: data,
            headers: {
                authToken: self._stage2accessToken
            },
            success: function(data) {
                options && options.success && options.success(data);
            },
            error: function(err) {
                options && options.error && options.error(err);
            }
        });
    },

    _trackResponse: function(data) {
        // Tracking enrichment request event.
        this._trackEvent(' Enrichment - List View Preview', 'Request Enrichment');
        if (data && data.enriched) {
            this._trackEvent(' Enrichment - List View Preview', 'Non-Empty Response');
        } else {
            this._trackEvent(' Enrichment - List View Preview', 'Empty Response');
        }
    },

// encapsulate access to storage representation
    _recordMetricsToken: function(data) {
        app.user.set('hintMetricsToken', data.metricsToken);
    },

    _disposeHintView: function() {
        if (this.stage2CreateMode) {
            app.events.trigger('preview:close');
            this.context.parent.trigger('app:preview:stage2-show-notification');
            return;
        }
        this.$('[data-name="saveAll"]').remove();
        if (this.moduleName !== 'Accounts') {
            if (!this._originalModel.get('account_name')) {
                this.$('[data-type="text"][data-name="account_name"]').innerHTML = ''
                    .concat(
                        '<div class="ellipsis_inline not_found">',
                        app.lang.get('LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'),
                        '</div>'
                    );
            }
        }
    },

    _beanEnriched: function(bean) {
        // If the bean is the same with original model, means no data enriched.
        bean = _.omit(bean, 'hint_first_name_c', 'hint_last_name_c', 'hint_full_name_c');
        var enrichedAttrs = _.pick(bean, function(value, key) {
            return this._isEmpty(this._originalModel.get(key)) && !this._isEmpty(value);
        }, this);
        return !_.isEmpty(enrichedAttrs) ? true : false;
    },

    // Called after finishing account enrichment process in the create drawer. Used to reset back to initial state
    // where we auto fill enrichment results based on the account selected from the dropdown. Only when the user
    // prematurely tabs/clicks out of the dropdown do we not want to autofill the enrichment results.
    _resetEnrichAutoFillState: function() {
        var isAccountCreateDrawerOpen = (SUGAR.App.router._currentFragment === 'Accounts/create');
        if (isAccountCreateDrawerOpen && this.context) {
            this.context.get('model').exitDropdownNoEnrich = false;
            this.shouldShowHintCloudLogo = false;
        }
    },

    _enrichModel: function() {
        var self = this;

        if (_.isEmpty(self.enrichFieldsOptions)) {
            this._callStage2API('read', 'hint/enrich/config', {
                success: function(data) {
                    var rawConfigData = data.response.config_data;
                    if (rawConfigData) {
                        self.enrichFieldsOptions = JSON.parse(rawConfigData);
                    }
                },
                error: function (err) {
                    app.logger.error('Failed to reach hint/enrich/config' + JSON.stringify(err));
                }
            });
        }

        var isCreateDrawerAccountsOpen = SUGAR.App.router._currentFragment === 'Accounts/create';

        // Show cloud icons for downloading in two cases
        // 1. User is in the accounts create drawer and has tabbed/clicked out of the account name dropdown
        // 2. User is in the contacts/leads create drawer
        if (self.context) {
            self.shouldShowHintCloudLogo = isCreateDrawerAccountsOpen ? self.context.get('model').exitDropdownNoEnrich : true;
        }

        var accountsHintFields = self.enrichAccountsAttributeList;

        if ((self.moduleName === 'Leads' || self.moduleName === 'Contacts') && self._parentDataView === 'list') {
            self.fetchNewData.attributes.id = self._originalModel.attributes.id;
            self.fetchNewData.attributes.first_name = self._originalModel.attributes.first_name;
            self.fetchNewData.attributes.last_name = self._originalModel.attributes.last_name;
            self.fetchNewData.attributes.email = self._originalModel.attributes.email;
        }

        if (self._callRetryCounter > 3) {
            self._callRetryCounter = 0;
            self.$('[data-name="saveAll"]').remove();
            self._resetEnrichAutoFillState();
            return;
        } else if (self._callRetryCounter !== 0) {
            app.logger.debug('Data enrichment retry #' + self._callRetryCounter);
        }

        _.each(accountsHintFields, function(field) {
            if (field !== 'name' && field !== 'website' && self._originalModel.get(field) && self.modelDiffFlag) {
                self.containsPreAccountFields = true;
                if (!self.includes(self.preFilledDataFields, field)) {
                    self.preFilledDataFields.push(field);
                }
            }
        });

        self.modelDiffFlag =  false;

        if (_.isEmpty(self._stage2urlV2)) {
            this._callStage2API('GET', 'stage2/params', {
                success: function(data) {
                    self._enrichModel();
                },
                error: function(err) { }
            });
            return;
        }

        if (!self._stage2accessToken) {
            this._callStage2API('create', 'stage2/token', {
                success: function(data) {
                    self._stage2accessToken = data.accessToken;
                    self._subscriptionType = data.subscriptionType;
                    self._enrichModel();
                },
                error: function(err) { }
            });
            return;
        }
        var username = null;
        if (app.user && app.user.attributes) {
            username = app.user.attributes.user_name;
        }

        var instanceId = app.config.uniqueKey;

        // clearing the originalModuleAttributes, so that the SIBean will enrich all of the data.
        // checking if there are already some fields populated.
        if (isCreateDrawerAccountsOpen) {
            if (((self.previousAccountsName !== self._originalModel.get('name')) && !_.isEmpty(self._originalModel.get('name'))) || self.cancelName) {
                self.cancelName = false;
                _.each(accountsHintFields, function(field) {
                    // enriches new data based on account name. It handles pre-typed data on the record view to be saved.
                    if (field !== 'name' && self._originalModel.get(field) && !self.includes(self.preFilledDataFields, field)) {
                        self.containsPreAccountFields = true;
                        if (self.preFilledDataFields.length) {
                            self.fetchNewDataAccounts.attributes[field] = '';
                        } else if (!self.shouldShowHintCloudLogo) {
                            self._originalModel.attributes[field] = '';
                        }
                    }
                });
            } else if (((self.previousAccountsWebsite !== self._originalModel.get('website')) && !_.isEmpty(self._originalModel.get('website'))) || self.cancelName){
                _.each(accountsHintFields, function(field) {
                    // enriches new data based on account website. It handles pre-typed data on the record view to be saved.
                    if (field !== 'website' && self._originalModel.get(field) && !self.includes(self.preFilledDataFields, field)) {
                        self.containsPreAccountFields = true;
                        if (self.preFilledDataFields.length) {
                            self.fetchNewDataAccounts.attributes[field] = '';
                        } else if (!self.shouldShowHintCloudLogo) {
                            self._originalModel.attributes[field] = '';
                        }
                    }
                });
            }
        }
        self.fetchNewDataAccounts.attributes['name'] = self._originalModel.attributes['name'];
        self.fetchNewDataAccounts.attributes['website'] = self._originalModel.attributes['website'];
        var SIBean = (self.moduleName === 'Leads' || self.moduleName === 'Contacts') ? JSON.stringify(self.convertSugarBeanToHintPayload(
            _.pick(self.fetchNewData.attributes, self.getFieldNamesForSending()))) :
            JSON.stringify(self.convertSugarBeanToHintPayload(
                _.pick(self.fetchNewDataAccounts.attributes, self.getFieldNamesForSending())));

        var endpoint = self.moduleName === 'Accounts' ? '/enrich-account-bean' : '/enrich-person-bean';
        self._attrsToSave = {};

        // This check is to prevent multiple API calls when the user is on the create drawer and tries to make
        // an another search for other candidate (Leads or Contacts).
            self.issueDataEnrichmentRequest('GET', self._stage2urlV2 + endpoint, {
                bean: SIBean,
                username: username,
                instanceId: instanceId,
                moduleName: self.moduleName,
                subscriptionType: self._subscriptionType
            }, {
                success: function (data) {
                    self._activeRequest = null;
                    self._callRetryCounter = 0;
                    self._trackResponse(data);
                    self._recordMetricsToken(data);
                    self.isHintRequestLoading = false;
                    self.trigger("changed:_hintRequestCompleted");

                    if (self.$('[data-name="saveAll"]')) {
                        self.$('[data-name="saveAll"]').tooltip('destroy');
                    }
                    if (self.disposed || !data || !data.enriched) {
                        self._disposeHintView();
                        self._resetEnrichAutoFillState();
                        return;
                    }

                    var bean = self.convertHintPayloadToSugarBean(data.bean);

                    var AccountName = self._originalModel.get('name') || bean.name ||  self.previousAccountsName;
                    var websiteName = self._originalModel.get('website') || bean.website || self.previousAccountsWebsite;
                    var previousAccountName = bean.name;

                    if (previousAccountName === AccountName && !_.isEmpty(previousAccountName) && !self.shouldShowHintCloudLogo) {
                        previousAccountName = self.previousAccountQueue.pop();
                        self.previousAccountQueue.push(AccountName);
                    }

                    var beanAccountFields = {
                        'name': bean.name,
                        'website': bean.website,
                        'description': bean.description,
                        'sic_code': bean.sic_code,
                        'annual_revenue': bean.annual_revenue,
                        'twitter': bean.twitter,
                        'hint_account_size_c': bean.hint_account_size_c,
                        'hint_account_location_c': bean.hint_account_location_c,
                        'hint_account_industry_c': bean.hint_account_industry_c,
                        'hint_account_founded_year_c': bean.hint_account_founded_year_c,
                        'hint_account_facebook_handle_c': bean.hint_account_facebook_handle_c,
                        'hint_account_industry_tags_c': bean.hint_account_industry_tags_c,
                        'hint_account_naics_code_lbl_c': bean.hint_account_naics_code_lbl_c,
                        'hint_account_fiscal_year_end_c': bean.hint_account_fiscal_year_end_c
                    };

                    // this ensures the prefilled fields are cleared on successful bean enrichment.
                    _.each(accountsHintFields, function(field) {
                        if (field !== 'name' && field !== 'website' && bean[field]) {
                            self.preFilledDataFields = [];
                            self.modelDiffFlag = false;
                        }
                    });

                    if ((self.containsPreAccountFields) && isCreateDrawerAccountsOpen && !self.shouldShowHintCloudLogo) {
                        self._warningAlertForDuplicates(self, beanAccountFields, previousAccountName);
                        self.previousBeanAccountsFields = beanAccountFields;
                    } else if (isCreateDrawerAccountsOpen) {
                        // so we need to show the preview clouds on tab out, when there's already account data pre existing??
                        if (!self.shouldShowHintCloudLogo) {
                            self.model.set(beanAccountFields);
                            self._originalModel.set(beanAccountFields);
                            self.previousAccountsName = self._originalModel.get('name');
                            self.previousAccountsWebsite = self._originalModel.get('website');
                            self.previousBeanAccountsFields = beanAccountFields;
                        }
                    }

                    var shouldAllowUserOverwrite = true;
                    _.each(bean, function(value, attr) {
                        if (attr !== 'website' && attr !== 'name' && bean[attr]) {
                            shouldAllowUserOverwrite = false;
                        }
                    });

                    if (shouldAllowUserOverwrite) {
                        shouldAllowUserOverwrite = false;
                        self._originalModel.attributes['website'] = websiteName;
                        self._originalModel.attributes['name'] = AccountName;
                    }

                    if (!self._beanEnriched(bean)) {
                        self._disposeHintView();
                        self._resetEnrichAutoFillState();
                        return;
                    }
                    self.$('[data-name="saveAll"]').removeClass('hint-preview-icon--loading');
                    _.each(bean, function (value, attr) {
                        var AccountsSicFieldFound = (self.moduleName === 'Accounts' && attr === 'hint_account_sic_code_label_c');
                        var newDataFound = AccountsSicFieldFound ?
                            bean['sic_code'] != self._originalModel.attributes['sic_code'] :
                            bean[attr] != self._originalModel.attributes[attr];

                        // It checks if its an actual overwrite with same phone numbers but different order.
                        var phoneTypeFields = ['phone_work', 'phone_other', 'phone_mobile'];
                        if (self.includes(phoneTypeFields, attr)) {
                            var recordHintPhoneFieldsArray = self._originalModel.attributes[attr] ?
                                self._originalModel.attributes[attr].split(', ') : [];
                            var newHintPhoneFieldsArray = bean[attr] ? bean[attr].split(', ') : [];
                            if (recordHintPhoneFieldsArray.length === newHintPhoneFieldsArray.length) {
                                newDataFound = recordHintPhoneFieldsArray.length !== _.intersection(newHintPhoneFieldsArray, recordHintPhoneFieldsArray).length;
                            }
                        }

                        // Tracking when specific field gets enriched by stage2.
                        if (_.contains(self.enrichAttributeList, attr)) {
                            self._trackEvent(' Enrichment - List View Preview', attr + ' enriched');
                        }

                        if (AccountsSicFieldFound) {
                            self.model.set('sic_code', bean['sic_code']);
                            self.model.set(attr, value);
                        }

                        // Only allow enrichment of fields that have enriched value but don't have
                        // an pre-existing value themselves.
                        if (_.contains(self.configedFields, attr) && (self._isEmpty(self.model.get(attr)) || newDataFound) && !_.contains(self._erasedFields, attr)) {
                            self.model.set(attr, value);
                            if (!_.contains(self.saveDisableAttrList, attr)) {
                                // If the field is not allowed to edit, set lock icon.
                                if (!app.acl.hasAccessToModel('edit', self.model, attr)) {
                                    self.$('[data-name="' + attr + '"][data-action="lock"]').removeClass('hidden');
                                    //Hide the default no access span
                                    self.$('.noaccess').addClass('hidden');
                                } else {
                                    self._attrsToSave[attr] = value;
                                    if (attr === 'hint_account_website_c' && self.moduleName === 'Leads') {
                                        self._attrsToSave['website'] = value;
                                    }
                                    self.$('[data-name="' + attr + '"][data-action="copy"]').removeClass('hidden');
                                }
                            }
                        }
                    }, this);

                    if (self.enrichFieldsOptions && self.enrichFieldsOptions[self.moduleName]) {
                        var currentModule = self.moduleName;
                        var enrichField = self.enrichFieldsOptions[currentModule].fields;
                        _.each(enrichField, function (value, attr) {
                            if (!value) {
                                var isAccountSicCodeSpecialCase = currentModule === 'Accounts' && attr === 'hint_account_sic_code_label_c';
                                if (isAccountSicCodeSpecialCase) {
                                    var sicCodeFromRecordView = self.context.get('model').attributes['sic_code'];
                                    self.model.set('hint_account_sic_code_label_c', sicCodeFromRecordView);
                                    self.$('.hint-preview-icon--cloud[data-name="' + attr + '"]').addClass('hidden');
                                } else {
                                    self.model.set(attr, self.context.get('model').attributes[attr]);
                                    self.$('.hint-preview-icon--cloud[data-name="' + attr + '"]').addClass('hidden');
                                }
                            }
                        }, this);
                    }

                    if (self.moduleName === 'Leads') {
                        self.$('.hint-preview-icon--cloud[data-name="' + 'hint_account_website_c' + '"]').addClass('hidden');
                    }

                    // Hide other two phone fields if there is no value.
                    if (self.moduleName === 'Leads' || self.moduleName === 'Contacts') {
                        if (self._isEmpty(self.model.get('hint_phone_1_c'))) {
                            self.$('[data-name="hint_phone_1_c"]').closest('.row-fluid').addClass('hidden');
                        }
                        if (self._isEmpty(self.model.get('hint_phone_2_c'))) {
                            self.$('[data-name="hint_phone_2_c"]').closest('.row-fluid').addClass('hidden');
                        }
                    }
                    if (!_.isEmpty(self._attrsToSave)) {
                        self.$('[data-name="saveAll"]').addClass('hint-preview-icon--cloud').tooltip({
                            title: app.lang.get('LBL_HINT_PREVIEW_TOOLTIP_TITLE'),
                            placement: 'left'
                        });
                    }
                    self._resetEnrichAutoFillState();
                },
                error: function (err) {
                    app.logger.error('Failed to enrich data on Hint: ' + JSON.stringify(err));
                    self.isHintRequestLoading = false;
                    self._activeRequest = null;

                    // For aborted requests don't do anything: this avoids race conditions, repeated
                    // aborted data enrichments and so on.
                    if (err && err.statusText === 'abort') {
                        self._resetEnrichAutoFillState();
                        return;
                    }
                    self._stage2accessToken = null;
                    // Track when response return with error.
                    self._trackEvent(' Enrichment - List View Preview', 'Error Response');
                    ++self._callRetryCounter;
                    self._enrichModel();
                }
            });
    },

    includes: function(arrayToCheck, searchValue) {
        var returnValue = false;
        var pos = arrayToCheck.indexOf(searchValue);
        if (pos >= 0) {
            returnValue = true;
        }
        return returnValue;
    },

    /**
     * This function pops a warning message if any duplicates are found in the record.
     * @param {Object} self, is the 'this' object for the model.
     * @param {Object} beanAccountFields, field objects which we get from the hint data provider to populate fields
     * @param {Object} previousAccountName, it stores the name of previous account searched when user hits cancel.
     */
    _warningAlertForDuplicates: function(self, beanAccountFields, previousAccountName) {
        var showWarningMessage = false;
        if (!this.shouldShowHintCloudLogo) {
            var duplicateAccountCheck = (!_.isEqual(beanAccountFields, self.previousBeanAccountsFields)
            && !_.isEmpty(self.previousBeanAccountsFields)) || self.containsPreAccountFields;
            _.each(beanAccountFields, function(value, attr) {
                if (attr !== 'name' && attr !== 'website' && !_.isEmpty(value) && duplicateAccountCheck) {
                    showWarningMessage = true;
                }
            }, this);
        }

        if (showWarningMessage) {
            app.alert.show('message-id', {
                level: 'confirmation',
                messages: SUGAR.App.lang.get('LBL_HINT_MSG_TOTAL_OVERWRITE'),
                autoClose: false,
                // only enrich if the user has intended to do so (meaning they have
                // chosen a company from the dropdown list)
                onConfirm: function () {
                    if (!self.shouldShowHintCloudLogo) {
                        // reset cloud icons & enrich auto fill back to false for any future
                        // enrichment calls
                        self._resetEnrichAutoFillState();
                        self.model.set(beanAccountFields);
                        self._originalModel.set(beanAccountFields);
                        self.previousAccountsName = self._originalModel.get('name');
                        self.previousAccountsWebsite = self._originalModel.get('website');
                    }
                },
                onCancel: function () {
                    // reset cloud icons & enrich auto fill back to false for any future
                    // enrichment calls
                    self._resetEnrichAutoFillState();    

                    self.cancelName = true;
                    self._originalModel.set('name', previousAccountName);
                    self.containsPreAccountFields = false;
                }
            });
        }
    },

    _warningAlert: function(self, attr, value, msg) {
        var fieldName = SUGAR.App.lang.get(self.fieldTypeTranslations[attr]);
        var message = msg ? msg : SUGAR.App.lang.get('LBL_HINT_MSG_OVERWRITE_FIELD', self.module, {fieldName: fieldName});
        var AccountsSicFieldFound = self._accountContainsSICLabel(self, attr);
        // This Flag is set when saveAll cloud icon is clicked and an alert is shown iff data in the record view
        // is not equal to the data found  by the Hint.
        var warningMessageDisplayFlag = false;
        if (typeof attr === 'object') {
            for (var key in attr) {
                if (attr.hasOwnProperty(key)) {
                    if (self._accountContainsSICLabel(self, key)) {
                        if (self._isValueUpdated(self, attr, 'sic_code')) {
                            warningMessageDisplayFlag = true;
                        }
                    } else if (self._isValueUpdated(self, attr, key)) {
                        warningMessageDisplayFlag = true;
                    }
                }
            }
        }

        var doIndividualFieldsDiffer = AccountsSicFieldFound ?
            self._doSICCodeExist(self, self.model.get('sic_code'), 'sic_code') : self._doSICCodeExist(self, value, attr);

        // This check is to display warning iff an individual in the record view is not equal to the one found by the Hint.
        if (warningMessageDisplayFlag || doIndividualFieldsDiffer) {
            app.alert.show('message-id', {
                level: 'confirmation',
                messages: message,
                autoClose: false,
                onConfirm: function () {
                    var isPhoneTypeField = ['phone_work', 'phone_other', 'phone_mobile'];

                    // Check to avoid adding duplicates in the phoneFields and completely overwrite it.
                    // Teh value parameter is of the form (oldAttrValue(From Hint record view field),
                    // newAttrValue(found by hint)).
                    if (self.includes(isPhoneTypeField, attr) && value.indexOf(self._originalModel.get(attr) + ', ') > -1) {
                        self._originalModel.save(attr, value.replace(self._originalModel.get(attr) + ', ', ''));
                    }  else if (AccountsSicFieldFound) {
                        self._originalModel.save('sic_code', self.model.get('sic_code'));
                    } else {
                        self._copyOnlySicCodeToAccount(self, attr, value);
                    }
                },
                onCancel: function () {
                    // _updateModel() is called to prevent changes in model when user hits cancel
                    // after save-All cloud icon is being hit.
                    self._updateModel();
                }
            });
        } else {
            // it will execute if there are no fields in the record view which needs to be overwritten
            // and hence no warning message.
            self._copyOnlySicCodeToAccount(self, attr, value);
        }
    },

    _warningAlertForCreateDrawer: function(self, attr, value, msg) {
        var fieldName = SUGAR.App.lang.get(self.fieldTypeTranslations[attr]);
        var message = msg ? msg : SUGAR.App.lang.get('LBL_HINT_MSG_OVERWRITE_FIELD', self.module, {fieldName: fieldName});
        // This Flag is set when saveAll cloud icon is clicked and an alert is shown iff data in the record view
        // is not equal to the data found  by the Hint.
        var warningMessageDisplayFlag = false;
        if (typeof attr === 'object') {
            for (var key in attr) {
                if (attr.hasOwnProperty(key)) {
                    if (self._isValueUpdated(self, attr, key)) {
                        warningMessageDisplayFlag = true;
                    }
                }
            }
        }
        var doIndividualFieldsDiffer = self._doSICCodeExist(self, value, attr);

        // This check is to display warning iff an individual in the record view is not equal to the one found by the Hint.
        if (warningMessageDisplayFlag || doIndividualFieldsDiffer) {
            app.alert.show('message-id', {
                level: 'confirmation',
                messages: message,
                autoClose: false,
                onConfirm: function () {
                    var isPhoneTypeField = ['phone_work', 'phone_other', 'phone_mobile'];
                    // Check to avoid adding duplicates in the phoneFields and completely overwrite it.
                    // The value parameter is of the form (oldAttrValue(From Hint record view field),
                    // newAttrValue(found by hint)).
                    if (self.includes(isPhoneTypeField, attr) && value.indexOf(self._originalModel.get(attr) + ', ') > -1) {
                        self._originalModel.set(attr, value.replace(self._originalModel.get(attr) + ', ', ''));
                    } else {
                        self._originalModel.set(attr, value);
                        self.trigger('hint:user-save');
                    }
                },
                onCancel: function () {
                    self._enrichModel();
                }
            });
        } else {
            self._originalModel.set(attr, value);
            self.trigger('hint:user-save');
        }
    },

    _accountContainsSICLabel: function(self, attr) {
        return self.moduleName === 'Accounts' && attr === 'hint_account_sic_code_label_c';
    },

    _isValueUpdated: function(self, attr, key) {
        return attr[key] !== self._originalModel.get(key) && !_.isEmpty(self._originalModel.get(key));
    },

    _doSICCodeExist: function(self, value, attr) {
        return (value !== self._originalModel.get(attr) && !_.isEmpty(self._originalModel.get(attr)));
    },

    _copyOnlySicCodeToAccount: function(self, attr, value) {
        if (self.moduleName === 'Accounts') {
            for (var key in attr) {
                if (attr.hasOwnProperty(key)) {
                    if (key === 'hint_account_sic_code_label_c') {
                        attr['sic_code'] = self.model.get('sic_code');
                    }
                }
            }
            self._originalModel.save(attr, value);
        } else {
            self._originalModel.save(attr, value);
        }
    },

    _callStage2API: function(method, api, options) {
        var self = this;
        app.api.call(method, app.api.buildURL(api), null, {
            success: function(data) {
                if (api === 'stage2/params') {
                    self._stage2url = data.enrichmentServiceUrl;
                    self._stage2urlV2 = data.enrichmentServiceUrlV2;
                }
                options && options.success && options.success(data);
            },
            error: function(err) {
                app.logger.error('Failed to get Hint param: ' + JSON.stringify(err));
                self._setStage2ErrorCode(err);
                options && options.error && options.error(err);
            }
        });
    },

    _recordEvent: function(eventType, target) {
        var self = this;
        if (_.isEmpty(self._stage2url)) {
            self._fetchStage2Url('GET', 'stage2/params', function( /*data*/) {
                self._recordEvent(eventType, target);
            });
            return;
        }
        this._issueRequest('POST', self._stage2url + '/event', {
            metricsToken: self._getMetricsToken(),
            eventType: eventType,
            target: target,
            origin: self.moduleName
        }, {
            success: function() { },
            error: function(err) {
                app.logger.error('Failed to record event: ' + JSON.stringify(err));
            }
        });
    },

    _socialLinkClicked: function(evt) {
        var clickInfo = {
            clickType: 'socialMediaLink',
            clickedURL: evt.currentTarget.href,
            metricsToken: this._getMetricsToken(),
            origin: this.context.get('module')
        };
        this._recordLinkClick(clickInfo);
    },

    _recordLinkClick: function(clickInfo) {
        var self = this;
        if (_.isEmpty(self._stage2url)) {
            self._fetchStage2Url('GET', 'stage2/params', function( /*data*/) {
                self._recordLinkClick(clickInfo);
            });
            return;
        }
        this._issueRequest('POST', self._stage2url + '/url-click', clickInfo, {
            success: function() { },
            error: function(err) {
                app.logger.error('Failed to record link click event: ' + JSON.stringify(err));
            }
        });
    },

// encapsulate access to storage representation
    _getMetricsToken: function() {
        return app.user.get('hintMetricsToken');
    },

    _updateBaseModel: function(para1, para2) {
        var self = this;
        var AccountsSicFieldFound = self._accountContainsSICLabel(self, para1);
        var hintViewField = AccountsSicFieldFound ? self.model.get('sic_code') : self.model.get(para1);
        var recordViewField = AccountsSicFieldFound ? self._originalModel.get('sic_code') : self._originalModel.get(para1);
        var msg = SUGAR.App.lang.get('LBL_HINT_MSG_OVERWRITE_ALL');
        msg = typeof(para1) === 'object' ? msg : '';
        if (this.stage2CreateMode) {
            if (self.moduleName !== 'Accounts') {
                if (msg) {
                    self._warningAlertForCreateDrawer(self, para1, para2, msg);
                } else if (recordViewField && (recordViewField !== hintViewField)) {
                    self._warningAlertForCreateDrawer(self, para1, para2, msg);
                } else {
                    this._originalModel.set(para1, para2);
                    this.trigger('hint:user-save');
                }
            } else {
                this._originalModel.set(para1, para2);
                this.trigger('hint:user-save');
            }
        } else if (msg) {
            self._warningAlert(self, para1, para2, msg);
        }  else if (recordViewField && (recordViewField !== hintViewField)) {
            self._warningAlert(self, para1, para2, msg);
        } else if (AccountsSicFieldFound) {
            this._originalModel.save('sic_code', self.model.get('sic_code'));
        } else {
            this._originalModel.save(para1, para2);
        }
    },

    _updateWorkPhones: function() {
        var phones = this.model.get('phone_work') || '';
        var newPhone = this.model.get('hint_phone_1_c');
        if (!this._isEmpty(newPhone) && phones.indexOf(newPhone) < 0) {
            phones = (phones === '') ? newPhone : (phones + ', ' + newPhone);
        }
        newPhone = this.model.get('hint_phone_2_c');
        if (!this._isEmpty(newPhone) && phones.indexOf(newPhone) < 0) {
            phones = (phones === '') ? newPhone : (phones + ', ' + newPhone);
        }
        return phones;
    },

    copy: function(e) {
        var self = this;
        var $btn = $(e.currentTarget);
        var attr = $btn.data('name');
        $btn.attr('data-action', '');

        var erasedFields = self.model.get('_erased_Fields');

        if (_.isEqual(attr, 'saveAll')) {

            self.filteredAttrsToSave = this._attrsToSave;
            // Update work phone value.
            if (self.moduleName !== 'Accounts') {
                var phones = this._updateWorkPhones();
                if (!self._isEmpty(phones)) {
                    self.filteredAttrsToSave['phone_work'] = phones;
                }
                self.filteredAttrsToSave = _.omit(self.filteredAttrsToSave, 'hint_phone_1_c', 'hint_phone_2_c');
            }
            // Add loading animation for saveAll icon.
            $btn.removeClass('hint-preview-icon--cloud').addClass('hint-preview-icon--loading');

            //Remove any erased fields
            self.filteredAttrsToSave = _.omit(self.filteredAttrsToSave, self._erasedFields);

            setTimeout(function() {
                $btn.removeClass('hint-preview-icon--loading').addClass('hint-preview-icon--confirm');
                setTimeout(function() {
                    $btn.addClass('hidden');
                }, 2000);
                setTimeout(function() {
                    if (!_.isEmpty(self.filteredAttrsToSave)) {
                        self._recordEvent('saveAllHintPersonFields', '*');
                        self._updateBaseModel(self.filteredAttrsToSave);
                        this.$('[data-action="copy"]').addClass('hidden');
                        self.$('[data-name="saveAll"]').tooltip('destroy');
                    }
                }, 500);
            }, 2000);
            // Save clicked field.
        } else {
            // Show loading icon first
            $btn.removeClass('hint-preview-icon--cloud').addClass('hint-preview-icon--loading');
            self._recordEvent('saveHintPersonField', attr);
            switch (attr) {
                case 'phone_work':
                case 'hint_phone_1_c':
                case 'hint_phone_2_c':
                    var phones = this._originalModel.get('phone_work');
                    var newPhone = this.model.get(attr);
                    var phones = (self._isEmpty(phones)) ? newPhone : phones + ', ' + newPhone;
                    self._updateBaseModel('phone_work', phones);
                    self._attrsToSave = _.omit(self._attrsToSave, attr);
                    break;
                case 'hint_account_website_c':
                    if (self.moduleName === 'Leads') {
                        self._updateBaseModel('website', this.model.get(attr));
                        self._attrsToSave = _.omit(self._attrsToSave, 'website');
                    }
                // fall through deliberately
                default:
                    self._updateBaseModel(attr, this.model.get(attr));
                    self._attrsToSave = _.omit(self._attrsToSave, attr);
            }

            // Tracking when specific field gets saved by client.
            if (_.contains(this.enrichAttributeList, attr)) {
                this._trackEvent(' Enrichment - List View Preview', attr + ' saved');
            }

            $btn.removeClass('hint-preview-icon--loading').addClass('hint-preview-icon--confirm');
            setTimeout(function() {
                $btn.addClass('hidden');
            }, 1500);

            if (!_.isEmpty(self._attrsToSave)) {
                self.$('[data-name="saveAll"]').tooltip({
                    title: app.lang.get('LBL_HINT_PREVIEW_TOOLTIP_TITLE'),
                    placement: 'left'
                });
            } else {
                self.$('[data-name="saveAll"]').remove();
            }
        }
    }
})
