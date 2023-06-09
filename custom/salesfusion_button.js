(function(app){
	app.events.on('app:sync:complete', function(){
		app.router.on('route:record', function(module){
			app.controller.context.on('button:custom_sf_iframebutton:click', function(model){
				app.drawer.open({
					layout: 'sf_drawer',
					context: {
						model: model,
					},
				});
			});
		}); 
    });
})(SUGAR.App);