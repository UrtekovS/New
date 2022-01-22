<!-- <?php
      session_start();
?> -->
<!DOCTYPE html>
<html lang="en">

<head class="header row gy-3">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ООО "Техник-Сервис"</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> </script>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- для карты навигации -->
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <!-- clock admin_list-->

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- /clock admin_list-->

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
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style(t).css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
  <header class="header row gy-3">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark " id="testes">
      <div class="container-fluid " class="col-md-6">
        <a class="navbar-brand" id="admin" href="#"><img class="my_logo">ООО "ТЕХНИК-СЕРВИС</a>
        <div class="collapse navbar-collapse justify-content-end" class="col-md-3" id="navbarCollapse">
          <form class="d-flex" class="col-md-9" onsubmit="return false;">
            <input class="form-control me-2" type="search" placeholder="Поиск по катологу" aria-label="Search" id="poisk">
            <button class="btn btn-outline-primary" type="button" onclick="poisck();" id="Search">Поиск
              <!DOCTYPE html>
              <html lang="en">
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" class="col-md-3" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active" class="col-md-3">
            <a class="nav-link" aria-current="page" href="katalog.php" id="catlog">Каталог</a>
          </li>
          <li class="nav-item" class="col-md-3">
            <a class="nav-link" href="index.php" id="dlavnay">Главная</a>
          </li>

        </ul>
        <div class="col-md-3">

          <div id="authorized">
            <!-- <a class="navbar-brand" href="user_kabinet.php"><span id="login_user"></span></a> -->
            <a class="navbar-brand" href="kseniy_admin.php" id="zayv">Заявка</a>

            <!-- <a class="navbar-brand" href="index.php" id="exit_button">Выход</a> -->
          </div>

          <!-- <div id="unauthorized">
          <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Авторизация</a>
          <a id ="show_modal_registration" class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Регистрация</a>
          </div> -->

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




  </header>
</body>
  <!-- <?php
        //print_r($_SESSION);
        ?> -->