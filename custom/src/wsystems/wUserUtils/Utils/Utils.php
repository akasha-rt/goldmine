<?php
namespace Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Utils;

/**
 *
 * @package Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Utils
 */
class Utils
{
    /**
     *
     * @param string $wDrillDashletId
     * @return string
     */
    public static function getwDrillDownFilterDef(string $wDrillDashletId): string
    {
        global $db;

        $wDrillDownFilter = "";

        $drillDownReportSql = <<<SQL
SELECT
    filters
FROM
    wdrilldown_report_filters_dashlets
WHERE
    dashlet_id = '{$wDrillDashletId}'
SQL;

        $result = $db->query($drillDownReportSql);
        while ($row = $db->fetchByAssoc($result)) {
            $wDrillDownFilter = html_entity_decode($row['filters']);
        }

        return $wDrillDownFilter;
    }

    /**
     *
     * @param string $wDrillDashletId
     * @param string $wDrillReportFilterId
     * @param string $wDrillSelectedReportId
     * @param string $wDrillDownFilterDef
     * @return void
     */
    public static function insertwDrillCopyDashlet(string $wDrillDashletId, string $wDrillReportFilterId, string $wDrillSelectedReportId, string $wDrillDownFilterDef, string $targetUserId): void
    {
        global $timedate, $db;

        $curentDate = $timedate->getInstance()->nowDb();

        $insertNewDrilldownFilter = <<<SQL
INSERT INTO
    wdrilldown_report_filters_dashlets
    (id, dashlet_id, filters, date_generated, report_id, user_id)
VALUES
    ('{$wDrillReportFilterId}', '{$wDrillDashletId}', '{$wDrillDownFilterDef}', '{$curentDate}', '{$wDrillSelectedReportId}', '{$targetUserId}')
SQL;

        $db->query($insertNewDrilldownFilter);
    }

    /**
     *
     * @param string $oldwDrillDashboardId
     * @return string
     */
    public static function getwDrillDownTemplatesDef(string $oldwDrillDashboardId): string
    {
        global $db;
        $wDrillDownTemplate = "";

        $getwDrillDownTemplatestSql = <<<SQL
SELECT
    templates
FROM
    wdrilldown_report_filters_templates
WHERE
    dashboard_id = '{$oldwDrillDashboardId}'
SQL;

        $result = $db->query($getwDrillDownTemplatestSql);
        while ($row = $db->fetchByAssoc($result)) {
            $wDrillDownTemplate = html_entity_decode($row['templates']);
        }

        return $wDrillDownTemplate;
    }

    /**
     * DashletIds need to be updated for the dashboard processing to validate the filter
     * as being on this particular dashboard
     *
     * @param string $templates
     * @param array $dashletIdsChanged
     * @return string
     */
    public static function replaceDashletIds(string $templates, array $dashletIdsChanged): string
    {
        foreach ($dashletIdsChanged as $oldDashletId => $newDashletId) {
            $templates = str_replace($oldDashletId, $newDashletId, $templates);
        }
        return $templates;
    }

    /**
     *
     * @param string $oldwDrillDashboardId
     * @return string
     */
    public static function getwDrillDownFiltersTemplateDef(string $oldwDrillDashboardId): string
    {
        global $db;

        $wDrillDownTemplateFilters = "";

        $drillDownReportSql = <<<SQL
SELECT filters
FROM
    wdrilldown_report_filters_dashboards
WHERE
    dashboard_id = '{$oldwDrillDashboardId}'
SQL;

        $result = $db->query($drillDownReportSql);
        while ($row = $db->fetchByAssoc($result)) {
            $wDrillDownTemplateFilters = html_entity_decode($row['filters']);
        }

        return $wDrillDownTemplateFilters;
    }

    /**
     *
     * @param string $wDrillDashboardTemplateId
     * @param string $wDrillDashboardId
     * @param string $wDrillDownTemplatesDef
     * @return void
     */
    public static function insertwDrillCopyTemplates(string $wDrillDashboardTemplateId, string $wDrillDashboardId, string $wDrillDownTemplatesDef): void
    {
        global $timedate, $db;

        $curentDate = $timedate->getInstance()->nowDb();

        $insertNewRowOnFiltersTemplates = <<<SQL
INSERT INTO wdrilldown_report_filters_templates
    (id, dashboard_id, templates, date_generated)
VALUES
    ('{$wDrillDashboardTemplateId}', '{$wDrillDashboardId}', '{$wDrillDownTemplatesDef}', '{$curentDate}')
SQL;

        $db->query($insertNewRowOnFiltersTemplates);
    }

    /**
     *
     * @param string $wDrillDashboardTemplateFilterId
     * @param string $wDrillDashboardId
     * @param string $destinationUserId
     * @param string $wDrillDownFiltersTemplateDef
     * @return void
     */
    public static function insertwDrillCopyTemplateFilters(string $wDrillDashboardTemplateFilterId, string $wDrillDashboardId, string $destinationUserId, string $wDrillDownFiltersTemplateDef): void
    {
        global $timedate, $db;

        $curentDate = $timedate->getInstance()->nowDb();

        $insertNewRowOnFiltersDashboards = <<<SQL
INSERT INTO wdrilldown_report_filters_dashboards
    (id, dashboard_id, user_id, filters, date_generated)
VALUES
    ('{$wDrillDashboardTemplateFilterId}', '{$wDrillDashboardId}','{$destinationUserId}', '{$wDrillDownFiltersTemplateDef}', '{$curentDate}')
SQL;

        $db->query($insertNewRowOnFiltersDashboards);
    }

    /**
     *
     * @return string
     */
    public static function checkDrillDownVersion(): string
    {
        global $db;

        $getVersionResult = "";

        $query = <<<SQL
SELECT
    version as wDrillDownVersion
FROM
    upgrade_history
WHERE
    name = "wDrillDownReportsCharts"
    AND
    status = "installed"
SQL;

        $result = $db->query($query);
        $row    = $db->fetchByAssoc($result);
        if ($row["wDrillDownVersion"]) {
            $getVersionResult = $row["wDrillDownVersion"];
            return $getVersionResult;
        }

        return $getVersionResult;
    }
}
