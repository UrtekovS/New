<?php
session_start();
include("connect.php");
$task=$_POST['task'];
 $my_data=$_POST['my_data'];
 $id_user=$_SESSION['id_user'];
 $name_categ=$_POST['name_categ'];
$id=$_POST["id"];
 
 $s="UPDATE `Everybay` SET `id_categ`=$name_categ,`task`='$task',`my_data`='$my_data',`itogi`=0 WHERE `id_ever`=$id";
 mysqli_query($link,$s);
  echo "Редактирование задачи успешно завершено!";
  



?>