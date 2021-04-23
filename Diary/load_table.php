<?php
session_start();
include("connect.php");
$id_user=$_SESSION['id_user'];
$task=$_POST['task'];
$my_data=$_POST['my_data'];
$itogi=$_POST['itogi'];
$name_categ=$_POST['name_categ'];
$s="";
$s="SELECT * FROM `Everybay`INNER JOIN Category ON Category.id_categ=Everybay.id_categ WHERE`id_user`=$id_user ORDER BY `my_data`ASC";
// $s="SELECT * FROM `Everybay`INNER JOIN Category ON Category.id_categ=Everybay.id_categ ORDER BY `id_user`DESC";
 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
 echo json_encode($mas);

?>
