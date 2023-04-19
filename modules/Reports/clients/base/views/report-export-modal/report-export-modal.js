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
/**
 * @class View.Views.Base.ReportsReportExportView
 * @alias SUGAR.App.view.views.BaseReportsReportExportModalView
 * @extends View.View
 */
 ({
    events: {
        'click .close': 'closeModal',
        'click .export-pdf': 'exportToPdf',
        'click .export-csv': 'exportToCsv',
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
    },

    /**
     * Open Export Modal
     */
    openModal: function() {
        this.render();

        let modalEl = this.$('[data-content=report-export-modal]');

        modalEl.modal({
            backdrop: 'static'
        });
        modalEl.modal('show');

        modalEl.on('hidden.bs.modal', _.bind(function handleModalClose() {
            this.$('[data-content=report-export-modal]').remove();
        }, this));
    },

    /**
     * Export to PDF
     *
     * @param {Object} evt
     */
    exportToPdf: function(evt) {
        let queryParams = {};

        const reportData = this.context.get('data');
        const hasChart = this.context.get('reportHasChart');

        if (reportData && _.has(reportData, 'orderBy')) {
            queryParams.orderBy = reportData.orderBy;
        }

        if (hasChart) {
            queryParams.shouldHaveChartCanvas = true;
        }

        let url = app.api.buildURL('Reports', this.model.get('id') + '/' + 'base64', null, queryParams);

        app.alert.show('export-to-pdf', {
            level: 'process',
            title: app.lang.get('LBL_EXPORT_PDF', 'Reports'),
        });

        this.$('[data-content=report-export-modal]').hide();

        app.api.call('read', url, {}, {
            complete: _.bind(function(data) {
                if (this.disposed) {
                    return;
                }

                const currentTime = this.formatDateToString();
                const userName = app.user.get('user_name');
                const reportName = this.model.get('name').replace(/ /g,'_');
                const name = `${reportName}_${userName}_${currentTime}.pdf`;

                this.downloadFileLocally(name, data.xhr.responseText, 'pdf');

                this.closeModal();

                app.alert.dismiss('export-to-pdf');
                app.alert.show('export-to-pdf-success', {
                    level: 'success',
                    messages: app.lang.get('LBL_EXPORT_PDF_SUCCESS', 'Reports'),
                    autoClose: true
                });
            }, this),
        });
    },

    /**
     * Export to CSV
     *
     * @param {Object} evt
     */
    exportToCsv: function(evt) {
        let queryParams = {};

        const reportData = this.context.get('data');

        if (reportData && _.has(reportData, 'orderBy')) {
            queryParams.orderBy = reportData.orderBy;
        }

        let url = app.api.buildURL('Reports', this.model.get('id') + '/' + 'csv', null, queryParams);

        app.alert.show('export-to-csv', {
            level: 'process',
            title: app.lang.get('LBL_EXPORT_CSV', 'Reports'),
        });

        this.$('[data-content=report-export-modal]').hide();

        app.api.call('read', url, {}, {
            complete: _.bind(function(data) {
                if (this.disposed) {
                    return;
                }

                const currentTime = this.formatDateToString();
                const userName = app.user.get('user_name');
                const reportName = this.model.get('name').replace(/ /g,'_');
                const name = `${reportName}_${userName}_${currentTime}.csv`;

                this.downloadFileLocally(name, data.xhr.responseText, 'csv');

                this.closeModal();

                app.alert.dismiss('export-to-csv');
                app.alert.show('export-to-csv-success', {
                    level: 'success',
                    messages: app.lang.get('LBL_EXPORT_CSV_SUCCESS', 'Reports'),
                    autoClose: true
                });
            }, this),
        });
    },

    /**
     * Downloads a file on the file system
     *
     * @param {string} filename
     * @param {string} content
     * @param {string} contentType
     */
    downloadFileLocally: function(filename, content, contentType) {
        const dataURIToBlob = function(dataURI) {
            let binStr = contentType === 'csv' ? dataURI : atob(dataURI);
            let len = binStr.length;
            let arr = new Uint8Array(len);

            for (let i = 0; i < len; i++) {
                arr[i] = binStr.charCodeAt(i);
            }

            let blob = new Blob([arr], {
                type: 'application/octet-stream',
            });

            if (contentType === 'csv') {
                const bom = new Uint8Array([0xEF, 0xBB, 0xBF]);

                blob = new Blob([bom, binStr], {
                    type: 'text/plain;charset=utf-8',
                });
            }

            return blob;
        };

        const blob = dataURIToBlob(content);
        const url = URL.createObjectURL(blob);

        let element = document.createElement('a');
        element.setAttribute('href', url);
        element.setAttribute('download', filename);

        element.style.display = 'none';
        document.body.appendChild(element);

        element.click();

        document.body.removeChild(element);
    },

    /**
     * Format current date to string
     *
     * @return {string}
     */
    formatDateToString: function() {
        const currentDate = new Date();
        const targetLength = 10;
        const currentDay = (currentDate.getDate() < targetLength ? '0' : '') + currentDate.getDate();
        const currentMonth = ((currentDate.getMonth() + 1) < targetLength ? '0' : '') + (currentDate.getMonth() + 1);
        const currentYear = currentDate.getFullYear();
        const currentHour = currentDate.getHours();
        const currentMin = currentDate.getMinutes();

        return `${currentYear}_${currentMonth}_${currentDay}_${currentHour}_${currentMin}`;
    },

    /**
     * Close the modal and destroy it
     */
    closeModal: function() {
        this.dispose();
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        this.$('[data-content=report-export-modal]').remove();
        $('.modal-backdrop').remove();

        this._super('_dispose');
    },
});
