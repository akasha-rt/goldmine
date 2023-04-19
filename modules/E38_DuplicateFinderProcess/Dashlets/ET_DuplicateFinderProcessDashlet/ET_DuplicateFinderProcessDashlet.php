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
 
  if (!(!defined("\163\165\x67\141\x72\105\156\x74\162\171") || !sugarEntry)) { goto jOxaB; } die("\116\x6f\x74\40\x41\x20\x56\x61\154\x69\144\40\x45\156\x74\x72\171\x20\120\157\151\156\x74"); jOxaB: require_once "\x69\x6e\143\154\x75\x64\x65\x2f\104\x61\163\150\154\x65\164\x73\x2f\104\x61\x73\x68\154\x65\164\107\145\x6e\145\162\x69\x63\56\160\150\x70"; require_once "\x6d\157\144\x75\154\145\163\57\105\63\70\137\104\x75\x70\154\x69\143\141\x74\x65\x46\151\x6e\144\145\x72\x50\162\157\x63\145\x73\x73\57\105\63\x38\137\x44\x75\160\x6c\x69\143\141\x74\x65\x46\151\x6e\144\145\x72\x50\x72\157\x63\x65\163\x73\56\x70\x68\x70"; class E38_DuplicateFinderProcessDashlet extends DashletGeneric { public function __construct($id, $def = null) { global $current_user, $app_strings; require "\x6d\x6f\144\165\154\145\163\x2f\x45\63\x38\x5f\x44\165\x70\x6c\151\143\x61\x74\145\106\x69\156\144\145\162\120\162\x6f\x63\x65\163\x73\57\155\x65\x74\x61\144\x61\164\x61\57\x64\x61\163\150\154\x65\x74\166\151\145\x77\x64\x65\146\163\x2e\160\x68\160"; parent::__construct($id, $def); if (!empty($def["\x74\151\164\154\145"])) { goto UaaXs; } $this->title = translate("\114\x42\114\137\110\117\x4d\105\x50\101\107\x45\x5f\x54\x49\x54\x4c\x45", "\105\x33\70\x5f\104\165\x70\154\x69\x63\141\x74\145\106\151\x6e\x64\x65\x72\x50\162\x6f\x63\145\163\x73"); UaaXs: $this->searchFields = $dashletData["\105\63\x38\137\104\x75\160\154\x69\x63\141\164\x65\106\151\156\144\145\162\x50\x72\157\143\x65\163\163\x44\x61\x73\150\154\x65\x74"]["\163\145\141\x72\x63\x68\106\x69\x65\154\x64\163"]; $this->columns = $dashletData["\x45\x33\70\137\x44\165\160\x6c\151\x63\x61\x74\145\106\x69\x6e\x64\145\x72\x50\x72\157\x63\x65\x73\163\104\x61\163\150\x6c\145\x74"]["\x63\157\154\x75\x6d\156\x73"]; $this->seedBean = new E38_DuplicateFinderProcess(); } }
