<?php
include("connect.php");
//$id=$_POST['id'];
//$id=2;
$s="SELECT * FROM `information`ORDER BY `id`DESC`";

$res=mysqli_query($link, $s);
$mas=array();
for($i=0; $i<3;$i++){
    $row=mysqli_fetch_array($res);
    $mas[$i]=$row;
}
echo json_encode($mas);

?>