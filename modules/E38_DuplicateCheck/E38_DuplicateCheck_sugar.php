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
 
  class E38_DuplicateCheck_sugar extends Basic { public $new_schema = true; public $module_dir = "\x45\x33\70\x5f\x44\x75\160\154\151\x63\x61\164\145\103\x68\145\143\153"; public $object_name = "\105\63\70\x5f\104\x75\160\154\151\x63\x61\x74\x65\x43\150\145\x63\153"; public $table_name = "\145\x33\70\137\x64\165\160\154\x69\143\x61\164\x65\143\x68\145\143\153"; public $importable = false; public $team_id; public $team_set_id; public $team_count; public $team_name; public $team_link; public $team_count_link; public $teams; public $assigned_user_id; public $assigned_user_name; public $assigned_user_link; public $tag; public $tag_link; public $id; public $name; public $date_entered; public $date_modified; public $modified_user_id; public $modified_by_name; public $created_by; public $created_by_name; public $description; public $deleted; public $created_by_link; public $modified_user_link; public $activities; public $following; public $following_link; public $my_favorite; public $favorite_link; public $module_name; public $record_id; public $check_for_duplicates; public function E38_DuplicateCheck_sugar() { self::__construct(); } public function __construct() { parent::__construct(); } public function bean_implements($interface) { switch ($interface) { case "\101\103\114": return true; } sQwom: oyEuu: return false; } }
