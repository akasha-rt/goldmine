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
$app_strings['LBL_HINT_COMPANY_SIZE'] = '会社規模';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = '産業';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = '産業タグ';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = '会社所在地';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = '会社の説明';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = '創立年';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = '企業公式 Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = '企業公式 Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = '企業ロゴへのリンク';
$app_strings['LBL_HINT_COMPANY_PIC'] = '企業ロゴ';
$app_strings['LBL_HINT_CONTACT_PIC'] = '担当者の写真';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = '会社ウェブサイト';
$app_strings['LBL_HINT_PHOTO'] = '写真のリンク';
$app_strings['LBL_HINT_JOB_2'] = '前職';
$app_strings['LBL_HINT_EDUCATION'] = '学歴';
$app_strings['LBL_HINT_EDUCATION_2'] = '学歴（予備）';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter リンク';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook リンク';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS コード';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC コード';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'FY 終了';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = '年間収益';
$app_strings['LBL_HINT_PHONE_1'] = '電話番号 1';
$app_strings['LBL_HINT_PHONE_2'] = '電話番号 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'テーブルに参加';
$app_strings['LBL_HINT_FULL_NAME'] = 'フルネーム';
$app_strings['LBL_HINT_JOB_TITLE'] = '役職名';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'オフィス電話番号';
$app_strings['LBL_HINT_MOBILE_PHONE'] = '携帯電話番号';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'その他の電話番号';
$app_strings['LBL_HINT_WEBSITE'] = 'ウェブサイト';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'このレコードを Hint 内で見つけた新規データに上書きします、よろしいですか？';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'このレコードの既存の {{fieldName}} を、Hint で見つかった新しい {{fieldName}} に上書きします。よろしいですか？';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'すべてのアカウント関連のデータが削除されます。続行しますか？';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = '写真';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint アカウントセットタグ';

$app_strings['LBL_HINT_LOADING'] = '読み込み中...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'ヒントをアンインストールしています、しばらくお待ちください';
$app_strings['LBL_HINT_VALUE_ERASED'] = '消去された値';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'この情報はデータプライバシーリクエストを介して消去されました';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = '以下からアンインストールのオプションを1つ選択してください：';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Hint パッケージのみアンインストールする';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Hint を完全にアンインストールする';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'このオプションを実行すると、Hint は完全にアンインストールされ、これには MLP の削除、すべての構成とサブスクリプション情報の削除が含まれます。';
$app_strings['LBL_HINT_UNINSTALL'] = 'アンインストール';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Hint をアンインストールする';
$app_strings['LBL_HINT_CANCEL'] = 'キャンセル';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = '以下を参照 ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'アンインストールのプロセスの詳細について。';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Hint パッケージのみをアンインストールします、よろしいですか？';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Hint を完全にアンインストールします、よろしいですか？';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(注: 一度この操作を実行すると元に戻すことはできません)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint フィールド';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = '結果が見つかりませんでした。';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = '標準の Hint パネルレイアウト';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'アカウント';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = '担当者';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'リード';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = '展開した Hint パネルレイアウト';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'フィールドを上記の[Hint パネルレイアウト]セクション内でドラッグアンドドロップして、フィールドを再配置します。';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = '詳細な説明とデフォルトのフィールド一覧については、以下を参照してください:';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = '以下のデフォルト設定の復元が対象：';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'モジュール。';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = '{{module}} モジュールのデフォルト設定を復元します、よろしいですか？';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'こちらをクリック';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint 管理ガイド。';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'フィールド';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = '強化されたフィールド';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'このセクションには、Hint を表示したすべてのヒントフィールドとSugarフィールドが一覧表示されます。Hint フィールドにはアスタリスク (*) が付いており、Hint が表示されている場合にのみ Hint パネルに表示できます。';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'フィールド名';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'フィールドの強化';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Hint に表示';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Hint パネルに表示';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = '追加の Sugar フィールド';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'このセクションには、Hint が表示されない Sugar フィールドが一覧表示されます。';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = '警告';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = '注意：Hint Insights サービスと同期しようとしています。保留中のEメールダイジェストストーリーはすべて失われ、既存のニュースは Insights ダッシュレットから消去されます。同期が完了すると、すべてのタイプの通知が再開されます。';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = '{{_moduleSingular}} に関連する提案された会社が以下に一覧表示されます。表示したい会社データを選択してください。';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'アカウントが選択されていません';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = '複数のＥメールが見つかりました。インポートしたいEメールを選択してください：
';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = '入力したデータに基づき、Hint はシステムで一致するものを見つけることができませんでした。';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = '人物名とＥメールアドレスが含まれると、Hint で最良の結果が見つかりやすくなります。';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = '会社ウェブサイトの URL が含まれていると、Hint の最良の結果を見つけやすくなります。';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = '履歴ビューにデータがありません';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'アクティビティ履歴';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'データのエンリッチ化';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'SugarCRM Hint サービスのライセンス有効期限が切れました。ライセンスを更新するには、SugarCRM 管理者に連絡してください。';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'SugarCRM Hint がどのように貴社に役立つか興味はありませんか？SugarCRM 管理者に連絡して Hint を追加しましょう。';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'アカウント情報が見つかりません';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'エンリッチデータが見つかりました - クリックするとすべてのエンリッチデータをレコードに保存します。';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'クリックするとエンリッチデータをレコードに保存します。';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = '関連する連絡先';
$app_strings['LBL_HINT_CONTACTS_NONE'] = '非関連の連絡先';

$app_strings['LBL_HINT_NEWS'] = 'ニュース';
$app_strings['LBL_HINT_GENERAL'] = '一般';
$app_strings['LBL_HINT_ALL_NEWS'] = 'すべてのニュース';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'ニュースを絞り込む';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = '金融';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = '人事';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'プレスリリース';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'その他';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'ニュース記事の検索';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = '閲覧可能なニュースはありません';
$app_strings['LBL_NEW_NOTIFICATIONS'] = '新規通知';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = '対象';
$app_strings['LBL_HINT_WITH'] = '以下を含む';
$app_strings['LBL_HINT_SHOW_ME'] = '以下を表示：';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = '通知方法：';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights 基本設定センター';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = '基本設定オプションキー';
$app_strings['LBL_HINT_PREFERENCES'] = '基本設定';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = '削除できませんでした。最低でも 1 つの基本設定ステートメントが必要です';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = '追加できません、基本設定ステートメントの最大数に達しました';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Hint Insightsダッシュレットに追加';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'デスクトップにポップアップ通知';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = '通知を一貫して受信するには、すべてのブラウザとすべてのデスクトップコンピュータで通知を有効にする必要があります。';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Internet Explorerなどの一部のブラウザは通知機能に対応しません。通知をサポートしていないブラウザを使用している場合、通知を有効にすることはできません。';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = '各通知のインスタントEメールアラートを送信する';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = '1日のEメールダイジェストを送信する';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = '1週間のEメールダイジェストを送信する';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = '基本設定を保存できませんでした。システムの接続状態を確認してから再試行してください。';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = '一部の必須フィールドに値が入力されていません。基本設定を確認して、すべての必須フィールドが記入されていることを確認してください。';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Hint Insights のブラウザ通知を有効にしようとしています。続行するには[確定]をクリックしてください。次に、ブラウザは通知イベントの受信を許可する許可を求めます。';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'プッシュ通知プラグインは、依存関係なしで {{options.type}} に登録されています。 プラグインは意図したとおりに機能しません。ワーカーファイルへのパスと、サーバーにサブスクリプションを保存する方法を必ず指定してください。';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'すべてのユーザーを対象に[Hintをオンにする]通知';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'すべてのユーザーを対象に[Hintをオフにする]通知';
