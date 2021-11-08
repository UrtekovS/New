<?php
 session_start();
 include("connect.php");
//  $my_data=$_POST['my_data'];
 $id_user=$_SESSION['id_user'];
//  $name_categ=$_POST['name_categ'];
 $start_data=$_POST['start_data'];
 $finish_data=$_POST['finish_data'];
 //$name_categ=$_POST['name_categ'];
 
 $s="
 SELECT * FROM `everybay`INNER JOIN Category ON Category.id_categ=Everybay.id_categ WHERE (`my_data`>='$start_data' AND my_data<='$finish_data') AND`id_user`=$id_user";
  $rez=mysqli_query($link,$s);
  $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
  echo  json_encode($mas);
?>