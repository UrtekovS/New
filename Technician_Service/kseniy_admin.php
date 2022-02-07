<?php
include("header.php");
//session_start();

?>


<body>
  
<div class="container"  class="text-centr"  id="kseniy">

  <link href="Css/style(t).css" rel="stylesheet">
 <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />  -->
 <script src = "http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> </script>
 


  <!--За промижуток времени-->
  <link href="Css/style(t).css" rel="stylesheet">
  <link href="Css/style.css" rel="stylesheet">
  <div class="peri">
    
  </div>
  <!-- <div class="col-auto">
      <p class="text-center"><img class="my_brend"  src="imge/JPEG.jpg"></p>
  </div><br> -->
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
      <a class='btn btn-success' href='admbn_list.php' id="service" role='button' >Добавить сервис</a>
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
</body >        
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/diary_tb.js"></script>
  <script src="js/period_of_time.js"></script>
  <script src="js/jquery.table2excel.min.js"> </script>



<?php
include("footer.php");
?>