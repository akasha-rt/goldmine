(function(app){app.events.on('app:init',function(){app.plugins.register('Attachments',['field'],{uploadFile:function($inputFile,fileFieldName,ajaxOptions){var file=app.data.createBean('Notes');file.uploadFile(fileFieldName,$inputFile,{success:_.bind(function(data){if(this.disposed){return;}
if(this._handleFileUploadSuccess&&_.isFunction(this._handleFileUploadSuccess)){this._handleFileUploadSuccess(data);}},this),complete:_.bind(function(data){if(this._handleFileUploadComplete&&_.isFunction(this._handleFileUploadComplete)){this._handleFileUploadComplete(data);}},this),error:_.bind(function(data){if(this._handleFileUploadError&&_.isFunction(this._handleFileUploadError)){this._handleFileUploadError(data);}},this)},ajaxOptions);return file;},addUploadedFileToCollection:function(collection,file){if(!collection||!collection instanceof app.BeanCollection){return;}
if(!file||!file instanceof app.Bean){return;}
collection.add(file,{merge:true});},getUploadedFileBean:function(data,attributes){var attrs=!_.isEmpty(attributes)?attributes:this.getUploadedFileBeanDefaultAttributes(data);return app.data.createBean('Notes',attrs);},getUploadedFileBeanDefaultAttributes:function(data){if(!data.record||!data.record.id){return{};}
return{_link:'attachments',name:data.record.name||data.record.filename,filename_guid:data.record.id,filename:data.record.filename||data.record.name,file_mime_type:data.record.file_mime_type,file_size:data.record.file_size,file_ext:data.record.file_ext,portal_flag:data.record.portal_flag};}});});})(SUGAR.App);