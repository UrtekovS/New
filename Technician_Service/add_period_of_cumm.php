<?php
 session_start();
 include("connect.php");
 $start_data=$_POST['start_data'];
 $finish_data=$_POST['finish_data'];
 $s="SELECT sum(`price`) FROM users INNER JOIN products ON products.id=users.id_product_order WHERE (date_of_birth>='$start_data' AND date_of_birth<='$finish_data')";
 $res=mysqli_query($link, $s);
 $row=mysqli_fetch_array($res);
  
 echo  json_encode($row[0]);

 ?>