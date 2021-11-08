<?php
 include("connect.php");
 echo $_FILES['img']['size'] ."<br>";
echo $_FILES['img']['name'] ."<br>";
 echo $_FILES['img']['tmp_name']."<br>";
 echo $_FILES['img']['tmp_name']."<br>";
// if(move_uploaded_file($_FILES['img']['tmp_name'], 'img/info_img/' .$_FILES['img']['name'])) {
// echo "Файл скопирован на сервер";
// $link_address1 = 'reviews.php';
// echo "<a href='$link_address1'>Reviews Page</a>";
// } else{
//     echo "Файл НЕ скопирован на сервер";
//     $link_address1 = 'reviews.php';
//     echo "<a href='$link_address1'>Reviews Page</a>";
// }  

move_uploaded_file($_FILES['img']['tmp_name'], 'img/info_img/' .$_FILES['img']['name'])
?>