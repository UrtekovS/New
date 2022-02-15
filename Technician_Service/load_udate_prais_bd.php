<?php
//session_start();
include("connect.php");
 $id=$_POST['id'];
 
 $s="SELECT`name`,`price`,`photo`,category_id FROM `products` WHERE `id`=$id";

$res=mysqli_query($link, $s);
$row=mysqli_fetch_array($res);

echo json_encode($row);

   //echo json_encode($mas);
?>