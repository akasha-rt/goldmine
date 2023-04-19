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
 
  if (!(!defined("\163\165\147\141\162\105\x6e\x74\x72\x79") || !sugarEntry)) { goto jtFXq; } die("\116\157\164\40\101\x20\x56\x61\x6c\x69\x64\x20\105\x6e\x74\162\171\40\120\157\x69\x6e\x74"); jtFXq: require_once "\151\156\x63\154\165\x64\x65\57\x44\141\x73\150\x6c\145\164\x73\x2f\x44\141\163\150\x6c\145\164\107\x65\156\x65\162\x69\x63\x2e\160\x68\x70"; require_once "\155\x6f\144\x75\154\x65\x73\57\105\63\x38\x5f\x46\x6f\165\x6e\x64\x44\165\160\154\x69\x63\141\164\x65\163\x2f\x45\x33\x38\137\106\x6f\x75\x6e\144\x44\165\160\x6c\151\x63\x61\164\145\x73\x2e\160\150\x70"; class E38_FoundDuplicatesDashlet extends DashletGeneric { public function __construct($id, $def = null) { global $current_user, $app_strings; require "\155\157\144\165\x6c\x65\163\x2f\x45\63\x38\137\106\157\165\156\144\104\x75\x70\154\151\143\141\164\x65\x73\x2f\x6d\x65\164\x61\144\141\x74\141\x2f\x64\141\163\x68\154\x65\x74\x76\151\x65\167\x64\x65\146\x73\x2e\160\150\x70"; parent::__construct($id, $def); if (!empty($def["\164\151\x74\x6c\145"])) { goto xyM91; } $this->title = translate("\x4c\x42\114\x5f\110\117\x4d\x45\x50\101\x47\x45\137\x54\111\124\x4c\x45", "\105\63\x38\137\x46\157\165\156\144\x44\165\160\x6c\x69\x63\x61\x74\145\163"); xyM91: $this->searchFields = $dashletData["\x45\x33\70\137\106\157\x75\156\x64\104\x75\x70\154\x69\x63\141\164\145\163\104\x61\x73\150\154\145\164"]["\163\145\x61\162\x63\150\106\x69\x65\154\144\163"]; $this->columns = $dashletData["\x45\63\x38\x5f\106\157\x75\156\144\104\165\x70\x6c\x69\x63\141\x74\145\163\x44\x61\x73\150\x6c\x65\x74"]["\143\157\154\165\155\x6e\163"]; $this->seedBean = new E38_FoundDuplicates(); } }
