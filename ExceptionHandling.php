<?php

Exception Handling

تُستخدم معالجة الاستثناءات (Exception Handling) للتعامل مع المواقف غير المتوقعة بطريقة منظمة
 ومنع انهيار البرنامج. هي تتيح لنا "فصل" الكود الطبيعي عن كود معالجة الأخطاء.

try: مكان وضع الكود الذي قد يفشل.
throw: أمر لإصدار إشارة خطأ عندما تحدث مشكلة ما (مثل القسمة على صفر).
catch: مكان "التقاط" إشارة الخطأ هذه والتعامل معها بشكل أنيق (عرض رسالة للمستخدم، تسجيل الخطأ، إلخ.).
finally: كتلة كود يتم تنفيذها دائماً، بغض النظر عما إذا كان الخطأ قد حدث أم لا 
(تُستخدم عادة لتنظيف الموارد المفتوحة مثل إغلاق اتصال قاعدة بيانات).


مثال:



function safeDivide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Cannot divide by zero! Please provide a non-zero denominator.");
    }
    return $numerator / $denominator;
}

echo "<h4>Attempt 1: Valid Division (10 / 2)</h4>";
try {
    $result = safeDivide(10, 2);
    echo "<p>Result: " . $result . "</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>An error occurred: " . $e->getMessage() . "</p>";
} finally {
    echo "<p style='color: gray;'>...End of division attempt 1 process.</p>";
}

echo "<hr>";

echo "<h4>Attempt 2: Invalid Division (10 / 0)</h4>";
try {
    $result = safeDivide(10, 0);
    echo "<p>Result: " . $result . "</p>"; 
} catch (Exception $e) {
    echo "<p style='color: red;'>An error occurred: <strong>" . $e->getMessage() . "</strong></p>";
} finally {
    echo "<p style='color: gray;'>...End of division attempt 2 process.</p>";
}


echo "<h4>Script Status:</h4>";
echo "<p>Script continues running smoothly because the errors were handled!</p>";

?>
