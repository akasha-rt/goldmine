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
 
  class DeDupitAfterDelete { var $excluded_modules = array("\101\x63\164\151\x76\x69\x74\151\145\x73", "\x53\x75\142\163\143\x72\x69\x70\164\151\157\156\x73", "\x45\63\x38\x5f\104\165\160\154\x69\143\141\x74\145\106\151\x6e\144\x65\x72\x50\x72\x6f\x63\x65\163\x73", "\105\63\x38\x5f\104\x75\x70\154\x69\x63\141\x74\145\x43\150\x65\143\153", "\x45\63\x38\x5f\106\157\x75\156\144\x44\165\160\154\151\x63\x61\164\145\x73", "\x45\63\70\x5f\x4d\x65\x72\147\x65\x64\x44\165\160\154\x69\x63\x61\164\145\163", "\x44\x61\163\x68\x62\157\x61\x72\x64\163", "\125\x73\145\162\x50\162\145\x66\145\x72\x65\x6e\143\145\163", "\123\143\150\x65\x64\165\154\145\x72\x73\112\157\x62\163", "\x48\157\155\145", "\x43\x61\154\145\156\x64\x61\x72", "\x44\141\x74\x61\120\x72\151\x76\141\143\171", "\113\102\x43\157\x6e\x74\x65\x6e\x74\x73", "\x4f\x41\165\164\150\x54\157\x6b\145\x6e\x73"); public function deleteRelatedDeDupitRecords(SugarBean $bean, $event, $arguments) { if (!($event != "\x61\x66\164\145\162\x5f\x64\x65\154\145\164\145")) { goto rMOlk; } return; rMOlk: $bean_module_name = $bean->getModuleName(); if (!in_array($bean_module_name, $this->excluded_modules)) { goto RWS0l; } return; RWS0l: $sql = new SugarQuery(); $sql->select("\x69\x64"); $sql->from(BeanFactory::newBean("\105\63\70\x5f\104\165\160\154\x69\x63\141\164\x65\x46\x69\x6e\x64\x65\x72\x50\162\157\x63\145\163\163")); $sql->where()->equals("\x66\157\x72\137\155\157\144\165\x6c\x65", $bean_module_name); if (!empty($sql->execute())) { goto msIXt; } return; msIXt: $found_duplicates = $GLOBALS["\x64\x62"]->query("\xa\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\x53\x45\114\105\x43\124\x20\151\144\40\xa\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\106\122\117\115\x20\145\x33\x38\137\x66\x6f\165\156\x64\144\165\x70\x6c\151\143\141\164\x65\163\xa\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\40\127\x48\105\122\x45\40\x64\165\x70\154\x69\x63\x61\164\x65\x5f\162\145\x63\x6f\162\x64\x5f\x69\144\137\61\40\x3d\40\x27{$bean->id}\47\x20\x4f\122\x20\x64\x75\x70\154\x69\143\141\164\x65\x5f\x72\145\x63\157\x72\144\137\151\x64\x5f\x32\40\75\x20\x27{$bean->id}\x27\73\x20\40\xa\x20\x20\40\40\40\x20\x20\40"); $found_duplicates_ids = ''; sypwZ: if (!($row = $GLOBALS["\144\142"]->fetchByAssoc($found_duplicates))) { goto Hc3v9; } $found_duplicates_ids .= "\47{$row["\x69\x64"]}\x27\54"; goto sypwZ; Hc3v9: $found_duplicates_ids = rtrim($found_duplicates_ids, "\54"); $GLOBALS["\144\142"]->query("\xa\40\x20\40\x20\40\40\40\x20\40\40\40\x20\x44\x45\x4c\105\x54\105\40\x46\122\x4f\115\x20\145\63\x38\137\146\157\165\x6e\144\x64\x75\160\154\x69\143\141\x74\145\x73\12\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\x57\x48\x45\122\x45\x20\144\165\160\x6c\151\143\x61\164\x65\137\x72\145\x63\x6f\x72\144\137\x69\x64\137\61\x20\x3d\40\x27{$bean->id}\47\40\x4f\x52\x20\144\165\x70\154\151\143\x61\x74\x65\x5f\162\145\x63\157\x72\144\x5f\151\x64\x5f\x32\40\x3d\x20\47{$bean->id}\47\x3b\40\40\12\x20\x20\x20\x20\x20\40\x20\40"); if (!$found_duplicates_ids) { goto n65PR; } $GLOBALS["\x64\x62"]->query("\xa\x20\40\40\x20\40\40\40\x20\40\x20\x20\40\x44\x45\x4c\x45\x54\105\x20\x46\x52\x4f\115\40\145\63\x38\137\144\x75\x70\x6c\x69\143\141\x74\145\143\150\145\143\x6b\137\x65\x33\70\x5f\146\x6f\x75\x6e\x64\x64\x75\x70\154\x69\143\x61\164\x65\x73\xa\x20\x20\40\x20\40\40\40\x20\x20\40\x20\x20\x57\110\x45\122\x45\40\145\x33\70\x5f\x66\x6f\165\x6e\x64\144\165\x70\x6c\x69\143\x61\x74\x65\x73\x5f\x69\x64\x20\111\x4e\x20\50{$found_duplicates_ids}\x29\x3b\40\40\12\x20\40\40\40\40\40\40\40"); n65PR: $GLOBALS["\144\142"]->query("\xa\x20\40\x20\40\x20\40\40\x20\x20\40\x20\40\x44\x45\114\105\x54\105\x20\x46\x52\117\x4d\40\x65\63\x38\x5f\144\x75\x70\x6c\151\143\x61\x74\145\143\150\145\143\x6b\xa\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x57\110\105\122\105\40\162\x65\x63\x6f\162\144\137\x69\144\40\75\x20\47{$bean->id}\x27\x3b\40\x20\xa\x20\x20\x20\40\x20\40\40\40"); } }
