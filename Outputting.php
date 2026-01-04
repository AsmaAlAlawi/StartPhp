<?php

Outputting 


تعتبر القدرة على إخراج البيانات هي الأساس الذي يجعل PHP لغة برمجة ويب ديناميكية.


 طرق لعرض المعلومات

 echo و print: لعرض سريع للمحتوى البسيط الموجه للمستخدم النهائي.
print_r() و var_dump(): لعرض تفصيلي لبنية البيانات الداخلية، موجه للمطورين أثناء البرمجة وتصحيح الأخطاء.
يمكن دمج PHP بسلاسة داخل ملفات HTML عن طريق استخدام واسم البداية <?php وواسم النهاية ?>.



$user_name = "Alex";
$user_age = 25;
$programming_languages = array("PHP", "JavaScript", "Python");


echo "<h4>Using echo:</h4>";
echo "<p>Welcome, " . $user_name . "! You are " . $user_age . " years old.</p>";


print "<h4>Using print:</h4>";
print "<p>Print works just like echo, but is slightly slower.</p>";


echo "<h4>Using print_r() for Arrays:</h4>";
print_r($programming_languages); 


echo "<h4>Using var_dump() for detailed info:</h4>";
var_dump($user_name);
var_dump($user_age);
var_dump($programming_languages); 

?>

<!DOCTYPE html>
<html lang="en">
<body>
  <h4>PHP inside HTML using short tag <?= ?> :</h4>
  <p>The first language you listed is: <strong><?= $programming_languages[0] ?></strong></p>
</body>
</html>

?>