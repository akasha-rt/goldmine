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
 
  class DeDupitHookLogic { public function ignoreOtherPairs($foud_dups_bean, $event, $args) { if (!($event != "\141\x66\x74\x65\162\137\x73\141\x76\x65")) { goto lfZlZ; } return; lfZlZ: if (!(empty($args["\144\141\x74\141\x43\x68\141\156\x67\x65\x73"]["\151\x67\156\x6f\162\145\137\160\x61\151\162"]) || !$args["\144\141\x74\x61\103\x68\141\156\x67\145\x73"]["\x69\147\156\157\x72\145\137\160\x61\151\162"]["\141\x66\x74\x65\162"])) { goto dkY7p; } return; dkY7p: $ignore_all_pairs = $GLOBALS["\144\x62"]->query("\xa\40\40\40\40\40\40\40\40\40\x20\x20\x20\40\40\40\40\125\x50\x44\101\124\x45\40\x65\63\x38\x5f\146\x6f\x75\156\144\144\165\x70\154\151\143\x61\x74\x65\163\xa\40\40\x20\40\x20\40\40\x20\x20\40\x20\40\40\40\40\40\123\x45\x54\40\x69\147\x6e\x6f\162\x65\137\x70\x61\x69\x72\40\75\40\61\40\40\x20\40\x20\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\40\xa\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\x20\40\40\x57\110\x45\x52\105\x20\50\145\x33\70\137\146\157\x75\x6e\144\x64\x75\x70\x6c\x69\143\x61\164\145\x73\x2e\144\x75\x70\x6c\x69\x63\x61\164\x65\x5f\162\x65\143\x6f\162\x64\x5f\151\x64\137\x31\x20\x3d\x20\x27{$foud_dups_bean->duplicate_record_id_1}\x27\x20\x41\116\104\x20\x65\x33\x38\x5f\146\x6f\165\156\144\x64\x75\x70\x6c\x69\x63\141\x74\145\x73\56\x64\x75\160\154\151\x63\x61\x74\x65\x5f\162\145\x63\x6f\x72\x64\x5f\151\144\137\x32\40\x3d\x20\47{$foud_dups_bean->duplicate_record_id_2}\47\51\40\117\x52\x20\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x20\40\x20\40\40\40\x20\40\40\40\40\x20\40\40\40\40\x20\40\x20\x20\40\12\x20\40\40\40\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\x20\40\40\x20\40\40\x28\145\x33\70\137\146\x6f\165\156\x64\x64\x75\160\x6c\151\143\141\164\145\x73\56\144\165\160\x6c\151\x63\141\x74\x65\x5f\162\x65\143\157\x72\x64\x5f\x69\x64\137\62\40\75\x20\x27{$foud_dups_bean->duplicate_record_id_1}\x27\x20\x41\x4e\x44\40\x65\x33\x38\x5f\146\x6f\165\x6e\144\144\165\x70\x6c\x69\x63\141\x74\145\x73\56\144\165\x70\154\x69\x63\x61\164\x65\x5f\162\x65\143\157\x72\x64\x5f\x69\x64\137\x32\40\x3d\x20\x27{$foud_dups_bean->duplicate_record_id_1}\47\x29\x20\40\x20\40\x20\12\x20\x20\40\40\x20\40\x20\40\40\40\40\x20"); } }
