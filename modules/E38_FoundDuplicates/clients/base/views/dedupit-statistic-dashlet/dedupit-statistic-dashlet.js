({className:'list-view e38-min-height table-responsive',plugins:['Dashlet'],dups_per_module:null,loading:true,license_valid:false,error_message:null,initialize:function(options){this._super('initialize',[options]);this.checkLicense();app.events.on('38elements:update-statistics-dashlet',function(){this.loading=true;this.render();this.loadData();},this);},loadData:function(){this._super('loadData');if(!this.license_valid){return;}
this.loading=true;this.render();app.api.call('get',app.api.buildURL('E38_MergedDuplicates/get-statistics'),{},{success:function(response){this.dups_per_module=response.found_duplicates;}.bind(this),error:function(error){if(error.status!==412){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR',});this.error_message=app.lang.get('LBL_E38_GENERIC_ERROR');}}.bind(this),complete:function(){this.loading=false;this.error_message=null;this.render();}.bind(this),});},checkLicense:function(){app.api.call('read',app.api.buildURL('E38_DeDupit/check-license'),null,{success:function(response){if(response.success){this.license_valid=true;}else{this.loading=false;this.error_message=app.lang.get('LBL_E38_LICENSE_INVALID');this.render();}}.bind(this),error:function(error){if(error.status!==412){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR',});}
app.error.handleHttpError(error);}.bind(this),},{async:false});},});