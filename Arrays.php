<?php

المصفوفات هي حاويات معقدة تخزن قيمًا متعددة. كل قيمة داخل المصفوفة تسمى "عنصر" (element) ويمكن الوصول إليها عادةً
 باستخدام فهرس (index) رقمي أو مفتاح (key) نصي فريد،
 مما يتيح لنا تخزين قوائم البيانات المنظمة واسترجاع أجزاء محددة منها بكفاءة.



1. إنشاء المصفوفات (Creating Arrays):
في PHP، يمكن إنشاء المصفوفات باستخدام دالة array() أو باستخدام الأقواس المربعة [].
مثال على إنشاء مصفوفة باستخدام دالة array():


// 1. مصفوفة مفهرسة رقمياً (Indexed Array)
$fruits = array("Apple", "Banana", "Cherry", "Date");

echo "<h3>Indexed Array Example:</h3>";
echo "<p>The array \$fruits holds multiple values: Apple, Banana, Cherry, Date.</p>";

$first_fruit = $fruits[0]; 
$third_fruit = $fruits[2]; 

echo "<p>Accessing the first element (index 0): <strong>" . $first_fruit . "</strong></p>";
echo "<p>Accessing the third element (index 2): <strong>" . $third_fruit . "</strong></p>";

echo "<hr>";

// 2. مصفوفة ترابطية (Associative Array)
$student_grades = array(
    "Math" => "A",
    "Science" => "B+",
    "History" => "C"
);

echo "<h3>Associative Array Example:</h3>";
echo "<p>The array \$student_grades holds data using text keys.</p>";

$math_grade = $student_grades["Math"]; 
$science_grade = $student_grades["Science"];

echo "<p>Accessing the element with key 'Math': <strong>" . $math_grade . "</strong></p>";
echo "<p>Accessing the element with key 'Science': <strong>" . $science_grade . "</strong></p>";

?>