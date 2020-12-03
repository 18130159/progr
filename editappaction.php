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
<h2>Редактировать приложение</h2>
		<?php
$connect = mysqli_connect("localhost", "root", "root", "progr" ) or die ("Невозможно подключиться к серверу");
mysqli_query($connect, "SET NAMES utf8");
	$get_fio = $_GET['name'];
	$name = substr($_GET['name'], 0, (strlen($_GET['name'])-1));
	$num = substr($_GET['name'], -1, 1);
	$v = "num_res". $num;
	$hid = "" . $_GET[$v];
$str = (int)$hid;

$get_fio1 = $_GET['nominal'];
	$name1 = substr($_GET['nominal'], 0, (strlen($_GET['nominal'])-1));
	$num1 = substr($_GET['nominal'], -1, 1);
	$v1 = "num_resn". $num1;
	$hid1 = "" . $_GET[$v1];
$str1 = (int)$hid1;

$zapros1="UPDATE app SET id_yaz='" .$str."', name_yaz='" .$name.
"', id_d='" .$str1 ."', nom_d='" .$name1."', date='".$_GET['date'].
"', version='".$_GET['version']."', title='".$_GET['title']."' where id='".$_GET['id']."'";

mysqli_query($connect, $zapros1);
if (mysqli_affected_rows($connect)>0) {
echo 'Все сохранено. <a href="laba4.php"> <br>Вернуться к списку</a>'; }
else { echo 'Ошибка сохранения.'.mysqli_error($connect).' <a href="laba4.php"><br> Вернуться к списку</a> '; }
?> 
		
</div>
	</body>
</html