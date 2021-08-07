<?php
include("header.php");
//session_start();

?>

<body>
  <script src="http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> </script>
  <!--Часы-->
  <link href="Css/style(t).css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

  <div>
    <main class="container-fluid nightmode text-center" id="clock2">
      <time id="date" class="clocktext"> </time>

      <time id="time" class="clocktext"> <span> </span> </time>
    </main>
  </div>

  <!--За промижуток времени-->
  <link href="Css/style(t).css">
  <link href="Css/style.css">
  <div class="peri">

  </div>
  <div class="col-auto">
    <a class="navbar-brand"></a><img class="my_brend" src="imge/stock/320.png"></a>
  </div><br>
  <form class="row gy-2 gx-3 align-items-center">
    <h3 id="lables">Вывод продаж, за периуд времени</h3>
    <tr>
      <div class="col-auto">
        <label class="form-check-labelz">Начало периуда</label><br>
        <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="start_data">
      </div>
      <div class="col-auto">
        <label class="form-check-labele">Окончание периуда</label>
        <div class="input-group">
          <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="finish_data"><br>
        </div>
      </div>
      <div class="col-auto">

        <!-- <input type="button" class="btn btn-primary" value="Вывод, за промежуток времени " id="Output"> -->
        <button type="button" class="btn btn-primary" id="Output" onclick="add_time();">Вывод</button>
      </div>
      <div class="col-auto">
        <button type="button" class="btn btn-primary" id="return" onclick="tab_time();">Назад</button>
      </div>
      <div class="col-auto">
        <button class="btn btn-primary" id="Exel" onclick="to_excel();">Выгрузить exel</button>
        <button type="button" class="btn btn-primary" id="prais" onclick="table_prais();">Таблица, Товар</button>
      </div>

  </form><br>

  <div class="col-auto">
    <h4 id="summa" class="libale">Итоговая сумма покупок за периуд времяни </h4>
    <input disabled type="text" readonly class="form-control-plaintext" id="all_summa_zayvoc" value="0">

  </div><br>
  <div class="pe" id="pere_prais">
    <h3>Товар:</h3>

  </div>

  <div class="pe" id="pere_time">
    <h3>Таблица продаж:</h3>
    <h4 id="summa1" class="libale">Итоговая сумма всех продаж</h4><input disabled type="text" readonly class="form-control-plaintext" id="order_summa_zayvoc" value="0">
  </div>

  <div class="tabel" id="zacaz_history">
    <td><input type="checkbox" id="inlineCheckbox1" value="true" disabled><br></td>
  </div>
  <br>
  <!-- таблица прайс -->
  <div id="table_prais">


  </div>
  <br>
  <!-- форма добавления товара        -->
  <label class="form-check-label" >Категория</label>
  <div id="select_status_id">
    <select class="form-select" id="name_categ">
      <option value="1">mbmnn</option>
      <option value="2">mbmnn</option>
      <option value="3">mbmnn</option>
      <option value="4">mbmnn</option>
      <option value="5">mbmnn</option>
    </select>
    <!-- <button onclick='save_status()'>Сохранить</button> -->
  </div>
  </div>
  </div>
  <br>
  <div>
    <input type="button" class="btn btn-primary" value="Добавить товар" id="insert_task" onclick="add_task();">

  </div>
  </div>
  <!-- onclick="add_task();" -->
  </div>
  </div>

</body>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/load_table_product.js"></script>
<script src="js/period_of_time.js"></script>
<script src="js/diary_tb.js"></script>

</html>
<?php
include("footer.php");
?>