<?php
session_start();
include("connect.php");
 $id=$_POST["id"];
  $id_user=$_SESSION['id_user']; 
 /* $s=""; */
 
 $s="SELECT * FROM `Everybay` WHERE `id_ever`=$id";
 $res=mysqli_query($link, $s);
$row=mysqli_fetch_array($res);

   echo json_encode($row);
?>