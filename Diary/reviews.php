<?php
include("header.php");
?>
<link href="Css/style(t).css" rel="stylesheet">

<!-- Форма отзывов -->
<div> </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4"> </div>
      <div class="col-md-4">
        <h4>Форма отзывов</h4>
        <form action="./mail.php" method="post">
        <p class="my_message" id="message_reviews"></p>
        <p class="my_message1" id="message_no_reviews"></p>
        <div class="form-group" div="form_reviews">
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
          <input type="button" class="btn btn-primary" value="Отправить отзыв" id="insert_reviews" onclick="add_reviews();">
        </form>
      </div>
      <div class="col-md-4"> </div>
    </div>
  </div>

<!-- карточки -->
<p class="my_message2" id="message_del_reviews"></p>
<!-- <div class="card mb-3"  style="max-width: 330px;"> -->
<div class="row g-0" id="teviews"style="max-width: 330px;">
  
</div><!-- /.row g-0 -->
<!-- </div> -->
<!-- <button class="btn btn-primary" type="button" id="del_revi" onclick="delet();">Удалить отзыв</button> -->

<script src="jsj/jquery-3.6.0.min.js"></script>
<script src="jsj/js2.js"></script>
<?php
include("footer.php");
?>