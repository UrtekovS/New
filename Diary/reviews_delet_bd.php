<?php
include("connect.php");
session_start();
$id_user=$_SESSION['id_user'];
$id=$_POST['id'];
$s="DELETE FROM `information` WHERE `id`=$id AND `id_user`=$id_user";
mysqli_query($link,$s);
//echo $s;
//echo "Ваш отзв удалён!"



?>