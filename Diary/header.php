<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ежедневник</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
   <script src="jsj/jquery-3.6.0.min.js"></script> 
   <script src = "http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> </script>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }


    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="Css/carousel.css" rel="stylesheet">
  <link href="Css/style.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
  <link href="Css/dashboard.css" rel="stylesheet">
  <!-- часы -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://bootstraptema.ru/plugins/2017/thooclock/jquery.thooClock.js"></script>
 
 
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="header1">
      <div class="container-fluid ">
        <a class="navbar-brand" ></a><img class="my_brend" src="img/brend.jpg"></a>
        <div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:true,&quot;bg&quot;:&quot;#00cc00&quot;,&quot;fontsize&quot;:14,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;поиск по Yandex.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2466247,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;italic&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;введите запрос&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="2466247"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script></div>
        <li class="nav-item">
        </li>
        
      </div>
      <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <div id="btn">
          <li class="nav-item active">
            <a class="nav-link" id="shirift_color" aria-current="page" href="diary.php">Ежедневник</a>
          </li>
          </div>
          <li class="nav-item">
            <a class="nav-link" id="chirift_colors" href="index.php">Главная</a>
          </li>
          <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Поиск по ежедневнику" aria-label="Search" id="poisk">
            <button class="btn btn-outline-primary" type="button" onclick="poisck();" id="Search">Пуск<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document</title>
            </head>
            <body>
              
            </body>
            </html> </button>
          </form>
        </div>
        </ul>
        <div>
        <div>


          <div id="authorized">
            <a class="navbar-brand" href="user_kabinet.php"><span id="login_user"></span></a>

            <a class="navbar-brand" href="index.php" id="exit_button">Выход</a>
          </div>

          <div id="unauthorized">
            <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Авторизация</a>
            <a id="show_modal_registration" class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Регистрация</a>
          </div>

        </div>
      </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="alert alert-danger" role="alert" id="message_autorization">
              </div>
              <label class="form-check-label">Логин</label>
              <input type="text" id="login" class="form-control">
              <label class="form-check-label">Пароль</label>
              <input type="password" id="pass" class="form-control">
              <br>
              <input type="button" class="btn btn-primary" value="Авторизоваться" id="sub_autorization">
            </form>
          </div>

        </div>
      </div>
    </div>


    <!-- Modal2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
            <button type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form onsubmit="return registration();">
              
              <div class="alert alert-danger" role="alert" id="message_registration2">
              </div>
              <div id="form_registration">
                <label class="form-check-label">Фамилия</label>
                <input type="text" id="last_name" class="form-control" required>
                <label class="form-check-label">Имя</label>
                <input type="text" id="first_name" class="form-control" required>
                <label class="form-check-label">Отчество</label>
                <input type="text" id="patronymic" class="form-control">
                <label class="form-check-label">Телефон</label>
                <input type="text" id="phone" class="form-control">
                <label class="form-check-label">email</label>
                <input type="text" id="email" class="form-control">
                <label class="form-check-label">Пароль</label>
                <input type="password" id="pass1" class="form-control" required>
                <label class="form-check-label">Подтверждение пароля</label>
                <input type="password" id="pass2" class="form-control" required>
                <label class="form-check-label">Дата рождения</label>
                <input type="date" id="date_of_birth" class="form-control" required>
                <label class="form-check-label">Пол</label>
                <select id="sex" class="form-select" aria-label="Default select example">
                  <option value="1" selected>М</option>
                  <option value="0">Ж</option>
                </select>
                <br>
                <input type="submit" class="btn btn-primary" value="Зарегистрироваться" id="submit_registration">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    
  </header>
  <script src="jsj/pisk.js"></script>
  <?php
  //print_r($_SESSION);
  ?>