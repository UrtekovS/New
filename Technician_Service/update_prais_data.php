<?php
include("header.php");
?>
<link href="Css/style(t).css" rel="stylesheet">
<!-- <div id="task_historye1">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">№</th>
          <th scope="col">задача</th>
          <th scope="col">дата и время</th>
          <th scope="col">выполнено/нет</th>
          <th scope="col">категория</th>
          
        </tr>
      </thead>
      <tbody id="tableE">
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td>
          <td>Выпадающий список</td>
          <td>
          <td><button class="btn btn-primary" type="button" id="cnopDe" onclick="update_task();">Редактировать событие</button>
            <a href="diary.php" class="btn btn-primary" type="button" id="updater1" >Вернуться!</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div> -->
  <!-- Форма -->
<!-- Форма Редактирование задачь -->
<form>
  <div class="container">
    <div class="modal-body">
    <div>
          <!-- <p class="my_message" id="message_add_notask"></p>
          <p class="my_message" id="message_add_taskc"></p> -->
          <div id="form_load_prais">
            <label class="form-check-label">Название</label>
            <input type="text" id="names" class="form-control">
            <label class="form-check-label">Стоимость</label>
            <input type="text" id="prices" class="form-control">   
            <label class="form-check-label">Фото</label>
            <input type="text" id="photos" class="form-control">          
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
       <input type="button" class="btn btn-primary" value="Редактировать событие" id="submit_update_prais" >
       <br>
      </div>
  </div>
</div>
</form>
    
    <script src="js/update_prais.js"></script>
    <script src="js/admin_list.js"></script>
<?php
include("footer.php");
?>
