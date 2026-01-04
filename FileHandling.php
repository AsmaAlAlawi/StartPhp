<?php

File Handling

في PHP، يمكنك التعامل مع الملفات باستخدام مجموعة من الدوال المدمجة التي تتيح لك فتح الملفات، قراءتها، كتابتها، وإغلاقها بسهولة.
الاستخدامات الشائعة:
1. فتح الملفات (Opening Files): باستخدام دالة fopen() لفتح ملف في وضع معين (قراءة، كتابة، إلخ).
2. قراءة الملفات (Reading Files): باستخدام دوال مثل fread() أو file_get_contents()
3. كتابة إلى الملفات (Writing to Files): باستخدام دوال مثل fwrite() أو file_put_contents()
4. إغلاق الملفات (Closing Files): باستخدام دالة fclose() لإغلاق الملف بعد الان
تهاء من التعامل معه.

أمثلة على دوال شائعة:
fopen()
fread()
fwrite()
fclose()
file_get_contents()
file_put_contents()



$filename = "demo_log.txt";
$data_to_write = "This is a log entry added at " . date('Y-m-d H:i:s') . "\n";

echo "<h3>PHP File Handling Example:</h3>";


if (file_put_contents($filename, $data_to_write, FILE_APPEND) !== false) {
    echo "<p style='color: green;'>Successfully appended data to the file: <strong>$filename</strong></p>";
} else {
    echo "<p style='color: red;'>Error writing to file! Check folder permissions.</p>";
}

echo "<hr>";

if (file_exists($filename)) {
    $file_contents = file_get_contents($filename);
    
    echo "<h4>Contents of $filename:</h4>";
    echo "<div style='border: 1px solid #ccc; padding: 10px; background-color: #f9f9f9;'>";
    echo nl2br(htmlspecialchars($file_contents)); 
    echo "</div>";

} else {
    echo "<p>File not found after writing attempt.</p>";
}

?>
