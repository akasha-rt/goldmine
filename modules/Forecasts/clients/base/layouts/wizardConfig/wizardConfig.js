/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/
({breadCrumbLabels:[],initialize:function(options){var modelUrl=app.api.buildURL("Forecasts","config"),modelSync=function(method,model,options){var url=_.isFunction(model.url)?model.url():model.url;return app.api.call(method,url,model,options);},settingsModel=this._getConfigModel(options,modelUrl,modelSync);settingsModel.fetch();options.context.set("model",settingsModel);app.view.Layout.prototype.initialize.call(this,options);},_getConfigModel:function(options,syncUrl,syncFunction){var SettingsModel=Backbone.Model.extend({url:syncUrl,sync:syncFunction});return(_.has(options.context,'forecasts')&&_.has(options.context.forecasts,'config'))?new SettingsModel($.extend(true,{},options.context.forecasts.config.attributes)):new SettingsModel();},registerBreadCrumbLabel:function(label){var labelObj={'index':this.breadCrumbLabels.length,'label':label},found=false;_.each(this.breadCrumbLabels,function(crumb){if(crumb.label==label){found=true;}})
if(!found){this.breadCrumbLabels.push(labelObj);}},getBreadCrumbLabels:function(){return this.breadCrumbLabels;}})