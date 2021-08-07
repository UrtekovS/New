<?php
include("connect.php");
$id=$_POST['id'];
//$price=$_POST['price'];
//$id=2;
$s="SELECT `id`,`price` FROM `products` WHERE `id`=$id";

$res=mysqli_query($link, $s);
$row=mysqli_fetch_array($res);
echo json_encode($row);

?>