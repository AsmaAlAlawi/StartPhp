<?php


GET & POST Methods

في هذا المستند، سنستعرض كيفية استخدام طريقتي GET و POST في PHP
    لاستقبال البيانات المرسلة من نماذج HTML.


1. طريقة GET (GET Method):
تُستخدم طريقة GET لإرسال البيانات عبر عنوان URL.
    يتم إرفاق البيانات في سلسلة الاستعلام (Query String) بعد علامة الاستفهام (?).
    تُستخدم هذه الطريقة عادةً للطلبات التي لا تتطلب أمانًا عاليًا، مثل عمليات البحث.

2. طريقة POST (POST Method):
تُستخدم طريقة POST لإرسال البيانات في جسم الطلب (Request Body).
    لا تظهر البيانات في عنوان URL، مما يجعلها أكثر أمانًا للبيانات الحساسة.
    تُستخدم هذه الطريقة عادةً للطلبات التي تتطلب أمانًا أعلى، مثل تسجيل الدخول أو إرسال نماذج تحتوي على معلومات حساسة.

مثال على نموذج HTML

$message = "";
if (isset($_POST['submit_form'])) {
    if (!empty($_POST['user_name'])) {
        $name = htmlspecialchars($_POST['user_name']);
        $message = "<p style='color: green;'>POST Data Received! Welcome, <strong>" . $name . "</strong>.</p>";
    } else {
        $message = "<p style='color: red;'>Error: Name field cannot be empty.</p>";
    }
}

if (isset($_GET['source'])) {
    $source = htmlspecialchars($_GET['source']);
    $message .= "<p style='color: blue;'>GET Data Received! You came from the <strong>" . $source . "</strong> link.</p>";
}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GET and POST Demo</title>
</head>
<body>

  <h2>PHP GET & POST Demonstration</h2>

  <?php echo $message; ?>

  <hr>
  <p>Pass data via URL parameters: 
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?source=homepage&track_id=456">Click to add GET data to URL</a>
  </p>

  <hr>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
      <label>Enter Name: </label>
      <!-- تم تغيير الاسم هنا إلى user_name ليكون أكثر وضوحاً -->
      <input type="text" name="user_name" required>
    </div>
    <br>
    <div>
      <label>Enter Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit_form" value="Send via POST">
  </form>

</body>
</html>
?>