<?php
include("header.php");
?>
<div class="container-fluid h-100">
  <div class="row align-items-center h-100">
    <div class="col-sm-12">
      <div class="row justify-content-center">
        <div class="col-12 text-center">   <!--элемент, и его ширина == col-12-->

          <!--Часы-->

          <div class="container" id="bodi1">
            <p class="lead text-center" id="labls">Цените время! </p>
            <div class="row">
              <h3 class="card-title text-center" id="adm_clock">
                <div class="d-flex">
                  <a><span class="badge hours" id="hsu"></span></a> :
                  <a><span class="badge min" id="mine"></span></a> :
                  <a><span class="badge sec" id="sece"></span></a>
                </div>
              </h3>
            </div><!-- /.flexbox clock row -->
            <script>
              $(document).ready(function() {
                setInterval(function() {
                  var hours = new Date().getHours();
                  $(".hours").html((hours < 10 ? "0" : "") + hours);
                }, 1000);
                setInterval(function() {
                  var minutes = new Date().getMinutes();
                  $(".min").html((minutes < 10 ? "0" : "") + minutes);
                }, 1000);
                setInterval(function() {
                  var seconds = new Date().getSeconds();
                  $(".sec").html((seconds < 10 ? "0" : "") + seconds);
                }, 1000);
              });
            </script>
            <!-- Table praise -->
            <h3>
              <div id="prais">Прайс</div>
            </h3>
            <div id="history_table">


            </div>
            <br>



            <!-- Форма -->
            <div>
              <h3 id="lab">Добавить сервис</h3>
            </div>

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
                        <select class="form-select" id="name_cat">
                          <option value="1">mbmnn</option>
                          <option value="2">mbmnn</option>
                          <option value="3">mbmnn</option>
                          <option value="4">mbmnn</option>
                          <option value="5">mbmnn</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div>
                    <input type="button" class="btn btn-primary" value="Добавить сервис" id="insert_task" onclick="add_task();">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="js/admin_list.js"></script>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Часы -->


<script src="js/admin_list.js"></script>

<script src="js/jquery-3.6.0.min.js"></script>
<!-- <script src="js/diary_tb.js"></script> -->

<?php
include("footer.php");
?>