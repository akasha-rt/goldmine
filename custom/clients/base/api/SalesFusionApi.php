<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/api/SugarApi.php');
/**
 * SalesFusion Connector API
 * This class is used to retrieve the org name from the connector settings for use in the view controller.
 * Additionally API functionality will be implemented in the future
 *
 * @author dlively @ Plus Consulting
 * @date 2014-01-28
 *
 * @author rnewsham @ epicom
 * @date 2014-12-22
 */

class SalesFusionApi extends SugarApi
{

    public function registerApiRest()
    {
        return array(
            'salesfusion' => array(
                'reqType' => 'GET',
                'path' => array('connector','salesfusion',),
                'pathVars' => array('',''),
                'method' => 'getOrgName',
                'shortHelp' => 'Retrieve SalesFusion Connector Org Name',
                'longHelp' => 'custom/include/api/help/salesfusion_help.html',
            ),
            'salesfusion_dashlet_leadsandcontacts' => array(
                'reqType' => 'GET',
                'path' => array('SalesFusion','leadsandcontacts',),
                'pathVars' => array('',''),
                'method' => 'getLeadAndContactList',
                'shortHelp' => 'Retrieve SalesFusion Lead and Contact list',
                'longHelp' => 'custom/include/api/help/salesfusion_dashlet_leadandcontact_help.html',
            ),
            'prospect_lists_prospects' => array(
                'reqType' => 'GET',
                'path' => array('prospect_lists_prospects'),
                'pathVars' => array('', ''),
                'method' => 'ProspectListsProspects',
                'shortHelp' => 'Gets prospect_list_prospects (from a given date)',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Retrieve connectors registered org name. Cache this client side
     *
     * @param $api
     * @param $args
     * @return array
     * @throws SugarApiExceptionRequestMethodFailure
     */
    public function getOrgName($api, $args)
    {
        $sourceConnector = SourceFactory::getSource('ext_rest_salesfusion');

        if (! isset($sourceConnector->orgName)) {
            throw new SugarApiExceptionRequestMethodFailure('No connector settings found, check your connector configs');
        }

        if ($iframeUrl = @$sourceConnector->iframeUrl) {
            $iframeUrl = str_replace("{orgId}", $sourceConnector->orgName, $iframeUrl);
            $iframeUrl = str_replace("{crmName}", 'SugarCRM' . $GLOBALS['sugar_version'], $iframeUrl);
            $iframeUrl = str_replace("{userId}", $GLOBALS['current_user']->id, $iframeUrl);
            $iframeUrl = str_replace("&amp;", '&', $iframeUrl);
        }

        return array(
            'orgName' => $sourceConnector->orgName,
            'iframeUrl' => $iframeUrl,
        );

    }


    /**
     * Retrieve list of Leads and Contacts
     *
     * Default to first 20 records.  You can pass in an offset for pagination.
     *
     * These are allowable args:
     *     order_by  - the field to order by (default none)
     *     order_dir - order direction ASC or DESC  (default ASC)
     *     limit     - limit for the query (default 20)
     *     offset    - offset for the query (default 0)
     *
     * @param $api
     * @param $args
     * @return array
     */
    public function getLeadAndContactList($api, $args)
    {
        // get all Leads and Contacts accessible to current_user, along with relevant activity
        global $current_user;
        global $db;
        global $sugar_flavor;
        global $timedate;

        // whitelist of fields for the order_by arg
        $whilelist_fields = array(
            'first_name',
            'last_name',
            'date',
            'status',
            'type',
        );

        $leads_team_where = "";
        $contacts_team_where = "";

        if (!is_admin($current_user)) {
            if ($sugar_flavor == 'CE') {
                // CE has no teams, just check assigned user
                $leads_team_where = "AND l.assigned_user_id = '{$current_user->id}'";
                $contacts_team_where = "AND c.assigned_user_id = '{$current_user->id}'";
            }
            else {
                $leads_team_where = " AND (l.assigned_user_id = '{$current_user->id}'
                    OR l.team_set_id IN (select tst.team_set_id from team_sets_teams tst
                        INNER JOIN team_memberships ON tst.team_id = team_memberships.team_id
                        AND team_memberships.user_id = '{$current_user->id}'
                        AND team_memberships.deleted = 0) ) ";
                $contacts_team_where = " AND (c.assigned_user_id = '{$current_user->id}'
                    OR c.team_set_id IN (select tst.team_set_id from team_sets_teams tst
                        INNER JOIN team_memberships ON tst.team_id = team_memberships.team_id
                        AND team_memberships.user_id = '{$current_user->id}'
                        AND team_memberships.deleted = 0) ) ";
            }

        }

        //// leads
        $leads_webactivity_query = "SELECT
                l.id,
                l.first_name,
                l.last_name,
                'Leads' as 'module_name',
                detail.max_date AS 'date',
                'Web Activity' AS 'type',
                detail.path AS 'status',
                detail.link
            FROM leads l
                INNER JOIN sf_webactivity_leads_c wl ON (wl.deleted = 0 AND sf_webactivity_leadsleads_ida = l.id)
                INNER JOIN sf_webactivity w ON (w.deleted = 0 AND sf_webactivity_leadssf_webactivity_idb = w.id)
                INNER JOIN sf_webactivitydetail_sf_webactivity_c wrel ON (wrel.deleted = 0 AND sf_webactivitydetail_sf_webactivitysf_webactivity_ida = w.id)
                INNER JOIN (
                    SELECT id, 'path', concat(protocol, '://', hostname, path, parameters) as link, max(date_modified) as max_date
                    FROM sf_webactivitydetail
                    GROUP BY websessionid
                ) detail ON (sf_webactivitydetail_sf_webactivitysf_webactivitydetail_idb = detail.id)
            WHERE l.deleted = 0
                AND l.assigned_user_id = '{$current_user->id}'
        ";

        $leads_dialog_query = "SELECT
                l.id,
                l.first_name,
                l.last_name,
                'Leads' as 'module_name',
                d.date_entered AS 'date',
                'Landing Page' AS 'type',
                'Completed' AS 'status',
                '' as 'link'
            FROM leads l
                INNER JOIN sf_dialogs_leads_c dl ON (dl.deleted = 0 AND sf_dialogs_leadsleads_ida = l.id)
                INNER JOIN sf_dialogs d ON (d.deleted = 0 AND sf_dialogs_leadssf_dialogs_idb = d.id)
            WHERE l.deleted = 0
                AND l.assigned_user_id = '{$current_user->id}'
        ";

        $leads_eventmanagement_query = "SELECT
                l.id,
                l.first_name,
                l.last_name,
                'Leads' as 'module_name',
                e.date_modified AS 'date',
                'Event' AS 'type',
                IF(e.attended > 0, 'Attended', IF(e.registered, 'Registered', 'Not Registered')) AS 'status',
                '' as 'link'
            FROM leads l
                INNER JOIN sf_eventmanagement_leads_c el ON (el.deleted = 0 AND sf_eventmanagement_leadsleads_ida = l.id)
                INNER JOIN sf_eventmanagement e ON (e.deleted = 0 AND sf_eventmanagement_leadssf_eventmanagement_idb = e.id)
            WHERE l.deleted = 0
                AND l.assigned_user_id = '{$current_user->id}'
        ";

        $leads_emails_query = "SELECT
                l.id,
                l.first_name,
                l.last_name,
                'Leads' as 'module_name',
                e.date_modified AS 'date',
                'Email' AS 'type',
                e.status,
                '' as 'link'
            FROM leads l
                INNER JOIN emails_beans eb ON (eb.deleted = 0 AND eb.bean_id = l.id AND eb.bean_module = 'Leads')
                INNER JOIN emails e ON (e.deleted = 0 AND eb.email_id = e.id)
                INNER JOIN emails_cstm ec ON (ec.id_c = e.id AND salesfusionemail_c = 1)
            WHERE l.deleted = 0
                AND l.assigned_user_id = '{$current_user->id}'
        ";

        //// contacts
        $contacts_webactivity_query = "SELECT
                c.id,
                c.first_name,
                c.last_name,
                'Contacts' as 'module_name',
                detail.max_date AS 'date',
                'Web Activity' AS 'type',
                detail.path AS 'status',
                detail.link
            FROM contacts c
                INNER JOIN sf_webactivity_contacts_c wl ON (wl.deleted = 0 AND sf_webactivity_contactscontacts_ida = c.id)
                INNER JOIN sf_webactivity w ON (w.deleted = 0 AND sf_webactivity_contactssf_webactivity_idb = w.id)
                INNER JOIN sf_webactivitydetail_sf_webactivity_c wrel ON (wrel.deleted = 0 AND sf_webactivitydetail_sf_webactivitysf_webactivity_ida = w.id)
                INNER JOIN (
                    SELECT id, 'path', concat(protocol, '://', hostname, path, parameters) as link, max(date_modified) as max_date
                    FROM sf_webactivitydetail
                    GROUP BY websessionid
                ) detail ON (sf_webactivitydetail_sf_webactivitysf_webactivitydetail_idb = detail.id)
            WHERE c.deleted = 0
                AND c.assigned_user_id = '{$current_user->id}'
        ";

        $contacts_dialog_query = "SELECT
                c.id,
                c.first_name,
                c.last_name,
                'Contacts' as 'module_name',
                d.date_entered AS 'date',
                'Landing Page' AS 'type',
                'Completed' AS 'status',
                '' as 'link'
            FROM contacts c
                INNER JOIN sf_dialogs_contacts_c dl ON (dl.deleted = 0 AND sf_dialogs_contactscontacts_ida = c.id)
                INNER JOIN sf_dialogs d ON (d.deleted = 0 AND sf_dialogs_contactssf_dialogs_idb = d.id)
            WHERE c.deleted = 0
                AND c.assigned_user_id = '{$current_user->id}'
        ";

        $contacts_eventmanagement_query = "SELECT
                c.id,
                c.first_name,
                c.last_name,
                'Contacts' as 'module_name',
                e.date_modified AS 'date',
                'Event' AS 'type',
                IF(e.attended > 0, 'Attended', IF(e.registered, 'Registered', 'Not Registered')) AS 'status',
                '' as 'link'
            FROM contacts c
                INNER JOIN sf_eventmanagement_contacts_c el ON (el.deleted = 0 AND sf_eventmanagement_contactscontacts_ida = c.id)
                INNER JOIN sf_eventmanagement e ON (e.deleted = 0 AND sf_eventmanagement_contactssf_eventmanagement_idb = e.id)
            WHERE c.deleted = 0
                AND c.assigned_user_id = '{$current_user->id}'
        ";

        $contacts_emails_query = "SELECT
                c.id,
                c.first_name,
                c.last_name,
                'Contacts' as 'module_name',
                e.date_modified AS 'date',
                'Email' AS 'type',
                e.status,
                '' as 'link'
            FROM contacts c
                INNER JOIN emails_beans eb ON (eb.deleted = 0 AND eb.bean_id = c.id AND eb.bean_module = 'Contacts')
                INNER JOIN emails e ON (e.deleted = 0 AND eb.email_id = e.id)
                INNER JOIN emails_cstm ec ON (ec.id_c = e.id AND salesfusionemail_c = 1)
            WHERE c.deleted = 0
                AND c.assigned_user_id = '{$current_user->id}'
        ";


        if (@$args['activity_filter'] == 'Leads') {
            $query = "($leads_webactivity_query)
                UNION ($leads_dialog_query)
                UNION ($leads_eventmanagement_query)
                UNION ($leads_emails_query)
            ";
        }
        elseif (@$args['activity_filter'] == 'Contacts') {
            $query = "($contacts_webactivity_query)
                UNION ($contacts_dialog_query)
                UNION ($contacts_eventmanagement_query)
                UNION ($contacts_emails_query)
            ";
        }
        else {
            $query = "($leads_webactivity_query)
                UNION ($leads_dialog_query)
                UNION ($leads_eventmanagement_query)
                UNION ($leads_emails_query)

                UNION ($contacts_webactivity_query)
                UNION ($contacts_dialog_query)
                UNION ($contacts_eventmanagement_query)
                UNION ($contacts_emails_query)
            ";
        }

        // filter by type, if specified
        switch (@$args['type_filter']) {
            case "Emails":
                $query = "SELECT * FROM ( " . $query .  " ) as U WHERE U.type='Email' ";
                break;
            case "Events":
                $query = "SELECT * FROM ( " . $query .  " ) as U WHERE U.type='Event' ";
                break;
            case "WebActivity":
                $query = "SELECT * FROM ( " . $query .  " ) as U WHERE U.type='Web Activity' ";
                break;
            case "LandingPages":
                $query = "SELECT * FROM ( " . $query .  " ) as U WHERE U.type='Landing Page' ";
                break;
        }

        // allow ORDER BY for whitelisted fields
        if (@$args['order_by'] && in_array(strtolower($args['order_by']), $whilelist_fields)) {
            $query .= "ORDER BY " . strtolower($args['order_by']);
        }
        else {
            $query .= "ORDER BY date DESC";
        }

        // allow ORDER direction 'ASC' or 'DESC'
        if (@$args['order_by'] && @$args['order_dir'] && (strtoupper($args['order_dir']) == 'ASC' || strtoupper($args['order_dir']) == 'DESC')) {
            $query .= " " . strtoupper($args['order_dir']);
        }


        // set offset and limit
        $offset = 0;
        $limit = 20;
        if (@$args['limit']) {
            $limit = intval($args['limit']);
        }
        if (@$args['offset']) {
            $offset = intval($args['offset']);
            $limit += 1;
            $query .= " LIMIT $offset, $limit ";
        }
        else {
            $limit += 1;
            $query .= " LIMIT $limit ";
        }

        $res = $db->query($query);
        if (!$res) {
            return array(
                'error' => "Did not return results from query: (" . $db->lastDbError() . ') ' . $db->lastDbError(),
                'count' => -1,
                'querytime' => $db->getQueryTime(),
                'args' => $args,
                'records' => array(),
                'query' => $query,
            );
        }

        $i = 0;
        $limit -= 1;
        $rows = array();

        while ($row = $db->fetchByAssoc($res)) {
            $i++;

            // add user formatted date
            $row['user_date'] = $timedate->to_display_date_time($row['date'], true, true, $current_user);

            $rows[] = $row;

            if ($i >= $limit) {
                break;
            }
        }
        $count = count($rows);

        // set next_offset to -1 if we're out of rows
        $next_offset = ($count < $limit) ? -1 : $offset + $count;

        $ret = array(
            'next_offset' => $next_offset,
            'count' => $count,
            'querytime' => $db->getQueryTime(),
            'args' => $args,
            'records' => $rows,
            'query' => $query,
        );

        return $ret;

    }
    /**
     * Get ProspectListsProspects, with optional filters and criteria
     *
     * @param Object $api  the standard api object
     * @param Array  $args arguments passed into this API call from REST
     *
     * all args (GET params) are optional
     *
     * i.e. {url}rest/v10/prospect_lists_prospects?
     *     filter[0][date_modified][$gte]=2014/12/03 11:49:33
     *     filter[0][prospect_list_id]={GUID}
     *     filter[0][related_type][$in]=Contacts,Leads,Prospects
     *     offset=30
     *     limit=25
     *     deleted=true
     *
     * @return Array output
     */
    function ProspectListsProspects($api, $args)
    {
        global $db;

        // set defaults
        $WHERE_DELETED = " AND p.deleted = 0 ";
        $WHERE_DATE = '';
        $WHERE_PROSPECT = '';
        $WHERE_RELATEDTYPE = '';
        $LIMIT = '';
        $OFFSET = '';

        // alter WHERE clauses based on args
        if (strtolower(@$args['deleted']) === 'true' || @$args['deleted'] === 1) {
            $WHERE_DELETED = "";
        }

        if (@$args['filter'][0]['date_modified']['$gte']) {
            $WHERE_DATE = " AND p.date_modified >= '" . $db->quote($args['filter'][0]['date_modified']['$gte']) . "'";
        }

        if (@$args['filter'][0]['prospect_list_id']) {
            $WHERE_PROSPECT = " AND p.prospect_list_id = '" . $db->quote($args['filter'][0]['prospect_list_id']) . "'";
        }

        if (@$args['filter'][0]['related_type']['$in']) {
            $tmparr = explode(',', $args['filter'][0]['related_type']['$in']);

            if (count($tmparr)) {
                $elements = array();

                foreach($tmparr as $val) {
                    array_push($elements, "'" . $db->quote(trim($val)) . "'");
                }
                $relatedVals = implode(',', $elements);

                $WHERE_RELATEDTYPE = " AND p.related_type in (" . $relatedVals . ")";
            }
        }

        // alter LIMIT clause based on args
        if (intval(@$args['offset']) > 0) {
            $OFFSET = intval($args['offset']);
        }
        if (intval(@$args['limit']) > 0) {
            $LIMIT = intval($args['limit']);
        }

        if ($LIMIT && $OFFSET) {
            $LIMIT = " LIMIT $OFFSET, $LIMIT";
        }
        elseif ($LIMIT) {
            $LIMIT = " LIMIT $LIMIT";
        }

        $query = "SELECT p.*, ea.email_address
            FROM prospect_lists_prospects p
                INNER JOIN email_addr_bean_rel eabr ON (eabr.bean_id = p.related_id AND eabr.primary_address = 1 AND eabr.deleted = 0)
                INNER JOIN email_addresses ea ON (ea.id = eabr.email_address_id  AND ea.deleted = 0)
            WHERE 1
                $WHERE_DELETED
                $WHERE_DATE
                $WHERE_PROSPECT
                $WHERE_RELATEDTYPE
            $LIMIT
        ";

        $res = $db->query($query);
        $output = array(
            'count' => $db->getRowCount($res),
            'results' => array(),
        );

        while ($row = $db->fetchByAssoc($res)) {
            $output['results'][$row['id']] = $row;
        }

        return $output;
    }

}
