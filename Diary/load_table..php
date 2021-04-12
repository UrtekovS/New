<?php
include("connect.php");
$task=$_POST['task'];
$date=$_POST['date'];
$itogi=$_POST['itogi'];
$name_categ=$_POST['name_categ'];
$s="";

$s="SELECT * FROM `Everybay`INNER JOIN Category ON Category.id_categ=Everybay.id_categ ORDER BY `id_ever`DESC";
 $rez=mysqli_query($link,$s);
 $mas=array();
 $n=mysqli_num_rows($rez);
 for($i=0;$i<$n;$i++){
    $row=mysqli_fetch_row($rez);
    $mas[$i]=$row;

 }
 echo json_encode($mas);

?>
