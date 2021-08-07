//add_time();
load_table_zacaz();
function  add_time(){
    let start_data= document.getElementById("start_data").value;
    let finish_data=document.getElementById("finish_data").value;
    let ptriud2=document.getElementById('ptriud2');
    ptriud2.style.display="block";
    $.ajax({
        url: 'add_period_of_time.php',
        method: 'post',
        dataType: 'html',
        data: { start_data: start_data ,finish_data:finish_data },
        success: function (data) {
        
                //alert(data);
                let d1 = JSON.parse(data);
      let s="<table class='table' id='task_history'>"+
      "<thead>"+
        "<tr>"+
        "<th scope='col'>Имя заказчика</th>"+
        "<th scope='col'>Сумма</th>"+
        "<th scope='col'>Наименование заявки</th>"+
        "<th scope='col'>Адрес для выезда</th>"+
        "<th scope='col'>Телефон</th>"+
        "<th scope='col'>Дата и время удобное заказчику</th>"+
        "<th scope='col'>Дата заявки</th>"+
        "</tr>"+
      "</thead>"+
      "<tbody id='tableE'>";

      for (let i = 0; i < d1.length; i++){
        if(d1[i][3]!==0){
          s+="<tr>"+
          "<th scope='row'>"+d1[i][1]+"</th>"+
          "<td>"+d1[i][9]+"</td>"+          
          "<td>"+d1[i][8]+"</td>"+
          "<td>"+d1[i][2]+"</td>"+
          "<td>"+d1[i][3]+"</td>"+
          "<td>"+d1[i][4]+"</td>"+
           "<td>"+d1[i][5]+"</td>"+
          "<td><button class='btn btn-primary' type='button' id='true' onclick='delet_task(" + d1[i][0] + ");'>Удалить заявку</button>" +
        "</tr>";
        }
        else{
          s+="<tr>"+
          "<th scope='row'>"+d1[i][1]+"</th>"+
          "<td>"+d1[i][9]+"</td>"+          
          "<td>"+d1[i][8]+"</td>"+
          "<td>"+d1[i][2]+"</td>"+
          "<td>"+d1[i][3]+"</td>"+
          "<td>"+d1[i][4]+"</td>"+
          "<td>"+d1[i][5]+"</td>"+
          "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d1[i][0] + ");'>Удалить заявку</button>" +
        "</tr>";
        }
      }
      s+=" </tbody></table>"
      let zacaz_history=document.getElementById('zacaz_history');
      zacaz_history.innerHTML=s;
      
        
      $.ajax({
        url: 'add_period_of_cumm.php',
        method: 'post',
        dataType: 'html',
        data: {start_data: start_data ,finish_data:finish_data},
        success: function (data) {
           let summ= JSON.parse(data);
           //alert(data);
          let all_summa_zayvoc=document.getElementById("all_summa_periyd");
          all_summa_zayvoc.value=summ;
          if(data!=""){
            let pere_time=document.getElementById('pere_time');
            pere_time.style.display="none";
            
          }
        }
        
      });
        }



      });
    

}

function tab_time(){
  if(start_data!="" && finish_data!==""){
    load_table_zacaz();
    start_data.value="";
    finish_data.value="";
    all_summa_zayvoc.value= 0;
    load_table_zacaz();
    pere_time.style.display="block";
    ptriud2.style.display="none";
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