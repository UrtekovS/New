load_table_prais();
Load_categiry_form_add();

function Load_categiry_form_add() {
  let select = "";
  $.ajax({
    url: 'Load_categiry_bd.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
      //alert(data);
      let d = JSON.parse(data);
      select = "<select class='form-select' id='kat'>";
      /*<select>
      <option value="1">mbmnn</option>
      <option value="2">mbmnn</option>
      <option value="3">mbmnn</option>
      </select>*/

      for (let i = 0; i < d.length; i++) {
        select += "<option value='" + d[i][0] + "'>" + d[i][1] + "</option>";
      }


      select += "</select>";

      let select_status_id = document.getElementById("select_status_id");
      select_status_id.innerHTML = select;
    }
  });

}



function load_table_prais() {

  $.ajax({
    url: 'load_table_prais.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
      //alert(data);
      let d = JSON.parse(data);
      let s = "<table class='table' id='task_history'>" +
        "<thead>" +
        "<tr>" +
        "<th scope='col'>№</th>" +
        "<th scope='col'>Название</th>" +
        "<th scope='col'>стоимость</th>" +
        "<th scope='col'>Фото</th>" +
        "<th scope='col'>категория</th>" +
        "<th scope='col'>кнопки действия</th>" +
        "</tr>" +
        "</thead>" +
        "<tbody id='tableE'>";
      for (let i = 0; i < d.length; i++) {
        if (d[i][5] == 0) {
          s += "<tr>" +
            "<th scope='row'>" + d[i][0] + "</th>" +
            "<td>" + d[i][1] + "</td>" +
            "<td>" + d[i][2] + "</td>" +
            "<td>" + d[i][3] + "</td>" +
            "<td>" + d[i][6] + "</td>" +
            "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delete_prais(" + d[i][0] + ");'>Удалить событие</button>" +
            "<a href='update_prais_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
            "</td>" +
            "</tr>";
        }
        else {
          s += "<tr>" +
            "<th scope='row'>" + d[i][0] + "</th>" +
            "<td>" + d[i][1] + "</td>" +
            "<td>" + d[i][2] + "</td>" +
            "<td>" + d[i][3] + "</td>" +
            "<td>" + d[i][6] + "</td>" +
            "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delete_prais(" + d[i][0] + ");'>Удалить событие</button>" +
            "<a href='update_prais_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
            "</td>" +
            "</tr>";
        }

      }
      s += "</tbody> </table>"
      let history_table = document.getElementById("history_table");
      history_table.innerHTML = s;


    }
  });

}
// function to_excel() {
//   $(document).ready(function () {
//     $("#task_history").table2excel({
//       filename: "new.xls",
//     });
//   });
// }

function delete_prais(id) {
  $.ajax({
    url: 'delete_prais.php',
    method: 'post',
    dataType: 'html',
    data: { id: id },
    success: function (data) {
      //alert (data);
      load_table_prais();


    }
  });
}




function add_task() {
  var message_add_taskc = document.getElementById("message_add_taskc");
  var task = document.getElementById("task").value;
  var pricew= document.getElementById("pricew").value;
   var foto = document.getElementById("foto").value;
  var name_categ = document.getElementById("kat").value;
  if (task == 0 || pricew == 0) {
    message_add_taskc.style.display = "none";
    message_add_notask.style.display = "block";
    message_add_notask.innerHTML = "Добавте название и стоимость, категорию!";
  }
  else {
    message_add_notask.style.display = "none";

    $.ajax({
      url: 'add_prais.php',
      method: 'post',
      dataType: 'html',
      data: { task: task, pricew: pricew,foto:foto, name_categ: name_categ },
      success: function (data) {
        //alert(data);
        load_table_prais();
      }
    });
    document.getElementById("task").value = "";
    document.getElementById("pricew").value = "";
     document.getElementById("foto").value = "";
    document.getElementById("kat").value = "";


    message_add_taskc.style.display = "block";
    message_add_taskc.innerHTML = "успешно добавлена!";

  }

}






