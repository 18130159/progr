<!DOCTYPE html>
<html>
<head>	
<title>Хабибуллина Д.</title> 
</head>
<body style="color: #636bc7">
<h4>Хабибуллина Д.</h4>
<h1>ЛР №2</h1>
<h2>Вариант 11</h2>
<h2>Редактировать язык программирования</h2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "progr" ); 
mysqli_query($connect, "SET NAMES utf8");
$zapros="UPDATE progrlanguages SET name='".$_GET['name']."', type='".$_GET['type']."', year='".$_GET['year']."', vipl='".$_GET['vipl']."', author='".$_GET['author']."'WHERE id=".$_GET['id'];
mysqli_query($connect, $zapros);
if (mysqli_affected_rows($connect)>0) {
echo 'Все сохранено. <a href="laba4.php"> <br>Вернуться к списку языков</a>'; }
else { echo 'Ошибка сохранения. <a href="laba4.php"><br> Вернуться к списку языков</a> '; }
?>	
</div>
</body>
</html>
