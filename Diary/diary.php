<?php
include("header.php");
?>

<body>

  <!--Часы-->
  <link href="Css/style(t).css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->

  <div>
    <main class="container-fluid nightmode text-center" id="clock2">
      <time id="date" class="clocktext"> </time>

      <time id="time" class="clocktext"> <span> </span> </time>
    </main>
  </div>

  <!--За промижуток времени-->
  <link href="Css/style(t).css">
  <div class="peri"><h3>Вывод событий, за периуд времени</h3></div>

  <form class="row gy-2 gx-3 align-items-center">
    <tr>
      <div class="col-auto">
        <label class="form-check-labelz">Начало периуда</label><br>
        <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="start_data">
      </div>
      <div class="col-auto">
        <label class="form-check-labele">Окончание периуда</label>
        <div class="input-group">
          <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="finish_data"><br>
          <a class="navbar-brand" ></a><img class="my_brend" src="img/brend.jpg"></a>
        </div>
      </div>
      <div class="col-auto">
      
      <!-- <input type="button" class="btn btn-primary" value="Вывод, за промежуток времени " id="Output"> -->
       <button type="button" class="btn btn-primary" id="Output" onclick="add_time();">Вывод</button> 
      </div>
      <div class="col-auto">
       <button type="button" class="btn btn-primary" id="return" onclick="tab_time();">Назад</button> 
      </div>
  </form><br>
  <div class="pe" id="per_time"><h3>Ваша таблица целей, задачь, событий. Не чего не упусти!!!  </h3></div>
  <!--Таблица задачь-->
  <link href="Css/style(t).css" rel="stylesheet">

  <div id="history_table">
    
    
  </div>
  <br>
  <!-- <button class="btn btn-primary" onclick="to_excel();" id="go_excel">Выгрузить exel</button> -->
  
  <!-- Форма -->
  <h3 id="labe">Добавляем цели, задачи, события!!!</h3>
  <div>
    <div class="container">
      <div class="modal-body">
        <div>
          <p class="my_message" id="message_add_notask"></p>
          <p class="my_message" id="message_add_taskc"></p>
          <div id="form_load_task">
            <label class="form-check-label">задача</label>
            <input type="text" id="task" class="form-control">
            <label class="form-check-label">дата и время</label>
            <!-- календарь со временем -->
            <div class="form-group row">
              <div class="col-xs-10">
                <input class="form-control" type="datetime-local" value="2021-00-00T00:00:00" id="my_data">
              </div>
            </div>
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
  <script src="jsj/diary_tb.js"></script>
  <script src="jsj/period_of_time.js"></script>
  <script src = "jsj/jquery.table2excel.min.js"> </script>

</body>


</html>
<?php
include("footer.php");
?>