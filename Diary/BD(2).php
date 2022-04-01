<?php
include("connect.php");
include("header.php");
$upload_image=$_FILES["myimage"]["name"];

$folder="/img/info_img/";

move_uploaded_file($_FILES[" myimage "][" tmp_name "],"$folder".$_FILES[" myimage "][" name "]);

$insert_path="INSERT INTO `image table`(`mirage`, `name`) VALUES ('$folder','$upload_image');";

$rez=mysqli_query($link,$insert_path);



?>

<html>
<title>Using BLOB and MySQL</title>
<body>

<table border="1" align ="center"> <caption>Products Database</caption>
  <tr>
    <th>id_img</th>
    <th>mirage</th>
    <th>name</th>
    
  </tr>

</table>
<?php
// 
$proba= mysqli_query($link,"SELECT * FROM `image table`");
$zabor= mysqli_fetch_assoc($proba);
// функция выводящая строки массива
print_r($zabor);
// while($zabor= mysqli_fetch_assoc($proba)){
//   echo $zabor['id_img'];
//   echo "<br>";
// }
while ($zabor = mysqli_fetch_assoc($proba)) {
    echo '<tr>';
    echo '<br>';
    echo '<td>' . $zabor['id_img'] . '</td>';
    echo '<br>';
    echo '<td>'.'<img src="data:img/info_img;base64,'.base64_encode($zabor['mirage']).'" width="30%" height="30%"/>'
    .'</td>';
    echo '<br>';
    echo '<td>'.$zabor['name'].'</td>';
   
    echo '</tr>';
}

?>
</body>
</html>
<script src="bootstrap.bundle.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
// $res=mysqli_query($linc,$select_path);

// while($row=mysqli_fetch_array($res))
// {
//  $image_name=$row["image_name"];
//  $image_path=$row["image_path"];
// echo "img  src=".$image_path."/".$image_name." width=100 height=100 ";
// }
// echo "Genery_fail.php";

</style> 
      
      <div class="container-fluid" id="form">
        <div class="alert alert-danger" role="alert" id="mess_autoriz" style="width: 25%;"></div>
        <div class="col-md-4 offset-md-4">
          <div class="form-container">
          <div class="form-icon"><i class="fa fa-user"></i></div>
            <h3 class="title">Авторизации</h3>
            <form class="form-horizontal" method="$_POST">
              <div class="form-group">
                <label>Логин</label>
                <input class="form-control" type="email" id="login" placeholder="login">
              </div>
              <div class="form-group">
                <label>пароль</label>
                <input class="form-control" type="password" id="password" placeholder="password">
              </div>
              <input type="button" onclick="avtoriz_us();" class="btn btn-default" id="avtoriz" value="Авторизоваться">
            </form>
          </div>
        </div>

      </div> 