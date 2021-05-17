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
        <p class="my_message" id="message_no_reviews"></p>
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
<div class="row" id="nformation">
  

</div><!-- /.row -->


<?php
include("footer.php");
?>