<?php

Sessions
الجلسات هي آلية تسمح بتخزين المعلومات على الخادم (Server-Side) بدلاً من متصفح المستخدم (Client-Side)، وجعل هذه المعلومات متاحة عبر صفحات متعددة لنفس الزائر خلال جلسة تصفح واحدة.

لأدوات الرئيسية للجلسات:
session_start(): إلزامية. يجب استدعاء هذه الدالة في بداية كل صفحة PHP تريد استخدام الجلسات فيها. تقوم ببدء جلسة جديدة أو استئناف جلسة حالية بناءً على معرف الجلسة الموجود.
$_SESSION: المتغير الشامل الفائق (Superglobal Array) المستخدم لتخزين وقراءة البيانات داخل الجلسة. يتم التعامل معه تماماً مثل مصفوفة PHP عادية.
session_unset() / session_destroy(): دوال تُستخدم لإنهاء الجلسة وحذف كافة بياناتها، وتُستخدم عادة عند تسجيل خروج المستخدم (Logout).


مثال تطبيقي

لاستعراض الجلسات، نحتاج إلى ملفين. الأول لتعيين البيانات في الجلسة، والثاني لقراءة هذه البيانات.


page1.php (تعيين البيانات)

<?php
 
// يجب استدعاء session_start() قبل أي إخراج HTML
session_start();

$_SESSION['username'] = "Joonguini";
$_SESSION['favcolor'] = "blue";
$_SESSION['is_logged_in'] = true;

echo "<h3>Page 1: Session Data Set</h3>";
echo "<p>Username and Favorite Color have been stored in the server session.</p>";
echo "<p><a href='page2.php'>Proceed to Page 2 to read data >></a></p>";
?>


page2.php (قراءة البيانات)

<?php
// يجب استدعاء session_start() لاستئناف الجلسة الحالية
session_start();

echo "<h3>Page 2: Reading Session Data</h3>";

if (isset($_SESSION['username'])) {
    echo "<p>Welcome back, <strong>" . htmlspecialchars($_SESSION['username']) . "</strong>!</p>";
    echo "<p>Your favorite color is: <strong>" . htmlspecialchars($_SESSION['favcolor']) . "</strong>.</p>";
    echo "<p><a href='logout.php'>Log Out (Destroy Session) >></a></p>";

} else {
    echo "<p>Session data not found. Please go back to <a href='page1.php'>Page 1</a> first.</p>";
}
?>
