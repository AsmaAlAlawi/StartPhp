<?php

Loops & Iteration
في هذا المستند، سنستعرض كيفية استخدام الحلقات والتكرار في لغة البرمجة PHP لتنفيذ كتل من التعليمات البرمجية بشكل متكرر بناءً على شروط معينة أو عبر مجموعات من البيانات.   
1. حلقة for (For Loop):
تُستخدم حلقة for لتنفيذ كتلة من التعليمات البرمجية لعدد محدد من المرات.
2. حلقة while (While Loop):
تُستخدم حلقة while لتنفيذ كتلة من التعليمات البرمجية طالما تحقق شرط معين.
3. حلقة do-while (Do-While Loop):
تُستخدم حلقة do-while لتنفيذ كتلة من التعليمات البرمجية مرة واحدة على الأقل، ثم تكرارها طالما تحقق شرط معين.
4. حلقة foreach (Foreach Loop):
تُستخدم حلقة foreach للتكرار عبر عناصر المصفوفة أو الكائنات بسهولة.


echo "<h3>PHP Loops & Iteration Examples:</h3>";
// مثال 1: حلقة While (طباعة الأرقام من 1 إلى 5)
echo "<h4>1. While Loop Output:</h4>";
$counter = 1; 

while ($counter <= 5) { 
    echo "Number: " . $counter . "<br>";
    $counter++; 
}

// مثال 2: حلقة For (طباعة الأرقام من 0 إلى 4)
echo "<h4>2. For Loop Output:</h4>";

for ($i = 0; $i < 5; $i++) {
    echo "Number: " . $i . "<br>";
}

// مثال 3: حلقة Foreach (التنقل عبر عناصر مصفوفة)
echo "<h4>3. Foreach Loop Output (Fruits):</h4>";
$fruits_list = array("Mango", "Orange", "Grape", "Kiwi");

foreach ($fruits_list as $fruit) {
    echo "Fruit Name: " . $fruit . "<br>";
}

?>