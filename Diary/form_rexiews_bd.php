<?php
 session_start();
 include("connect.php");
 $id=$_SESSION['id'];
 $id_user=$_SESSION['id_user'];
 $foto=$_POST['foto'];
 $name_inf=$_POST['name_inf'];
 $informat=$_POST['informat'];
 $email2=$_POST['email2'];
 
 
 $s="INSERT INTO `information`(`id`, `id_user`, `name_inf`, `informat`, `foto`, `email`) VALUES ($id,$id_user,'$foto','$name_inf','$informat','$email2')";
  $rez=mysqli_query($link,$s);
  //echo "Ваш отзыв добавлен!!";
  echo $s;
  
  
?>