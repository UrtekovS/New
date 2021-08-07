<?php
include("connect.php");
$id=$_POST['id'];
 
   $s="DELETE FROM `general_order` WHERE `id`=$id";
   mysqli_query($link, $s);
   
  
?>