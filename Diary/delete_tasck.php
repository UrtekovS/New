<?php
include("connect.php");
$id_task=$_POST['id_task'];
 
   $s="DELETE FROM `Everybay` WHERE `id_ever`=$id_task";
   mysqli_query($link, $s);
   
  
?>