
<?php
include("header.php");
?>
<body>
<link href="css/karzina.css" rel="stylesheet">
<div class="wrapper"></div>
<div class="form">
  <form action="#"  class="form-body" id="form">
  <h1 class="form_title">Отправка данных на почту</h1>
  <div class="form_item">
    <label for="formName" class="form_label">Имя*:</label>
   <input id="formName" type="text" name="name" class="form_input">
  </div>
  <div class="form_item">
  <label for="formEmail" class="form_label">E-maij*:</label>
   <input id="formEmail" type="text" name="Email" class="form_input">
  </div>
  <div class="form_item">
    <div class="form_label">Левша или правша?</div>
    <div class="options">
      <div class="options_item">
      <input id="formRightHended" type="radio" value="right" name="hend" class="options_input">
      <label for="formRightHended" class="options_label">Правша</label>
      </div>
      <div class="options_item">
      <input id="formLaftHended" checked type="radio" value="laft" name="hend" class="options_input">
      <label for="formLaftHended" class="options_label">Левша</label>
      </div>
    </div>
    </div>
    <div class="form_item">
      <label for="formMessage" class="form_label">Сообщение</label>
      <textarea name="message" id="formMessage" class="form_item"></textarea>
      </div>
      <div class="form_item">
      <div class="form_label">Возраст</div>
      <select name="age" class="select">
        <option value="от 18 до 30" selected="selected">Молодой</option>
        <option value="от 31 до 50" >Зрелый</option>
        <option value="от 51 до 80" >Супер зрелый</option>
      </select>
      </div>
      <div class="form_item">
      <div class="form_label">Прикрепить фото</div> 
      <div class="faile">
        <div class="faile_item">
          <input  id="formImage" accept=".jpg, jepg, png, gif" type="faile" name="image" class="faile_input">
          <div class="faile_button">Выбрать</div>
        </div>
        <div class="faile_preview"></div>
      </div>  
      </div>
      <div class="foe_item">
        <div class="checkbox">
          <input type="checkbox" checked name="agreement" id="formAgreement" class="checkbox_input">
          <label for="formAgreement"class="checkbox_label" >Я даю своё согласие на обработку личных данных</label>
        </div>
      </div>
      <button type="submit" class="form_button" >Отправка</button>
  </form>
</div> 
</div>
</body>
</html>
<?php
include("footer.php");
?>