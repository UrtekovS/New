<?php
include("header.php");
?>
<link href="Css/style(t).css" rel="stylesheet">
<!-- Форма Редактирование задачь -->
<form onsubmit="return load_udate_task.php();">
  <div class="container">
    <div class="modal-body">
      <div>
      <p class="my_message" id="message_add_task1"></p>
      <p class="my_message" id="message_add_taskc1"></p>
        <div id="form_load_task">
          <label class="form-check-label">задача</label>
          <input type="text" id="task" class="form-control">
          <label class="form-check-label">дата и время</label>
          <input type="date" id="my_data" class="form-control">
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
       <input type="submit" class="btn btn-primary" value="Редактировать событие" id="submit_update_task" onclick="load_udate_task.php();return false;">
       <br>
       <a type="button" class="nav-link" id="return" href="diary.php">Вернуться!</a>
      </div>
    </div>
    </form>
    
    <script src="jsj/diary_tb.js"></script>
<?php
include("footer.php");
?>
