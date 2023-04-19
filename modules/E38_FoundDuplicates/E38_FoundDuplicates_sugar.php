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
 
  class E38_FoundDuplicates_sugar extends Basic { public $new_schema = true; public $module_dir = "\x45\63\x38\137\106\x6f\x75\x6e\144\x44\x75\x70\154\x69\x63\141\x74\x65\x73"; public $object_name = "\x45\63\x38\137\106\157\165\x6e\144\104\x75\160\154\x69\143\x61\164\x65\x73"; public $table_name = "\x65\x33\70\x5f\146\157\165\x6e\144\x64\165\160\x6c\151\143\x61\164\x65\x73"; public $importable = false; public $team_id; public $team_set_id; public $team_count; public $team_name; public $team_link; public $team_count_link; public $teams; public $assigned_user_id; public $assigned_user_name; public $assigned_user_link; public $tag; public $tag_link; public $id; public $name; public $date_entered; public $date_modified; public $modified_user_id; public $modified_by_name; public $created_by; public $created_by_name; public $description; public $deleted; public $created_by_link; public $modified_user_link; public $activities; public $following; public $following_link; public $my_favorite; public $favorite_link; public $duplicate_record_id_1; public $duplicate_record_id_2; public function E38_FoundDuplicates_sugar() { self::__construct(); } public function __construct() { parent::__construct(); } public function bean_implements($interface) { switch ($interface) { case "\101\x43\x4c": return true; } IesTl: hWLWm: return false; } }
