<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

try {
	// إجراء الإتصال
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// تعديل نوع معالج الأخطاء
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// لإنشاء جدول sql بناء
    $sql = "INSERT INTO users (Forwards) VALUES ('forwards.php')";
    // لتنفيذ الإستعلام لانه لن يكون هناك نتائج من عملية التنفيذ exec() نستخدم
    $conn->exec($sql);

    echo "تم اضافة سجل البيانات بنجاح";
}
catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

// إغلاق الإتصال 
$conn = null;