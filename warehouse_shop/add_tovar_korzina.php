<?php
include("connect.php");
session_start();
$price=$_POST['price'];
$id_user=$_SESSION['id'];
$s="INSERT INTO `general_order`( `data`, `summa`,id_user) VALUES (CURRENT_TIMESTAMP,price,$id_user)";
$rez=mysqli_query($link,$s);
echo "Доавление задачи успешно завершено!";
// $s2="SELECT max(id) FROM `general_order`";
//  $rez=mysqli_query($link,$s2);
//  $mas=mysqli_fetch_array($rez);
// echo $mas[0];
?>