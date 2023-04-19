({

  className: 'sf_drawer',
  
  finalUrl: null,

  
  initialize: function(options) {
    var _self = this;

    _self.model = options.context.get('model') || {};
    this.sfBuildUrl();
    this._super('initialize', [options]);
  },


  render: function(options) {
    this._super('render', [options]);    
  },


  events: {
    'click #closeButton': 'closeDrawer',
  },


  sfBuildUrl: function() {
	  
    var _self = this;

	var filter1 = '';
	app.api.call('read', app.api.buildURL('connector/salesfusion'), filter1, { 
		success: function(data,xhr_obj,c) { 			
			_self.finalUrl = data.iframeUrl;
   		}
   	}, {
    	async: false
	});
       	
	_self.finalUrl = _self.finalUrl.replace('{recordId}',_self.model.id);
	_self.finalUrl = _self.finalUrl.replace('{crmType}',_self.model.get('_module'));	
  },


  initialize_drawer: function() {  
  },


  closeDrawer: function() {	
    app.drawer.close();
  },

})