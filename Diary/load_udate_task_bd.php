<?php
session_start();
include("connect.php");
 $id_ever=$_POST['id_ever'];
 $task=$_POST['task'];
 $my_data=$_POST['my_data'];
 $id_user=$_SESSION['id_user'];
 $name_categ=$_POST['name_categ'];
 $s="";
 
 $s="SELECT * FROM `Everybay` WHERE `id_ever`=$id_ever";
 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
   echo json_encode($mas);
?>