<?php

Array Functions 
توفر PHP مجموعة غنية من الدوال الجاهزة التي تساعدك في البحث داخل المصفوفات، فرزها، دمجها، وتعديل عناصرها بسهولة دون الحاجة لكتابة حلقات تكرارية معقدة (Loops).
المكونات الرئيسية للدالة:
1. اسم الدالة (Function Name): يحدد اسم الدالة التي سيتم استدعاؤها.
2. المعاملات (Parameters): هي القيم التي يتم تمريرها إلى الدالة
3. القيمة المرجعة (Return Value): هي النتيجة التي تعيدها الدالة بعد تنفيذها.

أمثلة على دوال شائعة:

count()
array_push()
sort()
rsort()
in_array()
array_reverse()
array_merge()


echo "<h3>PHP Functions Example:</h3>";

// مثال 1: دالة بسيطة لا تقبل مدخلات ولا ترجع قيمة
function sayHello() {
    echo "<p>Hello World! This function just prints a message.</p>";
}

sayHello();


// مثال 2: دالة تقبل مدخلات وترجع قيمة
function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;

$result = addNumbers(10, 5); 

echo "<p>The result of adding 10 and 5 is: <strong>" . $result . "</strong></p>";
echo "<p>The result of adding 100 and 25 is: <strong>" . addNumbers(100, 25) . "</strong></p>";

?>