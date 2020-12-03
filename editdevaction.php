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
<h2>Редактировать разработчика</h2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "progr" ); 
mysqli_query($connect, "SET NAMES utf8");
$zapros="UPDATE developer SET nominal='".$_GET['nominal']."', city='".$_GET['city']."'WHERE id=".$_GET['id'];
mysqli_query($connect, $zapros);
if (mysqli_affected_rows($connect)>0) {
echo 'Все сохранено. <a href="laba4.php"> <br>Вернуться к списку </a>'; }
else { echo 'Ошибка сохранения. <a href="laba4.php"><br> Вернуться к списку </a> '; }
?>	
</div></center>
</body>
</html>
