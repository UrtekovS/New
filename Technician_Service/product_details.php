
<?php
include("header.php");

?>
<p class="my_message" id="message_tovar"></p>
<div id="tovar">


</div>
<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Форма, выезда бригады в удобное для вас время!</h4>
        <button type="button" id="closee" data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
      </div>
      <br>
      <div class="modal-body">
        <form onsubmit="return registration();">
          <div class="alert alert-danger" role="alert" id="message_registration2">
          </div>
          <div id="form_registration">
            <label class="form-check-label">Имя</label>
            <input type="text" id="last_name" class="form-control" required>
            <label class="form-check-label">Телефон</label>
            <input type="text" id="phone" class="form-control" value="+7 ... ... .. .."  >
            <label class="form-check-label">Адрес</label>
            <input type="text" id="first_name" class="form-control" value="Город ...,ул...,дм...,кв...">

            <label class="form-check-label">Укажите дату и врея удобное вам<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document</title>
            </head>
            <body>
              
            </body>
            </html></label>
            <input id="date_of_brith" class="form-control" type="datetime-local" value="2021-00-00T00:00:00" required>
            <!-- <label class="form-check-label"> № Заявки</label>
            <input type="text" id="id_general_order" class="form-control" value="num" disabled> -->
            <label class="form-check-label"> № Тех.- сервис</label>
            <input type="text" id="id_product_order" class="form-control" value="num" disabled>
            </select>
            <br>
            <input type="submit" class="btn btn-primary" value="Отправить ииформацию" id="submit_registration">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<br>
<div id="unauthorized">
<h4><label class="form-check-label" id="labe">Форма для адреса</label></h4><br></div>
  <!-- <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Авторизация</a> -->
  <div id="formTim"><h4><a id="show_modal_registration" class="navbar-brand" href="katalog.php" data-bs-toggle="modal" data-bs-target="#exampleModal2">Открыть форму<!DOCTYPE html></div>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
  </body>
  </html></a></h4>
  <br>
  <div>
 <a class="nav-link" aria-current="page" href="katalog.php"  id="revers1">Вернуться в каталог</a>
 <!-- </div> -->
</div>

<script src="js/js2.js"></script>
<script src="js/js.js"></script>
<?php

include("footer.php");

?>