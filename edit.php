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
$rows=mysqli_query($connect, "SELECT name, type, year, vipl, author  FROM progrlanguages WHERE id=".$_GET['id']);
	while ($st = mysqli_fetch_array($rows)) {
	$id=$_GET['id'];
	$name  = $st['name'];
	$type = $st['type'];
	$year  = $st['year'];
	$vipl = $st['vipl'];
	$author = $st['author'];
	}
print "<form action='editaction.php' metod='get'>";
print "Марка: <input name='name' size='20' type='varchar'value='".$name."'>";
print "<br>Модель: <input name='type' size='20' type='varchar'value='".$type."'>";
print "<br>Тип разморозки: <input name='year' size='20' type='varchar'value='".$year."'>";
print "<br>Внутренний объем: <input name='vipl' size='10' type='varchar'value='".$vipl."'>";
print "<br>Срок гарантии: <input name='author' size='20' type='varchar'value='".$author."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Отредактировать'>";
print "</form>";
print "<p><a href=\"laba4.php\"> Вернуться к списку языков</a>";
?>  
</div>
</body>
</html>
