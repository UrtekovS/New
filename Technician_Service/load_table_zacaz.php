<?php
include("connect.php");
$s="";
$s="SELECT * FROM `users` INNER JOIN products ON products.id=users.id_product_order ORDER BY `registration_date`DESC";

 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
 echo json_encode($mas);

?>
