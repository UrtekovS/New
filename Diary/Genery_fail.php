<?php
include("connect.php");
include("header.php");

$proba= mysqli_query($link,"SELECT * FROM `image table`");
$zabor= mysqli_fetch_assoc($proba);
// функция выводящая строки массива
print_r($zabor);
echo "<br>";
// while($zabor= mysqli_fetch_assoc($proba)){
//   echo $zabor['id_img'];
//   echo "<br>";
// }
for($i=0; $i<4; $i++){
  $zabor= mysqli_fetch_assoc($proba);
  echo $zabor['id_img'], $zabor['mirage'];
  echo "<br>";
}

?>




<!DOCTYPE html>
<html>
<link href="/Css/Cardss.css" rel="stylesheet">
<head>
  <title>jQuery Slide Toggle</title>
  <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
  <script>
    $(document).ready(function() {
      $("#btn1").click(function() {
        $(".divClass").slideToggle("slow", function() {
          //alert("Slide Toggle Method completed.");
        });
      });
    });
  </script>
  <style>
    .divClass {
    margin-top: 20px;
    padding: 10px;
    text-align: center;
    background-color: lawngreen;
    border: solid 1px;
    height: 200px;
    width: 300px;
}
.card{
  margin-left: 35%;
}
</style>
</head>

<button id="btn1">Нажми на меня</button>
<div class="divClass"><br><b>Привет!</b> <br><br>Как дела?</div>
<div id="textMsg"></div>
<br><br>



<div class="cantainer">

  <form method="POST" action="BD(2).php" enctype="multipart /form-data">
    <input type="file" name="myimage">
    <input type="submit" name="submit_image" value="name">
  </form>
</div>
<br><br>

<div class="card" id="cards" style="width: 18rem;">
  <img src="./img/obzore.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</body>

</html>
<script src="bootstrap.bundle.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<!-- <?php
      include("footer.php");
      ?> -->