<?php
include("connect.php");
session_start();
$poisk=$_POST["poisk"];
$id_user=$_SESSION['id_user'];
$s="SELECT * FROM `Everybay`INNER JOIN Category ON Category.id_categ=Everybay.id_categ  
WHERE (everybay.task LIKE '%$poisk%' OR category.name_categ LIKE '%$poisk%') AND `id_user`=$id_user ORDER BY `my_data`ASC";

$rez=mysqli_query($link,$s);
$mas=array();
$n=mysqli_num_rows($rez);
for($i=0;$i<$n;$i++){
   $row=mysqli_fetch_row($rez);
   $mas[$i]=$row;

}
echo json_encode($mas);


?>