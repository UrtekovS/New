<?php
//session_start();
include("connect.php");


$last_name=$_POST['last_name'];
$first_name=$_POST['first_name'];
$phone=$_POST['phone'];
$date_of_brith=$_POST['date_of_brith'];
$id_product_order=$_POST['id_product_order'];
$s="SELECT * FROM users WHERE DAYOFMONTH(date_of_birth)=DAYOFMONTH('$date_of_brith') and MONTH(date_of_birth)=MONTH('$date_of_brith')
 and  YEAR(date_of_birth)=YEAR('$date_of_brith')";

$rez=mysqli_query($link, $s);
$n=mysqli_num_rows($rez);
echo $n;
if($n!==0){ 
    echo "Эта дата занята -";
}else{
$s1="INSERT INTO `users`(`last_name`, `first_name`, `phone`, `date_of_birth`, `registration_date`, `id_product_order`) VALUES ('$last_name','$first_name','$phone','$date_of_brith',CURRENT_DATE,'$id_product_order');";
$r1=mysqli_query($link,$s1);
echo "Заявка успешно добавлена!";
}
// if ($n==0){

//     header("Location:index.php?mess=Пользователь успешно зарегистрирован");

// }
// else{
//     echo "На выбранную дату...";
// }

?>