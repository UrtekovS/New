<?php
include("connect.php");

$upload_image=$_FILES["myimage"]["name"];

$folder="/xampp/htdocs/images/";

move_uploaded_file($_FILES[" myimage "][" tmp_name "],"$folder".$_FILES[" myimage "][" name "]);

$insert_path="INSERT INTO `image table`(`mirage`, `name`) VALUES ('$folder','$upload_image');";

$rez=mysqli_query($link,$insert_path);



?>