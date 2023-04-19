<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * App Config
 */
$app_list_strings['moduleList']['HintAccountsets'] = 'HintAccountsets';
$app_list_strings['moduleList']['HintNotificationTargets'] = 'HintNotificationTargets';
$app_list_strings['moduleList']['HintNewsNotifications'] = 'HintNewsNotifications';
$app_list_strings['moduleList']['HintEnrichFieldConfigs'] = 'HintEnrichFieldConfigs';

/**
 * Select2 field values
 */
$app_list_strings['stage2_preferences_type'] = [
    'owner' => 'My Accounts',
    'favorites' => 'Favorite Accounts',
    'tags' => 'Accounts tagged'
];

$app_list_strings['stage2_preferences_category'] = [
    'All' => 'All News',
    'General' => 'General',
    'Finance' => 'Financial',
    'People' => 'Personnel',
    'Press Releases' => 'Press Releases',
    'Other' => 'Other'
];

/**
 * Standard Translations
 */
$app_strings['LBL_HINT_COMPANY_SIZE'] = '회사 규모';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = '산업';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = '산업 태그';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = '회사 위치';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = '회사 설명';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = '설립 연도';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = '회사 Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = '회사 Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = '회사 로고 링크';
$app_strings['LBL_HINT_COMPANY_PIC'] = '회사 로고';
$app_strings['LBL_HINT_CONTACT_PIC'] = '연락처 사진';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = '회사 웹사이트';
$app_strings['LBL_HINT_PHOTO'] = '사진 링크';
$app_strings['LBL_HINT_JOB_2'] = '이전 작업';
$app_strings['LBL_HINT_EDUCATION'] = '교육';
$app_strings['LBL_HINT_EDUCATION_2'] = '추가 교육';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter 링크';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook 링크';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS 코드';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC 코드';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = '회계연도 종료';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = '연 수익';
$app_strings['LBL_HINT_PHONE_1'] = '전화 1';
$app_strings['LBL_HINT_PHONE_2'] = '전화 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = '표 병합';
$app_strings['LBL_HINT_FULL_NAME'] = '성과 이름';
$app_strings['LBL_HINT_JOB_TITLE'] = '직책';
$app_strings['LBL_HINT_OFFICE_PHONE'] = '사무실 전화번호';
$app_strings['LBL_HINT_MOBILE_PHONE'] = '휴대폰';
$app_strings['LBL_HINT_OTHER_PHONE'] = '기타 전화번호';
$app_strings['LBL_HINT_WEBSITE'] = '웹사이트';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Hint에서 찾은 새 데이터로 이 레코드의 기존 데이터를 모두 덮어쓰시겠습니까?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Hint에서 찾은 새 {{fieldName}}(으)로 이 레코드의 기존 {{fieldName}}을(를) 덮어쓰시겠습니까?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = '모든 계정 관련 데이터가 삭제됩니다. 계속하시겠습니까?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = '사진';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint 계정 세트 태그';

$app_strings['LBL_HINT_LOADING'] = '로딩 중...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Hint 삭제 중입니다. 기다려 주십시오';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' 값 삭제됨 ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = '이 정보는 데이터 프라이버시 요청을 통해 삭제되었습니다.';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = '아래에서 삭제 옵션 중 하나를 선택하십시오.';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Hint 패키지만 삭제';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Hint를 완전히 삭제';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = '이 옵션은 MLP의 삭제와 모든 구성 및 구독 정보의 삭제를 포함하여 Hint의 전체 삭제를 수행합니다.';
$app_strings['LBL_HINT_UNINSTALL'] = '삭제';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Hint 삭제';
$app_strings['LBL_HINT_CANCEL'] = '취소';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = '확인: ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = '(삭제 진행 과정 정보)';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Hint 패키지만 삭제하시겠습니까?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Hint를 완전히 삭제하시겠습니까?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(참고: 이 작업은 실행 취소할 수 없습니다.)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint 필드';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = '검색결과가 없습니다.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = '기본 Hint 패널 레이아웃';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = '계정';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = '연락처';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = '관심고객';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = '확장된 Hint 패널 레이아웃';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = '위의 Hint 패널 레이아웃 섹션 내에서 끌어 놓아 필드를 다시 정렬합니다.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = '자세한 지침 및 기본 필드 목록은 다음 참조:';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' 이 링크를 사용해 기본 설정 복구 ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = '모듈';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = '{{module}} 모듈의 기본값으로 복구하시겠습니까?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = '이곳 클릭';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint 관리 가이드.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = '필드';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = '보강된 필드';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = '이 섹션에는 Hint로 보강된 모든 Hint 필드와 Sugar 필드가 나열되어 있습니다. Hint 필드는 별표(*)로 표시되며, 보강된 경우 Hint 패널에만 표시됩니다.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = '필드명';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = '필드 보강';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Hint에서 표시';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Hint 패널에서 표시';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = '추가 Sugar 필드';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = '이 섹션에는 Hint로 보강되지 않은 모든 Sugar 필드가 표시되어 있습니다.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = '경고';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = '주의: Hint Insights 서비스와 동기화하려고 합니다. 보류 중인 모든 이메일 다이제스트 스토리가 손실되고 기존 뉴스가 Insights 대쉬릿에서 삭제됩니다. 동기화가 완료되면 모든 유형의 알림이 다시 시작됩니다.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = '{{_moduleSingular}}과(와) 관련된 추천 회사가 아래에 나열되어 있습니다. 표시할 회사 데이터를 선택합니다.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = '선택한 계정 없음';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = '여러 이메일을 찾았습니다. 가져올 이메일을 선택하십시오.';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = '입력한 데이터에 따라 Hint는 시스템에서 일치하는 항목을 찾지 못했습니다.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Hint의 가장 좋은 결과는 사람 이름과 이메일 주소로 찾을 수 있습니다.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Hint의 가장 좋은 결과는 회사 웹사이트 URL로 찾을 수 있습니다.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = '내역 보기에 사용할 수 있는 데이터 없음';
$app_strings['LBL_HINT_HISTORY_TITLE'] = '활동 내역';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = '데이터 보강';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'SugarCRM Hint 서비스 라이센스가 만료되었습니다. 라이센스를 갱신하려면 SugarCRM 관리자에게 문의하십시오.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'SugarCRM Hint로 여러분과 여러분의 회사가 얻을 수 있는 이익을 알고 싶으십니까? SugarCRM 관리자에게 문의하여 Hint를 추가하십시오.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = '계정 정보 없음';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = '보강된 데이터 검색됨 - 클릭하여 보강된 데이터 모두를 레코드에 저장합니다.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = '클릭하여 보강된 데이터를 레코드에 저장합니다.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = '관련 연락처';
$app_strings['LBL_HINT_CONTACTS_NONE'] = '관련 연락처 없음';

$app_strings['LBL_HINT_NEWS'] = '뉴스';
$app_strings['LBL_HINT_GENERAL'] = '일반';
$app_strings['LBL_HINT_ALL_NEWS'] = '모든 뉴스';
$app_strings['LBL_HINT_FILTER_NEWS'] = '뉴스 필터';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = '금융';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = '직원';
$app_strings['LBL_HINT_PRESS_RELEASES'] = '보도자료';
$app_strings['LBL_HINT_OTHER_NEWS'] = '기타';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = '뉴스 기사 검색';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = '뉴스 없음';
$app_strings['LBL_NEW_NOTIFICATIONS'] = '새 알림';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = '대상';
$app_strings['LBL_HINT_WITH'] = '및';
$app_strings['LBL_HINT_SHOW_ME'] = '보기: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = '알림 방법: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights 설정 센터';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = '설정 옵션 키';
$app_strings['LBL_HINT_PREFERENCES'] = '설정';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = '삭제할 수 없습니다. 기본 설정 선언이 최소 하나 필요합니다.';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = '추가할 수 없습니다. 기본 설정 선언 수가 최대입니다.';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Hint Insights 대쉬릿에 포함';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = '바탕화면 알림으로 팝업 표시';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = '알림을 지속적으로 수신하려면 모든 브라우저와 모든 데스크톱 컴퓨터에서 알림을 활성화해야 합니다.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Internet Explorer와 같은 일부 브라우저에서는 알림을 지원하지 않습니다. 알림을 지원하지 않는 브라우저를 사용하면 알림을 활성화할 수 없습니다.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = '각 알림에 대해 즉시 이메일 알림 전송';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = '매일 이메일 다이제스트 전송';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = '매주 이메일 다이제스트 전송';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = '설정을 저장할 수 없습니다. 시스템 연결을 확인하고 다시 시도하십시오.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = '일부 필수 필드에 값이 없습니다. 설정을 확인하고 모든 필수 필드가 입력되었는지 확인하십시오.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Hint Insights의 브라우저 알림을 활성화하려고 합니다. 계속하려면 확인을 클릭하십시오. 그러면 브라우저에서 알림 이벤트 수신을 허용할 수 있는 권한을 요청합니다.';
$app_strings['LBL_HINT_PUSH_ERROR'] = '푸시 알림 플러그인이 의존성 없이 {{options.type}}에 등록되었습니다. 플러그인이 의도대로 작동하지 않을 것입니다. 워커 파일에 경로와 서버에 구독을 저장하는 방법을 제공해야 합니다.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = '모든 사용자에 대한 Hint 알림 켜기';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = '모든 사용자에 대한 Hint 알림 끄기';
