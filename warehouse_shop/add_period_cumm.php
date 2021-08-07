<?php
 session_start();
 include("connect.php");
 
 $s="SELECT sum(`summa`) FROM `general_order` INNER JOIN users ON users.id=general_order.id_user";
 $res=mysqli_query($link, $s);
 $row=mysqli_fetch_array($res);
  
 echo  json_encode($row[0]);

 ?>