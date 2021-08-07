<?php
//session_start();
include("connect.php");
 $id=$_POST['id'];
// $name=$_POST['name'];
//  $price=$_POST['price'];
//  $photo=$_POST['photo'];
//  $name_categ=$_POST['name_categ'];
 $s="";
 
 $s="SELECT`name`,`price`,`photo`,category_id FROM `products` WHERE `id`=$id";
//  $rez=mysqli_query($link,$s);
//  $mas=array();
//  $n=mysqli_num_rows($rez);
//  for($i=0;$i<$n;$i++){
//     $row=mysqli_fetch_row($rez);
//     $mas[$i]=$row;

//  }
$res=mysqli_query($link, $s);
$row=mysqli_fetch_array($res);

echo json_encode($row);

   //echo json_encode($mas);
?>