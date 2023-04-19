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
 
  class DuplicateFinderProcessAPI extends SugarApi { public function registerApiRest() { return array("\147\x65\164\x53\143\141\x6e\120\162\x6f\x67\162\x65\x73\163" => array("\x72\x65\x71\124\x79\160\x65" => "\x47\x45\124", "\160\x61\164\x68" => array("\x44\x75\160\154\151\x63\x61\x74\x65\106\151\x6e\x64\x65\x72\x50\x72\157\143\145\163\x73", "\163\x63\x61\156\55\160\x65\162\x63\145\156\x74\141\147\145", "\x3f"), "\160\141\x74\x68\126\141\x72\163" => array("\160\x72\145\146\151\170", "\141\x63\x74\x69\x6f\x6e", "\160\162\157\x63\x65\163\x73\x5f\x69\144"), "\155\x65\164\x68\157\144" => "\x67\145\164\x53\143\141\156\x50\x72\x6f\x67\x72\145\x73\x73")); } public function getScanProgress($api, $args) { if (!empty($args["\160\x72\157\x63\x65\163\163\137\x69\144"])) { goto jM4NV; } return array("\x73\x75\x63\x63\145\163\x73" => false, "\155\145\x73\x73\141\x67\x65" => translate("\x4e\x54\106\137\116\117\137\x50\122\117\x43\105\123\123\x5f\x49\104", "\105\x33\x38\x5f\x44\165\160\x6c\151\x63\x61\164\145\x46\151\x6e\x64\x65\x72\x50\x72\x6f\x63\145\163\163")); jM4NV: $process_bean = BeanFactory::getBean("\x45\x33\x38\137\104\x75\x70\x6c\151\143\x61\164\x65\106\151\156\x64\145\162\120\x72\x6f\x63\x65\x73\x73", $args["\x70\x72\157\143\145\x73\163\137\x69\144"]); if (!empty($process_bean->id)) { goto Oz1se; } return array("\x73\165\143\x63\x65\163\x73" => false, "\155\145\163\x73\141\147\145" => translate("\116\124\x46\137\x4e\117\137\x50\122\x4f\103\x45\123\x53\137\102\x45\101\x4e", "\105\x33\x38\x5f\x44\x75\x70\x6c\x69\143\x61\164\x65\x46\151\156\x64\x65\x72\120\x72\157\143\x65\x73\163")); Oz1se: $for_module_bean = BeanFactory::getBean($process_bean->for_module); if ($for_module_bean) { goto xOzMG; } return array("\163\x75\143\x63\x65\163\163" => false, "\155\145\x73\163\x61\147\145" => translate("\116\124\x46\x5f\x4e\x4f\x5f\x46\x4f\122\x5f\115\x4f\104\125\x4c\x45\137\x42\x45\x41\x4e", "\x45\x33\x38\x5f\104\165\x70\154\151\x63\x61\164\145\x46\151\156\x64\x65\162\x50\162\x6f\x63\x65\x73\163")); xOzMG: $for_module_table = $for_module_bean->getTableName(); $count_records = $GLOBALS["\x64\142"]->query("\x53\x45\x4c\105\x43\x54\x20\143\157\x75\156\x74\50\52\51\x20\101\x53\40\x61\x6c\x6c\137\x72\145\x63\x6f\162\x64\163\40\x46\x52\x4f\x4d\40{$for_module_table}\x20\127\110\x45\x52\105\x20\x64\x65\x6c\x65\x74\x65\x64\40\x3d\x20\60\x3b"); $result = $GLOBALS["\144\142"]->fetchByAssoc($count_records); $all_records = $result["\141\154\x6c\137\162\x65\x63\x6f\x72\x64\163"]; if ($all_records) { goto niM4v; } return array("\163\165\143\x63\145\x73\163" => false, "\155\145\x73\x73\141\147\145" => translate("\116\x54\x46\x5f\101\x4c\114\137\x52\105\x43\117\x52\x44\123\x5f\x4d\111\x53\x53\x49\x4e\x47", "\x45\x33\70\x5f\104\x75\160\154\x69\x63\141\x74\x65\106\x69\x6e\144\145\x72\x50\162\157\143\145\163\x73")); niM4v: $all_checks_query = $GLOBALS["\x64\142"]->query("\xa\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\x53\x45\114\x45\x43\124\x20\x63\x6f\165\x6e\x74\50\52\51\x20\x41\123\40\x61\154\x6c\x5f\143\150\145\x63\153\x73\x20\12\40\40\40\40\40\x20\40\40\40\40\x20\x20\106\x52\117\115\x20\x65\63\70\x5f\x64\x75\160\154\x69\143\141\x74\145\143\150\145\143\x6b\40\12\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\x57\110\105\122\x45\x20\144\x65\x6c\145\164\x65\144\40\x3d\40\x30\12\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\101\x4e\104\x20\x64\165\x70\154\151\x63\141\x74\145\x5f\146\x69\x6e\144\145\x72\137\160\x72\x6f\x63\145\x73\x73\x5f\x69\x64\x20\x3d\40\x27{$args["\x70\x72\x6f\143\145\163\163\x5f\151\x64"]}\47\xa\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\73"); $all_checks = $GLOBALS["\144\142"]->fetchByAssoc($all_checks_query); $all_checks = $all_checks["\141\154\x6c\x5f\143\x68\145\143\x6b\x73"]; $percentage = 0; if (!$all_checks) { goto x0KDM; } $percentage = $all_checks / $all_records * 100; x0KDM: if (!($percentage > 100)) { goto NcQwP; } $percentage = 100; NcQwP: return array("\163\x75\x63\x63\x65\163\163" => true, "\160\x72\x6f\147\x72\145\163\x73" => round($percentage, 0)); } }
