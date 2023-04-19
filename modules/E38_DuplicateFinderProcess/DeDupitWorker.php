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
 
  use Sugarcrm\Sugarcrm\Util\Uuid; require_once "\151\156\143\x6c\x75\144\145\x2f\123\165\x67\141\162\121\x75\145\162\x79\x2f\123\165\147\141\162\121\x75\x65\x72\171\56\x70\150\x70"; class DeDupitWorker { public static function findDuplicates($process_data, $bean) { $duplicate_check_bean_1_id = self::getDuplicateCheckRecordID($process_data, $bean); if ($duplicate_check_bean_1_id) { goto e1DKm; } $GLOBALS["\x6c\157\x67"]->fatal("\x44\145\104\165\x70\151\x74\40\x66\151\x6e\x64\104\165\x70\x6c\151\x63\x61\x74\145\x73\x20\x2d\x20\164\x68\x65\162\x65\x20\x69\x73\x20\156\x6f\40\144\x75\x70\154\x69\x63\141\x74\145\137\143\150\x65\x63\153\x5f\x62\145\x61\x6e\x5f\x31\137\151\144\x20\x70\141\x73\163\145\144\x21"); return false; e1DKm: $duplicates = self::findDuplicatesInDB($process_data, $bean); self::clearOutDuplicates($bean, $duplicates, $process_data); if ($duplicates) { goto qWbp2; } return false; qWbp2: foreach ($duplicates as $duplicate_id => $duplicate_name) { $found_duplicates_pairs = self::getFoundDuplicatePairs($bean, $duplicate_id, $process_data); $duplicate_check_bean_2_id = self::getDuplicateCheckRecordID($process_data, $duplicate_id); if (count($found_duplicates_pairs) == 1) { goto vjbxF; } if (count($found_duplicates_pairs) > 1) { goto ansMf; } goto WCQhj; vjbxF: goto NXzFx; goto WCQhj; ansMf: self::removeDuplicateDuplicatePairs($found_duplicates_pairs); WCQhj: self::createFoundDuplicate($bean, $duplicate_id, $duplicate_check_bean_1_id, $duplicate_check_bean_2_id, $duplicate_name, $process_data); NXzFx: } w39oa: } public static function removeDuplicateDuplicatePairs($found_duplicates_pairs) { global $db; foreach ($found_duplicates_pairs as $found_duplicates_pair) { $db->query("\104\105\114\x45\124\x45\40\x46\x52\x4f\115\40\x65\x33\70\137\146\157\x75\156\144\x64\x75\x70\x6c\151\143\x61\x74\145\163\40\x57\x48\105\122\105\x20\151\144\40\75\x20\x27{$found_duplicates_pair["\x69\144"]}\x27\x3b"); Mz8TQ: } Wktor: } public static function getFoundDuplicatePairs($bean, $duplicate_id, $process_data) { global $db; $existing_found_duplicates = $db->query("\xa\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\x20\x20\40\x20\x53\x45\114\x45\103\x54\x20\x44\111\x53\124\x49\116\x43\x54\40\145\63\70\137\146\157\x75\x6e\x64\x64\x75\x70\x6c\151\x63\141\164\145\163\56\x69\144\12\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x46\122\117\115\x20\x65\x33\70\x5f\x66\x6f\x75\x6e\144\x64\x75\x70\154\151\x63\141\x74\145\x73\x20\xa\40\40\x20\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\40\x20\x20\x20\40\x20\40\40\40\112\x4f\x49\116\x20\145\x33\x38\x5f\144\x75\160\x6c\x69\143\141\x74\x65\x63\150\145\x63\153\137\x65\x33\x38\137\x66\x6f\x75\156\144\x64\165\160\154\x69\143\x61\x74\145\163\40\x4f\116\40\x65\x33\x38\137\144\165\160\154\151\143\x61\x74\x65\x63\x68\145\143\153\x5f\145\63\x38\137\x66\x6f\x75\x6e\144\144\x75\160\154\x69\x63\x61\164\x65\x73\56\145\x33\70\x5f\146\x6f\x75\x6e\144\x64\165\160\x6c\x69\x63\x61\164\x65\x73\137\x69\x64\40\x3d\40\145\x33\70\x5f\146\x6f\x75\x6e\144\144\x75\160\154\151\x63\141\x74\x65\x73\56\151\144\x20\40\xa\x20\x20\40\x20\40\40\40\40\40\x20\40\40\x20\40\x20\40\40\40\x20\40\40\40\40\x20\x4a\117\x49\116\x20\x65\x33\x38\137\144\x75\x70\x6c\151\143\x61\x74\145\143\150\145\143\x6b\40\x4f\x4e\x20\145\63\x38\x5f\144\165\160\x6c\x69\143\141\x74\x65\x63\x68\x65\x63\x6b\x5f\x65\x33\x38\x5f\x66\157\165\x6e\144\x64\x75\x70\x6c\151\143\x61\x74\x65\x73\56\x65\63\70\x5f\144\x75\x70\154\x69\x63\x61\x74\x65\143\x68\145\143\x6b\x5f\x69\x64\40\75\x20\x65\63\x38\x5f\x64\x75\x70\154\x69\143\x61\x74\x65\x63\150\x65\x63\153\x2e\x69\144\x20\12\x20\x20\40\40\40\40\x20\40\40\x20\40\40\40\40\40\x20\127\110\x45\x52\x45\x20\xa\x20\x20\40\40\x20\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\40\50\50\144\165\x70\x6c\151\x63\141\164\x65\x5f\x72\x65\x63\x6f\162\x64\137\151\x64\137\61\x20\75\x20\x27{$bean->id}\47\x20\x41\116\104\x20\144\x75\160\154\x69\x63\141\164\x65\137\162\x65\x63\x6f\162\x64\x5f\151\144\x5f\62\40\x3d\40\x27" . $duplicate_id . "\47\x29\x20\117\122\12\x20\40\x20\40\x20\x20\40\40\40\40\x20\x20\x20\x20\40\40\40\40\40\40\50\144\x75\160\154\x69\x63\141\x74\145\137\162\x65\143\x6f\x72\144\137\x69\x64\x5f\x32\x20\75\40\x27{$bean->id}\47\x20\101\x4e\x44\40\144\x75\x70\x6c\x69\x63\141\164\145\137\162\145\x63\x6f\x72\144\137\151\144\137\61\x20\x3d\x20\47" . $duplicate_id . "\x27\x29\51\40\xa\40\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\40\40\101\116\104\x20\x65\x33\70\137\144\165\x70\154\151\143\x61\x74\145\143\150\x65\x63\153\56\x64\165\x70\x6c\x69\143\141\164\145\x5f\x66\151\x6e\144\145\162\137\160\162\x6f\143\145\163\163\x5f\151\144\x20\75\40\47{$process_data["\151\144"]}\x27\xa\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20"); $found_duplicates_pairs = array(); fayxn: if (!($row = $db->fetchByAssoc($existing_found_duplicates))) { goto ZHD6d; } $found_duplicates_pairs[] = $row; goto fayxn; ZHD6d: return $found_duplicates_pairs; } public static function getDuplicateCheckRecordID($process_data, $bean) { global $db; $bean_id = is_object($bean) ? $bean->id : $bean; $existing_check = $db->query("\12\40\x20\40\x20\40\x20\40\40\40\40\x20\x20\123\x45\x4c\x45\103\124\x20\x69\144\40\xa\40\x20\40\x20\40\40\x20\x20\x20\40\40\x20\x46\x52\117\115\40\x65\x33\70\x5f\144\165\x70\154\151\x63\x61\x74\x65\143\150\x65\x63\153\40\12\x20\40\x20\40\40\40\40\40\40\x20\40\x20\x57\110\x45\122\105\40\146\157\x72\x5f\x6d\157\144\165\154\145\x20\x3d\x20\x27{$process_data["\146\x6f\x72\x5f\155\157\x64\165\154\145"]}\x27\x20\101\x4e\104\x20\12\40\x20\40\x20\x20\x20\40\x20\x20\40\40\40\40\x20\40\40\x72\145\x63\157\162\x64\x5f\151\x64\x20\x3d\40\47{$bean_id}\47\40\101\116\104\40\xa\40\x20\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\x20\x64\165\160\x6c\x69\x63\141\x74\x65\x5f\x66\151\x6e\144\145\162\137\x70\162\157\143\x65\163\x73\x5f\x69\x64\40\x3d\x20\x27{$process_data["\151\x64"]}\x27\12\40\40\40\40\40\x20\40\x20"); $found_checks = array(); pimxO: if (!($row = $db->fetchByAssoc($existing_check))) { goto KBe6X; } $found_checks[] = $row; goto pimxO; KBe6X: if (count($found_checks) === 1) { goto CJxso; } if (count($found_checks) === 0) { goto HzbGn; } foreach ($found_checks as $duplicate_check) { $db->query("\xa\40\40\x20\x20\x20\40\40\40\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\104\105\114\x45\x54\x45\x20\106\x52\x4f\115\x20\145\x33\70\x5f\x64\x75\160\x6c\x69\x63\x61\x74\x65\143\150\x65\143\x6b\40\x20\xa\x20\x20\x20\40\40\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\127\x48\105\x52\x45\x20\151\x64\x20\x3d\40\x27{$duplicate_check["\151\x64"]}\47\12\x20\40\40\x20\40\40\x20\x20\x20\40\40\x20\x20\40\x20\40"); EPLrc: } GDEyy: return self::createDuplicateCheckRecord($process_data, $bean_id); goto s19xS; CJxso: $now = (new SugarDateTime())->asDb(); $duplicate_check_bean_id = $found_checks[0]["\x69\144"]; $db->query("\12\x20\40\40\x20\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\x55\x50\x44\101\124\105\x20\145\x33\70\137\x64\x75\160\154\x69\143\x61\164\145\x63\150\x65\143\x6b\x20\12\40\40\40\40\x20\40\40\40\40\40\40\40\40\x20\40\x20\x53\105\x54\40\143\x68\145\x63\153\x5f\x66\x6f\x72\137\144\x75\160\x6c\151\x63\x61\x74\x65\163\x20\x3d\40\47{$now}\47\x20\12\40\x20\x20\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\40\x57\110\105\x52\105\40\x69\144\x20\75\40\47{$duplicate_check_bean_id}\x27\12\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20"); return $duplicate_check_bean_id; goto s19xS; HzbGn: return self::createDuplicateCheckRecord($process_data, $bean_id); s19xS: } public static function createDuplicateCheckRecord($process_data, $bean_id) { global $current_user, $db; $current_user = BeanFactory::newBean("\125\x73\145\162\x73"); $current_user->getSystemUser(); $id = Uuid::uuid1(); $now = (new SugarDateTime())->asDb(); $insert = $db->query("\x49\x4e\123\x45\122\124\40\111\116\124\117\40\145\63\70\137\x64\165\160\x6c\151\x63\x61\164\x65\x63\150\x65\x63\153\x20\x28\xa\40\x20\40\40\40\40\40\40\40\x20\40\40\40\40\40\40\x69\x64\x2c\40\12\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x64\x61\164\x65\137\145\x6e\164\145\x72\x65\x64\x2c\40\12\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\144\x61\164\145\x5f\x6d\157\144\x69\146\x69\145\144\54\x20\xa\40\x20\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\x66\157\x72\137\155\x6f\x64\x75\x6c\145\54\x20\12\40\x20\x20\x20\40\40\x20\x20\40\40\x20\40\40\40\40\40\162\x65\143\157\162\x64\137\x69\144\54\x20\xa\x20\x20\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\40\x20\x64\165\x70\154\x69\x63\x61\x74\145\137\x66\x69\x6e\x64\145\162\x5f\x70\x72\157\x63\145\x73\163\x5f\151\144\x2c\40\12\40\40\40\x20\x20\40\x20\40\40\40\x20\40\x20\40\x20\x20\143\150\x65\x63\153\137\146\157\x72\137\144\x75\160\154\151\x63\141\x74\x65\163\54\x20\xa\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\x6d\157\x64\x69\x66\151\x65\144\x5f\165\x73\x65\x72\137\151\x64\54\x20\12\40\40\x20\40\40\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\x63\162\x65\x61\x74\145\144\137\x62\x79\x2c\40\12\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\141\163\x73\151\x67\x6e\x65\x64\x5f\165\x73\145\x72\x5f\x69\144\x2c\12\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\40\x20\x74\145\141\x6d\x5f\151\x64\x2c\12\x20\40\40\40\40\40\40\x20\40\40\40\x20\40\40\40\x20\x74\145\x61\155\x5f\163\145\164\x5f\151\144\x29\xa\x20\x20\40\40\40\40\x20\40\40\x20\40\x56\x41\x4c\125\x45\123\x20\50\12\40\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\47{$id}\x27\54\x20\12\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\40\40\40\x20\47{$now}\x27\54\x20\xa\40\40\x20\40\x20\x20\40\40\x20\40\x20\40\40\40\40\40\x27{$now}\47\54\x20\xa\40\40\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x27{$process_data["\x66\x6f\x72\137\155\157\x64\165\x6c\145"]}\47\54\x20\12\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\x20\x27{$bean_id}\47\x2c\40\xa\40\40\40\x20\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\47{$process_data["\151\x64"]}\x27\x2c\40\xa\40\40\40\40\40\40\x20\40\x20\40\40\x20\40\40\x20\40\47{$now}\47\x2c\x20\12\x20\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\40\x20\40\47{$current_user->id}\47\54\40\12\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\40\40\47{$current_user->id}\x27\54\x20\xa\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\x27{$current_user->id}\x27\54\12\x20\40\40\40\40\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\x31\x2c\12\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\61\x29\12\x20\x20\x20\x20\40\x20\x20\x20"); if ($insert) { goto oxiFr; } $GLOBALS["\x6c\157\x67"]->fatal("\104\145\104\165\160\151\x74\x20\x63\162\x65\141\x74\x65\104\165\160\154\x69\143\x61\x74\x65\x43\x68\145\x63\153\122\145\x63\x6f\x72\x64\x20\x66\141\151\154\x65\x64\40\x74\157\x20\x69\156\163\145\162\164\x20\146\x6f\x72\x20\142\145\x61\156\x20\47{$bean_id}\x27"); return false; oxiFr: return $id; } public static function findDuplicatesInDB($process_data, $bean) { global $db; $rules = json_decode(htmlspecialchars_decode($process_data["\x72\x75\154\145\x73\x5f\143\x6f\x6e\146\x69\x67\x75\x72\141\164\151\x6f\x6e"]), true); if ($rules) { goto qeP8t; } $GLOBALS["\x6c\x6f\147"]->fatal("\x44\145\x44\165\160\x69\x74\40\x66\151\x6e\x64\x44\x75\160\154\x69\x63\x61\164\145\163\111\x6e\104\x42\40\146\x61\x69\x6c\x65\144\x20\164\x6f\x20\x64\x65\143\157\x64\145\40\162\x75\154\145\x73\x21"); return false; qeP8t: $bean_table = $bean->table_name; $where_clauses = ''; $join_clauses = ''; $join_email_table = false; foreach ($rules as $rule) { $field = array_keys($rule)[0]; $operator = array_keys($rule[$field])[0]; $perform_field_quote = true; $bean_value = isset($bean->{$field}) ? $bean->{$field} : null; $bean_value = is_string($bean_value) ? trim($bean_value) : $bean_value; $field_def = $bean->getFieldDefinitions()[$field]; if ($field_def) { goto GX4DL; } $GLOBALS["\x6c\x6f\147"]->fatal("\104\145\104\x75\160\151\x74\40\x66\x69\156\x64\104\x75\160\154\x69\x63\141\164\x65\163\x49\156\104\x42\40\146\141\151\x6c\145\144\40\164\x6f\x20\x67\145\164\x20\146\151\x65\154\144\40\x64\145\x66"); return false; GX4DL: if (!($field == "\x65\x6d\141\x69\154")) { goto Vf6h5; } $field = "\145\x6d\141\151\x6c\137\x61\144\x64\x72\145\163\163\x65\x73\56\x65\x6d\141\x69\154\x5f\141\144\x64\x72\145\163\163"; $join_email_table = true; $emails = ''; if ($bean->email && is_array($bean->email)) { goto QRnXg; } $email_addresses = isset($bean->emailAddress->addresses) ? $bean->emailAddress->addresses : null; if (!$email_addresses) { goto f3nEn; } foreach ($email_addresses as $email_data) { $emails .= $email_data["\145\155\x61\151\154\137\x61\x64\144\x72\x65\x73\x73"] ? "\47" . $email_data["\145\155\141\x69\x6c\x5f\141\x64\x64\x72\145\x73\163"] . "\47\54" : ''; uf6mZ: } oMLdW: $emails = rtrim($emails, "\54"); f3nEn: goto DEvnw; QRnXg: foreach ($bean->email as $index => $email_data) { $emails .= "\47{$email_data["\145\x6d\x61\151\154\x5f\141\144\144\x72\145\163\x73"]}\47"; if (!($index != end(array_keys($bean->email)))) { goto gJaJ5; } $emails .= "\54"; gJaJ5: eGaej: } g3am3: DEvnw: $bean_value = $emails; if (!empty($bean_value)) { goto xUMEn; } return false; xUMEn: $perform_field_quote = false; Vf6h5: if (!($field_def["\156\141\x6d\x65"] == "\141\x73\163\x69\x67\156\x65\x64\x5f\x75\163\x65\x72\x5f\156\141\x6d\x65")) { goto ywnJM; } $field = "\141\x73\163\151\x67\x6e\145\144\137\165\x73\145\162\137\151\x64"; if (!(!isset($bean->assigned_user_id) || empty($bean->assigned_user_id))) { goto PUrfK; } return false; PUrfK: $bean_value = "\x27{$bean->assigned_user_id}\47"; $perform_field_quote = false; ywnJM: if (!(!empty($field_def["\164\x79\x70\x65"]) && $field_def["\x74\171\x70\x65"] == "\x72\145\154\x61\164\x65")) { goto C7Xe2; } $field = $field_def["\151\144\137\156\141\x6d\145"]; if (!(!isset($bean->{$field}) || empty($bean->{$field}))) { goto fKgqC; } return false; fKgqC: $bean_value = "\47{$bean->{$field}}\47"; if (!isset($field_def["\x6c\x69\156\153"])) { goto nuNj1; } $bean->load_relationship($field_def["\154\151\156\x6b"]); $relationship = $bean->{$field_def["\154\151\156\153"]}->getRelationshipObject(); $join_table = $relationship->def["\x6a\x6f\x69\156\x5f\x74\x61\x62\x6c\x65"]; $other_key = $relationship->def["\152\x6f\x69\x6e\137\x6b\145\x79\x5f\x6c\150\163"] == $field ? $relationship->def["\x6a\x6f\151\156\137\x6b\x65\171\137\162\x68\x73"] : $relationship->def["\152\157\151\x6e\137\x6b\145\x79\137\154\150\163"]; $join_clauses .= "\40\x4a\117\111\x4e\40{$join_table}\x20\x4f\x4e\x20{$join_table}\x2e{$other_key}\40\x3d\x20{$bean_table}\56\151\144\x20\40\101\x4e\104\40{$join_table}\56\144\145\x6c\145\x74\145\x64\40\x3d\40\60\x20"; $field = $join_table . "\56" . $field; nuNj1: $perform_field_quote = false; C7Xe2: if (!($bean_value == '' || $bean_value == null)) { goto GWz8E; } return false; GWz8E: if (!$perform_field_quote) { goto L2OFf; } $bean_value = $db->quote($bean_value); $bean_value = "\47{$bean_value}\47"; L2OFf: switch ($operator) { case "\44\x65\x71\x75\x61\154\163": $where_clauses .= "\40\x41\116\x44\40{$field}\x20\x49\x4e\40\50{$bean_value}\x29\40"; goto Hg0dF; case "\44\x66\165\172\x7a\171\137\155\141\x74\143\150": $where_clauses .= "\40\x41\x4e\104\x20\x53\x4f\125\x4e\x44\105\x58\50{$field}\x29\x20\75\x20\123\x4f\x55\x4e\x44\x45\130\50{$bean_value}\x29\40"; goto Hg0dF; default: $GLOBALS["\x6c\157\x67"]->fatal("\x44\145\x44\x75\160\x69\164\40\x66\151\x6e\144\x44\165\160\x6c\151\x63\x61\x74\145\x73\111\156\x44\x42\x20\55\40\151\x6e\x76\141\x6c\x69\144\x20\157\x70\x65\162\141\x74\157\x72\40\x27{$operator}\47"); return false; } NGZXV: Hg0dF: ClB2P: } rep7O: $name_field_def = $bean->field_defs["\x6e\141\x6d\145"]; $name_fields = ''; if (isset($name_field_def["\144\142\x5f\x63\157\x6e\143\x61\164\x5f\x66\x69\145\x6c\x64\163"]) && is_array($name_field_def["\144\142\137\143\157\156\x63\x61\164\x5f\146\x69\x65\x6c\144\x73"])) { goto d5Glc; } $name_fields = $bean_table . "\x2e" . $name_field_def["\156\141\155\x65"]; goto f43M4; d5Glc: foreach ($name_field_def["\144\x62\x5f\143\x6f\156\x63\141\x74\137\x66\x69\x65\x6c\x64\163"] as $field_name) { $name_fields .= $bean_table . "\56" . $field_name . "\x2c\40"; giera: } rQGWy: $name_fields = rtrim($name_fields, "\x2c\x20"); f43M4: if (!$bean->hasCustomFields()) { goto cdBeS; } $bean_custom_table = $bean->get_custom_table_name(); $join_clauses .= "\40\114\x45\106\x54\x20\112\117\111\116\x20{$bean_custom_table}\x20\117\116\x20{$bean_table}\56\x69\144\40\x3d\x20{$bean_custom_table}\x2e\151\144\x5f\x63\40"; cdBeS: if (!$join_email_table) { goto DIAgu; } $join_clauses .= "\x9\12\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\40\40\x20\x20\x20\112\117\111\x4e\40\145\x6d\x61\x69\x6c\137\141\144\144\x72\137\142\145\141\x6e\x5f\162\145\154\x20\x4f\x4e\x20\x62\145\x61\x6e\x5f\155\x6f\144\165\x6c\x65\x20\75\x20\x27{$bean->getModuleName()}\x27\x20\x41\116\x44\40{$bean_table}\x2e\151\x64\x20\x3d\x20\x65\x6d\141\x69\154\x5f\141\144\144\162\137\142\x65\141\156\137\x72\x65\154\56\x62\145\141\156\137\x69\x64\40\xa\x9\x20\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\40\x4a\117\111\x4e\x20\x65\155\141\x69\x6c\x5f\141\x64\144\x72\145\x73\163\145\163\x20\117\x4e\40\145\155\141\x69\x6c\x5f\x61\x64\x64\x72\137\142\145\141\x6e\x5f\162\x65\154\x2e\x65\155\x61\151\154\x5f\141\144\x64\162\x65\x73\x73\x5f\x69\x64\40\x3d\40\145\155\x61\x69\x6c\137\141\x64\x64\162\x65\163\x73\x65\163\x2e\x69\x64\40\12\11\x20\40\x20\40\40\40\x20\40\40\40"; DIAgu: $duplicates_query = $db->query("\12\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\123\x45\114\x45\x43\124\x20\x44\x49\x53\x54\x49\116\103\124\x20{$bean_table}\x2e\x69\144\54\x20{$name_fields}\12\40\x20\x20\x20\40\40\x20\40\x20\40\40\40\x46\x52\117\x4d\x20{$bean_table}\x20\12\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\x20{$join_clauses}\xa\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\x57\110\x45\122\x45\40{$bean_table}\56\144\145\154\x65\x74\x65\144\x20\75\40\x30\40\xa\40\x20\x20\x20\40\40\40\40\40\40\x20\40\x20\x20\40\40\101\x4e\x44\x20{$bean_table}\x2e\151\x64\x20\41\x3d\x20\x27{$bean->id}\47\40\xa\40\40\40\x20\40\x20\x20\x20\40\40\x20\40\40\x20\40\40{$where_clauses}\12\40\x20\40\40\40\40\x20\x20"); $found_duplicates = array(); JuP2S: if (!($row = $db->fetchByAssoc($duplicates_query))) { goto jdemG; } $found_duplicates[$row["\151\x64"]] = $name_field_def["\x64\x62\137\143\x6f\156\x63\x61\164\137\146\151\145\x6c\144\x73"] ? $row[$name_field_def["\x64\142\137\x63\157\x6e\x63\141\164\137\x66\151\145\154\x64\163"][0]] . "\x20" . $row[$name_field_def["\144\x62\137\143\157\x6e\x63\x61\x74\137\x66\x69\x65\x6c\144\x73"][1]] : $row[$name_field_def["\156\141\x6d\x65"]]; goto JuP2S; jdemG: return $found_duplicates; } public static function createFoundDuplicate($bean, $duplicate_id, $duplicate_check_bean_1_id, $duplicate_check_bean_2_id, $duplicate_name, $process_data) { global $current_user, $db; $current_user = BeanFactory::newBean("\125\163\145\162\163"); $current_user->getSystemUser(); $found_duplicates_id = Uuid::uuid1(); $now = (new SugarDateTime())->asDb(); $duplicate_name = $db->quote($duplicate_name); $bean_name = $db->quote($bean->name); $insert = $db->query("\xa\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x49\x4e\123\x45\122\x54\40\111\x4e\124\117\40\x65\x33\x38\137\x66\157\165\x6e\144\x64\165\160\154\151\143\141\164\145\x73\40\x28\xa\40\40\x20\x20\40\x20\40\40\x20\x20\40\x20\40\40\40\40\151\144\x2c\40\12\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\144\x61\x74\x65\x5f\x65\156\164\x65\162\x65\144\x2c\40\12\40\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\144\x61\164\x65\x5f\x6d\157\144\151\146\151\145\144\54\x20\12\40\40\40\x20\x20\40\40\x20\40\40\40\40\x20\40\40\40\x6d\157\144\x69\x66\x69\145\144\x5f\165\163\x65\x72\137\151\144\x2c\x20\12\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x63\162\145\x61\164\145\144\x5f\x62\x79\54\x20\xa\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\x20\x64\x75\x70\154\151\x63\x61\x74\145\x5f\162\145\x63\x6f\162\x64\x5f\x69\144\137\61\54\40\12\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\40\x64\x75\160\154\x69\143\x61\x74\x65\x5f\162\145\x63\x6f\162\x64\137\x31\137\156\x61\x6d\x65\x2c\x20\12\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\40\x20\40\144\165\160\154\151\x63\141\x74\x65\x5f\162\x65\143\x6f\162\144\x5f\151\x64\x5f\x32\x2c\40\12\x20\40\40\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\144\165\x70\154\151\143\141\x74\145\x5f\162\x65\x63\157\x72\144\x5f\x32\x5f\156\141\155\145\x2c\x20\xa\40\40\x20\x20\x20\40\x20\x20\40\40\40\x20\40\x20\40\40\141\x73\x73\x69\x67\x6e\145\144\x5f\165\x73\145\x72\x5f\151\144\x2c\xa\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\x20\164\145\141\155\137\x69\144\54\xa\x20\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\40\164\145\141\155\x5f\163\x65\x74\137\151\x64\51\12\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\x56\x41\x4c\125\105\123\x20\x28\xa\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x27{$found_duplicates_id}\47\54\x20\12\x20\40\40\40\40\40\x20\x20\40\40\40\40\x20\x20\40\x20\x27{$now}\47\x2c\x20\xa\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\47{$now}\x27\x2c\x20\xa\40\40\40\40\40\40\40\x20\40\40\x20\x20\40\x20\40\40\x27{$current_user->id}\x27\54\x20\xa\40\x20\40\x20\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\x27{$current_user->id}\47\x2c\x20\x20\12\x20\x20\40\x20\x20\40\40\x20\40\40\x20\x20\40\x20\x20\40\47{$duplicate_id}\47\54\x20\12\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x27{$duplicate_name}\x27\x2c\40\xa\40\x20\40\x20\40\40\x20\40\40\40\40\40\40\40\x20\40\47{$bean->id}\47\54\40\12\x20\40\40\40\40\x20\x20\x20\40\40\40\40\40\x20\x20\40\47{$bean_name}\47\54\xa\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\40\x27{$current_user->id}\47\54\xa\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\40\40\40\40\x20\61\54\12\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\x31\51\xa\x20\x20\40\40\40\40\40\40"); if ($insert) { goto PP9oF; } $GLOBALS["\x6c\x6f\147"]->fatal("\x44\145\104\165\160\151\x74\40\143\x72\145\141\x74\145\x46\157\x75\156\x64\x44\x75\x70\154\x69\143\141\164\x65\x20\x66\x61\x69\x6c\145\x64\40\x74\157\40\151\x6e\163\145\162\164\40\x66\157\162\x20\x64\165\160\154\x69\x63\141\x74\145\40\x27{$found_duplicates_id}\47\41"); return false; PP9oF: $relate = self::createMiddleRelationship($duplicate_check_bean_1_id, $duplicate_check_bean_2_id, $found_duplicates_id, $process_data); if ($relate) { goto y2GzZ; } $GLOBALS["\154\x6f\147"]->fatal("\x44\x65\x44\165\x70\x69\x74\x20\143\x72\145\141\x74\145\106\x6f\165\x6e\144\x44\x75\x70\154\x69\x63\x61\164\x65\x20\x66\141\x69\x6c\x65\x64\x20\164\x6f\40\x72\145\x6c\141\x74\145\x20\146\x6f\162\40\144\x75\160\x6c\151\143\x61\164\145\40\47{$found_duplicates_id}\x27\41"); return false; y2GzZ: } public static function createMiddleRelationship($duplicate_check_bean_1_id, $duplicate_check_bean_2_id, $found_duplicates_id, $process_data) { global $db; $existing_relation = $db->query("\12\40\x20\40\40\x20\x20\x20\40\40\40\40\40\40\40\40\40\x20\x20\x20\x20\x53\x45\114\x45\x43\x54\x20\x2a\12\40\40\x20\x20\x20\40\x20\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\40\x46\122\117\115\40\x65\63\x38\137\x66\157\x75\156\x64\144\x75\160\x6c\x69\143\x61\x74\x65\x73\x20\12\x20\x20\x20\40\40\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\x4a\x4f\x49\116\40\x65\63\70\x5f\x64\x75\x70\154\x69\143\x61\164\145\x63\x68\x65\x63\153\137\x65\x33\x38\x5f\146\157\x75\156\144\144\x75\160\154\151\143\141\164\145\x73\40\x4f\116\40\x65\63\x38\137\x64\x75\x70\154\151\x63\141\x74\145\x63\x68\x65\143\x6b\x5f\x65\63\x38\137\146\157\x75\x6e\x64\144\165\160\154\x69\x63\141\x74\x65\163\56\145\x33\70\x5f\x66\x6f\165\156\x64\x64\165\160\x6c\151\x63\x61\x74\x65\x73\x5f\151\144\40\x3d\x20\145\63\70\x5f\146\157\165\156\144\144\x75\160\x6c\151\x63\141\x74\x65\163\56\x69\144\40\40\12\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\40\40\x20\40\40\x20\x20\40\40\x20\40\x20\112\x4f\111\x4e\40\145\x33\x38\x5f\144\x75\160\154\x69\143\x61\164\145\x63\x68\145\143\153\x20\x4f\116\40\x65\63\x38\137\x64\x75\x70\x6c\151\x63\141\164\145\x63\150\x65\x63\153\137\x65\x33\70\137\x66\x6f\x75\156\x64\144\x75\160\x6c\x69\143\x61\164\145\x73\56\x65\63\x38\137\x64\165\x70\x6c\x69\143\x61\x74\x65\143\x68\x65\x63\x6b\x5f\x69\x64\40\75\40\x65\x33\70\137\x64\165\x70\154\151\143\141\x74\x65\x63\150\145\x63\153\56\x69\x64\xa\x20\40\x20\40\40\x20\40\40\40\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x57\110\x45\122\105\40\12\40\40\40\40\40\x20\x20\40\x20\40\x20\40\x20\40\40\x20\11\x20\x20\x20\40\145\x33\x38\x5f\144\x75\x70\x6c\151\x63\x61\164\x65\143\150\145\x63\x6b\56\144\165\x70\154\x69\143\x61\x74\145\x5f\146\151\x6e\144\145\162\137\x70\162\157\143\x65\163\163\137\151\x64\x20\75\x20\x27{$process_data["\x69\x64"]}\47\x20\xa\40\x20\40\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\40\x20\101\116\x44\40\145\x33\x38\137\x64\165\x70\x6c\151\x63\x61\x74\145\x63\150\145\x63\x6b\x5f\x65\63\70\137\146\x6f\x75\x6e\144\144\x75\160\154\x69\143\x61\164\x65\x73\x2e\145\x33\x38\x5f\x66\157\x75\156\144\144\165\x70\x6c\x69\x63\x61\x74\x65\x73\x5f\151\144\x20\x3d\x20\47{$found_duplicates_id}\47\xa\40\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\40"); n0PXp: if (!($row = $db->fetchByAssoc($existing_relation))) { goto Nin2q; } return false; goto n0PXp; Nin2q: $guid1 = Uuid::uuid1(); $now = (new SugarDateTime())->asDb(); $relate1 = $db->query("\xa\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\111\x4e\x53\105\122\124\x20\111\x4e\124\117\x20\x65\x33\x38\137\x64\165\x70\x6c\151\x63\x61\x74\145\x63\150\145\143\153\x5f\x65\x33\x38\x5f\x66\x6f\x75\156\x64\144\165\x70\154\151\x63\x61\x74\x65\163\40\x28\151\x64\54\40\145\63\70\x5f\144\165\x70\154\151\143\x61\164\145\143\150\145\x63\153\137\151\x64\x2c\x20\x65\63\70\137\x66\157\x75\x6e\144\x64\165\x70\154\x69\x63\141\x74\x65\x73\x5f\x69\144\54\x20\144\x61\164\x65\137\155\157\144\x69\146\151\145\144\x29\xa\x20\40\40\40\x20\x20\40\x20\x20\40\x20\40\x56\101\x4c\125\x45\x53\x20\50\x27{$guid1}\x27\x2c\x20\x27{$duplicate_check_bean_1_id}\47\54\x20\x27{$found_duplicates_id}\x27\x2c\40\x27{$now}\47\x29\12\x20\x20\x20\40\x20\40\x20\40"); $guid2 = Uuid::uuid1(); $relate2 = $db->query("\12\40\x20\40\40\40\x20\40\40\40\x20\40\40\x49\116\123\105\122\x54\40\111\x4e\x54\117\40\x65\63\x38\137\x64\x75\x70\154\151\143\141\164\145\143\x68\145\x63\153\x5f\x65\x33\70\137\146\x6f\165\x6e\x64\x64\x75\x70\x6c\x69\143\141\x74\x65\163\40\50\151\x64\54\40\x65\x33\x38\x5f\144\165\x70\154\x69\x63\x61\164\145\x63\x68\145\x63\153\x5f\x69\144\x2c\x20\145\x33\70\x5f\x66\x6f\x75\156\144\x64\165\x70\154\x69\x63\x61\164\145\163\x5f\x69\144\54\x20\144\141\164\x65\137\155\x6f\x64\151\146\151\x65\x64\x29\12\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\126\101\x4c\125\x45\x53\x20\50\x27{$guid2}\47\x2c\40\x27{$duplicate_check_bean_2_id}\47\x2c\x20\x27{$found_duplicates_id}\x27\x2c\40\47{$now}\x27\x29\xa\40\40\40\x20\x20\40\40\x20"); return $relate1; } public static function autoMergeDuplicates($original_bean, $duplicate_bean, $duplicate_pair_id) { try { $history = array("\156\141\x6d\x65" => $duplicate_bean->name, "\x6d\157\144\165\x6c\x65" => $duplicate_bean->module_name); $db_fields_list = array_merge($original_bean->column_fields, $original_bean->additional_column_fields); foreach ($db_fields_list as $field_name) { if (!(is_object($original_bean->{$field_name}) || is_array($original_bean->{$field_name}))) { goto TEZmJ; } goto x1s1x; TEZmJ: if (!empty($duplicate_bean->{$field_name})) { goto wDQgc; } goto x1s1x; wDQgc: if (empty($original_bean->{$field_name})) { goto fKA4d; } $history[$field_name] = $duplicate_bean->{$field_name}; goto MY3Pp; fKA4d: $original_bean->{$field_name} = $duplicate_bean->{$field_name}; MY3Pp: x1s1x: } VBDzl: $original_bean->e38_ignore_find_duplicates_check = true; $original_bean->save(); $link_fields = $original_bean->get_linked_fields(); $ignore_links = array("\x6d\157\x64\151\146\151\x65\x64\137\x75\163\145\x72\x5f\x6c\151\156\153", "\x63\x72\145\141\x74\x65\144\x5f\142\x79\137\x6c\151\x6e\x6b", "\x74\145\x61\155\163", "\x65\155\x61\x69\154\x73", "\145\x6d\141\151\154\137\x61\144\x64\x72\145\x73\x73\x65\x73\137\160\x72\151\155\141\162\171", "\145\155\141\151\x6c\137\141\x64\x64\x72\x65\x73\163\x65\x73"); foreach ($link_fields as $link_name => $link_data) { if (!in_array($link_name, $ignore_links)) { goto btm0d; } goto IwGRC; btm0d: if (!isset($link_data["\144\165\160\154\x69\x63\x61\164\x65\x5f\x6d\145\162\147\x65"])) { goto RBbsy; } if (!($link_data["\x64\x75\x70\154\151\143\x61\164\x65\137\155\x65\x72\x67\145"] == "\x64\151\x73\x61\x62\x6c\x65\x64" && $link_data["\144\x75\160\154\x69\143\141\x74\145\137\155\x65\x72\147\145"] == "\x66\141\x6c\x73\145" && $link_data["\x6e\141\x6d\x65"] == "\141\163\163\x69\147\x6e\145\x64\137\165\x73\x65\162\137\x6c\151\156\153")) { goto wOxGA; } goto IwGRC; wOxGA: RBbsy: if (!($link_name == "\x61\143\x63\157\x75\x6e\164\163" && $original_bean->module_name == "\x4f\x70\x70\x6f\x72\x74\165\x6e\151\164\151\x65\x73")) { goto OL0RF; } goto IwGRC; OL0RF: if ($duplicate_bean->load_relationship($link_name)) { goto F4hNO; } goto IwGRC; F4hNO: $related_beans = $duplicate_bean->{$link_name}->get(); if (!($related_beans && $original_bean->load_relationship($link_name))) { goto TsMa3; } foreach ($related_beans as $related_id) { if (is_object($original_bean->{$link_name})) { goto Dqo91; } $original_bean->load_relationship($link_name); Dqo91: $original_bean->{$link_name}->add($related_id); HC1nh: } kfpWD: TsMa3: IwGRC: } kspy9: self::handleEmailMerge($original_bean, $duplicate_bean, "\x65\x6d\x61\x69\x6c\137\x61\x64\144\162\145\x73\163\x65\163"); $duplicate_bean->mark_deleted($duplicate_bean->id); self::createMergedDuplicateRecord($duplicate_bean, $original_bean); } catch (Exception $exception) { $GLOBALS["\154\157\x67"]->fatal("\x44\145\x44\x75\160\151\x74\40\x61\165\164\157\x4d\145\162\147\x65\x44\x75\x70\x6c\x69\x63\x61\164\145\163\x20\146\141\151\x6c\145\x64\41"); $GLOBALS["\154\x6f\147"]->fatal($exception->getMessage()); } } public static function createMergedDuplicateRecord($duplicate_bean, $original_bean, $duplicate_finder_process_id) { try { global $db; $duplicate_bean_array = (array) $duplicate_bean; foreach ($duplicate_bean_array as $property => &$value) { if (!(is_array($value) || is_object($value) || empty($value))) { goto E6S_E; } unset($duplicate_bean_array[$property]); E6S_E: noHYa: } nwk7J: $history = json_encode($duplicate_bean_array); $history = $db->quote($history); $system_user = BeanFactory::newBean("\125\163\x65\162\163"); $system_user->getSystemUser(); $id = Uuid::uuid1(); $now = (new SugarDateTime())->asDb(); $merging_process = BeanFactory::getBean("\105\63\x38\137\x44\x75\x70\x6c\x69\143\141\164\145\x46\x69\156\x64\x65\162\120\x72\157\x63\x65\163\x73", $duplicate_finder_process_id); $insert = $db->query("\xa\40\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\111\116\x53\x45\x52\124\40\111\x4e\x54\x4f\40\145\63\x38\137\x6d\145\162\147\x65\144\144\x75\x70\x6c\151\143\x61\x74\x65\163\40\x28\x69\x64\x2c\x20\144\141\x74\x65\x5f\145\x6e\x74\145\162\145\144\54\40\x64\x61\164\145\137\x6d\157\x64\x69\x66\x69\145\144\x2c\x20\x6d\x6f\144\151\146\151\145\144\137\165\x73\x65\162\137\x69\144\x2c\x20\143\x72\145\x61\164\145\x64\x5f\142\x79\x2c\40\x64\145\x73\143\162\x69\x70\164\151\x6f\x6e\x2c\40\160\162\x69\155\141\x72\171\137\162\x65\x63\157\162\144\137\151\x64\54\40\155\x65\162\x67\145\144\137\x72\145\143\157\x72\144\x5f\151\144\x2c\40\164\x65\x61\x6d\137\x69\144\x2c\40\164\x65\141\155\137\163\145\164\137\151\x64\x2c\x20\141\163\x73\151\147\156\x65\144\137\165\x73\145\x72\x5f\x69\144\54\x20\x66\157\x72\137\155\157\144\165\x6c\x65\54\x20\155\x65\162\147\151\x6e\x67\x5f\160\162\157\143\x65\163\x73\x5f\151\x64\x2c\40\x6d\x65\162\147\x69\x6e\x67\x5f\x70\162\157\143\x65\163\x73\137\156\141\x6d\145\x29\xa\40\40\40\40\40\x20\40\40\x20\40\40\40\126\x41\114\125\105\x53\x20\50\x27{$id}\47\x2c\x20\47{$now}\x27\54\40\x27{$now}\x27\54\x20\47{$system_user->id}\47\54\40\x27{$system_user->id}\x27\54\x20\47{$history}\x27\54\x27{$original_bean->id}\x27\x2c\40\x27{$duplicate_bean->id}\47\54\47{$system_user->team_id}\x27\54\40\47{$system_user->team_set_id}\47\x2c\40\x27{$system_user->id}\47\x2c\x20\x27{$original_bean->module_name}\x27\x2c\x20\x27{$merging_process->id}\47\x2c\47{$merging_process->name}\x27\51\12\x20\40\x20\x20\x20\40\x20\40"); if ($insert) { goto GGe4H; } $GLOBALS["\x6c\157\x67"]->fatal("\104\x65\104\x75\x70\x69\x74\40\143\162\145\x61\x74\145\x4d\145\x72\147\x65\144\x44\165\160\154\x69\x63\141\x74\x65\122\145\143\157\x72\x64\40\x66\141\x69\x6c\x65\144\x20\164\157\40\x69\x6e\x73\145\162\164\x20\151\x6e\164\x6f\40\104\x42\41"); GGe4H: } catch (Exception $exception) { $GLOBALS["\154\x6f\x67"]->fatal("\x44\x65\x44\165\160\x69\164\40\143\x72\x65\141\164\145\115\145\x72\x67\x65\x64\104\x75\x70\x6c\151\143\x61\x74\145\122\x65\143\x6f\x72\x64\40\x66\x61\x69\154\145\144\41"); $GLOBALS["\x6c\x6f\147"]->fatal($exception->getMessage()); } } public static function clearOutDuplicates($bean, $duplicates, $process_data) { global $db; if ($duplicates) { goto IyFD6; } $delete_old_relations = $db->query("\12\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\40\40\40\x20\x20\x44\105\x4c\105\x54\105\x20\x65\x33\70\137\x64\x75\160\154\x69\143\x61\x74\x65\143\x68\145\143\x6b\137\145\63\70\x5f\146\157\165\156\144\144\x75\160\154\x69\143\x61\164\145\x73\x2c\x20\x65\x33\x38\137\146\x6f\x75\156\x64\144\x75\160\x6c\x69\x63\x61\164\145\x73\12\x20\x20\x20\40\x20\x20\40\40\40\40\40\40\40\x20\x20\40\106\122\117\x4d\x20\145\x33\x38\x5f\144\165\x70\x6c\151\x63\141\x74\145\x63\x68\145\x63\153\137\x65\x33\x38\137\146\x6f\x75\x6e\x64\144\165\x70\154\151\x63\x61\164\x65\163\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\xa\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\x20\40\x20\40\x20\x49\x4e\x4e\105\x52\x20\112\117\111\x4e\40\x65\x33\x38\137\146\157\x75\156\144\144\x75\160\154\x69\143\141\x74\x65\163\40\117\116\x20\x65\63\x38\137\x64\x75\x70\154\151\x63\x61\164\x65\143\150\145\x63\153\x5f\145\63\x38\137\146\x6f\165\x6e\x64\144\x75\160\154\x69\x63\141\x74\145\163\x2e\x65\x33\x38\x5f\146\157\165\156\x64\x64\165\x70\154\151\143\141\x74\145\x73\x5f\151\x64\x20\75\40\145\63\x38\137\x66\x6f\x75\156\x64\x64\165\160\154\x69\143\x61\x74\145\x73\x2e\151\x64\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\40\40\x20\x20\40\40\40\x20\12\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\40\x49\x4e\116\105\x52\x20\x4a\x4f\111\116\40\145\x33\70\x5f\x64\165\x70\154\151\x63\x61\164\x65\143\x68\145\143\153\40\x4f\116\40\x65\x33\x38\137\144\165\x70\154\151\143\x61\x74\x65\x63\150\145\143\x6b\137\x65\63\x38\x5f\146\x6f\165\156\144\144\165\x70\x6c\151\143\141\x74\x65\163\56\145\63\70\x5f\x64\165\x70\154\151\143\x61\164\x65\143\150\145\143\153\x5f\x69\x64\x20\x3d\40\145\x33\x38\x5f\x64\x75\160\154\x69\x63\141\164\145\x63\x68\x65\x63\x6b\56\151\x64\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\40\x20\12\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\40\40\40\40\127\110\105\x52\105\40\x28\x65\63\70\137\146\157\x75\x6e\144\144\x75\160\154\151\x63\141\164\145\x73\56\144\165\x70\x6c\x69\x63\141\x74\145\x5f\x72\x65\x63\157\162\x64\x5f\x69\x64\137\x31\40\75\x20\x27{$bean->id}\47\40\117\x52\40\145\x33\x38\x5f\146\157\165\156\144\144\x75\x70\154\x69\143\x61\164\145\163\x2e\x64\x75\160\154\x69\143\x61\164\145\137\x72\145\143\157\162\144\x5f\x69\x64\137\x32\x20\x3d\40\47{$bean->id}\x27\x29\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\xa\40\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\x41\x4e\x44\40\x65\63\70\x5f\144\165\x70\154\151\x63\141\164\x65\x63\x68\145\143\x6b\56\x64\x75\x70\x6c\151\x63\141\164\145\x5f\146\x69\156\x64\145\x72\x5f\160\162\157\x63\145\x73\x73\x5f\x69\x64\x20\75\x20\x27{$process_data["\x69\144"]}\x27\x20\x20\xa\x20\40\40\40\x20\40\40\x20\40\x20\40\40"); IyFD6: } public static function handleEmailMerge($original_bean, $duplicate_bean, $linkFieldName) { $duplicate_bean->load_relationship($linkFieldName); $emailAddresses = $duplicate_bean->{$linkFieldName}->get(); $mrgArray = array(); $existingData = $emailAddresses; $original_bean->load_relationship($linkFieldName); $exData = $original_bean->{$linkFieldName}->get(); if (!(!is_array($existingData) || empty($existingData))) { goto qXOqV; } return; qXOqV: $exEmailQuery = "\x53\145\154\x65\x63\x74\x20\151\x64\54\40\x65\155\x61\151\x6c\137\x61\x64\144\162\x65\163\x73\x20\146\x72\157\x6d\40\145\x6d\x61\x69\x6c\137\x61\x64\144\x72\145\x73\x73\x65\x73\x20\167\x68\x65\x72\x65\40\x69\x64\40\151\156\40\50"; $first = true; foreach ($exData as $id) { if ($first) { goto y4Ppv; } $exEmailQuery .= "\54\40\47{$id}\47\40"; $first = false; goto l4uqr; y4Ppv: $exEmailQuery .= "\x20\47{$id}\x27\x20"; $first = false; l4uqr: BybLl: } UHcQm: $exEmailQuery .= "\51"; $exResult = $original_bean->db->query($exEmailQuery); BQD3C: if (!(($row = $original_bean->db->fetchByAssoc($exResult)) != null)) { goto G9XP5; } $existingEmails[$row["\151\144"]] = $row["\145\155\141\x69\x6c\x5f\141\144\144\x72\x65\x73\163"]; goto BQD3C; G9XP5: $newEmailQuery = "\x53\x65\154\x65\x63\x74\x20\151\144\54\x20\145\x6d\141\151\x6c\x5f\141\144\144\x72\x65\x73\163\x20\146\162\157\x6d\x20\145\155\x61\151\154\x5f\x61\144\x64\162\145\163\163\x65\163\x20\x77\150\145\x72\145\x20\151\x64\40\151\x6e\x20\x28"; $first = true; foreach ($existingData as $id) { if ($first) { goto qeDjR; } $newEmailQuery .= "\x2c\x20\47{$id}\x27\40"; $first = false; goto BHKbp; qeDjR: $newEmailQuery .= "\x20\47{$id}\47\40"; $first = false; BHKbp: JdfTT: } vLXXl: $newEmailQuery .= "\x29"; $newResult = $original_bean->db->query($newEmailQuery); YXmK1: if (!(($row = $original_bean->db->fetchByAssoc($newResult)) != null)) { goto tCWiZ; } $newEmails[$row["\x69\144"]] = $row["\x65\155\x61\x69\154\x5f\x61\144\144\x72\x65\x73\163"]; goto YXmK1; tCWiZ: foreach ($newEmails as $k => $n) { if (in_array($n, $existingEmails)) { goto aZ9P8; } $mrgArray[$k] = $n; aZ9P8: jCHA9: } sCBBD: foreach ($mrgArray as $related_id => $related_val) { $original_bean->{$linkFieldName}->add($related_id); C8raI: } jl1jN: } }