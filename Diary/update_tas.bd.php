<?php
session_start();
include("connect.php");
$id=$_POST["id"];
$id_user=$_SESSION['id_user']; 
$task=$_POST['task'];
 $my_data=$_POST['my_data'];
 $id_user=$_SESSION['id_user'];
 $name_categ=$_POST['name_categ'];
 $s="";
 
 $s="INSERT INTO `Everybay`( `id_user`, `id_categ`, `task`, `my_data`, `itogi`) 
 VALUES ($id_user, $name_categ, '$task', '$my_data', 0)";
  $rez=mysqli_query($link,$s);
  //echo "Доавление задачи успешно завершено!";
  



?>