<?php
include("header.php");
?>

<body>

  <!--Часы-->
  <link href="css/clock_index.css">
  <link href="css/style(t).css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

  <div>
    <main class="container-fluid nightmode text-center" id="clock2">
      <time id="date" class="clocktext"> </time>

      <time id="time" class="clocktext"> <span> </span> </time>
    </main>
  </div>

  <!--За промижуток времени-->
  <!-- <link href="Css/style(t).css">
  <div class="peri"><h3>Вывод событий, за периуд времени</h3></div>

  <form class="row gy-2 gx-3 align-items-center">
    <tr>
      <div class="col-auto"> -->
        <!-- <label class="form-check-labelz">Начало периуда</label><br>
        <input class="form-control" type="datetime-local" value="2021-00-00T00:00" id="start_data">
      </div>
      <div class="col-auto">
        <label class="form-check-labele">Окончание периуда</label>
        <div class="input-group">
          <input class="form-control" type="datetime-local" value="2021-00-00T00:00" id="finish_data"><br>
          <a class="navbar-brand" ></a><img class="my_brend" src="img/brend.jpg"></a>
        </div>
      </div>
      <div class="col-auto">
       -->
      <!-- <input type="button" class="btn btn-primary" value="Вывод, за промежуток времени " id="Output"> -->
       <!-- <button type="button" class="btn btn-primary" id="Output" onclick="add_time();">Вывод</button> 
      </div>
      <div class="col-auto">
       <button type="button" class="btn btn-primary" id="return" onclick="tab_time();">Назад</button> 
      </div>
  </form><br> -->
  <!-- <div class="pe" id="per_time"><h3>Прайс</h3></div> -->
  <!--Таблица прайс-->
  <!-- <link href="Css/style(t).css" rel="stylesheet"> -->
  <h3><div id="prais">Прайс</div></h3>
  <div id="history_table">
    
    
  </div>
  <br>
  <!-- <button class="btn btn-primary" onclick="to_excel();" id="go_excel">Выгрузить exel</button> -->
  
  <!-- Форма -->
  <h3 id="labe">Добавляем сервис</h3>
  <div>
    <div class="container">
      <div class="modal-body">
        <div>
          <p class="my_message" id="message_add_notask"></p>
          <p class="my_message" id="message_add_taskc"></p>
          <div id="form_load_task">
            <label class="form-check-label">Название</label>
            <input type="text" id="task" class="form-control">
            <label class="form-check-label">Стоимость</label>
            <input type="text" id="pricew" class="form-control">   
            <label class="form-check-label">Фото</label>
            <input type="text" id="foto" class="form-control">          
            <label class="form-check-label" disabled>Категория</label>
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
          <input type="button" class="btn btn-primary" value="Добавить событие" id="insert_task" onclick="add_task();">
          <!-- <input type="submit" class="btn btn-primary" value="сохронить" id="submit_load_task" disabled > -->
        </div>
      </div>
      <!-- onclick="add_task();" -->
    </div>
  </div>
  <script src="js/admin_list.js"></script>
  
  <script src = "js/jquery.table2excel.min.js"> </script>

</body>


</html>
<?php
include("footer.php");
?>