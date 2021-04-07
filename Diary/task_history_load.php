<?php
include("connect.php");
session_start();
$id=$_SESSION['id_user'];

$s="SELECT * FROM `Everybay` INNER JOIN Category ON Category.id_categ=Everybay.id_categ WHERE `id_user`=$id";
$rez=mysqli_query($link, $s);
$mas=array();
$n=mysqli_num_rows($rez);
 for($i=0; $i<$n; $i++){
     $row=mysqli_fetch_array($rez);
     $mas[$i]=$row;
 }
 echo json_encode($mas);
?>