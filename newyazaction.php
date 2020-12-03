<!DOCTYPE html>
<html>
	<head>	
		
		<title>Хабибуллина Д.</title> 
	</head>
	<body style="color: #636bc7">
		<h4>Хабибуллина Д.</h4>
		<h1>ЛР №2</h1>
		<h2>Вариант 11</h2>
<h2>Добавить новый язык программирования</h2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "progr" ); 
mysqli_query($connect, "SET NAMES utf8");
$sql_add = "INSERT INTO progrlanguages SET name='" . $_GET['name']."', type='".$_GET['type']."', year='".$_GET['year']."', vipl='".$_GET['vipl']."', author='".$_GET['author']. "'";
mysqli_query($connect, $sql_add); 
if (mysqli_affected_rows($connect)>0)
{ print "<p>Спасибо, вы добавили язык программирования.";
print "<p><a href=\"laba4.php\"> Вернуться к списку языков</a>"; }
else { print "Ошибка сохранения. <a href=\"laba4.php\"> Вернуться к списку языков</a>"; }
?>
</div>
	</body>
</html>
