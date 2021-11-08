<?php
include("header.php");
?>
<link href="Css/style(t).css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!-- Форма отзывов -->
<div> </div>
<!-- <h4 id="form_comment">Форма отзывов</h4> -->
  <div class="container">
    <div class="row">
      <div class="col-md-4"> </div>
      <div class="col-md-4">
        <h4 id="form_comment">Форма отзывов</h4>
        <form action="reviews.php" method="post" enctype="multipart/form-data">
        <p class="my_message" id="message_reviews"></p>
        <p class="my_message1" id="message_no_reviews"></p>
        <div class="form-group" div="form_reviews">
        <label for="foto">Фото</label>
        <form action="urtec_bd.php" method="post" enctype="multipart/form-data"> 
         <input type="file"  name="img" id="urtec_img">
         <input type="submit">Загрузить</input> 
            <!-- </form><br> -->
           
            <label for="foto">Фото</label>
            <input type="foto" id="foto" class="form-control"  placeholder="Foto"> 
          </div>
          <div class="form-group" div="form_reviews">
            <label for="ваше имя">Ваше имя</label>
            <input type="foto" id="name_inf" class="form-control"  placeholder="name">
          </div>
          <!-- <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="name" div="name_inf" class="form-control"  placeholder="Name">
          </div> -->
          <div class="form-group">
            <label for="message">Сообщение:</label>
            <textarea class="form-control" id="informat" rows="3"></textarea>
          </div>
          <div class="form-group" div="form_reviews">
            <label for="email">E-mai>:</E-mai></label>
            <input type="foto" id="email2" class="form-control"  placeholder="email">
          </div>
          <!-- <div class="form-group">
            <label for="email1">E-mail:</label>
            <input  id="email2" class="form-control"  placeholder="Email">
          </div><br> -->
          <input type="submit" class="btn btn-primary" value="Отправить отзыв" id="insert_reviews" name="upload"  onclick="add_reviews();">
          <input type="button" class="btn btn-primary" value="Открыть свои отзывы" id="my_reviews2" onclick="my_reviews();">
        </form>
      </div>
      <div class="col-md-4 "> </div>
    </div>
  </div><br>
  
<!-- карточки -->
 <!-- <div class="album py-5 bg-light">  -->
  <div class="container">
    <p class="my_message2" id="message_del_reviews"></p>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="teviews">
      <!-- <button class="btn btn-primary" type="button" id="del_revi" onclick="reviews_delet();">Удалить отзыв</button>   -->
    </div>
 </div>  
  



<!-- <button class="btn btn-primary" type="button" id="del_revi" onclick="delet();">Удалить отзыв</button> -->

<script src="jsj/jquery-3.6.0.min.js"></script>
<script src="jsj/js2.js"></script>
<script src="jsj/my_reviews.js"></script>
<?php
include("footer.php");
?>