({relate_href:'',relate_value:'',extendsFrom:'RelateField',loading:true,duplicate_bean:null,events:{'click .e38-preview-duplicate':'previewDuplicate',},initialize:function(options){this._super('initialize',[options]);app.events.on('preview:close',function(){$('.e38-preview-duplicate').removeClass('active');});options.context.on('38elements:duplicate-check-beans-retrieved',function(){$.each(this.context.get('collection').models,function(index,found_duplicates_bean){if(found_duplicates_bean.get('id')!=this.model.get('id')){return;}
var duplicate_check_bean=found_duplicates_bean.get('duplicate_check_bean');var duplicate_bean_field=this.name=='duplicate_record_1_relate'?'duplicate_record_id_1':'duplicate_record_id_2';var duplicate_bean_id=found_duplicates_bean.get(duplicate_bean_field);var duplicate_bean=app.data.createBean(duplicate_check_bean.get('for_module'),{id:duplicate_bean_id});duplicate_bean.fetch({success:function(duplicate_bean){this.relate_href='#'+duplicate_bean.get('_module')+'/'+duplicate_bean.get('id');this.relate_value=duplicate_bean.get('name');this.duplicate_bean=duplicate_bean;this.loading=false;this.render();}.bind(this),error:function(error){app.alert.show('server-error',{level:'error',messages:app.lang.get('LBL_E38_GENERIC_ERROR'),});},});return false;}.bind(this));},this);},render:function(){this._super('render');try{var element_height=this.$('.e38-center').css('height');if(typeof element_height=='undefined'){return;}
element_height=this.$('.e38-center').css('height').slice(0,-2);var parent_height=this.$('.e38-center').parent().css('height').slice(0,-2);var margin=(parent_height-element_height)/ 2;if(isNaN(margin)||margin<0){return;}
this.$('.e38-center').css('margin-top',margin+'px');}catch(err){}},previewDuplicate:function(e){var preview_button=$(e.target).hasClass('fa')?$(e.target).parent():$(e.target);if(preview_button.hasClass('active')){app.events.trigger('preview:close');return;}
if(this.duplicate_bean){app.events.trigger('preview:render',this.duplicate_bean);$('.e38-preview-duplicate').removeClass('active');preview_button.addClass('active');}else{app.alert.show('generic-error',{level:'error',messages:app.lang.get('LBL_E38_GENERIC_ERROR'),});}},});