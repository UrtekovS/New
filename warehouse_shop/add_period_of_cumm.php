<?php
 session_start();
 include("connect.php");
 $start_data=$_POST['start_data'];
 $finish_data=$_POST['finish_data'];
 $s="SELECT sum(`summa`) FROM `general_order` INNER JOIN users ON users.id=general_order.id_user WHERE (`data`>='$start_data' AND `data`<='$finish_data')";
 $res=mysqli_query($link, $s);
 $row=mysqli_fetch_array($res);
  
 echo  json_encode($row[0]);

 ?>