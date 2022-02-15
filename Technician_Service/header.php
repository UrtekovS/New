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
  <link rel="stylesheet" href="assets/css/icons.min.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />

  <!-- Color Scheme -->
   <link rel="stylesheet" href="assets/css/colors/color.css" title="color" />
  <link rel="alternate stylesheet" href="assets/css/colors/color2.css" title="color2" /> 
  <link rel="alternate stylesheet" href="assets/css/colors/color3.css" title="color3" /> 
  <link rel="alternate stylesheet" href="assets/css/colors/color4.css" title="color4" /> 

</head>

<body>
  <header class="stick">
    <div class="tb-br">
      <div class="container">
        <div class="scl1 float-left">
          <a href="https://twitter.com/?lang=ru" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.facebook.com" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <ul class="tp-lst float-right">
          <li><i class="fas fa-envelope theme-clr"></i><a href="#" title="" itemprop="url">info@example.com</a></li>
          <li><i class="flaticon-telephone theme-clr"></i>+(00) 123-345-678</li>
        </ul>
      </div>
    </div><!-- Topbar -->
    <div class="lg-mnu-sec sticky">
      <div class="container" id="lg-mnu-sec sticky">
        <div class="logo"><a href="admbn_list.php" title="Logo" itemprop="url"><img src="imge/JPEG-removebg-preview.png" alt="logo.png" itemprop="image">
          </a></div><!-- Logo -->
        <nav>
          <div id="topbar">
            
            <ul>
              <li><a href="index.php" title="" itemprop="url">Главная</a></li>
              <li><a href="katalog.php" title="" itemprop="url">Каталог</a></li>          
              <li><a title="" href="kseniy_admin.php"  itemprop="url">Админ</a></li>
            </ul>

            <form class="d-flex" class="col-md-9" onsubmit="return false;">
            <input class="form-control me-2" type="search" placeholder="Поиск по катологу" aria-label="Search" id="poisk">
            <a  href="#" id="Search" title="" itemprop="url" onclick="poisck();" ><i class="fas fa-search"></i></a>                   
          </form>          
          </div>
        </nav>
      </div>
    </div><!-- Logo Menu Sec -->
  </header><!-- Header -->
  <div class="header-search">
    <span class="srch-cls-btn brd-rd5"><i class="fas fa-times"></i></span>
    <form>
      <input type="text" placeholder="Search Keywords Here...">
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
 </div><!-- Header Search -->
</body>
</html>