<!DOCTYPE html>
<html>
	<head>	
		
		<title>Хабибуллина Д.</title> 
	</head>
	<body style="color: #636bc7">
<center>
		<h4>Хабибуллина Д.</h4>
		<h1>ЛР №4</h1>
		<h2>Вариант 11</h2>
<?php 
$connect = mysqli_connect("localhost", "root", "root", "progr")or die("Невозможно подключиться к серверу");
mysqli_query($connect, "SET NAMES utf8");		
?>
<h2>Языки программирования</h2>
<table border="1"> <tr> 
<th>Название</th><th>Тип</th><th>Год разработки</th><th>Тип выполнения</th><th>Автор</th></tr>
<?php $result=mysqli_query($connect,"SELECT id, name, type, year, vipl, author  FROM progrlanguages");
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['year'] . "</td>";
echo "<td>" . $row['vipl'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td><a href='edit.php?id=" .$row['id']."'>Редактировать</a></td>";
//запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" .$row['id']."'>Удалить</a></td>";
//запуск скрипта для удаления записи
echo "</tr>";}print "</table>";
$num_rows = mysqli_num_rows($result);
// число записей в таблице БД
print("<P>Количество языков программирования: $num_rows </p>");
?>		
<p> <a href="newyaz.php">Добавить язык</a>



						<h4>Разработчики</h4>		 
<table border="1"> <tr> 
<th> Название </th>   
<th> Город  </th>
 </tr>
<?php $result=mysqli_query($connect,"SELECT id, nominal, city  FROM developer");
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nominal'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td><a href='editdev.php?id=" .$row['id']."'>Редактировать</a></td>";
//запуск скрипта для редактирования
echo "<td><a href='deletedev.php?id=" .$row['id']."'>Удалить</a></td>";
//запуск скрипта для удаления записи
echo "</tr>";}print "</table>"; 
$num_rows1 = mysqli_num_rows($result);
// число записей в таблице БД
print("<P>Количество разработчиков: $num_rows1 </p>");

?>		
<p> <a href="newdev.php">Добавить разработчика</a>

	<h4>Приложения</h4>		 
<table border="1"> <tr> 
<th> Язык программирования </th>   
<th> Разработчик  </th>
<th> Дата создания </th> 
<th> Текущая версия </th>
<th> Название </th>  
 </tr>
<?php $result=mysqli_query($connect,"SELECT id, name_yaz, nom_d, date, version, title  FROM app");
while($row=mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['name_yaz'] . "</td>";
echo "<td>" . $row['nom_d'] . "</td>";
echo "<td>" . date_format(date_create_from_format('Y-m-d', $row['date']),'d.m.Y') . "</td>";
echo "<td>" . $row['version'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td><a href='editapp.php?id=" .$row['id']."'>Редактировать</a></td>";
//запуск скрипта для редактирования
echo "<td><a href='deleteapp.php?id=" .$row['id']."'>Удалить</a></td>";
//запуск скрипта для удаления записи
echo "</tr>";}print "</table>"; 
$num_rows1 = mysqli_num_rows($result);
// число записей в таблице БД
print("<P>Количество приложений: $num_rows1 </p>");
?>		
<p> <a href="newapp.php">Добавить приложение</a>

<p> <a href="gen_pdf.php">PDF</a>
<p> <a href="gen_xls.php">Сохранить Excel</a>

		
<p><a href="index.php">К списку ЛР</a></p>
</center>

	</body>
</html>
