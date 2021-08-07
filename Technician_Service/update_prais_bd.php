<?php
//session_start();
include("connect.php");
$names=$_POST['names'];
 $prices=$_POST['prices'];
 $photos=$_POST['photos'];
 //$id=$_SESSION['id'];
 $category_id=$_POST['category_id'];
$id=$_POST["id"];
 
 $s="UPDATE `products` SET `name`='$names',`price`='$prices',`photo`='$photos',`category_id`=$category_id WHERE `id`=$id";
 mysqli_query($link,$s);
 echo $s;
 // echo "Редактирование задачи успешно завершено!";
  



?>