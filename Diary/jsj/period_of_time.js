 add_time();
load_table();
function  add_time(){
    let start_data= document.getElementById("start_data").value;
    let finish_data=document.getElementById("finish_data").value;

    $.ajax({
        url: 'add_period_of_time.php',
        method: 'post',
        dataType: 'html',
        data: { start_data: start_data ,finish_data:finish_data },
        success: function (data) {
        //   load_table();
                //alert(data);
                let d1 = JSON.parse(data);
                let s = "<table class='table'>" +
                  "<thead>" +
                  "<tr>" +
                  "<th scope='col'>№</th>" +
                  "<th scope='col'>задача</th>" +
                  "<th scope='col'>дата и время</th>" +
                  "<th scope='col'>выполнено/нет</th>" +
                  "<th scope='col'>категория</th>" +
                //   "<th scope='col'>кнопки действия</th>" +
                  "</tr>" +
                  "</thead>" +
                  "<tbody id='tableE'>";
                for (let i = 0; i < d1.length; i++) {
                //   if (d[i][5] == 0) {
                    s += "<tr>" +
                      "<th scope='row'>" + d1[i][0] + "</th>" +
                      "<td>" + d1[i][3] + "</td>" +
                      "<td>" + d1[i][4] + "</td>";
                      if(d1[i][5]!=1){
                     s+= "<td>Не выполнено</td>" ;}
                     else{
                        s+= "<td>Выполнено</td>" ;} 
                     
                    //   "<td><input type='checkbox' id='inlineCheckbox1' value='option1' disabled><br></td>" +
                      s+="<td>" + d1[i][7] + "</td>" +
                    //   "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d1[i][0] + ");'>Удалить событие</button>" +
                    //   "<a href='update_task_data.php?id=" + d1[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
                    //   "</td>" +
                      "</tr>";
                //   }
                //   else {
                //     s += "<tr>" +
                //       "<th scope='row'>" + d[i][0] + "</th>" +
                //       "<td>" + d[i][3] + "</td>" +
                //       "<td>" + d[i][4] + "</td>" +
                //       "<td><input type='checkbox' id='inlineCheckbox1' value='option1' checked disabled><br></td>" +
                //       "<td>" + d[i][7] + "</td>" +
                //       "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить событие</button>" +
                //       "<a href='update_task_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
                //       "</td>" +
                //       "</tr>";
                //   }
          
                }
                s += "</tbody> </table>"
                let task_history = document.getElementById("task_history");
                task_history.innerHTML = s;
        }
      });
    

}

function tab_time(){
  if(start_data!="" && finish_data!==""){
    load_table();
    start_data.value="";
    finish_data.value="";
  }
};

//  let Output=document.getElementById("Output");
//  Output.onclose=function(){
//    let start_data= document.getElementById("start_data").value;
//      let finish_data=document.getElementById("finish_data").value;
//    if(start_data!=0 && finish_data!=0){
//      Output.value="Вывод, за промежуток времени";
//      add_time();
//    }
//    else{
//      Output.value="Возврат"
//      load_table();
//    }
//  }