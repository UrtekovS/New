<?php
include("connect.php");

$s="SELECT `id` FROM `general_order` ORDER BY`id` DESC";

$res=mysqli_query($link, $s);
$row=mysqli_fetch_array($res);
echo json_encode($row);

?>