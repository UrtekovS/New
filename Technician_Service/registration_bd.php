<?php
//session_start();
include("connect.php");
//print_r($_POST);
//Array ( [last_name] => 55 [first_name] => 66
// [patronymic] => vhng [phone] => 6556 [email] => 222@mail.ru
// [pass] => 11 [pass2] => 11 [date_of_brith] => 2021-03-24 [sex] => 1 )


$last_name=$_POST['last_name'];
$first_name=$_POST['first_name'];
//$patronymic=$_POST['patronymic'];
$phone=$_POST['phone'];
//$email=$_POST['email'];
//$pass1=md5(trim($_POST['pass1']));
$date_of_brith=$_POST['date_of_brith'];
$id_product_order=$_POST['id_product_order'];
$s="";

    $s1="INSERT INTO `users`(`last_name`, `first_name`, `phone`, `date_of_birth`, `registration_date`, `id_product_order`) VALUES ('$last_name','$first_name','$phone','$date_of_brith',CURRENT_DATE,'$id_product_order');";
    $r1=mysqli_query($link,$s1);
    //header("Location:index.php?mess=Пользователь успешно зарегистрирован");
    echo "Пользователь успешно зарегистрирован";


?>