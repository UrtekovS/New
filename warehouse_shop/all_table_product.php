<?php
session_start();
include("connect.php");
//session_start();
$id=$_SESSION['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$photo=$_POST['photo'];
$category_id=$_POST['category_id'];
$s="INSERT INTO `products`(`id`, `name`, `price`, `photo`, `category_id`) VALUES ($id,'$name',$price,'$photo',$category_id)";

 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
 echo json_encode($mas);

?>