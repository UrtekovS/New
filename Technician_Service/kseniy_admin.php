<?php
include("header.php");
session_start();

?>



<link rel="alternate stylesheet" href="assets/css/colors/color2.css" title="color2" /> <!-- Color2 -->
<link rel="alternate stylesheet" href="assets/css/colors/color3.css" title="color3" /> <!-- Color3 -->
<link rel="alternate stylesheet" href="assets/css/colors/color4.css" title="color4" /> <!-- Color4 -->

<link href="css/admin.css" rel="stylesheet">

<body>
  <?php
  if (isset($_SESSION['login'])) {

  ?>

    <div class="container" class="text-centr" id="kseniy">

      <link href="Css/style(t).css" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />  -->
      <script src="http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> </script>



      <!--За промижуток времени-->
      <link href="Css/style(t).css" rel="stylesheet">
      <link href="Css/style.css" rel="stylesheet">
      <div class="peri">

      </div>
     
      <a href='#' id="serviceexit" onclick="exit();"> Выход </a>
      <form class="row gy-2 gx-3 align-items-center">
        <h3 id="lables" class="text-center">Вывод заявок, за период времени</h3>
        <tr>
          <div class="col-auto">
            <label class="form-check-labelz">Начало периода</label><br>
            <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="start_data">
          </div>
          <div class="col-auto">
            <label class="form-check-labele">Окончание периода</label>
            <div class="input-group">
              <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="finish_data"><br>
            </div>
          </div>
          <div class="col-auto">

            <!-- <input type="button" class="btn btn-primary" value="Вывод, за промежуток времени " id="Output"> -->
            <button type="button" class="btn btn-success" id="Output" onclick="add_time();">Вывод</button>
          </div>
          <div class="col-auto">
            <button type="button" class="btn btn-success" id="return" onclick="tab_time();">Назад</button>
          </div>
          <div class="col-auto">
            <button class="btn btn-success" id="Exel" onclick="to_excel();">Выгрузить excel</button>
          </div>
          <div class="col-auto">
            <a class='btn btn-success' href='admbn_list.php' id="service" role='button'>Добавить сервис</a>
          </div>
      </form><br>

      <div class="col-auto" class="text-center" id="ptriud2">
        <h5 id="summa1" class="text-center">Итоговая сумма заявок за период</h5>
        <p class="text-center"><input disabled class="text-center" type="text" readonly class="form-control-plaintext" id="all_summa_periyd" value="0"></p>

      </div><br>

      <div class="table-responsive" id="pere_time">
        <h3>Таблица заявок:</h3>
        <h5 id="summa" class="text-centr">Итоговая сумма всех заявок</h5>
        <input disabled type="text" class="text-center" readonly class="form-control-plaintext" id="all_summa_zayvoc" value="0">
      </div>

      <div class="tabel" id="zacaz_history">
        <td class="text-centr"><input type="checkbox" id="inlineCheckbox1" value="true" disabled><br></td>
      </div>
      <br>
    </div>

  <?php
  } else {
  ?>
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/boo tstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <div class="sec-tl text-center">
      <span class="theme-clr">Цените своё время!!!</span>
      <h4 itemprop="headline">Неоходимо ввести свой логин <span class="theme-clr">и пароль</span></h4>
    </div><!-- Sec Title -->
    <div class="srv-wrp remove-ext7">
      

      <section>
        <div class="gap">
          <div class="container"id="form">
            <div class="cnt-wrp">
              <div class="row">
                <div class="col-md-8 col-sm-12 col-lg-8">
                  <div class="cnt-frm">
                    <div class="form-icon"><i class="fa fa-user"></i></div>
                     <h3 class="title">Авторизации</h3>
                      <form method="$_POST">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-lg-12">
                            <input type="text" id="login" placeholder="Login">
                          </div>
                          <div class="col-md-12 col-sm-12 col-lg-12">
                            <input type="password" id="password" placeholder="password">
                          </div>
                          <div class="col-md-12 col-sm-12 col-lg-12">
                            <input type="button" id="avtoriz" class="theme-btn brd-rd5" onclick="avtoriz_us();" value="Авторизоваться">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 col-lg-4">
                    <div class="cnt-inf-wrp">
                      <h4 itemprop="headline">Contact info</h4>
                      <ul class="cnt-inf-lst">
                        <li><i class="fas fa-envelope theme-clr"></i> <strong>Email</strong><a href="#" title="" itemprop="url">info@example.com</a><a href="#" title="" itemprop="url">www.example.com</a></li>
                        <li><i class="fas fa-map-marker-alt theme-clr"></i> <strong>Address</strong><span>791 Commonwealth Dr. Warrendale, PA 15086 United State USA</span></li>
                        <li><i class="fas fa-phone theme-clr"></i> <strong>Phone</strong><span>0044 987 654 321</span><span>0044 526 652 778</span></li>
                      </ul>
                      <div class="scl4">
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
            <div class="gap no-gap">
                <div class="cnt-mp" id="cnt-mp"></div>
            </div>
        </section>
    <?php
  }
    ?>
</body>
<div class="row">
  <span class="theme-clr">&nbsp</span>
  <span class="theme-clr">&nbsp</span>
  <span class="theme-clr">&nbsp</span>
</div>
<script src="js/avtoriz.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/diary_tb.js"></script>
<script src="js/period_of_time.js"></script>
<script src="js/jquery.table2excel.min.js"> </script>



<?php
include("footer.php");
?>