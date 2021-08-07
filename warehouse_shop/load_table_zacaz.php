<?php
include("connect.php");
$s="";
$s="SELECT * FROM `general_order` INNER JOIN users ON users.id=general_order.id_user ORDER BY `data`DESC";

 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
 echo json_encode($mas);

?>
