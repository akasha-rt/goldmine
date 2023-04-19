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
(function(app) {

    var hint = (function() {

        var getPanelDefinitionFieldsByName;


        setDefaultValuesForFields = function(field, module) {

            switch (field.name) {

                case 'hint_account_website_c':
                    return "www.example.net";
                case 'account_name':
                    return "Example Corp";
                case 'full_name':
                    return "Jon Doe";
                case 'title':
                    return "President";
                default:

                    return field.label;

            }

        };

        /**
         * For a specific view, return a single 'panel' within the metadata
         * @param module
         * @param panelName
         * @returns {Array}
         */
        getPanelDefinitionFieldsByName = function(module, panelName) {

            var fields = [];
            var viewName = module.toLowerCase() === 'accounts' ? "stage2-account-preview" : 'stage2-preview';
            var refPanels = app.metadata.get(module).views[viewName].meta.panels;
            //Deep copy the results so we're no longer passing by reference.
            var panels = JSON.parse(JSON.stringify(refPanels));

            _.each(panels, function(panel) {

                if (panel.name !== panelName) {
                    return;
                }

                _.each(panel.fields, function(field) {
                    field.label = app.lang.get(field.label, module);
                    field.value = setDefaultValuesForFields(field, module);
                    if (field.label) {
                        fields.push(field);
                    }
                });

            });

            return fields;

        };


        /**
         * Module reveal pattern, public accessors below.
         */
        return {

            /**
             * Retrieve all of the fields in any panel within our stage2 preview metadata
             *
             * @returns {{}}
             */
            getAllFieldsForView: function(module) {

                var fields = {};

                var allFields = this.getModuleFieldsAvailableForSelection(module);

                _.each(allFields, function(field) {

                    field.value = setDefaultValuesForFields(field, module);
                    fields[field.name] = field;
                });


                return fields;

            },
            /**
             * Returns all fields in the record metadata for a particular module
             * @param module
             * @returns {*[]}
             */
            getModuleFieldsAvailableForSelection: function(module) {

                var fields = [];

                var refPanels = App.metadata.getModule(module).views.record.meta.panels;

                //Deep copy the results so we're no longer passing by reference.
                var panels = JSON.parse(JSON.stringify(refPanels));

                var that = this;
                _.each(panels, function(panel) {

                    _.each(panel.fields, function(field) {
                        if (typeof (field.readonly) !== "undefined" && field.readonly) {
                            return;
                        }

                        if (!field.label || field.label === "") {
                            console.log("Missing field for label: " + field.name);
                            return;
                        }

                        field.label = app.lang.get(field.label, module);

                        fields.push(field);
                    })
                })

                //Merge in all hint fields as well
                if (module == 'Accounts') {
                    var allDefaultFields = this.getAccountDefaultBasicPanelFields().concat(this.getAccountDefaultExpandedPanelFields());
                }
                else {
                    var allDefaultFields = this.getPeopleDefaultBasicPanelFields(module).concat(this.getPeopleDefaultExpandedPanelFields(module));
                }

                var allFieldsWithDups = _.union(fields, allDefaultFields);
                fields = _.uniq(allFieldsWithDups, false, function(item) { return item.name; });

                //Sort alphabetically
                fields = _.sortBy(fields, function(f) { return f.label; })


                return fields;
            },

            /**
             *
             * @param module
             * @param panelType
             * @param defaultPanel
             * @returns {*}
             */
            getPanelFieldsFromConfiguration: function(module, panelType, defaultPanel, otherPanel) {

                var metdata = app.modules.metadata.getModule(module);

                if (metdata && metdata.config && typeof (metdata['config']['hintConfig']) !== 'undefined' && typeof (metdata['config']['hintConfig'][panelType]) !== 'undefined') {

                    var panelFields = [];
                    var fieldDefinitions = this.getAllFieldsForView(module);
                    var savedFields = metdata['config']['hintConfig'][panelType];

                    for (var $x = 0; $x < savedFields.length; $x++) {

                        var fieldName = savedFields[$x];

                        //If the field definition is available in our 'default' panels we prefer to pull those in
                        //as definitions from the record metadata may vary slightly (eg. have additional data points)
                        var existsInBasicPanel = _.find(defaultPanel, function(field) {
                            return field.name == fieldName
                        });

                        if (existsInBasicPanel) {
                            panelFields.push(existsInBasicPanel);
                            continue;
                        }

                        var existsInOtherPanel = _.find(otherPanel, function(field) {
                            return field.name == fieldName
                        });

                        if (existsInOtherPanel) {
                            panelFields.push(existsInOtherPanel);
                            continue;
                        }

                        if (fieldDefinitions[fieldName]) {

                            panelFields.push(fieldDefinitions[fieldName]);
                        }
                    }

                    //We may need to copy default metadata entries over from the default pannel as they can be 'lost' otherwise.
                    if (module == "Accounts") {
                        var allDefaultFields = this.getAccountDefaultBasicPanelFields().concat(this.getAccountDefaultExpandedPanelFields());

                        //Lets re-organize so we can access by kield name
                        var allDefaultFieldsByKey = {};
                        _.each(allDefaultFields, function(field) {
                            allDefaultFieldsByKey[field.name] = field;
                        });

                        //These are the attributes that should be copied over
                        var attributesToCopy = ['person_name', 'person_label'];
                        _.each(panelFields, function(field) {

                            var fieldDefaultPanelDefinition = allDefaultFieldsByKey[field.name];
                            if (fieldDefaultPanelDefinition) {
                                for (var x = 0; x < attributesToCopy.length; x++) {
                                    var key = attributesToCopy[x];
                                    if (typeof (fieldDefaultPanelDefinition[key]) !== 'undefined') {
                                        field[key] = fieldDefaultPanelDefinition[key];
                                    }
                                }
                            }
                        });

                    }

                    // The following guard is made for users of Hint version less than 5.1.
                    // Name and website are duplicates from the main panel, but previous to 5.1
                    // they could be enabled on the expanded panel through Layout configuration.
                    if (panelType === 'expanded') {
                        var excludedFields = ['name', 'website'];
                        panelFields = _.reduce(excludedFields, function(fields, fieldName) {
                            return _.without(fields, _.findWhere(fields, { name: fieldName }));
                        }, panelFields);
                    }

                    return panelFields;
                } else {
                    return defaultPanel;
                }
            },

            /**
             *
             */
            getFieldDefinitionFromDefaultPanel: function(module, fieldName) {

                var refAccountMetadata = app.metadata.getView(null, 'stage2-account-preview').panels;
                var refPeopleMetadata = app.metadata.getView(null, 'stage2-preview').panels;

                //We need to deep clone the metadata itself otherwise any modifications will be reflected in other areas
                //of the app (which we don't want)
                var accountMetadata = JSON.parse(JSON.stringify(refAccountMetadata));
                var peopleMetadata = JSON.parse(JSON.stringify(refPeopleMetadata));

                var metadataToParse = module == 'Accounts' ? accountMetadata : peopleMetadata;

                var result = false;
                _.every(metadataToParse, function(panel) {

                    result = _.find(panel.fields, function(field) {
                        return field.name && field.name == fieldName
                    });

                    return !result;
                })


                return result;
            },
            /**
             *
             * @param module
             * @returns {*}
             */
            getPanelMetadata: function(module) {
                var originalModule = SUGAR.App.controller.layout.model.module;
                var isPersonOrientedModule = !_.includes(['Accounts', 'Administration'], originalModule);

                var panelToMapping = {
                    'company_info': this.getAccountBasicPanelFields(),
                    'company_extended': this.getAccountExpandedPanelFields(),
                    'contacts_basic': this.getPeopleBasicPanelFields(module),
                    'contacts_extended': this.getPeopleExpandedPanelFields(module)
                }
                var refAccountMetadata = app.metadata.getView(null, 'stage2-account-preview').panels;
                var refPeopleMetadata = app.metadata.getView(null, 'stage2-preview').panels;

                //We need to deep clone the metadata itself otherwise any modifications will be reflected in other areas
                //of the app (which we don't want)
                var accountMetadata = JSON.parse(JSON.stringify(refAccountMetadata));
                var peopleMetadata = JSON.parse(JSON.stringify(refPeopleMetadata));

                var metdataToParse = module == 'Accounts' ? accountMetadata : peopleMetadata;

                //Replace the default panel fields with whats saved in the configuration if applicable.
                for (var x = 0; x < metdataToParse.length; x++) {

                    var tmpPanel = metdataToParse[x];
                    if (panelToMapping[tmpPanel.name]) {
                        tmpPanel.fields = panelToMapping[tmpPanel.name];

                        //Fix phone field metadata, we always want to add the custom phone fields if we find phone_work for
                        //the people modules.
                        if (module == "Contacts" || module == "Leads") {

                            var phoneWorkFieldIndex = _.findIndex(tmpPanel.fields, function(f) {
                                return f.name == 'phone_work';
                            });

                            var educationIndex = _.findIndex(tmpPanel.fields, function(f) {
                                return f.name == 'hint_education_c';
                            });

                            var secondEducationIndex = _.findIndex(tmpPanel.fields, function(f) {
                                return f.name == 'hint_education_2_c';
                            });

                            if (educationIndex >= 0 && secondEducationIndex < 0) {
                                tmpPanel.fields.splice(++educationIndex, 0, this.getFieldDefinitionFromDefaultPanel(module, 'hint_education_2_c'));

                            }



                            //Check if we need to remap any of the account fields
                            if (tmpPanel.name == 'company_extended' || tmpPanel.name == 'company_info') {

                                _.each(tmpPanel.fields, function(field) {

                                    if (typeof (field.person_name) !== 'undefined') {
                                        field.name = field.person_name;
                                    }

                                    if (field.name === 'annual_revenue' && isPersonOrientedModule) {
                                        field.name = 'hint_account_annual_revenue_c';
                                    }

                                    if (typeof (field.person_label) !== 'undefined') {
                                        field.label = field.person_label;
                                    }
                                });
                            }

                        }
                        _.each(tmpPanel.fields, function(field) {
                            if (field.name === 'sic_code' && originalModule === 'Accounts') {
                                field.name = 'hint_account_sic_code_label_c';
                            }
                        });
                    }
                }


                return metdataToParse;

            },
            /**
             *
             * @param module
             */
            getPeopleDefaultBasicPanelFields: function(module) {

                var fields = getPanelDefinitionFieldsByName(module, "contacts_basic");
                return this.filterPersonPanelFields(fields);

            },
            /**
             *
             * @param module
             */
            getPeopleDefaultExpandedPanelFields: function(module) {

                var fields = getPanelDefinitionFieldsByName(module, "contacts_extended");
                return this.filterPersonPanelFields(fields);
            },
            /**
             *
             */
            getAccountDefaultBasicPanelFields: function() {
                return getPanelDefinitionFieldsByName('accounts', "company_info");

            },
            /**
             *
             */
            getAccountDefaultExpandedPanelFields: function() {
                return getPanelDefinitionFieldsByName('accounts', "company_extended");
            },
            /**
             *
             */
            getAccountBasicPanelFields: function() {

                var module = 'Accounts';
                var panelType = 'basic'
                var defaultPanel = this.getAccountDefaultBasicPanelFields();
                var otherPanel = this.getAccountDefaultExpandedPanelFields();

                return this.getPanelFieldsFromConfiguration(module, panelType, defaultPanel, otherPanel);
            },
            /**
             *
             */
            getAccountExpandedPanelFields: function() {

                var module = 'Accounts';
                var panelType = 'expanded';
                var defaultPanel = this.getAccountDefaultExpandedPanelFields();
                var otherPanel = this.getAccountDefaultBasicPanelFields();

                return this.getPanelFieldsFromConfiguration(module, panelType, defaultPanel, otherPanel);
            },
            /**
             *
             * @param module
             */
            getPeopleExpandedPanelFields: function(module) {

                var panelType = 'expanded';
                var defaultPanel = this.getPeopleDefaultExpandedPanelFields(module);
                var otherPanel = this.getPeopleDefaultBasicPanelFields(module);

                var fields = this.getPanelFieldsFromConfiguration(module, panelType, defaultPanel, otherPanel);

                return this.filterPersonPanelFields(fields);
            },
            /**
             *
             * @param module
             */
            getPeopleBasicPanelFields: function(module) {

                var panelType = 'basic';
                var defaultPanel = this.getPeopleDefaultBasicPanelFields(module);
                var otherPanel = this.getPeopleDefaultExpandedPanelFields(module);

                var fields = this.getPanelFieldsFromConfiguration(module, panelType, defaultPanel, otherPanel);

                return this.filterPersonPanelFields(fields);

            },

            /**
             *
             * @param fields
             */
            filterPersonPanelFields: function(fields) {

                //Always filter out phone fields, they are a special case.
                fields = _.without(fields, _.findWhere(fields, { name: 'hint_phone_1_c' }));
                fields = _.without(fields, _.findWhere(fields, { name: 'hint_phone_2_c' }));
                return _.without(fields, _.findWhere(fields, { name: 'hint_education_2_c' }));
            },
            /**
             *
             */
            getVisibleFieldsFromAllPannelsForDefaultSelection: function(module) {

                var basicFields = [];
                var extendedFields = [];

                switch (module.toLowerCase()) {

                    case 'accounts':
                        basicFields = app.hint.getAccountBasicPanelFields();
                        extendedFields = app.hint.getAccountExpandedPanelFields();
                        break;
                    default:
                        basicFields = app.hint.getPeopleBasicPanelFields(module);
                        extendedFields = app.hint.getPeopleExpandedPanelFields(module)
                }

                return basicFields.concat(extendedFields);
            },

            /**
             *
             * @param module
             * @returns {Array}
             */
            getBasicViewDefaultFields: function(module) {

                var panelMapping = {
                    'Accounts': { view: 'stage2-account-preview', panelFields: ['company_extended', 'company_info', 'company_header'] },
                    'Contacts': { view: 'stage2-preview', panelFields: ['panel_header', 'contacts_basic', 'contacts_extended'] },
                    'Leads': { view: 'stage2-preview', panelFields: ['panel_header', 'contacts_basic', 'contacts_extended'] },
                };

                var fields = [];

                var panelName = panelMapping[module].view;
                var refPanels = app.metadata.get(module).views[panelName].meta.panels;
                //Deep clone our metadata
                var panels = JSON.parse(JSON.stringify(refPanels));

                if (panelName && panels) {
                    _.each(panels, function(panel) {

                        if (_.contains(panelMapping[module].panelFields, panel.name)) {
                            fields = fields.concat(panel.fields);
                        }

                    });
                }

                return fields;

            },

            getPanelsForHintEnrichFields: function(module) {
                var panelMapping = {
                    'Accounts': { view: 'stage2-account-preview',
                        panelFields: ['company_extended', 'company_info', 'company_header'] },
                    'Contacts': { view: 'stage2-preview',
                        panelFields: ['panel_header', 'contacts_basic', 'contacts_extended'] },
                    'Leads': { view: 'stage2-preview',
                        panelFields: ['panel_header', 'contacts_basic', 'contacts_extended'] },
                };
                var fields = [];
                var results = [];
                var allfields = this.getModuleFieldsAvailableForSelection(module);
                var panelName = panelMapping[module].view;
                var refPanels = app.metadata.get(module).views[panelName].meta.panels;
                //Deep clone our metadata
                var panels = JSON.parse(JSON.stringify(refPanels));
                _.each(panels, function(panel) {
                    if (panel.fields) {
                        fields = fields.concat(panel.fields);
                    }
                });
                for (let i = 0; i < allfields.length; i++) {
                    if (allfields[i].name === 'picture') {
                        results.push(allfields[i]);
                    }
                    for (var j = 0; j < fields.length; j++) {
                        if (allfields[i].name === fields[j].name) {
                            results.push(allfields[i]);
                        }
                    }
                }
                return results;
            },

            versionCompare: function(validSugarVersion, shouldDisplayLicenseErrMessage, sugarVersion) {
                validSugarVersion = validSugarVersion || '9.1.0';
                sugarVersion = sugarVersion || SUGAR.App.metadata.getServerInfo().version;
                var isCreateDrawerOpen = SUGAR.App.drawer;
                // shouldDisplayLicenseErrMessage: {params} is used to bypass the createDrawer component check.
                // It's used to display error message when the versionCompare() is called when createDrawer is open.
                if (!shouldDisplayLicenseErrMessage && isCreateDrawerOpen && !_.isEmpty(isCreateDrawerOpen._events.render[0].ctx._components)) {
                    return -1;
                }
                if (validSugarVersion === sugarVersion) {
                    return 0;
                }
                if (sugarVersion) {
                    var versionLimit = validSugarVersion.split('.');
                    var currentSugarVerion = sugarVersion.split('.');
                    var len = Math.min(versionLimit.length, currentSugarVerion.length);

                    for (var i = 0; i < len; i++) {
                        if (parseInt(versionLimit[i]) > parseInt(currentSugarVerion[i])) {
                            return -1;
                        }

                        if (parseInt(versionLimit[i]) < parseInt(currentSugarVerion[i])) {
                            return 1;
                        }
                    }

                    if (versionLimit.length > currentSugarVerion.length) {
                        return -1;
                    }
                    if (versionLimit.length < currentSugarVerion.length) {
                        return 1;
                    }

                    return 1;
                }
                return -1;
            },

            shouldUseOldHintPreview: function(modelName) {
                var layout = SUGAR.App.controller.layout;
                if (layout && modelName) {
                    var isRecordViewlayoutType = layout.type === 'record';
                    var mainLayoutModuleName = layout.model.module;
                    var modelName = modelName;
                    if (!isRecordViewlayoutType) {
                        return true;
                    }
                    return isRecordViewlayoutType && (modelName !== mainLayoutModuleName);
                }
            },

            isSugarProSpecialCase: function() {
                var sugarFlavor = SUGAR.App.metadata.getServerInfo().flavor;
                return this.versionCompare('10.3.0', true) >= 0 && sugarFlavor === 'PRO';
            },

            // As a security from the browser, so that no-one tries to penetrate the license objects.
            // deepFreeze function locks the object's attributes recursively basically making it a constant
            // to avoid any further changes to the object.
            deepFreeze: function(objToFreeze) {
                var self = this;
                Object.keys(objToFreeze).forEach(function(prop) {
                    if (typeof objToFreeze[prop] === 'object' && !Object.isFrozen(objToFreeze[prop]))
                        self.deepFreeze(objToFreeze[prop]);
                });
                return Object.freeze(objToFreeze);
            },

            isHintUser: function() {
                // Call to deepFreeze function, makes the user object a constant to avoid adding vulnerabilities.
                // REMIND: Need to handle the dynamic change of the licenses from Admin to the app.user object
                // since calling the deepFreeze locks the object from the changes,
                // unless a hard reload is done on browser
                // this.deepFreeze(app.user.attributes);
                if (this.versionCompare('10.3.0', true) >= 0) {
                    const licenseObj = {
                        isLicensed: _.contains(app.user.attributes.licenses, 'HINT')
                    };
                    return licenseObj.isLicensed;
                }
                return true;
            },

            isListView: function() {
                var layout = SUGAR.App.controller.layout;
                var isCreateDrawerActive = SUGAR.App.drawer.isActive();
                if ((layout.type === 'search') && isCreateDrawerActive && (this.versionCompare() < 0)) {
                    return true;
                }
                return false;
            },
        };
    })();

    app.hint = hint;

})(SUGAR.App);
