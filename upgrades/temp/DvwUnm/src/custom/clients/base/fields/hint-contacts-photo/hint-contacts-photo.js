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
({
    extendsFrom: 'AvatarField',

    plugins: ['MetadataEventDriven', 'Stage2CssLoader'],

    css: ['hint-contacts-photo'],

    activeClass: 'hint-contacts-logo--record-view',

    initialize: function (options) {
        this._super('initialize', [options]);
        this.context.on('button:save_button:click', this.fixFields, this);
        this.changedField = null;
    },

    fixFields: function() {
        if (this.changedField && this.changedField !== 'picture') {
            this.deleteImage();
        }
    },

    bindDataChange: function() {
        this.model.on('change:picture', function() {
            if (this.action === 'edit') {
                // Should directly set the value in edit instead of re-rendering the whole field.
            } else {
                this.render();
            }
        }, this);

        this.model.on('change:hint_contact_pic_c', function() {
            if (this.action === 'edit' || SUGAR.App.controller.layout.type === 'records') {
                this.render();
            }
        }, this);
    },

    format: function (value) {
        // this is picture
        var formattedValue = this.model.get('picture') ? this._super('format', [value]) : null;
        var hintUrl = this.model.get('hint_contact_pic_c');

        if (hintUrl && formattedValue) {
            if (this.model.previous('picture') !== value) {
                this.changedField = 'picture';
            } else if (this.model.previous('hint_contact_pic_c') !== hintUrl) {
                formattedValue = hintUrl;
                this.changedField = 'hint_contact_pic_c';
            }
        } else if (hintUrl) {
            formattedValue = hintUrl;
        }

        return formattedValue;
    },

    'delete': function(e) {
        var self = this;
        var picture = 'picture';
        //If we are previewing a file and want to cancel
        if (this.preview === true) {
            self.preview = false;
            self.clearErrorDecoration();
            self.render();
            return;
        }
        // If it's a duplicate, don't delete the file
        if (this._duplicateBeanId) {
            self.model.unset(picture);
            self.model.set(picture, null);
            self.model.set('hint_contact_pic_c', '', {silent: true});
            self.render();
            return;
        }
        var confirmMessage = app.lang.get('LBL_IMAGE_DELETE_CONFIRM', self.module);
        if (confirm(confirmMessage)) {
            //Otherwise delete the image
            app.api.call('delete', self.buildUrl({htmlJsonFormat: false}), {}, {
                    success: function (response) {
                        //Need to fire the change event twice so hint_contact_pic_c is also changed.
                        self.model.unset(picture);
                        self.model.set(picture, null);
                        self.model.set('hint_contact_pic_c', '', {silent: true});
                        if (response.record && response.record.date_modified) {
                            self.model.set('date_modified', response.record.date_modified);
                        }
                        if (!self.disposed) {
                            self.render();
                        }
                    },
                    error: function (data) {
                        // refresh token if it has expired
                        app.error.handleHttpError(data, {});
                    }
                }
            );
        }
    },

    _loadTemplate: function () {
        this.type = 'avatar';
        this._super('_loadTemplate');
        this.type = this.def.type;
    },

    /**
     * Delete `picture` from db
     */
    deleteImage: function(viewModel, fieldValue) {
        var self = this;
        app.api.call('delete', self.buildUrl({htmlJsonFormat: false}), {}, {
            success: function(response) {
                var isSugarEditMode = app.router._currentFragment.indexOf('/edit') !== -1;
                if (isSugarEditMode) {
                    if (typeof fieldValue === 'object') {
                        viewModel.set(fieldValue);
                    }
                    else {
                        viewModel.set('hint_contact_pic_c', fieldValue);
                    }

                    //Need to fire the change event twice so model.previous(self.name) is also changed.
                    self.model.unset('picture');
                    self.model.set('picture', null);
                    if (response.record && response.record.date_modified) {
                        self.model.set('date_modified', response.record.date_modified);
                    }
                } else {
                    if (typeof fieldValue === 'object') {
                        viewModel.save(fieldValue);
                    }
                    else {
                        viewModel.save('hint_contact_pic_c', fieldValue);
                    }

                    //Need to fire the change event twice so model.previous(self.name) is also changed.
                    self.model.set('picture', null);
                    self.model.save('picture', null);
                    if (response.record && response.record.date_modified) {
                        self.model.set('date_modified', response.record.date_modified);
                        self.model.save('date_modified', response.record.date_modified);
                    }
                }
                if (!self.disposed) {
                    self.render();
                }
            },
            error: function(data) {
                // refresh token if it has expired
                app.error.handleHttpError(data, {});
            }}
        );
    }
});
