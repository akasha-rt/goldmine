<?php

array_push($job_strings, 'pruneSugarBPMHistory');
function pruneSugarBPMHistory() {
    $GLOBALS['log']->info('----->Scheduler fired job of type pruneSugarBPMHistory()');

    $pm_db = DBManagerFactory::getInstance();

//configuration of timespan of history to save and max processes to handle with each scheduler run.
    $pm_treshholdLimit = 1000;
    $treshholdTimeSpan = 30;

//status variables
    $pm_closedStatus = "CLOSED";
    $pm_terminatedStatus = "TERMINATED";
    $pm_completedStatus = "COMPLETED";
    $pm_cancelledStatus = "CANCELLED";
    $pm_errorStatus = "ERROR";

//table variables
    $pm_bpmFlow = "pmse_bpm_flow";
    $pm_bpmThread = "pmse_bpm_thread";
    $pm_bpmInbox = "pmse_inbox";
    $pm_EvnDef = "pmse_bpm_event_definition";

//field variables
    $pm_bpmCasID = "cas_id";
    $pm_bpmCasIndex = "cas_index";
    $pm_bpmCasStatus = "cas_status";
    $pm_bpmCasBpmnID = "bpmn_id";
    $pm_evnParams = "evn_params";

//confirm the tables exist
    if($pm_db->tableExists($pm_bpmFlow) && $pm_db->tableExists($pm_bpmThread) && $pm_db->tableExists($pm_bpmInbox)) {

//collect the processes to delete
        $pm_inboxDeletables = $pm_db->query('SELECT '.$pm_bpmCasID.' FROM '.$pm_bpmInbox.' WHERE '.$pm_bpmCasStatus.' IN ("'.$pm_completedStatus.'","'.$pm_cancelledStatus.'","'.$pm_errorStatus.'","'.$pm_terminatedStatus.'") AND date_modified < DATE_SUB(NOW(), INTERVAL '.$treshholdTimeSpan.' DAY) ORDER BY '.$pm_bpmCasID.' ASC LIMIT '.$pm_treshholdLimit);

//delete each process history
        while($pm_deletableProcesses = $pm_db->fetchByAssoc($pm_inboxDeletables)) {
            $pm_delProc = $pm_deletableProcesses[$pm_bpmCasID];

//identify pmse_bpmn_event_definition IDs related to Start Events
            $pm_bpmnId = $pm_db->query('SELECT '.$pm_bpmCasBpmnID.' FROM '.$pm_bpmFlow.' WHERE '.$pm_bpmCasID.' = '.$pm_delProc.' AND '.$pm_bpmCasIndex.' = 1');
            while($pm_a = $pm_db->fetchByAssoc($pm_bpmnId)) {
                $pm_b = $pm_a[$pm_bpmCasBpmnID];
                $pm_eP = $pm_db->query('SELECT '.$pm_evnParams.' FROM '.$pm_EvnDef.' WHERE id = "'.$pm_b.'"');
                while($pm_c = $pm_db->fetchByAssoc($pm_eP)) {
                $pm_d = $pm_c[$pm_evnParams];

//delete the Start Event row from pmse_bpm_flow unless it applies to first updates only
                if($pm_d != "updated") {
                    $pm_db->query('DELETE FROM '.$pm_bpmFlow.' WHERE '.$pm_bpmCasID.' = '.$pm_delProc);
                }
                }
            }

//delete all other rows from the three history tables related to each process
            $pm_db->query('DELETE FROM '.$pm_bpmFlow.' WHERE '.$pm_bpmCasID.' = '.$pm_delProc.' AND '.$pm_bpmCasIndex.' != 1');
            $pm_db->query('DELETE FROM '.$pm_bpmThread.' WHERE '.$pm_bpmCasID.' = '.$pm_delProc);
            $pm_db->query('DELETE FROM '.$pm_bpmInbox.' WHERE '.$pm_bpmCasID.' = '.$pm_delProc);
        }
        return true;
    }
    $GLOBALS['log']->fatal('Tables necessary to run the Prune SugarBPM History scheduler were not found.');
    return false;
}