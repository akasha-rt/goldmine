/*eslint-disable*/
(function extendCollectionFilter(app) {
    app.events.on("app:sync:complete", function extendCollectionFilter1() {
        if (!App.data.getCollectionClasses().Filters) {
            App.data.getCollectionClasses();
        }

        if (App.data.getCollectionClasses().Filters.prototype.AlreadyLoadedExtendCollectionFilter === true) {
            return;
        }
        var defaultLoadMethod = App.data.getCollectionClasses().Filters.prototype.load;

        App.data.getCollectionClasses().Filters.prototype.load = function (options) {
            options = options || {};

            var module = this.moduleName,
                prototype = this._getPrototype(),
                collection;

            if (!module) {
                app.logger.error("This Filters collection has no module defined.");
                return;
            }

            if (this.collection) {
                this.collection.off();
            }

            // Make sure only one request is sent for each module.
            prototype._request = prototype._request || {};
            if (prototype._request[module]) {
                prototype._request[module].xhr.done(
                    _.bind(function () {
                        this._onSuccessCallback(options.success);
                    }, this)
                );
                return;
            }

            // Try to retrieve cached filters.
            prototype._cache = prototype._cache || {};
            if (prototype._cache[module]) {
                this._onSuccessCallback(options.success);
                return;
            }

            this._initFiltersModuleCache();

            // No cache found, retrieve filters.
            this._loadPredefinedFilters();

            var requestObj = {
                showAlerts: false,
                limit: -1,
                filter: [
                    {
                        $and: [
                            {
                                module_name: module
                            },
                            {
                                $or: [
                                    {
                                        created_by: app.user.id
                                    },
                                    {
                                        default_filter: "1"
                                    }
                                ]
                            }
                        ]
                    }
                ],
                success: _.bind(function (models) {
                    this._cacheFilters(models);
                    this._onSuccessCallback(options.success);
                }, this),
                complete: function () {
                    delete prototype._request[module];
                },
                error: function () {
                    if (_.isFunction(options.error)) {
                        options.error();
                    } else {
                        app.logger.error("Unable to get filters from the server.");
                    }
                }
            };
            prototype._request[module] = prototype.fetch.call(this, requestObj);
        };
    });
})(SUGAR.App);
