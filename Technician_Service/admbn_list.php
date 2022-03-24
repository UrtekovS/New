<?php
include("header.php");
?>


      
      
<!--Часы-->
<div class="container breakpoints" id="bodi1">
<div class="sec-tl text-center">
        <h6 itemprop="headline"><span class="theme-clr">Цените время</span></h6>
  <div class="row">
    <h3 class="card-title text-center">
      <div class="text-center"id="adm_clock">
        <a><span class="badge hours" id="hsu"></span></a> :
        <a><span class="badge min" id="mine"></span></a> :
        <a><span class="badge sec" id="sece"></span></a>
      </div>
    </h3>
    </div>
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
    <div class="sec-tl text-center">
        <h4 itemprop="headline"><span class="theme-clr">Прайс</span></h4>
    </div>
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
  <h3 class="col-md-6" id="labes"></h3>
  <div class="sec-tl text-center">
        <h4 itemprop="headline"><span class="theme-clr">Добавить сервис</span></h4>
  </div>
  <div>
    <div class="container">
      <div class="modal-body">
        <div>
          <p class="my_message" id="message_add_notask"></p>
          <p class="my_message" id="message_add_taskc"></p>
          <div id="form_load_task">
          <p class="text-lift">Название</p>
            <input type="text" id="task" name="task" class="form-control">
            <p class="text-lift">Стоимость</p>
            <input type="text" id="pricew" name="pricew" class="form-control">
            <br/>
            <p><input type="file" name="file" multiple accept="image/*,image/jpeg,image/png,image/jpg,image/jfif">

            <p class="text-lift">Категория</p>
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
         <input type="submit"  class='theme-btn brd-rd5'  name="submit" id="fotoS" value="Отправить">
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