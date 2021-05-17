function poisck(){
    var poisk=document.getElementById("poisk").value;
    $.ajax({
        url: 'poisck_bd.php',
        method: 'post',
        dataType: 'html',
        data: {poisk:poisk},
        success: function (data) {
            //alert(data);
            let d = JSON.parse(data);
      let s = "<table class='table'id='task_history'>" +
        "<thead>" +
        "<tr>" +
        "<th scope='col'>№</th>" +
        "<th scope='col'>задача</th>" +
        "<th scope='col'>дата и время</th>" +
        "<th scope='col'>выполнено/нет</th>" +
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
            "<td><input type='checkbox' id='inlineCheckbox1' value='option1' disabled><br></td>" +
            "<td>" + d[i][7] + "</td>" +
            "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить событие</button>" +
            "<a href='update_task_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
            "</td>" +
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
            "</tr>";
        }

      }
      s += "</tbody> </table>"
      let task_history = document.getElementById("task_history");
      task_history.innerHTML = s;
      document.getElementById("poisk").value="";
        }
    }); 
    
}