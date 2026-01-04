<?php
Superglobals



المتغيرات الشاملة الفائقة (PHP Superglobals) هي مصفوفات مدمجة ومُعرّفة مسبقاً في لغة PHP.
 يتميز هذه المتغيرات بكونها متاحة تلقائياً في كافة نطاقات البرنامج (Global Scope)،
  مما يعني أنه يمكن استخدامها في أي دالة أو ملف دون الحاجة إلى تعريفها أو تمريرها يدوياً.
تعمل هذه المتغيرات كـ"بوابات" للتواصل بين السكريبت الخاص بك والبيئة الخارجية، مثل متصفح المستخدم، الخادم، أو بيانات الجلسة.

أهم المتغيرات الفائقة واستخداماتها:

$_GET و $_POST: أهم متغيرين لاستقبال البيانات من المستخدم عبر نماذج HTML أو روابط URL.
$_SERVER: كنز معلوماتي يوفر تفاصيل تقنية دقيقة حول الاتصال الحالي والخادم الذي يستضيف الموقع.
$_SESSION و $_COOKIE: تستخدم لتتبع حالة المستخدم (تسجيل الدخول، سلة المشتريات) عبر صفحات متعددة.
$GLOBALS: تُستخدم للوصول إلى أي متغير عادي تم تعريفه خارج نطاق الدالة من داخل الدالة نفسها.

 مثال تطبيقي     

// 1. استخدام \$_SERVER لعرض معلومات أساسية عن الطلب الحالي
echo "<h4>Server Information:</h4>";
echo "<p>The script you are running is: <strong>" . $_SERVER['PHP_SELF'] . "</strong></p>";
echo "<p>Your IP address is: <strong>" . $_SERVER['REMOTE_ADDR'] . "</strong></p>";
echo "<p>The request method used is: <strong>" . $_SERVER['REQUEST_METHOD'] . "</strong></p>";


// 2. استخدام \$_GET لاستقبال بيانات من رابط URL
echo "<h4>GET Parameters (from URL):</h4>";

if (isset($_GET['user']) && isset($_GET['id'])) {
    $username = htmlspecialchars($_GET['user']);
    $user_id = htmlspecialchars($_GET['id']);
    
    echo "<p>Welcome, user: <strong>" . $username . "</strong> (ID: <strong>" . $user_id . "</strong>)</p>";
} else {
    echo "<p>No 'user' or 'id' parameters found in the URL.<br>";
    echo "Try adding: <code>?user=Ahmed&id=123</code> to the browser address bar.</p>";
}

?>
