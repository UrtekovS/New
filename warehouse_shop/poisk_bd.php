<?php
//session_start();
include("connect.php");
$poisk=$_POST['poisk'];
//$category_id=$_SESSION['category_id'];
$s="SELECT * FROM `products` WHERE (`name` LIKE '%$poisk%')";
$rez=mysqli_query($link, $s);
$mas=array();
$n=mysqli_num_rows($rez);
for($i=0; $i<$n; $i++){
    $row=mysqli_fetch_array($rez);
    $mas[$i]=$row;
}

echo json_encode($mas);


?>