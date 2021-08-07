<?php
 session_start();
 include("connect.php");
 $id=$_SESSION['id'];
 $name=$_POST['name'];
 $price=$_POST['price'];
 $photo=$_POST['photo'];
 $kat=$_POST['kat'];
 $ed_tov=$_POST['ed_tov'];
 
 $s="
 INSERT INTO `products`(`id`, `name`, `price`, `photo`, `category_id`, `ed_tov`) VALUES ($id,'$name',$price,'$photo',$kat,'$ed_tov')";
  $rez=mysqli_query($link,$s);
  echo "товар успешно добавлена!";