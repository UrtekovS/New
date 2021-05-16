<?php
include("connect.php");
$name_inf=$_POST['name_inf'];
$informat=$_POST['informat'];
$phone=$_POST['photo'];
$email=$_POST['email'];

$s="INSERT INTO `information`(`name_inf`, `informat`, `photo`) VALUES ('$name_inf', '$informat', '$phone')";
$r=mysqli_query($link,$s);
    //header("Location:index.php?mess=Пользователь успешно зарегистрирован");
    echo "Отзыв добавлен, спасибо!";
// echo json_encode($s);
?>