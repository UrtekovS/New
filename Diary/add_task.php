<?php
 session_start();
 include("connect.php");
 $task=$_POST['task'];
 $my_data=$_POST['my_data'];
 $id_user=$_SESSION['id_user'];
 $name_categ=$_POST['name_categ'];
 
 
 $s="INSERT INTO `Everybay`( `id_user`, `id_categ`, `task`, `my_data`, `itogi`) 
 VALUES ($id_user, $name_categ, '$task', '$my_data', 0)";
  $rez=mysqli_query($link,$s);
  echo "Задача успешно добавлена!";
  //echo $s;
  
  
  

 
 ?>