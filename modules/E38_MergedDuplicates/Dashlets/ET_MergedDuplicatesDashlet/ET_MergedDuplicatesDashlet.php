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
 
  if (!(!defined("\x73\165\x67\141\162\105\x6e\x74\162\171") || !sugarEntry)) { goto Gt8CJ; } die("\x4e\157\164\40\101\40\126\x61\x6c\151\x64\x20\x45\156\164\162\x79\x20\120\157\x69\156\164"); Gt8CJ: require_once "\x69\156\x63\154\165\x64\145\x2f\x44\x61\x73\150\154\x65\x74\x73\57\104\141\x73\x68\x6c\x65\164\x47\x65\x6e\x65\x72\151\143\56\160\x68\x70"; require_once "\x6d\x6f\144\165\x6c\145\x73\x2f\x45\63\70\x5f\x4d\145\162\x67\145\144\x44\165\x70\154\x69\143\x61\164\x65\x73\x2f\105\x33\x38\137\x4d\x65\162\x67\145\144\x44\165\160\x6c\151\143\x61\x74\x65\x73\56\160\150\160"; class E38_MergedDuplicatesDashlet extends DashletGeneric { public function __construct($id, $def = null) { global $current_user, $app_strings; require "\155\157\x64\x75\154\x65\x73\57\105\x33\x38\x5f\x4d\145\x72\147\145\144\104\165\160\x6c\151\143\x61\x74\145\x73\x2f\x6d\145\164\141\144\x61\164\x61\x2f\144\x61\163\150\154\x65\x74\166\x69\145\167\x64\145\146\x73\56\160\x68\160"; parent::__construct($id, $def); if (!empty($def["\164\x69\x74\x6c\145"])) { goto OYoNY; } $this->title = translate("\114\x42\114\x5f\110\x4f\115\105\x50\x41\x47\105\x5f\124\111\124\x4c\105", "\105\63\70\137\115\145\162\147\145\144\104\165\160\154\151\143\x61\164\x65\x73"); OYoNY: $this->searchFields = $dashletData["\x45\63\70\137\115\x65\162\x67\x65\144\x44\x75\160\x6c\x69\143\x61\x74\145\x73\104\x61\x73\150\x6c\145\164"]["\163\145\x61\x72\143\150\106\151\145\x6c\x64\x73"]; $this->columns = $dashletData["\x45\x33\x38\137\115\145\162\x67\x65\x64\x44\165\160\154\151\x63\141\164\x65\163\104\141\x73\150\154\x65\164"]["\x63\x6f\x6c\165\x6d\x6e\163"]; $this->seedBean = new E38_MergedDuplicates(); } }
