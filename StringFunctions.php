<?php
String Functions



دوال السلاسل النصية هي أدوات مدمجة في PHP تساعدك على تنفيذ عمليات شائعة مثل حساب طول النص،
 البحث عن كلمات معينة، استبدال أجزاء من النص، أو تغيير حالة الأحرف (كبيرة/صغيرة).

 الاستخدامات الشائعة:
قياس الطول (Length): معرفة عدد الأحرف في السلسلة.
التعديل (Modification): تغيير محتوى السلسلة أو تنسيقها.
البحث والاستبدال (Search & Replace): العثور على جزء معين من النص وتغييره.
التجزئة (Splitting): تقسيم السلسلة النصية إلى أجزاء أصغر أو إلى مصفوفة.


أمثلة على دوال
strlen()
str_replace()
strpos()
substr()

<?php


$greeting = "   Welcome to PHP Programming!   ";

echo "<p><strong>Original String:</strong> '" . $greeting . "'</p><hr>";


// 1. استخدام الدالة trim() لتنظيف المسافات
$trimmed_greeting = trim($greeting);
echo "<p><strong>After trim():</strong> '" . $trimmed_greeting . "'</p>";


// 2. استخدام الدالة strlen() لحساب الطول بعد التنظيف
$length = strlen($trimmed_greeting);
echo "<p><strong>Length (strlen):</strong> " . $length . " characters.</p>";


// 3. استخدام الدالة str_word_count() لحساب عدد الكلمات
$word_count = str_word_count($trimmed_greeting);
echo "<p><strong>Word Count (str_word_count):</strong> " . $word_count . " words.</p>";


// 4. استخدام الدالة strtoupper() لتحويل الأحرف إلى كبيرة
$uppercase_greeting = strtoupper($trimmed_greeting);
echo "<p><strong>After strtoupper():</strong> " . $uppercase_greeting . "</p>";


// 5. استخدام الدالة str_replace() لاستبدال كلمة
$new_greeting = str_replace("PHP", "Web", $trimmed_greeting);
echo "<p><strong>After str_replace(PHP -> Web):</strong> " . $new_greeting . "</p>";

// 6. استخدام الدالة strpos() للعثور على موضع كلمة
$position = strpos($trimmed_greeting, "PHP");

if ($position !== false) {
    echo "<p><strong>After strpos():</strong> The word 'PHP' starts at position/index: " . $position . "</p>";
} else {
     echo "<p><strong>After strpos():</strong> The word was not found.</p>";
}

?>
