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
		$connect = mysqli_connect("localhost", "root", "root", "progr");
		mysqli_query($connect, "SET NAMES utf8");

$rows1 = mysqli_query($connect, "SELECT id, nominal FROM developer ORDER BY id");
$i=0;
        while ($st = mysqli_fetch_array($rows1)) {
            $nominal[$i] = $st['nominal'];
            $id_zh[$i] = $st['id'];
            $i++;
        }
$rows2 = mysqli_query($connect, "SELECT id, name FROM progrlanguages ORDER BY id");
$j=0;
        while ($st1 = mysqli_fetch_array($rows2)) {
            $name[$j] = $st1['name'];
            $id_zh1[$j] = $st1['id'];
            $j++;
        }
?>
<form action="newappaction.php" metod="get">
Разработчик: <select name='nominal'>
        <?php
        for($i = 0; $nominal[$i] != null; $i++): ?>
            <option value="<?=$nominal[$i].$i?>"><?=$nominal[$i]?></option>
        <?php endfor;
        for($i = 0; $nominal[$i] != null; $i++){
$nominal = "num_res". $i;
$value = "" . $id_zh[$i];
print "<input type='hidden' name='".$nominal."' value='".$value."'>";
}
       ?>
<br>Язык программирования:
<select name='name'>
        <?php
        for($j = 0; $name[$j] != null; $j++): ?>
            <option value="<?=$name[$j].$j?>"><?=$name[$j]?></option>
        <?php endfor;
        for($j = 0; $name[$j] != null; $j++){
$name = "num_resn". $j;
$value1 = "" . $id_zh1[$j];
print "<input type='hidden' name='".$name."' value='".$value1."'>";
}
        ?>
<br>Дата создания: <input name="date" size="30" type="date">
<br>Текущая версия: <input name="version" size="30" type="varchar">
<br>Название: <input name="title" size="30" type="varchar">
</textarea>
<p><input name="add" type="submit" value="Добавить">
</form>
<p>  
</div>
</center>
	</body>
</html>
