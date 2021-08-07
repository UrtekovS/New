<?php
 session_start();
 include("connect.php");
 
 $s="SELECT sum(`price`) FROM products INNER JOIN users ON users.id_product_order=products.id";
 $res=mysqli_query($link, $s);
 $row=mysqli_fetch_array($res);
  
 echo  json_encode($row[0]);

 ?>