(function(app){app.events.on('app:init',function(){app.plugins.register('DashletSearchControls',['view'],{onAttach:function(component,plugin){this.on('init',function(){if(!_.isEmpty(component.sortItems)&&!_.isEmpty(component.searchFieldPlaceholder)){this._initDashletControls();this._listenForEvents();}},this);},_initDashletControls:function(){if(!this.layout||this._mode==='config'){return;}
var searchControls=app.view.createView({context:this.context,type:'dashlet-search-controls',module:this.module,primary:false,layout:this.layout,sortItems:this.sortItems,searchFieldPlaceholder:this.searchFieldPlaceholder});this.layout.addComponent(searchControls,{prepend:true});},_listenForEvents:function(){if(!this.layout||this._mode==='config'){return;}
if(_.isFunction(this.applySort)){this.listenTo(this.layout,'dashlet:controls:sort',this.applySort);}
if(_.isFunction(this.applySearch)){this.listenTo(this.layout,'dashlet:controls:search',this.applySearch);}}});});})(SUGAR.App);