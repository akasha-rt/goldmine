<?php

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
 
  class DeDupitProcessHookLogic { public function deleteRelationships($process_bean, $event, $arguments) { if (!($event != "\141\146\164\x65\162\137\163\x61\x76\145")) { goto H70d0; } return; H70d0: if (!empty($process_bean->id)) { goto H1p1I; } return; H1p1I: if (!($process_bean->active == "\171\x65\x73")) { goto ZFlag; } return; ZFlag: $sql = "\xa\x20\40\40\40\x20\40\x20\40\x20\x20\40\40\x44\x45\114\x45\x54\x45\40\x65\x33\70\137\x64\165\160\x6c\151\x63\x61\x74\145\x63\x68\145\x63\x6b\56\x2a\x2c\x20\x65\63\x38\x5f\x64\165\x70\x6c\151\x63\141\x74\145\143\x68\145\143\153\x5f\145\x33\x38\x5f\x66\x6f\165\156\144\x64\165\x70\x6c\151\143\x61\164\145\x73\56\52\x2c\40\x65\x33\70\137\x66\x6f\165\156\144\144\165\160\154\151\x63\141\x74\145\163\x2e\x2a\12\40\x20\40\40\x20\40\x20\x20\40\40\x20\x20\106\x52\117\x4d\40\x65\x33\x38\x5f\x64\x75\160\x6c\x69\x63\141\x74\145\x63\x68\x65\143\x6b\xa\x20\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\x4c\x45\x46\x54\x20\x4a\117\x49\x4e\40\145\x33\70\x5f\144\x75\x70\154\151\143\x61\x74\145\x63\x68\145\143\153\137\x65\x33\x38\x5f\146\x6f\165\156\x64\144\x75\160\x6c\151\x63\x61\x74\145\163\40\117\116\x20\145\63\70\137\x64\165\x70\x6c\151\143\x61\x74\145\143\x68\x65\x63\x6b\56\151\x64\40\75\x20\x65\63\x38\x5f\x64\165\x70\154\151\143\x61\164\x65\143\150\145\143\153\137\x65\63\x38\137\x66\157\165\156\x64\x64\x75\x70\154\x69\143\141\x74\145\x73\56\x65\x33\x38\x5f\144\x75\x70\x6c\151\x63\x61\164\x65\143\150\145\x63\x6b\137\151\x64\xa\40\x20\40\40\x20\40\x20\x20\40\x20\x20\40\40\40\114\x45\x46\124\40\x4a\x4f\x49\116\40\145\63\70\x5f\x66\157\x75\x6e\x64\144\165\160\x6c\x69\x63\x61\x74\145\x73\x20\117\x4e\40\x65\63\70\137\x66\157\165\x6e\144\x64\x75\160\154\x69\143\x61\164\x65\x73\x2e\151\x64\x20\x3d\x20\145\63\x38\x5f\144\165\160\154\151\x63\x61\164\x65\x63\x68\x65\143\153\137\x65\x33\x38\x5f\146\157\165\156\144\x64\165\160\x6c\x69\x63\x61\164\145\163\56\x65\63\70\137\x66\157\165\x6e\x64\x64\165\160\154\151\x63\141\x74\145\x73\137\x69\144\xa\40\40\40\40\40\40\40\x20\40\x20\x20\40\127\110\x45\x52\105\40\145\63\70\137\144\165\x70\x6c\151\143\x61\164\145\x63\x68\x65\143\153\x2e\x64\x75\160\154\151\143\141\164\x65\x5f\146\x69\x6e\x64\145\162\x5f\160\162\x6f\x63\145\163\x73\137\x69\x64\40\x3d\x20\x27{$process_bean->id}\x27\12\x20\40\40\x20\x20\40\40\40"; $db = DBManagerFactory::getInstance(); $db->query($sql); } public function makeProcessInactive($process_bean, $event, $arguments) { if (!($event != "\142\x65\x66\x6f\x72\145\x5f\x73\x61\x76\x65")) { goto i_D1C; } return; i_D1C: if (!($process_bean->active == "\156\x6f")) { goto n90eg; } return; n90eg: if (!($process_bean->fetched_row["\162\x75\154\x65\163\137\x63\x6f\156\146\151\147\x75\162\x61\164\x69\x6f\156"] !== $process_bean->rules_configuration)) { goto oShzL; } $process_bean->active = "\156\x6f"; oShzL: } public function deleteRelatedRecords($process_bean, $event, $arguments) { if (!($event != "\142\145\x66\157\x72\x65\137\x64\145\x6c\145\x74\145")) { goto rqOyr; } return; rqOyr: if (!empty($process_bean->id)) { goto y7rLb; } return; y7rLb: $sql = "\xa\40\40\x20\40\40\40\40\x20\40\40\x20\40\x44\x45\114\105\124\105\40\x65\63\70\137\x64\x75\x70\x6c\151\x63\141\164\145\x63\150\x65\143\x6b\56\x2a\x2c\40\145\63\x38\x5f\x64\x75\x70\154\x69\x63\x61\x74\x65\143\x68\x65\143\x6b\137\145\x33\x38\137\x66\157\165\156\x64\x64\165\160\154\151\143\141\x74\145\163\x2e\x2a\xa\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x46\122\x4f\115\x20\x65\x33\70\137\x64\165\160\x6c\x69\143\x61\164\x65\143\150\x65\143\x6b\12\x20\40\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\x4c\105\x46\x54\40\112\x4f\111\x4e\x20\x65\x33\x38\x5f\144\165\x70\154\x69\143\x61\x74\x65\x63\x68\145\x63\153\137\x65\x33\x38\x5f\x66\x6f\165\156\x64\144\165\160\x6c\151\x63\x61\164\x65\x73\x20\117\116\40\x65\63\70\137\144\x75\160\154\x69\143\x61\x74\145\x63\x68\x65\143\x6b\56\151\x64\40\x3d\x20\145\63\70\137\144\165\x70\x6c\151\x63\x61\164\145\143\x68\145\143\153\137\x65\x33\x38\137\146\157\165\x6e\144\144\x75\160\154\151\143\x61\164\x65\x73\56\145\x33\x38\137\144\x75\160\x6c\151\143\141\164\x65\x63\150\x65\143\x6b\x5f\151\144\12\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\x57\x48\x45\x52\105\x20\x65\63\70\137\144\x75\x70\154\151\143\141\x74\x65\x63\150\x65\143\153\x2e\x64\165\x70\x6c\x69\143\x61\x74\145\x5f\146\151\x6e\144\145\x72\137\x70\x72\x6f\143\x65\x73\x73\x5f\151\x64\x20\x3d\40\x27{$process_bean->id}\x27\xa\x20\40\x20\40\x20\x20\40\x20"; $db = DBManagerFactory::getInstance(); $db->query($sql); } public function createDashboard($process_bean, $event, $arguments) { if (!($event != "\141\146\x74\145\x72\x5f\x73\x61\166\x65")) { goto XbZ2r; } return; XbZ2r: $metadata = "\x7b\42\x63\x6f\x6d\160\157\x6e\145\x6e\x74\163\42\x3a\x5b\173\x22\162\x6f\x77\163\x22\72\133\133\173\x22\167\x69\x64\x74\150\x22\x3a\61\62\x2c\x22\166\x69\145\x77\x22\x3a\x7b\42\x6c\141\142\x65\154\42\x3a\x22\x4c\x42\x4c\137\x45\63\70\x5f\x44\x45\104\x55\x50\x49\x54\137\x52\105\103\x4f\122\104\x5f\104\101\123\x48\114\105\x54\42\x2c\x22\x74\x79\160\145\x22\72\42\x65\x33\x38\55\x64\x65\144\x75\x70\x69\164\x2d\162\145\x63\157\x72\144\x2d\144\141\x73\x68\x6c\x65\164\x22\54\42\155\x6f\144\x75\x6c\145\x22\72\x6e\165\x6c\154\175\175\x5d\54\x5b\173\x22\167\151\x64\164\150\42\x3a\x31\62\54\42\x76\x69\x65\167\42\x3a\173\42\154\x61\142\x65\154\x22\72\x22\x4c\x42\x4c\x5f\105\x33\x38\x5f\104\x45\x44\125\x50\x49\x54\x5f\x48\x49\123\124\x4f\x52\x59\137\104\x41\x53\110\x4c\105\x54\x22\54\42\164\x79\x70\x65\42\72\x22\x65\63\x38\x2d\x64\x65\144\165\160\151\x74\55\x68\151\163\x74\157\x72\x79\55\x64\x61\163\x68\154\145\164\x22\54\42\155\157\144\165\x6c\145\x22\x3a\x6e\x75\x6c\154\x7d\175\135\135\x2c\x22\x77\x69\x64\x74\x68\x22\72\x31\62\175\135\x7d"; $sugarQuery = new SugarQuery(); $sugarQuery->from(BeanFactory::newBean("\104\141\163\x68\x62\157\141\x72\x64\x73")); $sugarQuery->select(array("\151\x64")); $sugarQuery->where()->equals("\144\x61\x73\x68\142\157\x61\162\x64\x5f\155\x6f\x64\165\154\x65", $process_bean->for_module); $sugarQuery->where()->equals("\166\x69\145\x77\x5f\x6e\141\155\x65", "\162\x65\x63\x6f\x72\x64"); $sugarQuery->where()->equals("\x6d\x65\164\x61\144\141\x74\141", $metadata); $existing_dashboards = $sugarQuery->execute(); if (!(count($existing_dashboards) != 0)) { goto xR4dB; } return; xR4dB: $dashboard_bean = BeanFactory::newBean("\x44\x61\x73\x68\142\157\x61\162\144\163"); $dashboard_bean->name = "\114\102\114\x5f\105\63\70\x5f\104\105\x44\x55\120\111\124\137\x44\x41\123\x48\x42\x4f\x41\x52\104"; $dashboard_bean->dashboard_module = $process_bean->for_module; $dashboard_bean->view_name = "\162\145\143\157\x72\x64"; $dashboard_bean->metadata = $metadata; $dashboard_bean->default_dashboard = 1; $dashboard_bean->team_id = 1; $dashboard_bean->team_set_id = 1; $dashboard_bean->assigned_user_id = 1; $dashboard_bean->save(); } public function addDeDupitField($process_bean, $event, $arguments) { if (!($event != "\x61\x66\x74\145\x72\137\163\x61\166\x65")) { goto Fxwct; } return; Fxwct: $dedupit_field_def = array(array("\x6e\141\x6d\x65" => "\x65\63\70\x5f\146\157\x75\x6e\144\x5f\142\x79\x5f\x64\145\x64\165\x70\151\x74", "\145\156\x61\142\x6c\145\144" => true, "\144\145\146\x61\165\154\x74" => true, "\154\x61\x62\x65\154" => "\x44\x65\104\x75\x70\x69\x74", "\x74\171\x70\145" => "\145\x33\x38\55\144\145\144\165\160\x69\164\55\x66\x6f\x75\x6e\144\x2d\144\165\x70\55\151\x6e\146\157")); $parser = ParserFactory::getParser("\144\x75\x70\145\143\150\145\143\x6b\55\154\151\163\x74", $process_bean->for_module); if ($parser) { goto v_plQ; } return; v_plQ: if (!$parser->panelHasField("\145\x33\x38\x5f\x66\157\x75\156\144\x5f\142\171\x5f\x64\x65\x64\x75\x70\x69\x74")) { goto rN9R0; } return; rN9R0: try { array_splice($parser->_viewdefs["\x62\x61\163\145"]["\x76\x69\x65\167"]["\x64\165\x70\145\143\150\145\x63\x6b\x2d\x6c\x69\x73\x74"]["\x70\x61\x6e\145\154\x73"][0]["\x66\x69\145\x6c\144\163"], 0, 0, $dedupit_field_def); $parser->handleSave(false); } catch (Exception $exception) { $a = 1; } } }