(function(app){app.events.on('router:init',function(){var routes=[{name:'portal-index',route:'',callback:loadHome,},{name:'logout',route:'logout/?clear=:clear'},{name:'logout',route:'logout'},{name:'forgotpassword',route:'forgotpassword',callback:function(){app.controller.loadView({layout:'forgotpassword',create:true});}},{name:'resetpwdconfirmation',route:'resetpwdconfirmation',callback:function(){app.controller.loadView({layout:'resetpwdconfirmation',create:true});}},{name:'signup',route:'signup',callback:function(){if(app.config.enableSelfSignUp!=='enabled'){app.router.redirect('/');return;}
app.controller.loadView({module:'Signup',layout:'signup',create:true});}},{name:'signup-success',route:'signup-success',callback:function(){app.controller.loadView({layout:'signup-success',create:true});}},{name:'resetpassword',route:'resetpassword/:id',callback:function(id){app.controller.loadView({layout:'resetpassword',resetID:id,create:true});}},{name:'contact-info',route:'contact-info',callback:function(){app.controller.loadView({layout:'contact-info',create:true});}},{name:'search',route:'search/:query',callback:function(query){try{var decodedQuery=decodeURIComponent(query);app.controller.loadView({mixed:true,module:'Search',layout:'search',query:decodedQuery,skipFetch:true});}catch(err){app.logger.error('Search term not a valid URI component.  Will not route search/'+query);}}},{name:'create',route:':module/create',callback:function(module){app.controller.loadView({module:module,layout:'records'});app.drawer.open({layout:'create',context:{create:true}},_.bind(function(context,model){var module=context.get('module')||model.module,route=app.router.buildRoute(module);app.router.navigate(route,{trigger:true});},this));}},{name:'profile',route:'profile',callback:function(){app.controller.loadView({layout:'record',module:'Contacts',modelId:app.user.get('id')});}},{name:'home',route:'Home',callback:loadHome,},{name:'list',route:':module'},{name:'record',route:':module/:id'}];app.router.addRoutes(routes);});var oHandleRenderError=app.error.handleRenderError;app.error.handleRenderError=function(component,method,additionalInfo){function handlePortalRenderDenied(c){var title=app.lang.get('ERR_NO_VIEW_ACCESS_TITLE');var module=app.lang.getModuleName(c.module,{plural:true});var message=app.utils.formatString(app.lang.get('ERR_NO_VIEW_ACCESS_MSG'),[module]);app.logger.warn(title+':\n'+message);}
if(method==='view_render_denied'){handlePortalRenderDenied(component);}else{oHandleRenderError(component,method,additionalInfo);}};var loadHome=function(){if(_.includes(app.metadata.getModuleNames({access:'read'}),'Dashboards')){app.controller.loadView({module:'Dashboards',layout:'servehome',});}else{app.controller.loadView({layout:'home',});}};var oRoutingBefore=app.routing.beforeRoute;app.routing.beforeRoute=function(route,args){var dm;var nonModuleRoutes=['search','error','profile','profileedit','logout','resetpassword'];app.logger.debug('Loading route. '+(route?route:'No route or undefined!'));if(!oRoutingBefore.call(this,route,args)){return false;}
if(app.api.isAuthenticated()&&!app.user.get('cookie_consent')){var reloadCb={complete:function(){window.location.reload();}};app.controller.loadView({layout:'consent-wizard',modelId:app.user.get('id'),module:'Contacts',callbacks:reloadCb,});app.additionalComponents.header.hide();return false;}
function alertUser(msg){msg=msg||'LBL_PORTAL_MIN_MODULES';app.alert.show('no-sidecar-access',{level:'error',title:app.lang.get('LBL_PORTAL_ERROR'),messages:[app.lang.get(msg)]});}
if(route==='index'){dm=typeof(app.config)!==undefined&&app.config.defaultModule?app.config.defaultModule:null;if(dm&&app.metadata.getModule(dm)&&app.acl.hasAccess('read',dm)){app.router.list(dm);}else if(app.acl.hasAccess('read','Home')){app.router.index();}else{alertUser();return false;}}else if(!_.include(nonModuleRoutes,route)&&args[0]&&!app.metadata.getModule(args[0])||!app.acl.hasAccess('read',args[0])){app.logger.error('Module not loaded or user does not have access. ',route);alertUser('LBL_PORTAL_ROUTE_ERROR');return false;}
return true;};app.Controller=app.Controller.extend({loadView:function(params){var self=this,callbackAppNotAvailable,options;if(params.layout==='login'){app.Controller.__super__.loadView.call(this,params);}
if(app.config&&app.config.appStatus=='offline'){if(params.layout!=='login'){options={module:'Login',layout:'login',create:true};app.Controller.__super__.loadView.call(self,options);}
callbackAppNotAvailable=function(data){app.alert.show('appOffline',{level:'error',title:app.lang.get('LBL_PORTAL_ERROR'),messages:app.lang.get('LBL_PORTAL_OFFLINE'),autoclose:false});};if(app.api.isAuthenticated()){app.logout({success:callbackAppNotAvailable,error:callbackAppNotAvailable},{clear:true});}else{callbackAppNotAvailable();}
return;}
if(params.layout!=='login'){app.Controller.__super__.loadView.call(this,params);}}});var __superBeanSave__=app.Bean.prototype.save;app.Bean.prototype.save=function(attributes,options){var defaultParams={portal_flag:1,portal_viewable:1};var moduleFields=app.metadata.getModule(this.module).fields||{};for(var field in defaultParams){if(moduleFields[field]){this.set(field,defaultParams[field],{silent:true});}}
__superBeanSave__.call(this,attributes,options);};app.events.on('app:sync:complete',function(){app.date.locale(app.user.getPreference('language'));});})(SUGAR.App);