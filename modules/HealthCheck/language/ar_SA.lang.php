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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'فحص الصحة',
    'LBL_MODULE_NAME_SINGULAR' => 'فحص الصحة',
    'LBL_MODULE_TITLE' => 'فحص الصحة',
    'LBL_LOGFILE' => 'ملف السجل',
    'LBL_BUCKET' => 'الحزمة',
    'LBL_FLAG' => 'العلامة',
    'LBL_LOGMETA' => 'تعريف السجل',
    'LBL_ERROR' => 'خطأ',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'يتعذر أن تكون البيانات المتسلسلة غير متسلسلة',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'يتعذر أن تكون البيانات المتسلسلة غير متسلسلة لأنها تحتوي على مراجع إلى كائنات أو فئات',

    'LBL_SCAN_101_LOG' => '%s له تاريخ في Studio',
    'LBL_SCAN_102_LOG' => '%s له امتدادات: %s',
    'LBL_SCAN_103_LOG' => '%s يحتوي على تعريفات متغيره مخصصة',
    'LBL_SCAN_104_LOG' => '%s يحتوي على تعريفات تصميمات مخصصة',
    'LBL_SCAN_105_LOG' => '%s يحتوي على تعريفات طريقة عرض مخصصة',

    'LBL_SCAN_201_LOG' => '%s ليست وحدة مخزون',

    'LBL_SCAN_301_LOG' => '%s يجب تشغيلها كـ BWC',
    'LBL_SCAN_302_LOG' => 'هناك طرق عرض ملفات غير معروفة موجودة - %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_303_LOG' => 'ملف نموذج غير فارغ %s- %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_304_LOG' => 'ملف غير معروف %s%s- %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_305_LOG' => 'تعريفات متغيره سيئة - المفتاح %s، الاسم %s فى الوحدة %s',
    'LBL_SCAN_306_LOG' => 'تعريفات متغيره سيئة - حقل الربط %s في الوحدة %s يحتوي على "وحدة" فارغة',
    'LBL_SCAN_307_LOG' => 'تعريفات متغيره سيئة - الارتباط %s في الوحدة %s يشير إلى علاقة غير صالحة',
    'LBL_SCAN_308_LOG' => 'وظيفة HTML لتعريفات متغيره في %s',
    'LBL_SCAN_309_LOG' => 'md5 سيئ لـ %s',
    'LBL_SCAN_310_LOG' => 'ملف غير معروف %s/%s',
    'LBL_SCAN_311_LOG' => 'وظيفة لتعريفات متغيره لـ HTML %s في وحدة $module للحقل %s',
    'LBL_SCAN_312_LOG' => 'تعريفات متغيره سيئة - &#39;الاسم&#39; نوع الحقل تالف &#39;%s&#39;، الوحدة - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => 'تم اكتشاف دليل الامتداد %s- %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_314_LOG' => "تعريفات متغيره سيئة - الحقل '%s' متعدد الأرقام المحتوي على مفاتيح '%s' لقائمة الخيارات يحتوي على حروف غير متوافقة - '{%s}' في الوحدة %s",

    'LBL_SCAN_401_LOG' => 'تم العثور على تضمين ملفات البائع، بالنسبة للملفات التي تم نقلها إلى البائع:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'وحدة %s سيئة - ليست موجودة في قائمة المكونات البرمجية (beanList) وليست في نظام الملفات',
    'LBL_SCAN_403_LOG' => 'تم العثور على تضمين ملفات Suger محددة لـ:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'تم اكتشاف أداة الإضافة المنطقية after_ui_frame',
    'LBL_SCAN_521_LOG' => 'تم اكتشاف أداة الإضافة المنطقية after_ui_footer',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s يحتوي على طرق عرض مخصصة',
    'LBL_SCAN_407_LOG' => '%s يحتوي على طرق عرض مخصصة',
    'LBL_SCAN_408_LOG' => 'تم العثور على مكونات اتخاذ الإجراءات المخصصة في %s. سيتم نسخ هذه المكونات وتعديلها لتمديد مكون الإنشاء بدلاً من ذلك أثناء الترقية',
    'LBL_SCAN_409_LOG' => 'تعريفات متغيرة سيئة - تم إهمال "link_file". يجب أن تكون فئة الارتباط المحددة في "link_class" قابلة للتحميل التلقائي',
    'LBL_SCAN_519_LOG' => 'تم اكتشاف دليل الامتداد %s',
    'LBL_SCAN_518_LOG' => 'تم اكتشاف تعليمات برمجية مخصصة %s في %s',
    'LBL_SCAN_410_LOG' => 'الحد الأقصى للحقول - تم العثور على أكثر من %s حقل (%s) في %s',
    'LBL_SCAN_522_LOG' => 'تم العثور على &#39;get_subpanel_data&#39; بقيمة &#39;دالة:&#39; في %s',
    'LBL_SCAN_412_LOG' => 'ارتباط لوحة فرعية سيئ %s في %s',
    'LBL_SCAN_413_LOG' => 'تم اكتشاف فئة أداة غير معروفة. %s لـ %s',
    'LBL_SCAN_414_LOG' => 'تمت معالجة حقول غير معروفة من خلال CRYS-36، لذا لن يتم إجراء المزيد من الفحوص هنا',
    'LBL_SCAN_415_LOG' => 'ملف خطاف سيئ في %s: %s',
    'LBL_SCAN_523_LOG' => 'معلمة By-ref في ملف أداة إضافة %s الدالة %s',
    'LBL_SCAN_417_LOG' => 'وحدة غير متوافقة %s',
    'LBL_SCAN_418_LOG' => 'تم اكتشاف لوحة فرعية تحتوي على ارتباط إلى وحدة غير موجودة: %s',
    'LBL_SCAN_419_LOG' => 'تعريفات متغيره سيئة - المفتاح %s، الاسم %s فى الوحدة %s',
    'LBL_SCAN_420_LOG' => 'تعريفات متغيره سيئة - حقل الربط %s في الوحدة %s يحتوي على "وحدة" فارغة',
    'LBL_SCAN_421_LOG' => 'تعريفات متغيره سيئة - الارتباط %s في الوحدة %s يشير إلى علاقة غير صالحة',
    'LBL_SCAN_422_LOG' => 'الوحدة %s تتضمن تعريفًا لوحدة %s أخرى في الملف %s',
    'LBL_SCAN_525_LOG' => 'وظيفة HTML لتعريفات متغيره في %s',
    'LBL_SCAN_423_LOG' => 'حقول فرعية سيئة لتعريفات متغيره - %s يشير إلى حقل فرعي سيئ %s. في الوحدة %s',
    'LBL_SCAN_424_LOG' => 'تم العثور على تعليمات HTML برمجية في %s في السطر %s',
    'LBL_SCAN_425_LOG' => 'تم العثور على "echo" في %s في السطر %s',
    'LBL_SCAN_426_LOG' => 'تم العثور على "print" في %s في السطر %s',
    'LBL_SCAN_427_LOG' => 'تم العثور على "die/exit" في %s في السطر %s',
    'LBL_SCAN_428_LOG' => 'تم العثور على "print_r" في %s في السطر %s',
    'LBL_SCAN_429_LOG' => 'تم العثور على "var_dump" في %s في السطر %s',
    'LBL_SCAN_430_LOG' => 'تم العثور على تخزين مؤقت للمخرجات (%s) في %s في السطر %s',
    'LBL_SCAN_431_LOG' => 'تم العثور على قالب Smarty مخصص: "%s"',
    'LBL_SCAN_436_LOG' => 'تم العثور على قالب PDF مخصص: "%s"',
    'LBL_SCAN_437_LOG' => 'قالب Smarty غير متوافق مع بناء جملة Smarty3: "%s"',
    'LBL_SCAN_438_LOG' => 'تم العثور على قالب PDF مخصص لا يمكن تحويله تلقائيًا إلى بناء جملة Smarty3: "%s"',
    'LBL_SCAN_439_LOG' => 'القالب غير متوافق مع بناء جملة Smarty3، تم تخطي: "%s".',
    'LBL_SCAN_451_LOG' => 'تم حذف تعليمات المصادقة البرمجية، استخدم \IdMSugarAuthenticate أو \IdMSAMLAuthenticate أو \IdMLDAPAuthenticate بدلأ من ذلك. الملفات ذات التعليمات البرمجية المحذوفة: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'وظيفة لتعريفات متغيره لـ HTML %s في وحدة %s للحقل %s',
    'LBL_SCAN_432_LOG' => 'تعريفات متغيره سيئة - &#39;الاسم&#39; نوع الحقل تالف &#39;%s&#39;، الوحدة - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "تعريفات متغيره سيئة - الحقل \"%s\" متعدد الأرقام المحتوي على مفاتيح \"%s\" لقائمة الخيارات يحتوي على حروف غير متوافقة - \"%s\" في الوحدة %s",
    'LBL_SCAN_527_LOG' => "اسم الجدول في المكون البرمجي %s لا يطابق سمة الجدول في %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'الحقل %s في وحدة %s يحتوي على قيمة display_default غير صحيحة',
    'LBL_SCAN_529_LOG' => '%s: %s في الملف %s في السطر %s',
    'LBL_SCAN_530_LOG' => 'هناك ملف مخصص مفقود: %s',
    'LBL_SCAN_531_LOG' => 'برنامج تشغيل قاعدة البيانات المهملة: %s',
    'LBL_SCAN_532_LOG' => 'فئة في %s تستدعي منشيء أصل الأسهم كـ %s::%s()',
    'LBL_SCAN_533_LOG' => 'فئة في %s تستدعي منشيء الأصل المخصص له كـ %s::%s()',
    'LBL_SCAN_534_LOG' => 'برنامج تشغيل قاعدة البيانات غير المدعمة:%s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'تم العثور على ملفات بحث مرنة مخصصة %s',
    'LBL_SCAN_434_LOG' => 'تم العثور على استخدام وظائف المصفوفة في $_SESSION في الملفات: %s',
    'LBL_SCAN_435_LOG' => 'تمت إزالة فئة SugarSession من API، استخدم Sugarcrm\Sugarcrm\Session\SessionStorage بدلاً من ذلك. ملفات بكود مهمل: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => 'التخصيص/الوحدات/عروض الأسعار/عروض الأسعار. ربما تحتوي على تخصيصات غير متوافقة مع عروض الأسعار الجديدة.',
    'LBL_SCAN_561_LOG' => 'تخصيص/الوحدات/عروض الأسعار/عرض التعديل. ربما تحتوي على تخصيصات غير متوافقة مع عروض الأسعار الجديدة.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_570_LOG' => 'حالة ونوع غير صحيحين لرسائل البريد الإلكتروني: الحالة=%s، النوع=%s',
    'LBL_SCAN_571_LOG' => 'الملف المهمل يتضمن تخصيصات: %s',
    'LBL_SCAN_572_LOG' => 'الملف المخصص يشتمل على تعارض في الاسم: %s',
    'LBL_SCAN_573_LOG' => 'ملف التعليمات المخصص يشتمل على تعارض في الاسم: %s',
    'LBL_SCAN_574_LOG' => 'اللوحة الفرعية لرسائل البريد الإلكتروني تشتمل على دليل مخصص: %s',
    'LBL_SCAN_575_LOG' => 'اللوحة الفرعية لجهات الاتصال لرسائل البريد الإلكتروني تحتاج إلى التغيير لاستخدام اللوحة الفرعية لرسائل البريد الإلكتروني المؤرشفة لجهات الاتصال: %s',
    'LBL_SCAN_576_LOG' => 'تم الكشف عن تخصيصات السطح في: `%s`. قد لا تعمل نتيجة السطح النهائية بالصورة المتوقعة، الرجاء مراجعة تخصيصات السطح.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'تم اكتشاف عبارة محظورة في `%s`: %s',
    'LBL_SCAN_586_LOG' => 'تم إهمال FontAwesome بداية من 11.2 ولن يكون مدعومًا في 12.0. تم اكتشاف استخدام FontAwesome في: %s',

    'LBL_SCAN_501_LOG' => 'هناك ملف مفقود: %s',
    'LBL_SCAN_502_LOG' => 'هناك حالة عدم مطابقة لـ md5 لـ %s، المتوقع %s',
    'LBL_SCAN_503_LOG' => 'هناك وحدة فرعية لها نفس الاسم مثل وحدة Sugar7 الجديدة: %s',
    'LBL_SCAN_504_LOG' => 'هناك نوع حقل مفقود في الوحدة %s: %s',
    'LBL_SCAN_505_LOG' => 'هناك تغيير في النوع في %s للحقل %s: من %s إلى %s',
    'LBL_SCAN_506_LOG' => '$this الاستخدام في %s',
    'LBL_SCAN_507_LOG' => 'حقول فرعية سيئة لتعريفات متغيره - %s يشير إلى حقل فرعي سيئ %s. في الوحدة %s',
    'LBL_SCAN_508_LOG' => 'تم العثور على تعليمات HTML برمجية في %s في السطر %s',
    'LBL_SCAN_509_LOG' => 'تم العثور على "echo" في %s في السطر %s',
    'LBL_SCAN_510_LOG' => 'تم العثور على "print" في %s في السطر %s',
    'LBL_SCAN_511_LOG' => 'تم العثور على "die/exit" في %s في السطر %s',
    'LBL_SCAN_512_LOG' => 'تم العثور على "print_r" في %s في السطر %s',
    'LBL_SCAN_513_LOG' => 'تم العثور على "var_dump" في %s في السطر %s',
    'LBL_SCAN_514_LOG' => 'تم العثور على تخزين مؤقت للمخرجات (%s) في %s في السطر %s',
    'LBL_SCAN_515_LOG' => 'فشل الاسكربت: %s',
    'LBL_SCAN_516_LOG' => 'تم العثور على إشارة إلى ملفات تم حذفها من قبل في: %s',
    'LBL_SCAN_517_LOG' => 'تكامل غير متوافق - %s %s',
    'LBL_SCAN_540_LOG' => 'إعادة تعيين بيانات تكامل غير متوافقة - %s %s',
    'LBL_SCAN_541_LOG' => 'تسلسل SugarBPM غير صالح - %s تسلسل (تسلسلات) غير صالحة في العمود %s بالجدول %s: %s.',
    'LBL_SCAN_542_LOG' => 'استخدام حقل SugarBPM غير صالح - %s حقل (حقول) غير صالحة مستخدمة في %s.',
    'LBL_SCAN_545_LOG' => 'تأمين جزئي من SugarBPM لمجموعة الحقول - الحقل %4$s مؤمن في المجموعة %s في تعريف العملية %s للوحدة %s.',
    'LBL_SCAN_546_LOG' => 'تهيئة TinyMCE لقاعدة معارف مخصصة',
    'LBL_SCAN_547_LOG' => 'استخدام توقيع `resetLoadFlag` الذي تم إزالته في %s',
    'LBL_SCAN_548_LOG' => 'استخدام أسلوب `initButtons` المهمل في %s',
    'LBL_SCAN_549_LOG' => 'استخدام توقيع `getField` الذي تم إزالته في %s',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => 'تمت ترقية المثيل بالفعل إلى Sugar 7',
    'LBL_SCAN_903_LOG' => 'إصدار برنامج ترقية غير مدعوم. الرجاء تثبيت حزمة SugarUpgradeWizardPrereq المناسبة',
    'LBL_SCAN_904_LOG' => 'تم العثور على قيم فارغة في سلاسل قائمة الوحدات. الملف: %s، الوحدات: %s',
    'LBL_SCAN_999_LOG' => 'فشل غير معروف، يرجى استشارة الدعم',

    'LBL_SCAN_101_TITLE' => '%s له تاريخ في Studio',
    'LBL_SCAN_102_TITLE' => '%s له امتدادات: %s',
    'LBL_SCAN_103_TITLE' => '%s يحتوي على تعريفات متغيره مخصصة',
    'LBL_SCAN_104_TITLE' => '%s يحتوي على تعريفات تصميمات مخصصة',
    'LBL_SCAN_105_TITLE' => '%s يحتوي على تعريفات طريقة عرض مخصصة',

    'LBL_SCAN_201_TITLE' => '%s ليست وحدة مخزون',

    'LBL_SCAN_301_TITLE' => '%s يجب تشغيلها كـ BWC',
    'LBL_SCAN_302_TITLE' => 'هناك طرق عرض ملفات غير معروفة موجودة - %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_303_TITLE' => 'ملف نموذج غير فارغ %s- %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_304_TITLE' => 'ملف غير معروف %s%s- %s ليست وحده انشاء الوحدات',
    'LBL_SCAN_305_TITLE' => 'تعريفات متغيره سيئة - المفتاح %s، الاسم %s فى الوحدة %s',
    'LBL_SCAN_306_TITLE' => 'تعريفات متغيره سيئة - حقل الربط %s في الوحدة %s يحتوي على "وحدة" فارغة',
    'LBL_SCAN_307_TITLE' => 'تعريفات متغيره سيئة - الارتباط %s في الوحدة %s يشير إلى علاقة غير صالحة',
    'LBL_SCAN_308_TITLE' => 'وظيفة HTML لتعريفات متغيره في %s',
    'LBL_SCAN_309_TITLE' => 'md5 سيئ لـ %s',
    'LBL_SCAN_310_TITLE' => 'ملف غير معروف %s/%s',
    'LBL_SCAN_311_TITLE' => 'وظيفة لتعريفات متغيره لـ HTML %s في وحدة $module للحقل %s',
    'LBL_SCAN_312_TITLE' => 'تعريفات متغيره سيئة - &#39;الاسم&#39; نوع الحقل تالف &#39;%s&#39;، الوحدة - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => 'تم اكتشاف دليل الامتداد %s- %s ليست وحده انشاء الوحدات',

    'LBL_SCAN_401_TITLE' => 'تم العثور على تضمين ملفات البائع، بالنسبة للملفات التي تم نقلها إلى البائع:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'وحدة %s سيئة - ليست موجودة في قائمة المكونات البرمجية (beanList) وليست في نظام الملفات',
    'LBL_SCAN_403_TITLE' => 'تم العثور على تضمين ملفات Suger محددة لـ:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'تم اكتشاف أداة الإضافة المنطقية after_ui_frame',
    'LBL_SCAN_521_TITLE' => 'تم اكتشاف أداة الإضافة المنطقية after_ui_footer',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s يحتوي على طرق عرض مخصصة',
    'LBL_SCAN_407_TITLE' => '%s يحتوي على طرق عرض مخصصة',
    'LBL_SCAN_408_TITLE' => 'تم العثور على مكونات اتخاذ إجراءات مخصصة لم تعد مدعومة.',
    'LBL_SCAN_409_TITLE' => 'تعريفات متغيرة سيئة - تتضمن الوحدة %s تعريفات متغيرة غير صحيحة لحقل %s.',
    'LBL_SCAN_519_TITLE' => 'تم اكتشاف دليل الامتداد %s',
    'LBL_SCAN_518_TITLE' => 'تم اكتشاف تعليمات برمجية مخصصة %s في %s',
    'LBL_SCAN_410_TITLE' => 'الحد الأقصى للحقول - تم العثور على أكثر من %s حقل (%s) في %s',
    'LBL_SCAN_522_TITLE' => 'تم العثور على &#39;get_subpanel_data&#39; بقيمة &#39;دالة:&#39; في %s',
    'LBL_SCAN_412_TITLE' => 'ارتباط لوحة فرعية سيئ %s في %s',
    'LBL_SCAN_413_TITLE' => 'تم اكتشاف فئة أداة غير معروفة. %s لـ %s',
    'LBL_SCAN_414_TITLE' => 'تمت معالجة حقول غير معروفة من خلال CRYS-36، لذا لن يتم إجراء المزيد من الفحوص هنا',
    'LBL_SCAN_415_TITLE' => 'ملف خطاف سيئ في %s: %s',
    'LBL_SCAN_523_TITLE' => 'معلمة By-ref في ملف أداة إضافة %s الدالة %s',
    'LBL_SCAN_417_TITLE' => 'وحدة غير متوافقة %s',
    'LBL_SCAN_418_TITLE' => 'تم اكتشاف لوحة فرعية تحتوي على ارتباط إلى وحدة غير موجودة: %s',
    'LBL_SCAN_419_TITLE' => 'تعريفات متغيره سيئة - المفتاح %s، الاسم %s فى الوحدة %s',
    'LBL_SCAN_420_TITLE' => 'تعريفات متغيره سيئة - حقل الربط %s في الوحدة %s يحتوي على "وحدة" فارغة',
    'LBL_SCAN_421_TITLE' => 'تعريفات متغيره سيئة - الارتباط %s في الوحدة %s يشير إلى علاقة غير صالحة',
    'LBL_SCAN_422_TITLE' => 'الوحدة %s تتضمن تعريفًا لوحدة أخرى',
    'LBL_SCAN_525_TITLE' => 'وظيفة HTML لتعريفات متغيره في %s',
    'LBL_SCAN_423_TITLE' => 'حقول فرعية سيئة لتعريفات متغيره - %s يشير إلى حقل فرعي سيئ %s. في الوحدة %s',
    'LBL_SCAN_424_TITLE' => 'تم العثور على تعليمات HTML برمجية في %s في السطر %s',
    'LBL_SCAN_425_TITLE' => 'تم العثور على "echo" في %s في السطر %s',
    'LBL_SCAN_426_TITLE' => 'تم العثور على "print" في %s في السطر %s',
    'LBL_SCAN_427_TITLE' => 'تم العثور على "die/exit" في %s في السطر %s',
    'LBL_SCAN_428_TITLE' => 'تم العثور على "print_r" في %s في السطر %s',
    'LBL_SCAN_429_TITLE' => 'تم العثور على "var_dump" في %s في السطر %s',
    'LBL_SCAN_430_TITLE' => 'تم العثور على تخزين مؤقت للمخرجات (%s) في %s في السطر %s',
    'LBL_SCAN_431_TITLE' => 'تم العثور على قالب Smarty مخصص: "%s"',
    'LBL_SCAN_436_TITLE' => 'تم العثور على قالب PDF مخصص: "%s"',
    'LBL_SCAN_437_TITLE' => 'قالب Smarty غير متوافق مع بناء جملة Smarty3: "%s"',
    'LBL_SCAN_438_TITLE' => 'تم العثور على قالب PDF مخصص لا يمكن تحويله تلقائيًا إلى بناء جملة Smarty3: "%s"',
    'LBL_SCAN_439_TITLE' => 'القالب غير متوافق مع بناء جملة Smarty3، تم تخطي: "%s"',
    'LBL_SCAN_451_TITLE' => 'تم حذف تعليمات المصادقة البرمجية، استخدم \IdMSugarAuthenticate أو \IdMSAMLAuthenticate أو \IdMLDAPAuthenticate بدلأ من ذلك. الملفات ذات التعليمات البرمجية المحذوفة: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'وظيفة لتعريفات متغيره لـ HTML %s في وحدة %s للحقل %s',
    'LBL_SCAN_432_TITLE' => 'تعريفات متغيره سيئة - &#39;الاسم&#39; نوع الحقل تالف &#39;%s&#39;، الوحدة - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => 'تم العثور على ملفات بحث مرنة مخصصة %s',
    'LBL_SCAN_434_TITLE' => 'تم العثور على استخدام وظائف المصفوفة في $_SESSION في الملفات: %s',
    'LBL_SCAN_435_TITLE' => 'العثور على استخدام فئة SugarSession التي تمت إزالتها',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => 'هناك ملف مفقود: %s',
    'LBL_SCAN_502_TITLE' => 'هناك حالة عدم مطابقة لـ md5 لـ %s، المتوقع %s',
    'LBL_SCAN_503_TITLE' => 'هناك وحدة فرعية لها نفس الاسم مثل وحدة Sugar7 الجديدة: %s',
    'LBL_SCAN_504_TITLE' => 'هناك نوع حقل مفقود في الوحدة %s: %s',
    'LBL_SCAN_505_TITLE' => 'هناك تغيير في النوع في %s للحقل %s: من %s إلى %s',
    'LBL_SCAN_506_TITLE' => '$this الاستخدام في %s',
    'LBL_SCAN_507_TITLE' => 'حقول فرعية سيئة لتعريفات متغيره - %s يشير إلى %s حقل فرعي سيئ %s. في الوحدة %s',
    'LBL_SCAN_508_TITLE' => 'تم العثور على تعليمات HTML برمجية في %s في السطر %s',
    'LBL_SCAN_509_TITLE' => 'تم العثور على "echo" في %s في السطر %s',
    'LBL_SCAN_510_TITLE' => 'تم العثور على "print" في %s في السطر %s',
    'LBL_SCAN_511_TITLE' => 'تم العثور على "die/exit" في %s في السطر %s',
    'LBL_SCAN_512_TITLE' => 'تم العثور على "print_r" في %s في السطر %s',
    'LBL_SCAN_513_TITLE' => 'تم العثور على "var_dump" في %s في السطر %s',
    'LBL_SCAN_514_TITLE' => 'تم العثور على تخزين مؤقت للمخرجات (%s) في %s في السطر %s',
    'LBL_SCAN_515_TITLE' => 'فشل الاسكربت: %s',
    'LBL_SCAN_517_TITLE' => 'تكامل غير متوافق - %s %s',
    'LBL_SCAN_526_TITLE' => "تعريفات متغيره سيئة - الحقل \"%s\" متعدد الأرقام المحتوي على مفاتيح \"%s\" لقائمة الخيارات يحتوي على حروف غير متوافقة - \"%s\" في الوحدة %s",
    'LBL_SCAN_528_TITLE' => 'الحقل %s في وحدة %s يحتوي على قيمة display_default غير صحيحة',
    'LBL_SCAN_529_TITLE' => '%s: %s في الملف %s في السطر %s',
    'LBL_SCAN_530_TITLE' => 'هناك ملف مخصص مفقود: %s',
    'LBL_SCAN_531_TITLE' => 'برنامج تشغيل قاعدة البيانات المهملة: %s',
    'LBL_SCAN_532_TITLE' => 'استدعاء منشيء PHP4 لأصل الأسهم في %s',
    'LBL_SCAN_533_TITLE' => 'استدعاء منشيء PHP4 للأصل المخصص في %s',
    'LBL_SCAN_534_TITLE' => 'برنامج تشغيل قاعدة البيانات غير المدعمة:%s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'إعادة تعيين بيانات تكامل غير متوافقة - %s %s',
    'LBL_SCAN_541_TITLE' => 'تسلسل SugarBPM غير صالح - %s تسلسل (تسلسلات) غير صالحة في العمود %s بالجدول %s: %s',
    'LBL_SCAN_542_TITLE' => 'استخدام حقل SugarBPM غير صالح - %s حقل (حقول) غير صالحة مستخدمة في %s.',
    'LBL_SCAN_545_TITLE' => 'تأمين جزئي من SugarBPM لمجموعة الحقول - الوحدة %3$s: المجموعة %s مؤمنة جزئيًا في تعريف العملية %s.',
    'LBL_SCAN_546_TITLE' => 'تهيئة TinyMCE لقاعدة معارف مخصصة',
    'LBL_SCAN_547_TITLE' => 'استخدام توقيع `resetLoadFlag` في %s',
    'LBL_SCAN_548_TITLE' => 'استخدام أسلوب `initButtons`المهمل في %s',
    'LBL_SCAN_549_TITLE' => 'استخدام توقيع `getField` الذي تم إزالته في %s',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => 'تم العثور على قيم غير متوقعة في رسائل البريد الإلكتروني',
    'LBL_SCAN_571_TITLE' => 'يحتوي الملف المخصص على رمز مهمل',
    'LBL_SCAN_572_TITLE' => 'هناك تعارض في الاسم مع ملف مخصص',
    'LBL_SCAN_573_TITLE' => 'هناك تعارض في الاسم مع ملف تعليمات مخصص',
    'LBL_SCAN_574_TITLE' => 'توجد تخصيصات للوحة الفرعية لرسائل البريد الإلكتروني',
    'LBL_SCAN_575_TITLE' => 'توجد تخصيصات للوحة الفرعية لجهات الاتصال في البريد الإلكتروني',
    'LBL_SCAN_576_TITLE' => 'تم الكشف عن تخصيصات السطح',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'تم اكتشاف عبارات محظورة',
    'LBL_SCAN_586_TITLE' => 'تم اكتشاف استخدام مهمل لـ FontAwesome',

    'LBL_SCAN_901_TITLE' => 'تمت ترقية المثيل بالفعل إلى Sugar 7',
    'LBL_SCAN_903_TITLE' => 'إصدار برنامج ترقية غير مدعوم.',
    'LBL_SCAN_904_TITLE' => 'تم العثور على قيم فارغة في سلاسل قوائم الوحدات',
    'LBL_SCAN_999_TITLE' => 'فشل غير معروف، يرجى استشارة الدعم',

    'LBL_SCAN_101_DESCR' => 'تم اكتشاف تخصيصات Studio في المثيل الخاص بك.  لا نتوقع أي مشكلات مع هذه التخصيصات، وتمت ترقية التخصيصات الخاصة بك إلى Sugar7.',
    'LBL_SCAN_102_DESCR' => 'تم اكتشاف تخصيصات Studio في المثيل الخاص بك.  لا نتوقع أي مشكلات مع هذه التخصيصات، وتمت ترقية التخصيصات الخاصة بك إلى Sugar7.',
    'LBL_SCAN_103_DESCR' => 'تم اكتشاف تخصيصات Studio في المثيل الخاص بك.  لا نتوقع أي مشكلات مع هذه التخصيصات، وتمت ترقية التخصيصات الخاصة بك إلى Sugar7.',
    'LBL_SCAN_104_DESCR' => 'تم اكتشاف تخصيصات Studio في المثيل الخاص بك.  لا نتوقع أي مشكلات مع هذه التخصيصات، وتمت ترقية التخصيصات الخاصة بك إلى Sugar7.',
    'LBL_SCAN_105_DESCR' => 'تم اكتشاف تخصيصات Studio في المثيل الخاص بك.  لا نتوقع أي مشكلات مع هذه التخصيصات، وتمت ترقية التخصيصات الخاصة بك إلى Sugar7.',

    'LBL_SCAN_201_DESCR' => 'تم اكتشاف تخصيصات Studio في المثيل الخاص بك.  لا نتوقع أي مشكلات مع هذه التخصيصات، وتمت ترقية التخصيصات الخاصة بك إلى Sugar7.',

    'LBL_SCAN_301_DESCR' => 'تم اكتشاف تخصيصات معينة ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_302_DESCR' => 'تم اكتشاف طرق عرض ملفات غير معروفة ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_303_DESCR' => 'تم اكتشاف ملفات نماذج غير فارغة ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_304_DESCR' => 'تم اكتشاف ملفات غير معروفة (%s) ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_305_DESCR' => 'تم اكتشاف تعريفات متغيره سيئة (%s: %s) %s ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذا التخصيص إلا أنه سيعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_306_DESCR' => 'تم اكتشاف تعريفات متغيره سيئة ولم يتم ترحيلها إلى Sugar7.  حقل الربط (%s) %s يحتوي على وحدة "فارغة"). ستستمر إتاحة هذا التخصيص إلا أنه سيعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_307_DESCR' => 'تم اكتشاف تعريفات متغيره سيئة ولم يتم ترحيلها إلى Sugar7. الارتباط (%s) %sيشير إلى علاقة غير صالحة.  ستستمر إتاحة هذا التخصيص إلا أنه سيعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_308_DESCR' => 'تم اكتشاف تخصيصات معينة ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_309_DESCR' => 'شفرة هاش md5 لـ %s لا تتطابق مع الملف القياسي.  ربما تم تعديل هذا الملف ولن تتم ترقيته إلى Sugar7',
    'LBL_SCAN_310_DESCR' => 'تم اكتشاف ملفات طريقة عرض غير معروفة (%s) ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_311_DESCR' => 'تم اكتشاف تخصيصات معينة ولم يتم ترحيلها إلى Sugar7.  ستستمر إتاحة هذه الوحدة (%s) إلا أنها ستعمل في وضع التوافق العكسي في Sugar7.',
    'LBL_SCAN_312_DESCR' => 'تم اكتشاف تعريفات متغيره سيئة ولم يتم ترحيلها إلى Sugar7. تعريفات متغيرات سيئة: نوع حقل &#39; الاسم&#39; غير صالح &#39;%s&#39; للوحدة &#39;%s&#39;.  ستستمر إتاحة هذا التخصيص إلا أنه سيعمل في وضع التوافق العكسي في Sugar7. ',
    'LBL_SCAN_313_DESCR' => 'تم اكتشاف دليل الامتدادات - %s ليست وحدة باني وحدات.  ستستمر إتاحة هذه الوحدة، ولكن في وضع التوافق العكسي فقط.',

    'LBL_SCAN_401_DESCR' => 'الملف المخصص يشتمل على ملف تم نقله إلى دليل البائع.  لقد حاولنا اتخاذ إجراء تصحيحي، ولا يلزم اتخاذ أي إجراءات إضافية.',
    'LBL_SCAN_402_DESCR' => 'وحدة %s سيئة - ليست موجودة في قائمة المكونات البرمجية (beanList) وليست في نظام الملفات',
    'LBL_SCAN_403_DESCR' => 'بعض ملفات Sugar غيرت موقعها في Sugar 7. يجب أن تقوم بتصحيح مسارات التضمين الخاصة بها.',
    'LBL_SCAN_520_DESCR' => 'هذة الأداة الإضافية المنطقية لم تعد مدعومة في Sugar 7',
    'LBL_SCAN_521_DESCR' => 'هذة الأداة الإضافية المنطقية لم تعد مدعومة في Sugar 7',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'وحدة المخزون في Sugar تحتوي على طرق عرض مخصصة في custom/modules/%s/views',
    'LBL_SCAN_407_DESCR' => 'وحدة المخزون في Sugar تحتوي على طرق عرض مخصصة في modules/%s/views',
    'LBL_SCAN_408_DESCR' => 'تم العثور على مكونات اتخاذ الإجراءات المخصصة في %s. سيتم نسخ هذه المكونات وتعديلها لتمديد مكون الإنشاء بدلاً من ذلك أثناء الترقية',
    'LBL_SCAN_409_DESCR' => 'تم إهمال سمة "link_file" في التعريفات المتغيرة. يجب أن تكون فئة الارتباط قابلة للتحميل التلقائي',
    'LBL_SCAN_519_DESCR' => 'وحدة المخزون في Sugar لها أحد الامتدادات التي لا ندعمها للترقية، مثل التوجيه المخصص، والتحكم في الوصول، وJavascript، وما إلى ذلك.',
    'LBL_SCAN_518_DESCR' => 'تشتمل تعريفات متغيره على تعريفات customCode للمستخدم لا نعلم كيف نقوم بتحويلها',
    'LBL_SCAN_410_DESCR' => 'هناك الكثير للغاية من الحقول في طريقة العرض',
    'LBL_SCAN_522_DESCR' => 'يتم جلب بيانات اللوحة الفرعية من خلال دالة، ولا ندعم كيف ندعم ترقية ذلك بعد.',
    'LBL_SCAN_412_DESCR' => 'تشير اللوحة الفرعية إلى ارتباط غير موجود أو غير معرف بشكل صحيح',
    'LBL_SCAN_413_DESCR' => 'يشير الحقل إلى اسم فئة أداة ليس له اسم فئة أداة مطابق',
    'LBL_SCAN_414_DESCR' => 'تمت معالجة حقول غير معروفة من خلال CRYS-36، لذا لن يتم إجراء المزيد من الفحوص هنا',
    'LBL_SCAN_415_DESCR' => 'أداة الإضافة المنطقية تشير إلى ملف غير موجود',
    'LBL_SCAN_523_DESCR' => 'ملف أداة الإضافة المنطقية القديم يستخدم تمرير معلمة by-reference، مما يمكن أن يؤدي إلى ظهور رسالة خطأ (وبالتالي حدوث مشكلات في REST)',
    'LBL_SCAN_417_DESCR' => 'تم اكتشاف تغذيات وحدات أو iFrames، وهي ما لا يجب أن تكون موجودة بعد ذلك',
    'LBL_SCAN_418_DESCR' => 'تشير اللوحة الفرعية إلى وحدة غير موجودة',
    'LBL_SCAN_419_DESCR' => 'لا يطابق مفتاح تعريفات متغيره اسم تعريفات متغيره',
    'LBL_SCAN_420_DESCR' => 'يحتوي تعريفات متغيره على حقول ربط تشير إلى العلاقات التي لا يمكن تحميلها بشكل صحيح',
    'LBL_SCAN_421_DESCR' => 'يحتوي تعريفات متغيره على حقل ارتباط لا يمكن تحميله بالشكل الصحيح',
    'LBL_SCAN_422_DESCR' => 'الوحدة %s تتضمن تعريفًا لوحدة %s أخرى في الملف %s',
    'LBL_SCAN_525_DESCR' => 'يحدد تعريفات متغيره enum الناجم عن دالة HTML، وهو أمر غير مدعوم في Sugar7',
    'LBL_SCAN_423_DESCR' => 'تعريفات متغيره تعرف على أنها الحقول المركبة التي تحتوي على حقول فرعية، وواحد من هذه الحقول الفرعية غير موجود بشكل فعلي',
    'LBL_SCAN_424_DESCR' => 'الملف يحتوي على HTML مضمن',
    'LBL_SCAN_425_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_426_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_427_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_428_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه. لاحظ أن print_r(..., true) مسموح به.',
    'LBL_SCAN_429_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_430_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_431_DESCR' => 'سيتم تحويله ليتوافق مع بناء جملة Smarty3',
    'LBL_SCAN_436_DESCR' => 'سيتم تحويله ليتوافق مع بناء جملة Smarty3',
    'LBL_SCAN_437_DESCR' => 'يوجد بناء جملة في ملف .tpl لا يمكن تحويله ليتوافق مع Smarty3. الرجاء إصلاح ذلك يدويًا من أجل ترقية المثيل.',
    'LBL_SCAN_438_DESCR' => 'لا يمكن تحويل قالب PDF مخصص ليتوافق مع بناء جملة Smarty 3. الرجاء إصلاح ذلك يدويًا من أجل ترقية المثيل.',
    'LBL_SCAN_439_DESCR' => 'يوجد بناء جملة في ملف .tpl لا يمكن تحويله ليتوافق مع Smarty3. تم تخطي ذلك. إذا كان هذا قالب Smarty صحيح، الرجاء إصلاح ذلك يدويًا.',
    'LBL_SCAN_451_DESCR' => 'تم حذف رمز المصادقة. استخدم \IdMSugarAuthenticate أو \IdMSAMLAuthenticate أو \IdMLDAPAuthenticate بدلاً من ذلك',
    'LBL_SCAN_524_DESCR' => 'الحقل معرف على أنه HTML ينتج الدوال ولا يمكن تحويله بشكل تلقائي (نعرف كيف يمكن تحويل بعض حقول المخزون مثل عناوين البريد الإلكتروني والعملات)',
    'LBL_SCAN_432_DESCR' => 'الحقل &#39;الاسم&#39; له نوع مختلف عن الاسم، أو الاسم الكامل، أو الحرف المتغير، أو المعرّف',
    'LBL_SCAN_433_DESCR' => 'تم العثور على ملفات بحث مرنة مخصصة %s',
    'LBL_SCAN_434_DESCR' => 'تم العثور على استخدام وظائف المصفوفة في $_SESSION في الملفات: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => 'أحد الملفات الرئيسية غير موجود في المثيل',
    'LBL_SCAN_502_DESCR' => 'تم تعديل أحد الملفات الرئيسية في هذا المثيل',
    'LBL_SCAN_503_DESCR' => 'هناك وحدة فرعية لها نفس الاسم مثل إحدى وحدات Sugar الجديدة',
    'LBL_SCAN_504_DESCR' => 'تعريف حقل تعريفات متغيره يحذف النوع',
    'LBL_SCAN_505_DESCR' => 'تم تغيير نوع حقل غير blob إلى نوع حقل blob. وهذا أمر غير مسموح به لأن أنواع blob لا يمكن فهرستها، ويمكن أن تكون لدينا عوامل تصفية تعتمد على فهرسة هذا الحقل.',
    'LBL_SCAN_506_DESCR' => 'يتم استخدام $this في ملف بيانات التعريف. حيث إن ملف بيانات التعريف يتم تحميله في سياق مختلف في Sugar7، يمكن أن يفشل هذا الملف.',
    'LBL_SCAN_507_DESCR' => 'تعريفات متغيره تعرف على أنها الحقول المركبة التي تحتوي على حقول فرعية، وواحد من هذه الحقول الفرعية غير موجود بشكل فعلي',
    'LBL_SCAN_508_DESCR' => 'الملف يحتوي على HTML مضمن',
    'LBL_SCAN_509_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_510_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_511_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_512_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه. لاحظ أن print_r(..., true) مسموح به.',
    'LBL_SCAN_513_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_514_DESCR' => 'التعليمات البرمجية تحتوي على دالة إنتاج النتائج هذه',
    'LBL_SCAN_515_DESCR' => 'فشل اسكربت الفحص، مما يعني أن instaScannerMeta.phpnce ربما يحتوي على تعليمات PHP برمجية سيئة حاول الاسكربت تحميلها.',
    'LBL_SCAN_517_DESCR' => 'تم اكتشاف حزمة تم وضعها في قائمة الرفض كونها غير مدعومة في Sugar7',
    'LBL_SCAN_526_DESCR' => "تحتوي هذه القائمة على قيم اسم العنصر التي تمنع الترقية.",
    'LBL_SCAN_528_DESCR' => 'حقل تاريخ / تاريخ ووقت / وقت يحتوي على قيمة display_default غير صحيحة مثل – بلا -',
    'LBL_SCAN_529_DESCR' => 'يمكن أن تنجم أخطاء PHP عن برنامج الترجمة عندما يتم العثور على سياق php غير صحيح أو بعض مشكلات التعليمات البرمجية لوقت التشغيل.',
    'LBL_SCAN_530_DESCR' => 'أحد الملفات المخصصة غير موجود في المثيل، إلا أنه قيد الاستخدام من خلال التعليمات البرمجية المخصصة.',
    'LBL_SCAN_531_DESCR' => 'تم إهمال برنامج تشغيل قاعدة البيانات %s. الرجاء النظر في استخدام %s بدلاً من ذلك.',
    'LBL_SCAN_532_DESCR' => 'فئة معلنة في %s تستدعي منشيء أصل الأسهم كـ %s::%s()',
    'LBL_SCAN_533_DESCR' => 'فئة معلنة في %s تستدعي منشيء الأصل المخصص كـ %s::%s()',
    'LBL_SCAN_534_DESCR' => 'لم يعد يتم دعم برنامج تشغيل قاعدة بيانات %s. يرجى النظر في استخدام %s بدلاً من ذلك.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'تم اكتشاف حزمة تم وضعها في قائمة الرفض لأنها غير مدعومة في إصدار Sugar المستهدف. يجب إلغاء تثبيت هذه الحزم وحذفها قبل الترقية. الرجاء ملاحظة أن إلغاء تثبيت هذه الحزم سيؤدي إلى إزالة الجداول والبيانات التي تم إنشاؤها من خلال الحزمة واستخدام وحدات الحزم.',
    'LBL_SCAN_541_DESCR' => 'تم اكتشاف بيانات في جداول إدارة العملية الخاصة بك غير متسلسلة أو غير قابلة للتحويل',
    'LBL_SCAN_542_DESCR' => 'تم العثور على حقول غير صالحة في قواعد و/أو إجراءات أعمال إدارة العملية الخاصة بك. يجب إزالة هذه الحقول من قواعد و/أو إجراءات الأعمال من أجل الترقية.',
    'LBL_SCAN_545_DESCR' => 'حقل مجموعة مؤمن جزئيا في تعريف عملية. يجب أن تكون هذه الحقول غير مؤمنة في تعريف العملية من أجل التقدم في الترقية.',
    'LBL_SCAN_546_DESCR' => 'لا يمكن ترحيل تهيئة TinyMCE في وحدة قاعدة المعارف. '
        . 'سيتم تفريع المعلمة tinyConfig في الملف %s. '
        . 'إذا كانت لديك أي مخصصات TinyMCE فينبغي حفظها قبل الترقية '
        . 'وإضافتها قبل الترقية يدويًا.',
    'LBL_SCAN_547_DESCR' => 'استخدام توقيع `resetLoadFlag` الذي تم إزالته في %s',
    'LBL_SCAN_548_DESCR' => 'استخدام أسلوب `initButtons` المهمل في %s',
    'LBL_SCAN_549_DESCR' => 'استخدام توقيع `getField` الذي تم إزالته في %s',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => 'تمت ترقية المثيل بالفعل إلى Sugar 7',
    'LBL_SCAN_903_DESCR' => 'إصدار برنامج ترقية غير مدعوم. الرجاء تثبيت حزمة SugarUpgradeWizardPrereq المناسبة',
    'LBL_SCAN_904_DESCR' => 'الملف: %s، الوحدات: %s',
    'LBL_SCAN_999_DESCR' => 'فشل غير معروف، يرجى استشارة الدعم',

    'LBL_SCAN_577_TITLE' => 'ترتيب قاعدة بيانات غير متوافق',
    'LBL_SCAN_577_LOG' => "الترتيب '%s' غير متوافق مع مجموعة الأحرف '%s'",
    'LBL_SCAN_577_DESCR' => "اختر ترتيبًا مختلفًا في الإعدادات المحلية الخاصة بك أو قم بإزالة التكوين 'dbconfigoption.collation' لاستخدام الترتيب الافتراضي.",

    'LBL_SCAN_578_TITLE' => 'غير قادر على إزالة جدول قاعدة البيانات المؤقتة: %s',
    'LBL_SCAN_578_LOG' => 'غير قادر على إزالة جدول قاعدة البيانات المؤقتة: %s',
    'LBL_SCAN_578_DESCR' => 'فشل حذف جدول مؤقت للمراجعة الآمنة لتحويل مجموعة الأحرف أثناء الترقية، وسوف يجب حذفه يدوياً',

    'LBL_SCAN_579_TITLE' => 'غير قادر على القيام بتحويل مجموعة الأحرف/الترتيب: (%s) في الجدول: %s',
    'LBL_SCAN_579_LOG' => 'غير قادر على القيام بتحويل مجموعة الأحرف/الترتيب: (%s) في الجدول: %s',
);