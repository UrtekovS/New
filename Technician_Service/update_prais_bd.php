<?php
//session_start();
include("connect.php");
$names=$_POST['names'];
 $prices=$_POST['prices'];
 $photos=$_POST['photos'];
 //$id=$_SESSION['id'];
 $name_cat=$_POST['name_cat'];
$id=$_POST["id"];


 $s="UPDATE `products` SET `name`='$names',`price`='$prices',`photo`='$photos',`category_id`=$name_cat WHERE `id`=$id";
 mysqli_query($link,$s);
 echo $s;
 // echo "Редактирование задачи успешно завершено!";
  



?>