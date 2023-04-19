<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/E38_DeDupitSchedulers.php


/**
 * @author 38 Elements DOO
 *
 * 38 Elements DOO ("COMPANY") CONFIDENTIAL
 *
 * Copyright (c) 2020 38 Elements DOO, Belgrade, Serbia - All Rights Reserved
 *
 * NOTICE:  All information contained herein is, and remains the property
 * of COMPANY. The intellectual and technical concepts contained herein are
 * proprietary to COMPANY and may be covered by Serbia and Foreign Patents,
 * patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material is strictly
 * forbidden unless prior written permission is obtained from COMPANY.
 * Access to the source code contained herein is hereby forbidden to anyone except
 * current COMPANY employees, managers or contractors who have executed
 * Confidentiality and Non-disclosure agreements explicitly covering such access.
 *
 * The copyright notice above does not evidence any actual or intended publication
 * or disclosure  of  this source code, which includes information that is
 * confidential and/or proprietary, and is a trade secret, of  COMPANY.
 * ANY REPRODUCTION, MODIFICATION, DISTRIBUTION, PUBLIC  PERFORMANCE,OR PUBLIC
 * DISPLAY OF OR THROUGH USE  OF THIS  SOURCE CODE  WITHOUT  THE EXPRESS WRITTEN
 * CONSENT OF COMPANY IS STRICTLY PROHIBITED, AND IN VIOLATION OF APPLICABLE LAWS
 * AND INTERNATIONAL TREATIES. THE RECEIPT OR POSSESSION OF  THIS SOURCE CODE
 * AND/OR RELATED INFORMATION DOES NOT CONVEY OR IMPLY ANY RIGHTS TO REPRODUCE,
 * DISCLOSE OR DISTRIBUTE ITS CONTENTS, OR TO MANUFACTURE, USE, OR SELL ANYTHING
 * THAT IT  MAY DESCRIBE, IN WHOLE OR IN PART.
 *
 * Please contact 38 Elements DOO for further details at office@38elements.com
 */
 
  require_once "\155\x6f\144\x75\x6c\x65\x73\x2f\123\x63\150\145\x64\165\x6c\145\162\163\112\157\x62\x73\57\123\x63\150\145\x64\x75\154\x65\162\163\x4a\x6f\142\x2e\x70\x68\x70"; require_once "\x6d\x6f\144\x75\x6c\x65\163\x2f\105\x33\70\137\104\165\x70\x6c\151\143\141\x74\x65\x46\151\x6e\x64\x65\162\x50\x72\x6f\143\x65\x73\163\x2f\104\145\104\x75\x70\x69\164\127\157\162\153\145\162\56\160\150\160"; require_once "\x6d\157\x64\165\x6c\145\x73\x2f\105\x33\70\x5f\x44\x75\160\154\151\x63\x61\164\x65\x46\151\156\144\145\x72\x50\x72\x6f\143\x65\x73\163\57\x63\154\x69\x65\156\x74\163\x2f\x62\141\x73\x65\x2f\141\x70\151\x2f\105\x33\x38\x5f\104\x65\104\165\x70\x69\x74\114\151\x63\145\156\163\145\56\160\x68\160"; $job_strings[] = "\145\x33\x38\x5f\x44\165\160\154\151\x63\141\x74\145\103\150\x65\143\153"; $job_strings[] = "\x65\x33\70\x5f\101\x75\164\157\x4d\145\162\x67\x65\104\x75\x70\x6c\151\143\x61\164\145\163"; $job_strings[] = "\145\63\70\137\x52\x75\x6e\156\151\156\x67\x4a\157\x62\163\x49\156\163\160\145\143\x74\x69\157\156"; function e38_DuplicateCheck($job) { $check_license = E38_DeDupitLicense::checkLicense(); if ($check_license["\x73\x75\x63\143\x65\x73\x73"]) { goto eLlcU; } $job->resolveJob("\x66\141\x69\x6c\165\162\145", "\x45\x33\x38\72\x20\154\151\x63\x65\x6e\x73\145\40\145\x78\160\151\x72\145\x64\56"); return false; eLlcU: $time_constraint = 300; $start_time = microtime(true); $active_processes = e38_getActiveProcesses(false); if (!empty($active_processes)) { goto S7GFI; } return true; S7GFI: foreach ($active_processes as $process_data) { if (!(microtime(true) - $start_time > $time_constraint)) { goto AOlFW; } return true; AOlFW: $records_ids = e38_getRecordsIDs($process_data["\x66\x6f\162\x5f\x6d\x6f\x64\x75\154\145"], $process_data); if (!empty($records_ids)) { goto JvGjT; } goto Gs9vs; JvGjT: foreach ($records_ids as $bean_id) { $bean = BeanFactory::getBean($process_data["\x66\x6f\162\137\x6d\157\x64\165\154\x65"], $bean_id, array("\x64\x69\x73\141\x62\154\145\137\x72\157\x77\x5f\x6c\x65\166\x65\154\137\x73\145\143\165\x72\151\x74\x79" => true)); if (!empty($bean->id)) { goto W9AMT; } goto fXIax; W9AMT: DeDupitWorker::findDuplicates($process_data, $bean); fXIax: } IyT0a: return true; Gs9vs: } GaWiQ: return true; } function e38_AutoMergeDuplicates($job) { $check_license = E38_DeDupitLicense::checkLicense(); if ($check_license["\x73\x75\143\x63\145\163\163"]) { goto CELuX; } $job->resolveJob("\x66\141\151\x6c\x75\x72\x65", "\105\x33\x38\72\x20\154\x69\x63\145\x6e\x73\x65\x20\x65\x78\x70\151\x72\x65\144\x2e"); return false; CELuX: $time_constraint = 300; $start_time = microtime(true); $active_processes = e38_getActiveProcesses(true); if (!empty($active_processes)) { goto Al66d; } return true; Al66d: foreach ($active_processes as $process_data) { if (!(microtime(true) - $start_time > $time_constraint)) { goto eGxtL; } return true; eGxtL: $duplicate_pairs_data = e38_getDuplicatePairData($process_data); if (!empty($duplicate_pairs_data)) { goto SYUZf; } goto lY2op; SYUZf: foreach ($duplicate_pairs_data as $duplicate_pair_data) { $bean1 = BeanFactory::getBean($process_data["\146\157\162\x5f\x6d\157\144\x75\154\x65"], $duplicate_pair_data["\x64\x75\x70\x6c\x69\143\x61\x74\145\137\162\145\x63\x6f\162\x64\x5f\151\144\x5f\x31"], array("\144\151\163\x61\142\x6c\145\137\x72\157\x77\x5f\x6c\x65\166\x65\154\137\163\145\143\x75\162\x69\x74\171" => true)); $bean2 = BeanFactory::getBean($process_data["\x66\157\x72\x5f\x6d\157\x64\165\x6c\145"], $duplicate_pair_data["\x64\x75\x70\154\151\143\x61\x74\145\x5f\162\145\x63\x6f\162\144\137\x69\x64\x5f\62"], array("\x64\151\163\x61\142\x6c\x65\x5f\x72\157\167\x5f\154\x65\x76\x65\x6c\x5f\163\x65\143\x75\x72\x69\164\x79" => true)); if (!(empty($bean1->id) || empty($bean2->id))) { goto nEtgB; } DeDupitWorker::deleteDuplicatePair($duplicate_pair_data["\151\144"]); goto L1NXe; nEtgB: $beans = e38_determineWhoIsPrimary($process_data, $bean1, $bean2); try { DeDupitWorker::autoMergeDuplicates($beans["\157\162\x69\x67\151\x6e\x61\x6c"], $beans["\144\x75\160\154\151\x63\x61\164\145"], $duplicate_pair_data["\151\x64"]); } catch (Exception $exception) { $GLOBALS["\x6c\x6f\x67"]->fatal("\105\x33\70\x20\141\x75\x74\x6f\115\145\x72\147\x65\104\x75\160\x6c\x69\x63\141\x74\x65\x73\x3a\40" . print_r($duplicate_pair_data, true)); $GLOBALS["\154\x6f\x67"]->fatal($exception->getMessage()); DeDupitWorker::deleteDuplicatePair($duplicate_pair_data["\x69\144"]); } L1NXe: } C_Q0g: return true; lY2op: } qNtNQ: return true; } function e38_RunningJobsInspection($job) { $check_license = E38_DeDupitLicense::checkLicense(); if ($check_license["\163\165\x63\143\x65\x73\x73"]) { goto GC1s3; } $job->resolveJob("\146\141\151\154\165\162\145", "\105\x33\70\72\40\154\151\143\145\x6e\x73\x65\x20\x65\x78\160\x69\x72\x65\x64\x2e"); return false; GC1s3: global $timedate, $system_user; $system_user = BeanFactory::newBean("\x55\x73\145\162\x73"); $system_user->getSystemUser(); $time_constraint = new DateInterval("\x50\x54\67\x4d"); $allowed_start_time = $timedate->getNow()->sub($time_constraint)->asDb(); $sugarQuery = new SugarQuery(); $sugarQuery->from(BeanFactory::newBean("\123\143\x68\x65\x64\165\x6c\145\162\x73\112\x6f\142\x73")); $sugarQuery->select(array("\151\x64")); $sugarQuery->where()->equals("\163\x74\x61\164\x75\x73", "\162\x75\156\156\151\156\x67"); $sugarQuery->where()->lt("\145\x78\145\143\165\164\145\x5f\164\x69\x6d\x65", $allowed_start_time); $sugarQuery->where()->queryOr()->equals("\164\141\162\147\145\164", "\146\x75\x6e\143\164\x69\157\156\72\x3a\x65\x33\70\x5f\104\x75\x70\x6c\151\x63\x61\164\145\103\150\145\143\153")->equals("\x74\141\x72\147\145\164", "\x66\x75\156\x63\x74\x69\157\x6e\x3a\72\145\63\70\x5f\x41\165\x74\157\x4d\145\x72\147\x65\104\x75\x70\x6c\151\x63\x61\164\145\163"); $long_running_jobs = $sugarQuery->execute(); foreach ($long_running_jobs as $job_data) { $job_bean = BeanFactory::getBean("\123\143\150\145\x64\x75\154\x65\162\x73\x4a\x6f\x62\163", $job_data["\151\144"]); $job_bean->resolveJob("\x66\x61\151\x6c\165\162\x65", "\105\x33\x38\x3a\x20\x6a\x6f\142\40\162\x75\156\156\151\x6e\147\x20\164\x6f\157\x20\154\x6f\156\147\56"); wg1yH: } LAnOF: return true; } function e38_getActiveProcesses($auto_merge_enabled = false) { $query = new SugarQuery(); $query->select(array("\151\144", "\146\157\162\137\155\x6f\144\165\154\x65", "\x61\165\x74\x6f\155\x65\162\x67\x65\x5f\x63\157\156\x66\x69\147\165\x72\x61\x74\x69\x6f\156", "\162\165\154\145\163\x5f\x63\x6f\x6e\x66\151\x67\165\162\x61\164\151\x6f\x6e", "\144\x65\x74\145\143\x74\x69\157\x6e\163\137\x70\145\x72\137\162\x75\x6e", "\155\145\162\x67\x65\163\x5f\160\x65\x72\x5f\162\x75\x6e")); $query->from(BeanFactory::getBean("\x45\x33\x38\137\x44\x75\x70\154\151\143\x61\164\x65\x46\151\156\x64\x65\162\120\x72\157\143\145\x73\163"), array("\x74\x65\141\x6d\x5f\x73\x65\143\x75\x72\x69\x74\171" => false)); if (!$auto_merge_enabled) { goto ZtCTW; } $query->where()->equals("\x61\x75\x74\x6f\x6d\x65\162\147\x65", "\171\145\163"); $query->where()->notContains("\x72\165\154\145\x73\x5f\x63\x6f\x6e\x66\x69\147\165\162\x61\164\x69\157\x6e", "\x24\x66\x75\172\172\171\137\x6d\x61\x74\143\150"); ZtCTW: $query->where()->equals("\141\x63\164\x69\x76\145", "\x79\x65\x73"); $query->orderBy("\x64\x61\x74\x65\137\x65\x6e\x74\x65\162\145\144", "\101\x53\103"); return $query->execute(); } function e38_getRecordsIDs($module_name, $process_data) { $bean = BeanFactory::getBean($module_name); $table_name = $bean->table_name; if (!empty($table_name)) { goto dVACA; } return array(); dVACA: $limit = $process_data["\144\145\x74\x65\143\x74\x69\x6f\156\163\x5f\x70\x65\162\137\x72\x75\x6e"] ? $process_data["\x64\145\164\145\x63\x74\x69\x6f\156\163\x5f\x70\145\162\137\162\165\x6e"] : 100; $result = $GLOBALS["\x64\142"]->query("\12\x20\40\x20\x20\x20\x20\40\40\x20\40\123\x45\114\105\103\x54\x20{$table_name}\56\151\x64\12\x20\40\x20\40\x20\x20\40\40\40\x20\x46\122\117\x4d\x20{$table_name}\x20\xa\40\40\40\40\x20\x20\x20\x20\x20\40\40\40\114\105\106\x54\x20\112\117\111\x4e\x20\x65\x33\x38\x5f\144\x75\x70\154\151\143\x61\x74\145\143\x68\x65\143\153\40\117\116\40{$table_name}\x2e\x69\x64\x20\x3d\x20\x65\63\70\x5f\144\165\x70\154\151\x63\141\x74\x65\x63\150\x65\143\153\56\x72\x65\143\x6f\x72\x64\x5f\151\x64\x20\12\x20\x20\x20\x20\40\40\x20\40\x20\40\40\40\40\x20\40\x20\101\116\x44\x20\145\63\70\x5f\144\165\160\154\151\x63\x61\164\145\x63\150\145\143\x6b\56\144\x75\160\x6c\151\143\141\x74\145\137\146\x69\x6e\x64\x65\162\x5f\x70\x72\157\143\x65\x73\163\137\x69\x64\40\75\x20\x27{$process_data["\x69\144"]}\x27\x20\12\x20\40\x20\x20\40\40\40\x20\40\40\x20\40\x20\40\x20\x20\x41\x4e\x44\x20\x65\63\x38\x5f\x64\x75\160\154\x69\143\x61\x74\145\143\x68\145\x63\153\x2e\144\145\x6c\x65\164\x65\x64\40\75\40\x30\xa\x20\x20\x20\x20\40\40\x20\40\x20\40\127\110\x45\122\105\x20\145\63\x38\x5f\x64\x75\160\154\151\143\x61\x74\145\x63\x68\x65\x63\x6b\56\x69\x64\40\x49\x53\x20\x4e\x55\114\114\40\x41\x4e\x44\x20{$table_name}\56\144\145\x6c\x65\x74\145\144\40\75\x20\60\xa\x20\x20\40\x20\x20\40\40\40\40\x20\117\x52\104\x45\x52\x20\x42\131\40{$table_name}\x2e\x64\141\164\x65\137\x65\156\164\145\162\x65\x64\40\101\123\x43\12\40\40\x20\40\40\40\x20\x20\x20\x20\x4c\111\115\111\124\x20{$limit}\73\xa\x20\40\40\x20"); $beans_ids_array = array(); m3EUY: if (!($bean_data = $GLOBALS["\144\x62"]->fetchByAssoc($result))) { goto muzkB; } $beans_ids_array[] = $bean_data["\x69\x64"]; goto m3EUY; muzkB: return $beans_ids_array; } function e38_determineWhoIsPrimary($process_data, $bean1, $bean2) { $automerge_configuration = json_decode(html_entity_decode($process_data["\141\x75\164\x6f\155\145\x72\147\145\137\x63\157\x6e\x66\x69\147\165\x72\141\164\x69\157\x6e"]), true); $config_rule = reset($automerge_configuration); $original = null; $duplicate = null; $date1 = $bean1->{$config_rule["\146\151\x65\154\144"]}; $date2 = $bean2->{$config_rule["\x66\x69\145\154\144"]}; if (empty($date1) || empty($date2)) { goto XIzw7; } $date1 = strtotime($date1); $date2 = strtotime($date2); if ($config_rule["\x72\165\x6c\145"] == "\x6f\x6c\144\x65\x72") { goto JyJzV; } if ($date1 <= $date2) { goto Mmat3; } $original = $bean1; $duplicate = $bean2; goto gYIAy; Mmat3: $original = $bean2; $duplicate = $bean1; gYIAy: goto kOYzw; JyJzV: if ($date1 <= $date2) { goto oXoPL; } $original = $bean2; $duplicate = $bean1; goto TPg1X; oXoPL: $original = $bean1; $duplicate = $bean2; TPg1X: kOYzw: goto d8U_e; XIzw7: $original = $bean1; $duplicate = $bean2; d8U_e: if (!(is_null($original) || is_null($duplicate))) { goto I9Bgk; } $original = $bean1; $duplicate = $bean2; I9Bgk: return array("\157\x72\151\147\151\156\141\154" => $original, "\144\165\160\x6c\x69\x63\141\x74\145" => $duplicate); } function e38_getDuplicatePairData($process_data) { $limit = $process_data["\155\145\162\147\145\x73\x5f\160\145\162\x5f\x72\165\x6e"] ? $process_data["\x6d\x65\162\x67\x65\x73\x5f\x70\145\x72\x5f\162\x75\156"] : 25; $found_duplicates = $GLOBALS["\x64\142"]->query("\xa\40\40\40\40\40\x20\x20\x20\x20\40\123\x45\114\105\x43\124\x20\104\111\123\x54\111\x4e\103\x54\40\145\63\x38\137\146\x6f\x75\x6e\144\x64\x75\x70\x6c\x69\x63\141\x74\x65\x73\56\151\144\54\40\145\63\x38\x5f\x66\x6f\165\x6e\x64\144\165\x70\x6c\151\143\x61\164\x65\x73\x2e\x64\165\160\154\151\x63\141\x74\x65\x5f\x72\x65\143\x6f\x72\x64\137\x69\x64\137\x31\54\x20\x65\x33\70\x5f\x66\x6f\x75\156\x64\x64\165\x70\x6c\151\x63\x61\x74\x65\163\x2e\144\x75\160\154\x69\x63\141\164\x65\137\x72\x65\143\x6f\x72\x64\x5f\151\x64\x5f\62\x2c\x20\145\x33\x38\x5f\x66\157\165\156\x64\144\165\160\x6c\151\x63\x61\164\145\163\x2e\144\141\x74\145\137\x65\x6e\164\145\x72\145\144\12\x20\x20\x20\40\40\x20\40\40\x20\40\x46\122\x4f\x4d\40\40\x65\x33\x38\x5f\144\165\x70\x6c\x69\143\x61\164\x65\x63\150\x65\143\x6b\12\x20\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\111\116\116\x45\x52\40\x4a\117\111\116\40\x65\x33\x38\x5f\x64\165\x70\154\151\143\x61\164\x65\x63\150\x65\x63\153\137\x65\x33\x38\137\146\157\x75\156\x64\x64\165\x70\154\x69\x63\141\164\145\x73\x20\x4f\116\x20\145\x33\70\137\x64\x75\160\154\151\x63\x61\164\x65\143\150\145\x63\153\x2e\151\144\40\75\x20\145\63\70\x5f\x64\x75\x70\154\151\143\x61\164\145\x63\x68\145\x63\153\x5f\145\x33\x38\x5f\146\x6f\x75\156\144\144\x75\160\154\151\x63\x61\x74\145\163\x2e\x65\63\70\x5f\144\x75\160\154\151\143\141\164\145\143\150\145\x63\153\x5f\151\144\40\x41\x4e\104\x20\x65\63\x38\137\x64\165\x70\154\151\x63\x61\164\145\x63\x68\x65\143\153\x5f\145\63\70\x5f\146\x6f\165\156\x64\144\x75\x70\154\151\x63\x61\164\145\x73\56\144\145\x6c\145\x74\x65\x64\x20\75\x20\60\12\x20\40\x20\40\40\40\40\40\x20\40\40\x20\x49\x4e\116\x45\122\40\112\117\x49\116\x20\145\63\70\x5f\146\157\165\156\144\x64\x75\x70\x6c\151\143\x61\164\x65\x73\x20\x4f\x4e\40\145\x33\70\137\146\157\x75\x6e\x64\x64\165\x70\154\151\x63\141\x74\145\x73\56\x69\x64\x20\75\40\x65\x33\70\x5f\144\165\x70\154\151\x63\141\x74\x65\143\x68\x65\143\x6b\137\145\63\x38\137\x66\x6f\165\156\x64\x64\x75\x70\x6c\151\143\141\x74\145\x73\x2e\145\x33\x38\137\146\157\x75\156\x64\144\165\x70\154\x69\143\141\164\x65\163\137\151\x64\x20\x41\x4e\104\x20\x65\63\70\137\146\157\165\156\144\144\x75\160\154\x69\143\141\x74\x65\x73\x2e\144\145\154\145\164\x65\x64\x20\x3d\40\60\12\40\x20\40\x20\x20\x20\40\40\40\40\x57\x48\x45\x52\105\40\x20\x65\63\70\x5f\x64\x75\x70\154\151\143\141\164\x65\x63\150\x65\143\153\x2e\x64\165\160\x6c\151\143\141\164\145\x5f\x66\x69\x6e\x64\x65\162\137\160\x72\157\x63\x65\163\163\x5f\151\144\40\x3d\x20\x27{$process_data["\x69\144"]}\x27\40\x41\x4e\x44\40\145\x33\70\x5f\144\165\160\x6c\151\x63\x61\x74\x65\x63\x68\x65\x63\x6b\x2e\x64\145\x6c\145\164\145\x64\x20\x3d\x20\60\x20\101\x4e\104\40\x65\63\70\137\x66\x6f\165\156\144\x64\165\160\154\x69\x63\141\164\x65\163\56\151\147\156\157\162\x65\x5f\x70\141\151\162\x20\75\40\60\xa\40\40\40\x20\40\x20\x20\40\40\40\x4f\122\x44\105\x52\x20\102\x59\x20\x65\x33\x38\x5f\x66\157\165\x6e\144\x64\165\160\x6c\x69\143\141\164\x65\x73\56\x64\x61\x74\145\x5f\145\x6e\x74\145\x72\145\x64\x20\x41\123\x43\xa\x20\40\40\x20\x20\40\x20\40\40\40\x4c\x49\x4d\x49\x54\x20{$limit}\12\x20\x20\40\x20\40\x20\x20\x20"); $found_duplicates_data = array(); xg0y1: if (!($row = $GLOBALS["\144\x62"]->fetchByAssoc($found_duplicates))) { goto Zyq3K; } $found_duplicates_data[] = $row; goto xg0y1; Zyq3K: return $found_duplicates_data; }

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/wUserUtilsJob.php


function wUserUtilsJob($job)
{
    require_once "custom/modules/Administration/wUserUtilsFunctionality.php";

    wUserUtils($job->data);

    return true;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/cloneProductCategories.php

	$job_strings[]= 'cloneProductCategories';
	
	function cloneProductCategories (){
		
        global $sugar_config , $db;
		$GLOBALS['log']->fatal('----->Job: cloneProductCategories - Scheduler fired');
		
		$sqlUpdate = "TRUNCATE TABLE pc_productcategoryclone";
		$result = $db->query($sqlUpdate);
		$sqlUpdate = "INSERT INTO pc_productcategoryclone (id, name, description, deleted, date_entered, date_modified, modified_user_id, created_by, list_order, assigned_user_id)  SELECT id, name, description, deleted, date_entered, date_modified, modified_user_id, created_by, list_order, assigned_user_id FROM product_categories";
		$result = $db->query($sqlUpdate);
		$db->query("UPDATE pc_productcategoryclone SET team_id = '1'");
		$db->query("UPDATE pc_productcategoryclone SET team_set_id = '1'");
		
		return true;
         
	}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/pruneSugarBPMHistory.php


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
?>
