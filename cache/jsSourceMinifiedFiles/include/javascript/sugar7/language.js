(function(app){app.events.on('app:init',function(){app.lang=_.extend(app.lang,{getModuleIconLabel:function(module){var name=app.lang.getAppListStrings('moduleIconList')[module]||app.lang.getModuleName(module);var space=name.indexOf(' ');var hasSpace=space!==-1;var result;if(hasSpace){result=name.substring(0,1)+name.substring(space+1,space+2);}else{result=name.substring(0,2);}
return result;}});});app.events.on('app:sync:complete',function(){var language=app.user.getPreference('language')
if(language){language=language.replace('_','-')
app.date.locale(language.toLowerCase());if($.fn.select2.locales){var twoLetterCode=language.substring(0,2).toLowerCase();if(twoLetterCode in $.fn.select2.locales){$.extend($.fn.select2.defaults,$.fn.select2.locales[twoLetterCode]);}
if(language in $.fn.select2.locales){$.extend($.fn.select2.defaults,$.fn.select2.locales[language]);}}}});app.events.on('lang:direction:change',function(){var direction=app.lang.direction,isRTL=direction==='rtl';$('html').toggleClass('rtl',isRTL);});})(SUGAR.App);