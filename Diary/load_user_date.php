<?php
session_start();
include("connect.php");
$id=$_SESSION['id_user'];
$s="SELECT `id_user`, `last_name`, `first_name`, `patronymic`, `email`, `phone`,  `date_of_birth`,  `sex` FROM  users where id_user=$id";
$res=mysqli_query($link, $s);
$row=mysqli_fetch_array($res);

echo json_encode($row);

?>