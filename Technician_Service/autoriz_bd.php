<?php
session_start();
include("connect.php");
$login=$_POST['login'];
$password=$_POST['password'];

$s="select admin_id from admin where (login='$login' and passwod='$password')";

//echo $s;
$res=mysqli_query($link, $s);
$n=mysqli_num_rows($res);
$mass=array("status"=> "", "mess"  => "", "login"=>"");
//echo $n;
if ($n==0){
   
   $mass['status']=0;
   $mass['mess']="Неверный логин или пароль";
}
else{
    $_SESSION['login']=$login;
    $row=mysqli_fetch_array($res);
    $_SESSION['admin_id']=$row[0];
    $mass['status']=1;
    $mass['login']=$login;
    $mass['mess']="Добро пожаловать,".$login;
}

echo json_encode($mass);



?>