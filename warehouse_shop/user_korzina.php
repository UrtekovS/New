<?php
include("header.php");
?>


    <div id="list_tovar_korzina">
    </div>
  </div>
<form class="form-inline" id="zacaz">
  <div class="form-group mb-2">
  <div class="alert alert-danger" role="alert" id="message_zacaz"></div>
  <label for="staticEmail2"  id="summ" class="sr-only">Итоговая сумма заказа</label>
  <input disabled type="text" readonly class="form-control-plaintext" id="all_summ_korzina" value="0">
  </div>
  <button  type="submit" class="btn btn-primary mb-2" id="add_all_orders" >Оформить заказ</button>
</form> 
<br>

<script src="js/script.js"></script>
<script src="js/js5.js"></script>
<?php
include("footer.php");
?>