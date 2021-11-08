<?php
session_start();
include("connect.php");

//  if(move_uploaded_file($_FILES['img']['tmp_name'], 'img/info_img/' .$_FILES['img']['name'])) {
//      echo "Файл скопирован!";
//   } else{
//      move_uploaded_file($_FILES['img']['tmp_name'], 'img/info_img/' .$_FILES['img']['name'])
//     }
  
   
 
 
//  $id=$_SESSION['id'];
$id_user=$_SESSION['id_user'];
 $foto=$_POST['foto'];
 $name_inf=$_POST['name_inf'];
 $informat=$_POST['informat'];
 $email2=$_POST['email2'];
 
$s="INSERT INTO `information`(`id_user`, `name_inf`, `informat`, `img`, `email`) VALUES ($id_user,'$name_inf','$informat','$foto','$email2')";
   $rez=mysqli_query($link,$s);
   
 
 
  //echo "Ваш отзыв добавлен!!";
 
?>