<?php
include("connect.php");
$s = "select * from stock ORDER by `data1` DESC";
$q = mysqli_query($link, $s);
$mas = [
  "title" => [],
  "description" => []
];
for ($i = 0; $i < 5; $i++) {
  $row = mysqli_fetch_array($q);
  $mas['title'][$i] = $row[1];
  $mas['description'][$i] = $row[2];
  echo json_encode($row);
//   echo json_encode($mas['title']);
}

?>