/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

(function(app) {
    app.events.on('router:init', function(router) {
        var module = 'Reports';
        var routes = [
            {
                name: 'ReportsList',
                route: 'Reports',
                callback: function(params) {
                    var filterOptions;

                    if (params) {
                        var parsedParams = {filterModule: []};
                        // FIXME SC-5657 will handle url param parsing
                        var paramsArray = params.split('&');
                        _.each(paramsArray, function(paramPair) {
                            var keyValueArray = paramPair.split('=');
                            if (keyValueArray.length > 1) {
                                parsedParams[keyValueArray[0]] = keyValueArray[1].split(',');
                            }
                        });

                        if (!_.isEmpty(parsedParams.filterModule)) {
                            filterOptions = new app.utils.FilterOptions().config({
                                initial_filter_label: app.lang.get('LBL_MODULE_NAME', parsedParams.filterModule),
                                initial_filter: '$relate',
                                filter_populate: {
                                    'module': {$in: parsedParams.filterModule}
                                }
                            });
                        }
                    }

                    app.controller.loadView({
                        module: module,
                        layout: 'records',
                        filterOptions: filterOptions ? filterOptions.format() : null
                    });
                }
            },
            {
                name: 'ReportsBwc',
                route: 'Reports/:id/bwc',
                callback: function(id) {
                    app.router.navigate(
                        `#bwc/index.php?module=Reports&action=DetailView&record=${id}&legacyBwc=1`,
                        {
                            trigger: true,
                            replace: true
                        }
                    );
                }
            },
        ];

        app.router.addRoutes(routes);
    });
})(SUGAR.App);
