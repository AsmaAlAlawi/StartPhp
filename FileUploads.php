<?php

File Uploads

  يمكنك السماح للمستخدمين بتحميل الملفات إلى الخادم باستخدام نموذج
   HTML ودوال PHP المدمجة.

1. إنشاء نموذج HTML لتحميل الملفات:

2. معالجة الملف المحمل في PHP:

<?php
$message = '';
$upload_dir = 'uploads/';
$allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];
$max_file_size = 1000000; 

if (isset($_POST['submit'])) {
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
        
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp  = $_FILES['upload']['tmp_name'];

        $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $target_file = $upload_dir . basename($file_name);

        if (!in_array($file_ext, $allowed_ext)) {
            $message = '<p style="color: red;">خطأ: نوع ملف غير صالح (' . $file_ext . ')! الأنواع المسموحة هي PNG, JPG, JPEG, GIF.</p>';
        } elseif ($file_size > $max_file_size) {
            $message = '<p style="color: red;">خطأ: حجم الملف كبير جداً! الحد الأقصى 1MB.</p>';
        } else {
            if (move_uploaded_file($file_tmp, $target_file)) {
                $message = '<p style="color: green;">تم رفع الملف بنجاح! يمكن رؤيته في مجلد ' . $upload_dir . '</p>';
            } else {
                $message = '<p style="color: red;">حدث خطأ أثناء نقل الملف إلى المجلد الدائم.</p>';
            }
        }

    } else {
        $message = '<p style="color: red;">الرجاء اختيار ملف للرفع.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Upload Demo</title>
</head>
<body>
  <h3>PHP File Upload Security and Validation</h3>
  
  <?php echo $message; ?>
  
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <label>Select image to upload (Max 1MB, JPG/PNG/GIF only):</label><br>
    <input type="file" name="upload" id="upload">
    <input type="submit" value="Upload Image" name="submit">
  </form>

</body>
</html>
?>