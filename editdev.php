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
$rows=mysqli_query($connect, "SELECT nominal, city  FROM developer WHERE id=".$_GET['id']);
	while ($st = mysqli_fetch_array($rows)) {
	$id=$_GET['id'];
	$nominal  = $st['nominal'];
$city  = $st['city'];
	}
print "<form action='editdevaction.php' metod='get'>";
print "Название: <input name='nominal' size='20' type='varchar'value='".$nominal."'>";
print "<br>Город: <input name='city' size='20' type='varchar'value='".$city."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Отредактировать'>";
print "</form>";
print "<p><a href=\"laba4.php\"> Вернуться к списку языков</a>";
?> 
</center> 
</div>
</body>
</html>
