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
 
  if (!(!defined("\163\x75\x67\141\162\x45\x6e\164\162\x79") || !sugarEntry)) { goto Bujtp; } die("\116\157\164\x20\x41\40\126\x61\x6c\x69\144\40\105\156\x74\162\171\x20\x50\x6f\x69\x6e\164"); Bujtp: require_once "\151\156\x63\154\x75\144\x65\57\104\141\x73\150\x6c\x65\x74\163\x2f\x44\x61\163\x68\154\145\x74\x47\x65\x6e\145\162\151\x63\56\160\150\160"; require_once "\155\157\x64\165\154\145\x73\57\105\x33\x38\x5f\104\x75\160\154\x69\x63\141\x74\x65\x43\150\145\x63\x6b\x2f\105\63\70\x5f\x44\x75\x70\x6c\x69\x63\x61\164\x65\x43\x68\x65\143\153\x2e\160\150\x70"; class E38_DuplicateCheckDashlet extends DashletGeneric { public function __construct($id, $def = null) { global $current_user, $app_strings; require "\155\157\144\x75\154\x65\163\x2f\105\x33\70\137\104\165\x70\154\151\143\x61\164\145\103\150\145\143\x6b\57\155\x65\164\x61\x64\x61\x74\x61\57\144\141\x73\150\x6c\145\164\x76\x69\145\x77\144\145\146\x73\56\x70\150\x70"; parent::__construct($id, $def); if (!empty($def["\164\151\164\154\145"])) { goto kcJ8F; } $this->title = translate("\114\x42\114\x5f\x48\117\115\105\x50\101\107\x45\x5f\124\x49\124\114\x45", "\x45\63\x38\x5f\x44\x75\160\154\151\143\x61\164\x65\103\150\145\x63\x6b"); kcJ8F: $this->searchFields = $dashletData["\x45\63\70\137\x44\165\x70\x6c\x69\x63\x61\x74\x65\103\150\x65\x63\x6b\x44\141\x73\x68\x6c\x65\164"]["\163\145\141\162\143\x68\x46\x69\145\x6c\144\x73"]; $this->columns = $dashletData["\105\x33\x38\x5f\x44\x75\160\x6c\x69\143\x61\x74\145\103\150\x65\x63\153\104\x61\163\150\154\145\164"]["\x63\x6f\154\x75\155\x6e\163"]; $this->seedBean = new E38_DuplicateCheck(); } }
