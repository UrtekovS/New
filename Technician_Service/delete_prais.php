<?php
include("connect.php");
$id=$_POST['id'];
 
   $s="DELETE FROM `products` WHERE `id`=$id";
   mysqli_query($link, $s);
   
  
?>