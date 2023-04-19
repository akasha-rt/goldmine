(function(app){app.events.on('app:init',function(){app.plugins.register('FocusDrawer',['field'],{focusEnabled:false,onAttach:function(component){component.on('render',function(){this.focusEnabled=this.checkFocusAvailability();if(this.focusEnabled){this.initFocusIcon();}});},checkFocusAvailability:function(){var focusDrawerIsEnabled=app.utils.isTruthy(app.config.enableLinkToDrawer);var fieldIsValid=_.isFunction(this.getFocusContextModule)&&_.isFunction(this.getFocusContextModelId);var module=app.metadata.getModule(this.getFocusContextModule());var moduleIsNotBwc=!(module&&app.utils.isTruthy(module.isBwcEnabled));var layoutIsValid=this._checkLayoutFocusDrawerAccess();return focusDrawerIsEnabled&&fieldIsValid&&moduleIsNotBwc&&!_.isEmpty(app.sideDrawer)&&layoutIsValid;},initFocusIcon:function(){var relateFieldContainer=this.$el.find('.relate-field-container');var focusIconContainer=relateFieldContainer.find('.focus-icon-container');var isContainerHidden=focusIconContainer.hasClass('hide');if(isContainerHidden&&this.value){focusIconContainer.toggleClass('hide');var focusIcon=focusIconContainer.find('.focus-icon');focusIcon.click(_.bind(this.handleFocusClick,this));focusIcon.keyup(_.bind(this.handleKeyboardClick,this));}},handleFocusClick:function(){if(this.focusEnabled){this.openFocusDrawer(this.getFocusContext());}},handleKeyboardClick:function(e){if(e.type==='keyup'&&e.originalEvent.key==='Enter'){this.handleFocusClick();}},getFocusContext:function(){return{layout:'row-model-data',context:{layout:'focus',module:_.isFunction(this.getFocusContextModule)?this.getFocusContextModule():'',modelId:_.isFunction(this.getFocusContextModelId)?this.getFocusContextModelId():'',parentContext:this.context,fieldDefs:this.fieldDefs,baseModelId:this.model.get('id'),disableRecordSwitching:this._getDisableRecordSwitching()}};},_getDisableRecordSwitching:function(){return this.disableFocusDrawerRecordSwitching||this.def.disableFocusDrawerRecordSwitching||false;},openFocusDrawer:function(context){if(app.sideDrawer){var drawerIsOpen=app.sideDrawer.isOpen();var drawerContext=app.sideDrawer.currentContextDef;if(drawerIsOpen&&_.isEqual(context,drawerContext)){return;}
var sideDrawerClick=this.$el.closest('#side-drawer').length>0;app.sideDrawer.open(context,null,sideDrawerClick);}},getFocusDrawer:function(){return app.sideDrawer;},_checkLayoutFocusDrawerAccess:function(){var currLayout=this.view.layout;while(currLayout){if(currLayout.disableFocusDrawer){return false;}
currLayout=currLayout.layout;}
return true;}});});})(SUGAR.App);