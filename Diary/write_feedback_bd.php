<?php
include("connect.php");
$name_inf=$_POST['name_inf'];
$informat=$_POST['informat'];
$phone=$_POST['photo'];
$s="";

$s="INSERT INTO `information`(`name_inf`, `informat`, `photo`) VALUES (name_inf, informat, photo)";
$r=mysqli_query($link,$s1);
    //header("Location:index.php?mess=Пользователь успешно зарегистрирован");
    echo "Отзыв добавлен, спасибо!";


?>