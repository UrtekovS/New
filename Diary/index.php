<?php
include("header.php");

?>
<main>
  <span id="message_box"></span>

  <?php
  include("connect.php");
  $s = "SELECT * FROM `fosad` ORDER BY id_fosad DESC";
  $q = mysqli_query($link, $s);
  $mas = [
    "img" => [],
    "title" => [],
    "description" => []
  ];
  for ($i = 0; $i < 4; $i++) {
    $row = mysqli_fetch_array($q);
    $mas['img'][$i] = $row[3];
    $mas['title'][$i] = $row[1];
    $mas['description'][$i] = $row[2];
  }
  ?>


  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="img/carusele_img/<?= $mas['img'][0]; ?>">

        </svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1><?= $mas['title'][0]; ?></h1>
            <h3><?= $mas['description'][0]; ?></h3>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="img/carusele_img/<?= $mas['img'][1]; ?>">
        </svg>

        <div class="container">
          <div class="carousel-caption">
            <h1><?= $mas['title'][1]; ?></h1>
            <h2><?= $mas['description'][1]; ?></h2>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="img/carusele_img/<?= $mas['img'][2]; ?>">
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1><?= $mas['title'][2]; ?></h1>
            <h3><?= $mas['description'][2]; ?></h3>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="img/carusele_img/<?= $mas['img'][3]; ?>">
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1><?= $mas['title'][3]; ?></h1>
            <h3><?= $mas['description'][3]; ?></h3>
          </div>
        </div>
      </div </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

    <!-- Часы -->
    <link href="Css/clock_index.css" rel="stylesheet">
    <style>

    </style>
    <script>

    </script>
    </head>

    <body>
      <div class="col-md-4 col-md-offset-4" id="clock_ind">
        <div class="clock-grids">
          <div class="clock-heading">
            <h3>Цените своё время</h3>
          </div>
          <div class="clock-left">
            <div id="myclock"></div>
          </div>
          <div class="clock-bottom">
            <div class="clock">
              <div id="Date"></div>
              <ul>
                <li id="hours"> </li>
                <li id="point">:</li>
                <li id="min"> </li>
                <li id="point">:</li>
                <li id="sec"> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </body>

    </html>
</main>
    <!-- погода -->
<form class="row gy-2 gx-3 align-items-center">
    <tr>
  <div class="col-auto">
    <div id="f69aeff3922466291723630c67b54dad" class="ww-informers-box-854753">
      <p class="ww-informers-box-854754">
        <a href="https://world-weather.ru/pogoda/russia/novokuznetsk/">Погода в Новокузнецке</a>
        <br>
        <a href="https://world-weather.ru/pogoda/russia/novosibirsk/">https://world-weather.ru/pogoda/russia/novosibirsk/</a>
      </p>
    </div>
    <script async type="text/javascript" charset="utf-8" src="https://world-weather.ru/wwinformer.php?userid=f69aeff3922466291723630c67b54dad"></script><br>
  </div>
    <!-- video -->
    <div  class="col-auto" id="vid">
      <div onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
        <img style="cursor: pointer;" alt="" id="bege" src="img/video1.jpg" /> 
      </div>

      <video width="300" height="150" controls id="thevideo" style="display: none;">
        <source src="img/Test.mp4" type="video/mp4">
      </video>
    </div>
</form><br>
    <!-- Three columns of text below the carousel -->
    <div class="row" id="load_nformation" class="card mb-3" >

    </div><!-- /.row -->
    <script src="jsj/js.js"></script>
    <script src="jsj/clok_index.js"></script>

    <?php
    include("footer.php");
    ?>