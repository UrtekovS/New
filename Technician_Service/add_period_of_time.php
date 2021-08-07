<?php
 session_start();
 include("connect.php");
 $start_data=$_POST['start_data'];
 $finish_data=$_POST['finish_data'];
 
 $s="SELECT * FROM users INNER JOIN products ON products.id=users.id_product_order WHERE (`date_of_birth`>='$start_data' AND `date_of_birth`<='$finish_data')";
  $rez=mysqli_query($link,$s);
  $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
  echo  json_encode($mas);
?>