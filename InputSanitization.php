<?php
Input Sanitization

عندما يرسل المستخدم بيانات إلى خادمك (سواء كانت اسماً، بريداً إلكترونياً، أو كلمة مرور)،
 يجب أن تفترض أن هذه البيانات قد تكون ضارة أو غير صحيحة. عملية التعقيم 
 (Sanitization) هي تنظيف هذه البيانات من أي شفرات خبيثة، وعملية التحقق 
 (Validation) هي التأكد من أن البيانات تطابق التنسيق
  المطلوب (مثل التأكد من أن حقل العمر هو رقم فعلاً).

   دوال  فلاتر PHP (PHP Filters)
PHP توفر مجموعة من الدوال المدمجة التي تساعد في تعقيم والتحقق من صحة البيانات بسهولة.
بعض الدوال الشائعة تشمل:
filter_var(): تستخدم لتنظيف أو التحقق من متغير موجود بالفعل.
filter_input(): تستخدم لتنظيف البيانات فور استلامها من مدخلات POST, GET, COOKIE مباشرة.

مثال عملي

<?php

$name = $email = '';
$name_error = $email_error = '';
$success_message = '';

if (isset($_POST['submit'])) {
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($name)) {
        $name_error = "Name is required.";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        $email_error = "Email is required.";
    } elseif ($email === false) {
        $email_error = "Invalid email format.";
        $email = ''; 
    }
    
    if (empty($name_error) && empty($email_error)) {
        $success_message = "Data is valid and sanitized! Name: $name, Email: $email";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input Sanitization Demo</title>
  <style>
      .error { color: red; font-size: 0.8em; }
      .success { color: green; font-weight: bold; }
      input { display: block; margin-bottom: 5px; }
  </style>
</head>
<body>

  <h3>Input Validation and Sanitization in PHP</h3>

  <?php if ($success_message): ?>
      <div class="success"><?php echo htmlspecialchars($success_message); ?></div>
  <?php endif; ?>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label>Name: </label>
      <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
      <span class="error"><?php echo $name_error; ?></span>
    </div>
    <br>
    <div>
      <label>Email: </label>
      <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
      <span class="error"><?php echo $email_error; ?></span>
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>

</body>
</html>
?>
   