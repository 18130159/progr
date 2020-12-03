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
$connect = mysqli_connect("localhost", "root", "root", "progr" );
mysqli_query($connect, "SET NAMES utf8");
$rows=mysqli_query($connect, "SELECT name_yaz, nom_d, date, version, title FROM app WHERE id=".$_GET['id']);
while ($st = mysqli_fetch_array($rows)) {
$id=$_GET['id'];
$name_yaz = $st['name_yaz'];
$nom_d = $st['nom_d'];
$date = $st['date'];
$version = $st['version'];
$title = $st['title'];
}
print "<form action='editappaction.php' method='get'>";
$rows1 = mysqli_query($connect, "SELECT id, name FROM progrlanguages ORDER BY id");
$i=0;
        while ($st = mysqli_fetch_array($rows1)) {
            $name[$i] = $st['name'];
            $id_zh[$i] = $st['id'];
            $i++;
        }
$rows2 = mysqli_query($connect, "SELECT id, nominal FROM developer ORDER BY id");
$j=0;
        while ($st1 = mysqli_fetch_array($rows2)) {
            $nominal[$j] = $st1['nominal'];
            $id_zh1[$j] = $st1['id'];
            $j++;
        }
 print "<input type='hidden' name='id' value='".$id."'> <br>";
//print "<br>Язык программирования: <input name='name_yaz' size='20' type='varchar'value='".$name_yaz."'><br>";
//print "<br>Разработчик: <input name='nom_d' size='20' type='date'value='".$nom_d."'><br>";
//print "<br>Дата создания: <input name='date' size='20' type='date'value='".$date."'><br>";
//print "<br>Текущая версия: <input name='version' size='50' type='varchar'value='".$version."'><br>";
//print "<br>Название: <input name='title' size='20' type='varchar'value='".$title."'><br>";

?>
Язык программирования:
<select name='name'>
        <?php
        for($i = 0; $name[$i] != null; $i++): ?>
            <option value="<?=$name[$i].$i?>"><?=$name[$i]?></option>
        <?php endfor;
        for($i = 0; $name[$i] != null; $i++){
$name = "num_res". $i;
$value = "" . $id_zh[$i];
print "<input type='hidden' name='".$name."' value='".$value."'>";
}
       ?>
<br><br>
Разработчик:
<select name='nominal'>
        <?php
        for($j = 0; $nominal[$j] != null; $j++): ?>
            <option value="<?=$nominal[$j].$j?>"><?=$nominal[$j]?></option>
        <?php endfor;
        for($j = 0; $nominal[$j] != null; $j++){
$nominal = "num_resn". $j;
$value1 = "" . $id_zh1[$j];
print "<input type='hidden' name='".$nominal."' value='".$value1."'>";
}
print "<br><br>Дата создания: <input name='date' size='20' type='date'value='".$date."'><br>";
print "<br>Текущая версия: <input name='version' size='50' type='varchar'value='".$version."'><br>";
print "<br>Название: <input name='title' size='20' type='varchar'value='".$title."'><br>";
        ?>
        </select><br>
<?php
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.php\"> Вернуться к списку</a>";
?> 
		
</div>
	</body>
</html>