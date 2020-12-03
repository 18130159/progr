<!DOCTYPE html>
<html>
	<head>	
		
		<title>Хабибуллина Д.</title> 
	</head>
	<body style="color: #636bc7">
<center>
		<h4>Хабибуллина Д.</h4>
		<h1>ЛР №5</h1>
		<h2>Вариант 11</h2>
<h2>Добавить нового разработчика</h2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "progr" ); 
mysqli_query($connect, "SET NAMES utf8");
$sql_add = "INSERT INTO developer SET nominal='" . $_GET['nominal']."', city='".$_GET['city']."'";
mysqli_query($connect, $sql_add); 
if (mysqli_affected_rows($connect)>0)
{ print "<p>Спасибо, вы добавили разработчика.";
print "<p><a href=\"laba4.php\"> Вернуться к списку таблиц</a>"; }
else { print "Ошибка сохранения. <a href=\"laba4.php\"> Вернуться к списку таблиц</a>"; }
?>
</div>
</center>
	</body>
</html>
