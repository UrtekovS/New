<?php
include("connect.php");
session_start();
//$id_user=$_SESSION['id_user'];
$s="SELECT * FROM `information` ORDER BY `id` DESC";
$res=mysqli_query($link, $s);
$n=mysqli_num_rows($res);
 $mas=array();
 for ($i=0; $i<$n;$i++){
    $row=mysqli_fetch_array($res);
     $mas[$i]= $row; 
    }
    
       

echo json_encode($mas);

?>