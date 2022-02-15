<?php
include("header.php");
?>

<body>
<link href="css/catalog.css" rel="stylesheet">     

<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="row" id="detalils_products">

  </div>
</div>

<main>  
  <div class="container-fluid" id="bodi2">
    <div class="sec-tl text-center">
      <h2 itemprop="headline">Делаем быстро и <span class="theme-clr">Качественно</span></h2>
    </div><!-- Sec Title -->
  <!-- меню каталога -->
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column" id="ul_menu">
          </ul>
        </div>
      </nav>
      <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="camp-wrp remove-ext5">
        <div class="row" id="load_products">

        </div>
      </div>
      </div><!-- /.row -->
    </div> <!-- конец карточек -->
  </div>
</main>
</body>
<script src="js/js3.js"></script>
<script src="js/pisk.js"></script>

<?php
include("footer.php");
?>