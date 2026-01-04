<?php

OOP

 أسلوب برمجة يركز على "الكائنات" بدلاً من مجرد الأوامر المتتالية.
  نحن نصمم "قوالب" (تسمى Classes) تصف كيف يجب أن يبدو شيء معين (مثل "سيارة" أو "مستخدم" أو "منتج")،
  ثم ننشئ نسخاً حقيقية (تسمى Objects) من هذه القوالب.


المفاهيم الأساسية التي يغطيها الكود هي:

الكلاس (Class): القالب أو المخطط العام (Blueprint).
الكائن (Object): نسخة حقيقية تم إنشاؤها من القالب (مثال حي للمستخدم).
الخصائص (Properties): المتغيرات التي تصف حالة الكائن (الاسم، البريد الإلكتروني).
الوظائف (Methods): الدوال التي تحدد سلوك الكائن أو ما يمكنه فعله (تعيين الاسم، الحصول على الاسم، تسجيل الدخول).
الباني (__construct): دالة تعمل لحظة إنشاء الكائن لتجهيز البيانات الأولية.
الوراثة (Inheritance): القدرة على بناء كلاس جديد (مثل Employee) يعتمد على كلاس موجود (مثل User) لإعادة استخدام الكود وتوسيعه.


echo "<h3>PHP Object-Oriented Programming (OOP) Demo:</h3>";

class Book {
    public $title;
    public $author;
    private $is_available = true; 

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        echo "<p><em>New book object created: '{$this->title}'</em></p>";
    }

    public function getStatus() {
        if ($this->is_available) {
            return "Available";
        } else {
            return "Borrowed";
        }
    }
    
    public function borrowBook() {
        $this->is_available = false;
    }
}

$book1 = new Book("The Hitchhiker's Guide", "Douglas Adams");
$book2 = new Book("Dune", "Frank Herbert");

echo "<hr>";

echo "<p>Book 1 Title: <strong>" . $book1->title . "</strong></p>";
echo "<p>Book 2 Author: <strong>" . $book2->author . "</strong></p>";

echo "<p>Status of Book 1: <strong>" . $book1->getStatus() . "</strong></p>";

$book1->borrowBook();

echo "<p>Status of Book 1 after borrowing: <strong>" . $book1->getStatus() . "</strong></p>";

?>
