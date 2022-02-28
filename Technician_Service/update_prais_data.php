<?php
include("header.php");

?>
<link href="Css/style(t).css" rel="stylesheet">
<div class="sec-tl text-center">
 <h4 itemprop="headline"><span class="theme-clr">Редактор сервиса</span></h4>
</div>


<div class="container" id="up_prais">
<form>  
    <div class="modal-body">
    <div>
          <div id="form_load_prais">
            <p class="text-lift">Название</p>
            <input type="text" id="names" class="form-control">
            <p class="text-lift">Стоимость</pp>
            <input type="text" id="prices" class="form-control">   
            <p class="text-lift">Фото</p>
            <input type="text" name="file"  id="photos" class="form-control" disabled>          
            <p class="text-lift" disabled>Категория</p>
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
       <input class='theme-btn brd-rd5' type="button" name="update" value="Редактировать" id="submit_update_prais" >
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
