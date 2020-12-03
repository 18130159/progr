<?php
$connect = mysqli_connect("localhost", "root", "root", "progr" );
mysqli_query($connect, "SET NAMES utf8");
$zapros="DELETE FROM developer WHERE id=".$_GET['id'];
mysqli_query($connect, $zapros);
echo "<script>window.location.href='laba4.php'</script>";
exit;
?>