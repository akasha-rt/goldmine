({    
    extendsFrom: 'ActivityTimelineView',
	
	/**
     * Object icon names for modules
     */
    moduleIconsSf: {
		sf_Dialogs: 'sicon-edit-lg',
		sf_EventManagement: 'sicon-events-lg',
		sf_webActivity: 'sicon-web-lg'
    },
	
	/**
     * Array default modules
     */
    defaultModulesSf: [
		'sf_Dialogs',
		'sf_webActivity',
		'sf_EventManagement'
    ],

    /**
     * Default mapping of module to link name
     */
    moduleLinkMappingSf: {	
		sf_Dialogs: 'sf_dialogs_contacts',
		sf_webActivity: 'sf_webactivity_contacts',
		sf_EventManagement: 'sf_eventmanagement_contacts',
		sf_webActivity: 'sf_webactivity_accounts',
		sf_Dialogs: 'sf_dialogs_leads',
		sf_webActivity: 'sf_webactivity_leads',
		sf_EventManagement: 'sf_eventmanagement_leads'
    },
	
	
	/**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this.moduleIcons = {...this.moduleIcons, ...this.moduleIconsSf};
        this.defaultModules = {...this.defaultModules, ...this.defaultModulesSf};
        this.moduleLinkMapping = {...this.moduleLinkMapping, ...this.moduleLinkMappingSf};
    },
	
	/**
     * Handle of filter change event
     *
     * @param {string} filterModule name of filtered module
     * @param {boolean} silent
     */
    handleFilter: function(filterModule, silent) {
		if (!silent || !this.filter.module) {
            var selectedModule = filterModule;
            if (selectedModule !== 'all_modules') {
                selectedModule = _.findKey(this.moduleLinkMapping, function(item) {
                    return item === selectedModule;
                });
            }

            var isModuleAvailable = app.metadata.getModule(selectedModule);
			if (filterModule == 'sf_dialogs') {
				this.filter.module = 'sf_Dialogs';
			} else if (filterModule == 'sf_webactivity') {
				this.filter.module = 'sf_webActivity';
			} else if (filterModule == 'sf_eventmanagement') {
				this.filter.module = 'sf_EventManagement';
			} else {
				this.filter.module = isModuleAvailable ? selectedModule : 'all_modules';
			}
            this._setActivityModulesAndFields(this.baseModule);
            this.reloadData();
        }
    },
    
	/**
     * Appends cards
     * @param models array of models to be added to the view
     */
    appendCardsToView: function(models) {
        this._setIconClass();

        _.each(models, _.bind(function(model) {
            this._patchFieldsToModel(model);
            var layout = this.createCard(model);
			
            if (layout) {
				
				if( model.get('_module')=='sf_webActivity'  && $(layout.el).find('.panel-body span:nth-child(1)').length > 0) {
					var duration = $(layout.el).find('.panel-body span:nth-child(1) div') ? $(layout.el).find('.panel-body span:nth-child(1) div').attr('title') : '';
					if( duration != "" && duration != undefined) {
						$(layout.el).find('.panel-body span:nth-child(1)').html('<div class="ellipsis_inline" data-placement="bottom" title="" data-original-title="'+duration+'">Duration: '+duration+' Seconds</div>');
						this.$('.activity-timeline-cards').append(layout.el);
					}else if(duration == undefined) {
						$(layout.el).find('.panel-body span:nth-child(1)').html('<div class="ellipsis_inline" data-placement="bottom" title="" data-original-title="">Duration: </div>');
						this.$('.activity-timeline-cards').append(layout.el);
					}
					
				}
				
				if( model.get('_module')=='sf_Dialogs'  && $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1)').length > 0) {
					var completed = $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1) div') ? $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1) div').attr('title') : '';
					if( completed != ""  && completed != undefined) {
						$(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1)').html('<div class="ellipsis_inline" data-placement="bottom" title="" data-original-title="'+completed+'">Completed '+completed+'</div>');
						this.$('.activity-timeline-cards').append(layout.el);
					}
					
				}
				
				if( model.get('_module')=='sf_EventManagement' && $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1)').length > 0 && $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(2)').length > 0) {
					
					var layoutElChild1Input = $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1) input');

					if(layoutElChild1Input.length > 0) {
						var register_el_val = layoutElChild1Input.attr('aria-label');
						var is_register = layoutElChild1Input.prop('checked');
					}
					
					var layoutElChild2Input = $(layout.el).find('.activity-card-content-body .panel-header span:nth-child(2) input');
					
					if(layoutElChild2Input.length > 0) {
						var attended_el_val = layoutElChild2Input.attr('aria-label');
						var is_attended = layoutElChild2Input.prop('checked');
					}

					if( register_el_val=='Registered' && is_register && is_register != undefined) {
						$(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1)').html('<span class="label label-info" style="margin-left:10px;">Registered</span>');
						this.$('.activity-timeline-cards').append(layout.el);
					} else {
						$(layout.el).find('.activity-card-content-body .panel-header span:nth-child(1)').html('');
						this.$('.activity-timeline-cards').append(layout.el);
					}
					
					if( attended_el_val=='Attended' && is_attended && is_attended != undefined) {
						$(layout.el).find('.activity-card-content-body .panel-header span:nth-child(2)').html('<span class="label label-success" style="margin-bottom: 10px; margin-top: 5px; margin-left:10px;" >Attended</span>');
						this.$('.activity-timeline-cards').append(layout.el);
					} else {
						$(layout.el).find('.activity-card-content-body .panel-header span:nth-child(2)').html('');
						this.$('.activity-timeline-cards').append(layout.el);
					}
					
				} else {
					this.$('.activity-timeline-cards').append(layout.el); //defult code
				}
            }

            // check menu icon visibilities
            layout.setCardMenuVisibilities();
        }, this));
    },	
})