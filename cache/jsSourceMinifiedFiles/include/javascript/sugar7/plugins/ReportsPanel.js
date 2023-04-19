(function(app){app.events.on('app:init',function(){app.plugins.register('ReportsPanel','view',{_panelEventMapping:{'rows-columns':'report:data:table:loaded','summation':'report:data:table:loaded','summation-details':'report:data:table:loaded','matrix':'report:data:table:loaded','report-chart':'report:data:chart:loaded','report-filters':'report:data:filters:loaded',},onAttach:function(){if(_.isFunction(this._beforeInit)){this._beforeInit();}
this.listenTo(this,'init',function(){if(_.isFunction(this._initProperties)){this._initProperties();}
const dataLoadedEvent=this._panelEventMapping[this.name];const refreshEventName='report:refresh';this.listenTo(this.context,dataLoadedEvent,this._showLoadingScreen,this);this.listenTo(this.context,refreshEventName,this._loadReportPanelData,this);if(_.isFunction(this._registerEvents)){this._registerEvents();}
this._loadReportPanelData();},this);this.listenTo(this,'render',function(){if(this.context.get('previewMode')){if(_.isFunction(this._setupPreviewReportPanel)&&!this._previewModeLoaded){this._previewModeLoaded=true;this._setupPreviewReportPanel();}
this._showLoadingScreen(false);}},this);},_loadReportPanelData:function(){if(this.context.get('previewMode')){return;}
if(_.isFunction(this._loadReportData)){this._loadReportData();}},_getCustomFiltersMeta:function(customOptions,stateKey){let filters={};if(!customOptions){return filters;}
if(_.has(customOptions,'filtersDef')&&customOptions.filtersDef){filters=customOptions.filtersDef;}
if(!stateKey){return filters;}
const lastState=app.user.lastState.get(stateKey);if(_.has(lastState,'filtersDef')){filters=lastState.filtersDef;}
return filters;},_getCustomReportMeta:function(customReportDef,lastStateKey){let customMeta={};if(customReportDef){if(_.has(customReportDef,'summaryColumns')&&!_.isEmpty(customReportDef.summaryColumns)){customMeta.summaryColumns=customReportDef.summaryColumns;}
if(_.has(customReportDef,'displayColumns')&&!_.isEmpty(customReportDef.displayColumns)){customMeta.displayColumns=customReportDef.displayColumns;}
if(_.has(customReportDef,'fullTableList')&&!_.isEmpty(customReportDef.fullTableList)){customMeta.fullTableList=customReportDef.fullTableList;}
if(_.has(customReportDef,'groupDefs')&&!_.isEmpty(customReportDef.groupDefs)){customMeta.groupDefs=customReportDef.groupDefs;}}
customMeta.filtersDef=this._getCustomFiltersMeta(customReportDef,lastStateKey);return customMeta;},_showLoadingScreen:function(show){if(this.disposed){return;}
const loadingEl=this.$el.parentsUntil('.grid-stack-item').find('[data-widget="report-loading"]');if(show&&_.isBoolean(show)){loadingEl.show();if(_.isFunction(this._showAdditionalComponents)){this._showAdditionalComponents();}}else{loadingEl.hide();if(_.isFunction(this._hideAdditionalComponents)){this._hideAdditionalComponents();}}},});});})(SUGAR.App);