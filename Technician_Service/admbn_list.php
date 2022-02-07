<?php
include("header.php");
?>


<!--Часы-->
<div class="container breakpoints" id="bodi1">
  <p class="lead text-center" id="labls">Цените время! </p>
  <div class="row">
    <h3 class="card-title text-center" id="adm_clock">
      <div class="d-flex">
        <a><span class="badge hours" id="hsu"></span></a> :
        <a><span class="badge min" id="mine"></span></a> :
        <a><span class="badge sec" id="sece"></span></a>
      </div>
    </h3>
  </div><!-- /.flexbox clock row -->
  <script>
    $(document).ready(function() {
      setInterval(function() {
        var hours = new Date().getHours();
        $(".hours").html((hours < 10 ? "0" : "") + hours);
      }, 1000);
      setInterval(function() {
        var minutes = new Date().getMinutes();
        $(".min").html((minutes < 10 ? "0" : "") + minutes);
      }, 1000);
      setInterval(function() {
        var seconds = new Date().getSeconds();
        $(".sec").html((seconds < 10 ? "0" : "") + seconds);
      }, 1000);
    });
  </script>
  <link href="css/carousel.css" rel="stylesheet">
  <div class="container" id="admin_lists">
    <!-- Table praise -->
    <h3>
      <div id="prais">Прайс</div>
    </h3>
    <div id="history_table">


    </div>
    <br>

  </div>

  <!-- Форма -->
  <?php
if(isset($_POST['submit']) and $_FILES){
  include("connect.php");
 $task=$_POST['task'];
 $pricew=$_POST['pricew'];
 $foto=$_FILES['file']['name'];
 //$id=$_SESSION['id'];
 $name_categ=$_POST['name_categ'];
 //print_r($_POST);
 
 $s="INSERT INTO `products`( `name`, `price`, `photo`, `category_id`) VALUES ('$task','$pricew','$foto','$name_categ')";
  $rez=mysqli_query($link,$s);
	move_uploaded_file($_FILES['file']['tmp_name'], "imge/products/".$_FILES['file']['name']);
	//echo $s;
  
} 

?>
<!-- Форма дабавления сервеса -->
<form  method="post" enctype="multipart/form-data">
  <h3 class="col-md-6" id="labes">Добавить сервис</h3>
  <div>
    <div class="container">
      <div class="modal-body">
        <div>
          <p class="my_message" id="message_add_notask"></p>
          <p class="my_message" id="message_add_taskc"></p>
          <div id="form_load_task">
            <label class="form-check-label">Название</label>
            <input type="text" id="task" name="task" class="form-control">
            <label class="form-check-label">Стоимость</label>
            <input type="text" id="pricew" name="pricew" class="form-control">
            <br/>
            <p><input type="file" name="file" multiple accept="image/*,image/jpeg,image/png,image/jpg,image/jfif">

            <label class="form-check-label" disabled>Категория</label>
            <div id="select_status_id">
              <select class="form_select" id="name_categ" name="name_categ">
                <option value="1">mbmnn</option>
                <option value="2">mbmnn</option>
                <option value="3">mbmnn</option>
                <option value="4">mbmnn</option>
                <option value="5">mbmnn</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div>
          <!--<input type="button" class="btn btn-primary" value="Добавить сервис" id="insert_task" onclick="add_task();">-->
         <input type="submit" class="btn btn-success" name="submit" id="fotoS" value="Отправить">
        
        </div>
      </div>
    </div>
  </div>
</div>
</form>



<script src="js/admin_list.js"></script>

<?php
include("footer.php");
?>