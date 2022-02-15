<?php
include("header.php");
?>
<link href="Css/style(t).css" rel="stylesheet">

<div class="container" id="up_prais">
<form>  
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
              <select class="form-select" id="name_cat">
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
       <input type="button" class="btn btn-success" value="Редактировать событие" id="submit_update_prais" >
       <br>
      </div>
  </div>
</form>
</div>
    
    <script src="js/update_prais.js"></script>
    <script src="js/admin_list.js"></script>
<?php
include("footer.php");
?>
