var PMSE=PMSE||{};PMSE.Store=function(options){this.records=[];this.model=null;this.proxy=null;PMSE.Store.prototype.initObject.call(this,options);};PMSE.Store.prototype.type='PMSE.Store';PMSE.Store.prototype.initObject=function(options){var defaults={};$.extend(true,defaults,options);};PMSE.Store.prototype.addRecord=function(record){this.records.push(record);return this;};PMSE.Store.prototype.getRecord=function(index){return this.records[index];};PMSE.Store.prototype.getSize=function(){return this.records.length;};