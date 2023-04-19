;(function wUserUtils(app){function componentDefined(component){return component instanceof Function===true;}
function getCmpDictionaryName(componentType){switch(componentType){case"field":return"fields";case"view":return"views";case"layout":return"layouts";default:throw"ERROR. Unknown component type ["+componentType+"].";}}
function buildComponentName(platform,moduleName,componentType,componentName,isCustom){var custom="";if(_.isEmptyValue(moduleName)===true){moduleName="";}
if(isCustom===true){custom="Custom";}
componentName=capitalizeArrayItems(componentName.split("-")).join("");return capitalizeArrayItems([platform]).join("")
+moduleName
+capitalizeArrayItems([custom,componentName,componentType]).join("");}
function capitalizeArrayItems(array){var formattedArray=[];_.each(array,function upperCase(item){if(_.isEmptyValue(item)===true){return;}
formattedArray.push(item.charAt(0).toUpperCase()+item.substr(1));});return formattedArray;}
function extendComponent(platform,moduleName,componentType,componentName,controller){var fullCmpName;var cleanController;var dictionary=getCmpDictionaryName(componentType);var baseFullCmpName=buildComponentName(platform,moduleName,componentType,componentName,false);var cstmFullCmpName=buildComponentName(platform,moduleName,componentType,componentName,true);var baseController=app.view[dictionary][baseFullCmpName];var cstmController=app.view[dictionary][cstmFullCmpName];fullCmpName=baseFullCmpName;if(componentDefined(cstmController)===true){fullCmpName=cstmFullCmpName;}else{if(componentDefined(baseController)===true){fullCmpName=baseFullCmpName;}else{app.view.declareComponent(componentType,componentName,moduleName,undefined,false,platform);}}
cleanController=app.view[dictionary][fullCmpName];app.view[dictionary][fullCmpName]=cleanController.extend(controller);}
app.wsystems=app.wsystems||{};app.wsystems.wUserUtils=app.wsystems.wUserUtils||{};app.wsystems.wUserUtils.extendComponent=extendComponent;})(SUGAR.App);