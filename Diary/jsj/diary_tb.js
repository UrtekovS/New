load_table();
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

function Category(id_categ, id_user) {
  let select = "";
  $.ajax({
    url: 'Category_bd.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
      //alert(data);
      let d = JSON.parse(data);
      // let select="<select id='my_select>";
      /*<select>
      <option value="1">mbmnn</option>
      <option value="2">mbmnn</option>
      <option value="3">mbmnn</option>
      </select>*/

      // for(let i=0; i<d.length; i++){
      //   if(d[i][0]==id_categ){
      //     select+="<option value='"+d[i][0]+"'>"+d[i][1]+"</option>"}
      //     else{
      //       select+="<option value='"+d[i][0]+"'>"+d[i][1]+"</option>";
      //     }
      //    } 
      //    select+="</select>"+
      //    "<button onclick='save_status("+id_ever+")'>Сохранить</button>";
      //    let select_status_id=document.getElementById("select_status_id");
      //    select_status_id.innerHTML=select;
    }
  });

}

function load_table() {

  $.ajax({
    url: 'load_table.php',
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
        "<th scope='col'>Задача</th>" +
        "<th scope='col'>Дата и время задачи</th>" +
        "<th scope='col'>Выполненна/не выполненна</th>" +
        "<th scope='col'>категория</th>" +
        "<th scope='col'>кнопки действия</th>" +
        "</tr>" +
        "</thead>" +
        "<tbody id='tableE'>";
      for (let i = 0; i < d.length; i++) {
        if (d[i][5] == 0) {
          s += "<tr>" +
            "<th scope='row'>" + d[i][0] + "</th>" +
            "<td>" + d[i][3] + "</td>" +
            "<td>" + d[i][4] + "</td>" +
            "<td><input type='checkbox' id='inlineCheckbox1' value='option1' checked disabled><br></td>" +
            "<td>" + d[i][7] + "</td>" +
            "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить событие</button>" +
            "<a href='update_task_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
            "</td>" +
            //"<button class='btn btn-primary' onclick='to_excel();' id='go_excel'>Выгрузить exel</button> "+
            "</tr>";
        }
        else {
          s += "<tr>" +
            "<th scope='row'>" + d[i][0] + "</th>" +
            "<td>" + d[i][3] + "</td>" +
            "<td>" + d[i][4] + "</td>" +
            "<td><input type='checkbox' id='inlineCheckbox1' value='option1' checked disabled><br></td>" +
            "<td>" + d[i][7] + "</td>" +
            "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить событие</button>" +
            "<a href='update_task_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
            "</td>" +
            //"<button class='btn btn-primary' onclick='to_excel();' id='go_excel'>Выгрузить exel</button> "+
            "</tr>";
        }

      }
      s += "</tbody> </table>"
      let history_table = document.getElementById("history_table");
      history_table.innerHTML = s;


    }
  });

}
function to_excel() {
  $(document).ready(function () {
    $("#history_table").table2excel({
      filename: "new.xls",
    });
  });
}

function delet_task(id_task) {
  $.ajax({
    url: 'delete_tasck.php',
    method: 'post',
    dataType: 'html',
    data: { id_task: id_task },
    success: function (data) {
      load_table();


    }
  });
}




function add_task() {
  var message_add_taskc = document.getElementById("message_add_taskc");
  var task = document.getElementById("task").value;
  var my_data = document.getElementById("my_data").value;
  // var itogi = document.getElementById("itogi").value;
  var name_categ = document.getElementById("kat").value;
  if (task == 0 || my_data == 0) {
    message_add_taskc.style.display = "none";
    message_add_notask.style.display = "block";
    message_add_notask.innerHTML = "Добавте товар и стоимость, категорию!";
  }
  else {
    message_add_notask.style.display = "none";

    $.ajax({
      url: 'add_task.php',
      method: 'post',
      dataType: 'html',
      data: { task: task, my_data: my_data, name_categ: name_categ },
      success: function (data) {
        //alert(data);
        load_table();
      }
    });
    document.getElementById("task").value = "";
    document.getElementById("my_data").value = "";
    // document.getElementById("itogi").value = "";
    document.getElementById("kat").value = "";


    message_add_taskc.style.display = "block";
    message_add_taskc.innerHTML = "Задача успешно добавлена!";

  }

}






