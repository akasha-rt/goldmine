({className:'list-view e38-dedupit-record-dashlet',plugins:['Dashlet'],loading:true,error_message:null,found_duplicates:null,license_valid:false,events:{'click .e38-preview-duplicate-rel':'previewDuplicate','click .e38-merge-duplicate-rec':'mergeDuplicatePair','click .e38-ignore-duplicate-rec':'ignoreDuplicates',},initialize:function(options){this._super('initialize',[options]);this.checkLicense();},loadData:function(options){this._super('loadData',[options]);if(!this.license_valid){return;}
this.loading=true;this.render();var module_name=this.model.get('_module');var record_id=this.model.get('id');app.api.call('GET',app.api.buildURL('E38_FoundDuplicates/retrieve-duplicates/'+module_name+'/'+
record_id+''),null,{success:function(response){if(response.success){this.found_duplicates=response.found_duplicates;}
this.loading=false;this.error_message=null;this.render();}.bind(this),error:function(error){this.loading=false;if(typeof error.message!='undefined'){this.error_message=error.message;this.render();}}.bind(this),});},render:function(){this._super('render');try{var element_height=$('.e38-center-duplicate-rel').css('height');if(typeof element_height=='undefined'){return;}
element_height=$('.e38-center-duplicate-rel').css('height').slice(0,-2);var parent_height=$('.e38-center-duplicate-rel').parent().css('height').slice(0,-2);var margin=(parent_height-element_height)/ 2;if(isNaN(margin)||margin<0){return;}
$('.e38-center-duplicate-rel').css('margin-top',margin+'px');}catch(err){}},previewDuplicate:function(e){var preview_button=$(e.target).hasClass('fa')?$(e.target).parent():$(e.target);var duplicate_id=preview_button.attr('data-duplicate-id');if(!duplicate_id){app.alert.show('no-duplicate-id',{level:'error',messages:app.lang.get('LBL_NO_DUPLICATE_ID','E38_FoundDuplicates'),autoClose:true,});return;}
var duplicate_bean=app.data.createBean(this.module,{id:duplicate_id});app.events.trigger('preview:render',duplicate_bean);},mergeDuplicatePair:function(e){var merge_button=$(e.target).hasClass('fa')?$(e.target).parent():$(e.target);var duplicate_id=merge_button.attr('data-duplicate-id');var process_id=merge_button.attr('data-process-id');if(!duplicate_id){app.alert.show('no-duplicate-id',{level:'error',messages:app.lang.get('LBL_NO_DUPLICATE_ID','E38_FoundDuplicates'),autoClose:true,});return;}
var original=app.data.createBean(this.module,{id:this.model.get('id')});var duplicate=app.data.createBean(this.module,{id:duplicate_id});var duplicates_collection=new Backbone.Collection();duplicates_collection.add(duplicate);duplicates_collection.add(original,{at:0,silent:true});app.drawer.open({layout:'merge-duplicates',context:{module:this.module,primaryRecord:original,selectedDuplicates:duplicates_collection.models,},},function(merge_success){this.loadData();if(typeof merge_success!='undefined'&&merge_success){var post_data={original_id:original.get('id'),duplicate_id:duplicate.get('id'),for_module:this.module,duplicate_finder_process_id:process_id,};this.context.trigger('38elements:duplicates-merge-in-progress');app.api.call('create',app.api.buildURL('E38_MergedDuplicates/create-merged-duplicate'),post_data,{success:function(){this.context.trigger('38elements:duplicates-merged');}.bind(this),});}}.bind(this));},ignoreDuplicates:function(e){app.alert.show('confirm-ignore',{level:'confirmation',messages:app.lang.get('LBL_CONFIRM_IGNORING_PAIR','E38_FoundDuplicates'),autoClose:false,onConfirm:function(){app.alert.show('ignoring-pair',{level:'process'});var ignore_duplicate_button=$(e.target).hasClass('fa')?$(e.target).parent():$(e.target);var dup_pair_id=ignore_duplicate_button.attr('data-dup-pair-id');if(!dup_pair_id){app.alert.show('no-dup-pair-id',{level:'error',messages:app.lang.get('LBL_NO_DUP_PAIR_ID','E38_FoundDuplicates'),autoClose:true,});return;}
var duplicate_id=ignore_duplicate_button.attr('data-duplicate-id');if(!duplicate_id){app.alert.show('no-duplicate-id',{level:'error',messages:app.lang.get('LBL_NO_DUPLICATE_ID','E38_FoundDuplicates'),autoClose:true,});return;}
var dup_pair=app.data.createBean('E38_FoundDuplicates',{id:dup_pair_id});dup_pair.set('ignore_pair',true);dup_pair.save(null,{success:function(found_duplicates_pair){app.alert.dismissAll();$.each(this.found_duplicates,function(index,duplicate_data){if(duplicate_data.duplicate_id==duplicate_id){this.found_duplicates[index]['ignore_pair']=1;}}.bind(this));this.render();}.bind(this),error:function(){app.alert.dismissAll();app.alert.show('ignoring-failed',{level:'error',messages:app.lang.get('LBL_GENERIC_ERROR','E38_FoundDuplicates'),autoClose:true,});},});}.bind(this),});},checkLicense:function(){app.api.call('read',app.api.buildURL('E38_DeDupit/check-license'),null,{success:function(response){if(response.success){this.license_valid=true;}else{this.loading=false;this.error_message=app.lang.get('LBL_E38_LICENSE_INVALID');this.render();}}.bind(this),error:function(error){if(error.status!==412){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR',});}
app.error.handleHttpError(error);}.bind(this),},{async:false});},});