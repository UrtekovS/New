<?php
 //session_start();
 include("connect.php");
 $task=$_POST['task'];
 $pricew=$_POST['pricew'];
 $foto=$_POST['foto'];
 //$id=$_SESSION['id'];
 $name_cat=$_POST['name_cat'];
 
 
 $s="INSERT INTO `products`(`name`, `price`, `photo`, `category_id`) VALUES ('$task',$pricew,'$foto','$name_cat')";
  $rez=mysqli_query($link,$s);
  echo "Задача успешно добавлена!";
  //echo $s;
  ?>