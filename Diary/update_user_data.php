<?php
session_start();
include("connect.php");
$id=$_SESSION['id_user'];
$last_name=$_POST['last_name'];
$first_name=$_POST['first_name'];
$patronymic=$_POST['patronymic'];
$date_of_brith=$_POST['date_of_brith'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$s="";
if ($email!="" && $phone!="")
    $s="SELECT * FROM users WHERE (email='$email' or phone='$phone') and id_user<>$id";
else if ($email==""){
    $s="SELECT * FROM users WHERE phone='$phone' and id_user<>$id";
}
else{
    $s="SELECT * FROM users WHERE email='$email' and id_user<>$id ";
}
echo $s;
$r=mysqli_query($link,$s);
$n=mysqli_num_rows($r);
echo $n;
$mas=array('status'=>'','mess'=>'', 'login'=>'');
if ($n!=0){
    //header("Location:index.php?mess=Данный email или телефон уже зарегистрирован");
    //echo "Данный email или телефон уже зарегистрирован";
    $mas['status']=0;
    $mas['mess']="Данный email или телефон уже зарегистрирован";
   //echo $s;
}
else{
    $s1="UPDATE `users` SET 
    `last_name`='$last_name',`first_name`='$first_name',
    `patronymic`='$patronymic',`email`='$email',`phone`='$phone',
    `date_of_birth`='$date_of_brith',
    `sex`=$sex WHERE id_user=$id";
    $r1=mysqli_query($link,$s1);
    //header("Location:index.php?mess=Пользователь успешно зарегистрирован");
    $mas['status']=1;
    $mas['mess']="Данные успешно изменены";
    if (strlen($email)!=0){
        $mas['login']=$email;
    }
    else{
        $mas['login']=$phone;
    }
    $_SESSION['login']= $mas['login'];
    echo $s1;
   // echo "Пользователь успешно зарегистрирован";
}


echo json_encode($mas);

?>