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
 * @class View.Fields.Base.optionField
 */
 ({

    events: {
        'click .btn[name=add]': 'addItemss',
        'click .btn[name=remove]': 'removeItem',
    },
    initialize: function(options) {
        this._super('initialize', [options]);
        this.in_once = true;
        this.render_once = true;
    },

    /**
     * Called when rendering the field
     * @private
     */
    _render: function() {
        this._super('_render');
        if(this.action == "edit"){
            this.populateOptionsData(this.action,this.in_once);
            this.in_once = false;
        }
        if(this.action == "detail"){
            this.populateOptionsData(this.action,this.in_once);
            this.in_once = false;
        }
        if(this.action == "create"){
            this.populateOptionsData(this.action,this.in_once);
            this.in_once = false;
        }
    },
    /**
     * Called when formatting the value for display
     * @param value
     */
    format: function(value) {
        return this._super('format', [value]);

    },
    /**
     * @inheritdoc
     *
     * Binds append team checkbox change for massupdate.
     */
    bindDomChange: function() {
        this._super('bindDomChange');
    },

    /**
     * @inheritdoc
     */
    unbindDom: function() {
        this._super('unbindDom');
    },
    _loadTemplate: function() {
        this._super("_loadTemplate");
    },
    /**
     * @inheritdoc
     * Restore the select2 focus location after refresh the dom.
     */
    bindDataChange: function() {

    },
    /**
     * Forcing change event on value update since backbone isn't picking up on changes within an object within the array.
     * @param value New value for teamset field
     * @private
     */
    _updateAndTriggerChange: function (value) {

    },
    addItemss: function (evt) {
        var custom_html = '';
        var main_this = this;
        var uuid_add = main_this.createUUIDT();
        var uuid_remove = main_this.createUUIDT();
        custom_html = '<div class="form-inline custom-line" style="display: inline-flex;padding-bottom:10px;"> <div class="form-group" > <input type="text" class="form-control-plaintext option-name" name="option_name[]" placeholder="Name" value=""> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-description" name="option_description[]" placeholder="Description" value=""> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-price" name="option_price[]" placeholder="Price" value=""> </div><div class="form-group"> <button type="submit" class="btn btn-primary mb-2 add-button" name="add" id="add_'+uuid_add+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path></svg></button> </div><div class="form-group"> <button type="submit" class="btn btn-primary mb-2 remove-button" name="remove" id="remove_'+uuid_remove+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"></path></svg></button> </div></div>';
        $('.custom-line-main').parent().parent().parent().append(custom_html);

        $("#add_"+uuid_add).on( "click", function(e) {
            main_this.addItemss(this);
        });
        $("#remove_"+uuid_remove).on( "click", function(e) {
            main_this.removeItem(e);
        });
        $('.option-name,.option-price,.option-description').on('keyup',function(){
            main_this.getOptionData();
        });

    },
    removeItem: function (evt) {
        $(evt.currentTarget).parent().parent().remove();
        this.getOptionData();

    },
    getOptionData : function (){ 
        var ztoptions = {};
        var main_this = this;
        var i=0;
        $('.option-name:visible').each(function(i, obj) { 
            var option_name = $(this).val();
            var option_price = $(this).parent().next().next().find('.option-price').val();
            var option_description = $(this).parent().next().find('.option-description').val();
            ztoptions[i] = [option_name,option_price,option_description];
        });
        var saved_options = JSON.stringify(ztoptions);
        main_this.model.set("product_options_c",saved_options);
    },
    createUUIDT : function () {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
           var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
           return v.toString(16);
        });
    },
    populateOptionsData : function (action , in_once){
        var productOptions = '';
        var main_this = this;
        app.api.call('read', app.api.buildURL('getproductoptions?id=' + this.model.get('id')), null, {
            success: function(fdata){
                productOptions = fdata;
                this.render_once = false;
                if(action==="detail" && !_.isEmpty(productOptions)){
                    $('.custom-line').remove();
                    productOptions = JSON.parse(productOptions);
                    var custom_html ='';
                    var extra_labelss = '';
                    var OnlyOncee = true;
                    for (const property in productOptions) {
                        if(!_.isEmpty(property) && !_.isEmpty(productOptions[property])){
                            var option_description = '';
                            if(!_.isEmpty(productOptions[property][2])){
                                option_description = productOptions[property][2];
                            }
                            if(!OnlyOncee){
                                extra_labels = '<div class="custom-line" style="display: inline-flex; padding-bottom: 5px;"> <div style="margin-right: -15px;"> <input type="text" value="Part Number" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div><div> <input type="text" value="Description" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div><div style="margin-right: -25px;"> <input type="text" value="List Price" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div></div>';
                            }else{
                                extra_labels= '';
                            }
                            custom_html += extra_labelss+'<div class="form-inline custom-line" style="display: inline-flex;padding-bottom:10px;"> <div class="form-group" > <input type="text" class="form-control-plaintext option-name" name="option_name[]" placeholder="Name" value="'+productOptions[property][0]+'" disabled> </div><div class="form-group"><input type="text" class="form-control-plaintext option-description" name="option_description[]" placeholder="Description" value="'+option_description+'" disabled> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-price" name="option_price[]" placeholder="Price" value="'+productOptions[property][1]+'" disabled> </div></div>';
                        }
                        OnlyOncee = false;
                    }
                    $('.custom-line-main').parent().parent().parent().append(custom_html);
                    $('.option-name,.option-price,.option-description').on('keyup',function(){
                        main_this.getOptionData();
                    });
                    $('.custom-line').parent().css("display","inline-grid");
                }else if(action === "edit" && !_.isEmpty(productOptions)){
                    $('.custom-line').remove();
                    productOptions = JSON.parse(productOptions);
                    var custom_html ='';
                    var add_buttons_ids = "";
                    var remove_buttons_ids = "";
                    var remove_button = '';
                    var extra_labels = '';
                    var OnlyOnce = true;
                    for (const property in productOptions) {
                        var uuid_add = main_this.createUUIDT();
                        var uuid_remove = main_this.createUUIDT();
                        if(!_.isEmpty(property) && !_.isEmpty(productOptions[property])){
                            if(!OnlyOnce){
                               remove_button = '<div class="form-group"> <button type="submit" class="btn btn-primary mb-2 remove-button" name="remove" id="remove_'+uuid_remove+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"></path></svg></button> </div>';
                               extra_labels = '';
                            }else{
                                remove_button = '';
                                extra_labels = '<div class="custom-line" style="display: inline-flex; padding-bottom: 5px;"> <div style="margin-right: -15px;"> <input type="text" value="Part Number" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div><div> <input type="text" value="Description" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div><div style="margin-right: -25px;"> <input type="text" value="List Price" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div></div>';
                            }
                            
                            var option_description = '';
                            if(!_.isEmpty(productOptions[property][2])){
                                option_description = productOptions[property][2];
                            }
                            custom_html += extra_labels+'<div class="form-inline custom-line" style="display: inline-flex;padding-bottom:10px;"> <div class="form-group" > <input type="text" class="form-control-plaintext option-name" name="option_name[]" placeholder="Name" value="'+productOptions[property][0]+'"> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-description" name="option_description[]" placeholder="Description" value="'+option_description+'"> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-price" name="option_price[]" placeholder="Price" value="'+productOptions[property][1]+'"> </div><div class="form-group"> <button type="submit" class="btn btn-primary mb-2 add-button" name="add" id="add_'+uuid_add+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path></svg></button> </div>'+remove_button+'</div>';
                            add_buttons_ids +=  "#add_"+uuid_add+", ";
                            remove_buttons_ids +=  "#remove_"+uuid_remove+", ";
                        }
                        OnlyOnce = false;
                    }
                    add_buttons_ids = add_buttons_ids.replace(/,\s*$/, "");
                    remove_buttons_ids = remove_buttons_ids.replace(/,\s*$/, "");
                    $('.custom-line').remove();
                    $('.custom-line-main').parent().parent().parent().append(custom_html);
                    $('.option-name,.option-price,.option-description').on('keyup',function(){
                        main_this.getOptionData();
                    });
                    $('.custom-line').parent().css("display","inline-grid");
                    setTimeout(function(){ 
                        $(add_buttons_ids).on( "click", function(e){
                            main_this.addItemss(this);
                        });
                        $(remove_buttons_ids).on( "click", function(e){
                            main_this.removeItem(e);
                        });
                    }, 1000);
                }else{
                    $('.custom-line').remove();
                    var uuid_add = main_this.createUUIDT();
                    var uuid_remove = main_this.createUUIDT();
                    var custom_html = '';
                    custom_html = '<div class="custom-line" style="display: inline-flex; padding-bottom: 5px;"> <div style="margin-right: -15px;"> <input type="text" value="Part Number" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div><div> <input type="text" value="Description" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div><div style="margin-right: -25px;"> <input type="text" value="List Price" style="text-align:-webkit-center;background: white;font-weight:600;color: black;border: none;box-shadow: none;" disabled=""> </div></div><div class="form-inline custom-line" style="display: inline-flex;padding-bottom:10px;"> <div class="form-group" > <input type="text" class="form-control-plaintext option-name" name="option_name[]" placeholder="Name" value=""> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-description" name="option_description[]" placeholder="Description" value=""> </div><div class="form-group"> <input type="text" class="form-control-plaintext option-price" placeholder="Price" name="option_price[]" value=""> </div><div class="form-group"> <button type="submit" class="btn btn-primary mb-2 add-button" name="add" id="add_'+uuid_add+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path></svg></button></div>';
                    $('.custom-line-main').parent().parent().parent().append(custom_html);
                    $('.option-name,.option-price,.option-description').on('keyup',function(){
                        main_this.getOptionData();
                    });
                    $("#add_"+uuid_add).on( "click", function(e){
                        main_this.addItemss(this);
                    });
                    $("#remove_"+uuid_remove).on( "click", function(e){
                        main_this.removeItem(e);
                    });
                    $('.custom-line').parent().css("display","inline-grid");
                }
            }
        }); 
    },
    setMultipleOptions: function (evt){
        var main_this = this;
        $('.option-name,.option-price,.option-description').on('keyup',function(){
            main_this.getOptionData(); 
        });
    },
    setPrimaryItem: _.debounce(function (evt) {
        var index = $(evt.currentTarget).data('index');
        if (!this.value[index] || !this.value[index].id) {
            return;
        }
        this.$(".btn[name=primary]").removeClass("active");
        if (this.setPrimary(index)) {
            this.$(".btn[name=primary][data-index=" + index + "]").addClass("active");
        }
    }, 0)
})
