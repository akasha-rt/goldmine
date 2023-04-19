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
 
  class DeDupitAfterSave { static $active_processes = null; var $excluded_modules = array("\x41\143\x74\x69\166\x69\x74\x69\145\163", "\x53\x75\x62\163\143\x72\151\160\x74\x69\x6f\156\x73", "\x45\x33\x38\137\104\x75\x70\x6c\151\x63\x61\164\x65\x46\x69\x6e\144\x65\x72\120\x72\157\x63\x65\x73\x73", "\x45\63\x38\x5f\104\x75\160\154\x69\143\x61\x74\x65\x43\x68\x65\x63\x6b", "\105\63\70\137\106\x6f\x75\x6e\x64\104\x75\x70\x6c\x69\143\x61\164\145\x73", "\105\x33\x38\137\x4d\145\162\147\145\144\104\165\160\154\x69\x63\141\x74\x65\x73", "\x44\x61\163\150\x62\157\x61\162\x64\x73", "\125\x73\145\x72\120\162\x65\146\145\x72\x65\x6e\x63\x65\x73", "\123\x63\x68\x65\144\165\154\145\x72\x73\x4a\157\142\163", "\110\157\x6d\x65", "\103\141\x6c\145\x6e\144\x61\162", "\x44\141\164\x61\120\162\151\166\141\x63\171", "\x4b\102\x43\157\156\164\x65\x6e\164\163", "\x4f\x41\x75\164\x68\124\x6f\153\145\156\163"); function checkForDuplicates(SugarBean $bean, $event, $arguments) { if (!($event != "\141\146\164\x65\x72\x5f\163\x61\166\145")) { goto g14LC; } return; g14LC: if (!property_exists($bean, "\x65\x33\70\x5f\x69\147\x6e\157\x72\x65\x5f\x66\151\156\144\137\144\x75\x70\154\x69\x63\x61\x74\145\x73\137\x63\x68\145\143\153")) { goto GEs2q; } return; GEs2q: $bean_module_name = $bean->getModuleName(); if (!in_array($bean_module_name, $this->excluded_modules)) { goto Lmg21; } return; Lmg21: if (!(self::$active_processes === null)) { goto tbD5t; } $sql = new SugarQuery(); $sql->from(BeanFactory::newBean("\105\x33\x38\137\x44\165\160\154\151\x63\141\164\x65\106\x69\156\x64\x65\162\120\162\x6f\143\145\163\x73")); $sql->where()->equals("\141\x63\164\x69\166\x65", "\171\x65\x73"); $sql->distinct(true); self::$active_processes = array(); foreach ($sql->execute() as $finder_process) { self::$active_processes[$finder_process["\x66\x6f\x72\x5f\155\x6f\144\165\154\145"]][] = $finder_process; FG8Ux: } GgiB8: tbD5t: if (!(is_array(self::$active_processes) && !array_key_exists($bean_module_name, self::$active_processes))) { goto O9UB3; } return; O9UB3: $this->updateDuplicatesNames($bean, $arguments); require_once "\x6d\157\x64\x75\154\145\163\57\x45\63\x38\137\x44\x75\160\x6c\x69\143\x61\164\145\106\x69\156\144\145\x72\120\x72\x6f\143\x65\x73\163\x2f\104\x65\x44\165\x70\151\164\127\157\x72\153\145\x72\x2e\160\x68\x70"; foreach (self::$active_processes[$bean_module_name] as $process_data) { DeDupitWorker::findDuplicates($process_data, $bean); wtE0E: } rY1jc: } private function updateDuplicatesNames($bean, $arguments) { global $db; $name_field_def = $bean->field_defs["\156\x61\155\145"]; $name_fields = $name_field_def["\144\142\x5f\143\x6f\x6e\143\x61\164\137\146\x69\x65\x6c\x64\163"] ? array($name_field_def["\144\142\137\143\x6f\x6e\x63\x61\x74\137\x66\x69\x65\x6c\144\163"][0], $name_field_def["\x64\x62\x5f\143\x6f\156\143\141\164\137\146\x69\145\154\144\163"][1]) : array($name_field_def["\156\x61\155\x65"]); $name_changed = !empty(array_intersect_key($arguments["\x64\x61\164\141\x43\150\x61\156\147\145\163"], array_flip($name_fields))); if (!$name_changed) { goto KnK7I; } $bean_name = $db->quote($bean->name); $db->query("\12\40\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\40\40\40\125\x50\104\x41\124\x45\x20\x65\x33\70\x5f\146\157\165\x6e\144\144\165\x70\x6c\x69\x63\141\164\x65\163\40\xa\40\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\123\x45\124\40\x64\x75\x70\154\151\x63\141\x74\145\x5f\x72\145\143\157\x72\144\x5f\61\x5f\156\x61\x6d\x65\40\x3d\40\x27{$bean_name}\x27\40\xa\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\40\40\127\x48\x45\122\x45\x20\144\165\x70\154\x69\x63\141\x74\x65\137\x72\145\x63\157\162\144\x5f\x69\x64\x5f\61\40\x3d\x20\x27{$bean->id}\47\73\40\40\40\x20\40\x20\40\x20\40\40\40\x20\40\x20\xa\x20\x20\x20\x20\40\40\x20\40\x20\40\40\40"); $db->query("\xa\x20\40\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\x55\x50\x44\101\x54\x45\x20\x65\x33\x38\x5f\x66\x6f\x75\156\144\x64\165\x70\154\x69\143\141\164\145\x73\x20\12\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\40\40\x53\x45\124\40\x64\x75\160\154\151\x63\x61\x74\145\137\x72\145\x63\x6f\162\144\x5f\x32\x5f\156\141\155\145\x20\75\x20\x27{$bean_name}\x27\40\xa\40\x20\x20\x20\40\40\x20\40\40\40\40\40\x20\x20\40\x20\127\110\105\122\x45\40\144\165\x70\x6c\x69\143\141\164\145\x5f\162\145\x63\x6f\x72\x64\x5f\x69\144\x5f\x32\x20\x3d\x20\x27{$bean->id}\47\73\x20\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\xa\40\x20\x20\x20\40\40\x20\40\x20\40\40\40"); KnK7I: } }
