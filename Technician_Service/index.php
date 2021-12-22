<?php
include("header.php");
?>
<!-- clock_index -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2017/thooclock/jquery.thooClock.js"></script>
<link href="css/style.css" rel="stylesheet">
<!-- /clock index-->
<div class="container-fluid h-100">
  <div class="row align-items-center h-100">
    <div class="col-sm-12">
      <div class="row justify-content-center">
        <div class="col-12 text-center"> <!--размер -->
          <div class="container" id="clock_bodi">
            <div class="row" id="index_colok">

              <div class="col-md-6 col-md-offset-3">

                <div id="myclock"></div>

              </div>

            </div><!-- ./row -->
            >
            <!-- ./container -->

            <script>
              $(document).ready(function() {
                $('#myclock').thooClock({
                  size: $(document).width() / 1.4,
                  dialColor: '#fff',
                  dialBackgroundColor: 'transparent',
                  secondHandColor: '#F3A829',
                  minuteHandColor: '#e74c3c',
                  hourHandColor: '#8bad4e',
                  showNumerals: true,
                  brandText: 'BootstrapTema',
                  brandText2: 'Russia',
                });

              });
            </script>
            <!-- /clock -->
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
                    <img src="imge/stock/<?= $mas['imge'][0]; ?>">

                  </svg>

                  <div class="container">
                    <div class="carousel-caption text-start">
                      <h1><?= $mas['title'][0]; ?></h1>
                      <p><?= $mas['description'][0]; ?></p>

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
                      <h1><?= $mas['title'][1]; ?></h1>
                      <p><?= $mas['description'][1]; ?></p>

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
                      <h1><?= $mas['title'][2]; ?></h1>
                      <p><?= $mas['description'][2]; ?></p>

                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                    <img src="imge/stock/?=$mas['imge'][3];?>">
                  </svg>

                  <div class="container">
                    <div class="carousel-caption">
                      <h1><?= $mas['title'][3]; ?></h1>
                      <p><?= $mas['description'][3]; ?></p>

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
                      <h1><?= $mas['title'][4]; ?></h1>
                      <p><?= $mas['description'][4]; ?></p>

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
          </div>
          <div class="row justify-content-center" id="my_bren">
            <a><img class="my_brend"  class="col-12 text-center" src="imge/JPEG.jpg"></a>
          </div><br>

          <div class="container marketing">



            <!-- Three columns of text below the carousel -->
            <div class="row" id="load_products">

            </div><!-- /.row -->
          </div>
        </div>
      </div>
    </div>
  </div 
 <?php
 include("footer.php");
?>