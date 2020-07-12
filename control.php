
<!DOCTYPE html>
<html>
<head>
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
?>

<style>
body{
background-image: url("paper.gif");
 
}
.button{
	border: none;
	color:black;
	padding:15px 32px;
	text-align:center;
	font-size:16px;
	display:black;
	cursor:pointer;
}
.Forwards{
  background-color:#cccccc;
border-radius:12px;
margin-left:300px;
margin-top:250px;
  }
.left{
  background-color:#cccccc;
border-radius:10px;
margin-left:300px;


  }
.stop{
 background-color:#cccccc;
border-radius:10px;
margin-center:12;
background-color: red;

  }
.right{
 background-color:#cccccc;
border-radius:10px;
   
  }
.backwards{
  background-color:#cccccc;
margin-left:300px;

  }
</style>
</head>
<body>
<form action="for.php" method="post">
<p>
  <a href ="forwards.php" > <button type= "button" name="Forwards" class="button Forwards">Forwards </button></a>
</p>
  <a href ="left.php" > <button type= "button" name="left" class="button left">left </button></a>

   <a href ="stop.php" > <button type= "button" name="stop" class="button stop">stop </button></a>

  <a href ="right.php" > <button type= "button" name="right" class="button right">right</button></a>
<p>
  <a href ="backwards.php" > <button type= "button" name="backwards" class="button backwards">backwards </button></a>
</p>

</form>
</body>
</html>
<?
	
		
		
