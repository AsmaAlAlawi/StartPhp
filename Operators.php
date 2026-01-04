<?php

Conditional Control
في هذا المستند، سنستعرض كيفية استخدام عبارات التحكم الشرطية في لغة البرمجة PHP لاتخاذ قرارات بناءً على شروط معينة.   
1. عبارات if (If Statements):
تُستخدم عبارات if لتنفيذ كتلة من التعليمات البرمجية إذا تحقق شرط معين.

2. عبارات if-else (If-Else Statements):
تُستخدم عبارات if-else لتوفير مسار بديل من التعليمات البرمج
ية إذا لم يتحقق الشرط.

3. عبارات elseif (Elseif Statements):
تُستخدم عبارات elseif للتحقق من شروط متعددة.

4. عبارات switch (Switch Statements):
تُستخدم عبارات switch لمقارنة قيمة معينة بعدة حالات محتملة.


المقارنة (Comparison Operators)
هذه الرموز تُستخدم لاختبار العلاقة بين قيمتين، والنتيجة تكون دائماً قيمة منطقية (True أو False):
==   يساوي         (Equal)               $a == $b
===  يساوي تماماً   (Identical)           $a === $b
!=   لا يساوي      (Not Equal)           $a != $b
>    أكبر من       (Greater Than)        $a > $b
<    أصغر من       (Less Than)           $a < $b
>=   أكبر من أو يساوي (Greater Than or Equal To) $a >= $b
<=   أصغر من أو يساوي (Less Than or Equal To)    $a
<= $b
العمليات المنطقية (Logical Operators)
تُستخدم هذه الرموز لربط عدة شروط منطقية:
and (&&)  و           (Logical AND)        $a && $b
or (||)   أو          (Logical OR)         $a || $b
xor       إما ... أو     (Logical XOR)        $a xor $b
not (!)   ليس         (Logical NOT)        !$a


التعابير الشرطية المختصرة (Ternary Operator)
تُستخدم هذه التعابير لاختصار عبارات if-else في سطر واحد


مثال عملي:

$user_age = 20;
$required_age_for_vote = 18;
$current_status = 1; 
$user_role = "editor";


if ($user_age >= $required_age_for_vote) {
    echo "<p>Condition 1: Success! You are <strong>old enough</strong> to vote.</p>";
} else {
    echo "<p>Condition 1: Sorry, you are <strong>not old enough</strong> to vote yet.</p>";
}


// مثال 2: استخدام المعامل الثلاثي (Ternary Operator)

$status_message = ($current_status == 1) ? "Account is Active" : "Account is Inactive";

echo "<p>Condition 2: Status Check: <strong>" . $status_message . "</strong></p>";


// مثال 3: استخدام جمل Switch 

echo "<p>Condition 3: Checking user role using Switch:</p><ul>";

switch ($user_role) {
    case "admin":
        echo "<li>Welcome, full administrator.</li>";
        break;
    case "editor":
        echo "<li>Welcome, content editor.</li>";
    case "viewer":
        echo "<li>You have basic viewing privileges.</li>";
        break;
    default:
        echo "<li>Unknown user role.</li>";
        break;
}
echo "</ul>";

?>