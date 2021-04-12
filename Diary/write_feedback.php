<?php
include("header.php");

?>
<!-- Moda3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Отзыв</h5>
            <button type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form onsubmit="return write_feedback();">
              <p class="my_message" id="message_write_feedback"></p>
              <div class="alert alert-danger" role="alert" id="message_write_feedback2">
              </div>
              <div id="write_feedback">
                <label class="form-check-label">Имя</label>
                <input type="text" id="name_inf" class="form-control" required>
                <label class="form-check-label">Информация</label>
                <input type="text" id="informat" class="form-control">
                <label class="form-check-label">Фото</label>
                <input type="text" id="photo" class="form-control">
                </select>
                <br>
                <input type="submit" class="btn btn-primary" value="Отзыв" id="submit_write_feedback">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>






<?php
include("footer.php")

?>