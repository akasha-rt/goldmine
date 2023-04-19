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
    extendsFrom: 'ImageField',

    plugins: ['MetadataEventDriven', 'Stage2CssLoader'],

    events: {
        'click .image_preview': 'addDeleteImageLabel',
        'click .image_btn_label': 'deleteImage',
    },

    css: ['hint-accounts-logo'],

    activeClass: 'hint-accounts-logo--record-view',

    deleteImageLabel: false,

    initialize: function(options) {
        this._super('initialize', [options]);
        var self = this;

        // When the delete label is active and the user clicks anywhere outside of the label, we want
        // to hide it. This event is to track that so that the label does not persist.
        window.document.addEventListener('mousedown', function(event) {
            var container = $('.image_btn_label');
            if (!container.is(event.target) && container.has(event.target).length === 0) {
                $('.image_btn_label').hide();
            }
        }, false);
    },

    format: function(value) {
        return value;
    },

    _render: function() {
        this.model.fileField = this.name;
        app.view.Field.prototype._render.call(this)
        if (_.isEmpty(this.value)) {
            var template = app.template.getField(this.type, 'module-icon', this._getModuleName());
            if (template) {
                this.$('.image_field').replaceWith(template({
                    module: this._getModuleName(),
                    labelSizeClass: 'label-module-lg',
                    tooltipPlacement: app.lang.direction === 'ltr' ? 'right' : 'left'
                }));
            }
        } else {
            var layout = SUGAR.App.controller.layout.name;
            if (layout === 'record') {
                this.$('.image_field').addClass(this.activeClass);
            }
            //Resize widget once the image is loaded
            this.$('img').addClass('hide').on('load', $.proxy(this.resizeWidget, this));
        }
        return this;
    },

    bindDataChange: function() {
        this._super('bindDataChange');
        var self = this;
        this.model.on('change', function() {
            self._render();
        }, this);
    },

    _getModuleName: function() {
        if (this.view.name === 'history-summary') {
            return this.model.get('_module');
        }
        return this.module;
    },

    deleteImage: function(e) {
        if (this.model.get('hint_account_pic_c')) {
            this._warningAlertForLogoOverwrite()
        }
    },

    addDeleteImageLabel: function() {
        this.deleteImageLabel = true;
        this._render();
    },

    _warningAlertForLogoOverwrite: function() {
        var confirmMessage = app.lang.get('LBL_IMAGE_DELETE_CONFIRM', self.module);
        if (confirm(confirmMessage)) {
            this.model.save('hint_account_pic_c', '');
            this.deleteImageLabel = false;
            this._render();
        }
    }
});

