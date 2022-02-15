<?php
include("header.php");
?>

<link href="css/style.css" rel="stylesheet">

<!-- <body> -->

<!-- <main id="mains"> -->
<span id="message_box"></span>

<?php
include("connect.php");
$s = "select * from stock ORDER by `data1` DESC";
$q = mysqli_query($link, $s);
$mas = [
  "imge" => [],
  "title" => [],
  "description" => []
];
for ($i = 0; $i < 5; $i++) {
  $row = mysqli_fetch_array($q);
  $mas['imge'][$i] = $row[5];
  $mas['title'][$i] = $row[1];
  $mas['description'][$i] = $row[2];
}

?>
<div class="container" id="contin">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="imge/stock/<?= $mas['imge'][0]; ?>">

        </svg>

        <div class="container">
          <div class="carousel-caption text-start">
          <div class="camp-inf">
          <div class="sec-tl text-center">
            <h1 class="waie"><?= $mas['title'][0]; ?></h1>
            </div>
            <p class="text-center"><?= $mas['description'][0]; ?></p>          
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="imge/stock/<?= $mas['imge'][1]; ?>">
        </svg>

        <div class="container">
          <div class="carousel-caption">
          <div class="camp-inf">
          <div class="sec-tl text-center">
            <h1 class="waie"><?= $mas['title'][1]; ?></h1>
            </div>
            <p class="text-center"><?= $mas['description'][1]; ?></p>
          </div>
        </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="imge/stock/<?= $mas['imge'][2]; ?>">
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
          <div class="camp-inf">
          <div class="sec-tl text-center">
            <h1 class="waie"><?= $mas['title'][2]; ?></h1>
            </div>
            <p class="text-center"><?= $mas['description'][2]; ?></p>
          </div>
        </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="imge/stock/<?= $mas['imge'][3]; ?>">
        </svg>

        <div class="container">        
          <div class="carousel-caption">
          <div class="camp-inf">
          <div class="sec-tl text-center">
            <h1 class="waie"><?= $mas['title'][3]; ?></h1>
            </div>
            <p class="text-center"><?= $mas['description'][3]; ?></p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <img src="imge/stock/<?= $mas['imge'][4]; ?>">
        </svg>

        <div class="container">       
          <div class="carousel-caption text-end">
          <div class="camp-inf">
          <div class="sec-tl text-center">
            <h1 class="waie"><?= $mas['title'][4]; ?></h1>
            </div>
            <p class="text-center"><?= $mas['description'][4]; ?></p></div>
          </div>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <!-- часы -->
  <link href="css/clock.css" rel="stylesheet">
  <!-- /clock -->
  <div class="sec-tl text-center">
    <span class="theme-clr">Цените своё время!!!</span>
    <h2 itemprop="headline">Делаем быстро и <span class="theme-clr">Качественно</span></h2>
  </div><!-- Sec Title -->
  <div class="srv-wrp remove-ext7">


    <div class="camp-wrp remove-ext5" id="load_products">
      <div class="row">

      </div>
    </div><!-- Services Wrap -->
    <div class="row">
      <span class="theme-clr">&nbsp</span>
      <span class="theme-clr">&nbsp</span>
      <span class="theme-clr">&nbsp</span>
    </div>
    <!-- конец карточек -->
  </div>
  <br />
  <!-- clock1-s -->

  <!-- CLOCK1-finish -->
  <div class="row">

    <section>
      <div class="gap black-layer opc8">
        <div class="fixed-bg" style="background-image: url(assets/images/para-new.png);"></div>
        <div class="container">
          <div class="shrt-fcts-wrp">
            <div class="row">

              <div class="col-md-5 col-sm-12 col-lg-5">
                <img class="facts-mockup animated bounce" src="assets/images/Эл-removebg-preview.png" alt="mockup-image">
              </div>
              <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="fcts-wrp">
                  <div class="sec-tl">
                    <span>Youth Fire Stop Prevention & Intervention Program.</span>
                    <h2 itemprop="headline">Few Facts About Naar</h2>
                  </div>
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
          </div>
        </div>
      </div>

    </section>
  </div>
</div>

<script src="js/js.js"></script>

<?php
include("footer.php");
?>