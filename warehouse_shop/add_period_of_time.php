<?php
 session_start();
 include("connect.php");
 $start_data=$_POST['start_data'];
 $finish_data=$_POST['finish_data'];
 
 $s="SELECT * FROM `general_order` INNER JOIN users ON users.id=general_order.id_user WHERE (`data`>='$start_data' AND `data`<='$finish_data')";
  $rez=mysqli_query($link,$s);
  $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
  echo  json_encode($mas);
?>