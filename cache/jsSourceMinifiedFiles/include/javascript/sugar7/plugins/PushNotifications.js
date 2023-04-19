(function(app){app.events.on('app:init',function(){app.plugins.register('PushNotifications',['layout','view'],{pushNotificationKey:'',pushNotificationFileName:'',onAttach:function(component){if(this.areDependenciesSet()){this.initialize();}else{app.alert.show('pushnotif_missing_dependencies',{level:'error',messages:app.lang.get('LBL_HINT_PUSH_ERROR',null,component)});}},areDependenciesSet:function(){return typeof this.pushNotificationFilePath==='string'&&this.pushNotificationFilePath.length>0&&typeof this.saveSubscription==='function';},initialize:function(){this.pushMessageSupport=this.hasPushMessagesSupport();if(this.pushMessageSupport){this.setPushNotificationFileName();this.setPushNotificationKey();}},setPushNotificationFileName:function(){this.pushNotificationFileName=_.last(this.pushNotificationFilePath.split('/')).replace('.js','');},setPushNotificationKey:function(){var self=this;app.api.call('GET',app.api.buildURL('stage2/params'),null,{success:function(data){self.pushNotificationKey=data.pushNotificationKey;},error:function(err){app.logger.error('Failed to get Hint params: '+JSON.stringify(err));}});},setupPushNotifications:function(denyPermissionCallback){if(this.pushMessageSupport&&this.pushNotificationKey){if(this.hasNotificationPermission()){this.checkWorkerRegistration();}else{this.warnAboutPermissionRequest();}}},warnAboutPermissionRequest:function(){app.alert.show('pushrequest_confirmation',{level:'confirmation',messages:app.lang.get('LBL_HINT_PUSH_MESSAGES_PERMISSION',this.module),onConfirm:_.bind(this.handlePermissionConfirm,this),onCancel:$.noop});},handlePermissionConfirm:function(){var permission=this.requestPushNotificationPermission();permission.then(_.bind(this.checkWorkerRegistration,this));},requestPushNotificationPermission:function(){var self=this;return new Promise(function(resolve,reject){const permissionResult=Notification.requestPermission(function(result){resolve(result);});if(permissionResult){permissionResult.then(resolve,reject);}}).then(function(permissionResult){if(permissionResult!=='granted'){if(self.handleDeniedPermission){self.handleDeniedPermission();}
throw new Error('Permission was not granted.');}});},hasRegisteredWorker:function(registrations){var self=this;return _.some(registrations,function(registration){return registration.active.scriptURL.indexOf(self.pushNotificationFileName)>-1;});},checkWorkerRegistration:function(){var self=this;navigator.serviceWorker.getRegistrations().then(function(registrations){if(!self.hasRegisteredWorker(registrations)){self.registerServiceWorker();}});},registerServiceWorker:function(){navigator.serviceWorker.register(this.pushNotificationFilePath).then(_.bind(this.handleRegisteredWorkerStates,this)).catch(this.handleFailedWorkerRegistration);},handleRegisteredWorkerStates:function(registration){var worker=registration.installing||registration.waiting||registration.active;if(worker){if(worker.state==='activated'){this.subscribeUserToPushNotifications(registration);}else{var self=this;worker.addEventListener('statechange',function(event){if(event.target.state==='activated'){self.subscribeUserToPushNotifications(registration);}});}}},subscribeUserToPushNotifications:function(registration){registration.pushManager.subscribe({userVisibleOnly:true,applicationServerKey:this.urlBase64ToUint8Array(this.pushNotificationKey)}).then(_.bind(this.saveSubscription||$.noop,this)).catch(this.handleFailedWorkerRegistration);},handleFailedWorkerRegistration:function(error){var message=error.message?error.message:JSON.stringify(error);app.logger.error('An error occured while registering a service worker: '.concat(message));},urlBase64ToUint8Array:function(base64String){const padding='='.repeat((4-base64String.length%4)%4);const base64=(base64String+padding).replace(/\-/g,'+').replace(/_/g,'/');const rawData=window.atob(base64);const outputArray=new Uint8Array(rawData.length);for(let i=0;i<rawData.length;++i){outputArray[i]=rawData.charCodeAt(i);}
return outputArray;},hasPushMessagesSupport:function(){return('serviceWorker'in navigator)&&('PushManager'in window);},hasNotificationPermission:function(){return Notification.permission==='granted';}});});})(SUGAR.App);