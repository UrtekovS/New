<?php
include("header.php");
?>

<link href="css/catalog.css" rel="stylesheet">
<div class="sec-tl text-center"></div>

<div class="srv-wrp remove-ext7"></div>
<div class="container" id="prod_detalis">
  <div id="tovar">


  </div>


  <br>
  <div class="sec-tl text-center" id="form_not">
    <h5 itemprop="headline" id="centnot">К сожалению этот день занят! Можете выбрать другую дату!</h5> 
      <h6><span class="theme-clr" id="centornot">Позвоните по номеру +7 </span></h6>
  </div><!-- Sec Title -->

  <div class="sec-tl text-center" id="prob">
    <h3 itemprop="headline" id="cent">Ваша заявка принята!</h3> 
      <h6><span class="theme-clr" id="centor">Ожидайте специалиста</span></h6>
  </div><!-- Sec Title -->
  <!-- Форма для заявки -->
  <form onsubmit="return registration();">
    <div class="form-group" id="form_registration">
      <h4 class="modal-title" id="exampleModalLabel">Форма, выезда бригады в удобное для вас время!</h4>
      <label for="inputName">Как к вам обращаться</label>
      <input type="name" class="form-control" id="last_name" placeholder="имя">
    
      <label for="inputPhone">Номер телефона</label>
      <input type="text" class="form-control" id="phone" class="form-control" value="+7 ">
    

   
      <label for="inputHome">Точный Адрес</label>
      <input type="text" class="form-control" id="first_name" class="form-control" placeholder="Город улица дом кв">
    
    
      <label for="inputDate">Укажите дату и врея удобное вам!</label>
      <input id="date_of_brith" class="form-control" type="datetime-local" value="2021-00-00T00:00:00" required>
   
    <label class="text-center"> № Тех.- сервис</label>
    <input type="text" id="id_product_order" class="form-control" value="num" disabled>
    <input type="submit" class='theme-btn brd-rd5' value="Отправить ииформацию" id="submit_registration">
    </div>
</form>
<!-- конец формы для заявки -->

  <br/>
<div class="text-center" class="container">
  <h3><a class='theme-btn brd-rd5' aria-current="page" href="katalog.php" id="revers1">Вернуться в каталог</a></h3>
  <div class="sec-tl text-center">
    <span class="theme-clr">Цените своё время!!!</span>
    <h2 itemprop="headline">Делаем быстро и <span class="theme-clr">Качественно</span></h2>
  </div><!-- Sec Title -->

  <section>
    <div class="gap black-layer opc8">
      <div class="fixed-bg" style="background-image: url(assets/images/para-new.png);"></div>
      <div class="container">
        <div class="shrt-fcts-wrp">
          <div class="row">

            <div class="col-md-5 col-sm-12 col-lg-5">
              <img class="facts-mockup animated bounce" src="assets/images/Dlgh-removebg-preview.png" alt="mockup-image">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
              <div class="fcts-wrp">
                <div class="sec-tl">
                  <span>Youth Fire Stop Prevention & Intervention Program.</span>
                  <h2 itemprop="headline">Few Facts About Naar</h2>
                </div><!-- Sec Title -->
                <p itemprop="description">Every live, every property we save does matter, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                <ul class="fcts-lst">
                  <li><span class="counter">369</span>
                    <h6 itemprop="headline">Emergencies</h6>
                  </li>
                  <li><span class="counter">421</span>
                    <h6 itemprop="headline">Traffic Crashes</h6>
                  </li>
                  <li><span class="counter">275</span>
                    <h6 itemprop="headline">Fire Emergencies</h6>
                  </li>
                  <li><span class="counter">50</span>
                    <h6 itemprop="headline">Year of Experience</h6>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-1 col-sm-12 col-lg-1"></div>
          </div>
        </div><!-- Short Facts Wrap -->
      </div>
    </div>
  </section>
</div>
<script src="js/js2.js"></script>
<!-- <script src="js/js.js"></script> -->
<?php
include("footer.php");
?>