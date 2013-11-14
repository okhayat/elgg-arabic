<?php
$language = array (
  'twitter_api' => 'خدمات تويتر',
  'twitter_api:requires_oauth' => 'تتطلب خدمات تويتر إضافة مكتبات oAuth وتمكينها.',
  'twitter_api:consumer_key' => 'Consumer Key',
  'twitter_api:consumer_secret' => 'Consumer Secret',
  'twitter_api:settings:instructions' => 'يجب أن تحصل على بيانات الاستخدام (consumer key و consumer secret) من <a href="https://dev.twitter.com/apps/new" target="_blank">تويتر</a>. اكتب بيانات التطبيق الجديد. اختر "Browser" لنوع التطبيق وصلاحيات القراءة والكتابة "Read & Write" للصلاحية. رابط callback هو %stwitter_api/authorize',
  'twitter_api:usersettings:description' => 'اربط حساب %s مع تويتر.',
  'twitter_api:usersettings:request' => 'يجب أولا أن <a href="%s">تعطي الصلاحيات</a> كي يستطيع %s الوصول إلى حساب تويتر الخاص بك.',
  'twitter_api:usersettings:cannot_revoke' => 'لا يمكنك فصل حسابك عن تويتر لأنك لم تُدخل عنوان بريدك الإلكتروني أو كلمة سرّ خاصة بك. <a href="%s">أضف بياناتك الآن</a>.',
  'twitter_api:authorize:error' => 'تعذر إعطاء صلاحيات تويتر',
  'twitter_api:authorize:success' => 'تم إعطاء صلاحيات تويتر.',
  'twitter_api:usersettings:authorized' => 'لقد أعطيت %s صلاحيات الوصول إلى حساب تويتر @%s الخاص بك.',
  'twitter_api:usersettings:revoke' => '<a href="%s">اسحب صلاحيات تويتر</a> التي منحتها.',
  'twitter_api:usersettings:site_not_configured' => 'يجب أن تقوم الإدارة أولاً بتهيئة إعدادات تويتر حتى يمكن استخدامها.',
  'twitter_api:revoke:success' => 'تم سحب صلاحيات تويتر.',
  'twitter_api:post_to_twitter' => 'إرسال تغريدات المستخدم إلى تويتر؟',
  'twitter_api:login' => 'السماح للمستخدمين بتسجيل الدخول باستخدام تويتر؟',
  'twitter_api:new_users' => 'السماح للمستخدمين الجدد بالتسجيل عبر حسابهم في تويتر حتى إن كان تسجيل المستخدمين معطلا؟',
  'twitter_api:login:success' => 'تم تسجيل دخولك.',
  'twitter_api:login:error' => 'تعذر تسجيل الدخول عبر تويتر.',
  'twitter_api:login:email' => 'يجب أن تدخل عنوان بريد إلكتروني صحيح لحساب %s الجديد.',
  'twitter_api:invalid_page' => 'الصفحة غير صحيحة',
  'twitter_api:deprecated_callback_url' => 'رابط callback URL لواجهة استخدام تويتر تغير إلى %s. رجاءً أبلغ الإدارة لتغييره.',
  'twitter_api:interstitial:settings' => 'تهيئة إعداداتك',
  'twitter_api:interstitial:description' => 'أنت على وشك استخدام %s! نحتاج فقط بعض التفاصيل الإضافية قبل أن تستمر. هذه البيانات اختيارية، لكن ستمكنك من الدخول في حال تعطل خدمة تويتر أو إن قمت بفصل حسابك عنه.',
  'twitter_api:interstitial:username' => 'هذا هو اسم المستخدم الخاص بك، ولا يمكن تغييره. إن حددت كلمة سرّ، يمكنك استخدام هذا الاسم أو عنوان بريدك الإلكتروني لتسجيل الدخول.',
  'twitter_api:interstitial:name' => 'هذا هو الاسم الذي يظهر للعامّة عند التواصل معك.',
  'twitter_api:interstitial:email' => 'عنوان بريدك الإلكتروني. عادة لا يظهر لأعضاء الموقع.',
  'twitter_api:interstitial:password' => 'كلمة سرّ تستخدمها في حالة تعطل تويتر أو فصل حسابك عنه.',
  'twitter_api:interstitial:password2' => 'كلمة السرّ نفسها، مجدداً.',
  'twitter_api:interstitial:no_thanks' => 'لا شكراً',
  'twitter_api:interstitial:no_display_name' => 'يجب أن تكتب الإسم.',
  'twitter_api:interstitial:invalid_email' => 'يجب أن تكتب عنوان بريد إلكتروني صحيح أو لا شيء.',
  'twitter_api:interstitial:existing_email' => 'عنوان البريد الإلكتروني مسجل مسبقاً على هذا الموقع.',
  'twitter_api:interstitial:password_mismatch' => 'كلمات السر غير متطابقة.',
  'twitter_api:interstitial:cannot_save' => 'تعذر حفظ تفاصيل الحساب.',
  'twitter_api:interstitial:saved' => 'تم حفظ تفاصيل الحساب!',
);
add_translation("ar", $language);