<?php
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
use Sugarcrm\Sugarcrm\Util\Uuid;

use Sugarcrm\Sugarcrm\Reports\ReportFactory;
use Sugarcrm\Sugarcrm\Reports\Constants\ReportType;

class ReportsApi extends ModuleApi
{
    public function registerApiRest()
    {
        return array(
            'recordListCreate' => array(
                'reqType' => 'POST',
                'path' => array('Reports', '?', 'record_list'),
                'pathVars' => array('', 'record', ''),
                'method' => 'createRecordList',
                'shortHelp' => 'An API to create a record list from a saved report',
                'longHelp' => 'modules/Reports/api/help/module_recordlist_post.html',
            ),
            'getReportRecords' => array(
                'reqType' => 'GET',
                'path' => array('Reports', '?', 'records'),
                'pathVars' => array('module', 'record', ''),
                'method' => 'getReportRecords',
                'jsonParams' => array('group_filters'),
                'shortHelp' => 'An API to deliver filtered records from a saved report',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_records_get_help.html',
                'exceptions' => array(
                    // Thrown in getReportRecord
                    'SugarApiExceptionNotFound',
                    // Thrown in getReportRecords
                    'SugarApiExceptionInvalidParameter',
                ),
            ),
            'getRecordCount' => array(
                'reqType' => 'GET',
                'path' => array('Reports', '?', 'record_count'),
                'pathVars' => array('module', 'record', ''),
                'method' => 'getRecordCount',
                'jsonParams' => array('group_filters'),
                'shortHelp' => 'An API to get total number of filtered records from a saved report',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_recordcount_get_help.html',
                'exceptions' => array(
                    // Thrown in getReportRecord
                    'SugarApiExceptionNotFound',
                    // Thrown in getReportRecords
                    'SugarApiExceptionInvalidParameter',
                ),
            ),
            'getSavedReportChartById' => array(
                'reqType' => 'GET',
                'path' => array('Reports', '?', 'chart'),
                'pathVars' => array('module', 'record', ''),
                'method' => 'getSavedReportChartById',
                'shortHelp' => 'An API to get chart data for a saved report',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_chart_get_help.html',
            ),
            'retrieveSavedReportRecordsById' => [
                'reqType' => 'POST',
                'path' => ['Reports', 'retrieveSavedReportsRecords'],
                'pathVars' => ['module',],
                'method' => 'retrieveSavedReportRecordsById',
                'shortHelp' => 'An API to retrieve records list data for a saved report, alos support runtime filters',
                'longHelp' => 'modules/Reports/clients/base/api/help/retrieve_saved_report_records_by_id.html',
                'minVersion' => '11.17',
            ],
            'retrieveEnumFieldOptions' => [
                'reqType' => 'POST',
                'path' => ['Reports', '?', 'retrieveEnumFieldOptions'],
                'pathVars' => ['module', 'record', ''],
                'method' => 'retrieveEnumFieldOptions',
                'shortHelp' => 'An API that retrieves the options of a complex enum field',
                'longHelp' => 'modules/Reports/clients/base/api/help/retrieve_enum_field_options_post_help.html',
                'minVersion' => '11.17',
            ],
            'updateReportFilters' => [
                'reqType' => 'POST',
                'path' => ['Reports', '?', 'updateReportFilters'],
                'pathVars' => ['module', 'record', ''],
                'method' => 'updateReportFilters',
                'shortHelp' => 'An API that updates the runtime filters on Report\'s Cache',
                'longHelp' => 'modules/Reports/clients/base/api/help/update_report_filters_post_help.html',
                'minVersion' => '11.17',
            ],
            'retrieveReportPreviewData' => [
                'reqType' => 'POST',
                'path' => ['Reports', 'retrieveReportPreviewData'],
                'pathVars' => ['module', ''],
                'method' => 'retrieveReportPreviewData',
                'shortHelp' => 'An API that builds and retrieves complete report preview data',
                'longHelp' => 'modules/Reports/clients/base/api/help/retrieve_report_preview_post_help.html',
                'minVersion' => '11.17',
            ],
            'retrievePanel' => [
                'reqType' => 'GET',
                'path' => ['Reports', 'panel', '?'],
                'pathVars' => ['module', 'action', 'record'],
                'method' => 'retrievePanel',
                'shortHelp' => 'Retrieve report panel',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_panel_get_help.html',
            ],
            'retrieveDefaultPanel' => [
                'reqType' => 'GET',
                'path' => ['Reports', 'panelDefault', '?'],
                'pathVars' => ['module', 'action', 'reportType'],
                'method' => 'getDefaultReportPanel',
                'shortHelp' => 'Retrieve default report panel',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_default_panel_get_help.html',
            ],
            'savePanel' => [
                'reqType' => 'PUT',
                'path' => ['Reports', 'panel', '?'],
                'pathVars' => ['module', 'action', 'record'],
                'method' => 'savePanel',
                'shortHelp' => 'Save report panel',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_panel_put_help.html',
            ],
            'getActiveSavedReportsId' => [
                'reqType' => 'GET',
                'path' => ['Reports', 'activeSavedReport', '?'],
                'pathVars' => ['module', 'action', 'record'],
                'method' => 'getActiveSavedReportsId',
                'shortHelp' => 'Retrieve Saved Reports Defs',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_active_saved_reports_help.html',
                'minVersion' => '11.17',
            ],
            'getSavedReportFilterData' => [
                'reqType' => 'GET',
                'path' => ['Reports', '?', 'filter'],
                'pathVars' => ['module', 'record', ''],
                'method' => 'getSavedReportFilterData',
                'shortHelp' => 'Retrieve Saved Report Filter Data',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_saved_report_filterdata_get_help.html',
                'minVersion' => '11.17',
            ],
            'retrieveSavedReportChartById' => array(
                'reqType' => 'POST',
                'path' => array('Reports', '?', 'chart'),
                'pathVars' => array('module', 'record', ''),
                'method' => 'retrieveSavedReportChartById',
                'shortHelp' => 'An API to retrieve chart data',
                'longHelp' => 'modules/Reports/clients/base/api/help/retrieve_saved_report_chart_by_id_post_help.html',
                'minVersion' => '11.17',
            ),
        );
    }

    /**
     * Creates a record list from a saved report
     * @param $api ServiceBase The API class of the request, used in cases where the API changes how the fields are pulled from the args array.
     * @param $args array The arguments array passed in from the API containing the module and the records
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     * @return array id, module, records
     */
    public function createRecordList(ServiceBase $api, array $args)
    {
        $savedReport = $this->getReportRecord($api, $args);
        $reportDef = json_decode($savedReport->content, true);
        $recordIds = $this->getRecordIdsFromReport($reportDef);
        $id = RecordListFactory::saveRecordList($recordIds, 'Reports');
        $loadedRecordList = RecordListFactory::getRecordList($id);

        return $loadedRecordList;
    }

    /**
     * Gets offset and limit for pagination.
     * @param $api ServiceBase The API class of the request, used in cases where the API changes how the fields are pulled from the args array.
     * @param $args array The arguments array passed in from the API containing the module and the record
     * @return array
     */
    protected function getPagination($api, $args)
    {
        $offset = 0;
        $limit = -1;
        if (isset($args['offset'])) {
            $offset = (int) $args['offset'];
        }
        if ($offset < 0) {
            $offset = 0;
        }
        if (isset($args['max_num']) && $args['max_num'] !== '') {
            $limit = (int) $args['max_num'];
        }
        $limit = $this->checkMaxListLimit($limit);
        return array(
            $offset,
            $limit,
        );
    }

    public function retrieveEnumFieldOptions(ServiceBase $api, array $args): array
    {
        $this->requireArgs($args, ['record', 'function', 'functionBean']);

        $seed = BeanFactory::retrieveBean($args['functionBean']);

        return $seed->{$args['function']}();
    }

    /**
     * Returns the filter data of a report record by id
     *
     * @param ServiceBase $api
     * @param array $args
     * @return array
     */
    public function getSavedReportFilterData(ServiceBase $api, array $args): array
    {
        $reportType = array_key_exists('reportType', $args) ? $args['reportType'] : ReportType::DEFAULT;
        $report = ReportFactory::getReport($reportType, $args);

        $filterData = $report->getFilterData();

        return $filterData;
    }

    /**
     * Returns the filter/sorted data of a report record by id
     *
     * @param $api ServiceBase The API class of the request
     * @param $args array The arguments array passed in from the API
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     * @return array
     */
    public function retrieveSavedReportChartById(ServiceBase $api, array $args)
    {
        $this->requireArgs($args, ['record']);

        $reportType = array_key_exists('reportType', $args) ? $args['reportType'] : ReportType::DEFAULT;
        $report = ReportFactory::getReport($reportType, $args);

        return $report->getChartData();
    }

    /**
     * Returns the records associated with a saved report
     * @param $api ServiceBase The API class of the request, used in cases where the API changes how the fields are pulled from the args array.
     * @param $args array The arguments array passed in from the API containing the module and the record
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiExceptionInvalidParameter
     * @throws SugarApiException
     * @return array records
     */
    public function getReportRecords(ServiceBase $api, array $args)
    {
        $reportType = $args['reportType'] ? $args['reportType'] : ReportType::DEFAULT;
        $report = ReportFactory::getReport($reportType, $args);

        $reportDef = $report->getReportDef();

        list($offset, $limit) = $this->getPagination($api, $args);
        if ($limit > 0) {
            // check if there are more
            $limit++;
        }
        $recordIds = $this->getRecordIdsFromReport($reportDef, $offset, $limit);

        if (!empty($recordIds)) {
            $next_offset = -1;
            if (count($recordIds) == $limit) {
                array_pop($recordIds);
                $next_offset = $offset + $limit - 1;
            }
            $args['module'] = $reportDef['module'];
            $args['filter'] = array(array('id' => array('$in' => $recordIds)));
            unset($args['record']);
            $args['offset'] = 0;
            // this tells filterapi not to use default limit
            $args['max_num'] = -1;
            $filterApi = new FilterApi();
            $result = $filterApi->filterList($api, $args);
            return array(
                'next_offset' => $next_offset,
                'records' => $result['records'],
            );
        }

        return array(
            'next_offset' => -1,
            'records' => array(),
        );
    }

    /**
     * Returns the total number of records associated with a saved report
     * @param $api ServiceBase The API class of the request, used in cases where the API changes how the fields are pulled from the args array.
     * @param $args array The arguments array passed in from the API containing the module and the records
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     * @return array data
     */
    public function getRecordCount(ServiceBase $api, array $args)
    {
        $reportType = array_key_exists('reportType', $args) ? $args['reportType'] : ReportType::DEFAULT;
        $reporter = ReportFactory::getReport($reportType, $args);

        $reportDef = $reporter->getReportDef();

        $report = new Report($reportDef);
        return array('record_count' => $report->getRecordCount());
    }

    /**
     * Retrieves a saved report and chart data, given a report ID in the args
     *
     * @param $api ServiceBase The API class of the request
     * @param $args array The arguments array passed in from the API
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     * @return array
     */
    public function getSavedReportChartById(ServiceBase $api, array $args)
    {
        $this->requireArgs($args, ['record']);

        $reportType = array_key_exists('reportType', $args) ? $args['reportType'] : ReportType::DEFAULT;
        $report = ReportFactory::getReport($reportType, $args);

        return $report->getChartData();
    }

    /**
     * Update Report's Cache Filters
     *
     * @return bool
     */
    public function updateReportFilters(ServiceBase $api, array $args): bool
    {
        $this->requireArgs($args, ['record', 'runtimeFilters']);

        $reportType = $args['reportType'] ? $args['reportType'] : ReportType::DEFAULT;
        $report = ReportFactory::getReport($reportType, $args);

        $report->updateReportFilters($args['runtimeFilters']);

        return true;
    }

    /**
     * Retrieve full report preview data
     *
     * @param $api ServiceBase The API class of the request
     * @param $args array The arguments array passed in from the API
     *
     * @return array
     */
    public function retrieveReportPreviewData(ServiceBase $api, array $args): array
    {
        $this->requireArgs($args, ['previewData']);

        $previewData = $args['previewData'];

        $previewData['use_saved_filters'] = true;

        $reportDef = html_entity_decode($previewData['report_def']);
        $filtersDef = html_entity_decode($previewData['filters_defs']);
        $panelsDef = html_entity_decode($previewData['panels_def']);

        $report = new Report($reportDef, $filtersDef, $panelsDef);

        $reportType = $report->report_type ? $report->report_type : ReportType::DEFAULT;
        $reporter = ReportFactory::getReport($reportType, $previewData);

        $reporter->useCachedFilters(false);
        $completeReportDef = $reporter->buildReportDef($report->report_def_str);

        $reporter->setReportDef($completeReportDef);

        $previewData = [
            'filtersData' => $reporter->getFilterData(),
            'chartData' => $reporter->getChartData(),
            'tableData' => $reporter->getListData(true, true),
            'reportId' => $previewData['record'],
            'reportName' => $previewData['save_report_as'],
            'reportType' => $report->report_type,
            'showQuery' => array_key_exists('show_query', $previewData) ? $previewData['show_query'] : false,
        ];

        return $previewData;
    }

    /**
     * Retrieves a saved report records, given a report ID and reportType in the args
     *
     * @param $api ServiceBase The API class of the request
     * @param $args array The arguments array passed in from the API
     *
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     *
     * @return array
     */
    public function retrieveSavedReportRecordsById(ServiceBase $api, array $args): array
    {
        $this->requireArgs($args, ['record', 'reportType']);
        $reportType = $args['reportType'];

        $report = ReportFactory::getReport($reportType, $args);

        return $report->getListData(true, true);
    }

    /**
     * Retrieves the active Saved Reports of a report
     *
     * @param $api ServiceBase The API class of the request
     * @param $args array The arguments array passed in from the API
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     *
     * @return array
     */
    public function getActiveSavedReportsId(ServiceBase $api, array $args): array
    {
        $this->requireArgs($args, ['record']);

        $reportType = array_key_exists('reportType', $args) ? $args['reportType'] : ReportType::DEFAULT;

        $report = ReportFactory::getReport($reportType, $args);
        $savedReportDef = $report->getSchedules();

        // we can't use strict equal as trackAction can be either 'true' or bool(true)
        // neither boolVal($args['trackAction']) nor (bool) $args['trackAction'] can be used here
        if (array_key_exists('track', $args) &&
            array_key_exists('trackAction', $args) &&
                $args['track'] == 'true' && $args['trackAction']
        ) {
            $report->setTracker($args['trackAction']);
        }

        return $savedReportDef;
    }

    /**
     * Returns a report record
     * @param $api ServiceBase The API class of the request, used in cases where the API changes how the fields are pulled from the args array.
     * @param $args array The arguments array passed in from the API containing a record id
     * @throws SugarApiExceptionNotFound
     * @throws SugarApiException
     * @return SugarBean record
     */
    protected function getReportRecord($api, $args)
    {
        $this->requireArgs($args, array('record'));

        $savedReport = BeanFactory::getBean('Reports', $args['record']);

        if (empty($savedReport) || !$savedReport->ACLAccess('access')) {
            throw new SugarApiExceptionNotFound('Report not found: ' . $args['record']);
        }

        return $savedReport;
    }

    /**
     * Returns the record ids of a saved report
     * @param array $reportDef
     * @param integer $offset
     * @param integer $limit
     * @return array Array of record ids
     */
    protected function getRecordIdsFromReport($reportDef, $offset = 0, $limit = -1)
    {
        $report = new Report($reportDef);
        return $report->getRecordIds($offset, $limit);
    }

    /**
     * Retrieve panel
     *
     * @param ServiceBase $api
     * @param array $args
     * @throws SugarApiException
     * @return string
     */
    public function retrievePanel(ServiceBase $api, array $args): string
    {
        $this->requireArgs($args, ['record']);

        global $current_user;
        $qb = DBManagerFactory::getConnection()->createQueryBuilder();

        $qb->select(['contents'])
            ->from('reports_panels', 'rp')
            ->where($qb->expr()->eq('rp.report_id', $qb->createPositionalParameter($args['record'])))
            ->andWhere($qb->expr()->eq('rp.user_id', $qb->createPositionalParameter($current_user->id)))
            ->andWhere($qb->expr()->eq('rp.deleted', $qb->createPositionalParameter(0)));

        $stmt = $qb->execute();

        $result = $stmt->fetchAssociative();

        if (is_array($result)) {
            return $result['contents'];
        }

        return '';
    }


    /**
     * Get default Report Panel
     *
     * This method is now deprecated.
     * The default panel meta can be found inside record.php of Reports module
     *
     * @deprecated Since 12.3.0. Will be removed in 14.0.0.
     *
     * @param ServiceBase $api
     * @param array $args
     *
     * @return string
     */
    public function getDefaultReportPanel(ServiceBase $api, array $args): string
    {
        LoggerManager::getLogger()->deprecated('This endpoint is not supported after 12.2 and will be removed in 14.0');

        $result = '';

        $this->requireArgs($args, ['reportType']);
        $reportType = $args['reportType'];

        $qb = DBManagerFactory::getConnection()->createQueryBuilder();
        $qb->select('contents');
        $qb->from('reports_panels');
        $qb->where($qb->expr()->eq('report_type', $qb->createPositionalParameter($reportType)));
        $qb->andWhere($qb->expr()->eq('default_panel', $qb->createPositionalParameter(1)));
        $qb->andWhere($qb->expr()->eq('deleted', $qb->createPositionalParameter(0)));
        $res = $qb->execute();
        $row = $res->fetchAssociative();

        if (is_array($row) && array_key_exists('contents', $row)) {
            $result = $row['contents'];
        }

        return $result;
    }

    /**
     * Save panel
     *
     * @param ServiceBase $api
     * @param array $args
     * @throws SugarApiException
     * @return array
     */
    public function savePanel(ServiceBase $api, array $args): array
    {
        $this->requireArgs($args, ['record', 'panels']);

        $reportRaw = $this->reportHasPanel($args);
        if (is_array($reportRaw)) {
            $contents = json_decode($reportRaw['contents'], true);
            $panelProperties = $this->updateReportPanel($args, $contents);
        } else {
            $panelProperties = $this->createReportPanel($args);
        }

        return $panelProperties;
    }

    /**
     * Check if report has a panel configured already
     *
     * @param array $args
     * @return array|false
     */
    protected function reportHasPanel(array $args)
    {
        global $current_user;

        $qb = DBManagerFactory::getConnection()->createQueryBuilder();
        $qb->select('contents');
        $qb->from('reports_panels');
        $qb->where($qb->expr()->eq('report_id', $qb->createPositionalParameter($args['record'])));
        $qb->andWhere($qb->expr()->eq('user_id', $qb->createPositionalParameter($current_user->id)));
        $qb->andWhere($qb->expr()->eq('deleted', $qb->createPositionalParameter(0)));
        $res = $qb->execute();
        $row = $res->fetchAssociative();

        return $row;
    }

    /**
     * Create report panel
     *
     * @param array $args
     * @return array
     */
    protected function createReportPanel(array $args): array
    {
        global $current_user, $timedate;

        $now = $timedate->asDb($timedate->getNow());

        $qb = DBManagerFactory::getConnection()->createQueryBuilder();

        $panelContents = [
            'panels' => $args['panels'],
            'defaultLayout' => true,
        ];

        $reportPanelId = Uuid::uuid4();
        $qb->insert('reports_panels')
            ->values([
                'id' => $qb->createPositionalParameter($reportPanelId),
                'report_id' => $qb->createPositionalParameter($args['record']),
                'user_id' => $qb->createPositionalParameter($current_user->id),
                'contents' => $qb->createPositionalParameter(json_encode($panelContents)),
                'date_entered' => $qb->createPositionalParameter($now),
                'date_modified' => $qb->createPositionalParameter($now),
            ]);
        $qb->execute();

        return $panelContents;
    }

    /**
     * Update reports panel
     *
     * @param array $args
     * @param array $contents
     * @return array
     */
    protected function updateReportPanel(array $args, array $contents): array
    {
        global $current_user, $timedate;

        $now = $timedate->asDb($timedate->getNow());

        $panelContents = [
            'panels' => $args['panels'],
            'defaultLayout' => array_key_exists('defaultLayout', $args) ? $args['defaultLayout'] : false,
        ];

        $qb = DBManagerFactory::getConnection()->createQueryBuilder();
        $qb->update('reports_panels', 'rp')
            ->set('rp.contents', $qb->createPositionalParameter(json_encode($panelContents)))
            ->set('rp.date_modified', $qb->createPositionalParameter($now))
            ->where($qb->expr()->eq('rp.report_id', $qb->createPositionalParameter($args['record'])))
            ->andWhere($qb->expr()->eq('rp.user_id', $qb->createPositionalParameter($current_user->id)))
            ->andWhere($qb->expr()->eq('rp.deleted', $qb->createPositionalParameter(0)));

        $qb->execute();

        return $panelContents;
    }
}
