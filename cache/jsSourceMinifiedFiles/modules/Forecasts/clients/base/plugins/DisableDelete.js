(function(app){app.events.on('app:init',function(){app.plugins.register('DisableDelete',['field'],{running:false,onAttach:function(component,plugin){this.once('init',function(){if(_.contains(['list:deleterow:fire','button:delete_button:click'],this.def.event)){this.on('render',this.removeDelete,this);this.model.on('change:'+this._getFieldName(),this.removeDelete,this);}},this);},removeDelete:function(){if(this.running){return;}
this.running=true;var config=app.metadata.getModule('Forecasts','config')||{},sales_stage_won=config.sales_stage_won||['Closed Won'],sales_stage_lost=config.sales_stage_lost||['Closed Lost'],label_key='_STAGE',closed_RLI_count=0,message=null,status=null,button=this.getFieldElement(),field=this._getFieldName();if(button.length&&_.contains(["list:deleterow:fire","button:delete_button:click"],this.def.event)){if(app.metadata.getModule('Opportunities','config').opps_view_by==='RevenueLineItems'){closed_RLI_count=this.model.get('closed_revenue_line_items');if(_.isNull(closed_RLI_count)){closed_RLI_count=0;}
label_key='_STATUS';}
status=this.model.get(field);if(closed_RLI_count>0){message=app.lang.get('NOTICE_NO_DELETE_CLOSED_RLIS','Opportunities');}
if(_.contains(sales_stage_won,status)||_.contains(sales_stage_lost,status)){message=app.lang.get('NOTICE_NO_DELETE_CLOSED'+label_key);}
if(!_.isEmpty(message)){this.setDisabled(true);button.attr('data-event','');button.tooltip({title:message});if(this.view.name==='pipeline-recordlist-content'){var deleteButton=_.find(this.view.nestedFields,function(f){return f.cid===this.cid;},this);if(deleteButton){deleteButton.options.def.tooltip=message;deleteButton.def.tooltip=message;deleteButton.$('a').attr('title',message);deleteButton.render();}}}else{this.setDisabled(false);button.attr('data-event',this.def.event);button.tooltip('destroy');}}
this.running=false;return message;},_getFieldName:function(){if(this.model.module=='Opportunities'&&app.metadata.getModule('Opportunities','config').opps_view_by==='RevenueLineItems'){return'sales_status';}
return'sales_stage';}});});})(SUGAR.App);