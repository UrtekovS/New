<?php
session_start();
include("connect.php");
//$id_user=$_SESSION['id_user'];
$s="SELECT * FROM `products`INNER JOIN category ON category.id=products.category_id";

 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
 echo json_encode($mas);