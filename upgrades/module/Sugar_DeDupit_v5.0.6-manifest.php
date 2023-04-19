<?php

/**
 * @author 38 Elements DOO
 *
 * 38 Elements DOO ("COMPANY") CONFIDENTIAL
 *
 * Copyright (c) 2021 38 Elements DOO, Belgrade, Serbia - All Rights Reserved
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

$manifest = array(
  'built_in_version' => '9.0.0.0',
  'acceptable_sugar_versions' => array('regex_matches' => array('8.*.*', '9.*.*', '10.*.*', '11.*.*')),
  'acceptable_sugar_flavors' => array('PRO', 'CORP', 'ENT', 'ULT'),
  'readme' => '',
  'key' => 'E38',
  'author' => '38 Elements DOO',
  'description' => 'De-duplicate records based on rules that you set.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Sugar DeDupit',
  'published_date' => '2021-07-18 12:00:00',
  'type' => 'module',
  'version' => '5.0.6',
  'remove_tables' => 'prompt',
);

$installdefs = array(
  'id' => 'E38_DeDupit',
  'beans' => array(
    array(
      'module' => 'E38_DuplicateCheck',
      'class' => 'E38_DuplicateCheck',
      'path' => 'modules/E38_DuplicateCheck/E38_DuplicateCheck.php',
      'tab' => false,
    ),
    array(
      'module' => 'E38_DuplicateFinderProcess',
      'class' => 'E38_DuplicateFinderProcess',
      'path' => 'modules/E38_DuplicateFinderProcess/E38_DuplicateFinderProcess.php',
      'tab' => true,
    ),
    array(
      'module' => 'E38_FoundDuplicates',
      'class' => 'E38_FoundDuplicates',
      'path' => 'modules/E38_FoundDuplicates/E38_FoundDuplicates.php',
      'tab' => true,
    ),
    array(
      'module' => 'E38_MergedDuplicates',
      'class' => 'E38_MergedDuplicates',
      'path' => 'modules/E38_MergedDuplicates/E38_MergedDuplicates.php',
      'tab' => false,
    ),
  ),
  'administration' => array(
    array(
      'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/E38_DeDupit.php'
    )
  ),
  'copy' => array(
    array(
      'from' => '<basepath>/modules/E38_DuplicateCheck',
      'to' => 'modules/E38_DuplicateCheck',
    ),
    array(
      'from' => '<basepath>/modules/E38_DuplicateFinderProcess',
      'to' => 'modules/E38_DuplicateFinderProcess',
    ),
    array(
      'from' => '<basepath>/modules/E38_FoundDuplicates',
      'to' => 'modules/E38_FoundDuplicates',
    ),
    array(
      'from' => '<basepath>/modules/E38_MergedDuplicates',
      'to' => 'modules/E38_MergedDuplicates',
    ),
    array(
      'from' => '<basepath>/custom/clients/base/views/e38-dedupit-history-dashlet',
      'to' => 'custom/clients/base/views/e38-dedupit-history-dashlet',
    ),
    array(
      'from' => '<basepath>/custom/clients/base/views/e38-dedupit-record-dashlet',
      'to' => 'custom/clients/base/views/e38-dedupit-record-dashlet',
    ),
    array(
      'from' => '<basepath>/custom/clients/base/api/E38_DuplicateCheckAPI.php',
      'to' => 'custom/clients/base/api/E38_DuplicateCheckAPI.php',
    ),
    array(
      'from' => '<basepath>/custom/clients/base/fields/e38-dedupit-found-dup-info',
      'to' => 'custom/clients/base/fields/e38-dedupit-found-dup-info',
    ),
  ),
  'language' => array(
    array(
      'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.E38_DeDupit.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    array(
      'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.E38_DeDupit.php',
      'to_module' => 'Administration',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/Language/en_us.E38_DeDupit.php',
      'to_module' => 'Schedulers',
      'language' => 'en_us'
    )
  ),
  'relationships' => array(
    array('meta_data' => '<basepath>/custom/metadata/relationship_e38_duplicatecheck_e38_foundduplicates.php')
  ),
  'scheduledefs' => array(
    array('from' => '<basepath>/custom/Extension/application/Ext/ScheduledTasks/E38_DeDupitSchedulers.php')
  ),
  'hookdefs' => array(
    array(
      'from' => '<basepath>/custom/logic_hooks/e38_DeDupit_global.php',
      'to_module' => 'application',
    ),
    array(
      'from' => '<basepath>/custom/logic_hooks/e38_DeDupit_finder_process.php',
      'to_module' => 'E38_DuplicateFinderProcess',
    ),
    array(
      'from' => '<basepath>/custom/logic_hooks/e38_DeDupit_found_duplicates.php',
      'to_module' => 'E38_FoundDuplicates',
    ),
  ),
  'pre_uninstall' => array(0 => '<basepath>/pre_uninstall.php'),
  'post_execute' => array(0 => '<basepath>/post_execute.php'),
  'image_dir' => '<basepath>/custom/modules/icons',
);
