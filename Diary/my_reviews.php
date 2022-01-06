<?php
include("connect.php");
session_start();
$id_user=$_SESSION['id_user'];
$foto=$_POST['foto'];
 $name_inf=$_POST['name_inf'];
 $informat=$_POST['informat'];
 $email2=$_POST['email2'];
$s="SELECT * FROM information WHERE `id_user`='$id_user' ORDER BY `id` DESC";
$res=mysqli_query($link, $s);
$n=mysqli_num_rows($res);
 $mas=array();
 for ($i= 0; $i <$n; $i++){
    $row=mysqli_fetch_array($res);
     $mas[$i] = $row; 
    }
    
       

echo json_encode($mas);

?>